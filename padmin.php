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
//echo "Connected successfully";

/*Create database
$sql = "CREATE DATABASE db_news";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/
/*$sql = "CREATE TABLE timage(
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    id_news INT(6),
    image  text COLLATE utf8_unicode_ci ,
    dateadd DATETIME DEFAULT CURRENT_TIMESTAMP,
    mdate DATETIME ON UPDATE CURRENT_TIMESTAMP)";
    */
/*sql to create table
$sql = "CREATE TABLE tnews(
id_news INT(6) AUTO_INCREMENT PRIMARY KEY, 
title  text COLLATE utf8_unicode_ci,
news  text COLLATE utf8_unicode_ci,
date  DATETIME,
imge  text COLLATE utf8_unicode_ci ,
dateadd DATETIME DEFAULT CURRENT_TIMESTAMP,
mdate DATETIME ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "Table tnews created successfully";
} 

else   
echo "Error creating table: " . $conn->error;

*/
/*
$target_file="upload/".time()."_".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
$sql = "INSERT INTO timage (image) 
VALUES ('".$target_file."')";

*/
$target_file="upload/".time()."_".$_FILES["image"]["name"];
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
$sql = "INSERT INTO tnews (title,news,date,imge,type) 
VALUES ('".$_POST["title"]."','".$_POST["news"]."','".$_POST["date"]."','".$target_file."','".$_POST["rad"]."')";


if ( $conn->query($sql))
     echo "تم اضافة الخبر بنجاح. <a href='admin.html'> أضافة خبر جديد </a>";
     
else
echo $conn->error ;

if(isset($_POST['logout']))
{
   session_unset();
   header('location:admin.php');

}
$conn->close();
}
else
echo"Error: You can't Brwose This Page Directly ";

?>
