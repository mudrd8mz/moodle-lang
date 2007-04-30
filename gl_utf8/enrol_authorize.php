<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.7.1 (2006101010)


$string['adminacceptccs'] = 'Que tipos de cartón de credito se aceptan?';
$string['adminaccepts'] = 'Seleccione os métodos de pagamento permitidos e os seus tipos';
$string['adminauthcode'] = 'Se un cartón de crédito de usuario non pode ser capturado directamente na Internet, obteña o código de autorización no teléfono do banco do usuario.';
$string['adminauthorizeccapture'] = 'Revisión do pedido e configuracións da captación programada';
$string['adminauthorizeemail'] = 'Configuracións do envío de correos electrónicos';
$string['adminauthorizesettings'] = 'Configuracións Authorize.net';
$string['adminauthorizewide'] = 'Configuracións Site-Wide';
$string['adminavs'] = 'Seleccione se ten activado o Sistema de verificación de enderezo (AVS) na súa conta authorize.net. Vai solicitar datos de enderezo como rúa, estado, país e código postal cando o usuario encha o formulario de pagamento.';
$string['adminconfighttps'] = 'Asegúrese de ter \"<a href=\"$a->url\">accesos http activados</a>\" para utilizar este plugin<br />en Admin >> Variables >> Seguranza >> Seguranza HTTP.';
$string['adminconfighttpsgo'] = 'Ir a <a href=\"$a->url\">páxina segura</a> para configurar este plugin.';
$string['admincronsetup'] = 'O script de mantemento non foi executado nas últimas 24 horas.<br />Cron debe estar activado se desexa utilizar o recurso captación programada.<br /><b>Activar</b> plugin Authorize.net e <b>instalar cron</b> correctamente; ou <b>non seleccionar revisión</b> de novo.<br />Se desactiva a captación programada, as transaccións será canceladas a non ser que as revise antes de 30 días.<br />Seleccione <b>e_revisar</b>e introduza<b>0 para o campo e_captar_día</b> <br />se desexa aceptar/Recusar <b>manualmente</b> o pagamento antes de 30 días.';
$string['adminemailexpired'] = 'Isto é útil para a captación manual. Os administradores serán notificados <b>$a</b> días antes de caducaren os pedidos pendentes.';
$string['adminemailexpiredsort'] = 'Cando o número de pedidos pendentes caduca son enviadas aos profesores por correo electrónico. Cal é o importante?';
$string['adminemailexpiredsortcount'] = 'Contaxe de pedidos';
$string['adminemailexpiredsortsum'] = 'Cantidade total';
$string['adminemailexpiredteacher'] = 'Se ten a captación manual activada (ver arriba) e os profesores poden xestionar os pagamentos, tamén eles poderán ser notificados sobre os pedidos caducados. Isto enviará por correo electrónico os pedidos pendentes que van caducar a cada profesor do curso.';
$string['adminemailexpsetting'] = '(0=desactivar envío de correo electrónico, por defecto=2, máx=5)<br />(As configuracións da Captación manual para enviar correo electrónico: cron=activado, revisión=seleccionada, captar día=0, correo electrónico caducado=1-5)';
$string['adminhelpcapturetitle'] = 'Día de captación programada';
$string['adminhelpreviewtitle'] = 'Revisión de pedido';
$string['adminneworder'] = 'Querido administrador,

  Recibiu un novo pedido pendente:

   Orde ID: $a->ordeid
   Transacción ID: $a->transid
   Usuario: $a->usuer
   Curso: $a->course
   Cantidade: $a->amount

   CAPTACIÓN PROGRAMADA ACTIVADA?: $a->acstatus

  Se a captación programada está activa, o cartón de crédito será captado en $a->captureon
  e o usuario matricularase no curso; doutra maneira caducará
  en $a->expireon e non poderá ser capturado despois deste día.

  Tamén poderá aceptar/recusar o pagamento para matricular ao estudante inmediatamente seguindo esta ligazón:
  $a->url';
