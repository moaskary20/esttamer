import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:webview_flutter/webview_flutter.dart';
import '../utils/colors.dart';

class PaymentScreen extends StatefulWidget {
  final String courseId;
  final String authToken;
  final String courseTitle;

  const PaymentScreen({
    Key? key,
    required this.courseId,
    required this.authToken,
    required this.courseTitle,
  }) : super(key: key);

  @override
  State<PaymentScreen> createState() => _PaymentScreenState();
}

class _PaymentScreenState extends State<PaymentScreen> {
  late final WebViewController _controller;
  bool _loading = true;
  double _progress = 0;

  @override
  void initState() {
    super.initState();
    final url = 'https://esttamer.com/api/web_redirect_to_buy_course/${widget.authToken}/${widget.courseId}/esttamer';

    _controller = WebViewController()
      ..setJavaScriptMode(JavaScriptMode.unrestricted)
      ..setNavigationDelegate(
        NavigationDelegate(
          onPageStarted: (_) {
            if (mounted) setState(() => _loading = true);
          },
          onPageFinished: (_) {
            if (mounted) setState(() => _loading = false);
          },
          onProgress: (progress) {
            if (mounted) setState(() => _progress = progress / 100);
          },
          onNavigationRequest: (request) {
            // If payment completes and redirects to my_courses, pop back
            if (request.url.contains('my_courses')) {
              Navigator.pop(context);
              ScaffoldMessenger.of(context).showSnackBar(
                SnackBar(
                  content: Text('تم الدفع بنجاح! 🎉', style: GoogleFonts.tajawal()),
                  backgroundColor: AppColors.primaryGreen,
                ),
              );
              return NavigationDecision.prevent;
            }
            return NavigationDecision.navigate;
          },
        ),
      )
      ..loadRequest(Uri.parse(url));
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(
          'إتمام الدفع',
          style: GoogleFonts.tajawal(fontWeight: FontWeight.bold, color: Colors.black),
        ),
        centerTitle: true,
        backgroundColor: Colors.white,
        elevation: 0,
        iconTheme: IconThemeData(color: AppColors.primaryGreen),
        bottom: PreferredSize(
          preferredSize: Size.fromHeight(3),
          child: _loading
              ? LinearProgressIndicator(
                  value: _progress > 0 ? _progress : null,
                  backgroundColor: Colors.grey[200],
                  color: AppColors.primaryGreen,
                  minHeight: 3,
                )
              : SizedBox(height: 3),
        ),
      ),
      body: WebViewWidget(controller: _controller),
    );
  }
}
