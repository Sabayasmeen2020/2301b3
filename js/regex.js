var string =  "Watching Birds";
var pattern = /Birds/gi;

var checklist = string.search(pattern);

console.log(checklist);


var input = "Do you have money?"
var pattern = /[^a-o]/g;

var towrite = input.match(pattern);
console.log(towrite);


var input = "Sabayasmeen787@gmail.com";
var pattern = /[a-zA-Z0-9._#]+@[a-z]+\.[a-z]{2,5}/i;
var result = pattern.test(input);

console.log(result);


var password = "Pakistan@123";
var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@._#!?])[a-zA-Z0-9@._#!?]{8,20}$/g;
var passwordResult = passwordPattern.test(password);

console.log("Password string match : "+ passwordResult);

// console.log(true + true);
