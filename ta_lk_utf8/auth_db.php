<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'குறிக்கப்பட்ட அத்தாட்சிப்படுத்தல் தரவுத்தளத்துடன் தொடர்பு கொள்ள முடியவில்லை';
$string['auth_dbchangepasswordurl_key'] = 'கடவுச் சொல் மாற்றும் URL';
$string['auth_dbdebugauthdb'] = 'ADOdb இல் தவறு நீக்குக';
$string['auth_dbdebugauthdbhelp'] = 'புறத் தரவுத்தளத்திற்கான ADOdb இணைப்பினைத் தவறு நீக்கல் - புகுபதிகையின் போது வெற்று பக்கம் பெறப்பட்டால் இதைப் பயன்படுத்துக. உற்பத்தித் தளங்களுக்கு இது  பொருத்தமற்றது.';
$string['auth_dbdeleteuser'] = 'பயனாளர் $a[0] id $a[1] அழிக்கப்பட்டன';
$string['auth_dbdeleteusererror'] = '$a பயனாளரை அழிப்பதில் வழு ஏற்பட்டுள்ளது';
$string['auth_dbdescription'] = 'தரப்பட்ட பயனாளர்பெயர் மற்றும் கடவுச்சொல் ஆகியன செல்லுபடியானவையா என்பதைச் சரிபார்ப்பதற்குப் புறத் தரவுத்தளத்தை இந்த முறை பயன்படுத்துகிறது. கணக்கு புதியதாக இருந்தால், ஏனைய நிரல்களிலிருந்தும் தகவல்கள் Moodle  இற்கு நகல் செய்யப்படும்.';
$string['auth_dbextencoding'] = 'புற db குறியீடாக்கல்';
$string['auth_dbextencodinghelp'] = 'புற த்தரவுத் தளத்தில் பயன்படுத்தப்படும் குறியீடாக்கம்.';
$string['auth_dbextrafields'] = 'These fields are optional. You can choose to pre-fill some Moodle user fields with information from the <b>external database fields</b> that you specify here. <p>If you leave these blank, then defaults will be used.</p><p>In either case, the user will be able to edit all of these fields after they log in.</p>';
$string['auth_dbfieldpass'] = 'கடவுச் சொல்லைக் கொண்டிருக்கும் புலத்தின் பெயர்';
$string['auth_dbfieldpass_key'] = 'கடவுச் சொற் புலம்';
$string['auth_dbfielduser'] = 'பயனாளர் பெயரைக் கொண்டிருக்கும் புலத்தின் பெயர்';
$string['auth_dbfielduser_key'] = 'பயனாளர் பெயர்ப்புலம்';
$string['auth_dbhost'] = 'தரவுத்தளச் சேவையகத்தை host பண்ணும் கணினி';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'உள்ளிடப்பட்ட பயனாளர் $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = '$a பயனரை உள்ளிடுவதில் வழு ஏற்பட்டுள்ளது';
$string['auth_dbname'] = 'தரவுத்தளத்தின் பெயர்';
$string['auth_dbname_key'] = 'DB பெயர்';
$string['auth_dbpass'] = 'மேலே உள்ள பயனாளர் பெயருக்கு ஏற்ற கடவுச்சொல்';
$string['auth_dbpass_key'] = 'கடவுச்சொல்';
$string['auth_dbpasstype'] = '<p>கடவுச்சொல் புலம் பயன்படுத்தும் வடிவமைப்பைக் குறிப்பிடுக. MD5 hashing ஆனது  PostNuke போன்ற ஏனைய பொதுவான இணைய மென்பொருள்களுக்கான தொடர்புக்குப் பயனுடையதாகும். </p> <p> பயனாளர்பெயர்களையும் &amp; மின்னஞ்சல் முகவரிகளையும் நிர்வகிப்பதற்குப் புறத் தரவுத்தளமும்  கடவுச்சொற்களை நிர்வகிப்பதற்கு Moodle ம் வேண்டும் என்றால் \'உள்ளகத்தைப்\' பயன்படுத்துக. நீங்கள் \'உள்ளகத்தை\' பயன்படுத்தினால், நிரப்பப்பட்ட மின்னஞ்சல் முகவரிப் புலம் ஒன்றைப் புறத்தரவுத்தளத்தில் வழங்கியாக <i>வேண்டும்</i>. அத்துடன், நீங்கள் admin/cron.php மற்றும் auth/db/auth_db_sync_users.php ஆகியவற்றைக் கிரமமாக இயக்க வேண்டும். புதிய பயனாளர்களுக்குத் தற்காலிக கடவுச்சொல் ஒன்றுடன், மின்னஞ்சல் ஒன்றை Moodle அனுப்பும்.</p>';
$string['auth_dbpasstype_key'] = 'கடவுச்சொல் வடிவமைப்பு';
$string['auth_dbreviveduser'] = 'புதுப்பிக்கப்பட்ட பயனாளர் $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'பயனாளர் $a ஐப் புதுப்பித்தலில் வழு';
$string['auth_dbsetupsql'] = 'SQL அமைத்தற் கட்டளை';
$string['auth_dbsetupsqlhelp'] = 'விசேட தரவுத்தள அமைப்பிற்கான SQL கட்டளை. இது அனேகம்  தொடர்பாடல் குறியிடல் அமைப்பில் பயன்படுத்தப்படும். MySQL மற்றும் PostgreSQL க்கான உதாரணம்:<em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'நிறுத்தப்பட்ட பயனாளர் $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'வழு நிறுத்தும் பயனாளர் $a';
$string['auth_dbsybasequoting'] = 'sybase மேற்கோள்களைப் பயன்படுத்தவும்';
$string['auth_dbsybasequotinghelp'] = 'Sybase style single quote escaping-Oracle,MS SQL மற்றும் சில மற்றைய தரவுத்தளங்களில் தேவைப்படும். MySQL இல் பயன்படுத்த வேண்டாம்!';
$string['auth_dbtable'] = 'தரவுத்தளத்தில் அட்டவணையின் பெயர்';
$string['auth_dbtable_key'] = 'அட்டவணை';
$string['auth_dbtitle'] = 'புறத் தரவுத்தளம்';
$string['auth_dbtype'] = 'தரவுத்தள வகை(விவரங்களுக்கு <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb ஆவணத்தைப்</a> பார்க்கவும் )';
$string['auth_dbtype_key'] = 'தரவுத்தளம்';
$string['auth_dbupdatinguser'] = 'பயனாளர் $a[0] id $a[1] ஐ இற்றைப்படுத்தல்';
$string['auth_dbuser'] = 'தரவுத்தளத்திற்கான வாசிப்பு அணுகலைக் கொண்ட பயனர் பெயர்';
$string['auth_dbuser_key'] = 'DB பயனாளர்';
$string['auth_dbusernotexist'] = 'இல்லாத பயனர் $a ஐ இற்றைப்படுத்த முடியாது';
$string['auth_dbuserstoadd'] = 'சேர்க்க வேண்டிய பயனர் பதிவுகள்: $a';
$string['auth_dbuserstoremove'] = 'நீக்க வேண்டிய பயனர் பதிவுகள்: $a';