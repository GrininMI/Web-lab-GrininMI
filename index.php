<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grinin Maxim</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1">Login In, Maxim!</h1>

                <?php
                if(!isset($_COOKIE['User'])) { ?>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="registration.php" class="btn btn-primary">Registration</a>
                        <a href="login.php" class="btn btn-primary">Login</a>
                    </div>
                <?php } else { 
                    $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'site_db');
                    $sql = "SELECT * FROM posts";
                    $result = mysqli_query($link, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($post = mysqli_fetch_array($result)) { 
                            echo "<a href='posts.php?id=".$post["id"]."'>".$post["title"]."</a><br>"; }
                    } else {
                        echo "No posts yet.";
                    }
                    echo "<div class='mt-4'>";
                    echo "<a href='profile.php' class='btn btn-primary'>Перейти в профиль</a>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>    
</html>

