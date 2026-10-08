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
                "titulos" => ["Variables","If / else"],
                "color" => "azul",
                "imagen" => "imagen0",
                "texto" => ["Serveixen per guardar informació que després podem utilizar.","Permet executar un codi o un altre segons una condició."],
                "numeroConceptos" => 2,
                "destacado" => [true,true],
            ],
            [
                "icono" => "fa-brands fa-js",
                "asignatura" => "JavaScript",
                "titulos" => ["Manipular el DOM","Array i forEach"],
                "color" => "amarillo",
                "imagen" => "imagen2",
                "texto" => ["Permet modificar el contigut de la pàgina des de JavaScript.","Permet recórrer tots els elements d'un array."],
                "numeroConceptos" => 2,
                "destacado" => [true,false],
            ],
            [
                "icono" => "fa-brands fa-react",
                "asignatura" => "React",
                "titulos" => ["Components"],
                "color" => "azulCeleste",
                "imagen" => "imagen4",
                "texto" => ["Permeten dividr la interficie en peces reutilizables."],
                "numeroConceptos" => 1,
                "destacado" => [true],
            ],
            [
                "icono" => "fa-regular fa-file",
                "asignatura" => "HTML/CSS",
                "titulos" => ["Estructura HTML5"],
                "color" => "verde",
                "imagen" => "imagen5",
                "texto" => ["Utilizem etiquetes semàtiques per organizar el contigut."],
                "numeroConceptos" => 1,
                "destacado" => [false],
            ],
            [
                "icono" => "fa-brands fa-docker",
                "asignatura" => "Docker",
                "titulos" => ["Docker compose"],
                "color" => "lila",
                "imagen" => "imagen6",
                "texto" => ["Permet aixecar diverses serveis alhora (per exemple, una web i una base de dades."],
                "numeroConceptos" => 1,
                "destacado" => [true],
            ],
            [
                "icono" => "fa-solid fa-database",
                "asignatura" => "BBDD",
                "titulos" => ["Consultes SQL bàsiques"],
                "color" => "rojo",
                "imagen" => "imagen7",
                "texto" => ["Permeten obtenir informació de la base de dades."],
                "numeroConceptos" => 1,
                "destacado" => [true],
            ],
            [
                "asignatura" => "Projectos",
                "color" => "rosaFlojo",
                "numeroConceptos" => 0,
            ],
        ];
    ?>
    <nav class="nav padding-laterales">
        <div class="contenidoAbajo">
            <i class="fa-solid fa-code"></i>
            <div>Chuleta DAW2</div>
        </div>
        <div>
            <ul class="contenidoAbajo quitarPunto">
                <li>Inici</li>
                <li>Conceptes</li>
                <li>Resum</li>
            </ul>
        </div>
    </nav>
    <header class="padding-laterales nav">
        <div>
            <h1>Chuleta digital DAW2</h1>
            <p>Els conceptes clau del curs, en un sol lloc.</p>
        </div>
        <div class="propiedadesTextoHeader">
            <div>
                <i></i>
                <p>Una pàgina per repassar de manera ràpida el que hem après a DAW2. Feta per estudiar, no per copiar.</p>
            </div>
        </div>
    </header>
    <main class="padding-laterales">
        <div class="flex-wrap">
            <ul class="contenidoAbajo flex-wrap quitarPunto">
                <li class="listas-propiedades color-negro">Totes</li>
                <?php foreach($conceptes as $a): ?>
                    
                    <li class="<?= $a['color'] ?> listas-propiedades">
                        <?= $a['asignatura'] ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="containerMain">

           <?php foreach($conceptes as $c): ?>
                <?php for($i = 0;$i < $c['numeroConceptos'];$i++): ?>
                    <div class="flex-propiedades">
                        <div class="<?= $c['color'] ?> tecnolgias-rectangulo-main">
                            <i class="<?= $c['icono'] ?>"></i>
                            <div>
                                <?= $c['asignatura'] ?>
                            </div>
                        </div>
                        <div class="contenidoMain">
                            <div>
                                <h2 class="titulo"><?= $c['titulos'][$i] ?></h2>
                                <p><?= $c['texto'][$i]?></p>
                                <img class="imagenes" src="img/<?= $c['imagen']?>.png" alt="imagen de codigo">
                            </div>
                            <div class="contenidoAbajo">
                                <i class="<?= $c['icono'] ?> <?= $c['color'] ?>"></i>
                                <div><?= $c['asignatura'] ?></div>
                            </div>
                        </div>
                    </div>
                
                <?php endfor; ?>

            <?php endforeach; ?>

        </div>
    </main>
    <footer class="containerMain">
        <div class="contenidoAbajo contenidoMain">
            <div>
                <h3>Resum de conceptes</h3>
                <ul>
                <?php foreach($conceptes as $c): ?>
                    <ul class="quitarPunto contenidoAbajo nav">
                        <li>
                            <div class="<?= $c['color'] ?>  listas-propiedades width-5px"></div>
                        </li>
                        <li>
                            <?= $c['asignatura'] ?>
                        </li>
                        <li>
                            <?= $c['numeroConceptos'] ?>
                        </li>
                    </ul>
                <?php endforeach; ?>
                </ul>
            </div>
            <div class="centar-centro">
                <p>Total de conceptos</p>
                <?php $totalConceptos = 0 ?>
                <?php foreach($conceptes as $c): ?>
                    <?php $totalConceptos += $c['numeroConceptos'] ?>
                <?php endforeach; ?>
                <div><?= $totalConceptos ?></div>
            </div>
        </div>
        <div class="contenidoMain">
            <h3>Asignaturas</h3>
            <ul class="contenidoAbajo quitarPunto flex-wrap">
                <?php foreach($conceptes as $a): ?>
                    <li class="<?= $a['color'] ?> listas-propiedades">
                        <?= $a['asignatura'] ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="contenidoMain">
            <h3>Conceptos destacados</h3>
            <ul>
                <?php foreach($conceptes as $c): ?>
                    <?php for($i = 0;$i < $c['numeroConceptos'];$i++): ?>
                        <?php if($c['destacado'][$i] == true): ?>
                            <li><?= $c['titulos'][$i] ?></li>
                        <?php endif; ?>
                    <?php endfor; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </footer>
</body>
</html>