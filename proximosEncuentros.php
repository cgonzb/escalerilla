<?php require(dirname(__FILE__) . '/capaVistas/header.php'); ?>
<div class="row-fluid"><!-- row de contenido -->
    <div class="span3">

        <div class="well well-small"><!--Formulario login-->
            <?php
            if (!isset($_SESSION['usuario'])) {
                require(dirname(__FILE__) . "/capaVistas/loginForm.php");
            } else {
                require(dirname(__FILE__) . "/capaVistas/infoUsuario.php");
            }
            ?>
        </div><!--/.well well-small -->

        <div class="well well-small"><!--Convenios-->
            <?php require(dirname(__FILE__) . "/capaVistas/convenios.php"); ?>
        </div><!--/.well well-small -->

        <div class="well well-small"><!--Publicidad-->
            Espacio Publicitário
        </div><!--/.well well-small -->

    </div><!--/span-->

    <div class="span9"><!--Próximos Encuentros-->

        <div class="well well-small">

            <div class="row-fluid">
                <?php require(dirname(__FILE__) . "/capaVistas/proximosEncuentros.php"); ?>
            </div>

        </div>

        <div class="well well-small">

            <div class="row-fluid">
                <center><h3>Últimos Ganadores</h3></center><!--Últimos Ganadores-->
                <?php require(dirname(__FILE__) . "/capaVistas/ultimosGanadores.php"); ?>

            </div><!--/row-->

        </div><!--well well-small-->

    </div><!--/span-->




</div>

<div class="well well-small"><!--Últimas Noticias-->
    <?php require(dirname(__FILE__) . "/capaVistas/ultimasNoticias.php"); ?>
</div>

<hr>
<footer><!-- ARCHIVO footer-->
    <?php require(dirname(__FILE__) . "/capaVistas/footer.php"); ?>
</footer><!--/row-->
</div><!--/row-->
</div><!--/.fluid-container-->
</body>
</html>