<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbdescription'] = 'Ovaj metod koristi tabelu vanjske baze podataka za provjeru da li su dodijeljeno korisničko ime i lozinka ispravni. Ako je nalog nov, onda informacija iz ostalih polja može biti kopirana u Moodle.';
$string['auth_dbextrafields'] = 'Ova polja su po izboru. Možete izabrati da prednapunite neka Moodle korisnička polja sa informacijom iz <b>vanjska polja baze podataka</b> koja naznačite ovdje.  <br />Ako ih ostavite prazne, onda će biti korištene podrazumjevane.<br /> U svakom slučaju, korisnik će biti u mogućnosti da uređuje sva polja nakon prijavljivanja.';
$string['auth_dbfieldpass'] = 'Ime polja koje sadrži lozinke';
$string['auth_dbfielduser'] = 'Ime polja koje sadrži korisnička imena';
$string['auth_dbhost'] = 'Računar koji hostuje server baze podataka.';
$string['auth_dbname'] = 'Ime baze podataka';
$string['auth_dbpass'] = 'Lozinka koja odgovara gore navedenom korisničkom imenu';
$string['auth_dbpasstype'] = 'Zadajte format koje koristi polje za lozinku. MD5 šifrovanje je korisno prilikom povezivanja na ostale opšte mrežne aplikacije kao što je PostNuke.';
$string['auth_dbtable'] = 'Ime tabele u bazi podataka';
$string['auth_dbtitle'] = 'Upotrijebite vanjsku bazu podataka';
$string['auth_dbtype'] = 'Tip baze podataka (Pogledajte <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentacija</a> za detalje)';
$string['auth_dbuser'] = 'Korisničko ime sa pristupom čitanju korisničke baze';