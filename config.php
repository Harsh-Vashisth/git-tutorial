<?php  /// Moodle Configuration File 

unset($CFG);

$CFG = new stdClass();
$CFG->dbtype    = 'mysql';
$CFG->dbhost    = 'my_host';
$CFG->dbname    = 'nidmnew';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'secret';
$CFG->dbpersist =  false;
$CFG->prefix    = 'mdl_';

$CFG->wwwroot   = 'http://harsh.vashisth:81/nidm';
$CFG->dirroot   = '/var/www/html/nidm';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';
 @error_reporting(E_ALL | E_STRICT);   // NOT FOR PRODUCTION SERVERS!
@ini_set('display_errors', '1');         // NOT FOR PRODUCTION SERVERS!
$CFG->debug = (E_ALL | E_STRICT);   // === DEBUG_DEVELOPER - NOT FOR PRODUCTION SERVERS!
$CFG->debugdisplay = 1;              // NOT FOR PRODUCTION SERVERS!

// You can specify a comma separated list of user ids that that always see
// debug messages, this overrides the debug flag in $CFG->debug and $CFG->debugdisplay
// for these users only.
$CFG->debugusers = '2';

$CFG->directorypermissions = 0777;  // try 02777 on a server in Safe Mode

$CFG->passwordsaltmain = '9d2DcC=L<cOXiv[U},![ICOY?LW7B';

require_once($CFG->dirroot."/lib/setup.php");
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>
