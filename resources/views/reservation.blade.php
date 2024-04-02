<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Home</title>
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

    <div class="container">
        <div class="left">
          <div class="calendar">
            <div class="month">
              <i class="fas fa-angle-left prev"></i>
              <div class="date">MAI 2025</div>
              <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
              <div>Dimmanche</div>
              <div>Lundi</div>
              <div>Mardi</div>
              <div>Mercredi</div>
              <div>Jeudi</div>
              <div>Vendredi</div>
              <div>Samedi</div>
            </div>
            <div class="days"></div>
            <div class="goto-today">
              <div class="goto">
                <input type="text" placeholder="mm/yyyy" class="date-input" />
                <button class="goto-btn"><i class="fa-solid fa-magnifying-glass"></i>Recherche</button>
              </div>
              <button class="today-btn">Date Actuelle</button>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="today-date">
            <div class="event-day">wed</div>
            <div class="event-date">25 MAI 2025</div>
          </div>
          <div class="events"></div>
          <div class="add-event-wrapper">
            <div class="add-event-header">
              <div class="title">Ajouter votre date de Disponibilité</div>
              <i class="fas fa-times close"></i>
            </div>
            <div class="add-event-body">
              <div class="add-event-input">
                <input type="text" placeholder="Event Name" class="event-name" />
              </div>
              <div class="add-event-input">
                <input
                  type="text"
                  placeholder="Event Time From"
                  class="event-time-from" />
              </div>
              <div class="add-event-input">
                <input
                  type="text"
                  placeholder="Event Time To"
                  class="event-time-to" />
              </div>
            </div>
            <div class="add-event-footer">
              <button class="add-event-btn">Ajouter L'événement</button>
            </div>
          </div>
        </div>
        <button class="add-event">
          <i class="fas fa-plus"></i>
        </button>
      </div>
</body>
</html>
