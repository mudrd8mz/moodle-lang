<?php // $Id$ 

$string['enrolname'] = 'File đơn giản';

$string['description'] = 'Phương pháp này cho phép định kì kiểm tra nội dung một tập tin văn bản có định dạng đặc biệt, đặt tại một thư mục do bạn xác định. Đây là một tập tin CSV (dấu phẩy ngăn cách) với 4 hoặc 6 trường thông tin trên mỗi dòng, bao gồm:
<pre>
* hành động, vai trò, số hiệu (thành viên), số hiệu (khoá học) [, ngày bắt đầu, ngày kết thúc]
trong đó:
* hành động = add | del
* vai trò = student | teacher | teacheredit
* số hiệu (thành viên) = trường idnumber trong bảng dữ liệu thành viên (KHÔNG phải trường id)
* số hiệu (khoá học) = trường idnumber trong bảng dữ liệu khoá học (KHÔNG phải trường id)
* ngày bắt đầu = thời điểm bắt đầu (tính bằng giây kể từ ngày 01/01/1970 lúc 0 h UTC) - tuỳ ý
* ngày kết thúc = thời điểm kết thúc (tính bằng giây kể từ ngày 01/01/1970 lúc 0 h UTC) - tuỳ ý
</pre>
Ví dụ có thể tương tự như sau:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Tập tin đơn giản';
$string['filelockedmail'] = 'Cron không thể xoá tập tin bạn đang dùng để cho phép ghi danh từ tập tin ($a). Đây thường là do lỗi phân quyền không chính xác. Xin vui lòng sửa lại phân quyền để Moodle có thể xoá tập tin này. Nếu không, việc ghi danh sẽ bị trùng lắp nhiều lần.';
$string['filelockedmailsubject'] = 'Lỗi quan trọng: tập tin ghi danh';
$string['location'] = 'Nơi lưu tập tin';
$string['mailadmin'] = 'Thông báo cho quản trị viên qua điện thư';
$string['mailusers'] = 'Thông báo cho thành viên qua điện thư';

?>
