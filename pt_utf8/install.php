<?PHP // $Id$ 
      // install.php - created with Moodle 1.6.2 (2006050521)


$string['admindirerror'] = 'O directório da administração especificado está errado';
$string['admindirname'] = 'Directório de Administração';
$string['admindirsetting'] = 'Alguns servidores Web utilizam /admin como endereço especial para acceder um panel de controlo, ou algo semelhante. Desafortunadamente, isso cria conflictos com o endereço padrão das páginas de destão do Moodle. Pderá resolver esse problema renomeando o directório admin na sua instalção de Moodle, e escrevendo aqui o novo nome que utilizou. Por exemplo:<br /><br /><b>moodleadmin</b><br /><br />
Isso resolverá o acesso às páginas de gestão do Moodle.';
$string['admindirsettinghead'] = 'A configurar o directório de gestão...';
$string['admindirsettingsub'] = 'Alguns servidores Web utilizam /admin como endereço especial para acceder um panel de controlo, ou algo semelhante. Desafortunadamente, isso cria conflictos com o endereço padrão das páginas de destão do Moodle. Pderá resolver esse problema renomeando o directório admin na sua instalção de Moodle, e escrevendo aqui o novo nome que utilizou. Por exemplo:<br /><br /><b>moodleadmin</b><br /><br />
Isso resolverá o acesso às páginas de gestão do Moodle.';
$string['caution'] = 'Advertência';
$string['chooselanguage'] = 'Escolha uma língua';
$string['chooselanguagehead'] = 'Escolha uma língua';
$string['chooselanguagesub'] = 'Escolha a língua substituta';
$string['compatibilitysettings'] = 'A conferir a configuração do PHP...';
$string['compatibilitysettingshead'] = 'A conferir a configuração do PHP...';
$string['compatibilitysettingssub'] = 'A conferir a língua substituta...';
$string['configfilenotwritten'] = 'O script de instalação não conseguiu crear o ficheiro config.php em forma automática, provavlemente por não ter autorização para escrever no directório do Moodle. Poderá copiar manualmente o código que se segue para um ficheiro que deverá chamar config.php, no directório principal do Moodle.';
$string['configfilewritten'] = 'O ficheiro config.php foi criado com sucesso';
$string['configurationcomplete'] = 'Configuração concluida';
$string['configurationcompletehead'] = 'Configuração concluida';
$string['configurationcompletesub'] = 'Configuração de substituições concluida';
$string['database'] = 'Basde de dados';
$string['databasecreationsettings'] = 'Agora terá que configurar a base de dados onde a maior parte dos dados do Moodle serão armazenados. Essa base de dados será criada automáticamente pelo programa de instalação, usando a configuração no quadro seguinte.<br />
<br /><br />
<b>Tipo:</b> o instalador selecciona inicialmente \"mysql\"<br />
<b>Servidor:</b> nome do servidor; o instalador selecciona inicialmente \"localhost\"<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para acceder à base de dados; o instaldor selecciona inicialmente \"root\"<br />
<b>Contrasenha:</b> para acceder à base de dados<br />
<p>Prefixo das tabelas:</b> um prefixo optativo para os nomes de todas as tabelas na base de dados';
$string['databasecreationsettingshead'] = 'Agora terá que configurar a base de dados onde a maior parte dos dados do Moodle serão armazenados. Essa base de dados será criada automáticamente pelo programa de instalação, usando a configuração no quadro seguinte.';
$string['databasecreationsettingssub'] = '<b>Tipo:</b> o instalador selecciona inicialmente \"mysql\"<br />
<b>Servidor:</b> nome do servidor; o instalador selecciona inicialmente \"localhost\"<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para acceder à base de dados; o instaldor selecciona inicialmente \"root\"<br />
<b>Contrasenha:</b> para acceder à base de dados<br />
<p>Prefixo das tabelas:</b> um prefixo optativo para os nomes de todas as tabelas na base de dados';
$string['databasesettings'] = 'Agora terá que configurar a base de dados onde a maior parte dos dados do Moodle serão armazenados. Essa base de dados deverá ter sido criada previamente, incluindo um nome de utilizador e contrasenha para accedé-la.<br />
<br /><br />
<b>Tipo:</b>mysql ou postgres7<br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para acceder à base de dados<br />
<b>Contrasenha:</b> para acceder à base de dados<br />
<p>Prefixo das tabelas:</b> um prefixo optativo para os nomes de todas as tabelas na base de dados';
$string['databasesettingshead'] = 'Agora terá que configurar a base de dados onde a maior parte dos dados do Moodle serão armazenados. Essa base de dados deverá ter sido criada previamente, incluindo um nome de utilizador e contrasenha para accedé-la.';
$string['databasesettingssub'] = '<b>Tipo:</b>mysql ou postgres7<br />
<b>Servidor:</b> por exemplo, localhost ou db.isp.com<br />
<b>Nome:</b> nome da base de dados, por exemplo, moodle<br />
<b>Utilizador:</b> para acceder à base de dados<br />
<b>Contrasenha:</b> para acceder à base de dados<br />
<p>Prefixo das tabelas:</b> um prefixo optativo para os nomes de todas as tabelas na base de dados';
$string['dataroot'] = 'Directório de dados';
$string['datarooterror'] = 'Não foi possível encontrar ou criar o directório de dados que indicou. Terá que tentar corrigir o caminho que indicou, ou criar o directório manualmente.';
$string['dbconnectionerror'] = 'Não foi possível estabelecer a ligação à base de dados que indicou. Por favor verifique a configuração dessa base de dados.';
$string['dbcreationerror'] = 'Erro na criação da base de dados. Não foi possível criar a base de com o nome e configurações que indicou.';
$string['dbhost'] = 'Servidor anfitrão';
$string['dbpass'] = 'Palavra chave';
$string['dbprefix'] = 'Prfixo das tabelas';
$string['dbtype'] = 'Tipo';
$string['dbwrongencoding'] = 'A base de dados seleccionada está a funcionar com uma codificação de caracteres não recomendada ($a). Seria melhor usar uma base de dados com codificação Unicode (UTF-8). De qualquer forma, poderá proceder com a base de dados que indicou, seleccionando \"Não testar codificação da Base de Dados\" aqui em baixo, mas poderá ter problemas no futuro.';
$string['directorysettings'] = '<p>Por favor confira a localizações para esta instalção do Moodle</p>

