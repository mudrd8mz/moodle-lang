<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.8.2+ (2007021520)


$string['description'] = '<p>நீங்கள் உங்கள் சேரல்களை கட்டுப்படுப்படுத்துவதற்கு LDAP வழங்கியை பயன்படுத்த முடியும்.  
உங்கள் LDAP tree கற்கைநெறிகளுடன் தொடர்புபட்ட குழுக்களை கொண்டுள்ளதோடு அந்த குழுக்கள்/ கற்கைநெறிகள் ஒவ்வொன்றும் மாணவர்களுடன் தொடர்புபடுவதற்கான அங்கத்துவ உள்நுழைவுகளை கொண்டிருக்கும் என கருதப்படுகிறது.
</p><p>கற்கைநெறிகள்LDAPஇல் குழுக்களாக வரையறுக்கப்பட்டதோடு ஒவ்வொரு குழுவும் பல அங்கத்துவ பிரிவுகளைக்கொண்டிருக்கின்றது என கருதப்படுகிறது.          (<em>member</em> or <em>memberUid</em>)அது கான ஒரு தனித்துவ அடையாளத்தை கொண்டிருக்கம்.</p><p>LDAPஉள்வாங்கலை பயன்படுத்துவதற்கு, உங்கள் பயனாளருக்கு<strong>must</strong>செல்லுபடியான ஒரு அடையாள இலக்கம் இருக்க வேண்டும். ஒரு பயனாளர் கற்கைநெறியில் உள்வாங்கப்படுவதற்காக, LDAP குழுக்கள் அந்த அடையாள இலக்கத்தை அங்கத்துவ பிரிவுகளில் கொண்டிருக்க வேண்டும்.
 நீங்கள் ஏற்கனவே LDAP அதிகார நிரூபணத்தை பயன்படுத்தியிருந்தால் மாத்திரமே  இது நன்றாக வேலை செய்யும்.</p><p>பயனாளர் உள்நுழையும்போது சேரல்கள் இற்றைப்படுத்தப்படும். சேரல்களை ஒழுங்கில் பார்வையிடக்கூடியவாறு பேணுவதற்கு நீங்கள் ஒரு எழுத்துருவை பயன்படுத்தலாம்.                  <em>enrol/ldap/enrol_ldap_sync.php</em>.</p><p>புதிய குழுக்கள்LDAP இல் தோன்றும்போது புதிய கற்கைநெறிகள் தானாகவே உருவாகுமாறு இந்த உட்செருகல்கள் அமைக்கப்பட முடியும்.<p>';
$string['enrol_ldap_autocreate'] = 'Moodle இல் இல்லாத பாடநெறிகளில் மாணவர்கள் சேர்ந்திருந்தால், அதற்கான பாடநெறியைத் தன்னிச்சையாகத் தொடங்க முடியும்.';
$string['enrol_ldap_autocreation_settings'] = 'பாடநெறித் தன்-உருவாக்கத்திற்கான அமைப்புகள்';
$string['enrol_ldap_bind_dn'] = 'நீங்கள் பயனாளர்களை தேடுவதற்கு bind-user பயன்படுத்த விரும்பினால் அதை இங்கே குறிப்பிடவும். இதைப் போல, 
\'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'பிணைப்பு-பயனாளருக்கான கடவுச்சொல்';
$string['enrol_ldap_category'] = 'தன்-உருவாக்கப்பட்ட பாடநெறிகளிற்கான வகை';
$string['enrol_ldap_contexts'] = 'LDAP contexts';
$string['enrol_ldap_course_fullname'] = 'விருப்பத்தெரிவு: முழுப்பெயர் பெறப்படும் LDAP புலம்.';
$string['enrol_ldap_course_idnumber'] = 'LDAPஇல் தனித்துவ அடையாளத்தை தொடர்புபடுத்துவதற்கு,<em>cn</em> அல்லது <em>uid</em>. நீங்கள் தன்னியக்கக் கற்கைநெறி உருவாக்கத்தினைப் பயன்படுத்தினால் பெறுமானத்தினைப் பூட்டுதல் சிபாரிசு செய்யக்கூடியது.';
$string['enrol_ldap_course_settings'] = 'பாடநெறியில் சேர்வதற்கான அமைப்புகள்';
$string['enrol_ldap_course_shortname'] = 'விருப்பத்தெரிவு: சுருக்கப்பெயர் பெறப்படும் LDAP புலம்.';
$string['enrol_ldap_course_summary'] = 'விருப்பத்தெரிவு: சுருக்கம் பெறப்படும் LDAP புலம்.';
$string['enrol_ldap_editlock'] = 'பெறுமதியைப் பூட்டு';
$string['enrol_ldap_general_options'] = 'பொதுத் தெரிவுகள்';
$string['enrol_ldap_host_url'] = 'LDAP Host URL-வடிவத்தில் குறிப்பிடுக. \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_memberattribute'] = 'LDAP அங்கத்துவர் இயல்புகள்';
$string['enrol_ldap_objectclass'] = 'கற்கைநெறிகளை தேடுவதற்குobjectClass பயன்படுத்தப்படும். வழக்கமாக \'posixGroup\'.';
$string['enrol_ldap_roles'] = 'வகிபாகங்களைத் தொடர்புபடுத்தல்';
$string['enrol_ldap_search_sub'] = 'உபதொடர்களிலிருந்து குழுவின் அங்கத்துவங்களை தேடுக.';
$string['enrol_ldap_server_settings'] = 'LDAP சேவையக அமைப்புகள்';
$string['enrol_ldap_student_contexts'] = 'List of contexts where groups with student
enrolments are located. Separate different 
contexts with \';\'. For example: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Member attribute, when users belongs
(is enrolled) to a group. Usually \'member\'
or \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'மாணவர் சேர்க்கை அமைப்புகள்';
$string['enrol_ldap_teacher_contexts'] = 'List of contexts where groups with teacher
enrolments are located. Separate different 
contexts with \';\'. For example: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Member attribute, when users belongs
(is enrolled) to a group. Usually \'member\'
or \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'ஆசிரியர் சேர்க்கை அமைப்புகள்';
$string['enrol_ldap_template'] = 'விருப்பத்தெரிவு: தன்-உருவாக்கப்படும் பாடநெறிகள் இன்னொரு பாடநெறிப் படிம அச்சிலிருந்து அமைப்புகளை நகலெடுக்கலாம்.';
$string['enrol_ldap_updatelocal'] = 'Update local data';
$string['enrol_ldap_version'] = 'உங்களுடைய சேவை வழங்கி பயன்படுத்தும் LDAP இன் பதிப்பு';
$string['enrolname'] = 'LDAP ';

?>
