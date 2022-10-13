<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $date = date('H');

    if ($date <= 11) {
        echo $date . "Bom Dia!";
    } elseif ($date <= 17) {
        echo "Boa Tarde!";
    } else {

        echo $date . "Boa Noite!";
    }

    ?></h1>
</body>

</html>