<?PHP // $Id$ 
      // chat.php - created with Moodle 1.8 dev (2007010404)


$string['beep'] = 'prozvonit';
$string['chat:chat'] = 'Přispívat do chatování';
$string['chat:deletelog'] = 'Odstraňovat historii chatování';
$string['chat:readlog'] = 'Číst historii chatování';
$string['chatintro'] = 'Úvodní text';
$string['chatname'] = 'Název této místnosti';
$string['chatreport'] = 'Chatování';
$string['chattime'] = 'Příští chat';
$string['configmethod'] = 'Při normální metodě se webové prohlížeče chatujících pravidelně připojují k serveru a aktualizují doposud načtený obsah. Tato metoda nevyžaduje žádnou další konfiguraci a funguje vždy a všude, při větším množství chatujících však může značně zatížit server. Použití démona na serveru vyžaduje přístup k unixovému shellu, ale umožňuje vytvořit rychlé a škálovatelné chatovací prostředí.';
$string['confignormalupdatemode'] = 'Aktualizace chatovacích místností je obvykle dostatečně efektivně zajišťována metodou <em>Keep-Alive</em> protokolu HTTP 1.1, i tak je ovšem zatížení serveru poměrně vysoké. Pokročilejší metodu pro přenos dat k uživatelům představuje <em>streamování</em>. Použití <em>streamování</em> lze mnohem lépe škálovat (podobně jako u metody chatovacího démona), není však zaručeno, že je váš server podporuje.';
$string['configoldping'] = 'Jaká je maximální doba nečinnosti, po níž se má rozpoznat, že se uživatel od chatu odpojil? Zadává se pouze horní limit, protože odpojení jsou obvykle detekována velmi rychle. Nižší hodnoty povedou k vyššímu zatížení serveru. Používáte-li normální metodu, <strong>nikdy</strong> nenastavujte tuto hodnotu nižší, než je dvojnásobek hodnoty chat_refresh_room.';
$string['configrefreshroom'] = 'Po kolika sekundách se má chatovací místnost aktualizovat (refresh). Nastavením malé hodnoty se sice chatování může zrychlit, ovšem na úkor zvýšené zátěže vašeho webového serveru, obzvláště při velkém počtu chatujících. Používáte-li obnovování metodou <em>streamování</em>, můžete nastavit vyšší frekvenci obnovování -- zkuste začít hodnotou 2.';
$string['configrefreshuserlist'] = 'Po kolika sekundách se má aktualizovat seznam uživatelů?';
$string['configserverhost'] = 'Název počítače (hostname), na kterém běží démon';
$string['configserverip'] = 'IP adresa odpovídající výše uvedenému názvu počítače';
$string['configservermax'] = 'Nejvyšší možný počet klientů';
$string['configserverport'] = 'Port použitý démonem na serveru';
$string['currentchats'] = 'Probíhající chatování';
$string['currentusers'] = 'Stávající uživatelé';
$string['deletesession'] = 'Odstranit toto chatování';
$string['deletesessionsure'] = 'Jste si jisti, že chcete odstranit toto chatování?';
$string['donotusechattime'] = 'Nezveřejňovat čas chatování';
$string['enterchat'] = 'Klikněte zde pro vstup do chatu';
$string['errornousers'] = 'Nemohu najít žádné uživatele!';
$string['explaingeneralconfig'] = 'Tato nastavení se uplatní <strong>vždy</strong>.';
$string['explainmethoddaemon'] = 'Tato nastavení se uplatní, <strong>pouze</strong> pokud je jako chat_method vybrán \'Chatovací démon na serveru\'.';
$string['explainmethodnormal'] = 'Tato nastavení se uplatní, <strong>pouze</strong> pokud je jako chat_method vybrána \'Normální metoda\'.';
$string['generalconfig'] = 'Obecná konfigurace';
$string['helpchatting'] = 'Nápověda k chatování';
$string['idle'] = 'Nečinný';
$string['messagebeepseveryone'] = '$a někoho prozvání!';
$string['messagebeepsyou'] = '$a vás prozvání!';
$string['messageenter'] = '$a právě vstoupil(a) do tohoto chatu';
$string['messageexit'] = '$a opustil(a) tento chat';
$string['messages'] = 'Zprávy';
$string['methoddaemon'] = 'Chatovací démon na serveru';
$string['methodnormal'] = 'Normální metoda';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chatování';
$string['neverdeletemessages'] = 'Nikdy neodstraňovat zprávy';
$string['nextsession'] = 'Příští naplánované chatování';
$string['noguests'] = 'Tento chat není otevřen pro hosty';
$string['nomessages'] = 'Zatím žádné zprávy';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Streamování';
$string['noscheduledsession'] = 'Není plánováno žádné chatování';
$string['repeatdaily'] = 'Ve stejný čas každý den';
$string['repeatnone'] = 'Bez opakování - zveřejnit pouze určený čas';
$string['repeattimes'] = 'Opakovat chatování';
$string['repeatweekly'] = 'Ve stejný čas každý týden';
$string['savemessages'] = 'Uložit proběhnuté chatování';
$string['seesession'] = 'Ukázat toto chatování';
$string['sessions'] = 'Chatování';
$string['strftimemessage'] = '%%H.%%M';
$string['studentseereports'] = 'Kdokoliv může vidět proběhnuté chatování';
$string['viewreport'] = 'Ukázat proběhnuté chatování';

?>
