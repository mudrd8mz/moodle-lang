<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_changingemailaddress'] = 'Du har bedt om å endre e-postadressen, fra $a->oldemail to $a->newemail. Av sikkerhetsgrunner sender vi deg en e-post til den nye adressen for å bekrefte at denne tilhører deg. E-postadressen din vil bli oppdatert straks du klikker på URL-en i den tilsendte meldingen.';
$string['auth_emailchangecancel'] = 'Avbryt e-postendringen';
$string['auth_emailchangepending'] = 'Venter på endringsbekreftelse. Vennligst klikk på lenken som ble sendt til deg på $a->preference_newemail.';
$string['auth_emaildescription'] = 'E-postbekreftelse er standard autentiseringsmetode. Når brukerne registrerer seg og velger brukernavn og passord, vil en e-post om bekreftelse bli sendt til brukerens e-postadresse. Denne e-posten inneholder en sikker link til en side der brukeren kan bekrefte registreringen. Fremtidige innlogginger kontrolleres kun ved sammenligning av brukernavn og tilhørende passord som ligger i Moodle-databasen.';
$string['auth_emailnoemail'] = 'Prøvde å sende deg en epost men fikk ikke til!';
$string['auth_emailnoinsert'] = 'Kunne ikke legge til posten din i databasen!';
$string['auth_emailnowexists'] = 'E-postadressen du forsøkte å skrive inn tilhører en annen bruker. Endringen av e-postadresse er derfor avbrutt, men du kan prøve igjen med en annen e-postadresse.';
$string['auth_emailrecaptcha'] = 'Legger til en visuell/hørbar bekreftelseselement på siden for egenregistrering ved epost. Denne beskytter siden din mot spammere og bidragsytere for veldedige saker. Se http://recaptcha.net/learnmore.html for flere detaljer';
$string['auth_emailrecaptcha_key'] = 'Slå på reCAPTCHA element';
$string['auth_emailsettings'] = 'Innstillinger';
$string['auth_emailtitle'] = 'E-postbasert autentisering';
$string['auth_emailupdate'] = 'E-postadresse oppdatering';
$string['auth_emailupdatemessage'] = 'Kjære $a->fullname,
Du har bedt om at e-postadressen for brukerkontoen din på $a->site. Vennligst åpne følgende URL i nettleseren din for å bekrefte denne endringen.';
$string['auth_emailupdatesuccess'] = 'E-postadressen til brukeren <em>$a->fullname</em> er bekreftet endret til <em>$a->email</em>.';
$string['auth_emailupdatetitle'] = 'Bekreftelse av e-postoppdatering på  $a->site';
$string['auth_invalidnewemailkey'] = 'FEIL: Dersom du prøver å bekrefte endring av en e-postadresse, kan du ha fått feil i adressen du kopierte inn i nettleseren din. Vennligst kopier tilsendt URL på nytt og prøv igjen.';
$string['auth_outofnewemailupdateattempts'] = 'Du har nå forsøkt endre e-postadressen for mange ganger. Oppdateringen er derfor avbrutt.';