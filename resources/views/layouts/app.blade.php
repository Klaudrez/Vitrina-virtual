<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #link { color: #FF0000; } /* CSS link color */
    </style>
</head>
<body>
   
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light " style="background-color: #008d5e;">
            {{-- <div class="dropdown" >
                <button class="btn btn-secondary dropdown-toggle" style="background-color: #007950;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>  --}} 
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    Vitrina virtual{{-- {{ config('app.name', 'Laravel') }} --}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home')}}">Inicio <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('marketplace')}}">Marketplace</a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link" href="{{ route('acercaDe')}}">acerca de</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">contacto</a>
                          </li>
                          
                            <form class="form-inline">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-success" type="button">@</button>
                                </div>
                                <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
                            </div>
                            </form>
                          
                          {{-- <span class="navbar-text">
                            Navbar text inline 
                          </span> --}}
                          {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </li> --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @if (Auth::guard('web')->check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" 
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('web')->user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                        @endif
                       @if (Auth::guard('admin')->check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::guard('admin')->user()->name}} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('SolicitudesDeProductos') }}"
                                    {{-- onclick="event.preventDefault();
                                                    document.getElementById('SolicitudesDeProductos').submit();" --}}>
                                        {{ __('Solicitudes De Productos') }}
                                    </a>
                                </div>
                            </li>
                            {{-- @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login Admin') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register Admin') }}</a>
                                </li> --}}
                        @endif
                        {{-- @if (Auth::guard('vendor')->check())
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::guard('admin')->user()->name}} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('vendor.login') }}">{{ __('Login Vendor') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('vendor.register') }}">{{ __('Register Vendor') }}</a>
                                </li>
                        @endif --}}
                    {{-- /////////////////////////////////////////////////////////////// --}}
                            
                            
                        
                    </ul>
                </div>
            </div>
            
            </a>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    <div class="container p-5 my-5"></div>

<nav class="navbar navbar-expand-md  navbar-light" style="background-color: #008d5e;"> {{-- my-5 p5 --}}

    <ul class="navbar-nav mr-auto">
        <span class="navbar-text">
            Vitrina virtual | by los Covid Bryant
        </span> 
    </ul>
    <ul class="navbar-nav ml-auto">
        @if (Auth::guard('admin')->check())
            {{-- <li class="nav-item dropdown">
            <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{Auth::guard('admin')->user()->name}} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
            </div>
            </li> --}}
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login Admin') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register Admin') }}</a>
                </li>
        @endif
        <li class="nav-item ">
            <a id="black" class="nav-link" href="#">Instagram</a>
        </li>
        <li class="nav-item">
            <a id="black" class="nav-link" href="#">Facebook</a>
        </li>  
        <li class="nav-item">  
            <a id="black" class="nav-link" href="#">Twitter</a>
        </li>
        
        
        </ul>
    </ul>
</nav>


</body>
</html>
