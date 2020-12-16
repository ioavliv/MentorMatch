<?php

     $id = $_POST['user_id'];
     $question = $_POST['asked_question'];
     $answer = $_POST['answer'];

     //establish connection to db
     $con=mysqli_connect("localhost", "root", "");
     mysqli_select_db($con, "login");

    $s = "select * from questions where id = '$id'";
    $result = mysqli_query($con, $s);
    var_dump($result);
    if($result == false) {
      echo "error querying user table";
    }
    else{
      //Update questions set answer = "My answer" where question = "Question"
    $reg = "Update questions set answer = '$answer' where question = '$question'";
    mysqli_query($con, $reg);
    header("Location: http://localhost/SE_Project/process.php");
    }
?>