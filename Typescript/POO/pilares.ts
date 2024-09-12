//4 Pilares POO 

/* 
    Herencia
    Polimorfismo

    Encapsulamiento -> Limitar el acceso a algo a traves de MODIFICADORES DE ACCESO
    Abstraccion -> Nos da herramientas para interactuar con lo que este limitado de una clase
*/

/* 
    Modificadores de acceso
    Public -> Todo el mundo puede acceder
    Private -> Solo ella misma va a tener acceso
    Protected -> Va a tener acceso la misma clase y sus hijos
*/

class Person{
    private name:string;
    private age:number;
    private dui: string;

    constructor(nameParam:string,ageParam:number,duiParam:string){
        this.name = nameParam;
        this.age = ageParam;
        this.dui = duiParam;
    }

    respirar(){
        console.log("Afff");
    }

    //Getters y Setters
    getName():string {
        return this.name;
    }

    
    setAge(ageParam:number){
        this.age = ageParam;
    }

}

let personita = new Person("Jairo Vega",75,"0105080-3");
//personita.name = "Hector";
console.log(personita);
console.log(personita.getName());
