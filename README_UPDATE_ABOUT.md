# تحديث صفحة "من نحن" | Update About Us Page

## نظرة عامة | Overview

**العربية:**
هذا الدليل يشرح كيفية تحديث محتوى صفحة "من نحن" بمحتوى منصة "استمر" الجديد.

**English:**
This guide explains how to update the "About Us" page content with the new "Esttamer" platform content.

---

## المحتوى الجديد | New Content

المحتوى الجديد يتضمن:
- مقدمة عن منصة "استمر"
- رؤية وأهداف المنصة
- ما يميز المنصة عن غيرها
- الخدمات المقدمة
- المجتمع المستهدف

---

## طرق التحديث | Update Methods

### ⚠️ تحذير مهم | Important Warning
**احفظ نسخة احتياطية من قاعدة البيانات قبل التحديث!**
**Backup your database before updating!**

---

### الطريقة 1: استخدام السكريبت التلقائي (الأسهل) | Method 1: Using Automatic Script (Easiest)

**الخطوات:**
1. افتح المتصفح واذهب إلى: `http://your-domain.com/update_about_content.php`
2. انتظر رسالة التأكيد
3. **مهم جداً:** احذف ملف `update_about_content.php` فوراً بعد التحديث لأسباب أمنية

**Steps:**
1. Open browser and go to: `http://your-domain.com/update_about_content.php`
2. Wait for confirmation message
3. **Very Important:** Delete `update_about_content.php` file immediately after update for security reasons

**المزايا | Advantages:**
- ✅ سهل وسريع | Easy and fast
- ✅ لا يحتاج خبرة تقنية | No technical expertise needed
- ✅ تحديث تلقائي | Automatic update

**العيوب | Disadvantages:**
- ⚠️ يجب حذف الملف بعد الاستخدام | Must delete file after use
- ⚠️ يحتاج صلاحيات كتابة على قاعدة البيانات | Requires database write permissions

---

### الطريقة 2: استخدام ملف SQL | Method 2: Using SQL File

#### أ) عبر phpMyAdmin | Via phpMyAdmin

**الخطوات:**
1. افتح phpMyAdmin
2. اختر قاعدة البيانات الخاصة بالموقع
3. اذهب إلى تبويب "SQL"
4. افتح ملف `update_about_us.sql` وانسخ محتوياته
5. الصق المحتوى في صندوق الاستعلام
6. اضغط على زر "تنفيذ" (Go)

**Steps:**
1. Open phpMyAdmin
2. Select your website database
3. Go to "SQL" tab
4. Open `update_about_us.sql` file and copy its contents
5. Paste content in query box
6. Click "Go" button

#### ب) عبر سطر الأوامر | Via Command Line

```bash
mysql -u [username] -p [database_name] < update_about_us.sql
```

استبدل | Replace:
- `[username]` باسم مستخدم قاعدة البيانات | with database username
- `[database_name]` باسم قاعدة البيانات | with database name

**المزايا | Advantages:**
- ✅ آمن | Safe
- ✅ يمكن مراجعة الاستعلام قبل التنفيذ | Can review query before execution
- ✅ مناسب للتحديثات المتقدمة | Suitable for advanced updates

---

### الطريقة 3: التحديث اليدوي من لوحة التحكم | Method 3: Manual Update from Admin Panel

**الخطوات:**
1. سجل دخولك إلى لوحة التحكم
2. اذهب إلى: **الإعدادات** → **إعدادات الموقع** (Settings → Frontend Settings)
3. ابحث عن حقل **"من نحن"** (About Us)
4. احذف المحتوى القديم
5. انسخ المحتوى الجديد من ملف `new_content.txt` (سيتم إنشاؤه أدناه)
6. الصق المحتوى في الحقل
7. احفظ التغييرات

**Steps:**
1. Login to admin panel
2. Go to: **Settings** → **Frontend Settings**
3. Find **"About Us"** field
4. Delete old content
5. Copy new content from `new_content.txt` file (to be created below)
6. Paste content in the field
7. Save changes

