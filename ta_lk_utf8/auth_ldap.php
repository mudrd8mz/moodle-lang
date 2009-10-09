<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_auth_user_create_key'] = 'பயனாளர்களை வெளியே உருவாக்கவும்.';
$string['auth_ldap_bind_dn'] = 'பயனாளர்களைத் தேடுவதற்கு நீங்கள்  bind-user ஐப் பயன்படுத்த விரும்பினால், இங்கே குறிப்பிடவும். \'cn=ldapuser,ou=public,o=org\' போல';
$string['auth_ldap_bind_dn_key'] = 'வித்தியாநப்படுத்தப்பட்ட பெயர்';
$string['auth_ldap_bind_pw'] = 'bind-user க்கான கடவுச்சொல்';
$string['auth_ldap_bind_pw_key'] = 'கடவுச் சொல்';
$string['auth_ldap_bind_settings'] = 'பிணைப்பு அமைப்புகள்';
$string['auth_ldap_changepasswordurl_key'] = 'கடவுச் சொல் மாற்றத்துக்கான URL';
$string['auth_ldap_contexts'] = 'பயனாளர்கள் எங்கே சேர்க்கப்பட்டிருக்கிறார்கள் என்பதைக் குறிக்கும் இடங்கள். வித்தியாசமான இடங்கள் \';\' இனால் வேறுபடுத்தப்பட்டிருக்கும். உதாரணம் : \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contexts';
$string['auth_ldap_create_context'] = 'பயனாளர் உருவாக்கத்தை மின்னஞ்சல் உறுதிப்படுத்தலால் நீங்கள் செயலாக்கினால்,பயனாளர் உருவாக்கப்படுகின்ற சூழலைக் குறிப்பிடுக.இந்தச் சூழல், பாதுகாப்பு பிரச்சினையை தடுப்பதற்கு மற்றைய பயனாளர்களிடமிருந்து வித்தியாசப்படுத்தப்பட வேண்டும்.ldap_context-variableக்கு இந்தச் சுழலை நீங்கள் சேர்க்க வேண்டியதில்லை,Moodle தன்னியல்பாக இந்தச் சுழலிருந்து பயனாளர்களுக்காக தேடும்.<br /><b>குறிப்பு!</b> பயனாளர் உருவாக்கல் வேலையை ஆக்குவதற்கு auth/ldap/auth.php கோப்பிலுள்ள user_create() முறையை நீங்கள் சிறிதளவு மாற்றியமைக்க வேண்டியிருக்கும்.';
$string['auth_ldap_create_context_key'] = 'புதிய பயனாளருக்கான Context';
$string['auth_ldap_creators'] = 'புதிய பாடங்களை உருவாக்கும் அதிகாரம் பெற்றவர்களைக் கொண்ட குழுக்களின் பட்டியல். குழுக்களை \';\' கொண்டு பிரித்து இடவும். வழமையாக இது போன்று இருக்கும்.  \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'உருவாக்குனர்கள்';
$string['auth_ldap_expiration_desc'] = 'காலாவதியாக்கப்பட்ட கடவுச்சொல் சரிபார்த்தலை செயலற்றதாக்குவதற்கு இல்லை என்பதை அல்லது LDAP இலிருந்து நேரடியாக கடவுச்சொல் காலாவதி நேரத்தை வாசிப்பதற்கு LDAP தெரிவு செய்க.';
$string['auth_ldap_expiration_key'] = 'காலாவதியாதல்';
$string['auth_ldap_expiration_warning_desc'] = 'எத்தனை நாட்டகளுக்கு முன்னர் கடவுச்சொல் கலாவதியாகும் எச்சரிக்கை வழங்கப்பட வேண்டும்.';
$string['auth_ldap_expiration_warning_key'] = 'காலாவதியாகும் எச்சரிக்கை';
$string['auth_ldap_expireattr_desc'] = 'விருப்பத் தேர்வு: கடவுச்சொல் காலாவதியாகும் நேரத்தைச் சேமிக்கும் ldap-attribute ஐ மேலாணைப்படுத்தும்.';
$string['auth_ldap_expireattr_key'] = 'காலாவதியாதற் பண்புக்கூறு';
$string['auth_ldap_graceattr_desc'] = 'விருப்பத்தெரிவு: Overrides gracelogin attribute';
$string['auth_ldap_gracelogin_key'] = 'Grace புகுபதிகைப் பண்புக்கூறு';
$string['auth_ldap_gracelogins_desc'] = 'LDAP கருணை உள்நுழைவு ஆதரவை செயலாக்குக.கடவுச்சொல் காலாவதியாகிவிட்ட பின்,கருணை உள்நுழைவு கணக்கீடு 0 ஆக இருக்கும் வரை பயனாளர் உள்நுழைய முடிகிறது.இந்த அமைப்பின் செயலாக்கம்,கடவுச்சொல் காலாவதியாக்கப்பட்டால் கருணை உள்நுழைவுச் செய்தியை காட்சிப்படுத்துகின்றது.';
$string['auth_ldap_gracelogins_key'] = 'கருணை புகுபதிகைகள்';
$string['auth_ldap_host_url'] = '\'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\' போன்ற URL-படிவத்தில் LDAP வழங்கியை குறிப்பிடுக. failover ஆதரவை பெறுவதற்கு \';\' ஆல் பல் சேவையகங்களை வேறாக்குக.';
$string['auth_ldap_host_url_key'] = 'Host URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP சேவையகத்தால் பயன்படுத்தப்பட்ட குறியிடலை குறிப்பிடுக.அதிகம் அனேகமாக utf-8, MS AD v2 ஆகியன cp1252, cp1250, etc போன்ற முன்னியல்பு தளக் குறியிடலைப் பயன்படுத்துகின்றது.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP குறியாக்கம்';
$string['auth_ldap_login_settings'] = 'புகுபதிகைத் தகவமைவுகள்';
$string['auth_ldap_memberattribute'] = 'விருப்பத் தேர்வு: பயனாளர்கள் ஒரு குழுவிற்கு உரித்தாகும்போது பயனாளர் அங்கத்துவப் பண்புக்கூறை மேலாண்மைப்படுத்தும்.';
$string['auth_ldap_memberattribute_isdn'] = 'விருப்பத் தேர்வு:';
$string['auth_ldap_memberattribute_isdn_key'] = 'அங்கத்துவப் பண்புக்கூறு, dn ஐப் பயன்படுத்துகின்றது.';
$string['auth_ldap_memberattribute_key'] = 'அங்கத்துவப் பண்புக்கூறு';
$string['auth_ldap_noconnect'] = 'LDAP- கூறினால், $a சேவையகத்தைத் தொடர்பு கொள்ள முடியவில்லை.';
$string['auth_ldap_noconnect_all'] = 'LDAP- கூறினால், எந்த சேவையகத்துடனும் தொடர்பு கொள்ள முடியவில்லை: $a';
$string['auth_ldap_noextension'] = 'எச்சரிக்கை: PHP LDAP கூறானது இல்லை போலுள்ளது. தயவு செய்து அது நிறுவப்பட்டு இயலுமைப்படுத்தப்பட்டுள்ளதை உறுதி செய்க.';
$string['auth_ldap_objectclass'] = 'விருப்பத் தேர்வு: Overrides objectClass used to name/search users on ldap_user_type. வழமையாக நீங்கள் இதை மாற்ற வேண்டியதில்லை.';
$string['auth_ldap_objectclass_key'] = 'பொருள் வகுப்பு';
$string['auth_ldap_opt_deref'] = 'எவ்வாறு புனைபெயர்கள் தேடலின் போது கையாளப்படுகின்றன என்பதை தீர்மானிக்க.பின்வருகின்ற பெறுமதிகளின் ஒன்றை தெரிவு செய்க:\"இல்லை\"(LDAP_DEREF_NEVER) அல்லது ஆம் (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Dereference புனைபெயர்கள்';
$string['auth_ldap_passtype'] = 'LDAP சேவையகத்தின் புதிய அல்லது மாற்றிய கடவுச்சொற்களின் வடிவமைப்பைக் குறிப்பிடுக.';
$string['auth_ldap_passtype_key'] = 'கடவுச்சொல் வடிவமைப்பு';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP கடவுச்சொல் காலாவதியாதல் அமைப்புகள்';
$string['auth_ldap_preventpassindb'] = 'கடவுச்சொற்கள் Moodle\'s DB இல் சேமிக்கப்படாதிருப்பதற்கு, \"ஆம்\" ஐத் தெரிவு செய்யவும்.';
$string['auth_ldap_preventpassindb_key'] = 'கடவுச்சொற்களை மறை';
$string['auth_ldap_search_sub'] = 'subcontexts இலிருந்து பயனாளர்களைத் தேடு';
$string['auth_ldap_search_sub_key'] = 'subcontexts ஐத் தேடு';
$string['auth_ldap_server_settings'] = 'LDAP சேவையக தகவமைப்புகள்';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() does not support selected usertype:\"$a\" (..இதுவரை)';
$string['auth_ldap_update_userinfo'] = 'பயனர் விவரங்களை இற்றைப்படுத்துங்கள்.  Update user information (முதற்பெயர்,இறுதிப்பெயர், முகவரி..) from LDAP to Moodle. Specify \"Data mapping\" settings as you need.';
$string['auth_ldap_user_attribute'] = 'விருப்பத் தெரிவு: Overrides the attribute used to name/search users. Usually \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'பயனாளர் பண்புக்கூறு';
$string['auth_ldap_user_settings'] = 'பயனாளர் தேடல் அமைப்புகள்';
$string['auth_ldap_user_type'] = 'LDAP இலே பயனாளர்கள் எவ்வாறு சேமிக்கப்பட வேண்டும் என தெரிவு செய்க. இந்த அமைப்புகள் புகுபதிகை காலாவதி, கருணை புகுபதிகை மற்றும் பயனாளர் உருவாக்கம் போன்றவை இவ்வாறு இடம்பெறும் என்பதனைக் விளக்கும்.';
$string['auth_ldap_user_type_key'] = 'பயனாளர் வகை';
$string['auth_ldap_usertypeundefined'] = 'வரையறுக்கப்படாத config.user_type அல்லது செய்முறை ldap_expirationtime2unix தெரிவு செய்யப்பட்ட வகையை ஆதரவளிக்கவில்லை!';
$string['auth_ldap_usertypeundefined2'] = 'வரையறுக்கப்படாத config.user_type அல்லது செய்முறை ldap_expirationtime2unix தெரிவு செய்யப்பட்ட வகையை ஆதரவளிக்கவில்லை!';
$string['auth_ldap_version'] = 'உங்கள் சேவை வழங்கியில் உள்ள LDAP protocol பதிப்பு.';
$string['auth_ldap_version_key'] = 'பதிப்பு';
$string['auth_ldapdescription'] = 'இந்த முறை வெளியக LDAP சேவையகம் ஒன்றிற்கெதிராக நிரூபணத்தை வழங்குகின்றது.

