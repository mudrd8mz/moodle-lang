<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Nie można połączyć się z podaną bazą danych';
$string['auth_dbchangepasswordurl_key'] = 'URL strony do zmiany hasła użytkownika.';
$string['auth_dbdeleteusererror'] = 'Wystąpił błąd podczas usuwania użytkownika $a';
$string['auth_dbdescription'] = 'Metoda ta wykorzystuje tabelę zewnętrznej bazy danych dla sprawdzenia czy podana nazwa użytkownika i hasło są poprawne. W przypadku nowego konta, informacje z innych pól również mogą zostać skopiowane do Moodle.';
$string['auth_dbextrafields'] = 'Te pola są opcjonalne. Możesz wstępnie wypełnić niektóre pola dotyczące użytkownika informacją z <b>pól zewnętrznej bazy danych</b>, które tutaj określasz. <br />Jeżeli nic w tym miejscu nie wpiszesz, użyte zostaną wartości domyślne. <br /> W obu przypadkach, użytkownik będzie mógł dokonać edycji tych pól po zalogowaniu';
$string['auth_dbfieldpass'] = 'Nazwa pola zawierającego hasła';
$string['auth_dbfieldpass_key'] = 'Pole hasła';
$string['auth_dbfielduser'] = 'Nazwa pola zawierającego nazwy użytkowników';
$string['auth_dbfielduser_key'] = 'Pole nazwy użytkownika';
$string['auth_dbhost'] = 'Komputer będący hostem serwera bazy danych.';
$string['auth_dbname'] = 'Nazwa bazy danych';
$string['auth_dbpass'] = 'Hasło dla powyższej nazwy użytkownika';
$string['auth_dbpasstype'] = 'Określ format stosowany przez pole hasła. Kodowanie MD5 przydatne jest przy łączeniu się z innymi popularnymi aplikacjami sieci WWW, takimi jak PostNuke';
$string['auth_dbpasstype_key'] = 'Format hasła';
$string['auth_dbtable'] = 'Nazwa tabeli w bazie danych';
$string['auth_dbtitle'] = 'Korzystaj z zewnętrznej bazy danych';
$string['auth_dbtype'] = 'Rodzaj bazy danych (szczegółowe informacje: <a href\"=../lib/adodb/readme.htm#drivers\">ADOdb documentation</a>';
$string['auth_dbtype_key'] = 'Baza danych';
$string['auth_dbuser'] = 'Nazwa użytkownika mającego prawo dostępu do odczytu z bazy';