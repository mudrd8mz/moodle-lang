<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.7 beta + (2006101003)


$string['description'] = 'វិធីសាស្ដ្រនេះ នឹង​ធ្វើការ​ពិនិត្យ​រកមើល និង​ដំណើរការ​ឯកសារ​អត្ថបទ​ដែល​បាន​ធ្វើ​ទ្រង់ទ្រាយ​ជាពិសេស​នៅ​ក្នុង​ទីតាំង​ដែល​អ្នក​បញ្ជាក់​ ។ ឯកសារ​គឺ​ជា​ឯកសារ​ដែល​បាន​បំបែក​ដោយ​សញ្ញា​ក្បៀស ដែល​សន្មត់​មាន​វាល​បួន ឬ​ប្រាំមួយ​ក្នុង​មួយ​បន្ទាត់ ៖
<pre>
*  operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
where:
*  operation        = add | del
*  role             = student | teacher | teacheredit
*  idnumber(user)   = idnumber in the user table NB not id
*  idnumber(course) = idnumber in the course table NB not id
*  starttime        = start time (in seconds since epoch) - optional
*  endtime          = end time (in seconds since epoch) - optional
</pre>
វា​មើល​ទៅ​ដូច​ជាយ៉ាង​នេះ ៖
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'ឯកសារ​រាប​ស្មើ';
$string['filelockedmail'] = 'ឯកសារ​អត្ថបទ​ដែល​អ្នក​កំពុងប្រើ​សម្រាប់​ការ​ចុះឈ្មោះ​ដែល​មាន​មូលដ្ឋាន​លើ​ឯកសារ ($a) អាច​មិនត្រូវបាន​លុប​ដោយ​ដំណើរការ cron បាន​ទេ ។ វា​មានន័យថា​សិទ្ធិ​គឺ​​មិនត្រឹមត្រូវ​ចំពោះវា ។ សូម​កែសម្រួល​សិទ្ធិ ធ្វើ​ដូច្នេះ Moodle នឹង​អាច​លុប​ឯកសារ​បាន បើ​មិនដូច្នោះ​ទេ វា​នឹង​ត្រូវបាន​ដំណើរការ​ដដែលៗ ។';
$string['filelockedmailsubject'] = 'កំហុស​សំខាន់ ៖ ឯកសារ​ចុះឈ្មោះ';
$string['location'] = 'ទីតាំង​​ឯកសារ';
$string['mailadmin'] = 'ជូនដំណឹង​អ្នក​គ្រប់គ្រង​តាម​រយៈ​អ៊ីមែល';
$string['mailusers'] = 'ជូនដំណឹង​អ្នកប្រើ​តាមរយៈ​អ៊ីមែល';

?>