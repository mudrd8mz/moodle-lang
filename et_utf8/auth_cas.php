<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Autentimise valik';
$string['accesCAS'] = 'CAS kasutajad';
$string['accesNOCAS'] = 'muud kasutajad';
$string['auth_cas_baseuri'] = 'Serveri URI (baseUri puudumise korral ära sisesta midagi).<br/>Näiteks, kui CAS server vastab hostile host.domaine.fr/CAS/, siis<br/>cas_baseuri=CAS';
$string['auth_cas_baseuri_key'] = 'Baas URI';
$string['auth_cas_cantconnect'] = 'CAS mooduli LDAP osa ei suuda ühenduda serveriga: $a';
$string['auth_cas_casversion'] = 'Versioon';
$string['auth_cas_changepasswordurl'] = 'Parooli muutmise URL';
$string['auth_cas_create_user'] = 'Lülita see sisse, kui soovid CAS\'i poolt autenditud kasutajaid Moodle andmebaasi sisestada. Kui see on välja lülitatud, siis ainult need kasutajad, kes juba eksisteerivad Moodle andmebaasis, saavad siseneda.';
$string['auth_cas_create_user_key'] = 'Loo kasutaja';
$string['auth_cas_enabled'] = 'Lülita see sisse, kui soovid kasutada CAS autentimist.';
$string['auth_cas_hostname'] = 'CAS serveri hostinimi <br/>näiteks: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Hostinimi';
$string['auth_cas_invalidcaslogin'] = 'Vabandame, sisenemine ebaõnnestus - sind ei suudetud autoriseerida.';
$string['auth_cas_language'] = 'Valitud keel';
$string['auth_cas_language_key'] = 'Keel';
$string['auth_cas_logincas'] = 'Turvalise ühendusega juurdepääs';
$string['auth_cas_logoutcas'] = 'Seadista \'jah\' kui soovid välja logida CAS\'st, kui ühendud lahti Moode\'st';
$string['auth_cas_logoutcas_key'] = 'Logi välja CAS\'st';
$string['auth_cas_multiauth_key'] = 'Mitmik-autentimine';
$string['auth_cas_port'] = 'CAS serveri port';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Seadista \'jah\' kui kasutad CASin proksilaadi';
$string['auth_cas_proxycas_key'] = 'Proksi laad';
$string['auth_cas_server_settings'] = 'CAS serveri konfiguratsioon';
$string['auth_cas_text'] = 'Turvaline ühendus';
$string['auth_cas_use_cas'] = 'Kasuta CAS\'i';
$string['auth_cas_version'] = 'CAS\'i versioon';
$string['auth_casdescription'] = 'See meetod kasutab CAS serverit(CAS = Central Authentication Service - Keskne autentimisteenus), et autentida kasutajaid SSO keskkonnas (SSO = Single Sign On - Ühekordne sisselogimine).Sa võid kasutada ka lihtsat LDAP autentimist. Kui antud kasutajanimi ja salasõna on CAS\'i järgi kehtivad, siis loob Moodle oma andmebaasi uue kasutaja rea, võttes kasutaja atribuudid vajadusel LDAP serverist. Järgmiste sisenemiste ajal kontrollitakse ainult kasutajanime ja salasõna.';
$string['auth_casnotinstalled'] = 'Ei saa kasutada CAS-autentimist. PHP LDAP laiendus on installeerimata.';
$string['auth_castitle'] = 'Kasuta CAS serverit (SSO)';