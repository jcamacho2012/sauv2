<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/admin/includes/admin.functions.php';

if (isset($_SESSION['iduser'])) {
   if ($_SESSION['rank'] <> 2) {
	header('Location: logout');
   }
}else{
    header('Location: logout');
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo SITETITLE; ?></title>

    <!-- SAU core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link  href="../themes/css/morris.css" rel="stylesheet">
    <link href="../themes/style.css" rel="stylesheet">
    <link href="admin.css" rel="stylesheet">
    <?php getstyle(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="dashboard-panel">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-clone animated infinite flash"></i> SAU v2</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="logout-btn" href="../dashboard"><i class="fa fa-cubes"></i> Escritorio</a></li>
            <li><a class="logout-btn" href="logout"><i class="fa fa-sign-in"></i> Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">
            <li><a href="index.php"><i class="glyphicon glyphicon-th"></i> Inicio</a></li>
            <li class="active"><a href="usuarios"><i class="fa fa-users"></i> Usuarios</a></li>
<!--            <li><a href="seguidores"><i class="fa fa-user-plus"></i> Seguidores</a></li>
            <li><a href="publicaciones"><i class="fa fa-commenting-o"></i> Publicaciones</a></li>-->
            <li><a href="configuration"><i class="fa fa-cog fa-spin"></i> Configuración</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- contenido -->

             <?php

              if (isset($_POST['nombre']) || isset($_POST['email']) || isset($_POST['public']) || isset($_POST['rango']) || isset($_POST['ciudad'])) {
                   cambiardatos($_POST['nombre'],$_POST['email'],$_POST['public'],$_POST['rango'],$_POST['ciudad'],$_POST['userid']);
              }

              if (isset($_POST['nueva2'])) {
                  cambiarpassword($_POST['nueva2'],$_POST['userid']);
              }

              if (isset($_POST['eliminarusuario'])) {
                  eliminarusuario($_POST['eliminarusuario']);
              }

              if (isset($_POST['nuevousuario'])) {
                 newusuario($_POST['nombre'],$_POST['apellido'],$_POST['usuario'],$_POST['email'],$_POST['password'],$_POST['cedula'],$_POST['profile'],$_POST['rank'],$_POST['ciudad']);
              }
              
              if (isset($_POST['deshabusuarioid'])) {
                 deshabusuario($_POST['deshabusuarioid'],$_POST['deshabusuarioestado'],$_POST['city']);
              }

              ?>
             

                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#myModal">
                   <i class="glyphicon glyphicon-th-large"></i> Nuevo Usuario
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-user"></i> Nuevo Usuario</h4>
                        </div>
                        <div class="modal-body">
                        <form id="usunew" method="POST" action="">
                            
                        <label>Nombre:</label>
                        <input class="form-control" type="text" name="nombre" >
                        <label>Apellido:</label>
                        <input class="form-control" type="text" name="apellido" >
                        <label>Usuario:</label>
                        <input class="form-control" type="text" name="usuario" >
                        <label>Email:</label>
                        <input class="form-control" type="text" name="email" >
                        <label>Contraseña:</label>
                        <input class="form-control" type="password" name="password" >
                        <label>Cédula:</label>
                        <input class="form-control" type="text" name="cedula" >     
                        <label>Perfil Publico:</label>
                        <select class="form-control" name="profile">
                          <option value="1">SI</option>
                          <option value="2">NO</option>
                        </select>  
                        <label>Rango:</label>
                        <select class="form-control" name="rank">
                          <?php 
                                getroles();
                          ?>
                           
                        </select>
                        <label>Ciudad:</label>
                         <select class="form-control" name="ciudad">
                            <option value="GYE">GUAYAQUIL</option>
                            <option value="MNT">MANTA</option>
                        </select>
                        <input type="hidden" name="nuevousuario" value="1" >

                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Crear Usuario</button>
                          </form>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>

             <!-- ultimos posts -->
             <div class="col-sm-12 paddingone">
               <div class="well graficas">
               	

               	  <table class="table table-striped">
                      <caption >Usuarios Habilitados</caption>
               	  	<thead>
               	  		<tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Perfil Publico</th>                                   
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Ciudad</th>
                                    <th>Acciones</th>
               	  		</tr>
               	  	</thead>
               	  	<tbody>
               	  	  <?php userslisthabilitados(); ?>
               	  	</tbody>
               	  </table>
                   <table class="table table-striped">
                      <caption >Usuarios Deshabilitados</caption>
               	  	<thead>
               	  		<tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Perfil Publico</th>                                   
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Ciudad</th>
                                    <th>Acciones</th>
               	  		</tr>
               	  	</thead>
               	  	<tbody>
               	  	  <?php userslistdeshabilitados(); ?>
               	  	</tbody>
               	  </table>
                  
               </div>             	
             </div>             
             <!-- ultimos posts -->

            <?php
            if (isset($_POST['editarusuario'])) {
                 editarusuario($_POST['editarusuario']);
            }?>



          <!-- contenido -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="../themes/js/jquery.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../themes/js/bootstrap.min.js"></script>
    <!-- validation -->
    <script src="../themes/js/jquery.validate.min.js"></script>
    <script src="../themes/js/additional-methods.min.js"></script>
    <script type="text/javascript">
        $("#usunew").validate({
          rules: {
            nombre: "required",
            password: "required",
            email: {
              required: true,
              email: true
            }
          }
        });
    </script>

  </body>
</html>
