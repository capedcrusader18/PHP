<?php
include "databasedemo.php";

$conn=opencon();

$sql="INSERT INTO MYGUESTS(firstname, lastname, email) VALUES('aditya', 'kanchan', 'aditya@example.com')";

if ($conn->query($sql)===TRUE) {
    $last_id=$conn->insert_id;
    echo "New record created successfully. Last inserted id is : ".$last_id;
}
else {
    echo "Error " .$sql. "<br>". $conn->error;
}

closecon($conn);
?>