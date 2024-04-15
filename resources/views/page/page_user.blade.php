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
                            <tr>
                                <td>name</td>
                                <td>Famille 1 </td>
                                <td>$50</td>
                                <td><a href="#" class="btn">Voir</a></td>
                            </tr>
                            <tr>
                                <td>name</td>
                                <td>Famille 2</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Voir</a></td>
                            </tr>
                            <tr>
                                <td>name</td>
                                <td>Famille 2</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Voir</a></td>
                            </tr>
                            <tr>
                                <td>name</td>
                                <td>Famille 4</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Voir</a></td>
                            </tr>
                            <tr>
                                <td>name</td>
                                <td>Famille 5</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Voir</a></td>
                            </tr>
                            <tr>
                                <td>name</td>
                                <td>Famille 6</td>
                                <td>$120</td>
                                <td><a href="#" class="btn">Voir</a></td>
                            </tr>
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
        <div class="body1">
            <div class="container-fluid h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-md-4 col-xl-3 chat"><div
                            class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header">
                                <div class="input-group">
                                    <input type="text" placeholder="Search..."
                                        name class="form-control search">
                                    <div class="input-group-prepend">
                                        <span
                                            class="input-group-text search_btn"><i
                                                class="fas fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body contacts_body">
                                <ui class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img
                                                    src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                                    class="rounded-circle user_img">
                                                <span
                                                    class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Khalid Charif</span>
                                                <p>Online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img
                                                    src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg"
                                                    class="rounded-circle user_img">
                                                <span
                                                    class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Chaymae Naim</span>
                                                <p>Left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img
                                                    src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg"
                                                    class="rounded-circle user_img">
                                                <span
                                                    class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Sami Rafi</span>
                                                <p>Online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img
                                                    src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256"
                                                    class="rounded-circle user_img">
                                                <span
                                                    class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Hassan Agmir</span>
                                                <p>Left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img
                                                    src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg"
                                                    class="rounded-circle user_img">
                                                <span
                                                    class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Abdou Chatabi</span>
                                                <p>Left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ui>
                            </div>
                            <div class="card-footer"></div>
                        </div></div>
                    <div class="col-md-8 col-xl-6 chat">
                        <div class="card">
                            <div class="card-header msg_head">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img
                                            src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                            class="rounded-circle user_img">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>khalid Charif</span>
                                        <p>1767 Messages</p>
                                    </div>
                                    <div class="video_cam">
                                        <span><i
                                                class="fas fa-video"></i></span>
                                        <span><i
                                                class="fas fa-phone"></i></span>
                                    </div>
                                </div>
                                <span id="action_menu_btn"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="action_menu">
                                    <ul>
                                        <li><i class="fas fa-user-circle"></i>
                                            View profile</li>
                                        <li><i class="fas fa-users"></i> Add to
                                            close friends</li>
                                        <li><i class="fas fa-plus"></i> Add to
                                            group</li>
                                        <li><i class="fas fa-ban"></i>
                                            Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img
                                            src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                            class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM,
                                            Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM,
                                            Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img
                                            src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256"
                                            class="rounded-circle user_img_msg">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img
                                            src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                            class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat
                                        template
                                        <span class="msg_time">9:00 AM,
                                            Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM,
                                            Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img
                                            src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256"
                                            class="rounded-circle user_img_msg">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img
                                            src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                            class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM,
                                            Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM,
                                            Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img
                                            src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256"
                                            class="rounded-circle user_img_msg">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img
                                            src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                            class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM,
                                            Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span
                                            class="input-group-text attach_btn"><i
                                                class="fas fa-paperclip"></i></span>
                                    </div>
                                    <textarea name class="form-control type_msg"
                                        placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <span
                                            class="input-group-text send_btn"><i
                                                class="fas fa-location-arrow"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- JQuery -->
            <script
                src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript" src="scripts.js"></script>
        </div>
    </section>

    <!--Section Aide-->

    <section id="helpSection" >
        <div class="body2" style="background: rgba(54, 181, 29, 0.479)">

        </div>
    </section>

    <!--Section Parametre-->

    <section id="settingSection">
        <div class="body1">
            sjdcgfdfyudsqiugfsdgfuzegfeqçfzesiufzef
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
