<?PHP // $Id$ 
      // mnet.php - created with Moodle 1.8.4 (2007021540)


$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (automātiski parakstīts)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (parakstīts)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP nešifrēts';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (automātiski parakstīts)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (parakstīts)';
$string['aboutyourhost'] = 'Par jūsu serveri';
$string['accesslevel'] = 'Piekļuves līmenis';
$string['addhost'] = 'Pievienot resursdatoru';
$string['addnewhost'] = 'Pievienot jaunu resursdatoru';
$string['addtoacl'] = 'Pievienot piekļuves vadībai';
$string['allow'] = 'Atļaut';
$string['authfail_nosessionexists'] = 'Autorizēšana neizdevās: MNET sesija nepastāv.';
$string['authfail_sessiontimedout'] = 'Autorizēšana neizdevās: MNET sesijā ir iestājies taimauts.';
$string['authfail_usermismatch'] = 'Autorizēšana neizdevās: neatbilst lietotājs.';
$string['authmnetautoadddisabled'] = '<em>Lietotāju automātiskās pievienošanas</em> funkcija Moodle tīkla izveides autentifikācijas spraudnī ir <strong>atspējota</strong>.';
$string['authmnetdisabled'] = 'Moodle tīkla izveides <em>autentifikācijas spraudnis</em> ir <strong>atspējots</strong>.';
$string['badcert'] = 'Tas nav derīgs sertifikāts.';
$string['couldnotgetcert'] = '$a<br />nav atrasts neviens sertifikāts.<br />Resursdators, iespējams, ir izslēgts vai nav pareizi konfigurēts.';
$string['couldnotmatchcert'] = 'Tas neatbilst tīmekļa servera tikko publicētajam sertifikātam.';
$string['courses'] = 'kursi';
$string['courseson'] = 'kursi';
$string['current_transport'] = 'Pašreizējais transportēšanas veids';
$string['currentkey'] = 'Pašreizējā publiskā atslēga';
$string['databaseerror'] = 'Nevar ierakstīt datus datubāzē.';
$string['deleteaserver'] = 'Notiek servera dzēšana';
$string['deletekeycheck'] = 'Vai tiešām esat pārliecināts, ka vēlaties izdzēst šo atslēgu?';
$string['deleteoutoftime'] = 'Atslēgas izdzēšanas loga rādīšanas 60 sekunžu termiņš ir beidzies. Lūdzu, sāciet vēlreiz.';
$string['deleteuserrecord'] = 'SSO ACL: izdzēst ierakstu lietotājam “{$a}” no $a[1].';
$string['deletewrongkeyvalue'] = 'Ir radusies kļūda. Ja nebijāt mēģinājis dzēst servera SSL atslēgu, iespējams, esat piedzīvojis ļaunprātīgu uzbrukumu. Nav veikta nekāda darbība.';
$string['deny'] = 'Liegt';
$string['description'] = 'Apraksts';
$string['duplicate_usernames'] = 'Neizdevās izveidot indeksu jūsu iesniegtās lietotāju tabulas kolonnā “mnethostid” un “username”<br />Tas var notikt, ja lietotāju tabulā ir <a href=\"$a\" target=\"_blank\">lietotājvārdu dublikāti</a>.<br />Jūsu jauninājumu joprojām ir nepieciešams veiksmīgi pabeigt. Noklikšķiniet uz iepriekš norādītās saites, un norādījumi par šīs problēmas novēršanu tiks parādīti jaunā logā. Pie tiem varēsit atgriezties jaunināšanas beigās.<br />';
$string['editenrolments'] = 'reģistrēt';
$string['enabled_for_all'] = '(Šis pakalpojums ir iespējots visiem resursdatoriem.)';
$string['enrolcourseenrol_desc'] = 'Reģistrējiet lietotājus/atceliet lietotāju reģistrāciju šajā kursā, izmantojot Moodle tīkla reģistrācijas. 
                                    Ņemiet vērā, ka lietotāji var būt reģistrējušies šajā kursā, izmantojot citas reģistrācijas
                                    metodes, ja attālajos resursdatoros tās šiem lietotājiem ir atļautas. Šīs reģistrācijas ir norādītas sarakstā
                                    <em>Citos veidos reģistrētie lietotāji</em>';
