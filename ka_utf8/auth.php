<?PHP // $Id$ 
      // auth.php - created with Moodle 1.4.4 (2004083140)


$string['auth_common_settings'] = 'ზოგადი სეთინგები';
$string['auth_data_mapping'] = 'მონაცემთა რუქის მიმოხილვა';
$string['auth_dbdescription'] = 'მომხმარებლის სახელის და პაროლის სისწორის შესამოწმებლად ეს მეთოდი იყენება მონაცემთა გარე ცხრილს. თუ შესამოწმებელი აქაუნტი ახალია, მაშინ ინფორმაცია  Moodle-ის სხვა ფაილებიდანაც იქნება გადამოწმებული';
$string['auth_dbextrafields'] = 'ეს ველები არჩევითია. თქვენ შეიძლება ამჯობინოთ, რომ წინასწარ შეივსოს მონაცემებით სათანადო ველი Moodle-ის ზოგიერთი მომხმარებლის შესახებ <b>გარე მონაცემთა ველიდან,</b> რომელსაც აქ მიუთითებთ. <p>თუ დატოვებთ შეუვსებლად. მაშინ გამოყენებული იქნება ის რაც არის ნაგულისხმევი..</p><p> სხვა შემთხვევებში მომხმარებელს შეუძლია თვითონ შეასრულოს ამ ველების რედაქტირება, როდესაც შემოვა რეგისტრაციის შემდეგ.</p>';
$string['auth_dbfieldpass'] = 'პაროლების შემცველი არის სახელი';
$string['auth_dbfielduser'] = 'მომხმარებლის სახელის შემცველი არის სახელი';
$string['auth_dbhost'] = 'კომპიუტერი, რომელიც ”მასპინძლობს მონაცემთა სერვერს.';
$string['auth_dbname'] = 'საკუთრივ მონაცემთა ბაზის სახელი';
$string['auth_dbpass'] = 'პაროლი, რომელიც შეესაბამება ზემოთ დასახელებულ მომხმარებლის სახელს';
$string['auth_dbpasstype'] = 'მიუთითეთ ის ფორმატი, რომელსაც იყენებს პაროლის არე. MD5 კოდირება';
$string['auth_dbtable'] = 'მონაცემთა ბაზის ცხრილის სახელი';
$string['auth_dbtitle'] = 'გარე მონაცემთა ბაზის გამოყენება';
$string['auth_dbtype'] = 'მონაცემთა ბაზის ტიპი (მოინახულეთ the <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> დეტალებისთვის)';
$string['auth_dbuser'] = 'მომხმარებლის სახელი მონაცემთა ბაზაზე წაკითხვის უფლებით დაშვებისათვის';
$string['auth_editlock'] = 'დაბლოკვის მნიშვნელობა';
$string['auth_editlock_expl'] = '<p><b>დაბლოკე მნიშვნელობა :</b> თუ ნებადართულია, დაიცავს Moodle-ისმომხმარებლებს და ადმინისტრაციას ფაილების უშუალო რედაქტირებისაგან.გამოიყენე ეს ოპცია თუ თქვენ განთავსებული გაქვთ ეს მონაცემი გარე აუტენტიფიკაციის სისტემაში. </p>';
$string['auth_emaildescription'] = 'ელ-ფოსტით დადასტურება არის ნაგულისხმევი აუტენტიფიკაციის მეთოდით. როდესაც მომხმარებელი დარეგისტრირდება ახალი  სახელის და პაროლის არჩევით, დამადასტურებელი წერილი გაიგზავნება მისი ელ-ფოსტის მისამართზე. ეს წერილი შეიცავს დაცული გვერდის მისამართს, სადაც მომხმარებელს შეუძლია დაადასტუროს მისი ანგარიში. შემდგომი შემოსვლებისას მხოლოდ მოწმდება მომხმარებლის სახელის და პაროლის  შესაბამისობა Moodle-ის მონაცემთა ბაზაში შენახულ მნიშვნელობასთან.';
$string['auth_emailtitle'] = 'ელ-ფოსტაზე დამყარებული აუტენტიფიკაცია';
$string['auth_fccreators'] = 'ჯგუფების სია რომელთა წევრებს უფლება აქვთ შექმნან ახალი კურსები. განაცალკევეთ მრავლობითი ჯგუფები \';\' სიმბოლოთი. სახელები უნდა ჩაიწეროს ზუსტად ისე, როგორც პირველი კლასის სერვერზე. სისტემა არის ასოთმთავრულისადმი მგრძნობიარე.';
$string['auth_fcdescription'] = 'სახელისა და პაროლის სისწორის შემოწმებისათვის ეს მეთოდი იყენებს პირველი კლასის სერვერს.';
$string['auth_fcfppport'] = 'სერვერის პორტი (3333 არის ძალიან ხშირი)';
$string['auth_fchost'] = 'პირველი კლასის სერვერის მისამართი.გამოიყენეთ IP ნომერი DNS სახელი.';
$string['auth_fcpasswd'] = 'პაროლი ზემოთ დასახელებული აქაუნტისათვის';
$string['auth_fctitle'] = 'პირველი კლასის სერვერის გამოყენება';
$string['auth_fcuserid'] = 'მომხმარებლის ID პირველი კლასის ანგარიში სუბადმინისტრატორის პრივილეგიების ნაკრებით.';
$string['auth_imapdescription'] = 'ეს მეთოდი იყენებს IMAP სერვერს მომხმარებლის სახელისა და პაროლის შესამოწმებლად.';
$string['auth_imaphost'] = ' IMAP სერვერის მისამართი. გამოიყენეთIP ნომერი და არა DNS  სახელი.';
$string['auth_imapport'] = 'IMAP სერვერის პორტის ნომერი. ჩვეულებრივად არის 143 ან 993.';
$string['auth_imaptitle'] = ' გამოიყენეთ IMAP სერვერი';
$string['auth_imaptype'] = 'IMAP სერვერის ტიპი. IMAP სერვერს შეიძლება  გააჩნდეს განსხვავებული ტიპის აუტენტიფიკაცია და დადასტურება.';
$string['auth_ldap_bind_dn'] = 'თუ უკვე გყავთ ვინმე ისეთი გამოჭერილი მომხმარებელი, რომელსაც შეიძლება დაავალო მომხმარებლების მოძებნა, მიუთითე ის აქ დაახლოებით ასე:\'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'გამოჭერილი მომხამარებლის პაროლი.';
$string['auth_ldap_bind_settings'] = 'გამოჭერის სეთინგები.';
$string['auth_ldap_contexts'] = 'კონტექსტების სია სადაც მომხმარებლები არიან განთავსებულნი.განაცალკევე სხვადასხვა კონტექსტი წერტილ-მძიმით ’;’. მაგალითად:\'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'თუ არ შეგიძლიათ მომხმარებელთან შექმნა ელ-ფოსტით დადასტურების გამოყენებით, მაშინ მიუთითე კონტექსტი, სადაც მომხმარებლები არიან შექმნილნი. ცალკეული მომხმარებლის კონტექსტები უნდა იყოს განსხვავებული უსაფრთხოების მიზნით. თქვენ არ გესაჭიროებათ ამ კონტექსტის დამატებაldap_context-variable-ში, Moodle ავტომატურად მოძებნის კონტექსტს ამ მომხმარებლებისთვის..<br /><b>Note!</b> შენ დაგჭირდება ფუნქცია auth_user_create() მოდიფიცირება ფაილში inauth/ldap/lib.php რომ შეასრულო მომხმარებლის შექმნის სამუშაო.';
$string['auth_ldap_creators'] = 'ჯგუფების სია, რომლის წევრებსაც შეუძლიათ შექმნან ახალი კურსი. განაცალკევეთ მრავლობითი ჯგუფები (;)-ით. მაგალითად ასე: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'აირჩიეთ No (არა), რათა ავკრძალოთ ვადაგასული პაროლების შემოწმება, ან  LDAP პაროლის ვადის გასვლის დროის პირდაპირ LDAP-დან წასაკითხად.';
$string['auth_ldap_expiration_warning_desc'] = ' დღეების რაოდენობა პაროლის გაუქმების გაფრთილების გამოქვეყნებამდე.';
$string['auth_ldap_expireattr_desc'] = 'არჩევითი: ldap-ატრიბუტი, სადაც შენახულია პაროლის გაუქმების თარიღი asswordAxpirationTime .';
$string['auth_ldap_graceattr_desc'] = 'არჩევითი: დროებითი პაროლის ატრიბუტების უგულებელყოფა';
$string['auth_ldap_gracelogins_desc'] = 'ნებადართულია LDAP დროებითი პაროლით  ”ლოჯინის” მხარდაჭერა. მას შემდეგ, როდესაც პაროლის ვარგისიანობის დრო ამოიწურება, მომხმარებელს შეუძლია შემოვიდეს მანამ, სანამ დროებითი პაროლის  მთვლელი გახდება 0. ამ სეთინგის ნებადართვის შემთხვევაში გამოჩნდება შეტყობინება, თუ პაროლის მოქმედების ვადები ამოიწურა.';
$string['auth_ldap_host_url'] = 'მიუთითე LDAP მასპინძელი URL ფორმაში, მსგავსად:\'ldap://ldap.myorg.com/\' ან \'ldaps://ldap.myorg.com/\'  განაცალკევე მრავლობითი სერვერები  წერტილ მძიმით \';\', რათა მივიღოთ დახმარება  მოსალოდნელი მარცხისას.';
$string['auth_ldap_login_settings'] = 'შემოსვლის პარამეტრების დაყენება';
$string['auth_ldap_memberattribute'] = 'არჩევითი: დაურთავს მომხმარებელს წევრის ატრიბუტს, როდესაც მომხმარებელი მიეკუთვნება ჯგუფს, ჩვეულებრივად ეს ატრიბუტია: ”წევრი”.';
$string['auth_ldap_objectclass'] = 'არჩევითი: დაურთავს ობიეცტურ კლასს რომელიც გამოიყენება სახელის/მომხმარებლის ძიებისათვის ldap_user_type- ზე. ჩვეულებრივ არ არის საჭირო ამის შეცვლა.';
$string['auth_ldap_opt_deref'] = 'არკვევს როგორ არის მიკუთვნებული მეტსახელები ძებნის დროს. აირჩიეთ ერთ-ერთი შემდეგი მნიშვნელობებიდან:
\"არა\" (LDAP_DEREF_NEVER) ან 
\"დიახ\" (LDAP_DEREF_ALWAYS) ';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP პაროლის გაუქმების პარამეტრები.';
$string['auth_ldap_search_sub'] = 'ჩასვით მნიშვნელობა <> 0, თუ გსურთ მომხმარებლების მოძებნა ქვეტექსტიდან.';
$string['auth_ldap_server_settings'] = 'LDAP სერვერის პარამეტრები';
$string['auth_ldap_update_userinfo'] = 'განაახლეთ მომხმარებლის ინფორმაცია (სახელი, გვარი, მისამართი...) LDAP-დან Moodle-ში. მიუთითეთ \"Data mapping\"-ის პარამეტრები საჭიროებისამებრ.';
$string['auth_ldap_user_attribute'] = 'არჩევითი: დაურთავს სახელის/ მომხმარებელთა ძიების ატრიბუტს. ჩვეულებრივ ეს არის \'cn\'.';
$string['auth_ldap_user_settings'] = 'მომხმარებლის ძიების პარამეტრები.';
$string['auth_ldap_user_type'] = 'აირჩიეთ როგორ არიან მომხმარებლები დამახსოვრებული LDAP-ში. ეს პარამეტრი ასევე მიუთითებს როგორ განხორციელდეა მომხმარებლის შექმნა და შესვლის გაუქმება.';
$string['auth_ldap_version'] = 'LDAP პროტოკოლის ვერსია, რომელსაც თქვენი სერვერი იყენებს.';
$string['auth_ldapdescription'] = 'ეს მეთოდი გვაძლევს აუტენტიფიკაციას გარე LDAP სერვერისათვის.

