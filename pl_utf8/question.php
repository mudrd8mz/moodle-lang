<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 Beta 4 (2007101506)


$string['adminreport'] = 'Raportuj o możliwych problemach w twojej bazie pytań.';
$string['broken'] = 'To jest nieprawidłowe łącze, wskazuje na nieistniejący plik.';
$string['byandon'] = 'przez <em>$a->user</em> o <em>$a->time</em>';
$string['categorycurrent'] = 'Bieżąca kategoria';
$string['categorycurrentuse'] = 'Użyj tej kategorii';
$string['categorydoesnotexist'] = 'Ta kategoria nie istnieje';
$string['categorymoveto'] = 'Zapisz w kategorii';
$string['changepublishstatuscat'] = 'Status współdzielenia <a href=\"$a->caturl\">Kategorii \"$a->name\"</a> z kursu \"$a->coursename\" zostanie zmieniony z <strong>$a->changefrom na $a->changeto</strong>.';
$string['copy'] = 'Skopiuj z $a i zmień łącza';
$string['created'] = 'Utworzony';
$string['createdmodifiedheader'] = 'Utworzony / ostatnio zapisany';
$string['cwrqpfs'] = 'Losowe pytania wybierające pytania z podkategorii.';
$string['cwrqpfsinfo'] = 'Podczas aktualizacji do Moodle 1.9 podzielimy kategorie pytań na różne konteksty. Status współdzielenia niektórych kategorii i pytań będzie musiał zostać zmieniony. Jest to konieczne w rzadkim przypadku, kiedy jedno lub więcej \'losowych\' pytań wybiera pytania z mieszanki kategorii współdzielonych i niewspółdzielonych (tak jak w przypadku tej strony). Zdarza się tak, kiedy \'losowe\' pytanie wybiera pytania z podkategorii i jedna lub więcej podkategorii ma status współdzielenia różny od kategorii nadrzędnej, w której zawiera się pytanie losowe.</p>
<p>Podczas aktualizacji do Moodle 1.9 status współdzielenia poniższych kategorii pytań (z których \'losowe\' pytania kategorii nadrzędnej wybierają pytania) zostanie zmieniony na taki, jaki jest status kategorii zawierającej pytanie losowe. Poniższe kategorie będą miały zmieniony status współdzielenia. Wszystkie pytania we wszystkich quizach będą nadal działać (dopóki ich nie usuniesz).</p>';
$string['cwrqpfsnoprob'] = 'Problem \"losowych pytań wybierających pytania z podkategorii\" nie dotyczy żadnego z istniejących pytań.';
$string['defaultfor'] = 'Domyślnie dla $a';
$string['defaultinfofor'] = 'Domyślna kategoria dla pytań współdzielonych w kontekście \'$a\".';
$string['donothing'] = 'Nie kopiuj, nie przenoś plików ani nie zmieniaj łączy.';
$string['editingcategory'] = 'Edycja kategorii';
$string['editingquestion'] = 'Edycja pytania';
$string['erroraccessingcontext'] = 'Nie można uzyskać dostępu do kontekstu';
$string['errorfilecannotbecopied'] = 'Błąd podczas kopiowania pliku $a.';
$string['errorfilecannotbemoved'] = 'Błąd podczas przenoszenia pliku $a.';
$string['exportcategory'] = 'Eksportuj kategorię';
$string['filesareacourse'] = 'Obszar plików kursu';
$string['filesareasite'] = 'Obszar plików witryny';
$string['filestomove'] = 'Przenieść / skopiować pliki do $a?';
$string['fractionsnomax'] = 'Jedna z odpowiedzi powinna być warta 100%%, aby można było otrzymać całą ocenę za to pytanie.';
$string['getcategoryfromfile'] = 'Pobierz kategorię z pliku';
$string['getcontextfromfile'] = 'Pobierz kontekst z pliku';
$string['ignorebroken'] = 'Ignoruj niedziałające łącza';
$string['linkedfiledoesntexist'] = 'Powiązany plik $a nie istnieje';
$string['makechildof'] = 'Utwórz potomka \'$a\'';
$string['maketoplevelitem'] = 'Przesuń na poziom nadrzędny';
$string['missingimportantcode'] = 'W pytaniu pojawił się błąd kodu: $a.';
$string['modified'] = 'Ostatnio zapisano';
$string['move'] = 'Przenieś z $a i zmień łącza';
$string['movecategory'] = 'Przenieś kategorię';
$string['movelinksonly'] = 'Tylko zmień adres docelowy łączy, nie przesuwaj ani nie kopiuj plików.';
$string['moveq'] = 'Przesuń pytanie(a)';
$string['moveqtoanothercontext'] = 'Przesuń pytanie do innego kontekstu';
$string['movingcategory'] = 'Przenoszenie kategorii';
$string['movingcategoryandfiles'] = 'Czy jesteś pewien, że chcesz przenieść kategorię {$a->name} ze wszystkimi podkategoriami do kontekstu \"{$a->contextto}\"?<br /> {$a->urlcount} plików jest powiązanych z pytaniami w {$a->fromareaname}. Czy chcesz skopiować lub przesunąć te pliki do {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Czy jesteś pewien, że chcesz przesunąć kategorię \"{$a->name}\" wraz ze wszystkimi podkategoriami do kontekstu \"{$a->contextto}\"?';
$string['movingquestions'] = 'Przesuwanie pytań i plików';
$string['movingquestionsandfiles'] = 'Czy jesteś pewien, że chcesz przenieść pytanie(a) {$a->questions} do kontekstu <strong>\"{$a->tocontext}\"</strong>?<br /> <strong>{$a->urlcount} plików</strong> jest powiązanych z tym(i) pytaniem(ami) w {$a->fromareaname}. Czy chcesz skopiować lub przesunąć te pliki do {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Czy jesteś pewien, że chcesz przenieść pytanie(a) {$a->questions} do kontekstu <strong>\"{$a->tocontext}\"</strong>?<br /> <strong>Nie ma plików</strong> powiązanych z tymi pytaniami w {$a->fromareaname}.';
$string['needtochoosecat'] = 'Wybierz kategorię, do której przesunąć to pytanie lub wciśnij \'Anuluj\'.';
$string['nopermissionadd'] = 'Nie masz uprawnień do dodawania tutaj pytań.';
$string['noprobs'] = 'Nie wykryto błędów w bazie danych zapytań.';
$string['notenoughdatatoeditaquestion'] = 'Ani ID pytania ani ID kategorii i typ pytania nie zostały określone.';
$string['notenoughdatatomovequestions'] = 'Podaj id pytań, które chcesz przesunąć.';
$string['permissionedit'] = 'Edytuj to pytanie.';
$string['permissionmove'] = 'Przesuń to pytanie.';
$string['permissionsaveasnew'] = 'Zapisz to pytanie jako nowe.';
$string['permissionto'] = 'Masz uprawnienia do:';
$string['published'] = 'współdzielony';
$string['questionaffected'] = '<a href=\"$a->qurl\">Pytanie \"$a->name\" ($a->qtype)</a> istnieje w tej kategorii pytań, ale także jest używane w <a href=\"$a->qurl\">quizie \"$a->quizname\"</a> w innym kursie \"$a->coursename\".';
$string['questionbank'] = 'Baza pytań';
$string['questioncatsfor'] = 'Kategorie pytań dla \'$a\'';
$string['questiondoesnotexist'] = 'To pytanie nie istnieje';
$string['questionuse'] = 'Użyj pytania w tej aktywności';
$string['shareincontext'] = 'Udostępnij w kontekście $a';
$string['tofilecategory'] = 'Zapisz kategorię do pliku';
$string['tofilecontext'] = 'Zapisz kontekst do pliku';
$string['unknown'] = 'Nieznany';
$string['unknownquestiontype'] = 'Nieznany typ pytania: $a.';
$string['unpublished'] = 'nieudostępniony';

?>
