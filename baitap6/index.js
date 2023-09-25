//Câu 1
function sayHello(name) {
  return "Xin chào " + name;
}

// Sử dụng hàm
var ten = "Người dùng";
var xinchao = sayHello(ten);
console.log(xinchao);

//Câu 2
var numbers = [1, 2, 3, 4, 5];

for (var i = 0; i < numbers.length; i++) {
  console.log(numbers[i]);
}

//Câu 3 4
var user = {
  name: "Tên Người Dùng",
  age: 30,
};

console.log(user.name);
console.log(user.age);
