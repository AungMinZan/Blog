<!DOCTYPE html>
<html>
    <head>
        <title>My Blog</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css') }}">

        <!-- App styles -->
        <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>

    <body data-sa-theme="7">

        <main class="main">
            <header class="header">
                <div class="navigation-trigger" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="{{ route('home') }}">My Blog</a></h1>
                </div>

                <ul class="top-nav">
                    <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('users.show', Auth::id()) }}" class="dropdown-item">Profile</a>
                            <a href="" class="dropdown-item">Settings</a>
                            <a href="{{ route('users.logout') }}" class="dropdown-item" id="logout">Logout</a>

                            <form method="POST" action="{{ route('users.logout') }}" id="logoutForm">
                                @csrf
                            </form>
                        </div>
                    </li>

                    <li>
                        <a href="" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
                    </li>
                </ul>

                <div class="clock">
                    <div class="time">
                        <span class="time__hours"></span>
                        <span class="time__min"></span>
                        <span class="time__sec"></span>
                    </div>
                </div>
            </header>

            <aside class="sidebar sidebar--hidden">
                <div class="scrollbar-inner">
                    <div class="user">
                        <a href="{{ route('users.show', Auth::id()) }}">
                            <div class="user__info">
                                <img class="user__img" src="" alt="">
                                <div>
                                    <div class="user__name">{{ Auth::user()->name }}</div>
                                    <div class="user__email">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <ul class="navigation">
                        <li><a href="{{ route('home') }}"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub navigation__sub--toggled">
                            <a href=""><i class="zmdi zmdi-view-week"></i> Variants</a>

                            <ul>
                                <li><a href="">Hidden Sidebar</a></li>
                                <li><a href="">Boxed Layout</a></li>
                                <li><a href="">Boxed Layout with Hidden Sidebar</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                <li><a href="">HTML Table</a></li>
                                <li><a href="">Data Table</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-collection-text"></i> Forms</a>

                            <ul>
                                <li><a href="">Basic Form Elements</a></li>
                                <li><a href="">Form Components</a></li>
                                <li><a href="">Form Validation</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="themes">
                <div class="scrollbar-inner">
                    <a href="" class="themes__item" data-sa-value="1"> <img src="/img/bg/1.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="2"> <img src="/img/bg/2.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="3"> <img src="/img/bg/3.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="4"> <img src="/img/bg/4.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="5"> <img src="/img/bg/5.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="6"> <img src="/img/bg/6.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="7"> <img src="/img/bg/7.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="8"> <img src="/img/bg/8.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="9"> <img src="/img/bg/9.jpg" alt=""></a>
                    <a href="" class="themes__item" data-sa-value="10"><img src="/img/bg/10.jpg" alt=""></a>
                </div>
            </div>

            <section class="content content--full">
                @yield('content')
            </section>
        </main>

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('vendors/bower_components/flot/jquery.flot.resize.js') }}"></script>

        <!-- App functions and actions -->
        <script src="{{ asset('js/app.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>