#!/bin/bash
# سكريبت إصلاح الموقع - Fix Website Script

echo "================================================"
echo "       إصلاح موقع Esttamer - Fix Website      "
echo "================================================"
echo ""

# التحقق من الملفات المطلوبة
echo "📋 التحقق من الملفات الأساسية..."
echo ""

if [ -f "index.php" ]; then
    echo "✅ index.php موجود"
else
    echo "❌ index.php غير موجود!"
    exit 1
fi

if [ -f ".htaccess" ]; then
    echo "✅ .htaccess موجود"
else
    echo "⚠️  .htaccess غير موجود - سيتم إنشاؤه"
    cat > .htaccess << 'EOF'
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?/$1 [L]
EOF
    echo "✅ تم إنشاء .htaccess"
fi

echo ""
echo "================================================"
echo "الملفات المطلوب رفعها للسيرفر:"
echo "================================================"
echo ""
echo "1. index.php"
echo "2. .htaccess"
echo "3. application/ (المجلد كاملاً)"
echo "4. system/ (المجلد كاملاً)"
echo "5. assets/ (المجلد كاملاً)"
echo "6. languages/ (المجلد كاملاً)"
echo ""
echo "================================================"
echo ""
echo "💡 استخدم FTP أو cPanel File Manager لرفع الملفات"
echo ""
echo "بعد الرفع، تحقق من:"
echo "🌐 https://esttamer.com"
echo ""
echo "================================================"

