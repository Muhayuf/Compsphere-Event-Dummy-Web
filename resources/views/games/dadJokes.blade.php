<!-- Inspirate by: https://50projects50days.com/projects/dad-jokes/ -->
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <!-- Bootsratp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/40d012bf96.js" crossorigin="anonymous"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style-dadJokes.css">
    <link rel="stylesheet" href="css/style.css">
    <title>COMPSPHERE | {{ $title }}</title>
</head>
<body>
    @include('partials.nav')

    <div class="container">
        <h3>Don't Laugh Challenge</h3>
        <div id="joke" class="joke">// Joke goes here</div>
        <a href="/trivia">
            <button class="btn-dad"><b>Back</b></button>
        </a>
        <button id="jokeBtn" class="btn-dad">Get Another Joke</button>
    </div>
    
    <script src="js/script-dadJokes.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>