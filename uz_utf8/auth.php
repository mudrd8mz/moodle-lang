<?php
$string['auth_dbdescription'] = 'Bu uslubda login/parol juftligini tyekshirish uchun tashqi ma\'lumotlar bazasi qo\'llaniladi.  Yangi ro\'yxat yozuvi yaratish jarayonida maydonchalardagi ma\'lumotlar tizimga ko\'chirilishi mumkin.';
$string['auth_dbextrafields'] = '<p> Bu qo\'shimcha maydonchalar.  Bu yerda ko\'rsatilgan tashqi ma\'lumotlar bazasi maydonchalaridan olingan ma\'lumotlar bilan ba\'zi foydalanuvchi maydonchalarining dastlabki to\'ldirilishini tanlashingiz mumkin. </p><p> sukunat bo\'yicha sozlashlarda, maydonchalar to\'ldirilmaydi.</p><p> Har qanday holda, foydalanuvchi tizimga kirgandan so\'ng barcha maydonchalarni tahrir qilishi mumkin.</p>';
$string['auth_dbfieldpass'] = 'Parolni o\'z ichiga olgan maydoncha nomi';
$string['auth_dbfielduser'] = 'Loginni o\'z ichiga olgan maydoncha nomi';
$string['auth_dbhost'] = 'ma\'lumotlar bazasi serverini o\'z ichiga olgan kompyutyer';
$string['auth_dbname'] = 'ma\'lumotlar bazasi nomi';
$string['auth_dbpass'] = 'Ko\'rsatilgan loginga mos parol';
$string['auth_dbpasstype'] = 'Foydalanilayotgan parollar formatini aniqlaydi. MD5-boshqa web-ilovalar bilan ulanishda eng qulay kodlash, masalan, PostNuke';
$string['auth_dbtable'] = 'Jadvalning ma\'lumotlar bazasidagi nomi';
$string['auth_dbtitle'] = 'Tashqi ma\'lumotlar bazasini ishlatish';
$string['auth_dbtype'] = 'ma\'lumotlar bazasi turi (Sm. <a href=\"../lib/adodb/readme.htm#drivers\">Tafsilotlar uchun ADO db</a> dokumenttsiyasi)';
$string['auth_dbuser'] = 'ma\'lumotlar bazasi uchun faqat o\'qish huquqiga ega foydalanuvchi login';
$string['auth_emaildescription'] = 'Elyektron pochta orqali tasdiqlash – sukunat bo\'yicha autentifiktsiya uslubi qo\'llaniladi. Foydalanuvchini ro\'yxatga olishda ko\'rsatilgan manzil bo\'yicha ro\'yxatga qo\'yishni tasdiqlashni so\'rab elyektron xat yuboriladi. Xatda foydalanuvchi tasodifiy yaratilgan (xavfsiz) ssilka bo\'yicha sahifada ro\'yxatdan o\'tishni tasdiqlashi mumkin. Kyeyinchalik tizimga kirishda foydalanuvchi ismi va paroli ma\'lumotlar bazasidagi qiymatlari bilan taqqoslanadi.';
$string['auth_emailtitle'] = 'E-mail - autentifiktsiya';
$string['auth_imapdescription'] = 'ushbu uslub login/parol juftligi mutanosibligini tyekshirish uchun  IMAP-serverdan foydalanadi.';
$string['auth_imaphost'] = 'IMAP-server manzili. IP-manzildan foydalaning, DNS-nomdan emas.';
$string['auth_imapport'] = 'IMAP-server uchun port nomyeri. Odatda 143 dan 993gacha diapozonda bo\'ladi.';
$string['auth_imaptitle'] = 'IMAP-serverdan foydalanish';
$string['auth_imaptype'] = 'Tip servera IMAP serveri turi. IMAP serverlari identifiktsiya va muzokara uchun har xil turlarga ega bo\'lishi mumkin.';
$string['auth_ldap_bind_dn'] = 'foydalanuvchilar qidiruvi uchun bog\'langan foydalnuvchini istasangiz, shu yerda ko\'rsating. Masalan, \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Foydalanuvchilar bog\'lanishi uchun parol.';
$string['auth_ldap_contexts'] = 'Foydalanuvchilar joylashgan kontyekstlar ro\'yxati. Farqli kontyekstlarni ajrating \';\'. Masalan: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Foydalanuvchi yaratish uchun pochta orqali tasdiqlashni ruxsat etgan bo\'lsangiz, foydalanuvchilar kiritadigan kontyekstni aniqlang. U avvalgilaridan farqli bo\'lishi kyerak, havfsizlik muammolarini oldini olish uchun. ldap_context-o\'zgaruvchilarga kontyekst nomini qo\'shish zarurati yo\'q, tizim ushbu kontyekstdan foydalanuvchilarni avtomatik ravishda qidiradi.';
$string['auth_ldap_creators'] = 'yangi kurslar yaratish huquqiga ega guruhlar ro\'qyxati. Guruhlar ro\'yxatini \'; yordamida ajrating\'. Masalan,\'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'LDAP-xostni URL\'a shaklida ko\'rsating, masalan \'ldap://ldap.myorg.com/\' yoki \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'guruh a\'zoligini aniqlovchi foydalanuvchi atributini aniqlang. Odatda \'ishtirokchi\'';
$string['auth_ldap_search_sub'] = '<> 0 qiymatlarini ko\'rsating, agar Siz foydalanuvchilarni subkontyekst bo\'yicha qidirishni yoqtirsangiz.';
$string['auth_ldap_update_userinfo'] = 'foydalanuvchi ma\'lumotlarini (Ismi, Familiyasi, manzili ..) LDAP dan tizimgacha yangilang. ma\'lumotni aks etish uchun /auth/ldap/attr_mappings.php ga qarang.';
$string['auth_ldap_user_attribute'] = 'Nom/qidiruv uchun foydalaniladigan atribut. Odatda, \'cn\'.';
$string['auth_ldap_version'] = 'Sizning serveringiz ishlatadigan LDAP protokol vyersiyasi.';
$string['auth_ldapdescription'] = 'Ushbu uslub LDAP-server orqali  autentifiktsiyani ta\'minlaydi. Agar ushbu parol va login kuchga ega bo\'lsa, tizim ma\'lumotlar bazasida yangi foydalanuvchi ro\'yxat yozuvi yaratiladi. Ushbu modul LDAP-server maydonchalarini o\'qib tizimdagi kyerak bo\'lgan mos soha (maydoncha)larni to\'ldirishi mumkin. Kyeyinchalik faqat login va parol tyekshiriladi';
$string['auth_ldapextrafields'] = 'Ushbu maydonchalar qo\'shimchadir. Bu yerda ko\'rsatilgan LDAP maydonchalari bo\'yicha foydalanuvchi maydonchalarini dastlabki to\'ldirilishini tanlashingiz mumkin. <p> LDAP dan ma\'lumotlarni ko\'chirmaslik uchun ushbu maydonchani to\'ldirmang.</p><p> Har qanday holda, foydalanuvchi tizimga kirgandan so\'ng barcha maydonchalarlagi ma\'lumotlarni tahrir qilishi mumkin.</p>';
$string['auth_ldaptitle'] = 'LDAP-serverdan foydalanish';
$string['auth_manualdescription'] = 'ushbu uslub foydalanuvchilar o\'z hisob yozuvlarini yaratishlari uchun har qanday yo\'lni o\'chirib yuboradi. Barcha hisob yozuvlari boshqaruv foydalanuvchisi tomonidan qo\'lda yaratilishi kyerak.';
$string['auth_manualtitle'] = 'Faqat qo\'lda kiritilgan hisob yozuvlari';
$string['auth_multiplehosts'] = 'Xostlar bir nyechta bo\'lganda ular quyidagicha ko\'rsatilishi kyerak: host1.com;host2.com;host3.com';
$string['auth_nntpdescription'] = 'Ushbu uslub login va parol mosligini aniqlash uchun NNTP-serverdan foydalanadi.';
$string['auth_nntphost'] = 'NNTP-server manzili. IP-manzildan foydalaning, DNS-nomdan emas.';
$string['auth_nntpport'] = 'Server porti raqami (odatda, 119)';
$string['auth_nntpport_key'] = 'Port';
$string['auth_nntptitle'] = 'NNTP-serverdan foydalanish';
$string['auth_nologintitle'] = 'Kirish yo\'q';
$string['auth_nonedescription'] = 'Foydalanuvchilar darhol, tashqi serverdan identifiktsiyasiz va elyektron pochta orqali tasdiqlashsiz, ruxsatdan o\'tib hisob yozuvlarini yaratishlari mumkin. E\'tibor byering, ushbu opsiyadan foydalanishda havfsizlik va paydo bo\'lishi mumkin boshqarish muammolari to\'g\'risida unutmang.';
$string['auth_nonetitle'] = 'autentifiktsiyadan foydalanmaslik';
$string['auth_pop3description'] = 'Ushbu uslub login/parol juftligi mosligi va to\'g\'riligini tyekshirish uchun POP3-serverdan foydalanadi.';
$string['auth_pop3host'] = 'POP3-server manzili. IP-manzildan foydalaning, DNS-nomdan emas.';
$string['auth_pop3host_key'] = 'Host';
$string['auth_pop3mailbox_key'] = 'Pochta qutisi';
$string['auth_pop3port'] = 'Server porti raqami (odatda, 110)';
$string['auth_pop3title'] = 'POP3-serverdan foydalanish';
$string['auth_pop3type'] = 'Server turi. Agar serveringiz syertifikatlarga asoslangan himoyadan foydalansa, pop3cert dan foydalaning.';
$string['auth_pop3type_key'] = 'Turi';
$string['auth_radiusnasport_key'] = 'Port';
$string['auth_remove_delete'] = 'Ichki to\'liq o\'chirish';
$string['auth_shibboleth_select_member'] = 'Men ... ni a\'zosiman';
$string['auth_user_create'] = 'Foydalanuvchilar yaratishga ruxsat byerish';
$string['auth_user_creation'] = 'YAngi (anonim) foydalanuvchilar hisob yozuvlarini autentifiktsiyaning tashqi manbasida yaratib elyektron pochta orqali tasdiqlashlari mumkin. Agar bunga ruxsat byersangiz, foydalanuvchini kiritish uchun modul aniqlagan opsiyalarni konfigurtsiyalashni unutmang.';
$string['auth_usernameexists'] = 'Tanlangan login mavjud. Boshqasini tanlang.';
$string['authenticationoptions'] = 'Autentifiktsiyani sozlang';
$string['authinstructions'] = 'Bu yerda Siz foydalanuvilaringiz uchun login va parol  qanday bo\'lishi kyerakligi to\'g\'risida ko\'rsatmalar byerishingiz mumkin. Bu yerda kiritilgan matn tizimga kirish sahifasida aks ettiriladi. Agarda maydonchani bo\'sh qoldirsangiz hyech qanday ko\'rsatmalar aks ettirilmaydi.';
$string['changepassword'] = 'Parol bilan URLni o\'zgartirish';
$string['changepasswordhelp'] = 'Bu yerda Siz foydalanuvchilar login/parolni o\'zgartirish yoki, unutib qo\'yilgan holda, tiklash uslubini aniqlashingiz mumkin. Foydalanuvchilar tugmachani tizimga kirish sahifasida va o\'zlarining shaxsiy sahifasida ko\'rishadi. Maydon to\'ldirilmagan holda, tugmacha aks ettirilmaydi.';
$string['chooseauthmethod'] = 'Autentifiktsii uslubini tanlang:';
$string['guestloginbutton'] = 'Myehmon sifatida kirish tugmachasi';
$string['instructions'] = 'Ko\'rsatma(yo\'riqnoma)lar';
$string['md5'] = 'MD5-shifrlash';
$string['plaintext'] = 'Matn';
$string['showguestlogin'] = 'Tanlashingiz mumkin: tizimga myehmon sifatida kirish tugmachasini ko\'rsatish yoki ko\'rsatmaslik.';


