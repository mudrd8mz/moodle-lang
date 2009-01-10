<?php // $Id$

$string['addconfigprefix'] = 'Ajouter le préfixe au fichier de configuration';
$string['all'] = 'TOUT';
$string['confignonwritable'] = 'Le fichier <i>config.php</i> n\'est pas accessible en écriture par le serveur web. Veuillez modifier ses permissions ou le modifier à partir d\'un compte adéquat, en ajoutant la ligne suivante avant la balise php terminale&nbsp;: <br />\$CFG->unittestprefix = \'tst_\' // Change tst_ to a prefix of your choice, different from \$CFG->prefix';
$string['deletingnoninsertedrecord'] = 'Tentative de suppression d\'un enregistrement n\'ayant pas été inséré par ces tests unitaires (id $a->id dans la table $a->table).';
$string['deletingnoninsertedrecords'] = 'Tentative de suppression d\'enregistrements n\'ayant pas été insérés par ces tests unitaires (de la table $a->table).';
$string['droptesttables'] = 'Supprimer les tables de tests';
$string['exception'] = 'Exception';
$string['fail'] = 'Échec';
$string['ignorethisfile'] = 'Relancer les tests unitaires en ignorant ce fichier de test.';
$string['ignorefile'] = 'Ignorer les tests de ce fichier';
$string['installtesttables'] = 'Installer les tables de tests';
$string['moodleunittests'] = 'Tests unitaires Moodle&nbsp;: $a';
$string['notice'] = 'Remarque';
$string['onlytest'] = 'Ne lancer que les tests unitaires de';
$string['pass'] = 'Succès';
$string['pathdoesnotexist'] = 'Le chemin «&nbsp;$a&nbsp;» n\'existe pas.';
$string['prefix'] = 'Préfixe des tables de tests unitaires';
$string['prefixnotset'] = 'Le préfixe des tables de tests unitaires n\'est pas renseigné. Veuillez remplir et envoyer ce formulaire pour l\'ajouter à votre fichier config.php.';
$string['reinstalltesttables'] = 'Réinstaller les tables de tests';
$string['retest'] = 'Relancer les tests';
$string['retestonlythisfile'] = 'Relancer uniquement ce fichier de test.';
$string['runall'] = 'Lancer les tests de tous les fichiers de test.';
$string['runat'] = 'Lancer à $a. ';
$string['runonlyfile'] = 'Ne lancer que les tests de ce fichier';
$string['runonlyfolder'] = 'Ne lancer que les tests de ce dossier';
$string['runtests'] = 'Lancer les tests';
$string['rununittests'] = 'Lancer les tests unitaires';
$string['showpasses'] = 'Afficher les tests réussis en plus des échecs.';
$string['showsearch'] = 'Afficher la recherche des fichiers de test.';
$string['stacktrace'] = 'Trace de la pile&nbsp;:';
$string['summary'] = '{$a->run}/{$a->total} tests terminés&nbsp;: <strong>{$a->passes}</strong> tests passés, <strong>{$a->fails}</strong> échecs et <strong>{$a->exceptions}</strong> exceptions.';
$string['tablesnotsetup'] = 'Les tables de tests unitaires ne sont pas présentes. Voulez-vous les créer maintenant&nbsp;?.';
$string['testdboperations'] = 'Test des opérations sur la base de données';
$string['testtablescsvfileunwritable'] = 'Le fichier CSV des tables de test n\'est pas accessible en écriture ($a->filename)';
$string['testtablesneedupgrade'] = 'Les tables de tests de la base de données doivent être mises à jour. Voulez-vous effectuer maintenant la mise à jour&nbsp;?';
$string['testtablesok'] = 'Les tables de tests ont été installées correctement dans la base de données.';
$string['thorough'] = 'Lancer un test exhaustif (peut être lent).';
$string['unittestprefixsetting'] = 'Préfixe des tests unitaires&nbsp;: <strong>$CFG->unittestprefix</strong> (veuillez modifier le fichier <i>config.php</i> pour changer ce préfixe).';
$string['unittests'] = 'Tests unitaires';
$string['uncaughtexception'] = 'Exception non traitée [{$a->getMessage()}] dans [{$a->getFile()}:{$a->getLine()}]&nbsp;: TESTS INTERROMPUS.';
$string['updatingnoninsertedrecord'] = 'Tentative de modification d\'un enregistrement n\'ayant pas été inséré par ces tests unitaires (id $a->id dans la table $a->table).';
$string['version'] = 'Utilise <a href=\"http://sourceforge.net/projects/simpletest/\">SimpleTest</a> version $a. ';

?>