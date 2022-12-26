<?php
include "databasedemo.php";

$conn = opencon();

$sql="CREATE TABLE MYGUESTS(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(30), lastname VARCHAR(30), email VARCHAR(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($sql)===TRUE) {
    echo "Table Myguests created successfully";
}
else {
    echo "error creating table myguests : ".$conn->error;
}

closecon($conn);
?>