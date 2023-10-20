function add(){    // function definition
    return 2+2;
}

var result = add();  // fucntion calling
console.log("number is "+result);
console.log("2+2 is "+result);


function greeting(name){
    return "Hello "+name;
}
var names = prompt("Enter your name");
document.write(  "<h1>"+ greeting(names)+"</h1>"   );


function add(num1, num2){
    return num1 + num2;
}

document.write(add(72, 12));


function demo(num, name){
    document.write(name + " " + num)
}

demo(2, 1);

function demo(num1){
    return num1 + 2;
}
document.write(demo(2))


var result = (num1, num2) => {return num1+num2};

document.write(result(2, 8))


var studentname = ['Ali', 'Usman', 'Ahmed'];  // single dimensional arrray

document.write(studentname[2]);


var students = [  // Two dimension array
    ['Ali','5'],['Usman','15'],['Ahmed','13']
]


var name = "Mubashir";

document.write(`Student name is : ${students[0][0]} <br> Student age is: ${students[0][1]}`)


document.write("Student name is "+ students[0][0] + "<br>" + "Student age is :" + students[0][1]);


for(i = 0 ; i < 3; i++){
    // document.write(studentname[i]);
}

for(i=0 ; i < 3 ; i++){
    for(j = 0; j < 2; j++){
        document.write(`Student : ${students[i][j]} <br>`);
    }
}

var amount = 62556;
var notes = [5000, 1000, 500, 100, 50, 20, 10, 5, 2, 1];
var result = [];

for(i = 0; i < notes.length; i++){


    no_of_note = parseInt(amount/notes[i]);
    amount -= no_of_note * notes[i];

    if(no_of_note > 0){
        result.push(no_of_note);
    }
    else{
        result.push(0);
    }

}

for(i = 0; i < result.length; i++){
    document.write(result[i]+": "+ notes[i]+"<br>");
}

