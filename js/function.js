// var notes = [5000,1000,500,100,50,20,10,5,2,1];
// var denominations = [];
// var result = denomination(28526);

// for( i = 0 ; i < result.length ; i++){
//     if(result[i] != 0){
//         document.write(result[i] + " : " + notes[i] + "<br>")
//     }
// }

// function denomination(amount){   // function defination
//     for(i of notes){
//         no_of_note = parseInt(amount / i);
//         amount_deducted = no_of_note * i;
//         amount -= amount_deducted;
//         denominations.push(no_of_note);
//     }
//     return denominations;
// }

// greeting("Hammad")
// greeting("Niha")
// greeting("Mehreen")
// greeting("Ali")
// greeting("Ahmed")

// function greeting(name){
//     document.write("Hello " +name + "<br>")
// }

// document.write(greeting("Hammad"));

// greeting("Hammad")
// greeting("Ubaid")
// greeting("Waseem")


// function greeting(name){
//     document.write(`<h1>${name}</h1>`)
// }

// var result = greeting1("Ahmed");
// document.write(result);
// document.write("<br><h1>Hello " + greeting1("Ahad") + "</h1>");
// function greeting1(name){
//     return name;
// }

// demo(2);  // function calling
// demo(3);  // function calling
// demo(4);  // function calling
// demo(7);  // function calling
// demo(8);  // function calling
// demo(1);  // function calling

// function demo(num){  // function definition
//     // var num = 5;
//     console.log(num * num);
// }  // void type , no parameter

// function greeting(name){
//     console.log("Hello "+name);
// }   // void type , parameterized

// greeting("Ali");
// greeting("Usman");

// add(2,6);
// add(2,5);
// function add(num1 , num2){
//     console.log(num1 + num2);
// }  // void type, multi parameter

// function add1(num1, num2){
//     return num1+num2;
// } 

// console.log(add1(4,6));

// var result1 = add1(2,2);
// console.log(result1+15);


// fat arrow function 
// => fat arrow

function add(){
    return 2+2;
}

var add = () => {return 2+2};  //anonymous

function add(num1,num2){
    return num1 + num2;
}

var add1 = (num1, num2) => {return num1 +  num2};   // ES6 