<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Չի հաջողվել կապ հաստատել նշված վավերացման տվյալների շտեմարանի հետ...';
$string['auth_dbchangepasswordurl_key'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_dbdebugauthdb'] = 'Կարգաբերել ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Կարգաբերել ADOdb կապը արտաքին տվյալների շտեմարանի հետ - օգտագործել, եթե մուտք գործելիս ստացվում է դատարկ էջ։';
$string['auth_dbdeleteuser'] = '$a[0] id $a[1] օգտագործողը ջնջվել է';
$string['auth_dbdeleteusererror'] = '$a օգտագործողի ջնջման սխալ';
$string['auth_dbdescription'] = 'Այս մեթոդն օգտագործում է արտաքին տվյալների բազայի աղյուսակները տրված մուտքաբառն ու գաղտնաբառը ստուգելու համար։ Նոր հաշվի գրանցման դեպքում այլ դաշտերի տեղեկատվությունը նույնպես զուգահեռաբար կարող է պատճենվել համակարգում։';
$string['auth_dbextencoding'] = 'Արտաքին տշ կոդավորում';
$string['auth_dbextencodinghelp'] = 'Կոդավորումն օգտագործվել է տվյալների շտեմարանում';
$string['auth_dbextrafields'] = 'Սրանք լրացուցիչ դաշտեր են։ Դուք կարող եք ընտրել օգտվողների որոշ դաշտերի տվյալների նախորոք լրացում այստեղ նշված <b>տվյալների արտաքին բազայից։</b> </p><p>Ցանկացած դեպքում գործածողը կարող է խմբագրել այդ դաշտերը համակարգ մուտք գործելուց հետո։';
$string['auth_dbfieldpass'] = 'Գաղտնաբառ պարունակող դաշտի անունը';
$string['auth_dbfieldpass_key'] = 'Գաղտնաբառի դաշտ';
$string['auth_dbfielduser'] = 'Օգտագործողների անուններ պարունակող դաշտի անունը';
$string['auth_dbfielduser_key'] = 'Մուտքաբառի դաշտ';
$string['auth_dbhost'] = 'Համակարգիչ, որում գործի է դրված տվյալների բազայի սպասարկչը։';
$string['auth_dbhost_key'] = 'Սերվերի անուն (host)';
$string['auth_dbinsertuser'] = 'Ավելացված օգտագործող $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = '$a օգտագործողի ավելացման սխալ';
$string['auth_dbname'] = 'Տվյալների բազայի անունը';
$string['auth_dbname_key'] = 'ՏՇ անվանում';
$string['auth_dbpass'] = 'Գաղտնաբառը համընկել է մուտքաբառի հետ';
$string['auth_dbpass_key'] = 'Գաղտնաբառ';
$string['auth_dbpasstype'] = 'Հատկանշում է գաղտնաբառերի օգտագործման ձևաչափը։ MD5 գաղտնագրումը առավել համապատասխան է այլ ցանցային ներդիրների (ինչպես օրինակ՝ PostNuke) միանալիս։</p> <p>Օգտագործեք \'ներքին\', եթե ցանկանում եք, որ արտաքին ՏՇ ղեկավարի մուտքաբառերը և էլ.-փոստի հասցեները, իսկ Moodle-ը՝ գաղտնաբառերը։ Եթե օգտագործում եք \'ներքին\', Ձեզ <i>անհրաժեշտ է</i> մատակարարել լրացված էլ.-փոստ հասցեի դաշտ արտաքին ՏՇ-ում, և պետք է կանոնավոր գործարկել auth/db/cron.php և auth/db/auth_db_sync_users.php։ Moodle-ը էլ. փոստով նոր օգտվողներին կուղարկի ժամանակավոր գաղտնաբառեր։<p>';
$string['auth_dbpasstype_key'] = 'Գաղտնաբառի ձևաչափ';
$string['auth_dbreviveduser'] = '$a[0] id $a[1] օգտագործողը վերականգնվել է';
$string['auth_dbrevivedusererror'] = '$a օգտագործողի վերականգնման սխալ';
$string['auth_dbsetupsql'] = 'SQL տեղակայման հրաման';
$string['auth_dbsetupsqlhelp'] = 'SQL հրաման հատուկ տվյալների շտեմարանի տեղակայման համար, հաճախ օգտագործվում է հաղորդակցության կոդավորման տեղակայման համար - օրինակ MySQL և PostgreSQL համար: <em>ՍԱՀՄԱՆԵԼ ԱՆՈՒՆՆԵՐ \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '$a[0] id $a[1] օգտագործողը հեռացվել է';
$string['auth_dbsuspendusererror'] = '$a օգտագործողի հեռացման սխալ';
$string['auth_dbsybasequoting'] = 'Օգտագործել sybase quotes';
$string['auth_dbsybasequotinghelp'] = 'Sybase ոճի եզակի quote ելք - անհրաժեշտ է Oracle, MS SQL և այլ շտեմարանների համար։ Չօգտագործեք MySQL-ի դեպքում։';
$string['auth_dbtable'] = 'Աղյուսակի անվանումը տվյալների շտեմարանում';
$string['auth_dbtable_key'] = 'Աղյուսակ';
$string['auth_dbtitle'] = 'Արտաքին տվյալների շտեմարան';
$string['auth_dbtype'] = 'Տվյալների բազայի տիպը (Մանրամասներին ծանոթացեք՝ <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb փաստաթղթերում։';
$string['auth_dbtype_key'] = 'Տվյալների շտեմարան';
$string['auth_dbupdatinguser'] = '$a[0] id $a[1] օգտագործողը նորացվել է';
$string['auth_dbuser'] = 'Մուտքաբառ տվյալների բազայի համար միայն ընթերցելու իրավունքով';
$string['auth_dbuser_key'] = 'ՏՇ օգտագործող';
$string['auth_dbusernotexist'] = 'Չի կարող նորացվել գոյություն չունեցող օգտագործողը՝ $a';
$string['auth_dbuserstoadd'] = 'Օգտագործողի գրառումներ, որպեսզի ավելացվեն $a';
$string['auth_dbuserstoremove'] = 'Օգտագործողի գրառումներ, որպեսզի ջնջվեն $a';