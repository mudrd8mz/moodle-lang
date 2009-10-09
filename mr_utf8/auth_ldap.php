<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_ad_create_req'] = 'ऍक्टिव डिरेक्टरीमध्ये नवीन खाते करु शकत नाही.त्यासाठी तुम्ही सगळ्या आवश्यकतांच्या पुर्ततांची खात्री करावी.(LDAPS कनेक्शन,योग्य त्या हक्कांनी युजरला बाईंन्ड करा.)';
$string['auth_ldap_attrcreators'] = 'अशा ग्रुपची यादी किंवा संदर्भ की ज्याच्या मेंम्बर्सना ऍट्रीबुट बनवायची परवानगी आहे.ग्रुप \';\' ने सेपरेट करा.';
$string['auth_ldap_attrcreators_key'] = 'ऍट्रीबुट तयार करणारा(निर्माता)';
$string['auth_ldap_auth_user_create_key'] = 'बाहेरून युजर तयार करा.';
$string['auth_ldap_bind_dn'] = 'जर तुम्हाला युजर शोधण्यासाठी बाईंन्ड-युजरचा वापर करायचा असेल तर येथे नमूद करा.
उदा.\'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'विश्लेषीत नाव';
$string['auth_ldap_bind_pw'] = 'बाईंड युजरसाठी पासवर्ड';
$string['auth_ldap_bind_pw_key'] = 'पासवर्ड';
$string['auth_ldap_bind_settings'] = 'बाईंड सेटींगस';
$string['auth_ldap_changepasswordurl_key'] = 'पासवर्ड बदल URL';
$string['auth_ldap_contexts'] = 'युजरस्थित संदर्भ यादी.वेगळे संदर्भ \';\'ने सेपरेट करा.
उदा. \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'संदर्भ';
$string['auth_ldap_create_context'] = 'जर ई-मेल पडताळणीने युजर बनवायला एनेबल केल तर जेथे युजर तयार होतो तिथला संदर्भ नमूद करा.हा संदर्भ 
ईतर युजरपेक्षा वेगळा असेल.तुम्हाला हा संदर्भ ldap_context-variable मध्ये भरण्याची गरज नाही,मुडल आपोआप हा संदर्भ शोधेल.तुम्हाला auth/ldap/auth.php मधील user_create() मेथड बदलावी लागेल';
$string['auth_ldap_create_context_key'] = 'नवीन युजर्ससाठी संदर्भ';
$string['auth_ldap_create_error'] = 'LDAP मध्ये युजर तयार करतानाची चुक';
$string['auth_ldap_creators'] = 'अशा ग्रुपची यादी किंवा संदर्भ की ज्याच्या मेंम्बर्सना कोर्स बनवायची परवानगी आहे.ग्रुप \';\' ने सेपरेट करा.
उदा.\'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'बनविणारा(निर्माता)';
$string['auth_ldap_expiration_desc'] = 'संपलेले पासवर्ड चेकिंग डीसेबल करण्यासाठी \'नाही\' निवडा किंवा LDAP संपलेल्या पासवर्डची वेळ  डायरेक्टली LDAP मधून वाचेल.';
$string['auth_ldap_expiration_key'] = 'संपणे';
$string['auth_ldap_expiration_warning_desc'] = 'पासवर्ड संपण्याची सूचना देण्याआधीचे दीवस.';
$string['auth_ldap_expiration_warning_key'] = 'संपल्याची सूचना';
$string['auth_ldap_expireattr_desc'] = 'ऐच्छीक:ldap-ऍट्रिबुट कि जो पासवर्ड संपल्याची वेळ साठवतो तो ओवरराईड करा';
$string['auth_ldap_expireattr_key'] = 'संपल्याचा ऍट्रिबुट';
$string['auth_ldap_graceattr_desc'] = 'ऐच्छीक:gracelogin -ऍट्रिबुट  ओवरराईड करा';
$string['auth_ldap_gracelogin_key'] = 'gracelogin -ऍट्रिबुट';
$string['auth_ldap_gracelogins_desc'] = 'ग्रेस लॉग-ईन सपोर्ट एनॅबल करा.जेव्हा पासवर्ड संपतो तेव्हा युजर ग्रेस लॉग-ईन 0 होईपर्यंत लॉग-ईन होऊ शकतो.ही सेटिंग एनॅबल केली की,जर पासवर्ड संपला असेल तर ग्रेस लॉग-ईन मेसेज दाखवतो.';
$string['auth_ldap_gracelogins_key'] = 'ग्रेस लॉग-ईन';
$string['auth_ldap_groupecreators'] = 'अशा ग्रुपची यादी किंवा संदर्भ की ज्याच्या मेंम्बर्सना ग्रुप बनवायची परवानगी आहे.ग्रुप \';\' ने सेपरेट करा.
उदा.\'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'ग्रुप बनविनणारा(ग्रुप निर्माता)';
$string['auth_ldap_host_url'] = 'LDAP होस्ट \'ldap://ldap.myorg.com/\' किंवा \'ldaps://ldap.myorg.com/\'सारख्या URL ने नमूद करा.';
$string['auth_ldap_host_url_key'] = 'होस्ट URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP सर्वरच एनकोडिंग नमूद करा.utf-8, MS AD v2 नेहमीची cp1252, cp1250 सारखी एनकोडिंग वापरतात.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP एनकोडिंग';
$string['auth_ldap_login_settings'] = 'लॉग-ईन सेटिंगस';
$string['auth_ldap_memberattribute'] = 'ऐच्छीक:जेव्हा युजर ग्रुपमध्ये जातो तेव्हा युजर मेंबर ऍट्रिबुट ओवरराईड करा';
$string['auth_ldap_memberattribute_isdn'] = 'ऐच्छीक:मेंबर ऍट्रिबुट व्हॅल्यु 0 किंवा 1 ने ओवरराईड करा';
$string['auth_ldap_memberattribute_isdn_key'] = 'मेंबर ऍट्रिबुट dn वापरतो.';
$string['auth_ldap_memberattribute_key'] = 'मेंबर ऍट्रिबुट';
$string['auth_ldap_no_mbstring'] = 'तुम्हाला जर ऍक्टिव डीरेक्टरीमध्ये युजर बनवायचे असतील तर mbstring एक्सटेंशनचा वापर करा.';
$string['auth_ldap_noextension'] = 'सूचना-PHP LDAP मॉड्युल उपलब्ध नाही.ते ईंस्टॉल व एनेबल केल्याची खात्री करा.';
$string['auth_ldap_objectclass'] = 'ऐच्छीक:ldap_user_type वरील objectClass ओवरराईड करा.तुहाला बदल करण्य़ाची गरज नाही.ऑ';
$string['auth_ldap_objectclass_key'] = 'ऑब्ज़ेक्ट क्लास';
$string['auth_ldap_opt_deref'] = 'शोधण्याच्या प्रक्रीयेमध्ये दुसर्‍या नावांना(उपनाव)कसे नियंत्रीत करावे ते ठरवते.\"नाही\"(LDAP_DEREF_NEVER) किंवा \"होय\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'दुसर्‍या नावांना(उपनाव) काढून टाका.';
$string['auth_ldap_passtype'] = 'नवीन किंवा बदललेल्या पासवर्डच सेटींग LDAP सर्वरवर नमूद करा.';
$string['auth_ldap_passtype_key'] = 'पासवर्ड फॉर्मॅट';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP पासवर्ड संपण्याबद्दलची सेटींग.';
$string['auth_ldap_preventpassindb'] = 'मुडलच्या डेटाबेसमधले पासवर्ड नको असतील तर \"होय\" निवडा.';
$string['auth_ldap_preventpassindb_key'] = 'पासवर्ड लपवा.';
$string['auth_ldap_search_sub'] = 'उप-संदर्भापसून युजर शोधा.';
$string['auth_ldap_search_sub_key'] = 'उप-संदर्भ शोधा.';
$string['auth_ldap_server_settings'] = 'LDAP सर्वर सेटींग';
$string['auth_ldap_update_userinfo'] = 'LDAP मधुन मुडलकडे युजरची महिती(नाव,आडनाव,पत्ता) बदला.तुमच्या गरजेनुसार \"डेटा मॅपिंग\" नमूद करा.';
$string['auth_ldap_user_attribute'] = 'ऐच्छीक:नाव/शोधा युजर्सच ऍट्रिब्युट ओवरराईड करा.';
$string['auth_ldap_user_attribute_key'] = 'युजर ऍट्रिब्युट';
$string['auth_ldap_user_exists'] = 'LDAP युजरच नाव अस्तित्वात आहे.';
$string['auth_ldap_user_settings'] = 'युजर लूक-अप सेटिंग';
$string['auth_ldap_user_type'] = 'LDAP मध्ये युजर कसे साठ्वतात ते निवडा.ही सेटिंग लॉग-ईन संपल्याबद्दल,ग्रेस लॉग-ईनबद्दल आणि युजर बनवण्याबद्दल  सांगेल .';
$string['auth_ldap_user_type_key'] = 'युजरचा प्रकार';
$string['auth_ldap_usertypeundefined'] = 'config.user_type मिळत नाही किंवा ldap_expirationtime2unix निवड्लेल्य़ा प्रकारासाठी सपोर्ट करत नाही!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type मिळत नाही किंवा ldap_unixi2expirationtime निवड्लेल्य़ा प्रकारासाठी सपोर्ट करत नाही!';
$string['auth_ldap_version'] = 'LDAP प्रोटोकॉलची तुमच्या सर्वरवरची प्रत';
$string['auth_ldap_version_key'] = 'प्रत';
$string['auth_ldapdescription'] = 'ही मेथड बाहेरच्या LDAP सर्वरविरुद्ध पडताळ्णी पुरवीते.जर दिलेला युजर नेम व पासवर्ड योग्य असेल तर मुडल डेटाबेसमध्ये नवीन  युजर बनविते.हे मोड्युल LDAP कडुन ऍट्रिब्युट वाचू शकते आणि हवे असलेले फिल्डस आधीच भरून ठेवते.खालील लॉग-ईनसाठी युजर-नेम व पासवर्ड चेक करतात.';
$string['auth_ldapextrafields'] = 'हि फिल्डस ऐच्छीक आहेत. तुम्ही काही मुडल युजर फिल्डस जे नमूद केले आहेत ते ,LDAP फिल्डसमधून आधीच भरून ठेऊ शकता.जर तुम्ही ते मोजकळे ठेवले तर नेहमीची मुडल फिल्डस वापरण्यात येतील.कुठ्ल्याही केसमध्ये युजरला लॉग-ईन झाल्यानंतर ही फिल्डस बदलता येतील.';
$string['auth_ldapnotinstalled'] = 'LDAP पडताळणी वापरू शकत नाही.PHP LDAP मॉड्युल इंस्टॉल केलेल नाही.';
$string['auth_ldaptitle'] = 'LDAP सर्वर';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'NTLM डोमेनबरोबर सिंगल साईन ऑन होण्यासाठी \"होय\" ला सेट करा.ह्यासाठी वेब सर्वरवर अवांतर सेट अप करावी लागते.
बघा,<a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'एनॅबल';
$string['auth_ntlmsso_ie_fastpath'] = 'NTLM SSO फास्ट मार्ग एनॅबल करण्यासाठी \"होय\" ला सेट करा.';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE फास्ट मार्ग';
$string['auth_ntlmsso_subnet'] = 'जर सेट केल तर  ते फक्त SSO बरोबरच्या क्लायंटसाठी सबनेटमध्ये प्रयत्न करते';
$string['auth_ntlmsso_subnet_key'] = 'सबनेट';
$string['ntlmsso_attempting'] = 'NTLM मधून Single Sign On साठी प्रयत्न.';
$string['ntlmsso_failed'] = 'आपोआप लॉग-ईन चुकले,सर्वसाधारण लॉग-ईन साठी प्रयत्न करा';
$string['ntlmsso_isdisabled'] = 'NTLM SSO डिसेबल केले आहे.';