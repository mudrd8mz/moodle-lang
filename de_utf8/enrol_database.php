<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 development (2006032001)


$string['autocreate'] = 'Kurse können automatisch angelegt werden, wenn es Eintragungen zu einem Kurs gibt, der noch nicht in moodle existiert.';
$string['autocreation_settings'] = 'Einstellungen für  die automatische Erstellung von Kursen';
$string['category'] = 'Kategorie für automatisch angelegte Kurse';
$string['course_fullname'] = 'Feldname für den Kurstitel (Langbezeichnung)';
$string['course_id'] = 'Feldname in dem die Kurs-ID abgelegt ist. Die Werte dieses Feldes werden mit dem Feld \"enrol_db_l_coursefield\" der moodle-Kurstabelle abgeglichen.';
$string['course_shortname'] = 'Feldname für den Kurztitel desKurses ';
$string['course_table'] = 'Name der Tabelle in der Detailinformationen zum Kurs gefunden werden (Kurzbezeichnung, Titel, ID, etc.)';
$string['description'] = 'Sie können eine externe Datenbank (fast jeder Art benutzen), um den Zugang zu Moodle zu ermöglichen. Es wird vorausgesetzt, dass die Datenbank die Felder Kurs-ID und Benutzer-ID enthält. Diese werden geprüft gegen die Felder des Kurses und des Benutzers im Moodle System.';
$string['enrolname'] = 'Externe Datenbank';
$string['general_options'] = 'Generelle Optionen';
$string['host'] = 'Datenbankserver Hostname';
$string['local_coursefield'] = 'Feld in der Kurstabelle von moodle, das zum Abgleich mit der verbundenen Datenbank verwandt werden soll (z.B. idnumber).';
$string['local_fields_mapping'] = 'moodle Datenbankfelder (lokal)';
$string['name'] = 'Spezifische Datenbank, die verwandt werden soll';
$string['pass'] = 'Passwort für Zugriff auf Server';
$string['remote_fields_mapping'] = 'Anmeldungsdatenbankfelder (remote)';
$string['server_settings'] = 'Externe Datenbankserver Einstellungen';
$string['student_coursefield'] = 'Feldbezeichnung in der student enrolment Tabelle in dem die ID des Kurses zu finden ist.';
$string['student_l_userfield'] = 'Feldbezeichnung in der lokalen user Tabelle, das zum Abgleich mit dem verbundenen Datensatz für Teilnehmer/innen genutzt werden soll (z.B. idnumber)';
$string['student_r_userfield'] = 'Feldbezeichnung in der verbundenen student enrolment Tabelle in dem die ID des Kurses zu finden ist.';
$string['student_table'] = 'Name der Tabelle in der Nutzeranmeldungen gespeichert werden.';
$string['teacher_coursefield'] = 'Feldbezeichnung in der teacher enrolment Tabelle in dem die ID des Kurses zu finden ist.';
$string['teacher_l_userfield'] = 'Feldbezeichnung in der lokalen user Tabelle, das zum Abgleich mit dem verbundenen Datensatz für Trainer/innen genutzt werden soll (z.B. idnumber)';
$string['teacher_r_userfield'] = 'Feldbezeichnung in der verbundenen teacher enrolment Tabelle in dem die ID des Kurses zu finden ist.';
$string['teacher_table'] = 'Tabellenname in dem Trainer/innen-Einträge gespeichert werden.';
$string['template'] = 'Optional: automatisch angelegte Kurse können die Einstellungen von einem vorhandenen Kurs übernehmen. Tragen Sie hier die Kurzbezeichnung dieses Kurses ein.';
$string['type'] = 'Datenbankservertyp';
$string['user'] = 'Nutzname für Datenbankzugriff';

?>