$string['adminnewordersubject'] = '$a->course; Novo pedido pendente: $a->orderid';
$string['adminpendingorders'] = 'Desactivou o recurso de captación programada.<br />O total $a->count de transaccións en estado de Captación Autorizada/Pendente será desactivada a menos que as seleccione.<br />Para aceptar/recusar pagamentos, vaia á páxina <a href=\'$a->url\'>Xestión de pagamentos</a>.';
$string['adminreview'] = 'Revisar o pedido antes de procesar o cartón de crédito.';
$string['adminteachermanagepay'] = 'Os profesores poden xestionar os pagamentos do curso.';
$string['allpendingorders'] = 'Todos os pedidos pendentes';
$string['amount'] = 'Cantidade';
$string['anlogin'] = 'Nome do login: Authorize.net';
$string['anpassword'] = 'Contrasinal: Authorize.net';
$string['anreferer'] = 'Defina o referente URL se ten instalado isto na súa conta authorize.net. Isto enviará unha liña Referente: URL incluída na solicitude Web.';
$string['antestmode'] = 'Executar transaccións só en modo de proba (non se cobrará diñeiro)';
$string['antrankey'] = 'Tecla de transacción: Authorize.net';
$string['approvedreview'] = 'Revisión aprobada';
$string['authcaptured'] = 'Autorizado / Capturado';
$string['authcode'] = 'Código de autorización';
$string['authorize:managepayments'] = 'Xestión de pagamentos';
$string['authorize:uploadcsv'] = 'Cargar ficheiro CSV';
$string['authorizedpendingcapture'] = 'Autorizado / Captación pendente';
$string['avsa'] = 'Enderezo (rúa) igual, código postal non';
$string['avsb'] = 'Información do enderezo non fornecida';
$string['avse'] = 'Erro no sistema de verficación de enderezo';
$string['avsg'] = 'Non é un cartón emitido por un banco dos E.U.A.';
$string['avsn'] = 'Non é igual o enderezo (rúa) nin o código postal';
$string['avsp'] = 'Sistema de verificación de enderezo non aplicable';
$string['avsr'] = 'Tentar de novo. Sistema non dispoñible ou tempo esgotado';
$string['avsresult'] = 'Resultado AVS: $a';
$string['avss'] = 'Servizo non soportado polo emisor';
$string['avsu'] = 'A información do enderezo non está dispoñible';
$string['avsw'] = 'Código postal de 9 díxitos igual, enderezo (rúa) non';
$string['avsx'] = 'Enderezo (rúa) e código postal de 9 díxitos igual';
$string['avsy'] = 'Enderezo (rúa) e código postal de 5 díxitos igual';
$string['avsz'] = 'Código postal de 5 díxitos igual, enderezo (rúa) non';
$string['canbecredit'] = 'Pode ser reembolsado para $a->upto';
$string['cancelled'] = 'Cancelado';
$string['capture'] = 'Captación';
$string['capturedpendingsettle'] = 'Capturado / Acordo pendente';
$string['capturedsettled'] = 'Capturado / Acordado';
$string['captureyes'] = 'O cartón de crédito será captado e o estudante matricularase no curso. Está certo?';
$string['ccexpire'] = 'Data de caducidade';
$string['ccexpired'] = 'O cartón de crédito caducou';
$string['ccinvalid'] = 'Número de cartón non válido';
$string['ccno'] = 'Número do cartón de credito';
$string['cctype'] = 'Tipo de cartón de crédito';
$string['ccvv'] = 'Verificación do cartón';
$string['ccvvhelp'] = 'Mire a parte de atrás do cartón (3 últimos díxitos)';
$string['choosemethod'] = 'Se sabe a chave de inscrición do curso, introdúzaa abaixo;<br />No caso contrario terá que pagar este curso.';
$string['chooseone'] = 'Encha un ou ambos dos dous campos seguintes. O contrasinal non é mostrado.';
$string['costdefaultdesc'] = '<strong>Na configuración do curso, introduza -1</strong> para utilizar o custo por defecto.';
$string['cutofftime'] = 'Interrupción do tempo de transacción. Cando foi establecida a última transacción?';
$string['delete'] = 'Destruír';
$string['description'] = 'O módulo Authorize.net permite que configure o pagamento de cursos a través de fornecedores de pagamento. Se o custo para calquera curso é cero, entón os estudantes non terán que pagar para entrar. Hai dúas maneiras de configurar o custo do curso: (1) un custo abranguente como configuración predefinida para todo o sitio Web (2) Unha configuración definida para cada curso individualmente. O custo do curso anula o custo do sitio.<br /><br /><b>Nota:</b> Se introduce unha chave de inscrición na configuarción do curso, os estudantes tamén terán a opción de inscribirse utilizando a chave. Isto é útil se están mesturados os estudantes que pagan e os que non pagan.';
$string['echeckabacode'] = 'Número ABA do banco';
$string['echeckaccnum'] = 'Número de conta bancaria';
$string['echeckacctype'] = 'Tipo de conta bancaria';
$string['echeckbankname'] = 'Nome do banco';
$string['echeckbusinesschecking'] = 'Business Checking';
$string['echeckchecking'] = 'Verificar';
$string['echeckfirslasttname'] = 'Titular da conta do banco';
$string['echecksavings'] = 'Gardadas';
$string['enrolname'] = 'Portal de pago Authorize.net';
$string['expired'] = 'Caducado';
$string['haveauthcode'] = 'Xa teño un código de autorización';
$string['howmuch'] = 'Canto é?';
$string['httpsrequired'] = 'Lamentamos informar que a súa solicitude non pode ser procesada agora. A configuración do sitio non pode ser configurada correctamente.<br /><br />Non introduza o número do cartón de crédito a non ser que vexa un cadeado amarelo no explorador. Se aparece o símbolo, significa que a páxina cifra todos os datos enviados entre o cliente e o servidor. Entón a transacción de información entre os dous computadores é protexida, por tanto o  número do seu cartón de crédito non pode ser capturado na Internet.';
$string['invalidaba'] = 'Número ABA non válido';
$string['invalidaccnum'] = 'Número de conta non válido';
$string['invalidacctype'] = 'Tipo de conta non válida';
$string['logindesc'] = 'Esta opción debe estar ACTIVADA. <br /><br />Asegúrese de que activou <a href=\"$a->url\">loginhttps </a> en Admintración >> Variables >> Seguranza.<br /><br />Activando isto fará que Moodle utilice unha conexión segura https para as páxinas de acceso e pagamento.';
$string['logininfo'] = 'O nome de acceso, o contrasinal e a chave de transacción non son mostrados por precaucións de seguranza. Non é preciso introducir de novo se antes ten configurados eses campos. Verá un texto verde á esquerda da caixa se xa foron configurados algúns campos. Se introduce eses campos por primeira vez, o nome de acceso (*) é obrigatorio e debe introducir <strong>calquera</strong> chave de transacción (#1) <strong>ou</strong> o contrasinal (#2) na caixa apropiada. Recomendámoslle que introduza a súa chave transacción por precaucións de seguranza. Se desexa eliminar o actual contrasinal, marque a caixa de verificación.';
$string['methodcc'] = 'Cartón de crédito';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Falta o número ABA';
$string['missingaddress'] = 'Falta o enderezo';
$string['missingbankname'] = 'Falta o nome do banco';
$string['missingcc'] = 'Falta o número do cartón';
$string['missingccauthcode'] = 'Falta o código de autorización';
$string['missingccexpire'] = 'Falta a data de caducidade';
$string['missingcctype'] = 'Falta o tipo de cartón';
$string['missingcvv'] = 'Falta o número de verificación';
$string['missingzip'] = 'Falta o código postal postal code';
$string['mypaymentsonly'] = 'Mostrar só os meus pagamentos';
$string['nameoncard'] = 'Titular do cartón';
$string['new'] = 'Novo';
$string['noreturns'] = 'Sen retorno!';
$string['notsettled'] = 'Non establecida';
$string['orderid'] = 'ID Pedido';
$string['paymentmanagement'] = 'Xestión de pagamento';
$string['paymentmethod'] = 'Método de pagamento';
$string['paymentpending'] = 'O seu pagamento está pendente para este curso co número de pedido $a->orderid. Vexa <a href=\'$a->url\'>Detalles do pedido</a>.';
$string['pendingecheckemail'] = 'Prezado administrador,

