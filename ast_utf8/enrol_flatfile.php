<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.9.5+ (Build: 20091007) (2007101553)


$string['description'] = 'Esti métodu va verificar y procesar repetidamente un ficheru de testu con un formateáu especial nel llugar qu\'especifique.
El ficheru tien de tener cuatro o seis campos por ringlera, separtaos por comes:
<pre>
*  operación, papel, númberu id(usuariu), númberu id(cursu) [,tiempu anicial, tiempi final]
onde:
*  operación        = amestar | esborrar
*  papel(rol)         = estudiante | profesor | editar profesor
*  númberu id (usuariu)   = númberu id na tabla d\'usuarios NB non id
*  númberu id (cursu) = númberu id na tabla del cursu NB non id
*  tiempo anicial        = tiempu anicial (en segundos dende la época) - opcional
*  endtime          = tiempu final (en segundos dende la época) - opcional
</pre>
Podría ser daqué como esto:
<pre>
   amestar, estudiante, 5, CF101
   amestar, profesor, 6, CF101
   amestar, editar profesor, 7, CF101
   esborrar, estudante, 8, CF101
   esborrar, estudante, 17, CF101
   amestar, estudante, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Ficheru planu';
$string['filelockedmail'] = 'El ficheru de testu que ta usando pa les matricules basaes nel ficheru($a) nun va poder esborrase pel procesu cron.  Normalmente, esto quier dicir que los permisos nun son los apropiaos.  Siñale los permisos pa que Moodle pueda esborrar el ficheru, en casu contrariu va poder procesase repetidamente.';
$string['filelockedmailsubject'] = 'Erru importante: Ficheru de matricula.';
$string['location'] = 'Llocalización del ficheru';
$string['mailadmin'] = 'Notificar al alministrador per corréu ellectrónicu.';
$string['mailusers'] = 'Notificar a los usuarios per corréu ellectrónicu.';

?>
