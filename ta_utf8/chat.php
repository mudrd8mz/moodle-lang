<?PHP // $Id$ 
      // chat.php - created with Moodle 1.6 (2006050506)


$string['beep'] = 'மணி';
$string['chatintro'] = 'அறிமுக எழுத்து';
$string['chatname'] = 'இந்த உரையாடல் அறையின் பெயர்';
$string['chatreport'] = 'உரையாடல் அமர்வுகள்';
$string['chattime'] = 'அடுத்த உரையாடல் நேரம்';
$string['configmethod'] = 'The normal chat method involves the clients regularly contacting the server for updates. It requires no configuration and works everywhere, but it can create a large load on the server with many chatters.  Using a server daemon requires shell access to Unix, but it results in a fast scalable chat environment.';
$string['confignormalupdatemode'] = 'Chatroom updates are normally served efficiently using the <em>Keep-Alive</em> feature of HTTP 1.1, but this is still quite heavy on the server. A more advanced method is to use the <em>Stream</em> strategy to feed updates to the users. Using <em>Stream</em> scales much better (similar to the chatd method) but may not be supported by your server.';
$string['configoldping'] = 'What is the maximum time that may pass before we detect that a user has disconnected (in seconds)? This is just an upper limit, as usually disconnects are detected very quickly. Lower values will be more demanding on your server. If you are using the normal method, <strong>never</strong> set this lower than 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'How often should the chat room itself be refreshed? (in seconds).  Setting this low will make the chat room seem quicker, but it may place a higher load on your web server when many people are chatting. If you are using <em>Stream</em> updates, you can select higher refresh frequencies -- try with 2.';
$string['configrefreshuserlist'] = 'How often should the list of users be refreshed? (in seconds)';
$string['configserverhost'] = 'The hostname of the computer where the server daemon is';
$string['configserverip'] = 'The numerical IP address that matches the above hostname';
$string['configservermax'] = 'Max number of clients allowed';
$string['configserverport'] = 'Port to use on the server for the daemon';
$string['currentchats'] = 'உரையாடல் அமர்வுகளின் செயலாக்கம்';
$string['currentusers'] = 'நடப்பு பயனாளர்கள்';
$string['deletesession'] = 'இந்த அமர்வு நீக்கம்';
$string['deletesessionsure'] = 'Are you sure you want to delete this session?';
$string['donotusechattime'] = 'Don\'t publish any chat times';
$string['enterchat'] = 'Click here to enter the chat now';
$string['errornousers'] = 'Could not find any users!';
$string['explaingeneralconfig'] = 'These settings are <strong>always</strong> into effect';
$string['explainmethoddaemon'] = 'These settings matter <strong>only</strong> if you have selected \"Chat server daemon\" for chat_method';
$string['explainmethodnormal'] = 'These settings matter <strong>only</strong> if you have selected \"Normal method\" for chat_method';
$string['generalconfig'] = 'பொதுவான செம்மைப்படுத்தல்';
$string['helpchatting'] = 'உதவியுடன் உரையாடு';
$string['idle'] = 'Idle';
$string['messagebeepseveryone'] = '$a beeps everyone!';
$string['messagebeepsyou'] = '$a has just beeped you!';
$string['messageenter'] = '$a has just entered this chat';
$string['messageexit'] = '$a has left this chat';
$string['messages'] = 'தகவல்கள்';
$string['methoddaemon'] = 'Chat server daemon';
$string['methodnormal'] = 'சாதாரண முறை';
$string['modulename'] = 'உரையாடல்';
$string['modulenameplural'] = 'உரையாடல்கள்';
$string['neverdeletemessages'] = 'தகவல்களை நீக்க முடியாது';
$string['nextsession'] = 'Next scheduled session';
$string['noguests'] = 'The chat is not open to guests';
$string['nomessages'] = 'No messages yet';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'தெடர்ந்து';
$string['noscheduledsession'] = 'No scheduled session';
$string['repeatdaily'] = 'At the same time every day';
$string['repeatnone'] = 'No repeats - publish the specified time only';
$string['repeattimes'] = 'சுழற்சியான அமர்வுகள்';
$string['repeatweekly'] = 'At the same time every week';
$string['savemessages'] = 'முடிந்த அமர்வுகளை சேமிக்க';
$string['seesession'] = 'இந்த அமர்வைப் காண்';
$string['sessions'] = 'உரையாடல் அமர்வு';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'முடிந்த அமர்வுகளை எவராலும் காண முடியும்';
$string['viewreport'] = 'முடிந்த உரையாடல் அமர்வுகளை காண ';

?>
