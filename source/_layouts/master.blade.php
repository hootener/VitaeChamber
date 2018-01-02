<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{$page->baseUrl}}/css/main.css">
        @yield('page-style')
    </head>
    <body>
        <header class="navbar fixed-top navbar-expand navbar-light flex-column flex-md-row bd-navbar site-nav">
            <a class="navbar-brand mr-3 mr-md-3" href="{{$page->baseUrl}}/index">Eli Hooten</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{$page->baseUrl}}/resume">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{$page->baseUrl}}/vitae">CV</a>
                    </li>
                    {{--  <li class="nav-item">
                        <a class="nav-link" href="{{$page->baseUrl}}/projects">Projects</a>
                    </li>  --}}
                </ul>
            </div>
        </header>

        <div class="container content-container">
        @yield('body')
        </div>
            
        <script src="{{$page->baseUrl}}/js/app.js"></script>        
        
        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

        @yield('page-scripts')
 

    </body>
</html>
