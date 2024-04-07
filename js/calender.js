let persian = document.getElementById("persian")
let miladi = document.getElementById("miladi")
let miladi__input = document.getElementById("miladi__input")
let persian__input = document.getElementById("persian__input")

let text__calnder = document.getElementById("text__calnder");

persian.onclick = function(){

persian__input.style.display = "block";
miladi__input.style.display = "none";

text__calnder.innerHTML = "persian calender"

}

miladi.onclick =function(){

miladi__input.style.display = "flex";
persian__input.style.display = "none";


text__calnder.innerHTML = "Gregorian calendar"
}
