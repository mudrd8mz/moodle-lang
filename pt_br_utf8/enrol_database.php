<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 development (2006031600)


$string['autocreate'] = 'Os cursos podem ser criados automaticamente se existem inscrições em um curso que ainda não existe em Moodle';
$string['autocreation_settings'] = 'Configurações de Autocriação';
$string['category'] = 'Categoria de cursos auto-criados';
$string['course_fullname'] = 'O nome do campo que arquiva o nome completo do curso';
$string['course_id'] = 'O nome do campo em que o ID do curso é arquivado. Os valôres deste campo são usados para preeencher o campo \"enrol_db_l_coursefield\" na tabela do curso Moodle.';
$string['course_shortname'] = 'O nome do campo que arquiva o nome breve do curso';
$string['course_table'] = 'O nome da tabela que contém os detalhes do curso (nome breve, nome completo, ID, etc.)';
$string['description'] = 'Você pode utilizar uma base de dados externa (de qualquer tipo) para controlar as inscrições nos cursos. É necessário prever na base de dados externa um campo correspondente a um course ID e um campo correspondente a user ID. Estes serão confrontados com os campos que você indicar nas tabelas locais de usuários de cursos.';
$string['enrolname'] = 'Base de dados externa';
$string['general_options'] = 'Opções Gerais';
$string['host'] = 'Hostname do servidor da base de dados';
$string['local_coursefield'] = 'O nome do campo da tabela do curso que usamos para inserir itens da base de dados remota (ex. idnumber)';
$string['local_fields_mapping'] = 'Campos da base de dados local de Moodle';
$string['name'] = 'Base de dados específica a ser utilizada';
$string['pass'] = 'Senha de acesso ao servidor';
$string['remote_fields_mapping'] = 'Campos da base de dados para inscrição remota';
$string['server_settings'] = 'Configuração do servidor da base de dados externa';
$string['student_coursefield'] = 'O nome do campo da tabela de inscrição dos alunos em que se encontra o ID do curso.';
$string['student_l_userfield'] = 'O nome do campo da tabela local de usuários a ser utilizado para inserir o registro remoto dos alunos (ex. idnumber)';
$string['student_r_userfield'] = 'O nome do campo da tabela remota de inscrição dos alunos em que se encontra o ID do usuário.';
$string['student_table'] = 'O nome da tabela em que as inscrições dos alunos são arquivadas.';
$string['teacher_coursefield'] = 'O nome do campo de inscrição do professor em que se encontra o ID do curso.';
$string['teacher_l_userfield'] = 'O nome do campo na tabela de usuários local usado para inserir o registro remoto de professores (ex. idnumber)';
$string['teacher_r_userfield'] = 'O nome do campo da tabela remota de inscrição de professores em que se encontra o ID do usuário.';
$string['teacher_table'] = 'O nome da tabela em que as inscrições de professores são arquivadas.';
$string['template'] = 'Opcional: cursos auto-criados podem copiar as configurações a partir de um modelo de curso. Inserir o nome breve deste modelo de curso.';
$string['type'] = 'Tipo de servidor de base de dados';
$string['user'] = 'Nome do usuário para acessar o servidor';

?>
