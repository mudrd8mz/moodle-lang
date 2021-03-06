<?PHP // $Id$ 
      // resource.php - created with Moodle 1.5.2 + (2005060220)


$string['addresource'] = 'Dodajte resurs...';
$string['chooseafile'] = 'Odaberite ili uploadajte datoteku';
$string['chooseparameter'] = 'Odaberite parametre';
$string['configallowlocalfiles'] = 'Kada kreirate novi datotečni resurs, dozvolite umetanje linkova na lokalni datotečni sustav, npr. CD-ROM ili čvrsti disk. Ovo bi moglo biti korisno u učionici gdje svi studenti imaju pristup zajedničkom mrežnom disku ili kod potrebe za pristupom većim datotekama koje su na CD mediju. Korištenje ove postavke može zahtijevati određene izmjene u sigurnosnim postavkama vašeg internet preglednika (browser).  ';
$string['configdefaulturl'] = 'Ovo je vrijednost koja će uvijek biti u polju namijenjenom za unos URL (kod kreiranja resursa koji se nalazi ima URL adresu, odnosno nalazi se na nekom udaljenom poslužitelju) ';
$string['configfilterexternalpages'] = 'Uključivanje ove postavke će rezultirati time da se SVI eksterni resursi (web stranice, uploadani HTML dokumenti) prije prikazivanja prvo filtriraju  tekstualnim filterima zadatima na razini poslužitelja (npr. rječnički filter). Uključivanje ove opcije može uzrokovati znatno usporavanje u radu vašeg online kolegija - koristite ovu postavku oprezno i samo ako ju uistinu trebate.';
$string['configframesize'] = 'Kada se uploadana web stranica ili datoteka prikažu unutar framea, ovo će biti veličina (u pikselima) najgornjeg framea (u kojem je sadržan navigacijski dio).';
$string['configparametersettings'] = 'Ova postavka zadaje standardne vrijednosti za opciju \"Parametri\" koja se nalazi na obrascu za postavljanje novih resursa na kolegij. Nakon prvog korištenja, ista postaje i standardna postavka za individualne korisnike.';
$string['configpopup'] = 'Kod dodavanja novog resursa koji se može otvoriti u novom prozoru, treba li ta postavka biti standardno uključena?';
$string['configpopupdirectories'] = 'Treba li pop-up prozor prikazivati standardno link na direktorij?';
$string['configpopupheight'] = 'Koje bi standardne visine trebao biti novi pop-up prozor?';
$string['configpopuplocation'] = 'Treba li pop-up prozor standardno prikazivati lokacijsku traku?';
$string['configpopupmenubar'] = 'Treba li pop-up prozor standardno prikazivati traku izbornika?';
$string['configpopupresizable'] = 'Može li se standardnom pop-up prozoru mijenjati veličina? ';
$string['configpopupscrollbars'] = 'Treba li pop-up prozor standardno biti scrollable?';
$string['configpopupstatus'] = 'Treba li pop-up prozor standardno prikazivati statusnu traku?';
$string['configpopuptoolbar'] = 'Treba li pop-up prozor standardno prikazivati alatnu traku?';
$string['configpopupwidth'] = 'Koje bi standardne širine trebao biti novi pop-up prozor?';
$string['configsecretphrase'] = 'This secret phrase is used to produce the encrypted code value that can be sent to some resources as a parameter.  The encrypted code is produced by an md5 value of the current_users IP address concatenated with your secret phrase. ie code = md5(IP.secretphrase).  This allows the destination resource to verify the connection for extra security.';
$string['configwebsearch'] = 'Kad dodajete URL poput web stranice ili linka na neki vanjski izovr informacija, ova lokacija je ponuđena kao pretraživač (search engine).';
$string['configwindowsettings'] = 'Ova postavka podešava standardnu vrijednost za opciju \"Prozor\" (window) koja se nalazi na obrascu za postavljanje novih resursa na kolegij. Nakon prvog korištenja, ista postaje i standardna postavka za individualne korisnike.';
$string['directlink'] = 'Direktni link na ovu datoteku';
$string['directoryinfo'] = 'Sve datoteke u zadanoj mapi će biti prikazane.';
$string['display'] = 'Prozor';
$string['editingaresource'] = 'Promijeni resurs';
$string['encryptedcode'] = 'Enkriptirani kod';
$string['example'] = 'Primjer';
$string['exampleurl'] = 'http://www.example.com/mapa/datoteka.html';
$string['fetchclienterror'] = 'Dogodila se pogreška vezana uz vaš internet preglednik (browser) prilikom dohvata web stranice (najvjerojatniji razlog: POGREŠAN URL).';
$string['fetcherror'] = 'Dogodila se pogreška prilikom dohvaćanja web stranice.';
$string['fetchservererror'] = 'Dogodila se pogreška sa strane udaljenog poslužitelja pri dohvatu web stranice (najvjerojatniji razlog: PROGRAMSKA POGREŠKA).';
$string['filename'] = 'Ime datoteke';
$string['filtername'] = 'Auto-povezivanje sa imenima resursa';
$string['frameifpossible'] = 'Postavite resurs u frame kako bi zadržali vidljivom navigaciju iz kolegija';
$string['fulltext'] = 'Puni tekst';
$string['htmlfragment'] = 'HTML fragment';
$string['localfile'] = 'Lokalna datoteka';
$string['localfilechoose'] = 'Odaberite lokalnu datoteku (CD-ROM)';
$string['localfilehelp'] = 'Pomoć vezana uz lokalne datoteke kao resurse';
$string['localfileselect'] = 'Odaberite lokalnu putanju do datoteke.';
$string['maindirectory'] = 'Glavna mapa s datotekama';
$string['modulename'] = 'Resurs';
$string['modulenameplural'] = 'Resursi';
$string['neverseen'] = 'Nikad pristupio/la';
$string['newdirectories'] = 'Pokaži link na mapu';
$string['newfullscreen'] = 'Popuni cijeli ekran';
$string['newheight'] = 'Standardna visina prozora (u pikselima)';
$string['newlocation'] = 'Prikaži lokacijsku traku';
$string['newmenubar'] = 'Prikaži traku izbornika';
$string['newresizable'] = 'Dozvoli mijenjanje veličine prozora';
$string['newscrollbars'] = 'Dozvoli pomicanje prozora po visini (scrollable)';
$string['newstatus'] = 'Prikaži statusnu traku';
$string['newtoolbar'] = 'Prikaži traku s alatima';
$string['newwidth'] = 'Standardna širina prozora (u pikselima)';
$string['newwindow'] = 'Novi prozor';
$string['newwindowopen'] = 'Prikaži ovaj resurs u novom prozoru';
$string['notallowedlocalfileaccess'] = 'Pristup lokalnim datotekama je trenutno onemogućen, tako da ovaj resurs trenutno NIJE dostupan.';
$string['note'] = 'Napomena';
$string['notefile'] = 'Kako biste u kolegij uploadali više datoteka odjednom koristite <a href=\"$a\">File Manager</a>.';
$string['notypechosen'] = 'Morate odabrati tip. Koristeći BACK gumb na vašem internet pregledniku i pokušajte ponovno.';
$string['pagedisplay'] = 'Prikaži ovaj resurs unutar istog prozora';
$string['pagewindow'] = 'Isti prozor';
$string['parameter'] = 'Parametar';
$string['parameters'] = 'Parametri';
$string['popupresource'] = 'Ovaj resurs se trebao pojaviti u zasebnom prozoru.';
$string['popupresourcelink'] = 'Ako nije, kliknite ovdje: $a';
$string['resourcetype'] = 'Tip resursa';
$string['resourcetype1'] = 'Referenca';
$string['resourcetype2'] = 'Web stranica';
$string['resourcetype3'] = 'Uploadana datoteka';
$string['resourcetype4'] = 'Obični tekst';
$string['resourcetype5'] = 'Web link';
$string['resourcetype6'] = 'HTML tekst';
$string['resourcetype7'] = 'Program';
$string['resourcetype8'] = 'Tekst nalik na Wiki';
$string['resourcetype9'] = 'Mapa';
$string['resourcetypedirectory'] = 'Prikaži mapu';
$string['resourcetypefile'] = 'Link na dokument ili web adresu';
$string['resourcetypehtml'] = 'Napišite web dokument';
$string['resourcetypelabel'] = 'Umetnite oznaku';
$string['resourcetyperepository'] = 'Link na objekt u repozitoriju';
$string['resourcetypetext'] = 'Napisite tekstualnu datoteku';
$string['searchweb'] = 'Traži web stranicu (koristeći Google)';
$string['serverurl'] = 'URL poslužitelja ($a->wwwroot)';
$string['variablename'] = 'Ime varijable';

?>
