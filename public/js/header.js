//Objetos html
const mnRegLog = document.getElementById("MnLogReg");
const mnUsuario = document.getElementById("MnUsuario");

/*Si el usuario inicio sesion se habilita el menu del usuario,
de lo contrario se habilita el menu de registro y login*/

if ( localStorage.getItem('estadoSesion') && localStorage.getItem('estadoSesion') != null ) {
    mnRegLog.style.display = "none";
    mnUsuario.style.display = "inherit";   
} 



