<?PHP // $Id$ 
      // auth_cas.php - created with Moodle 1.9.3+ (Build: 20081217) (2007101532.11)


$string['CASform'] = 'Hitelesítés kiválasztása';
$string['accesCAS'] = 'CAS-felhasználók';
$string['accesNOCAS'] = 'egyéb felhasználók';
$string['auth_cas_auth_user_create'] = 'Felhasználók létrehozáse kívülről';
$string['auth_cas_baseuri'] = 'A szerverhez tartozó URI (üres, ha nem baseUri)<br />Ha pl. a CAS-szerver a host.domaine.fr/CAS/-ra válaszol, akkor<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Alap-URI';
$string['auth_cas_broken_password'] = 'Jelszava módosítása nélkül nem léphet tovább, ehhez viszont nincs elérhető weboldal. Forduljon a Moodle rendszergazdájához.';
$string['auth_cas_cantconnect'] = 'A CAS-modul LDAP-része nem tud a(z) $a szerverhez csatlakozni.';
$string['auth_cas_casversion'] = 'Verzió';
$string['auth_cas_changepasswordurl'] = 'Jelszó-módosítási URL';
$string['auth_cas_create_user'] = 'Kapcsolja be, ha CAS által hitelesített felhasználókat kíván a Moodle adatbázisába fölvenni.';
$string['auth_cas_create_user_key'] = 'Felhasználó létrehozása';
$string['auth_cas_enabled'] = 'Kapcsolja be, ha CAS-hitelesítést kíván használni.';
$string['auth_cas_hostname'] = 'A CAS-szerver gazdagépneve, <br />pl. host.domain.fr';
$string['auth_cas_hostname_key'] = 'Gazdagépnév';
$string['auth_cas_invalidcaslogin'] = 'Bejelentkezése sikertelen - nem kapott jogosultságot.';
$string['auth_cas_language'] = 'Nyelv kiválasztása';
$string['auth_cas_language_key'] = 'Nyelv';
$string['auth_cas_logincas'] = 'Biztonságos kapcsolódás';
$string['auth_cas_logoutcas'] = 'Állítsa \'igen\'-re, ha a Moodle lekapcsolásakor a CAS-ból szeretne kijelentkezni.';
$string['auth_cas_logoutcas_key'] = 'Kijelentkezés a CAS-ból';
$string['auth_cas_multiauth'] = 'Állítsa \'igen\'-re, ha többszörös (CAS + egyéb) hitelesítést szeretne.';
$string['auth_cas_multiauth_key'] = 'Többszörös hitelesítés';
$string['auth_cas_port'] = 'A CAS-szerver portja';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Állítsa \'igen\'-re, ha CASin proxy üzemmódot használ';
$string['auth_cas_proxycas_key'] = 'Proxy üzemmód';
$string['auth_cas_server_settings'] = 'A CAS-szerver beállítása';
$string['auth_cas_text'] = 'Biztonságos kapcsolat';
$string['auth_cas_use_cas'] = 'A CAS használata';
$string['auth_cas_version'] = 'A CAS verziója';
$string['auth_casdescription'] = 'Ez a módszer CAS-szervert (központi hitelesítési szolgáltatást) használ felhasználók egyszeri bejelentkezési környezetben (SSO) való hitelesítésére. Használhat egyszerű LDAP-hitelesítést is. Ha a megadott felhasználónév és jelszó a CAS szerint érvényes, akkor a Moodle új felhasználót hoz létre adatbázisában, melyhez szükség esetén az LDAP-ból veszi a felhasználói tulajdonságokat. A további bejelentkezések alkalmával már csak a felhasználónév és a jelszó ellenőrzésére kerül sor.';
$string['auth_casnotinstalled'] = 'A CAS-hitelesítés nem használható. A PHP LDAP-modulja nincs telepítve.';
$string['auth_castitle'] = 'CAS-szerver (SSO)';

?>
