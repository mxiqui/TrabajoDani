const opcion1=document.getElementById("opcion1")
const opcion2=document.getElementById("opcion2")
const opcion3=document.getElementById("opcion3")
const opcion4=document.getElementById("opcion4")
const opcion5=document.getElementById("opcion5")
const cestaGrafica= document.getElementById("containerProductosCesta")
var cesta=[];
var productosTotales;
fetch("http://localhost:3001/obtenerDatos").then(response => {
    if (!response.ok) {
      throw new Error(`Error al obtener datos. Código de estado: ${response.status}`);
    }
    return response.json();
  })
  .then(data => {
    console.log('Datos obtenidos:', data);
    productosTotales=data;
    const main = document.querySelector('main');
        const opciones = document.querySelectorAll('.menu li');
        let currentIndex = 0;

        opciones.forEach((opcion, index) => {
            opcion.addEventListener('click', () => {
                currentIndex = index;
                actualizarTransformacion();
            });
        });

        document.addEventListener('keydown', (event) => {
            if (event.key === 'ArrowLeft') {
                currentIndex = Math.max(0, currentIndex - 1);
            } else if (event.key === 'ArrowRight') {
                currentIndex = Math.min(opciones.length - 1, currentIndex + 1);
            }

            actualizarTransformacion();
        });

function actualizarTransformacion() {
    main.style.transform = `translateX(-${currentIndex * 20}%)`;
}

const productSection = document.getElementById('container1');
        const productName = document.getElementById('productName');
        const productImage = document.getElementById('productImage');
        const productDescripcion = document.getElementById('productDescripcion');
        const productPrice = document.getElementById('productPrice');
        const productColors = document.getElementById('productColors');
        const containerColores = document.getElementById('containerColores');


        // Objeto con productos
        let produtoIphone = {
            id: productosTotales[0].id,
            nombre: productosTotales[0].Nombre,
            imagen: productosTotales[0].imagen,
            descripcion:productosTotales[0].Descripcion,
            precio: productosTotales[0].precio,
            stock:productosTotales[0].stock
        };

        let produtoPrueba2 = {
            id: productosTotales[1].id,
            nombre: productosTotales[1].Nombre,
            imagen: productosTotales[1].imagen,
            descripcion:productosTotales[1].Descripcion,
            precio: productosTotales[1].precio,
            stock:productosTotales[1].stock
        };

        let produtoPrueba3 = {
            id: productosTotales[2].id,
            nombre: productosTotales[2].Nombre,
            imagen: productosTotales[2].imagen,
            descripcion:productosTotales[2].Descripcion,
            precio: productosTotales[2].precio,
            stock:productosTotales[2].stock
        };

        let productoPruebaAirpods=[
            {
                nombre:productosTotales[3].Nombre,
                imagen:productosTotales[3].imagen,
                precio:productosTotales[3].precio,
                stock:productosTotales[3].stock
            },
            {
                nombre:productosTotales[4].Nombre,
                imagen:productosTotales[4].imagen,
                precio:productosTotales[4].precio,
                stock:productosTotales[4].stock
            },
            {
                nombre:productosTotales[4].Nombre,
                imagen:productosTotales[4].imagen,
                precio:productosTotales[4].precio,
                stock:productosTotales[4].stock
            }
        ]

//Eventos menu
opcion4.addEventListener("Click",mostrarAirpods(productoPruebaAirpods))











// Mostrar información del producto
const add1Button = document.getElementById('add1');

// Mostrar información del producto
function mostrarProducto1(producto) {
    productName.textContent = producto.nombre;
    productImage.src = producto.imagen;
    productPrice.textContent = `$${producto.precio.toFixed(2)}`;
    productDescripcion.textContent = producto.descripcion;
    if(producto.stock>0){
        add1Button.classList.add("botonFuncional")
        add1Button.disabled=false;
    }else{
        add1Button.disabled=true;
        add1Button.classList.add("botonNoFuncional")
        add1Button.innerText="Sin Stock"
    }
}

add1Button.addEventListener('click', function() {
    var productoSeleccionado = {
        name: productName.textContent,
        precio: productPrice.textContent
    };
    addCesta(productoSeleccionado)  
    produtoIphone.stock=produtoIphone.stock-1;
    if(produtoIphone.stock>0){
        add1Button.classList.add("botonFuncional")
        add1Button.disabled=false;
    }else{
        add1Button.disabled=true;
        add1Button.classList.add("botonNoFuncional")
        add1Button.innerText="Sin Stock"
    }
});

mostrarProducto1(produtoIphone);















//Manejo segundo producto
opcion2.addEventListener("click", (e)=>{
    mostrarProducto2(produtoPrueba2)
})

const addButton2 = document.getElementById('add2');

function mostrarProducto2(producto){
    const productName2 = document.getElementById('productName2');
    const productImage2 = document.getElementById('productImage2');
    const productDescripcion2 = document.getElementById('productDescripcion2');
    const productPrice2 = document.getElementById('productPrice2');
    const productColors2 = document.getElementById('productColors2');

    productName2.textContent = producto.nombre;
    productImage2.src = producto.imagen;
    productPrice2.textContent = `$${producto.precio.toFixed(2)}`;
    productDescripcion2.textContent = producto.descripcion;
    if(producto.stock>0){
        addButton2.classList.add("botonFuncional")
        addButton2.disabled=false;
    }else{
        addButton2.disabled=true;
        addButton2.classList.add("botonNoFuncional")
        addButton2.innerText="Sin Stock"
    }
    
    addButton2.addEventListener('click', function() {
        var productoSeleccionado = {
            name: productName2.textContent,
            precio: productPrice2.textContent
        };
        addCesta(productoSeleccionado)
        produtoPrueba2.stock=produtoPrueba2.stock-1;
        if(produtoPrueba2.stock>0){
            addButton2.classList.add("botonFuncional")
            addButton2.disabled=false;
        }else{
            addButton2.disabled=true;
            addButton2.classList.add("botonNoFuncional")
            addButton2.innerText="Sin Stock"
        }
    });
}
















// Tercer Producto
opcion3.addEventListener("click", (e)=>{
    mostrarProducto3(produtoPrueba3)
})

const addButton3 = document.getElementById('add3');


function mostrarProducto3(producto){
    const productName3 = document.getElementById('productName3');
    const productImage3 = document.getElementById('productImage3');
    const productDescripcion3 = document.getElementById('productDescripcion3');
    const productPrice3 = document.getElementById('productPrice3');

    productName3.textContent = producto.nombre;
    productImage3.src = producto.imagen;
    productPrice3.textContent = `$${producto.precio.toFixed(2)}`;
    productDescripcion3.textContent = producto.descripcion;

    if(producto.stock>0){
        addButton3.classList.add("botonFuncional")
        addButton3.addEventListener('click', function() {
            var productoSeleccionado = {
                name: productName3.textContent,
                precio: productPrice3.textContent
            };
            addCesta(productoSeleccionado)
            produtoPrueba3.stock=produtoPrueba3.stock-1;
        });
    }else{
        addButton3.disabled=true;
        addButton3.classList.add("botonNoFuncional")
        addButton3.innerText="Sin Stock"
    }

    
}



function mostrarAirpods(producto){
    const imagenAirpod1 = document.getElementById('imagenAirpod1');
    const nameAirpod1 = document.getElementById('nameAirpod1');
    const precioAirpod1 = document.getElementById('precioAirpod1');
    const botonAddAirpod1 = document.getElementById('botonAddAirpod1');
    const imagenAirpod2 = document.getElementById('imagenAirpod2');
    const nameAirpod2 = document.getElementById('nameAirpod2');
    const precioAirpod2 = document.getElementById('precioAirpod2');
    const botonAddAirpod2 = document.getElementById('botonAddAirpod2');
    const imagenAirpod3 = document.getElementById('imagenAirpod3');
    const nameAirpod3 = document.getElementById('nameAirpod3');
    const precioAirpod3 = document.getElementById('precioAirpod3');
    const botonAddAirpod3 = document.getElementById('botonAddAirpod3');
    const botonesAirpod=[botonAddAirpod1,botonAddAirpod2,botonAddAirpod3];


    nameAirpod1.innerText=producto[0].nombre
    nameAirpod2.innerText=producto[1].nombre
    nameAirpod3.innerText=producto[2].nombre

    precioAirpod1.innerText=producto[0].precio
    precioAirpod2.innerText=producto[1].precio
    precioAirpod3.innerText=producto[2].precio

    imagenAirpod1.src = producto[0].imagen;
    imagenAirpod2.src = producto[1].imagen;
    imagenAirpod3.src = producto[2].imagen;

    for(let i=0; i<producto.length;i++){
        if(producto[i].stock>0){
            botonesAirpod[i].classList.add("botonFuncional")
        }else{
            botonesAirpod[i].classList.add("botonNoFuncional")
            botonesAirpod[i].innerText="Sin Stock"
        }
    }

    botonesAirpod[0].addEventListener('click', function() {
        if(producto[0].stock>0){
                var nombre = producto[0].nombre;
                var precio = producto[0].precio;
                var productoSeleccionado = {
                    nombre: nombre,
                    precio: precio
                };
                addCesta(productoSeleccionado)
                productoPruebaAirpods[0].stock=productoPruebaAirpods[0].stock-1;
                if(productoPruebaAirpods[0].stock>0){
                    botonesAirpod[0].classList.add("botonFuncional")
                }else{
                    botonesAirpod[0].classList.add("botonNoFuncional")
                    botonesAirpod[0].innerText="Sin Stock"
                }
        }
    });


    botonesAirpod[1].addEventListener('click', function() {
        if(producto[1].stock>0){
            var nombre = producto[1].nombre;
            var precio = producto[1].precio;
            var productoSeleccionado = {
                nombre: nombre,
                precio: precio
            };
            addCesta(productoSeleccionado)
            productoPruebaAirpods[1].stock=productoPruebaAirpods[1].stock-1;
            if(productoPruebaAirpods[1].stock>0){
                botonesAirpod[1].classList.add("botonFuncional")
            }else{
                botonesAirpod[1].classList.add("botonNoFuncional")
                botonesAirpod[1].innerText="Sin Stock"
            }
            
        }
    });


    botonesAirpod[2].addEventListener('click', function() {
        if(producto[2].stock>0){
            try {
                var nombre = producto[2].nombre;
                var precio = producto[2].precio;
                var productoSeleccionado = {
                    nombre: nombre,
                    precio: precio
                };
                addCesta(productoSeleccionado)
                productoPruebaAirpods[2].stock=productoPruebaAirpods[2].stock-1;
                if(productoPruebaAirpods[2].stock>0){
                    botonesAirpod[2].classList.add("botonFuncional")
                }else{
                    botonesAirpod[2].classList.add("botonNoFuncional")
                    botonesAirpod[2].innerText="Sin Stock"
                }
            } catch (error) {
                
            }
        }
    });

}

function addCesta(producto){
    try {
        cesta.push(producto)
        sessionStorage.setItem('cesta', JSON.stringify(cesta));
        console.log(producto)
        rellenarCesta(producto)
        if(producto.name==undefined){
            disminuirExistencia(producto.nombre)
        }else{
            disminuirExistencia(producto.name)
        }
        document.getElementById("successMessage").style.display="grid" 
        setTimeout((e)=>{
        document.getElementById("successMessage").style.display="none" 
    },2500) 
    } catch (error) {
        
    }
}

  
  })
  .catch(error => {
    console.error('Error en la llamada fetch:', error);
});



