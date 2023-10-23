//LLamar elementos del DOM y asignarlos a una variable
let size = document.querySelector(".size-label");
let sizez = document.querySelectorAll(
  `.containerplayera .playera div.venta div.sizes label`
);
let cantidad = document.querySelectorAll(".acciones input");
let botonComprar = document.querySelector("div#btn-comprar.buy-btn");
let precio = document.querySelector(".precio");
let imagen = document.querySelector("img#Sueterhombre");

//Datos a enviar al form
let form = document.querySelector("form#metodo-post");
let total = document.querySelector("input#precio");
let cant = document.querySelector("input#cantidad");
let talla = document.querySelector("input#talla");
let inpimagen = document.querySelector("input#imagen");
let inputIdProducto = document.querySelector("input#idProd");

//Variables
let cont = 1;
let valor = 500;
let precio_total = 500;
let id = 0;

//Modifica el precio segun la talla
function precios(box) {
  if (box.className === "XS") {
    let p = 500;
    valor = p * cont;
    precio.innerHTML = `$ ${p * cont}`;
    precio_total = p * cont;
    valor = 500;
    id = 1;
  } else if (box.className === "S") {
    let p = 600;
    valor = p * cont;
    precio.innerHTML = `$ ${p * cont}`;
    precio_total = p * cont;
    valor = 600;
    id = 2;
  } else if (box.className === "M") {
    let p = 700;
    valor = p * cont;
    precio.innerHTML = `$ ${p * cont}`;
    precio_total = p * cont;
    valor = 700;
    id = 3;
  } else if (box.className === "L") {
    let p = 800;
    valor = p * cont;
    precio.innerHTML = `$ ${p * cont}`;
    precio_total = p * cont;
    valor = 800;
    id = 4;
  }
}

for (const box of sizez) {
  box.addEventListener("click", (e) => {
    let tallaActual = e.target.classList.value;
    size.innerHTML = tallaActual;
    precios(box);
    console.log(size.textContent);
  });
}

//Modifica el total segun la cantidad de playeras
for (const cant of cantidad) {
  cant.addEventListener("click", (e) => {
    if (e.target.value === "-") {
      cantidad[1].value = cont -= 1;
      precio.innerHTML = `$ ${valor * cont}`;
      precio_total = valor * cont;
    } else if (e.target.value === "+") {
      cantidad[1].value = cont += 1;
      precio.innerHTML = `$ ${valor * cont}`;
      precio_total = valor * cont;
      console.log(precio_total);
    }
  });
}

//Envia el valor del total al form
botonComprar.addEventListener("click", () => {
  total.value = precio.textContent;
  cant.value = cantidad[1].value;
  talla.value = size.textContent;
  inpimagen.value = imagen.src;
  inputIdProducto.value = imagen.classList.value;
  $("#metodo-post").submit();
});
