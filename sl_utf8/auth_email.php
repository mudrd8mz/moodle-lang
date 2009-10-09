<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_changingemailaddress'] = 'Zahtevali ste spremembo e-poštnega naslova z $a->oldemail na $a->newemail. Zaradi varnostnih razlogov smo vam na nov naslov poslali sporočilo. Vaš e-poštni naslov bo spremenjen takoj, ko potrdite novega s klikom na URL povezavo v sporočilu.';
$string['auth_emailchangecancel'] = 'Prekliči spremembo e-poštnega naslova';
$string['auth_emailchangepending'] = 'Sprememba v teku. Kliknite na URL povezavo, ki je bila poslana na naslov $a->preference_newemail.';
$string['auth_emaildescription'] = 'Potrditev prek e-pošte je privzet način preverjanja pristnosti.  Ko se uporabnik prijavi, si izbere novo uporabniško ime in geslo, potrditev prejme prek elektronske pošte na svoj elektronski naslov.  Ta elektronska pošta vsebuje varno povezavo na stran, kjer lahko uporabnik potrdi svoj uporabniški račun. Ob prihodnjih prijavah se zgolj preveri uporabniško ime in geslo z vrednostmi shranjenimi v podatkovni zbirki Moodle.';
$string['auth_emailnoemail'] = 'Napaka pri poskusu pošiljanja e-pošte!';
$string['auth_emailnoinsert'] = 'Napaka pri dodajanju vašega zapisa v podatkovno zbirko!';
$string['auth_emailnowexists'] = 'E-poštni naslov, ki ste ga želeli dodati svojemu profilu, je bil v času od vaše zahteve dodeljen drugemu. Vaša zahteva je bila zato preklicana. Lahko poskusite ponovno z novim naslovom.';
$string['auth_emailrecaptcha'] = 'Doda element s slikovno ali zvočno potrditvijo na prijavno stran za uporabnike, ki si sami ustvarijo uporabniški račun na temelju e-poštnega naslova. To ščiti vaš strežnik pred nadlegovalci in pomaga pri hvalevrednem cilju. Za več informacij si oglejte http://recaptcha.net/learnmore.html. <br /><em>Zahtevana je PHP razširitev cURL.</em>';
$string['auth_emailrecaptcha_key'] = 'Omogoči element reCAPTCHA';
$string['auth_emailsettings'] = 'Nastavitve';
$string['auth_emailtitle'] = 'Preverjanje pristnosti na osnovi e-pošte';
$string['auth_emailupdate'] = 'Posodobi e-poštni naslov';
$string['auth_emailupdatemessage'] = 'Spoštovani $a->fullname,

zahtevali ste spremembo vašega e-poštnega naslova vašega uporabniškega računa na strežniku $a->site. Prosimo, da spodnjo povezavo odprete v vašem brskalniku in potrdite spremembo.

$a->url';
$string['auth_emailupdatesuccess'] = 'E-poštni naslov uporabnika <em>$a->fullname</em> je bil uspešno posodobljen na <em>$a->email</em>.';
$string['auth_emailupdatetitle'] = 'Potrditev e-poštnega naslova na strežniku $a->site';
$string['auth_invalidnewemailkey'] = 'Napaka: če poskušate potrditi spremembo e-poštnega naslova, je mogoče prišlo do napake pri kopiranju URL naslova, ki ste ga dobili po e-pošti. Skopirajte naslov še enkrat in poskusite ponovno.';
$string['auth_outofnewemailupdateattempts'] = 'Porabili ste vse dovoljne poskuse posodobitve e-poštnega naslova. Vaša zahteva je bila preklicana.';