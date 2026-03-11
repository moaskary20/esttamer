import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import '../utils/colors.dart';
import '../utils/html_utils.dart';
import '../services/api_service.dart';
import '../services/session_service.dart';
import 'payment_screen.dart';

class CourseDetailScreen extends StatefulWidget {
  final String courseId;
  final String? courseTitle;

  const CourseDetailScreen({Key? key, required this.courseId, this.courseTitle}) : super(key: key);

  @override
  State<CourseDetailScreen> createState() => _CourseDetailScreenState();
}

class _CourseDetailScreenState extends State<CourseDetailScreen> with TickerProviderStateMixin {
  Map<String, dynamic>? _course;
  bool _loading = true;
  String? _error;
  String? _authToken;
  bool _descExpanded = false;
  bool _enrolling = false;
  late AnimationController _fadeController;

  @override
  void initState() {
    super.initState();
    _fadeController = AnimationController(vsync: this, duration: Duration(milliseconds: 500));
    _loadCourse();
  }

  @override
  void dispose() {
    _fadeController.dispose();
    super.dispose();
  }

  Future<void> _loadCourse() async {
    try {
      _authToken = await SessionService.getAuthToken();
      final course = await ApiService.fetchCourseDetails(
        widget.courseId,
        authToken: _authToken,
      );
      if (mounted) {
        setState(() {
          _course = course;
          _loading = false;
        });
        _fadeController.forward();
      }
    } catch (e) {
      if (mounted) {
        setState(() {
          _error = e.toString();
          _loading = false;
        });
      }
    }
  }

  bool get _isFree => _course?['is_free_course']?.toString() == '1';
  bool get _isPurchased => (_course?['is_purchased'] ?? 0) == 1;

  Future<void> _handleEnrollFree() async {
    if (_authToken == null || _authToken!.isEmpty) {
      ScaffoldMessenger.of(context).showSnackBar(
        SnackBar(content: Text('يجب تسجيل الدخول أولاً', style: GoogleFonts.tajawal()), backgroundColor: Colors.red.shade700),
      );
      return;
    }
    setState(() => _enrolling = true);
    try {
      final result = await ApiService.enrollFreeCourse(widget.courseId, _authToken!);
      if (mounted) {
        if (result['status'] == 'success') {
          ScaffoldMessenger.of(context).showSnackBar(
            SnackBar(content: Text('تم التسجيل بنجاح! 🎉', style: GoogleFonts.tajawal()), backgroundColor: AppColors.primaryGreen),
          );
          _loadCourse(); // Refresh to update is_purchased
        } else {
          ScaffoldMessenger.of(context).showSnackBar(
            SnackBar(content: Text(result['message'] ?? 'حدث خطأ', style: GoogleFonts.tajawal()), backgroundColor: Colors.red.shade700),
          );
        }
      }
    } catch (e) {
      if (mounted) {
        ScaffoldMessenger.of(context).showSnackBar(
          SnackBar(content: Text('حدث خطأ في التسجيل', style: GoogleFonts.tajawal()), backgroundColor: Colors.red.shade700),
        );
      }
    }
    if (mounted) setState(() => _enrolling = false);
  }

