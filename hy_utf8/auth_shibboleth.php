<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_auth_method'] = 'Վավերացման մեթոդի անվանումը';
$string['auth_shib_auth_method_description'] = 'Տրամադրեք Shibboleth վավերացման մեթոդի անվանումը, որը ծանոթ է Ձեր օգտագործողներին։  Այն կարող է լինել Ձեր Shibboleth ֆեդերացիայի անվանումը, օր.՝ <tt>SWITCHaai Login</tt> կամ <tt>InCommon Login</tt> և այլն։';
$string['auth_shib_changepasswordurl'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_shib_convert_data'] = 'API տվյալների փոփոխություն';
$string['auth_shib_convert_data_description'] = 'Կարող եք օգտագործել այս API-ն հետագայում Shibboleth-ով տրամադրված տվյալները փոփոխելու համար։ Կարդացեք <a href=\"../auth/shibboleth/README.txt\">README</a>։';
$string['auth_shib_convert_data_warning'] = 'Ֆայլը գոյություն չունի կամ ընթեռնելի չէ ցանցային սերվերի գործընթացում։';
$string['auth_shib_idp_list'] = 'Նույնականություն տրամադրողներ';
$string['auth_shib_idp_list_description'] = 'Տրամադրեք նույնականություն տրամադրող entityID-ների ցանկը, որը պետք է ընտրեն օգտագործողները մուտքի էջում։<br>Յուրաքանչյուր տողում պետք է լինի միմյանցից ստորակետներով առանձնացված IdP-ի entityID-ն (տե՛ս Shibboleth մեթատվյալների ֆայլը) և անվանումը, ինչպես այն պետք է ցուցադրվի բացվող ընտրացանկում։ <br>Որպես երրորդ լրացուցիչ պարամետր, կարող եք ավելացնել Shibboleth աշխատաշրջան սկսողի գտնվելու վայրը, որը պետք է օգտագործվի այն դեպքում, եթե Ձեր Moodle-ը կարգաբերված բազմաֆեդերացիայի մաս է։';
$string['auth_shib_instructions'] = 'Օգտագործել <a href=\"$a\">Shibboleth մուտք</a> Shibboleth-ի միջոցով մատչելիություն ստանալու համար, եթե Ձեր կազմակերպությունը աջակցում է այն:<br />Հակառակ դեպքում, օգտագործեք այստեղ ցուցադրված մուտքի նորմալ էջը։';
$string['auth_shib_instructions_help'] = 'Այստեղ տվեք Shibboleth-ը բացատրող հրահանգներ Ձեր օգտագործողների համար։  Այն կցուցադրվի մուտքի էջի հրահանգների բաժնում։ Հրահանգները պետք է պարունակեն հղում \"<b>$a-ին</b>\" , որի սեղմումով ցանկացած ժամանակ կարող են մուտք գործել։';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF ծառայություն';
$string['auth_shib_integrated_wayf_description'] = 'Եթե ընտրել եք սա, Moodle-ը կօգտագործի իր սեփական WAYF ծառայությունը՝  Shibboleth-ի համար կազմաձևվածի փոխարեն։ Այս այլընտրանքային մուտքի էջում Moodle-ը կցուցադրի բացվող ընտրացանկ, որտեղից օգտագործողը կընտրի իր նույնականություն տրամադրողին։';
$string['auth_shib_logout_return_url'] = 'Այլընտրանքային ելքի վերադարձման URL';
$string['auth_shib_logout_return_url_description'] = 'Տրամադրեք URL, որին պետք է վերաուղղորդվեն Shibboleth օգտագործողները համակարգից դուրս գալուց հետո։<br />Եթե դատարկ թողնեք, օգտագործողները կանցնեն այնտեղ, ուր նրանց կուղղորդի moodle-ը';
$string['auth_shib_logout_url'] = 'Shibboleth ծառայություն տրամադրողի ելքի կարգադրիչ URL';
$string['auth_shib_logout_url_description'] = 'Տրամադրեք Shibboleth ծառայություն տրամադրողի ելքի կարգադրիչ URL։ Տիպիկ է՝ <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Եթե ցանկանում եք օգտագործել միահավաք WAYF ծառայություն, պետք է տրամադրեք միմյանցից ստորակետով առանձնացված Նույնականություն Տրամադրման ID-ների, նրանց անվանումների և լրացուցիչ աշխատաշրջանի նախաձեռնողի ցանկը։';
$string['auth_shib_only'] = 'Shibboleth միայն';
$string['auth_shib_only_description'] = 'Ընտրեք այս կարգաբերումը, եթե Shibboleth վավերացումը պետք է պաարտադրվի';
$string['auth_shib_username_description'] = 'Shibboleth ցանցային սերվերի միջավայրի փոփոխականի անվանումը, որը պետք է օգտագործվի որպես մուտքաբառ Moodle-ի համար';
$string['auth_shibboleth_contact_administrator'] = 'Այն դեպքում, եթե դուք չեք պատկանում նշված կազմակերպություններին, և Ձեզ անհրաժեշտ է այս սերվերի որևէ դասընթաց, դիմեք';
$string['auth_shibboleth_errormsg'] = 'Խնդրվում է ընտրել այն կազմակերպությունը, որի անդամ եք Դուք։';
$string['auth_shibboleth_login'] = 'Shibboleth մուտք';
$string['auth_shibboleth_login_long'] = 'Մուտք գործել Moodle  Shibboleth-ով';
$string['auth_shibboleth_manual_login'] = 'Ձեռքով մուտք';
$string['auth_shibboleth_select_member'] = 'Ես անդամ եմ ...';
$string['auth_shibboleth_select_organization'] = 'Shibboleth վավերացման համար բացվող ընտրացանկից խնդրվում է ընտրել Ձեր կազմակերպությունը՝';
$string['auth_shibbolethdescription'] = 'Այս մեթոդով օգտագործողները ստեղծվում և նորացվում են <a href=\"http://shibboleth.internet2.edu/\">Shibboleth</a>-ով։<br />Կարդացեք, թե ինչպես կարգաբերեք Moodle-ը Shibboleth-ի հետ՝ <a href=\"../auth/shibboleth/README.txt\">README</a>';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Դուք, կարծես թե վավերացվել եք Shibboleth-ով, սակայն Moodle-ը չի ստացել օգտագործողի հատկանիշներ։ Խնդրվում է ստուգել, որ Ձեր Նույնականություն Տրամադրող թողարկման կարևոր հատկանիշներն ($a) աշխատում են կամ տեղեկացրեք այս կայքի ցանցային կառավարչին։';
$string['shib_not_all_attributes_error'] = 'Moodle-ը որոշակի Shibboleth հատկանիշների պահանջ ունի, որոնք առկա չեն Ձեր դեպքում։ Դրանք են՝ $a<br />Խնդրվում է դիմել այս սերվերի ցանցային կառավարչին կամ նույնականություն տրամադրողին';
$string['shib_not_set_up_error'] = 'Shibboleth վավերացումը, կարծես թե սխալ է կարգաբերվել, քանի որ այս էջի համար չկա Shibboleth միջավայրի ոչ մի փոփոխական։ Հետագա հրահանգների համար, թե ինչպես կարգաբերել Shibboleth վավերացումը, խնդրվում է այցելել՝ <a href=\"README.txt\">README</a> կամ դիմել ցանցային կառավարչին։';