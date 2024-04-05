<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page_parent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <title>Social Home</title>
</head>

<body>
    <section class="side-menu">
        <div class="side-menu-block">
            <h2 class="search_ title">RECHERCHE<i class="fa-solid fa-magnifying-glass"></i></h2>

            <form action="" method="POST" class="filters">
                <!--h3 class="title">Filtres</h3-->
                <div class="filter-box">
                    <div class="filter-name">Tri par <i class="fa-solid fa-filter"></i></div>
                    <select class="filter-select">
                        <option value=""></option>
                        <option value="">Recommandé</option>
                        <option value="">Dernière connexion</option>
                        <option value="">Distance</option>
                    </select>
                </div>
                <div class="filter-box">
                    <div class="filter-name">J'ai Besoin de :</div>
                    <select class="filter-select1">
                        <option value="">Type d'aide</option>
                        <option value=""></option>
                        <option value="">Assistante maternelle (garde les enfants chez elle uniquement)</option>
                        <option value="">Nounou ou baby-sitter (garde au domicile des parents)</option>
                        <option value="">Tous les types de nounou</option>
                    </select>
                    .
                </div>
                <div>
                    <div class="filter-name">Localisation <i class="fa-solid fa-location-dot"></i></div>
                    <label for="adresse">Résidence <i class="fa-solid fa-location-crosshairs"></i> :</label>
                    <input type="text" name="adresse" id="adresse" placeholder="Abidjan, Cocody, Saint-viateur"
                        class="adr">
                </div>
                <div class="local-distance">
                    <label for="distance" class="dist1">Distance de recherche <i class="fa-solid fa-map-location-dot"></i> _|_</label>
                    <input type="range" id="distance" name="distance" min="1" max="100" value="30"
                        oninput="updateDistance(this.value)" class="distance">
                    <div><span id="distanceValue" class="dist2">30</span> km</div>
                </div>
                <div class="Exp">
                    <p class="filter-name">Expérience professionnelle <i class="fa-solid fa-"></i></p>

                    <div class="Exp1">
                        <select name="exp" id="" class="">
                            <option value="">Expérience</option>
                            <option value="">Moins de 1 an</option>
                            <option value="">De 1 à 2 ans</option>
                            <option value="">De 3 à 5 ans</option>
                            <option value="">Plus de 5 ans</option>
                        </select>
                        <select id="exp1" name="exp1">
                            <option value="" selected="selected">Niveau d'étude</option>
                            <option value="Brevet/BEP/CAP" data-icon="fas fa-graduation-cap">Brevet/BEP/CAP</option>
                            <option value="Lycée" data-icon="fas fa-school">Lycée</option>
                            <option value="BAC" data-icon="fas fa-graduation-cap">BAC</option>
                            <option value="BAC +1" data-icon="fas fa-user-graduate">BAC +1</option>
                            <option value="BAC +2" data-icon="fas fa-user-graduate">BAC +2</option>
                            <option value="BAC +3" data-icon="fas fa-user-graduate">BAC +3</option>
                            <option value="BAC +4" data-icon="fas fa-user-graduate">BAC +4</option>
                            <option value="BAC +5" data-icon="fas fa-user-graduate">BAC +5</option>
                        </select>
                    </div>
                </div>
                <div class="box">
                    <p class="filter-name">Plus de description</p>
                    <input type="checkbox" name="" id="" class="checkbox">
                    <label for="">
                        <strong>La nounou est véhiculé(é) <i class="fa-solid fa-"></i></strong>
                    </label>
                </div>
                <div class="box">
                    <input type="checkbox" name="" id="" class="checkbox">
                    <label for="">
                        <strong>Disponibilité confirmés <i class="fa-solid fa-"></i></strong>
                        <p>La nounou a confirmé qu'elle était disponible récemment</p>
                    </label>
                </div>

                <div class="box">
                    <label for="">
                        <input type="checkbox" name="" id="" class="checkbox">
                        <strong>Dispose d'une photo de profil <i class="fa-solid fa-"></i></strong>
                        <p>La nounou a une photo de profil</p>
                    </label>
                </div>
                <div class="box">
                    <label for="">
                        <input type="checkbox" name="" id="" class="checkbox">
                        <strong>Avis et Récommendation <i class="fa-solid fa-medal"></i></strong>
                        <p>La nounou a un ou plusieurs avis ou recommandations</p>
                    </label>
                </div>

                <button type="submit" class="btn">Rechercher les profils disponible</button>

            </form>
        </div>
    </section>

    <section class="affichage-nounou">
        <div class="container">
            <div class="header">
                <div class="nav">
                    <div class="search">
                        <input type="text" placeholder="Recherche..">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="user">
                        <a href="#"><img src="img/notifications.png" class="img"></a>
                        <span class="nom">user</span>
                        <div class="img-case">
                            <img src="img/user.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="affichage">

            </div>
        </div>
    </section>

    <!-- select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/profil.js') }}"></script>
    <script src="{{ asset('js/message.js') }}"></script>
    <script src="{{ asset('js/distance.js') }}"></script>
    <script src="{{ asset('js/icon.js') }}"></script>
</body>

</html>