தரப்பட்ட பயனாளர்பெயர் மற்றும் கடவுச்சொல் செல்லுபடியானதாக இருந்தால்,Moodle அதனுடைய தரவுத்தளத்திலுள்ள புதிய பயனாளர் பதிவொன்றை உருவாக்குக.இந்தப் பகுதி LDAP இலிருந்து பயனாளர் பண்புகளை வாசிக்க மற்றும் Moodle இல் வேண்டப்பட்ட நிரல்களை முன்னிரப்ப முடிகின்றது.பின்வருகின்ற உள்நுழைவுகளுக்காக மட்டும் பயனாளர்பெயர் மற்றும் கடவுச்சொல் சரிபார்க்கப்படுகின்றன.';
$string['auth_ldapextrafields'] = 'இந்த நிரல்கள் விருப்பத்திற்குரியதாக இருக்கின்றன.நீங்கள் இங்கே குறிப்பிடுகின்ற <b>LDAP நிரல்களிலிருந்தான</b> தகவலுடன் சில Moodle பயனாளர் நிரல்களை முன்னிரப்புவதற்கு நீங்கள் தெரிவு செய்ய முடிகிறது.<p>நீங்கள் இந்த நிரல்களை வெற்றாக விட்டால்,LDAP இலிருந்து ஒன்றும் பரிமாறப்படாது மற்றும் Moodle முன்னியல்புகள் பதிலாக பயன்படுத்தப்படும் .</p><p>இரண்டிலொரு விடயத்தில்,பயனாளர், அவர்கள் உள்நுழைந்த பின்பு அந்த நிரல்கள் எல்லாவற்றையும் மாற்றக்கூடியதாக இருக்கும்.</p>';
$string['auth_ldapnotinstalled'] = 'LDAP அத்தாட்சிப்படுத்தல் பயன்படுத்த முடியவில்லை. PHP LDAP கூறு நிறுவப்படவில்லை.';
$string['auth_ldaptitle'] = 'LDAP சேவையகம்';