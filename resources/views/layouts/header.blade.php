<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="images/fanicom/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/fanicom/favicon-16x16.png" sizes="16x16" />
    

    <title>OSPOCE</title>

    <!-- Bootstrap core CSS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link href="css/carrouselLogos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
    <body>
        
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light" style="color:white!important; margin-bottom:-1%;">

      <a class="navbar-brand" href="#"><img src="images/logoOspoce.png" alt="logoOSPOCE" style="width:50%;margin-left:10%"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-left:5%">
        <ul class="navbar-nav mr-auto" id="botoneraNav">
          <li class="nav-item active" id="link">
            <a class="nav-link dropdown" id="links "data-toggle="dropdown" href="#" style="color:black; font-size:1.2em">CONOCENOS</a>
            <ul class="dropdown-menu" id="fondosDisplay" style="margin-top:0" >
              <li>
              <ul id="seccionesHeaderNav">
                <div id="logoSeccionesHeaderLi" ><img src="images/logosHeaderSecciones/secciones1.png" alt="" id="logoSeccionesHeader" ></div>
                <li><a href="#">> Institucional</a></li>
                <li><a href="#">> Sucursales</a></li>
                <li><a href="#">> Teléfonos</a></li>
              </ul>
              </li>
              <li>
                <ul id="seccionesHeaderNav">
                  <div id="logoSeccionesHeaderLi"><img src="images/logosHeaderSecciones/secciones2.png" alt="" id="logoSeccionesHeader"></div>
                  
                  <li><a href="#">> Centros</a></li>
                  <li><a href="#">> Emprendimientos</a></li>
                </ul>
              </li>
              <li>
                <ul id="seccionesHeaderNav">
                  <div id="logoSeccionesHeaderLi"><img src="images/logosHeaderSecciones/secciones4.png" alt="" id="logoSeccionesHeader"></div>
                  <li><a href="#">> Desregulación</a></li>
                  </ul>
              </li>
              <li>
                <ul id="seccionesHeaderNav">
                  <div id="logoSeccionesHeaderLi"><img src="images/logosHeaderSecciones/secciones5.png" alt="" id="logoSeccionesHeader"></div>
                  <li><a href="#">> Beneficios</a></li>
                  <li><a href="#">> Noticias</a></li>
                  </ul>
              </li>
              <li>
                <ul id="seccionesHeaderNav" style="border-right:none">
                  <li id="logoSeccionesHeaderLi"><img src="images/logosHeaderSecciones/secciones6.png" alt="" id="logoSeccionesHeader"></li>
                  <li><a href="#">> OSPOCE Integral</a></li>
                  </ul>
              </li>


            </ul>
          </li>
          <li class="nav-item active" id="link">
            <a class="nav-link dropdown" id="links "data-toggle="dropdown" href="#" style="color:black; font-size:1.2em">AFILIADOS</a>
          
          <ul class="dropdown-menu" id="fondosDisplay" style="margin-top:0" >
              <li>
              <ul id="seccionesHeaderNav">
                <div id="logoSeccionesHeaderLi" ><img src="images/logosHeaderSecciones/secciones1.png" alt="" id="logoSeccionesHeader" ></div>
                <li><a href="#">> Datos Personales</a></li>
                <li><a href="#">> Grupo Familiar</a></li>
               
              </ul>
              </li>
              <li>
                <ul id="seccionesHeaderNav">
                  <div id="logoSeccionesHeaderLi"><img src="images/logosHeaderSecciones/secciones3.png" alt="" id="logoSeccionesHeader"></div>
                  
                  <li><a href="#">> Autorizaciones</a></li>
                  <li><a href="#">> Facturación</a></li>
                </ul>
              </li>
              <li>
                <ul id="seccionesHeaderNav">
                  <div id="logoSeccionesHeaderLi"><img src="images/logosHeaderSecciones/secciones3.png" alt="" id="logoSeccionesHeader"></div>
                  <li><a href="#">> Credenciales</a></li>
                  </ul>
              </li>
              <li>
                <ul id="seccionesHeaderNav">
                  <div id="logoSeccionesHeaderLi"><img src="images/logosHeaderSecciones/secciones3.png" alt="" id="logoSeccionesHeader"></div>
                  <li><a href="#">> Tramites</a></li>
                  <li><a href="#">> Medios de Pago</a></li>
                  </ul>
              </li>
              <li>
                <ul id="seccionesHeaderNav" style="border-right:none">
                  <li id="logoSeccionesHeaderLi"><img src="images/logosHeaderSecciones/secciones3.png" alt="" id="logoSeccionesHeader"></li>
                  <li><a href="#">> Fiscaliza tu Empresa</a></li>
                  </ul>
              </li>


            </ul>
          </li>
          <li class="nav-item active" id="link">
            <a class="nav-link disabled" href="#" style="color:black; font-size:1.2em">EMPRESAS</a>
          </li>
          <li class="nav-item active" id="link">
            <a class="nav-link disabled" href="#" style="color:black; font-size:1.2em">DESREGULÁ</a>
          </li>

        </ul>
        <div class="col-lg-2" style="margin-right:3%" id="arriba">
                  @if (Auth::guest())
                             <a href="{{ route('login') }}"> <img src="images/ingresoAutogestion.png" alt="" class="btn btn-outline-info my-2 my-sm-0" width="110%" style="border-radius:20px;"></a>
                                <!-- <img src="images/ingresoAutogestion.png" alt=""  width="50%"> -->
                                <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --> 
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
        
        </div>
      </div>

    </nav>
    <div class="row" id="subHeader" style="margin-top:2.8%">

        <div class="col-lg-3" style="margin-left:-14%" >Un Aporte Bien Hecho</div>
        <div class="col-lg-8"></div>
        <div class="col-lg-2" style="margin-left:2.5%"><span class="pull-right"><img src="images/phonoLogo.png" alt="phoneLogo" width="12%" ><a class="phone" href="tel:08003336776" style="text-decoration:none; color: white"> 0800 333 6776</a></span></div>

    </div>