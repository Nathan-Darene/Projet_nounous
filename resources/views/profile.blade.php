<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- profile.blade.php -->

    <div>
        <h2>Profil</h2>
        <p><strong>Nom:</strong> {{ $profileData['name'] }}</p>
        <p><strong>Email:</strong> {{ $profileData['email'] }}</p>
        <p><strong>Biographie:</strong> {{ $profileData['bio'] }}</p>
    </div>

</body>

</html>
