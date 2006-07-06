<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.4.3 + (2004083131)


$string['description'] = '<p>Teke lava pe \'o ngaue\'aki ha seeva LDAP ke pule\'i ho\'o ngaahi \'enilolomeni.  
                          \'Oku mahalo\'i ko ho\'o \'akau LDAP \'oku tauhi ai e ngaahi kulupu \'oku mape\'i ki he ngaahi koosi, pea koe taha kotoa \'oe kulupu/koosi \'e ma\'u memipa ke nau hu ki he mape \'oe kau Sitiuteni.</p>
                          <p> \"oku mahalo\'i koe ngaahi koosi \'oku fakamatala\'i koe ngaahi kulupu \'ihe LDAP, moe kulupu kotoa pe \'oku \'iai \'enau ngaahi mala\'e memipa (<em> memipa</em> pe <em>memipaUid</em>) \'oku tauhi ai e faka\'ilonga mavahe \'oe \'iusa. </p> 
<p>  Ke ngaue\'aki e LDAP enilolomeni, ko ho\'o kau \'iusa <malohi>malohi</malohi> ke ma\'u ha mala\'e fikaID toton. 
Kuo pau ke ma\'u \'ehe ngaahi kulupu LDAP \'ae fikaId koia \'i he ngaahi ma;a\'e memipa kae lava ha iusa \'o \'enilolo \'ihe koosi.
                          \'E lava \'o ngaue lelei \'eni kapau ;oku ke \'osi ngaue\'aki LDAP \'aee kuo \'osi fakapapau\'i.</p>
                          <p>\'E \'apu-teiti e ngaahi \'enilolomeni \'i he taimi koee \'e loka mai ai e \'iusa.
Teke lava pe foki \'o \'ai ha sikulipi ke fakatatau pe ki he \'enilolomeni. Vakai ki he 
                          <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
                          <p>\'E lava pe foki \'o seti e palaki-ini ko \'eni kene fakatupu \'otometiki pe ha ngaahi koosi fo\'ou \'iha taimi \'e asi ai ha ngaahi kulupu fo\'ou \'ihe LDAP.</p>';
$string['enrol_ldap_autocreate'] = '\'E Lava pe \'o fakatupu \'otometiki pe ha ngaahi koosi kapau \'oku iai ha ngaahi \'enilolomeni ki ha koosi \'oku te\'eki ai ke \'asi \'i he Mutolo.';
$string['enrol_ldap_autocreation_settings'] = 'Koe ngaahi setingi ki hono fakatupu \'otometiki e koosi';
$string['enrol_ldap_bind_dn'] = 'Kapau \'oku ke loto ke ngaue\'aki ha \'iusa-fakalukufua ke fekumi kiha kau \'iusa, fakamahino\'i ia heni. Hangee ko \'eni 
                                 \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Paasi-ueeti ki he \'iusa fakalukufua.';
$string['enrol_ldap_category'] = 'Koe fa\'ahinga \'oe ngaahi koosi fakatupu-\'otometiki.';
$string['enrol_ldap_course_fullname'] = 'Fa\'itliha pe: koe mala\'e LDAP \'e ma\'u mei ai e hingoa kakato. ';
$string['enrol_ldap_course_idnumber'] = 'Koe mape ki eh me\'a fakahinohino makehe \'ihe LDAP, anga maheni
                                         <em>cn</em> or <em>uid</em>. \'Oku fale\'i koe heni keke loka e mahu\'inga, kapau \'oku ke ngaue\'aki ha koosi fakatupu \'otometiki. ';
$string['enrol_ldap_course_settings'] = 'Ngaahi setingi koosi \'enilolomeni';
$string['enrol_ldap_course_shortname'] = 'Fa\'iteliha pe:  koe mala\'e LDAP \'e ma\'u mei ai e hingoa nounou. ';
$string['enrol_ldap_course_summary'] = 'Fa\'iteliha pe:  koe mala\'e LDAP  \'e ma\'u mei ai e foomu samalii.';
$string['enrol_ldap_editlock'] = 'Mahu\'inga \'oe loka';
$string['enrol_ldap_host_url'] = 'Koe fakamatala \'oe LDAP housi \'ihe URL-foomu hangee koe 
                                  \'ldap://ldap.myorg.com/\' 
                                  or \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = ' \'Oku ngaue\'ak e Kalasi\'Opuseki ke fekumi ki he ngaahi koosi. Angamaheni
                                     \'posixGroup\'.';
$string['enrol_ldap_server_settings'] = 'Ngaahi setingi seeva LDAP ';
$string['enrol_ldap_student_contexts'] = 'Koe lisi \'oe ngaahi Konitekisi \'aia \'e lava \'o \'ilo ai e ngaahi \'enilolomeni \'ae ngaahi kulupu mo \'enau faiako. Vahevahe\'i e konitekisi kehekehe aki \';\'. Fakataataa\'aki eni: 
                                          \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = '\'E lava pe \'o tala ha memipa, Kapau \'e (\'enilolo)kau e \'iusa ki ha kulupu. Angamaheni \'memipa\' pe \'memipaUiD\'.';
$string['enrol_ldap_student_settings'] = 'Koe ngaahi setingi enilolo \'ae fanauako';
$string['enrol_ldap_teacher_contexts'] = 'Koe lisi \'oe ngaahi Konitekisi \'aia \'e lava \'o \'ilo ai e ngaahi \'enilolomeni \'ae ngaahi kulupu mo \'enau faiako. Vahevahe\'i e konitekisi kehekehe aki \';\'. Fakataataa\'aki eni: 
                                          \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = '\'E lava pe \'o tala ha memipa, Kapau \'e (\'enilolo)kau e \'iusa ki ha kulupu. Angamaheni \'memipa\' pe \'memipaUiD\'.';
$string['enrol_ldap_teacher_settings'] = 'Koe ngaahi setingi enilolo \'ae faiako';
$string['enrol_ldap_template'] = 'Fa\'iteliha pe:\'E lava pe \'ehe koosi kuo fakatupu-\'otometiki \'o kopi \'e nau ngaahi setingi meiha koosi temipeleti.';
$string['enrol_ldap_updatelocal'] = '\'Aputeiti e teita fakalookolo';
$string['enrol_ldap_version'] = 'Koe kalasi \'oe fakahinohino LDAP \'oku ngaue\'aki \'e ho\'o seeva.';
$string['enrolname'] = 'LDAP';

?>
