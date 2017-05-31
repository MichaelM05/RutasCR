<?php
include './ReusableHeader.php';
?>


<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Crear Ruta Personalizada</h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <form action="" method="POST" >
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Precio</label>
                        <input class="form-control" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Duración</label>
                        <input class="form-control" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Actividad</label>
                        <select class="form-control">
                            <option value="1">Turismo de Montaña</option>
                            <option value="2">Turismo Urbano</option>
                            <option value="3">Turismo Extremo</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Distancia</label>
                        <input class="form-control" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Punto de partida</label>
                        <input class="form-control" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <label></label>
                    <!--<input type="submit" value="Buscar" class="btn btn-danger btn-lg btn-block">-->
                    <a class="btn btn-danger btn-lg btn-block" href="./ShowAvailablesPlaces.php">Buscar</a>
                </div>
            </form>
        </div>
        <hr>

    </div>
</div>
<!-- /. PAGE WRAPPER  -->

<?php
include './ReusableFooter.php';
?>
