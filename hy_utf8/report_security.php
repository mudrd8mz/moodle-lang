<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)
      // local modifications from http://vle.lib.ysu.am/moodle
//NOTE TO TRANSLATORS: please do not translate yet, we are going to finalise this file sometime in January and backport to 1.9.x ;-)
$string['configuration'] = 'Կազմաձև';
$string['details'] = 'Մանրամասներ';
$string['description'] = 'Նկարագրություն';
$string['issue'] = 'Արդյունք';
$string['reportsecurity'] = 'Անվտանգության տեսություն';
$string['security:view'] = 'Դիտել անվտանգության հաշվետվությունը';
$string['status'] = 'Կարգավիճակ';
$string['statuscritical'] = 'Քննադատական';
$string['statusinfo'] = 'Տեղեկություն';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Վտանգավոր';
$string['statuswarning'] = 'Զգուշացում';
$string['timewarning'] = 'Տվյալների մշակումը կարող է երկար տևել, խնդրվում է համբերատար լինել...';
$string['check_configrw_details'] = '<p>Խորհուրդ է տրվում config.php-ի թույլտվությունները փոփոխել տեղակայումից հետո, քանի որ ֆայլը չի կարող փոփոխվել ցանցից։</p>';
$string['check_configrw_name'] = 'Գրանցելի config.php';
$string['check_configrw_ok'] = 'config.php չի կարող փոփոխվել PHP գրվածքով։';
$string['check_configrw_warning'] = 'PHP գրվածքները կարող են փոփոխել config.php-ն։';
$string['check_cookiesecure_details'] = '<p>Եթե թույլատրում եք https հաղորդակցություն, խորհուրդ է տրվում, որ թույլատրեք նաև անվտանգ cookie-ներ։ Ինչպես նաև պետք է ավելացնեք մշտական վերաուղղորդում http-ից https-ի։</p>';
$string['check_cookiesecure_error'] = 'Խնդրվում է թույլատրել անվտանգ cookie-ներ';
$string['check_cookiesecure_name'] = 'Անվտանգ cookie-ներ';
$string['check_cookiesecure_ok'] = 'Թույլատրվել են անվտանգ cookie-ներ';
$string['check_courserole_anything'] = '\"doanything\" հնարավորությունը պետք է չթույլատրվի այս <a href=\"$a\">համատեքստում</a>։';
$string['check_courserole_details'] = '<p>Յուրաքանչյուր դասընթաց ունի մեկ կանխորոշված գրանցման սահմանված դեր։ Խնդրվում է համոզվել, որ թույլատրված չեն վտանգավոր հնարավորություններ այս դերի համար։</p>
<p>Դասընթացի կանխորոշված դերի համար միակ աջակցվող գործող տիպը <em>ՈՒսանողն</em> է։</p>';
$string['check_courserole_error'] = 'Հայտնաբերվել են դասընթացի սխալ կարգաբերված կանխորոշված դերեր։';
$string['check_courserole_riskylegacy'] = 'Ժառանգված վտանգավոր տիպ է հայտնաբերվել <a href=\"$a->url\">$a->shortname</a>-ում։';
$string['check_emailchangeconfirmation_info'] = 'Օգտագործողները կարող են մուտքագրել միայն թույլատրելի տիրույթների էլ.-փոստ հասցեներ։';
$string['check_courserole_legacy'] = 'Չաջակցված գործող <a href=\"$a\">դեր</a> է հայտնաբերվել։';
$string['check_courserole_name'] = 'Կանխորոշված դերեր (դասընթացներ)';
$string['check_courserole_notyet'] = 'Օգտագործվել է միայն դասընթացի կանխորոշված դերը։';
$string['check_courserole_ok'] = 'Դասընթացի կանխորոշված դերի սահմանումը նորմալ է։';
$string['check_courserole_risky'] = 'Վտանգավոր հնարավորություններ են հայտնաբերվել <a href=\"$a\">համատեքստում</a>։';
$string['check_defaultcourserole_anything'] = '\"doanything\" հնարավորությունը պետք է չթույլատրվի այս <a href=\"$a\">համատեքստում</a>։';
$string['check_defaultcourserole_details'] = '<p>Դասընթացում գրանցվելու կանխորոշված ուսանողի դերը սահմանում է կանխորոշված դեր դասընթացների համար։ Խնդրվում է ստուգել, որ այս դերի համար թույլատրված չեն վտանգավոր հնարավորություններ։
<p>Օգտագործողի կանխորոշված դերի համար աջակցված գործող տիպ է միայն <em>ՈՒսանողը</em>։</p>';
$string['check_defaultcourserole_error'] = 'Հայտնաբերվել է դասընթացի սխալ սահմանված կանխորոշված դեր՝ \"$a\"։';
$string['check_defaultcourserole_legacy'] = 'Չաջակցված գործող տիպ է հայտնաբերվել։';
$string['check_defaultcourserole_name'] = 'Դասընթացի կանխորոշված դեր (ընդհանուր)';
$string['check_defaultcourserole_notset'] = 'Կանխորոշված դերը չի սահմանվել։';
$string['check_defaultcourserole_ok'] = 'Կայքի կանխորոշված դերի սահմանումը նորմալ է։';
$string['check_defaultcourserole_risky'] = 'Վտանգավոր հնարավորություններ են հայտնաբերվել <a href=\"$a\">համատեքստում</a>։';
$string['check_defaultuserrole_details'] = '<p>Բոլոր գրանցված օգտագործողներին տրվել են կանխորոշված օգտագործողի դերի հնարավորությունները։ Խնդրվում է ստուգել, որ այս դերի համար թույլատրված չեն վտանգավոր հնարավորություններ։</p>
<p>Օգտագործողի կանխորոշված դերի համար աջակցված գործող տիպ է միայն <em>Վավերացված օգտագործողը</em>։ Դասընթացը դիտելու հնարավորությունը պետք է թույլատրված չլինի։</p>';
$string['check_defaultuserrole_error'] = 'Օգտագործողի կանխորոշված դերը՝ \"$a\", սխալ է սահմանվել։';
$string['check_defaultuserrole_name'] = 'Գրանցված օգտագործողի դեր';
$string['check_defaultuserrole_notset'] = 'Կանխորոշված դերը չի սահմանվել։';
$string['check_defaultuserrole_ok'] = 'Գրանցված օգտագործողի դերի սահմանումը նորմալ է։';
$string['check_displayerrors_details'] = '<p>Խորհուրդ չի տրվում <code>display_errors</code> PHP կարգաբերման թույլատրումը գործող (արտադրական) կայքերում, քանի որ սխալների հաղորդագրությունները կարող են բացահայտել զգայուն տեղեկություն Ձեր սերվերի վերաբերյալ։</p>';
$string['check_displayerrors_error'] = 'Թույլատրվել է սխալների ցուցադրման PHP կարգաբերում։ Խորհուրդ է տրվում կանխարգելել այն։';
$string['check_displayerrors_name'] = 'PHP սխալների ցուցադրում';
$string['check_displayerrors_ok'] = 'Կանխարգելվել է PHP սխալների ցուցադրումը։';
$string['check_emailchangeconfirmation_details'] = '<p>Խորհուրդ է տրվում, որ էլ.-փոստի հաստատման քայլը պարտադիր լինի, երբ օգտագաործողներն իրենց անձնական էջում փոխում են իրենց էլ.-փոստի հասցեն։ Եթե կանխարգելվի, սպամերները կարող են փորձել չարաշահել սպասրկիչը և սպամ ուղարկել։</p>';
$string['check_emailchangeconfirmation_error'] = 'Օգտագործողները կարող են մուտքագրել ցանկացած էլ.-փոստ հասցե։';
$string['check_emailchangeconfirmation_name'] = 'Էլ.-փոստի փոփոխման հաստատում';
$string['check_emailchangeconfirmation_ok'] = 'Օգտագործողի անձնական էջում էլ.-փոստ հասցեի փոփոխման հաստատում։';
$string['check_embed_details'] = '<p>Անսահմանակ object ներդրումը չափազանց վտանգավոր է -ցանկացած գրանցված օգտագործող կարող է սկսել XSS հարձակումներ այլ սերվերների օգտագործողների դեմ։ Խնդրվում է կանխարգելել այն գործող (արտադրական) սերվերներում։</p>';
$string['check_embed_error'] = 'Թույլատրվել է անսահմանակ object ներդրում - սա չափազանց վտանգավոր է շատ սերվերների համար։';
$string['check_embed_name'] = 'Թույլատրել EMBED և OBJECT';
$string['check_embed_ok'] = 'Չի թույլատրվել անսահմանակ object ներդրում։';
$string['check_frontpagerole_details'] = '<p>Տիտղոսաթերթի գործողությունների համար տիտղոսաթերթի կանխորոշված դեր է տրվել բոլոր գրանցված օգտագործողներին։ Խնդրվում է համոզվել, որ այս դերի համար չեն թույլատրվել վտանգավոր հնարավորություններ։</p>
<p>Խորհուրդ է տրվում այս նպատակի համար ստեղծել հատուկ դեր և չօգտագործել գործողը։</p>';
$string['check_frontpagerole_error'] = 'Սխալ սահմանված տիտղոսաթերթի դեր է հայտնաբերվել \"$a\"։';
$string['check_frontpagerole_name'] = 'Տիտղոսաթերթի դեր';
$string['check_frontpagerole_notset'] = 'Չի սահմանվել տիտղոսաթերթի դեր։';
$string['check_frontpagerole_ok'] = 'Տիտղոսաթերթի դերի սահմանումը նորմալ է։';
$string['check_globals_details'] = '<p>Register globals-ը համարվում է չափազանց վտանգավոր PHP կարգաբերում։</p>
<p><code>register_globals=off</code> պետք է կարգաբերվի PHP կազմաձևում։ Այս կարգաբերումը կառավարվում է Ձեր <code>php.ini</code>, Apache/IIS կազմաձևով կամ <code>.htaccess</code> ֆայլով։</p>';
$string['check_globals_error'] = 'Register globals ՊԵՏՔ Է կանխարգելվի։ Խնդրվում է անմիջապես ուղղել սերվերի PHP կարգաբերումները։';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Register globals-ը կանխարգելվել է։';
$string['check_google_details'] = '<p>Բացել Google-ի համար կարգաբերումը թույլատրում է որոնման ծրագրին մուտք գործել դասընթաց հյուրի կարգավիճակով։ Իմաստ չունի այս կարգաբերման թույլատրումը, եթե հյուրի մուտք չի թույլատրվել։</p>';
$string['check_google_error'] = 'Որոնման ծրագրի մատչելիությունը թույլատրված է, սակայն հյուրի մատչելիությունը արգելափակված է։';
$string['check_google_info'] = 'Որոնման ծրագիր կարելի է մուտք գործել որպես հյուր։';
$string['check_google_name'] = 'Բացել Google-ի համար';
$string['check_google_ok'] = 'Որոնման ծրագրի մատչելիությունը թույլատրված չէ։';
$string['check_guestrole_details'] = '<p>Հյուրի դերը գործածվում է հյուրերի, մուտք չգործած օգտագործողների և դասընթացի մատչելիության ժամանակավոր հյուրի համար։ Խնդրվում է ստուգել, որ այս դերում չեն թույլատրված վտանգավոր հնարավորություններ։</p>
<p>Հյուրի դերի համար աջակցված գործող տիպ է միայն <em>Հյուրը</em>։</p>';
$string['check_guestrole_error'] = 'Հյուրի դերը \"$a\" սխալ է սահմանված';
$string['check_guestrole_name'] = 'Հյուրի դեր';
$string['check_guestrole_notset'] = 'Հյուրի դերը սահմանված չէ։';
$string['check_guestrole_ok'] = 'Հյուրի դերի սահմանումը նորմալ է։';
$string['check_mediafilterswf_details'] = '<p>Ինքնաշխատ swf ներկառուցումը շատ վտանգավոր է - ցանկացած գրանցված օգտագործող կարող է սկսել XSS հարձակումներ այլ սերվերների օգտագործողների դեմ։ Խնդրվում է կանխարգելել այն գործող (արտադրական) սերվերներում։</p>';
$string['check_mediafilterswf_error'] = 'Թույլատրվել է Flash media զտիչը - սա մեծ վտանգ է ներկայացնում սերվերների մեծ մասի համար։';
$string['check_mediafilterswf_name'] = 'Թույլատրվել է .swf media զտիչը';
$string['check_mediafilterswf_ok'] = 'Flash media զտիչը թույլատրված չէ։';
$string['check_noauth_details'] = '<p><em>Առանց վավերացման</em> մեթոդը նախատեսված չէ արտադրական կայքերի համար։ Խնդրվում է կանխարգելեք այն, եթե այն փորձնական կայք չէ։</p>';
$string['check_noauth_error'] = 'Առանց վավերացման մեթոդը չի կարող օգտագործվել արտադրական կայքերում։';
$string['check_noauth_name'] = 'Առանց վավերացման';
$string['check_noauth_ok'] = 'Առանց վավերացման մեթոդը կանխարգելվել է։';
$string['check_openprofiles_details'] = '<p>Օգտագործողների բաց էջերը կարող են չարաշահել սպամերները։ Խորհուրդ է տրվում ակտիվացնել <code>Օգտագործողներին պարտադրել մուտք գործել անձնական էջերի համար</code> կամ <code>Օգտագործողներին պարտադրել մուտք գործել</code>։</p>';
$string['check_openprofiles_error'] = 'Ցանկացած մարդ կարող է տեսնել օգտագործողների էջերը առանց մուտք գործելու';
$string['check_openprofiles_name'] = 'Օգտագործողների բաց էջեր';
$string['check_openprofiles_ok'] = 'Օգտագործողների էջերը տեսնելու համար անհրաժեշտ է մուտք գործել։';
$string['check_passwordpolicy_details'] = '<p>Խորհուրդ է տրվում, որպեսզի կարգաբերվի գաղտնաբառի քաղաքականությունը, քանի որ գաղտնաբառի կռահումը հաճախ չլիազորված մատչելիություն ստանալու ամենադյուրին եղանակն է։</p>';
$string['check_passwordpolicy_error'] = 'Գաղտնաբառի քաղաքականությունը չի սահմանվել։';
$string['check_passwordpolicy_name'] = 'Գաղտնաբառի քաղաքականություն';
$string['check_passwordpolicy_ok'] = 'Գաղտնաբառի քաղաքականությունը թույլատրվել է';
$string['check_riskadmin_detailsok'] = '<p>Խնդրվում է հաստատել կառավարիչների հետևյալ ցուցակը՝ </p><p>$a</p>';
$string['check_riskadmin_detailswarning'] = '<p>Խնդրվում է հաստատել կառավարիչների հետևյալ ցուցակը՝ </p><p>$a->admins</p>
<p>Խորհուրդ է տրվում կառավարչի դեր նշանակել միայն համակարգի համատեքստում։ Հետևյալ օգտագործողներն ունեն չաջակցված կառավարչի դերի նշանակումներ՝ </p><p>$a->unsupported</p>';
$string['check_riskadmin_name'] = 'Կառավարիչներ';
$string['check_riskadmin_unassign'] = 'Վերանայել <a href=\"$a->url\">$a->fullname ($a->email)դերի նշանակումը</a>';
$string['check_riskadmin_ok'] = 'Գտնվել է(են) սերվերի $a կառավարիչ(ներ)։';
$string['check_riskadmin_warning'] = 'Գտնվել է(են) $a->admincount սերվերի կառավարիչ(ներ) և $a->unsupcount կառավարչի դերի չաջակցված նշանակումներ։';
$string['check_riskxss_details'] = '<p>RISK_XSS նշում է բոլոր վտանգավոր հնարավորությունները, որոնք կարող են օգտագործել միայն վստահելի օգտագործողները։</p>
<p>Խնդրվում է հաստատել օգտագործողների հետևյալ ցուցակը և համոզվեք, որ նրանց լիովին վստահում եք այս սերվերում՝</p><p>$a</p>';
$string['check_riskxss_name'] = 'XSS վtտահելի օգտագործողներ';
$string['check_riskxss_warning'] = 'RISK_XSS - գտնվել են $a օգտագործողներ, ում կարելի է վստահել։';
$string['check_unsecuredataroot_details'] = '<p>Dataroot դիրեկտորիան պետք է մատչելի չլինի ցանցից։ Դիրեկտորիայի ցանցից մատչելի չլինելը ստուգելու լավագույն եղանակը դրա օգտագործումն է public ցանցային դիրեկտորիայից դուրս։</p>
<p>Եթե տեղափոխեք դիրեկտորիան, անհրաժեշտ կլինի նորացնել <code>\$CFG->dataroot</code> կարգաբերումները <code>config.php</code> ֆայլում։</p>';
$string['check_unsecuredataroot_error'] = 'Ձեր dataroot դիրեկտորիան <code>$a</code> գտնվում է սխալ տեղում և կարող է ցուցադրվել ցանցում։';
$string['check_unsecuredataroot_name'] = 'Անապահով dataroot';
$string['check_unsecuredataroot_ok'] = 'Dataroot դիրեկտորիան պետք է մատչելի չլինի ցանցից։';
$string['check_unsecuredataroot_warning'] = 'Ձեր dataroot դիրեկտորիան <code>$a</code> գտնվում է սխալ տեղում և կարող է ցուցադրվել ցանցում։';
?>
