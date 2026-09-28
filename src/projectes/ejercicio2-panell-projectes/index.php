<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panell de projectes</title>
    <style>
        .contendorPadre {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;

        }
        .contenedor {
            border: 2px solid #000a;
            border-radius: 20px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
        $nombreProjecto = ["Landing per a clínica dental","Catàleg de productes artesans","Blog corporatiu escola","Auditoria responsive","Fitxa de servei amb CTA","Galeria de projectes","Botiga online bàsica","Optimització d'imatges"];
        $tipoProjecto = ["Web","Ecommerce","CMS","Qualitat","Web","CMS","Ecommerce","web"];
        $horesEstimades = [6,4,3,5,2,4,8,3];
        $prioridad = [7,5,2,8,4,3,9,6];
        $tecnologias = ["HTML","CSS","PHP","Docker","WordPress","Spopify"];
    
        ?>

    <div class="contendorPadre">
    <?php for($i = 0; $i <= 7;$i++): ?>
        <?= '<div class="contenedor"><div>'.$nombreProjecto[$i].'</div><div>'.$tipoProjecto[$i].'</div><div>'.$horesEstimades[$i].'</div><div>'.$prioridad[$i].'</div></div>'?>
    <?php endfor; ?>
    </div>

       
    
</body>
</html>