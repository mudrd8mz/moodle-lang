<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Mēnā e pīrangi ana koe ki te whakamahi i te bind-user ki te rapu i ngā kaiwhakamahi, whakapūtāhia ki konei.  Hei tauira \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Kupuhipa mō te bind-user';
$string['auth_ldap_bind_settings'] = 'Ngā tautuhinga Bind';
$string['auth_ldap_contexts'] = 'Rārangi o ngā horopaki e nōhia ana e ngā kaiwhakamahi.  Whakawehea ngā horopaki ki te \';\'. Hei tauira \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ki te whakahohea e koe te waihanga kaiwhakamahi mā te īmēra whakaū, whakapūtāhia te horopaki e hanga nei ngā kaiwhakamahi.  Me rerekē hoki tēnei horopaki i ētahi atu kaiwhakamahi kia noho haumaru tonu ai.  Kāore he take o te tāpiri i tēnei horopaki ki ldap_context-variable, te take, ka rapu aunoa a Moodle i ngā kaiwhakamahi i ahu mai i tēnei horopaki.<br /><b>Kia mōhio mai!</b> Me whakakē te pūmahinga auth_user_create() i roto i te kōnae auth/ldap/lib.php kia oti tika ai te waihanga kaiwhakamahi';
$string['auth_ldap_creators'] = 'Rārangi o ngā rōpū e āhei ana āna mema ki te waihanga i ngā pū akoranga hōu. Whakawehea ngā rōpū-maha ki te \';\'. Hei tauira \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Tīpakohia Tau kia mono ai i te Takinga o ngā kupuhipa kua pau, i te LDAP rānei kia taea te wā pau kupuhipa te pānui tōtika mai i te LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Tau o ngā rangi mō mua i te tukunga o te whakatupatoranga mō te paunga o te wā kupuhipa.';
$string['auth_ldap_expireattr_desc'] = 'Kōwhiringa Noa: turakina ai te huanga-LDAP e pupuru ana i ngā wā paunga kupuhipa. passwordExpirationTime';
$string['auth_ldap_graceattr_desc'] = 'Kōwhiringa Noa: Turakinga huanga takiurukerēhi';
$string['auth_ldap_gracelogins_desc'] = 'Whakahohe tautoko LDAP takiurukerēhi.  A muri ake i te paunga o te kupuhipa ka taea tonu e te kaiwhakamahi te takiuru kia 0 te tatau takiurukerēhi.  Ki te whakahohea tēnei tautuhinga, ka whakaaturia te karere takiuru kerēhi inā pau te wā kupuhipa.';
$string['auth_ldap_host_url'] = 'Whakapūtāhia te kaihautū LDAP i roto i te hanga-URL pēnei ake i te \'ldap://ldap.myorg.com/\', \'ldaps://ldap.myorg.com/\' rānei.  Whakawehea ngā tūmau-maha ki te \';\' kia whiwhi ai ki te tautoko hinga.';
$string['auth_ldap_login_settings'] = 'Ngā Tautuhinga Takiuru';
$string['auth_ldap_memberattribute'] = 'Kōwhiringa Noa: Turakina ai te huanga mema kaiwhakamahi, inā kei roto te kaiwhakamahi i tētahi rōpū.  Ko \'Mema\' i te nuinga o te wā.';
$string['auth_ldap_objectclass'] = 'Kōwhiringa Noa: Turakina ai te tūemiTūmomo e whakamahia ana ki te rapu/whakaingoa i ngā kaiwhakamahi i runga i ldap_user_type.  I te nuinga o te wā kāore he take o te whakarerekē i tēnei.';
$string['auth_ldap_opt_deref'] = 'Whakaritea te whakahaeretanga o ngā ingoakē i te rapunga.  Tīpakohia tētahi o ngā uara e whai ake nei: \"Kāo\" (LDAP_DEREF_NEVER) or \"Āe\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'Ngā Tautuhinga Paunga Kupuhipa LDAP';
$string['auth_ldap_preventpassindb'] = 'Tīpakohia Āe kia kore ai ngā kupuhipa e pupurutia i roto i te PR o Moodle.';
$string['auth_ldap_search_sub'] = 'Rapua ngā kaiwhakamahi mai i ngā horopakiroto';
$string['auth_ldap_server_settings'] = 'Ngā Tautuhinga Tūmau LDAP';
$string['auth_ldap_update_userinfo'] = 'Whakahōungia te mōhiohio kaiwhakamahi (ingoatuatahi, ingoawhānau, wāhitau..) mai i a LDAP ki Moodle. Whakapātāhia ngā tautuhinga \"Whakamahere raraunga\" inā hiahiatia ana.';
$string['auth_ldap_user_attribute'] = 'Kōwhiringa Noa: Turakina ai te huanga e whakaingoa/rapu ana i ngā kaiwhakamahi. Ko \'cn\' i te nuinga o te wā.';
$string['auth_ldap_user_settings'] = 'Ngā Tautuhinga Rapu Kaiwhakamahi';
$string['auth_ldap_user_type'] = 'Tīpakohia te momo penapena o ngā kaiwhakamahi ki roto i a LDAP.  Whakapūtāhia ai hoki e tēnei tautuhinga te mahinga o te paunga takiurunga, ngā takiurunga kerēhi, me te waihanga kaiwhakamahi.';
$string['auth_ldap_version'] = 'Ko te putanga o te kawa LDAP e whakamahia nei e tō tūmau.';
$string['auth_ldapdescription'] = 'Ko tā tēnei aratuka he whakamotuhēhē ki tētahi tūmau LDAP ā-waho.<br> Mēnā he whaimana te ingoakaiwhakamahi/kupuhipa, ka waihangatia e Moodle tētahi tāurunga kaiwhakamahi hōu i roto i tana pētangi raraunga.  Ka taea e tēnei kōwae ngā huanga kaiwhakamahi te pānui mai i ngā LDAP me ngā āpure whakakī-ā-mua e hiahiatia ana i roto i a Moodle.';
$string['auth_ldapextrafields'] = 'He kōwhiringa noa iho ēnei āpure. Ka taea e koe ētahi āpure kaiwhakamahi o Moodle te whakakī-ā-mua ki ngā mōhiohio mai i <b>Ngā āpure LDAPs</b> e whakapūtāhia nei e koe. <p>Ki te waiho ēnei kia pātea tonu, kāore tētahi mea e whakawhitihia mai i LDAP, ā, ka whakamahi kētia ngā taunoa o Moodle.</p><p>Ahakoa, ka taea tonu e te kaiwhakamahi ēnei āpure katoa te whakarerekē a mrui i te takiurunga.</p>';
$string['auth_ldaptitle'] = 'Whakamahia he tūmau LDAP';