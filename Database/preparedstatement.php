<?php
include "databasedemo.php";
$conn = opencon();

$stmt=$conn->prepare("INSERT INTO MYGUESTS(firstname, lastname, email) VALUES (?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname="mary";
$lastname="cairy";
$email="mary@example.com";
$stmt->execute();
$firstname="julie";
$lastname="mulie";
$email="lulie@example.com";
$stmt->execute();
$firstname="doe";
$lastname="boe";
$email="doe@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
closecon($conn);
?>