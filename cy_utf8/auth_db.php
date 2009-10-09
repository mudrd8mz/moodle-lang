<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Doedd dim modd cysylltu â\'r gronfa ddata dilysu a bennwyd...';
$string['auth_dbchangepasswordurl_key'] = 'URL newid cyfrinair';
$string['auth_dbdebugauthdb'] = 'Dadfygio ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Dadfygio\'r cysylltiad ADOdb â\'r gronfa ddata allanol - defnyddiwch hwn pan gewch dudalen wag wrth fewngofnodi. Nid yw hyn yn addas ar gyfer safleoedd cynhyrchu.';
$string['auth_dbdeleteuser'] = 'Wedi dileu defnyddiwr $a[0] id $a[1]';
$string['auth_dbdeleteusererror'] = 'Gwall wrth ddileu defnyddiwr $a';
$string['auth_dbdescription'] = 'Mae\'r dull hwn yn defnyddio tabl cronfa ddata allanol i wirio a yw enw defnyddiwr a chyfrinair a roddir yn ddilys. Os yw\'r cyfrif yn un newydd, gellir copïo gwybodaeth o feysydd eraill drosodd i Moodle hefyd.';
$string['auth_dbextencoding'] = 'Amgodio cronfa ddata allanol';
$string['auth_dbextencodinghelp'] = 'Amgodio a ddefnyddir mewn cronfa ddata allanol';
$string['auth_dbextrafields'] = 'Mae\'r meysydd hyn yn ddewisol.  Gallwch ddewis llenwi rhai meysydd Moodle ymlaen llaw gyda gwybodaeth o\'r <b>meysydd cronfa ddata allanol</b> a bennwch yma. <p>Os gadewch y rhain yn wag, defnyddir y rhagosodiadau.</p><p>Yn y naill achos a\'r llall, bydd y defnyddiwr yn gallu golygu\'r holl feysydd hyn ar ôl mewngofnodi.</p>';
$string['auth_dbfieldpass'] = 'Enw\'r maes sy\'n cynnwys cyfrineiriau';
$string['auth_dbfieldpass_key'] = 'Maes cyfrinair';
$string['auth_dbfielduser'] = 'Enw\'r maes sy\'n cynnwys enwau defnyddwyr';
$string['auth_dbfielduser_key'] = 'Maes enw defnyddiwr';
$string['auth_dbhost'] = 'Y cyfrifiadur sy\'n westeiwr i weinydd y gronfa ddata.';
$string['auth_dbhost_key'] = 'Gwesteiwr';
$string['auth_dbinsertuser'] = 'Wedi mewnosod defnyddiwr $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = 'Gwall wrth fewnosod defnyddiwr $a';
$string['auth_dbname'] = 'Enw\'r gronfa ddata ei hun';
$string['auth_dbname_key'] = 'Enw Cronfa Ddata';
$string['auth_dbpass'] = 'Cyfrinair yn cyfateb i\'r enw defnyddiwr uchod';
$string['auth_dbpass_key'] = 'Cyfrinair';
$string['auth_dbpasstype'] = '<p>Nodwch y fformat y mae\'r maes cyfrinair yn ei ddefnyddio. Mae stwnsio MD5 yn ddefnyddiol er mwyn cysylltu â rhaglenni gwe cyffredin eraill megis PostNuke.</p> <p>Defnyddiwch \'mewnol\' os ydych chi am i\'r gronfa ddata allanol reoli enwau defnyddwyr &amp; cyfeiriadau e-bost, ond am i Moodle reoli cyfrineiriau. Os defnyddiwch \'mewnol\', <i>rhaid</i> i chi lenwi\'r maes cyfeiriad e-bost yn y gronfa ddata allanol, a rhaid i chi weithredu admin/cron.php ac auth/db/auth_db_sync_users.php yn rheolaidd. Bydd Moodle yn anfon neges e-bost at ddefnyddwyr newydd gyda chyfrinair dros dro.</p>';
$string['auth_dbpasstype_key'] = 'Fformat cyfrinair';
$string['auth_dbreviveduser'] = 'Wedi adfer defnyddiwr $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'Gwall wrth adfer defnyddiwr $a';
$string['auth_dbsetupsql'] = 'Gorchymyn cysodi SQL';
$string['auth_dbsetupsqlhelp'] = 'Gorchymyn SQL i drefnu cronfa ddata arbennig, defnyddir hwn yn aml i drefnu amgodio cyfathrebu - er enghraifft ar gyfer MySQL a PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Wedi gwahardd y defnyddiwr $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'Gwall wrth wahardd y defnyddiwr $a';
$string['auth_dbsybasequoting'] = 'Defnyddio dyfyniadau sybase';
$string['auth_dbsybasequotinghelp'] = 'Dyfyniad sengl math sybase yn dianc - mae ei angen ar gyfer cronfeydd data Oracle, MS SQL a rhai mathau eraill. Peidiwch â\'i ddefnyddio ar gyfer MySQL!';
$string['auth_dbtable'] = 'Enw\'r tabl yn y gronfa ddata';
$string['auth_dbtable_key'] = 'Tabl';
$string['auth_dbtitle'] = 'Cronfa ddata allanol';
$string['auth_dbtype'] = 'Math o gronfa ddata (Gweler y <a href=\"../lib/adodb/readme.htm#drivers\">dogfennau ADOdb</a> am fwy o fanylion)';
$string['auth_dbtype_key'] = 'Cronfa ddata';
$string['auth_dbupdatinguser'] = 'Wrthi\'n diweddaru\'r defnyddiwr $a[0] id $a[1]';
$string['auth_dbuser'] = 'Enw defnyddiwr gyda mynediad darllen i\'r gronfa ddata';
$string['auth_dbuser_key'] = 'Defnyddiwr Cronfa Ddata';
$string['auth_dbusernotexist'] = 'Does dim modd diweddaru defnyddiwr nad yw\'n bodoli: $a';
$string['auth_dbuserstoadd'] = 'Cofnodion defnyddwyr i\'w hychwanegu: $a';
$string['auth_dbuserstoremove'] = 'Cofnodion defnyddwyr i\'w dileu: $a';