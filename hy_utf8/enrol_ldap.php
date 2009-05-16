<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.7 beta + (2006101003)
$string['description'] = '<p>Ձեր գրանցումները ղեկավարելու համար Դուք կարող եք օգտագործել LDAP սերվեր  
                          Ենթադրվում է, որ Ձեր LDAP ծառը պարունակում է դասընթացների դասավորությամբ խմբեր, 
                          և դրանցից յուրաքանչյուրը՝ խմբեր/դասընթացներ, կունենա ուսանողներին արտացոլվելու անդամության մուտքեր։</p>
                          <p>Ենթադրվում է, LDAP-ում դասընթացները սահմանված են ինչպես խմբերը։ Անդամության բազմակի դաշտերով  
                          յուրաքանչյուր խմբով, (<em>member</em> կամ <em>memberUid</em>), որը պարունակում է օգտագործողի եզակի նույնացում։</p>
                          <p>LDAP գրանցումների օգտագործման համար, Ձեր օգտագործողներին <strong>անհրաժեշտ է</strong> 
                          ունենալ վավերական  id համարի դաշտ։ LDAP խմբերը անդամի դաշտերում պետք է ունենան այդ id համարը օգտագործողին դասըթացում գրանցելու համար։
                          Այն սովորաբար լավ կաշխատի, եթե Դուք արդեն օգտագործում եք LDAP 
                          Նույնացում։</p>

                          <p>Գրանցումները կնորացվեն, երբ օգտագործողները մուտք գործեն։ Ինչպես նաև՝  

                          գրանցումները համաժամանակացման մեջ պահելու համար կարող եք աշխատեցնել գրվածքը. <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>

                          <p>Այս փոխանջատիչը կարելի է նաև կարգաբերել այնպես, որ LDAP-ում նոր խմբեր հայտնվելիս ինքնաբար նոր դասընթաց ստեղծի։</p>';
$string['enrol_ldap_autocreate'] = 'Դասընթացները կարող են ինքնաբար ստեղծվել, եթե 

                                    դասընթացում կան գրանցումներ, որոնք դեռևս գոյություն չունեն Moodle-ում։';
$string['enrol_ldap_autocreation_settings'] = 'Դասընթացի ինքնաբար ստեղծման կարգաբերումներ';
$string['enrol_ldap_bind_dn'] = 'Եթե օգտագործողներ որոնելիս ցանկանում եք օգտագործել, 
 
                                 նշեք այստեղ։ Օրինակ՝
                                  \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Գաղտնաբառ bind-user-ի համար։';
$string['enrol_ldap_category'] = 'Կարգ՝ ինքնաբար ստեղծված դասընթացների համար';
$string['enrol_ldap_contexts'] = 'LDAP համատեքստեր';
$string['enrol_ldap_course_fullname'] = 'Լրացուցիչ. LDAP դաշտ, որից կարելի է ստանալ լրիվ անվանումը։';
$string['enrol_ldap_course_idnumber'] = 'Արտապատկերել եզակի նույնացուցիչները LDAP-ում, սովորաբար՝

                                         <em>cn</em> կամ <em>uid</em>։ Խորհուրդ է տրվում 
                                         արգելափակել արժեքը, եթե օգտագործում եք դասընթացի ինքնա-ստեղծումը։';
$string['enrol_ldap_course_settings'] = 'Դասընթացի գրանցման կարգաբերումներ';
$string['enrol_ldap_course_shortname'] = 'Լրացուցիչ. LDAP դաշտ, որից կարելի է ստանալ կրճատ անվանումը։';
$string['enrol_ldap_course_summary'] = 'Լրացուցիչ. LDAP դաշտ, որից կարելի է ստանալ հակիրճ նկարագրությունը';
$string['enrol_ldap_editlock'] = 'Արգելափակման արժեք';
$string['enrol_ldap_general_options'] = 'Ընդհանուր ընտրանքներ';
$string['enrol_ldap_host_url'] = 'Նշեք LDAP սերվերը (host) URL-ձևով, օրինակ՝ 
                                  \'ldap://ldap.myorg.com/\'
 
                                  կամ \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_memberattribute'] = 'LDAP անդամության հատկանիշ';
$string['enrol_ldap_objectclass'] = 'Դասընթացների որոնելիս objectClass է օգտագործվել։ Սովորաբար՝

                                     \'posixGroup\'։';
$string['enrol_ldap_roles'] = 'Դերերի արտապատկերում';
$string['enrol_ldap_search_sub'] = 'Որոնման խմբի անդամությունը ենթահամատեքստից։';
$string['enrol_ldap_server_settings'] = 'LDAP սերվերի կարգաբերումներ';
$string['enrol_ldap_student_contexts'] = 'Համատեքստերի ցանկ, որում ուսանողների
                                          գրանցումներով խմբեր են տեղակայված։ Համատեքստերը միմյանցից առանձնացրեք \';\'-ներով։ Օրինակ՝ 
 
                                          \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Անդամության հատկանիշ, երբ                                           օգտագործողները պատկանում են
                                          (գրանցված են) խմբին։ Սովորաբար՝ \'member\'

                                          կամ \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'ՈՒսանողի գրանցման կարգաբերումներ';
$string['enrol_ldap_teacher_contexts'] = 'Համատեքստերի ցանկ, որում ուսուցիչների
                                          գրանցումներով խմբեր են տեղակայված։ Համատեքստերը միմյանցից առանձնացրեք \';\'-ներով։ Օրինակ՝
 
                                         \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Անդամության հատկանիշ, երբ օգտագործողները պատկանում են

                                          (գրանցված են) խմբին։ Սովորաբար՝ \'member\'

                                          կամ \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'ՈՒսուցչի գրանցման կարգաբերումներ';
$string['enrol_ldap_template'] = 'Լրացուցիչ. ինքնաբար ստեղծված դասընթացները իրենց կարգաբերումները կարող են կրկնօրինակել ձևանմուշ դասընթացից։';
$string['enrol_ldap_updatelocal'] = 'Նորացնել առանձին տվյալներ';
$string['enrol_ldap_version'] = 'Ձեր սերվերում օգտագործվող LDAP կանխագրի տարբերակը։';
$string['enrolname'] = 'LDAP';
?>
