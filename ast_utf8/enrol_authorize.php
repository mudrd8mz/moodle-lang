<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.9.5+ (Build: 20091007) (2007101553)


$string['adminacceptccs'] = '¿Qué tipos de tarxetes de créditu s\'acepten?';
$string['adminaccepts'] = 'Escueya los métodos de pagu permitíos y los sos tipos';
$string['adminauthcode'] = 'Si una tarxeta de créditu d\'un usuariu nun pue ser usada direutamente en Internet, consiga\'l códigu d\'autorización nel teléfonu del bancu del usuariu.';
$string['adminauthorizeccapture'] = 'Revisión del pedíu y configuraciones de captación programada';
$string['adminauthorizeemail'] = 'Configuraciones del unvíu de correos ellectrónicos';
$string['adminauthorizesettings'] = 'Configuraciones Authorize.net';
$string['adminauthorizewide'] = 'Configuraciones Site-Wide';
$string['adminavs'] = 'Escueya esto si tien activáu\'l Sistema de verificación de direiciones (AVS) na so cuenta authorize.net. Va pidir datos de domiciliu como cai, estáu, país y códigu postal de la que l\'usuariu enllena\'l formulariu de pagu.';
$string['adminconfighttps'] = 'Asegúrese de tener \"<a href=\"$a->url\">accesos http activaos</a>\" pa poder usar esti plugin<br />en Almin >> Variables >> Seguridá >> Seguridá HTTP.';
$string['adminconfighttpsgo'] = 'Dir a una <a href=\"$a->url\">páxina segura</a> pa configurar esti plugin.';
$string['admincronsetup'] = 'El script de caltenimientu nun s\'executó nes caberes 24 hores.<br />Cron tien de tar activáu si quier usar el recursu captación programada.<br /><b>Activar</b> plugin Authorize.net ya <b>instalar cron</b> correutamente; o <b>nun escoyer revisión</b> otra vez.<br />Si desactiva la captación programada, les tresaiciones van ser cancelaes a nun ser que les revise enantes de 30 díes.<br />Escueya <b>e_revisar</b>y escriba<b>0 nel campu e_captar_día</b> <br />si quier aceptar/Denegar <b>manualmente</b>\'l pagu enantes de 30 díes.';
$string['adminemailexpired'] = 'Esto ye útil pa la captación manual. Los alministradores van recibir una notificación <b>$a</b> díes enantes de que caduquen los pidíos pendentes.';
$string['adminemailexpiredsort'] = 'De la que\'l númberu de pidíos pendientes caduca unvíense a los profesores per corréu ellectrónicu. ¿Cuál ye l\'importante?';
$string['adminemailexpiredsortcount'] = 'Contar pedíos';
$string['adminemailexpiredsortsum'] = 'Cantidá total';
$string['adminemailexpiredteacher'] = 'Si tien la captación manual activada (ver enriba) y los profesores puen xestionar los pagos, tamién van poder ser notificaos de los pidíos caducaos. Esto va unviar per corréu ellectrónicu los pidíos pendientes que van caducar a caún los profesores del cursu.';
$string['adminemailexpsetting'] = '(0=desactivar unvíu de corréu ellectrónicu, por defeutu=2, máx=5)<br />(Les configuraciones de Captación manual pa unviar corréu ellectrónicu: cron=activáuo, revisión=seleicionada, captar día=0, corréu ellectrónico caducáu=1-5)';
$string['adminhelpcapturetitle'] = 'Día de captación programada';
$string['adminhelpreviewtitle'] = 'Revisión de pidíu';
$string['adminneworder'] = 'Querido administrador,

  Recibiu un novo pedido pendente:

   Orde ID: $a->orderid
   Transacción ID: $a->transid
   Usuario: $a->user
   Curso: $a->course
   Cantidá: $a->amount

   ¿CAPTACIÓN PROGRAMADA ACTIVADA?: $a->acstatus

  Si la captación programada ta activa, la tarxeta de créditu va ser captada en $a->captureon
  y l\'usuariu matricularáse nel cursu; d\'otra miente va caducar
  en $a->expireon y nun va poder ser capturada dempués d\'esi día.

  Tamién va poder aceptar/denegar el pagu pa matricular al estudiante inmediatamente siguiendo esti enllaz:
  $a->url';
