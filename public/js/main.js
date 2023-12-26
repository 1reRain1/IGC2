const openItemsBtn = document.getElementById("open__items-btn");

const navItems = document.getElementById("nav__items");

document.onclick = function (e) {
  if (e.target.id !== "nav__items" && e.target.id !== "open__items-btn") {
    openItemsBtn.classList.remove("active");
    navItems.classList.remove("active");
  }
};

console.log(openItemsBtn);
console.log(navItems);
openItemsBtn.onclick = function () {
  openItemsBtn.classList.toggle("active");
  navItems.classList.toggle("active");
};

const imageArray = Array.from(document.querySelectorAll("img[data-number]"));

// console.log(imageArray);

function updateDataNumber() {
  // Increment the data-number attribute and wrap around if necessary
  imageArray.forEach((image) => {
    let currentNumber = parseInt(image.dataset.number);
    currentNumber = currentNumber === imageArray.length ? 1 : currentNumber + 1;
    image.dataset.number = currentNumber;
  });
}

// Set up an interval to change images every 1 second
setInterval(updateDataNumber, 5000);
