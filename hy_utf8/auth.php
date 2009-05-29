<?PHP // $Id$ 
      // auth.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)
      // local modifications from http://vle.lib.ysu.am/moodle
$string['actauthhdr'] = 'Վավերացման ակտիվ մեթոդներ';
$string['alternatelogin'] = 'Եթե այստեղ մուտքագրեք URL, այն այս կայքի համար կօգտագործվի որպես մուտքի էջ։ Էջը պետք է պարունակի ձև, որն ունի գործողության ձև, որով սահմանվելու են <strong>\'$a\'</strong> և վերադարձի դաշտերը՝ <strong>մուտքաբառը</strong> և <strong>գաղտնաբառը</strong>։<br />Զգույշ եղեք, որպեսզի չմուտքագրեք սխալ, քանի որ կարող եք ինքներդ Ձեզ արգելափակել այս կայքում։<br />Կանխորոշված մուտքի էջն օգտագործելու համար այս կարգաբերումը դատարկ թողեք։.';
$string['alternateloginurl'] = 'Մուտքի այլընտրանքային  URL';
$string['forgottenpassword'] = 'Եթե այստեղ մուտքագրեք URL,  այն կօգտագործվի որպես գաղտնաբառի վերականգնման էջ այս կայքի համար։ Սա նախատեսված է այն կայքերի համար, որոնցում գաղտնաբառերը մշակվում են ամբողջովին Moodle-ից դուրս։ Գաղտնաբառի վերականգնման կանխորոշվածն օգտագործելու համար դաշտը դատարկ թողեք։';
$string['forgottenpasswordurl'] = 'Մոռացված գաղտնաբառի URL';

$string['pluginnotenabled'] = 'Վավերացման \'$a\' մեթոդը թույլատրված չէ։';
$string['pluginnotinstalled'] = 'Վավերացման \'$a\' մեթոդը տեղակայված չէ։';

// synchronization
$string['auth_sync_script'] ='Cron-ի համաժամեցման գրվածք';
$string['auth_dbinsertuser'] ='Ավելացված օգտագործող $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = '$a օգտագործողի ավելացման սխալ ';
$string['auth_dbdeleteuser'] ='$a[0] id $a[1] օգտագործողը ջնջվել է ';
$string['auth_dbdeleteusererror'] = '$a օգտագործողի ջնջման սխալ ';
$string['auth_dbreviveduser'] ='$a[0] id $a[1] օգտագործողը վերականգնվել է';
$string['auth_dbrevivedusererror'] = '$a օգտագործողի վերականգնման սխալ';
$string['auth_dbsuspenduser'] ='$a[0] id $a[1] օգտագործողը հեռացվել է';
$string['auth_dbsuspendusererror'] = '$a օգտագործողի հեռացման սխալ';
$string['auth_dbupdatinguser'] ='$a[0] id $a[1] օգտագործողը նորացվել է';
$string['auth_remove_user_key'] ='Արտ. հեռացված օգտագործող';
$string['auth_remove_user'] ='Նշեք, ինչ անել օգտագործողի ներքին հաշվի հետ մասսայական համաժամեցման ընթացքում, եթե օգտագործողը ջնջվել է արտաքին աղբյուրից։ Միայն հեռացված օգտագործողներն են ավտոմատ վերականգնվում, եթե դրանք կրկին հայտնվում են արտաքին աղբյուրում։';
$string['auth_remove_keep'] ='Պահպանել ներքին';
$string['auth_remove_suspend'] ='Հեռացնել ներքին';
$string['auth_remove_delete'] ='Ամբողջովին ջնջել ներքին';

// nologin plugin
$string['auth_nologindescription'] = 'Օժանդակ մեթոդ, որը կանխարգելում է օգտագործողի մուտքը համակարգ և օգտագործողին ուղարկված ցանկացած հաղորդագրություն։ Կարող է օգտագործվել օգտագործողների հաշիվները <em>հեռացնելու</em> դեպքում։';
$string['auth_nologintitle'] = 'Ոչ մի մուտք';

// CAS plugin
$string['auth_cas_proxycas_key'] = "Proxy մեթոդ";
$string['auth_cas_logoutcas_key'] = "Ելք CAS-ից";
$string['auth_cas_multiauth_key'] = "Բազմա-վավերացում";
$string['auth_cas_proxycas'] = "Եթե օգտագործում եք CAS proxy մեթոդով, ակտիվացրեք 'այո' ընտրանքը";
$string['auth_cas_logoutcas'] = "Ակտիվացրեք 'այո' ընտրանքը, եթե ցանկանում եք դուրս գալ CAS-ից Moodle-ից դուրս գալուց";
$string['auth_cas_multiauth'] = "Ակտիվացրեք 'այո' ընտրանքը, եթե ցանկանում եք ունենալ բազմա-վավերացում (CAS + այլ վավերացում)";
$string['accesCAS'] = "CAS օգտագործողներ";
$string['accesNOCAS'] = "այլ օգտագործողներ";
$string['CASform'] = "Վավերացման ընտրություն";
$string['auth_cas_logincas'] = 'Անվտանգ կապի մատչում';
$string['auth_cas_invalidcaslogin'] = 'Ներեցեք, բայց Ձեր մուտքը ձախողվել է - Դուք չեք հաստատվել';
$string['auth_cas_server_settings'] = 'CAS սերվերի կազմաձև';
$string['auth_castitle'] = 'CAS սերվեր (SSO)';
$string['auth_cas_hostname'] = 'CAS սերվերի գլխավոր անուն (hostname) <br />eg: host.domain.fr';
$string['auth_cas_baseuri'] = 'Սերվերի URI (ոչինչ, եթե չկա ոչ մի baseUri)<br />Օրինակ՝ եթե CAS սերվերը պատասխանում է host.domaine.fr/CAS/ , ապա՝<br />cas_baseuri = CAS/';
$string['auth_cas_port'] = 'CAS սերվերի սարքամիացք (port)';
$string['auth_cas_version'] = 'CAS-ի տարբերակ';
$string['auth_cas_language'] = 'Ընտրված լեզու';
$string['auth_casdescription'] = 'Այս մեթոդն օգտագործում է CAS սերվեր (Central Authentication Service) միջավայրում օգտվողների մուտքի եզակիության (Single Sign On environment (SSO)) նույնացման համար։ Ինչպես նաև կարող եք օգտագործել պարզունակ LDAP վավերացում։ Եթե ըստ CAS-ի տրված մուտքաբառն ու գաղտնաբառը վավերական են, Մուդլը ստեղծում է գործածողի նոր մուտք տվյալների բազայում և, եթե պահանջվում է վերցնում է LDAP-ում առկա հատկանշական տվյալները։ Հաջորդ մուտքերում ստուգվում են միայն գործածողի անունը և գաղտնաբառը։';
$string['auth_cas_enabled'] = 'Միացրեք սա, եթե ցանկանում եք օգտագործել CAS վավերացում։';
$string['auth_cas_text'] = 'Անվտանգ կապ';
$string['auth_cas_create_user'] = 'Միացրեք սա, եթե ցանկանում եք Մուդլի բազա մտցնել CAS-ով վավերացված օգտվողներ։ Հակառակ դեպքում՝ միայն արդեն գոյություն ունեցող օգտվողները կարող են մուտք գործել համակարգ։';
$string['auth_casnotinstalled'] = 'Չի կարող օգտագործվել CAS վավերացում։ PHP LDAP մոդուլը տեղակայված չէ։';
$string['auth_cas_cantconnect'] ='CAS-մոդուլի LDAP մասը չի կարող կապվել $a սերվերին';
$string['auth_cas_use_cas'] ='Օգտագործել CAS';
$string['auth_cas_broken_password'] ='Առանց գաղտնաբառը փոխելու դուք չեք կարող շարունակել, սակայն չկա այն փոփելու մատչելի էջ։ Խնդրվում է դիմել Ձեր համակարգի կառավարչին։';

