<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 development (2006031600)


$string['adminauthorizeccapture'] = 'Configurações de revisão de encomenda & Auto-Capture ';
$string['adminauthorizeemail'] = 'Configurações de Email';
$string['adminauthorizesettings'] = 'Configurações Authorize.net ';
$string['adminauthorizewide'] = 'Configurações para todo o site';
$string['adminavs'] = 'Selecione isto se você ativou Address Verification System (AVS) na sua conta authorize.net. Isto requer campos de endereço como rua, estado, país, código postal quando o usuário completa o formulário de pagamento.';
$string['admincronsetup'] = 'O script cron de manutenção não foi executado nas últimas 24 horas.<br /> O Cron deve estar habilitado para utilizar autocapture.<br />Configure o cron em modo correto ou deselecione novamente an_review.<br />Se você desabilitar autocapture, as transações que não forem controladas em 30 dias, serão canceladas.<br />Selecionar an_review e inserir \'0\' no campo an_capture_day <br />se você quiser aceitar e recusar manualmente os pagamentos em 30 dias.';
$string['adminemailexpired'] = 'Mandar avisos aos admins por email <b>$a</b> dias passados quantos alunos status de capturas autorizadas/pendentes, antes que a transação expire.(0=disabilita envio email, padrão=2, max=5)<br />';
$string['adminhelpcapture'] = 'Eu quero aceitar e recusar pagamentos manualmente mas também usar autocapture para evitar o cancelamento dos pagamentos. Como posso fazer isto?

- Configurar o cron.
- Selecionar an_review.
- Inserir um número entre 1 e 29 no campo an_capture_day . O cartão vai ser capturado e o usuário será inscrito no curso a não ser que você o capture em an_capture_day dias.
';
$string['adminhelpcapturetitle'] = 'Dia de Auto-Capture ';
$string['adminhelpreview'] = 'Como aceitar ou recusar manualmente os pagamentos?
- selecionar an_review.
- inserir \'0\' no campo an_capture_day .

Como os alunos farão a inscrição imediata, inserindo o número do cartão?
- deselecionar an_review.';
$string['adminhelpreviewtitle'] = 'Revisão de Pedido';
$string['adminneworder'] = 'Prezado Admin,

Você recebeu um novo pedido pendente:

Pedido ID: $a->orderid
Transação ID: $a->transid
Usuário: $a->user
Curso: $a->course
Valôr: $a->amount

AUTO-CAPTURE ATIVADO?: $a->acstatus

