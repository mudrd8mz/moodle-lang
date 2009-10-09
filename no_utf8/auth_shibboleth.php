<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_auth_method'] = 'Navn på autentiseringsmetode';
$string['auth_shib_auth_method_description'] = 'Benytt et mer forståelig navn for Shibboleth autentisering. Dette kan f.eks. være navnet på organisasjonen din. Eks: <tt>Skolen login</tt> eller <tt>Bedriften as Login</tt> eller lignende.';
$string['auth_shib_changepasswordurl'] = 'URL for passordskifte';
$string['auth_shib_convert_data'] = 'DatamodifikasjonsAPI';
$string['auth_shib_convert_data_description'] = 'Du kan bruke denne API\'en for å ytterligere modifisere data en har fått via Shibbolet. Les <a href=\"../auth/shibboleth/README.txt\">README</a> for mere instruksjoner.';
$string['auth_shib_convert_data_warning'] = 'Filen eksisterer ikke eller ikke lesbar for webserverprosessen';
$string['auth_shib_idp_list'] = 'Identitetstilbydere';
$string['auth_shib_idp_list_description'] = 'Provide a list of Identity Provider entityIDs to let the user choose from on the login page.<br>On each line there must be a comma-separated tuple for entityID of the IdP (see the Shibboleth metadata file) and Name of IdP as it shall be displayed in the drow-down list.<br>As an optional third parameter you can add the location of a Shibboleth session initiator that shall be used in case your Moodle installation is part of a multi federation setup.';
$string['auth_shib_instructions'] = 'Bruk <a href=\"$a\">Shibboleth login</a> for å få tilgang via Shibbolet, hvis institusjonen din støtter dette<br />Hvis ikke bruk den vanlige innloggingen her.';
$string['auth_shib_instructions_help'] = 'Her kan du legge din egen instruks for brukere hvordan å bruke Shibboleth. Den vil vises på login siden i instruksdelen. Instruksjonen må inkludere en lenke til \"<b>$a</b>\" som brukere klikker hvis de vil logge inn.';
$string['auth_shib_integrated_wayf'] = 'Endre WAYF-tjenesten';
$string['auth_shib_integrated_wayf_description'] = 'Dersom du merker av her, vil Moodle bruke sin egen WAYF-tjeneste i stedet for den som er satt opp for Shibboleth. Moodle vil vise en listemeny på denne alternative login-siden hvor brukeren kan velge sin Identitetstilbyder.';
$string['auth_shib_logout_return_url'] = 'Alternativ URL ved utlogging';
$string['auth_shib_logout_return_url_description'] = 'Viser den URL-en Shibboleth-brukere skal sendes til etter utlogging.<br />Dersom tom, vil brukere bli sendt til den siden som er satt som ellers er standard for Moodle.';
$string['auth_shib_logout_url'] = 'Shibboleth tjenesten-URL ved utlogging';
$string['auth_shib_logout_url_description'] = 'Tilby URL-en til Shibboleth tjenesten som håndterer utlogging. Dette er vanligvis <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Hvis du vil bruke den integrerte WAYF tjenesten, må du velge en kommaseparert liste av tilbyderes entityIDer, navn og eventuelt en sesjonsinitiator.';
$string['auth_shib_only'] = 'Bare Shibboleth';
$string['auth_shib_only_description'] = 'Kryss av denne hvis Shibbolethautentisering SKAL gjennomføres.';
$string['auth_shib_username_description'] = 'Navn på variabelen for webserver Shibboleth variabelen som skal brukes som Moodle brukernavn';
$string['auth_shibboleth_contact_administrator'] = 'Hvis du ikke er tilknyttet angitte organisasjon og du trenger tilgang til kurs på denne serveren vær vennlig kontakt';
$string['auth_shibboleth_errormsg'] = 'Vær vennlig og velg organisasjonen du tilhører!';
$string['auth_shibboleth_login'] = 'Shibboleth Login';
$string['auth_shibboleth_login_long'] = 'Log inn på Moodle via Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Manuell pålogging';
$string['auth_shibboleth_select_member'] = 'Jeg er medlem av ...';
$string['auth_shibboleth_select_organization'] = 'For Shibbolethautentisering, vær vennlig å velg din organisasjon fra nedtrekkslisten';
$string['auth_shibbolethdescription'] = 'Ved å bruke denne metoden blir brukere opprettet og autentisert ved bruk av <a href=\"http://shibboleth.internet2.edu/\">Shibboleth</a>.<br/> Pass på å les <a href=\"../auth/shibboleth/README.txt\">README</a>  for Shibbolet for hvordan å sette opp Moodle med Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Det ser ut som du er godkjent av Shibboleth men Moodle fikk ingen brukerdata. Vær vennlig å sjekk at identitetstilbyderen din leverer nødvendige variabler ($a) til Moodletilbyderen eller gi beskjed til systemansvarlige.';
$string['shib_not_all_attributes_error'] = 'Moodle trenger Shibbolethinformasjon som ikke finnes for deg. Informasjonen er: $a<br/>Vær vennlig å kontakte webmasteren på dene serveren eller identitetstilbyderen din.';
$string['shib_not_set_up_error'] = 'Shibbolethautentisering ser ikke ut til å være satt opp riktig fordi ingen Shibbolethvariabler finnes for denne siden. Vær vennlig å se <a href=\"README.txt\">README</a> for nærmere instrukser om hvordan å sette opp Shibbolethautentisering eller kontakt webmasteren på denne Moodleinstallasjonen.';