<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.9 (2007101509)


$string['description'] = 'Denne metoden vil gjentakende sjekke etter og behandle spesielt formatterte tekstfiler på en lokasjon du angir. Filen er kommaseparert og antar at du har seks eller fire felter per linje:
<pre>
*operasjon, rolle,idnummer(bruker),idnummer(kurs)[,starttidspunkt,avslutningstidspunkt] hvor:
* operasjon = add | del
* rolle = student | teacher | teacheredit
* idnummer(bruker) = idnummer i brukertabellen. NB ikke brukernavn
* idnummer (kurs) = idnummer i kurstabellen NB ikke kursnavn
* starttid = starttid (i sekunder fra eposken) valgfritt
* avslutningstid = avslutningstid (i sekunder fra epoken) valgfritt
</pre>
Dette kan se ut noe som dette:
<pre>
add,student,5,KF101
add,teacher,6,KF101
add,teacheredit,7,KF101
del,student,8,KF101
del,student,17,KF101
add,student,21,KF101,1091115000,1091215000
</pre>';
$string['enrolname'] = 'Flatfil';
$string['filelockedmail'] = 'Tekstfilen du bruker for filbasert innmelding($a) kan ikke slettes av cronprosessen. Dette betyr vanligvis at tillatelsene på filen er feil. Vær vennlig å endre tillatelsene slik at Moodle kan slette filen, ellers vil den behandles på nytt og på nytt.';
$string['filelockedmailsubject'] = 'Viktig feil: Innmeldingsfil';
$string['location'] = 'Filplassering';
$string['mailadmin'] = 'Varsle admin med epost';
$string['mailusers'] = 'Varsle brukere med epost';

?>
