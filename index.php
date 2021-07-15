<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="LoginPage.css">
    <title>Document</title>
</head>
<body>

    <form action="loginHelp.php" method="POST">

        <h1>Login</h1>
        
        <p>
            <input type="email" name="email" required placeholder="info@mailaddress.com">
        </p>

        <p>
            <input type="password" name="password" required placeholder="*********">
        </p>

        <button>Login</button>

        <p>
            <div class="signMesg">
            Don't have an account? <a href="signUp.html">SignUp</a>
        </div>
        </p>

    </form>

</body>
</html>