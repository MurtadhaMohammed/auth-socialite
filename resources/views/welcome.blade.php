<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/bootstarp.min.css">
        <style>
        .social-login-links{
            text-align:center;
            margin-top:30vh
        }
        </style>
    </head>
    <body>
        <div class="social-login-links">
            <h3>Login With</h3>
            <hr>
        <a href="/auth/facebook" class="btn" href="#">
           Facebook
        </a>

        <a href="/auth/google" class="btn" href="#">
          Google
        </a>
    </div>

    <script src="js/app.js"> </script>
    </body>
</html>
