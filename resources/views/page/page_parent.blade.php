<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page_parent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrolbare.css') }}">
    <link rel="stylesheet" href="{{ asset('css/screen.css') }}">
    <link rel="stylesheet" href="{{asset('css/swiper.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <title> Social Home</title>
</head>

<body>
    <section class="side-menu scrollable">
        <div class="side-menu-block">
            <h2 class="search_ title">RECHERCHE <i class="fa-solid fa-magnifying-glass"></i></h2>
            <form action="{{ route('rechercher.nounous') }}" method="POST" class="filters">
                @csrf <!-- Ajoutez ceci pour protéger le formulaire contre les attaques CSRF -->
                <div class="filter-box">
                    <button type="button" class="close-btn"></button>
                    <div class="filter-box">
                        <div class="filter-name">Tri par <i class="fa-solid fa-filter"></i></div>
                        <select name="tri" class="filter-select">
                            <option value="connexion">Dernière connexion</option>
                            <option value="recommande">Recommandé</option>
                            <option value="distance">Distance</option>
                        </select>
                    </div>
                    <div class="filter-box">
                        <div class="filter-name">J'ai Besoin de :</div>
                        <select name="type_aide" class="filter-select1">
                            <option value="">Type d'aide</option>
                            <option value="assistant(e) maternelle">Assistant(e) maternelle</option>
                            <option value="Nounou">Nounou ou baby-sitter</option>
                            <option value="tous">Tous les types de nounou</option>
                        </select>
                    </div>
                    <div class="filter-box">
                        <div class="filter-name">Localisation <i class="fa-solid fa-location-dot"></i></div>
                        <label for="adresse">Résidence <i class="fa-solid fa-location-crosshairs"></i> :</label>
                        <input type="text" name="adresse" id="adresse" placeholder="Abidjan, Cocody, Saint-viateur"
                            class="adr">
                    </div>

                    <div class="local-distance">
                        <label for="distance" class="dist1">Distance<i
                                class="fa-solid fa-map-location-dot local1"></i></label>
                        <input type="range" name="distance" id="distance" min="1" max="500"
                            value="10" oninput="updateDistance(this.value)" class="distance">
                        <div><span id="distanceValue" class="dist2">10</span> km</div>
                    </div>

                    <div class="filter-box">
                        <div class="Exp">
                            <p class="filter-name">Expérience professionnelle <i class="fa-solid fa-"></i></p>
                            <div class="Exp1">
                                <input type="number" name="exp" class="exp"
                                    placeholder="Année d'experience dans le domaine">
                                <select name="exp1" class="exp">
                                    <option value="" selected="selected">Niveau d'étude</option>
                                    <option value="Null">Aucun</option>
                                    <option value="Brevet/BEPC/CAP">Brevet/BEP/CAP</option>
                                    <option value="lycee">Lycée</option>
                                    <option value="Baccalauréat">Baccalauréat</option>
                                    <option value="Licence">Licence</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctorat">Doctorat</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="filter-name l">Plus de description</p>
                    <div class="plus">
                        <div class="box">
                            <input type="checkbox" name="vehicule" id="" class="checkbox">
                            <label for="" class="label-text">
                                <strong>La nounou est véhiculé(é) <i class="fa-solid fa-car"></i></strong>
                            </label>
                        </div>
                        <div class="box">
                            <input type="checkbox" name="disponibilite" id="" class="checkbox">
                            <label for="" class="label-text">
                                <strong>Disponibilité confirmés <i class="fa-solid fa-calendar-check"></i></strong>
                                <div class="paragraphe">
                                    <p>La nounou a confirmé qu'elle était disponible récemment</p>
                                </div>
                            </label>
                        </div>

                        <button type="submit" class="btn">Rechercher les profils disponible</button>
                    </div>
                </div>
            </form>

        </div>
    </section>

    <section class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Recherche..">
                    <button type="submit" class="btn1"><i class="fas fa-search"></i></button>
                </div>
                <div class="user">
                    <a href="#"><img src="img/notifications.png" class="img"></a>
                    @if ($data ?? '')
                        <i class="fa-solid fa-user-check"></i><span class="nom"><a
                                href="{{ route('AfficheProfileUser') }}">{{ $data['username'] }}</a></span>
                        <div class="img-case">
                            <img src="profile_users/{{ $data['imageUpload'] }}" class="profil"
                                alt="photo de profil de {{ $data['username'] }}">
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="error"><span>message</span></div>

        <div class="content">
            <div class="content">
                <div class="nounou-affiche">

                </div>

            <!--div class="body">
                <swiper-container class="mySwiper" effect="cards" grab-cursor="true">
                    <swiper-slide>Slide 1</swiper-slide>
                </swiper-container>
            </!--div-->
        </div>
    </section>




    <!-- select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/profil.js') }}"></script>
    <script src="{{ asset('js/distance.js') }}"></script>
    <script src="{{ asset('js/icon.js') }}"></script>
    <script src="{{ asset('js/affichage.js') }}"></script>
    <script src="{{ asset('js/recherche.js') }}"></script>
    <script src="{{ asset('js/music.js') }}"></script>

</body>

</html>
