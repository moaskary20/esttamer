#!/bin/bash
# أوامر رفع المشروع على GitHub
# GitHub Push Commands

echo "📝 تعليمات رفع المشروع على GitHub"
echo "=================================="
echo ""
echo "1. أنشئ repository جديد على GitHub:"
echo "   https://github.com/new"
echo ""
echo "2. بعد إنشاء الـ repository، استبدل YOUR_USERNAME و YOUR_REPO_NAME بالمعلومات الصحيحة:"
echo ""
echo "cd /media/mohamed/3E16609616605147/esttamer"
echo "git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git"
echo "git branch -M main"
echo "git push -u origin main"
echo ""
echo "=================================="
echo ""
echo "أو إذا كنت تستخدم SSH:"
echo "git remote add origin git@github.com:YOUR_USERNAME/YOUR_REPO_NAME.git"
echo "git branch -M main"
echo "git push -u origin main"
echo ""
echo "=================================="
echo ""
echo "📋 ملخص ما تم:"
echo "✅ تهيئة Git repository"
echo "✅ إضافة ملف .gitignore للأمان"
echo "✅ إضافة 7 ملفات (760 سطر)"
echo "✅ عمل commit برسالة توضيحية"
echo "⏳ جاهز للرفع على GitHub"
echo ""
echo "⚠️  ملاحظة أمنية:"
echo "الملفات التالية لن يتم رفعها (محمية بـ .gitignore):"
echo "  - apply_update.php"
echo "  - update_about_content.php"
echo "  - application/config/database.php"
echo "  - uploads/* و backups/*"

