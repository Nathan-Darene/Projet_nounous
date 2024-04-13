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
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/handlebars/dist/handlebars.min.js"></script>
    <title> Social Home</title>
    <style>
        .swiper-slide {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .img-nounou {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .nounou-info h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .nounou-info p {
            font-size: 14px;
            color: #888;
        }

        .view-more {
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>

</head>

<body>
    <audio id="lecteur-audio" src="{{ asset('sound/relaxed-vlog-night-street-131746.mp3') }}" type="audio/mp3"
        loop></audio>
    <button id="bouton-toggle" class="play"></button>


    <section class="side-menu scrollable">
        <div class="side-menu-block">
            <h2 class="search_ title">RECHERCHE <i class="fa-solid fa-magnifying-glass"></i></h2>
            <div class="form">
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
                                <option value="">Tout les Types</option>
                                <option value="assistant(e) maternelle">Assistant(e) maternelle</option>
                                <option value="Nounou">Nounou</option>
                                <option value="Baby sister">Baby sitter</option>
                            </select>
                        </div>
                        <div class="filter-box">
                            <div class="filter-name">Localisation <i class="fa-solid fa-location-dot"></i></div>
                            <label for="adresse">Résidence <i class="fa-solid fa-location-crosshairs"></i> :</label>
                            <input type="text" name="adresse" id="adresse"
                                placeholder="Abidjan, Cocody, Saint-viateur" class="adr">
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
                                        <option value="Aucun">Aucun</option>
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

        </div>
    </section>

    <section class="container">
        <div class="header">
            <div class="nav">
                
                <form action="{{ route('rechercher.nounous') }}" method="POST">
                    <div class="search">
                        <input type="text" name="search" placeholder="Recherche..">
                        <button type="submit" class="btn1"><i class="fas fa-search"></i></button>
                    </div>
                </form>
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

        <div class="error"><span></span></div>

        <div class="">
            <div class="body">
                <swiper-container class="mySwiper nounou-affiche" effect="cards" grab-cursor="true">

                </swiper-container>
            </div>

            <!--div class="body">
                <swiper-container class="mySwiper" effect="cards" grab-cursor="true">
                    <swiper-slide>Slide 1</swiper-slide>
                </swiper-container>
            </!--div-->
        </div>
    </section>





    <script>
        // Définir la fonction pour récupérer les données depuis le contrôleur Laravel et les afficher
        function afficherNounous() {
            // Effectuer une requête Ajax vers votre route Laravel
            $.ajax({
                url: '{{ route('rechercher.nounous') }}', // Utiliser la route Laravel pour la recherche
                type: 'POST', // Utiliser la méthode POST pour envoyer les données
                dataType: 'json', // Attendre une réponse JSON
                data: $('.filters').serialize(), // Envoyer les données du formulaire
                success: function(response) {
                    // Effacer le contenu précédent
                    $('.nounou-affiche').empty();

                    // Récupérer l'instance Swiper existante
                    var mySwiper = document.querySelector('.mySwiper').swiper;

                    // Effacer le contenu précédent du carrousel
                    mySwiper.removeAllSlides();
                    // Afficher les résultats de la recherche
                    // Modifier le code pour afficher les nounous dans le carrousel Swiper
                    $.each(response.nounous, function(index, nounou) {
                        var html = '<swiper-slide class="slide">' +
                                        '<div class="wave"></div>'+
                                        '<div class="wave"></div>'+
                                        '<div class="wave"></div>'+
                                        '<img src="uploads/' + nounou.imageUpload + '" class="img-nounou">' +
                                        '<div class="infos">'+
                                            '<h2 style="color:white;">' + nounou.username + '</h2>' +
                                            '<div class="nounou-info">' +
                                                '<h4 style="color:white;"> Age: ' + nounou.Age + ' ans</h4>' +
                                                '<h3 style="color:white;">' + nounou.role + '</h3>' +
                                                '<h3 style="color:white;">' + nounou.city + '</h3>' +
                                                '<h3 style="color:white;">' + nounou.prix_heure + '</h3>' +
                                            '</div>' +
                                        '</div>'+
                                        '<a href="/nounou/' + nounou.id + '/nounou_profile" class="view-more" data-nounou-id="' + nounou.id + ' style="color:white;"" >Voir plus</a>' +
                                    '</swiper-slide>';
                        mySwiper.appendSlide(html);
                        /*$('.nounou-affiche').append(html);*/
                    });

                },
                error: function(xhr, status, error) {
                    // Gérer les erreurs
                    console.error(xhr.responseText);
                }
            });
        }

        // Appeler la fonction pour afficher les nounous lorsque la page est prête
        $(document).ready(function() {
            afficherNounous();

            // Ajouter un écouteur d'événement sur le formulaire pour afficher les résultats lors de la soumission
            $('.filters').submit(function(event) {
                event.preventDefault(); // Empêcher le rechargement de la page
                afficherNounous(); // Appeler la fonction pour afficher les nounous
            });
        });
    </script>


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
    <script src="{{ asset('js/swiper-element-bundle.min.js') }}"></script>
</body>

</html>
