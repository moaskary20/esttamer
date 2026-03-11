import 'package:shared_preferences/shared_preferences.dart';

/// Manages user session data using SharedPreferences.
class SessionService {
  static const _keyUserId = 'user_id';
  static const _keyEmail = 'email';
  static const _keyFirstName = 'first_name';
  static const _keyLastName = 'last_name';
  static const _keyImage = 'user_image';
  static const _keyAuthToken = 'auth_token';

  static SharedPreferences? _prefs;

  static Future<SharedPreferences> _getPrefs() async {
    _prefs ??= await SharedPreferences.getInstance();
    return _prefs!;
  }

  /// Save user data after successful login.
  static Future<void> saveUser({
    required String userId,
    required String email,
    required String firstName,
    required String lastName,
    String? image,
    String? authToken,
  }) async {
    final prefs = await _getPrefs();
    await prefs.setString(_keyUserId, userId);
    await prefs.setString(_keyEmail, email);
    await prefs.setString(_keyFirstName, firstName);
    await prefs.setString(_keyLastName, lastName);
    if (image != null && image.isNotEmpty) {
      await prefs.setString(_keyImage, image);
    }
    if (authToken != null && authToken.isNotEmpty) {
      await prefs.setString(_keyAuthToken, authToken);
    }
  }

  static Future<bool> isLoggedIn() async {
    final prefs = await _getPrefs();
    return prefs.getString(_keyUserId)?.isNotEmpty ?? false;
  }

  static Future<String?> getUserId() async {
    final prefs = await _getPrefs();
    return prefs.getString(_keyUserId);
  }

  static Future<String?> getEmail() async {
    final prefs = await _getPrefs();
    return prefs.getString(_keyEmail);
  }

  static Future<String> getName() async {
    final prefs = await _getPrefs();
    final first = prefs.getString(_keyFirstName) ?? '';
    final last = prefs.getString(_keyLastName) ?? '';
    return '$first $last'.trim();
  }

  /// Returns the full profile image URL, or null if not available.
  static Future<String?> getImageUrl() async {
    final prefs = await _getPrefs();
    final imageCode = prefs.getString(_keyImage);
    if (imageCode == null || imageCode.isEmpty) return null;
    return 'https://esttamer.com/uploads/user_image/$imageCode.jpg';
  }

  /// Returns the stored auth token, or null if not available.
  static Future<String?> getAuthToken() async {
    final prefs = await _getPrefs();
    return prefs.getString(_keyAuthToken);
  }

  /// Clear all session data (logout).
  static Future<void> logout() async {
    final prefs = await _getPrefs();
    await prefs.clear();
    _prefs = null;
  }
}
