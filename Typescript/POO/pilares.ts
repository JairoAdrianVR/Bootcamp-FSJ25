//4 Pilares POO 

/* 
    Herencia -> Capacidad de una subclase de obtener todo de su clase padre
    Polimorfismo -> Cuando el mismo metodo cambia de comportamiento entre la clase hija y su padre

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

    respirar():void{
        console.log("Afff");
    }

    //Getters y Setters
    getName():string {
        return this.name;
    }
    
    getAge(){
        return this.age;
    }
    
    getDui(){
        return this.dui;
    }
    
    setAge(ageParam:number){
        this.age = ageParam;
    }
    
}

let personita = new Person("Jairo Vega",75,"0105080-3");
//personita.name = "Hector";
console.log(personita);
console.log(personita.getName());

class Developer extends Person{
    private exp:number;
    private techSkills:string[];
    private softSkills:string[];
    private gitUser:string;
    private area:string;
    private projects:string[];

    constructor(nameParam:string,ageParam:number,duiParam:string,expParam:number,techSkillsParam:string[],softSkillsParam:string[],gitUserParam:string,areaParam:string,projectsParam:string[]){
        super(nameParam,ageParam,duiParam);
        this.exp = expParam;
        this.techSkills = techSkillsParam;
        this.softSkills = softSkillsParam;
        this.gitUser = gitUserParam;
        this.area = areaParam;
        this.projects = projectsParam;
    }

    getArea():string{
        return this.area;
    }

    respirar(): void {
        console.log("Sniff sniff");
    }
}

let developercito = new Developer("Will",19,"1234567-8",3,["Javascript","HTML","CSS","BOOTSTRAP","TYPESCRIPT"],["Comunicacion Efectiva","Proactivo","Liderazgo","Autocritica"],"willGitUser","Backend Developer",["APIS"]);
developercito.getArea();


personita.respirar();
developercito.respirar();