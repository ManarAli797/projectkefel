<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_news";


$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['save'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

   
    $sql="SELECT * FROM login where username ='$username' AND password ='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        $_SESSION['user']=$username;
        $_SESSION['pass']=$password;
       header('location:admin.php');
    }
        
    

    if ($result->num_rows ==0) {
    header('location:login.php');

   }


}


else
echo "error" ." ".$conn->error;

$conn->close();
}
else
echo" Error: You can't Brwose This Page Directly ";

?>