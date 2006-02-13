<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 development (2005101200)


$string['autocreate'] = 'Cursussen kunnen automatisch aangemaakt worden als er aanmeldingen zijn voor een cursus die in Moodle nog niet bestaat';
$string['category'] = 'Kies de categorie voor de automatisch aangemaakte cursussen';
$string['dbhost'] = 'Servernaam van de databank';
$string['dbname'] = 'De naam van de te gebruiken databank';
$string['dbpass'] = 'Wachtwoord om toegang te krijgen tot de server';
$string['dbtable'] = 'De tabel van die databank';
$string['dbtype'] = 'Type databankserver';
$string['dbuser'] = 'Gebruikersnaam om toegang te krijgen tot de databank';
$string['description'] = 'Je kunt een externe datatabank (van nagenoeg elke soort) gebruiken om je vakaanmeldingen te controleren. Er wordt verondersteld dat je externe databank een veld met course ID bevat en een veld met user ID. Deze worden vergeleken met velden die je kiest in de lokale cursus- en gebruikerstabellen';
$string['enrolname'] = 'Externe databank';
$string['field_mapping'] = 'Veldverwijzing';
$string['general_options'] = 'Algemene instellingen';
$string['localcoursefield'] = 'De veldnaam in de vaktabel die we gebruiken om te koppelen aan de externe databank (bv idnummer)';
$string['localuserfield'] = 'De naam van het veld in de lokale gebruikerstabel die we gebruiken om de gebruiker te koppelen aan een  record in de externe databank (bv idnummer)';
$string['remotecoursefield'] = 'Het veld in de externe databank waarin course ID staat';
$string['remoteuserfield'] = 'Het veld in de externe databank waarin user ID staat';
$string['server_settings'] = 'Severinstellingen';
$string['template'] = 'Optioneel: automatisch aangemaakte cursussen kunnen hun instellingen overnemen van een sjablooncursus';

?>
