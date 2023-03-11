<?php

// app info
define('APP_NAME', 'Udemy-Clone');
define('APP_DESCRIPTION', 'Udemy-Clone website');

// database config
if($_SERVER['SERVER_NAME']  == 'localhost')
{
    // configuração para o servidor local
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBNAME', 'udemy_db');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');

    // root path home page
    define('ROOT', 'http://localhost/udemy-clone/public');
}
else
{
    // configuração para o servidor live
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBNAME', 'udemy_db');
    define('DBPASS', '');
    define('DBDRIVER', 'mysql');

    // root path home page
    define('ROOT', 'http://');
}