$string['enrolcourses_desc'] = 'Kursi, kas šajā resursdatorā tiek piedāvāti attālai reģistrācijai.';
$string['enrollingincourse'] = 'Notiek reģistrēšanās kursā $a[0] resursdatorā $a[1]<br />';
$string['enrolments'] = 'reģistrācijas';
$string['enterausername'] = 'Lūdzu, ievadiet lietotājvārdu vai ar komatiem atdalītu lietotājvārdu sarakstu.';
$string['error7020'] = 'Šī kļūda parasti ir gadījumos, ja attālā vietnē jums ir izveidots ieraksts ar kļūdainu wwwroot. Piemēram, http://www.yoursite.com vietā izveidots http://yoursite.com. Jums ir jāsazinās ar attālās vietnes administratoru un jālūdz labot jūsu vietnes ierakstu tā, lai wwwroot atbistu config.php failā norādītajam.';
$string['error7022'] = 'Ziņa, kuru nosūtījāt uz attālo vietni, tika šifrēta korekti, bet netika parakstīta. Tas ir ļoti negaidīti; ja tas atkārtojas, jums droši vien vajadzētu reģistrēt kļūdas ziņojumu (sniedzot pēc iespējas vairāk informācijas par lietoto Moodle versiju, u.c.)';
$string['error7023'] = 'Attālā vietne mēģināja atšifrēt jūsu ziņu, izmantojot visas atslēgas, kas tai ir pieejamas jūsu vietnes ierakstā. Visi mēģinājumi neizdevās. Jūs varat novērst šo problēmu, manuāli saskaņojot atslēgas ar attālo vietni. Šī problēma ir mazvarbūtīga, ja vien jūs pēdējo reizi pie attālās vietnes neesat  slēdzies vairāk kā dažus mēnešus atpakaļ.';
$string['error7024'] = 'Jūs attālai vietnei sūtat nešifrētu ziņu, bet attālā vietne no jūsu vietnes nepieņem nešifrētas ziņas. Tas ir ļoti negaidīti; ja tas atkārtojas, jums droši vien vajadzētu reģistrēt kļūdas ziņojumu (sniedzot pēc iespējas vairāk informācijas par lietoto Moodle versiju, u.c.)';
$string['error7026'] = 'Atslēga, kuru izmantojat jūsu ziņas parakstīšanai, atšķiras no atslēgas, kas ir jūsu servera ierakstā attālā vietnē. Turklāt attālā vietne neveiksmīgi mēģināja iegūt jūsu pašreizējo atslēgu. Lūdzu manuāli saskaņojiet atslēgas ar attālo vietni un mēģiniet vēlreiz.';
$string['error709'] = 'Attālai vietnei no jums neizdevās iegūt SSL atslēgu.';
$string['expired'] = 'Šīs atslēgas derīguma termiņš ir';
$string['expires'] = 'Derīguma termiņš';
$string['expireyourkey'] = 'Dzēst šo atslēgu';
$string['expireyourkeyexplain'] = 'Moodle automātiski nomaina jūsu rīcībā esošās atslēgas ik pēc 28 dienām (pēc noklusējuma), tomēr jums ir iespēja jebkurā laikā atslēgai <em>manuāli</em> anulēt tās derīgumu. Tas ir lietderīgi tikai tad, ja uzskatāt, ka šīs atslēgas lietošana nav droša. Nekavējoties automātiski tiks izveidota aizstājējatslēga.<br />Šīs atslēgas izdzēšana bloķēs iespēju citiem Moodle lietotājiem sazināties ar jums, kamēr nebūsit tieši sazinājies ar katru administratoru un tam iesniedzis savu jauno atslēgu.';
$string['failedaclwrite'] = 'Neizdevās veikt ierakstu MNET piekļuves vadības sarakstā lietotājam “{$a}”.';
$string['forbidden-function'] = 'Šī funkcija nav iespējota RPC.';
$string['forbidden-transport'] = 'Transportēšanas metode, ko pašlaik mēģināt izmantot, nav atļauta.';
$string['forcesavechanges'] = 'Piespiest saglabāt izmaiņas';
$string['helpnetworksettings'] = 'Konfigurēt Moodle iekšējos sakarus';
$string['hidelocal'] = 'Paslēpt lokālos lietotājus';
$string['hideremote'] = 'Paslēpt attālos lietotājus';
$string['host'] = 'resursdators';
$string['hostcoursenotfound'] = 'Resursdators vai kurss nav atrasts';
$string['hostdeleted'] = 'Gatavs — resursdators ir izdzēsts';
$string['hostexists'] = 'Šim resursdatoram un Moodle izvietojumam ar ID $a jau ir izveidots ieraksts.<br />Noklikšķiniet uz <em>Turpināt</em>, lai rediģētu šo ierakstu.';
$string['hostname'] = 'Resursdatora nosaukums';
$string['hostnamehelp'] = 'Pilnībā atbilstošs attālā resursdatora domēna nosaukums, piemēram, www.example.com';
$string['hostnotconfiguredforsso'] = 'Šis attālais Moodle centrmezgls nav konfigurēts, lai tajā varētu pieslēgties attāli.';
$string['hostsettings'] = 'Resursdatora iestatījumi';
$string['http_self_signed_help'] = 'Atļaut savienojumu izveidi, attālajā resursdatorā izmantojot automātiski parakstītu DIY SSL sertifikātu.';
$string['http_verified_help'] = 'Atļaut savienojumu izveidi, attālajā resursdatorā PHP izmantojot pārbaudītu SSL sertifikātu, tomēr lietojot protokolu HTTP (nevis HTTPS)';
$string['https_self_signed_help'] = 'Atļaut savienojumu izveidi, attālajā resursdatorā PHP izmantojot automātiski parakstītu DIY SSL sertifikātu un lietojot protokolu HTTP.';
$string['https_verified_help'] = 'Atļaut savienojumu izveidi, attālajā resursdatorā izmantojot pārbaudītu SSL sertifikātu.';
$string['id'] = 'ID';
$string['idhelp'] = 'Šī vērtība ir piešķirta automātiski un to nevar mainīt.';
$string['illegalchar-host'] = 'Jūsu resursdatora nosaukumā ir izmantota neatļauta rakstzīme: $a';
$string['illegalchar-moodlehome'] = 'Jūsu Moodle atrašanās vietas nosaukumā ir izmantotas neatļautas rakstzīmes.';
$string['invalidaccessparam'] = 'Nederīgs piekļuves parametrs.';
$string['invalidactionparam'] = 'Nederīgs darbības parametrs.';
$string['invalidhost'] = 'Jānorāda derīgs resursdatora identifikators.';
$string['invalidpubkey'] = 'Šī atslēga nav derīga SSL atslēga.';
$string['invalidurl'] = 'Nederīgs URL parametrs.';
$string['ipaddress'] = 'IP adrese';
$string['is_in_range'] = 'IP adrese &nbsp;<code>$a</code>&nbsp; norāda derīgu uzticamu resursdatoru.';
$string['ispublished'] = '$a Moodle ir iespējojusi šo pakalpojumu jūsu vajadzībām.';
$string['issubscribed'] = '$a Moodle pašlaik piesaka šī pakalpojuma abonēšanu jūsu resursdatorā.';
$string['keydeleted'] = 'Atslēga ir veiksmīgi izdzēsta un aizstāta.';
$string['keymismatch'] = 'Jūsu rīcībā esošā publiskā atslēga, kas attiecas uz šo resursdatoru, atšķiras no publiskās atslēgas, ko šis resursdators pašlaik publicē.';
$string['last_connect_time'] = 'Pēdējais savienojuma izveides laiks';
$string['last_connect_time_help'] = 'Laiks, kad pēdējo reizi izveidojāt savienojumu ar šo resursdatoru.';
$string['last_transport_help'] = 'Transportēšanas veids, kuru izmantojāt, lai izveidotu iepriekšējo savienojumu ar šo resursdatoru.';
$string['loginlinkmnetuser'] = '<br/>Ja esat Moodle tīkla attālais lietotājs un varat <a href=\"$a\">savu e-pasta adresi apstiprināt šeit</a>, tiksit novirzīts uz pieslēgšanās lapu.<br />';
$string['logs'] = 'žurnāli';
$string['mnet'] = 'Moodle tīkla izveide';
$string['mnet_concatenate_strings'] = 'Savienot (ne vairāk kā) 3 virknes un iegūt rezultātu';
$string['mnet_session_prohibited'] = 'Jūsu lokālā servera lietotājiem pašlaik nav atļaujas izmantot viesabonēšanu $a.';
$string['mnetdisabled'] = 'Moodle tīkls ir <strong>atspējots</strong>.';
$string['mnetenrol'] = 'Reģistrācijas';
$string['mnetlog'] = 'Žurnāli';
$string['mnetpeers'] = 'Vienranga ierīces';
$string['mnetservices'] = 'Pakalpojumi';
$string['mnetsettings'] = 'Moodle tīkla iestatījumi';
$string['moodle_home_help'] = 'Ceļš uz Moodle sākumlapu attālajā resursdatorā, piemēram, /moodle/.';
$string['moodleloc'] = 'Moodle atrašanās vieta';
$string['net'] = 'Tīkla izveide';
$string['networksettings'] = 'Tīkla iestatījumi';
$string['never'] = 'Nekad';
$string['noaclentries'] = 'SSO piekļuves vadības sarakstā nav nevienas ievadnes';
$string['nocurl'] = 'PHP Curl bibliotēka nav instalēta';
$string['nohostid'] = 'Šai lapai ir nepieciešams resursdatora ID, kam jābūt veselam skaitlim.';
$string['noipmatch'] = 'Attālā datora nosaukums: <br /><em>$a[0]</em><br /> neatbilst reģistrētajam: <br /><em>$a[1]</em>.';
$string['nolocaluser'] = 'Attālajam lietotājam nav nekādu lokālo ierakstu.';
$string['nomodifyacl'] = 'Jums nav atļauts modificēt MNET piekļuves vadības sarakstu.';
$string['nonmatchingcert'] = 'Sertifikāta priekšmets: <br /><em>$a[0]</em><br /> neatbilst izcelsmes resursdatoram: <br /><em>$a[1]</em>.';
$string['nopubkey'] = 'Radās publiskās atslēgas izgūšanas kļūda.<br />Iespējams, resursdators nepieļauj Moodle tīkla izveidi vai šī atslēga ir nederīga.';
$string['nosite'] = 'Nevarēja atrast vietnes līmeņa kursu';
$string['nosuchfile'] = 'Fails/funkcija $a nepastāv.';
$string['nosuchfunction'] = 'Nevar atrast funkciju vai šīs funkcijas lietošana RPC ir aizliegta.';
$string['nosuchmodule'] = 'Funkcijas adrese ir norādīta nepareizi, un nevar noteikt tās atrašanās vietu. Lūdzu, izmantojiet 
formātu mod/moduļa_nosaukums/lib/funkcijas_nosaukums.';
$string['nosuchpublickey'] = 'Nevar iegūt parakstu pārbaudes publisko atslēgu.';
$string['nosuchservice'] = 'Šis RPC pakalpojums nedarbojas šajā resursdatorā.';
$string['nosuchtransport'] = 'Saistībā ar šo ID nepastāv nekāds transportēšanas veids.';
$string['notBASE64'] = 'Šī virkne nav izveidota Base64 kodētā formātā. Tā nevar būt derīga atslēga.';
$string['notPEM'] = 'Šī atslēga nav izveidota PEM formātā. Tā nedarbosies.';
$string['not_in_range'] = 'IP adrese &nbsp;<code>$a</code>&nbsp; nenorāda derīgu uzticamu resursdatoru.';
$string['notpermittedtojump'] = 'Jums nav atļaujas sākt attālo sesiju no šī Moodle centrmezgla.';
$string['notpermittedtoland'] = 'Jums nav atļaujas sākt attālo sesiju.';
$string['off'] = 'Izsl.';
$string['on'] = 'Iesl.';
$string['otherenrolledusers'] = 'Citi reģistrētie lietotāji';
$string['permittedtransports'] = 'Atļautie transportēšanas veidi';
$string['phperror'] = 'Jūsu pieprasījumu neļāva izpildīt iekšēja PHP kļūda.';
$string['postrequired'] = 'Dzēšanas funkcijai ir vajadzīgs POST pieprasījums.';
$string['promiscuous'] = 'Brīvi';
$string['publickey'] = 'Publiskā atslēga';
$string['publickey_help'] = 'Šī publiskā atslēga ir automātiski iegūta attālajā serverī.';
$string['publish'] = 'Publicēt';
$string['reallydeleteserver'] = 'Vai tiešām vēlaties izdzēst šo serveri?';
$string['receivedwarnings'] = 'Ir saņemti tālāk norādītie brīdinājumi';
$string['recordnoexists'] = 'Ieraksts nepastāv.';
$string['reenableserver'] = 'Nē — atlasiet šo opciju, lai vēlreiz iespējotu šo serveri.';
$string['registerallhosts'] = 'Reģistrēt visus resursdatorus (<em>centrmezgla režīmā</em>)';
$string['registerallhostsexplain'] = 'Varat izvēlēties, vai automātiski reģistrēt visus resursdatorus, kas mēģina izveidot savienojumu ar jūsu sistēmu. 
                                           Tas nozīmē, ka jūsu resursdatoru sarakstā tiks veikts ieraksts par jebkuru Moodle vietni, no kuras tiek izveidots savienojums ar jūsu sistēmu un pieprasīta jūsu publiskā atslēga.<br />Tālāk ir norādīta iespēja konfigurēt pakalpojumus “Visiem resursdatoriem”, un pēc dažu pakalpojumu iespējošanas varēsit sniegt pakalpojumus jebkuram Moodle serverim bez ierobežojuma.';
