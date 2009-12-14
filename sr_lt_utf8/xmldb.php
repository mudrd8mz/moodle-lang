<?PHP // $Id$ 
      // xmldb.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['actual'] = 'Važeće';
$string['aftertable'] = 'Nakon tabele:';
$string['back'] = 'Nazad';
$string['backtomainview'] = 'Nazad na glavni prikaz';
$string['binaryincorrectlength'] = 'Netačna dužina binarnog polja';
$string['cannotuseidfield'] = 'Nije moguće umetnuti polje identifikatora. Reč je o automatski numerisanoj koloni.';
$string['change'] = 'Promeniti';
$string['charincorrectlength'] = 'Netačna dužina polja karaktera';
$string['check_bigints'] = 'Pretraga netačnih celobronih vrednosti (integera) u bazi';
$string['check_defaults'] = 'Traži nelogične podrazumevane vrednosti';
$string['check_foreign_keys'] = 'Traži kršenja spoljašljih ključeva';
$string['check_indexes'] = 'Traži indekse baze koji nedostaju';
$string['checkbigints'] = 'Proveri velike celobrojne (Bigint) vrednosti';
$string['checkdefaults'] = 'Proveri podrazumevane vrednosti';
$string['checkforeignkeys'] = 'Proveri spoljašnje ključeve';
$string['checkindexes'] = 'Proveri indekse';
$string['completelogbelow'] = '(pogledaj kompletni zapis pretrage)';
$string['confirmcheckbigints'] = 'Ova funkcionalnost će pretražiti <a href=\"http://tracker.moodle.org/browse/MDL-11038\">potencijalno pogrešna polja sa celobrojnim (integer) vrednostima</a> na Vašem serveru za Moodle, i automatski generisati (ali ne i izvršiti!) potrebne SQL iskaze da bi sve celobrojne (integer) vrednosti u Vašoj bazi podataka bile pravilno definisane.<br /><br />
Kada su jednom generisani, možete kopirati ove iskaze i izvršiti ih bezbedno u Vama najpogodnijem SQL interfejsu (ne zaboravite da napravite rezervnu kopiju podataka pre toga).<br /><br />
Strogo se preporučuje da koristite najnoviju dostupnu ažuriranu verziju (sa + u nazivu verzije) Vašeg izdanja Moodlea (1.8, 1.9, 2.x) pre izvršavanja pretrage pogrešnih integera.<br /><br />
Ova funkcionalnost ne izvodi radnje koje menjaju Vašu bazu podataka (već samo čita iz nje), tako da se može izvršiti bezbedno u bilo kom trenutku.';
$string['confirmcheckdefaults'] = 'Ova funkcija pretražuje nelogične podrazumevane vrednosti na Vašem Moodle serveru, generiše (ali ne izvršava!) potrebne SQL iskaze da bi sve podrazumevane vrednosti bile pravilno definisane.<br /><br />
Kada se generišu, možete kopirati ove iskaze i izvršiti ih bezbedno iz Vašeg omiljenog SQL okruženja (ne zaboravite kreirati rezervnu kopiju Vaših podataka pre toga).<br /><br />
Strogo se preporučuje korišćenje najnovijeg dostupnog (+ verzije) izdanja Moodlea za izvršavanje pretrage nelogičnih podrazumevanih vrednosti.<br /><br />
Ova funkcija ne odrađuje bilo kakvu akciju nad bazom podataka (samo čita iz nje), tako da se može bezbedno izvršiti u svakom trenutku.';
$string['confirmcheckindexes'] = 'Ova funkcija traži indekse koji nedostaju na Vašem Moodle serveru, automatski generišući (ali ne izvršavajući!) potrebne SQL naredbe da bi sve ostalo ažurno. Jednom generisane, te naredbe se mogu kopirati i izvršiti bezbedno u okviru Vašeg omiljenog SQL interfejsa.<br /><br />
Veoma je preporučljivo da instalirate najnoviju (+) verziju Moodle izdanja koje trenutno koristite (1.8, 1.9, 2.x ...) pre   započinjanja potrage za indeksima koji nedostaju.<br /><br />
Ova funkcija ne radi nikakve izmene baze (samo iščitava podatke iz nje), pa se može bezbedno izvršiti u svako doba.';
$string['confirmdeletefield'] = 'Da li ste potpuno sigurni da želite obrisati polje:';
$string['confirmdeleteindex'] = 'Da li ste potpuno sigurni da želite obrisati indeks:';
$string['confirmdeletekey'] = 'Da li ste potpuno sigurni da želite obrisati ključ:';
$string['confirmdeletesentence'] = 'Da li ste potpuno sigurni da želite obrisati rečenicu:';
$string['confirmdeletestatement'] = 'Da li ste potpuno sigurni da želite obrisati iskaz i sve njegove rečenice:';
$string['confirmdeletetable'] = 'Da li ste potpuno sigurni da želite da obrišete tabelu:';
$string['confirmdeletexmlfile'] = 'Da li ste potpuno sigurni da želite da obrišete datoteku:';
$string['confirmrevertchanges'] = 'Da li ste potpuno sigurni da želite da poništite promene načinjene tokom:';
$string['create'] = 'Kreiranje';
$string['createtable'] = 'Kreiranje tabele';
$string['defaultincorrect'] = 'Nekorektna podrazumevana vrednost';
$string['delete'] = 'Brisanje';
$string['delete_field'] = 'Brisanje polja';
$string['delete_index'] = 'Brisanje indeksa';
$string['delete_key'] = 'Brisanje ključa';
$string['delete_sentence'] = 'Brisanje rečenice';
$string['delete_statement'] = 'Brisanje iskaza';
$string['delete_table'] = 'Brisanje tabele';
$string['delete_xml_file'] = 'Brisanje XML datoteke';
$string['doc'] = 'Doc';
$string['docindex'] = 'Indeks dokumentacija';
$string['documentationintro'] = 'Ovu dokumentacija je automaski generisama iz definicija XMLDB baze podatak. Dostupna je samo na enleskom.';
$string['down'] = 'Dole';
$string['duplicate'] = 'Dupliranje';
$string['duplicatefieldname'] = 'Već postoji polje sa tim nazivom';
$string['duplicatekeyname'] = 'Postoji još jedan ključ sa tim imenom';
$string['edit'] = 'Uređivanje';
$string['edit_field'] = 'Uređivanje polja';
$string['edit_index'] = 'Uređivanje indeksa';
$string['edit_key'] = 'Uređivanje ključa';
$string['edit_sentence'] = 'Uređivanje rečenice';
$string['edit_statement'] = 'Uređivanje iskaza';
$string['edit_table'] = 'Uređivanje tabele';
$string['edit_xml_file'] = 'Uređivanje XML datoteke';
$string['enumvaluesincorrect'] = 'Netačna vrednost za numeričko polje';
$string['expected'] = 'Očekivano';
$string['extensionrequired'] = 'Oprostite - Za ovu akciju je neophodna PHP ekstenѕija \'$a\'. Molimo Vas da je instalirate ukoliko želite da koristite ovu funkciju.';
$string['field'] = 'Polje';
$string['fieldnameempty'] = 'Polje naziva je prazno';
$string['fields'] = 'Polja';
$string['fieldsusedinkey'] = '[[incomplete lang string at line 60 in /home/www/perun/courses/moodletest/lang/en_utf8/xmldb.php]]';
$string['filenotwriteable'] = 'U datoteku se ne može ništa upisati';
$string['fkviolationdetails'] = 'Spoljašnji ključ $a->keyname u tabeli $a->tablename prekršen je $a->numviolations od ukupno $a->numrows redova.';
$string['float2numbernote'] = 'Napomena: Iako su polja \"s pokretnim zarezom\" 100%% podržana od strane XMLDB, preporučuje se da se prebacite u polja \"brojevi\".';
$string['floatincorrectdecimals'] = 'Netačan broj decimala u polju za realne vrednosti';
$string['floatincorrectlength'] = 'Netačna dužina polja za realne vrednosti';
$string['generate_all_documentation'] = 'Sva dokumentacija';
$string['generate_documentation'] = 'Dokumentacija';
$string['gotolastused'] = 'Idi na poslednje korišćenu datoteku';
$string['incorrectfieldname'] = 'Netačan naziv';
$string['index'] = 'Indeks';
$string['indexes'] = 'Indeksi';
$string['integerincorrectlength'] = 'Netačna dužina za polje sa celobrojnim vrednostima';
$string['key'] = 'Ključ';
$string['keys'] = 'Ključevi';
$string['listreservedwords'] = 'Spisak rezervisanih reči<br/>(koji se koristi za održavanje <a href=\"http://docs.moodle.org/en/XMLDB_reserved_words\" target=\"_blank\">XMLDB_reserved_words</a>)';
$string['load'] = 'Učitavanje';
$string['main_view'] = 'Glavni prikaz';
$string['masterprimaryuniqueordernomatch'] = 'Polja u Vašem spoljašnjem ključu moraju biti navedena istim redosledom kao što su navedena u JEDINSTVENOM KLJUČU korištene tabele.';
$string['missing'] = 'Nedostaje';
$string['missingfieldsinsentence'] = 'Nedostaju polja u rečenici';
$string['missingindexes'] = 'Pronađeni su indeksi koji nedostaju';
$string['missingvaluesinsentence'] = 'Nedostaju vrednosti u rečenici';
$string['mustselectonefield'] = 'Morate odabrati jedno polje da biste videli akcije koje se odnose na polja!';
$string['mustselectoneindex'] = 'Morate odabrati jedan indeks da biste videli akcije koje se odnose na indekse!';
$string['mustselectonekey'] = 'Morate odabrati jedan ključ da biste videli akcije koje se odnose na ključeve!';
$string['mysqlextracheckbigints'] = 'U MySQL-u takođe pretražuje netačno označene velike celobrojne (bigint) vrednosti, i generiše potreban SQL koji treba izvršiti da bi se sve popravilo';
$string['new_statement'] = 'Novi iskaz';
$string['new_table_from_mysql'] = 'Nova tabela iz MySQL-a';
$string['newfield'] = 'Novo polje';
$string['newindex'] = 'Novi indeks';
$string['newkey'] = 'Novi ključ';
$string['newsentence'] = 'Nova rečenica';
$string['newstatement'] = 'Novi iskaz';
$string['newtable'] = 'Nova tabela';
$string['newtablefrommysql'] = 'Nova tabela iz MySQL-a';
$string['nomasterprimaryuniquefound'] = 'Kolone na koje se odnoseVaš spoljašnji ključ mora biti uključen u primarni ili jedinstveni ključ u   referenciranoj tabeli';
$string['nomissingindexesfound'] = 'Nije pronađen nijedan indeks koji nedostaje - Vaša baza ne zahteva nikakve dodatne intervencije.';
$string['noviolatedforeignkeysfound'] = 'Nisu pronađeni prekršeni spoljašnji ključevi';
$string['nowrongdefaultsfound'] = 'Nisu pronađene nelogične podrazumevane vrednosti, Vaša baza podataka ne zahteva dalje akcije.';
$string['nowrongintsfound'] = 'Nema pronađenih pogrešnih celobrojnih (integer) vrednosti, Vaša baza ne zahteva nikakve dalje akcije';
$string['numberincorrectdecimals'] = 'Netačan broj decimala za numeričko polje';
$string['numberincorrectlength'] = 'Netačna dužina numeričkog polja';
$string['pendingchanges'] = 'Napomena: Napravili ste promene u ovoj datoteci. Promene mogu biti sačuvane u bilo kom trenutku.';
$string['pendingchangescannotbesaved'] = 'Postoje promene u ovoj datoteci ali one ne mogu biti sačuvane! Molimo Vas, proverite da li direktorijum i datoteka \"install.xml\" unutar njega imaju dozvole za upisivanje.';
$string['pendingchangescannotbesavedreload'] = 'Postoje promene u ovoj datoteci ali one ne mogu biti sačuvane! Molimo Vas, proverite da li direktorijum i datoteka \"install.xml\" unutar njega imaju dozvole za upisivanje.  Zatim ponovo učitajte stranicu i trebalo bi da možete da sačuvate te promene.';
$string['reserved'] = 'Rezervisano';
$string['reservedwords'] = 'Rezervisane reči';
$string['revert'] = 'Poništiti';
$string['revert_changes'] = 'Poništiti promene';
$string['save'] = 'Sačuvati';
$string['searchresults'] = 'Rezultati pretrage';
$string['selectaction'] = 'Izaberite akciju:';
$string['selectdb'] = 'Izaberite bazu podataka:';
$string['selectfieldkeyindex'] = 'Izaberite polje/ključ/indeks:';
$string['selectonecommand'] = 'Molimo odaberite jednu akciju sa navedenog spiska da biste videli odgovarajući PHP kôd';
$string['selectonefieldkeyindex'] = 'Molimo izaberite jedno polje/ključ/indeks iz liste da biste videli PHP kôd';
$string['selecttable'] = 'Izaberite tabelu:';
$string['sentences'] = 'Rečenice';
$string['statements'] = 'Iskazi';
$string['statementtable'] = 'Tabela iskaza:';
$string['statementtype'] = 'Tip iskaza:';
$string['table'] = 'Tabela';
$string['tables'] = 'Tabele';
$string['test'] = 'Test';
$string['textincorrectlength'] = 'Netačna dužina tekstualnog polja';
$string['unload'] = 'Skinuti';
$string['up'] = 'Gore';
$string['view'] = 'Pregled';
$string['view_reserved_words'] = 'Pregled rezervisanih reči';
$string['view_structure_php'] = 'Pregled PHP-a strukture';
$string['view_structure_sql'] = 'Pregled SQL-a strukture';
$string['view_table_php'] = 'Pregled PHP-a tabele';
$string['view_table_sql'] = 'Pregled SQL-a tabele';
$string['viewedited'] = 'Pregled uređenog';
$string['vieworiginal'] = 'Pregled originala';
$string['viewphpcode'] = 'Pregled PHP koda';
$string['viewsqlcode'] = 'Pregled SQL koda';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Prekršeni spoljašnji ključevi';
$string['violatedforeignkeysfound'] = 'Pronađeni su prekršeni spoljašnji ključevi';
$string['violations'] = 'Prekršaji';
$string['wrong'] = 'Pogrešno';
$string['wrongdefaults'] = 'Pronađeno netačnih podrazumevanih vrednosti';
$string['wrongints'] = 'Pronađene pogrešne celobrojne (integer) vrednosti';
$string['wronglengthforenum'] = 'Netačna dužina numeričkog polja';
$string['wrongnumberoffieldsorvalues'] = 'Netačan broj polja ili vrednosti u rečenici';
$string['wrongreservedwords'] = 'Trenutno korišćene rezervisane reči<br />(primetite da nazivi tabela nizu važni ukoliko koristite \$CFG->prefix)';
$string['yesmissingindexesfound'] = 'Nađeni su neki indeksi koji nedostaju u Vašoj bazi podataka. Evo detalja o njima i SQL naredbi koje treba izvršiti u okviru Vašeg omiljenog SQL interfejsa.<br /><br />Nakon toga, vrlo je preporučljivo da ponovo pokrenete ovu pretragu da biste proverili da li ima još indeksa koji nedostaju.';
$string['yeswrongdefaultsfound'] = 'Pronađeno je nekoliko nelogičnih podrazumevanih vrednosti u Vašoj bazi podataka. Evo njihovih detalja i potrebnih SQL iskaza koje treba izvršiti u Vašem omiljenom SQL okruženju da biste ih sve popravili (ne zaboravite da kreirate rezervnu kopiju Vaših podataka pre toga).<br /><br />Posle toga, strogo se preporučuje da izvršite ponovo ovu proceduru da biste utvrdili da više nema nelogičnih podrazumevanih vrednosti.';
$string['yeswrongintsfound'] = 'Neke pogrešne celobrojne (integer) vrednosti su pronađene u Vašoj bazi podataka. Evo nekih detaljnijih informacija i potrebnih SQL iskaza koje treba izvršiti u Vama najpogodnijem SQL interfejsu da biste ih sve kreirali (ne zaboravite da napravite rezervnu kopiju podataka pre toga).<br /><br />Kada to uradite, strogo se preporučuje da pokrenete ovu alatku ponovo da proverite da li neće biti pronađeno još pogrešnih integera.';
$string['butis'] = 'ali je'; // ORPHANED
$string['shouldbe'] = 'treba da bude'; // ORPHANED

?>
