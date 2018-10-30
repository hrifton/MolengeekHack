<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/moi.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>

<div class="sticky">
        <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow">
            <div class="relative">
                <div class="d-flex">
                    <div class="d-none d-md-block">
                        <h1 class="nav-title">I-SECU</h1>
                    </div>
                </div>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- Connection-->
        @guest
        <li>
            <a href="{{ route('login') }}" class="nav-link">
                Connexion
            </a>
        </li>
        <!-- Inscription -->

        <li>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="nav-link">
                Inscription
            </a>
        @endif
        </li>
        @else

    <li>
            <a href="{{url('list')}}" class="nav-link">
                Nos agents
            </a>
        </li> 
        <li class="dropdown custom-dropdown messages-menu show">
            <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                <i class="icon-envelope-o"></i>
                <span class="badge badge-success badge-mini rounded-circle">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right show">
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu pl-2 pr-2">
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="{{ asset('img/dummy/u1.png') }}" alt="">
                                    <span class="avatar-badge online"></span>
                                </div>
                                <h4>
                                    Eric Louis
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Vous avez été choisis pour être portier au Bloody Louis</p>
                            </a>
                        </li>
                        <!-- end message -->
                    </ul>
                </li>
                <li class="footer s-12 p-2 text-center"><a href="#">Voir tout mes books</a></li>
            </ul>
        </li>
        <li class="dropdown custom-dropdown user user-menu">
            <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('img/dummy/u8.png') }}" class="user-image" alt="User Image">
                <i class="icon-more_vert "></i>
            </a>
            <div class="dropdown-menu p-4 dropdown-menu-right">
                <div class="row box justify-content-between my-4">
                    <div class="col">
                        <a href="/home">
                            <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Home</div>
                        </a>
                    </div>
                    <div class="col"><a href="{{url('profil')}}">
                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                        <div class="pt-1">Profil</div>
                    </a></div>
                    <div class="col">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                            <div class="pt-1">Déconnexion</div>
                        </a>
                    </div>
                </div>

            </div>
        </li>
        <!-- <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
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
            </li> -->
        @endguest
        <!-- Right Sidebar Toggle Button -->
    </ul>
</div>
        </div>
    </div>
<main>
    @section('content')
    @show
</main>

</body>
</html>
