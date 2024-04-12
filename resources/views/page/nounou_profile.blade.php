<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

    <title>Profile de {{ $nounou->username }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/nounou_profil.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
</head>

<body>
    <audio id="lecteur-audio" src="{{ asset('sound/relaxed-vlog-night-street-131746.mp3') }}" type="audio/mp3"
        loop></audio>
    <div class="header__wrapper">
        <header></header>
        <!--form action="" method="post"-->
        <div class="cols__container">
            <div class="left__col">
                <div class="img__container">

                        <img id="profile-image" src="/uploads/{{ $nounou['username'] }}" alt="{{ $nounou->username }}" />

                    <span></span>
                </div>
                @if ($nounou ?? '')
                    <h2>{{ $nounou->username }}</h2>
                    <p>{{ $nounou->firstname }} {{ $nounou->lastname }}</p>
                    <p>{{ $nounou->phone }}</p>
                    <p>{{ $nounou->imageUpload }}</p>
                    <p>{{ $nounou->city }}</p>
                    <p>{{ $nounou->postalcode }}</p>
                    <p>{{ $nounou->email }}</p>
                    <p>{{ $nounou->Fonction }}</p>
                @endif

                <ul class="about">
                    <li><span>4,073</span>Followers</li>
                    <li><span>322</span>Following</li>
                    <li><span>200,543</span>Attraction</li>
                </ul>

                <div class="content">
                    @if ($nounou ?? '')
                        <h2>Recherche Enfant à garder . {{ $nounou->role }} dévouée</h2>
                        <p>
                            Je m’appelle <strong>{{ $nounou->firstname }}</strong> , j’ai <strong>{{ $nounou->Age }}
                            </strong> ans, je suis {{ $nounou->role }}, étudiante en licence
                            Langues Étrangères Appliquées, à L’université Lyon 2 résident a
                            <strong>{{ $nounou->city }}</strong>.
                            Je recherche un job étudiant pour le permettre de faire
                            un peu d’économies étant loin de mes parants, notamment dans la garde d’enfants .
                            Je suis issu d’une famille de 7 frères et sœurs .
                        </p>
                    @endif
                    <ul>
                        <li><i class="fab fa-twitter"></i></li>
                        <i class="fab fa-pinterest"></i>
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-dribbble"></i>
                    </ul>
                </div>
            </div>
            <div class="right__col">
                <nav>
                    <ul>
                        <li><i class="fa-solid fa-user icon"></i><a href="#">Profil</a></li>
                        <li><a href="#annonce" class="a">>Annonce</a></li>
                        <li><a href="{{ route('recherche') }}" class="a">>Retour</a></li>
                    </ul>
                    <button>Editer</button>
                </nav>
                <div class="affichage">
                    <div class="affichage">
                        <div class="info">
                            <ul>
                                <li>
                                    <div class="info1">
                                        <h3>Tarif</h3>
                                        <h3>{{ $nounou->prix_heure }}</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="info1">
                                        <h3>Expérience</h3>
                                        <h3>{{ $nounou->experience }} Ans</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="info1">
                                        <h3>Âges</h3>
                                        <h3>{{ $nounou->Age }} Ans</h3>
                                    </div>
                                </li>
                            </ul>
                            <div class="niveau">
                                <h2>Compétences</h2>
                                <div class="up">
                                    <i class="fa-solid fa-user-graduate"> <span
                                            class="span">{{ $nounou->niveau }}</span></i>
                                    <i class="fa-solid fa-earth-africa"><span class="span"> Français</span></i>
                                    <i class="fa-solid fa-car-alt"><span class="span"></span></i>
                                    <i class="fa-solid fa-earth-africa"><span class="span"></span></i>
                                </div>
                                <div>
                                    <h2>Diponibilité</h2>
                                    <i class="fa-solid fa-calendar-check"></i>
                                </div>

                                <div class="calendar">
                                    <div class="calendar-row calendar-days">
                                        <div></div>
                                        <div>Lun</div>
                                        <div>Mar</div>
                                        <div>Mer</div>
                                        <div>Jeu</div>
                                        <div>Ven</div>
                                        <div>Sam</div>
                                        <div>Dim</div>
                                    </div>
                                    <div class="calendar-row">
                                        <div>Avant L'école</div>
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="calendar-row">
                                        <div>Le matin</div>
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="calendar-row">
                                        <div>Le midi</div>
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="calendar-row">
                                        <div>L'après midi</div>
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="calendar-row">
                                        <div>Après L'école</div>
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="calendar-row">
                                        <div>En Soirée</div>
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="calendar-row">
                                        <div>La nuit</div>
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="lun-avant-ecole" id="">
                                        <input type="checkbox" name="" id="">
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--/form-->
    </div>

    <script>
       /* // Assurez-vous que la page est entièrement chargée avant d'exécuter le code JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            // Récupérer l'élément img avec l'identifiant unique
            var profileImage = document.getElementById('profile-image');

            // Vérifier si l'utilisateur a une image de profil
            /*if ("{{ $nounou->imageUpload }}") {
                // Définir la source de l'image en utilisant l'URL de l'image de profil de l'utilisateur
                profileImage.src = "{{ asset($nounou->imageUpload) }}";
            } /*else {
                // Si l'utilisateur n'a pas d'image de profil, vous pouvez afficher une image par défaut
                profileImage.src =
                    ""; // Remplacez 'placeholder_image.jpg' par le chemin de votre image par défaut
            }
        });*/
    </script>


    <script src="{{ asset('js/music.js') }}"></script>

</body>

</html>
