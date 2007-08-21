<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 Beta + (2007081600)


$string['adminreport'] = 'Rapport over mogelijke problemen in je vragendatabank';
$string['broken'] = 'Dit is een \"gebroken link\" - verwijst naar een niet-bestaand bestand.';
$string['byandon'] = 'door <em>$a->user</em> op <em>$a->time</em>';
$string['categorycurrent'] = 'Huidige categorie';
$string['categorycurrentuse'] = 'Gebruik deze categorie';
$string['categorydoesnotexist'] = 'Deze categorie bestaat niet';
$string['categorymoveto'] = 'Bewaar in categorie';
$string['changepublishstatuscat'] = 'De instelling voor het delen van <a href=\"$a->caturl\">categorie \"$a->name\"</a> in cursus \"$a->coursename\" zal gewijzigd worden van <strong>$a->changefrom naar $a->changeto</strong>.';
$string['copy'] = 'Kopiëer van $a en wijzig de links.';
$string['created'] = 'Aangemaakt';
$string['createdmodifiedheader'] = 'Aangemaakt / gewijzigd';
$string['cwrqpfs'] = 'Willekeurige vragen kiezen vragen uit subcategorieën';
$string['cwrqpfsinfo'] = '<p>Gedurende de upgrade naar Moodle 1.9 zullen we vragencategorieën opsplitsen in verschillende contexten. Van sommige vragencategorieën en vragen op je site zal de status van het delen gewijzigd worden. Dit is nodig in het zeldzame geval dat één of meer \'willekeurige vragen\' van een test ingesteld zijn om uit een mix van gedeelde en niet gedeelde categorieën vragen te kiezen (zoals het geval is op deze site). Dit gebeurt wanneer een \'willekeurige vraag\' is ingesteld om te kiezen uit subcategorieën en bij één of meer subcategorieën is het delen anders ingesteld dan de bovenliggende categorie waarin de willekeurige vraag is gecreëerd.</p>
<p>Van de volgende vragencategorieën, waaruit \'willekeurige vragen\' in bovenliggende categorieën vragen selecteren, zal het delen gewijzigd worden naar de zelfde status als de categorie waarin de \'willekeurige vraag\' zich bevindt tijdens de upgrade naar Moodle 1.9. De betreffende vragen zullen blijven werken in alle bestaande testen tot ze uit deze testen verwijderd worden.';
$string['cwrqpfsnoprob'] = 'Er zijn geen vragencategorieën in jouw site die het probleem met \'willekeurige vragen\' kiezen uit subcategorieën vertonen.';
$string['defaultfor'] = 'Standaard voor $a';
$string['defaultinfofor'] = 'De standaardcategorie voor gedeelde vragen in context \'$a\'';
$string['donothing'] = 'Kopieëer of verplaats geen bestanden, wijzig geen links.';
$string['editingcategory'] = 'Categorie bewerken';
$string['editingquestion'] = 'Vraag bewerken';
$string['erroraccessingcontext'] = 'Fout: geen toegang tot context';
$string['errorfilecannotbecopied'] = 'Fout: kan bestand $a niet kopieëren.';
$string['errorfilecannotbemoved'] = 'Fout: kan bestand $a niet verplaatsen.';
$string['errorfileschanged'] = 'Fout: bestanden gelinkt aan vragen zijn gewijzigd sinds het tonen van dit formulier.';
$string['exportcategory'] = 'Exporteer categorie';
$string['filesareacourse'] = 'de plaats voor cursusbestanden';
$string['filesareasite'] = 'de plaats voor sitebestanden';
$string['filestomove'] = 'Verplaats / kopieëer bestanden naar $a?';
$string['fractionsnomax'] = 'Eén van de vragen moet een score van 100%% hebben, zodat het mogelijk is om alle punten voor deze vraag te behalen.';
$string['getcategoryfromfile'] = 'Haal categorie uit bestand';
$string['getcontextfromfile'] = 'Haal context uit bestand';
$string['ignorebroken'] = 'Negeer gebroken links';
$string['linkedfiledoesntexist'] = 'Het gelinkte bestand $a bestaat niet';
$string['makechildof'] = 'Maak ondergeschikt aan \'$a\'';
$string['maketoplevelitem'] = 'Verplaats naar top';
$string['missingimportantcode'] = 'Dit vraagtype mist belangrijke code: $a';
$string['modified'] = 'Gewijzigd';
$string['move'] = 'Verplaats van $a en wijzig links.';
$string['movecategory'] = 'Verplaats categorie';
$string['movelinksonly'] = 'Wijzig alleen verwijzing van links, verplaats noch kopieëer bestanden';
$string['moveq'] = 'Verplaats vraag/vragen';
$string['moveqtoanothercontext'] = 'Verplaats vraag naar andere context.';
$string['movingcategory'] = 'Categorie verplaatsen';
$string['movingcategoryandfiles'] = 'Ben je er zeker van dat je de categorie{$a->name} en alle onderliggende categorieën wil verplaatsen naar context \"{$a->contextto}\"?<br /> We hebben {$a->urlcount} bestanden gevonden die vanuit vragen gelinkt zijn in {$a->fromareaname}. Wil je die bestanden kopiëren of verplaatsen naar {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Ben je er zeker van dat je categorie \"{$a->name}\" en alle onderliggende categorieën wil verplaatsen naar \"{$a->contextto}\"?';
$string['movingquestions'] = 'Vragen en bestanden verplaatsen';
$string['movingquestionsandfiles'] = 'Ben je er zeker van dat je de vraag / vragen {$a->questions} naar <strong>\"{$a->tocontext}\"</strong> wil kopieëren?<br /> Er zijn <strong>{$a->urlcount} bestanden </strong> gelinkt vanuit deze vraag / vragen naar {$a->fromareaname}. Wil je deze kopieëren of verplaatsen naar {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Ben je er zeker van dat je deze vraag / vragen  {$a->questions} naar <strong>\"{$a->tocontext}\"</strong> wil verplaatsen?<br /> Er zijn <strong>geen bestanden</strong> gelinkt vanuit deze vraag / vragen in  {$a->fromareaname}.';
$string['needtochoosecat'] = 'Je moet een categorie kiezen om deze vragen naartoe te verplaatsen of klik op \'annuleer\'.';
$string['nopermissionadd'] = 'Je hebt het recht niet om hier vragen toe te voegen.';
$string['noprobs'] = 'Er zijn geen problemen gevonden in je vragendatabank.';
$string['notenoughdatatoeditaquestion'] = 'Noch een vraad ID, een categorie ID of een vraagtype is opgegeven.';
$string['notenoughdatatomovequestions'] = 'Je moet de vraag id\'s opgeven van de vragen die je wil verplaatsen.';
$string['permissionedit'] = 'Bewerk deze vraag';
$string['permissionmove'] = 'Verplaats deze vraag';
$string['permissionsaveasnew'] = 'Bewaar dit als een nieuwe vraag';
$string['permissionto'] = 'Je hebt het recht om:';
$string['published'] = 'gepubliceerd';
$string['questionaffected'] = '<a href=\"$a->qurl\">Vraag \"$a->name\" ($a->qtype)</a> is in deze vragencategorie, maar is ook gebruikt in <a href=\"$a->qurl\">de test \"$a->quizname\"</a> in een andere cursus: \"$a->coursename\".';
$string['questionbank'] = 'Vragenpool';
$string['questioncatsfor'] = 'Vragencategorieën voor \'$a\'';
$string['questiondoesnotexist'] = 'Deze vraag bestaat niet.';
$string['questionuse'] = 'Gebruik vraag in deze activiteit';
$string['shareincontext'] = 'Deel in context voor $a';
$string['tofilecategory'] = 'Bewaar categorie in bestand';
$string['tofilecontext'] = 'Bewaar context in bestand';
$string['unknown'] = 'Onbekend';
$string['unknownquestiontype'] = 'Onbekend vraagtype: $a.';
$string['unpublished'] = 'Niet gepubliceerd';

?>
