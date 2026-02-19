<?php
/**
 * مسح الكاش على السيرفر (OPcache + متصفح)
 * الاستخدام: افتح من المتصفح مع كلمة سر ثم احذف الملف:
 * https://your-site.com/clear_cache.php?key=YOUR_SECRET_KEY
 *
 * غيّر YOUR_SECRET_KEY إلى كلمة سر خاصة بك ثم احذف هذا الملف بعد الاستخدام.
 */
define('CACHE_CLEAR_KEY', 'esttamer_clear_2025'); // غيّرها ثم احذف الملف

$key = isset($_GET['key']) ? $_GET['key'] : '';

if ($key !== CACHE_CLEAR_KEY) {
    header('HTTP/1.0 403 Forbidden');
    echo 'غير مصرح';
    exit;
}

$done = [];

// 1. مسح OPcache (كاش PHP على السيرفر)
if (function_exists('opcache_reset')) {
    opcache_reset();
    $done[] = 'OPcache تم مسحه';
} else {
    $done[] = 'OPcache غير مفعّل';
}

// 2. إرسال هيدرات لمنع/تقليل كاش المتصفح للصفحة الحالية فقط
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

echo '<!DOCTYPE html><html dir="rtl"><head><meta charset="utf-8"><title>مسح الكاش</title></head><body style="font-family:Tajawal;padding:20px;">';
echo '<h2>تم تنفيذ مسح الكاش على السيرفر</h2><ul>';
foreach ($done as $msg) {
    echo '<li>' . htmlspecialchars($msg) . '</li>';
}
echo '</ul>';
echo '<p><strong>مهم:</strong> احذف ملف <code>clear_cache.php</code> من السيرفر بعد الانتهاء لأسباب أمنية.</p>';
echo '<p>جرّب تحديث الموقع (Ctrl+F5) أو افتح الصفحة في نافذة خاصة.</p>';
echo '</body></html>';
