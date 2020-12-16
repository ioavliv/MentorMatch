<?php

     $id = $_POST['user_id'];
     $question = $_POST['question'];
     $topic = $_POST['formTopic'];
     $string_topic = implode(",", $topic);

     if(empty($topic)) 
     {
       echo("You didn't select any topics.");
     } 
     else
     {
       $N = count($topic);
   
       echo("You selected $N topic(s): ");
       for($i=0; $i < $N; $i++)
       {
         echo($topic[$i] . " ");
       }
     }

     //establish connection to db
     $con=mysqli_connect("localhost", "root", "");

     //switch to login db
     mysqli_select_db($con, "login");
     //join tables questions with users 

    $s = "select * from questions where id = '$id'";
    $result = mysqli_query($con, $s);
    var_dump($result);
    if($result == false) {
      echo "error querying user table";
    }
    else{
    $reg = "insert into questions(id, question, topic) values ('$id', '$question', '$string_topic')";
    mysqli_query($con, $reg);
    header("Location: http://localhost/SE_Project/process.php");
    }
?>