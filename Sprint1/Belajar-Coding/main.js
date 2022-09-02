// document.write("hello world")
// console.log("Hello World")

// var a = 45456475 
// var b = 45684576

// console.log(a+b)

//   let nilai = 98
//   if(nilai > 90){
//       console.log("A Sempurna")
//   } else if (nilai > 70){
//       console.log("B Lulus")
//   } else if (nilai > 60) {
//       console.log("C Tidak Lulus")
// }

// let a = true
// let b = false

// console.log(!a)

// for(let i = 1; i <= 10; i++){
//     if(i % 3 !=0){
//     console.log(i)}
// }

// for(let number =1; number <=20; number++){
//     if(number %3 ==0 && number %2 !=0){
//         console.log(number+ " - I Love Coding")
//     } else if (number %2 ==0){
//         console.log(number+ " - Berkualitas")
//     } else {
//         console.log(number+ " - Santai")
//     }
// }


// LOGIC 1


// // Soal 1
// for(let y=1; y<10; y++){
//     for(let x=1; x<10; x++){
//         if(x==y){
//             document.write(" + ")
//         } else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// }   document.write(' <br> ')

// // Soal 2
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x + y == 10) {
//             document.write(" + ")
//         }
//         else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// }   document.write(' <br> ')

// // Soal 3
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x + y ==10 || x==y) {
//             document.write(" + ")
//         }
//         else{
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// }   document.write(' <br> ')

// // Soal 4
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (y == 5 || x == 5 || x + y == 10 || x==y) {
//             document.write(" + ")
//         } else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// }   document.write(' <br> ')

// // Soal 5
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x <= y ) {
//             document.write(" + ")
//         }
//         else{
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// }   document.write(' <br> ')

// // Soal 6
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x+y >9) {
//             document.write(" + ")
//         }
//         else{
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// }   document.write(' <br> ')

// // Soal 7
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x <= y && x+y >=10 || x >= y && x+y <=10) {
//             document.write(" + ")
//         } else{
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// }   document.write(' <br> ')

// // Soal 8
// for(let y=1; y < 10; y++){
//     for (let x = 1; x < 10; x++){
//         if (x >= y && x+y >9 || x+y <11 && x <= y){
//             document.write(" + ")
//         } else {
//             document.write(" ~ ")
//         }
//     }
//     document.write("<br>")
// }   document.write(' <br> ')

// // LOGIC 2

// // Soal 1
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x == y) {
//             document.write((x + y - 1))
//         } else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')

// // Soal 2
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x + y == 10) {
//             document.write((x + x - 2))
//         } else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')

// // Soal 3
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x == y) {
//             document.write(x + y - 1)
//         } else if (x + y == 10) {
//             document.write(x + x - 2)
//         } else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')

// // Soal 4
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x == y || x == 5) {
//             document.write(' ', y + y - 1)
//         } else if (x + y == 10 || y == 5) {
//             document.write(' ', x + x - 2)
//         } else {
//             document.write(' ~ ')
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')

// // Soal 5
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x <= y) {
//             document.write(' ' + (x + x - 1))
//         }
//         else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')

// // Soal 6
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x + y > 9) {
//             document.write(' ', -y - y + 18)
//         } else {
//             document.write(' ~ ')
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')

// // Soal 7
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x == y) {
//             document.write(x + y - 1)
//         } else if (x + y == 10) {
//             document.write(x + x - 2)

//         } else if (x < y && x + y > 10) {
//             document.write(" B ")
//         } else if (x >= y && x + y <= 10) {
//             document.write(" A ")
//         }
//         else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')

// // Soal 8
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (x == y) {
//             document.write(x + y - 1)
//         } else if (x + y == 10) {
//             document.write(x + x - 2)

//         } else if (x > y && x + y > 9) {
//             document.write(" B ")
//         } else if (x + y < 10 && x < y) {
//             document.write(" A ")
//         }
//         else {
//             document.write(" ~ ")
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')


// LOGIC 3

// // Soal 1
// var x1 = 1, x2 = 1, y, i;
// var x = 10
// document.write('Soal 1')
// document.write('<br>')
// for (i = 1; i < x; i++) {
//     document.write(' ', x1)
//     y = x1 + x2
//     x1 = x2
//     x2 = y
// }
// document.write('<br>')

// // Soal 2
// var x1 = 1, x2 = 1, x3 = 1, y, i;
// var x = 10
// document.write('Soal 2 ')
// document.write('<br>')
// for (i = 1; i < x; i++){
//     document.write(' ',x1)
//     y=x1+x2+x3
//     x1=x2
//     x2=x3
//     x3=y
// }
// document.write('<br>')
// document.write('<br>')

// //Soal 3
// for (let y = 1; y < 10; y++) {
//     for (let x = 1; x < 10; x++) {
//         if (y<3 ) {
//             document.write(' 1 ')
//         } else {
//             document.write(' ~ ')
//         }
//     }

//     document.write(' <br> ')
// } document.write(' <br> ')