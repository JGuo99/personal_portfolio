<?php
    require_once "logic/cred_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Font Awesome [Logo] -->
    <script src="https://kit.fontawesome.com/9bfc0a438f.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato&family=Playball&family=Poiret+One&family=Zen+Tokyo+Zoo&display=swap');
    </style>

    <!-- Scripts -->
        <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../scripts/tabLogic.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="css/panelStyle.min.css">
</head>
<body>
    <div class="container center-form">
        <h1>Admin Panel</h1><br>
        <ul class="nav nav-pills custom-tab">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="pill" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="pill" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="true">Register</button>
            </li>
        </ul>
        <div class="tab-content">
            <div id="login" class="tab-pane fade show active">
                <h2>~ Log In ~</h2>
                <br>
                <form action="logic/verify_log.php" method="POST">
                    <div class="input-container">
                        <div class="input-group">
                            <input type="text" id="email" name="log_email" required>
                            <label for="email">Enter Email</label>
                        </div>
                        <div class="input-group">
                            <input type="password" id="pass" name="log_pass" required>
                            <label for="pass">Enter Password</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary custom-btn">Login</button>
                    <br>
                </form>
            </div>

            <div id="register" class="tab-pane fade">
                <h2>~ Register ~</h2>
                <br>
                <form action="logic/verify_reg.php" method="POST">
                    <div class="input-container">
                        <!-- Implement Later
                        <div class="input-group">
                            <input type="text" id="user" name="key" required>
                            <label for="username">Enter Admin Key</label>
                        </div>
                        -->
                        <div class="input-group">
                            <input type="text" id="user" name="user" required>
                            <label for="user">Create Username</label>
                        </div>
                        <div class="input-group">
                            <input type="text" id="email" name="reg_email" required>
                            <label for="email">Enter Email</label>
                        </div>
                        <div class="input-group">
                            <input type="password" id="pass" name="reg_pass" required>
                            <label for="pass">Enter Password</label>
                        </div>
                        <!-- Implement Later 
                        <div class="input-group">
                            <input type="password" id="pass" name="pass" required>
                            <label for="pass">Re-Enter Password</label>
                        </div>
                        -->
                    </div>
                    <button type="submit" class="btn btn-primary custom-btn">Register</button>
                    <br>                    
                </form>                
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="">Forgot Credential?</a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <a href="">Get Support</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>