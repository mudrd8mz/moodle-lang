<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.7.1 (2006101010)


$string['description'] = 'Este método verificará e procesará repetidamente un ficheiro de texto cun formatado especial no lugar que especifique.
O ficheiro deberá ter catro ou seis campos por liña, separados por vírgulas:
<pre>
*  operación, papel, número id(usuario), número id(curso) [,tempo inicial, tempo final]
onde:
*  operación        = engadir | eliminar
*  papel             = estudante | profesor | editar profesor
*  número id (usuario)   = número id na táboa de usuarios NB not id
*  número id (curso) = número id na táboa do curso NB not id
*  tempo inicial        = tempo inicial (en segundos desde a época) - opcional
*  endtime          = tempo final (en segundos desde a época) - opcional
</pre>
Podería ser algo como isto:
<pre>
   engadir, estudante, 5, CF101
   engadir, profesor, 6, CF101
   engadir, editar profesor, 7, CF101
   eliminar, estudante, 8, CF101
   eliminar, estudante, 17, CF101
   engadir, estudante, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Ficheiro plano';
$string['filelockedmail'] = 'O ficheiro de texto que está a utilizar para as inscricións baseadas no ficheiro($a) non poderá ser eliminado polo proceso cron.  Normalmente, isto significa que os permisos non son apropiados.  Sinale os permisos para que Moodle poda eliminar o ficheiro, no caso contrario poderá ser procesado repetidamente.';
$string['filelockedmailsubject'] = 'Erro importante: Ficheiro de inscrición';
$string['location'] = 'Localización do ficheiro';
$string['mailadmin'] = 'Notificar ao administrador por correo electrónico';
$string['mailusers'] = 'Notificar aos usuarios por correo electrónico';

?>
