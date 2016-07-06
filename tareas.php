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
            <li><a href="allusers"><i class="fa fa-users"></i> Usuarios</a></li>
            <li><a href="feed"><i class="fa fa-commenting-o"></i> Publicaciones</a></li>
            <li><a href="config"><i class="fa fa-cog"></i> Configuración</a></li>
             <?php if($_SESSION['rank']==4){
                     echo "<li><a href=\"unAssig\"><i class=\"fa fa-tasks\"></i> Tareas Sin Asignar</a></li>
                     <li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>";
                             
                }else{
                     echo "<li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>";
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
                        <div class="input-group"> <span class="input-group-addon">Buscar: </span>
                            <input id="filter" type="text" class="form-control" placeholder="buscar por solicitud, documento o empresa">
                        </div>
                       <table class="table table-striped">
               	  	<thead>
               	  		<tr>                                    
               	  		  <th>Solicitud</th>
                                  <th>Documento</th>
                                  <?php 
                                        if($_SESSION['rank']==2){
                                            echo '<th>Empresa</th>
                                                  <th>Receptor</th>
                                                  <th>Receptor Revisado</th>
                                                  <th>Certificador</th>
                                                  <th>Certificador Revisado</th>';
                                        }else{
                                            echo '<th>Empresa</th>
                                                  <th>Acciones</th>';
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
                  </div>                 
                </div>                             
              </div>
            </div>

      
          <!-- configuracion -->
          

          <!-- contenido -->
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
   
    
    <style>
        #fountainG{
	position:relative;
	width:630px;
	height:76px;
	margin:auto;
        }

        .fountainG{
                position:absolute;
                top:0;
                background-color:rgb(58,160,204);
                width:76px;
                height:76px;
                animation-name:bounce_fountainG;
                        -o-animation-name:bounce_fountainG;
                        -ms-animation-name:bounce_fountainG;
                        -webkit-animation-name:bounce_fountainG;
                        -moz-animation-name:bounce_fountainG;
                animation-duration:1.5s;
                        -o-animation-duration:1.5s;
                        -ms-animation-duration:1.5s;
                        -webkit-animation-duration:1.5s;
                        -moz-animation-duration:1.5s;
                animation-iteration-count:infinite;
                        -o-animation-iteration-count:infinite;
                        -ms-animation-iteration-count:infinite;
                        -webkit-animation-iteration-count:infinite;
                        -moz-animation-iteration-count:infinite;
                animation-direction:normal;
                        -o-animation-direction:normal;
                        -ms-animation-direction:normal;
                        -webkit-animation-direction:normal;
                        -moz-animation-direction:normal;
                transform:scale(.3);
                        -o-transform:scale(.3);
                        -ms-transform:scale(.3);
                        -webkit-transform:scale(.3);
                        -moz-transform:scale(.3);
                border-radius:50px;
                        -o-border-radius:50px;
                        -ms-border-radius:50px;
                        -webkit-border-radius:50px;
                        -moz-border-radius:50px;
        }

        #fountainG_1{
                left:0;
                animation-delay:0.6s;
                        -o-animation-delay:0.6s;
                        -ms-animation-delay:0.6s;
                        -webkit-animation-delay:0.6s;
                        -moz-animation-delay:0.6s;
        }

        #fountainG_2{
                left:79px;
                animation-delay:0.75s;
                        -o-animation-delay:0.75s;
                        -ms-animation-delay:0.75s;
                        -webkit-animation-delay:0.75s;
                        -moz-animation-delay:0.75s;
        }

        #fountainG_3{
                left:158px;
                animation-delay:0.9s;
                        -o-animation-delay:0.9s;
                        -ms-animation-delay:0.9s;
                        -webkit-animation-delay:0.9s;
                        -moz-animation-delay:0.9s;
        }

        #fountainG_4{
                left:236px;
                animation-delay:1.05s;
                        -o-animation-delay:1.05s;
                        -ms-animation-delay:1.05s;
                        -webkit-animation-delay:1.05s;
                        -moz-animation-delay:1.05s;
        }

        #fountainG_5{
                left:315px;
                animation-delay:1.2s;
                        -o-animation-delay:1.2s;
                        -ms-animation-delay:1.2s;
                        -webkit-animation-delay:1.2s;
                        -moz-animation-delay:1.2s;
        }

        #fountainG_6{
                left:394px;
                animation-delay:1.35s;
                        -o-animation-delay:1.35s;
                        -ms-animation-delay:1.35s;
                        -webkit-animation-delay:1.35s;
                        -moz-animation-delay:1.35s;
        }

        #fountainG_7{
                left:473px;
                animation-delay:1.5s;
                        -o-animation-delay:1.5s;
                        -ms-animation-delay:1.5s;
                        -webkit-animation-delay:1.5s;
                        -moz-animation-delay:1.5s;
        }

        #fountainG_8{
                left:551px;
                animation-delay:1.64s;
                        -o-animation-delay:1.64s;
                        -ms-animation-delay:1.64s;
                        -webkit-animation-delay:1.64s;
                        -moz-animation-delay:1.64s;
        }



        @keyframes bounce_fountainG{
                0%{
                transform:scale(1);
                        background-color:rgb(58,160,204);
                }

                100%{
                transform:scale(.3);
                        background-color:rgb(255,255,255);
                }
        }

        @-o-keyframes bounce_fountainG{
                0%{
                -o-transform:scale(1);
                        background-color:rgb(58,160,204);
                }

                100%{
                -o-transform:scale(.3);
                        background-color:rgb(255,255,255);
                }
        }

        @-ms-keyframes bounce_fountainG{
                0%{
                -ms-transform:scale(1);
                        background-color:rgb(58,160,204);
                }

                100%{
                -ms-transform:scale(.3);
                        background-color:rgb(255,255,255);
                }
        }

        @-webkit-keyframes bounce_fountainG{
                0%{
                -webkit-transform:scale(1);
                        background-color:rgb(58,160,204);
                }

                100%{
                -webkit-transform:scale(.3);
                        background-color:rgb(255,255,255);
                }
        }

        @-moz-keyframes bounce_fountainG{
                0%{
                -moz-transform:scale(1);
                        background-color:rgb(58,160,204);
                }

                100%{
                -moz-transform:scale(.3);
                        background-color:rgb(255,255,255);
                }
        }
        
        