<p><b>Endereço Web:</b>
Indique o endereço web completo que será usado para aceder ao Moodle. Se o seu sítio pode ser acedido com vários URL diferentes, seleccione o que seja mais natural para os alunos que usarem o Moodle. Não inclua a barra (/) no fim do URL.</p>

<p><b>Directório do Moodle:</b>
Indique o caminho completo do directório desta instalação, no disco do servidor. Tenha atenção com a distinção entre maiúsculas e minúsculas.</p>

<p><b>Directório de dados:</b>
Precisa de um local onde armazenar os ficheiros enviados para o Moodle. Esse directório deverá dar permissões de escrita e leitura ao utilizador que estiver a executar o servidor Web (geralmente, \'nobody\', \'apache\' ou \'www-data\'), mas não deverá ser acessível directamente via Web.</p>';
$string['directorysettingshead'] = 'Por favor confira as localizações para esta instalação do Moodle';
$string['directorysettingssub'] = '<b>Endereço Web:</b>
Indique o endereço web completo que será usado para aceder ao Moodle. Se o seu sítio pode ser acedido com vários URL diferentes, seleccione o que seja mais natural para os alunos que usarem o Moodle. Não inclua a barra (/) no fim do URL.
<br />
<br />
<b>Directório do Moodle:</b>
Indique o caminho completo do directório desta instalação, no disco do servidor. Tenha atenção com a distinção entre maiúsculas e minúsculas.
<br />
<br />
<b>Directório de dados:</b>
Precisa de um local onde armazenar os ficheiros enviados para o Moodle. Esse directório deverá dar permissões de escrita e leitura ao utilizador que estiver a executar o servidor Web (geralmente, \'nobody\', \'apache\' ou \'www-data\'), mas não deverá ser acessível directamente via Web.';
$string['dirroot'] = 'Directório do Moodle';
$string['dirrooterror'] = 'O \'Directório do Moodle\' indicado parece esaerrado - não conseguimos encontrar uma instalação do Moodle nesse directório. O nome foi alterado para o valor que se mostra em baixo';
$string['download'] = 'Descarregar';
$string['downloadlanguagebutton'] = 'Descarregar o pacote linguístico \"$a\"';
$string['downloadlanguagehead'] = 'Descarregar pacote linguístico';
$string['downloadlanguagenotneeded'] = 'Pode continuar com o processo de instalação usando o pacote linguístico \"$a\".';
$string['downloadlanguagesub'] = 'Agora pode obtar por descarregar um pacote linguístico e contunuar com o processo de instalação nessa língua.<br /><br />Se não conseguir descarregar o pacote linguístico, o processo de instalação continuará em inglês. (Uma vez a instalação for concluida, terá a oportunidade de descarregar e instalar pacotes linguísticos adicionais.)';
$string['environmenthead'] = 'A verificar o seu ambiente ...';
$string['environmentsub'] = 'Estamos a verificar que os vários componentes do seu sistema estejam de acordo com os requerimentos do sistema';
$string['fail'] = 'Falha';
$string['fileuploads'] = 'Envio de ficheiros';
$string['fileuploadserror'] = 'Isto deveria estar activo';
$string['fileuploadshelp'] = '<p>O envio de ficheiros parece não estar habilitado no seu servidor.</p>

<p>Moodle poderá ainda ser instalado, mas sem essa funcionalidade, não poderá enviar ficheiros de uma disciplina nem fotografias de utilizadores.</p>

<p>Para habilitar o envio de ficheiros terá que editar (ou pedir ao administrador do sistema que o faça) o ficheiro principal php.ini do seu sistema, modificando o valor de <b>file_upload</b> para \'1\', e reiniciando o servidor Web.</p>';
$string['gdversion'] = 'Versão do GD';
$string['gdversionerror'] = 'A biblioteca GD deverá estar presente para processar e criar imagens.';
$string['gdversionhelp'] = '<p>O seu servidor não parece ter GD instalado.</p>

<p>GD é uma biblioteca que o PHP precisa para permitir que o Moodle processe imagens (por exemplo, para criar os icones com as fotos dos utilizadores). Moodle poderá ainda funcionar sem GD - simplesmente essas funcionalidades não estarão disponíveis.</p>

<p>Para adicionar GD ao PHP, em Unix, compile o PHP usando o parâmetro --with-gd.</p>

<p>Em windows, normalmente poderá editar php.ini e descomentar a linha que faz referência a php_gd2.dll.</p>';
$string['globalsquotes'] = 'Variáveis Globais manipuladas em forma insegura';
$string['globalsquoteserror'] = 'Corrija as sua configuração do PHP: desactive o register_globals e/ou active magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Não se recomenda a combinação simultânea de Magic Quotes GPC desactivada e Register Globals activa.</p>

<p>A configuração recomendada no seu ficheiro php.ini é <b>magic_quotes_gpc = On</b> e <b>register_globals = Off</b>

<p>Se não tiver acesso ao seu ficheiro php.ini, poderá colocar a linha seguinte num ficheiro com nome .htaccess, no seu directório do Moodle:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Instalação';
$string['langdownloaderror'] = 'Desafortunadamente, a língua \"$a\" não foi instalada. O processo de instalação continuará em inglês.';
$string['langdownloadok'] = 'A língua \"$a\" foi instalada com êxito. O processo de instalação continuará nessa língua.';
$string['magicquotesruntime'] = '\"Magic Quotes Run Time\"';
$string['magicquotesruntimeerror'] = 'Isto deveria estar desactivado';
$string['magicquotesruntimehelp'] = '<p>\"Magic Quotes Run Time\" deveria ser desactivado para que o Moodle funcione correctamente</p>

<p>Normalmente, encontra-se desactivado por omissão...confira o estado de <b>magic_quotes_runtime</b> no seu ficheiro php.ini.</p>

<p>Se não tiver acesso ao seu ficheiro php.ini, poderá colocar a linha seguinte num ficheiro com nome .htaccess, no seu directório do Moodle:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Limite de memoria';
$string['memorylimiterror'] = 'O limite de memoria imposto ao PHP é muito baixo... poderá ter problemas mais tarde.';
$string['memorylimithelp'] = '<p>Actualmente o seu servidor impõe ao PHP um limite de memoria de $a.</p>

<p>Isso poderá causar mais tarde problemas de memoria, especialmente se tiver um grande número de módulos activos e/ou um número elevado de utilizadores.</p>

<p>Recomendamos que configure o PHP com um limite maior, por exemplo, 16M.
Existem várias formas que pode tentar para fazer essa alteração:</p>
<ol>
<li>Se poder, recompile o PHP com <i>--enable-memory-limit</i>.
Isso permitirá que o próprio Moodle modifique o limite de memoria.</li>
<li>Se tiver acesso ao seu ficheiro php.ini, poderá modificar o valor de <b>memory_limit</b> para algo como 16M. Se não tiver acesso, poderá pedir ao adiminstrador do seu sistema que o faça</li>
<li>Em alguns servidores PHP poderá criar um ficheiro .htaccess, no directório do Moodle, com a linha seguinte:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>No entanto, em alguns servidores isso faz com que nenhuma página PHP funcione (verá erros quando tentar ver as páginas) e terá que apagar o ficheiro .htaccess.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'Como o PHP não tem sido configurado conrrectamente com a extensão MySQL, não pode comunicar com MySQL. Por favor verifique o seu ficheiro php.ini ou recompile o PHP.';
$string['pass'] = 'Passa';
$string['phpversion'] = 'Versão do PHP';
$string['phpversionerror'] = 'A versão do PHP deverá ser, pelo menos, 4.1.0';
$string['phpversionhelp'] = '<p>Moodle precisa da vesão 4.3.0 ou posterior do PHP (excluindo 5.0.x, que produz vários erros; a partir de 5.1.0 já não há problema).</p>
<p>Actualmente está a utilizar a versão $a</p>
<p>Deverá actualizar o PHP ou migrar para outro servidor com uma versão do PHP mais recente!</p>
(No caso da versão 5.0.x, poderá regredir para uma versão 4.4.x)</p>';
$string['safemode'] = 'Modo seguro';
$string['safemodeerror'] = 'Moodle poderá ter problemas com o modo seguro';
$string['safemodehelp'] = '<p>Moodle poderá ter uma variedade de problemas com o modo seguro activo; um dos piores problemas é que provavelmente não terá autorização para criar novos ficheiros.</p>

<p>Geralmente o modo seguro só é activado por alguns  administradores paranoicos de sítios Web públicos, assim que poderá ter que procurar outra entidade para alojar o seu sítio Moodle.</p>

<p>Se quiser, pode tentar avançar com a instalação, mas esteja preparado para possíveis problemas mais tarde.</p>';
$string['sessionautostart'] = 'Auto-início de sessão';
$string['sessionautostarterror'] = 'Isto deveria estar desactivado';
$string['sessionautostarthelp'] = 'Moodle precisa do suporte de sessões e não fucniona sem ele.</p>

<p>O uso de sessões poderá ser activado no ficheiro php.ini... procure o parâmetro session.auto_start.</p>';
$string['skipdbencodingtest'] = 'Não testar codificação da Base de Dados';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Está a ver esta página porque o pacote <strong>$a->packname $a->packversion</strong> foi instalado e posto a funcionar com sucesso no seu computador. Parabens!';
$string['welcomep30'] = 'Esta versão do <strong>$a->installername</strong> inclui aplicações para criar um ambiente onde o <strong>Moodle</strong> possa funcionar, nomeadamente:';
$string['welcomep40'] = 'Este pacote também inclui <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'A utilização de todas as aplicações neste pacote está regida pelas respectivas licenças. O pacote <strong>$a->installername</strong> completo é <a href=\"http://www.opensource.org/docs/definition_plain.html\">open source</a> distribuido nos termos da licença <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'As páginas seguintes vão conduzí-lo por alguns passos simples de seguir para configurar o <strong>Moodle</strong> no seu computador. Poderá aceitar as configurações seleccionadas por omissão, ou, opcionalmente, usar outras configurações mais apropriadas às suas necessidades.';
$string['welcomep70'] = 'Clique no botão \"Seguinte\" em baixo, para continuar com a configuração do <strong>Moodle</strong>.';
$string['wwwroot'] = 'Endereço Web';
$string['wwwrooterror'] = 'O \'Endereço Web\' não parece ser válido - esta instalação do Moodle não parece estar lá. O endereço foi modificado para o que se mostra em baixo.';

?>
