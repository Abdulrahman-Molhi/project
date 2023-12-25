<script src="sweetalert.min.js"></script>
<script src="sweetalert.min.js"></script>
<?php
session_start();
include('connection.php');
include('functions.php');
$user_data=check_login($con);
$id = $user_data['id'];
echo's';
$sql="DELETE  FROM project.abdulrahman WHERE id=$id " ;
if(mysqli_query($con,$sql) )
{
    echo "<script >sweetAlert('updated','your name is updated','success')</script>";
mysqli_close($con);
session_destroy();
header('location: sign in.php');}

?>