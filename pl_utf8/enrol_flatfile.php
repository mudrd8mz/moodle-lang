<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.4 (2004083100)


$string['description'] = 'W tej metodzie Moodle sprawdza specjalnie sformatowany plik tekstowy, którego lokalizację podasz. Plik może wyglądać tak:

<p><pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Plik tekstowy';
$string['filelockedmail'] = 'Plik tekstowy używany do zapisu ($a) nie może być skasowany przez crona. Zwykle oznacza to, że źle są ustawione zezwolenia (chmod) dla tego pliku. Zmień zezwolenia aby Moodle mogło kasować ten plik. W przeciwnym wypadku jego instrukcje będą wielokrotnie powtarzane.';
$string['filelockedmailsubject'] = 'Poważny błąd: Plik zapisu';
$string['location'] = 'Lokalizacja pliku';
$string['mailadmin'] = 'Powiadom admina e-mailem';
$string['mailusers'] = 'Powiadom użytkowników e-mailem';

?>
