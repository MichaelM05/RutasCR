<?php include_once './ReusableHeader.php'; ?>
<div id="wrapper">

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Agregar sitio turístico</h2>   
                </div>
            </div>              
            <!-- /. ROW  -->
            <hr />

            <div class="row center-block">

                <form action="" method="POST" >
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" id="txtName" name="txtName" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" id="txtDescription" name="txtDescription" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="number" id="txtPrice" name="txtPrice" class="form-control" />
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="form-group">
                            <label>Actividad</label>
                            <select id="activity" name="activity" class="form-control">
                                <option value="1">Turismo de Montaña</option>
                                <option value="2">Turismo Urbano</option>
                                <option value="3">Turismo Extremo</option>
                            </select>
                        </div>
                    </div>    
                    <div class="col-lg-5 col-md-5">
                        <label>Latitud y longitud</label>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2307.966529046761!2d-83.671996!3d9.9025573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0d42417bc6851%3A0xd2ae13fcaa9ce072!2sUniversidad+de+Costa+Rica!5e1!3m2!1sen!2smx!4v1496260698730" width="820" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                        <div class="col-lg-8 col-md-8">
                            <a class="btn btn-primary btn-lg btn-block" href="./AddImagesVideo.php">Agregar multimedios</a>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input type="submit" value="Agregar" class="btn btn-success btn-lg btn-block">
                        </div>
                    </div>                   
                </form>    

            </div>


            <!-- /. ROW  -->           
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>


<?php include_once './ReusableFooter.php'; ?>