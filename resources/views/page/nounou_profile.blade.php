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
    <link rel="stylesheet" href="{{ asset('css/coeur.css') }}">
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

                    <img id="profile-image" src="{{ asset('uploads/' . $nounou['imageUpload']) }}"
                        alt="{{ $nounou->username }}" />

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
                    <li><span>4,073</span>Recommendation</li>
                    <li><span>322</span>Enfants gardés</li>
                    <li><span>200,543</span>Avis</li>
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
                    <label class="ui-bookmark">
                        <input type="checkbox" />
                        <div class="bookmark">
                            <svg viewBox="0 0 16 16" style="margin-top:4px" class="bi bi-heart-fill" height="25"
                                width="25" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </div>
                    </label>

                    <button type="submit">Contactez moi </button>
                </nav>
                <div class="affichage">
                    <div class="affichage">
                        <div class="info">
                            <ul>
                                <li>
                                    <div class="info1">
                                        <h3>Tarif</h3>
                                        <h3>{{ $nounou->prix_heure }}/heure</h3>
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
                                <div class="atout">
                                    <h2>Compétences</h2>
                                    <div class="up">
                                        <i class="fa-solid fa-user-graduate"> <span
                                                class="span">{{ $nounou->niveau }}</span></i>
                                        <i class="fa-solid fa-earth-africa"><span class="span"> Français</span></i>
                                        <i class="fa-solid fa-car-alt"><span class="span">Vehiculé ? <input
                                                    type="checkbox" name="" id=""
                                                    class="conf"></i></span></i>
                                        <i class="fa-solid fa-earth-africa"><span class="span"></span></i>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="dispo">
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
                                        @if ($nounou ?? '')
                                            <!-- Avant L'école -->
                                            <div class="calendar-row">
                                                <div>Avant L'école</div>
                                                <input type="checkbox" name="lun_avant_ecole" id="lun_avant_ecole"
                                                    value="{{ $nounou->calendrier->lun_avant_ecole }}" disabled>
                                                <input type="checkbox" name="mar_avant_ecole" id="mar_avant_ecole"
                                                    value="{{ $nounou->calendrier->mar_avant_ecole }}" disabled>
                                                <input type="checkbox" name="mer_avant_ecole" id="mer_avant_ecole"
                                                    value="{{ $nounou->calendrier->mer_avant_ecole }}" disabled>
                                                <input type="checkbox" name="jeu_avant_ecole" id="jeu_avant_ecole"
                                                    value="{{ $nounou->calendrier->jeu_avant_ecole }}" disabled>
                                                <input type="checkbox" name="ven_avant_ecole" id="ven_avant_ecole"
                                                    value="{{ $nounou->calendrier->ven_avant_ecole }}" disabled>
                                                <input type="checkbox" name="sam_avant_ecole" id="sam_avant_ecole"
                                                    value="{{ $nounou->calendrier->sam_avant_ecole }}" disabled>
                                                <input type="checkbox" name="dim_avant_ecole" id="dim_avant_ecole"
                                                    value="{{ $nounou->calendrier->dim_avant_ecole }}" disabled>
                                            </div>

                                            <!-- Le matin -->
                                            <div class="calendar-row">
                                                <div>Le matin</div>
                                                <input type="checkbox" name="lun_matin" id="lun_matin"
                                                    value="{{ $nounou->calendrier->lun_matin }}" disabled>
                                                <input type="checkbox" name="mar_matin" id="mar_matin"
                                                    value="{{ $nounou->calendrier->mar_matin }}" disabled>
                                                <input type="checkbox" name="mer_matin" id="mer_matin"
                                                    value="{{ $nounou->calendrier->mer_matin }}" disabled>
                                                <input type="checkbox" name="jeu_matin" id="jeu_matin"
                                                    value="{{ $nounou->calendrier->jeu_matin }}" disabled>
                                                <input type="checkbox" name="ven_matin" id="ven_matin"
                                                    value="{{ $nounou->calendrier->ven_matin }}" disabled>
                                                <input type="checkbox" name="sam_matin" id="sam_matin"
                                                    value="{{ $nounou->calendrier->sam_matin }}" disabled>
                                                <input type="checkbox" name="dim_matin" id="dim_matin"
                                                    value="{{ $nounou->calendrier->dim_matin }}" disabled>
                                            </div>

                                            <!-- Le midi -->
                                            <div class="calendar-row">
                                                <div>Le midi</div>
                                                <input type="checkbox" name="lun_midi" id="lun_midi"
                                                    value="{{ $nounou->calendrier->lun_midi }}" disabled>
                                                <input type="checkbox" name="mar_midi" id="mar_midi"
                                                    value="{{ $nounou->calendrier->mar_midi }}" disabled>
                                                <input type="checkbox" name="mer_midi" id="mer_midi"
                                                    value="{{ $nounou->calendrier->mer_midi }}" disabled>
                                                <input type="checkbox" name="jeu_midi" id="jeu_midi"
                                                    value="{{ $nounou->calendrier->jeu_midi }}" disabled>
                                                <input type="checkbox" name="ven_midi" id="ven_midi"
                                                    value="{{ $nounou->calendrier->ven_midi }}" disabled>
                                                <input type="checkbox" name="sam_midi" id="sam_midi"
                                                    value="{{ $nounou->calendrier->sam_midi }}" disabled>
                                                <input type="checkbox" name="dim_midi" id="dim_midi"
                                                    value="{{ $nounou->calendrier->dim_midi }}" disabled>
                                            </div>

                                            <!-- L'après-midi -->
                                            <div class="calendar-row">
                                                <div>L'après-midi</div>
                                                <input type="checkbox" name="lun_apres_midi" id="lun_apres_midi"
                                                    value="{{ $nounou->calendrier->lun_apres_midi }}" disabled>
                                                <input type="checkbox" name="mar_apres_midi" id="mar_apres_midi"
                                                    value="{{ $nounou->calendrier->mar_apres_midi }}" disabled>
                                                <input type="checkbox" name="mer_apres_midi" id="mer_apres_midi"
                                                    value="{{ $nounou->calendrier->mer_apres_midi }}" disabled>
                                                <input type="checkbox" name="jeu_apres_midi" id="jeu_apres_midi"
                                                    value="{{ $nounou->calendrier->jeu_apres_midi }}" disabled>
                                                <input type="checkbox" name="ven_apres_midi" id="ven_apres_midi"
                                                    value="{{ $nounou->calendrier->ven_apres_midi }}" disabled>
                                                <input type="checkbox" name="sam_apres_midi" id="sam_apres_midi"
                                                    value="{{ $nounou->calendrier->sam_apres_midi }}" disabled>
                                                <input type="checkbox" name="dim_apres_midi" id="dim_apres_midi"
                                                    value="{{ $nounou->calendrier->dim_apres_midi }}" disabled>
                                            </div>

                                            <!-- Après L'école -->
                                            <div class="calendar-row">
                                                <div>Après L'école</div>
                                                <input type="checkbox" name="lun_apres_ecole" id="lun_apres_ecole"
                                                    value="{{ $nounou->calendrier->lun_apres_ecole }}" disabled>
                                                <input type="checkbox" name="mar_apres_ecole" id="mar_apres_ecole"
                                                    value="{{ $nounou->calendrier->mar_apres_ecole }}" disabled>
                                                <input type="checkbox" name="mer_apres_ecole" id="mer_apres_ecole"
                                                    value="{{ $nounou->calendrier->mer_apres_ecole }}" disabled>
                                                <input type="checkbox" name="jeu_apres_ecole" id="jeu_apres_ecole"
                                                    value="{{ $nounou->calendrier->jeu_apres_ecole }}" disabled>
                                                <input type="checkbox" name="ven_apres_ecole" id="ven_apres_ecole"
                                                    value="{{ $nounou->calendrier->ven_apres_ecole }}" disabled>
                                                <input type="checkbox" name="sam_apres_ecole" id="sam_apres_ecole"
                                                    value="{{ $nounou->calendrier->sam_apres_ecole }}" disabled>
                                                <input type="checkbox" name="dim_apres_ecole" id="dim_apres_ecole"
                                                    value="{{ $nounou->calendrier->dim_apres_ecole }}" disabled>
                                            </div>

                                            <!-- En soirée -->
                                            <div class="calendar-row">
                                                <div>En Soirée</div>
                                                <input type="checkbox" name="lun_en_soiree" id="lun_en_soiree"
                                                    value="{{ $nounou->calendrier->lun_en_soiree }}" disabled>
                                                <input type="checkbox" name="mar_en_soiree" id="mar_en_soiree"
                                                    value="{{ $nounou->calendrier->mar_en_soiree }}" disabled>
                                                <input type="checkbox" name="mer_en_soiree" id="mer_en_soiree"
                                                    value="{{ $nounou->calendrier->mer_en_soiree }}" disabled>
                                                <input type="checkbox" name="jeu_en_soiree" id="jeu_en_soiree"
                                                    value="{{ $nounou->calendrier->jeu_en_soiree }}" disabled>
                                                <input type="checkbox" name="ven_en_soiree" id="ven_en_soiree"
                                                    value="{{ $nounou->calendrier->ven_en_soiree }}" disabled>
                                                <input type="checkbox" name="sam_en_soiree" id="sam_en_soiree"
                                                    value="{{ $nounou->calendrier->sam_en_soiree }}" disabled>
                                                <input type="checkbox" name="dim_en_soiree" id="dim_en_soiree"
                                                    value="{{ $nounou->calendrier->dim_en_soiree }}" disabled>
                                            </div>

                                            <!-- La nuit -->
                                            <div class="calendar-row">
                                                <div>La nuit</div>
                                                <input type="checkbox" name="lun_nuit" id="lun_nuit"
                                                    value="{{ $nounou->calendrier->lun_nuit }}" disabled>
                                                <input type="checkbox" name="mar_nuit" id="mar_nuit"
                                                    value="{{ $nounou->calendrier->mar_nuit }}" disabled>
                                                <input type="checkbox" name="mer_nuit" id="mer_nuit"
                                                    value="{{ $nounou->calendrier->mer_nuit }}" disabled>
                                                <input type="checkbox" name="jeu_nuit" id="jeu_nuit"
                                                    value="{{ $nounou->calendrier->jeu_nuit }}" disabled>
                                                <input type="checkbox" name="ven_nuit" id="ven_nuit"
                                                    value="{{ $nounou->calendrier->ven_nuit }}" disabled>
                                                <input type="checkbox" name="sam_nuit" id="sam_nuit"
                                                    value="{{ $nounou->calendrier->sam_nuit }}" disabled>
                                                <input type="checkbox" name="dim_nuit" id="dim_nuit"
                                                    value="{{ $nounou->calendrier->dim_nuit }}" disabled>
                                            </div>
                                        @endif





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
        // Fonction pour vérifier et cocher la case à cocher si sa valeur est égale à 1
        function verifierCheckbox() {
            // Sélectionner toutes les cases à cocher
            var checkboxes = document.querySelectorAll('.calendar input[type="checkbox"]');

            // Parcourir toutes les cases à cocher
            checkboxes.forEach(function(checkbox) {
                // Vérifier si la valeur de la case à cocher est égale à 1
                if (checkbox.value === "1") {
                    // Cocher la case à cocher
                    checkbox.checked = true;
                }
            });
        }

        // Appeler la fonction pour vérifier les cases à cocher lorsque le document est chargé
        window.onload = function() {
            verifierCheckbox();
        };
    </script>


    <script src="{{ asset('js/music.js') }}"></script>

</body>

</html>
