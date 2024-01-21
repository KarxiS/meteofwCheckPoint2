<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meteo Centrum s.r.o.</title>

    <head>


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->



        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/nastaveniaFarieb.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Scripts -->

    </head>
    <header class="py-3 mb-4 border-bottom header">
        <div class="container-fluid">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                <a href="{{ url('/') }}" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
                    <img src="{{ asset('images/meteoLogo.png') }}" alt="meteoLogo" width="40" height="40" class="me-2">
                </a>

                <nav class="my-2 my-md-0 me-md-3">
                    <a class="p-2 {{ Request::is('/') ? 'link-secondary' : 'link-body-emphasis' }}"
                        href="{{ url('/') }}">Domov</a>
                    <a class="p-2 {{ Request::is('devices') ? 'link-secondary' : 'link-body-emphasis' }}"
                        href="{{ url('/devices') }}">Zariadenia</a>
                    <a class="p-2 {{ Request::is('grafPred') ? 'link-secondary' : 'link-body-emphasis' }}"
                        href="{{ url('/grafPred') }}">Grafická predpoveď</a>
                    <a class="p-2 {{ Request::is('txtPred') ? 'link-secondary' : 'link-body-emphasis' }}"
                        href="{{ url('/txtPred') }}">Textová predpoveď</a>
                    <a class="p-2 {{ Request::is('contact') ? 'link-secondary' : 'link-body-emphasis' }}"
                        href="{{ url('/contact') }}">Kontakt</a>
                        @if(Auth::check())
                        @can('station-show')
                    <a class="p-2 {{ Request::is('stations') ? 'link-secondary' : 'link-body-emphasis' }}"
                        href="{{ url('/stations') }}">Pridanie Stanice (logged only)</a>
                        @endcan
                        @endif

                        @if(Auth::check())
                        @can('contact-show')
                    <a class="p-2 {{ Request::is('contacts') ? 'link-secondary' : 'link-body-emphasis' }}"
                        href="{{ url('/contacts') }}">Zaznamy formularov (logged only)</a>
                        @endcan
                        @endif


                        @if(Auth::check())
                        @can('station-show')
                        <a class="nav-link" href="{{ route('users.index') }}">Manazer Uzivatelov</a>

                        @endcan
                        @endif

                        @if(Auth::check())
                        @can('admin')
                        <a class="nav-link" href="{{ route('roles.index') }}">Manazer Roli</a>
                        @endcan
                        @endif

                        
                        


                       
                </nav>


                <form class="d-flex me-md-3" role="search">
                    <input type="search" class="form-control" placeholder="Vyhľadať..." aria-label="Search">
                </form>
                @if(Auth::check())
                <div class="dropdown">
                    <a href="#" class="d-block text-dark text-decoration-none dropdown-toggle" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown">

                        @if(Auth::user()->picture)
                        <img src="{{asset(Auth::user()->picture)}}" alt="" width="32" height="32" class="rounded-circle">
                        @else
                        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle">
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="">Vlož dáta</a></li>
                        <li><x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profil') }}
                        </x-responsive-nav-link> <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Odhlasit sa') }}
                                </a>
                            </form>
                        </li>


                    </ul>
                </div>
                @else <a class="p-2 " href="{{ url('/login') }}">Login</a>
                         <a class="p-2 " href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        </div>
    </header>


<body>







    <body>
        <div id="app">


            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</body>

</html>      </div>
    </body>
</html>
