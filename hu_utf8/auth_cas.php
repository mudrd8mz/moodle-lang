<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Hitelesítési választási lehetőség';
$string['accesCAS'] = 'CAS-felhasználók';
$string['accesNOCAS'] = 'egyéb felhasználók';
$string['auth_cas_auth_user_create'] = 'Felhasználók létrehozása kívülről';
$string['auth_cas_baseuri'] = 'A szerver URI-ja (ha nincs baseUri, akkor semmi)<br />Ha például a CAS-szerver a host.domaine.hu/CAS/-ra válaszol, akkor cas_baseuri = CAS/.';
$string['auth_cas_baseuri_key'] = 'Alap-URI';
$string['auth_cas_broken_password'] = 'Jelszava módosítása nélkül nem tud továbblépni, ugyanakkor nincs a módosításhoz elérhető oldal. Forduljon a Moodle-rendszergazdához.';
$string['auth_cas_cantconnect'] = 'A CAS-modul LDAP-része nem tud a szerverre kapcsolódni: $a';
$string['auth_cas_casversion'] = 'Verzió';
$string['auth_cas_changepasswordurl'] = 'Jelszó-módosítási URL';
$string['auth_cas_create_user'] = 'Kapcsolja be, ha CAS által hitelesített felhasználókat kíván beszúrni a Moodle-adatbázisba. Ha nem, akkor csak a Moodle adatbázisában már szereplő felhasználók jelentkezhetnek be.';
$string['auth_cas_create_user_key'] = 'Felhasználó létrehozása';
$string['auth_cas_enabled'] = 'Kapcsolja be, ha CAS-hitelesítést kíván használni.';
$string['auth_cas_hostname'] = 'A CAS-szerver gazdagépneve <br />pl.: host.domain.hu';
$string['auth_cas_hostname_key'] = 'Gazdagép neve';
$string['auth_cas_invalidcaslogin'] = 'Bejelentkezése nem sikerült, nem kapott rá felhatalmazást.';
$string['auth_cas_language'] = 'Kiválasztott nyelv';
$string['auth_cas_language_key'] = 'Nyelv';
$string['auth_cas_logincas'] = 'Biztonságos hozzáférésű csatlakozás';
$string['auth_cas_logoutcas'] = 'Állítsa igenre, ha a Moodle-ról való lecsatlakozás során kilép a CAS-ból.';
$string['auth_cas_logoutcas_key'] = 'Kijelentkezés a CAS-ból';
$string['auth_cas_multiauth'] = 'Állítsa igenre, ha többszörös hitelesítést (CAS + egyéb hitelesítés) kíván használni.';
$string['auth_cas_multiauth_key'] = 'Többszörös hitelesítés';
$string['auth_cas_port'] = 'A CAS-szerver portja';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Állítsa igenre, ha proxy-üzemmódban CASint használ.';
$string['auth_cas_proxycas_key'] = 'Proxy-üzemmód';
$string['auth_cas_server_settings'] = 'A CAS-szerver beállítása';
$string['auth_cas_text'] = 'Biztonságos csatlakozás';
$string['auth_cas_use_cas'] = 'CAS használata';
$string['auth_cas_version'] = 'A CAS verziója';
$string['auth_casdescription'] = 'Ez a módszer egy CAS-szervert (központi hitelesítési szolgáltatást) használ arra, hogy a felhasználókat egyszeri bejelentkezési (SSO) környezetben hitelesítse. Használhat egyszerű LDAP-hitelesítést is. Ha a CAS szerint a felhasználónév és a jelszó érvényes, akkor a Moodle létrehoz egy új felhasználót az adatbázisában, szükség esetén a felhasználói jellemzőket az LDAP-ból veszi. A következő bejelentkezéskor már csak a felhasználónév és a jelszó ellenőrzésére kerül sor.';
$string['auth_casnotinstalled'] = 'Nem használható a CAS-hitelesítés. A PHP LDAP-modulja nincs telepítve.';
$string['auth_castitle'] = 'CAS-szerver (SSO)';