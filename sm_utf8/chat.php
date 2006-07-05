<?PHP // $Id$ 
      // chat.php - created with Moodle 1.4.1 (2004083101)


$string['beep'] = 'pa\'o, i\'i';
$string['chatintro'] = 'Upu tomua';
$string['chatname'] = 'Igoa o lenei potu talanoa';
$string['chatreport'] = 'Taimi o talanoaga';
$string['chattime'] = 'Le isi taimi talanoa';
$string['configmethod'] = 'The normal chat method involves the clients regularly contacting the server for updates. It requires no configuration and works everywhere, but it can create a large load on the server with many chatters.  Using a server daemon requires shell access to Unix, but it results in a fast scalable chat environment.';
$string['configoldping'] = 'What is the maximum time that may pass before we detect that a user has disconnected (in seconds)? This is just an upper limit, as usually disconnects are detected very quickly. Lower values will be more demanding on your server. If you are using the normal method, <strong>never</strong> set this lower than 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'How often should the chat room itself be refreshed? (in seconds).  Setting this low will make the chat room seem quicker, but it may place a higher load on your web server when many people are chatting';
$string['configrefreshuserlist'] = 'How often should the list of users be refreshed? (in seconds)';
$string['configserverhost'] = 'The hostname of the computer where the server daemon is';
$string['configserverip'] = 'The numerical IP address that matches the above hostname';
$string['configservermax'] = 'Aofa\'iga o tagata e fa\'atagaina';
$string['configserverport'] = 'Port to use on the server for the daemon';
$string['currentchats'] = 'Talanoaga o lo\'o faia i le taimi nei';
$string['currentusers'] = 'E o lo\'o i ai i le taimi nei';
$string['deletesession'] = 'Tape lenei vaega';
$string['deletesessionsure'] = 'Ua e mautinoa e te mana\'o e tap lenei vaega?';
$string['donotusechattime'] = 'Aua ne\'i fa\'aalia ni taimi talanoa';
$string['enterchat'] = 'Kiliki i \'i e ulu atu ai loa i le potu talanoa';
$string['errornousers'] = 'E le mafai ona maua nisi o fa\'aaogaina!';
$string['explaingeneralconfig'] = 'These settings are <strong>always</strong> into effect';
$string['explainmethoddaemon'] = 'These settings matter <strong>only</strong> if you have selected \"Chat server daemon\" for chat_method';
$string['explainmethodnormal'] = 'These settings matter <strong>only</strong> if you have selected \"Normal method\" for chat_method';
$string['generalconfig'] = 'Faufauga fa\'alautele';
$string['helpchatting'] = 'Fesoasoani i le talanoaga';
$string['idle'] = 'Idle';
$string['messagebeepseveryone'] = '$a pa\'o i tagata uma!';
$string['messagebeepsyou'] = '$a has just beeped you!';
$string['messageenter'] = '$a fa\'atoa ulu mai i lenei talanoaga';
$string['messageexit'] = '$a ua alu ese mai i lenei talanoaga';
$string['messages'] = 'Fe\'au';
$string['methoddaemon'] = 'Chat server daemon';
$string['methodnormal'] = 'Metotia masani';
$string['modulename'] = 'Talanoa';
$string['modulenameplural'] = 'Talanoa';
$string['neverdeletemessages'] = 'Aua lava ne\'i tapeina ni fe\'au';
$string['nextsession'] = 'Le isi taimi fa\'atulaga';
$string['noguests'] = 'Ua tatala atu le talanoaga i e asiasi mai';
$string['nomessages'] = 'E leai ni fe\'au o i ai';
$string['repeatdaily'] = 'I le taimi lava e tasi i aso uma';
$string['repeatnone'] = 'E leai se toe faia - fa\'aali atu na o le taimi fa\'atulagaina';
$string['repeattimes'] = 'Toe faia le vaega';
$string['repeatweekly'] = 'I le taimi lava e tasi i vaiaso uma';
$string['savemessages'] = 'Sefe taimi ua te\'a';
$string['seesession'] = 'Tilotilo i lenei vaega';
$string['sessions'] = 'Fa\'avaegaina o talanoaga';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'E mafai ona va\'ai uma tagata uma i mea ua te\'a';
$string['viewreport'] = 'Va\'ai i talanoaga ua te\'a';

?>
