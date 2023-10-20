//Datatypes in javascript

// var a = true;
// console.log(typeof(a));

// rules for defining a variable 

// var, let, const

// var a = 6;
// var a = 9;
// console.log(a);

// let b = 7;
// b = 2;
// console.log(b);

// const c = 2;
// console.log(c);

// var a = 20;
// var b = 44;

// console.log("a is = " + a);
// console.log("b is = " + b);

// operator 
// assignment operator 

// var a = 5;
// a = 7;
// a += 5;   //a = a + 5;
// a -= 2;
// a *= 2;
// a /= 2;
// console.log(a);

// arithmatic operator
// +, -, *, /, %

// var a = 6;
// console.log(a % 2);

// relational operator

// >, <, >=, <=, ==, !=, ===, !==

// var a = 6;
// var b = 7;

// console.log(5 === '5');


// inc dec 
// ++, --
// pre, post
// var a = 6;
// console.log(++a + a++);
// console.log(a);

// var a =1;
// console.log(a++);

// logical operator
// && , ||, !

// var username = "12345";
// var password = "Admin123";

// console.log((username == "Admin" || username == "12345") && password == "Admin123");

// var a = 0;

// if(!a){
//     console.log("a is true");
// }
// else{
//     console.log("a is not true");
// }

// ternary operator 
// console.log( a != 0 ? "Condition is true" : "Condition is false");



// loops

// for, while, do-while 

// for( initialization; condition; inc/dec )

// for(i = 0; i < 10; i++){
//     document.write("Hello World<br>");
// }

// var i = 0;

// while(i < 10){
//     document.write("Hello Javascript<br>");
//     i++;
// }


// var a = 0;

// while(a){
//     document.write("hello");
//     a = parseInt(prompt("Enter a number"));
// }

// var i = 11;
// do{
//     document.write("Hello World");
//     i++;
// }while(i < 10);

// var i = 0;

// do{
//     document.write("do while loop");
//     i = parseInt(prompt("Enter a number(1-4)"));
// }while(i < 1 || i > 4);


// for in, for of, foreach

var fruits = ['Pomegranate', 'kiwi', 'Strawberry', 'Jack fruit', 'Dragon fruit']; // single dimension array 1D

// for(var i in fruits){
//     document.write(i + " : "+ fruits[i] + "<br>");
// }

// for(var i of fruits){
//     document.write(i+"<br>");
// }

var students = [['Ali', 12, 'Accp'],['Usman', 12, 'Accp']] // 2D 

// for( i = 0 ; i < students.length ; i++){
//     for( j = 0 ; j < 3 ; j++){
//         document.write(students[i][j] + "<br>");
//     }
// }

//    0 1 2 3 4
// * * * * *   // 0
// * * * * *   // 1
// * * * * *   // 2
// * * * * *     //  3
// * * * * *      //  4

// i = 1
// j = 0

for( i = 0 ; i < 5 ; i++){
    for( j = 0; j < 5 ; j++){
        if(i == j){
            document.write(" * ");
        }
        else{
            document.write("&nbsp;&nbsp;&nbsp;&nbsp;")
        }
    }
    document.write("<br>");
}

// document.write("*<br>");
// document.write(" *<br>");
// document.write("  *<br>");
// document.write("   *<br>");
// document.write("    *<br>");