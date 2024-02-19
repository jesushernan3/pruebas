var boton = document.getElementById("boton");
var blur = document.getElementById("blur");
// var modal = document.getElementById("page-modal");
// var body = document.getElementById("cuerpo");
// window.addEventListener("click", clickAfuera);

// boton.onclick = function () {
//   modal.style.display = "flex";
// };
boton.onclick = function () {
  blur.classList.toggle("active");
};
// function clickAfuera(e) {
// console.log(e);
//   if (e.target.classList == "container") {
//     console.log("click en cualquier parte de la ventana");
//   }
// }
