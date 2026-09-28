<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panell de projectes</title>
    <style>

    </style>
</head>
<body>
    <?php
        $nombreProjecto = ["Landing per a clínica dental","Catàleg de productes artesans","Blog corporatiu escola","Auditoria responsive","Fitxa de servei amb CTA","Galeria de projectes","Botiga online bàsica","Optimització d'imatges"];
        $tipoProjecto = ["Web","Ecommerce","CMS","Qualitat","Web","CMS","Ecommerce"];
        $horesEstimades = [6,4,3,5,2,4,8,3];
        $prioridad = [7,5,2,8,4,3,9,6];
        $tecnologias = ["HTML","CSS","PHP","Docker","WordPress","Spopify"];

    for($contador = 0; $contador <= 7;$contador++) {
        echo '<div>';
        for($i = 0; $i <= 7;$i++) {
            echo `<div>.$nombreProjecto[$i].</div><div>.$tipoProjecto[$i].</div><div>.$horesEstimades[$i].</div> <div>.$prioridad[$i].</div>`;
        }
        echo '</div>';
    }
    

       
    ?>
</body>
</html>