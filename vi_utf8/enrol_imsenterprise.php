<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.9.7 (Build: 20091126) (2007101570)
      // local modifications from http://localhost/moodle197


$string['aftersaving...'] = 'Một khi lưu thiết lập, có thể bạn sẽ muốn';
$string['allowunenrol'] = 'Cho phép dữ liệu IMS <strong>rút tên</strong>học viên/giáo viên';
$string['basicsettings'] = 'Thiết lập cơ bản';
$string['coursesettings'] = 'Tuỳ chọn dữ liệu khoá học';
$string['createnewcategories'] = 'Tạo chuyên mục khoá học (ẩn) mới nếu không tìm thấy trên Moodle';
$string['createnewcourses'] = 'Tạo khoá học (ẩn) mới nếu không tìm thấy trên Moodle';
$string['createnewusers'] = 'Tạo tài khoản cho thành viên thành viên chưa đăng kí trên hệ thống Moodle';
$string['cronfrequency'] = 'Tần suất xử lí';
$string['deleteusers'] = 'Xoá tài khoản thành viên khi xác định được trong dữ liệu IMS';
$string['description'] = 'Phương pháp này cho phép định kì kiểm tra xem có tồn tại một tập tin văn bản có định dạng đặc biệt tại một thư mục do bạn xác định hay không, và nếu có sẽ thực thi. Tập tin cần phải tuân thủ <a href=\'../help.php?module=enrol/imsenterprise&amp;file=formatoverview.html\'>tiêu chuẩn IMS Enterprise</a> và có chứa các thành phần XML của người, nhóm và tư cách thành viên.';
$string['doitnow'] = 'nhập tập tin IMS Enterprise ngay bây giờ';
$string['enrolname'] = 'Tập tin IMS Enterprise';
$string['filelockedmail'] = 'Cron không thể xoá tập tin văn bản mà bạn đang dùng để cho phép ghi danh từ tập tin IMS ($a). Đây thường là do phân quyền không chính xác. Xin vui lòng phân quyền lại để Moodle có thể xoá tập tin này, nếu không việc ghi danh sẽ có thể bị trùng lắp nhiều lần.';
$string['filelockedmailsubject'] = 'Lỗi quan trọng: tập tin ghi danh';
$string['fixcasepersonalnames'] = 'Đổi tên thành viên thành Chữ In Hoa';
$string['fixcaseusernames'] = 'Đổi tên thành viên thành chữ thường';
$string['imsrolesdescription'] = 'Tiêu chuẩn IMS Enterprise ban gồm 8 kiểu vai trò riêng biệt. Xin vui lòng chọn cách thức phân quyền cho họ trong Moodle, bao gồm cả việc chọn bỏ qua một nhóm nào đó.';
$string['location'] = 'Nơi lưu tập tin';
$string['logtolocation'] = 'Nơi lưu nhật chí nhập dữ liệu (để trống nếu không muốn ghi nhật chí)';
$string['mailadmins'] = 'Thông báo cho quản trị viên qua điện thư';
$string['mailusers'] = 'Thông báo cho thành viên qua điện thư';
$string['miscsettings'] = 'Nội dung khác';
$string['processphoto'] = 'Thêm dữ liệu hình ảnh vào hồ sơ thành viên';
$string['processphotowarning'] = 'Cảnh báo: xử lí hình ảnh có nguy cơ làm quá tải máy chủ. Khuyến cáo không bật chức năng này nếu như có số lượng lớn sinh viên cần phải xử lí.';
$string['restricttarget'] = 'Chỉ xử lí dữ liệu nếu có xác định đích sau đây';
$string['sourcedidfallback'] = 'Dùng &quot;sourcedid&quot; cho userid của một người nếu như không tìm thấy trường &quot;userid&quot;';
$string['truncatecoursecodes'] = 'Cắt ngắn mã khoá học đến độ dài này';
$string['usecapitafix'] = 'Đánh dấu chọn ô này nếu bạn sử dụng &quot;Capita&quot; (với định dạng XML có một số lỗi nhất định)';
$string['usersettings'] = 'Tuỳ chọn dữ liệu thành viên';
$string['zeroisnotruncation'] = '0 có nghĩa là không cắt ngắn';

?>
