<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_convert_data'] = 'Data modification API';
$string['auth_shib_convert_data_description'] = 'You can use this API to further modify the data provided by Shibboleth. Read the <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> for further instructions.';
$string['auth_shib_convert_data_warning'] = 'The file does not exist or is not readable by the webserver process!';
$string['auth_shib_instructions'] = 'Use the <a href=\"$a\">Shibboleth login</a> to get access via Shibboleth, if your institution supports it.<br />Otherwise, use the normal login form shown here.';
$string['auth_shib_instructions_help'] = 'Here you should provide custom instructions for your users to explain Shibboleth.  It will be shown on the login page in the instructions section. The instructions must include a link to \"<b>$a</b>\" that users click when they want to log in.';
$string['auth_shib_only'] = 'Shibboleth only';
$string['auth_shib_only_description'] = 'Check this option if a Shibboleth authentication shall be enforced';
$string['auth_shib_username_description'] = 'Name of the webserver Shibboleth environment variable that shall be used as Moodle username';
$string['auth_shibboleth_login'] = 'Shibboleth Login';
$string['auth_shibboleth_manual_login'] = 'உள்நுழைதலின் கையேடு';
$string['auth_shibbolethdescription'] = 'Using this method users are created and authenticated using <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br>Be sure to read the <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> for Shibboleth on how to set up your Moodle with Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'You seem to be Shibboleth authenticated but Moodle didn\'t receive any user attributes. Please check that your Identity Provider releases the necessary attributes ($a) to the Service Provider Moodle is running on or inform the webmaster of this server.';
$string['shib_not_all_attributes_error'] = 'Moodle needs certain Shibboleth attributes which are not present in your case. The attributes are: $a<br />Please contact the webmaster of this server or your Identity Provider.';
$string['shib_not_set_up_error'] = 'Shibboleth authentication doesn\'t seem to be set up correctly because no Shibboleth environment variables are present for this page. Please consult the <a href=\"README.txt\">README</a> for further instructions on how to set up Shibboleth authentication or contact the webmaster of this Moodle installation.';