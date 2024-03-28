<?php
    $url = url()->current();
    if (!strpos($url, '/contrat/')) { ?>

<header class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <h1 class="navbar-brand">Gestion de la Mobilité des Etudiants : <span class="text-muted">Panel administrateur</span></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link btn btn-secondary" href="{{ url('/') }}"><span class="text">Retour à l'accueil</span></a>
                </li>
            </ul>
        </div>
    </div>
</header>
<?php } ?>
