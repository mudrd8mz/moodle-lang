<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'විශේෂණය තුල සත්‍යාපන දත්ත සමුදායට සම්බන්ධ විය නොහැක.';
$string['auth_dbchangepasswordurl_key'] = 'මුරපද වෙනස් කිරීමට URL';
$string['auth_dbdebugauthdb'] = 'ADO db නිදොසන්න';
$string['auth_dbdebugauthdbhelp'] = 'බාහිර දත්ත සමුදායට ADO db සබැඳුම නිදොසන්න.';
$string['auth_dbdeleteuser'] = 'මකන ලද පරිශිලක $a[O] id $a [1]';
$string['auth_dbdeleteusererror'] = '$a පරිශීලක මකා දැමීමේදී දෝෂයක්';
$string['auth_dbdescription'] = 'දී ඇති පරිශිලක නම් සහ මුරපදය වලංගුද යැයි පරික්ෂා කිරිමට මෙම ක්‍රමය මගින් බාහිර දත්ත සමුදා වගුවක් භාවිතා කරයි. ගිණුම නව එකක් නම් වෙනත් කේෂ්ත්‍ර වල ඇති තොරතුරුද moodle වෙත පිටපත් කරනු ලබයි.';
$string['auth_dbextencoding'] = 'බාහිර db කේතනය';
$string['auth_dbextencodinghelp'] = 'බාහිර දත්ත සමුදායේ භාවිතා කරන ලද කේතනය';
$string['auth_dbextrafields'] = 'මේ කේෂ්ත්‍ර විකල්ප වේ.ඔබ මෙහි විශේෂණය කරන ලද <b> බාහිර දත්ත සමුදා ක්ෂේත්‍ර </b> තොරතුරු සහිත moodle පරිශිලක ක්ෂේත්‍ර පෙර පුර්ණයට ඔබට තෝරා ගත හැක <p> ඔබ මේවා  හිස්ව තැබුවහොත් පෙරනිමියන් භාවිතා වනු ඇත.</p> <p> අවස්ථා දෙකේදීම ඔවුන් login වීමෙන් පසු මේ සියළුම ක්ෂේත්‍ර සැකසීමට පරිශීලකට හැකිවනු ඇත.</p>';
$string['auth_dbfieldpass'] = 'මුරපදය අඩංගු ක්ෂේත්‍රයේ නම';
$string['auth_dbfieldpass_key'] = 'මුරපද ක්ෂේත්‍ර';
$string['auth_dbfielduser'] = 'පරිශිලක නම් අඩංගු ක්ෂේත්‍රයේ නම්';
$string['auth_dbfielduser_key'] = 'පරිශිලක නම් කේෂ්ත්‍ර';
$string['auth_dbhost'] = 'දත්ත සමුදා සේවාදායකට සත්කාරක පරිගණය';
$string['auth_dbhost_key'] = 'සත්කාරකය';
$string['auth_dbinsertuser'] = 'ඇතුලත් කළ පරිශිලක $a[O] id $a [1]';
$string['auth_dbinsertusererror'] = '$a පරිශිලක ඇතුලත් කිරීමේ දෝෂයක්';
$string['auth_dbname'] = 'දත්ත සමුදායේම නම';
$string['auth_dbname_key'] = 'DB නම';
$string['auth_dbpass'] = 'ඉහත පරිශිලක නමට ගැලපෙන මුරපදය';
$string['auth_dbpass_key'] = 'මුරපදය';
$string['auth_dbpasstype'] = '<p> මුරපදය ක්ෂේත්‍රය භාවිතා කරන හැඩතලය විශේෂණය කරන්න.Post+Nuke වැනි වෙනත් පොදු වෙබ් යෙදුම් සම්බන්ධ කිරීම සඳහා MD5 පූරකය ප්‍රයෝජනවත් වේ. </p><p> පරිශිලක නම් සහ ඊ-තැපැල් ලිපින කලමණාකරනයට බාහිර DB අවශ්‍ය නම් \"internal\" භාවිතා කරන්න. නමුත් මුරපද කළමණාකරනයට  moodle: ඔබ\'internal\' භාවිතා කලේ නම් බාහිර DB හි ඇති populated ඊ-තැපැල් ලිපින ක්ෂේත්‍රය සැපයිය යුතුයි වන අතර ඔබ admin/cron.php සහ auth/ab/auth_db_sync_users.php යන දෙකට ක්‍රමවත්ව ක්‍රියාත්මක කල  යුතුයි.Moodle මගින් තාවකාලික මුරපදයක් සහිත  ඊ-තැපෑලක් නව පරිශිලකයන්ට යවනු ඇත.';
$string['auth_dbpasstype_key'] = 'මුරපද හැඩතලය';
$string['auth_dbreviveduser'] = 'නැවත ප්‍රාණවත් කල පරිශිලක $a[O]id $a [1]';
$string['auth_dbrevivedusererror'] = '$a පරිශිලක නැවත ප්‍රාණවත් කිරීමේදී දෝෂයක්';
$string['auth_dbsetupsql'] = 'SQL පිහිටු වීමේ විධානය';
$string['auth_dbsetupsqlhelp'] = 'සන්නිවේදන කේතනය පිහිටුවීමට නිතරම භාවිතා කරන විශේෂ දත්ත සමුදා පිහිටුවීම සඳහා වූ SQL විධාන
උදා:MySQL සහ pstgreSQL සඳහා : <em> නම් පිහිටුවිම \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'අත්හිටවූ පරිශිලක $a[O]id $a [1]';
$string['auth_dbsuspendusererror'] = '$a පරිශිලක අත්හිටවීමේදී දෝෂයක්';
$string['auth_dbsybasequoting'] = 'සයිබේස් උධෘත භාවිත කරන්න.';
$string['auth_dbsybasequotinghelp'] = 'Oracal,MSQL සහ සමහර වෙනත් දත්ත සමුදායන් සඳහා සයිබේස් විලාශයේ තනි උධෘත මගහැරීම අවශ්‍ය වේ.MySQL සඳහා භාවිතා කරන්න එපා';
$string['auth_dbtable'] = 'දත්ත සමුදායේ ඇති වගුවේ නම';
$string['auth_dbtable_key'] = 'වගුව';
$string['auth_dbtitle'] = 'බාහිර දත්ත සමුදාය';
$string['auth_dbtype'] = 'දත්ත සමුදායේ වර්ගය (තොරතුරු සඳහා <a href=\"./lib/adodb/readme.htm#drivers\">ADOdb ප්‍රලේඛනය (/a)බලන්න)';
$string['auth_dbtype_key'] = 'දත්ත සමුදාය';
$string['auth_dbupdatinguser'] = '$a[O]id $a [1] පරිශිලක යාවත්කාලීන කිරීම';
$string['auth_dbuser'] = 'දත්ත සමුදාය කියවීමේ ප්‍රවේශය ඇති පරිශිලක නම.';
$string['auth_dbuser_key'] = 'DB පරිශිලක';
$string['auth_dbusernotexist'] = '$a නොපවතින පරිශිලකයා යාවත්කාලීන කල නොහැක.';
$string['auth_dbuserstoadd'] = '$a එකතු කිරීමට පරිශිලක සටහන්';
$string['auth_dbuserstoremove'] = '$a ඉවත් කිරීමට පරිශිලක සටහන්';