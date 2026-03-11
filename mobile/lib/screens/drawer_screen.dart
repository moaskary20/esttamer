import 'package:flutter/material.dart';
import '../utils/colors.dart';
import 'placeholder_screens.dart';

class DrawerScreen extends StatelessWidget {
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
                    child: Icon(Icons.person, size: 40, color: AppColors.primaryGreen),
                  ),
                  SizedBox(height: 10),
                  Text(
                    'أهلاً بك',
                    style: TextStyle(color: Colors.white, fontSize: 22, fontWeight: FontWeight.bold),
                  ),
                  Text(
                    'طالب مستمر',
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
            _buildMenuItem(Icons.logout, 'تسجيل خروج', () {
               // Handle logout tap
            }),
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