$string['adminnewordersubject'] = '$a->course; Nuevu pidíu pendiente: $a->orderid';
$string['adminpendingorders'] = 'Desactivó\'l recursu de captación programada.<br />El total $a->count de tresaiciones n\'estáu de Captación Autorizada/Pendiente va quedar desactiváu a nun ser que les seleicione.<br />Pa aceptar/denegar pagos, vaya a la páxina <a href=\'$a->url\'>Xestión de pagos</a>.';
$string['adminreview'] = 'Revisar el pidíu enantes de procesar la tarxeta de créditu.';
$string['adminteachermanagepay'] = 'Los profesores puen xestionar los pagos del cursu.';
$string['allpendingorders'] = 'Tolos pidíos pendientes';
$string['amount'] = 'Cantidá';
$string['anlogin'] = 'Nome de login: Authorize.net';
$string['anpassword'] = 'Seña de login: Authorize.net';
$string['anreferer'] = 'Defina\'l referente URL si tien instalao esto na so cuenta authorize.net. Esto va unviar una ringlera Referente: URL incluyída na solicitú Web.';
$string['antestmode'] = 'Executar tresaiciones namás en mou prueba (nun se va cobrar)';
$string['antrankey'] = 'Tecla de tresaición: Authorize.net';
$string['approvedreview'] = 'Revisión aprobada';
$string['authcaptured'] = 'Autorizáu / Capturáu';
$string['authcode'] = 'Códigu d\'autorización';
$string['authorize:managepayments'] = 'Xestión de pagos';
$string['authorize:uploadcsv'] = 'Cargar ficheru CSV';
$string['authorizedpendingcapture'] = 'Autorizáu / Captación pendiente';
$string['avsa'] = 'La direición (cai) coincide, el códigu postal non';
$string['avsb'] = 'Nun hai información de la direición.';
$string['avse'] = 'Erru nel sistema de verificación de domiciliu';
$string['avsg'] = 'Nun ye una tarxeta emitida por un bancu de los EUA.';
$string['avsn'] = 'Nun coinciden la direición (cai) nin el códigu postal';
$string['avsp'] = 'Nun se pue aplicar el sistema de verificación de domiciliu.';
$string['avsr'] = 'Intentar otra vez. Sistema non disponible o tiempu agotáu.';
$string['avsresult'] = 'Resultáu AVS: $a';
$string['avss'] = 'Serviciu non proporcionáu pol emisor.';
$string['avsu'] = 'La información de domiciliu nun ta disponible.';
$string['avsw'] = 'El códigu postal de 9 díxitos coincide, la direición (cai) non';
$string['avsx'] = 'La direición (cai) y el códigu postal de 9 díxitos coinciden.';
$string['avsy'] = 'La direición (cai) y el códigu postal de 5 díxitos coinciden.';
$string['avsz'] = 'El códigu postal de 5 díxitos coincide, la direición (cai) non';
$string['canbecredit'] = 'Pue ser reembolsáu a $a->upto';
$string['cancelled'] = 'Canceláu';
$string['capture'] = 'Captación';
$string['capturedpendingsettle'] = 'Capturáu / Confirmación pendiente';
$string['capturedsettled'] = 'Capturáu / Confirmáu';
$string['captureyes'] = 'La tarxeta de créditu va ser capturada y l\'estudiante va quedar matriculáu nel cursu. ¿Ta ciertu de facer esto?';
$string['ccexpire'] = 'Fecha de caducidá.';
$string['ccexpired'] = 'La tarxeta de créditu caducó';
$string['ccinvalid'] = 'Númberu de tarxeta inválidu.';
$string['ccno'] = 'Númberu de tarxeta de creditu';
$string['cctype'] = 'Tipu de tarxeta de créditu';
$string['ccvv'] = 'Verificación de la tarxeta';
$string['ccvvhelp'] = 'Mire la parte atrás de la tarxeta (3 últimos díxitos)';
$string['choosemethod'] = 'Si sabe a llave d\'inscripción del cursu, escríbala embaxo;<br />Si nun ye así va tener de pagar esti cursu.';
$string['chooseone'] = 'Enllene ún o los dos campos siguientes. La seña nun va vese.';
$string['costdefaultdesc'] = '<strong>Na configuración del cursu, escriba -1</strong> pa usar el preciu por defeutu.';
$string['cutofftime'] = 'Interrupción del tiempu de tresaición. ¿Cuándo s\'estableció la última tresaición?';
$string['dataentered'] = 'Datos completos';
$string['delete'] = 'Esborrar';
$string['description'] = 'El módulu Authorize.net permite que configure\'l pagu de cursos mediante proveedores de pagu. Si\'l preciu de cualquier cursu ye cero, entós los estudiantes nun van tener de pagar pa entrar. Hai dos maneeres de configurar el preciu del cursu: (1) un preciu tipu como configuración predefinida pa tol sitiu Web (2) Una configuración definida pa caún los cursos. El preciu por cursu anula el preciu tipu del sitiu.<br /><br /><b>Nota:</b> Si escribe una llave d\'inscripción na configuración del cursu, los estudiantes van poder, temién, matriculase usando la llave. Esto ye útil si tán amestaos estudantes que paguen y que nun paguen.';
$string['echeckabacode'] = 'Númberu ABA del bancu';
$string['echeckaccnum'] = 'Númberu de cuenta bancaria';
$string['echeckacctype'] = 'Tipu de cuenta bancaria';
$string['echeckbankname'] = 'Nome del bancu';
$string['echeckbusinesschecking'] = 'Business Checking';
$string['echeckchecking'] = 'Verificar';
$string['echeckfirslasttname'] = 'Titular de la cuenta del bancu';
$string['echecksavings'] = 'Guardaes';
$string['enrolname'] = 'Portal de pagu Authorize.net';
$string['expired'] = 'Caducáu';
$string['haveauthcode'] = 'Yá tengo un códigu d\'autorización';
$string['howmuch'] = '¿Cuánto ye?';
$string['httpsrequired'] = 'Por disgracia, la so solicitú nun se pue procesar agora. La configuración del sitiu nun pue configurase correutamente.<br /><br />Nun escriba\'l númberu de la tarxeta de créditu si nun ve una cadena mariella nel navegador. Si apaez el símbolu, ello quier dicir que la páxina cifra tolos datos unviaos énte\'l cliente y el servidor. Nesi casu la tresaición d\'información énte los dos computadores ta protexida y, poro, el  númberu de la so tarxeta de créditu nun pue ser capturáu en Internet.';
$string['invalidaba'] = 'Númberu ABA inválidu.';
$string['invalidaccnum'] = 'Númberu de cuenta inválidu.';
$string['invalidacctype'] = 'Tipu de cuenta inválida.';
$string['logindesc'] = 'Esta opción tien de tar ACTIVADA. <br /><br />Asegúrese de qu\'activó <a href=\"$a->url\">loginhttps </a> en Alministración >> Variables >> Seguridá.<br /><br />Activando esto consigue que Moodle use una conexón segura https pa les páxines d\'accesu y pagu.';
$string['logininfo'] = 'El nome d\'entrada al sitiu, la seña y la llave de tresaición nun apaecen por precauciones de seguridá. Nun necesita entrar otra vez si de mano tien configuraos esos campos. va Ver un testu verde a la izquierda de la caxa si yá se configuraren dellos campos. Si escribe esos campos por vez primera, el nome d\'entrada al sitiu (*) ye obligatoriu y tien d\'escribir <strong>cualquier</strong> llave de tresaición (#1) <strong>o</strong> la seña (#2) na caxa apropiada. Recomendámos-y qu\'escriba la so llave de tresaición por motivos de seguridá. Si quier esborrar la seña actual, marque la caxa de verificación.';
$string['methodcc'] = 'Tarxeta de créditu';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Falta\'l númberu ABA';
$string['missingaddress'] = 'Falta la direición.';
$string['missingbankname'] = 'Falta\'l nome del bancu';
$string['missingcc'] = 'Falta\'l númberu de la tarxeta';
$string['missingccauthcode'] = 'Falta\'l códigu d\'autorización';
$string['missingccexpire'] = 'Falta la fecha de caducidá';
$string['missingcctype'] = 'Falta\'l tipu de tarxeta';
$string['missingcvv'] = 'Falta\'l númberu de verificación';
$string['missingzip'] = 'Falta\'l código postal.';
$string['mypaymentsonly'] = 'Amosar namás los mios pagos.';
$string['nameoncard'] = 'Titular de la tarxeta';
$string['new'] = 'Nuevu';
$string['noreturns'] = '¡Ensin retornu!';
$string['notsettled'] = 'Ensin establecer';
$string['orderid'] = 'ID Pídíu';
$string['paymentmanagement'] = 'Xestión de pagu.';
$string['paymentmethod'] = 'Métodu de pagu.';
$string['paymentpending'] = 'El so pagu d\'esti cursu ta pendiente col númberu de pidíu $a->orderid. Vea <a href=\'$a->url\'>Detalles del pidíu</a>.';
$string['pendingecheckemail'] = 'Estimáu alministrador,

