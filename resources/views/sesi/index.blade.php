<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SIMAK (Sistem Informasi Masyarakat Kurang Mampu)</title>
        <meta name="description" content="Webze -  ICO & Crypto Landing Page Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('LP/assets/img/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('style.css')}}">
    </head>
    <body>
        <div class="box">
            <div class="form">
                <h2>Login</h2>
                <form class="user" action="/sesi/login" method="POST">
                    @csrf
                    <div class="inputBox">
                        <input type="email" required="required" value="{{Session::get('email')}}" name="email">
                        <span>Email</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" required="required" name="password">
                        <span>Password</span>
                        <i></i>
                    </div>
                    <div class="links">
                        <a href="#">Forgot password?</a>
                        <a href="#">Sign Up</a>
                    </div>
                    <a href="#"><input type="submit" value="Login"></a>
                </form>
            </div>
        </div>
    </body>
</html>