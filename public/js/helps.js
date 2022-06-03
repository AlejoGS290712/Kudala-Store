//***Este archivo esta creado para crear funciones que ayuden en otros archivos js***

//Esta funcion permite comunicarse con los controladores y funciones 

function httpRequest(urlCtr, callback){
    const http = new XMLHttpRequest();
    http.open("GET", "http://127.0.0.1/Kudala-Store/" + urlCtr);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}

//Esta funcion agrega opciones a un select(DropDownList)
//resive como parametros el Select y las opciones (de tipo: value1=text1,value2=text2,value3=text3,...) que se va a ingresar
function llenarSelect(select,opcs){
    
    for (let i = select.options.length; i >= 0; i--) {
        select.remove(i);
    }

    listaOpc = opcs.split(':');

    if (listaOpc[0] == "Error") {
        console.log(listaOpc[1]);
        return;
    }

    listaOpc.forEach(opc => {
        
        const option = document.createElement('option');

        infOpc = opc.split('=');

        option.value = infOpc[0];
        option.text  = infOpc[1];

        select.appendChild(option);

    });
   
}

//Esta funcion quita el html de una cadena de texto
function quitarhtml(textohtml){
    var lbl = document.createElement("label");
    lbl.innerHTML = textohtml;
    rpta = lbl.innerText.trim();
    return rpta;
}