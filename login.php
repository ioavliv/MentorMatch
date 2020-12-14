<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css?ver=1">

</head>
<body class="bg-light main">
    <div class="container py-5 text-center row main">

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
                    <select name = "dropdown" class="browser-default custom-select">
                        <option selected disabled></option>
                        <option value = "Mentee">Mentee</option>
                        <option value = "Mentor">Mentor</option>
                    </select>
                    </p>
                    <p>
                    <input type="submit" id="btn" value="Sign up" class="btn btn-primary">
                    </p>
                </form>
                <a  href="" class="toggle">Already have an account? Log In</a>
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
                <a href="" class="toggle">Create Account</a>

            </div>
        </div>


    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="script.js"></script>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    refresh using ?version=1
</head>

<body class="text-center">

    <div class="container py-5 text-center">

        <div class="d-flex flex-column w-50 text-center green">
            <h4 class="mb-3">Sign Up</h4>
            <div id="form">
                <form action="registration.php" method="POST">

                    <p class="form-group">
                    <label>Username: </label>
                    <input type="text" id="user" name="user" class="form-control">
                    </p>
                    <p class="form-group">
                    <label>Password: </label>
                    <input type="password" id="pass" name="pass" class="form-control">
                    </p>
                    <p class="form-grouap">
                    <label>Email: </label>
                    <input type="text" id="email" name="email" class="form-control">
                    </p>
                    <p class="form-group">
                    <label>Type: </label>
                    <select name = "dropdown">
                        <option value = "Mentee" selected>Mentee</option>
                        <option value = "Mentor">Mentor</option>
                    </select>
                    </p>
                    <p>
                    <input type="submit" id="btn" value="Sign up" class="btn btn-primary">
                    </p>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column">

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
            </div>
        </div>
    

    </div>
    
</body>
</html>

 -->
