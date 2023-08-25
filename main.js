var chair = parseInt(document.getElementById("chair").value);
var canopy = parseInt(document.getElementById("canopy").value);
var pcanopy =  parseInt(document.getElementById("pcanopy").value);
var pchair =  parseInt(document.getElementById("pchair").value);
var calchair =  parseInt(document.getElementById("calchair").value);
var calcanopy =  parseInt(document.getElementById("calcanopy").value);
var days =  parseInt(document.getElementById("days").value);
var amount =  parseInt(document.getElementById("amount").value);
///let price = chair.value - pchair.value ;
//let price2 = (chair.value * 1 + canopy.value * 10) * days.value);
console.log("price");

document.getElementById('calchair').value = pchair - chair;
document.getElementById('calcanopy').value = pcanopy - canopy;
// chair.addEventListener("input", (e) => {
//   if (chair.value == 0 || undefined  || chair.value <= 0  || null) {
//     price = 0;
//     document.getElementById('calchair').value=price;
//   } else {
//     // price = (chairs.value * 1 + canopies.value * 10) * days.value;
//     // totalPrice.innerHTML = `Total Price is ${price}`
//      price = pchair.value - chair.value ;
//      price2 = (chair.value * 1 + canopy.value * 10) * days.value;
//     document.getElementById('calchair').value=price;
//     document.getElementById('amount').value=price2;
//   }
// });

// pchair.addEventListener("input", (e) => {
//     if (chair.value == 0 || undefined  || chair.value <= 0  || null) {
//       price = 0;
//       document.getElementById('calchair').value=price;
//     } else {
//         price = pchair.value - chair.value ;
//         price2 = (chair.value * 1 + canopy.value * 10) * days.value;
//        document.getElementById('calchair').value=price;
//        document.getElementById('amount').value=price2;
//     }
//   });
// canopies.addEventListener("input", (e) => {
//   if (days.value == 0 || undefined || null) {
//     price = null;
//     totalPrice.innerHTML = `Total Price is 0`;
//     document.getElementById('totals').value=0;
//   } else {
//     price = (chairs.value * 1 + canopies.value * 10) * days.value;
//     totalPrice.innerHTML = `Total Price is ${price}`;
//     document.getElementById('totals').value=price;
//   }
// });
