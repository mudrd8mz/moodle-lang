<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Ако искате да използвате bind-user, за да търсите потребители, укажете го тук. Нещо от рода на \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Парола за bind-user.';
$string['auth_ldap_bind_settings'] = 'Bind settings';
$string['auth_ldap_contexts'] = 'Списък на местата (contexts), където се намират потребителските списъци. Разделителят е \';\'. Пример: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ако разрешите създаването на потребители на база потвърждение по е-поща, укажете мястото (context), където да се създават потребителите. От гледна точка на сигурността е по-добре тези потребители да са отделени от останалите. Забележете, че не е нужно да указвате това място в променливата ldap_context. тъй като Moodle автоматично ще го използва.';
$string['auth_ldap_creators'] = 'Списък на групите, чиито членове могат да създават нови курсове. Разделителят е \';\'. Пример: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Select No to disable expired password checking or LDAP to read passwordexpiration time directly from LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Number of days before password expiration warning is issued.';
$string['auth_ldap_expireattr_desc'] = 'Optional: overrides ldap-attribute what stores password expiration time asswordAxpirationTime';
$string['auth_ldap_graceattr_desc'] = 'Optional: Overrides  gracelogin attribute';
$string['auth_ldap_gracelogins_desc'] = 'Enable LDAP gracelogin support. After password has expired user can login until gracelogin count is 0. Enabling this setting displays grace login message if password is exprired.';
$string['auth_ldap_host_url'] = 'Укажете URL адреса на LDAP сървъра. Например: \'ldap://ldap.myorg.com/\' или \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_login_settings'] = 'Login settings';
$string['auth_ldap_memberattribute'] = 'Optional: Overrides user member attribute, when users belongs to a group. Usually \'member\'';
$string['auth_ldap_objectclass'] = 'Optional: Overrides objectClass used to name/search users on ldap_user_type. Usually you dont need to chage this.';
$string['auth_ldap_opt_deref'] = 'Determines how aliases are handled during search. Select one of the following values: \"No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP password expiration settings.';
$string['auth_ldap_search_sub'] = 'Put value <> 0 if  you like to search users from subcontexts.';
$string['auth_ldap_server_settings'] = 'LDAP server settings';
$string['auth_ldap_update_userinfo'] = 'Update user information (firstname, lastname, address..) from LDAP to Moodle.  Specify \"Data mapping\" settings as you need.';
$string['auth_ldap_user_attribute'] = 'Optional: Overrides the attribute used to name/search users. Usually \'cn\'.';
$string['auth_ldap_user_settings'] = 'User lookup settings';
$string['auth_ldap_user_type'] = 'Select how users are stored in LDAP. This setting also specifies how login expiration, grace logins and user creation will work.';
$string['auth_ldap_version'] = 'Версията на протокола LDAP, използвана от сървъра.';
$string['auth_ldapdescription'] = 'Този метод осигурява идентификация на базата на външен LDAP сървър. Ако указаното име и парола се потвърдят от LDAP сървъра, Moodle създава нов потребител в своята база данни. Този модул може да изчете определени атрибути от LDAP сървъра и автоматично да попълни съответните полета от базата данни на Moodle. Процедурата за идентификация от LDAP се изпълнява само веднъж, като след това се използва базата данни на Moodle.';
$string['auth_ldapextrafields'] = 'Тези полета не са задължителни. Можете да укажете прехвърлянето на информация за някои от полетата в базата данни на Moodle от <B>LDAP източника</B>. Ако не укажете нищо, ще бъдат използвани подразбиращите се стойности на Moodle.<P>И в двата случая, потребителите имат възможност да редактират полетата, след като влезнат в системата.';
$string['auth_ldaptitle'] = 'Използване на LDAP сървър';