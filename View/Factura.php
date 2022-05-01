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
    <div class="Container p-4">

        <h3 class="text-center">Factura</h3>
        
        <div class="row justify-content-between mb-4">
            <fieldset class="col-4
            ">
                <legend>Proveedor</legend>
    
                <label for="idlblNameProv">Nombre:</label>
                <input class="w-100" type="text" name="txtNameProv" id="idtxtNameProv">            
    
                <label for="idlblTelProv">Telefono:</label>
                <input class="w-100" type="text" name="txtTelProv" id="idtxtTelProv">
    
                <label for="idlblDirecProv">Direccion:</label>
                <input class="w-100" type="text" name="txtDireccion" id="idtxtDireccion">                
            </fieldset>
    
            <fieldset class="col-2">
                <legend>Factura</legend>
    
                <label for="idlblidFactura">ID Factura:</label>
                <input class="w-100" type="text" name="txtIdFactura" id="idtxtIdFactura">
    
                <label for="idlblFechaFactura">Fecha:</label>                
                <input class="w-100" type="text" name="txtFecha" id="idtxtFecha">   
            </fieldset>
    
            <fieldset class="col-4">
                <legend>Cliente</legend>
    
                <label for="idlblNameClie">Nombre:</label>
                <label id="idlblNameClie"></label>
    
                <label for="idlblTelClie">Telefono:</label>
                <label id="idlblTelClie"></label>
    
                <label for="idlblDirecClie">Direccion:</label>
                <label id="idlblDirecClie"></label>
            </fieldset>
        </div>            

        <h4>Productos</h4>
        <table id="tblProductos">                
            <header>
                <th>ID</th>
                <th>Cant.</th>
                <th>Nombre</th>
                <th>Precio</th>
            </header>
            <tr>

            </tr>
            <footer>
                <th colspan="3">Total</th>
                <th>$</th>
            </footer>
        </table>        
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>