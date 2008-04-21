<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.8.2+ (2007021520)


$string['description'] = '<p>Gallwch ddefnyddio gweinydd LDAP i reoli eich cofrestriadau.  
Tybir bod eich coeden LDAP yn cynnwys grwpiau sy\'n mapio i\'r 
cyrsiau, ac y bydd gan bob un o\'r grwpiau/cyrsiau hynny 
gofnodion aelodaeth i\'w mapio i fyfyrwyr.</p>
Tybir bod cyrsiau\'n cael eu diffinio fel grwpiau yn 
LDAP, gyda nifer o feysydd aelodaeth i bob grŵp 
o\'r enw (<em>aelod</em> neu <em>id defnyddiwr aelod</em>) sy\'n cynnwys ffordd unigryw
o adnabod y defnyddiwr.</p>
<p>I ddefnyddio\'r broses cofrestru LDAP, <strong>rhaid</strong> i\'ch defnyddwyr 
fod â maes rhifid dilys. Rhaid i\'r grwpiau LDAP gynnwys 
y rhif id hwnnw yn y maes aelodau er mwyn cofrestru defnyddiwr ar y cwrs.
Bydd hyn yn gweithio\'n dda fel arfer os ydych chi eisoes yn defnyddio  
Dilysu LDAP.</p>
<p>Caiff cofrestriadau eu diweddaru pan fydd y defnyddiwr yn mewngofnodi. Gallwch 
hefyd redeg sgript i gysoni cofrestriadau drwy\'r amser. Edrychwch yn 
<em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Hefyd, gellir dewis bod yr ategyn hwn yn creu cyrsiau newydd yn  
awtomatig pan fydd grwpiau newydd yn ymddangos yn LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Gellir creu cyrsiau\'n awtomatig os ceir
cofrestriadau i gwrs nad yw\'n bodoli eto yn Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Gosodiadau ar gyfer creu cyrsiau\'n awtomatig';
$string['enrol_ldap_bind_dn'] = 'Os hoffech chi ddefnyddio\'r broses rhwymo defnyddwyr i chwilio am ddefnyddwyr, 
nodwch hynny yma. Rhywbeth fel 
\'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Cyfrinair ar gyfer rhwymo defnyddwyr.';
$string['enrol_ldap_category'] = 'Y categori ar gyfer cyrsiau sydd wedi\'u creu\'n awtomatig.';
$string['enrol_ldap_contexts'] = 'Cyd-destunau LDAP';
$string['enrol_ldap_course_fullname'] = 'Dewisol: Y maes LDAP i gael yr enw llawn ohono.';
$string['enrol_ldap_course_idnumber'] = 'Mapio i\'r dynodydd unigryw yn LDAP, fel arfer
<em>cn</em> neu <em>uid</em>. Argymhellir  
eich bod yn cloi\'r gwerth os ydych yn 
creu cyrsiau\'n awtomatig.';
$string['enrol_ldap_course_settings'] = 'Gosodiadau cofrestru ar gwrs';
$string['enrol_ldap_course_shortname'] = 'Dewisol: Y maes LDAP i gael yr enw byr ohono.';
$string['enrol_ldap_course_summary'] = 'Dewisol: Y maes LDAP i gael y crynodeb ohono.';
$string['enrol_ldap_editlock'] = 'Cloi gwerth';
$string['enrol_ldap_general_options'] = 'Dewisiadau Cyffredinol';
$string['enrol_ldap_host_url'] = 'Pennwch y gwesteiwr LDAP ar ffurf URL e.e.
\'ldap://ldap.myorg.com/\' 
neu \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_memberattribute'] = 'Priodoledd aelod LDAP';
$string['enrol_ldap_objectclass'] = 'Defnyddio objectClass i chwilio am gyrsiau. Fel arfer,
\'posixGroup\'.';
$string['enrol_ldap_roles'] = 'Mapio swyddogaethau';
$string['enrol_ldap_search_sub'] = 'Chwilio am aelodaeth grwpiau o is-gyd-destunau.';
$string['enrol_ldap_server_settings'] = 'Gosodiadau Gweinydd LDAP';
$string['enrol_ldap_student_contexts'] = 'Rhestr o gyd-destunau lle mae grwpiau gyda chofrestriadau
myfyrwyr wedi\'u lleoli. Rhowch \';\' rhwng y gwahanol gyd-destunau. Er enghraifft: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Priodoledd aelod, pan fydd defnyddwyr yn perthyn
i grŵp (wedi\'u cofrestru). Fel arfer, \'aelod\'
neu \'id aelod defnyddiwr\'.';
$string['enrol_ldap_student_settings'] = 'Gosodiadau cofrestru myfyrwyr';
$string['enrol_ldap_teacher_contexts'] = 'Rhestr o gyd-destunau lle mae grwpiau gyda chofrestriadau
athrawon wedi\'u lleoli. Rhowch \';\' rhwng y gwahanol gyd-destunau. Er enghraifft: 
\'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Priodoledd aelod, pan fydd defnyddwyr yn perthyn
i grŵp (wedi\'u cofrestru). Fel arfer, \'aelod\'
neu \'id aelod defnyddiwr\'.';
$string['enrol_ldap_teacher_settings'] = 'Gosodiadau cofrestru athrawon';
$string['enrol_ldap_template'] = 'Dewisol: gall cyrsiau a grëir yn awtomatig gopïo 
eu gosodiadau o gwrs templed.';
$string['enrol_ldap_updatelocal'] = 'Diweddaru data lleol';
$string['enrol_ldap_version'] = 'Fersiwn y protocol LDAP y mae eich gweinydd yn ei ddefnyddio.';
$string['enrolname'] = 'LDAP';

?>
