<doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marca Gol</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   

        <!-- Styles -->
        <style>
            /*html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }*/
            .img {
            
}

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
    </head>
    <body style="background-color:#EBDDDD">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <nav aria-label="breadcrumb">
                                      <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/home') }}" style="color: #E38A8A">Productos</a></li>
                  </ol>
                     </nav>
                       
                    @else
                        <a href="{{ route('login') }}"> <strong>Iniciar Sesión</strong></a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><strong>Registrarse</strong></a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="container" class="img-fluid" alt="Responsive image">
<div class="jumbotron"style="background-image: url(img/balonportada.jpg); background-size: 50%" >
  <h1  style="color: white" class="display-4" >Bienvenidos!</h1>
  <p style="color: white" class="lead">Marca Gol todo en deporte.</p>
</div>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold"></a></p>
    </div>
  </div>
   <div class="container">

  <div class="row mb-3">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Hombres</strong>
          <h3 class="mb-0">England Team</h3>
          <div class="mb-1 text-muted">England 2019 Stadium Away</div>
          <p class="card-text mb-auto">La camiseta England 2019 Stadium Away combina detalles del equipo con un tejido supertranspirable para mantener la frescura y la transpirabilidad en el campo.
     </p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img-fluid" alt="Responsive image" width="200" height="250" src="img/camisa1.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title></title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
   
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Mujeres</strong>
          <h3 class="mb-0">FFF Team</h3>
          <div class="mb-1 text-muted">FFF 2019 Stadium Away</div>
          <p class="mb-auto">Combina detalles del equipo con un tejido supertranspirable para mantener la frescura y la transpirabilidad en el campo o en las gradas cuando animas a tu equipo.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img-fluid" alt="Responsive image"width="200" height="250" src="img/camisa2.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title></title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>


    </div>



     <div class="container">

  <div class="row mb-3">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Niños</strong>
          <h3 class="mb-0">FFF Niños</h3>
          <div class="mb-1 text-muted">FFF 2019 Stadium Home</div>
          <p class="card-text mb-auto"> La camiseta FFF 2019 Stadium Home está confeccionada con un tejido transpirable que capilariza el sudor para mantener la frescura, la transpirabilidad.</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img-fluid" alt="Responsive image" width="200" height="250" src="img/camisa3.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title></title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
   
        
    
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Nuevo</strong>
          <h3 class="mb-0">Nigeria Team</h3>
          <div class="mb-1 text-muted">Nigeria 2019 Stadium Home</div>
          <p class="mb-auto">Incorpora detalles, como un escudo tejido, que destacan el orgullo por tu equipo. Además, también cuenta con elementos de alto rendimiento como el tejido Nike Breathe</p>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img class="img-fluid" alt="Responsive image" width="200" height="250" src="img/camisa4.jpg" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title></title><rect width="100%" height="100%" fill="#55595c"></rect></img>
        </div>
      </div>
    </div>
    </div>

  </div>
</div>
</body>
</html>
