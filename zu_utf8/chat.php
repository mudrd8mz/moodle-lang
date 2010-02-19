<?PHP // $Id$ 
      // chat.php - created with Moodle 1.9.4 (Build: 20090128) (2007101540)
      // local modifications from http://free.icyber.co.za


$string['autoscroll'] = 'Kuzozenzakalela';
$string['beep'] = 'beep';
$string['chat:chat'] = 'Access a chat room';
$string['chat:deletelog'] = 'Susa lama chat logs';
$string['chat:readlog'] = 'Funda ama chat logs';
$string['chat:talk'] = 'Xoxa exhoxhweni';
$string['chatintro'] = 'Amagama esingeniso';
$string['chatname'] = 'Igama lalendawo yokuxoxa';
$string['chatreport'] = 'Izikhathi zokuxoxa';
$string['chattime'] = 'Isikhathi esilandelayo sokuxoxa';
$string['configmethod'] = 'The normal chat method involves the clients regularly contacting the server for updates. It requires no configuration and works everywhere, but it can create a large load on the server with many chatters. Using a server daemon requires shell access to Unix, but it results in a fast scalable chat environment.';
$string['confignormalupdatemode'] = 'Chatroom updates are normally served efficiently using the <em>Keep-Alive</em> feature of HTTP 1.1, but this is still quite heavy on the server. A more advanced method is to use the <em>Stream</em> strategy to feed updates to the users. Using <em>Stream</em> scales much better (similar to the chatd method) but may not be supported by your server.';
$string['configoldping'] = 'What is the maximum time that may pass before we detect that a user has disconnected (in seconds)? This is just an upper limit, as usually disconnects are detected very quickly. Lower values will be more demanding on your server. If you are using the normal method, <strong>never</strong> set this lower than 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'How often should the chat room itself be refreshed? (in seconds). Setting this low will make the chat room seem quicker, but it may place a higher load on your web server when many people are chatting. If you are using <em>Stream</em> updates, you can select higher refresh frequencies -- try with 2.';
$string['configrefreshuserlist'] = 'Kukangaki lapho uveza khona abasebenzisi?(ngokwemizuzu)';
$string['configserverhost'] = 'The hostname of the computer where the server daemon is';
$string['configserverip'] = 'The numerical IP address that matches the above hostname';
$string['configservermax'] = 'Inamba yabasebenzisi eveunyelwe';
$string['configserverport'] = 'Port to use on the server for the daemon';
$string['currentchats'] = 'Active chat sessions';
$string['currentusers'] = 'Abasebenzisa bamanje';
$string['deletesession'] = 'Susa lesisikhathi';
$string['deletesessionsure'] = 'Unesiqiniseko sokususa lesisikhathi';
$string['donotusechattime'] = 'Ungavule nanoma yisiphi isikhathi sokugxoxa emphakathini';
$string['enterchat'] = 'Cindezela la ukuze ungene egxoxweni';
$string['errornousers'] = 'Akutholakali basebenzisi!';
$string['explaingeneralconfig'] = 'These settings are <strong>always</strong> used';
$string['explainmethoddaemon'] = 'These settings matter <strong>only</strong> if you have selected \"Chat server daemon\" for chat_method';
$string['explainmethodnormal'] = 'These settings matter <strong>only</strong> if you have selected \"Normal method\" for chat_method';
$string['generalconfig'] = 'General configuration';
$string['helpchatting'] = 'Ukusizwa ngokuxoxa';
$string['idle'] = 'Idle';
$string['messagebeepseveryone'] = '$a beeps everyone!';
$string['messagebeepsyou'] = '$a has just beeped you!';
$string['messageenter'] = '$a ungena manje kulegxoxo';
$string['messageexit'] = '$a Uyishile legxoxo';
$string['messages'] = 'Imilayezo';
$string['method'] = 'Indlela yokuxoxa';
$string['methoddaemon'] = 'Chat server daemon';
$string['methodnormal'] = 'Indlela ejwayelekile';
$string['modulename'] = 'Igxoxo';
$string['modulenameplural'] = 'Izigxoxo';
$string['neverdeletemessages'] = 'Ungayisusi imilayezo';
$string['nextsession'] = 'Isikhathi esilandelayo';
$string['noguests'] = 'Ukuxoxa okuvuliwe kubavakashi';
$string['nomessages'] = 'Akulamilayezo okwamanje';
$string['normalkeepalive'] = 'Kugcine kuphila';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'No scheduled session';
$string['oldping'] = 'Susa isikhathi sokuphela';
$string['pastchats'] = 'Izikhathi ezendlule zokuxoxa';
$string['refreshroom'] = 'Refresh room';
$string['refreshuserlist'] = 'Refresh user list';
$string['removemessages'] = 'Susa yonke imilayezo';
$string['repeatdaily'] = 'Ngesikhathi esisodwa njalo ngosuku';
$string['repeatnone'] = 'Akuphindwa-publish the specified time only';
$string['repeattimes'] = 'Phinda okweziwe';
$string['repeatweekly'] = 'Ngesikhathi esisodwa njalo ngeviki';
$string['savemessages'] = 'Gcina indlela endlule.';
$string['seesession'] = 'Buka lesi sikhathi';
$string['serverhost'] = 'Igama le server';
$string['serverip'] = 'Server ip';
$string['servermax'] = 'Inani labasebenzisi';
$string['serverport'] = 'Server port';
$string['sessions'] = 'Izikhathi zokuxoxa';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Wonke umuntu angabana izixhoxo ezendlule';
$string['updatemethod'] = 'Update method';
$string['viewreport'] = 'Bheka izikhathi ezendlule zokuxoxa';

?>
