<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_convert_data'] = 'Datamanipulerings API';
$string['auth_shib_convert_data_description'] = 'Du kan benytte dette API til yderligere at ændre data fra Shibboleth. Læs evt a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> for yderligere information.';
$string['auth_shib_convert_data_warning'] = 'Filen eksistere ikke eller kan ikke læses af webserverens process.';
$string['auth_shib_instructions'] = 'Benyt <a href=\"$a\">Shibboleth login</a> til at få adgang via Shibboleth, hvis din institution understøtter dette.<br />Ellers kan den normale loginmetode benyttes.';
$string['auth_shib_instructions_help'] = 'Her bør du forklare brugere hvad Shibboleth er og hvordan de bruger det. Det vil blive vist på loginsiden i instruktionssektionen. Det bør indeholde et link til en Shibboleth beskyttet resource der stiller brugere videre til \"<b>$a</b>\" så Shibbolethbrugere kan logge ind i Moodle. Hvis den er blank vil standardinstruktioner blive vist. (ikke specielt for Shibboleth)';
$string['auth_shib_only'] = 'Kun Shibboleth';
$string['auth_shib_only_description'] = 'Benyt denne mulighed hvis Shibboleth-godkendelse skal gennemtvinges.';
$string['auth_shib_username_description'] = 'Navnet på Shibboleth webserverens environment variabel der skal benyttes som Moodles brugernavn.';
$string['auth_shibboleth_login'] = 'Shibboleth Login';
$string['auth_shibboleth_manual_login'] = 'Manuelt login';
$string['auth_shibboleth_select_member'] = 'Jeg er medlem af...';
$string['auth_shibbolethdescription'] = 'Ved at benytte denne metode kan man forbinde Moodle til en eksisterende Shibboleth server for at checke og oprette nye brugerkonti.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Du er blevet godkendt af Shibboleth men Moodle har ikke modtaget nogen brugeroplysninger. Kontroller venligst at din Identity Provider frigiver de nødvendige attributter ($a) til den Service Provider som Moodle kører på eller fortæl det til administratoren af webserveren.';
$string['shib_not_all_attributes_error'] = 'Moodle kræver bestemte Shibboleth oplysninger som ikke er tilgængelige i dit tilfælde. Oplysningerne er: $a<br />Kontakt venligst Moodles administrator eller identifikationssystemets administrator.';
$string['shib_not_set_up_error'] = 'Shibboleth-godkendelsen lader ikke til at være sat korrekt op. Se venligst a href=\"README.txt\">README</a> for yderlige instruktioner om hvordan Shibboleth-godkendelse konfigureres.';