function rellenarCesta(producto){
    const contenedor=document.createElement("div")

    const nombre=document.createElement("h4")
    if(producto.name==undefined){
        nombre.innerHTML=producto.nombre
    }else{
        nombre.innerHTML=producto.name
    }

    const precio=document.createElement("h4")
    precio.innerHTML=producto.precio
    contenedor.appendChild(nombre)
    contenedor.appendChild(precio)
    if(producto.name=="Iphone 15"){
        const imagen=document.createElement("img")
        imagen.src="./assets/images/iphone15.png"
        contenedor.appendChild(imagen)

    }else if(producto.name=="Iphone 15 Pro"){
        const imagen=document.createElement("img")
        imagen.src="./assets/images/iphone15pro.png"
        contenedor.appendChild(imagen)

    }else if(producto.name=="Iphone 15 Pro Max"){
        const imagen=document.createElement("img")
        imagen.src="./assets/images/iphone15promax.png"
        contenedor.appendChild(imagen)

    }else if(producto.nombre=="AirPods"){
        const imagen=document.createElement("img")
        imagen.src="./assets/images/airpod1.png"
        contenedor.appendChild(imagen)

    }else if(producto.nombre=="AirPods Pro"){
        const imagen=document.createElement("img")
        imagen.src="./assets/images/airpod1pro.png"
        contenedor.appendChild(imagen)

    }else if(producto.nombre=="AirPods Pro Max"){
        const imagen=document.createElement("img")
        imagen.src="./assets/images/airpod1promax.png"
        contenedor.appendChild(imagen)

    }
    

    
    cestaGrafica.appendChild(contenedor)
}


