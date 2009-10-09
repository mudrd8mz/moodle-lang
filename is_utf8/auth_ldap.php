<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'If you want to use bind-user to search users, specify it here. Someting like \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Lykilorð fyrir bind-notanda.';
$string['auth_ldap_bind_pw_key'] = 'Lykilorð';
$string['auth_ldap_bind_settings'] = 'Bind stillingar';
$string['auth_ldap_contexts'] = 'List of contexts where users are located. Separate different contexts with \';\'. For example: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'If you enable user creation with email confirmation, specify the context where users are created. This context should be different from other users to prevent security issues. You don\'t need to add this context to ldap_context-variable, Moodle will search for users from this context automatically.';
$string['auth_ldap_creators'] = 'List of groups whose members are allowed to create new courses. Separate multiple groups with \';\'. Usually something like \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_warning_desc'] = 'Fjöldi daga áður en tilkynning er send vegna lykilorðs sem er um það bil að renna út.';
$string['auth_ldap_host_url'] = 'Specify LDAP host in URL-form like \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_host_url_key'] = 'URL miðlara';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kótun';
$string['auth_ldap_memberattribute'] = 'Specify user member attribute, when users belongs to a group. Usually \'member\'';
$string['auth_ldap_passtype_key'] = 'Snið á lykilorði';
$string['auth_ldap_preventpassindb_key'] = 'Fela lykilorð';
$string['auth_ldap_search_sub'] = 'Put value <> 0 if  you like to search users from subcontexts.';
$string['auth_ldap_server_settings'] = 'Stillingar á LDAP miðlara';
$string['auth_ldap_update_userinfo'] = 'Update user information (firstname, lastname, address..) from LDAP to Moodle. Look at /auth/ldap/attr_mappings.php for mapping information';
$string['auth_ldap_user_attribute'] = 'The attribute used to name/search users. Usually \'cn\'.';
$string['auth_ldap_user_type_key'] = 'Tegund notanda';
$string['auth_ldap_version_key'] = 'Útgáfa';
$string['auth_ldapdescription'] = 'This method provides authentication against an external LDAP server.
If the given username and password are valid, Moodle creates a new user 
entry in its database. This module can read user attributes from LDAP and prefill 
wanted fields in Moodle.  For following logins only the username and 
password are checked.';
$string['auth_ldapextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <B>LDAP fields</B> that you specify here. <P>If you leave these fields blank, then nothing will be transferred from LDAP and Moodle defaults will be used instead.<P>In either case, the user will be able to edit all of these fields after they log in.';
$string['auth_ldaptitle'] = 'Nota LDAP miðlara';