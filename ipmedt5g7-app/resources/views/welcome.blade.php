<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    <title>Mijn lijstje</title>
</head>
@include('style')
<body>
    @include('boodschappenlijst')
    <br>
    <h2>Voeg een product toe</h2>
    @include('form')
</body>
</html>