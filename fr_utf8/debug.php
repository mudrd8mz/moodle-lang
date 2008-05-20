<?php // $Id$
/*
 * debug information for developer only
 */
$string['authpluginnotfound'] = 'Méthode d\'authentification $a introuvable.';
$string['cannotbenull'] = '$a ne peut pas être nul&nbsp;!';
$string['cannotcreateadminuser'] = 'ERREUR GRAVE&nbsp;! Impossible de créer un compte administrateur&nbsp;!';
$string['cannotdowngrade'] = 'Impossible de revenir à $a[0] vers $a[1].';
$string['cannotfindadmin'] = 'Impossible de trouver un administrateur&nbsp;!';
$string['cannotinitpage'] = 'Impossible d\'initialiser totalement la page&nbsp;: $a[0] non valide, identifiant $a[1]';
$string['cannotsetupsite'] = 'Erreur grave&nbsp;! Impossible de mettre en place le site&nbsp;!';
$string['cannotupdaterelease'] = 'Erreur&nbsp;: impossible de mettre à jour la version dans la base de données&nbsp;!!';
$string['cannotupdateversion'] = 'Échec de la mise à jour&nbsp;! (Impossible de mettre à jour la version dans la table config)';
$string['cannotupgradecapabilities'] = 'Problèmes lors de la mise à jour des capacités centrales du systèmes des rôles';
$string['cannotupgradedbcustom'] = 'Échec de la mise à jour des particularités locales de la base de données&nbsp;! (Impossible de mettre à jour la version dans la table config)';
$string['configmoodle'] = 'Moodle n\'a pas encore été configuré. Vous devez avant tout écrire le fichier config.php.';
$string['dbnotinsert'] = 'Erreur de base de données - Insertion impossible ($a)';
$string['dbnotsetup'] = 'Erreur&nbsp;: la base de données principale <b>n\'a pas été mise en place</b> correctement';
$string['dbnotsupport'] = 'Erreur&nbsp;: votre base de données ($a) n\'est pas totalement supportée par Moodle ou le fichier install.xml n\'est pas présent. Voyez dans le dossier lib/db.';
$string['dbnotupdate'] = 'Erreur de base de données - Modification impossible ($a)';
$string['doesnotworkwitholdversion'] = 'Ce script ne fonctionne pas avec cette ancienne version de Moodle';
$string['erroroccur'] = 'Une erreur est survenue durant cette procédure';
$string['fixsetting'] = 'Veuillez corriger vos réglages dans le fichier config.php. <p>Vous avez&nbsp;:</p> <p>\$CFG->dirroot = \"$a[0]\";</p> <p>alors qu\'il devrait y avoir</p> <p>\$CFG->dirroot = \"$a[1]\"</p>';
$string['invalidarraysize'] = 'Taille incorrecte des tableaux dans les paramètres de $a';
$string['invalideventdata'] = 'Données d\'événement incorrecte&nbsp;: $a';
$string['morethanonerecordinfetch'] = 'Plus d\'un enregistrement trouvé dans fetch()&nbsp;!';
$string['mustbeoveride'] = 'La méthode abstraite $a doit être surchargée.';
$string['noactivityname'] = 'L\'objet de page est dérivé de page_generic_activity mais ne définit pas $this->activityname';
$string['noadminrole'] = 'Aucun rôle administrateur trouvé';
$string['noblockbase'] = 'La classe block_base n\'est pas définie ou le fichier pour /blocks/moodleblock.class.php n\'a pas été trouvé';
$string['noblocks'] = 'Aucun bloc installé&nbsp;!';
$string['nocaps'] = 'Erreur&nbsp;: aucune capacité définie&nbsp;!';
$string['nomodules'] = 'Aucun module trouvé&nbsp;!';
$string['nopageclass'] = '$a a été importé, mais aucune classe de page n\'a été trouvée';
$string['noreports'] = 'Aucun rapport accessible';
$string['notables'] = 'Pas de tables&nbsp;!';
$string['phpvaroff'] = 'La variable «&nbsp;$a[0]&nbsp;» du serveur PHP devrait être sur Off - $a[1]';
$string['phpvaron'] = 'La variable «&nbsp;$a[0]&nbsp;» du serveur PHP n\'set pas sur On - $a[1]';
$string['prefixcannotbeempty'] = 'Le préfixe des tables «&nbsp;$a[0]&nbsp;» ne peut pas être vite avec ce type de base de données ($a[1])'; // Obsolète dès la version 2.0
$string['prefixlimit'] = 'La longueur maximale du préfixe des tables «&nbsp;$a[0]&nbsp;» dans les bases de données Oracle est de 2 caractères.'; // Obsolète dès la version 2.0
$string['sessionmissing'] = 'L\'objet de session $a n\'est pas présent dans la session';
$string['siteisnotdefined'] = 'Le site n\'est pas défini&nbsp;!';
$string['sqlrelyonobsoletetable'] = 'Ce code SQL présuppose des tables obsolètes&nbsp;: $a&nbsp;! Votre code doit être corrigé par un développeur.';
$string['upgradefail'] = 'Échec de la mise à jour&nbsp;! Voir $a';
$string['withoutversion'] = 'Le fichier principal version.php n\'set pas accessible';

?>
