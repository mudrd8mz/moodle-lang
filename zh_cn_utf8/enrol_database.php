<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.7.1+ (2006101011)


$string['autocreate'] = '如果Moodle中某课程不存在，则当有人选修课程时系统会自动创建课程。';
$string['autocreation_settings'] = '有学生选不存在的课程时自动创建课程的设置';
$string['category'] = '自动创建的课程所属类别';
$string['course_fullname'] = '存储课程全名的字段的名称';
$string['course_id'] = '存储课程ID的字段的名称。这个字段的值与那些在Moodle的课程表单里的\"enrol_db_l_coursefield\"的字段相匹配';
$string['course_shortname'] = '课程的缩略名存储的字段';
$string['course_table'] = '我们希望课程的细节（缩略名，全名，ID等）的表单的名称';
$string['dbhost'] = '服务器域名或IP';
$string['dbname'] = '数据库名';
$string['dbpass'] = '服务器密码';
$string['dbtable'] = '数据库表名';
$string['dbtype'] = '数据库类型';
$string['dbuser'] = '服务器用户名';
$string['defaultcourseroleid'] = '如果未指定任何角色，那么用户的缺省角色';
$string['description'] = '您可以是用外部的数据库(任意类型)来控制选课信息。在这种情况下，通常假设您的外部数据库包含了一个字段对应着课程的ID和一个字段对应着用户的ID。它们将与您选择的本地课程和用户表中的字段相关联。';
$string['enrol_database_autocreation_settings'] = '自动建立新课程';
$string['enrolname'] = '外部数据库';
$string['general_options'] = '通用选项';
$string['host'] = '数据库服务的主机名';
$string['local_fields_mapping'] = 'Moodle（本地）数据库字段';
$string['localcoursefield'] = '我们用来和远程数据库条目匹配的课程表中的字段名（例如：idnumber）。';
$string['localrolefield'] = '我们用来和远程数据库条目匹配的角色表中的字段名（例如：shortname）。';
$string['localuserfield'] = '我们用来和远程数据库条目匹配的用户表中的字段名（例如：idnumber）。';
$string['name'] = '使用的特殊的数据库';
$string['pass'] = '进入服务器的口令';
$string['remote_fields_mapping'] = '登陆（远程）数据库';
$string['remotecoursefield'] = '我们用来和课程表中条目匹配的远程表的字段名。';
$string['remoterolefield'] = '我们用来和角色表中条目匹配的远程表的字段名。';
$string['remoteuserfield'] = '我们用来和用户表中条目匹配的远程表的字段名。';
$string['server_settings'] = '服务器设置';
$string['student_coursefield'] = '我们希望能在其中找到课程ID的学生登陆表单字段名称';
$string['student_l_userfield'] = '我们用来将用户与学生远程记录匹配的本地用户表单的字段名称';
$string['student_r_userfield'] = '我们希望在其中找到用户ID的远程学生登陆表单的字段名称';
$string['student_table'] = '存储学生登陆的表单的名称';
$string['teacher_coursefield'] = '我们希望在其中找到课程ID的教师登陆表单字段名称';
$string['teacher_l_userfield'] = '我们用来将用户和远程教师记录相匹配的本地用户表单的字段名称';
$string['teacher_r_userfield'] = '我们希望能在其中找到教师ID的教师远程登陆表单的字段名称';
$string['teacher_table'] = '存储教师登陆的表单的名称';
$string['template'] = '选项：自动创建的课程可以从模板课程中拷贝设置。';
$string['type'] = '数据库服务的类型';
$string['user'] = '登陆服务器的用户名';

?>
