//Objetos html
const
fsModificar  = document.getElementById('fsModificar'),
btnModificar = document.getElementById('idbtnModificar'),
allInfoUser  = document.getElementById('AllInfoUser'),
fsAcepCancel = document.getElementById('fsAceptarCancelar'),
btnAceptar   = document.getElementById('idbtnAceptar'),
btnCancelar  = document.getElementById('idbtnCancelar');

//Eventos
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
