<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container">
    <a class="navbar-brand" href="/">ACCUEIL</a>
    <img src="public/images/open-book.png" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Livres
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/add-book">Ajouter un livre</a>
                    <a class="dropdown-item" href="/books">Liste des livres</a>
                    <a class="dropdown-item" href="/authors">Auteurs</a>
                    <a class="dropdown-item" href="/genres">Genres</a>
                </div>
            </li>

            <li class='nav-item dropdown'>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Jeux
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/add-game">Ajouter un jeu</a>
                    <a class="dropdown-item" href="/games">Liste des jeux</a>
                    <a class="dropdown-item" href="/categories">Categories</a>
                </div>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="/logout">Deconnexion</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
