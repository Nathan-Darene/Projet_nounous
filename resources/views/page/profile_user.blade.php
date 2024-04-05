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
    <link rel="stylesheet" href="{{ asset('css/profil.css') }}" />
</head>

<body>
    <div class="header__wrapper">
        <header></header>
        <form action="" method="post">
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
                        <h2>Recherche Enfant à garder . Nounou dévouée</h2>
                        @if ($data ?? '')
                        <p>
                            Je m’appelle <strong>{{$data['firstname'] }}</strong> , j’ai <strong>{{$data['age'] }} </strong>je suis étudiante en licence
                            Langues Étrangères Appliquées, à L’université Lyon 2 .
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
                            <li><a href="">Profil</a></li>
                            <li><a href="{{ route('Recherche') }}">Rchercher</a></li>
                            <li><a href="">groups</a></li>
                            <li><a href="">about</a></li>
                        </ul>
                        <button>Follow</button>
                    </nav>

                    <div class="photos">
                        <img src="img/img_1.avif" alt="Photo" />
                        <img src="img/img_2.avif" alt="Photo" />
                        <img src="img/img_3.avif" alt="Photo" />
                        <img src="img/img_4.avif" alt="Photo" />
                        <img src="img/img_5.avif" alt="Photo" />
                        <img src="img/img_6.avif" alt="Photo" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
