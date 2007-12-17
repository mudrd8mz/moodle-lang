<?PHP // $Id$ 
      // mnet.php - created with Moodle 1.8 + (2007021503)


$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (auto-assinado)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (assinado)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP não encriptado';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (auto-assinado)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (assinado)';
$string['aboutyourhost'] = 'Acerca do Servidor';
$string['accesslevel'] = 'Nível de acesso';
$string['addhost'] = 'Adicionar host';
$string['addnewhost'] = 'Adicionar um novo host';
$string['addtoacl'] = 'Adicionar ao controlo de acessos';
$string['allow'] = 'Permitir';
$string['authfail_nosessionexists'] = 'Autorização falhada: a sessão do mnet não existe.';
$string['authfail_sessiontimedout'] = 'Autorização falhada: o tempo de carregamento da sessão do mnet terminou.';
$string['authfail_usermismatch'] = 'Autorização falhada: o utilizador não é o mesmo.';
$string['authmnetautoadddisabled'] = 'O plugin de autenticação da rede Moodle para auto-adicionar utilizadores está <strong>desligado</strong>.';
$string['authmnetdisabled'] = 'O plugin de autenticação da rede Moodle está <strong>desligado</strong>.';
$string['badcert'] = 'Este não é um certificado válido.';
$string['couldnotgetcert'] = 'Nenhum certificado encontrado em <br/>$a. <br/> O host pode estar em baixo ou configurado incorrectamente.';
$string['couldnotmatchcert'] = 'Isto não combina com o certificado publicado actualmente pelo servidor da Internet.';
$string['courses'] = 'Disciplinas';
$string['courseson'] = 'Disciplinas em';
$string['current_transport'] = 'Transporte actual';
$string['currentkey'] = 'Chave pública actual';
$string['databaseerror'] = 'Não foi possível escrever detalhes na base de dados';
$string['deleteaserver'] = 'A apagar um servidor';
$string['deletekeycheck'] = 'Tem a certeza absoluta que quer apagar esta chave?';
$string['deleteoutoftime'] = 'A sua janela de 60 segundos para apagar a esta chave expirou. Por favor comece de novo.';
$string['deleteuserrecord'] = 'SSO ACL: apagar registro para o utilizador \'$a[0]\' de $a[1].';
$string['deletewrongkeyvalue'] = 'Um erro ocorreu. Se você não esta a tentar apagar a chave do SSL do seu servidor, é possível que esteja a ser sujeito a um ataque malicioso. Nenhuma acção foi tomada.';
$string['deny'] = 'Negar';
$string['description'] = 'Descrição';
$string['duplicate_usernames'] = 'Falhamos na criação de um índice nas colunas \"mnethostid\" e \"username\" na tabela utilizador. <br/> Isto pode acontecer quando tens <a href=\"$a\" target=\"_blank\"> nomes de utilizadores duplicados na tabela de utilizador .</a>. <br/> A actualização deve conseguir concluir com sucesso na mesma. Clique sobre o link acima, e instruções de como resolver este problema aparecerão numa nova janela. Pode aceder a isso no final da actualização. <br/>';
$string['editenrolments'] = 'Inscrever';
$string['enabled_for_all'] = '(Este serviço foi ligado para todos os hosts).';
$string['enrolcourseenrol_desc'] = 'Inscrever/Cancelar inscrição de utilizadores desta disciplina usando Inscrições/Matriculas rede Moodle.
Note que utilizadores podem ter sido inscritos nesta disciplina através de outros métodos de inscrição se os hosts remotos os permitirem. 
Tais inscrições estão listadas sob <em> Outros utilizadores inscritos</em>';
$string['enrolcourses_desc'] = 'Disciplinas disponíveis para a inscrição remota por este host.';
$string['enrollingincourse'] = 'Inscrever na disciplina $a[0] no host $a[1]<br />';
$string['enrolments'] = 'Inscrições';
$string['enterausername'] = 'Por favor introduza um utilizador, ou uma lista de nomes do utilizador separados por vírgulas.';
$string['expired'] = 'Esta chave expirou em';
$string['expires'] = 'Válido até';
$string['expireyourkey'] = 'Apagar esta chave';
$string['expireyourkeyexplain'] = 'Moodle varia automaticamente as suas chaves cada 28 dias (por defeito) mas você tem a opção para <em> manualmente </em> expirar esta chave a qualquer hora.
Isto somente será útil se acredita que esta chave foi comprometida.
Uma chave substituta vai ser gerada automaticamente.
Apagar esta chave, vai fazer com que seja impossível para outros utilizadores Moodle comunicar consigo, até que manualmente com cada um dos administradores e lhes forneças a sua nova chave.';
$string['failedaclwrite'] = 'Falhou a escrita da lista de utilizadores \'$a\' para o Controlo de Acesso MNET';
$string['forbidden-function'] = 'Essa função não foi ligada para o RPC.';
$string['forbidden-transport'] = 'O método de transporte que está a tentar usar não é permitido.';
$string['forcesavechanges'] = 'Forçar a gravação de mudanças';
$string['helpnetworksettings'] = 'Configurar comunicação entre-Moodle(s)';
$string['hidelocal'] = 'Esconder utilizadores locais';
$string['hideremote'] = 'Esconder utilizadores remotos';
$string['host'] = 'host';
$string['hostcoursenotfound'] = 'Host ou disciplina não encontrada';
$string['hostdeleted'] = 'Ok - host apagado';
$string['hostexists'] = 'Um registro já existe para esse host e para a distribuição de Moodle com a identificação $a.< Br/> Clique sobre o <em> Continue</em> para editar esse registro.';
$string['hostname'] = 'Nome do Host';
$string['hostnamehelp'] = 'O nome completo qualificado do domínio do host remoto. Exemplo: www.examplo.org';
$string['hostnotconfiguredforsso'] = 'Este Moodle Hub não esta configurado para login remoto.';
$string['hostsettings'] = 'Configurações do host';
$string['http_self_signed_help'] = 'Permitir ligações usando um certificado auto-assinado do DIY SSL no host remoto.';
$string['http_verified_help'] = 'Permitir ligações usando um certificado SSL verificado no PHP no host remoto, mas sobre http (não https).';
$string['https_self_signed_help'] = 'Permitir ligações usando DIY SSL (auto-assinado/auto-atribuido) no PHP no host remoto sobre http.';
$string['https_verified_help'] = 'Permitir ligações usando um certificado SSL verificado no host remoto.';
$string['id'] = 'ID (identificação)';
$string['idhelp'] = 'Este valor é atribuído automaticamente e não pode ser alterado.';
$string['illegalchar-host'] = 'O hostname tem um caracter ilegal: $a';
$string['illegalchar-moodlehome'] = 'A localização do teu Moodle contem caracteres ilegais';
$string['invalidaccessparam'] = 'Parâmetro de acesso inválido.';
$string['invalidactionparam'] = 'Parâmetro de acção inválido.';
$string['invalidhost'] = 'Tem que fornecer um identificador de host válido';
$string['invalidpubkey'] = 'A chave não é uma chave SSL válida.';
$string['invalidurl'] = 'Parâmetro URL inválido';
$string['ipaddress'] = 'Enderesso IP';
$string['is_in_range'] = 'O endereço de IP &nbsp;<code>$a</code>&nbsp; representa um host válido de confiança.';
$string['ispublished'] = 'O $a Moodle activou este serviço para ti.';
$string['issubscribed'] = 'O $a Moodle está a subscrever para este serviço no teu host.';
$string['keydeleted'] = 'A tua chave foi apagada com sucesso e substituída.';
$string['keymismatch'] = 'A chave que pública que você tem para este host é diferente da chave pública que está publicando actualmente.';
$string['last_connect_time'] = 'Último tempo de ligação';
$string['last_connect_time_help'] = 'O tempo que você ligou pela última vez a este host.';
$string['last_transport_help'] = 'O transporte que usou na última ligação a este host.';
$string['loginlinkmnetuser'] = 'Se é um utilizador remoto da rede Moodle e pode <a href=\"$a\">confirmar o seu e-mail aqui </a>, você pode ser redireccionado para a sua página de entrada.';
$string['logs'] = 'Registos';
$string['mnet'] = 'Rede Moodle';
$string['mnet_concatenate_strings'] = 'Concatena (até) 3 strings e devolve o resultado.';
$string['mnet_session_prohibited'] = 'Utilizadores do servidor de casa não tem permissão para navegar $a.';
$string['mnetdisabled'] = 'Rede Moodle está <strong>desligada</strong>.';
$string['mnetenrol'] = 'Inscrições';
$string['mnetlog'] = 'Registos';
$string['mnetpeers'] = 'Peers';
$string['mnetservices'] = 'Serviços';
$string['mnetsettings'] = 'Definições da rede Moodle';
$string['moodle_home_help'] = 'O caminho para a Página principal do Moodle no host remoto. Exemplo: /moodle/';
$string['moodleloc'] = 'Localização do Moodle';
$string['net'] = 'Rede Moodle';
$string['networksettings'] = 'Definições da rede';
$string['never'] = 'Nunca';
$string['noaclentries'] = 'Lista de acesso de controlo SSO sem entradas';
$string['nocurl'] = 'A livraria PHP Curl não está instalada';
$string['nohostid'] = 'Esta página requer um Host ID, que deve ser um número inteiro.';
$string['noipmatch'] = 'O endereço da máquina remota: <br /><em>$a[0]</em><br /> não coincide com aquele registado:<br /><em>$a[1]</em>.';
$string['nolocaluser'] = 'Nenhum registo local existe para o utilizador remoto.';
$string['nomodifyacl'] = 'Não tem permissões para modificar a lista de acesso de controlo MNET.';
$string['nonmatchingcert'] = 'O sujeito do certificado: <br /><em>$a[0]</em><br /> não combina com o host de onde veio:<br /><em>$a[1]</em>.';
$string['nopubkey'] = 'Ocorreu um problema ao recuperar a chave pública. <br/>Talvez o host não permita rede Moodle ou a chave é inválida.';
$string['nosite'] = '(Não conseguiu encontrar o nível do site disciplina)';
$string['nosuchfile'] = 'O ficheiro/função $a não existe.';
$string['nosuchfunction'] = 'Incapaz de encontrar a função, ou a função é proibitiva para o RPC.';
$string['nosuchmodule'] = 'A função foi endereçada incorrectamente e não pode ser encontrada.
Por favor use formato mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Incapaz de obter chave pública para verificação de assinatura.';
$string['nosuchservice'] = 'O serviço RPC não está a correr neste host.';
$string['nosuchtransport'] = 'Não existe transporte com esse ID.';
$string['notBASE64'] = 'Esta string não esá com formato de codificação Base64. Não pode ser uma chave válida.';
$string['notPEM'] = 'Esta chave não está em formato PEM. Não irá funcionar.';
$string['not_in_range'] = 'O endereço de IP &nbsp;<code>$a</code>&nbsp; não representa um host válido de confiança.';
$string['notpermittedtojump'] = 'Você não tem permissão para começar uma sessão remota deste Hub Moodle.';
$string['notpermittedtoland'] = 'Você não tem permissão para começar uma sessão remota.';
$string['off'] = 'Desligado';
$string['on'] = 'Ligado';
$string['otherenrolledusers'] = 'Outros utilizadores inscritos';
$string['permittedtransports'] = 'Transportes permitidos';
$string['phperror'] = 'Um erro interno do PHP preveniu que o seu pedido fosse satisfeito.';
$string['postrequired'] = 'A função de apagar necessita um pedido POST.';
$string['promiscuous'] = 'Promíscuo';
$string['publickey'] = 'Chave pública';
$string['publickey_help'] = 'A chave pública é obtida automaticamente do servidor remoto.';
$string['publish'] = 'Publicar';
$string['reallydeleteserver'] = 'Tem a certeza que quer apagar o servidor.';
$string['receivedwarnings'] = 'Os seguintes avisos foram recebidos';
$string['recordnoexists'] = 'Registo não existente';
$string['reenableserver'] = 'Não – Seleccione esta opção para voltar a ligar este servidor';
$string['registerallhosts'] = 'Registar todos os hosts. (<em>modo Hub</em>)';
$string['registerallhostsexplain'] = 'Você pode escolher registar automaticamente todos os hosts que tentam ligar-se a si.
Isto significa que um registo vai aparecer na tua lista de hosts para qualquer site do Moodle que se ligue a si e que peça a chave pública.
<br/> Você tem a opção abaixo para configurar serviços para \"todos os hosts\" e ao ligar alguns serviços lá, você pode proporcionar indiscriminadamente serviços a qualquer servidor de Moodle.';
$string['remotecourses'] = 'Disciplinas remotas';
$string['remoteenrolhosts_desc'] = 'Inscreve e anula a inscrição da tua instalação Moodle no Moodle Hosts que permite que o faças através do plugin inscrição da rede Moodle.';
$string['remotehost'] = 'Hub remoto';
$string['remotehosts'] = 'Hosts  remotos';
$string['remotemoodles'] = 'Moodles remotos';
$string['requiresopenssl'] = 'A rede Moodle requer a extensão OpennSSl';
$string['restore'] = 'Restaurar';
$string['reviewhostdetails'] = 'Rever detalhes do host';
$string['reviewhostservices'] = 'Rever Serviços do host';
$string['selectaccesslevel'] = 'Por favor, escolha um nível de acesso da lista.';
$string['selectahost'] = 'Por favor, escolha um host Moodle remoto.';
$string['serviceswepublish'] = 'Serviços que publicamos para $a';
$string['serviceswesubscribeto'] = 'Serviços em $a que nós subscrevemos.';
$string['settings'] = 'Definições';
$string['showlocal'] = 'Mostrar utilizadores locais';
$string['showremote'] = 'Mostrar utilizadores remotos';
$string['ssl_acl_allow'] = 'SSO ACL: permitir utlizador $a[0] de $a[1]';
$string['ssl_acl_deny'] = 'SSO ACL: negar utilizador $a[0] de $a[1]';
$string['ssoaccesscontrol'] = 'Controlo de acesso SSO';
$string['ssoacldescr'] = 'Usar esta página para conceder/negar o acesso a utilizadores específicos dos hosts remotos da rede Moodle.
Isto é funcional quando você está oferecendo serviços de SSO a utilizadores remotos.
Para controlar a habilidade de navegar dos utilizadores <em> locais</em>  a outros anfitriões da rede de Moodle, use o sistema dos cargos para conceder-lhes a capacidade <em> mnetcanroam</em>.';
$string['ssoaclneeds'] = 'Para que esta funcionalidade funcione, tem que ter ligado Moodle Networking, mais o plugin de autenticação rede Moodle ligado com coma opção de adicionar automaticamente utilizadores ligada.';
$string['strict'] = 'Estrito';
$string['subscribe'] = 'Subscrever';
$string['system'] = 'Sistema';
$string['testtrustedhosts'] = 'Testar um endereço';
$string['testtrustedhostsexplain'] = 'Introduza um endereço de IP para verificar se é um host de confiança.';
$string['transport_help'] = 'Estas opções são recíprocas, para que possa só forçar a que um host remoto use um certificado SSL atribuído se o teu servidor também tem um certificado SSL atribuído.';
$string['trustedhosts'] = 'Hosts XML-RPC';
$string['trustedhostsexplain'] = '< p> O mecanismo confiado dos hosts permite que as máquinas específicas executem chamadas através de XML-RPC a qualquer parte do Moodle API.
Isto está disponível para que scripts controlem o comportamento de Moodle e pode ser uma opção muito perigosa a permitir. Se na dúvida, mantê-la desligada(off).< /p>
Isto<strong> não</strong> é necessário para a rede Moodle</p>
<p>Para a ligar, introduza uma lista de endereços IP ou redes, uma em cada linha.
Alguns exemplos: :</p>O teu (hosts/máquinas/anfitriões) local: :<br />127.0.0.1<br /> O teu host (com um bloco de rede)):<br />127.0.0.1/32<br />
Só o host com endereço IP 192.168.0.7:<br />192.168.0.7/32<br />
Qualquer hostcom um endereço de Ip entre 192.168.0.1 e 192.168.0.255:<br />192.168.0.0/24<br />
Qualquer host: <br />192.168.0.0/0<br />
Obviamente o último exemplo <strong>não</strong> é uma configuração recomendada.';
$string['unknownerror'] = 'Ocorreu um erro desconhecido durante a negociação.';
$string['usercannotchangepassword'] = 'Não pode modificar a sua password aqui já que é um utilizador remoto.';
$string['userchangepasswordlink'] = '<br /> Talvez tenha que alterar a sua password no seu <a href=\"$a->wwwroot/login/change_password.php\">$a->description</a> fornecedor.';
$string['usersareonline'] = 'Aviso: $a utilizadores daquele servidor estão ligados actualmente ao teu servidor.';
$string['validated_by'] = 'É validade pela rede: &nbsp;<code>$a</code>';
$string['verifysignature-error'] = 'A verificação de assinatura falhou. Ocorreu um erro.';
$string['verifysignature-invalid'] = 'A verificação da assinatura falhou. 
Parece que esta (payload) não foi assinada por ti.';
$string['version'] = 'versão';
$string['warning'] = 'Aviso';
$string['wrong-ip'] = 'O teu endereço de IP não coincide com o endereço que temos nos registos.';
$string['xmlrpc-missing'] = 'Tem que ter XML-RPC instalado na configuração do PHP para conseguir usar esta característica.';
$string['yourhost'] = 'O teu host';
$string['yourpeers'] = 'O teu Peer';

?>