const btnCarrito = document.getElementById("btnCarrito");
const btnUser = document.getElementById("btnUser");
const containerCesta = document.getElementById("containerCesta");

    btnCarrito.addEventListener("click", (e) => {
        containerCesta.style.display = "inline-block";
        e.stopPropagation(); // Evita que el clic en el botón se propague al documento
    });

    document.addEventListener("click", (e) => {
        if (!containerCesta.contains(e.target) && e.target !== btnCarrito) {
            containerCesta.style.display = "none";
        }
});

btnUser.addEventListener("click",(e)=>{
    window.location.href = "http://localhost:3000/login.php";
})




function addExistencia(nombre){
    fetch(`http://localhost:3001/addExistencia/${nombre}`).
        then(response=>{
            if (!response.ok) {
                throw new Error(`Error al añadir stock. Código de estado: ${response.status}`);
              }
              return response.json();
        })
        .then(data=>{
            console.log("Datos actualizados con exito")
        })
}


function disminuirExistencia(nombre){
    fetch(`http://localhost:3001/eliminarExistencia/${nombre}`).
        then(response=>{
            if (!response.ok) {
                throw new Error(`Error al disminuir stock. Código de estado: ${response.status}`);
              }
              return response.json();
        })
        .then(data=>{
            console.log("Datos actualizados con exito")
        })
}




