console.log("Holis estoy imprimiendo en la consola");

//  ---- Operadores Matematicos ----

let suma = 2+2;
let resta = 4-2;
let division = 135/5;
let multiplicacion = 1354*356;
let residuo = 10 % 2;

console.log(suma);

// Concatenacion -> UNIR DOS VALORES y CUALQUIERA DE LOS DOS ES UN string
let sumaFalsa = 2+"2";
console.log(sumaFalsa);

// ---- Operadores Logicos ----
// Ejecutamos comparaciones

//Igualdad == COMPARA SOLAMENTE EL VALOR DE LAS COSAS
let igualdad = 10 == "10";
console.log(igualdad);

//Igualdad Estricta === COMPARA EL VALOR DE LAS COSAS Y SU TIPO DE DATO

let igualdadEstricta = 10 === "10";
console.log(igualdadEstricta);

//Desigualdad != COMPARAMOS SI LOS VALORES SON DIFERENTES
let desigualdad = 10 != "10";
console.log(desigualdad);

//Desigualdad Estricta !== COMPARAMOS SI LOS VALORES Y EL TIPO DE DATO SON DIFERENTES
let desigualdadEstricta = 10 !== "10";
console.log(desigualdadEstricta);


//Para que el operador AND me de TRUE ambas comparaciones tienen que dar TRUE
let operadorAND = 10 == "10" && 10 === "10";
console.log(operadorAND);


let operadorOR = 10 == "10" || 10 === "10";
console.log(operadorOR);


// FUNCIONES
// Una funcion es una porcion de codigo que hace algo en concreto
// Ventaja -> SE VUELVE REUTILIZABLE

//Declaracion de funcion
//Expresada TIPO DE DECLARACION DE FUNCION
/*
function PALABRA RESERVADA NECESARIA PARA DECLARAR UNA FUNCION
nombreFuncion ESTO ES REEMPLAZADO POR EL NOMBRE DE LA FUNCION
() SIRVEN PARA RECIBIR DATOS
{} DELIMITADORES DEL CODIGO DE LA FUNCION
*/
function nombreFuncion(){

    console.log("Hola te saludo desde la funcion");
}

//Llamar o ejecutar una funcion
//nombre()
nombreFuncion();


//TIPOS DE FUNCION
//Tipo VOID -> Vacia

function tipoVoid(){
    console.log("Soy una funcion tipo VOID");
}

//tipoVoid();

//Tipo Return -> Devuelven VALOR
function tipoReturn () {  
    console.log("Hey me estoy ejecutando, soy la funcion con Return");
      
    return "Soy una funcion tipo Return";
}

//tipoReturn();
//console.log(tipoReturn());

let ejecucion1 = tipoVoid();
let ejecucion2 = tipoReturn();
console.log(ejecucion1);
console.log(ejecucion2);


//Funciones con parametros -> Funciones que trabajan con datos que vienen de fuera
//NotANumber NaN -> No es un numero lo que se intenta aplicar a un operador matematico
function sumar(num1,num2){
    return num1+num2;
}

let resultado = sumar(15,5);
console.log(resultado);


//Funcion flecha
//Declaracion
function funcionExpresada( ){ 

}

/*
CONSTANTE nombreFuncion asignamos parametros flecha llaves CODIGO A EJECUTAR
const       funcionFlecha  =        ()         =>   {      log()        }
*/
const funcionFlecha = (num1, num2) => {
    return num1-num2; 
}


//Callback -> RECIBE UNA FUNCION PARA PONERLA A FUNCIONAR
function funcionCallback(funcion){
    //Recibi una funcion por lo tanto la ejecuto
    funcion();
}

function funcionAuxiliar(){
    console.log("Estoy funcionando pero desde el callback");
}

funcionCallback(funcionAuxiliar);

//Callback con funcionFlecha ANONIMA
funcionCallback( () => { console.log("Te saludo desde la funcion flecha anonima jeje saludos");
});

funcionCallback(function () { console.log(
    "Holiwis desde la funcion anonima expresada");})



