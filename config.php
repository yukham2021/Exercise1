<?php
define ('MYSQL_USER','root');
define ('MYSQL_PASSWORD','root');
define ('MYSQL_HOST','localhost');
define ('MYSQL_DATABASE','project1');

$pdoOptions=array(
PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
);

$pdo=new PDO(
    'mysql:host='.MYSQL_HOST.';dbname=' .MYSQL_DATABASE,MYSQL_USER,MYSQL_PASSWORD,$pdoOptions
);

?>
