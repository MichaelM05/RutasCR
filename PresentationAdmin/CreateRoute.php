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
            <form action="../Actions/SearchTouristPlaceActions.php" method="POST" >
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Precio</label>
                        <select name="cbPrice" class="form-control">
                            <option value="$0 - $5">$0 - $5</option>
                            <option value="$5 - $10">$5 - $10</option>
                            <option value="$10 - $20">$10 - $20</option>
                            <option value="$20 - $30">$20 - $30</option>
                            <option value="$30 o más">$30 o más</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Duración</label>
                        <select name="cbDuration" class="form-control">
                            <option value="1 - 2 Horas">1 - 2 Horas</option>
                            <option value="2 - 4 Horas">2 - 4 Horas</option>
                            <option value="4 - 6 Horas">4 - 6 Horas</option>
                            <option value="6 - 8 Horas">6 - 8 Horas</option>
                            <option value="8 o más Horas">8 o más Horas</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Actividad</label>
                        <select name="cbActivity" id="cbActivity"class="form-control">
                            <option value="Cultural">Cultural</option>
                            <option value="Montaña">Montaña</option>
                            <option value="Ecológico">Ecológico</option>
                            <option value="Recreativo">Recreativo</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Distancia</label>
                        <select name="cbDistance" class="form-control">
                            <option value="1 - 2 km">1 - 2 km</option>
                            <option value="2 - 4 km">2 - 4 km</option>
                            <option value="4 - 6 km">4 - 6 km</option>
                            <option value="6 - 8 km">6 - 8 km</option>
                            <option value="8 o más km">8 o más km</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="form-group">
                        <label>Punto de partida</label>
                        <select name="cbGoing" class="form-control">
                            <option value="Mi ubicación">Mi ubicación</option>
                            <option value="Alajuela">Alajuela</option>
                            <option value="Cartago">Cartago</option>
                            <option value="Guanacaste">Guanacaste</option>
                            <option value="Heredia">Heredia</option>
                            <option value="Limón">Limón</option>
                            <option value="San José">San José</option>
                            <option value="Puntarenas">Puntarenas</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" id="lat" name="lat">
                <input type="hidden" id="leng" name="leng">
                <input type="hidden" id="searchPre" name="searchPre">
                <div class="col-lg-5 col-md-5">
                    <label></label>
                    <input type="submit" value="Buscar" class="btn btn-danger btn-lg btn-block">
                </div>
            </form>
        </div>
        <hr>

    </div>
</div>
<!-- /. PAGE WRAPPER  -->
<!-- Modal
            ============================================= -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
        </div>

    </div>
</div>

<?php
include './ReusableFooter.php';

if (isset($_GET['success'])) {
    echo '
                <script>                
                    $(document).ready(function(){
                        modalSelect("Registro con éxito");
                        $("#myModal").modal("show");
                    });
                </script>';
} else if (isset($_GET['error'])) {
    echo '
                <script>     
                    $(document).ready(function(){
                        modalSelect("Error al Registrar, verifique su conexión");
                        $("#myModal").modal("show");
                    });
                </script>';
}
?>
<script>
    function modalSelect(modalMessage, modalTitle) {
        document.getElementsByClassName("modal-title")[0].textContent = modalTitle;
        document.getElementsByClassName("modal-body")[0].textContent = modalMessage;
    }
</script>

<script>
    $(document).ready(function obtener_localizacion() {
        navigator.geolocation.getCurrentPosition(coordenadas);
        function coordenadas(position) {
            var latitud = position.coords.latitude;
            var longitud = position.coords.longitude;
            $("#lat").val(latitud);
            $("#leng").val(longitud);
        }
    });
</script>