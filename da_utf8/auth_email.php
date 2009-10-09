<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_changingemailaddress'] = 'Du har forsøgt at ændre din e-mail-adresse fra $a->oldemail til $a->newemail. Af hensyn til sikkerheden sender vi en mail til den nye adresse for at få bekræftet at den tilhører dig. Din nye adresse bliver ændret i din profil så snart du åbner linket i mailen.';
$string['auth_emailchangecancel'] = 'Annuller ændring af e-mail';
$string['auth_emailchangepending'] = 'Ændring afventer at du åbner linket der er sendt til $a->preference_newemail.';
$string['auth_emaildescription'] = 'Bekræftelse via e-mail er standardmetode til godkendelse. Når brugerne melder sig ind og vælger brugernavn og password, vil en bekræftelses-e-mail blive sendt til brugerens e-mail-adresse. Denne e-mail indeholder et sikkert link til en side, hvor brugeren kan bekræfte sine oplysninger. Fremtidige login kontrolleres ved sammenligning af det brugernavn og password, som er gemt i databasen';
$string['auth_emailnoemail'] = 'Forsøgte forgæves at sende en e-mail!';
$string['auth_emailnowexists'] = 'Den e-mail-adresse du prøvede at angive i din profil er taget af en anden efter at du skrev den. Dit forsøg på at ændre adressen er derfor annulleret, men du kan prøve igen med en anden adresse.';
$string['auth_emailtitle'] = 'Email-baseret godkendelse';
$string['auth_emailupdatemessage'] = 'Kære $a->fullname, Du har bedt om ændring af din e-mail-adresse i din profil på $a->site. Ændringen gennemføres når du har åbnet dette link i din browser: $a->url';
$string['auth_emailupdatesuccess'] = '<em>$a->fullname</em>\'s e-mail-adresse er ændret til <em>$a->email</em>.';
$string['auth_emailupdatetitle'] = 'Bekræftelse på ændring af e-mail-adresse på $a->site';
$string['auth_invalidnewemailkey'] = 'Fejl: Hvis du prøver at bekræfte en ny e-mail-adresse er der sket en fejl. Prøv igen at gå ind på den internetadresse du har fået tilsendt.';