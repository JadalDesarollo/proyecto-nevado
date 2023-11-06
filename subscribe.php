<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/icon-font.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/odometer.min.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <title>Subscribe | Industen</title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <meta name="description" content="form send">
</head>
<body>
  <div class="preloader">
    <figure>
      <img src="img/loader.png" alt="Image">
    </figure>
  </div>
  <div class="page-transition"></div>
  <aside class="side-widget">
    <div class="inner">
      <!-- Logo Menu Mobile -->
      <div class="show-mobile">
        <div class="site-menu">
          <ul class="menu">
            <li>
              <a href="index.html">Inicio</a>
            </li>
            <li>
              <a href="about-us.html">Sobre Nosotros</a>
            </li>
            <li>
              <a href="services.html">Servicios</a> <span class="sb" style="font-size: 18px">+</span>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="estacion-servicio.html">Estación de Servicios</a>
                </li>
                <li>
                  <a class="dropdown-item" href="maquinaria-pesada.html">Maquinas Pesadas</a>
                </li>
                <li>
                  <a class="dropdown-item" href="servicio-carga.html">Transporte de Carga</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="contact-us.html">Contacto</a>
            </li>
            <li>
              <a href="https://www.visor.jadal.pe/">Comprobante Electrónico</a>
            </li>
            <li>
              <a href="http://200.37.70.234/Reports_SQLEXPRESS2015/Pages/Report.aspx?ItemPath=%2fConsultaExterna%2flogin" target="_blank">Portal Cliente</a>
            </li>
            <li>
              <a href="http://192.168.18.13:5173/auth/login/" target="_blank">Intranet</a>
            </li>
          </ul>
        </div>
      </div><small>© 2023 - Jadal Software</small>
    </div>
  </aside>
  <nav class="navbar">
    <div class="container">
      <!-- Logo Menu Desktop -->
      <div class="logo">
        <a href="index.html"><img src="img/logo.png" alt="Image"></a>
      </div>
      <div class="site-menu">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <a href="http://200.37.70.234/Reports_SQLEXPRESS2015/Pages/Report.aspx?ItemPath=%2fConsultaExterna%2flogin" target="_blank" class="iconrenk"><img src="img/icon-s.png" class="ics" alt="icon-s">
              <div class="idl">
                <strong>Portal Cliente</strong><br>
                Conoce tus consumos
              </div></a>
            </div>
            <div class="col-md-4">
              <a href="https://www.visor.jadal.pe/" target="_blank" class="iconrenk"><img src="img/icon-s.png" class="ics" alt="icon-s">
              <div class="idl">
                <strong>Comprobante Electrónico</strong>
              </div></a>
            </div>
            <div class="col-md-4">
              <a href="http://192.168.18.13:5173/auth/login/" target="_blank" class="iconrenk"><img src="img/icon-s.png" class="ics" alt="icon-s">
              <div class="idl3">
                <strong>Intranet</strong><br>
                Acceso corportivo &nbsp;&nbsp;&nbsp;&nbsp;
              </div></a>
            </div>
          </div>
        </div>
        <ul class="menueffect">
          <li>
            <a href="index.html">Inicio</a>
          </li>
          <li>
            <a href="about-us.html">Sobre Nosotros</a>
          </li>
          <li>
            <a href="services.html">Servicios +</a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="estacion-servicio.html">Estación de Servicios</a>
              </li>
              <li>
                <a class="dropdown-item" href="maquinaria-pesada.html">Maquinas Pesadas</a>
              </li>
              <li>
                <a class="dropdown-item" href="servicio-carga.html">Transporte de Carga</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact-us.html">Contacto</a>
          </li>
        </ul>
      </div>
      <div class="hamburger-menu d-lg-none"></div>
    </div>
  </nav>
  <header class="page-header wow fadeInUp" data-wow-delay="0.5s" data-background="img/page-header.jpg">
    <div class="container">
      <h2><?php
                            if (isset($_POST['email8'])) {
                                $email = $_POST['email8'];
                                if (empty($email)) {
                                    echo 'Please do not leave blank';
                                } else {
                                    $toEmail = 'tucorreodecorreo@example.com'; // Reemplaza con tu dirección de correo
                                    $emailSubject = 'Nuevo correo de subscripción';
                                    $fromEmail = 'nevado@nevado.jadalsoftware.pe';
                                    $headers = "From: $fromEmail\r\n";
                                    $headers .= "Reply-To: $fromEmail\r\n";
                            
                                    // Modifica el mensaje para incluir el correo
                                    $message = "Correo de subscripción: $email";
                            
                                    // Envía el correo con el mensaje modificado
                                    mail($toEmail, $emailSubject, $message, $headers);
                            
                                    echo 'Gracias por Registrarte';
                                }
                            } else {
                                echo 'Por favor, registre el formulario';
                            }
                            ?></h2>
      <p>Aquí puedes volver al</p><br>
      <p><a href="index.html" class="custom-button"><strong>Inicio</strong></a></p>
    </div><!-- end container -->
  </header><!--Footer Alanı-->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4">
          <div class="logo wow fadeInUp" data-wow-delay="0.1s"><img src="img/logo2.png" alt="Image"></div><!-- end logo -->
          <div class="footer-info wow fadeInUp" data-wow-delay="0.2s">
            <p>&nbsp;&nbsp;&nbsp;073-336143</p><br>
            <div class="bosluk04"></div>
            <p>&nbsp;&nbsp;&nbsp;estaciondeservicionevado@gmail.com</p><br>
            <p>&nbsp;&nbsp;Esquina de Avs. Málaga y Country S/N &nbsp;&nbsp;&nbsp;Piura</p>
          </div><!-- end footer-info -->
          <ul class="footer-social wow fadeInUp" data-wow-delay="0.3s">
            <li>
              <a href="#"><img width="25" height="25" src="img/facebook.png" alt="Facebook"></a>
            </li>
            <li>
              <a href="#"><img width="25" height="25" src="img/instagram2.png" alt="Instagram"></a>
            </li>
            <li>
              <a href="#"><img width="25" height="25" src="img/twitter.png" alt="Twitter"></a>
            </li>
          </ul>
        </div><!-- end col-3 -->
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
          <h6 class="widget-title">Suscríbase a nuestro boletín</h6>
          <p class="footerp">Suscríbete para estar informado sobre nuestros servicios y productos.</p>
          <div class="row">
            <form action="subscribe.php" class="form__group" method="post">
              <div class="col-sm">
                <div class="form__group wow fadeInLeft" data-wow-delay="0.4s">
                  <input type="email" class="form-popup__input" placeholder="Correo" id="email8" name="email8" required="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form__group wow fadeInUp" data-wow-delay="0.5s">
                  <button class="custom-button-form">Subscríbete →</button>
                </div>
              </div>
            </form>
          </div>
        </div><!-- end col-4 -->
        <div class="col-lg-2 offset-xl-1 col-sm-8 wow fadeInUp" data-wow-delay="0.1s">
          <h6 class="widget-title">Servicios</h6>
          <ul class="footer-menu">
            <li>
              <a href="estacion-servicio.html">Estación de Servicios</a>
            </li>
            <li>
              <a href="energy-industry.html">Maquinas Pesadas</a>
            </li>
            <li>
              <a href="servicio-carga.html">Transporte de carga</a>
            </li>
          </ul>
          <h6 class="widget-title">Intranet</h6>
          <ul class="footer-menu">
            <li>
              <a href="https://www.facturacion.jadal.pe/auth" target="_blank">Portal Fact. Electrónica</a>
            </li>
            <li>
              <a href="http://192.168.18.13:5173/" target="_blank">System Report</a>
            </li>
          </ul>
        </div>
      </div><!-- end row -->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 wow fadeInUp" data-wow-delay="0.9s">
          <p class="copyright">© 2023 Jadal Software.</p>
        </div>
      </div>
    </div>
    <div id="top" style="cursor: pointer;"><img width="50" height="50" src="img/go-top.png" alt="go-top"></div>
  </footer>
  <script src="js/team.js"></script> 
  <script src="js/jquery.min.js"></script> 
  <script src="js/bootstrap.min.js"></script> 
  <script src="js/fancybox.min.js"></script> 
  <script src="js/swiper.min.js"></script> 
  <script src="js/odometer.min.js"></script> 
  <script src="js/wow.min.js"></script> 
  <script src="js/scripts.js"></script> 
  <script src="js/3d.jquery.js"></script> <!--Cursor Script-->
   
  <script>


        init_pointer({
        })
  </script>
</body>
</html>