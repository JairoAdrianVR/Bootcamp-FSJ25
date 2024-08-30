//Estructuras de CONTROL -> CONDICIONALES

//IF -> EVALUA CASOS VERDADEROS
//IF ELSE -> EVALUAR CASOS VERDADEROS Y FALSOS

let condicion = 10 === "10";

if(condicion){
    console.log("ESTE CODIGO SE EJECUTA EN CASO TRUE");
} else{
    console.log("ESTE CODIGO SE EJECUTA SI ES FALSE");
}

/*  OPERADORES DE COMPARACION NUMERICOS
    MAYOR QUE  >
    MENOR QUE <
    MENOR O IGUAL <=
    MAYOR O IGUAL >=
*/

if( 10 <= 10){
    console.log("Afirmativo");
}else{
    console.log("Negativo");
}


// Operador Ternario -> REEMPLAZO DE SINTAXIS PARA EL IF ELSE
// CONDICION ? CODIGO TRUE : CODIGO FALSE

10 < 10 ? console.log("Afirmativo") : console.log("Negativo");

//IF ELSEIF 
let variableAux = 15 ;
//Preguntamos si es mayor
if(variableAux>10){
    console.log("Afirmativo");
    //Realizamos una repregunta
}else if(variableAux>5){
    //Ejecutar otro codigo de true
    console.log("Si es mayor");
}else{
    console.log("No cumplio las espectativas");
}


if( variableAux>10 || variableAux>5){
    console.log("Esta es la respuesta true");
}else {
    console.log("Esta es la respuesta false");   
}