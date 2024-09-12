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
var Person = /** @class */ (function () {
    function Person(nameParam, ageParam, duiParam) {
        this.name = nameParam;
        this.age = ageParam;
        this.dui = duiParam;
    }
    Person.prototype.respirar = function () {
        console.log("Afff");
    };
    //Getters y Setters
    Person.prototype.mostrameElNombrePa = function () {
        return this.name;
    };
    Person.prototype.setAge = function (ageParam) {
        this.age = ageParam;
    };
    return Person;
}());
var personita = new Person("Jairo Vega", 75, "0105080-3");
//personita.name = "Hector";
console.log(personita);
console.log(personita.mostrameElNombrePa());
