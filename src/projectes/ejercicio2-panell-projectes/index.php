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

        .contenidoAbajo {
            display: flex;
            gap: 30px;
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
    
    <h2>Pojectos activos</h2>
    <p>Lista de projectos del curso. Cada targeta mostra la informacion principal y la seva prioridad.</p>

    <div class="contendorPadre">
    <?php for($i = 0; $i <= 7;$i++): ?>
        <?= '<div class="contenedor"><div>'.$nombreProjecto[$i].'</div><div>Tipo: '.$tipoProjecto[$i].'</div><div class="contenidoAbajo"><div>'.$horesEstimades[$i].' h </div><div> Prioridad: '.$prioridad[$i].'/10</div></div></div>'?>
    <?php endfor; ?>
    </div>

       
    
</body>
</html>