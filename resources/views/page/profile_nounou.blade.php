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
    <link rel="stylesheet" href="{{asset('css/texterea.css')}}">
</head>

<body>

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
                        <h2>Recherche Enfant à garder . {{$data['role']}} dévouée</h2>
                        <p>
                            Je m’appelle <strong>{{$data['firstname'] }}</strong> , j’ai <strong>{{$data['Age'] }} </strong> ans, je suis {{$data['role']}}, étudiante en licence
                            Langues Étrangères Appliquées, à L’université Lyon 2 résident a <strong>{{$data['city']}}</strong>.
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
                            <li><i class="fa-solid fa-user"></i><a href="#">Profil</a></li>
                            <li><a href="#annonce" class="a">>Annonce</a></li>
                            <li><a href="#" class="a">>Service</a></li>
                            <li><a href="{{route("About")}}" class="a">>about</a></li>
                        </ul>
                        <button>Editer</button>
                    </nav>

                    <form action="{{route('annonce')}}" method="POST" >
                        @csrf

                        <div class="annonce wrapper" id="annonce">
                            <h2>Annonce</h2>
                            <p>Ajouter une annnce</p>
                            <input type="text" placeholder="Titre de l'annonce" name="titre" id="titre" class="annonce1">
                            <textarea name="description" spellcheck="false" placeholder="Description de l'annonce" ></textarea>
                            <select name="statut" id="statut">
                                <option value="">Votre disponibilité</option>
                                <option value=""></option>
                                <option value="Disponible">Disponible</option>
                                <option value="Indisponible">Indisponible</option>
                            </select>
                            <input type="text" name="date_disponible" id="date_disponible" placeholder="Date de disponibilité">
                            <button type="submit" class="btns">Ajouter</button>
                        </div>
                    </form>
                </div>
            </div>
        <!--/form-->
    </div>
    <script>
        const textarea = document.querySelector("textarea");
        textarea.addEventListener("keyup", e =>{
          textarea.style.height = "63px";
          let scHeight = e.target.scrollHeight;
          textarea.style.height = `${scHeight}px`;
        });
      </script>
      <script src="{{ asset('js/music.js') }}"></script>

</body>

</html>
