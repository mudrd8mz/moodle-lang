<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 development (2006022400)


$string['autocreate'] = 'I corsi possono essere creati automanticamente se esistono iscrizioni a un corso che ancora non esiste in Moodle.';
$string['category'] = 'La categoria per i corsi creati automaticamente';
$string['dbhost'] = 'Nome del computer con il server della base di dati';
$string['dbname'] = 'La base di dati da utilizzare';
$string['dbpass'] = 'Password per accedere al server';
$string['dbtable'] = 'Tabella in quella base di dati';
$string['dbtype'] = 'Tipo di server della base di dati';
$string['dbuser'] = 'Nome utente per accedere al server';
$string['description'] = 'E\' possibile utilizzare una base di dati esterna (di qualunque tipo) per controllare le registrazioni. Si assume che la base dati esterna contenga un campo contenente un ID corso, e un campo contenente un ID utente. Questi sono confrontati con i campi scelti nelle tabelle corsi e utenti in locale. ';
$string['enrolname'] = 'Basi di dati esterna';
$string['field_mapping'] = 'Mappatura campi';
$string['general_options'] = 'Opzioni generali';
$string['localcoursefield'] = 'Nome del campo nella tabella corsi che deve essere confrontata con gli elementi della base di dati remota (es. courseid)';
$string['localuserfield'] = 'Nome del campo nella tabella utenti locale che deve essere confrontata con il dato remoto (es. userid)';
$string['remotecoursefield'] = 'Campo nella base di dati remota nel quale ci aspettiamo di trovare l\'ID del corso';
$string['remoteuserfield'] = 'Campo nella base di dati remota nel quale ci aspettiamo di trovare l\'ID del utente';
$string['server_settings'] = 'Impostazioni server';
$string['template'] = 'Opzionale: i corsi auto creati possono copiare le loro impostazioni da un corso tipo.';

?>
