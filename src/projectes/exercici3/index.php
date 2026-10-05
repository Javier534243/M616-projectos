<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuleta digital DAW2</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b51cd60f76.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        $conceptes = [
            [
                "icono" => "fa-brands fa-php",
                "asignatura" => "PHP",
                "titulos" => "Variables",
                "color" => "azul",
                "imagen" => "imagen0",
                "texto" => "Serveixen per guardar informació que després podem utilizar.",
            ],
            [
                "icono" => "fa-brands fa-php",
                "asignatura" => "PHP",
                "titulos" => "If / else",
                "color" => "azul",
                "imagen" => "imagen1",
                "texto" => "Permet executar un codi o un altre segons una condició.",
            ],
            [
                "icono" => "fa-brands fa-js",
                "asignatura" => "JavaScript",
                "titulos" => "Manipular el DOM",
                "color" => "amarillo",
                "imagen" => "imagen2",
                "texto" => "Permet modificar el contigut de la pàgina des de JavaScript."
            ],
            [
                "icono" => "fa-brands fa-js",
                "asignatura" => "JavaScript",
                "titulos" => "Array i forEach",
                "color" => "amarillo",
                "imagen" => "imagen3",
                "texto" => "Permet recórrer tots els elements d'un array."
            ],
            [
                "icono" => "fa-brands fa-react",
                "asignatura" => "React",
                "titulos" => "Components",
                "color" => "azulCeleste",
                "imagen" => "imagen4",
                "texto" => "Permeten dividr la interficie en peces reutilizables."
            ],
            [
                "icono" => "fa-regular fa-file",
                "asignatura" => "HTML/CSS",
                "titulos" => "Estructura HTML5",
                "color" => "verde",
                "imagen" => "imagen5",
                "texto" => "Utilizem etiquetes semàtiques per organizar el contigut."
            ],
            [
                "icono" => "fa-brands fa-docker",
                "asignatura" => "Docker",
                "titulos" => "Docker compose",
                "color" => "lila",
                "imagen" => "imagen6",
                "texto" => "Permet aixecar diverses serveis alhora (per exemple, una web i una base de dades)."
            ],
            [
                "icono" => "fa-solid fa-database",
                "asignatura" => "BBDD",
                "titulos" => "Consultes SQL bàsiques",
                "color" => "rojo",
                "imagen" => "imagen7",
                "texto" => "Permeten obtenir informació de la base de dades."
            ],
        ];
        // $asiganturas = ["PHP","JavaScript","React","HTML/CSS","Docker","BBDD","Projectes"];
        // $titulos = ["Variables","If / else","Manipular el DOM","Array i forEach","Components","Estructura HTML5","Docker compose","Consultes SQL bàsiques"];
        // $color = ["azul","amarillo","azulCeleste","verde","lila","rojo","rosa"];
        // $imagenes = ["imagen0","imagen1","imagen2","imagen3","imagen4","imagen5","imagen6","imagen7"];
        // $textos = ["Serveixen per guardar informació que després podem utilizar.","Permet executar un codi o un altre segons una condició.","Permet modificar el contigut de la pàgina des de JavaScript.","Permet recórrer tots els elements d'un array.","Permeten dividr la interficie en peces reutilizables.","Utilizem etiquetes semàtiques per organizar el contigut.","Permet aixecar diverses serveis alhora (per exemple, una web i una base de dades).","Permeten obtenir informació de la base de dades."];
        // $conceptosDestacados = ["Variables PHP","If / else","Manipular el DOM","Components en REACT","Consultar dades amb SQL"];
    ?>
    <nav>
        <div>
            <i class="fa-solid fa-code"></i>
            <div>Chuleta DAW2</div>
        </div>
        <div>
            <ul>
                <li>Inici</li>
                <li>Conceptes</li>
                <li>Resum</li>
            </ul>
        </div>
    </nav>
    <header>
        <div>
            <h1>Chuleta digital DAW2</h1>
            <p>Els conceptes clau del curs, en un sol lloc.</p>
        </div>
        <div>
            <div>
                <i></i>
                <p>Una pàgina per repassar de manera ràpida el que hem après a DAW2. Feta per estudiar, no per copiar.</p>
            </div>
        </div>
    </header>
    <main>
        <div>
            <ul>
                <li>Totes</li>
                <?php 
                    
                ?>
            </ul>
        </div>
        <div class="containerMain">

           <?php foreach($conceptes as $c): ?>

            <div class="cuadradoMain">
                <div class="<?= $c['color'] ?> tecnolgias-rectangulo-main">
                    <i class="<?= $c['icono'] ?>"></i>
                    <div>
                        <?= $c['asignatura'] ?>
                    </div>
                </div>
                <div class="contenidoMain">
                    <div>
                        <h2 class="titulo"><?= $c['titulos'] ?></h2>
                        <p><?= $c['texto']?></p>
                        <img class="imagenes" src="img/<?= $c['imagen']?>.png" alt="imagen de codigo">
                    </div>
                    <div class="contenidoAbajo">
                        <i class="<?= $c['icono'] ?>"></i>
                        <div><?= $c['asignatura'] ?></div>
                    </div>
                </div>
            </div>
                
                

            <?php endforeach; ?>

        </div>
    </main>
</body>
</html>