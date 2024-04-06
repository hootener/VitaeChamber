<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            @yield('page-title')
        </title>

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" type="text/css">



        <script src="https://unpkg.com/feather-icons"></script>
        @yield('page-style')
    </head>
    <body>
        <header class="navbar fixed-top navbar-expand navbar-light flex-column flex-md-row bd-navbar site-nav">
            <a class="navbar-brand mr-3 mr-md-3" href="{{$page->baseUrl}}">Eli Hooten</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $page->selected('resume') }}" href="{{$page->baseUrl}}/resume">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $page->selected('vitae') }}" href="{{$page->baseUrl}}/vitae">CV</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ $page->selected('press') }}" href="{{$page->baseUrl}}/press">Press</a>
                    </li> --}}
                    {{--  <li class="nav-item">
                        <a class="nav-link" href="{{$page->baseUrl}}/projects">Projects</a>
                    </li>  --}}
                </ul>
            </div>
        </header>

        <div class="container content-container">
        @yield('body')
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

        @yield('page-scripts')
        <script>
            feather.replace()
        </script>
        
    </body>
</html>
