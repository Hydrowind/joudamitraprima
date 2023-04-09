<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="design">
            <div class="pill-1 rotate-45"></div>
            <div class="pill-2 rotate-45"></div>
            <div class="pill-3 rotate-45"></div>
            <div class="pill-4 rotate-45"></div>
        </div>
        <form method="POST" action="{{ route('signin') }}" class="login">
            @csrf
            <h3 class="title">Admin Login</h3>
            <div class="text-input">
                <i class="ri-user-fill"></i>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="text-input">
                <i class="ri-lock-fill"></i>
                <input type="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="login-btn">LOGIN</button>
            <!-- <a href="#" class="forgot">Forgot Username/Password?</a> -->
        </form>
    </div>
</body>

</html>