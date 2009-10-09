<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_ad_create_req'] = 'Չի կարող ստեղծել նոր հաշիվ ակտիվ դիրեկտորիայում։ Համոզվեք, որ բավարարում եք այս աշխատանքի համար անհրաժեշտ բոլոր պահանջները(LDAPS կապ, կապակցված օգտագործող համապատասխան իրավունքներով և այլն)';
$string['auth_ldap_attrcreators'] = 'Խմբերի կամ համատեքստների ցանկ, որոնց անդամներին թույլատրվում է ստեղծել հատկանիշներ։ Բազմակի խմբերը միմյանցից անջատել \';\'-ով։ Օրինակ՝ \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Հատկանիշ ստեղծողներ';
$string['auth_ldap_auth_user_create_key'] = 'Ստեղծել օգտագործողներ արտաքինից';
$string['auth_ldap_bind_dn'] = 'Օգտագործողներին որոնելիս եթե ցանկանում եք օգտագործել կապակցված-օգտագործող, նշեք այստեղ։ Օրինակ՝ \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Բնորոշ անուն';
$string['auth_ldap_bind_pw'] = 'Գաղտնաբառ կապակցված օգտագործողի համար։';
$string['auth_ldap_bind_pw_key'] = 'Գաղտնաբառ';
$string['auth_ldap_bind_settings'] = 'Կապակցման կարգաբերումներ';
$string['auth_ldap_changepasswordurl_key'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_ldap_contexts'] = 'Համատեքստերի ցանկը, որտեղ զետեղված են օգտագործողները։ Համատեքստերը միմյանցից առանձնացրեք \';\'-ով։ Օրինակ՝ \'ou=users,o=org;ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Համատեքստեր';
$string['auth_ldap_create_context'] = 'Եթե թույլատրում եք օգտագործողների ստեղծում էլ.-փոստով հաստատման միջոցով, սահմանեք համատեքստը, որում ստեղծվել են օգտագործողները։ Այս համատեքստը պետք է տարբերվի այլ օգտագործողներից՝ կանխելու անվտանգության խնդիրները։ Դուք կարիք չունեք ldap_context-variable-ում ավելացնելու այս համատեքստը, Moodle-ը օգտագործողներին կորոնի այս համատեքստից ավտոմատ։<br /><b>Ծանուցում՝</b> Օգտագործողների ստեղծման աշխատանքի իրականացման համար Դուք պետք է ձևափոխեք auth/ldap/lib.php նշոցի auth_user_create() գործառույթը';
$string['auth_ldap_create_context_key'] = 'Համատեքստ նոր օգտագործողի համար';
$string['auth_ldap_create_error'] = 'Օգտագործողի ստեղծման սխալ LDAP-ում։';
$string['auth_ldap_creators'] = 'Խմբերի ցանկ, որոնց անդամներին թույլատրվում է ստեղծել նոր դասընթացներ։ Խմբերը միմյանցից առանձնացրեք \';\'-ով։ Օրինակ՝ \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Ստեղծողներ';
$string['auth_ldap_expiration_desc'] = 'Ընտրեք Ոչ՝ կասեցնելու գաղտնաբառերի ժամկետի լրացման ստուգումը, կամ LDAP՝ ընթերցելու գաղտնաբառի լրացման (passwordexpiration) ժամանակը անմիջապես LDAP-ից';
$string['auth_ldap_expiration_key'] = 'Ժամկետի լրացում';
$string['auth_ldap_expiration_warning_desc'] = 'Գաղտնաբառի ժամկետի լրանալուց քանի՞ օր առաջ թողարկվի զգուշացումը։';
$string['auth_ldap_expiration_warning_key'] = 'Ժամկետի լրացման նախազգուշացում';
$string['auth_ldap_expireattr_desc'] = 'Լրացուցիչ. փոխարինում է ldap-attribute-ը, որը պահպանում է գաղտնաբառի լրացման ժամկետը';
$string['auth_ldap_expireattr_key'] = 'Ժամկետի լրացման հատկանիշ';
$string['auth_ldap_graceattr_desc'] = 'Լրացուցիչ. փոխարինում է gracelogin հատկանիշը';
$string['auth_ldap_gracelogin_key'] = 'Grace մուտքի հատկանիշ';
$string['auth_ldap_gracelogins_desc'] = 'Թույլատրել LDAP gracelogin աջակցություն: Գաղտնաբառի լրացման ժամկետը լրանալուց հետո օգտագործողը կարող է մուտք գործել մինչև gracelogin հաշիվը 0 դառնալը: Այս կարգաբերման ակտիվացմամբ ցուցադրվում է grace մուտքի հաղորդագրությունը, եթե գաղտնաբառի ժամկետը լրանա';
$string['auth_ldap_gracelogins_key'] = 'Grace մուտքեր';
$string['auth_ldap_groupecreators'] = 'Խմբերի կամ համատեքստերի ցանկ, որոնց անդամները խմբեր ստեղծելու թույլտվություն ունեն: Խմբերը միմյանցից անջատեք \';-ով։ Օրինակ` \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Խումբ ստեղծողներ';
$string['auth_ldap_host_url'] = 'Նշեք LDAP սերվերի անունը URL-ձևով, ինչպես օրինակ` \'ldap://ldap.myorg.com/\' կամ \'ldaps://ldap.myorg.com/\': Սերվերները միմյանցից անջատեք \';\'-ով failover աջակցություն ստանալու համար:';
$string['auth_ldap_host_url_key'] = 'Սերվերի URL';
$string['auth_ldap_ldap_encoding'] = 'Նշեք LDAP սպասարկչում օգտագործվող կոդավորումը: Առավել հնարավոր է utf-8, MS AD v2 օգտագործում է սարքահիմքի (platform) կանխորոշված կոդավորումը, ինչպես օրինակ` cp1252, cp1250 և այլն:';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP կոդավորում';
$string['auth_ldap_login_settings'] = 'Մուտքի կարգաբերիչներ';
$string['auth_ldap_memberattribute'] = 'Լրացուցիչ՝ անտեսում է օգտագործողի անդամության հատկանիշը, եթե օգտագործողները պատկանում են որևէ խմբի։ Սովորաբար՝ \'անդամ\'';
$string['auth_ldap_memberattribute_isdn'] = 'Լրացուցիչ. Փոխարինում է անդամության հատկանիշի արժեքների մշակումը, նաև 0 կամ 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'Անդամության հատկանիշն օգտագործում է dn';
$string['auth_ldap_memberattribute_key'] = 'Անդամության հատկանիշ';
$string['auth_ldap_no_mbstring'] = 'Ակտիվ դիրեկտորիայում օգտագործողներ ստեղծելու համար Ձեզ անհրաժեշտ է  mbstring ընդլայնումը:';
$string['auth_ldap_noconnect'] = 'LDAP-մոդուլը չի կարող կապ հաստատել $a սերվերի հետ';
$string['auth_ldap_noconnect_all'] = 'LDAP-մոդուլը չի կարող կապ հաստատել որևէ $a սերվերի հետ';
$string['auth_ldap_noextension'] = 'Զգուշացում. PHP LDAP մոդուլը, կարծես թե չկա: Խնդրվում է համոզվել, որ այն տեղակայված և ակտիվացվացված է:';
$string['auth_ldap_objectclass'] = 'Լրացուցիչ. անտեսում է objectClass կիրառված ldap_user_type-ում օգտագործողների անուն/որոնում դեպքում։ Սովորաբար դուք չունեք այն փոփոխելու անհրաժշտություն։';
$string['auth_ldap_objectclass_key'] = 'Object class';
$string['auth_ldap_opt_deref'] = 'Սահմանում է ինչպես ծածկանունները մշակվեն որոնման ընթացքում: Ընտրեք հետևյալ արժեքներից մեկը` \"Ոչ\" (LDAP_DEREF_NEVER) կամ \"Այո\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Dereference ծածկանունները';
$string['auth_ldap_passtype'] = 'Նշեք LDAP սպասարկչում նոր կամ փոխված գաղտնաբառերի ձևաչափը';
$string['auth_ldap_passtype_key'] = 'Գաղտնաբառի ձևաչափ';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP գաղտնաբառի ժամկետի կարգաբերումներ:';
$string['auth_ldap_preventpassindb'] = 'Ընտրեք այո, որպեսզի կանխարգելեք գաղտնաբառերի պահպանումը Moodle-ի ՏՇ:';
$string['auth_ldap_preventpassindb_key'] = 'Թաքցնել գաղտնաբառերը';
$string['auth_ldap_search_sub'] = 'Որոնել օգտագործողներ ենթահամատեքստերից:';
$string['auth_ldap_search_sub_key'] = 'Որոնել ենթահամատեքստեր';
$string['auth_ldap_server_settings'] = 'LDAP սերվերի կարգաբերումներ';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() չի աջակցում օգտագործողի ընտրված տիպը` $a (..դեռ)';
$string['auth_ldap_update_userinfo'] = 'Նորացնել օգտագործողի տվյալները (անուն, ազգանուն, հասցե..) LDAP-ից Moodle:  Նշեք \"Տվյալների արտապատկերում\" կարգաբերումները, ինչպես անհրաժեշտ է Ձեզ:';
$string['auth_ldap_user_attribute'] = 'Լրացուցիչ. Փոխարինում է հատկանիշը, որն օգտագործվում է` անուն/որոնել օգտագործողներ հատկանիշը users. Սովորաբար` \'cn\':';
$string['auth_ldap_user_attribute_key'] = 'Օգտագործողի հատկանիշ';
$string['auth_ldap_user_exists'] = 'LDAP մուտքաբառն արդեն գոյություն ունի:';
$string['auth_ldap_user_settings'] = 'Օգտագործողի որոնման կարգաբերումներ';
$string['auth_ldap_user_type'] = 'Ընտրեք, թե ինչպես են օգտագործողները պահպանվել LDAP-ում: Ինչպես նաև այս կարգաբերումը սահմանում է, թե ինչպես կաշխատեն մուտքաբառի ժամկետի լրանալը, grace մուտքերը և օգտագործողի ստեղծումը:';
$string['auth_ldap_user_type_key'] = 'Օգտագործողի տիպ';
$string['auth_ldap_usertypeundefined'] = 'config.user_type սահմանված չէ կամ ldap_expirationtime2unix գործառույթը չի աջակցում ընտրված տիպը:';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type սահմանված չէ կամ ldap_unixi2expirationtime գործառույթը չի աջակցում ընտրված տիպը:';
$string['auth_ldap_version'] = 'Ձեր սպասարկչում օգտագործվող LDAP կանխագրի տարբերակը։';
$string['auth_ldap_version_key'] = 'Տարբերակ';
$string['auth_ldapdescription'] = 'Այս մեթոդը ապահովում է վավերացում արտաքին LDAP սերվերում։

                                  Եթե տրված մուտքաբառը և գաղտնաբառը թույլատրելի են, Moodle-ը նոր օգտագործողի մուտք է ստեղծում տվյալների  

                                  շտեմարան։ Այս մոդուլը կարող է LDAP-ից կարդալ օգտագործողի հատկանիշները և Moodle-ում նախապես լրացնել  

                                  պահանջվող դաշտերը։  Հետևյալ աշխատամուտքերի համար ստուգվել են միայն մուտքաբառը և գաղտնաբառը։';
$string['auth_ldapextrafields'] = 'Այս դաշտերը պարտադիր չեն:  Կարող եք ընտրել նախապես լրացնել Moodle-ի օգտագործողի որոշ դաշտեր  այստեղ Ձեր նշած <b>LDAP դաշտերի</b> տվյալներով։ <p>Եթե այս դաշտը դատարկ թողնեք, LDAP-ից ոչինչ չի փոխանցվի և փոխարենը կօգտագործվի Moodle-ի կանխորոշվածը։</p><p>Ցանկացած դեպքում օգտագործողը կկարողանա խմբագրել բոլոր այս դաշտերը մուտք գործելուց հետո։</p>';
$string['auth_ldapnotinstalled'] = 'Չի կարող օգտագործվել LDAP վավերացում: PHP LDAP մոդուլը տեղակայված չէ:';
$string['auth_ldaptitle'] = 'LDAP սերվեր';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Սահմանեք այո՝ փորձելու եզակի մուտքը (Single Sign On) NTLM տիրույթով։ <strong>Ծանուցում.</strong> աշխատելու համար այն պահանջում է լրացուցիչ տեղակայում ցանցակայքում, տե՛ս <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Թույլատրել';
$string['auth_ntlmsso_ie_fastpath'] = 'NTLM SSO արագ ուղի թույլատրելու համար ընտրեք այո (բաց է թողնում որոշակի քայլեր և աշխատում է միայն, եթե սպասառուի զննարկիչը MS Internet Explorer է)։';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE արագ ուղի՞';
$string['auth_ntlmsso_subnet'] = 'Եթե կարգաբերվել է, SSO կփորձի միայն այս ենթացանցի սպասառուների հետ։ Ձևաչափ՝ xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Ենթացանց';
$string['ntlmsso_attempting'] = 'Եզակի մուտքի փորձ NTLM...-ի միջոցով';
$string['ntlmsso_failed'] = 'Ինքնաշխատ մուտքը ձախողվել է, փորձեք մուտքի նորմալ էջը...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO չի թույլատրվել։';