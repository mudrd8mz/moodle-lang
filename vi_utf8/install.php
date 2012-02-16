<?PHP // $Id$ 
      // install.php - created with Moodle 1.9.7 (Build: 20091126) (2007101570)
      // local modifications from http://localhost/moodle197


$string['admindirerror'] = 'Thư mục quản trị chưa đúng';
$string['admindirsetting'] = 'Một số rất ít các nhà cung cấp dịch vụ kí gửi website sử dụng thư mục /admin trong địa chỉ mạng (URL) cho phép bạn truy cập vào bảng điều khiển (CP) hay những vị trí khác. Tuy nhiên, địa chỉ đó trùng với vị trí thư mục mặc định của trang quản trị Moodle. Bạn có thể khắc phục bằng cách đổi tên thư mục quản trị trong quá trình cài đặt, và nhập tên đó vào đây. Ví dụ: <br /> <br /><b>moodleadmin</b><br /> <br />
Đường liên kết quản trị Moodle sẽ được sửa dổi theo.';
$string['admindirsettinghead'] = 'Thiết lập thư mục quản trị...';
$string['admindirsettingsub'] = 'Một số rất ít các nhà cung cấp dịch vụ kí gửi website sử dụng thư mục /admin trong địa chỉ mạng (URL) cho phép bạn truy cập vào bảng điều khiển (CP) hay những vị trí khác. Tuy nhiên, địa chỉ đó trùng với vị trí thư mục mặc định của trang quản trị Moodle. Bạn có thể khắc phục bằng cách đổi tên thư mục quản trị trong quá trình cài đặt, và nhập tên đó vào đây. Ví dụ: <br /> <br /><b>moodleadmin</b><br /> <br />
Đường liên kết quản trị Moodle sẽ được sửa dổi theo.';
$string['chooselanguage'] = 'Chọn ngôn ngữ';
$string['chooselanguagehead'] = 'Chọn ngôn ngữ';
$string['chooselanguagesub'] = 'Vui lòng chọn CHỈ MỘT ngôn ngữ trong quá trình cài đặt. Bạn sẽ có thể chọn lại ngôn ngữ cho toàn hệ thống và cho thành viên ở các bước tiếp theo.';
$string['compatibilitysettings'] = 'Kiểm tra thiết lập PHP...';
$string['compatibilitysettingshead'] = 'Kiểm tra thiết lập PHP...';
$string['compatibilitysettingssub'] = 'Máy chủ của bạn cần phải đáp ứng tất cả các yêu cầu này thì Moodle mới hoạt động tốt';
$string['configfilenotwritten'] = 'Script cài đặt không thể tự động tạo ra tập tin config.php chứa các thông số thiết lập mà bạn đã chọn, có lẽ là vì thư mục Moodle không được cấp quyền ghi. Bạn có thể sao chép đoạn mã sau vào trong một tập tin văn bản và đặt tên là config.php, sau đó đặt trong thư mục gốc của Moodle.';
$string['configfilewritten'] = 'Đã tạo tập tin config.php';
$string['configurationcomplete'] = 'Hoàn tất thiết lập cấu hình';
$string['configurationcompletehead'] = 'Hoàn tất thiết lập cấu hình';
$string['configurationcompletesub'] = 'Moodle đã thử lưu cấu hình của bạn vào một tập tin trong thư mục gốc của hệ thống Moodle bạn cài đặt.';
$string['databasecreationsettings'] = 'Bây giờ bạn cần phải thiết lập cấu hình cơ sở dữ liệu, nơi lưu trữ hầu hết mọi dữ liệu của Moodle. Cơ sở dữ liệu này sẽ được trình cài đặt tự động tạo ra với các thông số bên dưới.<br />
<br /> <br />
<b>Kiểu:</b> trình cài đặt xác định theo \"mysql\"<br />
<b>Máy chủ:</b> trình cài đặt xác định theo \"localhost\"<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> trình cài đặt xác định theo \"root\"<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu (tuỳ ý) dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu';
$string['databasecreationsettingshead'] = 'Bây giờ bạn cần phải thiết lập cấu hình cơ sở dữ liệu, nơi lưu hầu hết mọi dữ liệu của Moodle. Cơ sở dữ liệu này sẽ được trình cài đặt tự động tạo ra với các thông số bên dưới.';
$string['databasecreationsettingssub'] = '<b>Kiểu:</b> trình cài đặt xác định theo \"mysql\"<br />
<b>Máy chủ:</b> trình cài đặt xác định theo \"localhost\"<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> trình cài đặt xác định theo \"root\"<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu (tuỳ ý) dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu';
$string['databasesettings'] = 'Bây giờ bạn cần phải thiết lập cấu hình cơ sở dữ liệu, nơi lưu hầu hết mọi dữ liệu của Moodle. Cơ sở dữ liệu này phải được tạo ra trước cùng với một tên người dùng và mật khẩu để truy cập.<br />
<br /> <br />
<b>Kiểu:</b> \'mysql\' hay \'postgres7\'<br />
<b>Máy chủ:</b> ví dụ \'localhost\' hay \'db.isp.com\'<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu (tuỳ ý) dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu';
$string['databasesettingshead'] = 'Bây giờ bạn cần phải thiết lập cấu hình cơ sở dữ liệu, nơi lưu hầu hết mọi dữ liệu của Moodle. Cơ sở dữ liệu này phải được tạo ra trước cùng với một tên người dùng và mật khẩu để truy cập.';
$string['databasesettingssub'] = '<b>Kiểu:</b> \'mysql\' hay \'postgres7\'<br />
<b>Máy chủ:</b> ví dụ \'localhost\' hay \'db.isp.com\'<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu (tuỳ ý) dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu';
$string['databasesettingssub_mssql'] = '<b>Kiểu:</b> SQL*Server (không UTF-8) <b><strong class=\"errormsg\">Thử nghiệm! (không dùng trong các hệ thống vận hành chính thức)</strong></b><br />
<b>Máy chủ:</b> ví dụ \'localhost\' hay \'db.isp.com\'<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu (bắt buộc)';
$string['databasesettingssub_mssql_n'] = '<b>Kiểu:</b> SQL*Server (có UTF-8)<br />
<b>Máy chủ:</b> ví dụ \'localhost\' hay \'db.isp.com\'<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu (bắt buộc)';
$string['databasesettingssub_mysql'] = '<b>Kiểu:</b> MySQL<br />
<b>Máy chủ:</b> ví dụ \'localhost\' hay \'db.isp.com\'<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu (tuỳ ý)';
$string['databasesettingssub_mysqli'] = '<b>Kiểu:</b> MySQL cải tiến<br />
<b>Máy chủ:</b> ví dụ \'localhost\' hay \'db.isp.com\'<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu (tuỳ ý)';
$string['databasesettingssub_oci8po'] = '<b>Kiểu:</b> Oracle<br />
<b>Máy chủ:</b> không dùng, bắt buộc để trống<br />
<b>Tên:</b> tên kết nối tnsnames.ora<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu (bắt buộc, tối đa 2 cc.)';
$string['databasesettingssub_odbc_mssql'] = '<b>Kiểu:</b> SQL*Server (theo ODBC)<b><strong class=\"errormsg\">Thử nghiệm! (không dùng trong các hệ thống vận hành chính thức)</strong></b><br />
<b>Máy chủ:</b> tên DSN trong bảng điều khiển ODBC<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu (bắt buộc)';
$string['databasesettingssub_postgres7'] = '<b>Kiểu:</b> PostgreSQL<br />
<b>Máy chủ:</b> ví dụ \'localhost\' hay \'db.isp.com\'<br />
<b>Tên:</b> tên cơ sở dữ liệu, ví dụ \'moodle\'<br />
<b>Người dùng:</b> tên truy cập vào cơ sở dữ liệu<br />
<b>Mật khẩu:</b> mật khẩu truy cập cơ sở dữ liệu<br />
<b>Phần đầu tên bảng:</b> kí hiệu đầu dùng để đặt tên tất cả các bảng trong cơ sở dữ liệu (bắt buộc)';
$string['databasesettingswillbecreated'] = '<b>Ghi chú:</b> Trình cài đặt sẽ cố tự động tạo ra cơ sở dữ liệu nếu chưa có sẵn.';
$string['datarooterror'] = 'Không thể tìm thấy hay tạo ra \'Thư mục dữ liệu\' mà bạn chọn. Xin vui lòng sửa lại đường dẫn hoặc tạo thư mục theo cách thủ công.';
$string['datarootpublicerror'] = '\'Thư mục dữ liệu\' mà bạn chọn có thể truy cập trực tiếp qua mạng. Bạn cần phải sử dụng một thư mục khác.';
$string['dbconnectionerror'] = 'Không thể kết nối vào cơ sở dữ liệu mà bạn đã chọn. Xin vui lòng kiểm tra lại các thiết lập cơ sở dữ liệu.';
$string['dbcreationerror'] = 'Lỗi tạo cơ sở dữ liệu. Không thể tạo ra cơ sở dữ liệu với các thiết lập đã chọn';
$string['dbhost'] = 'Máy chủ kí gửi';
$string['dbprefix'] = 'Phần đầu tên bảng';
$string['dbtype'] = 'Kiểu';
$string['dbwrongencoding'] = 'Cơ sở dữ liệu mà bạn chọn đang sử dụng một bảng mã không được khuyến khích ($a), mà nên được thay thế bằng một cơ sở dữ liệu sử dụng bảng mã Unicode (UTF-8). Dù vậy, bạn vẫn có thể bỏ qua phần kiểm tra này bằng cách chọn \"Bỏ qua phần kiểm tra bảng mã cơ sở dữ liệu\" ở bên dưới, nhưng trong tương lai có thể gặp nhiều lỗi về vấn đề này.';
$string['dbwronghostserver'] = 'Bạn phải tuân theo các quy định về \"Kí gửi website\" được viết chi tiết ở trên.';
$string['dbwrongnlslang'] = 'Biến môi trường NLS_LANG trong trình duyệt mạng của bạn phải sử dụng bảng mã AL32UTF8. Xem tài liệu hướng dẫn PHP về cách thức cấu hình chính xác OCI8.';
$string['dbwrongprefix'] = 'Bạn phải tuân theo các quy định về \"Phần đầu tên bảng\" được viết chi tiết ở trên.';
$string['directorysettings'] = '<p>Xin vui lòng xác nhận địa chỉ cài đặt hệ thống Moodle này.</p>

