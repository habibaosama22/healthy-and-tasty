<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


if(isset($_POST['btn-sum'])) 
{

$host="localhost";
$user = "root";
$password = "";
$db="healthy_tasty";

$conn = mysqli_connect($host,$user,$password,$db);

$insert= "insert into form values ('$name','$email','$password') ";

$mysqli_query($conn,$insert);


if($conn){
    echo("<h1 style=color:green;>your registration is done!</h1>");
}
else{
    echo("<h1 style=color:red;>your registration is failed!</h1>"); 
}

}


?>