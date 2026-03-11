import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:http/http.dart' as http;
import '../utils/colors.dart';
import '../services/session_service.dart';

class EditProfileScreen extends StatefulWidget {
  @override
  State<EditProfileScreen> createState() => _EditProfileScreenState();
}

class _EditProfileScreenState extends State<EditProfileScreen> {
  final _formKey = GlobalKey<FormState>();
  final _firstNameCtrl = TextEditingController();
  final _lastNameCtrl = TextEditingController();
  final _emailCtrl = TextEditingController();
  final _bioCtrl = TextEditingController();
  bool _loading = true;
  bool _saving = false;
  String? _authToken;
  String? _imageUrl;

  static const String baseUrl = 'https://esttamer.com/api';

  @override
  void initState() {
    super.initState();
    _loadUserData();
  }

  Future<void> _loadUserData() async {
    _authToken = await SessionService.getAuthToken();
    if (_authToken == null || _authToken!.isEmpty) {
      if (mounted) setState(() => _loading = false);
      return;
    }
    try {
      final response = await http.get(
        Uri.parse('$baseUrl/userdata?auth_token=$_authToken'),
      );
      if (response.statusCode == 200) {
        final data = json.decode(response.body);
        if (mounted) {
          setState(() {
            _firstNameCtrl.text = data['first_name'] ?? '';
            _lastNameCtrl.text = data['last_name'] ?? '';
            _emailCtrl.text = data['email'] ?? '';
            _bioCtrl.text = data['biography'] ?? '';
            _imageUrl = data['image']?.toString();
            _loading = false;
          });
        }
      }
    } catch (e) {
      if (mounted) setState(() => _loading = false);
    }
  }

  Future<void> _save() async {
    if (!_formKey.currentState!.validate()) return;
    setState(() => _saving = true);

    try {
      final response = await http.post(
        Uri.parse('$baseUrl/update_userdata'),
        body: {
          'auth_token': _authToken ?? '',
          'first_name': _firstNameCtrl.text.trim(),
          'last_name': _lastNameCtrl.text.trim(),
          'email': _emailCtrl.text.trim(),
          'biography': _bioCtrl.text.trim(),
        },
      );
      final data = json.decode(response.body);
      if (data['status'] == 'success') {
        // Update local session
        await SessionService.saveUser(
          userId: (data['id'] ?? '').toString(),
          email: data['email'] ?? _emailCtrl.text.trim(),
          firstName: data['first_name'] ?? _firstNameCtrl.text.trim(),
          lastName: data['last_name'] ?? _lastNameCtrl.text.trim(),
          image: data['image'] ?? '',
          authToken: _authToken,
        );
        if (mounted) {
          ScaffoldMessenger.of(context).showSnackBar(
            SnackBar(content: Text('تم حفظ التعديلات ✅', style: GoogleFonts.tajawal()), backgroundColor: AppColors.primaryGreen),
          );
          Navigator.pop(context, true); // Return true to refresh
        }
      } else {
        if (mounted) {
          ScaffoldMessenger.of(context).showSnackBar(
            SnackBar(content: Text(data['error_reason'] ?? 'حدث خطأ', style: GoogleFonts.tajawal()), backgroundColor: Colors.red.shade700),
          );
        }
      }
    } catch (e) {
      if (mounted) {
        ScaffoldMessenger.of(context).showSnackBar(
          SnackBar(content: Text('تعذّر الاتصال بالخادم', style: GoogleFonts.tajawal()), backgroundColor: Colors.red.shade700),
        );
      }
    }
    if (mounted) setState(() => _saving = false);
  }

