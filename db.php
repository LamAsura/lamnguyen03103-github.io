<?php
    define('DB_USERNAME','root');
    define('DB_NAME','project');
    define('DB_HOST','localhost');
    define('DB_PASSWORD','');
    define('DB_PORT',3306);
    define('DB_CHARSET','utf8');

    class db
    {
        public static $connect;
        public function __construct()
        {
            if (!self::$connect){
                self::$connect = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME,DB_PORT);
                self::$connect -> set_charset(DB_CHARSET);
            }
            return self::$connect;
        }
    }
?>