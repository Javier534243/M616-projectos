<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panell de projectes</title>
    <script src="https://kit.fontawesome.com/b51cd60f76.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(#fff, #f3f3f3);
        }
        .margin-0 {
            margin: 0;
        }
        .padding-bordes {
            padding: 20px;
        }

        .propiedadesPrioridad {
            padding: 8px 12px;
            border-radius: 10px;
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
            padding: 15px 10px;
        }

        .contendorPadre {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 20px;

        }

        .width-contenedoresAltos {
            width: 300px;
        }

        .width-contenedoresPrinciaples {
            width: 280px
        }

        .contenedor {
            border: 1px solid #aaaa;
            border-radius: 10px;
            padding: 20px;
            
        }

        .background-color-footer {
            background-color: #F2F8FE;
        }

        .background-color-white {
            background-color: #fff;
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
        .gap-10px {
            gap: 10px;
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

        .color-Azul-iconos {
            color: #3162ad;
        }

        .color-rojo-icono {
            color: #dc3e3e;
        }

        .color-verde {
            color: #77b277;
        }

        .fondo-verde {
            background-color: #c2e9c2;
        }

        .amarillo {
            color: #6c784c;
        }

        .fondo-amarillo {
            background-color: #e4e8c8;
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

        .numeros-anchura {
            font-weight: 900;
        }

        .cuadrados-iconos {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            padding: 10px;
        }

        .margin-10px-0 {
            margin: 10px 0;
        }

        .tamayo-icono-principales {
            width: 40px;
            height: 40px;
        }

        .tamayo-icono-normales {
            width: 20px;
            height: 20px;
        }

        .iconos-grandes {
            font-size: 1.4rem
        }

        .iconos-principales {
            font-size: 1.8rem
        }

        .border-left {
            border-left: 1px solid #aaaaaa4c;
        }

        .padding-left {
            padding-left: 20px;
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
        $iconosProjectos = ["fa-solid fa-tooth","fa-solid fa-cart-shopping","fa-regular fa-file-lines","fa-solid fa-mobile","fa-solid fa-bullhorn","fa-regular fa-image","fa-solid fa-gear","fa-solid fa-bag-shopping"];
    
        $horasTotales = 0;
        $prioridadAltaTotales = 0;
        $projectosTotales = 0;
        $tecnologiasTotales = 0
        ?>

        <?php for($i = 0; $i <= 7;$i++): ?>
            <?php $projectosTotales++ ?>
        <?php endfor; ?>

        <?php for($i = 0; $i <= 5;$i++): ?>
            <?php $tecnologiasTotales++ ?>
        <?php endfor; ?>

        <?php for($i = 0;$i <= 7;$i++): ?>
            <?php 
                 $horasTotales += $horesEstimades[$i];
                 ?>
        <?php endfor; ?>

        <?php for($i = 0;$i <= 7;$i++): ?>
            <?php if($prioridad[$i] >= 7): ?>
                <?php $prioridadAltaTotales++?>
            <?php endif; ?>
        <?php endfor; ?>
        
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
        <div class="contendorPadre separador">
            <div class="cuadradoIconoPropieades aliniear-haciaArriba background-colorPrimero width-contenedoresAltos">
                <div class="background-ColorIconoAzul cuadrados-iconos tamayo-icono-principales">
                    <i class="fa-regular fa-folder-closed iconos-principales"></i>
                </div>
                <div>
                    <div class="iconos-principales numeros-anchura"><?= $projectosTotales?></div>
                    <h3 class="margin-0">Projectes</h3>
                    <p class="colorletrafloja margin-10px-0">Projectes reigstrats al panell</p>
                </div>
            </div>
            <div class="cuadradoIconoPropieades aliniear-haciaArriba background-colorSegundo width-contenedoresAltos">
                <div class="background-ColorIconosRojo cuadrados-iconos tamayo-icono-principales">
                    <i class="fa-solid fa-triangle-exclamation iconos-principales"></i>
                </div>
                <div>
                    <div class="iconos-principales numeros-anchura color-rojo-icono">
                        <?php echo $prioridadAltaTotales ?>
                    </div>
                    <h3 class="margin-0">Prioridad alta</h3>
                    <p class="colorletrafloja margin-10px-0">Projectes reigstrats Prioridad alta</p>
                </div>
            </div>
            <div class="cuadradoIconoPropieades aliniear-haciaArriba background-colorTercero width-contenedoresAltos">
                <div class="background-colorVerde cuadrados-iconos tamayo-icono-principales">
                    <i class="fa-regular fa-clock iconos-principales"></i>
                </div>
                <div>
                    <div class="iconos-principales numeros-anchura"><?php echo $horasTotales ?> h</div>
                    <h3 class="margin-0">Hores estimades</h3>
                    <p class="colorletrafloja margin-10px-0">Suma total de horas del projecto</p>
                </div>
            </div>
            <div class="cuadradoIconoPropieades aliniear-haciaArriba background-colorCuarto width-contenedoresAltos">
                <div class="background-colorAzul cuadrados-iconos tamayo-icono-principales">
                    <i class="fa-solid fa-code iconos-principales"></i>
                </div>
                <div>
                    <div class="iconos-principales numeros-anchura"><?= $tecnologiasTotales ?></div>
                    <h3 class="margin-0">Tecnlogia</h3>
                    <p class="colorletrafloja margin-10px-0">Eina y tecnologias utilizadas</p>
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
            <?= '<div class="contenedor background-color-white width-contenedoresPrinciaples">
                    <div class="alinear gap-20px space-between">
                        <div>#'.($i +1).'</div>
                        <h3 class="margin-0">'.$nombreProjecto[$i].'</h3>
                        ' ?>
                            <?php if($prioridad[$i] >= 7): ?>
                                <div class="background-ColorIconosRojo propiedadesPrioridad">Alta</div>
                            <?php elseif($prioridad[$i] >= 4 && $prioridad[$i] <= 6): ?>
                                <div class="amarillo fondo-amarillo propiedadesPrioridad">Mediana</div>
                            <?php else: ?>
                                <div class="color-verde fondo-verde propiedadesPrioridad">Baja</div>
                            <?php endif; ?>
                        <?= '
                    </div>
                    <div class="separador alinear gap-20px">
                        <div class="cuadrados-iconos background-colorAzul tamayo-icono-normales">
                            <i class="'.$iconosProjectos[$i].'"></i>
                        </div>
                        <div>
                            <div>Tipo: '.$tipoProjecto[$i].'</div>
                            <div class="colorletrafloja">'.$nombreProjecto[$i].'</div>
                        </div>
                    </div>
                    <div class="contenidoAbajo">
                        <div class="alinear gap-10px">
                            <i class="fa-regular fa-clock"></i>
                            <div>'.$horesEstimades[$i].' h </div>
                        </div>
                        <div class="alinear gap-10px">' ?>
                            <?php if($prioridad[$i] >= 7): ?>
                                    <i class="fa-solid fa-signal color-rojo-icono"></i>
                                <?php elseif($prioridad[$i] >= 4 && $prioridad[$i] <= 6): ?>
                                    <i class="fa-solid fa-signal amarillo"></i>
                                <?php else: ?>
                                    <i class="fa-solid fa-signal color-verde"></i>
                            <?php endif; ?>
                           <?= '
                            <div> Prioridad: '.$prioridad[$i].'/10</div>
                        </div>
                    </div>
                </div>'?>
            <?php endfor; ?>
        </div>
    </main>
    <footer class="separador contendorPadre space-between">
        <div class="contenedor background-color-footer">
            <div class="alinear gap-20px separador">
                <div class="cuadrados-iconos background-ColorIconoAzulMedio tamayo-icono-normales">
                    <i class="fa-solid fa-signal"></i>
                </div>
                <div>
                    <h3 class="margin-0">Resumen automatico</h3>
                    <p class="margin-0 colorletrafloja">Estadisticas generales del projecto</p>
                </div>
            </div>
            <div class="contendorPadre space-between">
                <div class="alinear gap-10px">
                    <div>
                        <i class="fa-regular fa-folder-closed color-Azul-iconos iconos-grandes"></i>
                    </div>
                    <div>
                        <div class="numeros-anchura">
                            <?= $projectosTotales ?>
                        </div>
                        <p class="margin-0 colorletrafloja">Porjectes totals</p>
                    </div>
                </div>
                <div class="alinear border-left gap-10px padding-left">
                    <div>
                        <i class="fa-solid fa-triangle-exclamation color-rojo-icono iconos-grandes"></i>
                    </div>
                    <div>
                        <div class="numeros-anchura color-rojo-icono">
                             <?php echo $prioridadAltaTotales ?>
                        </div>
                        <p class="margin-0 colorletrafloja">Prioridad alta</p>
                    </div>
                </div>
                <div class="alinear border-left gap-10px padding-left">
                    <div>
                        <i class="fa-regular fa-clock color-Azul-iconos iconos-grandes"></i>
                    </div>
                    <div>
                        <div class="numeros-anchura">
                        <?php echo $horasTotales ?> h
                        </div>
                        <p class="margin-0 colorletrafloja">Horas totales</p>
                    </div>
                </div>
                <div class="alinear border-left gap-10px padding-left">
                    <div>
                        <i class="fa-solid fa-globe color-Azul-iconos iconos-grandes"></i>
                    </div>
                    <div >
                        <div class="numeros-anchura margin-0">
                            <?= $tecnologiasTotales ?>
                        </div>
                        <p class="margin-0 colorletrafloja">Projectos web</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="contenedor background-color-footer">
            <div class="alinear gap-20px separador">
                <div class="cuadrados-iconos background-colorAzul tamayo-icono-normales">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3 class="margin-0">Tecnologias</h3>
                    <p class="margin-0 colorletrafloja">Erramientas utilizadas en el projecto del curso</p>
                </div>
            </div>
            <div class="alinear gap-20px">
                <?php for($i = 0;$i <= 5;$i++): ?>
                    <div><?= $tecnologias[$i] ?></div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="contenedor background-color-footer">
            <h2>Mensaje final</h2>
            <?php if($horasTotales > 35): ?>
                <div class="background-ColorIconosRojo propiedadesPrioridad">Carga elevada</div>
            <?php elseif($horasTotales <= 35 && $horasTotales >= 20): ?>
                <div class="amarillo fondo-amarillo propiedadesPrioridad">Carga mediana</div>
            <?php else: ?>
                <div class="color-verde fondo-verde propiedadesPrioridad">Carga baja</div>
            <?php endif; ?>
        </div>
    </footer>

</body>
</html>