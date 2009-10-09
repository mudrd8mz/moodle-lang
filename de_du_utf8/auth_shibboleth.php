<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_convert_data_description'] = 'Du kannst diese API nutzen, um Daten von Shibboleth zu bearbeiten. <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">Hier</a> findest du weitere Hinweise.';
$string['auth_shib_instructions'] = 'Nutze den <a href=\"$a\">Shibboleth Login</a>, um Zugang über Shibboleth zu erhalten, wenn dein Unternehmen dies unterstützt. <br />Sonst verwendest du das normale hier angezeigte Loginformular.';
$string['auth_shib_instructions_help'] = 'Trage hier Informationen für deine Nutzer/innen ein, die ihnen den Zugang mit Hilfe von Shibboleth erklären. Diese werden auf der Loginseite angzeigt. Der Text sollte einen Link \"<b>$a</b>\" enthalten, damit ein einfachere Login möglich ist. Wenn du das Feld leer lässt, werden die Standard-Texte angezeigt und keine Hinweise auf den Shibboleth Login.';
$string['auth_shib_only_description'] = 'Checke diese Option, wenn eine Shibboleth-Authentifizierung bevorzugt wird.';
$string['auth_shibbolethdescription'] = 'Mit diesem Verfahren kannst du die Verbindung zu einem bestehenden Shibboleth Server herstellen, um  Zugänge zu prüfen und anzulegen.';
$string['shib_no_attributes_error'] = 'Du versuchst vermutlich, die Shibboleth Authentifizierung zu verwenden. Moodle hat jedoch keine Attribute für die Nutzer/innen erhalten. Prüfe bitte, ob der Identity Provider die erforderlichen Attribute ($a) dem Moodle-Serviceprovider zur Verfügung stellt oder informiere den Webmaster des Servers.';
$string['shib_not_all_attributes_error'] = 'Moodle benötigt einige Shibboleth-Attribute, die derzeitnicht bereitgestellt werden. Es handelt sich um die Attribute: $a<br />Benachrichtige bitte den Webmaster des Servers oder deinen Identity Provider.';
$string['shib_not_set_up_error'] = 'Die Shibboleth-Authentifizierung scheint nicht richtig eingerichtet zu sein. Beachte die <a href=\"README.txt\">README-Datei</a> mit weiteren Informationen zur Einrichtung der Shibboleth-Authentifizierung.';