var list = document.querySelectorAll("li");
for (var i = 0; i < list.length; i++) {
  console.log(list[i]);
}

var special = document.querySelector("a.special");
special.addEventListener("mouseover", function () {
  alert((this.textContent = "Book a tour"));
});

var header = document.querySelector("#there");
header.classList.toggle("new");
