<?PHP // $Id$ 
      // xmldb.php - created with Moodle 1.9.4 (Build: 20090128) (2007101540)
      // local modifications from http://free.icyber.co.za


$string['aftertable'] = 'After Table:';
$string['back'] = 'Emumva';
$string['backtomainview'] = 'Buyela ekuqaleni';
$string['binaryincorrectlength'] = 'i lenght okungeyona ye binary field';
$string['butis'] = 'Kodwa ku';
$string['cannotuseidfield'] = 'Ngeke ufake i \"id\" field. Iyi autonumeric column';
$string['change'] = 'Sitsha';
$string['charincorrectlength'] = 'I length okungeyona ye char field';
$string['check_bigints'] = 'Bheka i DB integers engalungile';
$string['check_defaults'] = 'Look for inconsistent default values';
$string['check_indexes'] = 'Bheka ama DB indexes angekho';
$string['checkbigints'] = 'Bheka i Bigints';
$string['checkdefaults'] = 'Bheka ama Defaults';
$string['checkindexes'] = 'Bhaka ama indexes';
$string['completelogbelow'] = 'Bheka i log ephelele yokucinga ngezansi';
$string['confirmcheckbigints'] = 'This functionality will search for <a href=\"http://tracker.moodle.org/browse/MDL-11038\">potential wrong integer fields</a> in your Moodle server, generating (but not executing!) automatically the needed SQL statements to have all the integers in your DB properly defined.<br /><br />
Once generated you can copy such statements and execute them safely with your favourite SQL interface (don\'t forget to backup your data before doing that).<br /><br />
It\'s highly recommended to be running the latest (+ version) available of your Moodle release (1.8, 1.9, 2.x ...) before executing the search of wrong integers.<br /><br />
This functionality doesn\'t perform any action against the DB (just reads from it), so can be safely executed at any moment.
confirmcheckbigints';
$string['confirmcheckdefaults'] = 'This functionality will search for inconsistent default values in your Moodle server, generating (but not executing!) the needed SQL statements to have all the default values properly defined.<br /><br />
Once generated you can copy such statements and execute them safely with your favourite SQL interface (don\'t forget to backup your data before doing that).<br /><br />
It\'s highly recommended to be running the latest (+ version) available of your Moodle release (1.8, 1.9, 2.x ...) before executing the search of wrong integers.<br /><br />
This functionality doesn\'t perform any action against the DB (just reads from it), so can be safely executed at any moment.
confirmcheckdefaults';
$string['confirmcheckindexes'] = 'This functionality will search for potential missing indexes in your Moodle server, generating (but not executing!) automatically the needed SQL statements to keep everything updated.<br /><br />
Once generated you can copy such statements and execute them safely with your favourite SQL interface (don\'t forget to backup your data before doing that).<br /><br />
It\'s highly recommended to be running the latest (+ version) available of your Moodle release (1.8, 1.9, 2.x ...) before executing the search of missing indexes.<br /><br />
This functionality doesn\'t perform any action against the DB (just reads from it), so can be safely executed at any moment.
confirmcheckindexes';
$string['confirmdeletefield'] = 'Unesiqiniseko sokuthi ufuna ukususa le field';
$string['confirmdeleteindex'] = 'Unesiqiniseko sokuthi ufuna ukususa le index.';
$string['confirmdeletekey'] = 'Unesiqiniseko sokuthi ufuna ukususa le key.';
$string['confirmdeletesentence'] = 'Unesiqiniseko sokuthi ufuna ukususa lomugqa';
$string['confirmdeletestatement'] = 'Unesiqiniseko sokuthi ufuna ukususa lestatimende';
$string['confirmdeletetable'] = 'Unesiqiniseko sokuthi ufuna ukususa le table';
$string['confirmdeletexmlfile'] = 'Unesiqiniseko sokuthi ufuna ukususa lelifayela';
$string['confirmrevertchanges'] = 'Unesiqiniseko sokuthi ufuna ukukwenza izinguquko';
$string['create'] = 'Yakha';
$string['createtable'] = 'Yakha i table';
$string['defaultincorrect'] = 'I default okungeyona';
$string['delete'] = 'Susa';
$string['delete_field'] = 'Susa le field';
$string['delete_index'] = 'Susa le index';
$string['delete_key'] = 'Susa lokhiya';
$string['delete_sentence'] = 'Susa lomugqa';
$string['delete_statement'] = 'Susa istatimende';
$string['delete_table'] = 'Susa i table';
$string['delete_xml_file'] = 'Susa ifayela le XML';
$string['down'] = 'Phansi';
$string['duplicate'] = 'Khanda okunye';
$string['duplicatefieldname'] = 'Enye ifield enegama elifana nayo ikhona';
$string['edit'] = 'Lungisa';
$string['edit_field'] = 'Lungisa le field';
$string['edit_index'] = 'Lungisa le index';
$string['edit_key'] = 'Lungisa lokhiye';
$string['edit_sentence'] = 'Lungisa lomugqa';
$string['edit_statement'] = 'Lungisa istatimende';
$string['edit_table'] = 'Lungisa i table';
$string['edit_xml_file'] = 'Lungisa ifayela le  XML';
$string['enumvaluesincorrect'] = 'Incorrect values for enum field';
$string['field'] = 'Field';
$string['fieldnameempty'] = 'Igama le field alinalutho';
$string['fields'] = 'Fields';
$string['filenotwriteable'] = 'Ifayela alibhaleki kabusha';
$string['floatincorrectdecimals'] = 'Incorrect number of decimals for float field';
$string['floatincorrectlength'] = 'Incorrect length for float fieldH';
$string['gotolastused'] = 'Hamba uye kuyifayela lokugcina elisetshenzisiwe';
$string['incorrectfieldname'] = 'Igama okungelona';
$string['index'] = 'Index';
$string['indexes'] = 'Indexes';
$string['integerincorrectlength'] = 'Incorrect length for integer field';
$string['key'] = 'Ukhiye';
$string['keys'] = 'Okhiye';
$string['listreservedwords'] = 'List of Reserved Words<br />(used to keep <a href=\"http://docs.moodle.org/en/XMLDB_reserved_words\" target=\"_blank\">XMLDB_reserved_words</a> updated)';
$string['load'] = 'Umthwalo';
$string['main_view'] = 'Main View';
$string['missing'] = 'Kuyashoda';
$string['missingfieldsinsentence'] = 'Kunafields angekho kulomugqa';
$string['missingindexes'] = 'Ama indexes abengekho atholakele';
$string['missingvaluesinsentence'] = 'Kunama values angekho kulo mugqa';
$string['mustselectonefield'] = 'Kumele ukhethe i field eyodwa ukuze ubone okunye okwenziwa yi field';
$string['mustselectoneindex'] = 'Kumele ukhethe i index eyodwa ukuze ubone okwenzewa index';
$string['mustselectonekey'] = 'Kumele ukhethe ukhiye owodwa ukuze ubone okwenziwa ukhiye';
$string['mysqlextracheckbigints'] = 'Under MySQL it also looks for incorrectly signed bigints, generating the required SQL to be executed in order to fix all them';
$string['new_statement'] = 'Isitatimende esisha';
$string['new_table_from_mysql'] = 'New Table From MySQL';
$string['newfield'] = 'Ifield etsha';
$string['newindex'] = 'I index etsh';
$string['newkey'] = 'Ukhiye omusha';
$string['newsentence'] = 'Umugqa omusha';
$string['newstatement'] = 'Istatimende esisha';
$string['newtable'] = 'I table elisha';
$string['newtablefrommysql'] = 'New Table From MySQL';
$string['nomissingindexesfound'] = 'Awekho ama indexes atholakele,i DB yakho ayidingi okunye ukwenziwa';
$string['nowrongdefaultsfound'] = 'No inconsistent default values have been found, your DB does not need further actions.';
$string['nowrongintsfound'] = 'Awekho ama integers atholakalayo,i DB yakho ayidingi okunye ukwenziwa.';
$string['numberincorrectdecimals'] = 'Inombolo okungeyona yama decimals eyonombolo ye field';
$string['numberincorrectlength'] = 'Incorrect length for number field';
$string['reserved'] = 'Kubekiwe okuthile';
$string['reservedwords'] = 'Amagama abekelwe okuthile';
$string['revert'] = 'Revert';
$string['revert_changes'] = 'Revert Changes';
$string['save'] = 'Gcina';
$string['searchresults'] = 'Cinga imiphumela';
$string['selectaction'] = 'Khetha okonzalayo';
$string['selectdb'] = 'Khetha i database';
$string['selectfieldkeyindex'] = 'Khetha i field/Ukhiye/Index';
$string['selectonecommand'] = 'Sicela,khetha isenzakalo ohlelweni ukuze ubuke i PHP code';
$string['selectonefieldkeyindex'] = 'Sicela, khetha i field/ukhiye/index eyodwa ohlelweni ukuze ubuke i PHP code';
$string['selecttable'] = 'Kheta i table';
$string['sentences'] = 'Imisho';
$string['shouldbe'] = 'Kumele kube';
$string['statements'] = 'Izitatimende';
$string['statementtable'] = 'Isitatimende se table:';
$string['statementtype'] = 'Uhlobo lwestatimende:';
$string['table'] = 'Table';
$string['tables'] = 'tables';
$string['test'] = 'Test';
$string['textincorrectlength'] = 'Incorrect length for text field';
$string['unload'] = 'Thula umthwalo';
$string['up'] = 'Phezulu';
$string['view'] = 'Bheka';
$string['view_reserved_words'] = 'Bheka amagama abakiwe';
$string['view_structure_php'] = 'Bheka istructure sePHP';
$string['view_structure_sql'] = 'Bheka istructure seSQL';
$string['view_table_php'] = 'Bheka i table PHP';
$string['view_table_sql'] = 'Bheka i table SQL';
$string['viewedited'] = 'Bheka okulungisiwe';
$string['vieworiginal'] = 'Bheka i original';
$string['viewphpcode'] = 'Bheka i PHP code';
$string['viewsqlcode'] = 'Bheka i SQL';
$string['wrong'] = 'Akulungili';
$string['wrongdefaults'] = 'I defaults engalungile itholakele';
$string['wrongints'] = 'Ama integers angalungile atholakele';
$string['wronglengthforenum'] = 'Incorrect length for enum field';
$string['wrongnumberoffieldsorvalues'] = 'Incorrect number of fields or values in sentence';
$string['wrongreservedwords'] = 'Currently Used Reserved Words<br />(note that table names aren\'t important if using $CFG->prefix)';
$string['yesmissingindexesfound'] = 'Some missing indexes have been found in your DB. Here are their details and the needed SQL statements to be executed with your favourite SQL interface to create all them (don\'t forget to backup your data before doing that).<br /><br />After doing that, it\'s highly recommended to execute this utility again to check that no more missing indexes are found.';
$string['yeswrongdefaultsfound'] = 'Some inconsistent defaults have been found in your DB. Here are their details and the needed SQL statements to be executed with your favourite SQL interface to fix them all (don\'t forget to backup your data before doing that).<br /><br />After doing that, it\'s highly recommended to execute this utility again to check that no more iconsistent defaults are found.';
$string['yeswrongintsfound'] = 'Some wrong integers have been found in your DB. Here are their details and the needed SQL statements to be executed with your favourite SQL interface to create all them (don\'t forget to backup your data before doing that).<br /><br />After doing that, it\'s highly recommended to execute this utility again to check that no more wrong integers are found.';

?>
