<script src="sweetalert.min.js"></script>
<?php  
session_start();
include('connection.php');
include('functions.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //something is posted u can check what
    $email=$_POST["email"];
    $password=strval($_POST["password"]);
    $query="SELECT * FROM  project.abdulrahman  where email='$email' limit 1";
    $result=mysqli_query($con,$query);
    if($result){
     if($result && mysqli_num_rows($result) > 0)
        {
           $user_data = mysqli_fetch_assoc($result);
           if($user_data['password'] === $password){
            $_SESSION['id'] = $user_data['id'];
            header("location: index.php");
           }
        }
        else { echo  '  '.'<script type="text/javascript">sweetAlert("sorry !","Successfully booked for a vehicle, email has been sent to approver","error")</script>'; }

        
    }
    else{ 
        echo  '    '.'<script type="text/javascript">sweetAlert("sorry !","Successfully booked for a vehicle, email has been sent to approver","error")</script>'; }

    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-signin.css">
    <title>Document</title>
</head>
<body>
    <div class='box'>
        <form action="" method="post">
            <h2>sign in</h2>
            <div class='inputBox'>
                <input type="email" required='required' name='email'>
                <span>email</span>
                <i></i>
            </div>

            <div class='inputBox'>
                <input type="password" required='required' name='password'>
                <span>password</span>
                <i></i>
            </div>
            
            <div class='links'>    
            <a href=""> forget password</a>
            <a href="sign up.php"> Sign up</a>
            </div>
            <input type="submit" value='login'>

        </form>
    </div>
</body>
</html>