$string['auth_cas_hostname_key'] ='Սերվերի անուն (hostname)';
$string['auth_cas_changepasswordurl'] ='Գաղտնաբառի փոփոխման URL';
$string['auth_cas_create_user_key'] ='Ստեղծել օգտագործող';
$string['auth_cas_auth_user_create'] ='Ստեղծել օգտագործողներ դրսից';
$string['auth_cas_language_key'] ='Լեզու';
$string['auth_cas_casversion'] ='Տարբերակ';
$string['auth_cas_port_key'] ='Սարքամիացք (port)';
$string['auth_cas_baseuri_key'] ='Հիմնական URI';

$string['auth_changepasswordurl'] = 'Փոխել գաղտնաբառի URL հասցեն';
$string['auth_changepasswordurl_expl'] = 'Նշեք հասցե, որից գործածողին կարող եք ուղարկել իր կորցրած $a գաղտնաբառը։  <strong>Օգտագործել ստանդարտ «Փոխել գաղտնաբառը» էջը</strong> կարգաբերեք և ընտրեք  <strong>Ոչ</strong> տարբերակը։';
$string['auth_changepasswordhelp'] = 'Գաղտնաբառի փոփոխման օգնություն';
$string['auth_changepasswordhelp_expl'] = 'Ցուցադրել կորցրած գաղտնաբառի օգնությունը այն օգտվողին, ով կորցրել է կամ մոռացել իր $a գաղտնաբառը։ Այն կցուցադրվի <strong>Գաղտնաբառի փոփոխման URL</strong> հետ կամ փոխարեն կամ Moodle-ի ներքին գաղտնաբառի փոփոխություն։';
$string['auth_common_settings'] = 'Ընդհանուր կարգաբերումներ';
$string['auth_data_mapping'] = 'Տվյալների արտապատկերում';

// Database plugin
$string['auth_dbdescription'] = 'Այս մեթոդն օգտագործում է արտաքին տվյալների բազայի աղյուսակները տրված մուտքաբառն ու գաղտնաբառը ստուգելու համար։ Նոր հաշվի գրանցման դեպքում այլ դաշտերի տեղեկատվությունը նույնպես զուգահեռաբար կարող է պատճենվել համակարգում։';
$string['auth_dbextrafields'] = 'Սրանք լրացուցիչ դաշտեր են։ Դուք կարող եք ընտրել օգտվողների որոշ դաշտերի տվյալների նախորոք լրացում այստեղ նշված <b>տվյալների արտաքին բազայից։</b> </p><p>Ցանկացած դեպքում գործածողը կարող է խմբագրել այդ դաշտերը համակարգ մուտք գործելուց հետո։';
$string['auth_dbfieldpass'] = 'Գաղտնաբառ պարունակող դաշտի անունը';
$string['auth_dbfielduser'] = 'Օգտագործողների անուններ պարունակող դաշտի անունը';
$string['auth_dbhost'] = 'Համակարգիչ, որում գործի է դրված տվյալների բազայի սպասարկչը։';
$string['auth_dbname'] = 'Տվյալների բազայի անունը';
$string['auth_dbpass'] = 'Գաղտնաբառը համընկել է մուտքաբառի հետ';
$string['auth_dbpasstype'] = 'Հատկանշում է գաղտնաբառերի օգտագործման ձևաչափը։ MD5 գաղտնագրումը առավել համապատասխան է այլ ցանցային ներդիրների (ինչպես օրինակ՝ PostNuke) միանալիս։</p> <p>Օգտագործեք \'ներքին\', եթե ցանկանում եք, որ արտաքին ՏՇ ղեկավարի մուտքաբառերը և էլ.-փոստի հասցեները, իսկ Moodle-ը՝ գաղտնաբառերը։ Եթե օգտագործում եք \'ներքին\', Ձեզ <i>անհրաժեշտ է</i> մատակարարել լրացված էլ.-փոստ հասցեի դաշտ արտաքին ՏՇ-ում, և պետք է կանոնավոր գործարկել auth/db/cron.php և auth/db/auth_db_sync_users.php։ Moodle-ը էլ. փոստով նոր օգտվողներին կուղարկի ժամանակավոր գաղտնաբառեր։<p>';
$string['auth_dbtable'] = 'Աղյուսակի անվանումը տվյալների շտեմարանում';
$string['auth_dbtitle'] = 'Արտաքին տվյալների շտեմարան';
$string['auth_dbtype'] = 'Տվյալների բազայի տիպը (Մանրամասներին ծանոթացեք՝ <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb փաստաթղթերում։';
$string['auth_dbuser'] = 'Մուտքաբառ տվյալների բազայի համար միայն ընթերցելու իրավունքով ';
$string['auth_dbcantconnect'] ='Չի հաջողվել կապ հաստատել նշված վավերացման տվյալների շտեմարանի հետ...';
$string['auth_dbuserstoadd'] = 'Օգտագործողի գրառումներ, որպեսզի ավելացվեն $a';
$string['auth_dbuserstoremove'] = 'Օգտագործողի գրառումներ, որպեսզի ջնջվեն $a';
$string['auth_dbusernotexist'] = 'Չի կարող նորացվել գոյություն չունեցող օգտագործողը՝ $a';
$string['auth_dbhost_key'] = 'Սերվերի անուն (host)';
$string['auth_dbtype_key'] = 'Տվյալների շտեմարան';
$string['auth_dbsybasequoting'] = 'Օգտագործել sybase quotes';
$string['auth_dbsybasequotinghelp'] = 'Sybase ոճի եզակի quote ելք - անհրաժեշտ է Oracle, MS SQL և այլ շտեմարանների համար։ Չօգտագործեք MySQL-ի դեպքում։';
$string['auth_dbname_key'] = 'ՏՇ անվանում';
$string['auth_dbuser_key'] = 'ՏՇ օգտագործող';
$string['auth_dbpass_key'] = 'Գաղտնաբառ';
$string['auth_dbtable_key'] = 'Աղյուսակ';
$string['auth_dbfielduser_key'] = 'Մուտքաբառի դաշտ';
$string['auth_dbfieldpass_key'] = 'Գաղտնաբառի դաշտ';
$string['auth_dbpasstype_key'] = 'Գաղտնաբառի ձևաչափ';
$string['auth_dbextencoding'] = 'Արտաքին տշ կոդավորում';
$string['auth_dbextencodinghelp'] = 'Կոդավորումն օգտագործվել է տվյալների շտեմարանում';
$string['auth_dbsetupsql'] = 'SQL տեղակայման հրաման';
$string['auth_dbsetupsqlhelp'] = 'SQL հրաման հատուկ տվյալների շտեմարանի տեղակայման համար, հաճախ օգտագործվում է հաղորդակցության կոդավորման տեղակայման համար - օրինակ MySQL և PostgreSQL համար: <em>ՍԱՀՄԱՆԵԼ ԱՆՈՒՆՆԵՐ \'utf8\'</em>';
$string['auth_dbdebugauthdb'] = 'Կարգաբերել ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Կարգաբերել ADOdb կապը արտաքին տվյալների շտեմարանի հետ - օգտագործել, եթե մուտք գործելիս ստացվում է դատարկ էջ։ ';
$string['auth_dbchangepasswordurl_key'] = 'Գաղտնաբառի փոփոխման URL';

