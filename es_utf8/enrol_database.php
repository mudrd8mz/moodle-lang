<?PHP // $Id$ 
      // enrol_database.php - created with Moodle 1.6 Beta 5 (2006050500)


$string['autocreate'] = 'Los cursos pueden crearse automáticamente si hay matriculaciones en un curso que aún no existe en Moodle.';
$string['autocreation_settings'] = 'Ajustes de autocreación';
$string['category'] = 'Categoría para los cursos autocreados.';
$string['course_fullname'] = 'Nombre del campo en el que se almacena el nombre completo del curso.';
$string['course_id'] = 'Nombre del campo en el que se almacena la ID del curso. Los valores de este campo se usan para compararlos con los del campo \"enrol_db_l_coursefield\" en la tabla de cursos Moodle.';
$string['course_shortname'] = 'Nombre del campo en el que se almacena el nombre corto del curso.';
$string['course_table'] = 'Nombre de la tabla en la que esperamos encontrar los detalles del curso (e.g., nombre corto, nombre largo, ID, etc.)';
$string['description'] = 'Puede usar una base de datos externa (prácticamente de cualquier tipo) para controlar sus matriculaciones. Se asume que la base de datos externa dispone de un campo que contiene un identificador del curso, y otro que contiene un identificador de usuario. Estos valores son contrastados con los campos que usted elige en el curso local y en las tablas de usuario.';
$string['enrolname'] = 'Base de datos externa';
$string['general_options'] = 'Opciones genereales';
$string['host'] = 'Nombre del servidor de la base de datos.';
$string['local_coursefield'] = 'Nombre del campo en la tabla de cursos que usamos para comparar entradas en la base de datos remota (e.g., número de ID).';
$string['local_fields_mapping'] = 'Campos de la base de datos de Moodle (local)';
$string['name'] = 'Base de datos específica a utilizar.';
$string['pass'] = 'Contraseña para acceder al servidor.';
$string['remote_fields_mapping'] = 'Campos de la base de datos (remota) de matriculación.';
$string['server_settings'] = 'Ajustes del servidor de base de datos externo.';
$string['student_coursefield'] = 'Nombre del campo en la tabla de matriculación de estudiantes en la que esperamos encontrar la ID del curso.';
$string['student_l_userfield'] = 'Nombre del campo en la tabla de usuarios local que usamos para comparar al usuario con un registro remoto para los estudiantes (e.g., número ID).';
$string['student_r_userfield'] = 'Nombre del campo en la tabla de matriculación remota de estudiantes en la que esperamos encontrar la ID de usuario.';
$string['student_table'] = 'Nombre de la tabla en que se almacenan las matriculaciones de los estudiantes.';
$string['teacher_coursefield'] = 'Nombre del campo en la tabla de matriculación del profesor en la que esperamos encontrar la ID del curso.';
$string['teacher_l_userfield'] = 'Nombre del campo de la tabla de usuario local que usamos para comparar al usuario con un registro remoto para los profesores (e.g., número ID).';
$string['teacher_r_userfield'] = 'Nombre del campo de la tabla de matriculación remota del profesor en la que esperamos encontrar la ID de usuario.';
$string['teacher_table'] = 'Nombre de la tabla en la que se almacenan las matriculaciones del profesor.';
$string['template'] = 'Opcional: los cursos auto-creados pueden copiar sus ajustes de un curso plantilla. Escriba aquí el nombre corto del curso plantilla.';
$string['type'] = 'Tipo de servidor de base de datos.';
$string['user'] = 'Nombre de usuario para acceder al servidor.';

?>
