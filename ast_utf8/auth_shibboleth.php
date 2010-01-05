<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_changepasswordurl'] = 'URL Modificar contrasinal';
$string['auth_shib_convert_data'] = 'Modificación de datos API';
$string['auth_shib_convert_data_description'] = 'Pode utilizar este API para despois poder modificar os datos providos do Shibboleth. Lea <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">LEAME</a> para máis instrucións.';
$string['auth_shib_convert_data_warning'] = 'O ficheiro non existe ou non é lexible polo proceso do servidor Web.';
$string['auth_shib_instructions'] = 'Utilice o <a href=\"$a\">acceso Shibboleth</a> para conseguir acceder vía Shibboleth, se a súa institución o soporta.<br />Doutra maneira, utilice a forma de acceso normal mostrada aquí.';
$string['auth_shib_instructions_help'] = 'Aquí deberá proporcionar as instrucións para explicar o Shibboleth aos seus usuarios. Mostraranse na páxina de acceso, na sección de instrucións. As instrucións deben incluír unha ligazón para \"<b>$a</b>\" que os usuarios preman cando desexen acceder.';
$string['auth_shib_only'] = 'Só Shibboleth';
$string['auth_shib_only_description'] = 'Verifique esta opción se unha autenticación Shibboleth fose obrigatoria';
$string['auth_shib_username_description'] = 'Nome do servidor Web Shibboleth nun entorno variable que será utilizado como nome de usuario de Moodle';
$string['auth_shibboleth_login'] = 'Acceso Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Acceso manual';
$string['auth_shibbolethdescription'] = 'Ao utilizar este método os usuarios son creados e identificados utilizando <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br/>Asegúrese de ler o <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">LEAME</a> de Shibboleth no apartado: como configurar Shibboleth no seu Moodle';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Parece estar identificado con Shibboleth, mais Moodle non recibiu atributos de usuario. Verifique que o Fornecedor de identidade enviou os atributos necesarios ($a) ao Fornecedor de servizos Moodle que está a executar ou informe o webmaster deste servidor.';
$string['shib_not_all_attributes_error'] = 'Moodle precisa certos atributos Shibboleth que non están presentes no seu caso. Os atributos son: $a<br /> Contacte co webmaster do seu servidor ou co seu Fornecedor de identidade.';
$string['shib_not_set_up_error'] = 'A autenticación Shibboleth non parece estar definida correctamente porque non están presentes as variables do ámbito Shibboleth nesta páxina. Consulte <a href=\"README.txt\">LEAME</a> para máis instrucións de como definir a autenticación Shibboleth ou contacte co webmaster desta instalación Moodle.';