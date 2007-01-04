<?php // $Id$

$string['description'] = 'Description';
$string['mnet'] = 'Réseau Moodle';
$string['net'] = 'Réseau';
$string['requiresopenssl'] = 'La mise en réseau requiert l\'extension OpenSSL';
$string['yourhost'] = 'Votre hôte';
$string['yourpeers'] = 'Vos pairs';
$string['settings'] = 'Réglages';
$string['hostsettings'] = 'Réglages hôte';
$string['mnetpeers'] = 'Paires Réseau Moodle';
$string['mnetservices'] = 'Services Réseau Moodle';
$string['trustedhosts'] = 'Hôtes fiables';
$string['trustedhostsexplain'] = 'Veuillez saisir une liste d\'adresses IP ou de réseaux, une par ligne. Voici quelques exemples&nbsp;:<br />'.
'Votre serveur local&nbsp;:<br />'.
'127.0.0.1<br />'.
'Votre serveur local (avec un bloc réseau):<br />'.
'127.0.0.1/32<br />'.
'Uniquement le serveur d\'adresse IP 192.168.0.7&nbsp;:<br />'.
'192.168.0.7/32<br />'.
'N\'importe quel serveur avec une adresse IP entre 192.168.0.1 et 192.168.0.255&nbsp;:<br />'.
'192.168.0.0/24<br />'.
'N\'importe quel serveur&nbsp;:<br />'.
'192.168.0.0/0<br />'.
'Le dernier exemple n\'est pas une configuration recommandée.';

$string['currentkey'] = 'Clef publique actuelle';
$string['keymismatch'] = 'La clef publique que vous détenez pour cet hôte est différente de la clef qu\'il utilise actuellement.';
$string['invalidurl'] = 'Paramètre URL invalide.';
$string['expireyourkey'] = 'Supprimer cette clef';
$string['deletekeycheck'] = 'Voulez-vous vraiment supprimer cette clef&nbsp;?';
$string['expireyourkeyexplain'] = 'Moodle modifie automatiquement vos clef tous les 28 jours (par défaut), mais vous avez la possibilité de '.
'périmer <em>manuallement</em> cette clef en tout temps. Une telle opération n\'est utile que si vous pensez que '.
'la clef a été compromise. Une clef de remplacement sera immédiatement générée automatiquement.<br />'.
'La suppression de cette clef empêchera tous les autres serveurs Moodle de communiquer avec celui-ci jusqu\'à ce que '.
'contactiez manuallement leurs administrateurs et leur fournissiez votre nouvelle clef.';
$string['deleteoutoftime'] = 'Le temps de 60 secondes imparti pour la suppression de cette clef est échu. Veuillez recommencer.'; 
$string['deletewrongkeyvalue'] = 'Une erreur est survenue. Aucune action n\'a été effectuée. Si vous n\'étiez pas en train de supprimer la clef SSL de votre serveur, il est possible '.
'que vous ayez été la cible d\'une attaque.';

$string['keydeleted'] = 'Votre clef a été supprimée et remplacée.';

$string['is_in_range'] = 'L\'adresse IP <code>$a</code> représente un serveur fiable.';
$string['validated_by'] = 'Il a été validé par le réseau&nbsp;: <code>$a</code>';
$string['not_in_range'] = 'L\'adresse IP <code>$a</code> ne représente pas un serveur fiable.';

$string['testtrustedhosts'] = 'Tester une adresse IP';
$string['testtrustedhostsexplain'] = 'Saisissez une adresse IP pour voir s\'il s\'agit d\'un serveur fiable.';

$string['forbidden-function'] = 'Cette fonction n\'a pas été activée par RPC.';
$string['forbidden-transport'] = 'La méthode de transport que vous tentez d\'utiliser n\'est pas autorisée.';

$string['registerallhosts'] = 'Enregistrer tous les serveurs';
$string['registerallhostsexplain'] = 'Vous pouvez choisir d\'enregistrer tous les serveurs tentant de se connecter à votre Moodle. Cela signifie qu\'un enregistrement apparaîtra dans votre liste de serveur '.
'pour chaque site Moodle se connectant au vôtre et demandant votre clef publique.<br />'.
'Vous avez la possibilité de configurer ci-dessous les services accessibles pour «&nbsp;Tous les hôtes&nbsp;», ce qui vous permettra de fournir '.
'des services à tous les serveurs Moodle.';

