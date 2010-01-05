<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.5+ (Build: 20091007) (2007101553)


$string['check_configrw_details'] = '<p>Recomiéndase que los permisos de ficheru en config.php se cambien n\'acabando la instalación pa que\'l ficheru nun se pueda modificar dientro\'l servidor.
Por favor, tenga presente qu\'esta medida nun aumenta la seguridá del servidor, que sigue estando espuestu.</p>';
$string['check_configrw_name'] = 'config.php escribible';
$string['check_configrw_ok'] = 'config.php nun pue cambiase con scripts PHP.';
$string['check_configrw_warning'] = 'Scripts PHP pueden cambiar config.php.';
$string['check_cookiesecure_details'] = '<p>Si activa la comunicación https recomiéndase que, tamién, active cookies segures. Tamién debería amestar una redireición permanente dende http a https.</p>';
$string['check_cookiesecure_error'] = 'Por favor, active cookies segures';
$string['check_cookiesecure_name'] = 'Cookies segures';
$string['check_cookiesecure_ok'] = 'Cookies segures activaes.';
$string['check_courserole_anything'] = 'La capacidá \"doanything\"  debería nun tar permitida nesti <a href=\"$a\">contestu/a>.';
$string['check_courserole_details'] = '<p>Caún los cursos fizo una matriculación por defeutu específica. Asegúrese de que nun hai riesgos nestes matrícules nin papeles (roles).</p>
<p>L\'únicu tipu de papel(rol) heredáu por defeutu nun cursu por defeutu ye <em>Estudiante</em>.</p>';
$string['check_courserole_error'] = '¡Atopárense papeles (roles) definíos por defeutu que son incorreutos!';
$string['check_courserole_name'] = 'Papeles (roles) por defeutu (cursos)';
$string['check_courserole_notyet'] = 'Usar namás papeles (roles) por defeutu nel cursu.';
$string['check_courserole_ok'] = 'La definición de papeles (roles) por defeutu nos cursos ta bien.';
$string['check_courserole_risky'] = 'Atopárense posibilidaes de riesgu en <a href=\"$a\">contestu/a>.';
$string['check_courserole_riskylegacy'] = 'Tipu heredáu con riesgu deteutáu en <a href=\"$a->url\">$a->shortname</a>.';
$string['check_defaultcourserole_anything'] = 'La capacidá \"doanything\" nun debería tar permitida nesti <a href=\"$a\">contestu/a>.';
$string['check_defaultcourserole_details'] = '<p>El papel(rol) por defeutu d\'estudiante pa la matricula nun cursu especifica el papel(rol) por defeutu pa los cursos. Por favor asegúrese de que nun hai riesgos de seguridá nesti papel (rol).</p>
<p>L\'únicu tipu heredáu soportáu como papel (rol) por defeutu ye <em>Estudiante</em>.</p>';
$string['check_defaultcourserole_error'] = '¡Atopóse un papel(rol) \"$a\" por defeutu pal cursu incorreutu!';
$string['check_defaultcourserole_legacy'] = 'Deteutárense tipos heredaos con riesgu.';
$string['check_defaultcourserole_name'] = 'Papel (rol) por defeutu del cursu (global)';
$string['check_defaultcourserole_notset'] = 'El papel (rol) por defeutu nun ta activu.';
$string['check_defaultcourserole_ok'] = 'La definición de papel (rol) por defeutu ta bien.';
$string['check_defaultcourserole_risky'] = 'Atopárense posibilidaes de riesgu en <a href=\"$a\">contestu/a>.';
$string['check_defaultuserrole_details'] = '<p>Cada vez que los usuarios s\'identifiquen dáse-yos les capacidaes del papel (rol) por defeutu. Por favor asegúrese que que nun hai riesgos de seguridá nesti papel (rol).</p>
<p>L\'únicu tipu heredáu soportáu por defeutu ye <em>Usuariu autentificáu</em>. La posibilidá de ver el cursu nun debería tar activa.</p>';
$string['check_defaultuserrole_error'] = '¡El papel(rol) d\'usuariu por defeutu \"$a\" ta mal definíu!';
$string['check_defaultuserrole_name'] = 'Papel(rol) por defeutu pa tolos usuarios.';
$string['check_defaultuserrole_notset'] = 'El papel(rol) por defeutu ta ensin activar.';
$string['check_defaultuserrole_ok'] = 'La definición de papel(rol) por defeutu pa tolos usuarios  ta bien.';
$string['check_displayerrors_details'] = '<p>Activar la carauterística PHP <code>display_errors</code> nun se recomienda en llugares productivos porque los mensaxes d\'erru puen dar información sensible del so servidor.</p>';
$string['check_displayerrors_error'] = 'La carauterística PHP d\'amosar erros ta activa. Recomiéndase que la desactive.';
$string['check_displayerrors_name'] = 'Amosar erros de PHP';
$string['check_displayerrors_ok'] = 'Amosar erros de PHP desactiváu.';
$string['check_emailchangeconfirmation_details'] = '<p>Recomiéndase que se pida una confirmación por email a los usuarios que cambien el so corréu ellectrónicu nel so perfil. Si ta desactiváu, los spammers puen facer por reventar el servidor unviando spam.</p>
<p>El campu de corréu ellectrónicu debería tar amás peslláu  pa los plugins d\'autentificación, posibilidá non considerada equí.</p>';
$string['check_emailchangeconfirmation_error'] = 'Los usuarios puen escribir cualquier direición de corréu ellectrónicu.';
$string['check_emailchangeconfirmation_info'] = 'Los usuarios puen namás escribir direiciones de corréu ellectrónicu de dominios permitíos.';
$string['check_emailchangeconfirmation_name'] = 'Confirmación de cambiu de direición de corréu ellectrónicu.';
$string['check_emailchangeconfirmation_ok'] = 'Confirmación de cambiu de corréu ellectrónicu nel perfil del usuariu.';
$string['check_embed_details'] = '<p>L\'unvíu d\'oxetos insertaos ensin tasa ye mui pelligroso - cualquier usuariu rexistráu pue facer un ataque XSS a otru servidor. Esta carauterística tendría de tar deactivada en servidores productivos.</p>';
$string['check_embed_error'] = 'Capacidá d\'inxertar oxetos ensin tasa activo - esto ye mui pelligroso na mayor parte los servidores.';
$string['check_embed_name'] = 'Permitir EMBED y OBJECT';
$string['check_embed_ok'] = 'Capacidá d\'inxertar oxetos ensin tasa nun ta permitida.';
$string['check_frontpagerole_details'] = '<p>El papel (rol) por defeutu na páxina d\'entamu dase a tolos usuarios rexistraos nes actividaes de la páxina d\'entamu. Por favor, asegúrese de que nun hai riesgos de seguridá nesti papel (rol).</p>
<p>Recomiéndase crear un papel (rol) especial pa estos casos y nun usar un rol por herencia.</p>';
$string['check_frontpagerole_error'] = '¡Atopóse un papel (rol) \"$a\" incorreutamente definíu na páxina d\'entamu!';
$string['check_frontpagerole_name'] = 'Papel (rol) de la páxina d\'entamu';
$string['check_frontpagerole_notset'] = 'Papel (rol) de la páxina d\'entamu ensin activar.';
$string['check_frontpagerole_ok'] = 'La definición de papel (rol) de la páxina d\'entamu ta bien.';
$string['check_globals_details'] = '<p>Register globals considérase una carauterística mui insegura de PHP.</p>
<p><code>register_globals=off</code> debería apaecer así na configuración PHP. Esta carauterística pue controlase editando <code>php.ini</code>, Apache/IIS configuration o <code>.htaccess</code> file.</p>';
$string['check_globals_error'] = 'Register globals DEBERÍA tar desactivada. ¡Por favor, igüe les carauterístiques PHP del servidor de manera inmediata!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Register globals ta desactiváu.';
$string['check_google_details'] = '<p>La carauterística Open to Google permite buscar en buscadores pa entrar como convidaos a cursos. Nun hai motivu p\'activar esta carauterística si la carauterística entrar como convidáu nun ta disponible.</p>';
$string['check_google_error'] = 'L\'accesu al motor de busca ta permitíu, pero la entrada como convidáu ta desactivada.';
$string['check_google_info'] = 'Los motores de busca puen entrar como convidaos.';
$string['check_google_name'] = 'Open to Google';
$string['check_google_ok'] = 'La entrada al motor de busca nun ta activada.';
$string['check_guestrole_details'] = '<p>El papel(rol) de convidáu úsase pa xente ensin identificar  o convidaos temporales al cursu. Asegúrese que que nun hai nenguna posibilidá de riesgu nesti papel (rol).</p>
<p>L\'únicu tipu soportáu de papel (rol) heredáu pal papel convidáu ye <em>Convidáu</em>.</p>';
$string['check_guestrole_error'] = 'El papel(rol) convidáu \"$a\" ta mal definíu.';
$string['check_guestrole_name'] = 'Papel(rol) Convidáu';
$string['check_guestrole_notset'] = 'Papel (rol) convidáu nun ta activu.';
$string['check_guestrole_ok'] = 'La definición del papel convidáu ta bien.';
$string['check_mediafilterswf_details'] = '<p>La inxerción automática de códigu swf ye mui pelligrosa - cualquier usuariu rexistráu pue facer un ataque XSS escontra otru servidor o usuariu. Por favor, desactive esta carauterística en servidores mui productivos.</p>';
$string['check_mediafilterswf_error'] = 'El filtru de medios Flash ta desactiváu - esto ye mui pelligroso na mayor parte los servidores.';
$string['check_mediafilterswf_name'] = 'Filtru de medios .swf  activáu';
$string['check_mediafilterswf_ok'] = 'Filtru de medios Flash nun ta activáu.';
$string['check_noauth_details'] = '<p>El <em>No authentication</em> plugin nun ye recomendable en llugares de muncha producción. Por favor, deactívelu a nun ser que seya un sitiu esperimental.</p>';
$string['check_noauth_error'] = 'El plugin No authentication nun se pue usar en sitios productivos.';
$string['check_noauth_name'] = 'No authentication';
$string['check_noauth_ok'] = 'Plugin No authentication desactiváu.';
$string['check_openprofiles_details'] = '<p>Los perfiles abiertos d\'usuarios puen ser usaos por spammers. Recomiéndase que <code>Obligar a los usuarios a identificase pa ver perfiles</code> o <code>Obligar a los usuarios a identificase</code> ten activos.</p>';
$string['check_openprofiles_error'] = 'Naide nun pue ver los perfiles d\'usuariu ensin tar identificáu/a.';
$string['check_openprofiles_name'] = 'Perfiles d\'usuariu abiertos';
$string['check_openprofiles_ok'] = 'Identificase ye necesario enantes ver los perfiles d\'usuariu/a.';
$string['check_passwordpolicy_details'] = '<p>Recomiéndase activar una política de señes, porque l\'aldovinación de señes ye munches veces la manera más fácil d\'entrar ensin autorización.
Nun ponga requisitos mui estrictos de mou y manera que los usuarios acaben por nun remembrar les sos señes y por ello les escaezan o escriban mal.</p>';
$string['check_passwordpolicy_error'] = 'Política de seña desactivada.';
$string['check_passwordpolicy_name'] = 'Política de seña.';
$string['check_passwordpolicy_ok'] = 'Política de seña activada.';
$string['check_riskadmin_detailsok'] = '<p>Por favor, compruebe\'l llistáu d\'alministradores del sistema que vien darréu:</p>$a';
$string['check_riskadmin_detailswarning'] = '<p>Por favor, compruebe\'l llistáu d\'alministradores del sistema que vien darréu:</p>$a->admins
<p>Recomiéndase atribuyir el papel(rol) d\'alministrador namás nel contestu del sistema. Estos usuarios tienen carauterístiques que los faen incompatibles con ser alministradores</p>$a->unsupported';
$string['check_riskadmin_name'] = 'Alministradores';
$string['check_riskadmin_ok'] = 'Atopárense $a alministrador(es) del servidor administrator(s).';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) revisar atribución de papel (role)</a>';
$string['check_riskadmin_warning'] = 'Atopárense $a->admincount alministradores del servidor y $a->unsupcount alministrador(es) atribuyíos que son incompatibles con ser alministradores.';
$string['check_riskxss_details'] = '<p>RISK_XSS describe toles capacidaes pelligroses que namás los usuarios de confianza puen usar.</p>
<p>Por favor, compruebe\'l siguiente llistáu d\'usuarios  y asegúrese de que son toos de confianza:</p><p>$a</p>';
$string['check_riskxss_name'] = 'Usuarios de confianza XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - atopárense $a usuarios que son de confianza.';
$string['check_unsecuredataroot_details'] = '<p>El direutoriu raíz nun debe ser accesible via web. La meyor manera d\'asegurase qu\'esto seya así  ye usar un direutoriu fuera del direutoriu públicu.</p>
<p>Si cambia\'l direutoriu de sitiu, necesita actualizar la configuración <code>$CFG->dataroot</code> en <code>config.php</code> nel sen apropiáu.</p>';
$string['check_unsecuredataroot_error'] = 'El so direutoriu raíz <code>$a</code> ta nun mal llugar y ta albentestate dientro la rede';
$string['check_unsecuredataroot_name'] = 'Direutoriu raíz non seguru';
$string['check_unsecuredataroot_ok'] = 'El direutoriu raíz nun tendría de poder ser accesible via web.';
$string['check_unsecuredataroot_warning'] = 'El so direutoriu raíz <code>$a</code> ta en mal sitiu y pue ser que seya accesible dende\'l web.';
$string['configuration'] = 'Configuración';
$string['description'] = 'Descripción';
$string['details'] = 'Detalles';
$string['issue'] = 'Asuntu';
$string['reportsecurity'] = 'Vista xeneral de seguridá';
$string['security:view'] = 'Informe de seguridá';
$string['status'] = 'Estatus';
$string['statuscritical'] = 'Crítico';
$string['statusinfo'] = 'Información';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Seriu';
$string['statuswarning'] = 'Cuidáu';
$string['timewarning'] = 'Procesar los datos pue llevar un bon cachu, por favor, tenga paciencia...';

?>
