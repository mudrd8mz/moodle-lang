<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.5.2 (2005060220)


$string['description'] = '這個方法可重複檢查一個您所指定的特定格式文字檔,它看起來可能像這樣
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = '文字檔';
$string['filelockedmail'] = '您所使用註冊課程的文字檔($a) 無法被排程程序刪除,這通常是權限上的錯誤,請修正權限,讓moodle可以刪除這個檔案,否則它會被一直重複處理';
$string['filelockedmailsubject'] = '重大錯誤: 註冊檔';
$string['location'] = '檔案位置';
$string['mailadmin'] = '用電子郵件通知管理者';
$string['mailusers'] = '用電子郵件通知使用者';

?>
