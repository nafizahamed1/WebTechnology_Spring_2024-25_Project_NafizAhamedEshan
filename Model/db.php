<?php
    $host = "localhost:3306";
    $dbuser = 'root';
    $dbpass = '';
    $dbname = "heritage_medical";

    function getConnection(){
        global $dbname;
        global $dbpass;
        global $dbuser;

        $con = mysqli_connect($GLOBALS['host'], $dbuser, $dbpass, $dbname);
        return $con;
    }
?>