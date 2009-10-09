<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'नमूद केलेल्या पडताळणी डेटाबेसशी कनेक्ट होऊ शकत नाही.';
$string['auth_dbchangepasswordurl_key'] = 'पासवर्ड बदलण्यासाठी URL';
$string['auth_dbdebugauthdb'] = 'डी-बग ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'जेव्हा लॉग-ईंनच्या वेळी मोकळ पेज येत तेव्हा ADOdb कनेक्शन बाहेरच्या डेटाबेसशी डी-बग करा.';
$string['auth_dbdescription'] = 'ही मेथड युजरच नाव व पासवर्ड चेक करण्यासाठी बाहेरचा डेटाबेस वापर करते.जर नवीन खाते असेल तर दूसर्‍या फिल्डची माहिती मुडलमध्ये कॉपी केली जाते.';
$string['auth_dbextencoding'] = 'बाहेरून db encoding';
$string['auth_dbextencodinghelp'] = 'encoding बाहेरच्या डेटाबेसमध्ये वापरले जाते.';
$string['auth_dbextrafields'] = 'ही फिल्डस ऑप्शनल आहेत.तुम्ही आधी भरलेले फील्डस नीवडू शकता.जर तुम्ही ती फील्डस भरली नाहीत तर डीफॉल्ट फील्डसचा वापर होईल.ईन केस जर युजरला  फील्डस बदलायची असतील तर लॉग-ईन् नंतर तो बदलू शकतो.';
$string['auth_dbfieldpass'] = 'पासवर्ड असणार्‍या फील्डच नाव';
$string['auth_dbfieldpass_key'] = 'पासवर्ड फील्ड';
$string['auth_dbfielduser'] = 'युजरच नाव असणार्‍या फील्डच नाव';
$string['auth_dbfielduser_key'] = 'युजरनेम फील्ड';
$string['auth_dbhost'] = 'कॉंम्पुटर डेटाबेस सर्वर होस्ट करत आहे.';
$string['auth_dbhost_key'] = 'होस्ट';
$string['auth_dbname'] = 'डेटाबेसच नाव';
$string['auth_dbname_key'] = 'DB नाव';
$string['auth_dbpass'] = 'वरच्या युजरच्या नावाशी मॅच होणारा पासवर्ड?';
$string['auth_dbpass_key'] = 'पासवर्ड';
$string['auth_dbpasstype'] = 'पासवर्ड फील्ड वापरत असलेला फॉर्मॅट नमूद करा.दूसर्‍या वेब ऍप्लीकेशनला(PostNuke) कनेक्ट करयला MD5 hashing हा उपयूक्त आहे.\"internal\" चा वापर करून तुम्ही बाहेरच्या डेटबेसमधून युजर् नेम,ई-मेल पत्ता मॅनेज करू शकता पण पासवर्ड मॅनेज करण्यासाठी मुडलचाच वापर करावा लागेल. जर तुम्ही \"internal\" चा वापर केलात तर तुम्हाला ई-मेल फिल्ड पुरवावच लागेल आणि 2 फिईल्स admin/cron.php व auth/db/auth_db_sync_users.php एक्सिक्युट करावी.मुडल नवीन युजर्सना टेम्पररी पासवर्ड वापरून मेल करेल.';
$string['auth_dbpasstype_key'] = 'पासवर्ड फॉर्मॅट';
$string['auth_dbsetupsql'] = 'SQL सेट-अप कमांड';
$string['auth_dbsetupsqlhelp'] = 'कम्युनिकेशन एनकोडिंग करण्यासाठी SQL कमांड(खास डेटाबेस सेट-अप)
उदा. MySQL आणि PostgreSQL:<em>SET NAMES \'utf8\'</em>';
$string['auth_dbsybasequoting'] = 'सायबेस कोट वापरा';
$string['auth_dbsybasequotinghelp'] = 'Oracle, MS SQL आणि इतर डेटाबेससाठी सायबेस सिंगल कोट एस्केपिंग वापरा.MySQL साठी वापरू नका.';
$string['auth_dbtable'] = 'डेटाबेसमधील टेबलचे नाव.';
$string['auth_dbtable_key'] = 'टेबल';
$string['auth_dbtitle'] = 'बाहेरचा(दुसरा) डेटाबेस';
$string['auth_dbtype'] = 'डेटाबेसचा प्रकार(अधिक तपशिलासाठी बघा <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a>)';
$string['auth_dbtype_key'] = 'डेटाबेस';
$string['auth_dbuser'] = 'डेटाबेस वाचण्यासाठी परवानगी असणार्‍या युजरचे नाव';
$string['auth_dbuser_key'] = 'DB युजर';