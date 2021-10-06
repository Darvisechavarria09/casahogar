<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Animales</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo (base_url('public/styles/styles.css')) ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&display=swap" rel="stylesheet">
</head>
<body>
<header>
	<nav class="navbar navbar-expand-lg navbar-dark fondo mb-5">
  		<div class="container-fluid">
    		<a class=" navbar-brand fuente" href="<?= site_url('/') ?>">
				<i class="fas fa-paw"></i>
				Animal Planet</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        			<li class="nav-item">
        		  		<a class="nav-link active" aria-current="page" href="<?= site_url('/') ?>">Home</a>
        			</li>
        			<li class="nav-item">
        		  		<a class="nav-link active" href="<?= site_url('/productos/registro') ?>">Registro Productos</a>
        			</li>
                    <li class="nav-item">
        		  		<a class="nav-link active" href="<?= site_url('/animales/registro') ?>">Registro Animales</a>
        			</li>
      			</ul>
    		</div>
  		</div>
	</nav>
</header>

<section>
	<div class="container mt-5">
		<div class="row mt-5 d-flex justify-content-center">
			<div class="col-12 col-md-5">
            <h3 class="text-center fw-bold text-center fuente2">Registro de Animales ANIMAL PLANET</h3>
            <form>
                <div class="mb-3">
                  <label for="exampleFormControlInput1">Nombre:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Raza:</label>
                    <input type="text" class="form-control" name="foto">
                </div>
                <div class="mb-3">
                    <label class="form-label">Edad:</label>
                    <input type="number" min="0" class="form-control" name="precio">
                </div>
                <div class="mb-3">
                    <label for="form-label">Descripción:</label>
                    <textarea class="form-control"  name="descripcion" style="height: 100px"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Tipo de Animal:</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option selected>Seleccione una opción</option>
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>
                    <option value="3">Caballo</option>
                    <option value="4">Aves</option>
                    <option value="5">Reptíl</option>
                  </select>
                </div>
                <br>
                <div class="d-grid gap-2">
                    <button class="btn boton" type="submit">Guardar</button>
                </div>
            </form>
			</div>
            <div class="col-12 col-md-5 align-self-end">
                <img src="<?= base_url('public/img/productos2.jpg')?>" alt="imagen" class="img-fluid w-100">
            </div>
		</div>
	</div>
</section>
<br>
<br>
<footer class="fondoDos p-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-4">
					<h3 class="fw-bold">Horario de atención:</h3>
					<p>Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
					<br>
					<h3 class="fw-bold">Dirección:</h3>
					<p>Belén Altavista Calle 8A # 112-82 </p>
				</div>

				<div class="col-12 col-md-4">
					<h3 class="fw-bold">Ayudas:</h3>
					<p>Glosario / Correo remoto  /  Monitoreo y desempeño de uso del sitio web</p>
					<br>
					<h3 class="fw-bold">Protección de datos:</h3>
				<p>Protección de datos personales en el Municipio de Medellín </p>
				</div>

				<div class="col-12 col-md-4">
					<h1 class="fw-bold fuente"><span><i class="fas fa-paw"></i></span>ANIMAL PLANET</h1>
					<br>
					<i class="fab fa-facebook fa-3x"></i>
					<i class="fab fa-instagram fa-3x"></i>
					<i class="fab fa-youtube fa-3x"></i>
					<br>
					<p class="mt-4">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>

				</div>
			</div>
		</div>
	</footer>
<script src="https://kit.fontawesome.com/81dce82071.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>