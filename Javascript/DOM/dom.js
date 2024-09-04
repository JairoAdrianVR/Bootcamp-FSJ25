console.log("Estoy andando soy Dominic");


//Agarrar un elemento del DOM
let elementoDOM = document.getElementById('textoSaludo');
console.log(elementoDOM);

//Propiedades mas utilizadas
//Extrae todo el contenido HTML de la etiqueta
console.log(elementoDOM.innerHTML); 
//Extrae todo el contenido de TEXTO de la etiqueta
console.log(elementoDOM.innerText);

elementoDOM.innerText = "Te cambie desde el JS"
console.log(elementoDOM.innerHTML);
elementoDOM.innerHTML = "<span>Cambie otra vez</span>"
console.log(elementoDOM.innerHTML);
