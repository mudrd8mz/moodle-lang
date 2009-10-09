<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Der blev ikke oprettet forbinelse til den angivne godkendelsesdatabase...';
$string['auth_dbchangepasswordurl_key'] = 'URL til skift af adgangskode';
$string['auth_dbdeleteusererror'] = 'Der opstod en fejl ved sletning af brugeren $a';
$string['auth_dbdescription'] = 'Denne metode bruger en ekstern database for at kontrollere om et givet brugernavn og password er gyldigt. Hvis kontoen er ny, kan oplysninger fra andre felter også kopieres ind i Moodle.';
$string['auth_dbextencoding'] = 'Ekstern db-kodning';
$string['auth_dbextrafields'] = 'Disse felter er valgfri. Du kan vælge at udfylde nogle af de felter Moodle bruger på forhånd fra <b>den eksterne database</b>, som du har specificeret her.<p> Hvis du ikke skriver noget her, vil default værdierne blive brugt.</p><p> I alle tilfælde vil brugeren være i stand til at skrive i alle felterne, når de er logget ind.';
$string['auth_dbfieldpass'] = 'Navn på feltet der indeholder password';
$string['auth_dbfieldpass_key'] = 'Felt til adgangskode';
$string['auth_dbfielduser'] = 'Navnet på feltet der indeholder brugernavne';
$string['auth_dbfielduser_key'] = 'Felt til brugernavn';
$string['auth_dbhost'] = 'Computeren der er vært for databaseserveren.';
$string['auth_dbhost_key'] = 'Vært';
$string['auth_dbinsertuser'] = 'Brugeren $a[0] id $a[1] er indsat';
$string['auth_dbinsertusererror'] = 'Fejl ved indsættelse af brugeren $a';
$string['auth_dbname'] = 'Navnet på databasen';
$string['auth_dbname_key'] = 'DB-navn';
$string['auth_dbpass'] = 'Adgangskode der matcher ovennævnte brugernavn';
$string['auth_dbpass_key'] = 'Adgangskode';
$string['auth_dbpasstype'] = 'Angiv hvilket format password feltet anvender. MD5 kryptering er anvendeligt når der samarbejdes med almindelige webapplikationer som PostNuke eller PHPnuke';
$string['auth_dbpasstype_key'] = 'Kodeformat';
$string['auth_dbreviveduser'] = 'Brugeren $a[0] id $a[1] genaktiveret';
$string['auth_dbrevivedusererror'] = 'Fejl ved genaktivering af brugeren $a';
$string['auth_dbsetupsql'] = 'SQL setup kommando';
$string['auth_dbsuspenduser'] = 'Suspenderede brugeren $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'Fejl ved suspendering af brugeren $a';
$string['auth_dbtable'] = 'Navnet på tabellen i databasen';
$string['auth_dbtable_key'] = 'Tabel';
$string['auth_dbtitle'] = 'Brug en ekstern database';
$string['auth_dbtype'] = 'Database typen(Se <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> for detaljer)';
$string['auth_dbtype_key'] = 'Database';
$string['auth_dbupdatinguser'] = 'Opdaterer brugeren $a[0] id $a[1]';
$string['auth_dbuser'] = 'Brugernavn med læserrettigheder til databasen';
$string['auth_dbuser_key'] = 'DB-bruger';
$string['auth_dbusernotexist'] = 'Kan ikke opdatere en bruger der ikke eksisterer: $a';