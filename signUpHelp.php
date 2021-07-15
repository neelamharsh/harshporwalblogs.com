
<?php


$conenction = mysqli_connect('localhost',"root");

if($conenction)
{
    echo "Connection established";
}
else 
{
    echo "Error ! Connection falied";
}

mysqli_select_db($conenction, 'harshblog1');

$email = $_POST['email'];
$password = $_POST['password'];



$data = "INSERT INTO newusers values('$email','$password')";

mysqli_query($conenction,$data);
header('location:signupsuccessful.php');

?>