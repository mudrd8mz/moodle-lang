<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Nếu bạn muốn sử dụng ràng buộc người dùng để tìm kiếm các người dùng, chỉ ra nó ở đây. Đôi khi nó giống như \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Mật khẩu đối với ràng buộc người dùng .';
$string['auth_ldap_bind_settings'] = 'Các thiết lập ràng buộc';
$string['auth_ldap_contexts'] = 'Danh sách các ngữ cảnh mà ở đó những người sử dụng được xác định. Ngăn cách các ngữ cảnh khác nhau bởi dấu \';\'. Ví dụ : \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Nếu bạn có khả năng tạo người dùng bằng sự chứng thực qua Email, chỉ ra ngữ cảnh mà ở đó những người dùng được tạo. Ngữ cảnh này nên khác nhau đối với những người dùng khác nhau để ngăn chặn các vấn đề bảo mật. Bạn không cần thêm ngữ cảnh này tới  ldap_context-variable, Moodle sẽ tìm kiếm người dùng từ ngữ cảnh này một cách tự động .<br/><b>Chú ý!</b> Bạn phải thay đổi hàm auth_user_create() trong file auth/ldap/lib.php để yêu cầu người dùng sáng tạo ra công việc';
$string['auth_ldap_creators'] = 'Danh sách các nhóm mà các thành viên của chúng được cho phép để tạo các cua học mới. Ngăn cách các nhóm bởi \';\'. Theo cách thông thường thì điều đó giống như \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Chọn  Không để vô hiệu hoá kiểm tra mật khẩu hoặc LDAP để biết được thời gian vô hiệu hoá mật khẩu ngay tức khắc từ LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Số ngày trước khi cảnh báo vô hiệu hoá mật khẩu được đưa ra.';
$string['auth_ldap_expireattr_desc'] = 'Tuỳ chọn: Ghi đè ldap-attribute what stores password expiration time asswordAxpirationTime';
$string['auth_ldap_graceattr_desc'] = 'Tuỳ chọn: Ghi đè thuộc tính  gracelogin';
$string['auth_ldap_gracelogins_desc'] = 'Enable LDAP gracelogin support. After password has expired user can login until gracelogin count is 0. Enabling this setting displays grace login message if password is exprired.';
$string['auth_ldap_host_url'] = 'Chỉ ra máy chủ LDAP trong biểu mẫu URL giống như \'ldap://ldap.myorg.com/\' hoặc \'ldaps://ldap.myorg.com/\' Ngăn cách các máy chủ bởi dấu \';\' để nhận được các trợ giúp khi bị thất bại.';
$string['auth_ldap_login_settings'] = 'Các thiết lập đăng nhập.';
$string['auth_ldap_memberattribute'] = 'Tuỳ chọn: Ghi đè thuộc tính về người dùng, khi những người dùng có liên quan tới một nhóm. Thông thường là \'thành viên\'';
$string['auth_ldap_objectclass'] = 'Tuỳ chọn: Ghi đè lớp đối tượng sử dụng để chỉ định/tìm kiếm người dùng trên kiểu người dùng ldap_user_type. Thông thường bạn không cần thay đổi điều này.';
$string['auth_ldap_opt_deref'] = 'Quyết định bao nhiêu bí danh được sử dụng trong quá trình tìm kiếm. Chọn một cái trong số các giá trị sau: \"Không\" (LDAP_DEREF_NEVER) hoặc \"Có\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'Các thiết lập vô hiệu hoá mật khẩu LDAP.';
$string['auth_ldap_search_sub'] = 'Đặt giá trị khác 0. Nếu bạn muốn tìm kiếm người dùng từ ngữ cảnh phụ.';
$string['auth_ldap_server_settings'] = 'Các thiết lập máy chủ LDAP';
$string['auth_ldap_update_userinfo'] = 'Cập nhật thông tin người dùng (Tên, Họ, Địa chỉ..)từ LDAP tới Moodle. Chỉ ra các thiết lập \" Bản đồ dữ liệu \" khi bạn cần.';
$string['auth_ldap_user_attribute'] = 'Các tuỳ chọn: Ghi đè thuộc tính sử dụng để chỉ ra/tìm kiếm người dùng. Thông thường \'cn\'.';
$string['auth_ldap_user_settings'] = 'Các thiết lập tra cứu người dùng';
$string['auth_ldap_user_type'] = 'Chọn những người dùng thế nào được lưu trữ trong LDAP. Các thiết lập này cũng chỉ ra sự vô hiệu hoá đăng nhập như thế nào, tạo người dùng và các cuộc đăng nhập sẽ hoạt động như thế nào.';
$string['auth_ldap_version'] = 'Phiên bản của LDAP giao thức máy chủ của bạn đang được sử dụng.';
$string['auth_ldapdescription'] = 'Phương pháp này đưa ra sự chứng thực lại một máy chủ LDAP bên ngoài.

                                  Nếu tên đăng nhập và mật khẩu đưa ra hợp lệ, Moodle tạo một người dùng mới 
                                  nhập vào trong cơ sở dữ liệu của nó. Môđun này có thể đọc thuộc tính người dùng từ LDAP 
                                  và  các trường được yêu cầu điền trước trong Moodle.
                                  Các đăng nhập sau chỉ sử dụng tên đăng nhập và mật khẩu được kiểm tra.';
$string['auth_ldapextrafields'] = 'Những trường này là tuỳ chọn. Bạn có thể chọn điền trước một số thông tin người dùng Moodle với thông tin từ <b> các trường LDAP</b> được chỉ ra ở đây. <p> Nếu bạn để các trường này trống, thì không có cái gì được chuyển đổi từ LDAP và các giá trị mặc định của Moodle sẽ được sử dụng để thay thế</p> <p> Trong trường hợp khác, người dùng sẽ có khả năng soạn thảo tất cả các trường này sau khi chúng bắt dầu.</p>';
$string['auth_ldaptitle'] = 'Sử dụng một máy chủ LDAP';