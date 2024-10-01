//Objeto literal 
let persona = { 
    nombre: "Jairo",
    edad: 75,
    correr: ()=>{console.log("estoy corriendo");
    }
}

console.log(persona.nombre);


//Destructuring Object -> Desestructurar un objeto
//Retiramos el valor de un atributo/metodo a una constante/variable
let {nombre,correr} = persona;
console.log(nombre);
correr()

let props = {
    nombreUsuario: "Jairo"
}

const {nombreUsuario} = props;
console.log(nombreUsuario);

//Destructuring array 
let arraycito = ["Jairo",75];
let [primerValor,segundoValor] = arraycito;
console.log(segundoValor);


const useForm = () => {
    return {name:"Jairo",register:() => {console.log("Register") }}
}

let {register} = useForm()
register()
