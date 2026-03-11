import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:html/parser.dart' as html_parser;
import '../utils/colors.dart';
import '../services/api_service.dart';
import 'profile_sub_screens.dart';

// ─────────────────────── COURSES SCREEN ───────────────────────
class CoursesScreen extends StatelessWidget {
  // In a real app, this token comes from a login session.
  // For now, we show a "login required" message when no token is set.
  static const String authToken = '';

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('دوراتي', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
      ),
      body: authToken.isEmpty
          ? _buildLoginPrompt(context)
          : FutureBuilder<List<dynamic>>(
              future: ApiService.fetchMyCourses(authToken),
              builder: (context, snapshot) {
                if (snapshot.connectionState == ConnectionState.waiting) {
                  return Center(child: CircularProgressIndicator(color: AppColors.primaryGreen));
                } else if (snapshot.hasError || !snapshot.hasData || snapshot.data!.isEmpty) {
                  return _buildEmptyState(
                    Icons.play_circle_outline,
                    'لم تشترك في أي دورة بعد',
                    'تصفّح الأقسام وابدأ التعلم',
                  );
                }
                return _buildCoursesList(snapshot.data!);
              },
            ),
    );
  }

  Widget _buildLoginPrompt(BuildContext context) {
    return Center(
      child: Padding(
        padding: const EdgeInsets.all(32),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Container(
              width: 100,
              height: 100,
              decoration: BoxDecoration(
                gradient: AppColors.primaryGradient,
                shape: BoxShape.circle,
              ),
              child: Icon(Icons.lock_outline, size: 50, color: Colors.white),
            ),
            SizedBox(height: 24),
            Text(
              'سجّل دخولك لعرض دوراتك',
              style: GoogleFonts.tajawal(fontSize: 20, fontWeight: FontWeight.bold, color: Colors.black),
              textAlign: TextAlign.center,
            ),
            SizedBox(height: 10),
            Text(
              'جميع الدورات المشترك بها ستظهر هنا مع نسبة تقدّمك',
              style: GoogleFonts.tajawal(fontSize: 14, color: Colors.grey[600]),
              textAlign: TextAlign.center,
            ),
            SizedBox(height: 30),
            Container(
              width: double.infinity,
              decoration: BoxDecoration(
                gradient: AppColors.primaryGradient,
                borderRadius: BorderRadius.circular(14),
              ),
              child: ElevatedButton(
                onPressed: () {},
                style: ElevatedButton.styleFrom(
                  backgroundColor: Colors.transparent,
                  shadowColor: Colors.transparent,
                  padding: EdgeInsets.symmetric(vertical: 14),
                  shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(14)),
                ),
                child: Text('تسجيل الدخول', style: GoogleFonts.tajawal(color: Colors.white, fontSize: 16, fontWeight: FontWeight.bold)),
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildCoursesList(List<dynamic> courses) {
    return ListView.builder(
      padding: EdgeInsets.all(16),
      itemCount: courses.length,
      itemBuilder: (context, index) {
        final course = courses[index];
        final double progress = (course['progress'] ?? 0).toDouble() / 100;
        return _CourseProgressCard(course: course, progress: progress);
      },
    );
  }

  Widget _buildEmptyState(IconData icon, String title, String subtitle) {
    return Center(
      child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        children: [
          Icon(icon, size: 80, color: Colors.grey[300]),
          SizedBox(height: 20),
          Text(title, style: GoogleFonts.tajawal(fontSize: 18, fontWeight: FontWeight.bold, color: Colors.black)),
          SizedBox(height: 8),
          Text(subtitle, style: GoogleFonts.tajawal(fontSize: 14, color: Colors.grey[600])),
        ],
      ),
    );
  }
}

class _CourseProgressCard extends StatelessWidget {
  final dynamic course;
  final double progress;
  const _CourseProgressCard({required this.course, required this.progress});

  @override
  Widget build(BuildContext context) {
    return Container(
      margin: EdgeInsets.only(bottom: 16),
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(16),
        boxShadow: [BoxShadow(color: Colors.black12, blurRadius: 8, offset: Offset(0, 4))],
      ),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          ClipRRect(
            borderRadius: BorderRadius.vertical(top: Radius.circular(16)),
            child: course['thumbnail'] != null
                ? Image.network(course['thumbnail'], height: 150, width: double.infinity, fit: BoxFit.cover,
                    errorBuilder: (_, __, ___) => _placeholder())
                : _placeholder(),
          ),
          Padding(
            padding: const EdgeInsets.all(14),
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(
                  course['title'] ?? 'عنوان الدورة',
                  style: GoogleFonts.tajawal(fontSize: 16, fontWeight: FontWeight.bold, color: Colors.black),
                  maxLines: 2,
                  overflow: TextOverflow.ellipsis,
                ),
                SizedBox(height: 12),
                Row(
                  children: [
                    Expanded(
                      child: ClipRRect(
                        borderRadius: BorderRadius.circular(8),
                        child: LinearProgressIndicator(
                          value: progress,
                          backgroundColor: Colors.grey[200],
                          color: AppColors.primaryGreen,
                          minHeight: 8,
                        ),
                      ),
                    ),
                    SizedBox(width: 12),
                    Text(
                      '${(progress * 100).round()}%',
                      style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: AppColors.primaryGreen, fontSize: 14),
                    ),
                  ],
                ),
                SizedBox(height: 10),
                Text(
                  'استمر في التعلم!',
                  style: GoogleFonts.tajawal(fontSize: 13, color: Colors.grey[600]),
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }

  Widget _placeholder() {
    return Container(
      height: 150,
      color: AppColors.lightBackground,
      child: Center(child: Icon(Icons.play_circle_outline, size: 50, color: AppColors.primaryGreen)),
    );
  }
}

// ─────────────────────── CATEGORIES SCREEN ───────────────────────
class CategoriesScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('الأقسام', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
      ),
      body: FutureBuilder<List<dynamic>>(
        future: ApiService.fetchCategories(),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return Center(child: CircularProgressIndicator(color: AppColors.primaryGreen));
          } else if (snapshot.hasError) {
            return Center(child: Text('حدث خطأ في تحميل الأقسام', style: GoogleFonts.tajawal(color: Colors.red)));
          } else if (!snapshot.hasData || snapshot.data!.isEmpty) {
            return Center(child: Text('لا توجد أقسام', style: GoogleFonts.tajawal(color: Colors.grey)));
          }
          final categories = snapshot.data!;
          return GridView.builder(
            padding: EdgeInsets.all(16),
            gridDelegate: SliverGridDelegateWithFixedCrossAxisCount(
              crossAxisCount: 2,
              crossAxisSpacing: 14,
              mainAxisSpacing: 14,
              childAspectRatio: 1.1,
            ),
            itemCount: categories.length,
            itemBuilder: (context, index) {
              final category = categories[index];
              return _CategoryCard(category: category);
            },
          );
        },
      ),
    );
  }
}

