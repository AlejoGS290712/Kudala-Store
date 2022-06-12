//*****Objetos html*****
const
fsModificar  = document.getElementById('fsModificar'),
btnModificar = document.getElementById('idbtnModificar'),
allInfoUser  = document.getElementById('AllInfoUser'),
fsAcepCancel = document.getElementById('fsAceptarCancelar'),
btnAceptar   = document.getElementById('idbtnAceptar'),
btnCancelar  = document.getElementById('idbtnCancelar');

//DropDownList
var
ddlPaises         = document.getElementById('idPais'),
ddlDepartamentos  = document.getElementById('idDepartamento')
ddlCiudades       = document.getElementById('idCiudad');


//*****Eventos*****

//Al dar click en el boton Modificar, este habilitara el formulario
btnModificar.addEventListener('click',()=>{    
    allInfoUser.disabled = false; 
    fsModificar.style.display = "none";
    fsAcepCancel.style.display = "inherit";
});

//Al dar click en el boton Cancelar, este deshabilitara el formulario
btnCancelar.addEventListener('click',()=>{
    fsAcepCancel.style.display = "none";
    fsModificar.style.display = "inherit";        
    allInfoUser.disabled = true;
});


//DropDownList 
cargarSelectPais();

//Este evento carga el select de departamento dependiendo del pais
ddlPaises.addEventListener('change',()=>{
    cargarSelectDepartamento();
});

//Este evento carga el select de ciudad dependiendo del departamento
ddlDepartamentos.addEventListener('change',()=>{
    cargarSelectCiudad();
});


//***** Funciones *****

//Esta funcion permite buscar los pais
function cargarSelectPais(){

    httpRequest("InfoUsuario/buscarPaises", function(){
                
        rpta = quitarhtml(this.responseText);
        
        llenarSelect(ddlPaises,rpta);

    });  
}


//Esta funcion permite buscar los departamentos dependiendo del pais
function cargarSelectDepartamento(){
        
    pais = ddlPaises.value; 

    if(pais == ""){

        //ddlDepartamentos.value = "";
        limpiarSelect(ddlDepartamentos);
        limpiarSelect(ddlCiudades);
        return;
    }

    httpRequest("InfoUsuario/buscarDepartamentosPorPais/" + pais, function(){
                
        rpta = quitarhtml(this.responseText);
        
        llenarSelect(ddlDepartamentos,rpta);

    });  
}

//Esta funcion permite buscar las ciudades dependiendo del departamento
function cargarSelectCiudad(){
    
    departamento = ddlDepartamentos.value; 

    if(departamento == ""){

        limpiarSelect(ddlCiudades);
        return;
    }

    httpRequest("InfoUsuario/buscarCiudadesPorDepartamento/" + departamento, function(){
                
        rpta = quitarhtml(this.responseText);
        
        llenarSelect(ddlCiudades,rpta);

    });    
}
