<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

div{
    padding:2rem;
    background:black;
    color:yellow;
}
</style>

</head>
<body>
    <?php
        $equipoLocal = "Valencia";
        $EquipoVisitante = "FBC"

    ?>

    <div><?= $equipoLocal. " VS ". $EquipoVisitante ?></div>
</body>
</html>