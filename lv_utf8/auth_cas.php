<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Autentifikācijas izvēle';
$string['accesCAS'] = 'CAS lietotāji';
$string['accesNOCAS'] = 'citi lietotāji';
$string['auth_cas_auth_user_create'] = 'Izveidot lietotājus ārēji';
$string['auth_cas_baseuri'] = 'Servera URI (nekas, ja nav baseUri).<br />Piemēram, ja CAS serveris atbild adresē resursdators.domēns.ls/CAS/, tad <br />cas_baseuri = CAS/.';
$string['auth_cas_baseuri_key'] = 'Bāzes URI';
$string['auth_cas_broken_password'] = 'Jūs nevarat turpināt, nemainot savu paroli, tomēr lapa, kur to varētu mainīt, nav pieejama. Lūdzu, sazinieties ar sistēmas Moodle administratoru.';
$string['auth_cas_cantconnect'] = 'CAS moduļa LDAP daļa nevar izveidot savienojumu ar serveri: $a';
$string['auth_cas_casversion'] = 'Versija';
$string['auth_cas_changepasswordurl'] = 'Paroles maiņas URL';
$string['auth_cas_create_user'] = 'Šo ieslēdziet, ja Moodle datubāzē vēlaties ievietot CAS autentificētos lietotājus. Ja nē, pieslēgties var tikai tie lietotāji, kas jau ir iekļauti Moodle datubāzē.';
$string['auth_cas_create_user_key'] = 'Izveidot lietotāju';
$string['auth_cas_enabled'] = 'Šo ieslēdziet, ja vēlaties izmantot CAS autentifikāciju.';
$string['auth_cas_hostname'] = 'CAS servera resursdatora nosaukums. <br />Piemēram: resursdators.domēns.lv';
$string['auth_cas_hostname_key'] = 'Resursdatora nosaukums';
$string['auth_cas_invalidcaslogin'] = 'Atvainojiet, jūsu pieslēgšanās neizdevās&nbsp;— jūs nevarēja autorizēt';
$string['auth_cas_language'] = 'Izvēlētā valoda';
$string['auth_cas_language_key'] = 'Valoda';
$string['auth_cas_logincas'] = 'Droša savienojuma piekļuve';
$string['auth_cas_logoutcas'] = 'Ieslēdziet vērtību “Jā”, ja, atvienojoties no sistēmas Moodle, vēlaties arī veikt atslēgšanos no CAS.';
$string['auth_cas_logoutcas_key'] = 'Atslēgšanās no CAS';
$string['auth_cas_multiauth'] = 'Ieslēdziet vērtību “Jā”, ja nepieciešama multiautentifikācija (CAS + cita autentifikācija).';
$string['auth_cas_multiauth_key'] = 'Multiautentifikācija';
$string['auth_cas_port'] = 'CAS servera ports';
$string['auth_cas_port_key'] = 'Ports';
$string['auth_cas_proxycas'] = 'Ieslēdziet vērtību “Jā”, ja CAS izmantojat starpniekservera režīmā.';
$string['auth_cas_proxycas_key'] = 'Starpniekservera režīms';
$string['auth_cas_server_settings'] = 'CAS servera konfigurācija';
$string['auth_cas_text'] = 'Drošs savienojums';
$string['auth_cas_use_cas'] = 'Izmantot CAS';
$string['auth_cas_version'] = 'CAS versija';
$string['auth_casdescription'] = 'Šī metode izmanto CAS serveri (centrālās autentifikācijas pakalpojumu), lai lietotājus autentificētu vienas pierakstīšanās vidē (SSO). Var izmantot arī vienkāršo LDAP autentifikāciju. Ja norādītais lietotājvārds un parole atbilstoši CAS ir derīgi, sistēma Moodle savā datubāzē izveido jaunu lietotāja ievadni, ja nepieciešams, lietotāja atribūtus ņemot no LDAP. Nākamajās pieslēgšanās reizēs tiek pārbaudīts tikai lietotājvārds un parole.';
$string['auth_casnotinstalled'] = 'Nevar izmantot CAS autentifikāciju. Nav instalēts PHP LDAP modulis.';
$string['auth_castitle'] = 'CAS serveris (SSO)';