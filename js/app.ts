var a = 5;
console.log(a);

class Person{
    name:string;
    age:number;

    constructor(name, age){
        this.name = name;
        this.age = age;
    }

    greeting(){
        console.log("Hello "+this.name);
        console.log(this.name + " your age is "+ this.age);
    }
}

var obj = new Person("Ali",12);
obj.greeting();

var obj1 = new Person("Ahmed", 10);
obj1.greeting();