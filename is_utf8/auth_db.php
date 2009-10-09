<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbdebugauthdb'] = 'Villukemba ADOdb';
$string['auth_dbdeleteusererror'] = 'Villa kom upp þegar reynt var að fjarlægja notana $a';
$string['auth_dbdescription'] = 'This method uses an external database table to check whether a given username and password is valid.  If the account is a new one, then information from other fields may also be copied across into Moodle.';
$string['auth_dbextencodinghelp'] = 'Kótun á útværum gagnagrunni';
$string['auth_dbextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <B>external database fields</B> that you specify here. <P>If you leave these blank, then defaults will be used.<P>In either case, the user will be able to edit all of these fields after they log in.';
$string['auth_dbfieldpass'] = 'Nafnið á svæðinu sem geymir lykilorð';
$string['auth_dbfieldpass_key'] = 'Gagnareitur lykilorðs';
$string['auth_dbfielduser'] = 'Nafnið á gagnareitnum sem geymir notendanöfn';
$string['auth_dbfielduser_key'] = 'Gagnareitur notandanafns';
$string['auth_dbhost'] = 'Tölvan sem hýsir gagnagrunnsþjóninn.';
$string['auth_dbhost_key'] = 'Hýsitölva';
$string['auth_dbinsertusererror'] = 'Villa kom upp við innsetningu á notandanum $a';
$string['auth_dbname'] = 'Nafn á sjálfum gagnagrunninum';
$string['auth_dbname_key'] = 'Nafn á gagnagrunni';
$string['auth_dbpass'] = 'Password matching the above username';
$string['auth_dbpass_key'] = 'Lykilorð';
$string['auth_dbpasstype'] = 'Specify the format that the password field is using.  MD5 encryption is useful for connecting to other common web applications like PostNuke';
$string['auth_dbrevivedusererror'] = 'Villa kom upp þegar reynta var að sækja notanda $a';
$string['auth_dbtable'] = 'Nafnið á töflunni í gagnagrunninum';
$string['auth_dbtable_key'] = 'Tafla';
$string['auth_dbtitle'] = 'Nota utanaðkomandi gagnagrunn';
$string['auth_dbtype'] = 'The database type (See the <A HREF=../lib/adodb/readme.htm#drivers>ADOdb documentation</A> for details)';
$string['auth_dbtype_key'] = 'Gagnagrunnur';
$string['auth_dbuser'] = 'Notandanafn sem hefur ritheimild í gagnagrunninn';
$string['auth_dbuser_key'] = 'Gagnagrunnsnotandi';