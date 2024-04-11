<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Home</title>
    <link rel="stylesheet" href="{{ asset('css/choix2.css') }}">
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"-->
    <link rel="icon" type="image/png" href="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}">
</head>

<body>
    <audio id="hover-sound">
        <source src="{{asset('poppup/happy-pop-1-185286.mp3')}}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div>
        <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" height="70"
            width="180">
    </div>

    <div class="container">
        <div class="main">
            <div class="main-card-login">

                <div class="login-card">
                    <div class="choix">
                        <h3>Je suis Nounou ou Baby-sister</h3>
                        <p class="p1">Je possede déjà un compte a Social Home</p>
                    </div>
                        <div class="login-card-form">
                            <button class="login-form-button btn">
                                <a href="{{ asset('login_nounou') }}" class="a1">Se connecter</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main">
                <div class="main-card-login">
                    <div class="login-card">
                        <div class="choix">
                            <h3>Je suis parent</h3>
                            <p class="p1">Je possede déjà un compte a Social Home</p>

                        </div>
                        <div class="login-card-form">
                            <button class="login-form-button1 btn1">
                                <a href="{{ asset('login') }}" class="a1">Se connecter</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <p>Vous n'avez pas de compte ? <a href="{{asset('choix')}}" class="a2">Inscrivez-vous !</a></p>
    </div>

</body>
<script src="{{ asset('js/music.js') }}"></script>
<script src="{{asset('js/popup.js')}}"></script>


</html>
