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

if($type == "Mentor"){
  $topic = $_POST['formTopic'];
  $string_topic = implode(",", $topic);

  if(empty($topic)) 
  {
    echo("You didn't select any topics.");
  } 
}

$s = "select * from users where username = '$name'";
$result = mysqli_query($con, $s);
var_dump($result);
if($result == false) {
  echo "error querying user table";
}
    if (empty($_POST['user']) or empty($_POST['pass']) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {  

      echo
          "<script>
          alert('Please fill out all required fields');
          window.location.href='http://localhost/SE_Project/login.php';
          </script>"
          ;
    }
    else{
    $reg = "insert into users(username, password, email, university, graduation, type) values ('$name', PASSWORD('$pass'), '$email', '$university', '$graduation', '$type')";
    mysqli_query($con, $reg);

    $result_id = mysqli_query($con, "select id from users where username = '$name'")
      or die("Failed to query database ".mysqli_error());
      if(mysqli_num_rows($result)>0){
        while($rowData = mysqli_fetch_array($result_type)){
        $id = (int) $rowData["id"];
        }
      }

    $reg = "insert into mentors(id, username, topics) values ('$id', '$name', '$string_topic')";
    mysqli_query($con, $reg);

    header("Location: http://localhost/SE_Project/login.php");
  }

 ?>