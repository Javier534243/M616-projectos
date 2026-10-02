<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panell de projectes</title>
    <script src="https://kit.fontawesome.com/b51cd60f76.js" crossorigin="anonymous"></script>
    <style>
        .margin-0 {
            margin: 0;
        }
        .padding-bordes {
            padding: 20px;
        }
        .colorletrafloja {
            color: #666;
        }
        .cuadradoAzul {
            background-color: #48e;
            color: #fff;
            width: 30px;
            height: 30px;
            font-size: 1.5rem;
        }
        .cuadradoIconoPropieades {
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .contendorPadre {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 20px;

        }
        .contenedor {
            border: 2px solid #000a;
            border-radius: 20px;
            padding: 20px;
        }

        .alinear {
            display: flex;
            align-items: center
        }
        .aliniear-haciaArriba {
            display: flex;
            align-items: start;
            gap: 20px;
        }

        .space-between {
            justify-content: space-between;
        }

        .cuadrados-navegador {
            display: flex;
            align-items: center;
            padding: 10px;
            gap: 10px;
            border-radius: 10px;
        }

        .cuadrados-navegador:hover {
            color: #26f;
            background-color: #abf8;
        }

        .gap-20px {
            gap: 20px;
        }

        .contenidoAbajo {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .background-ColorIconoAzulMedio {
            background-color: #D4E8FE;
            color: #3162ad;
        }

        .background-colorPrimero {
            background-color: #EBF4FD;
        }
        .background-ColorIconoAzul {
            background-color: #D4E8FE;
            color: #48e;
        }
        .background-colorSegundo {
            background-color: #FDEEF1;
        }
        .background-ColorIconosRojo {
            background-color: #FDD4D7;
            color: #dc3e3e;
        }
        .background-colorTercero {
            background-color: #EBF9F1;
        }
        .background-colorVerde {
            background-color: #D3F6E2;
            color: #367636;
        }
        .background-colorCuarto {
            background-color: #F2EFFE;
        }
        .background-colorAzul {
            background-color: #E1D9FE;
            color: #1e1ec6;
        }

        .cuadrados-iconos {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            border-radius: 10px;
            padding: 10px;
        }

        .iconos-grandes {
            font-size: 1.4rem
        }

        .separador {
            padding: 20px 0;
        }
        .select {
            border: 1px solid #aaa5;
            border-radius: 10px;
            padding: 10px 40px 10px 20px;
            outline: none;
        }
    </style>
</head>
<body class="margin-0 padding-bordes">
    <?php
        $nombreProjecto = ["Landing per a clínica dental","Catàleg de productes artesans","Blog corporatiu escola","Auditoria responsive","Fitxa de servei amb CTA","Galeria de projectes","Botiga online bàsica","Optimització d'imatges"];
        $tipoProjecto = ["Web","Ecommerce","CMS","Qualitat","Web","CMS","Ecommerce","web"];
        $horesEstimades = [6,4,3,5,2,4,8,3];
        $prioridad = [7,5,2,8,4,3,9,6];
        $tecnologias = ["HTML","CSS","PHP","Docker","WordPress","Spopify"];
    
        ?>
    <nav class="alinear space-between">
        <div class="contenidoAbajo">
            <div class="cuadradoAzul cuadradoIconoPropieades">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h1 class="margin-0">Panell intern de projectes</h1>
                <p class="colorletrafloja margin-0">Agència digital · Gestió de projectes d'estudí</p>
            </div>
        </div>
        <div class="alinear">
            <div class="colorletrafloja cuadrados-navegador">
                <i class="fa-solid fa-house-chimney "></i>
                <p class="margin-0">Inici</p>
            </div>
            <div class=" colorletrafloja cuadrados-navegador">
                <i class="fa-solid fa-list "></i>
                <p class="margin-0">Projectes</p>
            </div>
            <div class="colorletrafloja cuadrados-navegador">
                <i class="fa-solid fa-layer-group"></i>
                <p class="margin-0">Tecnologies</p>
            </div>
            <div class="colorletrafloja cuadrados-navegador">
                <i class="fa-solid fa-circle-info"></i>
                <p class="margin-0">Sobre</p>
            </div>
        </div>
    </nav>
    <main>
        <div class="contendorPadre">
            <div class="cuadradoIconoPropieades aliniear-haciaArriba background-colorPrimero">
                <div class="background-ColorIconoAzul cuadrados-iconos">
                    <i class="fa-regular fa-folder-closed iconos-grandes"></i>
                </div>
                <div>
                    <div></div>
                    <h3>Projectes</h3>
                    <p class="colorletrafloja">Projectes reigstrats al panell</p>
                </div>
            </div>
            <div class="cuadradoIconoPropieades aliniear-haciaArriba background-colorSegundo">
                <div class="background-ColorIconosRojo cuadrados-iconos">
                    <i class="fa-solid fa-triangle-exclamation iconos-grandes"></i>
                </div>
                <div>
                    <div></div>
                    <h3>Prioridad alta</h3>
                    <p class="colorletrafloja">Projectes reigstrats Prioridad alta</p>
                </div>
            </div>
            <div class="cuadradoIconoPropieades aliniear-haciaArriba background-colorTercero">
                <div class="background-colorVerde cuadrados-iconos">
                    <i class="fa-regular fa-clock iconos-grandes"></i>
                </div>
                <div>
                    <div> h</div>
                    <h3>Hores estimades</h3>
                    <p class="colorletrafloja">Suma total de horas del projecto</p>
                </div>
            </div>
            <div class="cuadradoIconoPropieades aliniear-haciaArriba background-colorCuarto">
                <div class="background-colorAzul cuadrados-iconos">
                    <i class="fa-solid fa-code iconos-grandes"></i>
                </div>
                <div>
                    <div></div>
                    <h3>Tecnlogia</h3>
                    <p class="colorletrafloja">Eina y tecnologias utilizadas</p>
                </div>
            </div>
        </div>
        <div class="alinear space-between separador">
            <div>
                <h2 class="margin-0">Pojectos activos</h2>
                <p class="margin-0 colorletrafloja">Lista de projectos del curso. Cada targeta mostra la informacion principal y la seva prioridad.</p>
            </div>
            <div>
                <select name="ordenar" id="selectorOrdenar" class="colorletrafloja select">
                    <option class="colorletrafloja" value="Ordenarr">Ordenar per prioritar</option>
                </select>
            </div>
        </div>

        <div class="contendorPadre separador">
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
    <footer class="separador contendorPadre">
        <div>
            <div class="alinear gap-20px">
                <div class="cuadrados-iconos background-ColorIconoAzulMedio">
                    <i class="fa-solid fa-signal"></i>
                </div>
                <div>
                    <h3>Resumen automatico</h3>
                    <p>Estadisticas generales del projecto</p>
                </div>
            </div>
            <div class="contendorPadre">
                <div class="alinear gap-20px">
                    <div>
                        <i class="fa-regular fa-folder-closed"></i>
                    </div>
                    <div>
                        <div>

                        </div>
                        <p>Porjectes totals</p>
                    </div>
                </div>
                <div class="alinear gap-20px">
                    <div>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>
                    <div>
                        <div>

                        </div>
                        <p>Prioridad alta</p>
                    </div>
                </div>
                <div class="alinear gap-20px">
                    <div>
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div>
                        <div>
                            h
                        </div>
                        <p>Horas totales</p>
                    </div>
                </div>
                <div class="alinear gap-20px">
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
            <div class="alinear gap-20px">
                <div class="cuadrados-iconos background-colorAzul">
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