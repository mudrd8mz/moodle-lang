<?PHP // $Id$ 
      // mnet.php - created with Moodle 1.8.2+ (2007021520)


$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS(自签名)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS(已签名)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP(未加密)';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP(自签名)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP(已签名)';
$string['aboutyourhost'] = '关于您的服务器';
$string['accesslevel'] = '访问级别';
$string['addhost'] = '添加主机';
$string['addnewhost'] = '添加一个新主机';
$string['addtoacl'] = '添加访问控制';
$string['allow'] = '允许';
$string['authfail_nosessionexists'] = '认证失败：mnet会话不存在。';
$string['authfail_sessiontimedout'] = '认证失败：mnet会话超时。';
$string['authfail_usermismatch'] = '认证失败：用户不匹配。';
$string['authmnetautoadddisabled'] = 'Moodle网络认证插件中<em>自动添加用户</em>已经<strong>禁用</strong>。';
$string['authmnetdisabled'] = 'Moodle网络<em>认证插件</em>已经<strong>禁用</strong>。';
$string['badcert'] = '这不是合法的证书。';
$string['couldnotgetcert'] = '在 {$a} 没有找到证书。该服务级可能已经当机或配置错误。';
$string['couldnotmatchcert'] = '这和当前web服务器发布的证书不匹配。';
$string['courses'] = '课程';
$string['currentkey'] = '当前的公钥';
$string['databaseerror'] = '不能向数据库写入详细信息';
$string['deleteaserver'] = '删除一个服务器';
$string['deletekeycheck'] = '您确定要删除这个密钥吗？';
$string['deleteoutoftime'] = '60秒删除密钥的窗口已经嗯超时，请重新开始。';
$string['deleteuserrecord'] = 'SSO ACL：从{$a[1]}中删除用户{$a[0]}的记录。';
$string['deletewrongkeyvalue'] = '发生了错误。如果您没有删除服务器上的SSL密钥，则很有可能您已经成为恶意攻击的对象。未进行任何操作。';
$string['deny'] = '禁止';
$string['description'] = '描述';
$string['duplicate_usernames'] = '我们没能在user表格的字段“mnethostid”和“username”上创建索引。<br />这由可能是因为您的用户表格中有<a href=\"{$a}\" target=\"_blank\">重复的用户名</a>。<br />升级过程仍然会成功。点击上面的链接，会显示修复此问题的相关信息。您可以在升级后尝试一下。</br />';
$string['editenrolments'] = '选课';
$string['enabled_for_all'] = '(这个服务已经对所有站点激活）。';
$string['enrolcourseenrol_desc'] = '使用Moodle网络选课插件为此用户选课或注销。注意该永和可能已经通过其它的选课方式选课。这些选课记录列出在<em>其它选课用户</em>中。';
$string['enrolcourses_desc'] = '此站点提供的可用于远程选课的课程。';
$string['enrollingincourse'] = '加入站点“{$a[1]}”上的课程“{$a[0]}”';
$string['enrolments'] = '选课';
$string['enterausername'] = '请输入一个用户名，或者以逗号分隔的用户名列表。';
$string['expired'] = '密钥过期于';
$string['expires'] = '有效至';
$string['expireyourkey'] = '删除这个密钥';

?>
