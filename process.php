<?php
 session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title><?=$_SESSION['type']?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?version=1">
</head>
<body class="bg-light text-center">

<a id="logout" class="bg-primary btn" href="login.php">Log out</a>

<h4 class="mb-3">Welcome <?=$_SESSION['user']?>!</h4>
<?php
if($_SESSION['type']=="Mentor"){
    echo "<p>Begin by answering student's questions</p>";
}
if($_SESSION['type']=="Mentee"){
    echo '<p>Begin by asking questions</p>';
}
?>

        <div class="container py-5 text-center main">

            <div class="Mentee row d-none">

                <form action="question.php" method="POST">

                    <div class="form-group">
                        <textarea type="text" name="question" id="question" cols="30" rows="10" class="md-textarea form-control"></textarea>
                    </div>

                    <div class="form-group form-check">
                        <label>What topics does this relate to: </label>
                        <br>
                        <div><input class="form-check-input" id="scholarship" type="checkbox" name="formTopic[]" value="Scholarship" />Scholarship</div>
                        <div><input class="form-check-input" id="dorm" type="checkbox" name="formTopic[]" value="Dorm" />Dorm</div>
                        <div><input class="form-check-input" id="loan" type="checkbox" name="formTopic[]" value="Loan" />Loan</div>
                        <div><input class="form-check-input" id="city" type="checkbox" name="formTopic[]" value="City" />City</div>
                        <div><input class="form-check-input" id="job" type="checkbox" name="formTopic[]" value="Job" />Job</div>
                        <div><input class="form-check-input" id="university" type="checkbox" name="formTopic[]" value="University" />University</div>
                        <div><input class="form-check-input" id="major" type="checkbox" name="formTopic[]" value="Major" />Major</div>
                        <div><input class="form-check-input" id="minor" type="checkbox" name="formTopic[]" value="Minor" />Minor</div>
                    </div>

                    <div>
                        <input type="hidden" id="user_id" name="user_id" value="<?=$_SESSION['id']?>">
                        <input type="submit" id="btn" value="Post Question" class="btn-lg btn-dark">
                    </div>

                </form>

                <div class="answered-questions">
                    <?php
                            $con=mysqli_connect("localhost", "root", "");
                            mysqli_select_db($con, "login");

                            //searches for all answered questions
                            $result = mysqli_query($con, "select question, answer, topic from questions where answer!=''")
                            or die("Failed to query database ".mysqli_error());

                            if(mysqli_num_rows($result)>0){
                                while ($row = $result->fetch_assoc()) {
                                echo 
                                '<div class="bg-secondary">
                                    <div class="question">
                                        <h4 class="text-white"> '. $row['question'] . ' </h4>
                                        <h6 class="text-light">'. $row['topic'] . '</h6>
                                    </div>
                                    <div class="answer">
                                        <p class="text-white"><big> '. $row['answer'] . ' </big></p>
                                    </div>
                                </div>';
                                }
                            }
                    ?>
                </div>


            </div>

            <div class="Mentor col-sm-12 d-none">
                    <?php
                        $con=mysqli_connect("localhost", "root", "");
                        mysqli_select_db($con, "login");

                        //searches for all unanswered questions
                        $result = mysqli_query($con, "select question, topic from questions where answer=''")
                          or die("Failed to query database ".mysqli_error());

                        if(mysqli_num_rows($result)>0){
                            while ($row = $result->fetch_assoc()) {

                            // contains mentor topics
                            $mentor_topics_str  = $_SESSION['topics'];
                            $mentor = explode(",", $mentor_topics_str); 
                            $mentee_topics_str  = $row['topic'];
                            $mentee = explode(",", $mentee_topics_str); 

                            $total = count($mentor);
                            $diff = count(array_diff($mentor, $mentee));
                            $percent = 100 - ($diff / $total * 100);
                            
                            $nmb =  round($percent, 2);
                            if($nmb<50){
                                $color = "text-danger";
                            }    
                            else{
                                $color = "text-success";
                            }


                            echo '<form class="question-card bg-secondary" action="answer.php" method="POST">
                                    <div class="form-group question">
                                        <h4 class="text-white"> '. $row['question'] . ' </h4>
                                        <h6 class="text-light">'. $row['topic'] . '</h6>
                                    </div>

                                    <div class="form-group answer">
                                        <textarea type="text" name="answer" id="answer" cols="50" rows="5" class="md-textarea form-control"></textarea>
                                    </div>
                
                                    <div>
                                        <input type="hidden" id="user_id" name="user_id" value="' . $_SESSION['id'] . '">
                                        <input type="hidden" id="asked_question" name="asked_question" value="' . $row['question'] . '">
                                        <p class="'. $color . '"><big>'. $nmb . '% matched</big><p>
                                        <input type="submit" id="btn" value="Post Answer" class="btn-lg btn-dark">
                                    </div>
                                </form>';
                            }
                        }
                    ?>


            </div>

        </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js?version=1"></script>
</html>