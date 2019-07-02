<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Implementacion - reCaptcha de Google</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="lib/materialize/css/materialize.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <main>
        <center>
            <br>
            <br>
            <br>
            <h5 class="indigo-text">Please, login into your account</h5>

            <div class="container">
                <div class="z-depth-1 grey lighten-4 row"
                    style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                    <form action="captcha.php" class="col s12" method="POST">
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='email' name='email' id='email' />
                                <label for='email'>Enter your email</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Enter your password</label>
                            </div>
                            <label style='float: right;'>
                                <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                            </label>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LdagaAUAAAAAOY8Pvv2ARBze7d6iHlGO6pI5ZnK"></div>
                        <br>
                        <br>
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login'
                                    class='col s12 btn btn-large waves-effect indigo'>Login</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
            <a href="#!">Create account</a>
        </center>
    </main>

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>

    <script src="lib/materialize/js/materialize.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>