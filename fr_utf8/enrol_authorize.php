<?php // $Id$ 

$string['adminacceptccs'] = 'Quels types de carte de crédit sont acceptés&nbsp;?';
$string['adminauthorizeccapture'] = 'Contrôle des commandes & réglages de saisie programmée';
$string['adminauthorizeemail'] = 'Réglages d\'envoi de courriel';
$string['adminauthorizesettings'] = 'Réglages Authorize.net';
$string['adminauthorizewide'] = 'Réglages globaux';
$string['adminavs'] = 'Cochez cette option si vous avez activé Address Verification System (AVS) dans votre compte authorize.net. Lorsque l\'utilisateur remplit le formulaire de paiement, il lui sera alors demandé de saisir les champs de l\'adresse, par exemple la rue, le code postal, le pays, etc.';
$string['admincronsetup'] = 'Le script de maintenance cron.php n\'a pas été lancé depuis plus de 24 heures.<br />Ce script doit être activé si vous voulez utiliser la saisie programmée.<br />Veuillez <b>activer</b> le plugin Authorize.net et régler le cron, ou décocher la variable an_review.<br />Si vous désactivez la saisie programmée, les transactions seront annulées à moins que vous ne les approuviez dans les 30 jours.<br />Cochez la variable an_review et inscrivez «&nbsp;0&nbsp;» dans le champ de la variable an_capture_day<br />si vous voulez accepter ou refuser manuellement les paiements durant 30 jours.';
$string['adminhelpcapturetitle'] = 'Jour de saisie programmée';
$string['adminhelpreviewtitle'] = 'Contrôle de commande';
$string['adminemailexpired'] = 'Ce réglage est utile si vous avez choisi la saisie manuelle. Les administrateurs sont avertis par courriel <b>$a</b> jours avant l\'échéance des commandes en attente de traitement.';
$string['adminemailexpsetting'] = '(0 = désactiver l\'envoi par courriel, par défaut = 2, max = 5)<br />(Réglage de saisie automatique requis pour l\'envoi des courriels&nbsp;: cron = activé, an_review = coché, an_capture_day = 0, an_emailexpired = 1-5)';
$string['adminneworder'] = 'Cher administrateur,
  	 
Vous avez reçu un nouvel ordre en attente :

    No de commande : $a->orderid
    No de transaction : $a->transid
    Utilisateur : $a->user
    Cours : $a->course
    Montant : $a->amount

    SAISE PROGRAMÉE ACTIVE ? $a->acstatus

Si la saisie programmée est actovie, les infos de carte de crédit seront
saisies le $a->captureon et l\'étudiant sera inscrit au cours. Dans le cas
contraire, ces données arriveront à échéance le $a->expireon et ne pourront
plus être saisies après cette date.

Vous pouvez immédiatement accepter ou refuser le paiement pour l\'inscription
de l\'étudiant en cliquant sur le lien ci-dessous.

