var days = document.getElementById("days");
var chairs = document.getElementById("chair");
var canopies = document.getElementById("canopies");
totalPrice = document.getElementById("totalPrice");

let price = (chairs.value * 1 + canopies.value * 10) * days.value;
console.log("price");

days.addEventListener("input", (e) => {
  if (days.value == 0 || undefined || null) {
    price = null;
    totalPrice.innerHTML = `Total Price is 0`;
    document.getElementById('totals').value=0;
  } else {
    price = (chairs.value * 1 + canopies.value * 10) * days.value;
    totalPrice.innerHTML = `Total Price is ${price}`;
    document.getElementById('totals').value=price;
  }
});

chairs.addEventListener("input", (e) => {
  if (days.value == 0 || undefined || null) {
    price = null;
    totalPrice.innerHTML = `Total Price is 0`;
    document.getElementById('totals').value=0;
  } else {
    price = (chairs.value * 1 + canopies.value * 10) * days.value;
    totalPrice.innerHTML = `Total Price is ${price}`;
    document.getElementById('totals').value=price;
  }
});
canopies.addEventListener("input", (e) => {
  if (days.value == 0 || undefined || null) {
    price = null;
    totalPrice.innerHTML = `Total Price is 0`;
    document.getElementById('totals').value=0;
  } else {
    price = (chairs.value * 1 + canopies.value * 10) * days.value;
    totalPrice.innerHTML = `Total Price is ${price}`;
    document.getElementById('totals').value=price;
  }
});
