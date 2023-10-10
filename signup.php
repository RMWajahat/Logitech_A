<?php
$name=$_POST["user"];
$email=$_POST["email"];
$password=$_POST["pin"];
$cpassword=$_POST["cpin"];

if(isset($_POST['reg'])){
     $conn=mysqli_connect("localhost","root","","bistro");
    if(empty($name) || empty($email) || empty($password) || empty($cpassword)){
        header("Location: Logitech-Signup.html"); 
    }
    else if($password!=$cpassword){
        header("Location: Logitech-Signup.html"); 
    }
    else{
        $sql = "INSERT INTO record(Name,Email,Password) VALUES('$name','$email','$cpassword')";
        $res = mysqli_query($conn,$sql);

        if($res){
            echo "<h1>Your Form has been submitted succesfully</h1>" ;
           
        }
        else{
            echo "<b><h1>Oops! </h1>Response not sent.</b>";
        }
    }
}
else{
    header("Location: Logitech-Signup.html"); 
}
?>