<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/Adminstrauetr_CSS/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Adminstrauetr_CSS/affichage.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Adminstrauetr_CSS/checkbox.css') }}">
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
                <a href="#">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    @php
                        $nathan = App\Models\Reservations::count();
                        $nathan1 = App\Models\Users::count();
                        $nathan2 = App\Models\Nounou::count();
                    @endphp
                    <h3>Réservations</h3>
                    <span class="message-count ">{{ $nathan }}</span>
                </a>
                <a href="#" id="users-link">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Utilisateurs</h3>
                    <span class="message-count">{{ $nathan1 }}</span>

                </a>

                <a href="#" id="activity-link">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Nounou</h3>
                    <span class="message-count">{{ $nathan2 }}</span>

                </a>

                <a href="#" id="dashboard-link">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>

                <a href="#" id="settings-link">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Paramètres</h3>
                </a>

                <a href="{{ route('login_admin') }}">
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
            <h1>Statistiques et analytiques</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Transaction effectué</h3>
                            <h1>25 052 004</h1>
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
            <!-- Fin des Analyses -->

            <!-- Section Nouveaux Utilisateurs -->
            <div class="new-users">
                <h2>Nouveaux Utilisateurs</h2>
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
            <div class="new-users">
                <h2>Nouvelles Nounous</h2>
                <div class="user-list">
                    @foreach (\App\Models\Nounou::inRandomOrder()->take(6)->get() as $nounou)
                        <div class="user">
                            <img src="uploads/{{ $nounou->imageUpload }}">
                            <h2>{{ $nounou->username }}</h2>
                            <p>{{ $nounou->role }}</p>
                        </div>
                    @endforeach

                </div>
            </div>
            <!-- Fin de la Section Nouveaux Utilisateurs -->

            <!-- Tableau des Réservations Récentes -->
            <div class="recent-orders">
                <input type="hidden" name="n'guessan banien josue nathan" numero="+225 05-04-31-40-86">
                <h2>Réservations récentes</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Profile</th>
                            <th>Utilisateur</th>
                            <th>Nounou</th>
                            <th>Prix par heure</th>
                            <th>Date de reservation</th>
                            <th>Début du contrat</th>
                            <th>Fin du contrat</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody class="detaille">
                        @if (isset($reservations) && (is_array($reservations) || is_object($reservations)))
                            @foreach ($reservations ?? '' as $reservation)
                                @if ($reservation->users)
                                    @if ($reservation->nounous)
                                        <tr>
                                            @if ($reservation->users->imageUpload)
                                            <td><img src="profile_users/{{ $reservation->users->imageUpload}}" alt="" class="recente"></td>
                                            @else
                                            <td><img src="{{ asset('uploads/user.png')}}" alt="" class="recente"></td>
                                            @endif
                                            <td>{{ $reservation->users->username }}</td>
                                            <td>{{ $reservation->nounous->username }}</td>
                                            <td>{{ $reservation->nounous->prix_heure }} / heure</td>
                                            <td>{{ $reservation->created_at->format('d-m-Y H:i:s') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($reservation->form_end_date)->format('d-m-Y') }}
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($reservation->form_fill_date)->format('d-m-Y') }}
                                                </< /td>
                                            <td>accepté</td>

                                        </tr>
                                    @endif
                                @else
                                    <p class="color ">Aucun utilisateur trouvé</p>
                                @endif
                            @endforeach
                        @else
                            <p class="color">Aucune réservation trouvée</p>
                        @endif
                    </tbody>
                </table>
                {{-- <a href="#reservation-popup">Afficher Tout</a> --}}
            </div>
            <!-- Fin des Réservations Récentes -->

        </main>
        <!-- Fin du Contenu Principal -->

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

                            <p>Bonjour, <b>{{ $data->username }}</b></p>
                            <small class="text-muted">Administrateur</small>
                        </div>
                        <div class="profile-photo">
                            <img src="{{ $data['profile'] }}">
                        </div>
                    </div>
                @endif
            </div>
            <!-- Fin de la Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}">
                    <h2>Social <span class="danger"> Home</span></h2>
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

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            <i class="fas fa-calendar-days"></i>
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Date Actuelle</h3>
                            <small class="text_muted" id="current-date"></small>
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
                            <h3>Heure Actuelle</h3>
                            <small class="text_muted" id="current-time"></small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            close
                        </span>
                        <h3>Supprimer un utilisateur</h3>
                    </div>
                </div>

                {{-- Bouton de suppression d'une nounou --}}
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


        <!-- Ajouter une balise div pour la fenêtre modale -->
        <!-- Balise div pour la fenêtre modale -->
        <div id="delete-user-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <center>
                    <h2 class="h2">Liste des utilisateurs à supprimer</h2>
                </center>
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
                                <p class="color">{{ $user->city }}</p>
                                <p class="color">{{ $user->gender }}</p>
                                <p class="h3">{{ $user->created_at->format('d-m-Y H:i:s') }}</p>
                                <i class="fas fa-trash-can delete-icon" title="supprimer l'utilisateur"
                                    data-user-id="{{ $user->id }}"></i>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Suppression d'une nounou --}}

        <div id="delete-nounou-modal" class="modal-nounou">
            <div class="modal-content-nounou">
                <span class="close">&times;</span>
                <center><h2 class="color">Liste des nounous à supprimer</h2></center>
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
                                <p class="h3">{{ $nounou->role }}</p>
                                <p class="h3">{{ $nounou->Age }} ans</p>
                                <p class="h3">{{ $nounou->city }}</p>
                                <p class="h3">{{ $nounou->created_at->format('d-m-Y H:i:s') }}</p>
                                <i class="fas fa-trash-can delete-icon" title="supprimer la nounou"
                                    data-user-id="{{ $nounou->id }}"></i>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Affichage des réservations -->
        <div id="reservation-popup" class="popup">
            <div class="modal-content">
                <span class="close">&times;</span>
                <center>
                    <h2 class="color">Liste des réservations</h2>
                </center>
                {{-- Insértion de la liste des réservations --}}
                @if (isset($reservations) && (is_array($reservations) || is_object($reservations)))
                    @foreach ($reservations ?? '' as $reservation)
                        <div class="reservation">
                            <div class="effet">
                                <i class="fas fa-bookmark color1"></i>
                                <p class="color ">---------------------------------------------------------------------
                                </p>
                                <i class="fas fa-bookmark color1"></i>
                            </div>
                            <h2 class="color "> Informations sur la Réservation No {{ $reservation->id }}</h2>

                            <div class="block">
                                <p class="color "><i class="fas fa-calendar-check"></i> Date de la réservation:
                                    {{ $reservation->created_at->format('d-m-Y H:i:s') }}</p>
                                <p class="color "><i class="fas fa-clock"></i> &nbsp; Date de début du contrat:
                                    {{ \Carbon\Carbon::parse($reservation->form_end_date)->format('d-m-Y') }}</p>
                                <p class="color "><i class="fas fa-clock"></i>&nbsp;Date de fin du contrat:
                                    {{ \Carbon\Carbon::parse($reservation->form_fill_date)->format('d-m-Y') }}</p>
                            </div>


                            <h2 class="color">Informations sur l'utilisateur</h2>
                            <div class="block">
                                @if ($reservation->users)
                                    <p class="color p"><i class="fas fa-user"></i> &nbsp;Nom d'utilisateur:
                                        {{ $reservation->users->username }}</p>
                                    <p class="color p"><i class="fas fa-location-dot"></i> &nbsp;Ville ou Commune :
                                        {{ $reservation->users->city }}</p>

                                    <p class="color p"><i class="fas fa-phone"></i> &nbsp;phone :
                                        {{ $reservation->users->phone }}</p>

                                    <p class="color p"><i class="fas fa-envelope"></i> &nbsp;Email:
                                        {{ $reservation->users->email }}</p>
                                    <!-- Afficher les autres informations de l'utilisateur ici -->
                                @else
                                    <p class="color ">&nbsp;Aucun utilisateur trouvé</p>
                                @endif
                            </div>

                            <!-- Vérifier si la nounou associée à la réservation existe -->
                            <h2 class="color">Informations sur la Nounou</h2>
                            <div class="block">
                                @if ($reservation->nounous)
                                    <p class="color p"><i class="fas fa-user"></i> &nbsp;Nom de la nounou:
                                        {{ $reservation->nounous->username }}</p>
                                    <p class="color p"><i class="fas fa-location-dot"></i> &nbsp;Ville ou Commune:
                                        {{ $reservation->nounous->city }}</p>
                                    <p class="color p"><i class="fas fa-envelope"></i> &nbsp;Email:
                                        {{ $reservation->nounous->email }}</p>
                                    <p class="color p"><i class="fas fa-phone"></i> &nbsp;phone :
                                        {{ $reservation->nounous->phone }}</p>
                                    <p class="color p"><i class="fas fa-user-nurse"></i> role:
                                        {{ $reservation->nounous->role }}</p>
                                    <!-- Afficher les autres informations de la nounou ici -->
                                @else
                                    <p class="color ">Aucune nounou trouvée</p>
                                @endif
                            </div>

                            <h2 class="color">Informations sur l'enfant</h2>
                            <div class="block">
                                @if ($reservation)
                                    <p class="color p"><i class="fas fa-user"></i> &nbsp;Nom de l'enfant: {{ $reservation->child_fullname }}</p>
                                    <p class="color p"><i class="fas fa-location-dot"></i> &nbsp;reside à : {{ $reservation->child_address}}</p>
                                    <p class="color p"><i class="fas fa-venus-mars"></i> &nbsp;genre: {{ $reservation->child_gender }}</p>
                                    <p class="color p"><i class="fas fa-ruler-combined"></i> &nbsp; Age: {{ $reservation->child_birthdate}}</p>
                                    <p class="color p"><i class="fas fa-user-doctor"></i>&nbsp; En cas d'urgence: {{ $reservation->emergency_contact_phone }}</p>
                                    <!-- Afficher les autres informations de la nounou ici -->
                                @else
                                    <p class="color ">Aucune nounou trouvée</p>
                                @endif
                            </div>
                            <p class="color">
                                -----------------------------------------------------------------------
                                <i class="fas fa-cart-flatbed" style="font-size: 20px"></i>
                            </p>
                        </div>
                    @endforeach
                @else
                    <p class="color">Aucune réservation trouvée</p>
                @endif
            </div>
        </div>

        <!-- Affichage des utilisateur -->
        <div id="users-modal" class="popup">
            <div class="modal-content">
                <span class="close">&times;</span>
                <center>
                    <h2 class="h2">Liste de tout les utilisateur</h2>
                </center>
                <div class="delete-user-lists">
                    @foreach (\App\Models\Users::inRandomOrder() /*->take(6)*/->get() as $user)
                        <div class="user delete-user">
                            @if ($user->imageUpload)
                                <img src="profile_users/{{ $user->imageUpload }}" class="image">
                            @else
                                <img src="{{ asset('uploads/user.png') }}">
                            @endif
                            <div class="info-user-modal">
                                <p class="h3"><i class="fas fa-user-pen"></i> &nbsp;Nom: <span
                                        class="info">{{ $user->username }}</span></p>
                                <p class="h3"><i class="fas fa-venus-mars"></i> &nbsp;Genre: <span
                                        class="info">{{ $user->gender }}</span></p>
                                <p class="h3"><i class="fas fa-at"></i> &nbsp;Adresse E-mail: <span
                                        class="info">{{ $user->email }}</span></p>
                                <p class="h3"><i class="fas fa-phone"></i> &nbsp;Telephone: <span
                                        class="info">{{ $user->phone }}</span></p>
                                <p class="h3"><i class="fas fa-location-dot"></i> &nbsp;Ville ou Commune: <span
                                        class="info">{{ $user->city }}</span></p>
                                <p class="h3"><i class="fas fa-calendar-check"></i> &nbsp;Date de creation: <span
                                        class="info">{{ $user->created_at->format('d-m-Y H:i:s') }}</span< /p>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Affichage des parametre -->

        <div id="settings-modal" class="popup">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="settings">
                    <div class="setting">
                        <i class="fas fa-gear" style="font-size: 3vh"></i>
                        <h2 class="color">Paramtre</h2>
                    </div>
                </div>
                <main>
                    <section id="account-info">
                        <h2 class="info_1">
                            <i class="fas fa-book-open-reader color"></i>
                            <span class="color">Informations sur le compte</span>
                        </h2>
                        @if ($data ?? '')
                            <form id="account-info-form">
                                <label for="username" class="color">Nom d'utilisateur : <span class="color">>
                                        {{ $data->username }}</span>
                                </label>
                                <br>
                                <label for="email" class="color">Adresse e-mail : <span
                                        class="color">{{ $data->email }}</span>
                                </label>
                                <br>
                                <form class="etat" class="color">
                                    <i class="fas fa-check-circle color"></i>
                                    <p class="color">Etat: Connecté en tant que Administrateur</p>
                                </form>
                        @endif
                    </section>

                    <section id="general-settings">
                        <h2 class="color">>Paramètres généraux</h2>
                        <form id="general-settings-form">
                            <label for="site-name" class="color">Nom du site : <span
                                    class="social color">Social</span>
                                <span class="home color">Home</span> </label>
                            <label for="language" class="color">Langue par défaut :</label>
                            <select id="language" name="language">
                                <option value="fr">Français</option>
                                <option value="en">Anglais</option>
                                <!-- Autres langues -->
                            </select>

                        </form>
                    </section>

                    <section id="privacy-security">
                        <h2 class="secure">
                            <i class="fas fa-shield-halved color"></i>
                            <span class="color">Confidentialité et sécurité</span>
                        </h2>
                        <div id="privacy-security-options">
                            <div id="privacy-security-options">
                                <label for="enable-two-factor-auth" class="switch">
                                    <input type="checkbox" id="enable-two-factor-auth" name="enable-two-factor-auth">
                                    <span class="slider"></span>
                                    <span class="color">Activer la vérification en deux étapes(2FA)</span>
                                </label>
                                <label for="enable-activity-logs" class="switch">
                                    <input type="checkbox" id="enable-activity-logs" name="enable-activity-logs">
                                    <span class="slider"></span>
                                    <span class="color">Activer les journaux d'activité</span>
                                </label>
                                <label for="enable-ip-restrictions" class="switch">
                                    <input type="checkbox" id="enable-ip-restrictions" name="enable-ip-restrictions">
                                    <span class="slider"></span>
                                    <span class="color">Activer les restrictions d'accès par adresse IP</span>
                                </label>
                                <br>
                                <br>
                            </div>
                        </div>
                    </section>

                    <section id="customization">
                        <h2>Paramètres de personnalisation</h2>
                        <form id="customization-settings-form">
                            <label for="theme" class="color">Thème : </label>
                            <select id="theme" name="theme">
                                <option value="light">Clair</option>
                                <option value="dark">Sombre</option>
                                <!-- Autres thèmes -->
                            </select><br><br>
                            <label for="layout" class="color">Disposition :</label>
                            <select id="layout" name="layout">
                                <option value="grid">Grille</option>
                                <option value="list">Liste</option>
                            </select>
                        </form>
                    </section>

                    <section id="notification">
                        <h2 class="color">Options de notification</h2>
                        <div id="notification-options">
                            <label for="enable-email-notifications" class="switch">
                                <input type="checkbox" id="enable-email-notifications"
                                    name="enable-email-notifications">
                                <span class="slider"></span>
                                <span class="color">Activer les notifications par e-mail</span>
                            </label>
                            <label for="enable-push-notifications" class="switch">
                                <input type="checkbox" id="enable-push-notifications"
                                    name="enable-push-notifications">
                                <span class="slider"></span>
                                <span class="color"> Activer les notifications push</span>
                            </label>
                            <!-- Autres options de notification -->
                        </div>
                    </section>

                    <section id="content-management">
                        <h2 class="color">Gestion du contenu</h2>
                        <div id="content-management-tools">
                            <span class="color">Ajouter un contenu</span>
                            <textarea id="admin-notes" name="admin-notes" placeholder="Entrer un  message" class="message">

                            </textarea>
                            <button type="submit" class="submit cssbuttons-io-button">
                                Envoyer <!--i class="fas fa-rocket send"></i-->
                                <div class="icon">
                                    <svg
                                      height="24"
                                      width="24"
                                      viewBox="0 0 24 24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path d="M0 0h24v24H0z" fill="none"></path>
                                      <path
                                        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                        fill="currentColor"
                                      ></path>
                                    </svg>
                                  </div>
                            </button>

                            <!-- Autres fonctionnalités de gestion du contenu -->
                        </div>
                    </section>


                    <section id="backup-recovery">
                        <h2 class="color">Sauvegarde et récupération</h2>
                        <div id="backup-recovery-options" class="bnts">
                            <button id="backup-data-button" class="color">Sauvegarder les données</button>
                            <button id="restore-data-button" class="color">Restaurer les données</button>
                            <!-- Autres options de sauvegarde et de récupération -->
                        </div>
                    </section>
                </main>

            </div>
        </div>

        <div id="dashboard-modal" class="popup">
            <div class="modal-content">
                <span class="close">&times;</span>
                <center>
                    <h2 class="color">dashboard</h2>
                </center>
                <!-- Insérer la liste des réservations ici -->
                <ul>
                    <!-- Les réservations seront affichées ici -->
                </ul>
            </div>
        </div>
        <div id="activity-modal" class="popup">
            <div class="modal-content">
                <span class="close">&times;</span>
                <center>
                    <h2 class="color h2">Liste de tout les Nounous</h2>
                </center>
                <div class="delete-user-lists">
                    @foreach (\App\Models\Nounou::inRandomOrder() /*->take(6)*/->get() as $nounou)
                        <div class="user delete-user">
                            @if ($nounou->imageUpload)
                                <img src="uploads/{{ $nounou->imageUpload }}" class="image">
                            @else
                                <img src="{{ asset('uploads/user.png') }}">
                            @endif
                            <div class="info-user-modal">
                                <p class="h3"><i class="fas fa-user-pen"></i> Nom: <span
                                        class="info">{{ $nounou->username }}</span></p>
                                <p class="h3"><i class="fas fa-venus-mars"></i> Genre: <span
                                        class="info">{{ $nounou->gender }}</span></p>
                                <p class="h3"><i class="fas fa-business-time"></i> Role: <span
                                        class="info">{{ $nounou->role }}</span></p>

                                <p class="h3"><i class="fas fa-at"></i> Adresse E-mail: <span
                                        class="info">{{ $nounou->email }}</span></p>
                                <p class="h3"><i class="fas fa-phone"></i> Telephone: <span
                                        class="info">{{ $nounou->phone }}</span></p>
                                <p class="h3"><i class="fas fa-location-dot"></i> Ville ou Commune: <span
                                        class="info">{{ $nounou->city }}</span></p>
                                <p class="h3"><i class="fas fa-calendar-check"></i> Date de creation: <span
                                        class="info">{{ $nounou->created_at->format('d-m-Y H:i:s') }}</span< /p>
                            </div>

                        </div>
                    @endforeach
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
    <script src="{{ asset('js/Administratuer_JS/affichage.js') }}"></script>
</body>

</html>
