//Estructuras de CONTROL -> CONDICIONALES

//IF -> EVALUA CASOS VERDADEROS
//IF ELSE -> EVALUAR CASOS VERDADEROS Y FALSOS
/*
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

let cadena = " jairo@gmail.com "

if("jairo@gmail.com" === cadena.trim()){
    console.log("Es true");
}else{
    console.log("Es falso");
}

// Estructuras repetitivas o Bucles

//WHILE -> MIENTRAS
//WHILE (CONDICION DE CORTE) { CODIGO A EJECUTAR}
while(numero < 10 && numero > 2){
    console.log(numero);
    numero++;
    }
    
    // DO WHILE
    // HACER MIENTRAS
    let numero = 1;
    
    do{
        console.log(numero);
        numero++;
    }while(numero < 10 && numero >= 2)
    
    */

  //FOR 
  //for(INIALIZACION ; CONDICION DE CORTE ; INCREMENTO/DECREMENTO ){ CODIGO A EJECUTAR }
  for(let numero = 1; numero < 10 ; numero++){ //10
        console.log(numero);
  }

// FASE 1 = INICIALIZACION + CONDICION DE CORTE + EJECUTAR + INCREMENTO/DECREMENTO;
// FASE 2 = CONDICION DE CORTE + EJECUTAR + INCREMENTO/DECREMENTO;

// Estructura de dato COMPLEJA
// ESTRUCTURA DE DATO SIMPLE let variable1 = "Erick";  

//ARRAY
let cohorteFSJ25 = ["Erick","Isis","Guille","Bryan","Eduardo","Karla","Claudia","Jared",23.5,true];
//console.log(variableCompleja);
console.log(cohorteFSJ25);

//Metodos de arrays
//Agregar valores al final de un array
let variableCompleja = [];
variableCompleja.push("Jairo");
variableCompleja.push(26);
variableCompleja.push("Guille");
console.log(variableCompleja);

//Eliminar el valor al final de un array
let datoEliminado = variableCompleja.pop()
console.log(variableCompleja);
console.log(datoEliminado);

//Agregar un valor al principio de un array
variableCompleja.unshift("Jorge");
console.log(variableCompleja);
 
//Eliminar el valor del principio de un array
let datoEliminadoPrincipio= variableCompleja.shift();
console.log(variableCompleja);
console.log(datoEliminadoPrincipio);

//PROPIEDAD DE ARRAY
//Averiguar el largo de un array
console.log("--- LARGO DEL ARRAY ---");
let largor =  variableCompleja.length;
console.log(largor);

