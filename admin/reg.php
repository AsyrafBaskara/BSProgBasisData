<?php
if(!session_id())
session_start();
require 'functions.php';

if(isset($_SESSION['reallytrash'])){
    header('location:index.php');
}

if(isset($_POST['masuk'])){
    if(register($_POST)){
        $_SESSION["reallytrash"] = $row["tman_id"];
        header("location:index.php");
        exit;
    } else {
        $_SESSION['error']="Sign Up Failed";
    }
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $result = mysqli_query($connection,"SELECT * FROM tman WHERE email='$email'");

    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if ($password===$row["password"]) {
        $_SESSION["reallytrash"] = $row["tman_id"];

        header("location:index.php");
        exit;

    } else{
        $_SESSION['error']="Email atau password tidak valid";
    }
}
}
?>

<?php
if(isset($_SESSION['error'])){ ?>
<h2 class="error-message"><em> <?=$_SESSION['error'] ?> </em></h2>
<?php }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

    <title>Register</title>

    <style>
    .container {
        padding-top: 200px;
        padding-left: 30%;
        padding-right: 30%;

    }
    </style>
</head>

<body>
    <div class="container">
        <h1>REGISTER</h1>
        <form method="post" action="" autocomplete="off">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="name" id="form2Example1" class="form-control" name="name" />
                <label class="form-label" for="form2Example1">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="email" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="password" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="masuk" class="btn btn-primary btn-block mb-4">Sign Up</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Already have an Account ? <a href="login.php">Login</a></p>
                <a href="../index.php">Back to Index</a>
            </div>
        </form>
    </div>

</body>

</html>