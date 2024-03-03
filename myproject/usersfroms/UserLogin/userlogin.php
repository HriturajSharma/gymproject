<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="UserLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>User Loing</title>
</head>

<body>
    <div class="container">
        <div class="video">

            <video id="video" src="/Assets/pexels_videos_2764953 (1080p).mp4" autoplay muted loop></video>
        </div>
        <div class="card">
            <div class="logo">
                <img src="/Assets//logo.png" alt="">
            </div>
            <form action="" onsubmit="return validateUserLogin()">
                <div class="name cont">     
                    <label for="Name">Name</label>
                    <input type="text" name="name" id="name">
                    <i class="fa-solid fa-user"></i>
                    <div class="n-error error">
                    
                    </div>
                </div>
                <div class="password cont">
                    <label for="Name">Password</label>
                    <input type="password" name="name" id="password">
                    
                    <span id="span" class="eye">show</span>
                    <div class="p-error error">
                      
                    </div>
                </div>
                <div class="another">
                    <p>New User   <a href="#">Create Account.</a></p>
                    <p><a href="#" id="forget">Forget Password</a></p>
                </div>
                <input id="submit" type="submit" value="Login">
            </form>
        </div>
       
    </div>
    <script src="userlogin.js"></script>
</body>

</html>