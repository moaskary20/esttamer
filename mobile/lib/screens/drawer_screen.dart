import 'package:flutter/material.dart';
import '../utils/colors.dart';
import '../services/session_service.dart';
import 'placeholder_screens.dart';
import 'login_screen.dart';

class DrawerScreen extends StatefulWidget {
  @override
  State<DrawerScreen> createState() => _DrawerScreenState();
}

class _DrawerScreenState extends State<DrawerScreen> {
  String _email = '';
  String _name = '';
  String? _imageUrl;

  @override
  void initState() {
    super.initState();
    _loadUserData();
  }

  Future<void> _loadUserData() async {
    final email = await SessionService.getEmail();
    final name = await SessionService.getName();
    final imageUrl = await SessionService.getImageUrl();
    if (mounted) {
      setState(() {
        _email = email ?? '';
        _name = name.isNotEmpty ? name : 'أهلاً بك';
        _imageUrl = imageUrl;
      });
    }
  }

  Future<void> _handleLogout() async {
    await SessionService.logout();
    if (mounted) {
      Navigator.of(context).pushAndRemoveUntil(
        MaterialPageRoute(builder: (_) => LoginScreen()),
        (route) => false,
      );
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: AppColors.primaryGreen,
      body: SafeArea(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            SizedBox(height: 50),
            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 20.0),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  CircleAvatar(
                    radius: 40,
                    backgroundColor: Colors.white,
                    backgroundImage: _imageUrl != null
                        ? NetworkImage(_imageUrl!)
                        : null,
                    child: _imageUrl == null
                        ? Icon(Icons.person, size: 40, color: AppColors.primaryGreen)
                        : null,
                  ),
                  SizedBox(height: 10),
                  Text(
                    _name.isNotEmpty ? _name : 'أهلاً بك',
                    style: TextStyle(color: Colors.white, fontSize: 22, fontWeight: FontWeight.bold),
                  ),
                  Text(
                    _email.isNotEmpty ? _email : 'سجّل دخولك',
                    style: TextStyle(color: Colors.white70, fontSize: 16),
                  ),
                ],
              ),
            ),
            SizedBox(height: 40),
            _buildMenuItem(Icons.play_circle_outline, 'دوراتى', () {
               Navigator.push(context, MaterialPageRoute(builder: (context) => CoursesScreen()));
            }),
            _buildMenuItem(Icons.message_outlined, 'الرسائل', () {
               Navigator.push(context, MaterialPageRoute(builder: (context) => MessagesScreen()));
            }),
            _buildMenuItem(Icons.notifications_none, 'التنبيهات', () {
               Navigator.push(context, MaterialPageRoute(builder: (context) => NotificationsScreen()));
            }),
            _buildMenuItem(Icons.article_outlined, 'المدونه', () {
               Navigator.push(context, MaterialPageRoute(builder: (context) => ArticlesScreen()));
            }),
            _buildMenuItem(Icons.person_outline, 'الملف الشخصى', () {
               Navigator.push(context, MaterialPageRoute(builder: (context) => ProfileScreen()));
            }),
            Divider(color: Colors.white30, indent: 20, endIndent: 20),
            _buildMenuItem(Icons.logout, 'تسجيل خروج', _handleLogout),
          ],
        ),
      ),
    );
  }

  Widget _buildMenuItem(IconData icon, String title, VoidCallback onTap) {
    return ListTile(
      leading: Icon(icon, color: Colors.white, size: 28),
      title: Text(
        title,
        style: TextStyle(color: Colors.white, fontSize: 18),
      ),
      onTap: onTap,
      contentPadding: EdgeInsets.symmetric(horizontal: 20, vertical: 5),
    );
  }
}
