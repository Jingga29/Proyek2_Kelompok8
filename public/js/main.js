// add hovered class to selected list item
const list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("click", activeLink));

// Menu Toggle
const toggle = document.querySelector(".toggle");
const navigation = document.querySelector(".navigation");
const main = document.querySelector(".main");

toggle.addEventListener("click", () => {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
});
