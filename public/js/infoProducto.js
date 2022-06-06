
document.getElementById("divTuOferta").style.visibility = "hidden";

var
btnPuja = document.getElementById("btnPuja"),
btnCancelarPuja = document.getElementById("btnCancelarPuja"),
btnConfirmarPuja = document.getElementById("btnConfirmarPuja"),
btnRealizarOferta = document.getElementById("btnRealizarOferta"),
txtOferta = document.getElementById("txtVrOferta"),
tblOfertas = document.getElementById("tblOfertas"),
divAlert = document.getElementById("divAlert"),
lblpoints = document.getElementById("lblpoints"),
tituloMsj = document.getElementById("titulomsj"),
divMsj = document.getElementById("msj");


btnPuja.addEventListener('click', ()=>{
    document.getElementById("divTuOferta").style.visibility = "visible";
});

btnCancelarPuja.addEventListener('click', ()=>{
    document.getElementById("divTuOferta").style.visibility = "hidden";
    txtOferta.value = "";
});

btnConfirmarPuja.addEventListener('click', ()=>{
    console.log(lblpoints.textContent);
    if (txtOferta.value == "") {        
        tituloMsj.innerHTML = "Error";
        divMsj.innerHTML = "<p>Porfavor ingrese un valor.</p>";      
        return;
    }

    if (lblpoints.textContent < txtOferta.value) {
        tituloMsj.innerHTML = "Error";
        divMsj.innerHTML = "<p>Cantidad de puntos insuficientes.</p>";     
        return;
    }

    tblOfertas.innerHTML = '<tr> <th scope="row">1</th> <td>Alejandro Giraldo</td> <td>' + txtOferta.value + '</td> </tr>';

    lblpoints.textContent = lblpoints.textContent - txtOferta.value;

    tituloMsj.innerHTML = "Felicidades!!";
    divMsj.innerHTML = "<p>Felicidades!!</p><p>Oferta realizada.</p>";

    txtOferta.value = "";
});





