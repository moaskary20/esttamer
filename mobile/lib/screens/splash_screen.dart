import 'package:flutter/material.dart';
import 'package:video_player/video_player.dart';
import 'login_screen.dart';

class SplashScreen extends StatefulWidget {
  @override
  State<SplashScreen> createState() => _SplashScreenState();
}

class _SplashScreenState extends State<SplashScreen> {
  late VideoPlayerController _controller;
  bool _videoFailed = false;

  @override
  void initState() {
    super.initState();
    _controller = VideoPlayerController.asset('assets/splash.mp4')
      ..initialize().then((_) {
        setState(() {});
        _controller.setVolume(0.0);
        _controller.play();
        _controller.setLooping(false);
        _controller.addListener(_onVideoEnd);
      }).catchError((e) {
        setState(() => _videoFailed = true);
        _navigateAfterDelay();
      });
  }

  void _onVideoEnd() {
    if (_controller.value.isInitialized &&
        _controller.value.position >= _controller.value.duration) {
      _navigateToLogin();
    }
  }

  void _navigateAfterDelay() {
    Future.delayed(Duration(seconds: 3), _navigateToLogin);
  }

  void _navigateToLogin() {
    if (mounted) {
      Navigator.of(context).pushReplacement(
        PageRouteBuilder(
          transitionDuration: Duration(milliseconds: 600),
          pageBuilder: (_, __, ___) => LoginScreen(),
          transitionsBuilder: (_, animation, __, child) =>
              FadeTransition(opacity: animation, child: child),
        ),
      );
    }
  }

  @override
  void dispose() {
    _controller.removeListener(_onVideoEnd);
    _controller.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    if (_videoFailed) {
      return _FallbackSplash(onDone: _navigateToLogin);
    }
    return Scaffold(
      backgroundColor: Colors.white,
      body: Stack(
        fit: StackFit.expand,
        children: [
          if (_controller.value.isInitialized)
            Center(
              child: AspectRatio(
                aspectRatio: _controller.value.aspectRatio,
                child: VideoPlayer(_controller),
              ),
            )
          else
            Center(child: CircularProgressIndicator(color: Colors.white)),
          // Skip button
          Positioned(
            bottom: 40,
            left: 0,
            right: 0,
            child: Center(
              child: TextButton(
                onPressed: _navigateToLogin,
                child: Text(
                  'تخطي',
                  style: TextStyle(color: Colors.white, fontSize: 16),
                ),
              ),
            ),
          ),
        ],
      ),
    );
  }
}

class _FallbackSplash extends StatefulWidget {
  final VoidCallback onDone;
  const _FallbackSplash({required this.onDone});

  @override
  State<_FallbackSplash> createState() => _FallbackSplashState();
}

class _FallbackSplashState extends State<_FallbackSplash>
    with SingleTickerProviderStateMixin {
  late AnimationController _anim;
  late Animation<double> _scale;
  late Animation<double> _fade;

  @override
  void initState() {
    super.initState();
    _anim = AnimationController(vsync: this, duration: Duration(seconds: 2));
    _scale = Tween<double>(begin: 0.5, end: 1.0).animate(
      CurvedAnimation(parent: _anim, curve: Curves.elasticOut),
    );
    _fade = Tween<double>(begin: 0.0, end: 1.0).animate(
      CurvedAnimation(parent: _anim, curve: Interval(0, 0.5)),
    );
    _anim.forward();
    Future.delayed(Duration(seconds: 3), widget.onDone);
  }

  @override
  void dispose() {
    _anim.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        decoration: BoxDecoration(
          gradient: LinearGradient(
            colors: [Color(0xFF2D9C4F), Color(0xFF1A5C30)],
            begin: Alignment.topCenter,
            end: Alignment.bottomCenter,
          ),
        ),
        child: Center(
          child: FadeTransition(
            opacity: _fade,
            child: ScaleTransition(
              scale: _scale,
              child: Column(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Container(
                    width: 120,
                    height: 120,
                    decoration: BoxDecoration(
                      color: Colors.white,
                      shape: BoxShape.circle,
                    ),
                    child: Center(
                      child: Text(
                        'استمر',
                        style: TextStyle(
                          color: Color(0xFF2D9C4F),
                          fontSize: 28,
                          fontWeight: FontWeight.bold,
                        ),
                      ),
                    ),
                  ),
                  SizedBox(height: 24),
                  Text(
                    'منصة استمر للتعلم',
                    style: TextStyle(
                      color: Colors.white,
                      fontSize: 22,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  SizedBox(height: 8),
                  Text(
                    'ابدأ رحلتك التعليمية الآن',
                    style: TextStyle(color: Colors.white70, fontSize: 16),
                  ),
                ],
              ),
            ),
          ),
        ),
      ),
    );
  }
}
