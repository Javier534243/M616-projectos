<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panell de projectes</title>
    <script src="https://kit.fontawesome.com/b51cd60f76.js" crossorigin="anonymous"></script>
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
    <nav>
        <div>
            <div>
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h1>Panell intern de projectes</h1>
                <p>Agència digital · Gestió de projectes d'estudí</p>
            </div>
        </div>
        <div>
            <div>
                <i class="fa-solid fa-house-chimney"></i>
                <p>Inici</p>
            </div>
            <div>
                <i class="fa-solid fa-list"></i>
                <p>Projectes</p>
            </div>
            <div>
                <i class="fa-solid fa-layer-group"></i>
                <p>Tecnologies</p>
            </div>
            <div>
                <i class="fa-solid fa-circle-info"></i>
                <p>Aobre</p>
            </div>
        </div>
    </nav>
    <main>
        <div>
            <div>
                <div>
                    <i class="fa-regular fa-folder-closed"></i>
                </div>
                <div>
                    <div></div>
                    <h3>Projectes</h3>
                    <p>Projectes reigstrats al panell</p>
                </div>
            </div>
            <div>
                <div>
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
                <div>
                    <div></div>
                    <h3>Prioridad alta</h3>
                    <p>Projectes reigstrats Prioridad alta</p>
                </div>
            </div>
            <div>
                <div>
                    <i class="fa-regular fa-clock"></i>
                </div>
                <div>
                    <div> h</div>
                    <h3>Hores estimades</h3>
                    <p>Suma total de horas del projecto</p>
                </div>
            </div>
            <div>
                <div>
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <div></div>
                    <h3>Tecnlogia</h3>
                    <p>Eina y tecnologias utilizadas</p>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2>Pojectos activos</h2>
                <p>Lista de projectos del curso. Cada targeta mostra la informacion principal y la seva prioridad.</p>
            </div>
            <div>
                <select name="ordenar" id="selectorOrdenar">
                    <option value="Ordenarr">Ordenar per prioritar</option>
                </select>
            </div>
        </div>

        <div class="contendorPadre">
        <?php for($i = 0; $i <= 7;$i++): ?>
            <?= '<div class="contenedor">
                    <div>
                        <div>#'.($i +1).'</div>
                        <div>'.$nombreProjecto[$i].'</div>
                    </div>
                    <div>
                        <div>
                            <i></i>
                        </div>
                        <div>
                            <div>Tipo: '.$tipoProjecto[$i].'</div>
                            <div>'.$nombreProjecto[$i].'</div>
                        </div>
                    </div>
                    <div class="contenidoAbajo">
                        <div>
                            <i class="fa-regular fa-clock"></i>
                            <div>'.$horesEstimades[$i].' h </div>
                        </div>
                        <div>
                            <i class="fa-solid fa-signal"></i>
                            <div> Prioridad: '.$prioridad[$i].'/10</div>
                        </div>
                    </div>
                </div>'?>
            <?php endfor; ?>
        </div>
    </main>
    <footer>
        <div>
            <div>
                <div>
                    <i class="fa-solid fa-signal"></i>
                </div>
                <div>
                    <h3>Resumen automatico</h3>
                    <p>Estadisticas generales del projecto</p>
                </div>
            </div>
            <div>
                <div>
                    <div>
                        <i class="fa-regular fa-folder-closed"></i>
                    </div>
                    <div>
                        <div>

                        </div>
                        <p>Porjectes totals</p>
                    </div>
                </div>
                <div>
                    <div>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                        <div>

                        </div>
                        <p>Prioridad alta</p>
                    </div>
                </div>
                <div>
                    <div>
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div>
                        <div>

                        </div>
                        <p>Horas totales</p>
                    </div>
                </div>
                <div>
                    <div>
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div>
                        <div>

                        </div>
                        <p>Projectos web</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>Tecnologias</h3>
                    <p>Erramientas utilizadas en el projecto del curso</p>
                </div>
            </div>
            <div>

            </div>
        </div>
    </footer>

</body>
</html>