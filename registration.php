<?php

session_start();

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "login");

$name = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$university = $_POST['university'];
$graduation = $_POST['graduation'];
$type = $_POST['dropdown'];

$s = "select * from users where username = '$name'";
$result = mysqli_query($con, $s);
var_dump($result);
if($result == false) {
  echo "error querying user table";
}
else {

  $num = mysqli_num_rows($result);
}
  if (empty($_POST['user']) or empty($_POST['pass']) ) {
      header("Location: http://localhost/SE_Project/login.php");

    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: http://localhost/SE_Project/login.php");
    }
    else{
    $reg = "insert into users(username, password, email, university, graduation, type) values ('$name', '$pass', '$email', '$university', '$graduation', '$type')";
    mysqli_query($con, $reg);
    header("Location: http://localhost/SE_Project/process.php");
  }

 ?>