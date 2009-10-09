<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Opción de autenticación';
$string['accesCAS'] = 'Usuarios CAS';
$string['accesNOCAS'] = 'Outros usuarios';
$string['auth_cas_auth_user_create'] = 'Crear usuarios exteriormente';
$string['auth_cas_baseuri'] = 'URI do servidor (en branco se non hai baseUri)<br />Por exemplo, se o servidor CAS responde a host.domaine.fr/CAS/ entón<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = 'Non pode continuar sen modificar o seu contrasinal, mais non hai unha páxina dispoñible para modificalo. Contacte co seu administrador Moodle.';
$string['auth_cas_cantconnect'] = 'LDAP, parte do módulo CAS, non pode conectarse ao servidor: $a';
$string['auth_cas_casversion'] = 'Versión';
$string['auth_cas_changepasswordurl'] = 'URL para modificar contrasinal';
$string['auth_cas_create_user'] = 'Active isto se desexa introducir usuarios identificados a través do CAS na base de datos de Moodle. De non ser así só poderán acceder os usuarios que xa existen na base de datos.';
$string['auth_cas_create_user_key'] = 'Crear usuario';
$string['auth_cas_enabled'] = 'Activar isto se desexa utilizar a autenticación CAS.';
$string['auth_cas_hostname'] = 'Nome do servidor CAS<br />ex.: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Nome do servidor';
$string['auth_cas_invalidcaslogin'] = 'O seu acceso fallou. Podería non estar autorizado';
$string['auth_cas_language'] = 'Idioma seleccionado';
$string['auth_cas_language_key'] = 'Idioma';
$string['auth_cas_logincas'] = 'Acceso de conexión segura';
$string['auth_cas_logoutcas'] = 'Cambie a \'si\' se quere saír do CAS cando se desconecte de Moodle';
$string['auth_cas_logoutcas_key'] = 'Saír do CAS';
$string['auth_cas_multiauth'] = 'Cambie a \'si\' se quere ter multi-autenticación (CAS + outra autenticación)';
$string['auth_cas_multiauth_key'] = 'Multi-autenticación';
$string['auth_cas_port'] = 'Porto do servidor CAS';
$string['auth_cas_port_key'] = 'Porto';
$string['auth_cas_proxycas'] = 'Cambie a \'si\' se quere utilizar CAS en modo proxy';
$string['auth_cas_proxycas_key'] = 'Modo proxy';
$string['auth_cas_server_settings'] = 'Configuración do servidor CAS';
$string['auth_cas_text'] = 'Conexión segura';
$string['auth_cas_use_cas'] = 'Utilice CAS';
$string['auth_cas_version'] = 'Versión de CAS';
$string['auth_casdescription'] = 'Este método utiliza un servidor CAS (Servizo Central de Autenticación) para autenticar aos usuarios nun contexto SSO. Tamén pode utilizar unha simple autenticación LDAP. Se o nome do usuario e o contrasinal dados son válidos de acordo co CAS, Moodle creará unha entrada de novo usuario nesta base de datos, collendo de LDAP, se fose preciso, os atributos do usuario. Nos seguintes accesos só se verificarán o nome de usuario e o contrasinal.';
$string['auth_casnotinstalled'] = 'Non pode utilizar a autenticación CAS. O módulo de PHP LDAP non está instalado.';
$string['auth_castitle'] = 'Utilice o servidor CAS (SSO)';