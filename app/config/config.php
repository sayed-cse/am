<?php
use Phalcon\Config\Config;
$config = new Config(array(
    "database"			=> array(
	"mysql"				=> array(
		"adapter"		=> "Mysql",
		"host"			=> "localhost",
		"username"		=> "root",
		"password"		=> "",
		"dbname"		=> "anikadb",
		"charset"		=> "utf8",
	)
),
"app"               => array(
    "controllersDir"=> "/controllers/",
    "modelsDir"		=> "/models/",
    "viewsDir"		=> "/views/",
    "pluginsDir"	=> "/plugins/",
    "libraryDir"	=> "/library/",
    "helpersDir"	=> "/helpers/",
    "formsDir"		=> "/forms/",
    "cacheDir"		=> "/cache/volt/",
    "logsDir"       => "/cache/logs/",
    "encryptKey"    => "$#/\/\unaz0786",
    "baseUri"       => "/anikamachinery/" ,
    "debug"         =>  '0',
),
"mail"              => array(
    "driver"        => "smtp",
    "host"          => "smtp.gmail.com",                           
    "username"      => "anikamachinery@gmail.com",              
    "password"      => "1234anika",                           
    "security"      => "ssl",     //ssl:465, tls:587                       
    "port"          => 465, 
    "charset"       => "UTF-8",
    "email"         => "anikamachinery@gmail.com",
    "name"          => "webmaster",
)
#/home/kyhdxbcg/public_html/
#End
));