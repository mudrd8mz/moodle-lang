<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.6 development (2005101200)


$string['description'] = 'この方法では、あなたが指定した場所に置いた特別にフォーマットされたテキストファイルを繰り返しチェックします。ファイルはカンマ区切りのファイルで、1行あたり4個または6個のフィールドを持ちます:
* 処理, 任務, IDナンバー ( ユーザ ), IDナンバー　(　コース ) [, 開始日時, 終了日時]
<pre>
詳細:
* 処理 = add | del
* 任務 = student | teacher | teacheredit
* IDナンバー ( ユーザ ) = user tableのidnumber ( idではなく ) 
* IDナンバー　(　コース ) = course tableのidnumber ( idではなく )
* 開始日時 = 開始日時 ( UNIXエポックからの秒数 ) - 任意
* 終了日時 = 終了日時 ( UNIXエポックからの秒数 ) - 任意
</pre>
ファイルのフォーマットは下記のようになります:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'フラットファイル';
$string['filelockedmail'] = 'ファイルベースのユーザ登録で使用しているファイル($a)はcronプロセスによる削除は行われません。通常、ファイルパーミッションの問題により削除されません。Moodleが削除できるようにファイルのパーミッションを変更してください。変更しない場合は、この処理が繰り返し行われます。';
$string['filelockedmailsubject'] = '重大なエラー:エンロールメントファイル';
$string['location'] = 'ファイルの場所';
$string['mailadmin'] = '管理者にメール通知';
$string['mailusers'] = 'ユーザにメール通知';

?>
