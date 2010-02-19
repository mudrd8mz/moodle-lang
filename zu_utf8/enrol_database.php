<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9.4 (Build: 20090128) (2007101540)
      // local modifications from http://free.icyber.co.za


$string['autocreate'] = 'Izifundo zingazikhandekela zona uma kukhona ababhalisele isifundo esingakabi khona kuyi Moodle';
$string['autocreation_settings'] = 'Autocreation Settings';
$string['category'] = 'Umkhakha we auto-created courses.';
$string['course_fullname'] = 'Igama le field lapho isifundo ngokugcwele sifakwe khona';
$string['course_id'] = 'Igama le field lapho isifundo sigcinwe khona.The values of this field are used to match those in the \"enrol_db_l_coursefield\" field in Moodle\'s course table.
course_id';
$string['course_shortname'] = 'Igama lale field lapho igama elifushane lesifundo logcinwe khona';
$string['course_table'] = 'Then name of the table where we expect to find the course details in (short name, fullname, ID, etc.)';
$string['dbhost'] = 'Inamba noma igama le Server IP';
$string['dbname'] = 'Igama le database';
$string['dbpass'] = 'Server password';
$string['dbtable'] = 'Database table';
$string['dbtype'] = 'Uhlobo lwe Database';
$string['dbuser'] = 'Umsebenzisi we server';
$string['defaultcourseroleid'] = 'The role that will be assigned by default if no other role is specified.';
$string['description'] = 'Ungasebenzisa i external database(of nearly any kind)ukunakekela ukubhalisa.Kuyacatshangelwa ukuthi i external database ine field equkethe i ID yesifundo,Lokhu kuqhathaniswa  nama fields owakhethayo kuyi local course ne user tables.';
$string['disableunenrol'] = 'If set to yes users previously enrolled by the external database plugin will not be unenrolled by the same plugin regardless of the database contents.';
$string['enrol_database_autocreation_settings'] = 'Ukuzikhandekela kwezifundo';
$string['enrolname'] = 'I Database engaphandle';
$string['general_options'] = 'General Options';
$string['host'] = 'Database server hostname.';
$string['ignorehiddencourse'] = 'Uma kwenziwa kwaba u yebo abasebenzisa ngeke babhaliswe ezifundweni ezenziwe ukuthi zingatholakali kubafundi.';
$string['local_fields_mapping'] = 'Moodle (local) database fields';
$string['localcoursefield'] = 'Igama le field esifundweni esisisebenzisayo ukuze kuqhathaniswe ama entries kuyi remte database(eg idnumber).';
$string['localrolefield'] = 'Igama le field kuma table roles esilisebenzisayo ukuze siqhathanise ama entries kuyi remote database.';
$string['localuserfield'] = 'Igama le field kuyi table yosebenzisi esiliseenzisayo ukuqhathanisa ama entries kuyi remote database(eg idnumber).';
$string['name'] = 'I database okuyiyona yona ezosetshenziswa.';
$string['pass'] = 'Ukhiye wokungena kuyi server.';
$string['remote_fields_mapping'] = 'Enrolment (remote) database fields.';
$string['remotecoursefield'] = 'Igama le field kuyi remote table esilisebenzisayo ukuqhathanisa ama entries kuyi course table.';
$string['remoterolefield'] = 'Igama le field kuyi remote table esilisebenzisayo ukuqhathanisa ama entries kuma roles table.';
$string['remoteuserfield'] = 'Igama le field kuyi remote table esilisebenzisayo ukuqhathanisa ama entries.';
$string['server_settings'] = 'External Database Server Settings';
$string['student_coursefield'] = 'Igama le field kuyi table lokubhaliswa komfundi esidinga ukulithola kuyi ID yesifundo.';
$string['student_l_userfield'] = 'Igama le field kuyi local user table esilisebenzisayo ukuqhathanisa kuyi remote records omfundi(eg idnumber).';
$string['student_r_userfield'] = 'Igama le field kuyi remote student enrolment table esilindele ukulithola kuyi ID yomsebenzisi.';
$string['student_table'] = 'Igama le table lapho ukubhaliswa kwabafundi kugcinwe khona.';
$string['teacher_coursefield'] = 'Igama le field kuyi teacher enrolment table esilindele ukuthola kuyi ID yesifundo.';
$string['teacher_l_userfield'] = 'Igama le field kuyi local user table esilisebenzisayo ukuqhathanisa umsebenzisi kuyi remote record yabo thisha (eg idnumber).';
$string['teacher_r_userfield'] = 'Igama le field kuyi remote teacher enrolment table esilindele ukulithola kuyi ID yomsebenzisi.';
$string['teacher_table'] = 'Igama le table lapho ukubhalisa kukathisa kugcinwe khona';
$string['template'] = 'Optional: auto-created courses can copy their settings from a template course. Type here the shortname of the template course.';
$string['type'] = 'Uhlobo lwe Database';
$string['user'] = 'Igama lomsebenzisi ukuze usebenzise i server';

?>
