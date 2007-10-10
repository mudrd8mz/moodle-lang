<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 development (2006022400)


$string['autocreate'] = 'I corsi possono essere creati automaticamente se esistono iscrizioni a un corso che ancora non esiste in Moodle.';
$string['autocreation_settings'] = 'Impostazione autocreazione';
$string['course_fullname'] = 'Campo dove è registrato il nome completo del corso.';
$string['course_id'] = 'Campo dove è registrata il l\'ID del corso. I valori in questo campo vengono confrontati con quelli inseriti nel campo \"enrol_db_l_coursefield\" nella tabella dei corsi di Moodle.';
$string['course_shortname'] = 'Campo dove è registrato il nome abbreviato del corso.';
$string['course_table'] = 'Tabella dove sono contenuti i dettagli del corso (nome abbreviato, nome lungo, ID, eccetera)';
$string['defaultcourseroleid'] = 'Ruolo assegnato di default se non sono specificati altri ruoli.';
$string['enrol_database_autocreation_settings'] = 'autocreazione di nuovi corsi';
$string['host'] = 'Nome dell\'host della base di dati';
$string['ignorehiddencourse'] = 'Se selezionato gli utenti non potranno essere iscritti ai corsi impostati come \"non disponibili\" per gli studenti.';
$string['local_fields_mapping'] = 'Campi della base di dati di Moodle (locale)';
$string['localrolefield'] = 'Nome del campo nella tabella dei ruoli che verrà usata per abbinare i dati nella base dati remota (es. shortname).';
$string['localuserfield'] = 'Nome del campo nella tabella utenti locale che deve essere confrontata con il dato remoto (es. idnumber)';
$string['name'] = 'Nome del database da usare';
$string['pass'] = 'Password di accesso al server';
$string['remote_fields_mapping'] = 'Campi del database di iscrizione (remoto)';
$string['remotecoursefield'] = 'Campo nella base di dati remota che contiene l\'ID del corso';
$string['remoterolefield'] = 'Nome del campo nella tabella remota usata per abbinare i dati nella tabella dei ruoli.';
$string['remoteuserfield'] = 'Campo nella base di dati remota che contiene l\'ID dell\'utente';
$string['server_settings'] = 'Impostazioni server remoto';
$string['student_coursefield'] = 'Nome del campo nella tabella di iscrizione degli studenti che contiene l\'ID del corso.';
$string['student_l_userfield'] = 'Nome del campo nella tabella locale utenti usata per abbinare l\'utente a un record remoto per gli studenti (es. idnumber).';
$string['student_r_userfield'] = 'Nome del campo nella tabella remota di iscrizione degli studenti che contiene l\'ID dell\'utente.';
$string['student_table'] = 'Nome della tabella che contiene le iscrizioni degli studenti.';
$string['teacher_coursefield'] = 'Nome del campo nella tabella di iscrizione dei docenti che contiene l\'ID del corso.';
$string['teacher_l_userfield'] = 'Nome del campo nella tabella locale utenti usata per abbinare l\'utente a un record remoto per i docenti (es. idnumber).';
$string['teacher_r_userfield'] = 'Nome del campo nella tabella remota di iscrizione dei docenti che contiene l\'ID dell\'utente.';
$string['teacher_table'] = 'Nome della tabella che contiene le iscrizioni dei docenti.';
$string['type'] = 'Tipo di server della base di dati';
$string['user'] = 'Nome utente per accedere al server';

?>