$a->url';
$string['adminnewordersubject'] = '$a->course : nouvel ordre en attente de traitement ($a->orderid)';
$string['adminpendingorders'] = 'Vous avez désactivé la saisie programmée.<br />Un total de $a->count transactions dont le statut est «&nbsp;Autorisé / En attente de saisie&nbsp;» seront annulées, à moins que vous ne les approuviez.<br />Pour accepter ou refuser des paiements, visitez la page <a href=\'$a->url\'>Gestion des paiements</a>.';
$string['adminreview'] = 'Contrôle de la commande avant envoi des données de la carte de crédit.';
$string['adminteachermanagepay'] = 'Les enseignants peuvent gérer les paiements du cours.';
$string['amount'] = 'Montant';
$string['anlogin'] = 'Authorize.net&nbsp;: nom d\'utilisateur';
$string['anpassword'] = 'Authorize.net&nbsp;: mot de passe';
$string['anreferer'] = 'Taper ici une URL (référenceur) si vous avez mis en place cette fonctionnalité dans votre compte authorize.net. Ceci enverra une entête «&nbsp;Referer: URL&nbsp;» incluse dans la requête web';
$string['antestmode'] = 'Traiter les transactions en mode test (aucun montant ne sera prélevé)';
$string['antrankey'] = 'Authorize.net&nbsp;: clef de transaction';
$string['authcaptured'] = 'Autorisé / Saisi';
$string['authorizedpendingcapture'] = 'Autorisé / En attente de saisie';
$string['avsa'] = 'L\'adresse (rue) correspond, mais pas le code postal';
$string['avsb'] = 'L\'adresse n\'est pas renseignée';
$string['avse'] = 'Erreur du système de vérification d\'adresse (AVS)';
$string['avsg'] = 'Carte provenant d\'une banque non-U.S.';
$string['avsn'] = 'Ni l\'adresse (rue), ni le code postal ne correspondent';
$string['avsp'] = 'Le système de vérification d\'adresse (AVS) ne peut pas fonctionner';
$string['avsr'] = 'Veuillez essayer à nouveau, le système n\'est actuellement pas disponible';
$string['avsresult'] = '<b>Résultat AVS</b>&nbsp;: $a';
$string['avss'] = 'Ce service n\'est pas supporté par la banque';
$string['avsu'] = 'Les informations d\'adresse ne sont pas disponibles';
$string['avsw'] = 'Le code postal à 9 chiffres correspond, mais pas l\'adresse (rue)';
$string['avsx'] = 'L\'adresse (rue) et le code postal à 9 chiffres correpondent';
$string['avsy'] = 'L\'adresse (rue) et le code postal à 5 chiffres correpondent';
$string['avsz'] = 'Le code postal à 5 chiffres correspond, mais pas l\'adresse (rue)';
$string['canbecredit'] = 'Remboursable à concurrence de $a->upto';
$string['cancelled'] = 'Annulé';
$string['capture'] = 'Saisie';
$string['capturedpendingsettle'] = 'Saisi / En attente de règlement';
$string['capturedsettled'] = 'Saisi / Réglé';
$string['captureyes'] = 'Les données de la carte de crédit vont être saisies et l\'étudiant sera inscrit au cours. Voulez-vous continuer&nbsp;?';
$string['ccexpire'] = 'Date d\'échéance';
$string['ccexpired'] = 'La carte de crédit est échue';
$string['ccinvalid'] = 'Numéro de carte non valable';
$string['ccno'] = 'Numéro de carte de crédit';
$string['cctype'] = 'Type de carte de crédit';
$string['ccvv'] = 'Code vérification';
$string['ccvvhelp'] = 'Au verso de votre carte (les 3 derniers chiffres)';
$string['choosemethod'] = 'Tapez la clef d\'inscription à ce cours&nbsp;; si vous n\'avez pas cette clef, ce cours vous sera accessible contre paiement.';
$string['chooseone'] = 'Veuillez remplir l\'un des deux champs ci-dessous ou tous les deux';
$string['cutofftime'] = 'Date butoir de transaction. Quand la dernière transaction doit-elle être traitée pour règlement&nbsp;?';
$string['delete'] = 'Détruire';
$string['description'] = 'Le module Authorize.net permet de mettre en place des cours payant par carte de crédit. Si le prix d\'un cours est nul, les étudiants peuvent s\'y inscrire sans payer. Le prix des cours peut être fixé de 2 manières. (1) Un prix défini globalement, que vous fixez ici, est le prix par défaut pour tous les cours du site. (2) Le prix de chaque cours peut être fixé individuellement. S\'il est défini, le prix spécifique d\'un cours remplace le prix par défaut.<br /><br /><b>Remarque&nbsp;:</b> si vous indiquez une clef d\'inscription dans les réglages du cours, les étudiants auront également la possibilité de s\'y inscrire avec cette clef. Ceci est utile si vous avez un mélange d\'étudiants payant et non payant.';
$string['enrolname'] = 'Passerelle de paiement Authorize.net';
$string['expired'] = 'Échu';
$string['howmuch'] = 'Combien&nbsp;?';
$string['httpsrequired'] = 'Votre requête ne peut pas être traitée. Les réglages du site n\'ont pas pu être configurés correctement.<br /><br />Veuillez NE PAS taper votre numéro de carte de  crédit, à moins que vous ne voyez un cadenas jaune au bas ou dans la barre d\'adresse de votre navigateur. Ce cadenas indique que toutes les données transmises entre votre ordinateur et le serveur sont chiffrées, et que les informations échangées entre ces deux ordinateurs sont protégées et ne peuvent pas être interceptées sur Internet.';
$string['logindesc'] = 'Cette option doit impérativement être activée&nbsp;!<br /><br />Veuillez vous assurer que l\'option «&nbsp;<a href=\"$a->url\">loginhttps</a>&nbsp;» soit activée dans les paramètres de l\'administration, section Sécurité.<br /><br />L\'activation de cette option permettra à Moodle d\'utiliser une connexion sécurisée pour l\'affichage et le traitement des pages de connexion et de paiement.';
$string['missingaddress'] = 'L\'adresse n\'est pas renseignée';
$string['missingcc'] = 'Le numéro de carte n\'est pas renseigné';
$string['missingccexpire'] = 'La date d\'échéance n\'est pas renseignée';
$string['missingcctype'] = 'Le type de carte n\'est pas renseigné';
$string['missingcvv'] = 'Le numéro de vérification n\'est pas renseigné';
$string['missingzip'] = 'Le code postal n\'est pas renseigné';
$string['nameoncard'] = 'Nom sur la carte';
$string['new'] = 'Nouveau';
$string['noreturns'] = 'Pas de retour&nbsp;!';
$string['notsettled'] = 'Non réglé';
$string['orderid'] = 'No d\'ordre';
$string['paymentmanagement'] = 'Gestion des paiements';
$string['paymentpending'] = 'Votre paiement pour ce cours est en attente de traitement. Son numéro de commande est $a->orderid. Voir les <a href=\'$a->url\'>détails de la commande</a>.';
$string['pendingordersemail'] = 'Cher administrateur,
  	 