// Email plugin
$string['auth_emailchangecancel'] = 'Չեղյալ անել Էլ.-փոստի փոփոխումը';
$string['auth_emailchangepending'] = 'Փոփոխություն է սպասվում։ Բացեք Ձեզ ուղարկված հղումը՝ $a->preference_newemail ։';
$string['auth_emaildescription'] = 'Էլ.-փոստ հաստատումը վավերացման կանխորոշված մեթոդն է։  Երբ օգտագործողը մուտք է գործում համակարգ, ընտրում է իր մուտքաբառը և գաղտնաբառը, օգտագործողի էլ.-փոստ հասցեով հաշվի հաստատման հաղորդագրություն է ուղարկվում։, որը պարունակում է անվտանգ հղում էջին, որտեղ նա կարող է հաստատել իր հաշիվը։ Հաջորդ մուտքերը Moodle-ի շտեմարանում պահպանված արժեքներում ստուգում են մուտքաբառը և գաղտնաբառն։';
$string['auth_emailnowexists'] = 'Էլ.-փոստի հասցեն, որը Դուք փորձում էիք գրանցել Ձեր անձնական էջում, նշանակվել է էլի ինչ-որ մեկի սկսած Ձեր սկզբնական հարցումից։ Այդպիսով Էլ.-փոստը փոփոխելու Ձեր հարցումը չեղյալ է արվել, սակայն կարող եք կրկին փորձել այլ հասցեով։';
$string['auth_emailtitle'] = 'Էլ.-փոստի վրա հիմնված վավերացում';
$string['auth_emailnoinsert'] = 'Ձեր գրառումը չի հաջողվել ավելացնել տվյալների շտեմարանում։';
$string['auth_emailnoemail'] = 'Ձեզ էլ.-փոստի ուղարկման փորձը ձախողվել է։';
$string['auth_emailrecaptcha'] = 'Ավելացնում է տեսա/ձայնա հաստատման ձևի միավոր մուտքի էջում էլ.-փոստ. ինքնագրանցումով օգտագործողների համար։ Այն Ձեր կայքը պաշտպանում է սպամերներից և աջակցում է worthwhile cause ։ Մանրամասների համար տե՛ս http://recaptcha.net/learnmore.html։ <br /><em>Պահանջվում է PHP cURL ընդլայնում։</em>';
$string['auth_emailrecaptcha_key'] = 'Թույլատրել reCAPTCHA միավոր';
$string['auth_emailsettings'] = 'Կարգաբերումներ';
$string['auth_emailupdatemessage'] = 'Հարգելի՛ $a->fullname,

Դուք հարցում էիք կատարել $a->site կայքի Ձեր հաշվի գաղտնաբառը փոխելու վերաբերյալ։ Խնդրվում է Ձեր զննարկիչում բացել հետևյալ URL հասցեն և հաստատել այս փոփոխությունը։

$a->url';
$string['auth_emailupdatetitle'] = 'Էլ.-փոստի նորացման հաստատում $a->site կայքում';
$string['auth_invalidnewemailkey'] = 'Սխալ. եթե Դուք փորձում եք հաստատել գաղտնաբառի փոփոխումը, հնարավոր է, սխալ եք պատճենել էլ.-փոստով ձեզ ուղարկված URL հասցեն։ Խնդրվում է պատճենել հասցեն և կրկին փորձել։';
$string['auth_emailupdatesuccess'] = '<em>$a->fullname</em> օգտագործողի էլ.-փոստը հաջողությամբ նորացվել է <em>$a->email</em>-ով։';
$string['auth_outofnewemailupdateattempts'] = 'Դուք սպառել եք էլ.-փոստի նորացման թույլատրելի փորձերի քանակը։ Նորացման Ձեր հարցումը չեղյալ է արվել։';
$string['auth_emailupdate'] = 'Էլ,-փոստի հասցեի նորացում';
$string['auth_changingemailaddress'] = 'Դուք հարցում էիք կատարել Ձեր $a->oldemail էլ.-փոստը $a->newemail -ով փոխարինելու վերաբերյալ։ Ելնելով անվտանգության նկատառումներից, հաղորդագրությունն ուղարկում ենք Ձեր նոր հասցեով, որպեսզի հաստատեք, որ այն Ձեզ է պատկանում։ Ձեր էլ.-փոստը կնորացվի անմիջապես Ձեզ ուղարկված URL-ն բացելուց հետո։';