class _CategoryCard extends StatefulWidget {
  final dynamic category;
  const _CategoryCard({required this.category});

  @override
  State<_CategoryCard> createState() => _CategoryCardState();
}

class _CategoryCardState extends State<_CategoryCard> with SingleTickerProviderStateMixin {
  late AnimationController _controller;
  late Animation<double> _scale;

  @override
  void initState() {
    super.initState();
    _controller = AnimationController(vsync: this, duration: Duration(milliseconds: 150));
    _scale = Tween<double>(begin: 1.0, end: 0.95).animate(
      CurvedAnimation(parent: _controller, curve: Curves.easeInOut),
    );
  }

  @override
  void dispose() {
    _controller.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      onTapDown: (_) => _controller.forward(),
      onTapUp: (_) => _controller.reverse(),
      onTapCancel: () => _controller.reverse(),
      child: ScaleTransition(
        scale: _scale,
        child: Container(
          decoration: BoxDecoration(
            gradient: LinearGradient(
              colors: [AppColors.primaryGreen.withOpacity(0.85), AppColors.secondaryGreen],
              begin: Alignment.topLeft,
              end: Alignment.bottomRight,
            ),
            borderRadius: BorderRadius.circular(18),
            boxShadow: [
              BoxShadow(
                color: AppColors.primaryGreen.withOpacity(0.3),
                blurRadius: 10,
                offset: Offset(0, 5),
              ),
            ],
          ),
          child: Padding(
            padding: const EdgeInsets.all(16),
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                Icon(Icons.category, color: Colors.white, size: 36),
                SizedBox(height: 12),
                Text(
                  widget.category['name'] ?? 'قسم',
                  textAlign: TextAlign.center,
                  maxLines: 2,
                  overflow: TextOverflow.ellipsis,
                  style: GoogleFonts.tajawal(
                    color: Colors.white,
                    fontSize: 14,
                    fontWeight: FontWeight.bold,
                  ),
                ),
                if (widget.category['total_course'] != null) ...[
                  SizedBox(height: 6),
                  Text(
                    '${widget.category['total_course']} دورة',
                    style: GoogleFonts.tajawal(color: Colors.white70, fontSize: 12),
                  ),
                ]
              ],
            ),
          ),
        ),
      ),
    );
  }
}