Esisten $a->count echeques pendientes de verificar ellectrónicamente y debería cargar un ficheru csv pa ver los usuarios matriculaos.

Prema a ligazón e lea o ficheiro de axuda na páxina vista:
$a->url';
$string['pendingechecksubject'] = '$a->course: Pendiente de verificar ellectrónicamente ($a->count)';
$string['pendingordersemail'] = 'Estimáu alministrador,

Les tresaiciones $a->pending del cursu \"$a->course\" van caducar si nun acepta\'l pagu nos $a->days díes vinientes.

Esti ye un mensaxe d\'avisu, porque ta ensin activar la captación programada.
Esto quier dicir que tien qu\'aceptar o denegar los pagos manualmente.

P\'aceptar/denegar pagos pendientes vaya a:
$a->url

Para activar a captación programada, para non recibir máis correos electrónicos de aviso, vaia a:

$a->enrolurl';
$string['pendingordersemailteacher'] = 'Estimáu/ada profesor/a,

Les tresaiciones $a->pending cuesten $a->currency $a->sumcost pal cursu \"$a->course\"
a nun ser qu\'acepte\'l pagu dientro de los $a->days díes vinientes.

Tien d\'aceutar o denegar los pagos manualmente porque l\'alministrador non activó la captura programada.

$a->url';
$string['pendingorderssubject'] = 'AVISU: $a->course, $a->pending  pedíu(os) van caducar en $a->days día(es).';
$string['reason11'] = 'Unvióse una tresaición duplicada.';
$string['reason13'] = 'La ID d\'entrada al sitiu del comercial nun val o la cuenta ta ensin activar.';
$string['reason16'] = 'La tresaición nun s\'atopó.';
$string['reason17'] = 'El comercial nun acepta esti tipi de tarxeta de créditu.';
$string['reason245'] = 'Esti tipu de verificación ellectrónica nun ta permitíu si usa\'l formulariu abellugáu nesti portal de pagu.';
$string['reason246'] = 'Esti tipu de verificación ellectrónica nun ta permitíu.';
$string['reason27'] = 'El resultáu de la tresaición nun AVS nun coincide. La direición escrita nun coincide cola direición de facturación del titular de la tarxeta.';
$string['reason28'] = 'El comercial nun acepta esti tipu de tarxeta de créditu.';
$string['reason30'] = 'La configuración del procesador nun ye válida. Contaute col Proveedor del serviciu comercial.';
$string['reason39'] = 'El códigu de moneda actual nun ye válidu, o nun ta soportáu, o nun ta permitíu por esti comercial o nun tien una tasa de cambiu.';
$string['reason43'] = 'El comercial ta incorreutamente configuráu nel procesador. Contaute col Proveedor del serviciu comercial.';
$string['reason44'] = 'Esta tresaición denegóse. Hubo un erru nel códigu de la tarxeta';
$string['reason45'] = 'Esta tresaición denegóse. Hubo un erru nel códigu de la tarxeta/filtru AVS!';
$string['reason47'] = 'La cantidá obligatoria acordada nun pue ser mayor que la cantidá orixinal autorizada.';
$string['reason5'] = 'Ye necesario escribir una cantidá válida.';
$string['reason50'] = 'Esta tresaición ta a la espera de lliquidación y nun pue ser devuelta.';
$string['reason51'] = 'La suma de tolos créditos d\'esta tresaición ye más grande que la cantidá orixinal de la tresaición.';
$string['reason54'] = 'La tresaición referida nun coincide col criteriu pa emitir un créditu.';
$string['reason55'] = 'La suma de los créditos que se refieren a la tresaición referida supera la cantidá orixinal del débitu.';
$string['reason56'] = 'Este comercial namás acepta tresaiciones de verificación ellectrónica; nun acepta tresaiciones de tarxeta de créditu.';
$string['refund'] = 'Devolver';
$string['refunded'] = 'Devuelta';
$string['returns'] = 'Devoluciones';
$string['reviewday'] = 'Capturar la tarxeta de crédito automáticamente a nun ser de la que\'l docente o alministrador revise la orde nos <b>$a</b> díes siguientes. EL CRON TIEN DE TAR ACTIVÁU.<br />(0 díes quier dicir que va ser desactivada la captación prevista, y tamién quier dicir que\'l profesor o alministrador va revisar la orde manualmente. La tresaición va ser cancelada si desactiva la captación prevista o a nun ser que la revise nos sieguientes 30 díes).';
$string['reviewfailed'] = 'Erru de revisión';
$string['reviewnotify'] = 'El so pagu va ser revisáu. Va recibir un corréu ellectrónicu del so profesor nunos díes.';
$string['sendpaymentbutton'] = 'Unviar pagu.';
$string['settled'] = 'Lliquidáu.';
$string['settlementdate'] = 'Fecha de lliquidación.';
$string['subvoidyes'] = 'La tresaición devuelta ($a->transid) va cancelase y va crease un créditu $a->amount na so cuenta. ¿Seguro que quier facer esto?';
$string['tested'] = 'Probáu';
$string['testmode'] = '[MOU DE PRUEBA]';
$string['testwarning'] = 'Captación/cancelación/créditu paez que tán funcionando en mou pruebes, pero nun s\'actualizó o inxertó nengún rexistru na base de datos.';
$string['transid'] = 'ID de la tresaición';
$string['underreview'] = 'En revisión';
$string['unenrolstudent'] = '¿Cancelar la matricula del estudiante?';
$string['uploadcsv'] = 'Cargar un ficheru CSV';
$string['usingccmethod'] = 'matricular con <a href=\"$a->url\"><strong>tarxeta de créditu</strong></a>';
$string['usingecheckmethod'] = 'Matricular usando la <a href=\"$a->url\"><strong>verificación ellectrónica</strong></a>';
$string['void'] = 'Cancelación';
$string['voidyes'] = 'La tresaición va cancelase. ¿Ta ciertu/a?';
$string['welcometocoursesemail'] = 'Estimáu estudiante,

Gracies por pagar. Matriculóse nos siguientes cursos:

$a->courses

Pue editar el so perfil en:
 $a->profileurl

Pue consultar los detalles del pagu en:
 $a->paymenturl';
$string['youcantdo'] = 'Nun pue facer esta operación: $a->action';
$string['zipcode'] = 'Códigu postal';

?>