**المزايا | Advantages:**
- ✅ لا يحتاج وصول لقاعدة البيانات | No database access needed
- ✅ آمن تماماً | Completely safe
- ✅ يمكن معاينة المحتوى قبل الحفظ | Can preview before saving

**العيوب | Disadvantages:**
- ⏱️ يستغرق وقتاً أطول | Takes more time
- 📝 يتطلب نسخ ولصق يدوي | Requires manual copy-paste

---

## التحقق من التحديث | Verify Update

بعد التحديث، قم بزيارة صفحة "من نحن" للتأكد من نجاح التحديث:

After updating, visit the "About Us" page to verify successful update:

```
http://your-domain.com/home/about_us
```

أو عبر القائمة الرئيسية → من نحن | Or via Main Menu → About Us

---

## الملفات المتضمنة | Included Files

| الملف | File | الوصف | Description |
|-------|------|--------|-------------|
| `update_about_us.sql` | `update_about_us.sql` | ملف SQL للتحديث | SQL file for update |
| `update_about_content.php` | `update_about_content.php` | سكريبت PHP للتحديث التلقائي | PHP script for automatic update |
| `تعليمات_تحديث_من_نحن.txt` | `تعليمات_تحديث_من_نحن.txt` | تعليمات بالعربية | Arabic instructions |
| `README_UPDATE_ABOUT.md` | `README_UPDATE_ABOUT.md` | هذا الملف | This file |

---

## استكشاف الأخطاء | Troubleshooting

### المشكلة: الصفحة فارغة بعد التحديث
**الحل:**
1. تأكد من تطبيق التحديث بنجاح
2. امسح ذاكرة التخزين المؤقت للمتصفح (Cache)
3. تحقق من وجود أخطاء في سجل الأخطاء (Error Log)

### Problem: Page is empty after update
**Solution:**
1. Ensure update was applied successfully
2. Clear browser cache
3. Check error log for any errors

---

### المشكلة: رسالة خطأ في قاعدة البيانات
**الحل:**
1. تحقق من صلاحيات المستخدم على قاعدة البيانات
2. تأكد من اسم الجدول `frontend_settings` موجود
3. تحقق من وجود السجل بمفتاح `about_us`

### Problem: Database error message
**Solution:**
1. Check database user permissions
2. Ensure `frontend_settings` table exists
3. Verify `about_us` key exists in the table

---

### المشكلة: المحتوى يظهر بدون تنسيق
**الحل:**
1. تأكد من أن محرر النصوص (Summernote) يعمل بشكل صحيح
2. تحقق من تحميل ملفات CSS بشكل صحيح
3. راجع كود HTML في المحتوى

### Problem: Content appears without formatting
**Solution:**
1. Ensure text editor (Summernote) is working properly
2. Check CSS files are loading correctly
3. Review HTML code in content

---

## الدعم | Support

في حالة وجود أي مشكلة أو استفسار، يرجى:
- التحقق من سجل الأخطاء (Error Log)
- مراجعة دليل استكشاف الأخطاء أعلاه
- التواصل مع المطور

For any issues or questions, please:
- Check error log
- Review troubleshooting guide above
- Contact developer

---

## الأمان | Security

**ملاحظات أمنية مهمة:**
1. احذف ملف `update_about_content.php` فوراً بعد الاستخدام
2. لا تترك ملفات التحديث على السيرفر بعد الانتهاء
3. احفظ نسخة احتياطية دائماً قبل أي تحديث

**Important security notes:**
1. Delete `update_about_content.php` immediately after use
2. Don't leave update files on server after completion
3. Always backup before any update

---

## الترخيص | License

هذا التحديث مخصص لمنصة "استمر" فقط.

This update is exclusively for "Esttamer" platform only.

---

**تاريخ الإنشاء | Created Date:** December 4, 2025
**الإصدار | Version:** 1.0