  void _handleBuyCourse() {
    if (_authToken == null || _authToken!.isEmpty) {
      ScaffoldMessenger.of(context).showSnackBar(
        SnackBar(content: Text('يجب تسجيل الدخول أولاً', style: GoogleFonts.tajawal()), backgroundColor: Colors.red.shade700),
      );
      return;
    }
    Navigator.push(
      context,
      MaterialPageRoute(
        builder: (_) => PaymentScreen(
          courseId: widget.courseId,
          authToken: _authToken!,
          courseTitle: _course?['title'] ?? 'الدورة',
        ),
      ),
    ).then((_) => _loadCourse()); // Refresh after return
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.white,
      body: _loading
          ? Center(child: CircularProgressIndicator(color: AppColors.primaryGreen))
          : _error != null
              ? _buildError()
              : _buildContent(),
    );
  }

  Widget _buildError() {
    return Center(
      child: Padding(
        padding: const EdgeInsets.all(32),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Icon(Icons.error_outline, size: 64, color: Colors.grey[400]),
            SizedBox(height: 16),
            Text('تعذّر تحميل الدورة', style: GoogleFonts.tajawal(fontSize: 18, fontWeight: FontWeight.bold)),
            SizedBox(height: 12),
            ElevatedButton.icon(
              onPressed: () {
                setState(() { _loading = true; _error = null; });
                _loadCourse();
              },
              icon: Icon(Icons.refresh),
              label: Text('إعادة المحاولة', style: GoogleFonts.tajawal()),
              style: ElevatedButton.styleFrom(backgroundColor: AppColors.primaryGreen),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildContent() {
    final c = _course!;
    return CustomScrollView(
      slivers: [
        // ── HERO SLIVER APP BAR ──
        _buildHeroAppBar(c),
        SliverToBoxAdapter(
          child: FadeTransition(
            opacity: _fadeController,
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                // ── PRICE & ACTION BAR ──
                _buildActionBar(c),
                // ── QUICK STATS ──
                _buildQuickStats(c),
                Divider(height: 1, color: Colors.grey[200]),
                // ── DESCRIPTION ──
                _buildSection('عن الدورة', _buildDescription(c)),
                // ── WHAT YOU'LL LEARN ──
                if (c['outcomes'] != null && (c['outcomes'] as List).isNotEmpty)
                  _buildSection('ماذا ستتعلم', _buildOutcomes(c)),
                // ── REQUIREMENTS ──
                if (c['requirements'] != null && (c['requirements'] as List).isNotEmpty)
                  _buildSection('المتطلبات', _buildRequirements(c)),
                // ── COURSE INCLUDES ──
                if (c['includes'] != null && (c['includes'] as List).isNotEmpty)
                  _buildSection('تشمل الدورة', _buildIncludes(c)),
                // ── COURSE CONTENT (SECTIONS) ──
                if (c['sections'] != null && (c['sections'] as List).isNotEmpty)
                  _buildSection('محتوى الدورة', _buildSections(c)),
                // ── INSTRUCTOR ──
                _buildSection('المدرب', _buildInstructor(c)),
                SizedBox(height: 100), // space for bottom button
              ],
            ),
          ),
        ),
      ],
    );
  }

  // ═══════════════════════ HERO APP BAR ═══════════════════════
  Widget _buildHeroAppBar(Map<String, dynamic> c) {
    final thumbnail = c['thumbnail']?.toString() ?? '';
    return SliverAppBar(
      expandedHeight: 260,
      pinned: true,
      backgroundColor: AppColors.primaryGreen,
      leading: IconButton(
        icon: Container(
          padding: EdgeInsets.all(6),
          decoration: BoxDecoration(color: Colors.black38, shape: BoxShape.circle),
          child: Icon(Icons.arrow_back, color: Colors.white, size: 20),
        ),
        onPressed: () => Navigator.pop(context),
      ),
      flexibleSpace: FlexibleSpaceBar(
        background: Stack(
          fit: StackFit.expand,
          children: [
            thumbnail.isNotEmpty
                ? Image.network(
                    thumbnail.startsWith('http') ? thumbnail : 'https://esttamer.com/$thumbnail',
                    fit: BoxFit.cover,
                    errorBuilder: (_, __, ___) => Container(
                      decoration: BoxDecoration(gradient: AppColors.primaryGradient),
                      child: Icon(Icons.play_circle_outline, size: 80, color: Colors.white54),
                    ),
                  )
                : Container(
                    decoration: BoxDecoration(gradient: AppColors.primaryGradient),
                    child: Icon(Icons.play_circle_outline, size: 80, color: Colors.white54),
                  ),
            // Dark gradient overlay
            Container(
              decoration: BoxDecoration(
                gradient: LinearGradient(
                  begin: Alignment.topCenter,
                  end: Alignment.bottomCenter,
                  colors: [Colors.transparent, Colors.black.withAlpha(180)],
                ),
              ),
            ),
            // Title + Instructor at bottom
            Positioned(
              bottom: 16,
              left: 16,
              right: 16,
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Text(
                    c['title'] ?? '',
                    style: GoogleFonts.tajawal(color: Colors.white, fontSize: 20, fontWeight: FontWeight.bold),
                    maxLines: 2,
                    overflow: TextOverflow.ellipsis,
                  ),
                  SizedBox(height: 6),
                  Row(
                    children: [
                      if (c['instructor_name'] != null) ...[
                        Icon(Icons.person, color: Colors.white70, size: 16),
                        SizedBox(width: 4),
                        Text(c['instructor_name'], style: GoogleFonts.tajawal(color: Colors.white70, fontSize: 13)),
                        SizedBox(width: 16),
                      ],
                      _buildStars((c['rating'] ?? 0).toInt()),
                      SizedBox(width: 6),
                      Text(
                        '(${c['number_of_ratings'] ?? 0})',
                        style: GoogleFonts.tajawal(color: Colors.white60, fontSize: 12),
                      ),
                    ],
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildStars(int rating) {
    return Row(
      mainAxisSize: MainAxisSize.min,
      children: List.generate(5, (i) {
        return Icon(
          i < rating ? Icons.star : Icons.star_border,
          color: Colors.amber,
          size: 16,
        );
      }),
    );
  }

  // ═══════════════════════ ACTION BAR ═══════════════════════
  Widget _buildActionBar(Map<String, dynamic> c) {
    return Container(
      padding: EdgeInsets.symmetric(horizontal: 16, vertical: 14),
      decoration: BoxDecoration(
        color: Colors.white,
        boxShadow: [BoxShadow(color: Colors.black.withAlpha(13), blurRadius: 6, offset: Offset(0, 2))],
      ),
      child: Row(
        children: [
          // Price
          Expanded(
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                if (_isPurchased)
                  Container(
                    padding: EdgeInsets.symmetric(horizontal: 10, vertical: 4),
                    decoration: BoxDecoration(
                      color: AppColors.primaryGreen.withAlpha(30),
                      borderRadius: BorderRadius.circular(8),
                    ),
                    child: Text('✅ مشترك', style: GoogleFonts.tajawal(color: AppColors.primaryGreen, fontWeight: FontWeight.bold, fontSize: 14)),
                  )
                else
                  Text(
                    _isFree ? 'مجاني' : (c['price']?.toString() ?? ''),
                    style: GoogleFonts.tajawal(
                      fontSize: 24,
                      fontWeight: FontWeight.bold,
                      color: _isFree ? AppColors.primaryGreen : AppColors.textDark,
                    ),
                  ),
                if (!_isPurchased && c['total_enrollment'] != null)
                  Padding(
                    padding: const EdgeInsets.only(top: 2),
                    child: Text(
                      '${c['total_enrollment']} طالب مسجّل',
                      style: GoogleFonts.tajawal(fontSize: 12, color: Colors.grey[600]),
                    ),
                  ),
              ],
            ),
          ),
          // Action Button
          if (_isPurchased)
            _buildGradientButton('ابدأ التعلم', Icons.play_arrow, () {
              // TODO: Navigate to course player
              ScaffoldMessenger.of(context).showSnackBar(
                SnackBar(content: Text('سيتم فتح محتوى الدورة قريباً', style: GoogleFonts.tajawal()), backgroundColor: AppColors.primaryGreen),
              );
            })
          else if (_isFree)
            _buildGradientButton(
              _enrolling ? '...' : 'سجّل مجاناً',
              Icons.check_circle_outline,
              _enrolling ? null : _handleEnrollFree,
            )
          else
            _buildGradientButton('اشترِ الآن', Icons.shopping_cart_outlined, _handleBuyCourse),
        ],
      ),
    );
  }

  Widget _buildGradientButton(String label, IconData icon, VoidCallback? onTap) {
    return Container(
      decoration: BoxDecoration(
        gradient: AppColors.primaryGradient,
        borderRadius: BorderRadius.circular(14),
        boxShadow: [BoxShadow(color: AppColors.primaryGreen.withAlpha(80), blurRadius: 10, offset: Offset(0, 4))],
      ),
      child: ElevatedButton.icon(
        onPressed: onTap,
        icon: Icon(icon, size: 20),
        label: Text(label, style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, fontSize: 15)),
        style: ElevatedButton.styleFrom(
          backgroundColor: Colors.transparent,
          foregroundColor: Colors.white,
          shadowColor: Colors.transparent,
          padding: EdgeInsets.symmetric(horizontal: 20, vertical: 12),
          shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(14)),
        ),
      ),
    );
  }

  // ═══════════════════════ QUICK STATS ═══════════════════════
  Widget _buildQuickStats(Map<String, dynamic> c) {
    return Container(
      padding: EdgeInsets.symmetric(vertical: 14),
      child: Row(
        mainAxisAlignment: MainAxisAlignment.spaceEvenly,
        children: [
          _statItem(Icons.play_circle_outline, '${_countLessons(c)} دروس'),
          _dividerVert(),
          _statItem(Icons.people_outline, '${c['total_enrollment'] ?? 0} طالب'),
          _dividerVert(),
          _statItem(Icons.star_outline, '${c['rating'] ?? 0} تقييم'),
          if (c['level'] != null && c['level'].toString().isNotEmpty) ...[
            _dividerVert(),
            _statItem(Icons.signal_cellular_alt, _levelText(c['level'].toString())),
          ],
        ],
      ),
    );
  }

  int _countLessons(Map<String, dynamic> c) {
    if (c['sections'] == null) return 0;
    int count = 0;
    for (var section in c['sections']) {
      if (section['lessons'] != null) count += (section['lessons'] as List).length;
    }
    return count;
  }

  String _levelText(String level) {
    switch (level.toLowerCase()) {
      case 'beginner': return 'مبتدئ';
      case 'intermediate': return 'متوسط';
      case 'advanced': return 'متقدم';
      default: return level;
    }
  }

  Widget _statItem(IconData icon, String text) {
    return Column(
      children: [
        Icon(icon, color: AppColors.primaryGreen, size: 22),
        SizedBox(height: 4),
        Text(text, style: GoogleFonts.tajawal(fontSize: 12, color: AppColors.textDark, fontWeight: FontWeight.w600)),
      ],
    );
  }

  Widget _dividerVert() => Container(width: 1, height: 30, color: Colors.grey[300]);

  // ═══════════════════════ SECTION WRAPPER ═══════════════════════
  Widget _buildSection(String title, Widget content) {
    return Padding(
      padding: EdgeInsets.fromLTRB(16, 20, 16, 0),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Row(
            children: [
              Container(width: 4, height: 20, decoration: BoxDecoration(color: AppColors.primaryGreen, borderRadius: BorderRadius.circular(2))),
              SizedBox(width: 8),
              Text(title, style: GoogleFonts.tajawal(fontSize: 18, fontWeight: FontWeight.bold, color: AppColors.textDark)),
            ],
          ),
          SizedBox(height: 12),
          content,
        ],
      ),
    );
  }

  // ═══════════════════════ DESCRIPTION ═══════════════════════
  Widget _buildDescription(Map<String, dynamic> c) {
    final shortDesc = c['short_description']?.toString() ?? '';
    final fullDesc = c['description']?.toString() ?? '';
    final plainFull = stripHtmlToPlain(fullDesc);
    final displayText = _descExpanded ? plainFull : (shortDesc.isNotEmpty ? shortDesc : plainFull);
    final showToggle = plainFull.length > 200;

    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
        Text(
          displayText,
          style: GoogleFonts.tajawal(fontSize: 14, color: Colors.grey[700], height: 1.6),
          maxLines: _descExpanded ? null : 5,
          overflow: _descExpanded ? null : TextOverflow.ellipsis,
        ),
        if (showToggle)
          GestureDetector(
            onTap: () => setState(() => _descExpanded = !_descExpanded),
            child: Padding(
              padding: const EdgeInsets.only(top: 8),
              child: Text(
                _descExpanded ? 'عرض أقل' : 'عرض المزيد...',
                style: GoogleFonts.tajawal(color: AppColors.primaryGreen, fontWeight: FontWeight.bold, fontSize: 14),
              ),
            ),
          ),
      ],
    );
  }

  // ═══════════════════════ OUTCOMES ═══════════════════════
  Widget _buildOutcomes(Map<String, dynamic> c) {
    final outcomes = List<dynamic>.from(c['outcomes'] ?? []);
    return Container(
      padding: EdgeInsets.all(14),
      decoration: BoxDecoration(
        color: AppColors.primaryGreen.withAlpha(15),
        borderRadius: BorderRadius.circular(14),
        border: Border.all(color: AppColors.primaryGreen.withAlpha(40)),
      ),
      child: Column(
        children: outcomes.map((o) => Padding(
          padding: const EdgeInsets.symmetric(vertical: 5),
          child: Row(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Icon(Icons.check_circle, color: AppColors.primaryGreen, size: 20),
              SizedBox(width: 10),
              Expanded(child: Text(o.toString(), style: GoogleFonts.tajawal(fontSize: 14, color: AppColors.textDark))),
            ],
          ),
        )).toList(),
      ),
    );
  }

  // ═══════════════════════ REQUIREMENTS ═══════════════════════
  Widget _buildRequirements(Map<String, dynamic> c) {
    final reqs = List<dynamic>.from(c['requirements'] ?? []);
    return Column(
      children: reqs.map((r) => Padding(
        padding: const EdgeInsets.symmetric(vertical: 4),
        child: Row(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Icon(Icons.arrow_left, color: AppColors.primaryGreen, size: 20),
            SizedBox(width: 6),
            Expanded(child: Text(r.toString(), style: GoogleFonts.tajawal(fontSize: 14, color: Colors.grey[700]))),
          ],
        ),
      )).toList(),
    );
  }

  // ═══════════════════════ INCLUDES ═══════════════════════
  Widget _buildIncludes(Map<String, dynamic> c) {
    final includes = List<dynamic>.from(c['includes'] ?? []);
    final icons = [Icons.ondemand_video, Icons.menu_book, Icons.hd, Icons.all_inclusive];
    return Wrap(
      spacing: 10,
      runSpacing: 10,
      children: includes.asMap().entries.map((entry) {
        final i = entry.key;
        final text = entry.value.toString();
        return Container(
          padding: EdgeInsets.symmetric(horizontal: 12, vertical: 8),
          decoration: BoxDecoration(
            color: Colors.grey[100],
            borderRadius: BorderRadius.circular(10),
          ),
          child: Row(
            mainAxisSize: MainAxisSize.min,
            children: [
              Icon(icons[i % icons.length], size: 18, color: AppColors.primaryGreen),
              SizedBox(width: 6),
              Text(text, style: GoogleFonts.tajawal(fontSize: 12, color: AppColors.textDark)),
            ],
          ),
        );
      }).toList(),
    );
  }

  // ═══════════════════════ SECTIONS & LESSONS ═══════════════════════
  Widget _buildSections(Map<String, dynamic> c) {
    final sections = List<dynamic>.from(c['sections'] ?? []);
    return Column(
      children: sections.asMap().entries.map((entry) {
        final section = Map<String, dynamic>.from(entry.value);
        final lessons = List<dynamic>.from(section['lessons'] ?? []);
        return _SectionTile(
          title: section['title'] ?? 'قسم ${entry.key + 1}',
          duration: section['total_duration']?.toString() ?? '',
          lessonsCount: lessons.length,
          lessons: lessons,
          isPurchased: _isPurchased,
        );
      }).toList(),
    );
  }

  // ═══════════════════════ INSTRUCTOR ═══════════════════════
  Widget _buildInstructor(Map<String, dynamic> c) {
    return Container(
      padding: EdgeInsets.all(16),
      decoration: BoxDecoration(
        color: Colors.grey[50],
        borderRadius: BorderRadius.circular(14),
      ),
      child: Row(
        children: [
          CircleAvatar(
            radius: 28,
            backgroundColor: AppColors.primaryGreen.withAlpha(40),
            backgroundImage: c['instructor_image'] != null ? NetworkImage(c['instructor_image']) : null,
            child: c['instructor_image'] == null
                ? Icon(Icons.person, color: AppColors.primaryGreen, size: 28)
                : null,
          ),
          SizedBox(width: 14),
          Expanded(
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(c['instructor_name'] ?? 'مدرب', style: GoogleFonts.tajawal(fontSize: 16, fontWeight: FontWeight.bold, color: AppColors.textDark)),
                SizedBox(height: 4),
                Text(
                  '${c['total_enrollment'] ?? 0} طالب مسجّل',
                  style: GoogleFonts.tajawal(fontSize: 13, color: Colors.grey[600]),
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }
}

// ─────────────── SECTION TILE (Expandable) ───────────────
class _SectionTile extends StatefulWidget {
  final String title;
  final String duration;
  final int lessonsCount;
  final List<dynamic> lessons;
  final bool isPurchased;

  const _SectionTile({
    required this.title,
    required this.duration,
    required this.lessonsCount,
    required this.lessons,
    required this.isPurchased,
  });

  @override
  State<_SectionTile> createState() => _SectionTileState();
}

class _SectionTileState extends State<_SectionTile> {
  bool _expanded = false;

  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.only(bottom: 10),
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(12),
        border: Border.all(color: Colors.grey[200]!),
      ),
      child: Column(
        children: [
          // Header
          InkWell(
            borderRadius: BorderRadius.circular(12),
            onTap: () => setState(() => _expanded = !_expanded),
            child: Padding(
              padding: const EdgeInsets.all(14),
              child: Row(
                children: [
                  AnimatedRotation(
                    turns: _expanded ? 0.25 : 0,
                    duration: Duration(milliseconds: 200),
                    child: Icon(Icons.arrow_forward_ios, size: 14, color: AppColors.primaryGreen),
                  ),
                  SizedBox(width: 10),
                  Expanded(
                    child: Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        Text(
                          widget.title,
                          style: GoogleFonts.tajawal(fontSize: 14, fontWeight: FontWeight.bold, color: AppColors.textDark),
                          maxLines: 2,
                          overflow: TextOverflow.ellipsis,
                        ),
                        SizedBox(height: 2),
                        Text(
                          '${widget.lessonsCount} دروس${widget.duration.isNotEmpty ? ' • ${widget.duration}' : ''}',
                          style: GoogleFonts.tajawal(fontSize: 12, color: Colors.grey[500]),
                        ),
                      ],
                    ),
                  ),
                ],
              ),
            ),
          ),
          // Lessons (expandable)
          AnimatedCrossFade(
            firstChild: SizedBox.shrink(),
            secondChild: Column(
              children: widget.lessons.map((lesson) {
                final l = Map<String, dynamic>.from(lesson);
                final isFree = l['is_free']?.toString() == '1';
                final isCompleted = l['is_completed']?.toString() == '1';
                return Container(
                  padding: EdgeInsets.symmetric(horizontal: 16, vertical: 10),
                  decoration: BoxDecoration(
                    border: Border(top: BorderSide(color: Colors.grey[100]!)),
                  ),
                  child: Row(
                    children: [
                      Icon(
                        isCompleted
                            ? Icons.check_circle
                            : (widget.isPurchased || isFree)
                                ? Icons.play_circle_outline
                                : Icons.lock_outline,
                        size: 20,
                        color: isCompleted
                            ? AppColors.primaryGreen
                            : (widget.isPurchased || isFree)
                                ? AppColors.primaryGreen
                                : Colors.grey[400],
                      ),
                      SizedBox(width: 10),
                      Expanded(
                        child: Text(
                          l['title'] ?? '',
                          style: GoogleFonts.tajawal(fontSize: 13, color: AppColors.textDark),
                          maxLines: 2,
                          overflow: TextOverflow.ellipsis,
                        ),
                      ),
                      if (l['duration'] != null && l['duration'].toString().isNotEmpty)
                        Text(
                          l['duration'].toString(),
                          style: GoogleFonts.tajawal(fontSize: 11, color: Colors.grey[500]),
                        ),
                    ],
                  ),
                );
              }).toList(),
            ),
            crossFadeState: _expanded ? CrossFadeState.showSecond : CrossFadeState.showFirst,
            duration: Duration(milliseconds: 250),
          ),
        ],
      ),
    );
  }
}
