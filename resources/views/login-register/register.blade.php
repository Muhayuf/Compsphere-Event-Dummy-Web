<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <title>COMPSPHERE | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css">
    <link rel="stylesheet" href="css/style-join.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container login-container">
            <form action="/register" method="post">
                @csrf
                <h1>Register</h1>
                <input type="text" name="name" id="name" class="@error('name') errorBox @enderror" placeholder="Name" required value="{{ old('name') }}">
                @error('name')
                    <div class="errorText">
                        {{ $message}}
                    </div>
                @enderror
                <input type="email" name="email" id="email" class="@error('email') errorBox @enderror" placeholder="Email" required value="{{ old('email') }}">
                @error('email')
                    <div class="errorText">
                        {{ $message}}
                    </div>
                @enderror
                <input type="password" name="password" id="password" class="@error('password') errorBox @enderror" placeholder="Password" required>
                @error('password')
                    <div class="errorText">
                        {{ $message}}
                    </div>
                @enderror
                <button>Register</button>
                <span>or back to home by click this logo</span>
                <div class="home-container">
                    <a href="/" class="home"><img src="img/logo.png" alt="Logo COMPSPHERE 2023" width="55"></a>
                </div>
            </form> 
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 class="title">Hello <br> Computizen</h1>
                    <p>If you have an account, login here.</p>
                    <a href="/login">
                        <button class="ghost" id="login">Login
                            <i class="lni lni-arrow-left login"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>