<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbdescription'] = 'Denne metoden bruker en ekstern database for å kontrollere om et gittt brukernavn og passord er gyldig. Hvis kontoen er ny, kan oplysninger fra andre felter også kopieres inn til Moodle.';
$string['auth_dbextrafields'] = 'Disse feltene er valgfrie. Du kan velge å forhåndsutfylle noen brukerfelter i Moodle fra <b>den eksterne databasen</b> som du skriver her.<br /> Hvis du ikke skriver noe her, vil standardverdierne bli brukt.<br /> I alle tilfeller vil brukeren være i stand til å endre disse feltene når de er innlogget.';
$string['auth_dbfieldpass'] = 'Navn på feltet som inneholder passord';
$string['auth_dbfielduser'] = 'Navn på feltet som inneholder brukernavn';
$string['auth_dbhost'] = 'Datamaskinen som er vertsmaskon for databaseserveren';
$string['auth_dbname'] = 'Navnet på selve databasen';
$string['auth_dbpass'] = 'Passord som passer til brukernavnet ovenfor';
$string['auth_dbpasstype'] = 'Angi hvilket format passordfeltet bruker. MD5-kryptering er nyttig for å koble til vanlige nettapplikasjoner som PostNuke';
$string['auth_dbtable'] = 'Navn på tabellen i databasen';
$string['auth_dbtitle'] = 'Bruk en ekstern database';
$string['auth_dbtype'] = 'Typen database (Se <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> for detaljer)';
$string['auth_dbuser'] = 'Brukernavn med lesetilgang til databasen';