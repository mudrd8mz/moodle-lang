<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.9.7 (Build: 20091126) (2007101570)


$string['description'] = 'ཐབས་ལམ་འདི་གིས་ཁྱོད་ཀྱིས་གསལ་བཀོད་འབད་མི་གནས་ཁོངས་ནང་གི་དམིགས་བསལ་རྩ་སྒྲིག་འབད་ཡོད་མི་ཚིག་ཡིག་ཡིག་སྣོད་ཡང་བསྐྱར་ཞིབ་དཔྱད་འབད་ཞིནམ་ལས་ལས་སྦྱོར་འབད་འོང་།ཡིག་སྣོདའདི་གྲལ་ཐིག་རེ་རེ་ལུ་ས་སྒོ་བཞི་ཡང་ན་དྲུག་ཡོདཔ་སྦེ་མནོ་ཡོད་མི་ཚག་གིས་སོ་སོའཕྱལ་ཡོད་པའི་ཡིག་སྣོད་ཨིན:
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
$string['enrolname'] = 'ཕིལེཊི་ ཡིག་སྣོད';
$string['filelockedmail'] = 'ཁྱོད་ཀྱིས་ ཡིག་སྣོད་-གཞི་བཞག་ཐོ་བཙུགས་ཀྱི་དོན་ལུ་ལག་ལེན་འཐབ་མི་ཚིག་ཡིག་ཡིག་སྣོད་($a)འདི་ ཀོན་ལས་སྦྱོར་གྱིས་བཏོན་གཏང་མི་ཚུགས།འདི་གིས་གནང་བ་ཚུ་འཛོལ་བ་ཨིན་པའི་དོན་སྟོནམ་ཨིན། མུ་ཌེལ་གྱིས་ཡིག་སྣོད་བཏོན་གཏང་ནིའི་དོན་ལུ་གནང་བ་ཚུ་གཏན་འཁེལ་བཟོ་ དེ་མེན་པ་ཅིན་ འདི་ལོག་ཅི་རང་ལས་སྦྱོར་འབད་འོང་།';
$string['filelockedmailsubject'] = 'འཛོལ་བ་གལ་ཅན: 
ཐོ་བཙུགས་ཡིག་སྣོད';
$string['location'] = 'ཡིག་སྣོད་ གནས་ཁོངས།';
$string['mailadmin'] = 'བདག་སྐྱོང་གློག་འཕྲིན་ཐོགལས་བརྡ་བསྐུལ་འབད';
$string['mailusers'] = 'ལག་ལེན་པ་ཚུ་གློག་འཕྲིན་ཐོག་ལས་བརྡ་བསྐུལ་འབད';

?>
