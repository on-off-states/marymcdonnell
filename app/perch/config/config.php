<?php
    switch($_SERVER['SERVER_NAME']) {

        case 'marymcdonnell.local':
            include(__DIR__.'/config.marymcdonnell-local.php');
            break;

        default:
            include('config.production.php');
            break;
    }

    define('PERCH_LICENSE_KEY', 'R3-LOCAL-TLC181-XQM027-BTD020');
    define('PERCH_EMAIL_FROM', 'netsrik@fastmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Kirsten Edwards');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
    define('PERCH_TZ', 'UTC');