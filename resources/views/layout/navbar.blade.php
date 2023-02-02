    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">A propos de nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('showAllRecipes') }}">Recettes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('add_recipes') }}">Ajouter une recette</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="{{ route('index') }}">
                <span class="brand-txt">LARLITON</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pastry_types') }}">Type de pâtisserie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events') }}">Evènements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Avis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contacter nous</a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn btn-primary ml-xl-4">Connexion</a>
                </li>
            </ul>
        </div>
    </nav>