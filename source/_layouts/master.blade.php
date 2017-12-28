<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <header class="navbar navbar-expand navbar-light flex-column flex-md-row bd-navbar">
            <a class="navbar-brand mr-3 mr-md-3" href="/">Eli Hooten</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/vitae">CV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/projects">Projects</a>
                    </li>
                </ul>
            </div>
        </header>

        <div class="container mt-5">
        @yield('body')
        </div>
            
        <script src="/js/app.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

    </body>
</html>