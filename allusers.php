<?php
// incluimos las funciones
require_once 'includes/sau-functions.php';
if (isset($_SESSION['iduser'])){
}else{
  header("Location: logout");
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo SITETITLE; ?></title>

    <!-- SAU core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href="themes/style.css" rel="stylesheet">
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
            <?php isadmin(); ?>
            <li><a class="logout-btn" href="logout"><i class="fa fa-sign-in"></i> Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">
            <li><a href="dashboard"><i class="glyphicon glyphicon-th"></i> Inicio</a></li>
            <li><a href="followers"><i class="fa fa-user-plus"></i> Seguidores</a></li>
            <li class="active"><a href="allusers"><i class="fa fa-users"></i> Usuarios</a></li>
            <li><a href="feed"><i class="fa fa-commenting-o"></i> Publicaciones</a></li>
            <li><a href="config"><i class="fa fa-cog"></i> Configuración</a></li>           
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- contenido -->
          <?php

            if (isset($_POST['userfollow'])){
                seguirusuario($_POST['userfollow']);
            }

            if (isset($_POST['nofollow'])) {
                dejardeseguir($_POST['nofollow']);
            }

            allusers();
          ?>
          <!-- contenido -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="themes/js/jquery.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/bootstrap.min.js"></script>
  </body>
</html>
