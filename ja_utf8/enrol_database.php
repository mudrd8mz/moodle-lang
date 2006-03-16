<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 development (2006031400)


$string['autocreate'] = 'まだMoodleに作成されていないコースへの登録ユーザがある場合、コースを自動的に作成します。';
$string['autocreation_settings'] = '自動作成設定';
$string['category'] = '自動作成されるコースのためのカテゴリです。';
$string['course_fullname'] = 'コース名称が保存されるフィールド名です。';
$string['course_id'] = 'コードIDが保存されるフィールド名です。このフィールドの値は、Moodleコーステーブル内の「enrol_db_l_coursefield」とマッチングするために使用されます。';
$string['course_shortname'] = 'コース省略名が保存されるフィールド名です。';
$string['course_table'] = 'コース詳細 ( コース省略名、コース名等 ) を探すためのテーブル名です。';
$string['description'] = 'ユーザ登録に外部のデータベース ( ほとんどの種類 ) を使用することができます。外部データベースにはコースIDおよびユーザIDを含んでいる必要があります。これらはローカルなコーステーブルおよびユーザテーブルのフィールドと比較されます。';
$string['enrolname'] = '外部データベース';
$string['general_options'] = '一般オプション';
$string['host'] = 'データベースサーバホスト名です。';
$string['local_coursefield'] = 'リモートデータベースのエントリとマッチングさせるための、コーステーブルのフィールド名です ( 例 idnumber )。';
$string['local_fields_mapping'] = 'Moodle ( ローカル ) データベースフィールド';
$string['name'] = '使用するデータベースです。';
$string['pass'] = 'サーバにアクセスするためのパスワードです。';
$string['remote_fields_mapping'] = 'ユーザ登録データベースフィールドです。';
$string['server_settings'] = 'サーバ設定';
$string['student_coursefield'] = '学生登録テーブル内でコースIDが登録されるフィールド名です。';
$string['student_l_userfield'] = 'ユーザを学生のリモートレコードとマッチングさせるための、ローカルユーザテーブルのフィールド名です ( 例 idnumber )。';
$string['student_r_userfield'] = 'ユーザIDを探すためのリモート学生登録テーブル内のフィールド名です。';
$string['student_table'] = '学生の登録データが保存されるテーブル名です。';
$string['teacher_coursefield'] = '教師登録テーブル内でコースIDが登録されるフィールド名です。';
$string['teacher_l_userfield'] = 'ユーザを教師のリモートレコードとマッチングさせるための、ローカルユーザテーブルのフィールド名です ( 例 idnumber )。';
$string['teacher_r_userfield'] = 'ユーザIDを探すためのリモート教師登録テーブル内のフィールド名です。';
$string['teacher_table'] = '教師の登録データが保存されるテーブル名です。';
$string['template'] = '任意: テンプレートコースから自動作成コースの設定をコピーします。テンプレートコースの省略名を入力してください。';
$string['type'] = 'データベースサーバタイプです。';
$string['user'] = 'サーバにアクセスするためのユーザ名です。';

?>