// FirstClass plugin
$string['auth_fccreators'] = 'Խմբերի ցանկ, որոնց անդամներին թույլատրված է նոր դասընթացներ ստեղծել։ Խմբերը միմյանցից առանձնացրեք \';\'-ով։  Անունները պետք է գրվեն ճիշտ, ինչպես FirstClass սպասարկչում։ Համակարգը տառաշարազգայուն է։';
$string['auth_fcdescription'] = 'Մեթոդն օգտագործում է FisrtClass սերվեր՝ ստուգելու տրված մուտքաբառի և գաղտնաբառի վավերական լինելը։';
$string['auth_fcfppport'] = 'Սերվերի սարքամիացք (3333 համարվում է ավելի ընդհանուր)';
$string['auth_fchost'] = 'FirstClass սերվերի հասցեն։ Օգտագործեք IP համարը կամ DNS-ը։';
$string['auth_fcpasswd'] = 'Գաղտնաբառ վերոնշյալ հաշվի համար։';
$string['auth_fctitle'] = 'FirstClass սերվեր';
$string['auth_fcuserid'] = 'Օգտագործողի id FirstClass հաշվի համար \'Ենթակառավարչի\' արտոնություններով։';
$string['auth_fchost_key'] = 'Սերվերի անուն (host)';
$string['auth_fcfppport_key'] = 'Սերվերի սարքամիացք (port)';
$string['auth_fcuserid_key'] = 'Օգտագործողի ID';
$string['auth_fcpasswd_key'] = 'Գաղտնաբառ';
$string['auth_fccreators_key'] = 'Ստեղծողներ';
$string['auth_fcchangepasswordurl'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_fcconnfail'] = 'Կապը ընդհատվել է Errno: $a[0]-ով և սխալի String: $a[1]-ով';

// Fieldlocks
$string['auth_fieldlock'] = 'Արգելափակման արժեք';
$string['auth_fieldlock_expl'] = '<p><b>Արգելափակման արժեք.</b> Եթե թույլատրվում է, Moodle-ի օգտագործողներին և կառավարիչներին կարգելի անմիջապես դաշտի խմբագրումից։ Օգտագործեք այս ընտրանքը, եթե աջակցում եք այս տվյալները արտաքին վավերացման համակարգում։ </p>';
$string['auth_fieldlocks'] = 'Արգելափակել օգտագործողի դաշտերը';
$string['auth_fieldlocks_help'] = '<p>Կարող եք արգելափակել օգտագործողի տվյալների դաշտեր։ Սա օգտակար է այն կայքերի համար, որտեղ օգտագործողի տվյալները ձեռքով պահպանում են կառավարիչները՝ օգտագործողների գրառումների խմբագրմամբ կամ վերբեռնմամբ՝ \'Վերբեռնել օգտագործողներ\' հնարավորության միջոցով։ Եթե արգելափակեք դաշտեր, որոնք պարտադիր են Moodle-ում, համոզվեք, որ տրամադրում եք այդ տվյալները օգտագործողների հաշիվներ ստեղծելիս կամ հաշիվներն անպետք կլինեն։</p><p>Նկատեք, որ կարգաբերումը \'Բաց է, եթե դատարկ է\' կարգաբերմամբ կարող ենք խուսափել այս խնդրից</p>։';

// IMAP plugin
$string['auth_imapnotinstalled'] = 'Չի կարող օգտագործվել IMAP վավերացում։ PHP IMAP մոդուլը տեղակայված չէ։';
$string['auth_imapdescription'] = 'Այս մեթոդն օգտագործում է IMAP սերվեր՝ ստուգելու տրված մուտքաբառի և գաղտնաբառի վավերականությունը։';
$string['auth_imaphost'] = 'IMAP սերվերի հասցեն (IP համարը, ոչ DNS-ը)։';
$string['auth_imapport'] = 'IMAP սերվերի սարքամիացքի (port) համարը։ Սովորաբար այն 143 է կամ 993։';
$string['auth_imaptitle'] = 'IMAP սերվեր';
$string['auth_imaptype'] = 'IMAP սերվերի տիպը։  IMAP սերվերները վավերացման և համաձայնեցման տարբեր տիպեր կարող են ունենալ։';
$string['auth_imaptype_key'] = 'Տիպ';
$string['auth_imaphost_key'] = 'Սերվերի անուն (host)';
$string['auth_imapport_key'] = 'Սարքամիացքի (port)';
$string['auth_imapchangepasswordurl_key'] = 'Գաղտնաբառի փոփոխման URL';

// LDAP plugin
$string['auth_ldap_ad_create_req'] = 'Չի կարող ստեղծել նոր հաշիվ ակտիվ դիրեկտորիայում։ Համոզվեք, որ բավարարում եք այս աշխատանքի համար անհրաժեշտ բոլոր պահանջները(LDAPS կապ, կապակցված օգտագործող համապատասխան իրավունքներով և այլն)';
$string['auth_ldap_attrcreators'] = 'Խմբերի կամ համատեքստների ցանկ, որոնց անդամներին թույլատրվում է ստեղծել հատկանիշներ։ Բազմակի խմբերը միմյանցից անջատել \';\'-ով։ Օրինակ՝ \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Հատկանիշ ստեղծողներ';
$string['auth_ldap_bind_dn'] = 'Օգտագործողներին որոնելիս եթե ցանկանում եք օգտագործել կապակցված-օգտագործող, նշեք այստեղ։ Օրինակ՝ \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Գաղտնաբառ կապակցված օգտագործողի համար։';
$string['auth_ldap_bind_settings'] = 'Կապակցման կարգաբերումներ';
$string['auth_ldap_contexts'] = 'Համատեքստերի ցանկը, որտեղ զետեղված են օգտագործողները։ Համատեքստերը միմյանցից առանձնացրեք \';\'-ով։ Օրինակ՝ \'ou=users,o=org;ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Եթե թույլատրում եք օգտագործողների ստեղծում էլ.-փոստով հաստատման միջոցով, սահմանեք համատեքստը, որում ստեղծվել են օգտագործողները։ Այս համատեքստը պետք է տարբերվի այլ օգտագործողներից՝ կանխելու անվտանգության խնդիրները։ Դուք կարիք չունեք ldap_context-variable-ում ավելացնելու այս համատեքստը, Moodle-ը օգտագործողներին կորոնի այս համատեքստից ավտոմատ։<br /><b>Ծանուցում՝</b> Օգտագործողների ստեղծման աշխատանքի իրականացման համար Դուք պետք է ձևափոխեք auth/ldap/lib.php նշոցի auth_user_create() գործառույթը';
$string['auth_ldap_create_error'] = 'Օգտագործողի ստեղծման սխալ LDAP-ում։';
$string['auth_ldap_creators'] = 'Խմբերի ցանկ, որոնց անդամներին թույլատրվում է ստեղծել նոր դասընթացներ։ Խմբերը միմյանցից առանձնացրեք \';\'-ով։ Օրինակ՝ \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Ընտրեք Ոչ՝ կասեցնելու գաղտնաբառերի ժամկետի լրացման ստուգումը, կամ LDAP՝ ընթերցելու գաղտնաբառի լրացման (passwordexpiration) ժամանակը անմիջապես LDAP-ից';
$string['auth_ldap_expiration_warning_desc'] = 'Գաղտնաբառի ժամկետի լրանալուց քանի՞ օր առաջ թողարկվի զգուշացումը։';
$string['auth_ldap_expireattr_desc'] = 'Լրացուցիչ. փոխարինում է ldap-attribute-ը, որը պահպանում է գաղտնաբառի լրացման ժամկետը';
$string['auth_ldap_graceattr_desc'] = 'Լրացուցիչ. փոխարինում է gracelogin հատկանիշը';
$string['auth_ldap_gracelogins_desc'] = 'Թույլատրել LDAP gracelogin աջակցություն: Գաղտնաբառի լրացման ժամկետը լրանալուց հետո օգտագործողը կարող է մուտք գործել մինչև gracelogin հաշիվը 0 դառնալը: Այս կարգաբերման ակտիվացմամբ ցուցադրվում է grace մուտքի հաղորդագրությունը, եթե գաղտնաբառի ժամկետը լրանա';
$string['auth_ldap_groupecreators'] = 'Խմբերի կամ համատեքստերի ցանկ, որոնց անդամները խմբեր ստեղծելու թույլտվություն ունեն: Խմբերը միմյանցից անջատեք \';\-ով։ Օրինակ` \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Խումբ ստեղծողներ';
$string['auth_ldap_host_url'] = 'Նշեք LDAP սերվերի անունը URL-ձևով, ինչպես օրինակ` \'ldap://ldap.myorg.com/\' կամ \'ldaps://ldap.myorg.com/\': Սերվերները միմյանցից անջատեք \';\'-ով failover աջակցություն ստանալու համար:';
$string['auth_ldap_ldap_encoding'] = 'Նշեք LDAP սպասարկչում օգտագործվող կոդավորումը: Առավել հնարավոր է utf-8, MS AD v2 օգտագործում է սարքահիմքի (platform) կանխորոշված կոդավորումը, ինչպես օրինակ` cp1252, cp1250 և այլն:';
$string['auth_ldap_login_settings'] = 'Մուտքի կարգաբերիչներ';
$string['auth_ldap_memberattribute'] = 'Լրացուցիչ՝ անտեսում է օգտագործողի անդամության հատկանիշը, եթե օգտագործողները պատկանում են որևէ խմբի։ Սովորաբար՝ \'անդամ\'';
$string['auth_ldap_memberattribute_isdn'] = 'Լրացուցիչ. Փոխարինում է անդամության հատկանիշի արժեքների մշակումը, նաև 0 կամ 1';
$string['auth_ldap_no_mbstring'] = 'Ակտիվ դիրեկտորիայում օգտագործողներ ստեղծելու համար Ձեզ անհրաժեշտ է  mbstring ընդլայնումը:';
$string['auth_ldap_objectclass'] = 'Լրացուցիչ. անտեսում է objectClass կիրառված ldap_user_type-ում օգտագործողների անուն/որոնում դեպքում։ Սովորաբար դուք չունեք այն փոփոխելու անհրաժշտություն։';
$string['auth_ldap_opt_deref'] = 'Սահմանում է ինչպես ծածկանունները մշակվեն որոնման ընթացքում: Ընտրեք հետևյալ արժեքներից մեկը` \"Ոչ\" (LDAP_DEREF_NEVER) կամ \"Այո\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passtype'] = 'Նշեք LDAP սպասարկչում նոր կամ փոխված գաղտնաբառերի ձևաչափը';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP գաղտնաբառի ժամկետի կարգաբերումներ:';
$string['auth_ldap_preventpassindb'] = 'Ընտրեք այո, որպեսզի կանխարգելեք գաղտնաբառերի պահպանումը Moodle-ի ՏՇ:';
$string['auth_ldap_search_sub'] = 'Որոնել օգտագործողներ ենթահամատեքստերից:';
$string['auth_ldap_server_settings'] = 'LDAP սերվերի կարգաբերումներ';
$string['auth_ldap_update_userinfo'] = 'Նորացնել օգտագործողի տվյալները (անուն, ազգանուն, հասցե..) LDAP-ից Moodle:  Նշեք \"Տվյալների արտապատկերում\" կարգաբերումները, ինչպես անհրաժեշտ է Ձեզ:';
$string['auth_ldap_user_exists'] = 'LDAP մուտքաբառն արդեն գոյություն ունի:';
$string['auth_ldap_user_attribute'] = 'Լրացուցիչ. Փոխարինում է հատկանիշը, որն օգտագործվում է` անուն/որոնել օգտագործողներ հատկանիշը users. Սովորաբար` \'cn\':';
$string['auth_ldap_user_settings'] = 'Օգտագործողի որոնման կարգաբերումներ';
$string['auth_ldap_user_type'] = 'Ընտրեք, թե ինչպես են օգտագործողները պահպանվել LDAP-ում: Ինչպես նաև այս կարգաբերումը սահմանում է, թե ինչպես կաշխատեն մուտքաբառի ժամկետի լրանալը, grace մուտքերը և օգտագործողի ստեղծումը:';
$string['auth_ldap_version'] = 'Ձեր սպասարկչում օգտագործվող LDAP կանխագրի տարբերակը։';
$string['auth_ldapdescription'] = 'Այս մեթոդը ապահովում է վավերացում արտաքին LDAP սերվերում։

                                  Եթե տրված մուտքաբառը և գաղտնաբառը թույլատրելի են, Moodle-ը նոր օգտագործողի մուտք է ստեղծում տվյալների  

                                  շտեմարան։ Այս մոդուլը կարող է LDAP-ից կարդալ օգտագործողի հատկանիշները և Moodle-ում նախապես լրացնել  

                                  պահանջվող դաշտերը։  Հետևյալ աշխատամուտքերի համար ստուգվել են միայն մուտքաբառը և գաղտնաբառը։';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP կոդավորում';
