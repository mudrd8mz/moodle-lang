<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Izbira avtentikacije';
$string['accesCAS'] = 'Uporabniki CAS';
$string['accesNOCAS'] = 'Drugi uporabniki';
$string['auth_cas_auth_user_create'] = 'Zunanje tvorjenje uporabnikov';
$string['auth_cas_baseuri'] = 'URI strežnika (nič, če ni baseUri)<br />Na primer, če se strežnik CAS odziva na gostitelj.domena.si/CAS/ potem<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = 'Za nadaljevanje morate spremeniti geslo, vendar pa ni na voljo strani, kjer bi to lahko naredili. Prosimo, stopite v stik z vašim Moodle administratorjem.';
$string['auth_cas_cantconnect'] = 'LDAP del modula CAS se ne more povezati s strežnikom: $a';
$string['auth_cas_casversion'] = 'Različica';
$string['auth_cas_changepasswordurl'] = 'URL za spremembo gesla';
$string['auth_cas_create_user'] = 'Če želite vstaviti CAS preverjene uporabnike v podatkovno zbirko Moodle, to vključite. Sicer se bodo lahko prijavili samo uporabniki, ki že obstajajo v podatkovni zbirki Moodle.';
$string['auth_cas_create_user_key'] = 'Naredi uporabnika';
$string['auth_cas_enabled'] = 'Če želite uporabljati preverjanje pristnosti CAS, to vključite.';
$string['auth_cas_hostname'] = 'Ime gostitelja strežnika CAS <br />npr.: gostitelj.domena.si';
$string['auth_cas_hostname_key'] = 'Strežnik';
$string['auth_cas_invalidcaslogin'] = 'Oprostite, vaša prijava je spodletela - ne morete se prijaviti';
$string['auth_cas_language'] = 'Izbran jezik';
$string['auth_cas_language_key'] = 'Jezik';
$string['auth_cas_logincas'] = 'Dostop z varno povezavo';
$string['auth_cas_logoutcas'] = 'Nastavite \"Da\", če se želite ob odjavi iz Moodle odjaviti tudi iz CAS.';
$string['auth_cas_logoutcas_key'] = 'Odjava CAS';
$string['auth_cas_multiauth'] = 'Nastavite \"Da\", če želite uporabljati multi-avtentikacijo (CAS + druga vrsta avtentikacije)';
$string['auth_cas_multiauth_key'] = 'Multi-avtentikacija';
$string['auth_cas_port'] = 'Vrata strežnika CAS';
$string['auth_cas_port_key'] = 'Vrata';
$string['auth_cas_proxycas'] = 'Nastavite \"Da\", če uporabljate CAS v proxy načinu';
$string['auth_cas_proxycas_key'] = 'Proxy način';
$string['auth_cas_server_settings'] = 'Konfiguracija strežnika CAS';
$string['auth_cas_text'] = 'Varna povezava';
$string['auth_cas_use_cas'] = 'Uporabi CAS';
$string['auth_cas_version'] = 'Različica CAS';
$string['auth_casdescription'] = 'Ta način uporablja strežnik CAS (Central Authentication Service) za preverjanje pristnosti uporabnikov v okolju z enojno prijavo (SSO - Single Sign On). Uporabite lahko tudi preprosto preverjanje pristnosti z LDAP. Če sta podana uporabniško ime in geslo veljavni glede na CAS, bo Moodle ustvaril nov vnos uporabnika v svoji podatkovni zbirki in prevzel zahtevane lastnosti s strežnika LDAP. Ob prihodnjih prijavah se preverjata samo uporabniško ime in geslo.';
$string['auth_casnotinstalled'] = 'Ne morem uporabiti avtentikacije CAS. Modul PHP LDAP ni nameščen.';
$string['auth_castitle'] = 'Uporabi strežnik CAS (SSO)';