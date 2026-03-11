import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import '../utils/colors.dart';
import '../services/api_service.dart';
import 'course_detail_screen.dart';

class CategoryCoursesScreen extends StatelessWidget {
  final String categoryId;
  final String categoryName;

  CategoryCoursesScreen({required this.categoryId, required this.categoryName});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          categoryName,
          style: GoogleFonts.tajawal(
            color: AppColors.textDark,
            fontWeight: FontWeight.bold,
          ),
        ),
        backgroundColor: Colors.white,
        elevation: 0,
        centerTitle: true,
        iconTheme: IconThemeData(color: AppColors.primaryGreen),
      ),
      body: FutureBuilder<List<dynamic>>(
        future: ApiService.fetchCoursesByCategory(categoryId),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return Center(
              child: CircularProgressIndicator(color: AppColors.primaryGreen),
            );
          }
          if (snapshot.hasError) {
            return Center(
              child: Padding(
                padding: const EdgeInsets.all(24),
                child: Column(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: [
                    Icon(Icons.error_outline, size: 64, color: Colors.grey),
                    SizedBox(height: 16),
                    Text(
                      'حدث خطأ في تحميل الدورات',
                      style: GoogleFonts.tajawal(fontSize: 16, color: Colors.red),
                      textAlign: TextAlign.center,
                    ),
                  ],
                ),
              ),
            );
          }
          if (!snapshot.hasData || snapshot.data!.isEmpty) {
            return Center(
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Icon(Icons.play_circle_outline, size: 80, color: AppColors.greyText.withOpacity(0.5)),
                  SizedBox(height: 20),
                  Text(
                    'لا توجد دورات في هذا القسم حالياً',
                    style: GoogleFonts.tajawal(fontSize: 18, color: AppColors.textDark),
                    textAlign: TextAlign.center,
                  ),
                ],
              ),
            );
          }

          final courses = snapshot.data!;
          return ListView.builder(
            padding: EdgeInsets.all(16),
            itemCount: courses.length,
            itemBuilder: (context, index) {
              final course = courses[index];
              return GestureDetector(
                onTap: () {
                  final id = course['id'];
                  if (id != null) {
                    Navigator.push(
                      context,
                      MaterialPageRoute(
                        builder: (_) => CourseDetailScreen(
                          courseId: id.toString(),
                          courseTitle: course['title'],
                        ),
                      ),
                    );
                  }
                },
                child: _CourseCard(course: course),
              );
            },
          );
        },
      ),
    );
  }
}

class _CourseCard extends StatelessWidget {
  final Map<String, dynamic> course;

  const _CourseCard({required this.course});

  @override
  Widget build(BuildContext context) {
    final String title = course['title'] ?? 'دورة';
    final String? thumbnail = course['thumbnail'];
    final String price = course['price']?.toString() ?? '';
    final int rating = (course['rating'] ?? 0).toInt();
    final String? instructor = course['instructor_name'];

    return Container(
      margin: EdgeInsets.only(bottom: 16),
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(16),
        boxShadow: [
          BoxShadow(
            color: Colors.black12,
            blurRadius: 8,
            offset: Offset(0, 4),
          ),
        ],
      ),
      child: Row(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          ClipRRect(
            borderRadius: BorderRadius.only(
              topRight: Radius.circular(16),
              bottomRight: Radius.circular(16),
            ),
            child: thumbnail != null && thumbnail.isNotEmpty
                ? Image.network(
                    thumbnail.startsWith('http') ? thumbnail : 'https://esttamer.com/$thumbnail',
                    width: 120,
                    height: 100,
                    fit: BoxFit.cover,
                    errorBuilder: (_, __, ___) => _placeholder(),
                  )
                : _placeholder(),
          ),
          Expanded(
            child: Padding(
              padding: const EdgeInsets.all(12),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  Text(
                    title,
                    maxLines: 2,
                    overflow: TextOverflow.ellipsis,
                    style: GoogleFonts.tajawal(
                      fontSize: 15,
                      fontWeight: FontWeight.bold,
                      color: Colors.black,
                    ),
                  ),
                  if (instructor != null && instructor.isNotEmpty) ...[
                    SizedBox(height: 4),
                    Text(
                      instructor,
                      maxLines: 1,
                      overflow: TextOverflow.ellipsis,
                      style: GoogleFonts.tajawal(fontSize: 12, color: Colors.grey[600]),
                    ),
                  ],
                  SizedBox(height: 8),
                  Row(
                    children: [
                      if (price.isNotEmpty)
                        Container(
                          padding: EdgeInsets.symmetric(horizontal: 8, vertical: 4),
                          decoration: BoxDecoration(
                            color: AppColors.primaryGreen.withOpacity(0.1),
                            borderRadius: BorderRadius.circular(8),
                          ),
                          child: Text(
                            price,
                            style: GoogleFonts.tajawal(
                              color: AppColors.primaryGreen,
                              fontSize: 12,
                              fontWeight: FontWeight.bold,
                            ),
                          ),
                        ),
                      if (rating > 0) ...[
                        if (price.isNotEmpty) SizedBox(width: 8),
                        Icon(Icons.star, size: 16, color: Colors.amber),
                        SizedBox(width: 4),
                        Text(
                          '$rating',
                          style: GoogleFonts.tajawal(fontSize: 12, color: Colors.grey[600]),
                        ),
                      ],
                    ],
                  ),
                ],
              ),
            ),
          ),
        ],
      ),
    );
  }

  Widget _placeholder() {
    return Container(
      width: 120,
      height: 100,
      color: AppColors.lightBackground,
      child: Icon(Icons.play_circle_outline, color: AppColors.primaryGreen),
    );
  }
}
