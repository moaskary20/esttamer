-- ترجمات عربية لصفحة اتصل بنا (Contact Us)
-- شغّل هذا الملف بعد إضافة اللغة العربية من لوحة التحكم: إعدادات النظام > إعدادات اللغة
-- تأكد أن عمود arabic موجود في جدول language (يُضاف تلقائياً عند إضافة لغة عربية)

UPDATE `language` SET `arabic` = 'تواصل معنا لتجربة تواصل سلس. نحن نقدّر الحوار المفتوح ونحن متحمسون للتفاعل معك. سواء كان لديك أسئلة أو أفكار أو ملاحظات، نحن هنا نستمع ونجيب.' WHERE `phrase` = 'connect_with_us_to_experience_seamless_communication._we_value_open_dialogue_and_are_eager_to_engage_with_you._whether_you_have_questions,_ideas,_or_feedback,_we_are_here_to_listen_and_respond.';

UPDATE `language` SET `arabic` = 'البريد الإلكتروني' WHERE `phrase` = 'email_address';

UPDATE `language` SET `arabic` = 'العنوان' WHERE `phrase` = 'address';

UPDATE `language` SET `arabic` = 'اكتب رسالتك' WHERE `phrase` = 'write_your_message';

UPDATE `language` SET `arabic` = 'أوافق على أن البيانات المُرسلة يتم جمعها وتخزينها.' WHERE `phrase` = 'i_agree_that_my_submitted_data_is_being_collected_and_stored.';

UPDATE `language` SET `arabic` = 'تواصل معنا' WHERE `phrase` = 'get_in_touch';

UPDATE `language` SET `arabic` = 'عنواننا' WHERE `phrase` = 'our_address';
