<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'If you want to use bind-user to search users, specify it here. Someting like \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Password for bind-user.';
$string['auth_ldap_contexts'] = 'Sąrašas, iš kurios vietos kilę vartotojai. Atskirkite skirtingus sąrašus su kabletaškiu \';\'. Pvz.: \'ou=user,o=org; ou=other,o=org\'';
$string['auth_ldap_create_context'] = 'Jei pasirinkote vartotojų kūrimą su el. pašto patvirtinimu, nurodykite sąrašą, kur vartotojas yra sukurtas. Jis turėtų būti kitoks nei kitų vartotojų, saugumo sumetimais. Nebūtina nurodyti sąrašo ldap_context kintamajam, Moodle automatiškai tai padarys už jus.';
$string['auth_ldap_creators'] = 'Grupių sąrašas kurių nariai gali kurti naujus kursus.';
$string['auth_ldap_host_url'] = 'Nurodykite LDAP adresą URL forma.';
$string['auth_ldap_memberattribute'] = 'Nurodykite vartotojo nario atributą, kai jis priklauso grupei.';
$string['auth_ldap_search_sub'] = 'Put value <> 0 if  you like to search users from subcontexts.';
$string['auth_ldap_update_userinfo'] = 'Atnaujinti vartotojo informaciją (vardas, pavardė, adresas..) iš LDAP į Moodle.';
$string['auth_ldap_user_attribute'] = 'Atributas naudojamas rasti vartotojui. Dažniausiai \'cn\'.';
$string['auth_ldapdescription'] = 'Šis būdas leidžia atlikti autentifikaciją naudojant išorinį LDAP serverį. Jei duotas vartotojo vardas ir slaptažodis yra teisingi, Moodle sukurs naują vartotoją savo duomenų bazėje. Šis modulis gali skaityti vartotojo atributus iš LDAP ir pildyti norimus Moodle laukus. Kitiems prisijungimams tik vartotojo vardas ir slaptažodis yra tikrinami.';
$string['auth_ldapextrafields'] = 'Šie laukai yra nebūtini. Jūs galite pasirinkti, kad Moodle pati užpildytų juos informacija iš <B>LDAP laukų</B>, kuriuos čia nurodysite. <P>Jei laukus paliksite tuščius, tai jokia informacija nebus atsiųsta iš LDAP ir Moodle pati užpildys įprastinėmis vertėmis. <P>Abiem atvejais, vartotojai galės keisti pateiktą informaciją, kai tik prisijunks.';
$string['auth_ldaptitle'] = 'Naudoti LDAP serverį';