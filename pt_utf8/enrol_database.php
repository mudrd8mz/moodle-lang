<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6.2 (2006050521)


$string['autocreate'] = 'As Disciplinas podem ser criadas automaticamente se houver inscrições para uma disciplina que ainda não exista no Moodle.';
$string['autocreation_settings'] = 'Definições de Criação Automática';
$string['category'] = 'A categoria para as Disciplinas criadas automaticamente';
$string['course_fullname'] = 'O nome do campo onde está guardado o nome completo da disciplina.';
$string['course_id'] = 'O nome do campo onde o está guardado o identificador (ID) da disciplina. Os valores deste campo são utilizados para comparar com os do campo \"enrol_db_l_coursefield\" na tabela de disciplinas do Moodle';
$string['course_shortname'] = 'O nome do campo onde está guardado o nome curto da disciplina.';
$string['course_table'] = 'O nome da tabela onde se esperam encontrar os detalhes da disciplina (nome curto, nome completo, ID, etc.)';
$string['description'] = 'Pode usar uma base de dados externa (de quase qualquer tipo) para controlar as inscrições. Admite-se que a sua base de dados externa contém um campo com um identificador de disciplina (course ID), e um campo com o código de utilizador (user ID). Esses campos serão comparados com os campos que seleccionar nas tabelas locais de disciplina e utilizador.';
$string['enrolname'] = 'Base de dados externa';
$string['general_options'] = 'Opções Gerais';
$string['host'] = 'Nome do servidor de bases de dados';
$string['local_coursefield'] = 'Nome do campo na tabela de disciplinas que é utilizado para comparar entradas na base de dados remota (por exemplo, idnumber)';
$string['local_fields_mapping'] = 'Campos da base de dados (local) do Moodle';
$string['name'] = 'Base de dados específica a utilizar';
$string['pass'] = 'Palavra chave para aceder ao servidor';
$string['remote_fields_mapping'] = 'Campos da base de dados (remota) de inscritos.';
$string['server_settings'] = 'Definições do servidor externo de bases de dados';
$string['student_coursefield'] = 'Nome do campo na tabela de alunos inscritos
onde se espera encontrar o identificador (ID) da disciplina.';
$string['student_l_userfield'] = 'Nome do campo, na tabela local de utilizadores, que será utilizado para comparar com um registo remoto de alunos (por exemplo, idnumber)';
$string['student_r_userfield'] = 'Nome do campo, na tabela remota de alunos inscritos, onde se espera encontrar o código (ID) de utilizador.';
$string['student_table'] = 'Nome da tabela de alunos inscritos.';
$string['teacher_coursefield'] = 'Nome do campo na tabela de docentes inscritos onde se espera encontrar o identificador (ID) da disciplina.';
$string['teacher_l_userfield'] = 'Nome do campo, na tabela local de utilizadores, que será utilizado para comparar com um registo remoto de docentes (por exemplo, idnumber).';
$string['teacher_r_userfield'] = 'Nome do campo, na tabela remota de docentes inscritos, onde se espera encontrar o código (ID) de utilizador.';
$string['teacher_table'] = 'Nome da tabela onde se encontram os docentes inscritos.';
$string['template'] = 'Opcional: as disciplinas criadas automaticamente podem copiar as definições de uma disciplina padrão. Escreva aqui o nome curto dessa disciplina padrão.';
$string['type'] = 'Tipo de servidor de bases de dados.';
$string['user'] = 'Nome de utilizador para aceder ao servidor.';

?>
