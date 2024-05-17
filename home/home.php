<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">



    <!--Extras-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">






    
    <title>Chatbot</title>
</head>
<body>

    <header>
    
        <!--Navbar-->  
        <div class="navbar">
            <div class="navbar-section">
              <a href="home.html" class="logo-link">
                <img src="img/logo.png" alt="Logo">
              </a>
            </div>
            <div class="navbar-section">
              <a href="home.html" class="bottom-button">Home</a>
              <a href="../compras/compras.html" class="bottom-button">Comprar</a>
              <a href="../Sobre/sobre.html" class="bottom-button">Sobre</a>
              <a href="../Contacto/contacto.html" class="bottom-button">Contacto</a>
            </div>
            <div class="navbar-section">
              <button class="icon-button">
                <i class="fas fa-user"></i>
                <span class="icon-description">Usuario</span>
              </button>
              <button class="icon-button">
                <i class="fas fa-shopping-bag"></i>
                <span class="icon-description">Carrito</span>
                <span class="badge">3</span> <!-- Número del círculo -->
              </button>
              <button class="icon-button">
                <i class="fas fa-heart"></i>
                <span class="icon-description">Wishlist</span>
                <span class="badge">5</span> <!-- Número del círculo -->    
              </button>
            </div>
          </div>
      </header>


        <!--Banner-->  
    <div class="banner">
        <div class="banner-content">
        <h1 class="banner-title">Calidad - Estilo - Stylish</h1>

        <a class="banner-button" href="../compras/compras.html">Comprar</a>
        </div>
    </div>



<!--Wrapers-->  
<div class="titlewrapper">
    <h2 class="title">Elementos Destacados</h2>
  </div>

  <div class="wrapper">
    <div class="card"> <span class="off bg-dark">-35% OFF</span>
        <div class="text-center p-4"> <img class="main-image" src="img/wrapper/modelo1.0.jpeg" width="300"/> </div>
        <div class="thumbnail text-center"> <img onclick="change_image(this)" src="img/wrapper/modelo1.1.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo1.2.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo1.3.jpeg" width="70"> </div>
        <div class="about text-center">
            <h6>Casaca Biker Mujer Denimlab</h6> <span>S/ 139,02</span>
        </div>
        <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-dark text-uppercase">Agregar al Carro</button>
            <div class="add"> <span class="product_fav"><i class="fas fa-heart"></i></span> <span class="product_fav"><i class="fas fa-shopping-bag"></i></span> </div>
        </div>
    </div>

    <div class="card"> <span class="off bg-dark">-40% OFF</span>
        <div class="text-center p-4"> <img class="main-image" src="img/wrapper/modelo2.0.jpeg" width="300"/> </div>
        <div class="thumbnail text-center"> <img onclick="change_image(this)" src="img/wrapper/modelo2.1.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo2.2.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo2.3.jpeg" width="70"> </div>
        <div class="about text-center">
            <h6>Jean Mom Mujer Sybilla</h6> <span>S/ 89,90</span>
        </div>
        <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-dark text-uppercase">Agregar al Carro</button>
            <div class="add"> <span class="product_fav"><i class="fas fa-heart"></i></span> <span class="product_fav"><i class="fas fa-shopping-bag"></i></span> </div>
        </div>
    </div>

    <div class="card"> <span class="off bg-dark">-25% OFF</span>
        <div class="text-center p-4"> <img class="main-image" src="img/wrapper/modelo3.0.jpeg" width="300"/> </div>
        <div class="thumbnail text-center"> <img onclick="change_image(this)" src="img/wrapper/modelo3.1.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo3.2.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo3.3.jpeg" width="70"> </div>
        <div class="about text-center">
          <h6>Polera Hombre Bearcliff</h6> <span>S/ 76.90</span>
      </div>
      <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-dark text-uppercase">Agregar al Carro</button>
          <div class="add"> <span class="product_fav"><i class="fas fa-heart"></i></span> <span class="product_fav"><i class="fas fa-shopping-bag"></i></span> </div>
      </div>
      
  </div>
</div>

