<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.8.2+ (2007021520)


$string['autocreate'] = '如果有選課方式指定給一個不存在的課程，系統會自動建立。';
$string['autocreation_settings'] = '自動建立設定';
$string['category'] = '自動建立課程的類別';
$string['course_fullname'] = '課程全名儲存的欄位名稱。';
$string['course_id'] = '課程編號儲存的欄位名稱。這個數值會在 Moodle 的課程資料表比對 \"enrol_db_l_coursefield\" 欄位中的資料。';
$string['course_shortname'] = '課程簡稱儲存的欄位名稱。';
$string['course_table'] = '預期可以找到課程細節的資料表名稱（簡稱、全名、編號等）';
$string['dbhost'] = '伺服器IP名稱或數字';
$string['dbname'] = '資料庫名稱';
$string['dbpass'] = '伺服器密碼';
$string['dbtable'] = '資料表';
$string['dbtype'] = '資料類型';
$string['dbuser'] = '伺服器使用者';
$string['defaultcourseroleid'] = '如果沒有指定其他角色就會使用預設值';
$string['description'] = '您可以使用外部資料庫來控制您的選課， 假設您有一個名部資料庫包含 course ID，user ID。 它可以與本地的課程和使用者欄位對照';
$string['enrol_database_autocreation_settings'] = '自動建立新課程';
$string['enrolname'] = '外部資料庫';
$string['general_options'] = '一般選項';
$string['host'] = '資料庫伺服器主機名稱';
$string['local_fields_mapping'] = 'Moodle（本地）資料庫欄位';
$string['localcoursefield'] = '我們用來比對遠端資料庫資料的課程資料表名稱欄位（例如流水號）';
$string['localrolefield'] = '我們用來比對遠端資料庫資料的角色資料表名稱欄位（例如簡稱）';
$string['localuserfield'] = '我們用來比對遠端資料庫資料的使用者資料表名稱欄位（例如流水號）';
$string['name'] = '指定使用的資料庫';
$string['pass'] = '存取伺服器的密碼';
$string['remote_fields_mapping'] = '選課（遠端）資料庫欄位';
$string['remotecoursefield'] = '我們用來比對課程資料表的遠端資料表名稱欄位';
$string['remoterolefield'] = '我們用來比對角色資料表的遠端資料表名稱欄位';
$string['remoteuserfield'] = '我們用來比對使用者資料表的遠端資料表名稱欄位';
$string['server_settings'] = '外部資料庫伺服器設定';
$string['student_coursefield'] = '我們預期可以找到課程編號的學生選課資料表。';
$string['student_l_userfield'] = '用來比對遠端學生資料的本地端使用者資料表欄位名稱（例如編號）。';
$string['student_r_userfield'] = '我們預期可以找到使用者編號的學生選課資料表。';
$string['student_table'] = '儲存學生選課資料的資料表名稱';
$string['teacher_coursefield'] = '我們預期可以找到課程編號的教師選課資料表。';
$string['teacher_l_userfield'] = '用來比對遠端教師資料的本地端使用者資料表欄位名稱（例如編號）。';
$string['teacher_r_userfield'] = '我們預期可以找到使用者編號的遠端教師選課資料表。';
$string['teacher_table'] = '儲存教師選課資料的資料表名稱';
$string['template'] = '選擇性的： 自動建立的課程可以從樣板課程複製設定，在這裡輸入樣板課程的簡稱。';
$string['type'] = '資料庫伺服器類型';
$string['user'] = '伺服器存取帳號';
$string['local_coursefield'] = '用來比對遠端資料庫的課程資料表欄位名稱（例如編號）。'; // ORPHANED

?>
