<?php

// Script Location:

$root = '54.191.216.168/';
$rooturl = 'http://54.191.216.168/';
$destination = 'http://54.191.216.168/go.php?id=';

// Open Link In Frame 1 Enable:

$frame = '0';

// Database Information:

$localhost ='localhost';
$username ='urlmashpyme';
$password ='5e522776-1883-4b50-830a-ef58f264b9fe';
$database ='urlmashpyme';

// Admin Username And Password:

$adminuser ='mashpy';
$adminpass ='mashpysays';

// Dont Edit Below:

$table = 'url';

$link = mysql_connect("$localhost", "$username", "$password")or die("Could not connect");
$db = mysql_select_db("$database", $link)or die("Could not select database");

?>