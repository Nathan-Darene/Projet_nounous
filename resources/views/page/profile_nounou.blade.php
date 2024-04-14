<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

    <title>Profile de {{ $data['username'] }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/profil_nounou.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/texterea.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">

    <style>
        #annonce {
            display: none;
        }
    </style>
</head>

<body>
    <label for=""></label>
    <audio id="lecteur-audio" src="{{ asset('sound/relaxed-vlog-night-street-131746.mp3') }}" type="audio/mp3"
        loop></audio>
    <div class="header__wrapper">
        <header></header>
        <!--form action="" method="post"-->
        <div class="cols__container">
            <div class="left__col">
                <div class="img__container">
                    @if ($data ?? '')
                        <img src="uploads/{{ $data['imageUpload'] }}" alt="{{ $data['username'] }}" />
                    @endif
                    <span></span>
                </div>
                @if ($data ?? '')
                    <h2>{{ $data['username'] }}</h2>
                    <p>{{ $data['firstname'] }} {{ $data['lastname'] }}</p>
                    <p>{{ $data['phone'] }}</p>
                    <p>{{ $data['city'] }}</p>
                    <p>{{ $data['postalcode'] }}</p>
                    <p>{{ $data['email'] }}</p>
                    <p>{{ $data['Fonction'] }}</p>
                @endif

                <ul class="about">
                    <li><span>4,073</span>Followers</li>
                    <li><span>322</span>Following</li>
                    <li><span>200,543</span>Attraction</li>
                </ul>

                <div class="content">
                    @if ($data ?? '')
                        <h2>Recherche Enfant à garder . {{ $data['role'] }} dévouée</h2>
                        <p>
                            Je m’appelle <strong>{{ $data['firstname'] }}</strong> , j’ai <strong>{{ $data['Age'] }}
                            </strong> ans, je suis {{ $data['role'] }}, étudiante en  <strong>{{ $data['niveau'] }}
                            </strong>
                            Langues Étrangères Appliquées, à L’université Lyon 2 résident a la
                            <strong>{{ $data['city'] }}</strong>.
                            Je recherche un job pour me permettre de me faire
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
                        <li><i class="fa-solid fa-user"></i><a href="#">Profil</a></li>
                        <li><a href="#annonce" class="a">>Annonce</a></li>
                        <li><a href="#service" class="a">>Annonce parents</a></li>
                        <li><a href="{{ route('About') }}" class="a">>Ma Page</a></li>
                    </ul>
                    <button>Editer</button>
                </nav>
                <div class="affichage">
                    @if (session('success'))
                        <div class="alert alert-success" style="color : rgb(15, 226, 15)">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" style="color : rgb(182, 0, 6)">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="{{ route('annonce') }}" method="POST">
                        @csrf

                        <div class="annonce wrapper" id="annonce">
                            <h2>Annonce</h2>
                            <p>Ajouter une annnce</p>
                            <input type="text" placeholder="Titre de l'annonce" name="titre" id="titre"
                                class="annonce1">
                            <textarea name="description" spellcheck="false" placeholder="Description de l'annonce"></textarea>
                            <div class="event">
                                <select name="statut" id="statut">
                                    <option value="">Votre disponibilité</option>
                                    <option value=""></option>
                                    <option value="Disponible">Disponible</option>
                                    <option value="Indisponible">Indisponible</option>
                                </select>
                                <!--input type="text" name="date_disponible" id="date_disponible"
                                    placeholder="Date de disponibilité"-->
                            </div>
                            <div class="form-group">
                                <div class="containe">
                                    <input style="display: none;" id="cbx" type="checkbox" id="active"
                                        name="active" value="1">
                                    <label class="check" for="cbx">Véhiculé ?:
                                        <svg viewBox="0 0 18 18" height="18px" width="18px">
                                            <path
                                                d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z">
                                            </path>
                                            <polyline points="1 9 7 14 15 4"></polyline>
                                        </svg>
                                    </label>
                                </div>
                                <!--input type="checkbox" id="active" name="active" value="1"-->
                            </div>
                            <button type="submit" class="btns">Ajouter</button>
                        </div>


                    </form>
                    <form action="{{ route('check') }}" method="POST">
                        @csrf
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
                            <!-- Avant l'école -->
                            <div class="calendar-row">
                                <div>Avant L'école</div>
                                <input type="checkbox" name="lun_avant_ecole" id="lun_avant_ecole" value="1">
                                <input type="checkbox" name="mar_avant_ecole" id="mar_avant_ecole" value="1">
                                <input type="checkbox" name="mer_avant_ecole" id="mer_avant_ecole" value="1">
                                <input type="checkbox" name="jeu_avant_ecole" id="jeu_avant_ecole" value="1">
                                <input type="checkbox" name="ven_avant_ecole" id="ven_avant_ecole" value="1">
                                <input type="checkbox" name="sam_avant_ecole" id="sam_avant_ecole" value="1">
                                <input type="checkbox" name="dim_avant_ecole" id="dim_avant_ecole" value="1">
                            </div>

                            <!-- Le matin -->
                            <div class="calendar-row">
                                <div>Le matin</div>
                                <input type="checkbox" name="lun_matin" id="lun_matin" value="1">
                                <input type="checkbox" name="mar_matin" id="mar_matin" value="1">
                                <input type="checkbox" name="mer_matin" id="mer_matin" value="1">
                                <input type="checkbox" name="jeu_matin" id="jeu_matin" value="1">
                                <input type="checkbox" name="ven_matin" id="ven_matin" value="1">
                                <input type="checkbox" name="sam_matin" id="sam_matin" value="1">
                                <input type="checkbox" name="dim_matin" id="dim_matin" value="1">
                            </div>

                            <!-- Le midi -->
                            <div class="calendar-row">
                                <div>Le midi</div>
                                <input type="checkbox" name="lun_midi" id="lun_midi" value="1">
                                <input type="checkbox" name="mar_midi" id="mar_midi" value="1">
                                <input type="checkbox" name="mer_midi" id="mer_midi" value="1">
                                <input type="checkbox" name="jeu_midi" id="jeu_midi" value="1">
                                <input type="checkbox" name="ven_midi" id="ven_midi" value="1">
                                <input type="checkbox" name="sam_midi" id="sam_midi" value="1">
                                <input type="checkbox" name="dim_midi" id="dim_midi" value="1">
                            </div>
                            <!-- L'après-midi -->
                            <div class="calendar-row">
                                <div>L'après-midi</div>
                                <input type="checkbox" name="lun_apres_midi" id="lun_apres_midi" value="1">
                                <input type="checkbox" name="mar_apres_midi" id="mar_apres_midi" value="1">
                                <input type="checkbox" name="mer_apres_midi" id="mer_apres_midi" value="1">
                                <input type="checkbox" name="jeu_apres_midi" id="jeu_apres_midi" value="1">
                                <input type="checkbox" name="ven_apres_midi" id="ven_apres_midi" value="1">
                                <input type="checkbox" name="sam_apres_midi" id="sam_apres_midi" value="1">
                                <input type="checkbox" name="dim_apres_midi" id="dim_apres_midi" value="1">
                            </div>

                            <!-- Après l'école -->
                            <div class="calendar-row">
                                <div>Après L'école</div>
                                <input type="checkbox" name="lun_apres_ecole" id="lun_apres_ecole" value="1">
                                <input type="checkbox" name="mar_apres_ecole" id="mar_apres_ecole" value="1">
                                <input type="checkbox" name="mer_apres_ecole" id="mer_apres_ecole" value="1">
                                <input type="checkbox" name="jeu_apres_ecole" id="jeu_apres_ecole" value="1">
                                <input type="checkbox" name="ven_apres_ecole" id="ven_apres_ecole" value="1">
                                <input type="checkbox" name="sam_apres_ecole" id="sam_apres_ecole" value="1">
                                <input type="checkbox" name="dim_apres_ecole" id="dim_apres_ecole" value="1">
                            </div>

                            <!-- En soirée -->
                            <div class="calendar-row">
                                <div>En Soirée</div>
                                <input type="checkbox" name="lun_en_soiree" id="lun_en_soiree" value="1">
                                <input type="checkbox" name="mar_en_soiree" id="mar_en_soiree" value="1">
                                <input type="checkbox" name="mer_en_soiree" id="mer_en_soiree" value="1">
                                <input type="checkbox" name="jeu_en_soiree" id="jeu_en_soiree" value="1">
                                <input type="checkbox" name="ven_en_soiree" id="ven_en_soiree" value="1">
                                <input type="checkbox" name="sam_en_soiree" id="sam_en_soiree" value="1">
                                <input type="checkbox" name="dim_en_soiree" id="dim_en_soiree" value="1">
                            </div>

                            <!-- La nuit -->
                            <div class="calendar-row">
                                <div>La nuit</div>
                                <input type="checkbox" name="lun_nuit" id="lun_nuit" value="1">
                                <input type="checkbox" name="mar_nuit" id="mar_nuit" value="1">
                                <input type="checkbox" name="mer_nuit" id="mer_nuit" value="1">
                                <input type="checkbox" name="jeu_nuit" id="jeu_nuit" value="1">
                                <input type="checkbox" name="ven_nuit" id="ven_nuit" value="1">
                                <input type="checkbox" name="sam_nuit" id="sam_nuit" value="1">
                                <input type="checkbox" name="dim_nuit" id="dim_nuit" value="1">
                            </div>


                        </div>

                        <button type="submit" class="">Enregistrer</button>
                    </form>
                </div>
                <div class="service" id="service">

                </div>
            </div>
        </div>
        <!--/form-->
    </div>
    <script>
        const textarea = document.querySelector("textarea");
        textarea.addEventListener("keyup", e => {
            textarea.style.height = "63px";

            let scHeight = e.target.scrollHeight;
            textarea.style.height = `${scHeight}px`;
        });
    </script>
    <script src="{{ asset('js/music.js') }}"></script>
    <script src="{{ asset('js/annonce.js') }}"></script>

</body>

</html>
