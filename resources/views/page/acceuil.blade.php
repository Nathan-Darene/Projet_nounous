<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset ('fontawesome-free-6.5.1-web/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset ('https://cdnjs.cloudflare.com/ajax/libs/fontawesome-6.5.1-beta3/css/all.min.css')}}">
        <!--link rel="stylesheet" href="acceuil.css" /-->
        <link rel="stylesheet" href="{{ asset('css/acceuil.css') }}">
        <title>Baby</title>
    </head>

    <body>
        <div class="hero" id="Acceuil">
            <nav class="navbar">
                <img
                    src="{{ asset('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png') }}" class="logo" />
                <ul>
                    <li><a href="#Accueil" style="--i:1;" class="active">Accueil</a></li>
                    <li><a href="#A-propos" style="--i:2;"> A propos</a></li>
                    <li><a href="#contact" style="--i:3;">Contact</a></li>
                    <li><a href="#info" style="--i:4;">Information</a></li>
                    <li><a href="{{asset('choix')}}" style="--1:5;">Inscription</a></li>
                </ul>
                <div>
                    <a href="{{asset('choix')}}" style="--i:6;" class="login-btn" >Se connecter</a>
                    <a href="#" class="btn">Téléchargé l'App</a>
                </div>
            </nav>
            <div class="content acceuil">
                <h1 class="anim">Social<br />Home</h1>
                <h2 class="anim">
                    Votre Solution Intégrée pour une Garde <br> d'Enfants Simplifiée
                </h2>
                <p class="anim">
                    Bienvenue sur <strong class="span">Social Home</strong>,
                    votre
                    solution tout-en-un <br> pour simplifier la gestion de la garde
                    d'enfants. <br>
                    Proposez votre vos service en tanque
                    <strong class="span">Nounou</strong> <br>ou
                    <!--si vous etes un parents, vous-->
                    Trouvez des nounous fiables, planifiez facilement <br>les
                    horaires de
                    garde, et restez connectés avec les <br>soignants de vos
                    enfants, le tout
                    sur une seule <br>plateforme conviviale.
                </p>
                <a href="{{asset('/choix')}}" class="btn anim">Join Now</a>
            </div>
            <img src="{{ asset('img/nounou_black.jpg')}}" class="feature-img anim" >
        </div>


        <section class="info" id="info">
            <div class="separator"></div>
            <div class="list-info">
                <div class="box1">
                    <img src="{{ asset('img/noun_749552_cc-light-grey.webp')}}" class="">
                    <h3>1. Déposez votre annonce</h3>
                    <p class="d">Décrivez vos besoins, l'âge de vos enfants, vos disponibilités, ..</p>
                </div>
                <div class="box1">
                    <img src="{{ asset('img/noun_750008_cc-light-grey-2.webp')}}" class="d1">
                    <h3>2. Effectuez une recherche</h3>
                    <p class="d">Social Home est présent dans toute la Cote D'Ivoire et a l'etrangé !</p>
                </div>
                <div class="box1">
                    <img src="{{ asset('img/noun_750019_cc-light-grey.webp')}}" class="d1">
                    <h3>3. Trouvez votre nounou</h3>
                    <p class="d">Parmi plus de 15 000 profils, mis à jour régulièrement !</p>
                </div>
            </div>
            <div class="separator"></div>
            <center>
                <h2>Information</h2>
            </center>
            <div class="list-info">
                <div class="box">
                    <img src="{{ asset ('img/wrench.svg')}}" alt>
                    <h3>Fonctionnalités Mises en Avant :</h3>
                    <p class="pad">Explorez nos fonctionnalités avancées de gestion des
                        emplois
                        du temps, de communication sécurisée, de profilage
                        détaillé
                        des nounous et bien plus encore.
                    </p>
                </div>

                <!--******************-->

                <div class="box">
                    <img src="{{ asset ('img/user-group.svg')}}" alt>
                    <h3>Pour les Parents :</h3>
                    <p class="pad">Facilitez votre quotidien avec notre interface conviviale
                        conçue spécialement pour répondre à vos
                        besoins en tant que parents. Trouvez rapidement des
                        nounous
                        disponibles, planifiez des rendez-vous et
                        gérez les détails essentiels de la garde de vos enfants
                        en
                        un seul endroit.
                    </p>
                </div>

                <!--******************-->

                <div class="box">
                    <img src="{{ asset ('img/user-nurse.svg')}}" alt>
                    <h3>Pour les Nounous :</h3>
                    <p class="pad">Optimisez votre expérience de travail en accédant à des
                        opportunités de garde d'enfants adaptées à
                        votre emploi du temps et à vos compétences. Créez un
                        profil
                        complet pour mettre en valeur votre
                        expertise et établissez des liens de confiance avec les
                        familles que vous servez.
                    </p>
                </div>
            </div>
        </section>

        <section class="info">
            <div class="list-info">
                <div class="box">

                    <img src="{{ asset ('img/secure.svg')}}">
                    <h3>Engagement envers la Sécurité et la Fiabilité :</h3>
                    <p class="pad">Chez NannyCare, la sécurité de vos enfants est notre
                        priorité absolue. Toutes nos nounous sont
                        soigneusement vérifiées et évaluées pour vous garantir
                        une
                        tranquillité d'esprit totale.
                    </p>
                </div>

                <!--******************-->

                <div class="box">
                    <img src="{{ asset ('img/v.svg')}}">
                    <h3>Inscription Rapide et Gratuite :</h3>
                    <p class="pad">Rejoignez dès maintenant la communauté NannyCare en vous
                        inscrivant gratuitement. Commencez à profiter
                        de tous les avantages de notre plateforme dès
                        aujourd'hui!
                    </p>
                </div>

                <!--******************-->

                <div class="box">
                    <img src="{{ asset ('img/face.svg')}}">
                    <h3>Témoignages ou Évaluations :</h3>
                    <p class="pad">Découvrez ce que nos utilisateurs disent de Social Home.
                        Consultez nos témoignages pour voir comment
                        notre plateforme a simplifié la vie de nombreuses
                        familles
                        et nounous.
                    </p>
                </div>

                <!--******************-->

                <!--div class="7">
                    <h3>Appel à l'Action :</h3>
                    "Prêt à découvrir la facilité de gestion de la garde
                    d'enfants avec NannyCare? Inscrivez-vous dès
                    maintenant et commencez votre voyage vers une garde
                    d'enfants simplifiée et plus efficace!"
                </div-->
            </div>
        </section>


        <div class="apropos" id="A-propos">
            <div class="separator"></div>
            <center><h2>À Propos de Social Home</h2></center>
            <section class="section">
                <p>Social Home a été créé avec une vision simple : simplifier la
                    gestion de la garde d'enfants pour les parents et les
                    professionnels de la petite enfance. Notre équipe est
                    passionnée par la création d'une plateforme intuitive et
                    sécurisée qui facilite la recherche de services de garde
                    fiables et la gestion des horaires de garde.
                </p>
                <img src="{{ asset ('Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png')}}" alt="">
            </section>

            <center><div class="trait"></div></center>

            <section class="section HF">
                <img src="{{ asset ('img/N.png')}}" alt="">
                <p>Que vous soyez parent à la recherche d'une solution pratique
                    pour organiser la garde de vos enfants ou une nounou
                    désireuse de trouver des opportunités de travail flexibles
                    et enrichissantes, NannyCare est là pour vous simplifier la
                    vie.
                </p>
            </section>

            <center><div class="trait"></div></center>
            <section class="section FE" >

                <p>Nous comprenons à quel point il est important pour les
                    parents de pouvoir faire confiance à ceux qui prennent soin
                    de leurs enfants. C'est pourquoi nous avons mis en place un
                    processus rigoureux de vérification des antécédents pour
                    toutes les nounous inscrites sur notre plateforme. Vous
                    pouvez ainsi avoir l'assurance que vos enfants sont entre de
                    bonnes mains.
                </p>
                <img src="{{ asset ('img/OIP.jpeg')}}">
            </section>

            <center><div class="trait"></div></center>

            <section class="section P">
                <img src="{{ asset ('img/Capture d’écran du 2024-03-28 18-14-53.png')}}" alt="">
                <p>Nous croyons également en la puissance de la technologie
                    pour faciliter la communication et la coordination entre les
                    parents et les nounous. Avec Social Home, vous pouvez
                    planifier les horaires de garde, partager des informations
                    importantes sur vos enfants et rester en contact avec votre
                    nounou, le tout depuis une seule et même application
                    conviviale.
                </p>
            </section>
            <center><div class="trait"></div></center>
            <section class="section NN">
                <p>Chez Social Home, nous sommes déterminés à offrir une
                    expérience exceptionnelle à nos utilisateurs. Nous nous
                    engageons à continuer à améliorer notre plateforme pour
                    répondre à vos besoins changeants et à vous offrir une
                    solution de garde d'enfants qui vous simplifie la vie au
                    quotidien.
                </p>
                <img src="{{ asset ('img/NN.jpeg')}}" alt="">
            </section>
            <center><div class="trait"></div></center>
            <section class="section H">
                <img src="{{ asset ('img/H.jpeg')}}" alt="">
                <p>Rejoignez-nous dès aujourd'hui et découvrez comment
                    Social Home peut transformer la façon dont vous gérez la garde
                    de vos enfants.
                </p>
            </section>

            <div class="separator"></div>

            <div class="contact" id="contact">
                <h2>Contact</h2>
            </div>

            <div class="separator"></div>

        </div>

        <div class="haut">
            <a href="#Acceuil"><img src="{{asset ('img/up.svg')}}" alt=""></a>
        </div>

        <footer></footer>
    </body>

</html>
