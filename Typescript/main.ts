//Declaracion de variable en JS
let variable = "";

//Declaracion de variable + TIPO DE DATO en TS
let cadenaTexto:string = "Jairo";
let numero:number = 1;
let boleano:boolean = false;

//Decaracion de array
let arraycito: string[] = ["asd","asd","1231"];

let arrayNumerico:number[] = [11,12,45,16.5];

//NUNCA UTILIZAR ESTO
let arrayMALO:any[] = ["asd",12,false];

//Array numerico o string
let arrayNumString:(number|string)[] = ["",12,123,123,123,123,123,123];
let arrayNumOString: number[]|string[]=[123,456,456.123];

//Declaracion de Tuplas
//Es un array con indices limitados y con sus tipo de dato declarado previamente
let datosUsuario:[string,number];
datosUsuario = ["Jairo",75];

//Funciones en TS
function tipoVoid():void  {
    console.log("Chauchis");
}

function sumar():number  {
    return 2+2;
}

function sumarOConcatenar():number|string {
    return 3+5;
}

function saludar( nombre:string ):string{
    //Template String -> Plantillas literales -> Ingresar un dato de JS en un STRING
    // "Hola como estas?"+nombre;
    return `Hola como estas? ${nombre}`
}

console.log( saludar("Jairo"));
