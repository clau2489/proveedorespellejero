<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/style.css" rel="stylesheet">
  <link href="vendor/fontawesome/css/all.css" rel="stylesheet">
</head>

<body>  
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="jumbotron">
          <h4 class="display-6">Genera un Nuevo Pedido!</h4>
          <p class="lead">Seleccioná el Cliente y carga el pedido que te hace</p>
          <hr class="my-4">
          <form action="procesos/agregarPedido.php" method="post">
            <label>¿En qué fecha vas a entregar el pedido? </label>
            <input class="form-control" type="date" name="fecha" required>
            <label>Selecciona el Cliente: </label>
            <select class="form-control" name="cliente" required>
              <?php
              require_once ("conexion/db.php");
              require_once ("conexion/conexion.php");
              $query_clientes=mysqli_query($conn,"select * from cliente order by nombre");  
              while($rw=mysqli_fetch_array($query_clientes)) {  
              ?>  
              <option><?php echo $rw['nombre']; ?></option>
              <?php
              }
              ?> 
            </select>
            <label>Producto a despachar: </label>
            <select class="form-control" name="producto" required>
              <option selected>Seleccionar..</option>
              <option value="Ricota - Chica">Ricota -- Chica</option>
              <option value="Ricota - Grande">Ricota -- Grande</option>
              <option value="Ricota - Bolsa">Ricota -- x Bolsa</option>
              <option value="Muzzarella - Barra">Muzzarella -- Barra</option>
              <option value="Muzzarella - Cilindro">Muzzarella -- Cilindro</option>
              <option value="Muzzarella - Plancha">Muzzarella -- Plancha</option>
              <option value="Tybos - Barra">Tybos -- Barra</option>
              <option value="Cremoso">Cremoso</option>
              <option value="Por Salut">Port Salut</option>
            </select>           
            <label>Precio x Kg: </label>
            <input class="form-control" type="number" name="precio" step="0.01" required>
            <label>Cantidad de Kg pedidos: </label>
            <input class="form-control" type="number" name="kilos" step="0.01" required>
            <button type="submit" class="btn btn-success btn-block mt-4" href="">Guardar pedido</button>        
          </form>           
        </div>        
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <a href="index.php" class="btn btn-primary btn-lg">Volver al Inicio</a>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>