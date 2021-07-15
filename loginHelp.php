
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



$data = "select passWord from newusers where mailId = '$email' ";

$retPassword = mysqli_query($conenction,$data);

$row = $retPassword->fetch_array();

if($row != NULL && $row['passWord'] == $password) 
{
    echo "<h1>Yahoo! Welcome $email</h1>";
}
else
{
    echo "<br><h1>OOPS! User Not Found</h1>";
}

?>