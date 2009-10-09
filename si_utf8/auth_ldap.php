<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_ad_create_req'] = 'සක්‍රිය ඩිරෙක්ටරියෙහි නව ගිණුමක් නිර්මාණය කල නොහැකිය. මෙම කාර්ය සඳහා ඔබ සියළුම අවශ්‍යතාවයන් සපුරා ඇති බව (LDAPS සබඳතාවය,';
$string['auth_ldap_attrcreators_key'] = 'ගුණාංග සාදන්නෝ';
$string['auth_ldap_auth_user_create_key'] = 'පරිශිලකයන් බාහිරව නිර්මාණය කරන්න';
$string['auth_ldap_bind_dn'] = 'ඔබට පරිශිලකයන් සෙවීම සඳහා බැදි පරිශිලක භාවිතා කරීමට අවශ්‍ය නම් එය මෙහි සඳහන් කරන්න . \'cn=ldapuser,ou=public,o=org\' වැනි යමක්';
$string['auth_ldap_bind_dn_key'] = 'එකිනෙකට වෙනස් නාමය';
$string['auth_ldap_bind_pw'] = 'බැදි පරිශිලක සඳහා මුර පදය';
$string['auth_ldap_bind_pw_key'] = 'මුරපදය';
$string['auth_ldap_bind_settings'] = 'බැදි - සැකසුම';
$string['auth_ldap_changepasswordurl_key'] = 'මුරපදය URL  වෙනස් කරයි';
$string['auth_ldap_contexts'] = 'පරිශිලකයන්ගේ පිහිටුමෙහි පරිශිලක ලැයිස්තුව  \';\' මගින් විවිධ ප්‍රකරණ වෙන් කරන්න. උදාහරන ලෙස: \'ou=users, o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'ප්‍රකරණ';
$string['auth_ldap_create_context'] = 'ඔබ පරිශිලක නිර්මාණ ඉ-තැපෑල් තහවුරු කිරීමෙන් සක්‍රිය කරන්නේ නම් පරිශිලකයන් නිර්මාණය වුන ප්‍රකරණ සඳහන් කරන්න.මෙම ප්‍රකරණය අනෙක් පරිශිලකයන්ගෙන් වෙනස් විය යුත්තේ ඔබට මෙම ප්‍රකරණ ldap.context_rariable ට එකතු කිරීමට අවශ්‍ය නොවේ.
මෙම ප්‍රකරණයෙන් පරිශිලකයන් සඳහා සෙවීම Moodle මගින් ස්වයංක්‍රියව සිදු කෙරෙනු ඇත.<br/> <b> සටහන !</b>
ඔබට auth/ldap/auth.php ගොනුවේ ඇති user_created ක්‍රමය විකරණය කිරීමෙන් පරිශිලක නිර්මාණ කාර්යය සෑදිය හැකිය.';
$string['auth_ldap_create_context_key'] = 'නව පරිශිලකයන් සඳහා ප්‍රකරන';
$string['auth_ldap_create_error'] = 'දොස් නිර්මාණය කරන පරිශිලකයෙක් LDAP හි ඇත.';
$string['auth_ldap_creators'] = 'නව පාඨමාලා නිර්මාණය සඳහා අවසර ඇති සාමාජිකයන් ලැයිස්තු සමූහය බහුවරණ සමුහ\';\'මගින් වෙන් කරන්න.';
$string['auth_ldap_creators_key'] = 'නිර්මාණ කරුවෝ';
$string['auth_ldap_expiration_desc'] = 'No තේරීම මගින් කල් ඉකුත් වූ මුර පදය සලකුණු කිරීම අක්‍රිය කරන්න.මුරපදය කල් ඉකුත්වීමේ කාලය ඍජුවම LDAP වලින් කියවීමට LDAP තෝරන්න.';
$string['auth_ldap_expiration_key'] = 'කල් ඉකුත්වීම';
$string['auth_ldap_expiration_warning_desc'] = 'මුරපද කල්ඉකුත් වීමේ අවවාදය නිකුත් කිරීමට ගත යුතු දින ගණන';
$string['auth_ldap_expiration_warning_key'] = 'කල් ඉකුත් වීමේ අවවාදය';
$string['auth_ldap_expireattr_desc'] = 'විකල්පය:මුරපදය කල්ඉකුත් වීමේ වේලාව ගබඩා කර ගන්නා ldap අංගෝපාංගය යටපත් කරගන්න.';
$string['auth_ldap_expireattr_key'] = 'කල් ඉකුත් වීමේ උපලක්ෂණය';
$string['auth_ldap_graceattr_desc'] = 'විකල්පයකි : වරප්‍රසාද ලොගින්වීමේ යටපත් කරන්න.';
$string['auth_ldap_gracelogin_key'] = 'වරප්‍රසාද ලොගය උපලක්ෂණ';
$string['auth_ldap_gracelogins_desc'] = 'LDAP වරප්‍රසාද ලොගය සහය සක්‍රිය කරන්න.මුර පදය කල් ඉකුත් වූ පසු වරප්‍රසාද ලොගින් වීමේ ශුන්‍ය වන තෙක් පරිශිලකට ලොගින් විය හැකිය.මුර පදය කල් ඉකුත් වුවත් මෙම සිටවුම සක්‍රිය කිරීමෙන් වරප්‍රසාද ලොග හසුන සංදර්ශනය කරයි.';
$string['auth_ldap_gracelogins_key'] = 'වරප්‍රසාද ලොගය';
$string['auth_ldap_groupecreators_key'] = 'සමූහ සාදන්නෝ';
$string['auth_ldap_host_url'] = 'LDAP සත්කාරකය  URL හි සඳහන් කරන්න -\'ldap://ldap.myorg.com/\' හෝ \'ldaps://ldap.myorg.com/\' වැනි පෝරම';
$string['auth_ldap_host_url_key'] = 'සත්කාරකය URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP සේවාදායකයේ භාවිත කර කේතනය කළ ඒවා සඳහන් කරන්න.
utf-8,MS AD V2 වඩාත් ම පෙනෙන හැටියට cp1252, cp1250 etc වැනි පෙරනිමිය පිහිටුම් කේතනය භාවිත කරයි.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP කේතකය';
$string['auth_ldap_login_settings'] = 'ලොග සැකසුම';
$string['auth_ldap_memberattribute'] = 'විකල්පය: පරිශිලකයන් කණ්ඩායමකට අයත් විට,පරිශිලක සමාජිකයාගේ ගුණාංග යටපත් කරන්න.සාමාන්‍යයෙන් \'සාමාජිකයා\'';
$string['auth_ldap_memberattribute_isdn'] = 'විකල්පය:සාමාජිකයාගේ ගුණාංග අගය හැසිරවීම යටපත් කරන්න,0 හෝ 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'සාමාජික උප ලක්ෂණ  dn උපයෝගිකර ගනි';
$string['auth_ldap_memberattribute_key'] = 'සාමාජික උපලක්ෂණ';
$string['auth_ldap_no_mbstring'] = 'Active Directory හි පරිශිලකයන් නිර්මාණය කිරීමට ඔබට  mbstring දිගුව අවශ්‍ය වේ.';
$string['auth_ldap_noconnect'] = 'LDAP - මොඩියුල $a සේවාදායකයට සබැඳිය නොහැකිය.';
$string['auth_ldap_noconnect_all'] = 'LDAP - මොඩියුල කිසිම $a සේවාදායකයට සබැඳිය නොහැකිය.';
$string['auth_ldap_noextension'] = 'අවවාදය: PHP LDAP මොඩියුලය දක්නට නොමැත.';
$string['auth_ldap_objectclass'] = 'ldap-user-type හි පරිශිලකයන් නම් කිරීම / සෙවීමට යොදාගත් object class යටපත් කරන්න.සාමන්‍යයෙන් ඔබට මෙය වෙනස් කිරීම අවශ්‍ය නොවේ.';
$string['auth_ldap_objectclass_key'] = 'object class';
$string['auth_ldap_opt_deref'] = 'සෙවුමේදී අපර නාම හසුරවන්නේ කෙසේද යන්න තීරණය කරන්න. පහත සඳහන් අගයන්ගෙන් එකක් තෝරන්න: \"No\" (LDAP_DEREF_NEVER)or \" Yes\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'අපර නාමය නැවත යොමු කරන්න';
$string['auth_ldap_passtype'] = 'LDAP සේවාදායකයේ නව හෝ වෙනස් කල මුරපදයේ හැඩතල සඳහන් කරන්න.';
$string['auth_ldap_passtype_key'] = 'මුරපදය හැඩතල';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP මුරපදය කල්ඉකුත් වීමේ සිටුවම';
$string['auth_ldap_preventpassindb'] = 'Moodl\'s DB හි මුරපදය ගබඩා කිරීම වැලැක්වීමට Yes තෝරන්න.';
$string['auth_ldap_preventpassindb_key'] = 'මුරපදය සඟවන්න';
$string['auth_ldap_search_sub'] = 'උප ප්‍රකරණයෙන් පරිශීලක තොරතුරු යාවත්කාලීන කරන්න.';
$string['auth_ldap_search_sub_key'] = 'උප ප්‍රකරණ සොයන්න';
$string['auth_ldap_server_settings'] = 'LDAP සේවාදායකයේ සැකසුම';
$string['auth_ldap_unsupportedusertype'] = 'auth:ldapuser_create()තෝරාගත් $a පරිශිලක වර්ගයට සහය නොදෙයි.(....yet)';
$string['auth_ldap_update_userinfo'] = 'LDAP සිට Moodle දක්වා පරිශිලක තොරතුරු යාවත්කාලීන කරන්න.(මුල් නම,අවසන් නම, ලිපිනය) \" Data mapping\" සිටවුම ඔබට අවශ්‍ය පරිදි සඳහන් කරන්න.';
$string['auth_ldap_user_attribute'] = 'විකල්පය:පරිශිලකයන් නම් කිරීම/සෙවීම සඳහා යොදාගත් ගුණාංග යටපත් කරන්න.සාමාන්‍යයෙන් \'Cn\'.';
$string['auth_ldap_user_attribute_key'] = 'පරිශිලක උපලක්ෂණ';
$string['auth_ldap_user_exists'] = 'LDAP භාවිත නාමය දැනටමත් පවතී.';
$string['auth_ldap_user_settings'] = 'පරිශිලක අගුළු ලූ සිටවුම.';
$string['auth_ldap_user_type'] = 'පරිශිලකයන් LDAP හි ගබඩාකර ඇත්තේ කෙසේදැයි තෝරන්න.
ලොගය කල් ඉකුත්වීම,වර ප්‍රසාද ‍ලොගය සහ පරිශිලක නිර්මාණය ක්‍රියා කරන ආකාරය මෙම සිටවුම සඳහන් කරයි.';
$string['auth_ldap_user_type_key'] = 'පරිශිලක වර්ගය';
$string['auth_ldap_usertypeundefined'] = 'Config.user_type අර්ථ දක්වා නොමැත හෝ ldap_expiration time Zonix ශ්‍රිතය තෝරාගත් වර්ගයට සහය නොදෙයි.';
$string['auth_ldap_usertypeundefined2'] = 'Config.user_type අර්ථ දක්වා නොමැත හෝ ldap_unix2expiration time ශ්‍රිතය තෝරාගත් වර්ගයට සහය නොදෙයි.';
$string['auth_ldap_version'] = 'ඔබගේ සේවාදායකය භාවිතා කරන LDAP ප්‍රෝටකෝලයේ අනුවාදය.';
$string['auth_ldap_version_key'] = 'අනුවාදය';
$string['auth_ldapdescription'] = 'මෙම ක්‍රමය බාහිර LDAP සේවාදායකයට එරෙහිව සත්‍යාපනය ඉදිරිපත් කරයි.
දෙන ලද භාවිත නාමය හා මුරපදය වලංගු නම් Moodle නව පරිශිලක පිවිසුමක් දත්ත සමුද්‍රයෙහි නිර්මාණය කරයි.';
$string['auth_ldapextrafields'] = 'මෙම ක්ෂේත්‍ර විකල්පකි.';
$string['auth_ldapnotinstalled'] = 'LDAP සත්‍යාපනය භාවිත කල නොහැකිය.PHP LDAP මොඩියුලය ස්ථාපනය කර නොමැත.';
$string['auth_ldaptitle'] = 'LDAP සේවාදායකය';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled_key'] = 'සක්‍රිය';
$string['auth_ntlmsso_subnet_key'] = 'උප ජාලය';
$string['ntlmsso_attempting'] = 'NTLM හරහා තනි ලියාපදිංචි වීම සඳහා උත්සාහ කරන්න';
$string['ntlmsso_isdisabled'] = 'NTLM SSO අක්‍රිය කර ඇත';