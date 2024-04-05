<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page_parent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/scrolbare.css')}}">
    <link rel="stylesheet" href="{{asset('css/screen.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <title> Social Home</title>
</head>

<body>
    <section class="side-menu scrollable">
        <div class="side-menu-block">
            <h2 class="search_ title">RECHERCHE <i class="fa-solid fa-magnifying-glass"></i></h2>
            <form action="" method="" class="filters">
                <div class="filter-box">
                    <button type="button" class="close-btn"></button>
                    <div class="filter-box">
                        <div class="filter-name">Tri par <i class="fa-solid fa-filter"></i></div>
                        <select class="filter-select">
                            <option value="">Dernière connexion</option>
                            <option value="">Recommandé</option>
                            <option value="">Distance</option>
                        </select>
                    </div>
                    <div class="filter-box">
                        <div class="filter-name">J'ai Besoin de :</div>
                        <select class="filter-select1">
                            <option value="">Type d'aide</option>
                            <option value=""></option>
                            <option value="">Assistante maternelle (garde les enfants chez elle uniquement)
                            </option>
                            <option value="">Nounou ou baby-sitter (garde au domicile des parents)</option>
                            <option value="">Tous les types de nounou</option>
                        </select>
                    </div>
                    <div class="filter-box">
                        <div class="filter-name">Localisation <i class="fa-solid fa-location-dot"></i></div>
                        <label for="adresse">Résidence <i class="fa-solid fa-location-crosshairs"></i> :</label>
                        <input type="text" name="adresse" id="adresse" placeholder="Abidjan, Cocody, Saint-viateur"
                            lass="adr">
                    </div>

                    <div class="local-distance">
                        <label for="distance" class="dist1">Distance<i
                                class="fa-solid fa-map-location-dot local1"></i></label>
                        <input type="range" id="distance" name="distance" min="1" max="500"
                            value="10" oninput="updateDistance(this.value)" class="distance">
                        <div><span id="distanceValue" class="dist2">10</span> km</div>
                    </div>

                    <div class="filter-box">
                        <div class="Exp">
                            <p class="filter-name">Expérience professionnelle <i class="fa-solid fa-"></i></p>

                            <div class="Exp1">
                                <select name="exp" id="" class="exp">
                                    <option value="">Expérience</option>
                                    <option value="">Moins de 1 an</option>
                                    <option value="">De 1 à 2 ans</option>
                                    <option value="">De 3 à 5 ans</option>
                                    <option value="">Plus de 5 ans</option>
                                </select>
                                <select id="exp1" name="exp1" class="exp">
                                    <option value="" selected="selected">Niveau d'étude</option>
                                    <option value="Brevet/BEP/CAP" data-icon="fas fa-graduation-cap">Brevet/BEP/CAP
                                    </option>
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
                    </div>
                    <p class="filter-name l">Plus de description</p>
                    <div class="plus">
                        <div class="box">
                            <input type="checkbox" name="" id="" class="checkbox">
                            <label for="" class="label-text">
                                <strong>La nounou est véhiculé(é) <i class="fa-solid fa-car"></i></strong>
                            </label>
                        </div>
                        <div class="box">
                            <input type="checkbox" name="" id="" class="checkbox">
                            <label for="" class="label-text">
                                <strong>Disponibilité confirmés <i class="fa-solid fa-calendar-check"></i></strong>
                                <div class="paragraphe">
                                    <p>La nounou a confirmé qu'elle était disponible récemment</p>
                                </div>
                            </label>
                        </div>

                        <div class="box">
                            <label for="" class="label-text">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <strong>Dispose d'une photo de profil <i class="fa-solid fa-address-card"></i></strong>
                                <div class="paragraphe">
                                    <p>La nounou a une photo de profil</p>
                                </div>
                            </label>
                        </div>
                        <div class="box">
                            <label for="" class="label-text">
                                <input type="checkbox" name="" id="" class="checkbox">
                                <strong>Avis et Récommendation <i class="fa-solid fa-medal"></i></strong>
                                <div class="paragraphe">
                                    <p>La nounou a un ou plusieurs avis ou recommandations</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn">Rechercher les profils disponible</button>
            </form>
        </div>
    </section>

    <section class="affichage-nounou container">
        <div class="container">
            <div class="header">
                <div class="nav">
                    <div class="search">
                        <input type="text" placeholder="Recherche..">
                        <button type="submit" class="btn1"><i class="fas fa-search"></i></button>
                    </div>
                    <div class="user">
                        <a href="#"><img src="img/notifications.png" class="img"></a>
                        @if($data ?? '')
                            <span class="nom">{{$data['username']}}</span>
                        @endif
                        <div class="img-case">
                            @if($data ?? '')
                                <img src="uploads/{{ $data['imageUpload'] }}" class="profil" alt="photo de profil de {{$data['username']}}" >
                            @endif
                            <!--span class="nom"></!--span--->
                        </div>
                    </div>
                </div>
            </div>

            <section class="affichage_profil">
                <div class="nounou-affiche">

                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/profil.js') }}"></script>
    <script src="{{ asset('js/message.js') }}"></script>
    <script src="{{ asset('js/distance.js') }}"></script>
    <script src="{{ asset('js/icon.js') }}"></script>
    <script src="{{ asset('js/affichage.js') }}"></script>
</body>

</html>
