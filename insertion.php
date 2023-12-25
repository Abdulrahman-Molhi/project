<?php
include_once 'connection.php';
$f = $_POST["first"];
$l = $_POST["last"];
$u = $_POST["user"]; 
$p = $_POST["pass"]; 
$c = $_POST["city"]; 
$z = $_POST["Zip"]; 
$pd = $_POST["pdetial"];
$sql = "INSERT INTO test2.buy 
(Firstname,Lastname,Username,password,City ,Zip , 
Productdetials )
VALUES ('$f','$l','$u','$p','$c','$z','$pd')";
if (mysqli_query($conn, $sql)) {
echo "New record has been added successfully !";
} else {
echo "Error: " . $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
?>