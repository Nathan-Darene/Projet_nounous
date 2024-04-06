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
    <link rel="stylesheet" href="{{ asset('css/caland1.css') }}" />

    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Pannel</h1>
        </div>
        <div class="img">
            <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" class="logo" />
        </div>
        <ul class="choixx">
            <li><i class="fa-solid fa-user"></i>&nbsp; <span>Profile</span> </li>
            <li><i class="fa-solid fa-clipboard-list"></i>&nbsp;<span>Dashboard</span> </li>
            <li><i class="fa-solid fa-bell"></i>&nbsp;<span>Notifications</span> </li>
            <li class="choix" data-target="agendaSection"><i class="fa-solid fa-calendar-check"></i>&nbsp;<span>Agenda</span> </li>
            <li><i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;<span>Coin</span> </li>
            <li><i class="fa-solid fa-envelope-circle-check"></i>&nbsp;<span>Messagerie</span> </li>
            <li><i class="fa-solid fa-lightbulb"></i>&nbsp; <span>Aide</span></li>
            <li><i class="fa-solid fa-gears"></i>&nbsp;<span>Paramètre</span> </li>
            <li><i class="fa-solid fa-door-open"></i>&nbsp;<span>Déconnexion</span> </li>
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
                            <a href="{{ route('AfficheProfileNounou') }}"><img src="uploads/{{ $data['imageUpload'] }}"
                                    alt="{{ $data['username'] }}" class="profiel"></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <section class="content">
            <section class="affiche">
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
                                <td> Famille 2</td>
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
                            <tr>
                                <td><img src="img/user.png" alt=""></td>
                                <td>Famille 1</td>
                                <td><img src="img/info.png" alt=""></td>
                                <td><i class="fa-solid fa-phone"></i></td>
                            </tr>
                            <tr>
                                <td><img src="img/user.png" alt=""></td>
                                <td>Famille 2</td>
                                <td><img src="img/info.png" alt=""></td>
                                <td><i class="fa-solid fa-phone"></i></td>
                            </tr>
                            <tr>
                                <td><img src="img/user.png" alt=""></td>
                                <td>Famille 3</td>
                                <td><img src="img/info.png" alt=""></td>
                                <td><i class="fa-solid fa-phone"></i></td>
                            </tr>
                            <tr>
                                <td><img src="img/user.png" alt=""></td>
                                <td>Famille 4</td>
                                <td><img src="img/info.png" alt=""></td>
                                <td><i class="fa-solid fa-phone"></i></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </section>
        </section>
    </div>

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

    <!-- jQuery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/profil.js') }}"></script>
    <script src="{{ asset('js/message.js') }}"></script>

    <script src="{{ asset('/js/caland.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Sélectionnez tous les éléments avec la classe "choix"
    const choices = document.querySelectorAll('.choix');

    // Boucle à travers chaque élément avec la classe "choix"
    choices.forEach(choice => {
        // Écoutez l'événement de clic pour chaque élément
        choice.addEventListener('click', function () {
            // Récupérez l'ID de l'élément cliqué
            const targetId = this.getAttribute('data-target');

            // Sélectionnez l'élément cible en fonction de son ID
            const targetElement = document.getElementById(targetId);

            // Vérifiez si l'élément cible existe
            if (targetElement) {
                // Récupérez tous les éléments avec la classe "affiche" et masquez-les
                const afficheElements = document.querySelectorAll('.affiche');
                afficheElements.forEach(element => {
                    element.style.display = 'none';
                });

                // Affichez l'élément cible
                targetElement.style.display = 'block';
            }
        });
    });
});

    </script>



</body>

</html>
