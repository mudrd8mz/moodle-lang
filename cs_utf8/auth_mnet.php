<?PHP // $Id$ 
      // auth_mnet.php - created with Moodle 1.9.6+ (Build: 20091027) (2007101560)


$string['sso_idp_description'] = 'Pokud budete <strong>poskytovat</strong> tuto službu, vaši uživatelé se budou moci přihlásit na vzdálený server $a, aniž by tam museli zadávat své jméno a heslo.<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete využívat server $a jako \"SSO - zdroj služeb\".</li></ul><br />Pokud budete <strong>využívat</strong>tuto službu, budou se moci vzdálení uživatelé ze serveru $a přihlásit na vašem serveru, aniž by museli zadávat jméno a heslo.<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete sebe poskytovat jako \"SSO - zdroj služby\"  pro server $a. </li></ul>';
$string['sso_idp_name'] = 'SSO - zdroj identit uživatelů';
$string['sso_mnet_login_refused'] = 'Uživatel $a[0] nemá povoleno přihlašovat se z $a[1].';
$string['sso_sp_description'] = 'Pokud budete <strong>poskytovat</strong> tuto službu, budou se moci vzdálení uživatelé ze serveru $a přihlásit na vašem serveru, aniž by museli zadávat jméno a heslo.<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete využívat server $a jako \"SSO - zdroj identit uživatelů\".</li></ul><br />Pokud budete <strong>využívat</strong>tuto službu, budou se moci vaši uživatelé přihlásit na vzdálený server $a, aniž by museli zadávat jméno a heslo.<ul><li><em>Závislost</em>: Musíte zároveň nastavit, že chcete sebe poskytovat jako \"SSO - zdroj identit uživatelů\" pro server $a. </li></ul>';
$string['sso_sp_name'] = 'SSO - zdroj služby';
$string['auth_mnet_auto_add_remote_users'] = 'Je-li povoleno, vytvoří se automaticky místní účet pro vzdálené uživatele při prvním přihlášení.'; // ORPHANED
$string['auth_mnet_roamin'] = 'Uživatelé tohoto hostitele nemohou použít roamingu na vašich stránkách.'; // ORPHANED
$string['auth_mnet_roamout'] = 'Vaši uživatelé mohou použít roamingu na stránkách těchto hostitelů:'; // ORPHANED
$string['auth_mnet_rpc_negotiation_timeout'] = 'Časový limit v sekundách pro ověřování uživatelů pomocí XMLRPC přenosu.'; // ORPHANED
$string['auth_mnetdescription'] = 'Uživatelé jsou ověřováni napříč různými Moodle servery zapojenými do tzv. sítě důvěry. Tato síť se definuje v nastavení Moodle Network.'; // ORPHANED
$string['auth_mnettitle'] = 'MNet'; // ORPHANED
$string['auto_add_remote_users'] = 'Přidat vzdálené uživatele automaticky'; // ORPHANED
$string['rpc_negotiation_timeout'] = 'RPC vyjednávání překročilo časový limit'; // ORPHANED

?>
