<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.9.4+ (Build: 20090422) (2007101546)
      // local modifications from http://localhost


$string['description'] = 'फाईलची स्वरुप असेल तर प्रकिया पुन्हा पुन्हा करा जिथे ती साठवली असेल. फाईल मध्ये ,नी वेगवेगळी केलेली असेल प्रत्येक ओळीवर चार ते सहा क्षेत्र असेल तरः
<pre>
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
where:
* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber in the user table NB not id
* idnumber(course) = idnumber in the course table NB not id
* starttime = start time (in seconds since epoch) - optional
* endtime = end time (in seconds since epoch) - optional
</pre>
It could look something like this:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'फल्ट फाईल';
$string['filelockedmailsubject'] = 'महत्वाचे चुक. एनरोलमेंट फाईल';
$string['location'] = 'फाईलची जागा';
$string['mailadmin'] = 'प्रशासनला ईमेलनी सुचना येईल';
$string['mailusers'] = 'उपभोक्ताला ईमेलनी सुचना येईल';

?>