Existen $a->count pendentes de verificar electronicamente e debería cargar un ficheiro csv para obter os usuarios inscritos.

Prema a ligazón e lea o ficheiro de axuda na páxina vista:
$a->url';
$string['pendingechecksubject'] = '$a->course: Pendente de verificar electronicamente ($a->count)';
$string['pendingordersemail'] = 'Prezado administrador,

As transaccións $a->pendentes para o curso \"$a->curso\" caducarán a non ser que acepte o pagamento dentro de $a->days días.

Esta é unha mensaxe de aviso, porque non está activada a captación programada.
Isto significa que ten que aceptar ou recusar os pagamentos manualmente.

Para aceptar/recusar pagamentos pendentes vaia a:
$a->url

Para activar a captación programada, para non recibir máis correos electrónicos de aviso, vaia a:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Prezado/a profesor/a,

As transaccións $a->pending custan $a->currency $a->sumcost para o curso \"$a->course\"
a non ser que acepte o pagamento dentro de $a->days días.

Ten que aceptar ou recusar os pagamentos manualmente porque o administrador non activou a captura programada.

$a->url';
$string['pendingorderssubject'] = 'AVISO: $a->course, $a->pending  pedido(s) caducarán en $a->days día(s).';
$string['reason11'] = 'Unha transacción duplicada foi enviada.';
$string['reason13'] = 'O ID de acceso do comerciante non é válido ou a conta está inactiva.';
$string['reason16'] = 'A transacción non foi encontrada.';
$string['reason17'] = 'O comerciante non acepta este tipo de cartón de crédito.';
$string['reason245'] = 'Este tipo de verificación electrónica non está permitida cando utiliza o formulario aloxado neste portal de pagamento.';
$string['reason246'] = 'Este tipo de verificación electrónica non está permitida.';
$string['reason27'] = 'O resultado da transacción nun AVS non coincide. O enderezo fornecido non coincide co enderezo de facturación do titular do cartón.';
$string['reason28'] = 'O comerciante non acepta este tipo de cartón de crédito.';
$string['reason30'] = 'A configuración do procesador non é válida. Contacte co Fornecedor do servizo comercial.';
$string['reason39'] = 'A código de moeda actual continúa a non ser válido, non soportado, non permitido para este comerciante ou non ten unha taxa de cambio.';
$string['reason43'] = 'O comerciante foi configurado incorrectamente no processador. Contacte co Fornecedor do servizo comercial.';
$string['reason44'] = 'Esta transacción foi rexeitada. Produciuse un erro no código do cartón!';
$string['reason45'] = 'Esta transacción foi rexeitada. Erro no código do cartón/filtro AVS!';
$string['reason47'] = 'A cantidade obrigatoria acordada non pode ser maior que a cantidade orixinal autorizada.';
$string['reason5'] = 'É necesario introducir una cantidade válida.';
$string['reason50'] = 'Esta transacción está á espera de liquidación e non pode ser reembolsada.';
$string['reason51'] = 'A suma de todos os créditos desta transacción é maior que a cantidade orixinal da transacción.';
$string['reason54'] = 'A transacción referida non coincide co criterio para emitir un crédito.';
$string['reason55'] = 'A suma dos créditos en relación coa transacción referida excederá a cantidade orixinal da débeda.';
$string['reason56'] = 'Este comerciante só acepta transaccións de verificación electrónica; non acepta transaccións de cartón de crédito.';
$string['refund'] = 'Reembolsar';
$string['refunded'] = 'Reembolsada';
$string['returns'] = 'Devolve';
$string['reviewday'] = 'Capturar o cartón de crédito automaticamente a non ser cando o docente ou administrador revise a orde nos <b>$a</b> días seguintes. O CRON DEBE ESTAR ACTIVADO.<br />(0 días significa que será desactivada a captación prevista, e tamén significa que o profesor ou administrador revisará a orde manualmente. A transacción será cancelada se desactiva a captación prevista ou a non ser que a revise nos seguintes 30 días).';
$string['reviewfailed'] = 'Erro de revisión';
$string['reviewnotify'] = 'O seu pagamento será revisado. Recibirá un correo electrónico do seu profesor dentro duns días.';
$string['sendpaymentbutton'] = 'Enviar pagamento';
$string['settled'] = 'Liquidado';
$string['settlementdate'] = 'Data de liquidación';
$string['subvoidyes'] = 'A transacción reembolsada ($a->transid) cancelarase e crearase un crédito $a->amount na súa conta. Está certo/a?';
$string['tested'] = 'Probado';
$string['testmode'] = '[MODO DE PROBA]';
$string['testwarning'] = 'Captación/vácuo/crédito parecen estar a funcionar en modo de probas, mais non se actualizou ou inserido ningún rexistro na base de datos.';
$string['transid'] = 'ID da transacción';
$string['underreview'] = 'Baixo revisión';
$string['unenrolstudent'] = 'Cancelar a inscrición do estudante?';
$string['uploadcsv'] = 'Cargar un ficheiro CSV';
$string['usingccmethod'] = 'Inscribir con <a href=\"$a->url\"><strong>cartón de crédito</strong></a>';
$string['usingecheckmethod'] = 'Inscribir utilizando a <a href=\"$a->url\"><strong>verificación electrónica</strong></a>';
$string['void'] = 'Vácuo';
$string['voidyes'] = 'A transacción será cancelada. Está certo/a?';
$string['welcometocoursesemail'] = 'Prezado estudante,

Grazas polo seu pagamento. Inscribiuse nos seguintes cursos:

$a->courses

Pode editar o seu perfil en:
 $a->profileurl

Pode consultar os detalles do pagamento en:
 $a->paymenturl';
$string['youcantdo'] = 'Non pode realizar esta operación: $a->action';
$string['zipcode'] = 'Código postal';

?>
