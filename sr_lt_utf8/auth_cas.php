<?PHP // $Id$ 
      // auth_cas.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['CASform'] = 'Izbor provere identiteta';
$string['accesCAS'] = 'CAS korisnici';
$string['accesNOCAS'] = 'drugi korisnici';
$string['auth_cas_auth_user_create'] = 'Kreiraj korisnike eksterno';
$string['auth_cas_baseuri'] = 'URI servera (ništa ako ne postoji osnovni URI)<br />Na primer, ako CAS server odgovora na host.domaine.rs/CAS/ onda<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Osnovni URI';
$string['auth_cas_broken_password'] = 'Ne možete da nastavite bez promene svoje lozinke. Međutim, ne postoji dostupna stranica na kojoj to možete da uradite. Molimo vas da kontaktirate Moodle administratora.';
$string['auth_cas_cantconnect'] = 'LDAP deo CAS modula ne može da se poveže sa serverom: $a';
$string['auth_cas_casversion'] = 'Verzija';
$string['auth_cas_changepasswordurl'] = 'URL za promenu lozinke';
$string['auth_cas_create_user'] = 'Uključite ovo ukoliko želite da ubacite u bazu podataka Moodlea korsinike čiji je identitet proveren pomoću CAS-a. Ukoliko ne želite, onda će na sistem moći da se prijave samo korisnici koji već postoje u bazi podataka Moodlea';
$string['auth_cas_create_user_key'] = 'Kreiraj korisnika';
$string['auth_cas_enabled'] = 'Uključite ovo ukoliko želite da koriste CAS proveru identiteta.';
$string['auth_cas_hostname'] = 'Ime računara domaćina na kojem je CAS server <br />tj: host.domain.rs';
$string['auth_cas_hostname_key'] = 'Ime računara';
$string['auth_cas_invalidcaslogin'] = 'Oprostite, Vaša prijava na sistem nije uspela - niste mogli biti autorizovani.';
$string['auth_cas_language'] = 'Izabrani jezik';
$string['auth_cas_language_key'] = 'Jezik';
$string['auth_cas_logincas'] = 'Pristup preko bezbedne konekcije';
$string['auth_cas_logoutcas'] = 'Promenite ovo na \'da\' ukoliko želite da se odjavite sa CAS servera kada prekinete konekciju sa Moodleom.';
$string['auth_cas_logoutcas_key'] = 'Odjava sa CAS servera';
$string['auth_cas_multiauth'] = 'Promenite ovo na \'da\' ukoliko želite da imate višestruku proveru identiteta (CAS + druga provera identiteta)';
$string['auth_cas_multiauth_key'] = 'Višestruka provera identiteta';
$string['auth_cas_port'] = 'Port CAS severa';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Promenite ovo na \'da\' ukoliko koristite CAS y proksi modu.';
$string['auth_cas_proxycas_key'] = 'Proksi mod';
$string['auth_cas_server_settings'] = 'Konfiguracija CAS servera';
$string['auth_cas_text'] = 'Bezbedna konekcija';
$string['auth_cas_use_cas'] = 'Koristi CAS';
$string['auth_cas_version'] = 'Verzija CAS-a';
$string['auth_casdescription'] = 'Ovaj metod koristi CAS (Central Authentication Service) server za proveru identiteta korisnika u tzv. SSO okruženju (Single Sign On environment). Takođe, možete da koristite jednostavu LDAP proveru identiteta. Ukoliko su dato korisničko ime i lozinka ispravni prema CAS-u Moodle kreira nove korisničke podatke u svojoj bazi podataka, uzimajući korisničke adtribute iz LDAP-a ukoliko je neophodno. Prilikom sledeće prijave na sistem provervaju se samo korisničko ime i lozinka.';
$string['auth_casnotinstalled'] = 'Nije moguće koristiti CAS proveru identiteta. PHP LDAP modul nije instaliran.';
$string['auth_castitle'] = 'CAS server (SSO)';

?>
