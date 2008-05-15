<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.9 + (Build: 20080324) (2007101509)
$string['aftersaving...'] = 'Straks du har lagret innstillingene, vil du kanskje';
$string['allowunenrol'] = 'Tillat IMS data å <strong>melde ut</strong> studenter og lærere';
$string['basicsettings'] = 'Grunnleggende innstillinger';
$string['coursesettings'] = 'Kursdata opsjoner';
$string['createnewcategories'] = 'Opprett nye (skjulte) kurskategorier dersom de ikke finnes i Moodle';
$string['createnewcourses'] = 'Opprett nye (skjulte) kurs dersom de ikke finnes i Moodle';
$string['createnewusers'] = 'Opprett brukerkontoer for brukere som ennå ikke er registrert i Moodle';
$string['cronfrequency'] = 'Hvor ofte prosessen skal kjøres';
$string['deleteusers'] = 'Slett brukerkontoer når dette er spesifisert i IMS-dataene';
$string['description'] = 'Denne metoden vil gjentatt sjekke og prosessere en spesialformattert tekstfil der hvor du bestemmer. Fila må følge spesifikasjonene i <a href=\'../help.php?module=enrol/imsenterprise&amp;file=formatoverview.html\'>IMS Enterprise spesifikasjoner</a> og inneholde personer, grupper og medlemsskap XML elementer.';
$string['doitnow'] = 'kjør en IMS Enterprise import nå';
$string['enrolname'] = 'IMS Enterprise fil';
$string['filelockedmail'] = 'Tekstfila du benytter for IMS-basert påmelding ($a) kan ikke slettes av cron-jobben. Dette betyr vanligvis at det er feil rettigheter på fila. Vennligst rett opp rettighetene slik at Moodle kan slette fila, siden den ellers blir kjørt om og om igjen.';
$string['filelockedmailsubject'] = 'Viktig feil: Påmeldingsfil';
$string['fixcasepersonalnames'] = 'Endre personlige navn til store bokstaver';
$string['fixcaseusernames'] = 'Endre brukernavn til små bokstaver';
$string['imsrolesdescription'] = 'IMS Enterprise spesifikasjonen inkluderer 8 rolletyper.  Vennligst velg hvordan disse skal kobles mot Moodles roller, inkludert om noen av dem skal ignoreres.';
$string['location'] = 'Filplassering';
$string['logtolocation'] = 'Plassering av loggfil (tom for ingen logging)';
$string['mailadmins'] = 'Varsle administrator via e-post';
$string['mailusers'] = 'Varsle brukere via e-post';
$string['miscsettings'] = 'Diverse';
$string['processphoto'] = 'Legg til brukerfoto i profilen';
$string['processphotowarning'] = 'Advarsel: Bildebehandling vil belaste serveren mye. Vi anbefaler at du IKKE aktiverer denne muligheten dersom det betyr at en stor mengde studenter må behandles.';
$string['restricttarget'] = 'Behandle kun data dersom følgende mål er spesifisert';
$string['sourcedidfallback'] = 'Bruk &quot;sourcedid&quot; som personid dersom &quot;userid&quot; felt ikke finnes';
$string['truncatecoursecodes'] = 'Kort ned kurskoder til denne lengden';
$string['usecapitafix'] = 'Merk av her dersom du bruker &quot;Capita&quot; (XML formatet er litt annerledes)';
$string['usersettings'] = 'Brukerdata opsjoner';
$string['zeroisnotruncation'] = '0 betyr ingen forkorting';
?>