  @override
  void dispose() {
    _firstNameCtrl.dispose();
    _lastNameCtrl.dispose();
    _emailCtrl.dispose();
    _bioCtrl.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: AppColors.lightBackground,
      appBar: AppBar(
        title: Text('تعديل الملف الشخصي', style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black)),
        centerTitle: true,
        backgroundColor: Colors.white,
        elevation: 0,
        iconTheme: IconThemeData(color: AppColors.primaryGreen),
      ),
      body: _loading
          ? Center(child: CircularProgressIndicator(color: AppColors.primaryGreen))
          : SingleChildScrollView(
              padding: EdgeInsets.all(20),
              child: Form(
                key: _formKey,
                child: Column(
                  children: [
                    // Avatar
                    Center(
                      child: Stack(
                        alignment: Alignment.bottomLeft,
                        children: [
                          CircleAvatar(
                            radius: 50,
                            backgroundColor: AppColors.primaryGreen.withAlpha(40),
                            backgroundImage: _imageUrl != null && _imageUrl!.isNotEmpty
                                ? NetworkImage(_imageUrl!)
                                : null,
                            child: (_imageUrl == null || _imageUrl!.isEmpty)
                                ? Icon(Icons.person, size: 50, color: AppColors.primaryGreen)
                                : null,
                          ),
                          CircleAvatar(
                            radius: 16,
                            backgroundColor: Colors.white,
                            child: Icon(Icons.camera_alt, size: 16, color: AppColors.primaryGreen),
                          ),
                        ],
                      ),
                    ),
                    SizedBox(height: 28),

                    // First Name
                    _buildField(
                      controller: _firstNameCtrl,
                      label: 'الاسم الأول',
                      icon: Icons.person_outline,
                      validator: (v) => (v == null || v.isEmpty) ? 'مطلوب' : null,
                    ),
                    SizedBox(height: 16),

                    // Last Name
                    _buildField(
                      controller: _lastNameCtrl,
                      label: 'اسم العائلة',
                      icon: Icons.person_outline,
                      validator: (v) => (v == null || v.isEmpty) ? 'مطلوب' : null,
                    ),
                    SizedBox(height: 16),

                    // Email
                    _buildField(
                      controller: _emailCtrl,
                      label: 'البريد الإلكتروني',
                      icon: Icons.email_outlined,
                      keyboardType: TextInputType.emailAddress,
                      validator: (v) => (v == null || !v.contains('@')) ? 'بريد غير صالح' : null,
                    ),
                    SizedBox(height: 16),

                    // Biography
                    _buildField(
                      controller: _bioCtrl,
                      label: 'نبذة تعريفية',
                      icon: Icons.info_outline,
                      maxLines: 4,
                    ),
                    SizedBox(height: 32),

                    // Save Button
                    SizedBox(
                      width: double.infinity,
                      height: 52,
                      child: Container(
                        decoration: BoxDecoration(
                          gradient: AppColors.primaryGradient,
                          borderRadius: BorderRadius.circular(14),
                          boxShadow: [BoxShadow(color: AppColors.primaryGreen.withAlpha(80), blurRadius: 10, offset: Offset(0, 4))],
                        ),
                        child: ElevatedButton(
                          onPressed: _saving ? null : _save,
                          style: ElevatedButton.styleFrom(
                            backgroundColor: Colors.transparent,
                            shadowColor: Colors.transparent,
                            shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(14)),
                          ),
                          child: _saving
                              ? SizedBox(width: 24, height: 24, child: CircularProgressIndicator(color: Colors.white, strokeWidth: 2.5))
                              : Text('حفظ التعديلات', style: GoogleFonts.tajawal(fontSize: 17, fontWeight: FontWeight.bold, color: Colors.white)),
                        ),
                      ),
                    ),
                  ],
                ),
              ),
            ),
    );
  }

  Widget _buildField({
    required TextEditingController controller,
    required String label,
    required IconData icon,
    TextInputType? keyboardType,
    String? Function(String?)? validator,
    int maxLines = 1,
  }) {
    return Container(
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(14),
        boxShadow: [BoxShadow(color: Colors.black.withAlpha(13), blurRadius: 6, offset: Offset(0, 2))],
      ),
      child: TextFormField(
        controller: controller,
        keyboardType: keyboardType,
        maxLines: maxLines,
        validator: validator,
        style: GoogleFonts.tajawal(fontSize: 15),
        decoration: InputDecoration(
          labelText: label,
          labelStyle: GoogleFonts.tajawal(color: Colors.grey[600]),
          prefixIcon: Icon(icon, color: AppColors.primaryGreen),
          border: OutlineInputBorder(
            borderRadius: BorderRadius.circular(14),
            borderSide: BorderSide.none,
          ),
          filled: true,
          fillColor: Colors.white,
          contentPadding: EdgeInsets.symmetric(horizontal: 16, vertical: 14),
        ),
      ),
    );
  }
}
