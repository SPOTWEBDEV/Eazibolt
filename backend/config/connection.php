<?php

define('HOST', 'localhost');
define('USERS', 'root');
define('PASSWORD', '');
define('DATABASE', 'eazibolt');


$conection = mysqli_connect(HOST,USERS,PASSWORD,DATABASE);

if(!$conection){
   die("NOT CONNECTED TO DATABASE");
}


   $sitename = "UniCap";

?>