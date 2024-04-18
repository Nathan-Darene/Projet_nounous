<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fontawesome-6.5.1-beta3/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page_user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calanda.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/message_style.css') }}" />

    <title>Social Home</title>
</head>

<body>
    <audio id="lecteur-audio" src="{{ asset('sound/relaxed-vlog-night-street-131746.mp3') }}" type="audio/mp3"
        loop></audio>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Pannel</h1>
        </div>
        <div class="img">
            <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" class="logo" />
        </div>
        <ul class="choixx">
            <li class="choix li"><i class="fa-solid fa-user"></i>&nbsp; <span><a
                        href="{{ route('AfficheProfileNounou') }}" class="profil">Profile</a></span> </li>

            <li class="choix li" data-target="dashboardSection"><i
                    class="fa-solid fa-clipboard-list"></i>&nbsp;<span>Dashboard</span> </li>
            <li class="choix li" data-target="agendaSection"><i
                    class="fa-solid fa-calendar-check"></i>&nbsp;<span>Agenda</span> </li>
            <li class="choix li" data-target="coinSection"><i
                    class="fa-solid fa-hand-holding-dollar"></i>&nbsp;<span>Coin</span> </li>
            <li class="choix li" data-target="messagingSection"><i
                    class="fa-solid fa-envelope-circle-check"></i>&nbsp;<span>Messagerie</span> </li>
            <li class="choix li" data-target="helpSection"><i class="fa-solid fa-lightbulb"></i>&nbsp; <span>Aide</span>
            </li>

            <li class="choix li" data-target="settingSection"><i
                    class="fa-solid fa-gears"></i>&nbsp;<span>Paramètre</span> </li>
            <li class="li dec"><i class="fa-solid fa-door-open"></i>&nbsp;<a href="{{ route('logoutNounou') }}"
                    class="logout"><span>Déconnexion</span></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Recherche..">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="user">
                    <!--a href="#" class="btn">Add New</!--a-->
                    @if ($data ?? '')
                        <a href="#"><img src="img/notifications.png" class="img"></a>
                        <span class="nom"><i class="fa-solid fa-user-check"></i> <a
                                href="{{ route('AfficheProfileNounou') }}">{{ $data['username'] }}</a></span>
                        <div class="img-case">
                            <a href="{{ route('AfficheProfileNounou') }}"><img
                                    src="uploads/{{ $data['imageUpload'] }}" alt="{{ $data['username'] }}"
                                    class="profiel"></a>
                            <span></span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <section class="content">
            <section id="dashboardSection" class="affiche">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <center>
                                <h3 class="star"> Etoille</h3>
                            </center>
                        </div>
                        <div class="icon-case">
                            <img src="students.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>53</h1>
                            <h3>Commentaire</h3>
                        </div>
                        <div class="icon-case">
                            <img src="teachers.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>5</h1>
                            <h3>???????</h3>
                        </div>
                        <div class="icon-case">
                            <img src="schools.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>350000 fcfa</h1>
                            <h3>Solde</h3>
                        </div>
                        <div class="icon-case">
                            <img src="income.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-2">
                    <div class="recent-payments">
                        <div class="title">
                            <h2>Payments Recent </h2>
                            <a href="#" class="btn">Voir Tout</a>
                        </div>
                        <table>
                            <tr>
                                <th>Nom</th>
                                <th>Famille</th>
                                <th>Facture</th>
                                <th>Option</th>
                            </tr>
                            @foreach (\App\Models\Nounou::inRandomOrder()->take(6)->get() as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>$50</td>
                                <td><a href="#" class="btn">Voir</a></td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="new-students">
                        <div class="title">
                            <h2>Nouvelle Demande</h2>
                            <a href="#" class="btn">Voir tous</a>
                        </div>
                        <table>
                            <tr>
                                <th>Profile</th>
                                <th>Famille</th>
                                <th>option</th>
                                <th>Call</th>
                            </tr>
                            @foreach (\App\Models\Users::inRandomOrder()->take(6)->get() as $user)
                                <tr>
                                    <!-- Accès au champ lastname pour le nom de famille -->
                                    <td><img src="profile_users/{{ $user->imageUpload }}" alt=""
                                            style="border-radius: 50%"></td>
                                    <td>{{ $user->lastname }}</td>
                                    <td><img src="img/info.png" alt=""></td>
                                    <td><i class="fa-solid fa-phone"></i></td>
                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </section>
        </section>
    </div>

    <!--Section Notification-->
    <section id="notificationSection" >
        cijdsdsnkc
    </section>

    <!--Section Agenda-->
    <section id="agendaSection" class="agenda" style="display: none;">
        <div class="body">
            <div class="containers">
                <div class="left">
                    <div class="calendar">
                        <div class="month">
                            <i class="fas fa-angle-left prev"></i>
                            <div class="date">MAI 2025</div>
                            <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                            <div>Dimmanche</div>
                            <div>Lundi</div>
                            <div>Mardi</div>
                            <div>Mercredi</div>
                            <div>Jeudi</div>
                            <div>Vendredi</div>
                            <div>Samedi</div>
                        </div>
                        <div class="days"></div>
                        <div class="goto-today">
                            <div class="goto">
                                <input type="text" placeholder="mm/yyyy" class="date-input" />
                                <button class="goto-btn"><i
                                        class="fa-solid fa-magnifying-glass"></i>Recherche</button>
                            </div>
                            <button class="today-btn">Date Actuelle</button>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="today-date">
                        <div class="event-day">wed</div>
                        <div class="event-date">25 MAI 2025</div>
                    </div>
                    <div class="events"></div>
                    <div class="add-event-wrapper">
                        <div class="add-event-header">
                            <div class="title">Ajouter l'heure pour votre Annonce en fonction de la date choisis</div>
                            <i class="fa-solid fa-times close"></i>
                        </div>
                        <div class="add-event-body">
                            <div class="add-event-input">
                                <input type="text" placeholder="Event Name" class="event-name" />
                            </div>
                            <div class="add-event-input">
                                <input type="text" placeholder="Heure de debut" class="event-time-from" />
                                <i class="fa-solid fa-hourglass-start"></i>
                            </div>
                            <div class="add-event-input">
                                <input type="text" placeholder="Heure de fin" class="event-time-to" />
                                <i class="fa-solid fa-hourglass-end"></i>
                            </div>
                        </div>
                        <div class="add-event-footer">
                            <button class="add-event-btn">Ajouter L'événement</button>
                        </div>
                    </div>
                </div>
                <button class="add-event">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
    </section>

    <!--Section Coin-->
    <section id="coinSection" >

    </section>

    <!--Section Messagerie-->

    <section id="messagingSection">
        <div class="body">

        </div>
    </section>

    <!--Section Aide-->

    <section id="helpSection" >
        <div class="body" style="background: rgba(54, 181, 29, 0.479)">

        </div>
    </section>

    <!--Section Parametre-->

    <section id="settingSection">
        <div class="body">
            <div class="affiche_nounou ">
                    <div class="Nounou_pay wrapper" id="Nounou_pay">
                        <div class="nounou">
                            <div class="affiche_nounou ">
                                    <img src="uploads/" alt="" class="profile_user">
                                    <h3>Username</h3>
                                    <span>city</span>
                                    <span></span>
                                    <span></span>
                                    <div class="payment-nounou">
                                        <a href="{{route('paiements.store')}}">Accepter la demande</a>
                                    </div>
                            </div>

                        </div>
                    </div>

            </div>
        </div>
    </section>




    <!-- jQuery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/selection.js') }}"></script>


    <script src="{{ asset('/js/caland.js') }}"></script>
    <script src="{{ asset('/js/affiche_section.js') }}"></script>
    <script src="{{ asset('js/music.js') }}"></script>




</body>

</html>
