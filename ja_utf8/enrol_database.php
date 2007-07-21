<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.9 dev (2007072100)


$string['autocreate'] = 'まだMoodleに作成されていないコースへの登録ユーザがある場合、コースを自動的に作成します。';
$string['autocreation_settings'] = '自動作成設定';
$string['category'] = '自動作成されるコースのためのカテゴリです。';
$string['course_fullname'] = 'コース名称が保存されるフィールド名です。';
$string['course_id'] = 'コードIDが保存されるフィールド名です。このフィールドの値は、Moodleコーステーブル内の「enrol_db_l_coursefield」とマッチングするために使用されます。';
$string['course_shortname'] = 'コース省略名が保存されるフィールド名です。';
$string['course_table'] = 'コース詳細 (コース省略名、コース名等) を探すためのテーブル名です。';
$string['dbhost'] = 'サーバ名またはIPアドレス';
$string['dbname'] = 'データベース名';
$string['dbpass'] = 'サーバパスワード';
$string['dbtable'] = 'データベーステーブル';
$string['dbtype'] = 'データベースタイプ';
$string['dbuser'] = 'サーバユーザ';
$string['defaultcourseroleid'] = '他のロールが指定されない場合、デフォルト割り当てられるロールです。';
$string['description'] = 'ユーザ登録に外部のデータベース (ほとんどの種類) を使用することができます。外部データベースにはコースIDおよびユーザIDを含んでいる必要があります。これらはローカルなコーステーブルおよびユーザテーブルのフィールドと比較されます。';
$string['enrol_database_autocreation_settings'] = '新しいコースの自動作成';
$string['enrolname'] = '外部データベース';
$string['general_options'] = '一般オプション';
$string['host'] = 'データベースサーバホスト名です。';
$string['ignorehiddencourse'] = 'この設定を「Yes」にした場合、コース登録無効にされているコースにユーザは受講登録されません。';
$string['local_fields_mapping'] = 'Moodle (ローカル) データベースフィールド';
$string['localcoursefield'] = 'リモートデータベースのエントリ (例 idnumber) と合致させるために使用するコーステーブルのフィールド名です。';
$string['localrolefield'] = 'リモートデータベースのエントリ (例 shortname) と合致させるために使用するロールテーブルのフィールド名です。';
$string['localuserfield'] = 'リモートデータベースのエントリ (例 idnumber) と合致させるために使用するユーザテーブルのフィールド名です。';
$string['name'] = '使用するデータベースです。';
$string['pass'] = 'サーバにアクセスするためのパスワードです。';
$string['remote_fields_mapping'] = 'ユーザ登録データベースフィールドです。';
$string['remotecoursefield'] = 'コーステーブルのエントリに合致させるリモートテーブルのフィールド名です。';
$string['remoterolefield'] = 'ロールテーブルのエントリに合致させるリモートテーブルのフィールド名です。';
$string['remoteuserfield'] = 'ユーザテーブルのエントリに合致させるリモートテーブルのフィールド名です。';
$string['server_settings'] = 'サーバ設定';
$string['student_coursefield'] = '学生登録テーブル内でコースIDが登録されるフィールド名です。';
$string['student_l_userfield'] = 'ユーザを学生のリモートレコードとマッチングさせるための、ローカルユーザテーブルのフィールド名です (例 idnumber)。';
$string['student_r_userfield'] = 'ユーザIDを探すためのリモート学生登録テーブル内のフィールド名です。';
$string['student_table'] = '学生の登録データが保存されるテーブル名です。';
$string['teacher_coursefield'] = '教師登録テーブル内でコースIDが登録されるフィールド名です。';
$string['teacher_l_userfield'] = 'ユーザを教師のリモートレコードとマッチングさせるための、ローカルユーザテーブルのフィールド名です (例 idnumber)。';
$string['teacher_r_userfield'] = 'ユーザIDを探すためのリモート教師登録テーブル内のフィールド名です。';
$string['teacher_table'] = '教師の登録データが保存されるテーブル名です。';
$string['template'] = '任意: テンプレートコースから自動作成コースの設定をコピーします。テンプレートコースの省略名を入力してください。';
$string['type'] = 'データベースサーバタイプです。';
$string['user'] = 'サーバにアクセスするためのユーザ名です。';
$string['local_coursefield'] = 'リモートデータベースのエントリとマッチングさせるための、コーステーブルのフィールド名です (例 idnumber)。'; // ORPHANED

?>
