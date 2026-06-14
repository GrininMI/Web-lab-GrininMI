<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grinin Maxim</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Navigation panel-->
    <nav class="navbar navbar-dark bg-dark p-3">
        <div class="container-fluid">
            <a href="#" class="navbar-brand d-flex aligh-items-center">
                <img src="logo.png" alt="Logo" width="40" class="me-2">
                <span class="text-light">History</span>
            </a>
        </div>
    </nav>

    <!-- Main content -->
     <div class="container mt-5">
        <!--About me-->
        <div class="story-container">
            <div class="story-text">
                <p>
                    Я Гринин Максим Иванович, VFX-художник. Сижу программирую сайт и снова убеждаю себя, что не зря ухожу из проги. 
                    Писать разметку за пару нажатий Tab — это классно, но ужасно скушно. 
                    Короче ждём завоз нейронок в Houdini  и можно косплэить лампочку. 
                    А, кстасти говоря, в 22 версию осенью вводнят новые солверы на основе нейронок ☠.
                </p> 
                <img src="me.png" alt="фото" class="hacker-image">
            </div>
        </div>

        <!--Button second photo-->

        <div class="text-center mt-4">
            <button id="toggleButton" class="btn btn-primary">Open</button>
        </div>
        <div id="extraImage" class="text-center mt-3" style="display: none;">
            <img src="me2.jpg" alt="скрытое фото" class="hacker-image">
        </div>

        <!--Form posts-->
        <div class="mt-5">
            <h2 class="text-center mb-4">Add New Post</h2>
            <form action="profile.php" id="postForm" class="d-flex flex-column gap-3" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="postTitle" class="form-label">Post Title</label>
                    <input type="text" class="form-control-hacker-input" id="postTitle" name="postTitle" placeholder="Enter post title" required>
                </div> 
                <div class="form-group">
                    <label class="form-label" for="postContent">Post Content</label>
                    <textarea name="postContent" class="form-control hacker-input" id="postContent" placeholder="Enter post Content" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="file">Upload file</label>
                    <input type="file" name="file" class="form-control hacker-input" id="file">
                </div>
                <button class="btn btn-primary" type="submit" name="submit">Save Post</button>
            </form>
        </div>
     </div>
<!--Script close/open Extra Image-->
     <script>
        const btn = document.getElementById('toggleButton');
        const extraImage = document.getElementById('extraImage');
        btn.addEventListener('click', function () {
            if (extraImage.style.display === 'none') {
                extraImage.style.display = 'block';
                btn.textContent = 'Close';
            } else {
                extraImage.style.display = 'none';
                btn.textContent = 'Open';
            }
        });
     </script>
</body>
</html>