$string['remotecourses'] = 'Attālie kursi';
$string['remoteenrolhosts_desc'] = 'Izmantojot savu Moodle instalāciju, reģistrējiet un atceliet lietotāju reģistrāciju
                                    Moodle resursdatoros. To var veikt, lietojot Moodle
                                    tīkla reģistrācijas spraudni.';
$string['remotehost'] = 'Attālais centrmezgls';
$string['remotehosts'] = 'Attālie resursdatori';
$string['remotemoodles'] = 'Attālie Moodle lietotāji';
$string['requiresopenssl'] = 'Tīkla izveidei ir nepieciešams OpenSSL paplašinājums';
$string['restore'] = 'Atjaunot';
$string['reviewhostdetails'] = 'Pārskatīt resursdatoru datus';
$string['reviewhostservices'] = 'Pārskatīt resursdatoru pakalpojumus';
$string['selectaccesslevel'] = 'Lūdzu, izvēlieties sarakstā piekļuves līmeni.';
$string['selectahost'] = 'Lūdzu, izvēlieties attālo Moodle resursdatoru.';
$string['serviceswepublish'] = 'Pakalpojumi, ko mēs publicējam $a.';
$string['serviceswesubscribeto'] = 'Pakalpojumi $a, kurus abonējam.';
$string['settings'] = 'Iestatījumi';
$string['showlocal'] = 'Rādīt lokālos lietotājus';
$string['showremote'] = 'Rādīt attālos lietotājus';
$string['ssl_acl_allow'] = 'SSO ACL: atļaut piekļuvi lietotājam $a[0] no $a[1]';
$string['ssl_acl_deny'] = 'SSO ACL: liegt piekļuvi lietotājam $a[0] no $a[1]';
$string['ssoaccesscontrol'] = 'SSO piekļuves vadība';
$string['ssoacldescr'] = 'Izmantojiet šo lapu, lai konkrētiem lietotājiem piešķirtu/liegtu piekļuvi no attālajiem Moodle tīkla resursdatoriem. Šī funkcija darbojas, ja attālajiem lietotājiem piedāvājat SSO pakalpojumus. Lai noteiktu <em>lokālo</em> lietotāju iespējas izmantot viesabonēšanu citos Moodle tīkla resursdatoros, izmantojiet lomu sistēmu un piešķiriet šiem lietotājiem tiesības <em>pieslēgties attāli MNET</em>.';
$string['ssoaclneeds'] = 'Lai šī funkcija darbotos, jābūt ieslēgtai Moodle tīkla izveides funkcijai, kā arī jābūt iespējotam Moodle tīkla autentifikācijas spraudnim, kurā ir iespējota lietotāju automātiskās pievienošanas funkcija.';
$string['strict'] = 'Stingri';
$string['subscribe'] = 'Abonēt';
$string['system'] = 'Sistēma';
$string['testtrustedhosts'] = 'Pārbaudīt adresi';
$string['testtrustedhostsexplain'] = 'Ievadiet IP adresi, lai noskaidrotu, vai šis ir uzticams resursdators.';
$string['transport_help'] = 'Šīs opcijas ir abpusējas, tādēļ attālam resursdatoram varat pieprasīt izmantot parakstītu SSL sertifikātu tikai tad, ja arī jūsu serverim ir parakstīts SSL sertifikāts.';
$string['trustedhosts'] = 'XML-RPC resursdatori';
$string['trustedhostsexplain'] = '<p>Uzticamo resursdatoru mehānisms nodrošina iespēju norādīt datorus, lai
                                           izmantojot XML-RPC, veiktu zvanus uz jebkuru Moodle API daļu. Tas
                                           ir pieejams skriptiem, kuri var ietekmēt Moodle darbību, un tā iespējošana var būt
                                           ļoti bīstama. Ja neesat pārliecināts par savām darbībām, nedariet to.</p>
                                           <p>Moodle tīkla izveidē tas <strong>nav</strong> nepieciešams.</p>
                                           <p>Lai to iespējotu, ievadiet IP adrešu vai tīklu sarakstu, 
                                           katru adresi vai tīklu norādot atsevišķā rindā. 
                                           Daži piemēri:</p>Jūsu lokālais resursdators:<br />127.0.0.1<br />Jūsu lokālais resursdators (ar tīkla bloku):<br />127.0.0.1/32<br />Tikai resursdators ar IP adresi 192.168.0.7:<br />192.168.0.7/32<br />Jebkurš resursdators, kura IP adrese ir no 192.168.0.1 līdz 192.168.0.255:<br />192.168.0.0/24<br />Jebkāds resursdators:<br />192.168.0.0/0<br />Kā redzams, pēdējā piemērā norādīto konfigurāciju izmantot <strong>nav</strong> ieteicams.';
