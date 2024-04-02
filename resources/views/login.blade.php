<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Home</title>
    <link rel="stylesheet" href="{{ asset ('css/connexion.css')}}">
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"-->
    <link rel="icon" type="image/png" href="{{ asset ('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png')}}">
</head>
<body>
    <div class="main">
        <div class="main-card-login">
            <div class="login-card">
                <div class="login-card-header-image">
                    <img src="{{ asset ('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" height="70" width="180">
                </div>
                <form action="" method="POST" class="login-card-form">
                    <input type="text" placeholder="Numéro de téléphone, nom d'utilisateur ou...">
                    <input type="password" placeholder="Mot de passe">
                    <button type="submit" class="login-form-button">Connexion</button>
                    <div class="login-or">
                        <hr class="login-or-first-separation">
                        <span>OU</span>
                        <hr class="login-or-last-separation">
                    </div>
                    <div class="login-with-facebook">
                        <p>
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            Se connecter avec Facebook
                        </p>
                    </div>
                    <div class="forgot-password">
                        <p><a href="{{('/reset')}}">Mot de passe oublié ?</a></p>
                    </div>
                </form>
                <div class="login-card-footer">
                    <p>Vous n'avez pas de compte ? <a href="/registration">s'inscrire</a></p>
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
</html>
