<?PHP // $Id$ 
      // chat.php - created with Moodle 1.7 beta (2006101000)


$string['beep'] = 'zvučni signal';
$string['chat:chat'] = 'Učestvovanje u razgovoru';
$string['chat:deletelog'] = 'Brisanje zapisa razgovora';
$string['chat:readlog'] = 'Čitanje zapisa razgovora';
$string['chatintro'] = 'Uvodni tekst';
$string['chatname'] = 'Naziv ove pričaonice';
$string['chatreport'] = 'Razgovori';
$string['chattime'] = 'Vreme narednog razgovora';
$string['configmethod'] = 'Normalan režim rada pričaonice podrazumeva da korisnici konstantno komuniciraju sa serverom zbog osvežavanja sadržaja. Ovaj režim ne zahteva posebnu konfiguraciju i funkcioniše u svim okruženjima, ali može jako da optereti server ako je broj korisnika veliki. Sa druge strane, korišćenje IRC servera zahteva tzv. <i>shell</i> pristup Unix-u, ali zato pruža brzo i lako podesivo <i>chat</i> okruženje.';
$string['confignormalupdatemode'] = 'Ažuriranje pričaonice se najčešće efikasno izvodi pomoću <em>Keep-Alive</em> opcije HTTP-a 1.1, ali to još uvek prilično opterećuje server. Napredniji način je korišćenje <em>Stream</em> strategije za prikaz promena korisnicima. Korišćenje <em>Stream</em> ažuriranja se pokazalo kao mnogo bolje rešenje (slično chatd metodu) ali je moguće da ga Vaš server ne podržava.';
$string['configoldping'] = 'Koje je maksimalno vreme (u sekundama) nakon kojeg će biti detektovano da je korisnik izašao iz pričaonice. To je samo gornje ograničenje pošto se diskonekcije korisnika obično otkrivaju vrlo brzo. Niže vrednosti će dodatno opteretiti Vaš server. Ukoliko koristite normalan režim rada za pričaonicu <strong>nikad</strong> nemojte ovu vrednost postaviti na manje od 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Koliko često bi se pričaonica trebala osvežavati? (u sekundama) Podešavanje na nizak nivo omogućava da pričaonica izgleda brže, ali može predstavljati veće opterećenje za Vaš veb server kad je u pričaonicama prisutan veći broj ljudi. Ako koristite <em>Stream</em> ažuriranje, možete izabrati više frenkvencije osvežavanja -- probajte sa 2 sekunde.';
$string['configrefreshuserlist'] = 'Koliko često bi spisak korisnika trebao biti osvežavan? (u sekundama)';
$string['configserverhost'] = 'Ime glavnog računara na kojem se nalazi IRC server';
$string['configserverip'] = 'Numerička IP adresa koja odgovara navedenom računaru';
$string['configservermax'] = 'Maksimalan broj dozvoljenih klijenata';
$string['configserverport'] = 'Port na serveru za IRC daemon';
$string['currentchats'] = 'Aktivni razgovori';
$string['currentusers'] = 'Trenutni korisnici';
$string['deletesession'] = 'Brisanje ove sesije';
$string['deletesessionsure'] = 'Da li ste sigurni da želite da izbrišete ovu sesiju?';
$string['donotusechattime'] = 'Bez prikaza vremena provedenog u pričaonici';
$string['enterchat'] = 'Kliknite ovde za ulazak u pričaonicu';
$string['errornousers'] = 'Nije pronađen nijedan korisnik!';
$string['explaingeneralconfig'] = 'Ova podešavanja <strong>uvek</strong> važe';
$string['explainmethoddaemon'] = 'Ova podešavanja su aktivna <strong>samo</strong> ako ste izabrali opciju \"IRC server daemon\"';
$string['explainmethodnormal'] = 'Ova podešavanja su aktivna <strong>samo</strong> ako ste izabrali opciju \"Normalan režim\"';
$string['generalconfig'] = 'Opšta konfiguracija';
$string['helpchatting'] = 'Pomoć pri razgovoru';
$string['idle'] = 'Neaktivan';
$string['messagebeepseveryone'] = 'Učesnik $a signalizira svima!';
$string['messagebeepsyou'] = 'Učesnik $a Vam upravo šalje zvučni signal!';
$string['messageenter'] = 'Učesnik $a upravo ulazi u pričaonicu';
$string['messageexit'] = 'Učesnik $a upravo napušta pričaonicu';
$string['messages'] = 'Poruke';
$string['methoddaemon'] = 'IRC server daemon';
$string['methodnormal'] = 'Normalan režim';
$string['modulename'] = 'Razgovor';
$string['modulenameplural'] = 'Razgovori';
$string['neverdeletemessages'] = 'Nikad ne briši poruke';
$string['nextsession'] = 'Naredna planirana sesija';
$string['noguests'] = 'Ovaj razgovor nije otvoren za goste';
$string['nomessages'] = 'Još nema poruka';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nema zakazanih sesija';
$string['repeatdaily'] = 'Svaki dan u isto vreme';
$string['repeatnone'] = 'Nema ponavljanja - objaviti samo određeno vreme';
$string['repeattimes'] = 'Ponovite sesije';
$string['repeatweekly'] = 'Svake sedmice u isto vreme';
$string['savemessages'] = 'Sačuvajte prethodne sesije';
$string['seesession'] = 'Pogledajte ovu sesiju';
$string['sessions'] = 'Razgovori';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Svako može pregledati prethodne sesije';
$string['viewreport'] = 'Pogledajte prethodne sesije';

?>
