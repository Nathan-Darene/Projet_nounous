<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Méta-informations -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre de la page -->
    <title>Social Home - formialre </title>
    <!-- Feuilles de style -->
    <link rel="icon" type="image/png" href="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <!-- Nouveau fichier CSS pour la page d'inscription -->
    <link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Icône de la page -->
    <link rel="icon" type="image/png" href="../test/Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png">
</head>

<body>
    <!-- En-tête de la page -->
    <header>

    </header>
    <!-- Contenu principal de la page -->
    <main class="main">
        <!-- Carte d'inscription -->
        <div class="main-card-login">
            <div class="login-card">
                <!-- Logo -->
                <div class="login-card-header-image" id="logo-section">
                    <!--i class="fa-solid fa-close"></i-->
                    <img src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" alt="Logo"
                        height="70" width="180">
                </div>
                <!-- Formulaire d'inscription -->
                <form class="login-card-form" action="" method="post" id="registration-form">
                    @csrf
                    <div class="ico">
                        <!-- Champ pour le nom -->
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Nom" name="lastname">
                        <!-- Champ pour le prenom -->
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Prénom" name="firstname">
                        <!-- Champ pour le numéro de téléphone -->
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" placeholder="Numéro de téléphone" name="phone">
                        <!-- Champ pour la ville -->
                        <i class="fa-solid fa-map-marker"></i>
                        <input type="text" placeholder="Ville" name="city">
                        <!-- Champ pour le code postal -->
                        <i class="fa-solid fa-map-marker"></i>
                        <input type="number" placeholder="Code postal (Optionel)" name="postalcode">
                        <!-- Champ pour la periode -->
                        <p class="time">Nombres d'heures de garde</p>
                        <select name="heur">
                            <option>Moins de 4 heure par semaine</option>
                            <option>De 5 à 8 heure par semaine</option>
                            <option>De 9 à 12 heure par semaine</option>
                            <option>De 13 à 20 heure par semaine</option>
                            <option>Plus de 21 heure par semaine</option>
                        </select>
                        <p class="time">Âge du plus jeune enfant ?</p>
                        <select name="age">
                            <option>Moin de 3 ans</option>
                            <option>De 3 et 5 ans inclus</option>
                            <option>Plus de 6 ans</option>
                        </select>
                        <!-- Champ pour l'email -->
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Adresse email" name="email">

                        <!-- Champ pour le mot de passe -->
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Mot de passe" name="password">
                        <!-- Champ de confirmation du mot de passe -->
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Confirmez le mot de passe" name="confirm_password">
                        <!-- Bouton d'inscription -->
                        <!--input class="login-form-button" type="submit" placeholder="S'inscrire" id="register-button"-->
                        <button type="submit" class="login-card-form-button login-form-button pa"><a
                                href="">Inscription</a></button>
                    </div>
                </form>

            </div>
        </div>
    </main>
</body>

</html>
