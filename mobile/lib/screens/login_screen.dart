import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:animate_do/animate_do.dart';
import 'package:http/http.dart' as http;
import '../utils/colors.dart';
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

  Future<void> _submit() async {
    if (!_formKey.currentState!.validate()) return;
    setState(() => _loading = true);

    try {
      final Uri url = _isLogin
          ? Uri.parse(
              '$baseUrl/login_get?email=${_emailController.text.trim()}&password=${_passwordController.text.trim()}')
          : Uri.parse('$baseUrl/signup');

      final response = _isLogin
          ? await http.get(url)
          : await http.post(url, body: {
              'full_name': _nameController.text.trim(),
              'email': _emailController.text.trim(),
              'password': _passwordController.text.trim(),
            });

      final data = json.decode(response.body);
      if (data['validity'] == 1 || data['status'] == 1) {
        if (mounted) {
          Navigator.of(context).pushReplacement(
            MaterialPageRoute(builder: (_) => MainScreen()),
          );
        }
      } else {
        _showError(data['message'] ?? 'خطأ في البيانات');
      }
    } catch (e) {
      _showError('تعذّر الاتصال بالخادم');
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
