<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Home</title>
    <link rel="stylesheet" href="{{ asset ('fontawesome-free-6.5.1-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/connexion.css')}}">
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"-->
    <link rel="icon" type="image/png" href="{{ asset ('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png')}}">
</head>
<body>
    <audio id="lecteur-audio" src="{{asset('sound/relaxed-vlog-night-street-131746.mp3')}}" type="audio/mp3" loop></audio>

    <audio id="hover-poppup">
        <source src="{{asset('poppup/multi-pop-4-188169.mp3')}}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <div class="main">
        <div class="main-card-login">
            <div class="login-card">
                <div class="login-card-header-image">
                    <img src="{{ asset ('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" height="70" width="180">
                </div>
                <form action="{{route('login-user')}}" method="POST" class="login-card-form">
                    @if (Session::has('success'))
                    <div class="botton-text alert alert-success"> {{Session::get('success') }}</div>
                    @endif

                    @if (Session::has('fail'))
                    <div class="botton-text alert alert-danger"> {{Session::get('fail') }}</div>
                    @endif
                    @csrf
                    <span class="text-danger texte">@error('email') {{$message}} @enderror</span>
                    <input type="email" placeholder="Adresse Email" name="email" value="{{old('email')}}">
                    <span class="text-danger texte">@error('password') {{$message}} @enderror</span>
                    <input type="password" placeholder="Mot de passe" name="password" value="{{old('password')}}">
                    <button type="submit" class="login-form-button box">Connexion</button>
                    <div class="login-or">
                        <hr class="login-or-first-separation">
                        <span class="or" >OU</span>
                        <hr class="login-or-last-separation">
                    </div>
                    <div class="login-with-facebook">
                        <p>
                            <i class="fab fa-facebook-square" aria-hidden="true"></i>
                            Se connecter avec Facebook
                        </p>
                    </div>
                    <div class="forgot-password">
                        <p class="link2"><a href="{{('/reset')}}" class="link1">Mot de passe oublié ?</a></p>
                    </div>
                </form>
                <div class="login-card-footer">
                    <p>Vous n'avez pas de compte ? <a href="/registration" class="link">Inscrivez-vous </a><i class="fa-solid fa-face-smile-beam"></i></p>
                </div>
                <div class="download-app">
                    <p>Téléchargez l'application.</p>
                </div>
                <div class="download-app-buttons">
                    <img src="https://i.ibb.co/0MVzVqf/download-appstore.png" height="40" width="130">
                    <img src="https://i.ibb.co/hdsFFGB/download-playstore.png" height="40" width="130">
                </div>
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('js/music.js') }}"></script>
<script src="{{asset('js/popup.js')}}"></script>


</html>
