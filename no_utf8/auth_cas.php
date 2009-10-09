<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Autentiseringsvalg';
$string['accesCAS'] = 'CAS brukere';
$string['accesNOCAS'] = 'andre brukere';
$string['auth_cas_auth_user_create'] = 'Opprett brukere eksternt';
$string['auth_cas_baseuri'] = 'Serverens URL (la feltet stå tomt hvis det ikke er en base-URL)<br/> Et eksempel: Dersom CAS serveren responderer på www.eksempel.no/CAS er<br/>
cas_baseurl=CAS/';
$string['auth_cas_baseuri_key'] = 'Base-URL';
$string['auth_cas_broken_password'] = 'Du kan ikke fortsette uten å endre passord, men det finnes ingen tilgjengelige sier for å endre det. Vær vennlig å kontakte din Moodle administrator.';
$string['auth_cas_cantconnect'] = 'LDAP delen av CAS-modulen kan ikke koble til server: $a';
$string['auth_cas_casversion'] = 'Versjon';
$string['auth_cas_changepasswordurl'] = 'URL for passordbytte';
$string['auth_cas_create_user'] = 'Slå på denne hvis du vil legge til CAS-autentiserte brukere i Moodle-databasen. Hvis ikke er det bare brukere som allerede finnes i Moodle-databasen som kan logge inn.';
$string['auth_cas_create_user_key'] = 'Opprett bruker';
$string['auth_cas_enabled'] = 'Slå på denne hvis du vil bruke CAS autentikasjon.';
$string['auth_cas_hostname'] = 'Vertsnavn for CAS serveren <br/>f.eks vert.domene.no';
$string['auth_cas_hostname_key'] = 'Vertsnavn';
$string['auth_cas_invalidcaslogin'] = 'Beklager, innloggingen mislykkes - du kunne ikke godkjennes.';
$string['auth_cas_language'] = 'Valgt språk';
$string['auth_cas_language_key'] = 'Språk';
$string['auth_cas_logincas'] = 'Sikker tilkoblingstilgang';
$string['auth_cas_logoutcas'] = 'Slå denne til \'ja\' hvis du vil logge ut fra CAS når du kobler fra Moodle';
$string['auth_cas_logoutcas_key'] = 'Logg ut fra CAS';
$string['auth_cas_multiauth'] = 'Slå denne på \'ja\' hvis du vil ha fler-autentisering (CAS + annen autentitsering)';
$string['auth_cas_multiauth_key'] = 'Multi-autentisering';
$string['auth_cas_port'] = 'Port for CAS server';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Slå denne på \'ja\' hvis du bruker CASin proxy-mode';
$string['auth_cas_proxycas_key'] = 'Proxymodus';
$string['auth_cas_server_settings'] = 'CAS serverkonfigurasjon';
$string['auth_cas_text'] = 'Sikker tilkobling';
$string['auth_cas_use_cas'] = 'Bruk CAS';
$string['auth_cas_version'] = 'CAS versjon';
$string['auth_casdescription'] = 'Denne metoden bruker en CAS server (Central Authentication Service) for å autentisere brukere i et Single Sign On miljø (SSO). Du kan også bruke enkel LDAP autentisering. Hvis angitt brukernavn og passord er gyldig i henhold til CAS, lager Moodle en ny bruker i databasen og tar egenskapene fra LDAP om nødvendig. Ved etterfølgende innlogginger er bare brukernavn og passord sjekket.';
$string['auth_casnotinstalled'] = 'Kan ikke bruke CAS autentisering. PHP LDAP modulen er ikke installert.';
$string['auth_castitle'] = 'CAS server (SSO)';