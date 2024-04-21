<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/Adminstrauetr_CSS/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <title>Administrateur de Social Home</title>
</head>

<body>

    <div class="container">
        <!-- Section de la barre latérale -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}">
                    <h2>Social <span class="danger"> Home</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <!-- Liens de navigation -->
                <a href="#">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Tableau de bord</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Utilisateurs</h3>
                </a>
                <a href="#" class="">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Activité</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Réservation</h3>
                    <span class="message-count">5</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Paramètres</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>
        <!-- Fin de la section de la barre latérale -->

        <!-- Contenu principal -->
        <main>
            <h1>Analytiques</h1>
            <!-- Analyses -->
            <div class="analyse">
                <!-- Ventes -->
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total vendu</h3>
                            <h1>65 024 $</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Visites -->
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Nombre de visites</h3>
                            <h1>4 981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recherches -->
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Recherches effectuées</h3>
                            <h1>14 147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin des analyses -->

            <!-- Section des nouveaux utilisateurs -->
            <div class="new-users">
                <h2>Nouveaux utilisateurs</h2>
                <div class="user-list">

                    @foreach (\App\Models\Users::inRandomOrder()->take(6)->get() as $user)
                        <div class="user">
                            @if ($user->imageUpload)
                                <img src="profile_users/{{ $user->imageUpload }}">
                            @else
                                <img src="{{ asset('uploads/user.png') }}">
                            @endif
                            <h2>{{ $user->username }}</h2>
                            <p>Il y a 54 minutes</p>
                        </div>
                    @endforeach


                </div>
            </div>
            <!-- Fin de la section des nouveaux utilisateurs -->

            <!-- Tableau des réservations récentes -->
            <div class="recent-orders">
                <h2>Réservations récentes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nom d'utilisateur</th>
                            <th>Nom de famille</th>
                            <th>Paiement</th>
                            <th>Statut</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <a href="#">Afficher tout</a>
            </div>
            <!-- Fin des réservations récentes -->

        </main>
        <!-- Fin du contenu principal -->

        <!-- Section de droite -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>
                @if ($data ?? '')
                    <div class="profile">
                        <div class="info">

                            <p>Salut, <b>{{ $data->username }}</b></p>
                            <small class="text-muted">Administrateur</small>
                        </div>
                        <div class="profile-photo">
                            <img src="{{ $data['profile'] }}">
                        </div>
                    </div>
                @endif
            </div>
            <!-- Fin de la navigation -->

            <div class="user-profile">
                <div class="logo">
                    <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}">
                    <h2>Social Home</h2>
                    <p>Nathan & Hugess</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Rappels</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <!-- Rappels individuels -->
                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            <i class="fas fa-calendar-days"></i>
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Date actuelle</h3>
                            <small class="text-muted" id="current-date"></small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            <i class="fa-solid fa-hourglass-half"></i>
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Heure actuelle</h3>
                            <small class="text-muted" id="current-time"></small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <!-- Bouton de suppression d'utilisateur -->
                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            close
                        </span>
                        <h3>Supprimer un utilisateur</h3>
                    </div>
                </div>

                <!-- Bouton de suppression de nounou -->
                <div class="notification add-reminder delete-nounou">
                    <div>
                        <span class="material-icons-sharp">
                            close
                        </span>
                        <h3>Supprimer une nounou</h3>
                    </div>
                </div>


            </div>

        </div>


        <!-- Ajoutez une balise div pour la fenêtre modale -->
        <!-- Balise div pour la fenêtre modale de suppression d'utilisateur -->
        <div id="delete-user-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <center><h2 class="h2">Liste des utilisateurs à supprimer</h2></center>
                <div id="delete-user-list">
                    <div class="delete-user-lists">
                        @foreach (\App\Models\Users::inRandomOrder() /*->take(6)*/->get() as $user)
                            <div class="user delete-user">
                                @if ($user->imageUpload)
                                    <img src="profile_users/{{ $user->imageUpload }}" class="image">
                                @else
                                    <img src="{{ asset('uploads/user.png') }}">
                                @endif
                                <h2 class="h2">{{ $user->username }}</h2>
                                <p class="h3">{{ $user->created_at->format('d-m-Y H:i:s') }}</p>
                                <i class="fas fa-trash-can delete-icon" title="supprimer l'utilisateur"
                                    data-user-id="{{ $user->id }}"></i>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Balise div pour la fenêtre modale de suppression de nounou -->
        <div id="delete-nounou-modal" class="modal-nounou">
            <div class="modal-content-nounou">
                <span class="close">&times;</span>
                <h2>Liste des nounous à supprimer</h2>
                <div id="delete-nounou-list">
                    <div class="delete-nounou-lists">
                        @foreach (\App\Models\Nounou::inRandomOrder()->get() as $nounou)
                            <div class="nounou delete-nounou">
                                @if ($nounou->imageUpload)
                                    <img src="uploads/{{ $nounou->imageUpload }}" class="image">
                                @else
                                    <img src="{{ asset('uploads/user.png') }}">
                                @endif
                                <h2 class="h2">{{ $nounou->username }}</h2>
                                <p class="h3">{{ $nounou->created_at->format('d-m-Y H:i:s') }}</p>
                                <i class="fas fa-trash-can delete-icon" title="supprimer la nounou"
                                    data-user-id="{{ $nounou->id }}"></i>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


    </div>


    <script src="{{ asset('js/Administratuer_JS/admin.js') }}"></script>
    <script src="{{ asset('js/Administratuer_JS/orders.js') }}"></script>
    <script src="{{ asset('js/Administratuer_JS/delete.js') }}"></script>
    <script src="{{ asset('js/Administratuer_JS/time.js') }}"></script>
    <script src="{{ asset('js/Administratuer_JS/date.js') }}"></script>
    <script src="{{ asset('js/Administratuer_JS/clic_delete.js') }}"></script>
</body>

</html>

