<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.4 (Build: 20090128) (2007101540)
      // local modifications from http://free.icyber.co.za


$string['check_configrw_details'] = '<p>It is recommended that the file permissions of config.php are changed after installation so that the file cannot be modified by the web server.
Please note that this measure does not improve security of the server significantly, though it may slow down or limit general exploits.</p>';
$string['check_configrw_name'] = 'Kuyabhlaleka futhi config.php';
$string['check_configrw_ok'] = 'config.php can not be modified by PHP scripts.';
$string['check_configrw_warning'] = 'PHP scripts may modify config.php.';
$string['check_cookiesecure_details'] = '<p>If you enable https communication it is recommended that you also enable secure cookies. You should also add permanent redirection from http to https.</p>';
$string['check_cookiesecure_error'] = 'Sicela uvule ama cookies avikelekile';
$string['check_cookiesecure_name'] = 'ama cookies avikelekile';
$string['check_cookiesecure_ok'] = 'ama cookies avikelekile avuliwe';
$string['check_courserole_anything'] = 'The \"doanything\" capability must not be allowed in this <a href=\"$a\">context</a>.';
$string['check_courserole_details'] = '<p>Each course has one default enrolment role specified. Please make sure no risky capabilities are allowed for this role.</p>
<p>The only supported legacy type for the default course role is <em>Student</em>.</p>';
$string['check_courserole_error'] = 'Incorrectly defined default course roles detected!';
$string['check_courserole_legacy'] = 'Unsupported legacy type detected in the <a href=\"$a\">role</a>.';
$string['check_courserole_name'] = 'Unsupported legacy type detected in the <a href=\"$a\">role</a>.';
$string['check_courserole_notyet'] = 'Used only default course role.';
$string['check_courserole_ok'] = 'Default course role definitions is OK.';
$string['check_courserole_risky'] = 'Risky capabilities detected in <a href=\"$a\">context</a>.';
$string['check_defaultcourserole_anything'] = 'The \"doanything\" capability must not be allowed in this <a href=\"$a\">context</a>.';
$string['check_defaultcourserole_details'] = '<p>The default student role for course enrolment specifies the default role for courses. Please make sure no risky capabilities are allowed in this role.</p>
<p>The only supported legacy type for default role is <em>Student</em>.</p>';
$string['check_defaultcourserole_error'] = 'Incorrectly defined default course role \"$a\" detected!';
$string['check_defaultcourserole_legacy'] = 'Unsupported legacy type detected.';
$string['check_defaultcourserole_name'] = 'Default course role (global)';
$string['check_defaultcourserole_notset'] = 'Default role is not set.';
$string['check_defaultcourserole_ok'] = 'Site default role definition is OK.';
$string['check_defaultcourserole_risky'] = 'Risky capabilities detected in <a href=\"$a\">context</a>.';
$string['check_defaultuserrole_details'] = '<p>All logged in users are given capabilities of the default user role. Please make sure no risky capabilities are allowed in this role.</p>
<p>The only supported legacy type for the default user role is <em>Authenticated user</em>. The course view capability must not be enabled.</p>';
$string['check_defaultuserrole_error'] = 'The default user role \"$a\" is incorrectly defined!';
$string['check_defaultuserrole_name'] = 'Registered user role';
$string['check_defaultuserrole_notset'] = 'Default role is not set.';
$string['check_defaultuserrole_ok'] = 'Registered user role definition is OK.';
$string['check_displayerrors_details'] = '<p>Enabling the PHP setting <code>display_errors</code> is not recommended on production sites because error messages can reveal sensitive information about your server.</p>';
$string['check_displayerrors_error'] = 'The PHP setting to display errors is enabled. It is recommended that this is disabled.';
$string['check_displayerrors_name'] = 'Displaying of PHP errors';
$string['check_displayerrors_ok'] = 'Displaying of PHP errors disabled.';
$string['check_emailchangeconfirmation_details'] = '<p>It is recommended that an email confirmation step is required when users change their email address in their profile. If disabled, spammers may try to exploit the server to send spam.</p>';
$string['check_emailchangeconfirmation_error'] = 'Abasebenzisi bangafaka am email address';
$string['check_emailchangeconfirmation_name'] = 'Ukushitshwa kwama email';
$string['check_emailchangeconfirmation_ok'] = 'Confirmation of change of email address in user profile.';
$string['check_embed_details'] = '<p>Unlimited object embedding is very dangerous - any registered user may launch an XSS attack against other server users. This setting should be disabled on production servers.</p>';
$string['check_embed_error'] = 'Unlimited object embedding enabled - this is very dangerous for the majority of servers.';

?>
