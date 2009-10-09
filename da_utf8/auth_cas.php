<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['accesCAS'] = 'CAS-brugere';
$string['accesNOCAS'] = 'andre brugere';
$string['auth_cas_auth_user_create'] = 'Opret brugere eksternt';
$string['auth_cas_baseuri'] = 'URI for CAS server<br />For eksempel hvis CAS serveren svarer på host.domain.dk/CAS/ så skal der stå<br />cas_basedir = CAS/';
$string['auth_cas_broken_password'] = 'Du kan ikke fortsætte uden at ændre din kode, imidlertid er der ingen side at gøre det på. Kontakt din Moodle-admin';
$string['auth_cas_casversion'] = 'Version';
$string['auth_cas_changepasswordurl'] = 'URL til skift af adgangskode';
$string['auth_cas_create_user'] = 'Aktiver denne indstilling hvis du ønsker at indsætte brugere der er CAS-godkendt i Moodles database. Hvis ikke er det kun brugere der er god i Moodle der kan logge ind.';
$string['auth_cas_create_user_key'] = 'Opret bruger';
$string['auth_cas_enabled'] = 'Aktiver denne indstilling hvis du ønsker at benytte CAS-godkendelse.';
$string['auth_cas_hostname'] = 'Værtsnavn for CAS server<br />F.eks: host.domain.dk';
$string['auth_cas_hostname_key'] = 'Værtsnavn';
$string['auth_cas_invalidcaslogin'] = 'Desværre, du kan ikke logges ind - du kunne ikke godkendes.';
$string['auth_cas_language'] = 'Vælg sprog';
$string['auth_cas_language_key'] = 'Sprog';
$string['auth_cas_logincas'] = 'Benyt sikker forbindelse';
$string['auth_cas_port'] = 'CAS-serverens port';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas_key'] = 'Proxy-tilstand';
$string['auth_cas_server_settings'] = 'CAS serverens konfiguration';
$string['auth_cas_text'] = 'Sikker forbindelse';
$string['auth_cas_use_cas'] = 'Brug CAS';
$string['auth_cas_version'] = 'Version af CAS';
$string['auth_casdescription'] = 'Denne metode benytter en CAS server (Central Authentication Service) til at godkende brugere i et SSO (Single Sign On) miljø. Du kan også benytte en simpel LDAP godkendelse. Hvis det givne brugernavn og password er korrekte i forhold til CAS så opretter Moodle en brugerprofil til den bruger i databasen. Moodle kan efterfølgende overføre nogle eller alle brugerens informationer fra LDAP hvis det kan lade sig gøre. Efterfølgende er det kun brugernavn og password der bliver kontrolleret.';
$string['auth_castitle'] = 'Benyt en CAS server (SSO)';