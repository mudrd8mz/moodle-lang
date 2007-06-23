<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.5.4 + (2005060240)


$string['description'] = 'Энэ арга нь таны зааж өгсөн байршилд буй тусгай-формат бүхий текст файлыг дахин дахин шалгаж процесс хийдэг юм. 
Файл нь таслалаар тусгаарлагдсан 4 буюу 6 талбартай мөрөндөө:
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
$string['enrolname'] = 'Flat файл ';
$string['filelockedmail'] = 'Таны файланд суурилсан элсэлтэнд текст файл хэрэглэж байгаа бол ($a)-г cron үйлдлээр устгаж чадахгүй. Энэ нь өөр зөвшөөрөлтэй гэсэн үг. Зөвшөөрөлийг өөрчилнө үү, ингэснээр Моодл энэ файлыг устгах болно, эс бөгөөс энэ дахин дахин процессд орох болно. ';
$string['filelockedmailsubject'] = 'Ноцтой алдаа: Элсүүлэх файл ';
$string['location'] = 'Файлын байрлал ';
$string['mailadmin'] = 'Админд эмайлээр мэдэгдэх ';
$string['mailusers'] = 'Хэрэглэгчид эмайлээр мэдэгдэх ';

?>

