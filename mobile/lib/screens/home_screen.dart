import 'package:flutter/material.dart';
import 'package:carousel_slider/carousel_slider.dart';
import 'package:flutter_zoom_drawer/flutter_zoom_drawer.dart';
import '../utils/colors.dart';
import '../utils/html_utils.dart';
import '../services/api_service.dart';
import 'category_courses_screen.dart';
import 'article_detail_screen.dart';
import 'cart_screen.dart';
import 'placeholder_screens.dart';

class HomeScreen extends StatelessWidget {
  final List<Map<String, dynamic>> imgList = [
    {'type': 'asset', 'path': 'assets/1slider.png'},
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('استمر', style: TextStyle(color: AppColors.textDark, fontWeight: FontWeight.bold, fontSize: 24)),
        backgroundColor: Colors.white,
        elevation: 0,
        centerTitle: true,
        iconTheme: IconThemeData(color: AppColors.primaryGreen),
        leadingWidth: 100,
        leading: Row(
          mainAxisAlignment: MainAxisAlignment.spaceEvenly,
          children: [
            IconButton(
              icon: Icon(Icons.notifications_none, color: AppColors.primaryGreen),
              onPressed: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) => NotificationsScreen()));
              },
            ),
            IconButton(
              icon: Icon(Icons.shopping_cart_outlined, color: AppColors.primaryGreen),
              onPressed: () {
                Navigator.push(context, MaterialPageRoute(builder: (_) => CartScreen()));
              },
            ),
          ],
        ),
        actions: [
          IconButton(
            icon: Icon(Icons.menu_open, color: AppColors.primaryGreen, size: 28),
            onPressed: () {
              // Toggle ZoomDrawer
              ZoomDrawer.of(context)!.toggle();
            },
          ),
          SizedBox(width: 10),
        ],
      ),
      body: SingleChildScrollView(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            // 1. Image Slider Section
            CarouselSlider(
              options: CarouselOptions(
                height: 200.0,
                autoPlay: imgList.length > 1,
                enlargeCenterPage: true,
                aspectRatio: 16 / 9,
                autoPlayCurve: Curves.fastOutSlowIn,
                enableInfiniteScroll: imgList.length > 1,
                autoPlayAnimationDuration: Duration(milliseconds: 800),
                viewportFraction: 0.8,
              ),
              items: imgList.map((item) => Container(
                margin: EdgeInsets.symmetric(horizontal: 5),
                child: ClipRRect(
                  borderRadius: BorderRadius.circular(10),
                  child: item['type'] == 'asset'
                      ? Image.asset(
                          item['path'],
                          fit: BoxFit.cover,
                          width: double.infinity,
                        )
                      : Image.network(
                          item['path'],
                          fit: BoxFit.cover,
                          width: double.infinity,
                          loadingBuilder: (context, child, loadingProgress) {
                            if (loadingProgress == null) return child;
                            return Center(child: CircularProgressIndicator(color: AppColors.primaryGreen));
                          },
                        ),
                ),
              )).toList(),
            ),
            SizedBox(height: 20),

            // 2. Why Esttamer Platform? Section
            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 16.0),
              child: Text(
                'لماذا منصة استمر؟',
                style: TextStyle(fontSize: 22, fontWeight: FontWeight.bold, color: AppColors.textDark),
              ),
            ),
            SizedBox(height: 10),
            GridView.count(
              crossAxisCount: 2,
              shrinkWrap: true,
              physics: NeverScrollableScrollPhysics(),
              children: [
                _buildFeatureCard(Icons.verified_user, 'مدربون و أخصائيون معتمدون'),
                _buildFeatureCard(Icons.thumb_up_alt_outlined, 'سهولة الإستخدام'),
                _buildFeatureCard(Icons.workspace_premium, 'شهادات و امتحانات'),
                _buildFeatureCard(Icons.monetization_on_outlined, 'الأسعار المناسبة'),
              ],
            ),
            SizedBox(height: 20),

            // 3. Main Categories Section
            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 16.0),
              child: Text(
                'ابداء التعلم من افضل منصه',
                style: TextStyle(fontSize: 22, fontWeight: FontWeight.bold, color: AppColors.textDark),
              ),
            ),
            SizedBox(height: 10),
            Container(
              height: 120,
              child: FutureBuilder<List<dynamic>>(
                future: ApiService.fetchCategories(),
                builder: (context, snapshot) {
                  if (snapshot.connectionState == ConnectionState.waiting) {
                    return Center(child: CircularProgressIndicator(color: AppColors.primaryGreen));
                  } else if (snapshot.hasError) {
                    return Center(child: Text('خطأ في تحميل الأقسام', style: TextStyle(color: Colors.red)));
                  } else if (!snapshot.hasData || snapshot.data!.isEmpty) {
                    return Center(child: Text('لا توجد أقسام حالياً', style: TextStyle(color: AppColors.greyText)));
                  }

                  final categories = snapshot.data!;
                  return ListView.builder(
                    scrollDirection: Axis.horizontal,
                    itemCount: categories.length,
                    itemBuilder: (context, index) {
                      final category = categories[index];
                      // Defaulting to a generic icon if none is provided via API
                      final catId = category['id'];
                      final String? catThumb = category['thumbnail']?.toString();
                      return _buildCategoryCard(
                        context,
                        category['name'] ?? 'قسم',
                        Icons.category,
                        catThumb,
                        catId != null ? catId.toString() : null,
                      );
                    },
                  );
                },
              ),
            ),
            SizedBox(height: 20),

            // 4. Testimonials (What people say)
            Container(
              padding: EdgeInsets.symmetric(vertical: 20),
              decoration: BoxDecoration(
                gradient: AppColors.primaryGradient,
              ),
              child: Column(
                children: [
                  Text(
                    'ماذا يقول الناس عنا',
                    style: TextStyle(fontSize: 22, fontWeight: FontWeight.bold, color: Colors.white),
                  ),
                  SizedBox(height: 10),
                  CarouselSlider(
                    options: CarouselOptions(
                      height: 180.0,
                      autoPlay: true,
                      viewportFraction: 0.9,
                      autoPlayInterval: Duration(seconds: 4),
                    ),
                    items: [
                      {
                        'quote': 'سعيد بكوني جزء من المنصة و ان شاء الله بالتوفيق للجميع',
                        'name': 'محمد المصري',
                        'role': 'أخصائي علاج طبيعي',
                      },
                      {
                        'quote': 'شكرا على الفكرة الرائعة، دايما كنت أحلم بوجود مكان عربي متكامل بيحكي عن النطق و اللغة و التأهيل بشكل عام',
                        'name': 'ديالا جرار',
                        'role': 'أخصائية نطق ولغة',
                      },
                      {
                        'quote': 'مبادرة حلوة و متحمسين لكل الدورات على المنصة و ان شاء الله يكون في كتير دورات و مقالات بالعلاج الطبيعي في المستقبل!',
                        'name': 'بيان خريسات',
                        'role': 'أخصائي علاج وظيفي',
                      },
                    ].map((testimonial) {
                      return Builder(
                        builder: (BuildContext context) {
                          return Container(
                            width: MediaQuery.of(context).size.width,
                            margin: EdgeInsets.symmetric(horizontal: 5.0),
                            decoration: BoxDecoration(
                                color: Colors.white,
                                borderRadius: BorderRadius.circular(14)
                            ),
                            child: Padding(
                              padding: const EdgeInsets.all(16.0),
                              child: Column(
                                mainAxisAlignment: MainAxisAlignment.center,
                                children: [
                                  Icon(Icons.format_quote, color: AppColors.primaryGreen, size: 24),
                                  SizedBox(height: 8),
                                  Text(
                                    testimonial['quote']!,
                                    style: TextStyle(fontSize: 14, fontWeight: FontWeight.w500, height: 1.5),
                                    textAlign: TextAlign.center,
                                    maxLines: 3,
                                    overflow: TextOverflow.ellipsis,
                                  ),
                                  SizedBox(height: 10),
                                  Text(testimonial['name']!, style: TextStyle(fontWeight: FontWeight.bold, fontSize: 14)),
                                  SizedBox(height: 2),
                                  Text(testimonial['role']!, style: TextStyle(color: AppColors.greyText, fontSize: 12)),
                                ],
                              ),
                            ),
                          );
                        },
                      );
                    }).toList(),
                  ),
                ],
              ),
            ),
            SizedBox(height: 20),

            // 5. Latest Articles
            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 16.0),
              child: Text(
                'أحدث المقالات',
                style: TextStyle(fontSize: 22, fontWeight: FontWeight.bold, color: AppColors.textDark),
              ),
            ),
            SizedBox(height: 10),
            FutureBuilder<List<dynamic>>(
              future: ApiService.fetchLatestBlogs(),
              builder: (context, snapshot) {
                if (snapshot.connectionState == ConnectionState.waiting) {
                  return Center(child: CircularProgressIndicator(color: AppColors.primaryGreen));
                } else if (snapshot.hasError) {
                  return Center(child: Text('خطأ في تحميل المقالات: ${snapshot.error}', style: TextStyle(color: Colors.red)));
                } else if (!snapshot.hasData || snapshot.data!.isEmpty) {
                  return Center(child: Text('لا توجد مقالات حالياً', style: TextStyle(color: AppColors.greyText)));
                }

                final blogs = snapshot.data!;
                return ListView.builder(
                  shrinkWrap: true,
                  physics: NeverScrollableScrollPhysics(),
                  itemCount: blogs.length,
                  itemBuilder: (context, index) {
                    final blog = blogs[index];
                    final String rawDesc = blog['description'] ?? '';
                    final String plainDesc = stripHtmlToPlain(rawDesc);
                    
                    // Construct thumbnail URL with fallback to banner
                    String thumbUrl = (blog['thumbnail']?.toString() ?? '').trim();
                    if (thumbUrl.endsWith('/') && blog['banner'] != null && blog['banner'].toString().trim().isNotEmpty) {
                      thumbUrl += blog['banner'].toString().trim();
                    }

                    if (thumbUrl.startsWith('http://')) {
                      thumbUrl = thumbUrl.replaceFirst('http://', 'https://');
                    }
                    
                    return ListTile(
                      onTap: () {
                        Navigator.push(
                          context,
                          MaterialPageRoute(
                            builder: (context) => ArticleDetailScreen(blog: blog),
                          ),
                        );
                      },
                      leading: Container(
                        width: 60,
                        height: 60,
                        decoration: BoxDecoration(
                          color: AppColors.lightBackground,
                          borderRadius: BorderRadius.circular(8),
                        ),
                        child: ClipRRect(
                          borderRadius: BorderRadius.circular(8),
                          child: (thumbUrl.isNotEmpty && !thumbUrl.endsWith('/'))
                              ? Image.network(
                                  thumbUrl,
                                  width: 60,
                                  height: 60,
                                  fit: BoxFit.cover,
                                  errorBuilder: (_, __, ___) => Icon(Icons.article_outlined, color: AppColors.primaryGreen),
                                )
                              : Icon(Icons.article_outlined, color: AppColors.primaryGreen),
                        ),
                      ),
                      title: Text(blog['title'] ?? 'عنوان المقال', style: TextStyle(fontWeight: FontWeight.bold), maxLines: 1, overflow: TextOverflow.ellipsis),
                      subtitle: Text(plainDesc, maxLines: 2, overflow: TextOverflow.ellipsis),
                      trailing: Icon(Icons.arrow_forward_ios, size: 16, color: AppColors.primaryGreen),
                    );
                  },
                );
              },
            ),
            SizedBox(height: 30),
          ],
        ),
      ),
    );
  }

  Widget _buildFeatureCard(IconData icon, String title) {
    return Card(
      elevation: 2,
      margin: EdgeInsets.all(8),
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(15)),
      child: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        children: [
          Container(
            padding: EdgeInsets.all(12),
            decoration: BoxDecoration(
              color: AppColors.lightBackground,
              shape: BoxShape.circle,
            ),
            child: Icon(icon, size: 40, color: AppColors.primaryGreen),
          ),
          SizedBox(height: 10),
          Text(
            title,
            textAlign: TextAlign.center,
            style: TextStyle(fontSize: 14, fontWeight: FontWeight.w600, color: AppColors.textDark),
          ),
        ],
      ),
    );
  }

  Widget _buildCategoryCard(BuildContext context, String title, IconData icon, String? imageUrl, [String? id]) {
    return GestureDetector(
      onTap: () {
        if (id != null) {
          Navigator.push(
            context,
            MaterialPageRoute(
              builder: (context) => CategoryCoursesScreen(
                categoryId: id,
                categoryName: title,
              ),
            ),
          );
        }
      },
      child: Container(
        width: 110,
        margin: EdgeInsets.only(left: 16, top: 4, bottom: 4),
        decoration: BoxDecoration(
          color: Colors.white,
          borderRadius: BorderRadius.circular(15),
          boxShadow: [
            BoxShadow(
              color: Colors.grey.withOpacity(0.2),
              spreadRadius: 1,
              blurRadius: 5,
              offset: Offset(0, 3),
            ),
          ],
        ),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            if (imageUrl != null && imageUrl.isNotEmpty && !imageUrl.endsWith('/'))
              ClipRRect(
                borderRadius: BorderRadius.circular(8),
                child: Image.network(
                  imageUrl.startsWith('http://') ? imageUrl.replaceFirst('http://', 'https://') : imageUrl,
                  width: 50,
                  height: 50,
                  fit: BoxFit.cover,
                  errorBuilder: (_, __, ___) => Icon(icon, size: 35, color: AppColors.primaryGreen),
                ),
              )
            else
              Icon(icon, size: 35, color: AppColors.primaryGreen),
            SizedBox(height: 8),
            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 4.0),
              child: Text(
                title,
                textAlign: TextAlign.center,
                maxLines: 2,
                overflow: TextOverflow.ellipsis,
                style: TextStyle(fontSize: 13, fontWeight: FontWeight.bold),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
