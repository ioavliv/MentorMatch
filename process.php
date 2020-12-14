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
    <link rel="stylesheet" href="style.css?ver=1">
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
                        <input class="form-check-input" type="checkbox" id="scholarship" name="scholarship" value="Scholarship">
                        <label class="form-check-label" for="scholarship">Scholarship</label><br>
                        </div>
                        <div>
                        <input class="form-check-input" type="checkbox" id="dorms" name="dorms" value="Dorm">
                        <label class="form-check-label" for="dorms">Dorm</label><br>
                    </div>
                    </div>

                            <select name = "dropdown" class="browser-default custom-select">
                                <option selected disabled>Subject</option>
                                <option value = "Scholarship">Scholarship</option>
                                <option value = "Dorms">Dorms</option>
                            </select>
                    <div>
                    <input type="submit" id="btn" value="Post Question" class="btn-lg btn-dark">
                    </div>
                </form>
            </div>

            <div class="Mentor col-sm-6 d-none">
             <form action="add_mentor_topic.php" method="POST">
                    
                    <p class="form-group">
                            <select name = "dropdown" class="browser-default custom-select">
                                <option selected disabled>Pick topics you can help with</option>
                                <option value = "Scholarship">Scholarship</option>
                                <option value = "Dorms">Dorms</option>
                            </select>
                    <p>

                    <input type="submit" id="btn" value="Post Question" class="btn-lg btn-dark">
                    </p>
                </form>
            
            </div>

            
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>
</html>