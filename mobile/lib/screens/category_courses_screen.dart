import 'package:flutter/material.dart';
import '../utils/colors.dart';

class CategoryCoursesScreen extends StatelessWidget {
  final String categoryId;
  final String categoryName;

  CategoryCoursesScreen({required this.categoryId, required this.categoryName});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(categoryName, style: TextStyle(color: AppColors.textDark, fontWeight: FontWeight.bold)),
        backgroundColor: Colors.white,
        elevation: 0,
        centerTitle: true,
        iconTheme: IconThemeData(color: AppColors.primaryGreen),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Icon(Icons.category, size: 80, color: AppColors.greyText.withOpacity(0.5)),
            SizedBox(height: 20),
            Text(
              'دورات قسم $categoryName سيتم عرضها هنا',
              style: TextStyle(fontSize: 18, color: AppColors.textDark),
              textAlign: TextAlign.center,
            ),
            SizedBox(height: 10),
            Text(
              'رقم القسم: $categoryId',
              style: TextStyle(fontSize: 14, color: AppColors.greyText),
              textAlign: TextAlign.center,
            ),
          ],
        ),
      ),
    );
  }
}
