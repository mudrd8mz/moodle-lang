<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.9 (2007101509)


$string['description'] = 'Ushbu uslub bilan Siz ko\'rsatgan yo\'ldagi maxsus formatli matnli fayl tekshiriladi va qayta ishlanadi. Fayl quyidagi ko\'rinishga ega bo\'lishi mumkin:
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

<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Matnli fayl';
$string['filelockedmail'] = 'Sizning registrtsiya uchun matnli faylingizni cron jarayoni orqali o\'chirib bo\'lmayapti. Odatda bu hol murojaat huquqlari noto\'g\'ri berilganligidan darak beradi. Iltimos, faylga murojaat huquqlarini  Moodle o\'chirib tashlashi mumkin bo\'lishi uchun muqobillashtiring, aks holda fayl bir necha marotaba qayta ishlanishi mumkin.';
$string['filelockedmailsubject'] = 'Muhim xato: Fayl registratsiyasi(ro\'yhatga olinishi)';
$string['location'] = 'Faylga yo\'l';
$string['mailadmin'] = 'Administratorga pochta orqali xabar berish';
$string['mailusers'] = 'Foydalanuvchiga pochta orqali xabar berish';

?>
