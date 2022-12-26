<?php
include "databasedemo.php";

$conn = opencon();

$sql="INSERT INTO MYGUESTS(firstname, lastname, email) values('John', 'Doe', 'johndoe@example.com');";
$sql .="INSERT INTO MYGUESTS(firstname, lastname, email) values('John', 'Doe', 'johndoe@example.com');";
$sql .="INSERT INTO MYGUESTS(firstname, lastname, email) values('John', 'Doe', 'johndoe@example.com')";

if ($conn->multi_query($sql)===TRUE) {
    echo "New Records Inserted Successfully";
}
else {
    echo "Error :" .$sql. "<br>" . $conn->error;
}
closecon($conn);
?>