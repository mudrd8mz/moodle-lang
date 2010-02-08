<?PHP // $Id$ 
      // chat.php - created with Moodle 1.9.3 (Build: 20081015) (2007101530)


$string['list_all_sessions'] = 'Az összes kurzusrész felsorolása';
$string['list_complete_sessions'] = 'Csak a befejezett kurzusrészek felsorolása';
$string['listing_all_sessions'] = 'Az összes kurzusrész felsorolása folyamatban';
$string['no_complete_sessions_found'] = 'Nincsenek befejezett kurzusrészek.';

	  
$string['chatadministration'] = 'Csevegés kezelése';
$string['messageyoubeep'] = '$a csengetett';
$string['talk'] = 'Beszéljen';

	  
$string['notallowenter'] = 'Nem léphet be a csevegőszobába!';
	  
$string['chat:talk'] = 'Beszélgetés csevegéssel';
$string['inputarea'] = 'Adatbevitel területe';
$string['saidto'] = '<b>mondta</b>';
$string['userlist'] = 'Felhasználók felsorolása';
	  
$string['chat:exportparticipatedsession'] = 'Csevegésben részt vevők exportálása';
$string['chat:exportsession'] = 'Csevegés exportálása';

$string['autoscroll'] = 'Automatikus görgetés';
$string['ajax'] = 'Ajax-változat';
$string['autoscrol'] = 'Automatikus görgetés';
$string['beep'] = 'hangjelzés';
$string['cantlogin'] = 'Nem lehetett bejelentkezni a csevegőszobába!!';
$string['cantinsert'] = 'Nem lehetett csevegőüzenetet beszúrni';
$string['chat:chat'] = 'Csevegés';
$string['chat:deletelog'] = 'Csevegésnaplók törlése';
$string['chat:readlog'] = 'Csevegésnaplók elolvasása';
$string['chatintro'] = 'Bevezető szöveg';
$string['chatname'] = 'A csevegőszoba neve';
$string['chatreport'] = 'Csevegések';
$string['chattime'] = 'A következő csevegés időpontja';
$string['configmethod'] = 'A szokásos csevegés során a kliensprogramok rendszeresen a szerverhez fordulnak frissítésért. Semmilyen beállítást nem igényel és mindenhol működik, de sok csevegő esetén jelentősen megterheli a szervert. Szerverdémon használata során a Unix héjszintű elérésére van szükség, az eredmény viszont egy gyors és skálázható csevegési környezet.';
$string['confignormalupdatemode'] = 'A csevegőszoba frissítéseit megfelelően támogatja a HTTP 1.1 Keep-Alive funkciója, ennek ellenére meglehetősen leterheli a szervert. A frissítések felhasználókhoz való eljuttatására alkalmasabb módszer a Stream használata. A Stream sokkal hatékonyabb (hasonló a chatd módszerhez), de előfordulhat, hogy használatát szervere nem támogatja.';
$string['configoldping'] = 'Mennyi ideig tartó hallgatás után kell egy felhasználót kilépettnek tekinteni (másodpercben)? Ez csak egy felső határ, mert a lekapcsolódás gyorsan érzékelhető. Alacsonyabb értékek jobban megterhelik a szervert. Ha a szokásos módszert használja, soha ne állítsa ezt az értéket alacsonyabbra, mint a chat_refresh_room idejének kétszerese.';
$string['configrefreshroom'] = 'Milyen gyakran legyen frissítve a csevegőszoba (másodpercben)? Alacsony értékre állítva a csevegőszoba gyorsabbnak látszik, azonban nagyobb terhelést jelenthet a szervernek, ha egyszerre sokan csevegnek. Ha <em>Stream</em> frissítést használ, kiválaszthat egy magasabb frissítési gyakoriságot - próbálkozzék 2-vel.';
$string['configrefreshuserlist'] = 'Milyen gyakran legyen frissítve a felhasználók listája (mp-ben)?';
$string['configserverhost'] = 'A szerverdémont tartalmazó számítógép gazdaneve';
$string['configserverip'] = 'A fenti gazdanévnek megfelelő numerikus IP-cím';
$string['configservermax'] = 'Csevegők maximálisan megengedett száma';
$string['configserverport'] = 'A szerveren a démonnal használandó port';
$string['currentchats'] = 'Folyamatban lévő csevegések';
$string['currentusers'] = 'Mostani felhasználók';
$string['deletesession'] = 'Csevegés törlése';
$string['deletesessionsure'] = 'Biztosan törölni akarja ezt a csevegést?';
$string['donotusechattime'] = 'Ne jelenjen meg a csevegések ideje';
$string['enterchat'] = 'Kattintson ide a csevegésbe való bekapcsolódáshoz';
$string['errornousers'] = 'Nincsenek felhasználók!';
$string['explaingeneralconfig'] = 'Ezek a beállítások <strong>mindig</strong>  érvényesek';
$string['explainmethoddaemon'] = 'Ezek a beállítások csak akkor számítanak, ha a chat_method számára \"csevegő szerverdémon\"-t választott';
$string['explainmethodnormal'] = 'Ezek a beállítások csak akkor számítanak, ha a chat_method számára \"Szokásos módszer\"-t választott';
$string['generalconfig'] = 'Általános beállítás';
$string['helpchatting'] = 'Csevegés súgója';
$string['idle'] = 'Tétlen';
$string['invalidid'] = 'Nem található a csevegőszoba!';
$string['messagebeepseveryone'] = '$a mindenkit csönget!';
$string['messagebeepsyou'] = '$a most csöngetett Önnek!';
$string['messageenter'] = '$a most lépett be a csevegésbe';
$string['messageexit'] = '$a most lépett ki a csevegésből';
$string['messages'] = 'Üzenetek';
$string['method'] = 'Csevegési módszer';
$string['methoddaemon'] = 'Csevegés szerverdémona';
$string['methodnormal'] = 'Szokásos módszer';
$string['modulename'] = 'Csevegés';
$string['modulenameplural'] = 'Csevegések';
$string['neverdeletemessages'] = 'Az üzenetek soha ne törlődjenek';
$string['nextsession'] = 'A következő előjegyzett csevegés';
$string['nochat'] = 'Nincs csevegés';
$string['noguests'] = 'A csevegésbe vendégek nem kapcsolódhatnak be';
$string['nomessages'] = 'Még nincs üzenet';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nincs előjegyzett csevegés';
$string['notlogged'] = 'Nincs bejelentkezve!';
$string['oldping'] = 'Szétkapcsolás időtúllépés miatt';
$string['pastchats'] = 'Korábbi csevegések';
$string['refreshroom'] = 'Frissítési idő';
$string['refreshuserlist'] = 'Felhasználói lista frissítése';
$string['removemessages'] = 'Az összes üzenet törlése';
$string['repeatdaily'] = 'Minden nap ugyanakkor';
$string['repeatnone'] = 'Nincs ismétlés - csak a megadott időpont közzététele';
$string['repeattimes'] = 'Csevegések ismétlése';
$string['repeatweekly'] = 'Minden héten ugyanakkor';
$string['savemessages'] = 'Korábbi csevegések mentése';
$string['seesession'] = 'A csevegés megtekintése';
$string['send'] = 'Elküld';
$string['sending'] = 'Küldés';
$string['serverhost'] = 'Szerver neve';
$string['serverip'] = 'Szerver ip-címe';
$string['servermax'] = 'Max. felhasználó';
$string['serverport'] = 'Szerver portja';
$string['sessions'] = 'Csevegések';
$string['strftimemessage'] = '%%Ó.%%P';
$string['studentseereports'] = 'A korábbi csevegéseket mindenki megtekintheti';
$string['updatemethod'] = 'Frissítés módszere';
$string['updaterate'] = 'Értékelés frissítése: ';
$string['viewreport'] = 'Korábbi csevegések megtekintése';

?>