// ─────────────────────── ARTICLES SCREEN ───────────────────────
class ArticlesScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('المقالات', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
      ),
      body: FutureBuilder<List<dynamic>>(
        future: ApiService.fetchAllBlogs(),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return Center(child: CircularProgressIndicator(color: AppColors.primaryGreen));
          } else if (snapshot.hasError) {
            return Center(child: Text('حدث خطأ في تحميل المقالات', style: GoogleFonts.tajawal(color: Colors.red)));
          } else if (!snapshot.hasData || snapshot.data!.isEmpty) {
            return Center(child: Text('لا توجد مقالات', style: GoogleFonts.tajawal(color: Colors.grey)));
          }
          final blogs = snapshot.data!;
          return ListView.builder(
            padding: EdgeInsets.symmetric(horizontal: 16, vertical: 12),
            itemCount: blogs.length,
            itemBuilder: (context, index) {
              final blog = blogs[index];
              final String raw = blog['description'] ?? '';
              final String plain = html_parser.parse(raw).documentElement?.text ?? '';
              return _ArticleCard(blog: blog, description: plain);
            },
          );
        },
      ),
    );
  }
}

class _ArticleCard extends StatefulWidget {
  final dynamic blog;
  final String description;
  const _ArticleCard({required this.blog, required this.description});

  @override
  State<_ArticleCard> createState() => _ArticleCardState();
}

class _ArticleCardState extends State<_ArticleCard> with SingleTickerProviderStateMixin {
  late AnimationController _controller;
  late Animation<Offset> _slide;

  @override
  void initState() {
    super.initState();
    _controller = AnimationController(vsync: this, duration: Duration(milliseconds: 400));
    _slide = Tween<Offset>(begin: Offset(0, 0.1), end: Offset.zero).animate(
      CurvedAnimation(parent: _controller, curve: Curves.easeOut),
    );
    Future.delayed(Duration(milliseconds: 50), () {
      if (mounted) _controller.forward();
    });
  }

