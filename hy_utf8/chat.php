<?PHP // $Id$ 
      // chat.php - created with Moodle 1.8.2+ (2007021520)
      // local modifications from http://swnet.info/moodle

$string['chatintro'] = 'Ներածական տեքստ';
$string['chatname'] = 'Չաթի անվանումը';
$string['configrefreshuserlist'] = 'Ո՞րքան հաճախ պետք է նորացվի օգտագործողների ցուցակը (վայրկյաններով):';
$string['currentchats'] = 'Այս պահին աշխատող չաթերը';
$string['currentusers'] = 'Ընթացիկ օգտագործողներ';
$string['donotusechattime'] = 'Չցուցադրել չաթի աշխատաժամանակը';
$string['enterchat'] = 'Մտնել չաթ';
$string['generalconfig'] = 'Հիմնական կոնֆիգուրացիա';
$string['helpchatting'] = 'Օգնություն չաթում հաղորդակցվելու համար';
$string['idle'] = 'Սպասում';
$string['messagebeepseveryone'] = '$a բոլորին ազդանշան է ուղարկել';
$string['messageexit'] = '$a հեռացել է չաթից';
$string['messages'] = 'Հաղորդագրություններ';
$string['modulename'] = 'Չաթ';
$string['modulenameplural'] = 'Չաթեր';
$string['nextsession'] = 'Հաջորդ նախատեսված սեսիան';
$string['nomessages'] = 'Ոչ մի հաղորդագրություն չկա';
$string['repeatdaily'] = 'Ամեն օր այս ժամին';
$string['repeatnone'] = 'Չկրկնել սեսիաները';
$string['repeattimes'] = 'Կրկնել սեսիաները';
$string['strftimemessage'] = '%%H:%%M';
$string['beep'] = 'ազդանշան';
$string['chat:chat'] = 'Զրույց չաթում';
$string['chat:deletelog'] = 'Հեռացնել չաթի լոգերը';
$string['chat:readlog'] = 'Կարդալ չաթի լոգերը';
$string['chatreport'] = 'Չաթի  աշխատաշրջաններ';
$string['chattime'] = 'Հաջորդ չաթի ժամանակը';
$string['configmethod'] = 'Նորմալ չաթի եղանակում կլիենտը ստիպված է պարբերաբար թարմացում պահանջել սերվերից: Դա աշխատում է ամեն տեղ, բայց մեծ բեռնվածություն կարող է ստեղծել սերվերի վրա շատ չաթ անողների դեպքում: Սերվերի օժանդակ ծրագրի օգտագործումը պահանջում է հրամանային տողի մատչում դեպի ՕՀ, բայց այն շատ արագ չաթի միջավայր է ստեղծում:';
$string['confignormalupdatemode'] = 'Չաթի սենյակների թարմացման համար օգտագործվում է HTTP 1.1-ի <em>Keep-Alive</em> հնարավորությունը, բայց դա շատ ծանր է աշխատում սերվերի վրա: Ավելի առաջատար եղանակ է <em>Հոսքային</em> եղանակը, օգտագործողներին թարմացումները ուղարկելու համար: Այս եղանակը շատ արագ է աշխատում, բայց կարող է չսպասարկվել ձեր սերվերի կողմից:';
$string['configoldping'] = 'Օգտագործողին երկար ժամանակ չլսելուց հետո, մենք համարում ենք, որ նա հեռացել է: Ինչքա՞ն է այդ ժամանակը (վայկյաններով): Եթե օգատգործում եք թարմացման \'Նորմալ մեթոդ\' <strong>never</strong>, չօգտագործեք արժեքներ ցածր քան 2 * \'չաթի թարմացման ժամանակ\':';
$string['configrefreshroom'] = 'Ո՞րքան հաճախ չաթը պետք է նորացվի այստեղ (վայրկյաններով): Փոքր արժեքը ստեղծում է արագության տպավորություն, սակայն խիստ ծանրաբեռնում է վեբսերվերը, եթե չաթ ռեժիմում շատ մարդ է գտնվում: Եթե օգտագործում եք <em>Հոսքային</em> թարմացում, դուք կարող եք ընտրել մեծ նորացման հաճախություն` փորձեք 2:';
$string['configserverhost'] = 'Համակարգչի անունը, որտեղ գտնվում է սերվերի օժանդակ ծրագիրը';
$string['configserverip'] = 'Վերը նշվաց մեքենայի թվային IP հասցեն';
$string['configservermax'] = 'Հաճախորդների թույլատրվող առավելագույն քանակը';
$string['configserverport'] = 'Սերվերի վրա օժանդակ ծրագրի օգտագործման պորտը';
$string['deletesession'] = 'Հեռացնել  այս սեսիան';
$string['deletesessionsure'] = 'Համոզվա՞ծ եք, որ անհրաժեշտ է հեռացնել այս սեսիան';
$string['errornousers'] = 'Ոչ մի օգտագործող չկա';
$string['explaingeneralconfig'] = 'Այս կարգավերիչները <strong>միշտ</strong> գործում են';
$string['explainmethoddaemon'] = 'Այս կարգավերիչները դեր են խաղում <strong>միայն</strong>, եթե դուք ընտրել եք \'Չաթի սերվերի օժանդակ ծրագիր\' chat_method-ի համար';
$string['explainmethodnormal'] = 'Այս կարգավերիչները դեր են խաղում <strong>միայն</strong>, եթե դուք ընտրել եք \'Նորմալ մեթուդ\' chat_method-ի համար';
$string['messagebeepsyou'] = '$a ձեզ ազդանշան է ուղարկել';
$string['messageenter'] = '$a հայտնվել է չաթում';
$string['methoddaemon'] = 'Չաթի սերվերի օժանդակ ծրագիր';
$string['methodnormal'] = 'Նորմալ մեթոդ';
$string['neverdeletemessages'] = 'Երբեք չհեռացնել հաղորդագրությունները';
$string['noguests'] = 'Տվյալ չաթը հասանելի չէ հյուրերի համար';
$string['normalkeepalive'] = 'ԿենդանիՊահել';
$string['normalstream'] = 'Հոսք';
$string['noscheduledsession'] = 'Նախատեսված սեսիա չկա';
$string['repeatweekly'] = 'Ամեն շաբաթ այս ժամին';
$string['savemessages'] = 'Հիշել անցած սեսիաները';
$string['seesession'] = 'Դիտել սեսիան';
$string['sessions'] = 'Չաթի սեսիաներ';
$string['studentseereports'] = 'Բոլորը կարող են դիտել անցած սեսիաները';
$string['viewreport'] = 'Դիտել անցած չաթի սեսիաները';

?>
