<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <style>    body {
    font-family: 'Courier New', Courier, monospace;
    text-align: center;
    margin: 0;
    padding: 0;
    background: linear-gradient(45deg, #f7e1c1, #f0d6ab);
}
.container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px 0px #000000;
            margin-top: 30px;
        }

        h2 {
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        .table {
            width: 100%;
            margin-top: 20px;
        }

        .table th {
            background-color: #4CAF50;
            color: white;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table td.actions {
            text-align: center;
        }

        
</style>  
    <a class="navbar-brand" href="#">Navbar scroll</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=<?=base_url('Juegos/index1')?>>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Juegos/agregar')?>">Juegos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Juegos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/Juegos/mostrar1');?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/Juegos/buscar1');?>">Buscar</a></li>
        </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reseñas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/reseñas/mostrar1');?>">Mostrar</a></li>
        </ul>

        <li class="nav-item dropdown">
        <a class="nav-link" href="<?=base_url('index.php/Info/acerca');?>">Acerca de</a>
    
        
     
        </li>
      </ul>
      
    </div>
  </div>
  <a class="nav-link" href="<?= base_url('index.php/usuario/login'); ?>">Cerrar sesión</a>
</nav>

