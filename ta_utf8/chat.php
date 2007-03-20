<?PHP // $Id$ 
      // chat.php - created with Moodle 1.7.1 (2006101010)


$string['beep'] = 'மணி';
$string['chat:chat'] = 'காலந்துரையாடலில் பேசு';
$string['chat:deletelog'] = 'காலந்துரையாடலின் அறிக்கைகளை நீக்குக';
$string['chat:readlog'] = 'காலந்துரையாடலின் அறிக்கைகளை வாசிக்க';
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
$string['deletesessionsure'] = 'இந்தப் பகுதியை நீக்க விரும்புகிறீர்களா?';
$string['donotusechattime'] = 'Don\'t publish any chat times';
$string['enterchat'] = 'கலந்துரையாடலில் கலந்து கொள்ள இங்கே சொடுக்கவும்';
$string['errornousers'] = 'எந்தப் பயனாளரையும் கண்டுபிடிக்க முடியவில்லை!';
$string['explaingeneralconfig'] = 'These settings are <strong>always</strong> into effect';
$string['explainmethoddaemon'] = 'These settings matter <strong>only</strong> if you have selected \"Chat server daemon\" for chat_method';
$string['explainmethodnormal'] = 'These settings matter <strong>only</strong> if you have selected \"Normal method\" for chat_method';
$string['generalconfig'] = 'பொதுவான செம்மைப்படுத்தல்';
$string['helpchatting'] = 'உதவியுடன் உரையாடு';
$string['idle'] = 'உபயோகத்திலில்லை';
$string['messagebeepseveryone'] = '$a ஒவ்வொருவருக்கும் ஒலி எழுப்பு!';
$string['messagebeepsyou'] = '$a has just beeped you!';
$string['messageenter'] = '$a has just entered this chat';
$string['messageexit'] = '$a கலந்துரையாடலிலிருந்து விலிகிவிட்டார்';
$string['messages'] = 'தகவல்கள்';
$string['methoddaemon'] = 'Chat server daemon';
$string['methodnormal'] = 'சாதாரண முறை';
$string['modulename'] = 'உரையாடல்';
$string['modulenameplural'] = 'உரையாடல்கள்';
$string['neverdeletemessages'] = 'தகவல்களை நீக்க முடியாது';
$string['nextsession'] = 'அடுத்த பகுதிக்கான காலம்';
$string['noguests'] = 'விருந்தினர்கள் இந்த கலந்துரையாடலில் கலந்து கொள்ள இயலாது';
$string['nomessages'] = 'எந்த தகவலும் இதுவரை இல்லை';
$string['normalkeepalive'] = 'தனியாக வைத்திரு';
$string['normalstream'] = 'தெடர்ந்து';
$string['noscheduledsession'] = 'பகுதிக்கான அட்டவணை இல்லை';
$string['repeatdaily'] = 'ஒவ்வொரு நாளும் இதே நேரத்தில்';
$string['repeatnone'] = 'No repeats - publish the specified time only';
$string['repeattimes'] = 'சுழற்சியான அமர்வுகள்';
$string['repeatweekly'] = 'ஒவ்வொரு வாரமும் இதே நேரத்தில்';
$string['savemessages'] = 'முடிந்த அமர்வுகளை சேமிக்க';
$string['seesession'] = 'இந்த அமர்வைப் காண்';
$string['sessions'] = 'உரையாடல் அமர்வு';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'முடிந்த அமர்வுகளை எவராலும் காண முடியும்';
$string['viewreport'] = 'முடிந்த உரையாடல் அமர்வுகளை காண';

?>
