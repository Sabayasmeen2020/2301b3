class Human{
    name:string;
    age:number;

    greeting() {
        console.log("Name : "+this.name+" Age : "+this.age);
    }

    eating(){
        console.log(this.name +  " is eating");
        
    }
}

var obj = new Human(); 
obj.name = "Ali";
obj.age = 34;
obj.greeting();
obj.eating();

var obj1 = new Human();
obj1.name = "Usman";
obj1.age = 12;
obj1.greeting();
obj1.eating();