<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/styles.css">
    <link rel="stylesheet" href="./assets/styles/head.css">
</head>
<body>
    <header class="light">
        <img width="40px" src="./assets/images/icons/icons8-mac-os-90.png" alt="">
        <nav>
            <ul class="menu">
                <li id="opcion1">Iphone 15</li>
                <li id="opcion2">Iphone 15 Pro</li>
                <li id="opcion3">Iphone 15 Pro Max</li>
                <li id="opcion4">AirPods</li>
                <li id="opcion5">MacBook</li>
            </ul>
        </nav>
        <div class="containerOpcionesMenu" id="containerOpcionesMenu">
            <img id="btnUser" src="./assets/images/icons/icons8-usuario-100.png" alt="">
            <img id="btnCarrito" src="./assets/images/icons/icons8-carro-100.png" alt="">
        </div>
    </header>

    <main class="slider">

        <section id="container1">
                <div id="productCard" class="containerProducto">
                    <div class="containerProductoImagen">
                        <img id="productImage" src="" alt="Product Image">
                    </div>
                    <div class="containerProductoData">
                        <div>
                            <h2 id="productName"></h2>
                            <p id="productDescripcion"></p>
                            <p id="productPrice"></p>
                            <div>
                                <button id="add1" class="add">Añadir</button>
                            </div>
                        </div>
                    </div>
                    
                </div> 
        </section>

        <section id="container2">
            <div id="productCard2" class="containerProducto">
                <div class="containerProductoImagen">
                    <img width="900px" id="productImage2" src="" alt="Product Image">
                </div>
                <div class="containerProductoData">
                    <div>
                        <h2 id="productName2"></h2>
                        <p id="productDescripcion2"></p>
                        <p id="productPrice2"></p>
                        <div>
                            <p id="productColors2"></p>
                            <div class="containerColores" id="containerColores2"></div>
                            <input type="hidden" id="colorProducto2">
                            <button id="add2" class="add">Añadir</button>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section id="container3">
            <div id="productCard3" class="containerProducto">
                <div class="containerProductoImagen">
                    <img width="350px" id="productImage3" src="" alt="Product Image">
                </div>
                <div class="containerProductoData">
                    <div>
                        <h2 id="productName3"></h2>
                        <p id="productDescripcion3"></p>
                        <p id="productPrice3"></p>
                        <div>
                            <p id="productColors3"></p>
                            <div class="containerColores" id="containerColores3"></div>
                            <input type="hidden" id="colorProducto3">
                            <button id="add3" class="add">Añadir</button>
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section id="container4">
            <div class="containerAirPods" id="containerAirPods">
                <div class="containerAirpod" id="containerAirpod1">
                    <img id="imagenAirpod1">
                    <div class="containerDataAirpod">
                        <h2 id="nameAirpod1"></h2>
                        <p id="precioAirpod1"></p>
                        <button id="botonAddAirpod1">Añadir</button>
                    </div>
                </div>

                <div class="containerAirpod" id="containerAirpod2">
                    <img id="imagenAirpod2">
                    <div class="containerDataAirpod">
                        <h2 id="nameAirpod2"></h2>
                        <p id="precioAirpod2"></p>
                        <button id="botonAddAirpod2">Añadir</button>
                    </div>
                </div>

                <div class="containerAirpod" id="containerAirpod3">
                    <img id="imagenAirpod3">
                    <div class="containerDataAirpod">
                        <h2 id="nameAirpod3"></h2>
                        <p id="precioAirpod3"></p>
                        <button class="button" id="botonAddAirpod3">Añadir</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="container5">
            Contenido 5
        </section>
    </main>

    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>


    <div id="successMessage" class="success-message-container">
        <div>
            <p id="successText">Artículo añadido con éxito a la cesta</p>
        </div>
    </div>

    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem">Air Force</li>
                    <li class="fListItem">Air Jordan</li>
                    <li class="fListItem">Blazer</li>
                    <li class="fListItem">Crater</li>
                    <li class="fListItem">Hippie</li>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput">
                    <button class="fButton">Join!</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <img src="./img/facebook.png" alt="" class="fIcon">
                    <img src="./img/twitter.png" alt="" class="fIcon">
                    <img src="./img/instagram.png" alt="" class="fIcon">
                    <img src="./img/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">MTabit. All rights reserved. 2022.</span>
            </div>
        </div>
    </footer>
        
    <div class="containerCesta" id="containerCesta">
        <h3>Cesta</h3>
        <div class="containerProductosCesta" id="containerProductosCesta">
            
        </div>
        <div class="containerButtonsCesta">
            <button>Comprar</button>
            <button>Eliminar</button>
        </div>
    </div>

<?php
    include("php/Main.php");
    $user = getUserFromCookies();
    if(!$user==null){
        $usuario = $user["user"];
        echo "<script>
    const usuario=document.createElement('h4')
    usuario.innerText='$usuario'
    document.getElementById('containerOpcionesMenu').appendChild(usuario)
    
    </script>";
    }
    
?>

    <script src="./index.js"></script>
</body>
</html>
