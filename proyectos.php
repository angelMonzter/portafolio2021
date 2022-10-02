<?php 
    include_once('includes/header.php');
?>

    <div class="grid-container index sin_padding sin_margin">

        <div class="grid-x proyectos">
            <div class="large-12 cell contenido_proyectos">
                <div class="grid-x">
                    <?php 
                        include_once('php/conexion.php');

                        $id = $_GET['id'];

                        try {
                            $sql = "SELECT * FROM proyectos WHERE proyectos_id = $id";
                            $resultado = $conn->query($sql);
                        } catch (Exception $e) {
                            $error = $e->getMessage();
                            echo $error;
                        }
                        while($proyecto = $resultado->fetch_assoc()){
                        $descripcion = $proyecto['descripcion'];
                        $puntos_descripcion = explode("/ ", $descripcion);
                    ?>
                    <div class="large-6 cell">
                        <div align="center">
                            <img src="img/<?php echo $proyecto['imagen']; ?>" alt="">
                        </div>
                    </div>
                    <div class="large-5 cell">
                        
                        <div>
                            <h2><?php echo $proyecto['nombre']; ?></h2>
                            <p><?php echo $proyecto['lenguajes']; ?></p>
                            <hr>
                        </div>
                        <div class="info_proyectos">
                            <div>
                                <ul>
                                    <?php 
                                        for ($i=0; $i < count($puntos_descripcion); $i++) { 
                                    ?>
                                    <li>
                                        <p><?php echo $puntos_descripcion[$i]; ?></p>
                                    </li>
                                    <?php 
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="grid-x iconos_proyectos">
                            <div class="large-6 cell">
                                <ul>
                                    <li><img src="img/laptop.svg" alt=""></li>
                                    <li><img src="img/smartphone.svg" alt=""></li>
                                </ul>
                            </div>
                            <div class="large-6 cell">
                                <div align="right">
                                    <a href=""><img src="img/click.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-1 cell"></div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="grid-x contacto">
            <div class="large-auto cell large-offset-5">
                <div class="contenido_contacto">
                    <div class="titulo_contacto">
                        <h2>CONTACTÁME</h2>
                    </div>
                    <div class="info_contacto">
                        <ul>
                            <li><a href="#">angelMonzter</a></li>
                            <li><a href="#">angel-efren-albarran-velazquez</a></li>
                            <li><a href="#">angelefrena</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- index seccion 1 -->
    </div>

<?php 
    include_once('includes/footer.php');
?>