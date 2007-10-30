<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.8.2+ (2007021520) by Eric Hsin


$string['description'] = '<p>您可以使用LDAP伺服器來控制註冊。假設您的LDAP樹已包含可以對應課程的群組，同時每個群組/課程將有成員資料來對應到學生。</p>
<p>假設課程已在LDAP中以群組定義，而每個群組包含多個成員欄位(<em>成員</em>或<em>成員識別號</em>)，這欄位包含一個唯一的使用者識別。</p>
<p>使用LDAP註冊，您的使用者<strong>必須</strong>有一個有效的身份證號欄位。LDAP群組必須有這個身份證號存在成員的欄位中，讓使用者可以註冊課程。如果您已經使用LDAP認證，這通常能運作正常。</p>
<p>當使用者登入時，註冊資料就會更新。您也可以執行腳本來保持註冊資料同步。請看<em>enrol/ldap/enrol_ldap_sync.php</em>。</p>

<p>這個外掛也可以設定為，當新的群組出現在LDAP時，自動建立新的課程。</p>';
$string['enrol_ldap_autocreate'] = '假如有註冊資料到一個在Moodle中尚未存在的課程中時，課程可以自動建立。';
$string['enrol_ldap_autocreation_settings'] = '自動建立課程機制的設定';
$string['enrol_ldap_bind_dn'] = '如果您想要以整批使用者來搜尋使用者，請在這兒指定。例如\'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = '整批使用者的密碼';
$string['enrol_ldap_category'] = '自動建立之課程的目錄';
$string['enrol_ldap_contexts'] = 'LDAP 後台';
$string['enrol_ldap_course_fullname'] = '選項：從LDAP欄位取得全名';
$string['enrol_ldap_course_idnumber'] = '對應到LDAP中唯一的識別，通常是<em>cn</em>或<em>uid</em>。如果您正使用自動課程建立機制，建議您鎖定這個數值。';
$string['enrol_ldap_course_settings'] = '課程註冊設定';
$string['enrol_ldap_course_shortname'] = '選項：從LDAP欄位取得簡稱';
$string['enrol_ldap_course_summary'] = '選項：從LDAP欄位取得摘要';
$string['enrol_ldap_editlock'] = '鎖定數值';
$string['enrol_ldap_general_options'] = '一般選項';
$string['enrol_ldap_host_url'] = '使用URL格式指定LDAP主機，如\'ldap://ldap.myorg.com/\'　或\'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_memberattribute'] = 'LDAP 成員屬性';
$string['enrol_ldap_objectclass'] = 'objectClass　用來搜尋課程。通常設為\'posixGroup\'。';
$string['enrol_ldap_roles'] = '角色對應';
$string['enrol_ldap_search_sub'] = '在子層目錄中搜索群組成員';
$string['enrol_ldap_server_settings'] = 'LDAP伺服器設定';
$string['enrol_ldap_student_contexts'] = '以學生註冊資料分類的文章脈絡列表。以\'；\'區分不同的文章脈絡。例如：\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = '成員屬性，當使用者屬於（註冊在）某一群組時。通常是用\'成員\'或\'成員識別號\'。';
$string['enrol_ldap_student_settings'] = '學生註冊資料設定';
$string['enrol_ldap_teacher_contexts'] = '以教師註冊資料分類的文章脈絡列表。以\'；\'區分不同的文章脈絡。例如：\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = '成員屬性，當使用者屬於（註冊在）某一群組時。通常是用\'成員\'或\'成員識別號\'。';
$string['enrol_ldap_teacher_settings'] = '教師註冊資料設定';
$string['enrol_ldap_template'] = '選項：自動建立的課程可以從一個範例課程複製其設定';
$string['enrol_ldap_updatelocal'] = '更新本地資料';
$string['enrol_ldap_version'] = '您的伺服器所使用的LDAP協定版本';
$string['enrolname'] = 'LDAP';

?>
