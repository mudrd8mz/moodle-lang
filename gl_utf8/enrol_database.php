<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.7.1 (2006101010)


$string['autocreate'] = 'Os cursos poden ser creados automaticamente se hai inscricións para un curso que aínda non exista en Moodle.';
$string['autocreation_settings'] = 'Configuracións de creación automática';
$string['category'] = 'A categoría para os cursos creados automaticamente.';
$string['course_fullname'] = 'O nome do campo onde está gardado o nome completo do curso.';
$string['course_id'] = 'O nome do campo onde é gardado o ID do curso. Os valores deste campo son utilizados para comparar cos do campo \"enrol_db_l_coursefield\" na táboa de cursos de Moodle.';
$string['course_shortname'] = 'O nome do campo onde é gardado o nome curto do curso.';
$string['course_table'] = 'O nome da táboa onde esperamos encontrar os detalles do curso (nome curto, nome completo, ID, etc.)';
$string['description'] = 'Pode utilizar unha base de datos externa (case calquera tipo) para controlar as inscricións. Admítese que a súa base de datos externa conteña un campo co ID do curso, e un campo con un ID de usuario. Estes campos serán comparados cos campos que escolla no curso local e na táboa de usuario.';
$string['enrolname'] = 'Base de datos externa';
$string['general_options'] = 'Opcións xerais';
$string['host'] = 'Nome do servidor da base de datos.';
$string['local_coursefield'] = 'O nome do campo na táboa do curso que estamos a utilizar compara entradas na base de datos remota (ex. Número id).';
$string['local_fields_mapping'] = 'Campos da base de datos (local) de Moodle';
$string['name'] = 'Base de datos específica para utilizar.';
$string['pass'] = 'Contrasinal para acceder ao servidor.';
$string['remote_fields_mapping'] = 'Campos da base de datos (remota) de Inscrición.';
$string['server_settings'] = 'Configuracións do servidor da base de datos externa';
$string['student_coursefield'] = 'Nome do campo, na táboa de inscrición do estudante, no que esperamos encontrar o ID do curso.';
$string['student_l_userfield'] = 'Nome do campo, na táboa local de usuarios, que será utilizado para comparar con un rexistro remoto de estudantes (ex. número id).';
$string['student_r_userfield'] = 'Nome do campo, na táboa remota de inscrición de estudantes, no que esperamos encontrar o ID do usuario.';
$string['student_table'] = 'Nome da táboa onde son gardadas as inscricións dos estudantes.';
$string['teacher_coursefield'] = 'Nome do campo, na táboa de inscrición dos profesores, no que esperamos encontrar o ID do curso.';
$string['teacher_l_userfield'] = 'Nome do campo, na táboa local de usuarios, que será utilizado para comparar cun rexistro remoto de profesores (ex. número id).';
$string['teacher_r_userfield'] = 'Nome do campo, na táboa remota de profesores inscritos, en que esperamos encontrar o ID do usuario.';
$string['teacher_table'] = 'Nome da táboa onde son gardadas as inscricións dos profesores.';
$string['template'] = 'Opcional: os cursos creados automaticamente poden copiar as súas configuracións dun curso modelo. Escriba aquí o nome curto do curso modelo.';
$string['type'] = 'Tipo de servidor da base de datos.';
$string['user'] = 'Nome de usuario para acceder ao servidor.';

?>
