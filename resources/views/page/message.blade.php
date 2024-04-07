<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/messagerie.css') }}">
    <title>Messagerie</title>
</head>

<body>
    <div class="wrapper" id="wrapper">
        <div class="left_panel" id="left_panel">

            <div class="icones">
                <!--Photo de l'utilisateur-->
                <img src="img/user.png" class="img">
                <!--Nom de l'utilisateur-->
                <p><strong>user</strong></p>
                <!--Email de l'utilisateur-->
                <p class="style"><strong>Email</strong></p>
                <!--Numero de l'utilisateur-->
                <p class="style"><strong>Numero</strong> </p>

                <div class="champ">
                    <label id="label_Chat" for="radio_chat">Chat <i class="fas fa-comments-dollar chat"></i></label>
                    <label id="label_famille" for="radio_Famille">Famille <i class="fas fa-user"></i></label>
                    <label id="label_settings" for="radio_settings">Parametre  <i class="fas fa-gear"></i></label>
                </div>

            </div>
        </div>

        <div class="right_panel" id="right_panel">
            <div class="header" id="header">Messagerie</div>
            <div class="container" id="container">
                <div class="inner_left_panel" id="inner_left_panel">

                </div>

                <input type="radio"  id="radio_chat" name="myradio" style="display: none">
                <input type="radio"  id="radio_Famille" name="myradio" style="display: none">
                <input type="radio"  id="radio_settings" name="myradio" style="display: none">


                <div class="inner_right_panel" id="inner_right_panel">

                </div>
            </div>
        </div>

    </div>
    <script src="{{asset('/js/message.js')}}"></script>
</body>

</html>
