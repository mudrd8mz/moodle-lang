<?PHP // $Id$ 
      // auth_ldap.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['auth_ldap_ad_create_req'] = 'Није могуће креирати нови налог у Активном директоријуму. Проверите да ли су испуњени сви неопходни предуслови (LDAP конекција, везани корисници са одговарајућим правима итд.)';
$string['auth_ldap_attrcreators'] = 'Списак група или конекста чијим члановима је дозвоњено да креирају атрибуте. Раздвојите вишеструке групе са  \';\'. Обично нешто попут \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Креатори атрибута';
$string['auth_ldap_auth_user_create_key'] = 'Креирај кориснике екстерно';
$string['auth_ldap_bind_pw'] = 'Лозинка за везаног корисника';
$string['auth_ldap_bind_pw_key'] = 'Лозинка';
$string['auth_ldap_bind_settings'] = 'Подешавања за везивање';
$string['auth_ldap_changepasswordurl_key'] = 'URL за промену лозинке';
$string['auth_ldap_contexts'] = 'Списак контекста у којима се налазе корисници. Раздвојите различите контексте са \';\'. На пример: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Контексти';
$string['auth_ldap_create_context'] = 'Уколико омогућите креирање корисника помоћу потврде путем е-поште, наведите контекст у којем ће корисници бити креирани. Овај контекст треба да буде различит од других корисника како би се спречили сигурносни проблеми. Не морате да додајете овај контекст ldap_context враијабли. Moodle ће тражити кориснике из овог контекста аутоматски.<br /><b>Напомена!</b> Морате да измените метод user_create() у датотеци auth/ldap/auth.php како би овај начин креирање корисника фунцкионисао.';
$string['auth_ldap_create_context_key'] = 'Контекст за нове кориснике';
$string['auth_ldap_create_error'] = 'Грешка приликом креирања новог  корисника у LDAP серверу.';
$string['auth_ldap_creators'] = 'Списак група или контекста чијим члановима је дозвољено да креирају нове курсеве. Раздвојите вишеструке групе са \';\'. Обично нешто попут \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Креатори';
$string['auth_ldap_expiration_desc'] = 'Изаберите Не да бисте онемогућили проверу истицања лозинке или да LDAP чита време истицања лозинке директно из LDAP-а.';
$string['auth_ldap_expiration_key'] = 'Истек лозинке';
$string['auth_ldap_expiration_warning_desc'] = 'Колико дана пре истека лозинке ће бити издато упозорење о томе.';
$string['auth_ldap_expiration_warning_key'] = 'Упозорење о истеку лозинке';
$string['auth_ldap_expireattr_desc'] = 'Опционо: измените ldap-атрибут који похрањује време истека лозинке';
$string['auth_ldap_expireattr_key'] = 'Атрибут истека лозинке';
$string['auth_ldap_groupecreators'] = 'Списак група или контекста чијим члановима је дозвоњено креирање група. Раздвојите вишеструке групе са \';\'. Обично, нешто попут \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Креатори група';
$string['auth_ldap_host_url'] = 'Наведите LDAP сервер у облику URL адресе, као нпр. \'ldap://ldap.myorg.com/\' или \'ldaps://ldap.myorg.com/\' Раздвојите мултипле сервере са \';\' како бисте моглу да обезбедите аутоматске пребацивање  други сервер уколико буде проблен са активним сервером.';
$string['auth_ldap_host_url_key'] = 'URL LDAP рачунара';
$string['auth_ldap_ldap_encoding'] = 'Наведите кодни распоред који ће користити LDAP сервер. Највероватније utf-8. MS AD v2 користи подразумевани кодни распоред платформе као што је cp1252, cp1250 итд.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP кодниу распоред';
$string['auth_ldap_login_settings'] = 'Подешавања за пријављивање на систем';
$string['auth_ldap_memberattribute'] = '\'';
$string['auth_ldap_memberattribute_isdn_key'] = 'Атрибути члана користи dn';
$string['auth_ldap_memberattribute_key'] = 'Атрибути члана';
$string['auth_ldap_no_mbstring'] = 'Да бисте креирали кориснике у Активном директоријуму потребна Вам је mbstring екстензија.';
$string['auth_ldap_noconnect'] = 'LDAP-модул није могуће повезати са  сервером: $a';
$string['auth_ldap_noconnect_all'] = 'LDAP-модул није могуће повезати са било којим сервером: $a';
$string['auth_ldap_noextension'] = 'Упозорење: Изгледа да PHP LDAP модул није присутан. Молимо Бас да проверите да ли је инсталиран и омогућен.';
$string['auth_ldap_passtype'] = 'Наведите формат новр или промењене лозинке на LDAP серверу.';
$string['auth_ldap_passtype_key'] = 'Формат лозинке';
$string['auth_ldap_preventpassindb'] = 'Изаберите Да како би спречили да се лозинке похрањују у бази података Moodlea.';
$string['auth_ldap_preventpassindb_key'] = 'Сакриј лозинке';
$string['auth_ldap_search_sub'] = 'Претражи кориснике из подконтекста.';
$string['auth_ldap_search_sub_key'] = 'Претражи подконтекст';
$string['auth_ldap_server_settings'] = 'Подешавања LDAP сервера';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() не подржава изабрани тип корисника: $a (..још)';
$string['auth_ldap_user_attribute_key'] = 'Атрибути корисника';
$string['auth_ldap_user_exists'] = 'LDAP корисничко име већ постоји.';
$string['auth_ldap_user_settings'] = 'Подешавања за претраживање корисника';
$string['auth_ldap_user_type_key'] = 'Тип корисника';
$string['auth_ldap_usertypeundefined'] = 'config.user_type није дефинисан или функција ldap_expirationtime2unix не подржава изабрани тип!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type није дефинисан или функција ldap_unixi2expirationtime не подржава изабрани тип!';
$string['auth_ldap_version'] = 'Верзија LDAP протокола коју користи Ваш сервер';
$string['auth_ldap_version_key'] = 'Верзија';
$string['auth_ldapnotinstalled'] = 'Није могуће користити LDAP проверу идентитета.PHP LDAP модул није инсталиран.';
$string['auth_ldaptitle'] = 'LDAP сервер';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled_key'] = 'Омогући';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE брза путања?';
$string['auth_ntlmsso_subnet'] = 'Уколико је подешено, покушаће само SSO саклијентима у овој подмрежи. Формат: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Подмрежа';
$string['ntlmsso_attempting'] = 'Покушава Single Sign On преко NTLM...';
$string['ntlmsso_failed'] = 'Аутоматска пријава на систем није успела. Покушајте са нормалном страницом за пријаву...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO је онемогућен.';

?>
