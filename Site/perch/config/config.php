<?php
    define('PERCH_LICENSE_KEY', 'P21509-XXW087-ULZ976-KBT373-JNT022');

    define("PERCH_DB_USERNAME", 'hallstr_admin');
    define("PERCH_DB_PASSWORD", 'TopGun');
    define("PERCH_DB_SERVER", "213.143.3.8");
    define("PERCH_DB_DATABASE", "hallstr_live");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'richard.barwick@googlemail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Rik Barwick');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
    define('PERCH_TEMPLATE_FILTERS', true);

