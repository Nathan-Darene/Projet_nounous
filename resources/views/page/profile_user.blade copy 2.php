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
    <link rel="stylesheet" href="{{ asset('css/profil_nounou.css') }}" />
    <style>
        /* CSS pour cacher la div au début */
        #Nounou_pay {
            display: none;
        }
    </style>
</head>

<body>
    <audio id="lecteur-audio" src="{{ asset('sound/relaxed-vlog-night-street-131746.mp3') }}" type="audio/mp3"
        loop></audio>
    <div class="header__wrapper">
        <header></header>
        <form action="" method="post">
            <div class="cols__container">
                <div class="left__col">
                    <div class="img__container">
                        @if ($data ?? '')
                            <img src="profile_users/{{ $data['imageUpload'] }}" alt="{{ $data['username'] }}" />
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



                    <div class="content">

                        @if ($data ?? '')
                            <p>

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
                            <li><a href="#">>Profil</a></li>
                            <li><a href="{{ route('recherche') }}">>Rchercher</a></li>
                            <li><a href="#message">>Messagerie</a></li>
                            <li><a href="#Nounou_pay">>Nounou et Payement</a></li>
                        </ul>
                        <button> <a href="#">Edite Profil</a></button>
                    </nav>
                    <div class="message" id="message">
                        Système de messagerie defectueur
                    </div>

                    <div class="Nounou_pay wrapper" id="Nounou_pay">
                        <div class="nounou">
                            <div class="affiche_nounou ">
                                @if ($nounou ?? '')
                                    <img src="uploads/{{$nounou->imageUpload}}" alt="" class="img">
                                    <span class="etat">En service</span>
                                    <h3>{{$nounou->username}}</h3>
                                    <span>{{$nounou->role}}</span>
                                    <span>{{$nounou->phone}}</span>
                                    <span>{{$nounou->prix_heure}}/heure</span>
                                    <div class="payment-nounou">
                                        <a href="{{route('paiements.store')}}">Payer</a>
                                    </div>
                                @else
                                    <p>Vous n'avez n'a pas encore effectué de réservation de nounou.</p>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/click.js') }}"></script>
</body>
<script src="{{ asset('js/music.js') }}"></script>


</html>
