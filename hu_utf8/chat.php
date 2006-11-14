<?PHP // $Id$ 
      // chat.php - created with Moodle 1.6 Beta 3 (2006041100)


$string['chat:chat'] = "Csevegés";
$string['chat:deletelog'] = "Csevegésnaplók törlése";
$string['chat:readlog'] = "Csevegésnaplók olvasása";
$string['confignormalupdatemode'] = "A csevegőszoba frissítéseit megfelelően támogatja a HTTP 1.1 <em>Keep-Alive</em> funkciója, ennek ellenére meglehetősen leterheli a szervert. Megfelelőbb módszer a <em>Stream</em> használata frissítések felhasználókhoz való eljuttatására. A <em>Stream</em> sokkal hatékonyabb (hasonló a chatd módszerhez), de előfordulhat, hogy szervere nem támogatja.";
$string['normalkeepalive'] = "KeepAlive";
$string['normalstream'] = "Stream";
$string['beep'] = 'csöngetés';
$string['chatintro'] = 'Bevezető szöveg';
$string['chatname'] = 'A csevegőszoba neve';
$string['chatreport'] = 'Csevegések';
$string['chattime'] = 'A következő csevegési idő';
$string['configmethod'] = 'Szokásos csevegési módszernél a csevegők rendszeresen rákapcsolódnak a szerverre frissítésekért. Beállításra nincs szükség és mindenhol működik, de sok csevegő esetén megterhelheti a szervert. Szerverdémon használata esetén megköveteli a Unix-héjhoz való hozzáférést, de gyors és méretezhető csevegési környezetet ad.';
$string['configoldping'] = 'Mennyi ideig tartó hallgatás után kell egy felhasználót kilépettnek tekinteni (másodpercben)?
Ez csak egy felső határ, mert a lekapcsolódás gyorsan érzékelhető. Alacsonyabb értékek jobban megterhelik a szervert. Ha a szokásos módszert használja, <strong>soha</strong> ne állítsa ezt az értéket alacsonyabbra, mint 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Milyen gyakran legyen frissítve a csevegőszoba (másodpercben)? Alacsony értékre állítva a csevegőszoba gyorsabbnak látszik, azonban nagyobb terhelést jelenthet a szervernek, ha egyszerre sokan csevegnek';
$string['configrefreshuserlist'] = 'Milyen gyakran legyen frissítve a felhasználók listája? (mp-ben)';
$string['configserverhost'] = 'A szerverdémont tartalmazó számítógép gazdaneve';
$string['configserverip'] = 'A fenti gazdanévnek megfelelő IP-cím';
$string['configservermax'] = 'Csevegők megengedett max. száma';
$string['configserverport'] = 'A szerveren a démonnal használandó port';
$string['currentchats'] = 'Zajló csevegések';
$string['currentusers'] = 'Aktuális felhasználók';
$string['deletesession'] = 'Csevegés törlése';
$string['deletesessionsure'] = 'Biztosan törölni akarja ezt a csevegést?';
$string['donotusechattime'] = 'Ne jelenjen meg a csevegések ideje';
$string['enterchat'] = 'Kattintson ide a csevegésbe való bekapcsolódáshoz';
$string['errornousers'] = 'Nem található felhasználó!';
$string['explaingeneralconfig'] = 'Ezek a beállítások <strong>mindig</strong> érvényesek';
$string['explainmethoddaemon'] = 'Ezek a beállítások <strong>csak</strong> akkor számítanak, ha a chat_method számára \"Csevegő szerverdémonnal\"-t választott';
$string['explainmethodnormal'] = 'Ezek a beállítások <strong>csak</strong> akkor számítanak, ha a chat_method számára \"Szokásos módszer\"-t választott';
$string['generalconfig'] = 'Általános beállítás';
$string['helpchatting'] = 'Csevegés súgója';
$string['idle'] = 'Nem zajlik csevegés';
$string['messagebeepseveryone'] = '$a mindenkit csönget!';
$string['messagebeepsyou'] = '$a most csöngetett Önnek!';
$string['messageenter'] = '$a most lépett be';
$string['messageexit'] = '$a most távozott';
$string['messages'] = 'Üzenetek';
$string['methoddaemon'] = 'Csevegő szerverdémon';
$string['methodnormal'] = 'Szokásos módszer';
$string['modulename'] = 'Csevegés';
$string['modulenameplural'] = 'Csevegések';
$string['neverdeletemessages'] = 'Az üzenetek soha nem törlődjenek';
$string['nextsession'] = 'A következő csevegés';
$string['noguests'] = 'A csevegésbe vendégek nem kapcsolódhatnak be';
$string['nomessages'] = 'Még nincs üzenet';
$string['noscheduledsession'] = 'Nincs előjegyzett csevegés';
$string['normalkeepalive'] = "KeepAlive";
$string['normalstream'] = "Stream";
$string['repeatdaily'] = 'Minden nap ugyanakkor';
$string['repeatnone'] = 'Nincs ismétlés - csak a megadott időpont megjelenítése';
$string['repeattimes'] = 'Csevegések ismétlése';
$string['repeatweekly'] = 'Minden héten ugyanakkor';
$string['savemessages'] = 'Korábbi csevegések mentése';
$string['seesession'] = 'A csevegés megtekintése';
$string['sessions'] = 'Csevegések';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Korábbi csevegések megtekintése mindenkinek';
$string['viewreport'] = 'Korábbi csevegések megtekintése';

?>
