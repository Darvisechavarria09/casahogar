<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aves en Adopción</title>
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


<main>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php foreach($animales as $animal):?>
                <?php if($animal["tipo"]== 3):?>
                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="<?= $animal["foto"] ?>" class="card-img-top" alt="foto">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $animal["nombre"] ?></h5>
                            <p class="card-text"><?= $animal["edad"] ?></p>
                            <p class="card-text"><?= $animal["descripción"] ?></p>
                            <a data-bs-toggle="modal" data-bs-target="#editar<?= $animal["id"]?>" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a data-bs-toggle="modal" data-bs-target="#confirmacion<?= $animal["id"]?>" href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                    <section>
                        <div class="modal fade" id="confirmacion<?= $animal["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="fondoPrincipal">
                                        <h5 class="mt-3 mb-3 text-center fuente">CASAHOGAR</h5>
                                        
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="fuente text-center">¿Estás seguro de eliminar este producto?</h5>
                                        <h5 class="fuente text-center"><?= $animal["id"] ?></h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="<?= site_url('/animales/eliminar/'.$animal["id"]) ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="modal fade" id="editar<?= $animal["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="fondoPrincipal">
                                        <h5 class="mt-3 mb-3 text-center fuente">CASAHOGAR</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                                <div class="col-3 al">
                                                    <img src="<?= $animal["foto"] ?>" alt="foto" class="img-fluid w-100">
                                                </div>
                                                <div class="col-9">
                                                    <form action="<?= site_url('/animales/editar/'.$animal["id"]) ?>" method="POST">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nombre Animal</label>
                                                            <input type="text" class="form-control" name="nombre" value="<?= $animal["nombre"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Edad</label>
                                                            <input type="number" class="form-control" name="edad" value="<?= $animal["edad"] ?>">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Descripción</label>
                                                            <input type="text" class="form-control" name="descripcion" value="<?= $animal["descripción"] ?>">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Editar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            <?php endif?>
            <?php endforeach?>
        </div>
    </div>
</main>






<script src="https://kit.fontawesome.com/81dce82071.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>