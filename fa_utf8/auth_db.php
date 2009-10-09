<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbdescription'] = 'This method uses an external database table to check whether a given username and password is valid.  If the account is a new one, then information from other fields may also be copied across into Moodle.';
$string['auth_dbextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <B>external database fields</B> that you specify here. <P>If you leave these blank, then defaults will be used.<P>In either case, the user will be able to edit all of these fields after they log in.';
$string['auth_dbfieldpass'] = 'Name of the field containing passwords';
$string['auth_dbfielduser'] = 'Name of the field containing usernames';
$string['auth_dbhost'] = 'The computer hosting the database server.';
$string['auth_dbname'] = 'Name of the database itself';
$string['auth_dbpass'] = 'Password matching the above username';
$string['auth_dbpasstype'] = 'Specify the format that the password field is using.  MD5 encryption is useful for connecting to other common web applications like PostNuke';
$string['auth_dbtable'] = 'Name of the table in the database';
$string['auth_dbtitle'] = 'Use an external database';
$string['auth_dbtype'] = 'The database type (See the <A HREF=../lib/adodb/readme.htm#drivers>ADOdb documentation</A> for details)';
$string['auth_dbuser'] = 'Username with read access to the database';