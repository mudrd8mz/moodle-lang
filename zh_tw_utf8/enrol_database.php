<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9 + (Build: 20080409) (2007101509)


$string['autocreate'] = '如果Moodle中某課程不存在，則當有人選修課程時系統會自動建立該課程。';
$string['autocreation_settings'] = '自動建立課程的設定';
$string['category'] = '自動建立課程的類別';
$string['course_fullname'] = '課程全名儲存的欄位名稱。';
$string['course_id'] = '課程編號儲存的欄位名稱。這個字段的值與那些在Moodle的課程表單裡的\"enrol_db_l_coursefield\"的字段相匹配';
$string['course_shortname'] = '課程簡稱儲存的欄位名稱。';
$string['course_table'] = '預期可以找到課程細節（簡稱、全名、編號等）的資料表名稱';
$string['dbhost'] = '資料庫主機';
$string['dbname'] = '資料庫名稱';
$string['dbpass'] = '資料庫密碼';
$string['dbtable'] = '資料表';
$string['dbtype'] = '資料庫型式';
$string['dbuser'] = '使用者';
$string['defaultcourseroleid'] = '如果沒有指定其他角色就會使用預設值';
$string['description'] = '您可以使用外部資料庫來控制您的選課, 假設您有一個名部資料庫包含 course ID,user ID. 它可以與本地的課程和使用者欄位對照';
$string['disableunenrol'] = '如果設定為是，無論資料庫內容為何，使用者先前經由外部資料庫的選課將不會被相同的外掛程式取消選課。';
$string['enrol_database_autocreation_settings'] = '自動建立新課程';
$string['enrolname'] = '外部資料庫';
$string['general_options'] = '一般選項';
$string['host'] = '資料庫主機名稱';
$string['ignorehiddencourse'] = '如果設為\"是\"，您的使用者將無法註冊被設定為學生不能使用的課程。';
$string['local_fields_mapping'] = 'Moodle（本地）資料庫欄位';
$string['localcoursefield'] = '我們用來對照遠端資料庫的課程資料表的欄位';
$string['localrolefield'] = '我們用來比對遠端資料庫資料的角色資料表的欄位名稱（例如：shortname）';
$string['localuserfield'] = '我們用來對照遠端資料庫的使用者資料表的欄位';
$string['name'] = '指定使用的資料庫';
$string['pass'] = '存取伺服器的密碼';
$string['remote_fields_mapping'] = '選課（遠端的）資料庫欄位';
$string['remotecoursefield'] = '我們用來比對課程資料表的遠端資料表名稱欄位';
$string['remoterolefield'] = '我們用來比對角色資料表的遠端資料表名稱欄位';
$string['remoteuserfield'] = '我們用來比對使用者資料表的遠端資料表名稱欄位';
$string['server_settings'] = '外部資料庫伺服器的設定';
$string['student_coursefield'] = '預期可以找到課程編號的學生選課資料表。';
$string['student_l_userfield'] = '用來比對遠端學生資料的本地端使用者資料表欄位名稱（例如編號）。';
$string['student_r_userfield'] = '預期可以找到使用者編號的學生選課資料表。';
$string['student_table'] = '儲存學生選課資料的資料表名稱。';
$string['teacher_coursefield'] = '預期可以找到課程編號的教師選課資料表。';
$string['teacher_l_userfield'] = '我們用來將用戶和遠程教師記錄相匹配的本地用戶資料表欄位名稱（例如編號）。';
$string['teacher_r_userfield'] = '預期可以找到使用者編號的遠端教師選課資料表。';
$string['teacher_table'] = '儲存教師選課資料的資料表名稱。';
$string['template'] = '選項：自動建立的課程可以從範本課程複製設定，在這裡輸入範本課程的簡稱。';
$string['type'] = '資料庫伺服器類型';
$string['user'] = '登入伺服器的帳號名稱';
$string['parentlanguage'] = '上層語系'; // ORPHANED
$string['thischarset'] = '預設語系編碼'; // ORPHANED
$string['thisdirection'] = '預設文字走向'; // ORPHANED
$string['thislanguage'] = '預設語系'; // ORPHANED

?>
