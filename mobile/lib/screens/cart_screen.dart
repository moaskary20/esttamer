import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import '../utils/colors.dart';

class CartScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('السلة', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
        backgroundColor: Colors.white,
        elevation: 0,
        iconTheme: IconThemeData(color: AppColors.primaryGreen),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Container(
              width: 120,
              height: 120,
              decoration: BoxDecoration(
                color: AppColors.primaryGreen.withOpacity(0.1),
                shape: BoxShape.circle,
              ),
              child: Icon(Icons.shopping_cart_outlined, size: 60, color: AppColors.primaryGreen),
            ),
            SizedBox(height: 24),
            Text(
              'السلة فارغة',
              style: GoogleFonts.tajawal(fontSize: 20, fontWeight: FontWeight.bold, color: Colors.black),
            ),
            SizedBox(height: 10),
            Text(
              'لم تقم بإضافة أي دورة للسلة بعد',
              style: GoogleFonts.tajawal(fontSize: 14, color: Colors.grey[600]),
            ),
            SizedBox(height: 30),
            Container(
              width: 200,
              decoration: BoxDecoration(
                gradient: AppColors.primaryGradient,
                borderRadius: BorderRadius.circular(14),
              ),
              child: ElevatedButton(
                onPressed: () => Navigator.pop(context),
                style: ElevatedButton.styleFrom(
                  backgroundColor: Colors.transparent,
                  shadowColor: Colors.transparent,
                  padding: EdgeInsets.symmetric(vertical: 14),
                  shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(14)),
                ),
                child: Text(
                  'تصفّح الدورات',
                  style: GoogleFonts.tajawal(color: Colors.white, fontSize: 16, fontWeight: FontWeight.bold),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