<div class="wrapper">
    <div class="card"> <span class="off bg-dark">-25% OFF</span>
        <div class="text-center p-4"> <img class="main-image" src="img/wrapper/modelo4.0.jpeg" width="300"/> </div>
        <div class="thumbnail text-center"> <img onclick="change_image(this)" src="img/wrapper/modelo4.1.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo4.2.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo4.3.jpeg" width="70"> </div>
        <div class="about text-center">
            <h6>Camisa Manga Larga Hombre Basement</h6> <span>S/ 119.90 </span>
        </div>
        <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-dark text-uppercase">Agregar al Carro</button>
            <div class="add"> <span class="product_fav"><i class="fas fa-heart"></i></span> <span class="product_fav"><i class="fas fa-shopping-bag"></i></span> </div>
        </div>
    </div>

    <div class="card"> <span class="off bg-dark">-45% OFF</span>
        <div class="text-center p-4"> <img class="main-image" src="img/wrapper/modelo5.0.jpeg" width="300"/> </div>
        <div class="thumbnail text-center"> <img onclick="change_image(this)" src="img/wrapper/modelo5.1.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo5.2.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo5.3.jpeg" width="70"> </div>
        <div class="about text-center">
            <h6>Casaca Casual Mujer Sybilla</h6> <span>S/ 104,93</span>
        </div>
        <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-dark text-uppercase">Agregar al Carro</button>
            <div class="add"> <span class="product_fav"><i class="fas fa-heart"></i></span> <span class="product_fav"><i class="fas fa-shopping-bag"></i></span> </div>
        </div>
    </div>

    <div class="card"> <span class="off bg-dark">-25% OFF</span>
        <div class="text-center p-4"> <img class="main-image" src="img/wrapper/modelo6.0.jpeg" width="300"/> </div>
        <div class="thumbnail text-center"> <img onclick="change_image(this)" src="img/wrapper/modelo6.1.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo6.2.jpeg" width="70"> <img onclick="change_image(this)" src="img/wrapper/modelo6.3.jpeg" width="70"> </div>
        <div class="about text-center">
          <h6>Abrigo Mujer University Club</h6> <span>S/ 160,94</span>
      </div>
      <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-dark text-uppercase">Agregar al Carro</button>
          <div class="add"> <span class="product_fav"><i class="fas fa-heart"></i></span> <span class="product_fav"><i class="fas fa-shopping-bag"></i></span> </div>
      </div>
      
  </div>
</div>



<!--Footer-->  
<div class="footer-container">
    <footer class="section-footer border-top">
        <div class="container-fluid">
            <section class="footer-top padding-y">
                <div class="row">
                    <aside class="col-md-4">
                        <article class="mr-3">
                            <img src="img/logo.png" class="logo-footer">
                            <div class="container">
                              <ul>
                                  <li><i class='bx bxl-facebook'></i><span>Facebook</span></li>
                                  <li><i class='bx bxl-twitter'></i><span>Twitter</span></li>
                                  <li><i class='bx bxl-linkedin'></i><span>Linkedin</span></li>
                                  <li><i class='bx bxl-instagram'></i><span>Instagram</span></li>
                                  <li><i class='bx bxl-pinterest'></i><span>Pinterest</span></li>
                              </ul>
                          </div>
                        </article>
                    </aside>
                    <aside class="col-sm-3 col-md-2">
                        <h6 class="titleDesc">Sobre</h6>
                        <ul class="list-unstyled">
                            <li><a href="../sobre/sobre.html" data-abc="true">Nosotros</a></li>
                            <li><a href="#" data-abc="true">Servicios</a></li>
                            <li><a href="#" data-abc="true">Terminos y Condiciones</a></li>
                            <li><a href="#" data-abc="true">Nuestro Blog</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3 col-md-2">
                        <h6 class="titleDesc">Servicios</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" data-abc="true">Ayuda</a></li>
                            <li><a href="#" data-abc="true">Devoluciones</a></li>
                            <li><a href="#" data-abc="true">Términos y Política</a></li>
                            <li><a href="#" data-abc="true">Abrir Duda</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3 col-md-2">
                        <h6 class="titleDesc">Para Usuarios</h6>
                        <ul class="list-unstyled">
                            <li><a href="../login.html" data-abc="true"> User Login </a></li>
                            <li><a href="../Register/register.html" data-abc="true"> User register </a></li>
                            <li><a href="#" data-abc="true"> Configuracion de cuenta </a></li>
                                  <li><a href="#" data-abc="true"> Mis Ordenes </a></li>
                              </ul>
                          </aside>
                          <aside class="col-sm-2 col-md-2">
                              <h6 class="titleDesc">Nuestra app</h6>
                              <a href="#" class="d-block mb-2" data-abc="true"><img class="img-responsive" src="https://i.imgur.com/nkZP7fe.png" height="40"></a>
                              <a href="#" class="d-block mb-2" data-abc="true"><img class="img-responsive" src="https://i.imgur.com/47q2YGt.png" height="40" width="123"></a>
                          </aside>
                      </div>
                  </section>
                  <section class="footer-bottom border-top">
                      <div class="row">
                          <div class="col-md-12">
                              <p class="float-left text-muted">&copy; 2023 Todos los derechos reservados</p>
                              <p target="_blank" class="float-right text-muted">
                                  <a href="#" data-abc="true">Privacidad &amp; Cookies</a> &nbsp; &nbsp;
                                  <a href="#" data-abc="true">Accessibilidad</a>
                              </p>
                          </div>
                      </div>
                  </section>
              </div>
          </footer>
      </div>



















<!--ChatWidget-->

    <div id="chat-widget">
      <div id="chat-btn"></div>
      <div id="chat-container">
        <div id="chat-history"></div>
        <div class="input-container">
          <input type="text" id="user-input" placeholder="Escribe tu mensaje..." autocomplete="off">
          <button id="mic-btn" class="material-icons mic-btn">mic</button>
        </div>
      </div>
    </div>
    <script src="../chatbot.js"></script>
  </body>
  
  

  
  
  
  
</html>
