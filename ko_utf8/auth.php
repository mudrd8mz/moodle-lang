<?PHP // $Id$ 
      // auth.php - created with Moodle 1.7 dev (2006092800)


$string['alternatelogin'] = '여기에 URL을 입력해 놓으면, 그것은 이 사이트를 위한 로그인 페이지로 사용될 것이다. 그것은 <strong>\'$a\'</strong> 처럼 실행문을 가진 형태여야 하고 <strong>사용자ID</strong>  <strong>password</strong> 그리고 Return 필드를 포함하여야 한다. 
<br />정확한 URL을 입력하도록 주의하지 않으면 이 사이트에 갇혀 버릴 수도 있다.<br />
기본 로그인 페이지를 사용하려면 이 칸을 빈칸으로 남겨두어라.';
$string['alternateloginurl'] = '대체 로그인 URL';
$string['auth_cas_baseuri'] = '서버의 URI (기초 uri가 없는 어느것) 
<br /> 예를 들면, 만약 CAS 서버가 
host.domaine.fr/CAS/에 응답한다면 
<br />cas_baseuri = CAS/';
$string['auth_cas_create_user'] = '만약 당신이 CAS인증을 득한 사용자를 무들 데이터베이스에 삽입하고 싶다면 이 기능을 켜기 바란다. 그렇게 하지 않으면 기존 무들 데이터베이스에 존재하는 사용자만이  로그인 할 수 있다.';
$string['auth_cas_enabled'] = 'CAS인증을 사용하기 원한다면 이것을 켜십시오.';
$string['auth_cas_hostname'] = 'CAS서버의 호스트네임 <br />예: host.domain.fr';
$string['auth_cas_invalidcaslogin'] = '죄송합니다. 로그인 실패 - 당신은 인증받지 못했습니다.';
$string['auth_cas_language'] = '선택된 언어';
$string['auth_cas_logincas'] = '안전한 연결 접속';
$string['auth_cas_port'] = 'CAS서버의 포트';
$string['auth_cas_server_settings'] = 'CAS서버 설정';
$string['auth_cas_text'] = '보안 연결';
$string['auth_cas_version'] = 'CAS의 판번호';
$string['auth_casdescription'] = '이 방법은 간편 사용자 인증(SSO)하에서 사용자를 인증하기 위해 CAS서버(중앙인증서비스)를 사용한다. 또한 단순한 LDAP인증을 사용할 수도 있다. 만약 주어진 사용자 이름과 비밀 번호가 CAS에 따라 근거가 확실하다면, 무들은 그것의 데이터베이스에서 새로운 사용자 엔트리를 만들고, 만약 요청이 있으면 LDAP로부터 사용자 속성을 가져온다. 그 후 로그인과정에서는 단지 사용자 이름과 비밀번호만 점검된다.';
$string['auth_castitle'] = 'CAS서버(SSO) 사용';
$string['auth_changepasswordhelp'] = '비밀번호 도움문서 바꾸기';
$string['auth_changepasswordhelp_expl'] = '비밀번호 도움문서를 자신의 $a 비밀번호를 잊어버린 사용자들에게 보여줍니다. 또한 이것은 무들의 비밀번호 변경 혹은 <strong>비밀번호 변경 주소</strong>를 대신 보여줄 수도 있습니다.';
$string['auth_changepasswordurl'] = '비밀번호 주소 바꾸기';
$string['auth_changepasswordurl_expl'] = '$a 비밀번호를 잊어버린 사용자들에게 이 주소를 전송한다. <strong>표준적인 비밀번호 변경 페이지</strong>를 <strong>아니오</strong>로 설정하라.';
$string['auth_common_settings'] = '일반설정';
$string['auth_data_mapping'] = '데이타 매핑';
$string['auth_dbdescription'] = '이 방식은 외부의 데이터베이스 테이블을 통해 사용자의 아이디와 비밀번호가 유효한 지를 확인합니다. 만일 계정이 새로 만든 것이라면, 다른 항목의 정보도 무들의 데이터베이스에 복사될 수 있습니다.';
$string['auth_dbextrafields'] = '이 항목들은 선택 사항입니다. 여기에 지정해 놓으면 <b>외부 데이타베이스 항목</b>으로부터 무들의 사용자 정보 항목을 채울 수 있습니다.<p>만일 이 곳을 비워 놓으면, 기본값이 사용됩니다.</p><p>사용자가 로그인 한 후에도 이 항목들을 수정할 수 있습니다.</p>';
$string['auth_dbfieldpass'] = '비밀번호를 포함하는 필드명';
$string['auth_dbfielduser'] = '사용자 아이디를 포함하는 필드명';
$string['auth_dbhost'] = '데이타베이스 서버를 구동하는 컴퓨터';
$string['auth_dbname'] = '데이터베이스 자체의 이름';
$string['auth_dbpass'] = '사용자 아이디와 연결되는 비밀번호';
$string['auth_dbpasstype'] = '<p>비밀번호 필드의 포멧을 구체적으로 적어라. PostNuke와 같은 웹 프로그램으로 연결하기 위해서는 MD5 암호화를 사용하는 것이 유용하다.</p> <p>만일 사용자 아이디나 이메일주소는 외부 데이터베이스를 사용하지만, 암호는 무들이 관리할 때에는 \'internal\'을 사용하라. 이때 <i>반드시</i> 외부 디비의 이메일주소 필드를 확보해야 하고, admin/cron.php 를 주기적으로 실행시켜야만 한다. 무들은 임시 비밀번호로 새 사용자에게 이메일을 발송할 것이다.</p>';
$string['auth_dbtable'] = '데이타베이스의 테이블명';
$string['auth_dbtitle'] = '외부 데이타베이스 사용';
$string['auth_dbtype'] = '데이타베이스 유형(자세히 알고 싶으면 <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb 문서</a>)를 참조하라)';
$string['auth_dbuser'] = '데이타베이스의 읽기 권한을 가진 사용자명';
$string['auth_emaildescription'] = '이메일 확인 인증은 기본 인증 방법이다. 사용자가 가입할 때, 새로운 사용자 아이디와 비밀번호를 선택하면, 사용자의 이메일 계정으로 확인 메일이 보내진다. 이 메일에는 계정을 활성화할 수 있는 안전한 링크를 포함한다. 다음에 로그인할 때에는 무들 데이타베이스에 저장된 값을 참고하게 된다.';
$string['auth_emailtitle'] = '이메일 기반 인증';
$string['auth_fccreators'] = '새로운 배움터를 만들수 있는 회원들이 있는 모둠의 목록.  다수의 모둠이 있는 경우에는 \';\'를 사용하여 구분하라. 이름은 FirstClass 서버에서와 마찬가지로 반드시 정확하게 쓰여져야 한다. 시스템은 대소문자를 구별한다.';
$string['auth_fcdescription'] = '이 방법은 정해진 사용자인지 그리고 비밀번호가 유효한지 확인하기 위해서 FirstClass 서버를 사용한다.';
$string['auth_fcfppport'] = '서버 포트(3333이 가장 일반적입니다.)';
$string['auth_fchost'] = 'FirstClass 서버 주소. IP 주소나 DNS 이름을 입력';
$string['auth_fcpasswd'] = '위의 계정을 위한 비밀번호';
$string['auth_fctitle'] = 'FirstClass 서버 사용';
$string['auth_fcuserid'] = '\'Subadministrator\'권한 설정을 위한 FirstClass 계정의 사용자 아이디';
$string['auth_fieldlock'] = '사용자 정보 잠금';
$string['auth_fieldlock_expl'] = '<p><b>사용자 정보 잠김:</b> 만약 이를 켜 놓으면 무들  사용자나 관리자의 정보 필드를 바로 편집하는 것을 방지할 것입니다. 사용자 정보를 외부인증시스템이 지속적으로 관리하게 하려면 이 옵션을 사용하라. </p>';
$string['auth_fieldlocks'] = '사용자 항목 잠금';
$string['auth_fieldlocks_help'] = '<p>당신은 사용자 자료 필드를 잠굴수 있다. 이 기능은  사이트에서 운영자가 \"사용자 올리기\"기능 등을 통해 직접 사용자 자료를 유지 관리할 때 유용하다. 무들 프로그램에 의해 잠긴 분야가 있다면, 사용자 계정을 새로 만들거나 하지 않으면 계정은 사용할수 없게 될 것이다.</p><p>이런 문제가 생기지 않길 바란다면 설정을 \'칸이 비워져있을땐 잠기지 않음\'으로 설정하라.</p>';
$string['auth_imapdescription'] = 'IMAP서버를 사용하여 사용자의 이름과 비밀번호가 유효한지를 확인한다.';
$string['auth_imaphost'] = 'IMAP서버의 주소. DNS이름을 사용하지 말고 IP번호를 사용하라.';
$string['auth_imapport'] = 'IMAP서버의 포트 숫자를 나타낸다. 보통 이 숫자는 143이거나 993이다.';
$string['auth_imaptitle'] = 'IMAP서버의 사용';
$string['auth_imaptype'] = 'IMAP서버의 유형. IMAP서버는 다른 유형의 인증방법이나 교섭방법을 사용할 수 있다.';
$string['auth_ldap_bind_dn'] = '만약 당신이 bind-user(운영자급 사용자를 지칭한다)을 이용하여 사용자들을 찾길 바란다면 이곳에 자세한 것을 기록해야한다. 예를 들면 \'cn=ldapuser,ou=public,o=org\' 등이 있다.';
$string['auth_ldap_bind_pw'] = 'Bind-user를 위한 패스워드';
$string['auth_ldap_bind_settings'] = '설정 확정';
$string['auth_ldap_contexts'] = '사용자들이 어디에 위치해있는지 나타내는 목록이다. 다른 종류의 목록들은 \'ou=users,o=org; ou=others,o=org\'처럼 세미콜론을 써서 나눠 적는다.';
$string['auth_ldap_create_context'] = '만약 당신이 이메일 인증으로 사용자를 생성시키려 한다면 어디에 사용자들을 생성시킬지를 명시하라. 이 문맥은 보안상의 문제를 막기위해 다른 사용자들과는 다르게 명기되어야 한다. ldap_context-variable에 작성된 문맥을 포함할 필요는 없다. 무들이 자동적으로 작성된 문맥에서 사용자를 찾아줄 것이다.<br /><b>주의!</b> 사용자 생성을 위해서는 auth/ldap/lib.php에 있는 auth_user_create()를 변경시킬 필요가 있다.';
$string['auth_ldap_creators'] = '새 배움터를 생성할 수 있는 모둠의 목록이다. 보통 \'cn=teachers,ou=staff,o=myorg\'형식으로 모둠을 분류한다.';
$string['auth_ldap_expiration_desc'] = '만료된 비밀번호 검색을 불가능하게 하거나 LDAP로부터 비밀번호 만료 시간을 직접 읽어오게 하려면, \"아니오\"를 선택하라.';
$string['auth_ldap_expiration_warning_desc'] = '비밀번호 만료 전 경고할 날의 여유';
$string['auth_ldap_expireattr_desc'] = '선택 사항 : 비밀번호 만료 시간이 저장되는 ldap속성보다 우선한다. passwordExpirationTime';
$string['auth_ldap_graceattr_desc'] = '선택사항 : 유예기간 로그인 속성보다 우선함';
$string['auth_ldap_gracelogins_desc'] = 'LDAP 유예기간 로그인 지원이 가능하다. 비밀번호가 만기된 후에 사용자는 유예기간 로그인이 0이 되기 전까지 로그인 가능하다. 만약 이 설정을 \"예\"로 놓으면 비밀번호가 만료될 경우에 유예기간 로그인 메세지를 보여준다.';
$string['auth_ldap_host_url'] = '\'ldap://ldap.myorg.com/\' 또는 \'ldaps://ldap.myorg.com/\'식으로 URL상의 LDAP 호스트를 명기한다.';
$string['auth_ldap_login_settings'] = '로그인 설정하기';
$string['auth_ldap_memberattribute'] = '선택 사항 : 사용자들이 한 그룹안에 속해 있다면 사용자 번호 속성보다 우선한다. 대개는 \'member\'이다.';
$string['auth_ldap_objectclass'] = '선택 사항 : ldap_user_type에서 이름이나 사용자 찾기에 사용되는 objectClass보다 우선이다. 보통은 변경시킬 필요가 없다.';
$string['auth_ldap_opt_deref'] = 'Aliases가 탐색 동안에 어떻게 처리되야 할지 결정하라. 다음 중 하나를 선택하라.
\"아니오\" (LDAP_DEREF_NEVER) 혹은 
\"예\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP 비밀번호의 만료 설정';
$string['auth_ldap_preventpassindb'] = '비밀번호 노출방지를 위해서 \"무들 데이터베이스에 저장\"에 대한 물음에 \"예\" 로 설정하라.';
$string['auth_ldap_search_sub'] = '하위문맥에서 사용자 찾기';
$string['auth_ldap_server_settings'] = 'LDAP서버 설정';
$string['auth_ldap_update_userinfo'] = 'LDAP에서 무들로 사용자의 정보를 갱신한다.(성, 이름, 주소 등.) 필요하다면 \"데이터 매핑\" 설정을 하라.';
$string['auth_ldap_user_attribute'] = '선택사항: 사용자의 탐색/이름바꾸기 속성보다 우선한다.(보통 \'cn\' 이다)';
$string['auth_ldap_user_settings'] = '사용자 검색 설정';
$string['auth_ldap_user_type'] = '사용자가 LDAP에서 어떻게 저장되는 지를 선택하라. 또한 로그인 만기, 유예기간 로그인 및 사용자 생성 등의 방법을 지정하게 된다.';
$string['auth_ldap_version'] = '서버가 사용하고 있는 LDAP 프로토콜 판번호';
$string['auth_ldapdescription'] = '이 방법은 외부 LDAP서버에 대해 인증을 해 준다. 만약 계정과 비밀번호가 유효하다면 무들은 데이터베이스 안에 새로운 사용자를 만든다. 무들은 LDAP와 자체 필드에 미리 작성된 사용자의 특성을 읽을 수 있다. 로그인 이후에는 단지 계정과 비밀번호만 점검한다.';
$string['auth_ldapextrafields'] = '이 필드는 선택사항이다. 당신이 여기에 명시한 LDAP서버에서 정보와 함께 무들 사용자 필드를 미리 채워놓을 수 있다. <p>만약 이 필드를 빈 공간으로 남겨둔다면, LDAP서버에서 아무것도 이동이 되지 않으며 무들의 기본값이 대신 사용된다.</p><p> 어느 경우라도 사용자가 로그인을 한 후에는, 사용자가 이 필드의 모든 것을 수정할 수 있다.';
$string['auth_ldaptitle'] = 'LDAP서버의 사용';
$string['auth_manualdescription'] = '이 방법은 사용자들이 직접 자신의 계정을 만들 수 있는 모든 방법을 배제한다. 모든 계정들은 운영자에 의해 손수 만들어져야 한다.';
$string['auth_manualtitle'] = '운영자가 직접 만든 계정';
$string['auth_multiplehosts'] = '다수의 호스트들은 host1.com;host2.com;host3.com 식이나 IP의 경우 xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx 형태로 쓸 수 있다.';
$string['auth_nntpdescription'] = 'NNPP 서버를 사용하여 사용자의 이름과 패스워드의 유용성을 확인한다.';
$string['auth_nntphost'] = 'NNPP 서버의 주소. DNS가 아닌 IP 숫자를 사용한다.';
$string['auth_nntpport'] = '서버 포트 (119가 가장 무난하다)';
$string['auth_nntptitle'] = 'NNPP 서버 사용';
$string['auth_nonedescription'] = '사용자들은 외부 보안시스템을 거치지 않거나 이메일확인 작업 없이 즉시 계정을 만들 수 있다. 하지만 만들기 전에 이 문제가 가져올 수 있는 보안상, 등록상의 문제를 생각해 보시기 바란다.';
$string['auth_nonetitle'] = '불인증';
$string['auth_pamdescription'] = '이 방법은 이 서버에서 원래 사용자 이름에 접근하는 PAM을 사용한다. 당신은 이 모듈을 사용하기 위해 
<a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a> 를 설치해야 한다.';
$string['auth_pamtitle'] = 'PAM';
$string['auth_passwordisexpired'] = '당신의 비밀번호가 만료되었습니다. 지금 비밀번호를 바꾸시겠습니까?';
$string['auth_passwordwillexpire'] = '당신의 비밀번호가 $a 일 후에 만료됩니다. 지금 비밀번호를 바꾸시겠습니까?';
$string['auth_pop3description'] = 'POP3 서버를 사용하여 사용자의 이름과 패스워드의 유용성을 확인한다.';
$string['auth_pop3host'] = 'POP3 서버의 주소. DNS가 아닌 IP 숫자를 사용한다.';
$string['auth_pop3mailbox'] = '연결 시도를 위한 우편함의 이름 (보통 INBOX)';
$string['auth_pop3port'] = '서버 포트 (110이 일반적이고 SSL의 경우 995가 무난하다)';
$string['auth_pop3title'] = 'POP3 서버 사용';
$string['auth_pop3type'] = '서버의 형식. 만약 당신의 서버가 증명된 보안을 사용한다면 POP3cert를 선택하라.';
$string['auth_radiusdescription'] = '이방법은 사용자 이름과 암호를 인증하기 위하여  
<a ref=\"http://en.wikipedia.org/wiki/RADIUS\"   target=\"_blank\">RADIUS</a> 서버를 사용한다.';
$string['auth_radiushost'] = 'RADIUS 서버 주소';
$string['auth_radiusnasport'] = '연결할 포트';
$string['auth_radiussecret'] = '공유된 암호';
$string['auth_radiustitle'] = 'RADIUS 서버 사용';
$string['auth_shib_convert_data'] = '자료 변경 API';
$string['auth_shib_convert_data_description'] = '당신은 이 좀더 암호에 의해 제공된 데이터를 변경하기 위해 이 API를 사용할 수 있다. 좀 더 많은 규정을 위해
<a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> 을 읽어보십시오.';
$string['auth_shib_convert_data_warning'] = '웹서버 진행에 의해 파일이 존재하지 않거나 읽을 수 없다.';
$string['auth_shib_instructions'] = '만약 당신의 규정이 그것을 지지한다면 암호에 접근하기 위해 <a href=\"$a\"> 암호 로그인 </a>을 사용하라.<br />그렇지 않으면 보여지는 지금에서부터 정상적인 로그인을 사용십시오.';
$string['auth_shib_instructions_help'] = '여기에 당신은 암호를 설명하기 위한 당신의 사용자 관습 명령을 제공하여야 한다. 그것은 명령 섹션의 로그인 페이지에 보여질 것이다. 그것은 암호가 보호되는 고쳐쓰는 사용자의 공급원 링크를 \"<b>$a</b>\" 암호 사용자가 모듈에 로그인 할 수 있기 위해 포함하여야 한다. 만약 당신이 이 빈칸을 남겨둔다면, 표준 명령이 사용될 것이다 (특정 암호가 아니라)';
$string['auth_shib_only'] = '단지 암호말';
$string['auth_shib_only_description'] = '만약 암호 확증이 강요된다면 이 옵션을 체크하십시오.';
$string['auth_shib_username_description'] = '모듈 사용자 이름으로 사용되어야 하는 다양한 웹서버 암호 환경의 이름을 지어라.';
$string['auth_shibboleth_login'] = '암호말 로그인';
$string['auth_shibboleth_manual_login'] = '수동 로그인';
$string['auth_shibbolethdescription'] = '이 방법을 사용하는 사용자는 창조적이며 <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>을 사용하는 것을 증명한다. 
<br>어떻게 당신의 모듈을 비빌먼호와 함께 설치하는 가에 대해 <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a>를 반드시 읽어 두어라.';
$string['auth_shibbolethtitle'] = '암호';
$string['auth_updatelocal'] = '내부 데이터의 개정';
$string['auth_updatelocal_expl'] = '<p><b> 내부 데이터의 갱신 :</b> 만약 이를 켜 놓으면, 각 필드는 (외부 인증처로부터) 로그인할 때 마다 혹은 사용자가 동기화가 있을 때 업데이트 될 것이다. 내부적으로 개정하도록 설정한 필드는 반드시 잠겨 있어야 한다.';
$string['auth_updateremote'] = '외부데이터의 업데이트';
$string['auth_updateremote_expl'] = '<p><b> 외부 데이터의 갱신 :</b> 만약 이를 켜 놓으면, 외부 인증처는 사용자 기록이 갱신될 때 동시에 갱신될 것이다. 필드들은 편집이 가능하도록 잠겨있지 않아야 한다.';
$string['auth_updateremote_ldap'] = '<p><b>경고:</b> 외부의 LDAP 데이터를 업데이트 하는 것은 당신이 모든 사용자가 기록되는 특권을 편집하는 묶여있는 사용자를 요구한다. 현재는 많은 가치를 지닌 속성을 보존하지 않으며 여분의 가치들은 업데이트로 제거된다.</p>';
$string['auth_user_create'] = '사용자 생성 가능';
$string['auth_user_creation'] = '새로운 사용자는 외부인증 소스 혹은 확인되어진 이메일을 통해 계정을 생성할 수 있다. 만약 이 기능을 켜 놓으면 사용자 생성을 위한 모듈 나름대로의 옵션 설정을 잊지마시오.';
$string['auth_usernameexists'] = '선택하신 사용자 아이다는 이미 존재합니다. 다른 사용자아이디를 입력하세요.';
$string['authenticationoptions'] = '인증 옵션들';
$string['authinstructions'] = '이곳을 통해 사용자들을 위한 안내문을 제공함으로써, 어떻게 계정과 비밀번호를 만들 수 있는지 알려줄 수 있습니다. 당신이 작성한 내용은 로그인 화면에 나타납니다. 하지만 만약 이곳을 빈칸으로 놔둔다면 로그인 화면에 아무런 안내문도 나타나지 않을 것입니다.';
$string['changepassword'] = '패스워드 URL 변경';
$string['changepasswordhelp'] = '만약 사용자가 자신의 계정과 비밀번호를 잊어버리는 경우를 대비해 이곳에 계정과 비밀번호를 찾거나 혹은 바꿀 수 있는 장소를 지정해 줍니다. 이것은 로그인 페이지나 사용자 페이지에서 단추형식으로 제공되지만, 이곳을 빈칸으로 놓아둔다면 웹페이지에 단추가 나타나지 않습니다.';
$string['chooseauthmethod'] = '인증 방법 선택';
$string['createpasswordifneeded'] = '필요시 암호 생성';
$string['forcechangepassword'] = '암호변경 강요';
$string['forcechangepassword_help'] = '다음번 무들 로그인시 비밀번호를 바꿀 것을 사용자에게 요청합니다.';
$string['forcechangepasswordfirst_help'] = '사용자가 무들에 처음 로그인 할 때 비밀번호를 변경할 것을 요청합니다.';
$string['guestloginbutton'] = '손님 접속 버튼';
$string['infilefield'] = '파일에  필요한 항목';
$string['instructions'] = '안내문';
$string['internal'] = '내부';
$string['locked'] = '잠겨있음';
$string['md5'] = 'MD5 인증';
$string['passwordhandling'] = '비밀번호 처리';
$string['plaintext'] = '단순 텍스트';
$string['shib_no_attributes_error'] = '당신은 Shibboleth인증을 쓰는 것 같습니다만, 무들은 당신의 사용자 속성을 전달받지 못했습니다. 필요한 속성($a)을 무들 서비스 제공자 혹은 이 서버의 웹관리자에게 전달하였는지를 점검하여 주시기 바랍니다.';
$string['shib_not_all_attributes_error'] = '무들은 당신의 경우와 같은 사례를 처리하기 위해서 별도의 Shibboleth 속성이 필요합니다.<br />여러분의 웹관리자나 인증제공자에게 문의하시기 바랍니다.';
$string['shib_not_set_up_error'] = 'Shibboleth인증이 제대로 설정되지 않은 것 같습니다. Shibboleth인증을 설정하기 위한 자세한 내용은 <a href=\"README.txt\">README</a>를 확인하여 주기 바랍니다.';
$string['showguestlogin'] = '로그인 화면에서 손님 로그인 단추를 보이거나 숨길 수 있다.';
$string['stdchangepassword'] = '표준 비밀번호변경 화면 사용';
$string['stdchangepassword_expl'] = '만약 외부의 인증 시스템이 무들을 통한 비밀번호 변경을 허락한다면, 이것을 예로 바꾸어라. 이 설정은 \'비밀번호 URL 변경\'보다 우선한다.';
$string['stdchangepassword_explldap'] = '주목 : 만약 LDAP서버가 원격에 있다면, SSL 함호화 터널(ldaps://)을 통해서 LDAP를 사용할 것을 추천한다.';
$string['unlocked'] = '잠기지 않음';
$string['unlockedifempty'] = '비어있다면 잠기지 않음';
$string['update_never'] = '불가';
$string['update_oncreate'] = '생성 중';
$string['update_onlogin'] = '모든 접속';
$string['update_onupdate'] = '갱신 중';

?>
