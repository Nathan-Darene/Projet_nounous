<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fontawesome-6.5.1-beta3/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page_parent.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title> Social Home : {{ $data['username'] }}</title>
</head>

<body>
    <section class="side-menu">
        <div>
            <form action="" class="filers" >
            <h2 class="title">Filtres</h2>
            <div class="filter-box">
                <div class="filter-name">Tri par</div>
                <select class="filter-select">
                    <option value=""></option>
                    <option value="">Recommandé</option>
                    <option value="">Derniere connexion</option>
                    <option value="">Distance</option>

                </select>
            </div>
            <div class="filter-box">
                <div class="filter-name">Ma recherche</div>
                <select class="filter-select">
                    <option value=""></option>
                    <option value="">Assistante maternelle (garde les enfants chez elle uniquement)</option>
                    <option value="">Nounou ou baby-sitter (garde au domicile des parents)</option>
                    <option value="">Tous les types de nounou</option>
                </select>
                <select class="filter-select">
                    <option value="">Types de garde</option>
                    <option value=""></option>
                    <option value="">Garde occasionnelle</option>
                    <option value="">Temps partiel (Sortie d'école, etc.)</option>
                    <option value="">Plein temps</option>
                    <option value="">Tous les types de garde</option>
                </select>
            </div>
            <div>
                <div class="filter-name">Localisation</div>
                <label for="adresse">Residence : </label>
                <input type="text" name="adresse" id="adresse" placeholder="Abidjan,Cocody,Saint-viateur">
            </div>
            <div>
                <label for="distance">Distance de recherche :</label>
                <input type="range" id="distance" name="distance" min="1" max="100" value="50" oninput="updateDistance(this.value)" class="distance">
                <div><span id="distanceValue">50 </span>km</div>
            </div>

            <div>

            </div>
        </form>

        </div>
    </section>

    <section>
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
                        <a href="#"><img src="img/notifications.png" class="img"></a>
                        @if($data ?? '')
                            <span class="nom">{{$data['username']}}</span>
                        @endif
                        <div class="img-case">
                            <img src="img/user.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/profil.js') }}"></script>
    <script src="{{ asset('js/message.js') }}"></script>
    <script src="{{ asset('js/distance.js') }}"></script>




</body>

</html>
