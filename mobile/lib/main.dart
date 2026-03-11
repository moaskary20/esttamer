import 'package:flutter/material.dart';
import 'screens/splash_screen.dart';
import 'utils/colors.dart';
import 'package:flutter_localizations/flutter_localizations.dart';
import 'package:google_fonts/google_fonts.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    final textTheme = GoogleFonts.tajawalTextTheme().apply(
      bodyColor: Colors.black,
      displayColor: Colors.black,
    );

    return MaterialApp(
      title: 'استمر',
      debugShowCheckedModeBanner: false,
      locale: const Locale('ar', 'EG'),
      supportedLocales: const [
        Locale('ar', 'EG'),
        Locale('en', 'US'),
      ],
      localizationsDelegates: const [
        GlobalMaterialLocalizations.delegate,
        GlobalWidgetsLocalizations.delegate,
        GlobalCupertinoLocalizations.delegate,
      ],
      theme: ThemeData(
        textTheme: textTheme,
        colorScheme: ColorScheme.fromSeed(seedColor: AppColors.primaryGreen),
        scaffoldBackgroundColor: AppColors.lightBackground,
        useMaterial3: true,
        iconTheme: const IconThemeData(color: Colors.black),
        appBarTheme: AppBarTheme(
          backgroundColor: Colors.white,
          elevation: 0,
          iconTheme: const IconThemeData(color: Colors.black),
          actionsIconTheme: const IconThemeData(color: Colors.black),
          titleTextStyle: GoogleFonts.tajawal(
            color: Colors.black,
            fontSize: 20,
            fontWeight: FontWeight.bold,
          ),
        ),
      ),
      home: SplashScreen(),
    );
  }
}
