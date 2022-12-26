<?php
function opencon(){
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="demo";

    $conn=new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connection Failed : %s\n".$conn->error);

    return $conn;
}

function closecon($conn){
    $conn -> close();
}
?>