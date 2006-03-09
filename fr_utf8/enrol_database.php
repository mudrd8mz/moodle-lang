<?php // $Id$ 

$string['autocreate'] = 'Les cours peuvent être créés automatiquement si des inscriptions ont lieu pour un cours qui n\'existe pas encore dans le Moodle.';
$string['autocreation_settings'] = 'Réglages de création automatique';
$string['category'] = 'Catégorie des cours créés automatiquement';
$string['course_fullname'] = 'The name of the field where the course fullname is stored.';
$string['course_id'] = 'The name of the field where the course ID is stored. The values of this field are used to match those in the \"enrol_db_l_coursefield\" field in Moodle\'s course table.';
$string['course_shortname'] = 'The name of the field where the course shortname is stored.';
$string['course_table'] = 'Then name of the table where we expect to find the course details in (short name, fullname, ID, etc.)';
$string['description'] = 'Vous pouvez utiliser une base de données externe (de presque n\'importe quel type) pour contrôler les inscriptions. La base de données externe doit posséder un champ contenant l\'identifiant du cours et un champ contenant l\'identifiant de l\'utilisateur. Ces deux champs sont comparés aux champs que vous choisissez dans les tables locales des cours et des utilisateurs.';
$string['enrolname'] = 'Base de données externe';
$string['general_options'] = 'Options générales';
$string['host'] = 'Nom d\'hôte du serveur de base de données';
$string['local_coursefield'] = 'Nom du champ (de la table des cours du Moodle) utilisé pour faire correspondre les cours avec la base de données distante (par exemple « idnumber »)';
$string['local_fields_mapping'] = 'Champs de la BDD Moodle (local)';
$string['name'] = 'Nom de la base de données';
$string['pass'] = 'Mot de passe pour accéder à la base de données';
$string['remote_fields_mapping'] = 'Champs de la BDD externe';
$string['server_settings'] = 'Réglages du serveur de BDD externe';
$string['student_coursefield'] = 'Nom du champ de la table d\'inscription des étudiants où trouver l\'identifiant du cours (course ID).';
$string['student_l_userfield'] = 'Nom du champ (de la table des utilisateurs du Moodle) utilisé pour faire correspondre les utilisateurs à un enregistrement de la BDD distante pour étudiants (par exemple « idnumber »).';
$string['student_r_userfield'] = 'Nom du champ (de la table d\'inscription des étudiants de la BDD externe) où trouver l\'identifiant de l\'utilisateur (user ID).';
$string['student_table'] = 'Nom de la table dans laquelle sont stockés les inscriptions des étudiants.';
$string['teacher_coursefield'] = 'Nom du champ de la table d\'inscription des enseignants où trouver l\'identifiant du cours (course ID).';
$string['teacher_l_userfield'] = 'Nom du champ (de la table des utilisateurs du Moodle) utilisé pour faire correspondre les utilisateurs à un enregistrement de la BDD distante pour étudiants (par exemple « idnumber »).';
$string['teacher_r_userfield'] = 'Nom du champ (de la table d\'inscription des enseignants de la BDD externe) où trouver l\'identifiant de l\'utilisateur (user ID).';
$string['teacher_table'] = 'Nom de la table dans laquelle sont stockés les inscriptions des enseignants.';
$string['template'] = 'Facultatif&nbsp;: les cours créés automatiquement peuvent hériter leurs réglages d\'un cours modèle';
$string['type'] = 'Type de serveur de base de données';
$string['user'] = 'Nom d\'utilisateur pour accéder à la base de données';

?>