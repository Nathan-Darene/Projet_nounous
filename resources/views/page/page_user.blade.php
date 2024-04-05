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
        <ul>
            <li><i class="fa-solid fa-user"></i>&nbsp; <span>Profile</span> </li>
            <li><i class="fa-solid fa-clipboard-list"></i>&nbsp;<span>Dashboard</span> </li>
            <li><i class="fa-solid fa-bell"></i>&nbsp;<span>Notifications</span> </li>
            <li><i class="fa-solid fa-calendar-check"></i>&nbsp;<span>Agenda</span> </li>
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
                    <span class="nom"><a href="{{ route('AfficheProfileNounou') }}">{{ $data['username'] }}</a></span>
                    <div class="img-case">
                        <a href="{{ route('AfficheProfileNounou') }}"><img src="uploads/{{ $data['imageUpload'] }}" alt="{{ $data['username'] }}" alt=""></a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        <center><h3 class="star"> Etoille</h3></center>
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
        </div>
    </div>

     <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/profil.js')}}"></script>
    <script src="{{ asset('js/message.js')}}"></script>




</body>

</html>
