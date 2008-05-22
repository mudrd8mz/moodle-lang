<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.8.2+ (2007021520)


$string['description'] = 'இந்தமுறையானது நீங்கள் குறிப்பிடும் இடத்தில் குறித்த வடிவத்தில் தொகுக்கப்பட்ட கோப்பினையே எப்போதும் தேடும்.இக்குறித்த தொகுக்கப்பட்ட கோப்பு காற்புள்ளிகளால் வேறுபடுத்தப்பட்ட கோப்பாக இருப்பதுடன், நான்கு அல்லது ஆறு பதிவுகளையும் கொண்டிருக்கும் :
<pre>
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
இங்கே :
* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber in the user table NB not id
* idnumber(course) = idnumber in the course table NB not id
* starttime = start time (in seconds since epoch) - optional
* endtime = end time (in seconds since epoch) - optional
</pre>
அது பின்வருமாறு காட்சியளிக்கலாம் : 
<pre>
add, student, 5, CF101 
add, teacher, 6, CF101 
add, teacheredit, 7, CF101 
del, student, 8, CF101 
del, student, 17, CF101 
add, student, 21, CF101, 1091115000, 1091215000 
</pre>';
$string['enrolname'] = 'Flat கோப்பு';
$string['filelockedmail'] = 'கோப்புமுறையான சேரல்களுக்கு நீங்கள் பயன்படுத்தும் உரைக்கோப்பினை ($a) cron படிமுறையால் அழிக்கமுடியாதுள்ளது. இதற்குக் காரணம் அனுமதி முறைமையாக வழங்கப்படாமையாகும். எனவே தயவுசெய்து அக்கோப்பிற்கான அனுமதிகளை முறையாக சேர்த்துக்கொள்ளுங்கள், அல்லது குறித்த கோப்பு மீண்டும் மீண்டும் இயக்கப்படும்..';
$string['filelockedmailsubject'] = 'முக்கிய வழு: சேரல் கோப்பு';
$string['location'] = 'கோப்பின் இடம்';
$string['mailadmin'] = 'நிர்வாகிக்கு மின்னஞ்சல் மூலம்';
$string['mailusers'] = 'பயனாளருக்கு மின்னஞ்சல் மூலம் அறிவி';

?>