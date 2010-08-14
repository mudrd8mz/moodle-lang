<?PHP // $Id$ 
      // auth_db.php - created with Moodle 1.9.9 (Build: 20100609) (2007101590)


$string['auth_dbcantconnect'] = 'Nije bilo moguće povetati se navedenom bazom podataka za proveru identiteta...';
$string['auth_dbchangepasswordurl_key'] = 'URL za promenu lozinke';
$string['auth_dbdebugauthdb'] = 'Otklonite ADOdb grešku';
$string['auth_dbdebugauthdbhelp'] = 'Otklonite grešku u ADOdb konekciji sa eksternom bazom podataka - upotrebite u situaciji kada tokom prijave na sistem dobijate praznu stranicu. Nije pogodno za sajtove na kojima ima aktivnih kurseva.';
$string['auth_dbdeleteuser'] = 'Obrisani korisnik $a[0] id $a[1]';
$string['auth_dbdeleteusererror'] = 'Greška prilikom brisanja korisnika $a';
$string['auth_dbdescription'] = 'Ovaj metod koristi eksterne tabele baze podtaka ѕa proveru da li su dato korisničko ime i lozinka ispravni. Ukoliko je nalog nov, onda informacija iz drugih ponja mogu biti prekopirane u Moodleu.';
$string['auth_dbextencoding'] = 'Kordni raspored eksterne baze podataka';
$string['auth_dbextencodinghelp'] = 'Kodni raspored korišćen u eksternoj bazi podataka';
$string['auth_dbextrafields'] = 'Ova ponja su opciona. Možete da izaberete da prethodno popunite neka Moodle korisnička polja sa informacijam iz <b>polja eksterne baza podataka</b> koja ovde navedete.<p>Ukoliko ova polja ostavite prazna, biće korišćene podrazumevane vrednosti.</p><p>U svakom slučaju korisni će moći da uređuju sva ova ponja nakon što se prijave na sistem.</p>';
$string['auth_dbfieldpass'] = 'Ime polja koje sadrži lozinke';
$string['auth_dbfieldpass_key'] = 'Polje lozinke';
$string['auth_dbfielduser'] = 'Ime polja koje sadrži korisnička imena';
$string['auth_dbfielduser_key'] = 'Polje korisničkog imena';
$string['auth_dbhost'] = 'Ovaj računar je domaćin servera baze podataka.';
$string['auth_dbhost_key'] = 'Računar domaćin';
$string['auth_dbinsertuser'] = 'Ubačeni korisnik $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = 'Greška prilikom ubacivanja korisnika $a';
$string['auth_dbname'] = 'Ime same baze podataka';
$string['auth_dbname_key'] = 'DB Ime';
$string['auth_dbpass'] = 'Lozinka se poklapa sa gornjim korisničkim imenom';
$string['auth_dbpass_key'] = 'Lozinka';
$string['auth_dbpasstype'] = '<p>Navedite format koje koristi polje za lozinku. MD5 \"hashing\" je koristan ѕa povezivanje sa drugim  Web aplikacijama kao što je PostNuke.</p> <p>Upotrebite \'internal\' ukoliko želite da eksterna baza podataka upravlja korisničkim imenima &amp; elektronskim adresaama, a Moodle lozinkama. Ako koristite format \'internal\', <i>morate</i> da obezbedite polja popunjena elektronskim adresama u eksternoj bazi podataka. Takođe, morate da izvršite komande admin/cron.php i auth/db/auth_db_sync_users.php. Moodle će novim korisnicima poslati e-poruku sa privremenom lozinkom.</p>';
$string['auth_dbpasstype_key'] = 'Format lozinke';
$string['auth_dbreviveduser'] = 'Ponovo aktivirani korisnik $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'Greška u ponovnom aktiviranju korisnika $a';
$string['auth_dbsetupsql'] = 'SQL komanda postavaljanja';
$string['auth_dbsetupsqlhelp'] = 'SQL komanda za posebno podešavanje baza podtaka, često korišćena za podešavanje kodnog raspored - na primer za MySQL i PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Suspendovani korisnik $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'Greška prilikom suspendovanja korisnika $a';
$string['auth_dbsybasequoting'] = 'Koristi navodnike Sybase baze podataka';
$string['auth_dbsybasequotinghelp'] = 'Prevladavanje jednostrukih navodnika u Sybase stilu - potrebno za Oracle, MS SQL i neke druge baze podataka. Ne koristiti za MySQL!';
$string['auth_dbtable'] = 'Ime tabele u bazi podataka';
$string['auth_dbtable_key'] = 'Tabela';
$string['auth_dbtitle'] = 'Eksterna baza podataka';
$string['auth_dbtype'] = 'Tip baze podataka (Pogledaj <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentacija</a>)';
$string['auth_dbtype_key'] = 'Baza podataka';
$string['auth_dbupdatinguser'] = 'Ažuriranje korisnika $a[0] id $a[1]';
$string['auth_dbuser'] = 'Korisničko ime sa pravom čitanja baze podataka';
$string['auth_dbuser_key'] = 'DB korsnik';
$string['auth_dbusernotexist'] = 'Nije moguće ažurirati nepostojećeg korisnika: $a';
$string['auth_dbuserstoadd'] = 'Korisničkih unosa za dodavanje: $a';
$string['auth_dbuserstoremove'] = 'Korisničkih unosa za uklanjanje: $a';

?>
