<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.7.1 (2006101010)


$string['description'] = '<p>Pode utilizar un servidor LDAP para controlar as súas inscricións.  
                          É asumido que a súa árbore LDAP contén grupos que mapean os 
                          cursos, e que cada un deses grupos/cursos terán 
                          entradas de membros para mapear estudantes.</p>
                          <p>É asumido que os cursos son definidos como grupos en 
                          LDAP, e que cada grupo ten múltiples campos de membros 
                          (<em>membro</em> ou <em>membroUid</em>) que conteñen unha única
                          identificación de usuario.</p>
                          <p>Para utilizar a inscrición LDAP, os seus usuarios <strong>deben</strong> 
                          ter un campo de número id válido. Os grupos LDAP deben ter 
                          este número id nos campos de membro para que un usuario poida inscribirse 
                          no curso.
                          Normalmente, isto funciona ben se xa está a utilizar a Autenticación LDAP 
                          .</p>
                          <p>As inscricións serán actualizadas cando os usuarios inicien a sesión.
                           Tamén pode executar un script para manter as inscricións sincronizadas. Vexa en 
                          <em>inscribir/ldap/inscrición_ldap_sync.php</em>.</p>
                          <p>Este plugin tamén pode ser definido para crear automaticamente novos 
                          cursos ao aparecer grupos novos en LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Os cursos poden ser creados automaticamente se hai
                                    inscricións para un curso que aínda non exista 
                                    en Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Configuración automática para creación de cursos';
$string['enrol_ldap_bind_dn'] = 'Se desexa utilizar Usuario de ligazón para buscar usuarios, 
                                 especifíqueo aquí. Algo como 
                                 cn=ldapusuarior,ou=público,o=org';
$string['enrol_ldap_bind_pw'] = 'Contrasinal para o usuario de ligazón.';
$string['enrol_ldap_category'] = 'Categoría para cursos creados automaticamente.';
$string['enrol_ldap_course_fullname'] = 'Opcional: Campo LDAP de onde se colle o nome completo.';
$string['enrol_ldap_course_idnumber'] = 'Mapa para o único identificador no LDAP, normalmente
                                         <em>cn</em> ou <em>uid</em>. Recoméndase
                                         que bloquee o valor se está a utilizar
                                         a creación automática do curso.';
$string['enrol_ldap_course_settings'] = 'Configuración de inscrición nos cursos';
$string['enrol_ldap_course_shortname'] = 'Opcional: Campo LDAP de onde se colle o nome curto.';
$string['enrol_ldap_course_summary'] = 'Opcional: Campo LDAP de onde se colle o resumo.';
$string['enrol_ldap_editlock'] = 'Bloquear valor';
$string['enrol_ldap_general_options'] = 'Opcións xerais';
$string['enrol_ldap_host_url'] = 'Especificar o servidor LDAP en forma de URL como 
                                  ldap://ldap.myorg.com/ 
                                  ou ldaps://ldap.myorg.com/';
$string['enrol_ldap_objectclass'] = 'objectClass utilizado para buscar cursos. Normalmente
                                     posixGroup.';
$string['enrol_ldap_search_sub'] = 'Buscar membros de grupo para subcontextos.';
$string['enrol_ldap_server_settings'] = 'Configuarción do servidor LDAP';
$string['enrol_ldap_student_contexts'] = 'Lista de contextos onde son localizados 
										  os grupos con inscricións de estudante.
                                          Separe os diferentes 
                                          contextos con ;. Por exemplo: 
                                          ou=courses,o=org; ou=others,o=org';
$string['enrol_ldap_student_memberattribute'] = 'Atributo do membro, cando os usuarios pertencen
                                          (están inscritos) a un grupo. Normalmente Membro
                                          ou membroUid.';
$string['enrol_ldap_student_settings'] = 'Configuración da inscrición do estudante';
$string['enrol_ldap_teacher_contexts'] = 'Lista de contextos onde son localizados os grupos 
										  con inscricións de profesores. Separe os diferentes
                                          contextos con ;. Por exemplo: 
                                          ou=courses,o=org; ou=others,o=org';
$string['enrol_ldap_teacher_memberattribute'] = 'Atributo do membro, cando os usuarios pertencen
                                          (están inscritos) a un grupo. Normalmente Membro
                                          ou membroUid.';
$string['enrol_ldap_teacher_settings'] = 'Configuración da inscrición do profesor';
$string['enrol_ldap_template'] = 'Opcional: os cursos creados automaticamente poden copiar 
                                  as suas configuracións dun modelo de curso.';
$string['enrol_ldap_updatelocal'] = 'Actualizar datos locais';
$string['enrol_ldap_version'] = 'A versión do protocolo LDAP que está a utilizar o seu servidor.';
$string['enrolname'] = 'LDAP';

?>
