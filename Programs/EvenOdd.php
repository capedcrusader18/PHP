<!-- <?php
$evenodd=range(10,100);

for ($i=0; $i < count($evenodd) ; $i++) { 
    if ($evenodd[$i]%2==0) {
        echo "$evenodd[$i] is Even number";
    }
    else {
        echo "$evenodd[$i] is Odd Number";
    }
}
?> -->

<?php
$evenodd=range(10,100);

for ($i=0; $i < count($evenodd) ; $i++) { 
    if ($evenodd[$i]%2==0) {
        echo "<br>";
    }
    else {
        echo "$evenodd[$i] is Odd Number";
    }
}
?>
<!-- 
<?php
$evenodd=range(10,100);

for ($i=0; $i < count($evenodd) ; $i++) { 
    if ($evenodd[$i]%2==0) {
        echo "$evenodd[$i] is Even number";
    }
    else {
        echo "<br>";
    }
}
?> -->