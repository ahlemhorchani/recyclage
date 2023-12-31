<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
 
    <!-- Other head content -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="./node_modules/admin-lte/dist/css/adminlte.css">
    <link rel="stylesheet" href="{{ asset('css/ad.css') }}">
    <style>
    
/* Style de base pour la barre de navigation */
.navbar {
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Style pour les liens du menu principal */
.navbar-nav .nav-item .nav-link {
    color: #333;
    font-weight: 500;
    padding: 8px 15px;
    transition: color 0.3s ease;
}

.navbar-nav .nav-item .nav-link:hover {
    color: #007bff; /* Couleur de lien au survol */
}

/* Style pour les liens "Edit account" et "Deactivate account" */
.edit-account-link,
.deactivate-account-link {
    font-weight: bold;
    color: #007bff; /* Couleur du lien */
}

.edit-account-link:hover,
.deactivate-account-link:hover {
    text-decoration: underline; /* Soulignez les liens au survol */
    color: #ff5733; /* Couleur de lien au survol */
}

    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                    <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav me-auto">
                     @if(Auth::check())
                    <?php $usertype = Auth::user()->usertype; ?>
                     @endif
                @if ($usertype=='vendor')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ajouter_categorie_produit') }}">
                            {{ __('Welcome') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add-product') }}">
                            {{ __('Add Product') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add-category') }}">
                            {{ __('Add Category') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ajouter-categorie-produit.produits') }}">
                            {{ __('All Product') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ajouter-categorie-produit.categorie') }}">
                            {{ __('All Category') }}
                        </a>
                    </li>
                @elseif ($usertype=='client')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('catalogue-produits') }}">
                            {{ __('Catalog') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">
                            {{ __('Cart') }}
                        </a>
                    </li>
                @endif
            </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item edit-account-link"href="{{ route('add-category') }}">
                                        {{ __('Edit account') }}
                                        </a>

                                    <form id="logout-form" action="{{ route('add-category') }}" method="POST" class="d-none">
                                          @csrf
                                     </form>
                                      <a class="dropdown-item deactivate-account-link" href="{{ route('add-category') }}">
                                        {{ __('Deactivate account') }}
                                        </a>

                                    <form id="logout-form" action="{{ route('add-category') }}" method="POST" class="d-none">
                                          @csrf
                                     </form>
                                     
                                    
                                   
                                </div>
                                
                              
                                
                            </li>
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
