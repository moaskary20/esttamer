import 'package:flutter/material.dart';
import 'package:flutter_zoom_drawer/flutter_zoom_drawer.dart';
import 'package:google_fonts/google_fonts.dart';
import '../utils/colors.dart';
import 'home_screen.dart';
import 'placeholder_screens.dart';
import 'drawer_screen.dart';

class MainScreen extends StatefulWidget {
  @override
  _MainScreenState createState() => _MainScreenState();
}

class _MainScreenState extends State<MainScreen> {
  final _drawerController = ZoomDrawerController();

  @override
  Widget build(BuildContext context) {
    return ZoomDrawer(
      controller: _drawerController,
      menuScreen: DrawerScreen(),
      mainScreen: BottomNavScreen(),
      borderRadius: 24.0,
      showShadow: true,
      angle: 0.0,
      drawerShadowsBackgroundColor: Colors.grey[300]!,
      slideWidth: MediaQuery.of(context).size.width * 0.65,
      menuBackgroundColor: AppColors.primaryGreen,
      isRtl: true,
    );
  }
}

class BottomNavScreen extends StatefulWidget {
  @override
  _BottomNavScreenState createState() => _BottomNavScreenState();
}

class _BottomNavScreenState extends State<BottomNavScreen>
    with SingleTickerProviderStateMixin {
  int _currentIndex = 0;
  late AnimationController _animController;

  final List<Widget> _screens = [
    HomeScreen(),
    CoursesScreen(),
    CategoriesScreen(),
    ArticlesScreen(),
    ProfileScreen(),
  ];

  final List<_NavItem> _navItems = [
    _NavItem(icon: Icons.home_outlined, activeIcon: Icons.home, label: 'الرئيسية'),
    _NavItem(icon: Icons.play_circle_outline, activeIcon: Icons.play_circle, label: 'دوراتي'),
    _NavItem(icon: Icons.category_outlined, activeIcon: Icons.category, label: 'الأقسام'),
    _NavItem(icon: Icons.article_outlined, activeIcon: Icons.article, label: 'المقالات'),
    _NavItem(icon: Icons.person_outline, activeIcon: Icons.person, label: 'شخصي'),
  ];

  @override
  void initState() {
    super.initState();
    _animController = AnimationController(
      vsync: this,
      duration: Duration(milliseconds: 300),
    );
  }

  @override
  void dispose() {
    _animController.dispose();
    super.dispose();
  }

  void _onTabTap(int index) {
    if (index == _currentIndex) return;
    _animController.forward(from: 0);
    setState(() => _currentIndex = index);
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: _screens[_currentIndex],
      bottomNavigationBar: Container(
        decoration: BoxDecoration(
          color: Colors.white,
          boxShadow: [BoxShadow(color: Colors.black12, blurRadius: 10, offset: Offset(0, -2))],
        ),
        child: SafeArea(
          child: Padding(
            padding: EdgeInsets.symmetric(vertical: 8),
            child: Row(
              mainAxisAlignment: MainAxisAlignment.spaceAround,
              children: List.generate(_navItems.length, (index) {
                final item = _navItems[index];
                final isActive = _currentIndex == index;
                return _AnimatedNavItem(
                  item: item,
                  isActive: isActive,
                  onTap: () => _onTabTap(index),
                );
              }),
            ),
          ),
        ),
      ),
    );
  }
}

class _NavItem {
  final IconData icon;
  final IconData activeIcon;
  final String label;
  const _NavItem({required this.icon, required this.activeIcon, required this.label});
}

class _AnimatedNavItem extends StatefulWidget {
  final _NavItem item;
  final bool isActive;
  final VoidCallback onTap;

  const _AnimatedNavItem({
    required this.item,
    required this.isActive,
    required this.onTap,
  });

  @override
  State<_AnimatedNavItem> createState() => _AnimatedNavItemState();
}

class _AnimatedNavItemState extends State<_AnimatedNavItem>
    with SingleTickerProviderStateMixin {
  late AnimationController _ctrl;
  late Animation<double> _bounce;

  @override
  void initState() {
    super.initState();
    _ctrl = AnimationController(vsync: this, duration: Duration(milliseconds: 300));
    _bounce = Tween<double>(begin: 1.0, end: 1.25).animate(
      CurvedAnimation(parent: _ctrl, curve: Curves.elasticOut),
    );
  }

  @override
  void didUpdateWidget(_AnimatedNavItem oldWidget) {
    super.didUpdateWidget(oldWidget);
    if (widget.isActive && !oldWidget.isActive) {
      _ctrl.forward(from: 0);
    }
  }

  @override
  void dispose() {
    _ctrl.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      onTap: widget.onTap,
      behavior: HitTestBehavior.opaque,
      child: Column(
        mainAxisSize: MainAxisSize.min,
        children: [
          ScaleTransition(
            scale: widget.isActive ? _bounce : AlwaysStoppedAnimation(1.0),
            child: AnimatedContainer(
              duration: Duration(milliseconds: 250),
              padding: EdgeInsets.all(widget.isActive ? 10 : 8),
              decoration: BoxDecoration(
                color: widget.isActive
                    ? AppColors.primaryGreen.withOpacity(0.12)
                    : Colors.transparent,
                borderRadius: BorderRadius.circular(14),
              ),
              child: Icon(
                widget.isActive ? widget.item.activeIcon : widget.item.icon,
                color: widget.isActive ? AppColors.primaryGreen : Colors.grey,
                size: widget.isActive ? 26 : 24,
              ),
            ),
          ),
          SizedBox(height: 2),
          AnimatedDefaultTextStyle(
            duration: Duration(milliseconds: 200),
            style: GoogleFonts.tajawal(
              fontSize: widget.isActive ? 11 : 10,
              fontWeight: widget.isActive ? FontWeight.bold : FontWeight.normal,
              color: widget.isActive ? AppColors.primaryGreen : Colors.grey,
            ),
            child: Text(widget.item.label),
          ),
        ],
      ),
    );
  }
}
