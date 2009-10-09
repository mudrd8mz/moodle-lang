<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

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