თუ არსებული მომხმარებლის სახელი და პაროლი სწორია Moodle შექმნის ახალ მომხმარებელს მის ბაზაში. ამ მოდელს შეუძლია მომხმარებლის ატრიბუტების წაკითხვა LDAP-დან და Moodle-ის საჭირო ჩარჩოების წინასწარი შევსება. მხოლოდ შემდეგი ’ლოჯინებისთვის’ მოწმდება მომხმარებლის სახელი და პაროლი. ';
$string['auth_ldapextrafields'] = 'ეს ჩარჩოები არის არჩევითი. თქვენ შეგიძლიათ აირჩიოთ Moodle-ის მომხმარებლის ჩარჩოების წინასწარი შევსება ინფორმაციით <b>LDAP fields</b>-დან, რომელსაც აქ მიუთითებთ. <p>თუ დატოვებთ მათ შეუვსებლად, მაშინ არაფერი იქნება გადმოტანილ LDAP-დან და Moodle სამაგიეროდ გამოიყენებს ნაგულისხმევებს.</p><p>სხვა შემთხვევაში, მომხმარებელს შეეძლება ყველა ამ ჩარჩოების რედაქტირება შესვლის შემდეგ.</p>';
$string['auth_ldaptitle'] = 'LDAP სერვერის გამოყენება';
$string['auth_manualdescription'] = 'ეს მეთოდი მომხამერებელს უხშობს ყველა გზას მათი საკუთარი ”აქაუნთის” შესაქმნელად. ყველა ”აქაუნთები” უნდა შეიქმნას ადმინისტრატორის მიერ.';
$string['auth_manualtitle'] = 'მხოლოდ ხელი შექმნილი ”აქაუნთები”.';
$string['auth_multiplehosts'] = 'მრავლობითი ”ჰოსტები” ან მისამართები შეიძლება იყოს მითითებული (მაგ. host1.com;host2.com;host3.com) ან (მაგ. xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_nntpdescription'] = 'ეს მეთოდი იყენებს NNTP სერვერს, რომელიც ამოწმებს არის თუ არა მომხმარებლის ასხელი და პაროლი სწორი.';
$string['auth_nntphost'] = 'NNTP სერვერის მისამართი. გამოიყენეთ IP რიცხვი,DNS სახელის ნაცვლად ';
$string['auth_nntpport'] = 'სერვერის პორტი (119 არის ყველაზე მეტად მისაღები)';
$string['auth_nntptitle'] = 'NNTP სერვერის გამოყენება';
$string['auth_nonedescription'] = 'მომხმარებლებს შეუძლიათ ხელმოწერა და სწორი აქაუნტის  დაუყოვნებლივი შექმნა, რომელიც არ ექვემდებარება გარე სერვერისაგან იდენტიფიკაციას და არ მოითხოვს დადასტურებას ელ-ფოსტის მეშვეობით. იყავით ფრთხილად ამ ოპციის გამოყენებისას!. გაითვალისწინეთ უსაფრთხოების და ადმინისტრირების პრობლემები, რომლებიც ამან შეიძლება გამოიწვიოს.';
$string['auth_nonetitle'] = 'არ არია აუტენტიფიკაცია';
$string['auth_pamdescription'] = 'ეს მეთოდი იყენებს PAM-ს ამ სერვერზე მომხმარებელთა რეალური სახელის მისაკვლევად. ამ მოდულის გამოყენებისათვის თქვენ დაგჭირდებათ დააინსტალიროთ<a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">PHP4 PAM Authentication</a> ';
$string['auth_pamtitle'] = 'PAM (ჩართვადი აუტენტიფიკაციის მეთოდი)';
$string['auth_passwordisexpired'] = 'თქვენი პაროლის მოქმედების ვადები ამოიწურა. გსურთ მისი შეცვლა?';
$string['auth_passwordwillexpire'] = 'თქვენი პაროლიის მოქმედების ვადები იწურება  $a დღეში.გსურთ მისი ახლა შეცვლა?';
$string['auth_pop3description'] = 'ეს მეთოდი იყენებს POP3 სერვერს მოცემული მომხმარებლის სახელის და პაროლის შესამოწმებლად';
$string['auth_pop3host'] = 'POP3 სერვერის მისამართი. გამოიყენეთ IP რიცხვი,DNS სახელის ნაცვლად ';
$string['auth_pop3mailbox'] = 'საფოსტო ყუთის სახელი, რომელთანაც უნდა ვცადოთ დაკავშირება (ჩვეულებრივად ეს არის INBOX)';
$string['auth_pop3port'] = 'სერვერის პორტი (110 არის ყველაზე მეტად ჩვეულებრივი, 995 არის მისაღები SSL -სათვის)';
$string['auth_pop3title'] = 'POP3 სერვერის გამოყენება';
$string['auth_pop3type'] = 'სერვერის ტიპი. თუ თქვენი სერვერი იყენებს სერტიფიცირებულ უსაფრთხოებას, აირჩიეთ pop3cert.';
$string['auth_updatelocal'] = 'ლოკალური მონაცემების განახლება';
$string['auth_updatelocal_expl'] = '<p><b>ლოკალურ მონაცემთა განახლება:</b> თუ ნებადართულია, მაშინ ეს არე ყოველთვის განახლდება მომხმარებლის შემოსვლისას ან თუ იქნება გათვალისწინებული მომხმარებლის სინქრონიზაცია. არეები განკუთვნილი ადგილობრივად განახლებისათვის უნდა იქნას ჩაკეტილი.</p>';
$string['auth_updateremote'] = 'გარე მონაცემების განახლება';
$string['auth_updateremote_expl'] = '<p><b>გარე მონაცემტა განახლება:</b> თუ ნებადართულია, მაშინ განახლება მოხდება მაშინ, როცა განახლდება მომხმარებლის მონაცემები. არეები განკუთვნილი გარე განახლებისათვის უნდა იქნას გახსნილი.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> გარე LDAP მონაცენების განახლება მოითხოვს binddn და bindpw ჩართვას ”შეზღუდული” მომხმარებლისათვის, მომხმარებლის შესახებ ჩანაწერებში პრივილეგიების რედაქტირებით. ამჟამად ის არ ინარჩუნებს მრავალმნიშვნელოვან ატრიბუტებს და გასაახლებლად გადაგზავნის ზედმეტ მნიშვნელობებს.</p>';
$string['auth_user_create'] = 'მომხმარებელთა შექმნის ნებადართვა';
$string['auth_user_creation'] = 'ახალ (ანონიმურ) მომხმარებელს შეუძლია შექმნას თავისი ანგარიში გარე აუტენტიფიკაციის მეშვეობით და მიიღოს დადასტურება ელ-ფოსტით. თუ ეს ნებადართულია, მაშინ მომხმარებლის აქაუნტის შესაქმნელად აგრეთვე საჭიროა მოდულურად სპეციფიკური ოპციის კონფიგურირება.';
$string['auth_usernameexists'] = 'თქვენს მიერ არჩეული მომხმარებლის სახელი უკვე დაფიქსირებულია. აირჩიეთ რაიმე სხვა.';
$string['authenticationoptions'] = 'აუტენტიფიკაციის ოპციები';
$string['authinstructions'] = 'აქ თქვენ შეიძლება მოიყვანოთ ინნსტრუქცია თქვენი მომხმარებლებისათვის, რათა იცოდნენ როგორი პაროლის და მომხმარებლის სახელის გამოყენება არის შესაძლებელი. თუ ამას დატოვებთ ცარიელს, მაშინ არავითარი ინსტრუქცია არ გამოჩნდება.';
$string['changepassword'] = 'URL პაროლის შეცვლა';
$string['changepasswordhelp'] = 'აქ თქვენ შეგიძლიათ მიუთითოთ ბმული, სადაც თქვენს მომხმარებლებს შეეძლებათ მათი პაროლის დავიჭყების შემთხვევაში მათი აღდგენა ან შეცვლა. ეს ხორციელდება შემოსასვლელ გვერდძე სატრანადო ღილაკის გამოსახვით. თუ დატოვებთ ცარიელს, მაშინ სათანადო ღილაკი შემოსასვლელ გვერდზე არ გამოისახება';
$string['chooseauthmethod'] = 'აირჩიეთ აუტენტიფიკაციის მეთოდი';
$string['forcechangepassword'] = 'პაროლის შეცვლის იძულება';
$string['forcechangepassword_help'] = 'მომხმარებლის იძულება შეცვალოს პაროლი  Moodle-ში შემდეგი შემოსვლისას';
$string['forcechangepasswordfirst_help'] = 'მომხმარებლის იძულება შეცვალოს პაროლი  Moodle-ში პირველი შემოსვლისას';
$string['guestloginbutton'] = 'სტუმრის შემოსვლის ღილაკი';
$string['instructions'] = 'ინსტრუქციები';
$string['md5'] = 'MD5 კოდირება';
$string['plaintext'] = 'უბრალო ტექსტი';
$string['showguestlogin'] = 'შეგიძლიათ აჩვენოთ ან დამალოთ შემოსასვლელ გვერდზესტუმრის შემოსვლის ღილაკი.';
$string['stdchangepassword'] = 'პაროლის შეცვლის სტანდარტული გვერდის გამოყენება';
$string['stdchangepassword_expl'] = 'თუ გარე აუტენტიფიკაციის სისტემა იძლევა პაროლის გამოცვლის საშუალებას Moodle-ის მეშვეობით, მაშინ ჩართეთთ ”დიახ”. ეს სეთინგი აგარიდებთ ’პაროლის გამოცვლის ბმულს’. ';
$string['stdchangepassword_explldap'] = 'შენიშვნა: რეკომენდირებულია SSL კოდირების გვირაბისათვის (ldaps://)  LDAP-ის გამოყენება, თუ LDAP სერვერი არის მოშორებითი.';

?>
