<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            font-family: sans-serif;
        }
        .flex {
            display: flex;
        }

        .flex-directionColumn {
            flex-direction: column;
        }

        .aling-itemCenter {
            aling-item: center;
        }
        .justifyContentCenter {
            justify-content: center;
        }
        .justifyContentStart {
            text-aling: start;
        }
        .title {
            color: white;
            background-color: #222;
            padding: 1rem;
            
        }
        .escudos {
            max-width: 50px;
            object-fit: cover;
        }
        .width100per {
            width: 100%
        }

        .video {
            width: 80px;
            height: 50px;
            border-radius: 20px
        }
    </style>
</head>
<body class="flex aling-itemCenter justifyContentCenter">
    <?php
    
    $EquipoLocal = "FC Barcelona";
    $imagenEscudoLocal = "https://png.pngtree.com/png-vector/20240921/ourmid/pngtree-thats-the-football-logo-vector-png-image_13885485.png";
    $resultadoLocal = 3;

    $EquipoVisitante = "FC Madrid";
    $imagenEscudoVisitante = "https://images.seeklogo.com/logo-png/11/1/real-madrid-club-de-futbol-logo-png_seeklogo-116421.png";
    $resultadoVisitante = 4;

    ?>

    <table>
        <thead>
            <tr>
                <th class="">
                    <h2 class="title"><?php echo $EquipoLocal." contra ".$EquipoVisitante?></h2>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="flex">
                        <div class="flex flex-directionColumn">
                            <div class="flex">
                                <div class="flex">
                                    <div class="escudos">
                                        <img class="width100per" src="<?php echo $imagenEscudoLocal ?>" alt="Equipo local">
                                    </div>
                                    <div>
                                        <p><?php echo $EquipoLocal ?></p>
                                    </div>
                                </div>
                                <div>
                                    <p><?php echo $resultadoLocal?></p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex">
                                    <div class="escudos">
                                        <img class="width100per" src="<?php echo $imagenEscudoVisitante ?>" alt="Equipo local">
                                    </div>
                                    <div>
                                        <p><?php echo $EquipoVisitante ?></p>
                                    </div>
                                </div>
                                <div>
                                    <p><?php echo $resultadoVisitante ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-directionColumn aling-itemCenter">
                            <div>
                                <p>Fin</p>
                                <p>6/9</p>
                            </div>
                            <div>
                               <iframe class="video" src="https://www.youtube.com/embed/HqptBA55sUA" frameborder="0"></iframe> 
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>
                </td>
                <td>
                    <div>
                        
                    </div>
                    <div>

                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>