$string['auth_ldap_host_url_key'] = 'Սերվերի URL';
$string['auth_ldap_version_key'] = 'Տարբերակ';
$string['auth_ldap_preventpassindb_key'] = 'Թաքցնել գաղտնաբառերը';
$string['auth_ldap_bind_dn_key'] = 'Բնորոշ անուն';
$string['auth_ldap_bind_pw_key'] = 'Գաղտնաբառ';
$string['auth_ldap_user_type_key'] = 'Օգտագործողի տիպ';
$string['auth_ldap_contexts_key'] = 'Համատեքստեր';
$string['auth_ldap_search_sub_key'] = 'Որոնել ենթահամատեքստեր';
$string['auth_ldap_opt_deref_key'] = 'Dereference ծածկանունները';
$string['auth_ldap_user_attribute_key'] = 'Օգտագործողի հատկանիշ';
$string['auth_ldap_memberattribute_key'] = 'Անդամության հատկանիշ';
$string['auth_ldap_memberattribute_isdn_key'] = 'Անդամության հատկանիշն օգտագործում է dn';
$string['auth_ldap_objectclass_key'] = 'Object class';
$string['auth_ldap_passtype_key'] = 'Գաղտնաբառի ձևաչափ';
$string['auth_ldap_changepasswordurl_key'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_ldap_expiration_key'] = 'Ժամկետի լրացում';
$string['auth_ldap_expiration_warning_key'] = 'Ժամկետի լրացման նախազգուշացում';
$string['auth_ldap_expireattr_key'] = 'Ժամկետի լրացման հատկանիշ';
$string['auth_ldap_gracelogins_key'] = 'Grace մուտքեր';
$string['auth_ldap_gracelogin_key'] = 'Grace մուտքի հատկանիշ';
$string['auth_ldap_auth_user_create_key'] = 'Ստեղծել օգտագործողներ արտաքինից';
$string['auth_ldap_create_context_key'] = 'Համատեքստ նոր օգտագործողի համար';
$string['auth_ldap_creators_key'] = 'Ստեղծողներ';
$string['auth_ldap_noconnect'] = 'LDAP-մոդուլը չի կարող կապ հաստատել $a սերվերի հետ';
$string['auth_ldap_noconnect_all'] = 'LDAP-մոդուլը չի կարող կապ հաստատել որևէ $a սերվերի հետ';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() չի աջակցում օգտագործողի ընտրված տիպը` $a (..դեռ)';
$string['auth_ldap_usertypeundefined'] = 'config.user_type սահմանված չէ կամ ldap_expirationtime2unix գործառույթը չի աջակցում ընտրված տիպը:';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type սահմանված չէ կամ ldap_unixi2expirationtime գործառույթը չի աջակցում ընտրված տիպը:';
$string['auth_ldap_noextension'] = 'Զգուշացում. PHP LDAP մոդուլը, կարծես թե չկա: Խնդրվում է համոզվել, որ այն տեղակայված և ակտիվացվացված է:';

$string['auth_ldapextrafields'] = 'Այս դաշտերը պարտադիր չեն:  Կարող եք ընտրել նախապես լրացնել Moodle-ի օգտագործողի որոշ դաշտեր  այստեղ Ձեր նշած <b>LDAP դաշտերի</b> տվյալներով։ <p>Եթե այս դաշտը դատարկ թողնեք, LDAP-ից ոչինչ չի փոխանցվի և փոխարենը կօգտագործվի Moodle-ի կանխորոշվածը։</p><p>Ցանկացած դեպքում օգտագործողը կկարողանա խմբագրել բոլոր այս դաշտերը մուտք գործելուց հետո։</p>';
$string['auth_ldaptitle'] = 'LDAP սերվեր';
$string['auth_ldapnotinstalled'] = 'Չի կարող օգտագործվել LDAP վավերացում: PHP LDAP մոդուլը տեղակայված չէ:';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled_key'] = 'Թույլատրել';
$string['auth_ntlmsso_enabled'] = 'Սահմանեք այո՝ փորձելու եզակի մուտքը (Single Sign On) NTLM տիրույթով։ <strong>Ծանուցում.</strong> աշխատելու համար այն պահանջում է լրացուցիչ տեղակայում ցանցակայքում, տե՛ս <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_ie_fastpath'] = 'NTLM SSO արագ ուղի թույլատրելու համար ընտրեք այո (բաց է թողնում որոշակի քայլեր և աշխատում է միայն, եթե սպասառուի զննարկիչը MS Internet Explorer է)։';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE արագ ուղի՞';

$string['auth_ntlmsso_subnet_key'] = 'Ենթացանց';
$string['auth_ntlmsso_subnet'] = 'Եթե կարգաբերվել է, SSO կփորձի միայն այս ենթացանցի սպասառուների հետ։ Ձևաչափ՝ xxx.xxx.xxx.xxx/bitmask';
$string['ntlmsso_attempting'] = 'Եզակի մուտքի փորձ NTLM...-ի միջոցով';
$string['ntlmsso_failed'] = 'Ինքնաշխատ մուտքը ձախողվել է, փորձեք մուտքի նորմալ էջը...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO չի թույլատրվել։';

// Manual plugin
$string['auth_manualdescription'] = 'Այս մեթոդը ջնջում է ցանկացած օգտագործողների ուղին, որպեսզի ստեղծեն իրենց սեփական հաշիվները:  Բոլոր հաշիվները պետք է ձեռքով ստեղծվեն admin օգտագործողի կողմից:';
$string['auth_manualtitle'] = 'Ձեռքով հաշիվներ';

// MNET plugin
$string['auth_mnettitle'] = 'Moodle ցանցային վավերացում';
$string['auth_mnetdescription'] = 'Օգտագործողները վավերացվել են  Ձեր Moodle ցանցի կարգաբերումներում սահմանված վստահության ցանցի համաձայն:';
$string['auth_mnet_rpc_negotiation_timeout'] = 'Ընդմիջում (վայրկյաններով) XMLRPC փոխանցման վավերացման համար։';
$string['auth_mnet_roamout'] = 'Ձեր օգտագործողները կարող են շրջել այս սերվերներում (host)';
$string['auth_mnet_roamin'] = 'Այս սերվերների (host) օգտագործողները կարող են շրջել Ձեր կայքում';
$string['auth_mnet_auto_add_remote_users'] = 'Եթե սահմանվում է Այո, լոկալ օգտագործողի գրառումն ինքնաշխատ ստեղծվում է, երբ հեռադիր օգտագործողը մուտք է գործում առաջին անգամ։';
$string['auto_add_remote_users'] = 'Ինքնաշխատ ավելացնել հեռադիր օգտագործողներ';
$string['rpc_negotiation_timeout'] = 'RPC պայմանների քննարկման ընդմիջում';

$string['auth_multiplehosts'] = 'Բազմակի սերվերներ (hosts) ԿԱՄ հասցեներ կարող են հատկորոշվել (օր.՝ host1.com;host2.com;host3.com) կամ (օր.՝ xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';

// NNTP plugin
$string['auth_nntpdescription'] = 'Այս մեթոդն օգտագործում է NNTP սերվեր՝ ստուգելու տրված մուտքաբառի և գաղտնաբառի վավերականությունը։';
$string['auth_nntphost'] = 'NNTP սերվերի հասցե: Օգտագործել IP համարը, ոչ DNS-ը:';
$string['auth_nntpport'] = 'Սերվերի սարքամիացք (առավել ընդունված է 119)';
$string['auth_nntptitle'] = 'NNTP սերվեր';
$string['auth_nntpnotinstalled'] = 'Չի կարող օգտագործվել NNTP վավերացում: PHP IMAP մոդուլը տեղակայված չէ:';
$string['auth_nntpchangepasswordurl_key'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_nntpport_key'] = 'Սերվերի սարքամիացք (port)';
$string['auth_nntphost_key'] = 'Սերվերի անուն (host)';

// None plugin
$string['auth_nonedescription'] = 'Օգտագործողները կարող են մուտք գործել և անմիջապես ստեղծել վավերական հաշիվներ՝ առանց արտաքին սպասարկչում վավերացվելու և Էլ.-փոստով հաստատելու։  Զգույշ եղեք այս ընտրանքի օգտագործման հետ։';
$string['auth_nonetitle'] = 'Առանց վավերացման';

// PAM plugin
$string['auth_pamdescription'] = 'Այս մեթոդն օգտագործում է PAM՝ այս սերվերի սեփական մուտքաբառերին մատչելիություն ստանալու համար։ Այս մոդուլն օգտագործելու համար անհրաժեշտ է տեղակայել <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\">PHP4 PAM Authentication</a>։';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';

$string['auth_passwordisexpired'] = 'Ձեր գաղտնաբառի ժամկետը լրացել է: Դուք ցանկանում եք փոխել Ձեր գաղտնաբառը:';
$string['auth_passwordwillexpire'] = 'Ձեր գաղտնաբառի ժամկետը կլրանա $a օրից: Դուք ցանկանում եք փոխել Ձեր գաղտնաբառը:';

// POP3 plugin
$string['auth_pop3description'] = 'Այս մեթոդն օգտագործում է POP3 սերվեր` ստուգելու տրված մուտքաբառի և գաղտնաբառի վավերականությունը:';
$string['auth_pop3host'] = 'POP3 սերվերի հասցեն: Օգտագործել IP համարը և ոչ DNS-ը:';
$string['auth_pop3mailbox'] = 'Փոստարկղի անվանումը, որպի հետ պետք է փորձել կապ հաստատել (սովորաբար` INBOX)';
$string['auth_pop3port'] = 'Սերվերի սարքամիացք (սովորաբար՝ 110)';
$string['auth_pop3title'] = 'POP3 սերվեր';
$string['auth_pop3type'] = 'Սերվերի տիպ: Եթե Ձեր սերվերն օգտագործում է վկայագրերի (certificate) անվտանգություն, ընտրեք pop3cert:';
$string['auth_pop3notinstalled'] = 'Չի կարող օգտագործվել POP3 վավերացում: PHP IMAP մոդուլը տեղակայված չէ:';
$string['auth_pop3changepasswordurl_key'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_pop3mailbox_key'] = 'Փոստարկղ';
$string['auth_pop3port_key'] = 'Սարքամիացք (port)';
$string['auth_pop3type_key'] = 'Տիպ';
$string['auth_pop3host_key'] = 'Սերվերի անուն (host)';

// RADIUS plugin
$string['auth_radiustitle'] = 'RADIUS սերվեր';
$string['auth_radiusdescription'] = 'Այս մեթոդն օգտագործում է <a href=\"http://en.wikipedia.org/wiki/RADIUS\">RADIUS</a> սերվեր` ստուգելու տրված մուտքաբառի և գաղտնաբառի վավերականությունը:';
$string['auth_radiushost'] = 'RADIUS սերվերի հասցեն';
$string['auth_radiusnasport'] = 'Սարքամիացք (port), որն օգտագործվում է կապ հաստատելու';
$string['auth_radiussecret'] = 'Համօգտագործելի գաղտնիք';
$string['auth_radiustype'] = 'Ընտրեք վավերացման սխեմա, որը պետք է օգտագործվի RADIUS սերվերի հետ։';
$string['auth_radiustypepap'] = 'PAP';
$string['auth_radiustypechapmd5'] = 'CHAP MD5';
$string['auth_radiustypemschapv1'] = 'Microsoft CHAP տարբերակ 1';
$string['auth_radiustypemschapv2'] = 'Microsoft CHAP տարբերակ 2';
$string['auth_radiuschangepasswordurl_key'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_radiusnasport_key'] = 'Սարքամիացք (port)';
$string['auth_radiushost_key'] = 'Սերվերի անուն (host)';
$string['auth_radiussecret_key'] = 'Գաղտնիք';
$string['auth_radiustype_key'] = 'Վավերացում';

// Shibboleth plugin
$string['auth_shibbolethdescription'] = 'Այս մեթոդով օգտագործողները ստեղծվում և նորացվում են <a href=\"http://shibboleth.internet2.edu/\">Shibboleth</a>-ով։<br />Կարդացեք, թե ինչպես կարգաբերեք Moodle-ը Shibboleth-ի հետ՝ <a href=\"../auth/shibboleth/README.txt\">README</a>';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_shibboleth_login'] = 'Shibboleth մուտք';
$string['auth_shibboleth_manual_login'] = 'Ձեռքով մուտք';
$string['auth_shib_only'] = 'Shibboleth միայն';
$string['auth_shib_only_description'] = 'Ընտրեք այս կարգաբերումը, եթե Shibboleth վավերացումը պետք է պաարտադրվի';
$string['auth_shib_username_description'] = 'Shibboleth ցանցային սերվերի միջավայրի փոփոխականի անվանումը, որը պետք է օգտագործվի որպես մուտքաբառ Moodle-ի համար';
$string['auth_shib_instructions'] = 'Օգտագործել <a href=\"$a\">Shibboleth մուտք</a> Shibboleth-ի միջոցով մատչելիություն ստանալու համար, եթե Ձեր կազմակերպությունը աջակցում է այն:<br />Հակառակ դեպքում, օգտագործեք այստեղ ցուցադրված մուտքի նորմալ էջը։';
$string['auth_shib_convert_data'] = 'API տվյալների փոփոխություն';
$string['auth_shib_convert_data_description'] = 'Կարող եք օգտագործել այս API-ն հետագայում Shibboleth-ով տրամադրված տվյալները փոփոխելու համար։ Կարդացեք <a href=\"../auth/shibboleth/README.txt\">README</a>։';
$string['auth_shib_instructions_help'] = 'Այստեղ տվեք Shibboleth-ը բացատրող հրահանգներ Ձեր օգտագործողների համար։  Այն կցուցադրվի մուտքի էջի հրահանգների բաժնում։ Հրահանգները պետք է պարունակեն հղում \"<b>$a-ին</b>\" , որի սեղմումով ցանկացած ժամանակ կարող են մուտք գործել։';
$string['auth_shib_convert_data_warning'] = 'Ֆայլը գոյություն չունի կամ ընթեռնելի չէ ցանցային սերվերի գործընթացում։';
$string['auth_shib_changepasswordurl'] = 'Գաղտնաբառի փոփոխման URL';
$string['auth_shibboleth_login_long'] = 'Մուտք գործել Moodle  Shibboleth-ով';
$string['auth_shibboleth_select_organization'] = 'Shibboleth վավերացման համար բացվող ընտրացանկից խնդրվում է ընտրել Ձեր կազմակերպությունը՝ ';
$string['auth_shibboleth_contact_administrator'] = 'Այն դեպքում, եթե դուք չեք պատկանում նշված կազմակերպություններին, և Ձեզ անհրաժեշտ է այս սերվերի որևէ դասընթաց, դիմեք';
$string['auth_shibboleth_select_member'] = 'Ես անդամ եմ ...';
$string['auth_shibboleth_errormsg'] ='Խնդրվում է ընտրել այն կազմակերպությունը, որի անդամ եք Դուք։';
$string['auth_shib_no_organizations_warning'] ='Եթե ցանկանում եք օգտագործել միահավաք WAYF ծառայություն, պետք է տրամադրեք միմյանցից ստորակետով առանձնացված Նույնականություն Տրամադրման ID-ների, նրանց անվանումների և լրացուցիչ աշխատաշրջանի նախաձեռնողի ցանկը։';
$string['shib_not_set_up_error'] = 'Shibboleth վավերացումը, կարծես թե սխալ է կարգաբերվել, քանի որ այս էջի համար չկա Shibboleth միջավայրի ոչ մի փոփոխական։ Հետագա հրահանգների համար, թե ինչպես կարգաբերել Shibboleth վավերացումը, խնդրվում է այցելել՝ <a href=\"README.txt\">README</a> կամ դիմել ցանցային կառավարչին։';
$string['shib_no_attributes_error'] = 'Դուք, կարծես թե վավերացվել եք Shibboleth-ով, սակայն Moodle-ը չի ստացել օգտագործողի հատկանիշներ։ Խնդրվում է ստուգել, որ Ձեր Նույնականություն Տրամադրող թողարկման կարևոր հատկանիշներն ($a) աշխատում են կամ տեղեկացրեք այս կայքի ցանցային կառավարչին։';
$string['shib_not_all_attributes_error'] = 'Moodle-ը որոշակի Shibboleth հատկանիշների պահանջ ունի, որոնք առկա չեն Ձեր դեպքում։ Դրանք են՝ $a<br />Խնդրվում է դիմել այս սերվերի ցանցային կառավարչին կամ նույնականություն տրամադրողին';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF ծառայություն';
$string['auth_shib_integrated_wayf_description'] = 'Եթե ընտրել եք սա, Moodle-ը կօգտագործի իր սեփական WAYF ծառայությունը՝  Shibboleth-ի համար կազմաձևվածի փոխարեն։ Այս այլընտրանքային մուտքի էջում Moodle-ը կցուցադրի բացվող ընտրացանկ, որտեղից օգտագործողը կընտրի իր նույնականություն տրամադրողին։';
$string['auth_shib_idp_list'] = 'Նույնականություն տրամադրողներ';
$string['auth_shib_idp_list_description'] = 'Տրամադրեք նույնականություն տրամադրող entityID-ների ցանկը, որը պետք է ընտրեն օգտագործողները մուտքի էջում։<br>Յուրաքանչյուր տողում պետք է լինի միմյանցից ստորակետներով առանձնացված IdP-ի entityID-ն (տե՛ս Shibboleth մեթատվյալների ֆայլը) և անվանումը, ինչպես այն պետք է ցուցադրվի բացվող ընտրացանկում։ <br>Որպես երրորդ լրացուցիչ պարամետր, կարող եք ավելացնել Shibboleth աշխատաշրջան սկսողի գտնվելու վայրը, որը պետք է օգտագործվի այն դեպքում, եթե Ձեր Moodle-ը կարգաբերված բազմաֆեդերացիայի մաս է։';
$string['auth_shib_logout_url'] = 'Shibboleth ծառայություն տրամադրողի ելքի կարգադրիչ URL';
$string['auth_shib_logout_url_description'] = 'Տրամադրեք Shibboleth ծառայություն տրամադրողի ելքի կարգադրիչ URL։ Տիպիկ է՝ <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_auth_method'] = 'Վավերացման մեթոդի անվանումը';
$string['auth_shib_auth_method_description'] = 'Տրամադրեք Shibboleth վավերացման մեթոդի անվանումը, որը ծանոթ է Ձեր օգտագործողներին։  Այն կարող է լինել Ձեր Shibboleth ֆեդերացիայի անվանումը, օր.՝ <tt>SWITCHaai Login</tt> կամ <tt>InCommon Login</tt> և այլն։';
$string['auth_shib_logout_return_url'] = 'Այլընտրանքային ելքի վերադարձման URL';
$string['auth_shib_logout_return_url_description'] = 'Տրամադրեք URL, որին պետք է վերաուղղորդվեն Shibboleth օգտագործողները համակարգից դուրս գալուց հետո։<br />Եթե դատարկ թողնեք, օգտագործողները կանցնեն այնտեղ, ուր նրանց կուղղորդի moodle-ը';
$string['auth_updatelocal'] = 'Նորացնել լոկալ';
$string['auth_updatelocal_expl'] = '<p><b>Նորացնել լոկալ.</b> Եթե ակտիվացված է, դաշտը կնորացվի (արտաքին վավերացումից) յուրաքանչյուր անգամ, երբ օգտագործողը մուտք է գործում կամ, եթե կա օգտագործողի համաժամեցում։ Այս եղանակով նորացվող դաշտերը պետք է արգելափակված լինեն։</p>';
$string['auth_updateremote'] = 'Նորացնել արտաքին';
$string['auth_updateremote_expl'] = '<p><b>Նորացնել արտաքին.</b> Եթե ակտիվացված է, արտաքին վավերացումը կնորացվի օգտագործողի գրառումը նորացնելիս։ Դաշտերի արգելափակումը պետք է բացվի (unlock), որպեսզի թույլատրվի խմբագրել։</p>';
$string['auth_updateremote_ldap'] = '<p><b>Ծանուցում.</b> Արտաքին LDAP տվյալների նորացումը պահանջում է, որ կապակցված օգտագործողի binddn և bindpw կարգաբերեք բոլոր օգտագործողների գրառումները խմբագրելու թույլտվությամբ։ Ներկայումս այն չի պահպանում բազմաարժեվորված հատկանիշներ, և նորացնելիս կջնջի լրացուցիչ արժեքներ։ </p>';
$string['auth_user_create'] = 'Թույլատրել օգտագործողի ստեղծում';
$string['auth_user_creation'] = 'Նոր (անանուն) օգտագործողները կարող են ստեղծել օգտագործողի հաշիվ արտաքին վավերացման սկզբունքով և հաստատել էլ.-փոստով։ Եթե հնարավոր դարձնեք սա, չմոռանաք նաև կազմաձևել օգտագործողի ստեղծման մոդուլով սահմանված ընտրանքները։';
$string['auth_usernameexists'] = 'Ընտրված մուտքաբառն արդեն գոյություն ունի։ Խնդրվում է ընտրել նորը։';
$string['authenticationoptions'] = 'Վավերացման ընտրանքներ';
$string['authinstructions'] = 'Այստեղ կարող եք տրամադրել հրահանգներ Ձեր օգտագործողների համար, որպեսզի նրանք տեղեկանան որ մուտքաբառը և գաղտնաբառը պետք է օգտագործեն։ Այստեղ մուտքագրված տեքստը կարտածվի մուտքի էջում։  Եթե այս դաշտը դատարկ թողնեք, ոչ մի հրահանգ չի տպվի';
$string['changepassword'] = 'Գաղտնաբառի փոփոխման URL';
$string['changepasswordhelp'] = 'Այստեղ կարող եք նշել վայր, որտեղ Ձեր օգտագործողները կարող են վերադարձնել կամ փոխել իրենց մուտքաբառը/գաղտնաբառը, եթե մոռացել են այն։  Այն օգտագործողներին կտրամադրվի  կոճակի տեսքով մուտքի և օգտագործողի անձնական էջերում։  Եթե այս դաշտը դատարկ թողնեք, կոճակը չի արտածվի։';
$string['chooseauthmethod'] = 'Ընտրեք վավերացման մեթոդը';
$string['createpasswordifneeded'] = 'Ստեղծել գաղտնաբառ, եթե պահանջվում է';
$string['errorpasswordupdate'] = 'Գաղտնաբառի նորացման սխալ, գաղտնաբառը չի փոխվել';
$string['errorminpasswordlength'] = 'Գաղտնաբառերը պետք է  կազմված լինեն նվազագույնը $a գրանշաններից';
$string['errorminpassworddigits'] = 'Գաղտնաբառերը պետք է ունենան նվազագույնը $a թիվ։';
$string['errorminpasswordlower'] = 'Գաղտնաբառերը պետք է ունենան նվազագույնը $a փոքրատառ(եր)։';
$string['errorminpasswordnonalphanum'] = 'Գաղտնաբառերը պետք է ունենան նվազագույնը $a ոչ-տառաթվային գրանշան(ներ).';
$string['errorminpasswordupper'] = 'Գաղտնաբառերը պետք է ունենան նվազագույնը $a մեծատառ(եր)։';
$string['infilefield'] = 'Պարտադիր դաշտ ֆայլում';
$string['forcechangepassword'] = 'Պարտադրել փոխել գաղտնաբառը';
$string['forcechangepassword_help'] = 'Օգտագործողներին պարտադրել փոխել գաղտնաբառը հաջորդ անգամ Moodle մուտք գործելիս։';
$string['forcechangepasswordfirst_help'] = 'Օգտագործողներին պարտադրել փոխել գաղտնաբառը առաջին անգամ Moodle մուտք գործելիս։';
$string['guestloginbutton'] = 'Հյուրի մուտքի կոճակ';
$string['instructions'] = 'Հրահանգներ';
$string['internal'] = 'Ներքին';
$string['md5'] = 'MD5 կոդավորում';
$string['nopasswordchange'] = 'Գաղտնաբառը չի կարող փոխվել';
$string['nopasswordchangeforced'] ='Դուք չեք կարող շարունակել առանց Ձեր գաղտնաբառը փոխելու, սակայն չկա այն փոխելու մատչելի էջ։ Խնդրվում է դիմել Moodle կառավարչին։';
$string['passwordhandling'] = 'Գաղտնաբառի դաշտի մշակում';
$string['plaintext'] = 'Տեքստ';
$string['selfregistration'] = 'Ինքնագրանցում';
$string['selfregistration_help'] = 'Եթե ընտրված է վավերացմանման այնպիսի մեթոդ, ինչպիսին էլ.-փոստի վրա հիմնված ինքնագրանցումն է, ապա հնարավոր օգտագործողներին թույլատրվում  է ինքնուրույն գրանցվել և հաշիվներ ստեղծել։ Սա հնարավորություն կտա հաշիվներ ստեղծել նաև սպամերներին, ովքեր ֆորումները, բլոգները և այլն կօգտագործեն սպամ տարածելու համար։ Այս վտանգը կանխելու համար, անհրաժեշտ է կանխարգելել ինքնագրանցումը կամ սահմանափակել <em>Թույլատրելի էլ.-փոստ տիրույթներ</em> կարգաբերմամբ։';
$string['sha1'] = 'SHA-1 կոդավորում';
$string['showguestlogin'] = 'Դուք կարող եք մուտքի էջում թաքցնել հյուրի մուտքի կոճակը։';
$string['stdchangepassword'] = 'Օգտագործել գաղտնաբառի փոխման ստանդարտ էջ';
$string['stdchangepassword_expl'] = 'Եթե արտաքին վավերացման համակարգը թույլ է տալիս գաղտնաբառի փոխում Moodle-ի միջոցով, ակտիվացրեք Այո ընտրանքը։ Այս կարգաբերումն անտեսում է \'Գաղտնաբառի փոխման URL\'։';
$string['stdchangepassword_explldap'] = 'ՈՒշադրություն. խորհուրդ է տրվում օգտագործել SSL կոդավորված թունելով LDAP (ldaps://), եթե LDAP սերվերը հեռադիր է։';
$string['update_oncreate'] = 'Ստեղծման ընթացքում';
$string['update_onlogin']  = 'Յուրաքանչյուր մուտքի դեպքում';
$string['update_onupdate']  = 'Նորացման ընթացքում';
$string['update_never']    = 'Երբեք';
$string['unlocked'] = 'Բաց է';
$string['unlockedifempty'] = 'Բաց է, եթե դատարկ է';
$string['locked'] = 'Փակ է';
$string['incorrectpleasetryagain'] = 'Սխալ է: Խնդրվում է փորձել կրկին:';
$string['enterthewordsabove'] = 'Մուտքագրեք վերոնշյալ բառերը';
$string['enterthenumbersyouhear'] = 'Մուտքագրեք թվերը, որոնք լսում եք';
$string['getanothercaptcha'] = 'Ստանալ այլ CAPTCHA';
$string['getanaudiocaptcha'] = 'Ստանալ audio CAPTCHA';
$string['getanimagecaptcha'] = 'Ստանալ պատկերի CAPTCHA';
$string['recaptcha'] = 'reCAPTCHA';
?>
