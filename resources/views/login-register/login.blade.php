<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png">
    <title>COMPSPHERE | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css">
    <!-- Bootsratp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style-join.css">
</head>
<body>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show fs-6" role="alert">
            {{ session('loginError') }} 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container" id="container">        
        <div class="form-container login-container">
            <form action="/login" method="post">
                @csrf
                <h1>Login</h1>
                <input type="email" name="email" id="email" class="@error('email') errorBox @enderror" placeholder="Email" autofocus required>
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
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label>Remember me</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <button>Login</button>
                <span>or back to home by click this logo</span>
                <div class="home-container">
                    <a href="/" class="home"><img src="img/logo.png" alt="Logo COMPSPHERE 2023" width="55"></a>
                </div>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1 class="title">Start your <br> Journey</h1>
                    <p>If you don't have an account yet, join us and start your journey</p>
                    <a href="/register">
                        <button class="ghost" id="register">Register
                            <i class="lni lni-arrow-left login"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>