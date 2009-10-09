<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'If you want to use bind-user to search users, specify it here. Someting like \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Password for bind-user.';
$string['auth_ldap_bind_settings'] = 'Bind settings';
$string['auth_ldap_contexts'] = 'List of contexts where users are located. Separate different contexts with \';\'. For example: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'If you enable user creation with email confirmation, specify the context where users are created. This context should be different from other users to prevent security issues. You don\'t need to add this context to ldap_context-variable, Moodle will search for users from this context automatically.<br /><b>Note!</b> You have to modify function auth_user_create() in file auth/ldap/lib.php to make user creation work';
$string['auth_ldap_creators'] = 'List of groups whose members are allowed to create new courses. Separate multiple groups with \';\'. Usually something like \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Select No to disable expired password checking or LDAP to read passwordexpiration time directly from LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Number of days before password expiration warning is issued.';
$string['auth_ldap_expireattr_desc'] = 'Optional: overrides ldap-attribute what stores password expiration time passwordExpirationTime';
$string['auth_ldap_graceattr_desc'] = 'Optional: Overrides  gracelogin attribute';
$string['auth_ldap_gracelogins_desc'] = 'Enable LDAP gracelogin support. After password has expired user can login until gracelogin count is 0. Enabling this setting displays grace login message if password is exprired.';
$string['auth_ldap_host_url'] = 'Specify LDAP host in URL-form like \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\' Separate multipleservers with \';\' to get failover support.';
$string['auth_ldap_login_settings'] = 'உள்நுழைவின் அமைப்பாக்கம்';
$string['auth_ldap_memberattribute'] = 'Optional: Overrides user member attribute, when users belongs to a group. Usually \'member\'';
$string['auth_ldap_objectclass'] = 'Optional: Overrides objectClass used to name/search users on ldap_user_type. Usually you dont need to chage this.';
$string['auth_ldap_opt_deref'] = 'Determines how aliases are handled during search. Select one of the following values: \"No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP password expiration settings.';
$string['auth_ldap_preventpassindb'] = 'Select yes to prevent passwords from being stored in Moodle\'s DB.';
$string['auth_ldap_search_sub'] = 'Search users from subcontexts.';
$string['auth_ldap_server_settings'] = 'எல்டப் பணியகத்தின் அமைப்பு';
$string['auth_ldap_update_userinfo'] = 'Update user information (firstname, lastname, address..) from LDAP to Moodle.  Specify \"Data mapping\" settings as you need.';
$string['auth_ldap_user_attribute'] = 'Optional: Overrides the attribute used to name/search users. Usually \'cn\'.';
$string['auth_ldap_user_settings'] = 'User lookup settings';
$string['auth_ldap_user_type'] = 'Select how users are stored in LDAP. This setting also specifies how login expiration, grace logins and user creation will work.';
$string['auth_ldap_version'] = 'The version of the LDAP protocol your server is using.';
$string['auth_ldapdescription'] = 'This method provides authentication against an external LDAP server.

                                  If the given username and password are valid, Moodle creates a new user 

                                  entry in its database. This module can read user attributes from LDAP and prefill 

                                  wanted fields in Moodle.  For following logins only the username and 

                                  password are checked.';
$string['auth_ldapextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <b>LDAP fields</b> that you specify here. <p>If you leave these fields blank, then nothing will be transferred from LDAP and Moodle defaults will be used instead.</p><p>In either case, the user will be able to edit all of these fields after they log in.</p>';
$string['auth_ldaptitle'] = 'எல்டப் பணியகத்தைப் பயன்படுத்து';