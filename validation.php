<?php

     $username = $_POST['user'];
     $password = $_POST['pass'];
     $username = stripcslashes($username);
     $password = stripcslashes($password);

     //establish connection to db
     $con=mysqli_connect("localhost", "root", "");

     //switch to login db
     mysqli_select_db($con, "login");

     //switch up this query to make it fit Q&A table
     $result = mysqli_query($con, "select * from users where username = '$username' and password = '$password'")
                 or die("Failed to query database ".mysqli_error());
    if(mysqli_num_rows($result)>0){
      echo "sucess"; //where you would redirect to the question and answer
      session_start();


      $result_type = mysqli_query($con, "select type from users where username = '$username' and password = '$password'")
                 or die("Failed to query database ".mysqli_error());
    if(mysqli_num_rows($result)>0){
               while($rowData = mysqli_fetch_array($result_type)){
                    $type = (string) $rowData["type"];
          }
      }
    
      $_SESSION['user'] = $username;
      $_SESSION['type'] = $type;

      header("Location: http://localhost/SE_Project/process.php");
    } else{
      //redirect back to login
      echo "fail";
      header("Location: http://localhost/SE_Project/login.php");
    }

?>