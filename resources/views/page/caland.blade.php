<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!" />
    <meta
      name="keywords"
      content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="{{ asset ('fontawesome-free-6.5.1-web/css/all.min.css')}}">
      <link rel="icon" type="image/png" href="Logo/8900808870_4aa536ff-86f5-4f1e-9429-0e0ace5a8068.png">
      <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/caland.css')}}" />
    <title>Calendrier</title>
  </head>
  <body>
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
            <div class="title">Ajouter l'heure pour votre Annonce en fonction de la date choisis</div>
            <i class="fa-solid fa-times close"></i>
          </div>
          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Event Name" class="event-name" />
            </div>
            <div class="add-event-input">
                <input type="text" placeholder="Heure de debut" class="event-time-from" />
                <i class="fa-solid fa-hourglass-start"></i>
            </div>
            <div class="add-event-input">
              <input type="text" placeholder="Heure de fin" class="event-time-to" />
              <i class="fa-solid fa-hourglass-end"></i>
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

    <script src="{{asset('/js/caland.js')}}"></script>
  </body>
</html>
