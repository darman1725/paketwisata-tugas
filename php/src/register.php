<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <!-- Menyisipkan Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="fonts/font-awesome.min.css">
        <link rel="stylesheet" href="style2.css">
        <script type="text/javascript" src="jquery-3.5.1.js"></script>
        <!-- Menyisipkan Javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
          #signup {
            color: #0099FF;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 16px;
            text-align: center;
          }
        </style>
    </head>
    
    <body>

    <nav class="navbar fixed-top navbar-expand-md" style="background-color:burlywood;">
        <div class="container">
        <img src="img/logo.png" width="65px">
        <a class="navbar-brand" href="" style="color:black;"><h4>TOUR AND TRAVEL BALI</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        </div>
        </div>
    </nav>

    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h3>REGISTER</h3>
                </div>

                <form action="prosesReg.php" method="post" class="form">
            
                    <div> Username</div>
                    <input name="username" type="text" class="form-content" name="username" autocomplete="on" required />
                    <div class="form-border"></div>

                    <div style="padding-top:13px"> Email</div>
                    <input name="email" type="text" class="form-content"autocomplete="on" required  />
                    <div class="form-border"></div>
                    
                    <div style="padding-top:22px"> Password</div>
                    <input name="password" type="password"class="form-content" required />
                    <div class="form-border"></div>

                    <div style="padding-top:22px">Confirm Password</div>
                    <input name="confirm" type="password" class="form-content" required/>
                    <div class="form-border"></div>

                    <input id="submit-btn" type="submit" name="submit" value="Register" /><br>
                    <a href="login.html" id="signin" align="center">have an account? Login</a>
                </form>
                </div>
        </div>
    </body>
</html>