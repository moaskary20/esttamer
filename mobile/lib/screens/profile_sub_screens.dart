import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:animate_do/animate_do.dart';
import '../utils/colors.dart';

// ─────────────────────── NOTIFICATIONS/ALERTS SCREEN ───────────────────────
class AlertsScreen extends StatelessWidget {
  // Notifications would be fetched per-user in a real implementation using auth_token
  final List<Map<String, dynamic>> _mockNotifications = [
    {'title': 'دورة جديدة متاحة', 'body': 'تم إضافة دورة جديدة في قسم التطوير', 'icon': Icons.school_outlined, 'color': Color(0xFF2D9C4F), 'time': 'منذ ساعة'},
    {'title': 'تذكير بالدورة', 'body': 'لديك درس لم تكمله في دورة Flutter', 'icon': Icons.play_circle_outline, 'color': Color(0xFF1A7A8A), 'time': 'منذ 3 ساعات'},
    {'title': 'شهادة جاهزة', 'body': 'شهادة إتمام الدورة متاحة للتحميل', 'icon': Icons.workspace_premium, 'color': Color(0xFFE67E22), 'time': 'أمس'},
    {'title': 'عرض خاص', 'body': 'خصم 30% على جميع الدورات هذا الأسبوع', 'icon': Icons.local_offer_outlined, 'color': Color(0xFFC0392B), 'time': 'منذ يومين'},
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('الإشعارات والتنبيهات', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
        actions: [
          TextButton(
            onPressed: () {},
            child: Text('تحديد الكل كمقروء', style: GoogleFonts.tajawal(color: AppColors.primaryGreen, fontSize: 12)),
          ),
        ],
      ),
      body: ListView.builder(
        padding: EdgeInsets.all(16),
        itemCount: _mockNotifications.length,
        itemBuilder: (context, index) {
          final item = _mockNotifications[index];
          return FadeInRight(
            delay: Duration(milliseconds: index * 100),
            child: Container(
              margin: EdgeInsets.only(bottom: 12),
              decoration: BoxDecoration(
                color: Colors.white,
                borderRadius: BorderRadius.circular(16),
                boxShadow: [BoxShadow(color: Colors.black.withOpacity(0.06), blurRadius: 8, offset: Offset(0, 3))],
              ),
              child: ListTile(
                contentPadding: EdgeInsets.symmetric(horizontal: 16, vertical: 8),
                leading: Container(
                  width: 48,
                  height: 48,
                  decoration: BoxDecoration(
                    color: (item['color'] as Color).withOpacity(0.12),
                    borderRadius: BorderRadius.circular(12),
                  ),
                  child: Icon(item['icon'] as IconData, color: item['color'] as Color, size: 24),
                ),
                title: Text(item['title'] as String, style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black, fontSize: 14)),
                subtitle: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    SizedBox(height: 4),
                    Text(item['body'] as String, style: GoogleFonts.tajawal(color: Colors.grey[600], fontSize: 12)),
                    SizedBox(height: 4),
                    Text(item['time'] as String, style: GoogleFonts.tajawal(color: AppColors.primaryGreen, fontSize: 11)),
                  ],
                ),
                trailing: Container(
                  width: 10,
                  height: 10,
                  decoration: BoxDecoration(color: AppColors.primaryGreen, shape: BoxShape.circle),
                ),
              ),
            ),
          );
        },
      ),
    );
  }
}

