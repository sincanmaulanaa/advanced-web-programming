<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    @include("components.nav")
    <h1>Selamat datang <?= $nama ?>.</h1>
    <h2 style="text-align: center;">Waktu: <?= $waktu ?></h2>
</body>

</html>