Se auto-capture é ativo o cartão de crédito será capturado em $a->captureon
e o aluno será inscrito no curso, em caso contrário expira em $a->expireon e não pode ser capturado em data posterior.
Você também pode aceitar ou recusar o pagamento e inscrever o aluno imediatamente seguinto este link :
$a->url';
$string['adminnewordersubject'] = '$a->course: Novo pedido pendente($a->orderid)';
$string['adminpendingorders'] = 'Você desabilitou a auto-captura.<br />As transações totais $a->count com status AN_STATUS_AUTH serão canceladas a menos que você as selecione.<br />Para aceitar/ ecusar pagamentos vá ao <a href=\'$a->url\'>painel de gestão de pagamentos</a>';
$string['adminreview'] = 'Controlar a encomenda antes de completar a transação com o cartão de crédito';
$string['adminteachermanagepay'] = 'Professores podem administrar os pagamentos do curso';
$string['amount'] = 'Valor';
$string['anlogin'] = 'Authorize.net: Nome para Login';
$string['anpassword'] = 'Authorize.net: Senha';
$string['anreferer'] = 'Definir a URL de referência se você configurou isto na tua conta authorize.net. Isto incluirá uma linha \"Referer: URL\" na solicitação.';
$string['antestmode'] = 'Executar transações apenas em modalidade de teste (nào serào feitas transações monetárias reais)';
$string['antrankey'] = 'Authorize.net: Chave para transação';
$string['authcaptured'] = 'Autorizado/ Capturado';
$string['authorizedpendingcapture'] = 'Autorizado/ Captura pendente';
$string['avsa'] = 'Endereço (rua) corresponde, código postal não';
$string['avsb'] = 'Endereço não foi fornecido';
$string['avse'] = 'Erro de controle do endereço';
$string['avsg'] = 'Banco emissor do cartão não é Americano';
$string['avsn'] = 'Nenhuma correspondência com endereço e código postal';
$string['avsp'] = 'Sistema de Controle de Pagamentos não é aplicável';
$string['avsr'] = 'Retry - System não disponível';
$string['avsresult'] = 'Resultado AVS:';
$string['avss'] = 'Serviço não suportado pelo emissor';
$string['avsu'] = 'Informações sobre o endereço não disponível';
$string['avsw'] = 'Código postal de 9 dígitos corresponde, endereço (rua)não';
$string['avsx'] = 'Endereço (rua) e código postal de 9 dígitos correspondem';
$string['avsy'] = 'Endereço (rua) e código postal de 5 dígitos correspondem';
$string['avsz'] = 'Código postal de 5 dígitos corresponde, endereço (rua)não';
$string['canbecredit'] = 'Pode ser restituido a $a->upto';
$string['cancelled'] = 'Cancelado';
$string['capture'] = 'Captura';
$string['capturedpendingsettle'] = 'Capturado/ estabelecimento pendente';
$string['capturedsettled'] = 'Capturado/ estabelecido';
$string['captureyes'] = 'O cartão de crédito vai ser capturado e o aluno vai ser inscrito no curso. Proceder?';
$string['ccexpire'] = 'Data de expiração';
$string['ccexpired'] = 'O cartão de crédito expirou';
$string['ccinvalid'] = 'Número de cartão não válido';
$string['ccno'] = 'Número do cartão de crédito';
$string['cctype'] = 'Tipo de cartão de crédito';
$string['ccvv'] = 'CV2';
$string['ccvvhelp'] = 'Olhe na parte posterior do cartão (últimos 3 dígitos)';
$string['choosemethod'] = 'Insira o código da chave de inscrição do curso. Se você ainda não tem ente código, é necessário fazer a inscrição (e pagar) para poder obtê-lo.';
$string['chooseone'] = 'Complete um ou dois dos campos abaixo';
$string['cutofftime'] = 'Cut-Off Time da transação. Quando a próxima transação será selecionada para estabelecimento?';
$string['delete'] = 'Destruir';
$string['description'] = 'O módulo Authorize.net permite a configuração do pagamento de cursos utilizando providers CC. Se o valor da inscrição for zero, o pedido de pagamento não será apresentado ao aluno. Você deve configurar um preço predefinido para todo o site e um preço determinado para cada curso. O preço do curso tem prioridade sobre o preço predefinido para o site.';
$string['enrolname'] = 'Gateway Authorize.net do Cartão de Crédito';
$string['expired'] = 'Extinto';
$string['howmuch'] = 'Quanto?';
$string['httpsrequired'] = 'Infelizmente não foi possível processar o seu pedido em razão de problemas de configuração deste site. <br /><br />
Antes de inserir o número do seu cartão de crédito verifique se na barra inferior do seu navegador foi visualizada a imagem de um cadeado amarelo (isto indica que a transação é segura e que você não corre o risco de ter os dados roubados por terceiros durante a operação).';
$string['logindesc'] = 'Esta opção deve estar ativa.
<br /><br />
Você pode configurar a opção <a href=\"$a->url\">loginhttps</a> na seção Variáveis/Segurança.
<br /><br />
Com esta opção ativada Moodle usa o https seguro no hora do login e na página de pagamentos.';
$string['missingaddress'] = 'Falta o endereço';
$string['missingcc'] = 'Falta o número do cartão';
$string['missingccexpire'] = 'Falta a data de extinção';
$string['missingcctype'] = 'Falta o tipo do cartão';
$string['missingcvv'] = 'Falta o n~umero de controle';
$string['missingzip'] = 'Falta o código postal';
$string['nameoncard'] = 'Nome no cartão';
$string['noreturns'] = 'Nenhum retorno!';
$string['notsettled'] = 'Não estabelecido';
$string['orderid'] = 'ID do pedido';
$string['paymentmanagement'] = 'Gestão de pagamentos';
$string['paymentpending'] = 'O seu pagamento está pendente para o curso com o seguinte número de pedido $a->orderid. Veja <a href=\'$a->url\'>Detalhes do pedido</a>.';
$string['pendingordersemail'] = 'Prezado admin,

