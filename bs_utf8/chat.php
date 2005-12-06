<?PHP // $Id$ 
      // chat.php - created with Moodle 1.4.3 + (2004083131)


$string['beep'] = 'signal';
$string['chatintro'] = 'Uvodni tekst';
$string['chatname'] = 'Ime ove pričaonice';
$string['chatreport'] = 'Razgovori';
$string['chattime'] = 'Vrijeme narednog razgovora';
$string['configmethod'] = 'Normalni chat metod obuhvata klijente regularnim kontaktima nadogradnjom servera. To ne zahtjeva  svugdje konfiguraciju i rad, ali to može kreirati veliko opterećenje na serveru sa mnogim sagovornicima.  Koristeći samostartujući program servera potreban je pristup Unixu, ali to u brzini rezultira outline chat okruženje.';
$string['configoldping'] = 'Koje je maksimalno vrijeme potrebno da prođe (u sekundama) prije nego mi registrujemo diskonektovane korisnike? Ovo je samo veće ograničenje jer kao i obično diskonekcija se veoma brzo otkriva. Niža vrijednost će biti sa više oštećenja na Vašem serveru. Ako koristite normalnu metodu, <strong>never</strong> podesite ovo niže od 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Koliko često bi se pričaonica trebala osvježavati? (u sekundama) Podešavanje na nizak nivo omogućava da pričaonica izgleda brže, ali može predstavljati veći teret na serveru kad je prisutan veći broj ljudi';
$string['configrefreshuserlist'] = 'Koliko često bi lista korisnika trebala biti osvježena? (u sekundama)';
$string['configserverhost'] = 'Ime glavnog računara gdje se gdje se nalazi samostartujući program servera';
$string['configserverip'] = 'IP adresa koja odgovara pomenutom računaru';
$string['configservermax'] = 'Maksimalan broj dozvoljenih klijenata';
$string['configserverport'] = 'Za korištenje porta na samostartujući program servera';
$string['currentchats'] = 'Aktivni razgovori';
$string['currentusers'] = 'Trenutni korisnici';
$string['deletesession'] = 'Obriši ovu seansu';
$string['deletesessionsure'] = 'Da li ste sigurni da želite izbrisati ovu seansu?';
$string['donotusechattime'] = 'Ne prikazuj vrijeme provedeno na pričaonici';
$string['enterchat'] = 'Pritisnite ovdje da uđete u pričaonicu';
$string['errornousers'] = 'Korisnici ne mogu biti pronađeni';
$string['explaingeneralconfig'] = 'Ova podešavanja su <strong>always</strong> unutar dejstva';
$string['explainmethoddaemon'] = 'Ova podešavanja su značajna <strong>only</strong> ako imate označen \"Samostartujući program chat servera\" za chat_metod';
$string['explainmethodnormal'] = 'Ova podešavanja su značajna <strong>only</strong> ako imate označen \"Normalni metod\" za chat_metod';
$string['generalconfig'] = 'Osnovna podešavanja';
$string['helpchatting'] = 'Pomoć pri razgovoru';
$string['idle'] = 'prazno';
$string['messagebeepseveryone'] = '$a signali svima!';
$string['messagebeepsyou'] = '$a ste dobili signal!';
$string['messageenter'] = '$a je upravo ušao u pričaonicu';
$string['messageexit'] = '$a je napusti pričaonicu';
$string['messages'] = 'Poruke';
$string['methoddaemon'] = 'Samostartujući program chat servera';
$string['methodnormal'] = 'Normalna metoda';
$string['modulename'] = 'Razgovor (Chat)';
$string['modulenameplural'] = 'Razgovori';
$string['neverdeletemessages'] = 'Nikad ne briši poruke';
$string['nextsession'] = 'Naredna planirana seansa';
$string['noguests'] = 'Ovaj razgovor nije otvoren za goste';
$string['nomessages'] = 'Još nema poruka';
$string['repeatdaily'] = 'U isto vrijeme svaki dan';
$string['repeatnone'] = 'Nema ponavljanja - objaviti samo određeno vrijeme';
$string['repeattimes'] = 'Ponovite seanse';
$string['repeatweekly'] = 'U isto vrijeme svake sedmice';
$string['savemessages'] = 'Sačuvajte prethodne seanse';
$string['seesession'] = 'Pogledajte ovu seansu';
$string['sessions'] = 'Razgovori';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Svako može pregledati prethodne seanse';
$string['viewreport'] = 'Pogledajte prethodne seanse';

?>