.funkyradio div {
  clear: both;
  overflow: hidden;
}

.funkyradio label {
  width: 50%;
  border-radius: 3px;
  border: 1px solid #D1D3D4;
  font-weight: normal;
  margin-left: 20em;
}

.funkyradio input[type="radio"]:empty,
.funkyradio input[type="checkbox"]:empty {
  display: none;
}

.funkyradio input[type="radio"]:empty ~ label,
.funkyradio input[type="checkbox"]:empty ~ label {
  position: relative;
  line-height: 2.5em;
  text-indent: 3.25em;
  margin-top: 2em;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.funkyradio input[type="radio"]:empty ~ label:before,
.funkyradio input[type="checkbox"]:empty ~ label:before {
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label {
  color: #888;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before,
.funkyradio input[type="checkbox"]:hover:not(:checked) ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

.funkyradio input[type="radio"]:checked ~ label,
.funkyradio input[type="checkbox"]:checked ~ label {
  color: #777;
}

.funkyradio input[type="radio"]:checked ~ label:before,
.funkyradio input[type="checkbox"]:checked ~ label:before {
  content: '\2714';
  text-indent: .9em;
  color: #333;
  background-color: #ccc;
}

.funkyradio input[type="radio"]:focus ~ label:before,
.funkyradio input[type="checkbox"]:focus ~ label:before {
  box-shadow: 0 0 0 3px #999;
}

.funkyradio-success input[type="radio"]:checked ~ label:before {
  color: #fff;
  background-color: #5cb85c;
}

.funkyradio-danger input[type="radio"]:checked ~ label:before{
  color: #fff;
  background-color: #d9534f;
}

.funkyradio-warning input[type="radio"]:checked ~ label:before{
  color: #fff;
  background-color: #f0ad4e;
}
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            (function($) {

              $('#filter').keyup(function() {

                var rex = new RegExp($(this).val(), 'i');
                $('.searchable tr').hide();
                $('.searchable tr').filter(function() {
                  return rex.test($(this).text());
                }).show();
              })
            }(jQuery));
          });
        
        
        $("#aprobar").click(function(){
            var num= $("input[name=req_no]").val();
            var id= $("input[name=id]").val();
            var opcion=1;
            $.ajax({
            url: 'buscar.php',
            method: 'POST',
            data: { reqno: num, opcion:opcion,id:id}
                }).success(function(response) {                   
                    // Show the dialog
                    
                    $('#mensaje').html(response);// no sale mensaje de confirmacion 
                    bootbox
                        .dialog({
                            title: 'Edit the user profile',
                            message: $('#userForm'),
                            show: false // We will show it manually later
                        })
                        .on('shown.bs.modal', function() {
                            $('#userForm')
                                .show()                             // Show the login form
                                .formValidation('resetForm'); // Reset form
                        })
                        .on('hide.bs.modal', function(e) {
                            // Bootbox will remove the modal (including the body which contains the login form)
                            // after hiding the modal
                            // Therefor, we need to backup the form
                            $('#userForm').hide().appendTo('body');
                        })
                        .modal('show');
                });
        });
        
        
         $('.hacer').on('click', function() {
        // Get the record's ID via attribute
        var req_no = $(this).attr('data-id');
        var id= $("input[name=id]").val();
        var opcion=2;
        $("#contenido").empty();
        $('.greyBox').after("<div class='redBox'>Iron man</div>");
        $("#contenido").append("<div id='fountainG'>\n\
                                    <div id='fountainG_1' class='fountainG'></div>\n\
                                    <div id='fountainG_2' class='fountainG'></div>\n\
                                    <div id='fountainG_3' class='fountainG'></div>\n\
                                    <div id='fountainG_4' class='fountainG'></div>\n\
                                    <div id='fountainG_5' class='fountainG'></div>\n\
                                    <div id='fountainG_6' class='fountainG'></div>\n\
                                    <div id='fountainG_7' class='fountainG'></div>\n\
                                    <div id='fountainG_8' class='fountainG'></div>\n\
                                </div>");
        
        $.ajax({
            url: 'buscar.php',
            method: 'POST',           
            data: { reqno: req_no,opcion:opcion,id:id}
        }).success(function(response) {
            // Populate the form fields with the data returned from server
//              var response = $.parseJSON(response);
              $('#fountainG').remove();
              $('#contenido').append(response);
              $('#contenido').append("<div class='panel panel-primary'>\n\
                                            <div class='panel-heading'>\n\
                                                <h3>Acciones</h3>\n\
                                            </div>\n\
                                            <div class='panel-body'>\n\
                                                <div class='funkyradio'>\n\
                                                     <div class='funkyradio-success'>\n\
                                                        <input type='radio' name='radio' id='aprobar'/>\n\
                                                        <label for='aprobar'>Aprobar</label>\n\
                                                    </div>\n\
                                                   <div class='funkyradio-warning'>\n\
                                                        <input type='radio' name='radio' id='subsanar' />\n\
                                                        <label for='subsanar'>Subsanar</label>\n\
                                                    </div>\n\
                                                    <div class='funkyradio-danger'>\n\
                                                        <input type='radio' name='radio' id='rechazar' />\n\
                                                        <label for='rechazar'>Rechazar</label>\n\
                                                    </div>\n\
                                                </div>\n\
                                            </div>\n\
                                    </div>");


            // Show the dialog
            bootbox
                .dialog({
                    title: 'Edit the user profile',
                    message: $('#userForm'),
                    show: false // We will show it manually later
                })
                .on('shown.bs.modal', function() {
                    $('#userForm')
                        .show()                             // Show the login form
                        .formValidation('resetForm'); // Reset form
                })
                .on('hide.bs.modal', function(e) {
                    // Bootbox will remove the modal (including the body which contains the login form)
                    // after hiding the modal
                    // Therefor, we need to backup the form
                    $('#userForm').hide().appendTo('body');
                })
                .modal('show');
        })
                .fail(function(response){
                    $('#userForm').append('<h1>No existe conexion con ecuapass</h1>');
                });
    });
    
     $('.liberar').on('click', function() {
        // Get the record's ID via attribute
        var req_no = $(this).attr('data-id');       
        var opcion=3;
        
        $.ajax({
            url: 'buscar.php',
            method: 'POST',           
            data: { reqno: req_no,opcion:opcion}
        }).success(function(response) {
            // Populate the form fields with the data returned from server
            alert('Solicitud fue liberada');
            var pathname = window.location.pathname;
            window.location.replace(pathname); 
        });
    });
        
    </script>
  </body>
</html>
