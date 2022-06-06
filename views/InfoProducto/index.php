<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php require 'views/header.php';?>

    <div class="container-fluid">                

        <div class="row mt-2 p-2">           

            <div id="carouselExampleControls" class="carousel col-5 slide carousel-dark" data-bs-ride="carousel" >
                <div class="carousel-inner border rounded" style="height:36rem;">
                    <div class="carousel-item active">
                    <img src="https://cf.shopee.cl/file/14839647fc41911dac29d1816d66e5a4" class="d-block w-100" alt="1er">
                    </div>
                    <div class="carousel-item">
                    <img src="https://pics2.gundamboom.kr/web/upload/2021/0406/fG4Fe0KllMkpH7WuiPDkxWrdor3Z0INhHYFciV0q5CmW0Gt7r72869100_1617701511.jpg" class="d-block w-100" alt="2do">
                    </div>
                    <div class="carousel-item">
                    <img src="https://th.bing.com/th/id/R.45e6133299d59e8c3630542bf05af9dc?rik=%2fLF7QszH3hnVJQ&riu=http%3a%2f%2fimokenp-game.net%2fwp-content%2fuploads%2f2020%2f12%2fIMG_1083-1152x1536.jpg&ehk=PcYqAgJUxBPKQpxIt%2fDnwOX2M0VS39x3FPcornbZyVs%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="3er">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="col-4 rounded"> 

                <div class="col p-3 bg-warning text-dark bg-opacity-25 rounded">
                    <div class="col">

                        <h3 class="text-center">Figura de Kyojuro Rengoku</h3>
                        <br>
                        <p>
                            Subasta de Figura coleccionable de Kimetsu No Yaiba Bandai.
                        </p>
                        <p>
                            No cabe duda que Kyojuro Rengoku, el Pilar Fuego del Cuerpo de Exterminio de Demonios,
                            es uno de los personajes más aclamados de Kimetsu no Yaiba,
                            Animate a subastar por el!!.
                        </p>

                    </div>
                </div>

                <div id="divTuOferta" class="col text-center mt-2 p-3 text-dark bg-info bg-opacity-25 rounded">                

                    <h3>Realizar Oferta</h3>                 

                    <label for="">Tus Kudalapoints:</label>
                    <label id="lblpoints" class="w-75 border bg-body"><?php echo $this->usuario->getValorCred(); ?></label>

                    <form class="mt-3">
                        <label for="">Ingrese un valor a ofertar:</label>                        
                        <input id="txtVrOferta" class="w-75" type="text" onkeypress="return event.charCode>=48 && event.charCode<=57" maxlength="10" autocomplete="off" required/>
                    </form>                                           
                
                    <button id="btnRealizarOferta" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Realizar Oferta</button>
                    <button id="btnCancelarPuja" type="button" class="btn btn-danger">Cancelar Oferta</button> 
                    
                    <!--Mensaje de advertencia-->                    
                    <div id="divAlert" class="row alert alert-danger text-center" style="visibility:hidden;">
                        
                        <div class="text-center">
                            <img src="<?php echo constant('URL'); ?>public/Img/DangerIcon.png"  style="margin-right: 5%;" width="30" height="30">            
                        </div>
                        <div class="col">
                            <h5 id="lblMsj">Porfavor ingrese un valor valido</h5>
                        </div>                                
                        
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Confirmacion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Esta Seguro de realizar la oferta?</p>
                                <p>No podra recuperar sus punto una vez haya ofertado.</p> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>                                
                                <button id="btnConfirmarPuja" class="btn btn-primary" data-bs-target="#staticBackdrop2" data-bs-toggle="modal">Si, Estoy seguro</button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal 2 -->
                    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 id="titulomsj" class="modal-title" id="staticBackdropLabel2"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div id="msj" class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continuar</button>
                            </div>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>

            <div class="col p-3 text-center bg-success text-dark bg-opacity-25 rounded border">

                <h3 class="">Info Subasta</h3>
                <br>

                <h5>La subasta termina en:</h5> 
                <div class="row row-cols-4 border bg-body" style="height:3rem; color:red;">                    
                    <div class="col">
                        <div id="dias">00</div>
                        <p>DÍAS</p>
                    </div class="col">
                    <div>
                        <div id="horas">--</div>
                        <p>HORAS</p>
                    </div>
                    <div class="col">
                        <div id="minutos">--</div>
                        MIN
                    </div>
                    <div class="col">
                        <div id="segundos">--</div>
                        SEG
                    </div>                
                </div>               
                
                <label for="" class="mt-3"><h5>Top ofertas</h5></label>
                <div class="w-100 border bg-body" style="height:10rem ;">

                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Valor Oferta</th>
                        </tr>
                    </thead>
                    <tbody id="tblOfertas">
                                                
                    </tbody>
                    </table>

                </div>

                <button id="btnPuja" type="button" class="btn btn-success mt-3">Realizar Oferta</button>                

            </div>

        </div>
    </div>

    <?php require 'views/footer.php';?>  

    <script src="<?php echo constant('URL'); ?>public/js/infoProducto"></script>
    <script src="<?php echo constant('URL'); ?>public/js/cuentaRegresiva"></script>
</body>
</html>