<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="login1.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpeg" type="image/jpeg">
    <title>BON APPETIT!!</title>
</head>

<body>
    <img src="brooke-lark-wMzx2nBdeng-unsplash.jpg" alt="" class="image">
    <div class="form">
        <form action="loginphp.php" method="post">
		<script language="javascript" type="text/javascript">
		alert("Welcome")
		</script>
            <h2>BON APPETIT!</h2>
            <h3>Enter the details:</h3>
            <div class="mb-3">
                <label for="Email" class="form-label">Email:</label>
                <input type="text" class="form-control" placeholder="Your Email" name="myemail">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" placeholder="Password" name="mypassword">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Sign In">
            </div>

        </form>

    </div>
    <div class="button">
        <a href="signup.php"> or SignUp</a>
    </div>
</body>
</html>



