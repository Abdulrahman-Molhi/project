<script src="sweetalert.min.js"></script>
<?php 

session_start();
    include('connection.php');
    include('functions.php');
    $user_data=check_login($con);

    if( isset($_POST["delete"]))
    {
        header('location: delete.php');
    }
    
    


    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //something is posted u can check what
        $user_name=$_POST["username"];
        $password=strval($_POST["password"]);
        $cpassword=strval($_POST["cpassword"]);        
        $id=$user_data['id'];
        $flag=0;
echo 'd';

        //password check
        $uppercase = preg_match('@[A-Z]@',$password);
        $lowercase = preg_match('@[a-z]@',$password);
        $number=preg_match('@[0-9]@',$password);
        //validation
    
        if(ctype_alpha($user_name) && !empty($user_name)){
        $sql= "UPDATE project.abdulrahman SET user_name ='$user_name' WHERE id='$id'";
            if(mysqli_query($con,$sql) )
        echo "<script >sweetAlert('updated','your name is updated','success')</script>";
        $flag=1;
        }

           
       if(!empty($cpassword) && !empty($password) && $password === $cpassword && $lowercase  && $uppercase && $number && strlen($password) > 8 ){
           
    
            $sql= "UPDATE project.abdulrahman SET password ='$password' WHERE id='$id'";
            $sql1= "UPDATE project.abdulrahman SET cpassword ='$cpassword' WHERE id='$id'";
            if(mysqli_query($con,$sql) && mysqli_query($con,$sql1))
              echo   "<script>sweetAlert('updated','your password is changed','success')</script>";
              $flag=1;
        }

        if($flag==0 )
        {
            echo "<script>sweetAlert('ops!!','sorry either your input is in valid or some thing went wrong','error')</script>";
        }




            

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-signup.css">
    <link rel="stylesheet" href="update-style.css">
    
    <title> updae page </title>
</head>

<body>
    <div class='box'>
        <form action="" method="post" >
            <h2><?php echo 'update info';?></h2>
            <div class='inputBox'>
                <input type="text"  name='username' id='clear'>
                <span>user name</span>
                <i></i>
            </div>

            <div class='inputBox'>
                <input type="password"  name='password' id='clear'>
                <span>password</span>
                <i></i>
            </div>

            <div class='inputBox'>
                <input type="password"  name='cpassword' id='clear'>
                <span>confirm password</span>
                <i></i>
            </div>
            
            
            <div class='links'>    
            <a href=""> forget password</a>
            <a href="sign in.php"> sign in</a>
            </div>
            <input type="submit" value='edit'>
            <input type="submit" value ='delete' name='delete' >
            
        </form>
    </div>
    <header>
        <a href="#" class="logo">crackers</a>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="update.php">update</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="destroy.php">logout</a></li>

        </ul>
        <div class="action">
            <div class="search">
                <a href="#"><i class='bx bx-search'></i></a>
                <input type="text" placeholder="search for games">
            </div>
        </div>
        <div class="Tmenu"></div>
    </header>
</body>
</html>