
<!--navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary " style="padding-top: 0;">
  <div class="container-fluid navColor" > 
    <a class="navbar-brand" href="<?php echo base_url('principal')?>">
        <!--logotipo de la empresa-->
    <img src="<?php echo base_url('assets/img/logo.png')?>" alt="logo de la pagina" style="width: 65px; height: 60px; margin-left: 20px; margin-right: 20px; border: 2px solid chocolate; background-color: #eaf2e3; border-radius: 50px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item" style="margin-left: 20px; margin-right: 20px;">
          <a class="nav-link active" aria-current="page" style="color: #fff;" href="<?php echo base_url('quienes_somos'); ?>">Quiénes Somos</a>
        </li>
        <li class="nav-item" style="margin-left: 20px; margin-right: 20px;">
          <a class="nav-link" href="<?php echo site_url('acerca_de'); ?>">Acerca_de</a>
        </li>
        <li class="nav-item" style="margin-left: 20px; margin-right: 20px;">
          <a class="nav-link" href="<?php echo site_url('registrarse'); ?>">Registrarse</a>
        </li>
        <li class="nav-item" style="margin-left: 20px; margin-right: 20px;">
          <a class="nav-link" href="<?php echo site_url('login'); ?>">Login</a>
        </li>
        <li class="nav-item dropdown" style="margin-left: 20px; margin-right: 20px;">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu bg-success p-2" style="--bs-bg-opacity: .5;">
            <li><a class="dropdown-item" href="<?php echo base_url('servicios'); ?>">Consulta General</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('servicios'); ?>">Otros Servicios</a></li>
          </ul>
        </li>
        <li class="nav-item" style="margin-left: 20px; margin-right: 20px;">
          <a class="nav-link disabled" aria-disabled="true">Productos</a>
        </li>
      </ul>
      <form class="d-flex" role="search" style="margin-left: 20px; margin-right: 20px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>






