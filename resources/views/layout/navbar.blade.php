    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('generics.index') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ingredients.show') }}">Ingrédients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('recipes.index') }}">Recettes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('recipes.create') }}">Ajouter une recette</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="{{ route('generics.index') }}">
                <span class="brand-txt">LARLITON</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.index') }}">Type de pâtisserie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events.index') }}">Evènements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Avis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('generics.index') }}">Contacter nous</a>
                </li>
                <div class="dropdown ml-auto">
                    <a class="btn dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                        {{-- <a class="dropdown-item" href="#">Mon compte</a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </ul>
        </div>
    </nav>