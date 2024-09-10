//Declaracion de variable en JS
var variable = "";
//Declaracion de variable + TIPO DE DATO en TS
var cadenaTexto = "Jairo";
var numero = 1;
var boleano = false;
//Decaracion de array
var arraycito = ["asd", "asd", "1231"];
var arrayNumerico = [11, 12, 45, 16.5];
//NUNCA UTILIZAR ESTO
var arrayMALO = ["asd", 12, false];
//Array numerico o string
var arrayNumString = ["", 12, 123, 123, 123, 123, 123, 123];
var arrayNumOString = [123, 456, 456.123];
//Declaracion de Tuplas
//Es un array con indices limitados y con sus tipo de dato declarado previamente
var datosUsuario;
datosUsuario = ["Jairo", 75];
//Funciones en TS
function tipoVoid() {
    console.log("Chauchis");
}
function sumar() {
    return 2 + 2;
}
function sumarOConcatenar() {
    return 3 + 5;
}
function saludar(nombre) {
    //Template String -> Plantillas literales -> Ingresar un dato de JS en un STRING
    // "Hola como estas?"+nombre;
    return "Hola como estas? ".concat(nombre);
}
console.log(saludar("Jairo"));