$string['enabled_for_all'] = '(Ce service a été activé pour tous les hôtes).';
$string['nosuchfile'] = 'Le fichier/la fonction $a n\'existe pas.';
$string['nosuchfunction'] = 'Impossible de localiser la fonction ou fonction interdite par RPC.';
$string['nosuchmodule'] = 'La fonction n\'a pas été adressée correctement et n\'a pas pu être localisée.<br />Veuillez utiliser le format mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Impossible d\'obtenir la clef publique pour vérification de signature.';
$string['nosuchservice'] = 'Le service RPC n\'a pas été lancé sur ce serveur.';
$string['nosuchtransport'] = 'Aucun transport n\'existe avec cet identifiant.';

$string['phperror'] = 'Une erreur PHP interne a empêché l\'aboutissement de votre requête.';
$string['wrong-ip'] = 'Votre adresse IP ne correspond pas à l\'adresse que nous avons enregistrée.';

$string['verifysignature-error'] = 'La vérification de signature a échoué. Une erreur est survenue.';
$string['verifysignature-invalid'] = 'La vérification de signature a échoué. Il semble que votre envoi n\'a pas été signé par vous.';
$string['mnetsettings'] = 'Réglages Réseau Moodle';
$string['mnetservices'] = 'Services';
$string['mnetlog'] = 'Historiques';

$string['issubscribed'] = 'Le Moodle $a est abonné à ce service de votre serveur.';
$string['ispublished'] = 'Le Moodle $a a activé ce service pour vous.';
$string['version'] = 'version';
$string['id'] = 'ID';
$string['hostname'] = 'Nom d\'hôte';
$string['last_connect_time'] = 'Dernière connexion';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (signé)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (auto-signé)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (signé)';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (auto-signé)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP non crypté';
$string['remotehosts'] = 'Serveurs distants';
$string['permittedtransports'] = 'Transports autorisés';
$string['current_transport'] = 'Transport actuel';
$string['system'] = 'Système';
$string['on'] = 'Activé';
$string['off'] = 'Désactivé';
$string['strict'] = 'Strict';
$string['promiscuous'] = 'Espion';
$string['aboutyourhost'] = 'À propos de votre serveur';
$string['invalidhost'] = 'Vous devez fournir un identifiant serveur valable';

$string['moodleloc'] = 'Localisation du Moodle';
$string['addnewhost'] = 'Ajouter un nouveau serveur';
$string['addhost'] = 'Ajouter un serveur';

$string['never'] = 'Jamais';
$string['restore'] = 'Restaurer';
$string['warning'] = 'Avertissement';
$string['illegalchar-host'] = 'Votre nom d\'hôte comporte le caractère illégal $a';
$string['usersareonline'] = 'Attention&nbsp;! $a utilisateurs de ce serveur sont actuellement connectés à votre Moodle.';
$string['illegalchar-moodlehome'] = 'La localisation de votre Moodle comporte des caractères illégaux';

$string['nonmatchingcert'] = 'Le sujet du certificat&nbsp;: <br /><em>$a[0]</em><br />ne correspond pas au serveur d\'où il provient&nbsp;:<br /><em>$a[1]</em>.';
$string['noipmatch'] = 'L\'adresse du serveur distant&nbsp;: <br /><em>$a[0]</em><br />ne correspond pas à celle enregistrée&nbsp;:<br /><em>$a[1]</em>.';
$string['reviewhostdetails'] = 'Examiner les détails du serveur';
$string['reviewhostservices'] = 'Examiner les services du serveur';
$string['moodle_home_help'] = 'Le chemin vers la page d\'accueil de Moodle sur le serveur distant, par exemple /moodle/.';
$string['hostnamehelp'] = 'Le nom de domaine complet (FQDN) du serveur distant, par exemple www.exemple.fr';
$string['idhelp'] = 'Cette valeur est attribuée automatiquement et ne peut pas être modifiée';
$string['invalidpubkey'] = 'La clef n\'est pas une clef SSL valide.';
$string['nopubkey'] = 'Un problème est survenu lors de la récupération de la clef publique.<br />Il est possible que le serveur n\'accepte pas le Réseau Moodle ou que la clef ne soit pas valide.';
$string['last_connect_time_help'] = 'La date de votre dernière connexion à ce serveur.';
$string['last_transport_help'] = 'Le transport utilisé lors de votre dernière connexion à ce serveur.';
$string['transport_help'] = 'Ces options sont réciproques. Vous ne pouvez donc imposer à un serveur distant l\'utilisation d\'un certificat SSL signé que si votre serveur possède également un certificat SSL.';
$string['https_verified_help'] = 'Autoriser les connexions utilisant un certificat SSL vérifié sur le serveur distant.';

