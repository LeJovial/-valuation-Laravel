<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <h1 class="titre">Bandes Dessinées</h1>
        <header>
            <nav>
                <ul>
                    <li><a href="/"><div class="menu">Accueil</div></a></li>
                    <li><a href="/Personnages"><div class="menu">Les Personnages</div></a></li>
                    <li><a href="/AjoutPerso"><div class="menu">Ajouter</div></a></li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
</html>