$a->pending transações expiram amenos que voc~e aceite o pagamento em $a->days dias.

Este é um aviso enviado porque você não habilitou autocapture. Isto significa que você tem que aceitar ou recusar pagamentos manualmente.

Para aceitar ou recusar pagamentos pendentes vá a $a->url

Para ativar o autocapture e evitar o recebimento de avisos, vá a $a->enrolurl';
$string['reason11'] = 'Uma transação duplicada foi enviada.';
$string['reason13'] = 'O ID de login do comerciante não é valido ou a conta não está ativa.';
$string['reason16'] = 'A transação não foi encontrada';
$string['reason17'] = 'O comerciante não aceita este tipo de cartão de crédito.';
$string['reason27'] = 'A transação resultou em confusão de AVS. O endereço fornecido não corresponde ao endereço do proprietário do cartão. ';
$string['reason28'] = 'O comerciante não aceita este tipo de cartão de crédito.';
$string['reason30'] = 'A configuração do processador não é válida. Chame o provedor do serviço.';
$string['reason39'] = 'O código da moeda não é válido, suportado ou permitido pelo comerciante ou não tem taxa de câmbio definida.';
$string['reason43'] = 'O comerciante foi definido em modo incorreto pelo processador. Chame o provedor do serviço.';
$string['reason44'] = 'Esta transação foi recusada. Erro de filtro de código do cartão!';
$string['reason45'] = 'Esta transação foi recusada. Erro de filtro de código do cartão/AVS!';
$string['reason47'] = 'O valôr pedido não pode ser superior ao valôr inicial autorizado.';
$string['reason5'] = 'Um valôr válido é necessário.';
$string['reason50'] = 'Esta transação está esperando o acertamento e não pode ser restituida.';
$string['reason51'] = 'A soma dos créditos em relação à transação é maior que o valôr da transação original.';
$string['reason54'] = 'A transação em questão não corresponde aos requisitos para emissão de crédito.';
$string['reason55'] = 'A soma dos créditos em relação à transação em questão superaria o valor inicial do débito.';
$string['refund'] = 'Restituir';
$string['refunded'] = 'Restituido';
$string['returns'] = 'Devolve';
$string['reviewday'] = 'Completar a transação do cartão de crédito automaticamente a menos que um administrador ou professor não faça o controle da encomenda em <b>$a</b> dias. O CRON DEVE ESTAR ATIVADO. .<br />( 0 dias = desativar transação automatica = prof. o admin. controlam a operação manualmente. A transação será cancelada quando a modalidade autocapture for desativada a menos que você não controle a operação em 30 dias.)';
$string['reviewnotify'] = 'O seu pagamento vai ser controlado. Você receberá um email do seu professor nos próximos dias.';
$string['sendpaymentbutton'] = 'Enviar Pagamento';
$string['settled'] = 'Definido';
$string['settlementdate'] = 'data de definição';
$string['subvoidyes'] = 'A transação restituida $a->transid vai ser cancelada e o valor de $a->amount vai ser acreditado na sua conta. Proceder?';
$string['tested'] = 'Testado';
$string['testmode'] = '[TEST MODE]';
$string['testwarning'] = 'Captura/Anulamento/Crédito parece funzionar sem problemas em modalidade de teste mas nenhum registro foi atualizado ou inserido na base de dados.';
$string['transid'] = 'ID da transação';
$string['unenrolstudent'] = 'Desinscrever aluno?';
$string['void'] = 'Nulo';
$string['voidyes'] = 'A transação vai ser cancelada. Proceder?';
$string['youcantdo'] = 'Você não pode fazer isto: $a->action';
$string['zipcode'] = 'Código Postal';

?>
