<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}">Hello {{Auth::guard('web')->user()->name}}</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>     {{--  Hello {{Auth::guard('admin')->user()->name}} --}}

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                
                @endif
                @if (Auth::guard('admin')->check())
                        <a href="{{ route('admin.dashboard') }}">Admin</a>
                    @else
                        <a href="{{ route('admin.login') }}">Login Admin</a>     {{--  Hello {{Auth::guard('admin')->user()->name}} --}}
                        <a href="{{ route('admin.register') }}">Register Admin</a>
                       
                    
                
                @endif
                @if (Auth::guard('vendor')->check()))
                        <a href="{{ route('vendor.dashboard') }}">vendor</a>
                    @else
                        <a href="{{ route('vendor.login') }}">Login Vendor</a>     {{--  Hello {{Auth::guard('admin')->user()->name}} --}}
                        <a href="{{ route('vendor.register') }}">Register Vendor</a>
            |   @endif
            </div>      
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
