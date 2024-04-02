<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Home</title>
    <link rel="stylesheet" href="{{ asset('css/choix.css') }}">
    <!--link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"-->
    <link rel="icon" type="image/png" href="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}">
</head>

<body>
    <div>
        <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" height="70"
            width="180">
    </div>

    <div class="container">
        <div class="main">
            <div class="main-card-login">

                <div class="login-card">
                    <div class="choix">
                        <h3>Je cherche des enfants à garder</h3>
                        <p class="p1">Je suis une nounou, une assistante maternelle ou une baby-sitter et je souhaite proposer mes
                            services</p>
                    </div>
                    <div class="login-card-form">
                        <button class="login-form-button btn">
                            <a href="{{asset('/inscription')}}">TROUVER UN JOB</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="main-card-login">
                <div class="login-card">
                    <div class="choix">
                        <h3>J'ai besoin d'une nounou ou d'une baby-sitter</h3>
                        <p class="p2">Je suis parent et Je suis à la recherche d'une personne de confiance pour garder mes enfants
                        </p>
                    </div>
                    <div class="login-card-form">
                        <button class="login-form-button1 btn1">
                            <a href="{{asset('/registration')}}">TROUVER DE L'AIDE</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <p>Déjà membre ? <a href="{{asset('/login')}}">Se connecter</a></p>
    </div>

</body>

</html>