// Strings below here are module specific and will be duplicated in auth_* files
// Module specific language strings should also be copied into their respective
// auth_*.php files to ensure compatibility in all versions of Moodle

$string['sso_idp_description'] = 'Bu servisni foydalanuvchilaringiz $a Mudl saytida qayta kirish amalini bajarmasdan sayohat qilishlariga ruxsat berish uchun chop eting.<ul><li><em>Tobelik</em>: Hamda siz SSO(Servis Provayderga $a. <strong>obuna(yozilishingiz)bo\'lishingiz kerak</strong></li></ul><br/>   
Bu servisga yozilish $a da tasdiqlangan foydalanuvchilardan sizni saytingizga qayta kirish amalini bajarmasdan kira olishlarini ta\'minlashdan iborat.<ul><li><em>Tobelik</em>:
Shu bilan bir qatorda Siz SSO(Servis Provayder)hizmatini $a ga <strong>chop etishingiz kerak</strong></li></ul><br/>';
$string['sso_idp_name'] = 'SSO(Bir pogonali havo -kosmik samalyoti) shaxsiy provayderi';
$string['sso_mnet_login_refused'] = '$a[0]foydalanuvchi ismi $a[1]dan kirishi ruxsat etilmaydi.';
$string['sso_sp_description'] = 'Bu servisni tasdiqlangan foydalanuvchilaringiz $a dan sizning saytingizda qayta kirish amalini bajarmasdan kirishlariga ruxsat berish uchun chop eting.<ul><li><em>Tobelik</em>: Hamda siz SSO(Shaxsiy Provayderga $a. <strong>obuna(yozilishingiz)bo\'lishingiz kerak</strong></li></ul><br/>   
Bu servisga yozilish $a Mudl  saytingizga qayta kirish amalini bajarmasdan sayohat qilishlarini ta\'minlashdan iborat.  <ul><li><em>Tobelik</em>:
Shu bilan bir qatorda Siz SSO(Shaxsiys Provayder)hizmatini $a ga <strong>chop etishingiz kerak</strong></li></ul><br/>';
$string['sso_sp_name'] = 'SSO( Servis Provayder)';

?>
