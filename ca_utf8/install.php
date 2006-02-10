<?PHP // $Id$ 
      // install.php - created with Moodle 1.6 development (2005101200)


$string['admindirerror'] = 'El directori d\'administració especificat és incorrecte';
$string['admindirname'] = 'Directori d\'administració';
$string['admindirsetting'] = 'Alguns servidors web utilitzen un URL especial /admin per accedir a un tauler de control o quelcom semblant. Malauradament aquesta és també la ubicació estàndard de les pàgines d\'administració de Moodle. Podeu arreglar aquest problema canviant el nom del directori d\'administració de Moodle en la vostra instal·lació i posant el nou nom aquí. Per exemple:<br /> <br /><b>moodleadmin</b><br /> <br />
Això modificarà els enllaços d\'administració de Moodle.';
$string['admindirsettinghead'] = 'S\'està configurant el directori d\'administració...';
$string['admindirsettingsub'] = 'Alguns proveïdors d\'espai web utilitzen /admin com una adreça URL especial per accedir a un tauler de control o quelcom semblant. Malauradament això interfereix amb la ubicació estàndard de les pàgines d\'administració de Moodle. Podeu solucionar aquest problema canviant el nom del directori admin en la vostra instal·lació i introduint aquí el nou nom. Per exemple: <br /> <br /><b>moodleadmin</b><br /> <br />
Això repararà tots els enllaços d\'administració de Moodle.';
$string['caution'] = 'Alerta';
$string['chooselanguage'] = 'Trieu un idioma';
$string['chooselanguagehead'] = 'Trieu un idioma';
$string['compatibilitysettings'] = 'S\'estan comprovant els paràmetres del PHP...';
$string['compatibilitysettingshead'] = 'S\'estan comprovant els paràmetres del PHP...';
$string['configfilenotwritten'] = 'La seqüència d\'instal·lació no ha estat capaç de crear automàticament un fitxer config.php que contingui els paràmetres que heu triat, probablement perquè no pugui escriure al directori de Moodle. Podeu copiar a mà el codi següent en un fitxer anomenat config.php dins del directori arrel de Moodle.';
$string['configfilewritten'] = 'S\'ha creat amb èxit el fitxer config.php';
$string['configurationcomplete'] = 'S\'ha completat la configuració';
$string['configurationcompletehead'] = 'S\'ha completat la configuració';
$string['database'] = 'Base de dades';
$string['databasecreationsettings'] = 'Ara cal configurar els paràmetres de la base de dades on s\'emmagatzemara la majoria de dades de Moodle. L\'instal·lador Moodle4Windows crearà automàticament aquesta base de dades amb els paràmetres que especifiqueu aquí.<br /><br /><br />
<b>Tipus:</b> mysql (determinat per l\'instal·lador).<br />
<b>Servidor:</b> localhost (determinat per l\'instal·lador.<br />
<b>Nom:</b> nom de la base de dades, p. ex. moodle.<br />
<b>Usuari:</b> root (determinat per l\'instal·lador).<br />
<b>Contrasenya</b>: la vostra contrasenya per a la base de dades.<br />
<b>Prefix de les taules:</b>: prefix opcional per als noms de les taules.';
$string['databasecreationsettingshead'] = 'Ara cal configurar els paràmetres de la base de dades on s\'emmagatzemaran la majoria de dades de Moodle. L\'instal·lador crearà automàticament aquesta base de dades amb els paràmetres que especifiqueu aquí.';
$string['databasecreationsettingssub'] = '<b>Tipus:</b> fixat a \"mysql\" per l\'instal·lador<br />
<b>Servidor:</b> fixat a \"localhost\" per l\'instal·lador<br />
<b>Nom:</b> nom de la base de dades, p. ex. moodle<br />
<b>Usuari:</b> fixat a \"root\" per l\'instal·lador<br />
<b>Contrasenya:</b> la contrasenya de l\'usuari \"root\" de la base de dades<br />
<b>Prefix de les taules:</b> prefix opcional per utilitzar en els noms de totes les taules';
$string['databasesettings'] = 'Ara cal configurar la base de dades on s\'emmagatzemaran la majoria de dades de Moodle. Aquesta base de dades s\'ha d\'haver crear abans i cal tenir un nom d\'usuari i una contrasenya per accedir-hi.<br />
<br /> <br />
<b>Tipus:</b> mysql o postgres7<br />
<b>Servidor:</b> p. ex. localhost o db.isp.com<br />
<b>Nom:</b> nom de la base de dades, p. ex. moodle<br />
<b>Usuari:</b> nom de l\'usuari de la base de dades<br />
<b>Contrasenya:</b> contrasenya de l\'usuari de la base de dades<br />
<b>Prefix de les taules:</b> prefix opcional per utilitzar en els noms de totes les taules';
$string['databasesettingshead'] = 'Ara cal configurar la base de dades on s\'emmagatzemaran la majoria de dades de Moodle. Aquesta base de dades s\'ha d\'haver crear abans i cal tenir un nom d\'usuari i una contrasenya per accedir-hi.';
$string['databasesettingssub'] = '<b>Tipus:</b> mysql o postgres7<br />
<b>Servidor:</b> p. ex. localhost o db.isp.com<br />
<b>Nom:</b> nom de la base de dades, p. ex. moodle<br />
<b>Usuari:</b> nom de l\'usuari de la base de dades<br />
<b>Contrasenya:</b> contrasenya de l\'usuari de la base de dades<br />
<b>Prefix de les taules:</b> prefix opcional per utilitzar en els noms de totes les taules';
$string['dataroot'] = 'Directori de dades';
$string['datarooterror'] = 'No s\'ha pogut trobar o crear el directori de dades que heu especificat. Corregiu el camí o creeu el directori a mà.';
$string['dbconnectionerror'] = 'No es pot obrir la connexió amb la base de dades que heu especificat. Comproveu els paràmetres de la base de dades.';
$string['dbcreationerror'] = 'Error en la creació de la base de dades. No s\'ha pogut crear la base de dades amb els paràmetres proporcionats.';
$string['dbhost'] = 'Ordinador servidor';
$string['dbpass'] = 'Contrasenya';
$string['dbprefix'] = 'Prefix de taules';
$string['dbtype'] = 'Tipus';
$string['dbwrongencoding'] = 'La base de dades que heu seleccionat està funcionant amb una codificació ($a) no recomanada. Seria millor utilitzar una base de dades amb codificació Unicode (UTF-8). De totes maneres, podeu deixar de banda aquesta prova si seleccioneu més avall \"Omet la prova de codificació de la base de dades\", però podríeu experimentar problemes en el futur.';
$string['directorysettings'] = '<p>Confirmeu les ubicacions d\'aquesta instal·lació de Moodle.</p>

<p><b>Adreça web:</b>
Especifiqueu l\'adreça web completa per a accedir a Moodle. Si el vostre lloc és accessible per mitjà de diversos URL, trieu el més natural per als estudiants. No inclogueu la barra final.</p>

<p><b>Directori de Moodle:</b>
Especifiqueu el camí complet del directori d\'aquesta instal·lació. Assegureu-vos que les majúscules/minúscules són correctes.</p>

<p><b>Directori de dades:</b>
Necessiteu un lloc on Moodle pugui desar els fitxers que es pengin. L\'usuari del servidor web (generalment \'nobody\' o \'apache\') ha de tenir permisos de lectura i d\'ESCRIPTURA en aquest directori, però no hauria de ser accessible directament per web.</p>';
$string['directorysettingshead'] = 'Confirmeu les ubicacions d\'aquesta instal·lació de Moodle.';
$string['directorysettingssub'] = '<b>Adreça web:</b>
Especifiqueu l\'adreça web completa per a accedir a Moodle. Si el vostre lloc és accessible per mitjà de diversos URL, trieu el més natural per als estudiants. No inclogueu la barra final.</p>
<br /><br />
<b>Directori de Moodle:</b>
Especifiqueu el camí complet del directori d\'aquesta instal·lació. Assegureu-vos que les majúscules/minúscules són correctes.</p>
<br /><br />
<b>Directori de dades:</b>
Necessiteu un lloc on Moodle pugui desar els fitxers que es pengin. L\'usuari del servidor web (generalment \'nobody\' o \'apache\') ha de tenir permisos de lectura i d\'ESCRIPTURA en aquest directori, però no hauria de ser accessible directament via web.</p>';
$string['dirroot'] = 'Directori de Moodle';
$string['dirrooterror'] = 'El paràmetre \'Directori de Moodle\' sembla incorrecte: no s\'hi ha pogut trobat cap instal·lació de Moodle. S\'ha reiniciat el valor del paràmetre.';
$string['download'] = 'Baixa';
$string['environmenthead'] = 'S\'està comprovant el vostre entorn';
$string['fail'] = 'Error';
$string['fileuploads'] = 'Càrrega de fitxers';
$string['fileuploadserror'] = 'Hauria d\'estar habilitada';
$string['fileuploadshelp'] = '<p>Sembla que la càrrega de fitxers està inhabilitada al vostre servidor.</p>

<p>Moodle es pot instal·lar igualment, però sense aquesta capacitat no podreu penjar fitxers als cursos o imatges dels usuaris.</p>

<p>Per habilitar la càrrega de fitxers cal editar el fitxer php.ini principal del sistema i posar el paràmetre <b>file_uploads</b> a \'1\'.</p>';
$string['gdversion'] = 'Versió GD';
$string['gdversionerror'] = 'La biblioteca GD hauria d\'estar present per processar i crear imatges';
$string['gdversionhelp'] = '<p>Sembla que el vostre servidor no té instal·lat el GD.</p>

<p>GD és una biblioteca requerida pel PHP per tal que Moodle pugui processar imatges (p. ex. les icones dels perfils d\'usuari) i crear imatges noves (p. ex. els gràfics dels registres d\'activitat). Moodle pot funcionar sense GD, però aquestes característiques no estaran disponibles.</p>

<p>Per afegir GD al PHP en Unix, compileu el PHP amb el paràmetre --with-gd.</p>

<p>En Windows generalment es pot editar el fitxer php.ini i treure el comentari de la línia que porti la referència a libgd.dll.</p>';
$string['globalsquotes'] = 'Gestió insegura dels globals';
$string['globalsquoteserror'] = 'Arregleu els paràmetres del vostre PHP: inhabiliteu register_globals i/o habiliteu magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>No s\'aconsella tenir inhabilitat Magic Quotes GPC i tenir alhora habilitat Register Globals.</p>

<p>La configuració recomanada és <b>magic_quotes_gpc = On</b> i <b>register_globals = Off</b> en el fitxer php.ini</p>

<p>Si no teniu accés al php.ini, potser podreu afegir les línies següents en un fitxer anomenat .htaccess dins del directori Moodle:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p> ';
$string['installation'] = 'Instal·lació';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Hauria d\'estar desactivat';
$string['magicquotesruntimehelp'] = '<p>Aquest paràmetre hauria d\'estar desactivat per tal que Moodle funcioni correctament.</p>

<p>Normalment està desactivat per defecte. Comproveu el valor de <b>magic_quotes_runtime</b> al vostre fitxer php.ini.</p>

<p>Si no teniu accés al php.ini, hauríeu de col·locar la línia següent en un fitxer anomenat .htaccess dins del directori de Moodle:
<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Límit de memòria';
$string['memorylimiterror'] = 'El límit de memòria del PHP està definit una mica baix. Podeu tenir problemes més endavant.';
$string['memorylimithelp'] = '<p>El límit de memòria del PHP del vostre servidor actualment està definit en $a.</p>

<p>Això pot causar que Moodle tingui problemes de memòria més endavant, especialment si teniu molts mòduls habilitats i/o molts usuaris.</p>

<p>És recomanable que configureu el PHP amb un límit superior, com ara 16 MB, sempre que sigui possible. Hi ha diverses maneres de fer això:</p>
<ol>
<li>Si podeu, recompileu el PHP amb <i>--enable-memory-limit</i>. Això permetrà que Moodle defineixi el límit de memòria per si mateix.</li>
<li>Si teniu accés al fitxer php.ini, podeu canviar el paràmetre <b>memory_limit</b> a 16M. Si no hi teniu accés podeu demanar al vostre administrador que ho faci ell.</li>
<li>En alguns servidors PHP podeu crear un fitxer .htaccess dins del directori de Moodle amb aquesta línia:
<p><blockquote>php_value memory_limit 16M</blockquote></p>
<p>Tanmateix, en alguns servidors això farà que no funcioni <b>cap</b> pàgina PHP (es visualitzaran errors) en el qual cas hauríeu de suprimir el fitxer .htaccess.</p></li>
</ol>';
$string['mysqlextensionisnotpresentinphp'] = 'El PHP no s\'ha configurat correctament amb l\'extensió MySQL per tal que es pugui comunicar amb MySQL. Comproveu el fitxer php.ini o recompileu el PHP.';
$string['pass'] = 'Correcte';
$string['phpversion'] = 'Versió PHP';
$string['phpversionerror'] = 'La versió del PHP ha de ser com a mínim la 4.1.0';
$string['phpversionhelp'] = '<p>Moodle necessita la versió de PHP 4.1.0 o posterior.</p>
<p>A hores d\'ara esteu utilitzant la versió $a.</p>
<p>Us caldrà actualitzar el PHP o traslladar Moodle a un ordinador amb una versió de PHP més recent.</p>';
$string['safemode'] = 'Mode segur';
$string['safemodeerror'] = 'Moodle pot tenir problemes amb el mode segur activat';
$string['safemodehelp'] = '<p>Moodle pot tenir diversos problemes amb el mode segur activat. Probablement no podrà crear fitxers nous.</p>

<p>Normalment el mode segur només està habilitat en servidors webs públics una mica paranoics, de manera que és probable que hàgiu de buscar un altre servei d\'allotjament per al vostre Moodle.</p>

<p>Podeu continuar la instal·lació si voleu, però trobareu problemes de funcionament més endavant.</p>';
$string['sessionautostart'] = 'Autoinici de sessió';
$string['sessionautostarterror'] = 'Hauria d\'estar desactivat';
$string['sessionautostarthelp'] = '<p>Moodle necessita suport per a sessions i no funcionarà sense.</p>

<p>Les sessions es poden habilitar en el fitxer php.ini. Comproveu el paràmetre session.auto_start.</p>';
$string['skipdbencodingtest'] = 'Omet la prova de codificació de la base de dades';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Esteu veient aquesta pàgina perquè heu instal·lat amb èxit i heu executat el paquet <strong>$a->packname $a->packversion</strong>. Felicitacions!';
$string['welcomep30'] = 'Aquesta versió de <strong>$a->installername</strong> inclou les aplicacions necessàries per crear un entorn en el qual funcioni <strong>Moodle</strong>:';
$string['welcomep40'] = 'El paquet inclou també <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'L\'ús de totes les aplicacions d\'aquest paquet és governat per les seves llicències respectives. El paquet <strong>$a->installername</strong> complet és 
<a href=\"http://www.opensource.org/docs/definition_plain.html\">codi font obert</a> i es distribueix 
sota llicència <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Les pàgines següents us guiaran per una sèrie de passos fàcils de seguir per configurar <strong>Moodle</strong> en el vostre ordinador. Podeu acceptar els paràmetres per defecte o, opcionalment, modificar-los perquè s\'ajustin a les vostres necessitats.';
$string['welcomep70'] = 'Feu clic en el botó \"Següent\" per continuar la configuració de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Adreça web';
$string['wwwrooterror'] = 'L\'adreça web no sembla vàlida. La instal·lació de Moodle no sembla que sigui en aquesta ubicació,';

?>