<p><b>Địa chỉ Mạng:</b>
Cho biết địa chỉ mạng đầy đủ để truy cập vào hệ thống Moodle. Nếu hệ thống có nhiều địa chỉ mạng (URL), hãy chọn địa chỉ nào mà học viên thường sử dụng nhất. Không sử dụng dấu gạch chéo ở cuối dòng địa chỉ.</p>

<p><b>Thư mục Moodle:</b>
Cho biết đường dẫn đầy đủ đến thư mục cài đặt hệ thống Moodle. Lưu ý dùng đúng chữ in hoa và chữ thường.</p>

<p><b>Thư mục dữ liệu:</b>
Bạn cần có một nơi để Moodle lưu các tập tin tải lên. Máy chủ mạng (thường được đặt tên \'www\', \'nobody\' hay \'apache\') cần phải có quyền đọc VÀ GHI vào thư mục này. Tuy nhiên, thư mục này cần phải ở chế độ không truy cập trực tiếp được từ Mạng. Trình cài đặt sẽ cố tạo ra thư mục này nếu chưa có sẵn.</p>';
$string['directorysettingshead'] = 'Xin vui lòng xác nhận địa chỉ cài đặt Moodle';
$string['directorysettingssub'] = '<b>Địa chỉ Mạng:</b>
Cho biết địa chỉ mạng đầy đủ để truy cập vào hệ thống Moodle. Nếu hệ thống có nhiều địa chỉ mạng (URL), hãy chọn địa chỉ nào mà học viên thường sử dụng nhất. Không sử dụng dấu gạch chéo ở cuối dòng địa chỉ.
<br />
<br />
<b>Thư mục Moodle:</b>
Cho biết đường dẫn đầy đủ đến thư mục cài đặt hệ thống Moodle. Lưu ý dùng đúng chữ in hoa và chữ thường.
<br />
<br />
<b>Thư mục dữ liệu:</b>
Bạn cần có một nơi để Moodle lưu các tập tin tải lên. Máy chủ mạng (thường được đặt tên \'www\', \'nobody\' hay \'apache\') cần phải có quyền đọc VÀ GHI vào thư mục này. Tuy nhiên, thư mục này cần phải ở chế độ không truy cập trực tiếp được từ Mạng. Trình cài đặt sẽ cố tạo ra thư mục này nếu chưa có sẵn.';
$string['dirrooterror'] = 'Có lẽ thiết lập \'Thư mục Moodle\' không chính xác: không tìm thấy bản cài đặt Moodle nào trong thư mục này. Giá trị bên dưới đã được sửa lại.';
$string['downloadlanguagebutton'] = 'Tải gói ngôn ngữ &quot;$a&quot;';
$string['downloadlanguagehead'] = 'Tải gói ngôn ngữ';
$string['downloadlanguagenotneeded'] = 'Bạn cần phải tiếp tục tiến trình cài đặt với gói ngôn ngữ mặc định, \"$a\".';
$string['downloadlanguagesub'] = 'Bây giờ bạn có thể tải gói ngôn ngữ theo ý muốn và tiếp tục tiến trình cài đặt theo ngôn ngữ này.<br /><br />
Nếu không thể tải gói ngôn ngữ xuống, tiến trình cài đặt sẽ tiếp tục bằng tiếng Anh. (Sau khi cài đặt xong, bạn vẫn có quyền tải và cài đặt bổ sung các gói ngôn ngữ khác).';
$string['environmenthead'] = 'Kiểm tra môi trường cài đặt...';
$string['environmentsub'] = 'Đang kiểm tra các thành phần trên hệ thống xem có đáp ứng đủ các điều kiện cài đặt Moodle hay không.';
$string['fileuploads'] = 'Tải tập tin lên hệ thống';
$string['fileuploadserror'] = 'Chức năng tải tập tin lên hệ thống cần phải được kích hoạt';
$string['fileuploadshelp'] = '<p>Có lẽ chức năng tải tập tin lên hệ thống đã bị tắt.</p>

<p>Moodle vẫn có thể được cài đặt, nhưng không có chức năng này thì bạn sẽ không thể tải các tập tin vào trong khoá học hoặc thay đổi hình ảnh hồ sơ thành viên.</p>

<p>Để kích hoạt chức năng tải tập tin lên hệ thống, bạn (hoặc quản trị viên của hệ thống) cần phải sửa tập tin php.ini của hệ thống, đổi thông số
<b>file_uploads</b> thành \'1\'.</p>';
$string['gdversionerror'] = 'Cần phải có thư viện GD để xử lí và tạo hình ảnh';
$string['gdversionhelp'] = '<p>Máy chủ của bạn có lẽ không cài GD.</p>

<p>GD là một thư viện bắt buộc có đối với PHP nhằm cho phép Moodle xử lí hình ảnh (như biểu tượng hồ sơ thành viên) và tạo ra hình ảnh mới (như biểu đồ nhật chí). Moodle vẫn sẽ hoạt động không cần GD - chỉ là những chức năng kể trên sẽ không hoạt động.</p>

<p>Để cài đặt GD cho PHP dưới Unix, bạn có thể đóng gói PHP với thông số --with-gd.</p>

<p>Dưới Windows, bạn thường có thể sửa tập tin php.ini và gỡ bỏ kí hiệu chú giải ở dòng php_gd2.dll.</p>';
$string['globalsquotes'] = 'Xử lí không an toàn đối với các biến toàn cục';
$string['globalsquoteserror'] = 'Xin vui lòng sửa thiết lập PHP của bạn: tắt thông số \'register_globals\' và hoặc mở thông số \'magic_quotes_gpc\'';
$string['globalsquoteshelp'] = '<p>Không nên tắt chức năng Magic Quotes GPC đồng thời với bật chức năng Register Globals.</p>

<p>Thiết lập được khuyến cáo là <b>magic_quotes_gpc = On</b> và <b>register_globals = Off</b> trong tập tin php.ini</p>

<p>Nếu không sửa được tập tin php.ini, bạn cần phải có quyền chèn dòng mã sau đây vào tập tin .htaccess trong thư mục Moodle:</p>
<blockquote><div>php_value magic_quotes_gpc On</div></blockquote>
<blockquote><div>php_value register_globals Off</div></blockquote>';
$string['langdownloaderror'] = 'Rất tiếc là không cài đặt được gói ngôn ngữ \"$a\". Tiến trình cài đặt sẽ tiếp tục bằng tiếng Anh.';
$string['langdownloadok'] = 'Đã cài đặt thành công gói ngôn ngữ \"$a\". Tiến trình cài đặt sẽ diễn ra với ngôn ngữ này.';
$string['magicquotesruntimeerror'] = 'Thiết lập này cần phải được tắt đi';
$string['magicquotesruntimehelp'] = '<p>Cần phải tắt Magic quotes runtime để Moodle hoạt động tốt.</p>

<p>Chức năng này thường được tắt theo mặc định... Xem thiết lập <b>magic_quotes_runtime</b> trong tập tin php.ini.</p>

<p>Nếu không sửa được tập tin php.ini, bạn cần phải có quyền chèn dòng mã sau đây vào tập tin .htaccess trong thư mục Moodle:</p>
<blockquote><div>php_value magic_quotes_runtime Off</div></blockquote>';
$string['memorylimiterror'] = 'Giới hạn bộ nhớ PHP quá thấp. Sẽ có nguy cơ gặp nhiều lỗi về sau.';
$string['memorylimithelp'] = '<p>Giới hạn bộ nhớ PHP trên máy chủ hiện giờ là $a.</p>

<p>Giá trị này có nguy cơ gây ra lỗi bộ nhớ của Moodle về sau, đặc biệt là khi bạn bật nhiều module chức năng và có nhiều thành viên.</p>

<p>Tốt nhất là nên thiết lập PHP với giới hạn bộ nhớ cao hơn, ví dụ 40 MB. Có nhiều cách để thực hiện điều đó:</p>
<ol>
<li>Nếu có quyền, hãy đóng gói lại PHP với thông số <i>--enable-memory-limit</i>.
Điều đó sẽ cho phép Moodle tự xác lập bộ nhớ cho mình.</li>
<li>Nếu có quyền sửa tập tin php.ini, có thể sửa thông số <b>memory_limit</b>
thành một giá trị cao hơn, ví dụ 40M. Nếu không có quyền, hãy yêu cầu quản trị viên làm thay cho việc đó.</li>
<li>Trên một số máy chủ PHP, bạn có thể tạo tập tin .htaccess trong thư mục Moodle với dòng mã sau đây:
<blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Tuy nhiên, trong một số trường hợp, thiết lập này làm <b>tất cả</b> các trang PHP hoạt động không tốt
(xuất hiện thông báo lỗi khi mở trang tương ứng), bắt buộc bạn phải xoá tập tin .htaccess đi.</p></li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server có hỗ trợ UTF-8 (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'Thiết lập mở rộng MSSQL cho PHP không được chính xác nên không kết nối được với SQL*Server. Xin vui lòng kiểm tra lại tập tin php.ini hoặc đóng gói lại PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'Thiết lập mở rộng MySQL cho PHP không được chính xác nên không kết nối được với MySQL. Xin vui lòng kiểm tra lại tập tin php.ini hoặc đóng gói lại PHP.';
$string['mysqli'] = 'MySQL cải tiến (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'Thiết lập mở rộng MySQLi cho PHP không được chính xác nên không kết nối được với MySQL. Xin vui lòng kiểm tra lại tập tin php.ini hoặc đóng gói lại PHP. MySQLi mở rộng không có cho phiên bản PHP4.';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'Thiết lập mở rộng OCI8 cho PHP không được chính xác nên không kết nối được với Oracle. Xin vui lòng kiểm tra lại tập tin php.ini hoặc đóng gói lại PHP.';
$string['odbc_mssql'] = 'SQL*Server theo ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'Thiết lập mở rộng ODBC cho PHP không được chính xác nên không kết nối được với SQL*Server. Xin vui lòng kiểm tra lại tập tin php.ini hoặc đóng gói lại PHP.';
$string['pass'] = 'Xong';
$string['pgsqlextensionisnotpresentinphp'] = 'Thiết lập mở rộng PGSQL cho PHP không được chính xác nên không kết nối được với PostgreSQL. Xin vui lòng kiểm tra lại tập tin php.ini hoặc đóng gói lại PHP.';
$string['phpversionerror'] = 'PHP phải từ phiên bản 4.3.0 hay 5.1.0 trở lên (đã phát hiện nhiều sự cố với 5.0.x).';
$string['phpversionhelp'] = '<p>Moodle đòi hỏi phiên bản PHP phải từ 4.3.0 hay 5.1.0 trở lên (đã phát hiện nhiều sự cố với 5.0.x).</p>
<p>Bạn đang sử dụng phiên bản $a</p>
<p>Bạn cần phải nâng cấp PHP hoặc đổi sang dịch vụ kí gửi website khác sử dụng PHP phiên bản cao hơn!<br />
(Nếu dùng 5.0.x, bạn vẫn có thể chuyển xuống phiên bản 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['postgresqlwarning'] = '<strong>Ghi chú:</strong> Nếu gặp lỗi kết nối, bạn có thể thử thiết lập thông số \"Máy chủ kí gửi\" thành host=\'postgresql_host\' port=\'5432\' dbname=\'postgresql_database_name\' user=\'postgresql_user\' password=\'postgresql_user_password\'
và để trống các thông số \"Cơ sở dữ liệu\", \"Người dùng\" và \"Mật khẩu\". Xem thêm chi tiết tại nguồn <a href=\"http://docs.moodle.org/en/Installing_Postgres_for_PHP\">Tài liệu về Moodle</a>';
$string['safemodeerror'] = 'Moodle có thể gặp một số sự cố khi bật chế độ an toàn';
$string['safemodehelp'] = '<p>Moodle có thể gặp một số sự cố khác nhau khi bật chế độ an toàn. Đặc biệt là không thể tạo ra các tập tin mới.</p>

<p>Chế độ an toàn thường chỉ được dùng trên các dịch vụ kí gửi website quá cẩn trọng. Trong trường hợp đó, tốt nhất là nên chuyển sang nhà cung cấp dịch vụ khác.</p>

<p>Bạn có thể tiếp tục cài đặt nếu muốn, nhưng về sau có thể sẽ gặp nhiều rắc rối</p>.';
$string['sessionautostart'] = 'Tự động khởi động phiên làm việc';
$string['sessionautostarterror'] = 'Thiết lập này nên được tắt đi';
$string['sessionautostarthelp'] = '<p>Moodle đòi hỏi chức năng hỗ trợ phiên làm việc và không thể hoạt động thiếu chức năng này.</p>

<p>Có thể mở chức năng này trong tập tin php.ini, bằng cách sửa đổi thông số session.auto_start.</p>';
$string['skipdbencodingtest'] = 'Bỏ qua phần Kiểm tra bảng mã cơ sở dữ liệu';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Mở được đến trang này, điều đó có nghĩa là bạn đã cài đặt thành công và khởi động được <strong>$a->packname $a->packversion</strong> trên máy tính của mình. Xin chúc mừng!';
$string['welcomep30'] = 'Gói cài đặt <strong>$a->installername</strong> này bao gồm cả các ứng dụng cho phép tạo ra một môi trường giúp <strong>Moodle</strong> hoạt động tốt, đó là:';
$string['welcomep40'] = 'Gói này cũng bao gồm cả <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>';
$string['welcomep50'] = 'Việc sử dụng tất cả các ứng dụng trong gói này đều được điều chỉnh theo các giấy phép tương ứng. Trọn gói cài đặt <strong>$a->installername</strong> là một
<a href=\"http://www.opensource.org/docs/definition_plain.html\">phần mềm nguồn mở</a> và được cung cấp theo giấy phép<a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Trong các trang tiếp theo, bạn sẽ được hướng dẫn từng bước cấu hình và thiết lập hệ thống <strong>Moodle</strong> trên máy tính của mình. Bạn có thể chấp nhận các thiết lập mặc định hoặc tuỳ ý điều chỉnh theo nhu cầu riêng.';
$string['welcomep70'] = 'Nhấn nút \"Tiếp theo\" để tiếp tục tiến trình thiết lập <strong>Moodle</strong>.';
$string['wwwroot'] = 'Địa chỉ mạng';
$string['wwwrooterror'] = 'Địa chỉ mạng không hợp lệ: không có bản cài đặt Moodle nào tại địa chỉ này cả. Giá trị bên dưới đã được sửa lại.';

?>
