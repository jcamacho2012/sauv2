<?php
// incluimos las funciones
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/includes/sau-functions.php';

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
    <link rel="stylesheet" href="themes/css/datepicker.css">
    <link rel="stylesheet" href="themes/css/bootstrap-switch.css">
    <link rel="stylesheet" href="themes/css/style.css">
    
   
       
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
          <a class="navbar-brand" href="#"><i class="fa fa-user"></i> Bienvenido(a) <?php echo $_SESSION['name'];?></a>
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
<!--            <li><a href="dashboard"><i class="glyphicon glyphicon-th"></i> Inicio</a></li>
            <li><a href="followers"><i class="fa fa-user-plus"></i> Seguidores</a></li>
            <li><a href="allusers"><i class="fa fa-users"></i> Usuarios</a></li>
            <li><a href="feed"><i class="fa fa-commenting-o"></i> Publicaciones</a></li>-->
            <li><a href="config"><i class="fa fa-cog"></i> Configuración</a></li>
             <?php if($_SESSION['rank']==4){
                     echo "<li><a href=\"unAssig\"><i class=\"fa fa-tasks\"></i> Tareas Sin Asignar</a></li>
                     <li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>
                     <li><a href=\"done\"><i class=\"fa fa-check-circle\"></i> Terminadas</a></li>";
                             
                }else if($_SESSION['rank']==2){
                        echo "<li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Tareas Pendientes</a></li>
                         <li><a href=\"done\"><i class=\"fa fa-check-circle\"></i> Tareas Finalizadas</a></li>";
                }else{
                     echo "<li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>
                         <li><a href=\"done\"><i class=\"fa fa-check-circle\"></i> Terminadas</a></li>";
                }
            ?>
          </ul>

        </div>
       
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="mensaje">
          <!-- contenido -->
          <div class="col-sm-6" id="contenido">
              <div class="well configuracion-cube">
                <h4><i class="fa fa-tasks"></i> Mis Tareas</h4>               
                <div class="container">
                  <h2>Mis Tareas</h2>
                  <div>
                      <?php 
            if($_SESSION['rank']==2){
                  echo '<div class="row" style="padding:5px 0 0 15px;">
                            <div class="input-group"> <span class="input-group-addon">Buscar: </span>
                                <input id="filter" type="text" class="form-control" placeholder="buscar por solicitud, documento o empresa" style="width: 30em;" >';
                  echo listaUsuariosAsignar();
                  echo '        <button type="button" id="asignar" class="btn btn-toolbar" style="margin-left: 2em;">Asignar</button>
                                <button type="button" id="no_asignar" class="btn btn-toolbar" style="margin-left: .2em;">No Asignar</button>
                            </div>                            
                         </div>';
                        
              }else{
                  echo '<div class="input-group"> <span class="input-group-addon">Buscar: </span>
                            <input id="filter" type="text" class="form-control" placeholder="buscar por solicitud, documento o empresa">
                        </div>';
              }
                    ?>                        
                       <table class="table table-striped" data-height="299" data-click-to-select="true" data-single-select="true">
               	  	<thead>
                            <tr>
                                 <th class="hidden">activity</th>
                                 <th class="hidden">process</th>
                        <?php 
                        if($_SESSION['rank']==2){
                            echo '<th><input type="checkbox" id="selecctall" class="primary"/></th>';
                        }
                        ?>                                                                  
                                 <th>Solicitud</th>
                                 <th>Documento</th>
                                 <th>Empresa</th>
                      <?php 
                        if($_SESSION['rank']==2){
                            echo '                                              
                                 <th>Usuario</th>
                                 <th>Acciones</th>';
                        }else{
                            echo '<th>Acciones</th>';
                        }                                        
                        ?>
                            </tr>
               	  	</thead>
               	  	<tbody class="searchable">
               	  	  <?php  tareas($_SESSION['iduser'],$_SESSION['rank']);
                           ?>
               	  	</tbody>
                     </table>
                      <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['iduser']; ?>"/>
                      <input type="hidden" class="form-control" name="rank" value="<?php echo $_SESSION['rank']; ?>"/>
                      <input type="hidden" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>"/>
                      <input type="hidden" class="form-control" name="identity_card" value="<?php echo $_SESSION['identity_card']; ?>"/>
                  </div>                 
                </div>                             
              </div>
            </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="themes/js/jquery.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/bootstrap.min.js"></script>
    <!-- validation -->
    <script src="themes/js/jquery.validate.min.js"></script>
    <script src="themes/js/additional-methods.min.js"></script>
    <script src="themes/js/bootstrap-datepicker.js"></script>
    <script src="themes/js/bootstrap-switch.js"></script>
    <script src="themes/js/script.js"></script> 
    <style>
	li.list-group-item 
        {
            cursor: pointer;
            font-family: "Helvetica Neue","Helvetica","Arial","sans-serif";
        }
    </style>   
  </body>
</html>
