<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Non pode conectar á base de datos de autenticación especificada...';
$string['auth_dbchangepasswordurl_key'] = 'URL Modificar contrasinal';
$string['auth_dbdebugauthdb'] = 'Depurar ADPdb';
$string['auth_dbdebugauthdbhelp'] = 'Depurar conexión ADOdb a unha base de datos externa - Utilizalo cando se estea obtendo unha páxina en branco durante o inicio de sesión. Non é conveniente para sitios de produción.';
$string['auth_dbdeleteuser'] = 'Borrado o usuario $a[0] id $a[1]';
$string['auth_dbdeleteusererror'] = 'Erro ao borrar o usuario $a';
$string['auth_dbdescription'] = 'Este método utiliza unha táboa da base de datos externa para verificar se o nome de usuario e o contrasinal son válidos. Se a conta é nova, entón a información doutros campos tamén pode ser copiada en Moodle.';
$string['auth_dbextencoding'] = 'Codificación da base de datos externa';
$string['auth_dbextencodinghelp'] = 'Codificación do usuario en base de datos externa';
$string['auth_dbextrafields'] = 'Estes campos son opcionais. Pode escoller encher algúns campos do usuario de Moodle con información dos <b>campos da base de datos externa</b> que especifique aquí. <p>Se o deixa en branco, entón utilizaranse por defecto.</p><p>Nos dous casos, o usuario poderá editar eses campos despois de entrar</p>.';
$string['auth_dbfieldpass'] = 'Nome do campo que contén os contrasinais';
$string['auth_dbfieldpass_key'] = 'Campo do contrasinal';
$string['auth_dbfielduser'] = 'Nome do campo que contén os nomes dos usuarios';
$string['auth_dbfielduser_key'] = 'Campo do nome do usuario';
$string['auth_dbhost'] = 'O computador que hospeda o servidor da base de datos.';
$string['auth_dbhost_key'] = 'Servidor';
$string['auth_dbinsertuser'] = 'Usuario introducido $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = 'Erro ao introducir o usuario $a';
$string['auth_dbname'] = 'Nome da base de datos';
$string['auth_dbname_key'] = 'Nome da base de datos';
$string['auth_dbpass'] = 'Contrasinal correspondente ao nome de usuario de arriba';
$string['auth_dbpass_key'] = 'Contrasinal';
$string['auth_dbpasstype'] = '<p>Especifique o formato que utiliza o campo do contrasinal. A encriptación MD5 é útil para conectar con outras aplicacións Web como PostNuke.</p> <p>Utilice interna se desexa que a base de datos externa xestione os nomes de usuario e enderezos de correo electrónico, mais que Moodle xestione os contrasinais. Se utiliza interna, <i>debe</i> proporcionar un poboado campo de enderezos electrónicos na base de datos externa, e debe executar admin/cron.php regularmente. Moodle enviará un correo electrónico co contrasinal temporal aos novos usuarios.</p>';
$string['auth_dbpasstype_key'] = 'Formato do contrasinal';
$string['auth_dbreviveduser'] = 'Recuperado o usuario $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'Erro ao recuperar o usuario $a';
$string['auth_dbsetupsql'] = 'Comando de axuste SQL';
$string['auth_dbsetupsqlhelp'] = 'Comando SQL para a configuración especial da base de datos, a miúdo emprégase para a codificación de comunicación - exemplo para MySQL e PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Suspendido o usuario $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'Erro ao suspender o usuario $a';
$string['auth_dbsybasequoting'] = 'Utilizar citas de sybase';
$string['auth_dbsybasequotinghelp'] = 'Escapado de comiña simple ao estilo Sybase - necesario para Oracle, MS SQL e algunhas outras bases de datos. Non o utilice para MySQL!';
$string['auth_dbtable'] = 'Nome da táboa na base de datos';
$string['auth_dbtable_key'] = 'Táboa';
$string['auth_dbtitle'] = 'Utilice unha base de datos externa';
$string['auth_dbtype'] = 'O tipo de base de datos (Ver a <a href=\"../lib/adodb/readme.htm#drivers\">documentación de ADOdb</a> para obter máis detalles)';
$string['auth_dbtype_key'] = 'Base de datos';
$string['auth_dbupdatinguser'] = 'Actualizando o usuario $a[0] id $a[1]';
$string['auth_dbuser'] = 'Nome de usuario con acceso de lectura á base de datos';
$string['auth_dbuser_key'] = 'Usuario da base de datos';
$string['auth_dbusernotexist'] = 'Non pode actualizar un usuario que non existe: $a';
$string['auth_dbuserstoadd'] = 'Utilizar entradas para engadir: $a';
$string['auth_dbuserstoremove'] = 'Utilizar entradas para eliminar: $a';