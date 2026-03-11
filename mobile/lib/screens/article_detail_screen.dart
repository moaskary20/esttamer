import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:flutter_html/flutter_html.dart';
import 'package:html/parser.dart' as html_parser;
import '../utils/colors.dart';

class ArticleDetailScreen extends StatelessWidget {
  final Map<String, dynamic> blog;

  const ArticleDetailScreen({Key? key, required this.blog}) : super(key: key);

  /// Decodes HTML entities (e.g. &lt; → <, &amp; → &) using the html parser.
  String _decodeHtmlEntities(String text) {
    if (text.isEmpty) return '';
    final doc = html_parser.parseFragment(text);
    return doc.outerHtml;
  }

  @override
  Widget build(BuildContext context) {
    final String title = blog['title'] ?? '';
    final String rawDesc = _decodeHtmlEntities(blog['description'] ?? '');
    final String? thumbnail = blog['thumbnail'];
    final String? categoryName = blog['category_name'];
    final String? author = blog['author'];

    return Scaffold(
      appBar: AppBar(
        title: Text(
          'المقال',
          style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black),
        ),
        centerTitle: true,
        backgroundColor: Colors.white,
        elevation: 0,
        iconTheme: IconThemeData(color: AppColors.primaryGreen),
      ),
      body: SingleChildScrollView(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: [
            if (thumbnail != null && thumbnail.isNotEmpty)
              Image.network(
                thumbnail,
                height: 220,
                width: double.infinity,
                fit: BoxFit.cover,
                errorBuilder: (_, __, ___) => Container(
                  height: 220,
                  color: AppColors.lightBackground,
                  child: Icon(Icons.article_outlined, size: 80, color: AppColors.primaryGreen),
                ),
              ),
            Padding(
              padding: const EdgeInsets.all(20),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  if (categoryName != null && categoryName.isNotEmpty)
                    Container(
                      padding: EdgeInsets.symmetric(horizontal: 10, vertical: 6),
                      decoration: BoxDecoration(
                        color: AppColors.primaryGreen.withOpacity(0.1),
                        borderRadius: BorderRadius.circular(8),
                      ),
                      child: Text(
                        categoryName,
                        style: GoogleFonts.tajawal(
                          color: AppColors.primaryGreen,
                          fontSize: 12,
                          fontWeight: FontWeight.bold,
                        ),
                      ),
                    ),
                  if (categoryName != null && categoryName.isNotEmpty) SizedBox(height: 12),
                  Text(
                    title,
                    style: GoogleFonts.tajawal(
                      fontSize: 22,
                      fontWeight: FontWeight.bold,
                      color: Colors.black,
                    ),
                  ),
                  if (author != null && author.isNotEmpty) ...[
                    SizedBox(height: 8),
                    Text(
                      'بقلم: $author',
                      style: GoogleFonts.tajawal(fontSize: 14, color: Colors.grey[600]),
                    ),
                  ],
                  SizedBox(height: 20),
                  Html(
                    data: rawDesc,
                    style: {
                      "body": Style(
                        fontSize: FontSize(16),
                        lineHeight: LineHeight(1.8),
                        color: Colors.black87,
                        fontFamily: GoogleFonts.tajawal().fontFamily,
                        margin: Margins.zero,
                        padding: HtmlPaddings.zero,
                      ),
                      "p": Style(
                        margin: Margins.only(bottom: 12),
                      ),
                    },
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
