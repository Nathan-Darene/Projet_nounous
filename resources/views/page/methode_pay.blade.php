<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1-web/css/all.min.css')}}">
    <link rel="stylesheet" href="page.css">
    <title>Confirmation</title>
</head>
<body>
<!--Font Awesome CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
    <div class="title">
        <h4>Select a <span style="color: #6064b6">Payment</span> method</h4>
    </div>

    <form action="#">
        <input type="radio" name="payment" id="visa">
        <input type="radio" name="payment" id="mastercard">
        <input type="radio" name="payment" id="paypal">
        <input type="radio" name="payment" id="AMEX">

        <div class="category">
            <label for="visa" class="visaMethod" onclick="redirectToVisaPayment()">
                <div class="imgName">
                    <div class="imgContainer visa">
                        <img src="https://i.ibb.co/vjQCN4y/Visa-Card.png" alt="">
                    </div>
                    <span class="name">VISA</span>
                </div>
                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
            </label>

            <!-- Ajout de l'attribut onclick pour rediriger vers la page de paiement Visa -->
            <label for="mastercard" class="mastercardMethod" onclick="redirectToMastercartePayment()">
                <div class="imgName">
                    <div class="imgContainer mastercard">
                        <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="">
                    </div>
                    <span class="name">Mastercard</span>
                </div>
                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
            </label>

            <label for="paypal" class="paypalMethod" onclick="redirectTopaypalPayment()">
                <div class="imgName">
                    <div class="imgContainer paypal">
                        <img src="https://i.ibb.co/KVF3mr1/paypal.png" alt="">
                    </div>
                    <span class="name">Paypal</span>
                </div>
                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
            </label>

            <label for="AMEX" class="amexMethod" onclick="redirectToamexPayment()">
                <div class="imgName">
                    <div class="imgContainer AMEX">
                        <img src="../exemple/img/Orange.jpeg" alt="" style="width: 14vh;">
                    </div>
                    <span class="name">Orange Money</span>
                </div>
                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
            </label>
        </div>
    </form>
</div>

<!-- Script pour rediriger vers la page de paiement Visa -->
<script>
    function redirectToVisaPayment() {
        window.location.href = "{{route('payement')}}";
    }
    function redirectToMastercartePayment() {
        window.location.href = "lien_vers_page_payment_mastercard.html";
    }
    function redirectTopaypalPayment() {
        window.location.href = "lien_vers_page_payment_paypal.html";
    }
    function redirectToamexPayment() {
        window.location.href = "lien_vers_page_payment_amex.html";
    }
</script>

</body>
</html>
