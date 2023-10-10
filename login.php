<?php
$name=$_POST["user"];
$password=$_POST["pin"];

if(isset($_POST['log'])){
   $conn=mysqli_connect("localhost","root","","bistro");
    if(empty($name) || empty($password)){
        header("Location: Logitech-login.html");
    }
    else{
        $rec = "Select * from record where Name='$name' AND Password='$password'";
        $res = mysqli_query($conn,$rec);
        $exist = mysqli_num_rows($res);
        if($exist==1){
            header("Location: Logitech-index.html");
        }
        else{
            echo "<h1>Invalid Credentials</h1>";
        }
    }
}
?>