$string['http_self_signed_help'] = 'Autoriser les connexions utilisant un certificat DIY SSL auto-signé sur le serveur distant.';
$string['http_verified_help'] = 'Autoriser les connexions utilisant dans PHP un certificat SSL vérifié sur le serveur distant par http (pas https).';
$string['https_self_signed_help'] = 'Autoriser les connexions utilisant un certificat DIY SSL auto-signé sur le serveur distant par http.';
$string['hostexists'] = 'Un enregistrement de ce serveur et de cette installation de Moodle existe déjà avec l\'identifiant $a.<br />Cliquez sur <em>Continuer</em> pour modifier cet enregistrement.';
$string['publickey'] = 'Clef publique';
$string['publickey_help'] = 'La clef publique est obtenue automatiquement du serveur distant.';
$string['couldnotgetcert'] = 'Aucun certificat n\'a été trouvé sur <br />$a. <br />Le serveur est peut-être éteint ou incorrectement configuré.';
$string['ipaddress'] = 'Adresse IP';
$string['badcert'] = 'Ceci n\'est pas un certificat valide.';
$string['couldnotmatchcert'] = 'Ceci ne correspond pas au certificat publié actuellement par le serveur web.';
$string['forcesavechanges'] = 'Imposer la sauvegarde des modifications';

$string['serviceswepublish'] = 'Services publiés pour $a.';
$string['serviceswesubscribeto'] = 'Services sur $a auxquels nous sommes abonnés.';
$string['nohostid'] = 'Cette page requiert un identifiant de serveur, qui doit être un entier.';

$string['networksettings'] = 'Réglages réseau';
$string['helpnetworksettings'] = 'Configurer la communication inter-Moodle';
$string['mnet_concatenate_strings'] = 'Concaténer (jusqu\'à) 3 chaînes et retourner le résultat';
$string['notPEM'] = 'Cette clef n\'est pas en format PEM. Elle ne fonctionnera pas.';
$string['notBASE64'] = 'Cette chaîne n\'est pas en format Base64. Ce ne peut pas être une clef valide.';

$string['usercannotchangepassword'] = 'Vous ne pouvez pas changer votre mot de passe ici, car vous êtes un utilisateur distant.';
$string['userchangepasswordlink'] = '<br />Vous pourrez changer votre mot de passe chez votre fournisseur <a href=\"$a->wwwroot/login/change_password.php\">$a->description</a>.';

$string['remotehost'] = 'Hub distant';
$string['allow'] = 'Autoriser';
$string['deny'] = 'Interdire';
$string['addtoacl'] = 'Ajouter au contrôle d\'accès';
$string['accesslevel'] = 'Niveau d\'accès';
$string['ssoaccesscontrol'] = 'Contrôle d\'accès SSO';
$string['notpermittedtojump'] = 'Vous n\'êtes pas autorisé à initier une session à distance depuis ce hub Moodle.';
$string['notpermittedtoland'] = 'Vous n\'êtes pas autorisé à initier une session à distance.';
$string['authfail_nosessionexists'] = 'Échec d\'autorisation&nbsp;: la session mnet n\'existe pas.';
$string['authfail_sessiontimedout'] = 'Échec d\'autorisation&nbsp;: la session mnet est échue.';
$string['authfail_usermismatch'] = 'Échec d\'autorisation&nbsp;: l\'utilisateur ne correspond pas.';
$string['hostnotconfiguredforsso'] = 'Ce hub Moodle distant n\'est pas configuré pour l\'accès à distance.';
$string['authmnetdisabled'] = 'L\'authentification par Réseau Moodle est désactivée.';
$string['unknownerror'] = 'Une erreur inconnue est survenue durant la négociation.';
$string['nolocaluser'] = 'Aucun enregistrement local n\'existe pour cet utilisateur distant.';
$string['databaseerror'] = 'Impossible d\'écrire les détails dans la base de données.';

?>
