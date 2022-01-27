<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="signup1.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpeg" type="image/jpeg">
    <title>BON APPETIT!!</title>
</head>

<body>
    <div class="form">
        <form action="signupphp.php" method="post">
            <h2>BON APPETIT!<img src="logo.jpeg" id="img"></h2>
            <h3>Enter the details:</h3>
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" class="form-control" placeholder="Your first name" name = "myfirstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" class="form-control" placeholder="Your last name" name = "mylastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="Your email" name = "myemail">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" placeholder="Your DOB" name = "mydob">
            </div>
            Gender:
            <div class="radio">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="mygender" id="male">
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="mygender" id="female">
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="mygender" id="other">
                    <label class="form-check-label" for="other">
                        Other
                    </label>
                </div>
            </div>
            Marital Status:
            <div class="radio">
                <div>
                    <input class="form-check-input" type="radio" name="mymaritalstatus" id="single">
                    <label class="form-check-label" for="single">
                        Single
                    </label>
                </div>
                <div>
                    <input class="form-check-input" type="radio" name="mymaritalstatus" id="Married">
                    <label class="form-check-label" for="Married">
                        Married
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" placeholder="Password" name="mypassword">
            </div>
            <div>
                <a href="aftersignup.html">
                    <input class="btn btn-primary" type="submit" value="SignUp">
                </a>
            </div>
        </form>
    </div>
</body>

</html>

