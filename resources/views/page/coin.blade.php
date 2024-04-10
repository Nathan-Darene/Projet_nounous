<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/coin.css') }}">
    <title>Coin</title>
    <!--
    So lets start -->
</head>

<body>
    <div class="container">
        <div class="padding">
            <div class="font">
                <div class="top">
                    <img src="{{('img/user.png')}}">
                </div>
                <div class="bottom">
                    <p>Username</p>
                    <p class="desi">Role</p>
                    <br>
                    <p class="num">Numero</p>
                    <p class="no">+000 0123456789</p>
                    <h1>Solde</h1>
                    <div id="imgBox" class="barcode">
                        <img src="" id="qrImage">
                    </div>
                    <button class="no" onclick="generateQR()">voir</button>

                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script src="{{ asset('js/music.js') }}"></script>

</html>
