//Object is a collection of related information
//Object consists of properties and methods

//write in key-value pairs

//define a object
// 1. Using a object literal
// 2. Uisng a new keyword
// 3. Uisng object constructor

//object literal
var student = {
    name : "Sahan",
    class : "FC",
    index_no : 43,
    grade : "A+"
};

//new keyword

var car = new Object();
car.name = "BMW";
car.max_speed = 280;
car.fuel = 20.8;

function car(name,max_speed,fuel){
    this.name = name;
    this.max_speed = max_speed;
    this.fuel = fuel;
}

//Access the properties of an object
//1.using the dot operator
//2.using bracket notation

car.name = "Vega";
car['name'] = "Porche";