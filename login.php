<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?version=1">
</head>
<body class="bg-light main">
    <div class="container py-5 text-center row main">

    <h1 class="display-1 text-primary">Mentor Match</h1>

        <div class="col-sm-6 d-none">
            <h4 class="mb-3">Sign Up</h4>
            <div id="form">
                <form action="registration.php" method="POST">

                    <p class="form-group">
                    <label>Name of university: </label>
                    <input type="text" id="university" name="university" class="form-control">
                    </p>
                    <p class="form-group">
                    <label>Anticipated graduation date: </label>
                    <input type="text" id="graduation" name="graduation" class="form-control">
                    </p>
                    <p class="form-group">
                    <label>Username: </label>
                    <input type="text" id="user" name="user" class="form-control">
                    </p>
                    <p class="form-group">
                    <label>Email: </label>
                    <input type="text" id="email" name="email" class="form-control">
                    </p>
                    <p class="form-group">
                    <label>Password: </label>
                    <input type="password" id="pass" name="pass" class="form-control">
                    </p>
                    <p class="form-group">
                    <label>Type: </label>
                    <select id="type" name = "dropdown" class="browser-default custom-select">
                        <option selected disabled></option>
                        <option value = "Mentee">Mentee</option>
                        <option id="mentor" value = "Mentor">Mentor</option>
                    </select>
                    </p>
                    <p class="form-group form-check topics d-none">
                        <label>Choose topics you can help with: </label>
                        <br>
                        <input class="form-check-input" id="scholarship" type="checkbox" name="formTopic[]" value="Scholarship" />Scholarship<br />
                        <input class="form-check-input" id="dorm" type="checkbox" name="formTopic[]" value="Dorm" />Dorm<br />
                        <input class="form-check-input" id="loan" type="checkbox" name="formTopic[]" value="Loan" />Loan<br />
                        <input class="form-check-input" id="city" type="checkbox" name="formTopic[]" value="City" />City<br />
                        <input class="form-check-input" id="job" type="checkbox" name="formTopic[]" value="Job" />Job<br />
                        <input class="form-check-input" id="university" type="checkbox" name="formTopic[]" value="University" />University<br />
                        <input class="form-check-input" id="major" type="checkbox" name="formTopic[]" value="Major" />Major<br />
                        <input class="form-check-input" id="minor" type="checkbox" name="formTopic[]" value="Minor" />Minor<br />
                    </p>
                    <p>
                    <input type="submit" id="btn" value="Sign up" class="btn btn-primary">
                    </p>
                </form>
                <a class="toggle" href="">Already have an account? Log In</a>
            </div>
        </div>

        <div class="col-sm-6">

            <h4 class="mb-3">Log In</h4>

            <div id="form">
                <form action="validation.php" method="POST">

                    <p class="form-group">
                    <label>Username: </label>
                    <input type="text" id="user" name="user" class="form-control">
                    </p>
                    <p class="form-group">
                    <label>Password: </label>
                    <input type="password" id="pass" name="pass" class="form-control">
                    </p>
                    <p>
                    <input type="submit" id="btn" value="Login" class="btn btn-primary">
                    </p>
                </form>
                <a class="toggle" href="">Create Account</a>

            </div>
        </div>


    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js?version=1"></script>

</html>