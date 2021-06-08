<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Dashboard - Templune</title>
</head>
<style>
  :root {
    --primary: #111B54;
    --light: #ffffff;
    --grey: #efefef;
}

body {
    overflow: hidden;
    font-family: 'Muli', sans-serif;
    font-weight: 300;
    color: var(--primary);
}

a:hover {
    text-decoration: none;
}

.bg-primary { background-color: var(--primary) !important; }

.bg-light { background-color: var(--light) !important; }

.bg-grey { background-color: var(--grey) !important; }

.bg-mix { background: linear-gradient(180deg, var(--light) 50%, var(--grey) 0); }

.btn-primary {
    background-color: var(--primary);
    border: 0;
}

.btn-primary:hover {
    background-color: var(--primary);
}

#sidebar-container {
    min-height: 100vh;
}
  
#sidebar-container .logo{
    padding: 0.875rem 1.25rem;
}
  
#sidebar-container .menu {
    width: 18rem;
}

#content {
    overflow-y: auto;
    height: 100vh;
    padding-bottom: 5rem;
}
.navegador {
    background: #6c82ff;
}
.avatar {
    max-width: 35px;
}

.btn-search {
    right: 0;
}

.stat {
    border-right: 1px solid var(--grey);
}

  
@media (max-width: 768px) {
    #sidebar-container {
      display: none;
    }
    .stat {
        border: 0;
    }
  }
  
</style>
<body>
    <div class="d-flex" id="content-wrapper">
        <div id="sidebar-container" class="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold mb-0">La Tienda</h4>
            </div>
            <div class="menu">
                <a href="<?php echo base_url('public/da/index')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i>
                    Index</a>

                <a href="<?php echo base_url('public/da/tablero')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-people lead mr-2"></i>
                    Tablero</a>

                <a href="<?php echo base_url('public/da/estadisticas')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-stats lead mr-2"></i>
                    Estadísticas</a>
                <a href="<?php echo base_url('public/da/perfil')?>" class="d-block text-light p-3 border-0"><i class="icon ion-md-person lead mr-2"></i>
                    Perfil</a>
                <a href="<?php echo base_url('public/da/configuraciones')?>" class="d-block text-light p-3 border-0"> <i class="icon ion-md-settings lead mr-2"></i>
                    Configuración</a>
            </div>
        </div>
        <div class="w-100">
         <nav class="navbar navbar-expand-lg border-bottom navegador">
            <div class="container">
    
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline position-relative d-inline-block my-2">
                  <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn position-absolute btn-search" type="submit"><i class="icon ion-md-search"></i></button>
                </form>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    Usuario Nuevo
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Mi perfil</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Cerrar sesión</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Fin Navbar -->
