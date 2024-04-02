<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/messagerie.css') }}">
    <title>Messagerie</title>
</head>

<body>
    <div class="wrapper" id="wrapper">
        <div class="left-panel" id="left-panel">

            <div class="icones">
                <!--Photo de l'utilisateur-->
                <img src="img/user.png" class="img">
                <!--Nom de l'utilisateur-->
                <p><strong>{{ $messageData['name'] }}</strong></p>
                <!--Email de l'utilisateur-->
                <p class="style"><strong> {{ $messageData['email'] }} </strong></p>
                <!--Numero de l'utilisateur-->
                <p class="style"><strong>{{ $messageData['numero'] }} </strong> </p>

                <div class="champ">
                    <label for="box"><i></i>Chat</label>
                    <label for=""><i></i>Famille</label>
                    <label for="">Parametre</label>
                </div>

            </div>
        </div>

        <div class="right-panel" id="right-panel">
            <div class="header" id="header">Messagerie</div>
            <div class="container" id="container">
                <div class="inner-left-panel" id="inner-left-panel">
                    <input type="checkbox" name="" id="box">
                </div>

                <div class="inner-right-panel" id="inner-right-panel"></div>
            </div>
        </div>

    </div>
</body>

</html>