$string['unknownerror'] = 'Vienošanās laikā radās nezināma kļūda.';
$string['usercannotchangepassword'] = 'Jūs nevarat šeit mainīt paroli, jo esat attālais lietotājs.';
$string['userchangepasswordlink'] = '<br />Paroli, iespējams, varēsit nomainīt pie sava <a href=\"$a->wwwroot/login/change_password.php\">$a->description</a> pakalpojumu sniedzēja.';
$string['usersareonline'] = 'Brīdinājums. Jūsu vietnē pašlaik ir pieslēgušies $a šī servera lietotāji.';
$string['validated_by'] = 'To ir apstiprinājis tīkls: &nbsp;<code>$a</code>';
$string['verifysignature-error'] = 'Paraksta pārbaude neizdevās. Ir radusies kļūda.';
$string['verifysignature-invalid'] = 'Paraksta pārbaude neizdevās. Šķiet, ka šai aparatūrai nav jūsu paraksta.';
$string['version'] = 'versija';
$string['warning'] = 'Brīdinājums';
$string['wrong-ip'] = 'Jūsu IP adrese neatbilst pie mums reģistrētajai adresei.';
$string['xmlrpc-missing'] = 'Lai varētu lietot šo līdzekli, jūsu PHP būvējumā jābūt instalētam XML-RPC.';
$string['yourhost'] = 'Jūsu resursdators';
$string['yourpeers'] = 'Jūsu vienranga ierīces';

?>
