<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Хэрэв та хэрэглэгч хайхдаа  bind-user -ийг хэрэглэх бол энд сонгоно уу. \'cn=ldapuser,ou=public,o=org\' гэх мэт.';
$string['auth_ldap_bind_pw'] = 'bind-user-ийн нууц үг';
$string['auth_ldap_bind_settings'] = 'Bind тохиргоо';
$string['auth_ldap_contexts'] = 'Хэрэглэгчийн холбогдсон context -ийн жагсаалт. Ялгаатай context -ийг \';\' ашиглан заагла.';
$string['auth_ldap_create_context'] = 'Хэрэв та хэрэглэгч үүсгэхдээ мэйлээр идэвхижүүлэх бол хэрэглэгч үүсэх context-г оруулна уу. Нууцлалын асуудлаас хамааран эдгээр context нь бусад хэрэглэгчдээс ялгаатай байх ёстой. Энэ context-ийг ldap_context хувьсагчид нэмэх шаардлагагүй. Моодл автоматаар энэ context-с хэрэглэгчийг хайх болно.<br /><b>Анхаар!</b> Та хэрэглэгч үүсгэх үйлдлийг ажиллуулахын тулд auth/ldap/lib.php файл дахь function auth_user_create() функцыг завсарлах шаардлагатай';
$string['auth_ldap_creators'] = 'Гишүүд нь курс шинээр үүсгэх боломжтой группын жагсаалт. Олон группыг тусгаарлахдаа \';\' ашигла. \'cn=teachers,ou=staff,o=myorg\' гэх мэт.';
$string['auth_ldap_expiration_desc'] = 'Дууссан нууц үгийг идэвхигүй болгох эсвэл LDAP нь passwordexpiration хугацааг LDAP-с шууд унших болгож тохируулахын тулд Үгүй сонгоно уу';
$string['auth_ldap_expiration_warning_desc'] = 'Нууц үг идэвхигүй болох анхааруулгыг өгөх өдрийн тоо';
$string['auth_ldap_expireattr_desc'] = 'Сонголтынх: нууц үгийн дуусах хугацааг хадгалдаг ldap атрибутыг агуулдаг.';
$string['auth_ldap_graceattr_desc'] = 'Сонголтынх: gracelogin атрибутыг агуулдаг';
$string['auth_ldap_gracelogins_desc'] = 'LDAP-д gracelogin-ийг дэмждэг болгох. Нууц үг идэвхигүй болсны дараа хэрэглэгч gracelogin -ийг 0 болтол нэвтэрч орох боломжтой. Энэ тохиргоог идэвхижүүлснээр grace login зурвасыг харуулах болно';
$string['auth_ldap_host_url'] = 'LDAP host-г URL-form хэлбэрээр оруул. \'ldap://ldap.myorg.com/\' эсвэл \'ldaps://ldap.myorg.com/\' гэх мэт. Олон серверийг \';\' -р заагла.';
$string['auth_ldap_login_settings'] = 'Нэвтрэх тохиргоо';
$string['auth_ldap_memberattribute'] = 'Сонголтынх: Хэрэглэгч ямарваа бүлэгт харъяалагдаж байх үед хэрэглэгчийн гишүүнчлэлийн шинж чанарыг агуулж байдаг. Ихэнхдээ “гишүүн” байдаг.';
$string['auth_ldap_objectclass'] = 'Сонголтынх: ldap_user_type дээр хэрэглэгчийг хайх/нэрлэх үед ашиглагддаг. Ихэнхдээ үүнийг өөрчлөх хэрэггүй байдаг.';
$string['auth_ldap_opt_deref'] = 'Хайлтын явцад алясийг хэрхэн удирдахыг тодорхойлдог. Дараах утгуудын нэгийг нь сонго: \"Үгүй\" (LDAP_DEREF_NEVER) эсвэл \"Тийм\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP нууц үг идэвхигүй болох тохиргоо';
$string['auth_ldap_preventpassindb'] = 'Моодл өгөгдлийн санд нууц үгийг хадгалахгүйн тулд Үгүй сонгоно уу.';
$string['auth_ldap_search_sub'] = 'Subcontext-с хэрэглэгч хайх';
$string['auth_ldap_server_settings'] = 'LDAP серверийн тохиргоо';
$string['auth_ldap_update_userinfo'] = 'LDAP-с Моодл руу хэрэглэгчийн нэр, хаяг зэрэг мэдээллийг шинэчлэх.';
$string['auth_ldap_user_attribute'] = 'Сонголтынх: Хэрэглэгчийг хайх/нэрлэх үед ашиглагддаг атрибутыг агуулдаг. Ихэвчлэн \'cn\' байна.';
$string['auth_ldap_user_settings'] = 'Хэрэглэгч хайх тохиргоо';
$string['auth_ldap_user_type'] = 'LDAP-д хэрэглэгчид хэрхэн хадгалагдахыг сонго. Энэ тохиргоо нь нэвтрэх хугацаа хэрхэн дуусах, grace нэвтрэлт болон хэрэглэгч үүсгэх хэрхэн ажиллахыг тодорхойлдог.';
$string['auth_ldap_version'] = 'Таны сервер дээрхи LDAP протоколын хувилбар';
$string['auth_ldapdescription'] = 'Энэ арга нь гадаад LDAP серверийг ашиглахгүй болгоно. 

Хэрвээ өгөгдсөн хэрэглэгчийн нэр нууц үг нь хүчинтэй байвал Моодл өгөгдлийн санд шинэ хэрэглэгчийн өгөгдөл үүсгэнэ. Энэ модуль нь LDAP-с хэрэглэгчдийн тухай уншаад Моодл дээрх тохирсон талбарууд дээр нь байрлуулдаг. Дараагийн нэвтрэлтээс эхлээд зөвхөн хэрэглэгчийн нэр, нууц үг шалгагдана.';
$string['auth_ldapextrafields'] = 'Энэ талбарууд нь сонголтынх юм. Та Моодлийн зарим хэрэглэгчийн талбарыг энд тодорхойлох <b>LDAP талбаруудаас</b>  авах мэдээллээр дүүргэж болох юм. <p>Хэрвээ та талбаруудыг хоосон орхивол LDAP-с юу ч шилжихгүй, Mоодлийн анхны утгууд нь ашиглагдах болно.</p><p> Эсрэг тохиолдолд хэрэглэгч нэвтэрсэн хойноо энэ бүх талбаруудыг засварлах боломжтой юм.';
$string['auth_ldaptitle'] = 'LDAP сервер хэрэглэх';