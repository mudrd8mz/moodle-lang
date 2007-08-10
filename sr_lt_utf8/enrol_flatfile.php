<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.6 + (2006050506)


$string['description'] = 'Ova metoda će biti više puta obrađena za proveru i obradu posebno oblikovanog teksta datoteke na lokaciji koju Vi naznačite.
Datoteka sadrži reči razdvojene zarezima, raspoređene po četiri ili šest polja u jednom redu:
<pre>
* operacija, uloga, idBroj(korisnik), idBroj(kurs) [, početnoVreme, krajnjeVreme]
gde:
* operacija = dodaj | obriši
* uloga = student | predavač | predavačEditor
* idBroj(korisnik) = idBroj u korisničkoj tabeli NB bez identifikacije
* idBroj(kurs) = idBroj u tabeli kursa NB bez identifikacije
* početnoVreme = vreme početka (u sekundama) - opciono
* krajnjeVreme = vreme završetka (u sekundama) - opciono
</pre>
Datoteka može izgledati slično kao ova: 
<pre>
   dodavanje, student, 5, CF101
   dodavanje, nastavnik, 6, CF101
   dodavanje, nastavnikeditor, 7, CF101
   brisanje, student, 8, CF101
   brisanje, student, 17, CF101
   dodavanje, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Tekstualna datoteka';
$string['filelockedmail'] = 'Tekstualna datoteka koja se koristi za upise na osnovu podataka u datoteci ($a) ne može biti obrisana cron procesom. Ovo obično znači da su podešene pogrešne dozvole pristupa toj datoteci. Molimo Vas da podesite dozvole pristupa da bi Moodle  mogao da obriše datoteku, inače bi se ona mogla nastaviti neprestano obrađivati.';
$string['filelockedmailsubject'] = 'Važna greška: Datoteka sa upisima';
$string['location'] = 'Lokacija datoteke';
$string['mailadmin'] = 'Obavestiti administratora e-porukom';
$string['mailusers'] = 'Obavestiti korisnika e-porukom';

?>
