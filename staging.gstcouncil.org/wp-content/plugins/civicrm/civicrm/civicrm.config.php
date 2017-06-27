<?php
define('CIVICRM_SETTINGS_PATH', '/home/gstc/www/wp-content/uploads/civicrm/civicrm.settings.php');
$error = @include_once( '/home/gstc/www/wp-content/uploads/civicrm/civicrm.settings.php' );
if ( $error == false ) {
    echo "Could not load the settings file at: /home/gstc/www/wp-content/uploads/civicrm/civicrm.settings.php
";
    exit( );
}

// Load class loader
require_once $civicrm_root . '/CRM/Core/ClassLoader.php';
CRM_Core_ClassLoader::singleton()->register();