// ─────────────────────── HELP & SUPPORT SCREEN ───────────────────────
class HelpSupportScreen extends StatelessWidget {
  final List<Map<String, dynamic>> _faqs = [
    {'q': 'كيف أشترك في دورة؟', 'a': 'اذهب إلى الدورة التي تريدها واضغط على زر "اشترك الآن" واتبع خطوات الدفع.'},
    {'q': 'كيف أحمّل شهادتي؟', 'a': 'بعد إكمال الدورة، اذهب إلى "دوراتي" وستجد زر تحميل الشهادة بجانب الدورة المكتملة.'},
    {'q': 'هل يمكنني مشاهدة الدروس بدون إنترنت؟', 'a': 'حالياً التطبيق يتطلب اتصالاً بالإنترنت لمشاهدة المحتوى.'},
    {'q': 'كيف أتواصل مع المدرب؟', 'a': 'يمكنك التواصل عبر قسم الأسئلة والتعليقات داخل كل درس.'},
    {'q': 'ما سياسة الاسترجاع؟', 'a': 'يمكن استرجاع المبالغ خلال 7 أيام من الاشتراك في حال عدم مشاهدة أكثر من 20% من الدورة.'},
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('المساعدة والدعم', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
      ),
      body: ListView(
        padding: EdgeInsets.all(16),
        children: [
          // Contact Cards
          FadeInDown(
            child: Row(
              children: [
                Expanded(child: _buildContactCard(Icons.email_outlined, 'البريد الإلكتروني', 'support@esttamer.com', Color(0xFF2D9C4F))),
                SizedBox(width: 12),
                Expanded(child: _buildContactCard(Icons.phone_outlined, 'الهاتف', '+966 500 000 000', Color(0xFF1A7A8A))),
              ],
            ),
          ),
          SizedBox(height: 24),
          FadeInLeft(
            delay: Duration(milliseconds: 200),
            child: Text('الأسئلة الشائعة', style: GoogleFonts.tajawal(fontSize: 18, fontWeight: FontWeight.bold, color: Colors.black)),
          ),
          SizedBox(height: 12),
          ...List.generate(_faqs.length, (index) {
            return FadeInUp(
              delay: Duration(milliseconds: index * 100),
              child: Container(
                margin: EdgeInsets.only(bottom: 12),
                decoration: BoxDecoration(
                  color: Colors.white,
                  borderRadius: BorderRadius.circular(14),
                  boxShadow: [BoxShadow(color: Colors.black.withOpacity(0.05), blurRadius: 6)],
                ),
                child: ExpansionTile(
                  tilePadding: EdgeInsets.symmetric(horizontal: 16, vertical: 4),
                  childrenPadding: EdgeInsets.fromLTRB(16, 0, 16, 16),
                  title: Text(_faqs[index]['q']!, style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black, fontSize: 14)),
                  iconColor: AppColors.primaryGreen,
                  collapsedIconColor: Colors.grey,
                  children: [
                    Text(_faqs[index]['a']!, style: GoogleFonts.tajawal(color: Colors.grey[700], fontSize: 13, height: 1.6)),
                  ],
                ),
              ),
            );
          }),
        ],
      ),
    );
  }

  Widget _buildContactCard(IconData icon, String title, String value, Color color) {
    return Container(
      padding: EdgeInsets.all(16),
      decoration: BoxDecoration(
        color: color.withOpacity(0.08),
        borderRadius: BorderRadius.circular(16),
        border: Border.all(color: color.withOpacity(0.2)),
      ),
      child: Column(
        children: [
          Icon(icon, color: color, size: 32),
          SizedBox(height: 8),
          Text(title, style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black, fontSize: 13)),
          SizedBox(height: 4),
          Text(value, style: GoogleFonts.tajawal(color: color, fontSize: 12)),
        ],
      ),
    );
  }
}

// ─────────────────────── ACCOUNT SETTINGS SCREEN ───────────────────────
class AccountSettingsScreen extends StatefulWidget {
  @override
  State<AccountSettingsScreen> createState() => _AccountSettingsScreenState();
}

