<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('app.name', 'Laravel') }} is a free online service providing {{ \App\Algorithms\AlgorithmService::getAllAlgorithms()->count() }} hash and string algorithms." />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/main.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="/string-algorithms">String algorithms</a>
                    </li>
                    <li >
                        <a href="/hash-algorithms">Hash algorithms</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="hero">
        <div class="container">

            <div class="pull-left">
                <h1>{{ config('app.name', 'Laravel') }}</h1>
                <p>{{ config('app.name', 'Laravel') }} is a free online service providing <strong>{{ \App\Algorithms\AlgorithmService::getAllAlgorithms()->count() }}</strong> hashing and<br/> encryption tools for you to use!</p>
            </div>

        </div>
    </div>

    @yield('content')

    <div id="footer-copyright">
        <div class="container">
            <span class="pull-left">&copy; {{ config('app.name', 'Laravel') }} 2017, all rights reserved.</span>
        </div>
    </div>

    <footer>
        <div class="container">

            <ul class="pull-left">
                <li><a href="/">home</a></li>
                <li><span> | </span></li>
                <li><a href="/string-algorithms">string algorithms</a></li>
                <li><span> | </span></li>
                <li><a href="/hash-algorithms">hash algorithms</a></li>
            </ul>

            <ul class="pull-right">
                <li><a href="#facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#google" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#pinetrest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>

        </div>
    </footer>
</body>
</html>
