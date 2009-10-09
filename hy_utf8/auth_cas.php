<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Վավերացման ընտրություն';
$string['accesCAS'] = 'CAS օգտագործողներ';
$string['accesNOCAS'] = 'այլ օգտագործողներ';
$string['auth_cas_auth_user_create'] = 'Ստեղծել օգտագործողներ դրսից';
$string['auth_cas_baseuri'] = 'Սերվերի URI (ոչինչ, եթե չկա ոչ մի baseUri)<br />Օրինակ՝ եթե CAS սերվերը պատասխանում է host.domaine.fr/CAS/ , ապա՝<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Հիմնական URI';
$string['auth_cas_broken_password'] = 'Առանց գաղտնաբառը փոխելու դուք չեք կարող շարունակել, սակայն չկա այն փոփելու մատչելի էջ։ Խնդրվում է դիմել Ձեր համակարգի կառավարչին։';
$string['auth_cas_cantconnect'] = 'CAS-մոդուլի LDAP մասը չի կարող կապվել $a սերվերին';
$string['auth_cas_casversion'] = 'Տարբերակ';
$string['auth_cas_changepasswordurl'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_cas_create_user'] = 'Միացրեք սա, եթե ցանկանում եք Մուդլի բազա մտցնել CAS-ով վավերացված օգտվողներ։ Հակառակ դեպքում՝ միայն արդեն գոյություն ունեցող օգտվողները կարող են մուտք գործել համակարգ։';
$string['auth_cas_create_user_key'] = 'Ստեղծել օգտագործող';
$string['auth_cas_enabled'] = 'Միացրեք սա, եթե ցանկանում եք օգտագործել CAS վավերացում։';
$string['auth_cas_hostname'] = 'CAS սերվերի գլխավոր անուն (hostname) <br />eg: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Սերվերի անուն (hostname)';
$string['auth_cas_invalidcaslogin'] = 'Ներեցեք, բայց Ձեր մուտքը ձախողվել է - Դուք չեք հաստատվել';
$string['auth_cas_language'] = 'Ընտրված լեզու';
$string['auth_cas_language_key'] = 'Լեզու';
$string['auth_cas_logincas'] = 'Անվտանգ կապի մատչում';
$string['auth_cas_logoutcas'] = 'Ակտիվացրեք \'այո\' ընտրանքը, եթե ցանկանում եք դուրս գալ CAS-ից Moodle-ից դուրս գալուց';
$string['auth_cas_logoutcas_key'] = 'Ելք CAS-ից';
$string['auth_cas_multiauth'] = 'Ակտիվացրեք \'այո\' ընտրանքը, եթե ցանկանում եք ունենալ բազմա-վավերացում (CAS + այլ վավերացում)';
$string['auth_cas_multiauth_key'] = 'Բազմա-վավերացում';
$string['auth_cas_port'] = 'CAS սերվերի սարքամիացք (port)';
$string['auth_cas_port_key'] = 'Սարքամիացք (port)';
$string['auth_cas_proxycas'] = 'Եթե օգտագործում եք CAS proxy մեթոդով, ակտիվացրեք \'այո\' ընտրանքը';
$string['auth_cas_proxycas_key'] = 'Proxy մեթոդ';
$string['auth_cas_server_settings'] = 'CAS սերվերի կազմաձև';
$string['auth_cas_text'] = 'Անվտանգ կապ';
$string['auth_cas_use_cas'] = 'Օգտագործել CAS';
$string['auth_cas_version'] = 'CAS-ի տարբերակ';
$string['auth_casdescription'] = 'Այս մեթոդն օգտագործում է CAS սերվեր (Central Authentication Service) միջավայրում օգտվողների մուտքի եզակիության (Single Sign On environment (SSO)) նույնացման համար։ Ինչպես նաև կարող եք օգտագործել պարզունակ LDAP վավերացում։ Եթե ըստ CAS-ի տրված մուտքաբառն ու գաղտնաբառը վավերական են, Մուդլը ստեղծում է գործածողի նոր մուտք տվյալների բազայում և, եթե պահանջվում է վերցնում է LDAP-ում առկա հատկանշական տվյալները։ Հաջորդ մուտքերում ստուգվում են միայն գործածողի անունը և գաղտնաբառը։';
$string['auth_casnotinstalled'] = 'Չի կարող օգտագործվել CAS վավերացում։ PHP LDAP մոդուլը տեղակայված չէ։';
$string['auth_castitle'] = 'CAS սերվեր (SSO)';