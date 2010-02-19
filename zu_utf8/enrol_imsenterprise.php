<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.9.4 (Build: 20090128) (2007101540)
      // local modifications from http://free.icyber.co.za


$string['aftersaving...'] = 'Uma usukugcinile okokulungisile,Ungathanda uku';
$string['allowunenrol'] = 'Vumela i IMS data ukuthi<strong>ungabhalisi</strong>';
$string['basicsettings'] = 'Basic settings';
$string['coursesettings'] = 'Course data options';
$string['createnewcategories'] = 'Yakha umkhakha omusha wesifundo  esifihliwe  uma singatholakali kuyi Moodle';
$string['createnewcourses'] = 'Yakha isifundo esisha uma singatholakali kuyi Moodle';
$string['createnewusers'] = 'Khanda ama accounts abasebenzisi abangakabhalisi kuyi Moodle';
$string['cronfrequency'] = 'Frequency of processing';
$string['deleteusers'] = 'Susa ama accounts abasebenzisi uma kushiwo kuyi IMS data';
$string['description'] = 'This method will repeatedly check for and process a specially-formatted text file in the location that you specify. The file must follow the <a href=\'../help.php?module=enrol/imsenterprise&amp;file=formatoverview.html\'>IMS Enterprise specifications</a> containing person, group, and membership XML elements.
description';
$string['doitnow'] = 'perform an IMS Enterprise import right now';
$string['enrolname'] = 'IMS Enterprise file';
$string['filelockedmail'] = 'The text file you are using for IMS-file-based enrolments ($a) can not be deleted by the cron process. This usually means the permissions are wrong on it. Please fix the permissions so that Moodle can delete the file, otherwise it might be processed repeatedly.';
$string['filelockedmailsubject'] = 'Important error: Enrolment file';
$string['fixcasepersonalnames'] = 'Change personal names to Title Case';
$string['fixcaseusernames'] = 'Change usernames to lower case';
$string['imsrolesdescription'] = 'The IMS Enterprise specification includes 8 distinct role types. Please choose how you want them to be assigned in Moodle, including whether any of them should be ignored.
imsrolesdescription';
$string['location'] = 'Indawo lapho ifayela likhona';
$string['logtolocation'] = 'Log file output location (blank for no logging)';
$string['mailadmins'] = 'Yazisa abaphethe nge email';
$string['mailusers'] = 'Yazisa abasebenzisa nge email';
$string['miscsettings'] = 'Miscellaneous';
$string['processphoto'] = 'Add user photo data to profile';
$string['processphotowarning'] = 'Warning: Image processing is likely to add a significant burden to the server. You are recommended not to activate this option if large numbers of students are expected to be processed.
processphotowarning';
$string['restricttarget'] = 'Qhubeza idata kuphela uma lokho okulandelayo kuchaziwe';
$string['sourcedidfallback'] = 'Use the &quot;sourcedid&quot; for a person\'s userid if the &quot;userid&quot; field is not found
sourcedidfallback';
$string['truncatecoursecodes'] = 'Truncate course codes to this length';
$string['usecapitafix'] = 'Thikha leli bhokisi uma usebenzisa &quot;Capita&quot; (their XML format is slightly wrong)';
$string['usersettings'] = 'User data options';
$string['zeroisnotruncation'] = '0 indicates no truncation';

?>
