<?PHP // $Id$ 
         // enrol_imsenterprise.php - created with Moodle 1.8.2 + (November 27, 2007)

$string['aftersaving...'] = 'நீங்கள் உங்களுடைய அமைப்புக்களை சேமித்ததும்,நீங்கள் விரும்பலாம்,';
$string['allowunenrol'] = 'ஆசிரியர்களோ மாணவர்களோ<strong>உள்நுழையாதிருப்பதற்கு</strong>IMS தரவுகளை அனுமதிக்கவும்';
$string['basicsettings'] = 'அடிப்படை அமைப்புக்கள்';
$string['coursesettings'] = 'கற்கைநெறி தரவுகளின் தெரிவுகள்';
$string['createnewcategories'] = 'Moodle இல் கற்கைநெறி வகைகள் இல்லாவிட்டால் புதிய (மறைக்கப்பட்ட)கற்கைநெறி வகைகளை உருவாக்குக';
$string['createnewcourses'] = 'Moodle இல் கற்கைநெறிகள் இல்லாவிட்டால் புதிய (மறைக்கப்பட்ட)கற்கைநெறிகளை உருவாக்குக';
$string['createnewusers'] = 'Moodle இல் இன்னும் பதியப்படாத பயனாளர்களுக்கு புதிய பயனாளர் கணக்கினை உருவாக்குக';
$string['cronfrequency'] = 'செயற்படுத்தப்படுகின்ற எண்ணிக்கைகள்';
$string['deleteusers'] = 'IMS தரவுகளில் குறிப்பிடப்படும்போது பயனாளர் கணக்குகளை அழிக்குக';
$string['enrolname'] = 'IMS உட்படிவ கோப்பு';
$string['filelockedmailsubject'] = 'முக்கியமான பிழை: உள்நுழைவுக் கோப்பு';
$string['fixcasepersonalnames'] = 'தனிப்பட்ட பெயரை பெரிய எழுத்துக்கு மாற்று';
$string['fixcaseusernames'] = 'பயனாளர் பெயரை சிறிய எழுத்துக்கு மாற்று';
$string['location'] = 'கோப்பின் அமைவிடம்';
$string['logtolocation'] = 'பதிவுக் கோப்பின் வெளித்தரவின் அமைவிடம் (உள்நுழைவு இல்லாவிடில் இடைவெளி)';
$string['mailadmins'] = 'மின்னஞ்சல் மூலமாக நிர்வாகிக்கு தெரியப்படுத்துக';
$string['mailusers'] = 'மின்னஞ்சல் மூலமாக பயனாளர்களுக்கு தெரியப்படுத்துக';
$string['miscsettings'] = 'இதர';
$string['processphoto'] = 'பயனாளர் தோற்றப் படத்தை  சேர்';
$string['restricttarget'] = 'பின்வரும் நோக்கம் குறிப்பிடப்பட்டால் மட்டுமே தரவுகள் செயற்படுத்தப்படும்';
$string['sourcedidfallback'] = 'ஒருவரின் \"பயனாளர் அடையாளம்\" நிரல் காணப்படாவிட்டால், \"அடிப்படை அடையாளத்தை\" அவரது பயனாளர் அடையாளமாகப் பயன்படுத்துக';
$string['truncatecoursecodes'] = 'இந்நீளத்திற்குக் கற்கைநெறி codesஐ மட்டுப்படுத்துக';
$string['usecapitafix'] = '\"Capita\" ஐப் பயன்படுத்தினால் இப்பெட்டியில் அடையாளமிடுக (அவற்றின் XML வடிவமைப்பு சிறிது தவறானது )';
$string['usersettings'] = 'பயனாளர் தரவுகளின் தெரிவுகள்';
$string['zeroisnotruncation'] = '0 மட்டுப்படுத்தல் இல்லையென்பதைக குறிக்கின்றது';
$string['description'] = 'This method will repeatedly check for and process a specially-formatted text file in the location that you specify.  The file must follow the <a href=\'../help.php?module=enrol/imsenterprise&file=formatoverview.html\' target=\'_blank\'>IMS Enterprise specifications</a> containing person, group, and membership XML elements.'; // ORPHANED
$string['doitnow'] = 'perform an IMS Enterprise import right now'; // ORPHANED
$string['filelockedmail'] = 'The text file you are using for IMS-file-based enrolments ($a) can not be deleted by the cron process.  This usually means the permissions are wrong on it.  Please fix the permissions so that Moodle can delete the file, otherwise it might be processed repeatedly.'; // ORPHANED
$string['imsrolesdescription'] = 'The IMS Enterprise specification includes 8 distinct role types. Please choose how you want them to be assigned in Moodle, including whether any of them should be ignored.'; // ORPHANED
$string['processphotowarning'] = 'Warning: Image processing is likely to add a significant burden to the server. You are recommended not to activate this option if large numbers of students are expected to be processed.'; // ORPHANED

?>