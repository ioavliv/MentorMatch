<?php

     $username = $_POST['question'];
     $password = $_POST['dropdown'];
     $username = stripcslashes($username);
     $password = stripcslashes($password);

     //establish connection to db
     $con=mysqli_connect("localhost", "root", "");

     //switch to login db
     mysqli_select_db($con, "questions");

     //switch up this query to make it fit Q&A table
     $result = mysqli_query($con, "select * from users where username = '$username' and password = '$password'")
                 or die("Failed to query database ".mysqli_error());
    if(mysqli_num_rows($result)>0){
      echo "sucess"; //where you would redirect to the question and answer
      session_start();
// $reg = "insert into users(username, password, email, university, graduation, type) values ('$name', '$pass', '$email', '$university', '$graduation', '$type')";
?>