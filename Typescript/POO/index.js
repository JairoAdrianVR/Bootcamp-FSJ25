// Programacion Orientada a Objetos
// Es una forma de programar intentando siempre describir o pensar las cosas como si fueran objetos
// Conceptos Principales de POO -> Clases y los Objetos
// Clases -> Molde para generar algo
// Objeto -> Lo que podemos crear en base a ese molde
//Declaracion de clase
var Auto = /** @class */ (function () {
    //Constructor -> Metodo reservado que nos sirve para instanciar objetos
    function Auto(numChasisParam, motorParam, colorParam, tipoCompustibleParam, transmisionParam, plazasParam, frenosParam, modeloParam, añoFabParam) {
        this.numChasis = numChasisParam;
        this.motor = motorParam;
        this.color = colorParam;
        this.tipoCombustible = tipoCompustibleParam;
        this.transmision = transmisionParam;
        this.plazas = plazasParam;
        this.frenos = frenosParam;
        this.modelo = modeloParam;
        this.anioFab = añoFabParam;
    }
    //Metodos -> Acciones 
    Auto.prototype.encender = function () {
        console.log("Brum re brum");
    };
    Auto.prototype.apagar = function () {
        console.log("Chauchis");
    };
    return Auto;
}());
//Instanciar objetos a traves de una clase -> Crear un objeto
var autito = new Auto(123456, "v8", "Azul", "Gasolina", "Manual", 2, "ABC", "Huayra", 2018);
console.log(autito);
//Asignamos una propiedad al objeto
//autito.modelo = "Huayra";
//console.log(autito);
//autito.motor = "v12"
//console.log(autito);
