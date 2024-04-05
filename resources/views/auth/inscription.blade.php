<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Méta-informations -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page -->
    <title>Social Home - Inscription</title>
    <!-- Feuilles de style -->
    <link rel="icon" type="image/png" href="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1-web/css/all.min.css')}}">
    <!-- Nouveau fichier CSS pour la page d'inscription -->
    <link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cheickbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/poppup.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/6.5.1/css/font-awesome.min.css">
    <!-- Icône de la page -->
    <link rel="icon" type="image/png" href="Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png">
    <style>
        .disabled {
            background-color: gray;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <!-- En-tête de la page -->
    <header>

    </header>
    <!-- Contenu principal de la page -->
    <main class="main">
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close-popup" onclick="closePopup()">&times;</span>
                <p>Bienvenue dans la famille !</p>
            </div>
        </div>
        <!-- Carte d'inscription -->
        <div class="main-card-login">

            <div class="login-card">
                <div>
                    <a href="{{asset('acceuil')}}"><i class="fa-solid fa-close"></i></a>
                </div>
                <!-- Logo -->
                <div class="login-card-header-image" id="logo-section">
                    <!--i class="fa-solid fa-close"></i-->
                    <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" alt="Logo"
                        height="70" width="180">
                </div>
                <!-- Formulaire d'inscription -->
                <form class="login-card-form" action="{{route('register-nounou')}}" method="POST" id="registration-form" enctype="multipart/form-data">

                    @if (Session::has('success'))
                    <script>
                        showPopup();
                    </script>
                    @endif

                    @if (Session::has('success'))
                    <div class="botton-text alert alert-success"> {{Session::get('success') }}</div>
                    @endif

                    @if (Session::has('error'))
                    <div class="botton-text alert alert-danger"> {{Session::get('error') }}</div>
                    @endif
                    @csrf
                    <!-- Champ pour le nom d'utilisateur -->
                    <input type="text" placeholder="Nom d'utilisateur" name="username" value="{{old('username')}}">
                    <span class="text-danger texte">@error('username') {{$message}} @enderror</span>
                    <!-- Champ pour le nom -->
                    <input type="text" placeholder="Nom" name="lastname" value="{{old('lastname')}}">
                    <span class="text-danger texte">@error('lastname') {{$message}} @enderror</span>
                    <!-- Champ pour le prenom -->
                    <input type="text" placeholder="Prénom" name="firstname" value="{{old('firstname')}}">
                    <span class="text-danger texte">@error('firstname') {{$message}} @enderror</span>
                    <!-- Champ pour le numéro de téléphone -->
                    <input type="text" placeholder="Numéro de téléphone" name="phone" value="{{old('phone')}}">
                    <span class="text-danger texte">@error('phone') {{$message}} @enderror</span>
                    <!-- Champ pour la date de naissance -->
                    <div class="cadre">
                        <p class="par">Date de naissance</p>
                    </div>
                    <input type="date" placeholder="Date de naissance" name="birthdate" value="{{old('birthdate')}}">
                    <span class="text-danger texte">@error('birthdate') {{$message}} @enderror</span>
                    <!--Champ pour la photo de profile-->
                    <p class="par">Ajoutez votre photo d'identité</p>
                    <input type="file" id="imageUpload" name="imageUpload" accept="image/*" onchange="previewImage(event)" class="photo" value="{/*{old('imageUpload')}}"-->
                    <span class="text-danger texte">@error('imageUpload') {{$message}} @enderror</span>
                    <div-- id="imagePreview" class="imgs"></div-->
                    <!-- Champ pour la ville -->
                    <input type="text" placeholder="Ville" name="city" value="{{old('city')}}">
                    <span class="text-danger texte">@error('city') {{$message}} @enderror</span>
                    <!-- Champ pour le code postal -->
                    <input type="text" placeholder="Code postal (Optionel)" name="postalcode" value="{{old('postalcode')}}">
                    <span class="text-danger texte">@error('postalcode') {{$message}} @enderror</span>
                    <!-- Champ pour l'email -->
                    <input type="email" placeholder="Adresse email" name="email" value="{{old('email')}}">
                    <span class="text-danger texte">@error('email') {{$message}} @enderror</span>
                    <!-- Champ pour le mot de passe -->
                    <input type="password" placeholder="Mot de passe" name="password" value="{{old('password')}}">
                    <span class="text-danger texte">@error('password') {{$message}} @enderror</span>
                    <!-- Champ de confirmation du mot de passe -->
                    <input type="password" placeholder="Confirmez le mot de passe" name="confirm_password" value="{{old('confirm_password')}}">
                    <span class="text-danger texte">@error('confirm_password') {{$message}} @enderror</span>
                    <label class="container">
                        <input type="checkbox" name="privacy_acceptance" id="privacy_acceptance">
                        <p>Acceptez-vous les paramètres de confidentialité ?</p>
                        <div class="checkmark"></div>
                    </label>
                    <span class="text-danger texte">@error('privacy_acceptance') {{$message}} @enderror</span>
                    <!-- Bouton d'inscription -->
                    <!--input class="login-form-button" type="submit" placeholder="S'inscrire" id="register-button"-->
                    <button type="submit" class="login-card-form-button login-form-button disabled" id="register-button">Inscription</button>
                    <div class="login-or">
                        <hr class="login-or-first-separation">
                        <span>OU</span>
                        <hr class="login-or-last-separation">
                    </div>
                    <div class="login-with-facebook" id="facebook-login">
                        <p>
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            Se connecter avec Facebook
                        </p>
                    </div>
                    <!-- Pied de page de la carte d'inscription -->
                    <footer>
                        <!-- Lien vers la page de connexion -->
                        <div class="signup-card-footer">
                            <p>Vous avez déjà un compte ? <a href="{{asset('login_nounou')}}" id="login-link" class="login-link">Connectez-vous</a></p>
                        </div>
                        <!-- Section de téléchargement de l'application -->
                        <div class="download-app">
                            <p>Téléchargez l'application.</p>
                        </div>
                        <!-- Boutons de téléchargement de l'application -->
                        <div class="download-app-buttons">
                            <img src="https://i.ibb.co/0MVzVqf/download-appstore.png" alt="Download on the App Store"
                                height="40" width="130">
                            <img src="https://i.ibb.co/hdsFFGB/download-playstore.png" alt="Get it on Google Play"
                                height="40" width="130">
                        </div>
                    </footer>
                </form>
            </div>
        </div>
    </main>
    <script src="{{ asset('/js/photo.js')}}"></script>
    <script src="{{ asset('/js/check.js')}}"></script>
</body>

</html>
