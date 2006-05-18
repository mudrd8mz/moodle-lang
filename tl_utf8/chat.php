<?PHP // $Id$ 
      // chat.php - created with Moodle 1.7 dev (2006050500)


$string['beep'] = 'bip';
$string['chatintro'] = 'Panimulang teksto';
$string['chatname'] = 'Pangalan ng silid-huntahan na ito';
$string['chatreport'] = 'Sesyon ng Huntahan';
$string['chattime'] = 'Susunod na oras ng huntahan';
$string['configmethod'] = 'Ang normal na paraan ng huntahan ay regular na kinokontak ng mga kliyente ang server para sa mga pagbabago.  Hindi nito kailangang isaayos at gumagana sa lahat ng lugar, nguni\'t makapagpapabigat ito sa trabaho ng server kung maraming naghuhuntahan.  Ang paggamit ng server daemon ay nangangailangan ng shell access sa Unix, subali\'t nagreresulta ito sa isang mabilis at nai-scale na kapaligirang panghuntahan.';
$string['confignormalupdatemode'] = 'Ang mga pagbabago sa sa Silid-huntahan ay karaniwang napapasinop sa pamamagitan ng katangiang <em>Keep-Alive</em> ng HTTP 1.1, pero mabigat pa rin ito para sa server. Ang higit na abanteng paraan ay gumamit ng estratehiyang <em>Stream</em> para makapagbigay ng mga pagbabago sa mga taong gumagamit.  Nag-i-scale nang mas mahusay ang <em>Stream</em> (tulad ng paraang chatd) pero maaring hindi ito suportado ng server ninyo. ';
$string['configoldping'] = 'Ano ang maksimum na oras na kailangang lumipas bago namin maramdaman na ang isang tao ay dina konektado (sa segundo)?  Pantaas na limitasyon lamang ito, dahil kadalasan ay nararamdaman kaagad ang pagdiskonek nang madali.  Ang mas mababang halaga ay mas matrabaho para sa iyong server.  Kung ginagamit mo ang normal na paraan, <strong>huwag kailanman</strong> itatakda ito nang mas mababa sa 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Gaano kalimit sasariwain ang mismong silid-huntahan? (sa segundo).  Mukhang mabilis ang silid-huntahan kapag itinakda ito na mababa, nguni\'t maaaring magpabigat ito sa trabaho ng web server mo kung marami ang naghuhuntahan.  Kung ginagamit mo ang pagbabagong <em>Stream</em>, maaari kang gumamit ng mas mataas na kalimitan ng pagsariwa -- tangkain mo ang 2.';
$string['configrefreshuserlist'] = 'Gaano kalimit dapat sariwain ang listahan ng mga tao? (sa segundo)';
$string['configserverhost'] = 'Ang hostname ng kompyuter kung saan naroon ang server daemon';
$string['configserverip'] = 'Ang numerong IP address na katugma ng hostname sa itaas';
$string['configservermax'] = 'Maks na bilang ng pinahihintulutang kliyente';
$string['configserverport'] = 'Port na gagamitin sa server para sa daemon';
$string['currentchats'] = 'Mga aktibong sesiyong huntahan';
$string['currentusers'] = 'Mga kasalukuyang tao';
$string['deletesession'] = 'Burahin ang sesiyon na ito';
$string['deletesessionsure'] = 'Talaga bang nais mong burahin ang sesiyong ito?';
$string['donotusechattime'] = 'Huwag maglathala ng anumang oras ng huntahan';
$string['enterchat'] = 'Iklik ito para makapasok sa huntahan ngayon';
$string['errornousers'] = 'Walang matagpuang tao!';
$string['explaingeneralconfig'] = '<strong>Palaging</strong> pinagagana ang mga kaayusang ito';
$string['explainmethoddaemon'] = 'Mahalaga ang mga kaayusang ito <strong>tangi kung</strong> pinilì mo ang \"Huntahan server daemon\" para sa chat_method';
$string['explainmethodnormal'] = 'Mahalaga ang mga kaayusang ito <strong>tangi kung</strong> pinilì mo ang \"Normal na paraan\" para sa chat_method';
$string['generalconfig'] = 'Pangkalahatang pagsasaayos';
$string['helpchatting'] = 'Tulong sa pagkikipaghuntahan';
$string['idle'] = 'Diginagamit';
$string['messagebeepseveryone'] = 'Binip ang lahat ni $a!';
$string['messagebeepsyou'] = 'Binip ka ni $a !';
$string['messageenter'] = 'Pumasok si $a sa huntahang ito';
$string['messageexit'] = 'Umalis na si $a sa huntahang ito';
$string['messages'] = 'Mga Mensahe';
$string['methoddaemon'] = 'Huntahan server daemon';
$string['methodnormal'] = 'Normal na paraan';
$string['modulename'] = 'Huntahan';
$string['modulenameplural'] = 'Mga Huntahan';
$string['neverdeletemessages'] = 'Huwag kailanman buburahin ang mga mensahe';
$string['nextsession'] = 'Susunod na nakaiskedyul na sesiyon';
$string['noguests'] = 'Hindi bukás ang huntahan sa mga bisita';
$string['nomessages'] = 'Wala pang mensahe';
$string['noscheduledsession'] = 'Walang nakaiskedyul na sesiyon';
$string['repeatdaily'] = 'Sa parehong oras araw-araw';
$string['repeatnone'] = 'Walang paguulit - tanging ang  partikular na oras ang ilathala';
$string['repeattimes'] = 'Ulitin ang mga sesiyon';
$string['repeatweekly'] = 'Sa parehong oras linggo-linggo';
$string['savemessages'] = 'Isave ang mga nakalipas na sesiyon';
$string['seesession'] = 'Tingnan ang sesiyon na ito';
$string['sessions'] = 'Mga sesyon ng Huntahan';
$string['studentseereports'] = 'Makikita ng lahat ang mga nakaraang sesiyon';
$string['viewreport'] = 'Tingnan ang mga nakalipas na sesiyon ng huntahan';

?>
