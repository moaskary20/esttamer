import 'dart:async';
import 'dart:convert';
import 'dart:io';
import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:animate_do/animate_do.dart';
import 'package:http/http.dart' as http;
import '../utils/colors.dart';
import '../services/session_service.dart';
import 'main_screen.dart';

class LoginScreen extends StatefulWidget {
  @override
  State<LoginScreen> createState() => _LoginScreenState();
}

class _LoginScreenState extends State<LoginScreen>
    with SingleTickerProviderStateMixin {
  bool _isLogin = true;
  bool _loading = false;
  bool _obscure = true;

  final _emailController = TextEditingController();
  final _passwordController = TextEditingController();
  final _nameController = TextEditingController();
  final _formKey = GlobalKey<FormState>();

  static const String baseUrl = 'https://esttamer.com/api';

  /// Headers required for API (release builds can be blocked without User-Agent/Accept)
  static const Map<String, String> _apiHeaders = {
    'Accept': 'application/json',
    'Content-Type': 'application/x-www-form-urlencoded',
    'User-Agent': 'EsttamerApp/1.0',
  };

  Future<void> _submit() async {
    if (!_formKey.currentState!.validate()) return;
    setState(() => _loading = true);

    try {
      final Uri url = Uri.parse(_isLogin ? '$baseUrl/login' : '$baseUrl/signup');

      // Split name into first_name and last_name for signup
      String firstName = '';
      String lastName = '';
      if (!_isLogin) {
        final nameParts = _nameController.text.trim().split(' ');
        firstName = nameParts.first;
        lastName = nameParts.length > 1 ? nameParts.sublist(1).join(' ') : '';
      }

      final response = _isLogin
          ? await http
              .post(url, headers: _apiHeaders, body: {
                'email': _emailController.text.trim(),
                'password': _passwordController.text.trim(),
              })
              .timeout(const Duration(seconds: 45))
          : await http
              .post(url, headers: _apiHeaders, body: {
                'first_name': firstName,
                'last_name': lastName,
                'email': _emailController.text.trim(),
                'password': _passwordController.text.trim(),
              })
              .timeout(const Duration(seconds: 45));

      // Release: server may return non-200 or HTML error page
      if (response.statusCode != 200) {
        _showError('خطأ من الخادم (${response.statusCode}). حاول مرة أخرى.');
        if (mounted) setState(() => _loading = false);
        return;
      }

      Map<String, dynamic> data;
      try {
        data = Map<String, dynamic>.from(json.decode(response.body) as Map);
      } catch (_) {
        _showError('استجابة غير متوقعة من الخادم. حاول مرة أخرى.');
        if (mounted) setState(() => _loading = false);
        return;
      }

      if (_isLogin) {
        // ── LOGIN FLOW ──
        if (data['validity'] == 1) {
          await SessionService.saveUser(
            userId: (data['user_id'] ?? '').toString(),
            email: data['email'] ?? _emailController.text.trim(),
            firstName: data['first_name'] ?? '',
            lastName: data['last_name'] ?? '',
            image: data['image'] ?? '',
            authToken: data['token'] ?? '',
          );
          if (mounted) {
            Navigator.of(context).pushReplacement(
              MaterialPageRoute(builder: (_) => MainScreen()),
            );
          }
        } else {
          _showError(data['message'] ?? 'البريد أو كلمة المرور غير صحيحة');
        }
      } else {
        // ── SIGNUP FLOW ──
        if (data['validity'] == true || data['status'] == 200) {
          if (data['email_verification'] == 'enable') {
            _showSuccess(data['message'] ?? 'تم التسجيل! تحقق من بريدك الإلكتروني لتفعيل حسابك');
          } else {
            _showSuccess('تم إنشاء حسابك بنجاح! سجّل دخولك الآن');
          }
          // Switch to login tab
          setState(() => _isLogin = true);
        } else {
          _showError(data['message'] ?? 'حدث خطأ في التسجيل');
        }
      }
    } on TimeoutException catch (_) {
      _showError('انتهت مهلة الاتصال. تحقق من الإنترنت وحاول مرة أخرى.');
    } on SocketException catch (_) {
      _showError('لا يوجد اتصال بالإنترنت. تحقق من الشبكة.');
    } on HandshakeException catch (_) {
      _showError('خطأ في الاتصال الآمن. تحقق من التاريخ والوقت على الجهاز أو جرّب شبكة أخرى.');
    } on TlsException catch (_) {
      _showError('خطأ في الاتصال الآمن. جرّب شبكة أخرى أو تحديث الجهاز.');
    } catch (e) {
      _showError('تعذّر الاتصال بالخادم. تحقق من الإنترنت وحاول مرة أخرى.');
    }
    if (mounted) setState(() => _loading = false);
  }

  void _showError(String msg) {
    ScaffoldMessenger.of(context).showSnackBar(
      SnackBar(
        content: Text(msg, style: GoogleFonts.tajawal()),
        backgroundColor: Colors.red.shade700,
      ),
    );
  }

  void _showSuccess(String msg) {
    ScaffoldMessenger.of(context).showSnackBar(
      SnackBar(
        content: Text(msg, style: GoogleFonts.tajawal()),
        backgroundColor: AppColors.primaryGreen,
        duration: Duration(seconds: 4),
      ),
    );
  }

  @override
  void dispose() {
    _emailController.dispose();
    _passwordController.dispose();
    _nameController.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SingleChildScrollView(
        child: Column(
          children: [
            // ── TOP WAVE HEADER ──
            Container(
              height: 280,
              width: double.infinity,
              decoration: BoxDecoration(
                gradient: AppColors.primaryGradient,
                borderRadius: BorderRadius.only(
                  bottomLeft: Radius.circular(60),
                  bottomRight: Radius.circular(60),
                ),
              ),
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  FadeInDown(
                    child: Container(
                      width: 90,
                      height: 90,
                      decoration: BoxDecoration(
                        color: Colors.white,
                        shape: BoxShape.circle,
                        boxShadow: [
                          BoxShadow(color: Colors.black26, blurRadius: 12),
                        ],
                      ),
                      child: Center(
                        child: Text(
                          'استمر',
                          style: GoogleFonts.tajawal(
                            color: AppColors.primaryGreen,
                            fontSize: 20,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                      ),
                    ),
                  ),
                  SizedBox(height: 16),
                  FadeInDown(
                    delay: Duration(milliseconds: 200),
                    child: Text(
                      _isLogin ? 'مرحباً بعودتك!' : 'انضم إلينا',
                      style: GoogleFonts.tajawal(
                        color: Colors.white,
                        fontSize: 28,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                  ),
                  FadeInDown(
                    delay: Duration(milliseconds: 300),
                    child: Text(
                      _isLogin
                          ? 'سجّل دخولك للمتابعة'
                          : 'أنشئ حسابك الآن مجاناً',
                      style: GoogleFonts.tajawal(
                          color: Colors.white70, fontSize: 15),
                    ),
                  ),
                ],
              ),
            ),

            // ── FORM CARD ──
            Padding(
              padding: EdgeInsets.symmetric(horizontal: 24, vertical: 32),
              child: FadeInUp(
                child: Form(
                  key: _formKey,
                  child: Column(
                    children: [
                      // Toggle Tabs
                      Container(
                        decoration: BoxDecoration(
                          color: Colors.grey[100],
                          borderRadius: BorderRadius.circular(14),
                        ),
                        child: Row(
                          children: [
                            _buildTab('تسجيل الدخول', true),
                            _buildTab('إنشاء حساب', false),
                          ],
                        ),
                      ),
                      SizedBox(height: 28),

                      // Name field (signup only)
                      if (!_isLogin) ...[
                        _buildField(
                          controller: _nameController,
                          label: 'الاسم الكامل',
                          icon: Icons.person_outline,
                          validator: (v) =>
                              (v == null || v.isEmpty) ? 'أدخل اسمك' : null,
                        ),
                        SizedBox(height: 16),
                      ],

                      // Email
                      _buildField(
                        controller: _emailController,
                        label: 'البريد الإلكتروني',
                        icon: Icons.email_outlined,
                        keyboardType: TextInputType.emailAddress,
                        validator: (v) => (v == null || !v.contains('@'))
                            ? 'أدخل بريداً إلكترونياً صحيحاً'
                            : null,
                      ),
                      SizedBox(height: 16),

                      // Password
                      _buildField(
                        controller: _passwordController,
                        label: 'كلمة المرور',
                        icon: Icons.lock_outline,
                        obscure: _obscure,
                        suffix: IconButton(
                          icon: Icon(
                            _obscure
                                ? Icons.visibility_off_outlined
                                : Icons.visibility_outlined,
                            color: Colors.grey,
                          ),
                          onPressed: () =>
                              setState(() => _obscure = !_obscure),
                        ),
                        validator: (v) => (v == null || v.length < 6)
                            ? 'كلمة المرور يجب أن تكون 6 أحرف على الأقل'
                            : null,
                      ),
                      SizedBox(height: 28),

                      // Submit button
                      SizedBox(
                        width: double.infinity,
                        height: 54,
                        child: DecoratedBox(
                          decoration: BoxDecoration(
                            gradient: AppColors.primaryGradient,
                            borderRadius: BorderRadius.circular(14),
                            boxShadow: [
                              BoxShadow(
                                color: AppColors.primaryGreen.withOpacity(0.4),
                                blurRadius: 12,
                                offset: Offset(0, 6),
                              ),
                            ],
                          ),
                          child: ElevatedButton(
                            onPressed: _loading ? null : _submit,
                            style: ElevatedButton.styleFrom(
                              backgroundColor: Colors.transparent,
                              shadowColor: Colors.transparent,
                              shape: RoundedRectangleBorder(
                                borderRadius: BorderRadius.circular(14),
                              ),
                            ),
                            child: _loading
                                ? CircularProgressIndicator(
                                    color: Colors.white, strokeWidth: 2)
                                : Text(
                                    _isLogin ? 'دخول' : 'إنشاء الحساب',
                                    style: GoogleFonts.tajawal(
                                      color: Colors.white,
                                      fontSize: 18,
                                      fontWeight: FontWeight.bold,
                                    ),
                                  ),
                          ),
                        ),
                      ),

                      SizedBox(height: 20),
                      if (_isLogin)
                        TextButton(
                          onPressed: () {},
                          child: Text(
                            'نسيت كلمة المرور؟',
                            style: GoogleFonts.tajawal(
                                color: AppColors.primaryGreen),
                          ),
                        ),
                    ],
                  ),
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildTab(String label, bool isLoginTab) {
    final isActive = (_isLogin == isLoginTab);
    return Expanded(
      child: GestureDetector(
        onTap: () => setState(() => _isLogin = isLoginTab),
        child: AnimatedContainer(
          duration: Duration(milliseconds: 250),
          margin: EdgeInsets.all(5),
          padding: EdgeInsets.symmetric(vertical: 12),
          decoration: BoxDecoration(
            color: isActive ? AppColors.primaryGreen : Colors.transparent,
            borderRadius: BorderRadius.circular(10),
          ),
          child: Text(
            label,
            textAlign: TextAlign.center,
            style: GoogleFonts.tajawal(
              color: isActive ? Colors.white : Colors.grey,
              fontWeight: FontWeight.bold,
              fontSize: 14,
            ),
          ),
        ),
      ),
    );
  }

  Widget _buildField({
    required TextEditingController controller,
    required String label,
    required IconData icon,
    TextInputType keyboardType = TextInputType.text,
    bool obscure = false,
    Widget? suffix,
    String? Function(String?)? validator,
  }) {
    return TextFormField(
      controller: controller,
      keyboardType: keyboardType,
      obscureText: obscure,
      textDirection: TextDirection.ltr,
      validator: validator,
      decoration: InputDecoration(
        labelText: label,
        labelStyle: GoogleFonts.tajawal(color: Colors.grey[600]),
        prefixIcon: Icon(icon, color: AppColors.primaryGreen),
        suffixIcon: suffix,
        filled: true,
        fillColor: Colors.grey[50],
        border: OutlineInputBorder(
          borderRadius: BorderRadius.circular(14),
          borderSide: BorderSide.none,
        ),
        focusedBorder: OutlineInputBorder(
          borderRadius: BorderRadius.circular(14),
          borderSide: BorderSide(color: AppColors.primaryGreen, width: 2),
        ),
      ),
      style: GoogleFonts.tajawal(color: Colors.black),
    );
  }
}
