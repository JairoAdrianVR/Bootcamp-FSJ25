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


//Agarrar otro elemento del HTML
const contenido = document.querySelector('#content')
console.log(contenido);

contenido.innerHTML = '<article><h1> Ingresado desde JS</h1> <h2>Y soy el hermano</h2></article> '
console.log(contenido);

/*
    Realiza una funcion que reciba un array NUMERICO y retorne un array completamente nuevo solamente con los numeros que sean multiplo de 3 y que la suma de todos sus numeros de menos de 100.
*/


//Agarramos el boton
const btnApretable = document.getElementById('btnMagia');

btnApretable.addEventListener('click', () => {
        alert('Avada kedavra');
        console.log("Despues del alert, COPPERFIELD");
        
 })