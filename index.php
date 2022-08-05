<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/fontawesome.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form_container signInContainer">
          
            <form action="query/query.php" method="get">
                <i class="bi bi-person-circle"></i>
                <i class="fa-duotone fa-circle-user "></i>   
                <i class="far fa-circle-user fa-5x"></i>
                <h1>Sign In</h1>
                <div class="redeSocial">
                    <a href=""><i class="fa fa-facebook-f" aria-hidden="true"></i></a>
                    <a href=""><i></i></a>
                    <a href=""><i></i></a>
                </div>
                <span>or use your account</span>
                <input type="Text" name="usser" placeholder="Escriba su nombre de usuario" />
                <input type="password" name="clave" placeholder="Escriba su contraseña" />

                <button class="btn_signIn">Sign In</button>
            </form>
        </div>
        <div class="form_container signUpContainer">
            <form action="" method="get">
                <h1>Register</h1>
                <div class="redeSocial">
                    <a href=""><i></i></a><a href=""><i></i></a><a href=""><i></i></a>
                </div>
                <input type="text" name="Name" placeholder="Escriba su nombre aqui" />
                <input type="text" name="LastName" placeholder="Escriba si apellido aqui" />
                <input type="text" name="UserName" placeholder="Escriba su usuario aqui">
                <input type="password" name="password" placeholder="Escriba su contraseña aqui">

                <button class="btn_singUp">Sign Up</button>
            </form>
        </div>
        <div class="overlay_container">
            <div class="overlay">
                <div class="overlay-panel overlay_left">
                    <h1>Welcome Back!</h1>
                    <p>This section you can create your username, using your personal data.</p>

                    <button id="btn_singUp" class="submit ghost">Sign Up</button>
                </div>
                <div class="overlay-panel overlay_right">
                    <h1>Hello World!</h1>
                    <p>hello guys, in this section you can start session or create your user to be part of our team</p>

                    <button id="btn_signIn" class="submit ghost">Sign In</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>