class _AccountSettingsScreenState extends State<AccountSettingsScreen> {
  bool _pushNotifications = true;
  bool _emailNotifications = false;
  bool _darkMode = false;
  String _selectedLang = 'ar';

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('اعدادات الحساب', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
      ),
      body: ListView(
        padding: EdgeInsets.all(16),
        children: [
          _buildSection('الإشعارات', [
            _buildSwitchTile('الإشعارات الفورية', 'تلقي إشعارات على جهازك', Icons.notifications_outlined, Color(0xFF2D9C4F), _pushNotifications,
                (v) => setState(() => _pushNotifications = v)),
            _buildSwitchTile('إشعارات البريد', 'تلقي تحديثات عبر الإيميل', Icons.email_outlined, Color(0xFF1A7A8A), _emailNotifications,
                (v) => setState(() => _emailNotifications = v)),
          ]),
          SizedBox(height: 16),
          _buildSection('المظهر', [
            _buildSwitchTile('الوضع الداكن', 'تغيير مظهر التطبيق', Icons.dark_mode_outlined, Color(0xFF8E44AD), _darkMode,
                (v) => setState(() => _darkMode = v)),
          ]),
          SizedBox(height: 16),
          _buildSection('اللغة', [
            _buildRadioTile('العربية', 'ar'),
            _buildRadioTile('English', 'en'),
          ]),
          SizedBox(height: 16),
          _buildSection('الحساب', [
            _buildActionTile('تغيير كلمة المرور', Icons.lock_outline, Color(0xFFE67E22), () {}),
            _buildActionTile('حذف الحساب', Icons.delete_outline, Colors.red, () {
              _showDeleteDialog(context);
            }),
          ]),
        ],
      ),
    );
  }

  Widget _buildSection(String title, List<Widget> children) {
    return FadeInUp(
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Padding(
            padding: EdgeInsets.only(right: 4, bottom: 10),
            child: Text(title, style: GoogleFonts.tajawal(fontSize: 16, fontWeight: FontWeight.bold, color: Colors.black)),
          ),
          Container(
            decoration: BoxDecoration(
              color: Colors.white,
              borderRadius: BorderRadius.circular(16),
              boxShadow: [BoxShadow(color: Colors.black.withOpacity(0.05), blurRadius: 8)],
            ),
            child: Column(children: children),
          ),
        ],
      ),
    );
  }

  Widget _buildSwitchTile(String title, String subtitle, IconData icon, Color color, bool value, ValueChanged<bool> onChanged) {
    return ListTile(
      leading: Container(
        width: 42, height: 42,
        decoration: BoxDecoration(color: color.withOpacity(0.12), borderRadius: BorderRadius.circular(10)),
        child: Icon(icon, color: color, size: 22),
      ),
      title: Text(title, style: GoogleFonts.tajawal(fontWeight: FontWeight.w600, color: Colors.black, fontSize: 14)),
      subtitle: Text(subtitle, style: GoogleFonts.tajawal(color: Colors.grey[600], fontSize: 12)),
      trailing: Switch.adaptive(
        value: value,
        onChanged: onChanged,
        activeColor: AppColors.primaryGreen,
      ),
    );
  }

  Widget _buildRadioTile(String title, String value) {
    return RadioListTile<String>(
      title: Text(title, style: GoogleFonts.tajawal(color: Colors.black)),
      value: value,
      groupValue: _selectedLang,
      onChanged: (v) => setState(() => _selectedLang = v!),
      activeColor: AppColors.primaryGreen,
    );
  }

  Widget _buildActionTile(String title, IconData icon, Color color, VoidCallback onTap) {
    return ListTile(
      leading: Container(
        width: 42, height: 42,
        decoration: BoxDecoration(color: color.withOpacity(0.12), borderRadius: BorderRadius.circular(10)),
        child: Icon(icon, color: color, size: 22),
      ),
      title: Text(title, style: GoogleFonts.tajawal(fontWeight: FontWeight.w600, color: color, fontSize: 14)),
      trailing: Icon(Icons.arrow_back_ios, size: 14, color: Colors.grey),
      onTap: onTap,
    );
  }

  void _showDeleteDialog(BuildContext context) {
    showDialog(
      context: context,
      builder: (_) => AlertDialog(
        title: Text('حذف الحساب', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold)),
        content: Text('هل أنت متأكد من حذف حسابك؟ لن تتمكن من استرجاعه.', style: GoogleFonts.tajawal()),
        actions: [
          TextButton(onPressed: () => Navigator.pop(context), child: Text('إلغاء', style: GoogleFonts.tajawal(color: Colors.grey))),
          TextButton(onPressed: () => Navigator.pop(context), child: Text('حذف', style: GoogleFonts.tajawal(color: Colors.red, fontWeight: FontWeight.bold))),
        ],
      ),
    );
  }
}
