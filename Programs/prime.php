<form method="POST">
    Enter a Number : <input type="text" name="input">
    <br><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
if ($_POST) {
    $input=$_POST['input'];
    for ($i=2; $i <=$input/2 ; $i++) { 
        if ($input % $i == 0) {
            $flag=1;
        }
        else{
            $flag=0;
        }
        
    }
   
}
if ($flag==0) {
    echo "$input is prime";
}
else {
    echo "$input is not prime";
}
?>