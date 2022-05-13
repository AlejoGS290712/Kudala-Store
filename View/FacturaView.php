<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../CSS/FacturaStyle.css">
    <title>Factura</title>
</head>
<body>    
    <div class="container-fluid">
        <div class="factura container"> 
            <div class="row">
                <h1 class="titulo">Kudala</h1>
            </div>

            <div class="encabezado row">                
                <div class="col-3 facturatext">
                    <h2>Factura</h2>            
                </div>                
            </div>

            <div class="row justify-content-between mb-4">
                <fieldset class="col-4">
                    <legend>Proveedor</legend>
        
                    <label for="idlblNameProv">Nombre:</label>
                    <input class="w-100 border-0" type="text" name="txtNameProv" id="idtxtNameProv">            
        
                    <label for="idlblTelProv">Telefono:</label>
                    <input class="w-100 border-0" type="text" name="txtTelProv" id="idtxtTelProv">
        
                    <label for="idlblDirecProv">Direccion:</label>
                    <input class="w-100 border-0" type="text" name="txtDireccion" id="idtxtDireccion">                
                </fieldset>
        
                <fieldset class="col-3">
                    <legend>Info. Factura</legend>
        
                    <label for="idlblidFactura">ID Factura:</label>
                    <input class="w-100 border-0" type="text" name="txtIdFactura" id="idtxtIdFactura">
        
                    <label for="idlblFechaFactura">Fecha:</label>                
                    <input class="w-100 border-0" type="text" name="txtFecha" id="idtxtFecha">   
                </fieldset>                          
            </div>         
            
            <div class="row mb-4">
                <fieldset class="col-4">
                    <legend>Cliente</legend>
        
                    <label for="idlblNameProv">Nombre:</label>
                    <input class="w-100 border-0" type="text" name="txtNameProv" id="idtxtNameProv" >            
        
                    <label for="idlblTelProv">Telefono:</label>
                    <input class="w-100 border-0" type="text" name="txtTelProv" id="idtxtTelProv">
        
                    <label for="idlblDirecProv">Direccion:</label>
                <input class="w-100 border-0" type="text" name="txtDireccion" id="idtxtDireccion">                
                </fieldset>
            </div>
            
            <div class="row">
                <div class="col">
                    <h4 class="text-center">Productos</h4>
                    <table class="table table-striped">                
                    
                        <tr class="table-dark">
                            <th scope="col">ID</th>
                            <th scope="col">Cant.</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                        </tr>                        
                        


                        <th colspan="3">Total</th>
                        <th>$ </th>
                        
                    </table>
                </div>
            </div>  
        </div>
    </div>
</body>
</html>