  @override
  void dispose() {
    _controller.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return FadeTransition(
      opacity: _controller,
      child: SlideTransition(
        position: _slide,
        child: Container(
          margin: EdgeInsets.only(bottom: 16),
          decoration: BoxDecoration(
            color: Colors.white,
            borderRadius: BorderRadius.circular(16),
            boxShadow: [BoxShadow(color: Colors.black12, blurRadius: 8, offset: Offset(0, 4))],
          ),
          child: Row(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              ClipRRect(
                borderRadius: BorderRadius.only(topRight: Radius.circular(16), bottomRight: Radius.circular(16)),
                child: widget.blog['thumbnail'] != null
                    ? Image.network(
                        widget.blog['thumbnail'],
                        width: 100,
                        height: 110,
                        fit: BoxFit.cover,
                        errorBuilder: (_, __, ___) => _placeholder(),
                      )
                    : _placeholder(),
              ),
              Expanded(
                child: Padding(
                  padding: const EdgeInsets.all(12),
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      if (widget.blog['category_name'] != null)
                        Container(
                          padding: EdgeInsets.symmetric(horizontal: 8, vertical: 4),
                          decoration: BoxDecoration(
                            color: AppColors.primaryGreen.withOpacity(0.1),
                            borderRadius: BorderRadius.circular(8),
                          ),
                          child: Text(
                            widget.blog['category_name'],
                            style: GoogleFonts.tajawal(color: AppColors.primaryGreen, fontSize: 11, fontWeight: FontWeight.bold),
                          ),
                        ),
                      SizedBox(height: 6),
                      Text(
                        widget.blog['title'] ?? '',
                        maxLines: 2,
                        overflow: TextOverflow.ellipsis,
                        style: GoogleFonts.tajawal(fontSize: 14, fontWeight: FontWeight.bold, color: Colors.black),
                      ),
                      SizedBox(height: 4),
                      Text(
                        widget.description,
                        maxLines: 2,
                        overflow: TextOverflow.ellipsis,
                        style: GoogleFonts.tajawal(fontSize: 12, color: Colors.grey[600]),
                      ),
                    ],
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }

  Widget _placeholder() {
    return Container(
      width: 100,
      height: 110,
      color: AppColors.lightBackground,
      child: Icon(Icons.article_outlined, color: AppColors.primaryGreen),
    );
  }
}

// ─────────────────────── PROFILE SCREEN ───────────────────────
class ProfileScreen extends StatefulWidget {
  @override
  State<ProfileScreen> createState() => _ProfileScreenState();
}

class _ProfileScreenState extends State<ProfileScreen> with TickerProviderStateMixin {
  late AnimationController _headerAnim;
  late Animation<double> _headerFade;
  late AnimationController _listAnim;

  @override
  void initState() {
    super.initState();
    _headerAnim = AnimationController(vsync: this, duration: Duration(milliseconds: 600));
    _headerFade = CurvedAnimation(parent: _headerAnim, curve: Curves.easeIn);
    _listAnim = AnimationController(vsync: this, duration: Duration(milliseconds: 800));
    _headerAnim.forward();
    Future.delayed(Duration(milliseconds: 300), () {
      if (mounted) _listAnim.forward();
    });
  }

  @override
  void dispose() {
    _headerAnim.dispose();
    _listAnim.dispose();
    super.dispose();
  }

  final List<_ProfileMenuItem> _menuItems = [
    _ProfileMenuItem(icon: Icons.edit_outlined, title: 'تعديل الملف الشخصى', color: Color(0xFF2D9C4F), onTap: (ctx) {}),
    _ProfileMenuItem(icon: Icons.settings_outlined, title: 'اعدادات الحساب', color: Color(0xFF1A7A8A), onTap: (ctx) {
      Navigator.push(ctx, MaterialPageRoute(builder: (_) => AccountSettingsScreen()));
    }),
    _ProfileMenuItem(icon: Icons.stars_outlined, title: 'الاشتراكات', color: Color(0xFFE67E22), onTap: (ctx) {}),
    _ProfileMenuItem(icon: Icons.help_outline, title: 'المساعده والدعم', color: Color(0xFF8E44AD), onTap: (ctx) {
      Navigator.push(ctx, MaterialPageRoute(builder: (_) => HelpSupportScreen()));
    }),
    _ProfileMenuItem(icon: Icons.notifications_outlined, title: 'الاشعارات والتنبيهات', color: Color(0xFFC0392B), onTap: (ctx) {
      Navigator.push(ctx, MaterialPageRoute(builder: (_) => AlertsScreen()));
    }),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: AppColors.lightBackground,
      appBar: AppBar(
        title: Text('شخصي', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
        actions: [
          IconButton(
            icon: Icon(Icons.logout, color: Colors.red),
            onPressed: () {},
          ),
        ],
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            // Header with gradient
            FadeTransition(
              opacity: _headerFade,
              child: Container(
                width: double.infinity,
                decoration: BoxDecoration(
                  gradient: AppColors.primaryGradient,
                  borderRadius: BorderRadius.only(
                    bottomLeft: Radius.circular(36),
                    bottomRight: Radius.circular(36),
                  ),
                ),
                padding: EdgeInsets.fromLTRB(24, 24, 24, 40),
                child: Column(
                  children: [
                    Stack(
                      alignment: Alignment.bottomLeft,
                      children: [
                        CircleAvatar(
                          radius: 50,
                          backgroundColor: Colors.white.withOpacity(0.2),
                          child: Icon(Icons.person, size: 55, color: Colors.white),
                        ),
                        CircleAvatar(
                          radius: 16,
                          backgroundColor: Colors.white,
                          child: Icon(Icons.camera_alt, size: 16, color: AppColors.primaryGreen),
                        ),
                      ],
                    ),
                    SizedBox(height: 14),
                    Text(
                      'مستخدم استمر',
                      style: GoogleFonts.tajawal(color: Colors.white, fontSize: 22, fontWeight: FontWeight.bold),
                    ),
                    SizedBox(height: 4),
                    Text(
                      'user@esttamer.com',
                      style: GoogleFonts.tajawal(color: Colors.white70, fontSize: 14),
                    ),
                    SizedBox(height: 20),
                    Row(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        _buildStat('0', 'دورة'),
                        _buildDivider(),
                        _buildStat('0', 'شهادة'),
                        _buildDivider(),
                        _buildStat('0', 'نقطة'),
                      ],
                    ),
                  ],
                ),
              ),
            ),
            SizedBox(height: 24),
            // Animated menu items
            ...List.generate(_menuItems.length, (index) {
              final delay = index * 100;
              return _AnimatedMenuItem(
                item: _menuItems[index],
                controller: _listAnim,
                delay: delay,
              );
            }),
            SizedBox(height: 30),
          ],
        ),
      ),
    );
  }

  Widget _buildStat(String value, String label) {
    return Column(
      children: [
        Text(value, style: GoogleFonts.tajawal(color: Colors.white, fontSize: 22, fontWeight: FontWeight.bold)),
        Text(label, style: GoogleFonts.tajawal(color: Colors.white70, fontSize: 13)),
      ],
    );
  }

  Widget _buildDivider() {
    return Container(width: 1, height: 36, color: Colors.white30);
  }
}

class _ProfileMenuItem {
  final IconData icon;
  final String title;
  final Color color;
  final void Function(BuildContext)? onTap;
  const _ProfileMenuItem({required this.icon, required this.title, required this.color, this.onTap});
}

class _AnimatedMenuItem extends StatelessWidget {
  final _ProfileMenuItem item;
  final AnimationController controller;
  final int delay;

  const _AnimatedMenuItem({required this.item, required this.controller, required this.delay});

  @override
  Widget build(BuildContext context) {
    final animation = Tween<Offset>(begin: Offset(0.3, 0), end: Offset.zero).animate(
      CurvedAnimation(
        parent: controller,
        curve: Interval(delay / 500, 1.0, curve: Curves.easeOut),
      ),
    );
    final fadeAnim = Tween<double>(begin: 0, end: 1).animate(
      CurvedAnimation(
        parent: controller,
        curve: Interval(delay / 500, 1.0, curve: Curves.easeOut),
      ),
    );

    return FadeTransition(
      opacity: fadeAnim,
      child: SlideTransition(
        position: animation,
        child: Container(
          margin: EdgeInsets.symmetric(horizontal: 16, vertical: 6),
          decoration: BoxDecoration(
            color: Colors.white,
            borderRadius: BorderRadius.circular(16),
            boxShadow: [BoxShadow(color: Colors.black.withOpacity(0.06), blurRadius: 8, offset: Offset(0, 3))],
          ),
          child: ListTile(
            leading: Container(
              width: 46,
              height: 46,
              decoration: BoxDecoration(
                color: item.color.withOpacity(0.12),
                borderRadius: BorderRadius.circular(12),
              ),
              child: Icon(item.icon, color: item.color, size: 24),
            ),
            title: Text(
              item.title,
              style: GoogleFonts.tajawal(fontWeight: FontWeight.w600, fontSize: 15, color: Colors.black),
            ),
            trailing: Icon(Icons.arrow_back_ios, size: 14, color: Colors.grey),
            onTap: () { if (item.onTap != null) item.onTap!(context); },
          ),
        ),
      ),
    );
  }
}

// ─────────────────────── MESSAGES SCREEN ───────────────────────
class MessagesScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('الرسائل', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Icon(Icons.message_outlined, size: 80, color: Colors.grey[300]),
            SizedBox(height: 20),
            Text('لا توجد رسائل حالياً', style: GoogleFonts.tajawal(fontSize: 18, fontWeight: FontWeight.bold, color: Colors.black)),
            SizedBox(height: 8),
            Text('سيتم عرض رسائلك هنا', style: GoogleFonts.tajawal(fontSize: 14, color: Colors.grey[600])),
          ],
        ),
      ),
    );
  }
}

// ─────────────────────── NOTIFICATIONS SCREEN ───────────────────────
class NotificationsScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('التنبيهات', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Icon(Icons.notifications_none, size: 80, color: Colors.grey[300]),
            SizedBox(height: 20),
            Text('لا توجد تنبيهات جديدة', style: GoogleFonts.tajawal(fontSize: 18, fontWeight: FontWeight.bold, color: Colors.black)),
            SizedBox(height: 8),
            Text('ستصلك التنبيهات عند وجود تحديثات', style: GoogleFonts.tajawal(fontSize: 14, color: Colors.grey[600])),
          ],
        ),
      ),
    );
  }
}
