<?php
require_once('db.php');
$link = mysqli_connect($servername, $username, $password, $dbName);
if (!$link) {
    die("Ошибка подключения к БД: " . mysqli_connect_error());
}

if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
    exit();
}

if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    if (!$login || !$email || !$pass) {
        die ("input all parameters");
    }

    $sql = "INSERT INTO users (username, email, password) VALUES ('$login', '$email', '$pass')";

    if (!mysqli_query($link, $sql)) {
        echo "Не удалось добавить пользователя: " . mysqli_error($link);
    } else {
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grinin Maxim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

</script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1">Registration, Maxim!</h1>
                <form action="registration.php" method="post" class="d-flex flex-column gap-3">
                    <input type="text" name="login" placeholder="Login" class="form-control-hacker-input">
                    <input type="email" name="email" placeholder="Email" class="form-control-hacker-input">
                    <input type="password" name="password" placeholder="Password" class="form-control-hacker-input">
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Register</button>
                    <p class="mt-3">Already have an account? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

