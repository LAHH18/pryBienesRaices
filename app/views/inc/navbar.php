<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="<?php echo APP_URL; ?>app/views/img/BRlogo.png" alt="Logo-img" width="120px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link active" href="#" data-bs-toggle="dropdown" >Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Propiedades
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Venta</a></li>
            <li><a class="dropdown-item" href="#">Alquiler</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Agentes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Directorio</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informacion
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Quienes Somos</a></li>
            <li><a class="dropdown-item" href="#">Mas Informacion</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn text-warning me-2" type="submit">Publicar</button>
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?php echo APP_URL; ?>app/views/icons/person-circle.svg" >
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><a class="dropdown-item" href="#">Mi Cuenta</a></li>
            <li><a class="dropdown-item" href="#">Salir</a></li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</nav>