import 'package:flutter/material.dart';

class AppColors {
  static const Color primaryGreen = Color(0xFF20E3B2);
  static const Color secondaryGreen = Color(0xFF29FFC6);
  static const Color darkBackground = Color(0xFF1E1E2C);
  static const Color lightBackground = Color(0xFFF4F4F9);
  static const Color textDark = Color(0xFF333333);
  static const Color textLight = Color(0xFFFFFFFF);
  static const Color greyText = Color(0xFF888888);

  static const LinearGradient primaryGradient = LinearGradient(
    colors: [primaryGreen, secondaryGreen],
    begin: Alignment.topLeft,
    end: Alignment.bottomRight,
  );
}
