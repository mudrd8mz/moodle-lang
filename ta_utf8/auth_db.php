<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbdescription'] = 'This method uses an external database table to check whether a given username and password is valid.  If the account is a new one, then information from other fields may also be copied across into Moodle.';
$string['auth_dbextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <b>external database fields</b> that you specify here. <p>If you leave these blank, then defaults will be used.</p><p>In either case, the user will be able to edit all of these fields after they log in.</p>';
$string['auth_dbfieldpass'] = 'கடவுச்சொல் அடங்கியுள்ள புலத்தின் பெயர்';
$string['auth_dbfielduser'] = 'பயனாளர் பெயர் அடங்கியுள்ள புலத்தின் பெயர்';
$string['auth_dbhost'] = 'The computer hosting the database server.';
$string['auth_dbname'] = 'தரவுத்தளத்தின் பெயர் அதனுடையதாகவே';
$string['auth_dbpass'] = 'மேலுள்ள பயனாளர் பெயருக்கு பொருத்தமான கடவுச்சொல்';
$string['auth_dbpasstype'] = '<p>Specify the format that the password field is using. MD5 encryption is useful for connecting to other common web applications like PostNuke.</p> <p>Use \'internal\' if you want to the external DB to manage usernames & email addresses, but Moodle to manage passwords. If you use \'internal\', you <i>must</i> provide a populated email address field in the external DB, and you must execute admin/cron.php regularly. Moodle will send an email to new users with a temporary password.</p>';
$string['auth_dbtable'] = 'தகவல்தளத்தின் அட்டவணைப்பெயர்';
$string['auth_dbtitle'] = 'வெளிப்புற தகவல்தளத்தைப் பயன்படுத்துக';
$string['auth_dbtype'] = 'The database type (See the <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> for details)';
$string['auth_dbuser'] = 'Username with read access to the database';