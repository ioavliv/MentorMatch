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
     $result = mysqli_query($con, "select * from users where username = '$username' and password = PASSWORD('$password')")
                 or die("Failed to query database ".mysqli_error());
    if(mysqli_num_rows($result)>0){
      echo "sucess"; //where you would redirect to the question and answer
      session_start();


      $result_type = mysqli_query($con, "select type, id from users where username = '$username' and password = PASSWORD('$password')")
        or die("Failed to query database ".mysqli_error());
        if(mysqli_num_rows($result_type)>0){
            while($rowData = mysqli_fetch_array($result_type)){
                $type = (string) $rowData["type"];
                $id = (int) $rowData["id"];
            }
        }
      $result_topics = mysqli_query($con, "select topics from mentors where username = '$username'")
        or die("Failed to query database ".mysqli_error());
        if(mysqli_num_rows($result_topics)>0){
            while($rowData = mysqli_fetch_array($result_topics)){
                $topics = (string) $rowData["topics"];
            }
        }

      $_SESSION['user'] = $username;
      $_SESSION['type'] = $type;
      $_SESSION['id'] = $id;
      $_SESSION['topics'] = $topics;


      header("Location: http://localhost/SE_Project/process.php");
    } else{
      //redirect back to login
      echo
      "<script>
      alert('Please enter valid credentials');
      window.location.href='http://localhost/SE_Project/login.php';
      </script>";
    }

?>