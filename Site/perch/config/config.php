<?php
    define('PERCH_LICENSE_KEY', 'P21509-XXW087-ULZ976-KBT373-JNT022');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'root');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "hallst");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'richard.barwick@googlemail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Rik Barwick');

    define('PERCH_LOGINPATH', '/hallst/Site/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
