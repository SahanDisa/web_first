//Numbers in JS

//Javascript has a common way to all numercial variables
var integer = 12;
var float = 32.54;

console.log(integer*float);

var a = (100/7)*2;
console.log(a);

//Rounding off to the numbers
var b = a.toFixed(0);
//here 0 is the nearest whole number to rounding off
console.log(b);

//toFixed and toPrecision is used returns a rounded off numbers
var c = 34.4562;
c.toPrecision(3);//34.5
c.toPrecision(5);//34.456

//number->string method 
var MyNum = 123;
var Mystr = MyNum.toString;

//Booleans in JS
