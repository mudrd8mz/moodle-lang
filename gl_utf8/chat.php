<?PHP // $Id$ 
      // chat.php - created with Moodle 1.7.1 (2006101010)


$string['beep'] = 'beep';
$string['chat:chat'] = 'Falar no chat';
$string['chat:deletelog'] = 'Eliminar rexistros do chat';
$string['chat:readlog'] = 'Ler rexistros do chat';
$string['chatintro'] = 'Texto introdutorio';
$string['chatname'] = 'Nome desta sala de chat';
$string['chatreport'] = 'Sesións de chat';
$string['chattime'] = 'Próxima hora de chat';
$string['configmethod'] = 'O método normal de chat implica que os clientes contacten regularmente co servidor para obter actualizacións. Non precisa configuración e funciona en calquera parte, mais pode crear sobrecarga no servidor cando hai moitas persoas no chat. A utilización dun daemon no servidor precisa do acceso shell de Unix, mais o resultado é un ambiente de chat máis rápido e escalable.';
$string['confignormalupdatemode'] = 'Normalmente as actualizacións da sala de chat fanse eficientemente utilizando o comando <em>Keep-Alive</em> de HTTP 1.1, mas isto implica moita carga no servidor. O método máis avanzado é utilizar a estratexia <em>Stream</em> para enviar actualizacións dos usuarios. Ao utilizar <em>Stream</em> escala moito mellor (semellante ao método chat) mais pode ser que o seu servidor non o soporte.';
$string['configoldping'] = 'Canto tempo como máximo (en segundos) pode pasar antes de que detectemos que un usuario está desconectado? Este só é un límite superior, normalmente as desconexións detéctanse moi rápido. Os valores máis baixos serán máis demandados no seu servidor. Se está a utilizar o método normal,  <strong>nunca</strong> defina esta característica como máis baixa de 2 * chat_refresh_room.\'';
$string['configrefreshroom'] = 'Con que frecuencia se debería actualizar a sala de chat? (en segundos). Ao configurar este mínimo fará que a sala de chat pareza máis rápida, mais pode ser unha carga maior no seu servidor Web cando haxa moitas persoas a chatear. Se está a utilizar actualizacións <em>Stream</em>, pode seleccionar frecuencias de maior actualización. Tente con 2.';
$string['configrefreshuserlist'] = 'Con que frecuencia debería actualizarse a lista de usuarios? (en segundos)';
$string['configserverhost'] = 'O nome de servidor do computador onde está localizado o daemon do servidor';
$string['configserverip'] = 'Enderezo IP numérico que equivale ao nome do servidor arriba';
$string['configservermax'] = 'Número máximo de usuarios permitido';
$string['configserverport'] = 'Porto que utiliza o daemon no servidor';
$string['currentchats'] = 'Sesións de chat activas';
$string['currentusers'] = 'Usuarios actuais';
$string['deletesession'] = 'Eliminar esta sesión';
$string['deletesessionsure'] = 'Está certo de querer eliminar esta sesión?';
$string['donotusechattime'] = 'Non publicar horas de chat';
$string['enterchat'] = 'Prema aquí para entrar no chat agora';
$string['errornousers'] = 'Non pode encontrar usuarios!';
$string['explaingeneralconfig'] = 'Estas configuracións están <strong>sempre</strong> en vigor';
$string['explainmethoddaemon'] = 'Estas configuracións son relevantes <strong>só</strong> se seleccionou Daemon servidor de chat para o método_chat';
$string['explainmethodnormal'] = 'Estas configuracións son relevantes <strong>só</strong> se seleccionou Método normal para o método_chat';
$string['generalconfig'] = 'Configuración xeral';
$string['helpchatting'] = 'Axuda para utilizar o chat';
$string['idle'] = 'Suspendido';
$string['messagebeepseveryone'] = '$a envía beeps para todos!';
$string['messagebeepsyou'] = '$a acaba de enviarlle un beep!';
$string['messageenter'] = '$a acaba de entrar neste chat';
$string['messageexit'] = '$a deixou este chat';
$string['messages'] = 'Mensaxes';
$string['methoddaemon'] = 'Daemon do servidor do chat';
$string['methodnormal'] = 'Método normal';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Nunca eliminar mensaxes';
$string['nextsession'] = 'Próxima sesión programada';
$string['noguests'] = 'O chat non está aberto para os convidados';
$string['nomessages'] = 'Aínda non hai mensaxes';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Sesión non programada';
$string['repeatdaily'] = 'Todos os días á mesma hora';
$string['repeatnone'] = 'Sen repeticións. Publique só o tempo especificado';
$string['repeattimes'] = 'Repetir sesións';
$string['repeatweekly'] = 'Todas as semanas a mesma hora';
$string['savemessages'] = 'Gardar sesións antigas';
$string['seesession'] = 'Ver esta sesión';
$string['sessions'] = 'Sesións de Chat';
$string['strftimemessage'] = 'Hora:Minuto';
$string['studentseereports'] = 'Todos poden ver sesións antigas';
$string['viewreport'] = 'Ver as sesións antigas';

?>
