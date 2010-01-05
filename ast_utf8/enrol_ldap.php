<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.9.5+ (Build: 20091007) (2007101553)


$string['description'] = '<p>Pue usar un servidor LDAP pa controlar les sos matricules. Asúmese que\'l so súa árbol LDAP tien grupos qu\'asignen los cursos, y que caún d\'esos grupos/cursos van tener entraes de miembros p\'asignar estudiantes.</p>
<p>Asúmese que los cursos defínense como grupos en LDAP, y que caún los grupos tien múltiples campos de miembros  (<em>miembru</em> o <em>miembruUid</em>) que tienen una única
identificación d\'usuariu.</p>
<p>Pa usar la matriculación LDAP, los sos usuarios <strong>tienen de</strong> tener un campu de númberu id válidu. Los grupos LDAP tienen de tener esti númberu id nos campos de miembru pa qu\'un usuariu pueda matriculase nel cursu.
Normalmente, esto funciona bien si yá ta usando l\'Autenticación LDAP.</p>
<p>Les matrícules actualizaránse si los usuarios entamen la sesión. Tamién pue executar un script pa caltener les matricules sincronizaes. Vea en <em>inscribir/ldap/inscrición_ldap_sync.php</em>.</p>
<p>Esti plugin tamién se pue definir pa crear automáticamente cursos nuevos de la qu\'apaezan grupos nuevos en LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Los cursos puen crease automáticamente si hai
matricules nun cursu qu\'entá nun esiste en Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Configuración automática pa la creación de cursos';
$string['enrol_ldap_bind_dn'] = 'Si quier usar Usuariu como enllaz pa buscar usuarios, especifíquelo equí. Daqué asina como cn=ldapusuariu,o=públicu,o=org';
$string['enrol_ldap_bind_pw'] = 'Seña pal usuariu d\'enllaz.';
$string['enrol_ldap_category'] = 'Categoría pa los cursos creaos automáticamente.';
$string['enrol_ldap_contexts'] = 'Contestos LDAP';
$string['enrol_ldap_course_fullname'] = 'Opcional: Campu LDAP nel que s\'apaña\'l nome completu.';
$string['enrol_ldap_course_idnumber'] = 'Mapa pal únicu identificador nel LDAP, normalmente
<em>cn</em> o <em>uid</em>. Recomiéndase
que bloquie\'l valor si ta usando la creación automática de cursu.';
$string['enrol_ldap_course_settings'] = 'Configuración de matricula nos cursos';
$string['enrol_ldap_course_shortname'] = 'Opcional: Campu LDAP nel que s\'apaña\'l nome curtiiu.';
$string['enrol_ldap_course_summary'] = 'Opcional: Campu LDAP nel que s\'apaña\'l resume.';
$string['enrol_ldap_editlock'] = 'Bloquiar valor';
$string['enrol_ldap_general_options'] = 'Opciones xenerales';
$string['enrol_ldap_host_url'] = 'Especificar el servidor LDAP en forma d\'URL como ldap://ldap.myorg.com/ o ldaps://ldap.myorg.com/';
$string['enrol_ldap_memberattribute'] = 'Atributu de miembru LDAP';
$string['enrol_ldap_objectclass'] = 'objectClass usáu pa buscar cursos. Normalmente
posixGroup.';
$string['enrol_ldap_roles'] = 'Asignación de papeles(roles).';
$string['enrol_ldap_search_sub'] = 'Buscar miembros de grupu pa subcontestos.';
$string['enrol_ldap_server_settings'] = 'Configuración del servidor LDAP';
$string['enrol_ldap_student_contexts'] = 'Llistáu de contestos nos que s\'atopen los grupos con matricules d\'estudiante.  Separte los dixebraos contestos con ;. Por exemplu: ou=courses,o=org; ou=others,o=org';
$string['enrol_ldap_student_memberattribute'] = 'Atributu del miembru, si los usuarios pertencen
(tán matriculaos) nun grupu. Normalmente Miembru
o miembruUid.';
$string['enrol_ldap_student_settings'] = 'Configuración de la matricula del estudiante.';
$string['enrol_ldap_teacher_contexts'] = 'Llistáu de contestos nos que s\'atopen los grupos con matricules de profesores. Separte los dixebraos contestos con ;. Por exemplu: ou=courses,o=org; ou=others,o=org';
$string['enrol_ldap_teacher_memberattribute'] = 'Atributu del miembru, si los usuarios pertencen
(tán matriculaos) nun grupu. Normalmente Miembru
o miembruUid.';
$string['enrol_ldap_teacher_settings'] = 'Configuración de la matricula del profesor.';
$string['enrol_ldap_template'] = 'Opcional: los cursos creaos automáticamente puen copiar les sos configuracines d\'un modelu de cursu.';
$string['enrol_ldap_updatelocal'] = 'Actualizar datos llocales';
$string['enrol_ldap_version'] = 'La versión del protocolu LDAP que ta usando\'l so servidor.';
$string['enrolname'] = 'LDAP';

?>
