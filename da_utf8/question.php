<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 + (Build: 20080304) (2007101509)


$string['broken'] = 'Linket virker ikke, det peger på en fil der ikke eksisterer.';
$string['byandon'] = 'af <em>$a->user</em> <em>$a->time</em>';
$string['categorycurrent'] = 'Denne kategori';
$string['categorycurrentuse'] = 'Benyt denne kategori';
$string['categorydoesnotexist'] = 'Denne kategori eksisterer ikke';
$string['categorymoveto'] = 'Gem i kategorien';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Kategorien \"$a->name\"</a> i kurset \"$a->coursename\" vår sin status ændret fra <strong>$a->changefrom til $a->changeto</strong>.';
$string['created'] = 'Oprettet';
$string['createdmodifiedheader'] = 'Oprettet / Senest ændrets';
$string['cwrqpfsinfo'] = '<p>Under opgradering til Moodle 1.9 vil vi opdele spørgsmålskategorierne i forskellige kontekster. Nogle spørgsmålskategorier på dit site vil få deres status ændret for hvordan/om de må deles. Dette er nødvendigt i de sjældne tilfælde hvor et eller flere \"tilfældige\" spørgsmål i en quiz er sat op til at vælge fra et mix af delte og ikke delte kategorier (som på dette site). Dette sker når et tilfældigt spørgsmål skal vælge fra underkategorier og et eller flere underkategorier har forskellige delingsstatus i forhold til den overordnede kategori hvori det tilfældige spørgsmål er oprettet.</p> <p>De følgende spørgsmålskategorier, hvorfra tilfældige spørgsmål i overordnede kategorier vælger spørgsmål, vil få deres delingsstatus ændret til det samme som kategorien med det tilfældige spørgsmål i under opgraderingen til Moodle 1.9. De følgende kategorier vil få deres delingsstatus ændret. Spørgsmål som påvirkes vil fortsætte med at virke i alle eksisterende quizzer indtil du fjerner dem fra disse quizzer.</p>';
$string['defaultfor'] = 'Standard for $a';
$string['defaultinfofor'] = 'Standardkategorien for delte spørgsmål i konteksten \"$a\".';
$string['donothing'] = 'Kopier eller flyt ikke filer eller lav ændringer i links.';
$string['editingcategory'] = 'Rediger en kategori';
$string['editingquestion'] = 'Redigerer et spørgsmål';
$string['errorfilecannotbecopied'] = 'Fejl, kan ikke kopiere filen $a.';
$string['errorfilecannotbemoved'] = 'Fejl, kan ikke flytte filen $a.';
$string['exportcategory'] = 'Eksporter kategori';
$string['filestomove'] = 'Flyt/kopier filer til $a?';
$string['fractionsnomax'] = 'Et af svarene skal have en score på 100%%.';
$string['getcategoryfromfile'] = 'Hent kategorien fra filen';
$string['getcontextfromfile'] = 'Hent konteksten fra filen';
$string['ignorebroken'] = 'Ignorer defekte links';
$string['linkedfiledoesntexist'] = 'Den linkede fil $a eksisterer ikke';
$string['maketoplevelitem'] = 'Flyt til øverste niveau';
$string['missingimportantcode'] = 'Denne spørgsmålstype mangler en vigtig kode:$a.';
$string['modified'] = 'Senest gemt';
$string['move'] = 'Flyt fra $a og ret links.';
$string['movecategory'] = 'Flyt kategori';
$string['movelinksonly'] = 'Ret kun hvor link peger hen, flyt eller kopier ikke filer.';
$string['moveq'] = 'Flyt spørgsmål';
$string['moveqtoanothercontext'] = 'Flyt spørgsmål til en anden kontekst.';
$string['movingcategory'] = 'Flytter kategorien';
$string['movingcategoryandfiles'] = 'Er du sikker på at du vil flytte kategorien {$a->name} og alle underkategorier til konteksten for \"{$a->contextto}\"?<br /> Vi har fundet  {$a->urlcount} filer der er linket til fra spørgsmål i {$a->fromareaname}, vil du flytte eller kopiere disse til {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Er du sikker på at du vil flytte kategorien \"{$a->name}\" og alle underkategorier til konteksten for \"{$a->contextto}\"?';
$string['movingquestions'] = 'Flytter spørgsmål og filer';
$string['movingquestionsandfiles'] = 'Er du sikker på at du vil flytte spørgsmål(ene) {$a->questions} til konteksten <strong>\"{$a->tocontext}\"</strong>?<br /> Vi har fundet <strong>{$a->urlcount} filer</strong> der er linket til fra disse spørgsmål i {$a->fromareaname}, vil du kopiere eller flytte disse til {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Er du sikker på at du vil flytte spørgsmål(ene) {$a->questions} til konteksten <strong>\"{$a->tocontext}\"</strong>?<br /> Der er <strong>ingen filer</strong> der linkes til fra disse spørgsmål i {$a->fromareaname}.';
$string['needtochoosecat'] = 'Du skal vælge en kategori at flytte spørgsmålet til eller klik på \"annuller\".';
$string['nopermissionadd'] = 'Du har ikke tilladelse til at tilføje spørgsmål her.';
$string['noprobs'] = 'Der er ikke fundet nogen problemer i din database med spørgsmål.';
$string['notenoughdatatoeditaquestion'] = 'Der var hverken angivet spørgsmåls-id, kategori-id eller spørgsmålstype.';
$string['permissionedit'] = 'Rediger dette spørgsmål';
$string['permissionmove'] = 'Flyt dette spørgsmål';
$string['permissionsaveasnew'] = 'Gem som et nyt spørgsmål';
$string['permissionto'] = 'Du har tilladelse til:';
$string['published'] = 'delt';
$string['questionaffected'] = '<a href=\"$a->qurl\">Spørgsmålet \"$a->name\" ($a->qtype)</a> er i denne kategori, men det bruges også i <a href=\"$a->qurl\">quizzen \"$a->quizname\"</a> på et andet kursus \"$a->coursename\".';
$string['questionbank'] = 'Spørgsmålsbank';
$string['questioncatsfor'] = 'Spørgsmålskategorier for \"$a\"';
$string['questiondoesnotexist'] = 'Spørgsmålet eksisterer ikke';
$string['unknownquestiontype'] = 'Ukendt spørgsmålstype: $a';
$string['unpublished'] = 'Ikke delt';

?>
