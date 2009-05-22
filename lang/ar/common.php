<?php
//
// kleeja language
// Arabic
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();



$lang = array_merge($lang, array(
	'HOME' => 'البدايه',
	'DIR' => 'rtl',
	'INDEX' => 'الرئيسيه',
	'SITE_CLOSED' => 'الموقع مغلق !',
	'STOP_FOR_SIZE' => 'متوقف حالياً !',
	'SIZES_EXCCEDED' => 'الحجم الكلي للمركز إستنفذ .. سوف نعود قريباً',
	'ENTER_CODE_IMG' => 'إدخل ماتراه بالصوره داخل الصندوق',
	'SAFE_CODE' => 'تفعيل الكود الامني في التحميل',
	'LAST_VISIT' => 'آخر زياره لك',
	'FLS_LST_VST_SEARCH' => 'عرض الملفات منذ آخر زياره',
	'IMG_LST_VST_SEARCH' => 'عرض الصور منذ آخر زياره',
	'NEXT' => 'التالي',
	'PREV' => 'السابق',
	'INFORMATION' => 'تعليمات',
	'WELCOME' => 'أهلاً',
	'KLEEJA_VERSION' => 'إصدار كليجا',
	'NUMBER_ONLINE' => 'عدد المتواجدين',
	'NUMBER_UONLINE' => 'أعضاء',
	'NUMBER_VONLINE' => 'زوار',
	'USERS_SYSTEM' => 'نظام المستخدمين',
	'ERROR_NAVIGATATION' => 'خطأ بالتوجه ..',
	
	'LOGIN' => 'دخول',
	'USERNAME' => 'اسم المستخدم',
	'PASSWORD' => 'كلمة المرور',
	'EMPTY_USERNAME' => 'حقل اسم المستخدم فارغ',
	'EMPTY_PASSWORD' => 'حقل كلمة المرور فارغ',
	'LOSS_PASSWORD' => 'نسيت كلمة المرور؟',
	'LOGINED_BEFORE' => 'انت داخل بالفعل',
	'LOGOUT' => 'خروج',
	'EMPTY_FIELDS' => 'خطأ ..حقول ناقصه!',
	'LOGIN_SUCCESFUL' => 'لقد تم الدخول بنجاح',
	'LOGIN_ERROR' => 'خطأ .. لايمكن الدخول!',
	
	'REGISTER_CLOSED' => 'نأسف ..التسجيل مقفل حالياً',
	'PLACE_NO_YOU' => 'منطقه محظوره',
	'REGISTERED_BEFORE' => 'لقد قمت بالتسجيل سابقاً',
	'REGISTER' => 'تسجيل عضويه',
	'EMAIL' => 'البريد الإلكتروني',
	'VERTY_CODE' => 'كود الأمان',
	'WRONG_EMAIL' => 'بريد خاطئ',
	'WRONG_NAME' => 'الإسم يجب أن يكون أكبر من 4 احرف وغير طويل',
	'WRONG_LINK' => 'رابط خاطئ ..',
	'EXIST_NAME' => 'الإسم موجود مسبقاً',
	'EXIST_EMAIL' => 'البريد موجود مسبقاً',
	'WRONG_VERTY_CODE' => 'كود الأمان خاطئ',
	'CANT_UPDATE_SQL' => 'لا يمكن التحديث لقاعدة البيانات',
	'CANT_INSERT_SQL' => 'لايمكن إدخال المعلومات لقاعدة البيانات',
	'REGISTER_SUCCESFUL' => 'شكراً لتسجيلك معناً',
	'LOGOUT_SUCCESFUL' => 'تم الخروج بنجاح',
	'LOGOUT_ERROR' => 'هناك مشكله بالخروج',
	
	'FILECP' => 'إدارة الملفات',
	'DEL_SELECTED' => 'حذف المحدد',
	'EDIT_U_FILES' => 'تحديث ملفاتك',
	'FILES_UPDATED' => 'تم تحديث الملفات بنجاح',
	'PUBLIC_USER_FILES' => 'مجلد ملفات العضو ',
	'FILEUSER' => 'مجلد ملفات عضو',
	'GO_FILECP' => 'إظغط هنا لإدارة ملفاتك هذه',
	'YOUR_FILEUSER' => 'مجلدك',
	'COPY_AND_GET_DUD' => 'إنسخ الرابط وأعطه لأصدقائك ليطلعو على مجلدك ',
	'CLOSED_FEATURE' => 'خاصية مغلقه',
	'USERFILE_CLOSED' => 'خاصية مجلدات المستخدمين مغلقه !',
	
	'PFILE_4_FORUM' => 'قم بالذهاب للمنطقة الأعضاء لتغيير بياناتك',
	'USER_PLACE' => 'منطقة أعضاء',
	
	'PROFILE' => 'ملفك..',
	'EDIT_U_DATA' => 'تحديث بياناتك',
	'PASS_ON_CHANGE' => 'كلمة المرور ..عند التغيير فقط',
	'OLD' => 'القديمه',
	'NEW' => 'الجديده',
	'NEW_AGAIN' => 'تكرار الجدبده',
	'UPDATE' => 'تحديث',
	'PASS_O_PASS2' => 'كلمة المرور القديمه مهمه واكتب كلمتا المرور الجديدتان بدقه ',
	'DATA_CHANGED_O_LO' => 'تم تحديث بياناتك وسوف تستخدم بدخولك القادم',
	'DATA_CHANGED_NO' => 'لم تحدث بياناتك .. لن تتغير المعلومات',
	'LOST_PASS_FORUM' => 'إذهب للمنتدى وإسترجع كلمة المرور',
	'GET_LOSTPASS' => 'إستعادة كلمة المرور',
	'E_GET_LOSTPASS' => 'لإستعادة كلمة المرور يجب أن تكتب البريد الالكتروني المسجل لدينا',
	'WRONG_DB_EMAIL' => 'لا يوجد بريد كهذا في قاعدة البيانات لدينا',
	'GET_LOSTPASS_MSG' => 'لقد قمت بطلب كلمة مرور جديده  لعضويتك لدينا .. وقمنا بإرجاعها لك',
	'CANT_SEND_NEWPASS' => 'خطأ ..لم يتم ارسال كلمة المرور الجديده!',
	'OK_SEND_NEWPASS' => 'تم إرسال كلمة المرور الجديده..',
	'GUIDE' => 'الملفات المسموحه',
	'GUIDE_VISITORS' => 'الإمتدادات المسموحه للزوار وامتداداتها:',
	'GUIDE_USERS' => 'الإمتدادات المسموحه للأعضاء وامتداداتها:',
	'EXT' => 'الإمتداد',
	'SIZE' => 'الحجم',
	'REPORT' => 'تبليغ',
	'YOURNAME' => 'إسمك',
	'URL' => 'الرابط',
	'REASON' => 'السبب',
	'NO_ID' => 'لم تحدد ملف..!!',
	'NO_ME300RES' => 'رجاءاً .. حقل السبب لا يمكن ملأه بأكثر من 300 حرف!!',
	'THNX_REPORTED' => 'تم التبليغ .. شكراً لاهتمامك',
	'RULES' => 'الشروط',
	'NO_RULES_NOW' => 'لايوجد قوانين حالياً',
	'E_RULES' => 'هذه هي شروط مركز التحميل',
	'CALL' => 'إتصل بنا',
	'SEND' => 'أرسل',
	'TEXT' => 'النص',
	'NO_ME300TEXT' => 'رجاءاً .. حقل النص لا يمكن ملأه بأكثر من 300 حرف!!',
	'THNX_CALLED' => 'تم الإرسال. . سوف يتم الرد قريباً',
	'NO_DEL_F' => 'نأسف .خاصية الحذف المباشر معطله من المدير',
	'E_DEL_F' => 'الحذف المباشر',
	'WRONG_URL' => 'خطأ .. في الرابط ..',
	'CANT_DEL_F' => 'خطأ ..لايمكن حذف الملف .. ربما معلوماتك خاطئه او قد تم حذف مسبقاً',
	'CANT_DELETE_SQL' => 'لا يمكن الحذف من قاعدة البيانات',
	'DELETE_SUCCESFUL' => 'تم الحذف بنجاح',
	'STATS' => 'إحصائيات المركز',
	'STATS_CLOSED' => 'صفحة الإحصائيات معطله من المدير !',
	'FILES_ST' => 'تم  تحميل ',
	'FILE' => 'ملف',
	'USERS_ST' => 'عدد الأعضاء',
	'USER' => 'عضو',
	'SIZES_ST' => 'حجم كل الملفات',
	'LSTFLE_ST' => 'آخر مارفع',
	'LSTDELST' => 'آخر فحص للملفات الخامله',
	'S_C_T' => 'زوار اليوم',
	'S_C_Y' => 'زوار أمس',
	'S_C_A' => 'عدد الزوار كلياً',
	'LAST_1_H' => 'هذه الإحصائيات لقبل ساعه من الآن',
	'DOWNLAOD' => 'تحميل',
	'FILE_FOUNDED' => 'تم إيجاد الملف .. ',
	'WAIT' => 'إنتظر رجاءاً ..',
	'CLICK_DOWN' => 'اضغط هنا لتنزيل الملف',
	'JS_MUST_ON' => 'لا بد من تفعيل الجافا سكربت في  متصفحك !!',
	'FILE_INFO' => 'معلومات عن الملف',
	'FILENAME' => 'إسم الملف',
	'FILESIZE' => 'حجم الملف',
	'FILETYPE' => 'نوع الملف',
	'FILEDATE' => 'تاريخ الملف',
	'FILEUPS' => 'عدد التحميلات',
	'FILEREPORT' => 'تبليغ : ملف مخالف للقوانين',
	'FILE_NO_FOUNDED' => 'لم نتمكن من إيجاد الملف ..!!',
	'IMG_NO_FOUNDED' => 'لم نتمكن من إيجاد الصوره ..!!',
	'NOT_IMG' => 'ليست صوره  ..هذا ملف!!',
	'MORE_F_FILES' => 'هذا آخر حد يمكنك تحميله',
	'DOWNLOAD_F' => '[ تحميل الملفات ]',
	'DOWNLOAD_T' => '[ تحميل من الرابط ]',
	'PAST_URL_HERE' => '[ ألصق الرابط هنا ]',
	'SAME_FILE_EXIST' => 'هذا الملف موجود مسبقا',
	'NO_FILE_SELECTED' => 'لم تقم بإختيار ملف !!',
	'WRONG_F_NAME' => 'اسم الملف غير يحوي أحرف غير مسموحه',
	'FORBID_EXT' => 'هذا الإمتداد غير مدعوم',
	'SIZE_F_BIG' => 'الحجم للملف المختار يجب أن يكون أقل من',
	'CANT_CON_FTP' => 'لايمكن الإتصال بـ ',
	'URL_F_DEL' => 'رابط الحذف',
	'URL_F_THMB' => 'رابط المصغره',
	'URL_F_FILE' => 'رابط الملف',
	'URL_F_IMG' => 'رابط الصوره',
	'URL_F_BBC' => 'رابط للمنتديات',
	'IMG_DOWNLAODED' => 'تم تحميل الصوره بنجاح',
	'FILE_DOWNLAODED' => 'تم تحميل الملف بنجاح',
	'CANT_UPLAOD' => 'خطأ... لم يتم تحميل الملف  لاسباب غير معروفة',
	'NEW_DIR_CRT' => 'لقد تم انشاء مجلد جديد',
	'PR_DIR_CRT' => 'لم يتم اعطاء التصريح للمجلد',
	'CANT_DIR_CRT' => 'لم يتم إنشاء مجلد تلقائياً .. قم بإنشاءه انت',
	'AGREE_RULES' => 'أوافق على شروط المركز',
	'CHANG_TO_URL_FILE' => 'تبديل طريقة التحميل..رابط أو إدخال',
	'URL_CANT_GET' => 'خطأ في جلب الملف من الرابط',
	'ADMINCP' => 'مركز التحكم',
	'JUMPTO' => 'إنتقل إلى',
	'GO_BACK_BROWSER' => 'رجوع للخلف',
	'U_R_BANNED' => 'لقد تم حظر الآي بي هذا..',
	'U_R_FLOODER' => 'لقد قمت بتخطي عدد مرات عرض الصفحه بالوقت المحدد  ...',
	'U_NOT_ADMIN' => 'يجب أن تملك صلاحية الإداره',
	'UPDATE_CONFIG' => 'تحديث الإعدادات',
	'YES' => 'نعم',
	'NO' => 'لا',
	'NO_CHANGE' => 'بلا تغيير',
	'CHANGE_MD5' => 'تغيير مع دالة MD5',
	'CHANGE_TIME' => 'تغيير مع دالة TIME',
	'SITENAME' => 'إسم المركز',
	'SITEMAIL' => 'بريد المركز',
	'SITEURL' => 'رابط المركز(مع /)',
	'FOLDERNAME' => 'إسم مجلد التحميل',
	'PREFIXNAME' => 'بادئة اسماء الملفات',
	'FILESNUM' => 'عدد ملفات التحميل',
	'SITECLOSE' => 'إغلاق المركز',
	'CLOSEMSG' => 'رسالة الإغلاق',
	'LANGUAGE' => 'اللغه',
	'DECODE' => 'تغيير إسم الملف',
	'STYLE' => 'ستايل المركز',
	'SEC_DOWN' => 'الثواني قبل بدء التحميل',
	'STATFOOTER' => 'إحصائيات الصفحه بالفوتر',
	'GZIP' => 'gzip مسرع',
	'GOOGLEANALYTICS' => '<a href="http://www.google.com/analytics" target="_kleeja"><span style="color:orange">Google</span> Analytics</a>',
	'WELCOME_MSG' => 'كلمة الترحيب',
	'USER_SYSTEM' => 'نظام العضويه',
	'NORMAL' => 'عادي',
	//'W_PHPBB' => 'مربوط phpbb',
	//'W_MYSBB' => 'مربوط MySmartBB',
	//'W_VBB' => 'مربوط vb',
	'ENAB_REG' => 'فتح التسجيل',
	'TOTAL_SIZE' => 'أقصى حجم كلي بالميقا',
	'THUMBS_IMGS' => 'تفعيل مصغرات الصور',
	'WRITE_IMGS' => 'تفعيل ختم الصور',
	'ID_FORM' => 'شكل الـ ID',
	'IDF' => 'الاساسي',
	'IDFF' => 'اسم الملف',
	'DEL_URL_FILE' => 'تفعيل رابط الحذف المباشر',
	'WWW_URL' => 'تفعيل التحميل من رابط',
	'ALLOW_STAT_PG' => 'تفعيل صفحة الإحصائيات',
	'ALLOW_ONLINE' => 'تفعيل عرض المتواجدون الآن',
	'DEL_F_DAY' => 'حذف الملفات الخامله كذا يوم',
	'MOD_WRITER' => 'Mod Rewrite',
	'MOD_WRITER_EX' => 'روابط كهتمل..',
	'NUMFIELD_S' => 'رجاءاً .. الحقول الرقميه .. يجب ان تكون رقميه !!',
	'CONFIGS_UPDATED' => 'تم تحديت الإعدادات بنجاح',
	'UPDATE_EXTS' => 'تحديث الإمتدادات',
	'GROUP' => 'المجموعه',
	'SIZE_G' => 'الحجم [ز]',
	'SIZE_U' => 'الحجم [م]',
	'ALLOW_G' => 'سماح [ز]',
	'ALLOW_U' => 'سماح [م]',
	'E_EXTS' => '<b><font color="#008000">[&nbsp;ز&nbsp;]&nbsp;:&nbsp;  تعني الزوار</font></b>&nbsp;/&nbsp;<b><font color="#D80000">[&nbsp;م&nbsp;]&nbsp;:&nbsp; تعني الأعضاء </font></b>&nbsp;/&nbsp;<i>الأحجام تظبط بالكليوبايت</i>',
	'UPDATED_EXTS' => 'تم تحديث الإمتدادات بنجاح',
	'UPDATE_FILES' => 'تحديث الملفات',
	'BY' => 'من',
	'FILDER' => 'مجلد',
	'DELETE' => 'حذف',
	'GUST' => 'زائر',
	'UPDATE_REPORTS' => 'تحديث التبليغات',
	'NAME' => 'الإسم',
	'CLICKHERE' => 'إظغط هنا',
	'TIME' => 'الوقت',
	'E_CLICK' => 'إظغط على أحد المختارات لتظهر هنا!',
	'IP' => 'IP',
	'REPLY' => '[ رد ]',
	'REPLY_REPORT' => 'رد على تبليغ',
	'U_REPORT_ON' => 'بسبب تبليغك في ',
	'BY_EMAIL' => 'بواسطة البريد ',
	'ADMIN_REPLIED' => 'فقد قام المدير بالرد التالي',
	'CANT_SEND_MAIL' => 'لا يمكن إرسال رد بريدي',
	'IS_SEND_MAIL' => 'تم إرسال الرد البريدي',
	'REPORTS_UPDATED' => 'تم تحديث التبليغات',
	'UPDATE_CALSS' => 'تحديث المراسلات',
	'REPLY_CALL' => 'رد على مراسله',
	'REPLIED_ON_CAL' => 'بخصوص مراسلتك ',
	'CALLS_UPDATED' => 'تم تحديث المراسلات',
	'IS_ADMIN' => 'مدير',
	'UPDATE_USERS' => 'تحديث المستخدمين',
	'USERS_UPDATED' => 'تم تحديث المستخدمين',
	'E_BACKUP' => 'اختر الجداول التي تريد تضمينها في النسخة الاحتياطية ومن ثم اضغط على تحميل',
	'TAKE_BK' => 'أخذ نسخه',
	'REPAIRE_TABLE' => '[جداول] تم إصلاح ',
	'REPAIRE_F_STAT' => '[إحصائيات] تم إعادة إحتساب عدد الملفات',
	'REPAIRE_S_STAT' => '[إحصائيات] تم إعادة إحتساب حجم الملفات ',
	'REPAIRE_CACHE' => '[كاش] تم حذف  ..',
	'KLEEJA_CP' => 'لوحة تحكم [ كليجا ]',
	'GENERAL_STAT' => 'إحصائيات عامه',
	'SIZE_STAT' => 'إحصائيات الحجم',
	'OTHER_INFO' => 'معلومات أخرى',
	'AFILES_NUM' => 'عدد جميع الملفات',
	'AFILES_SIZE' => 'حجم الملفات الأجمالي',
	'AUSERS_NUM' => 'عدد الإعضاء',
	'LAST_GOOGLE' => 'آخر زيارة لجوجل',
	'GOOGLE_NUM' => 'زيارات جوجل',
	'LAST_YAHOO' => 'آخر زيارة للياهو',
	'YAHOO_NUM' => 'زيارات الياهو',
	'KLEEJA_CP_W' => 'أهلا وسهلاً بك عزيزي <b style="color:#FF0000">[ %s ]</b> في لوحة التحكم لمركز التحميل <b>كليجا</b> ..!',
	'USING_SIZE' => 'الحجم المستخدم حتى الآن',
	'PHP_VER' => 'إصدار php',
	'MYSQL_VER' => 'إصدار mysql',
	'N_IMGS' => 'الصور',
	'N_ZIPS' => 'ملفات الظغط',
	'N_TXTS' => 'ملفات النصوص',
	'N_DOCS' => 'مستندات',
	'N_RM' => 'RealMedia',
	'N_WM' => 'WindowsMedia',
	'N_SWF' => 'ملفات الفلاش',
	'N_QT' => 'QuickTime',
	'N_OTHERFILE' => 'ملفات أخرى',
	'LOGOUT_CP_OK' => 'تم مسح جلستك الإداريه وبقي صلاحياتك الأخرى..',
	'RETURN_HOME' => 'رجوع للمركز',
	'R_CONFIGS' => 'إعدادات المركز',
	'R_CPINDEX' => 'بداية لوحة التحكم',
	'R_EXTS' => 'إعدادات الإمتدادات',
	'R_FILES' => 'التحكم بالملفات',
	'R_REPORTS' => 'التحكم بالتبليغات',
	'R_CALLS' => 'التحكم بالمراسلات',
	'R_USERS' => 'التحكم بالأعضاء',
	'R_BCKUP' => 'نسخه إحتياطيه',
	'R_REPAIR' => 'صيانه شامله',
	'R_LGOUTCP' => 'مسح جلسة الإداره',
	'R_BAN' => 'التحكم بالحظر',
	'BAN_EXP1' => 'قم بتحرير الآيبيات المحظوره وإضافة الجديد من هنا ..',
	'BAN_EXP2' => 'إستخدم رمز النجمه (*)لاستبدال الارقام ..إذا كنت تريد الحظر الشامل ..وأستخدم الفاصل (|) للفصل بين الآيبيات',
	'UPDATE_BAN' => 'حفظ تعديلات الحظر',
	'BAN_UPDATED' => 'تم تحديث قائمة الحظر بنجاح ..',
	'R_RULES' => 'التحكم بالشروط',
	'RULES_EXP' => 'من هنا تستطيع تعديل الشروط التي سوف تظهر للزوار والأعضاء',
	'UPDATE_RULES' => 'تحديث الشروط',
	'RULES_UPDATED' => 'تم تحديث الشروط بنجاح ..',
	'R_SEARCH' => 'بحث متقدم',
	'SEARCH_FILES' => 'بحث عن الملفات',
	'SEARCH_SUBMIT' => 'بحث الآن',
	'LAST_DOWN' => 'آخر تحميل',
	'TODAY' => 'اليوم',
	'DAYS' => 'أيام',
	'WAS_B4' => 'كان قبل',
	'BITE' => 'بايت',
	'SEARCH_USERS' => 'بحث عن مستخدمين',
	'R_IMG_CTRL' => 'تحكم بالصور فقط',
	'ENABLE_USERFILE' => 'تفعيل مجلدات المستخدمين',
	'R_EXTRA' => 'هيدر وفوتر إضافي',
	'EX_HEADER_N' => 'الهيدر الإضافي .. وهو مايظهر أسفل الهيدر الأصلي ..',
	'EX_FOOTER_N' => 'الفوتر الإضافي .. وهو مايظهر أعلى الفوتر الأصلي ..',
	'UPDATE_EXTRA' => 'تحديث الإضافات القوالبيه',
	'EXTRA_UPDATED' => 'تم تحديث الإضافات القوالبيه',
	'R_STYLES' => 'الستايلات',
	'STYLES_EXP' => 'لتعديل او حذف ستايل قم بتحديده من أسفل',
	'SHOW_TPLS' => 'عرض القوالب',
	'SUBMIT' => 'موافق',
	'EDIT' => 'تعديل',
	'TPL_UPDATED' => 'تم تحديث القالب',
	'TPL_DELETED' => 'تم حذف القالب',
	'NO_TPL_SHOOSED' => 'لم تقم بإختيار قالب !!!',
	'NO_TPL_NAME_WROTE' => 'لم تقم بكتابة اسم قالب !!!',
	'ADD_NEW_STYLE' => 'إنشاء ستايل جديد',
	'EXPORT_AS_XML' => 'تصدير كـ xml',
	'NEW_STYLES_EXP' => 'قم بتحميل الستايل من ملف xml',
	'NEW_STYLE_ADDED' => 'تمت إضافة الستايل بنجاح ',
	'ERR_IN_UPLOAD_XML_FILE' => 'هناك خطأ في تحميل الملف !',
	'ERR_UPLOAD_XML_FILE_NO_TMP' => 'هناك خطأ في تحميل الملف !',
	'ERR_UPLOAD_XML_NO_CONTENT' => 'الملف لا يحوي محتويات  !',
	'ERR_XML_NO_G_TAGS' => 'الملف لا يحوي بعض الوسوم المهمه  !',
	'STYLE_DELETED' => 'لقد تم حذف الستايل بنجاح',
	'STYLE_1_NOT_FOR_DEL' => 'لا يمكن حذف الستايل الأساسي في كليجا ...',
	'ADD_NEW_TPL' => 'أضف قالب جديد',
	'ADD_NEW_TPL_EXP' => 'قم بكتابة إسم القالب الجديد ...',
	'TPL_CREATED' => 'لقد تم إنشاء القالب الجديد ...',
	
	
	 'R_LANGS' => 'كلمات وعبارات',
	'WORDS_UPDATED' => 'لقد تم تحديث الكلمات ...',
	//deprecated, removed from rc6+
	// [ - ] 'LANGS_EXP' => 'لتغيير لغه او حذفها قم بتحديدها من الأسفل',
	// [ - ] 'SHOW_WORDS' => 'عرض الكلمات والعبارات',
	// [ - ] 'ADD_NEW_LANG' => 'إضافة لغه جديده',
	// [ - ] 'NEW_LANG_EXP' => 'قم بتحميل لغه جديده او لغه معدله',
	// [ - ] 'SHOW_WORDS_EXP' => 'قم بعرض المتغير اللغوي و كلمته او تعديله او حذفه..',
	// [ - ] 'ADD_NEW_WORD' => 'أضف متغير لغه جديد',
	// [ - ] 'ADD_NEW_WORD_EXP' => 'أضف متغير لغه جديده وترجمته النصيه',
	// [ - ] 'LANG_DELETED' => 'لقد تم حذف اللغه ...',
	// [ - ] 'LANG_1_NOT_FOR_DEL' => 'لا يمكن حذف اللغه الإفتراضيه ...',
	// [ - ] 'NEW_LANG_ADDED' => 'لقد تم إضافة اللغه الجديده ...',
	// [ - ] 'NO_WORD_SHOOSED' => 'لم تقم بإختيار كلمة ..',
	// [ - ] 'WORD_DELETED' => 'لقد تم حذف الكلمة بنجاح ...',

	// [ - ] 'WORD_CREATED' => 'لقد تم إضافة الكلمة ...',
	//<<<--
	
	'PLUGINS' => 'إضافات برمجيه',
	'PLUGINS_EX' => 'الإضافات البرمجيه السريعه .. قم بحذفها او تعطيلها من هنا',
	'DISABLE' => 'تعطيل',
	'ENABLE' => 'تفعيل',
	'ADD_NEW_PLUGIN' => 'أضف إضافة برمجيه جديده',
	'ADD_NEW_PLUGIN_EXP' => 'قم بتحميل ملف الإضافه البرمجيهxml ..',
	'PLUGIN_DELETED' => 'لقد تم حذف الإضافه البرمجيه...',
	'PLGUIN_DISABLED_ENABLED' => 'لقد تم تفعيل \ تعطيل الإضافه البرمجيه..',
	'NO_PLUGINS' => 'لا يوجد أي إضافات برمجيه ..',
	'NEW_PLUGIN_ADDED' => 'لقد تمت إضافة الإضافة البرمجيه .. <br /> لاحظ : بعض الأضافات البرمجيه يأتي معها ملفات تحتاج لنقلها لمجلد كليجا.',
	'PLUGIN_EXISTS_BEFORE' => 'الاضافه هذه موجوده سابقاً بنفس الاصدار أو أعلى ولاتحتاج تحديث !',
	'PLUGIN_UPDATED_SUCCESS' => 'لقد تم تحديث الإضافه لأخر إصدار تم رفعه ...',
	
	'R_CHECK_UPDATE' => 'فحص عن تحديثات',
	'ERROR_CHECK_VER' => 'خطأ: لا يمكن جلب معلومات عن اخر نسخه في هذه اللحظه , حاول مجدداً لاحقا!.',
	'UPDATE_KLJ_NOW' => 'يجب أن تقوم بتحديث نسختك إلى آخر نسخه الآن , قم بالذهاب لموقع كليجا لمعلومات أكثر .',
	'U_LAST_VER_KLJ' => 'أنت تستخدم آخر نسخه من كليجا. شكراً لمتابعة نسختك بإستمرار.',
	
	//rc6
	'U_USE_PRE_RE' => 'أنت تستخدم نسخه تطويريه لم تصدر حتى الآن , اظغط <a href="http://www.kleeja.com/bugs/">هنا</a> لإخبارنا بأي أخطاء برمجيه وثغرات قد تقابلك.',
	'STYLE_IS_DEFAULT'	=> 'إستايل إفتراضي',
	'MAKE_AS_DEFAULT'	=> 'إجعله إفتراضي',
	'TPLS_RE_BASIC'	=>	'قوالب أساسيه', 
	'TPLS_RE_MSG'	=>	'قوالب التنبيه', 
	'TPLS_RE_USER'	=>	'قوالب متعلقه بالمستخدم', 
	'TPLS_RE_OTHER'	=>	'قوالب اخرى',
	'STYLE_NOW_IS_DEFAULT' => 'تم جعل الاستايل ستايل افتراضي',
	'STYLE_DIR_NOT_WR'	=>	'مجلد الستايل %s غير قابل للكتابه , أي انك لاتستطيع التعديل على القوالب الا بعد تعديل تصريح المجلد الى تصريح كتابه كـ 777.',
	'TPL_PATH_NOT_FOUND' => 'القالب  %s غير موجود !',
	'NO_CACHED_STYLES'	=> 'لايوجد أي قوالب مخزنه حالياً !',
	'OPEN'	=> 'افتح',
	'SEARCH_FOR'	=> 'أبحث عن',
	'REPLACE_WITH'	=> 'استبدل بـ',
	'REPLACE_TO_REACH'	=> 'حتى الكود تصل الكود التالي',
	'ADD_AFTER'	=> 'أضف بعدها',
	'ADD_AFTER_SAME_LINE'	=> 'أضف بعده في نفس السطر',
	'ADD_BEFORE'	=> 'أضف قبله',
	'ADD_BEFORE_SAME_LINE'	=> 'أضف قبله في نفس السطر',
	'ADD_IN'	=> 'أضف فيه بعد إنشاءه',
	'CACHED_STYLES_DELETED'	=>'تم حذف القوالب المخزنه .',
	'CACHED_STYLES'	=>' القوالب المخزنه',
	'DELETE_CACHED_STYLES'	=>'حذف القوالب المخزنه',
	'CACHED_STYLES_DISC'	=>	'القوالب المخزنه هي تعديلات متبقيه من الإضافات لم يتم اضافتها اما بسبب الصلاحيات او عدم وجود كلمة البحث المناسبه , لذا يجب عليه تركيبها بقوالبك يدوياً %s .',
	'UPDATE_NOW_S'	=>	'انت تستخدم نسخه قديمه من كليجا , قم بالترقيه فوراً , نسختك الحاليه هي %1$s والنسخه الجديده هي %2$s .',
	'ADD_NEW_EXT'	=> 'أضف إمتداد جديد',
	'ADD_NEW_EXT_EXP'	=> 'قم بكتابة الإمتداد , واختيار مجموعته',
	'EMPTY_EXT_FIELD'	=>	'حقل الإمتداد فارغ!', 
	'NEW_EXT_ADD'		=>	'تم إضافة الإمتداد الجديد ',
	'NEW_EXT_EXISTS_B4'	=>	'الإمتداد الجديد %s موجود مسبقاً !.',
	'KILOBYTE'	=>	'كيلوبايت',
	'NOT_SAFE_FILE'	=> 'يقول النظام ان هذا الملف غير آمن !',
	'CONFIG_WRITEABLE' => 'ملف config.php قابل للكتابه حالياً ونوصي وبشده تغيير التصريح له ل640 او على الأقل 644.',
	'NOTE'	=>	'لاحظ',
	'NO_KLEEJA_COPYRIGHTS'	=> 'يبدوا أنك أزلت حقوق كليجا من الفوتر بالخطأ , قم بإرجاعها لكي نستطيع إكمال التطوير وتقديم السكربت مجانا , لو أردت شراء رخصة إزالة الحقوق  %s .',
	'USERS_NOT_NORMAL_SYS'	=> 'نظام العضويات الحالي ليس النظام العادي , أي أن الاعضاء الحاليين لايمكن تحريرهم من هنا بل من السكربت الذي تم ربط كليجا به , هؤلا الأعضاء يتبعون لنظام العضويات العادي.',
	'ARE_YOU_SURE_DO_THIS'	=> 'هل انت متأكد من القيام بهذه العمليه؟',
	'SITE_FOR_MEMBER_ONLY'	=> 'المركز للأعضاء فقط , قم بالتسجيل أو بالدخول لتستطيع التحميل.',
	'DIMENSIONS_THMB'		=> 'ابعاد المصغرات',
	'AUTH_INTEGRATION_N_UTF8_T'	=> '%s ليست utf8',
	'AUTH_INTEGRATION_N_UTF8' => '%s يجب أن يكون ترميز قاعدة البيانات الخاصه به utf8 لكي يتم الربط مع كليجا !.',
	'SCRIPT_AUTH_PATH_WRONG'	=> 'مسار السكربت %s الذي تم ربط عضويات كليجا معه خاطئ ,قم بظبطه',
	'SHOW_MY_FILECP'		=> 'السماح بعرض ملفاتي',
	'PASS_ON_CHANGE'		=> 'تغيير كلمة المرور',
	'MOST_EVER_ONLINE'		=> 'اكثر عدد تواجد بالمركز كان',
	'ON'					=> 'في',
	'LAST_REG'				=> 'اخر عضو مسجل',
	'NEW_USER'				=> 'عضو جديد',
	'LIVEXTS'				=> 'صيغ مباشره , افصلهم باستخدام الفاصله',
	'MUST_LOGIN'			=> 'يجب عليك أستخدام اسم مستخدم وكلمة مرور صحيحتين لتسجيل الدخول للوحة تحكم الإدارة.',
	
	'ADMIN_DELETE_FILE_ERR'	=> 'لايوجد ملفات مرفوعة للعضو او حدث خطا غير متوقع اثناء محاولة حذف الملفات . ',
	'ADMIN_DELETE_FILE_OK'	=> 'تم حذف كافة ملفات العضو',
	'ADMIN_DELETE_FILES'	=> 'حذف كافة ملفات العضو',
	
	'KLJ_MORE_PLUGINS'	=> array('قم بالحصول على الكثير من الاضافات من مركز الاضافات في موقع كليجا ,<a target="_blank" href="http://www.kleeja.com/plugins/">إظغط هنا للذهاب لهناك</a> .',
								'هل أنت مطور ؟ هل قمت بتطوير اضافات لكليجا وتريد عرضها للأخرين أو تريد بيعها في مركز كليجا للاضافات ؟ اذن <a target="_blank" href="http://www.kleeja.com/plugins/">إظغط هنا للذهاب لهناك</a>. ',
								),
	'KLJ_MORE_STYLES'	=> array('قم بالحصول على الكثير من الستايلات من معرض الستايلات في موقع كليجا ,<a target="_blank" href="http://www.kleeja.com/styles/">إظغط هنا للذهاب لهناك</a> .',
							 'هل أنت مصمم ؟ هل تريد عرض ستايلاتك في في معرض كليجا للجميع مجانا او بمقابل ؟  إذن <a target="_blank" href="http://www.kleeja.com/styles/">إظغط هنا للذهاب لهناك</a> .',
							 ),
	'CHECK_ALL'	 => 'تحديد الكل',

));

?>
