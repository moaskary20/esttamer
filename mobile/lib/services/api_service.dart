import 'dart:convert';
import 'package:http/http.dart' as http;

class ApiService {
  // Using production URL. Change if testing locally again.
  static const String baseUrl = 'https://esttamer.com/api';

  static Future<List<dynamic>> fetchCategories() async {
    try {
      final response = await http.get(Uri.parse('$baseUrl/categories'));
      if (response.statusCode == 200) {
        return json.decode(response.body);
      } else {
        throw Exception('Failed to load categories');
      }
    } catch (e) {
      throw Exception('Error fetching categories: $e');
    }
  }

  static Future<List<dynamic>> fetchLatestBlogs({int limit = 5}) async {
    try {
      final response = await http.get(Uri.parse('$baseUrl/latest_blogs?limit=$limit'));
      if (response.statusCode == 200) {
        return json.decode(response.body);
      } else {
        throw Exception('Failed to load latest blogs');
      }
    } catch (e) {
      throw Exception('Error fetching latest blogs: $e');
    }
  }

  static Future<List<dynamic>> fetchAllBlogs() async {
    return fetchLatestBlogs(limit: 100);
  }

  static Future<List<dynamic>> fetchCoursesByCategory(String categoryId) async {
    try {
      final response = await http.get(
        Uri.parse('$baseUrl/category_wise_course?category_id=$categoryId'),
      );
      if (response.statusCode == 200) {
        return json.decode(response.body);
      } else {
        throw Exception('Failed to load courses for category');
      }
    } catch (e) {
      throw Exception('Error fetching courses by category: $e');
    }
  }

  static Future<List<dynamic>> fetchMyCourses(String authToken) async {
    try {
      final response = await http.get(
        Uri.parse('$baseUrl/my_courses?auth_token=$authToken'),
      );
      if (response.statusCode == 200) {
        return json.decode(response.body);
      } else {
        throw Exception('Failed to load enrolled courses');
      }
    } catch (e) {
      throw Exception('Error fetching my courses: $e');
    }
  }
}
