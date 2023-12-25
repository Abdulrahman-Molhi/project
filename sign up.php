<script src="sweetalert.min.js"></script>
<?php
session_start();

include('connection.php');
include('functions.php');
//'<script>alert("Welcome to Geeks for Geeks")</script>'
if($_SERVER['REQUEST_METHOD'] == "POST" ){
    //something is posted u can check what
    $user_name=$_POST["username"];
    $password=strval($_POST["password"]);
    $cpassword=strval($_POST["cpassword"]);
    $email=$_POST["email"]; 
    
    
 
echo 'd';



   //password check
   $uppercase = preg_match('@[A-Z]@',$password);
   $lowercase = preg_match('@[a-z]@',$password);
   $number=preg_match('@[0-9]@',$password);
    
   if(!empty($user_name) && !empty($password) && !empty($cpassword) && !empty($email)){
    if(!(ctype_alpha($user_name))){
        echo "<script >sweetAlert('Ops','name should be charachers','erroe')</script>";
    }
    elseif( !$uppercase || !$lowercase || !$number || strlen($password) < 8){

    echo "<script >sweetAlert('Ops','password should be lowercase charcter  numbers and uppercase charcter ','erroe')</script>";
   }
   elseif( $password != $cpassword){

    echo  "<script >sweetAlert('Ops','passwords are not the same ','erroe')</script>";
   }
    
   elseif (!(filter_var($email ,FILTER_VALIDATE_EMAIL))){
  echo  "<script >sweetAlert('Ops','invalid email ','erroe')</script>";
   }

   
   else{
    $folder="/upload";
    $img=$_FILES["file"]["name"];
    $tmp=$_FILES["file"]["tmp_name"];
    $type=$_FILES["file"]["type"];
    $path="upload/".$_FILES["file"]["name"];
    

    $sql="INSERT INTO project.abdulrahman (user_name,password,cpassword,email,img_name,image_type,image_path)
    values('$user_name','$password','$cpassword','$email','$img','$type','$path')";    
    if(mysqli_query($con,$sql)){

        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
        echo "<script >sweetAlert('created successfully','your account is created','success')</script>";
        //header("location: sign in.php");
        
    }
    else
        echo "<script >sweetAlert('Ops','error existed....sorry! ','erroe')</script>";
   }


}
else {
    echo "<script >sweetAlert('Ops','null error....sorry! ','erroe')</script>";
    
   }
   mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-signup.css">
    <title>Document</title>
</head>
<body>
    <div class='box'>
        <form action="" method="post" enctype="multipart/form-data" >
            <h2>create account</h2>
            <div class='inputBox'>
                <input type="text" required='required' name='username' id='clear'>
                <span>user name</span>
                <i></i>
            </div>

            <div class='inputBox'>
                <input type="password" required='required' name='password' id='clear'>
                <span>password</span>
                <i></i>
            </div>

            <div class='inputBox'>
                <input type="password" required='required' name='cpassword' id='clear'>
                <span>confirm password</span>
                <i></i>
            </div>

            <div class='inputBox'>
                <input type="email" required='required' name='email' id='clear'>
                <span>email</span>
                <i></i>
            </div>

            <div class='links'>    
            <a href=""> forget password</a>
            <a href="sign in.php"> sign in</a>
            </div>
            <input type="file" value='upload file' name="file" required='required' id="file">
            <input type="submit" value='sign up' name='sub' >
                </form>
    </div>
</body>
</html>