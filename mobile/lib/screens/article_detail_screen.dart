import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:flutter_html/flutter_html.dart';
import '../utils/colors.dart';

class ArticleDetailScreen extends StatelessWidget {
  final Map<String, dynamic> blog;

  const ArticleDetailScreen({Key? key, required this.blog}) : super(key: key);

  /// Cleans Word/Office-generated HTML so flutter_html can render it properly.
  String _cleanWordHtml(String html) {
    if (html.isEmpty) return '';

    // 1. Decode double-encoded HTML entities if present
    if (html.contains('&lt;') || html.contains('&gt;')) {
      html = html
          .replaceAll('&lt;', '<')
          .replaceAll('&gt;', '>')
          .replaceAll('&amp;', '&')
          .replaceAll('&quot;', '"')
          .replaceAll('&#39;', "'")
          .replaceAll('&nbsp;', ' ');
    }

    // 2. Remove all style, class, dir, lang, align attributes
    final attrPattern = RegExp(
      r'''\s+(style|class|dir|lang|align|name|id)\s*=\s*("[^"]*"|'[^']*')''',
      caseSensitive: false,
    );
    html = html.replaceAll(attrPattern, '');

    // 3. Remove <span>, </span>, <o:p>, </o:p>, <font>, </font> tags (keep inner content)
    html = html.replaceAll(RegExp(r'</?span[^>]*>'), '');
    html = html.replaceAll(RegExp(r'</?o:p[^>]*>'), '');
    html = html.replaceAll(RegExp(r'</?font[^>]*>'), '');

    // 4. Clean up empty paragraphs and collapse whitespace
    html = html.replaceAll(RegExp(r'<p>\s*</p>'), '');
    html = html.replaceAll(RegExp(r'\s+'), ' ');

    return html.trim();
  }

  @override
  Widget build(BuildContext context) {
    final String title = blog['title'] ?? '';
    final String rawDesc = _cleanWordHtml(blog['description'] ?? '');
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
              Builder(
                builder: (context) {
                  String thumbUrl = thumbnail;
                  if (thumbUrl.endsWith('/') && blog['banner'] != null && blog['banner'].toString().isNotEmpty) {
                    thumbUrl += blog['banner'].toString();
                  }
                  
                  if (thumbUrl.endsWith('/')) return SizedBox.shrink();

                  return Image.network(
                    thumbUrl,
                    height: 220,
                    width: double.infinity,
                    fit: BoxFit.cover,
                    errorBuilder: (_, __, ___) => Container(
                      height: 220,
                      color: AppColors.lightBackground,
                      child: Icon(Icons.article_outlined, size: 80, color: AppColors.primaryGreen),
                    ),
                  );
                },
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