$a->pending transactions arriveront à échéance à moins que vous
n\'acceptiez le paiement dans les $a->days jours.

Ceci est un message d\'avertissement, car vous n\'avez pas activé
la saisie programmée. Vous devez donc accepter ou refuser les paiements
manuellement.
  	 
Pour accpeter ou refuser les paiements en attente de traitement, veuillez
visiter la page

$a->url
  	 
Pour activer la saisie programmée, afin que vous ne receviez plus de tels
messages d\avertissement, veuillez visiter la page

$a->enrolurl';
$string['reason11'] = 'Un doublon de transaction a été transmis.';
$string['reason13'] = 'L\'identifiant de connexion n\'est pas valide ou le compte est inactif.';
$string['reason16'] = 'La transaction n\'a pas été trouvée.';
$string['reason17'] = 'Le marchand n\'accepte pas ce type de carte de crédit.';
$string['reason27'] = 'La transaction a abouti à un problème AVS. L\'adresse fournie ne correspond à l\'adresse de facturation du détenteur de la carte.';
$string['reason28'] = 'Le marchand n\'accepte pas ce type de carte de crédit.';
$string['reason30'] = 'Une telle configuration n\'est pas valable. Veuillez appeler votre fournisseur.';
$string['reason39'] = 'Le code de devise fourni est soit non valide, non supporté, non autorisé ou ne possède pas de taux de change.';
$string['reason43'] = 'The merchant was incorrectly set up at the processor. Call your Merchant Service Provider.';
$string['reason44'] = 'Cette transaction a été déclinée. Erreur du filtre de carte&nbsp;!';
$string['reason45'] = 'Cette transaction a été déclinée. Erreur du filtre de code de carte / AVS&nbsp;!';
$string['reason47'] = 'Le montant requis pour le règlement ne peut pas être plus grand que le montant autorisé initiallement.';
$string['reason5'] = 'Un montant valide est requis.';
$string['reason50'] = 'Cette transaction est en attente de règlement et ne peut être remboursée.';
$string['reason51'] = 'La somme de tous les crédits concernant cette transaction est plus grande que le montant original de la transaction.';
$string['reason54'] = 'La transaction référencée ne satisfait pas les critères permettant de délivrer un crédit.';
$string['reason55'] = 'La somme de tous les crédits concernant cette transaction dépasserait le montant dû initialement.';
$string['refund'] = 'Remboursement';
$string['refunded'] = 'Remboursé';
$string['returns'] = 'Retour';
$string['reviewday'] = 'Saisir les données de la carte de crédit automatiquement, à moins qu\'un enseignant ou un administrateur ne contrôle la commande dans les <b>$a</b> jours. LE CRON DOIT ÊTRE ACTIF.<br />(0 jour signifie que la saisie programmée sera désactivée. Un contrôle par un enseignant ou administrateur est alors nécessaire. Dans ce cas, la transaction sera annulée si elle n\'est pas contrôlée dans les 30 jours)';
$string['reviewnotify'] = 'Votre paiement va être contrôlé. Votre enseignant vous contactera par courriel dans quelques jours.';
$string['sendpaymentbutton'] = 'Envoyer paiement';
$string['settled'] = 'Réglé';
$string['settlementdate'] = 'Date de réglement';
$string['subvoidyes'] = 'La transaction remboursée $a->transid sera annulée et votre compte sera crédité de $a->amount. Voulez-vous continuer&nbsp;?';
$string['tested'] = 'Testé';
$string['testmode'] = '[MODE TEST]';
$string['testwarning'] = 'Les opérations de saisie/annulation/crédit semblent fonctionner correctement en mode test. Aucun enregistrement n\'a cependant été mis à jour ni inséré dans la base de données.';
$string['transid'] = 'No de transaction';
$string['unenrolstudent'] = 'Désinscrire l\'étudiant&nbsp;?';
$string['void'] = 'Nul';
$string['voidyes'] = 'La transaction sera annulée. Voulez-vous continuer&nbsp;?';
$string['youcantdo'] = 'Vous ne pouvez pas effectuer ceci&nbsp;: $a->action';
$string['zipcode'] = 'Code postal';

?>
