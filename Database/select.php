<?php
include "databasedemo.php";

$conn = opencon();

$sql="SELECT id, firstname, lastname, email FROM MYGUESTS";

$result=$conn->query($sql);

if ($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
        echo "--id :". $row["id"] . "<br>--Name :". $row["firstname"] . " ". $row["lastname"] . "<br>--email :". $row["email"] . "<br>";
    }
}
else {
    echo "0 results";
}
closecon($conn);
?>