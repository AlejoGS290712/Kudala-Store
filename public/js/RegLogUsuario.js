//Objetos html
const lblMsj = document.getElementById('lblMsj');
const divAlert = document.getElementById('divAlert');

//Eventos
//Si existe un mensaje de error se mustra la caja de alerta 
if (!(lblMsj.textContent.length == 0)) {
    divAlert.style.display = "inherit";
}