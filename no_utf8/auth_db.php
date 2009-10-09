<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Kunne ikke kontakte den oppgitte autentiseringsdatabasen';
$string['auth_dbchangepasswordurl_key'] = 'URL for å endre passord';
$string['auth_dbdebugauthdb'] = 'Feilsøk ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Feilsøk ADOdb forbindelsen til ekstern database - bruk bare du får blank side ved pålogging. Bør ikke brukes på produksjonsservere.';
$string['auth_dbdeleteuser'] = 'Slettet bruker $a[0] id $a[1]';
$string['auth_dbdeleteusererror'] = 'Feil ved sletting av bruker $a';
$string['auth_dbdescription'] = 'Denne metoden bruker en ekstern database for å kontrollere om et gittt brukernavn og passord er gyldig. Hvis kontoen er ny, kan oplysninger fra andre felter også kopieres inn til Moodle.';
$string['auth_dbextencoding'] = 'Ekster db koding';
$string['auth_dbextencodinghelp'] = 'Koding brukt i ekstern database';
$string['auth_dbextrafields'] = 'Disse feltene er valgfrie. Du kan velge å forhåndsutfylle noen brukerfelter i Moodle fra <b>den eksterne databasen</b> som du skriver her.<p> Hvis du ikke skriver noe her, vil standardverdierne bli brukt.<p> I alle tilfeller vil brukeren være i stand til å endre disse feltene når de er innlogget.';
$string['auth_dbfieldpass'] = 'Navn på feltet som inneholder passord';
$string['auth_dbfieldpass_key'] = 'Passordfelt';
$string['auth_dbfielduser'] = 'Navn på feltet som inneholder brukernavn';
$string['auth_dbfielduser_key'] = 'Brukernavnfelt';
$string['auth_dbhost'] = 'Datamaskinen som er vertsmaskon for databaseserveren';
$string['auth_dbhost_key'] = 'Vert';
$string['auth_dbinsertuser'] = 'Lagt til bruker $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = 'Feil under innlegging av bruker $a';
$string['auth_dbname'] = 'Navnet på selve databasen';
$string['auth_dbname_key'] = 'DB Navn';
$string['auth_dbpass'] = 'Passord som passer til brukernavnet ovenfor';
$string['auth_dbpass_key'] = 'Passord';
$string['auth_dbpasstype'] = 'Angi hvilket format passordfeltet bruker. MD5-kryptering er nyttig for å koble til vanlige nettapplikasjoner som PostNuke';
$string['auth_dbpasstype_key'] = 'Passordformat';
$string['auth_dbreviveduser'] = 'Gjenopprettet bruker $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'Feil ved gjenoppretting av bruker $a';
$string['auth_dbsetupsql'] = 'SQL setup kommando';
$string['auth_dbsetupsqlhelp'] = 'SQL kommando for spesielt databaseoppsett, ofte brukt for å sette opp kommunikasjons-språk - eksempel for MySQL og PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Fjernet bruker $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'Feil ved fjerning av bruker $a';
$string['auth_dbsybasequoting'] = 'Bruk sybase quotes';
$string['auth_dbsybasequotinghelp'] = 'Sybasemetode ved enkle anførselstegn ved avbrytelse - trengs i Orocle, MS SQL og noen andre databaser. Ikke bruk for MySQL!';
$string['auth_dbtable'] = 'Navn på tabellen i databasen';
$string['auth_dbtable_key'] = 'Tabell';
$string['auth_dbtitle'] = 'Bruk en ekstern database';
$string['auth_dbtype'] = 'Typen database (Se <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> for detaljer)';
$string['auth_dbtype_key'] = 'Database';
$string['auth_dbupdatinguser'] = 'Oppdaterer bruker $a[0] id $a[1]';
$string['auth_dbuser'] = 'Brukernavn med lesetilgang til databasen';
$string['auth_dbuser_key'] = 'DB Bruker';
$string['auth_dbusernotexist'] = 'Kan ikke oppdatere ikke-eksisterende bruker: $a';
$string['auth_dbuserstoadd'] = 'Brukere å legge til: $a';
$string['auth_dbuserstoremove'] = 'Brukere å fjerne: $a';