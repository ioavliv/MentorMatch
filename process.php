<?php
session_start();
//get questions from match

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


<h4 class="mb-3">Welcome <?=$_SESSION['user']?></h4>

    <div class="container py-5 text-center main">

            <div class="Mentee col-sm-6 d-none">
                <form action="question.php" method="POST">

                    <div class="form-group">
                        <textarea type="text" name="question" id="question" cols="30" rows="10" class="md-textarea form-control"></textarea>
                    </div>

                    <div class="form-group form-check-inline">
                        <div>
                        <input class="form-check-input" id="scholarship" type="checkbox" name="formTopic[]" value="Scholarship" />Scholarship<br />
                        </div>
                        <div>
                        <input class="form-check-input" id="dorm" type="checkbox" name="formTopic[]" value="Dorm" />Dorm<br />
                        </div>
                    </div>

                    <div>
                        <input type="hidden" id="user_id" name="user_id" value="<?=$_SESSION['id']?>">
                        <input type="submit" id="btn" value="Post Question" class="btn-lg btn-dark">
                    </div>
                
                </form>
            </div>

            <div class="Mentor col-sm-12 d-none">
               
                <form class="question-card bg-secondary" action="answer.php" method="POST">
                    <div class="form-group question">
                            <!-- Display questions in matched order here -->
                            <!-- Example HTML for each question below -->
                        <h4 class="text-white">This is the question?</h4>
                        <h6 class="text-light">Topic 1, Topic 2</h6>
                    </div>

                    <div class="form-group answer">
                        <textarea type="text" name="answer" id="answer" cols="50" rows="5" class="md-textarea form-control"></textarea>
                    </div>

                    <div>
                        <input type="hidden" id="user_id" name="user_id" value="<?=$_SESSION['id']?>">
                        <input type="submit" id="btn" value="Post Answer" class="btn-lg btn-dark">
                    </div>
                </form>
                
            </div>

            
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>
</html>