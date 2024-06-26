<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="image">
            <img src="background5.jpg" alt="">


        </div>
        <div class="entry">
            <div class="details">
                <h1>Welcome to <span class="name">Worker</span></h1>
                <p>We provide workers and household services at your doorstep.</p>
                <form method="POST">
                    <div class="game">
                        <label for="email">Email</label>
                        <div class="enter">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" placeholder="  example@gmail.com" required>
                        </div>
                    </div>
                    <div class="game">
                        <label for="password">Password</label>
                        <div class="enter">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password" name="password" placeholder="  Password" required>
                        </div>
                    </div>
                    <button type="button" class="login" onclick="location.href='worker_.php'">Login</button>
                    <a href="register.php">
                        <button type="button" class="create">Create profile</button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>