<?php

//--------------------------------------------------------------
//  _____  __  __  ____                __                   
// /\___ \/\ \/\ \/\  _`\             /\ \                  
// \/__/\ \ \ \_\ \ \ \/\_\    ___    \_\ \     __    ____  
//    _\ \ \ \  _  \ \ \/_/_  / __`\  /'_` \  /'__`\ /',__\ 
//   /\ \_\ \ \ \ \ \ \ \L\ \/\ \L\ \/\ \L\ \/\  __//\__, `\
//   \ \____/\ \_\ \_\ \____/\ \____/\ \___,_\ \____\/\____/
//    \/___/  \/_/\/_/\/___/  \/___/  \/__,_ /\/____/\/___/ 
// 
//      http://www.jhcodes.com/ - SAU v2.0 Beta 1
//                jessus.herrera@hotmail.com
//
//--------------------------------------------------------------

require_once 'admin/includes/login.class.php';



function getdata(){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
$SQL = "SELECT * FROM users";
$sentence = $conexion -> prepare($SQL);
$sentence -> execute();
$results = $sentence -> fetchAll();

if (empty($results)) {
	# code...
}else{
	foreach ($results as $key) {
		echo $key['name'].'<p></p>';
	}
}	
}


function getstyle(){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
	$SQL = "SELECT * FROM sau";
	$sentence = $conexion -> prepare($SQL);
	$sentence -> execute();
	$results = $sentence -> fetchAll();
	if (empty($results)) {
	}else{
		foreach ($results as $key){
			echo'<link href="themes/style-color-'.$key['style'].'.css" rel="stylesheet">';
		}
	}
}


function geterror(){
  echo'<!-- alert -->
<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong> Error! </strong> Tus datos de acceso son incorrectos, por favor revisarlos e intentarlo de nuevo. </div>
<!-- alert -->';
}


function fechastring($fecha){
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array(" ","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$year = substr($fecha,0,4);
$month = substr($fecha, 5, 2);
$day = substr($fecha, 8, 2);
$time = date('h:i A',strtotime(substr($fecha, 11,8)));
$complete = '<p><i class="glyphicon glyphicon-time"></i> '.$dias[$day]." ".$day." de ".$meses[(int)$month]. " del ".$year.'</p>';
return $complete;
}

function tareas($iduser,$rank){
    // conexon a base de datos
    $conexion = Conexion::singleton_conexion();

    // consulta a base de datos
    if($rank==4){
         $SQL = "SELECT req_no,dcm_no,empresa FROM tramite where certificador_asignado=:iduser and certificador_revisado='f'";
    }else if($rank==2){
          $SQL = "SELECT req_no,dcm_no,empresa,receptor_asignado,receptor_revisado,certificador_asignado,certificador_revisado FROM tramite";
    }else{
        $SQL = "SELECT req_no,dcm_no,empresa FROM tramite where receptor_asignado=:iduser and receptor_revisado='f'";
    }

	$sentence = $conexion -> prepare($SQL);
        if($rank!=2){
             $sentence -> bindParam(':iduser', $iduser);
        }
       
	$sentence -> execute();
	$results = $sentence -> fetchAll();
	if (empty($results)) {
	}else{
		foreach ($results as $key){
                echo'
                  <tr>
                    <td>'.$key['req_no'].'</td>
                    <td>'.$key['dcm_no'].'</td> 
                    <td>'.$key['empresa'].'</td>';
                if($rank==2){
                    echo '<td>'.buscarNombreXId($key['receptor_asignado']).'</td>
                          <td>'.$key['receptor_revisado'].'</td> 
                          <td>'.buscarNombreXId($key['certificador_asignado']).'</td>
                          <td>'.$key['certificador_revisado'].'</td> ';
                }
                echo ' 
                    <td>';
                        if($rank!=2){
                            echo '<button type="button" data-id="'.$key['req_no'].'" class="btn btn-primary editButton">Hacer</button>';
                        }
               
                        if($rank==4){
                             echo'<button type="button" data-id="'.$key['req_no'].'" class="btn btn-warning liberar">Liberar</button>';
                        }                                                
                   echo' <td>
                  </tr>';
		}
	}	
}

function buscarNombreXId($id){
    $conexion = Conexion::singleton_conexion();
    
    // consulta a base de datos
    
	$SQL = "SELECT name FROM users where iduser=:id";
	$sentence = $conexion -> prepare($SQL);  
        $sentence -> bindParam(':id', $id);        
	$sentence -> execute();
	$results = $sentence -> fetchAll();

        if (empty($results)) {
           return 'Sin Asignar';
	}else{
		foreach ($results as $key){
                    return $key['name'];
		}
	}
}

function tareaSinAsignar($ciudad){
    // conexon a base de datos
    $conexion = Conexion::singleton_conexion();
     $myFile = "ciudad.txt";
    $fh = fopen($myFile, 'w') or die("can't open file");
    fwrite($fh, $ciudad);
     fclose($fh);
    // consulta a base de datos
    
	$SQL = "SELECT req_no,dcm_no,empresa FROM tramite where certificador_asignado=0 and receptor_revisado='t' and ciudad=:ciudad";
	$sentence = $conexion -> prepare($SQL);  
        $sentence -> bindParam(':ciudad', $ciudad);
	$sentence -> execute();
	$results = $sentence -> fetchAll();
	if (empty($results)) {
	}else{
		foreach ($results as $key){
                echo'
                  <tr>
                    <td>'.$key['req_no'].'</td>
                    <td>'.$key['dcm_no'].'</td>
                    <td>'.$key['empresa'].'</td> 
                    <td>
                        <button type="button" data-id="'.$key['req_no'].'" class="btn btn-default editButton">Tomar/Revisar</button>                        
                    <td>
                  </tr>';
		}
	}	
}

function aprobar($reqno,$rank){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();


// consulta a base de datos
if($rank==4){
    $SQL = "UPDATE tramite SET mdf_dt= now(),certificador_revisado='t' WHERE req_no = :reqno";
}else{
    $SQL = "UPDATE tramite SET mdf_dt= now(),receptor_revisado='t' WHERE req_no = :reqno";
}

$sentence = $conexion -> prepare($SQL);
$sentence -> bindParam(':reqno', $reqno);

$sentence -> execute();

echo'
  <!-- alertas -->
  <div class="col-md-12">
  <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
   <strong><i class="fa fa-check"></i> Correcto! </strong> Tus datos han sido actualizados correctamente, estos datos puedes actualizarlos cuantas veces quieras. </div>            
  </div>
  <!-- alertas -->
';  
}

function liberar($reqno){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();


// consulta a base de datos
    $SQL = "UPDATE tramite SET certificador_asignado=0 WHERE req_no = :reqno";
    $sentence = $conexion -> prepare($SQL);
    $sentence -> bindParam(':reqno', $reqno);

    $sentence -> execute();

    echo'
      <!-- alertas -->
      <div class="col-md-12">
      <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
       <strong><i class="fa fa-check"></i> Correcto! </strong> Tus datos han sido actualizados correctamente, estos datos puedes actualizarlos cuantas veces quieras. </div>            
      </div>
      <!-- alertas -->
    ';  
}

function consultaxid($reqno,$id){
    // conexon a base de datos
  
    $conexion = Conexion::singleton_conexion();

    // consulta a base de datos
        $SQL = "SELECT req_no,dcm_no FROM tramite WHERE req_no = :reqno";
        $sentence = $conexion -> prepare($SQL);
        $sentence -> bindParam(':reqno', $reqno);
        $sentence -> execute();
        $results = $sentence -> fetchAll();
        $response = array();
	if (empty($results)) {
	}else{
		foreach ($results as $key){                 
                   $response['req_no'] = $key['req_no'];
                   $response['dcm_no'] = $key['dcm_no'];   
                   
		}
	}
    //actualizar id del usuario que toma la solicitud sin asignar
        actualizarId($reqno, $id);
        return json_encode($response);
}

function actualizarId($reqno,$id){
    // conexon a base de datos
  
    $conexion = Conexion::singleton_conexion();
    // consulta a base de datos
        $SQL = "UPDATE tramite SET certificador_asignado= :id WHERE req_no = :reqno";
        $sentence = $conexion -> prepare($SQL);
        $sentence -> bindParam(':reqno', $reqno);
        $sentence -> bindParam(':id', $id);
        $sentence -> execute();

}


function comentarios($publicacion){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
	$SQL = "SELECT * FROM comments,users,posts WHERE comments.post = :post AND posts.idpost = :post AND users.iduser = comments.user ORDER BY comments.idcomment DESC";
	$sentence = $conexion -> prepare($SQL);
	$sentence -> bindParam(':post',$publicacion);
	$sentence -> execute();
	$results = $sentence -> fetchAll();
	if (empty($results)) {
	}else{
		foreach ($results as $key){


echo '
    				<div class="message-item comentario" id="comentario-'.$key['idcomment'].'">
						<div class="message-inner">
							<div class="message-head clearfix">
              <div class="message-icon pull-left"><a><i class="fa fa-comments-o"></i></a></div>
								<div class="user-detail">
									<h5 class="handle">'.$key['name'].'</h5>
									<div class="post-time">
                      '.fechastring($key['datecomment']).'
									</div>
                 ';

                  if ($key['userpost'] == $_SESSION['iduser']){
                    echo'
                 <div class="btn-group buttons-content" role="group">
                   <form class="operacion" method="POST" action="">
                     <input type="hidden" name="delcomment" value="'.$key['idcomment'].'" >
                     <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Eliminar Comentario</button>
                   </form>
                 </div>
                    ';
                  }elseif ($key['user'] == $_SESSION['iduser']){
                    echo'
                 <div class="btn-group buttons-content" role="group">
                   <form class="operacion" method="POST" action="">
                     <input type="hidden" name="delcomment" value="'.$key['idcomment'].'" >
                     <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> Eliminar Comentario</button>
                   </form>
                 </div>
                    ';
                  }else{
                    echo'';
                  }

								echo'</div>
							</div>
							<div class="qa-message-content">
								<p>'.$key['comment'].'</p>
							</div>
			            </div>   
					</div>
';

		}
	}
}

function publicaciones(){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
	$SQL = "SELECT * FROM posts,users WHERE posts.userpost = :user AND users.iduser = :user ORDER BY posts.idpost DESC";
	$sentence = $conexion -> prepare($SQL);
	$sentence -> bindParam(':user', $_SESSION['iduser']);
	$sentence -> execute();
	$results = $sentence -> fetchAll();
	if (empty($results)) {
	}else{
		foreach ($results as $key){


	     echo'
          <div class="message-item" id="post-'.$key['idpost'].'">
            <div class="message-inner">
              <div class="message-head clearfix">
                <div class="message-icon pull-left"><a href="publication'.$key['permalink'].'"><i class="fa fa-file-text-o"></i></a></div>
                <div class="user-detail">
                  <h5 class="handle">'.$key['name'].'</h5>
                  <div class="post-time">
                    '.fechastring($key['datepost']).'
                  </div>';

       if ($key['iduser'] == $_SESSION['iduser']) {
          echo '
               <div class="btn-group buttons-content" role="group" aria-label="">
                 <form class="operacion" method="POST" action=""> 
                 <a class="btn btn-xs btn-default" href="publication'.$key['permalink'].'">
                   <i class="fa fa-angle-double-down"></i> Comentarios
                  </a>
                  
                  <input type="hidden" name="borrarpost" value="'.$key['idpost'].'" >
                  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Eliminar</button>
                  </form>
               </div>
         ';
       }else{
          echo '
               <div class="btn-group buttons-content" role="group" aria-label="">
                  <a class="btn btn-xs btn-default" href="publication'.$key['permalink'].'">
                   <i class="fa fa-angle-double-down"></i> Comentarios
                  </a>
               </div>
         ';
       }

                echo'</div>
              </div>
              <div class="qa-message-content">
                <p>'.$key['post'].'</p>
              </div>
           </div>
          </div>
		';
		}
	}
}


function singlepublicacion($permalink){
  // conexon a base de datos
  $conexion = Conexion::singleton_conexion();

  // consulta a base de datos
	$SQL = "SELECT * FROM posts,users WHERE posts.permalink = :permalink AND users.iduser = posts.userpost LIMIT 1";
	$sentence = $conexion -> prepare($SQL);
	$sentence -> bindParam(':permalink', $permalink);
	$sentence -> execute();
	$results = $sentence -> fetchAll();
	if (empty($results)) {

      echo '
      <h4>No hay resultados</h4>
      <a href="dashboard" class="btn btn-success" ><i class="fa fa-reply"></i> Volver al Escritorio</a>
      ';

	}else{
		foreach ($results as $key){
	     echo'
          <div class="message-item" id="post-'.$key['idpost'].'">
            <div class="message-inner">
              <div class="message-head clearfix">
                <div class="message-icon pull-left"><a href="publication'.$key['permalink'].'"><i class="fa fa-file-text-o"></i></a></div>
                <div class="user-detail">
                  <h5 class="handle">'.$key['name'].'</h5>
                  <div class="post-time">
                    '.fechastring($key['datepost']).'
                  </div>';

       if ($key['iduser'] == $_SESSION['iduser']) {
          echo '
               <div class="btn-group buttons-content" role="group" aria-label="">
                 <form class="operacion" method="POST"> 
                 <button class="btn btn-xs btn-default" type="button" data-toggle="collapse" data-target="#commentpost'.$key['idpost'].'" aria-expanded="false" aria-controls="collapse">
                   <i class="fa fa-angle-double-down"></i> Comentarios
                  </button>
                  
                  <input type="hidden" name="borrarpost" value="'.$key['idpost'].'" >
                  <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Eliminar</button>
                  </form>
               </div>
         ';
       }else{
          echo '
               <div class="btn-group buttons-content" role="group" aria-label="">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="collapse" data-target="#commentpost'.$key['idpost'].'" aria-expanded="false" aria-controls="collapse">
                   <i class="fa fa-angle-double-down"></i> Comentarios
                  </button>
               </div>
         ';
       }

               echo' </div>
              </div>
              <div class="qa-message-content">
                <p>'.$key['post'].'</p>
              </div>
           </div>

              <!-- comentarios -->
              <div class="collapse in text-right" id="commentpost'.$key['idpost'].'">
                 
                 <div class="publicaciones">
                 <form method="POST" action="comment">
                 <textarea class="form-control" rows="1" name="comment"></textarea><p></p>
                 <input type="hidden" name="post" value="'.$key['idpost'].'" >
                 <input type="hidden" name="permalink" value="'.$key['permalink'].'" >
                 <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-comment-o"></i> Comentar</button>
                 </form>
                 </div>

          <!-- comentarios -->
          ';

          comentarios($key['idpost']);
          
          echo'
          <!-- comentarios -->

              </div>
              <!-- comentarios -->
          </div>
		';
		}
	}
}


function allusers(){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
  $SQL = "SELECT * FROM users WHERE public = 1 AND iduser <> :mysession ";
  $sentence = $conexion -> prepare($SQL);
  $sentence -> bindParam(':mysession', $_SESSION['iduser']);
  $sentence -> execute();
  $results = $sentence -> fetchAll();
  if (empty($results)) {
  }else{
    foreach ($results as $key){
      echo'
        <div class="col-sm-3 col-xs-6 text-center">
            <div id="usuario-cube-'.$key['iduser'].'" class="user-cube">
            <i class="fa fa-user fa-4x"></i>
            <h5>'.$key['name'].'</h5>
            <a href="perfil'.$key['profile'].'" class="btn btn-xs btn-block btn-warning"><i class="fa fa-search"></i> Ver Perfil</a><p></p>
            ';

             losigueono($key['iduser']);

            echo'
            </div>
        </div>
      ';
    }
  }
}


function seguidores(){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
  $SQL = "SELECT * FROM users,followers WHERE users.iduser = followers.friend AND followers.user = :mysession";
  $sentence = $conexion -> prepare($SQL);
  $sentence -> bindParam(':mysession', $_SESSION['iduser']);
  $sentence -> execute();
  $results = $sentence -> fetchAll();
  if (empty($results)) {

      echo '
      <h4>No hay resultados</h4>
      <a href="dashboard" class="btn btn-success" ><i class="fa fa-reply"></i> Volver al Escritorio</a>
      ';
    
  }else{
    foreach ($results as $key){
      echo'
        <div class="col-sm-3 col-xs-6 text-center">
            <div id="usuario-cube-'.$key['iduser'].'" class="user-cube">
            <i class="fa fa-user fa-4x"></i>
            <h5>'.$key['name'].'</h5>
            <a href="perfil'.$key['profile'].'" class="btn btn-xs btn-block btn-warning"><i class="fa fa-search"></i> Ver Perfil</a><p></p>
            ';

             losigueono($key['iduser']);

            echo'
            </div>
        </div>
      ';
    }
  }
}



function losigueono($usuario){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
$SQL = "SELECT * FROM followers WHERE friend = :friend AND user = :user";
$sentence = $conexion -> prepare($SQL);
$sentence -> bindParam(':friend',$usuario);
$sentence -> bindParam(':user',$_SESSION['iduser']);
$sentence -> execute();
$results = $sentence -> fetchAll();
if (empty($results)) {

echo '
<form method="POST" action="">
  <input type="hidden" name="userfollow" value="'.$usuario.'">
  <button type="submit" class="btn btn-xs btn-block btn-success"><i class="fa fa-user-plus"></i> Seguir Usuario</button>
</form>
';

  }else{

echo'
<form method="POST" action="">
  <input type="hidden" name="nofollow" value="'.$usuario.'">
  <button type="submit" class="btn btn-xs btn-block btn-danger"><i class="fa fa-user-times"></i> Dejar de Seguir</button>
</form>
';


  }
}


function seguirusuario($usuario){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// pues la fecha para saber desde cuando lo sigue xD
$fecha = date('Y-m-d');

// consulta a base de datos 
$insertfollow = "INSERT INTO followers(friend,user,datefollow) VALUES (:friend,:user,:datefollow)";
$updasentence = $conexion -> prepare($insertfollow);
$updasentence -> bindParam(':friend',$usuario);
$updasentence -> bindParam(':user',$_SESSION['iduser']);
$updasentence -> bindParam(':datefollow',$fecha);
$updasentence -> execute();

header('Location: followers');

}


function dejardeseguir($usuario){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

$SQL = "DELETE FROM followers WHERE friend = :friend AND user = :user";
$notfollow = $conexion -> prepare($SQL);
$notfollow -> bindParam(':friend',$usuario);
$notfollow -> bindParam(':user',$_SESSION['iduser']);
$notfollow -> execute();

header('Location: followers');

}



function profiler($permalink){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
  $SQL = "SELECT * FROM users WHERE profile = :profile LIMIT 1";
  $sentence = $conexion -> prepare($SQL);
  $sentence -> bindParam(':profile', $permalink);
  $sentence -> execute();
  $results = $sentence -> fetchAll();
  if (empty($results)) {
         echo '<h1>Sin Resultados</h1>';
  }else{
    foreach ($results as $key){

         echo '<h1><i class="fa fa-male"></i> '.$key['name'].'</h1>';
         publicacionperfil($key['iduser']);

    }
  }
}




function publicacionperfil($usuario){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
  $SQL = "SELECT * FROM posts,users WHERE posts.userpost = :user AND users.iduser = :user ORDER BY posts.idpost DESC";
  $sentence = $conexion -> prepare($SQL);
  $sentence -> bindParam(':user', $usuario);
  $sentence -> execute();
  $results = $sentence -> fetchAll();
  if (empty($results)) {
       echo '<h3><i class="fa fa-times"></i> Este usuario no tiene ninguna publicación</h3>';
  }else{
    foreach ($results as $key){

       

       echo'
          <div class="message-item" id="post-'.$key['idpost'].'">
            <div class="message-inner">
              <div class="message-head clearfix">
                <div class="message-icon pull-left"><a href="publication'.$key['permalink'].'"><i class="fa fa-file-text-o"></i></a></div>
                <div class="user-detail">
                  <h5 class="handle">'.$key['name'].'</h5>
                  <div class="post-time">
                    '.fechastring($key['datepost']).'
                  </div>';

       if ($key['iduser'] == $_SESSION['iduser']) {
          echo '
               <div class="btn-group buttons-content" role="group" aria-label="">
                 <form class="operacion" method="POST" action=""> 
                 <button class="btn btn-xs btn-default" type="button" data-toggle="collapse" data-target="#commentpost'.$key['idpost'].'" aria-expanded="false" aria-controls="collapse">
                   <i class="fa fa-angle-double-down"></i> Comentarios
                  </button>
                  
                  <input type="hidden" name="publicacion" value="'.$key['idpost'].'" >
                  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Eliminar</button>
                  </form>
               </div>
         ';
       }else{
          echo '
               <div class="btn-group buttons-content" role="group" aria-label="">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="collapse" data-target="#commentpost'.$key['idpost'].'" aria-expanded="false" aria-controls="collapse">
                   <i class="fa fa-angle-double-down"></i> Comentarios
                  </button>
               </div>
         ';
       }


                echo'</div>
              </div>
              <div class="qa-message-content">
                <p>'.$key['post'].'</p>
              </div>
           </div>

              <!-- colapsador -->
              <div class="collapse text-right" id="commentpost'.$key['idpost'].'">

               <div class="publicaciones">
                 <form method="POST" action="comment">
                 <textarea class="form-control" rows="1" name="comment"></textarea><p></p>
                 <input type="hidden" name="post" value="'.$key['idpost'].'" >
                 <input type="hidden" name="permalink" value="'.$key['permalink'].'" >
                 <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-comment-o"></i> Comentar</button>
                 </form>
               </div>

          <!-- comentarios -->';
          comentarios($key['idpost']);
          echo'
          <!-- comentarios -->

              </div>
              <!-- colapsador -->
          </div>
    ';
    }
  }
}


function misdatos(){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
  $SQL = "SELECT * FROM users WHERE iduser = :iduser LIMIT 1";
  $sentence = $conexion -> prepare($SQL);
  $sentence -> bindParam(':iduser', $_SESSION['iduser']);
  $sentence -> execute();
  $results = $sentence -> fetchAll();
  if (empty($results)) {
  }else{
    foreach ($results as $key){
        
        if ($key['public'] == 1) {
          $publico = '<option value="1">SI</option><option value="2">NO</option>';
        }else{
          $publico = '<option value="2">NO</option><option value="1">SI</option>';
        }

        echo'
                  <label>Nombre:</label>
                  <input class="form-control" type="text" name="nombre" value="'.$key['name'].'" >
                  <label>Correo Electronico:</label>
                  <input class="form-control" type="text" name="email" value="'.$key['email'].'" >
                  <label>Perfil Publico:</label>
                  <select class="form-control" name="public">
                  '.$publico.'
                  </select>

        ';


    }
  }  
}



function cambiarpassword($actual,$nueva){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// has de la password actual
$crypt = sha1(SALT.$actual.PEPER);

// consulta a base de datos
$SQL = "SELECT * FROM users WHERE password = :password AND iduser = :iduser LIMIT 1";
$sentence = $conexion -> prepare($SQL);
$sentence -> bindParam(':password', $crypt);
$sentence -> bindParam(':iduser', $_SESSION['iduser']);
$sentence -> execute();
$results = $sentence -> fetchAll();
if (empty($results)) {
//------------------------------------------------------------------------------------

echo '
 <!-- alertas -->
 <div class="col-md-12">
 <div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
  <strong><i class="fa fa-times"></i> Error! </strong> Tiene que proporcionar su contraseña actual para poder actualizar a una nueva, de lo contrario esta operación no sera procesada. </div>            
 </div>
 <!-- alertas -->
';

//------------------------------------------------------------------------------------
}else{
//------------------------------------------------------------------------------------

$nuevapassword = sha1(SALT.$nueva.PEPER);

$updapass = "UPDATE users SET password = :password WHERE iduser = :iduser";
$updasentence = $conexion -> prepare($updapass);
$updasentence -> bindParam(':password',$nuevapassword);
$updasentence -> bindParam(':iduser',$_SESSION['iduser']);
$updasentence -> execute();

echo'
  <!-- alertas -->
  <div class="col-md-12">
  <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
   <strong><i class="fa fa-check"></i> Correcto! </strong> Tu contraseña ha sido actualizada correctamente, tendrás que usarla para poder iniciar sesión en el sistema. </div>            
  </div>
  <!-- alertas -->
';

//------------------------------------------------------------------------------------
  }  
}


function cambiardatos($nombre,$email,$public){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// cambiamos el permalink del usuario ya que el mismo no es permanente
// lo hago en MD5 solamente por la facilidad del hash y como no tiene
// una importancia tan grande como las contraseñas, no pasa la gran cosa.
$newprofile = md5($nombre);

// consulta a base de datos
$SQL = "UPDATE users SET name = :name, email = :email, public = :public, profile = :profile WHERE iduser = :iduser";
$sentence = $conexion -> prepare($SQL);
$sentence -> bindParam(':name', $nombre);
$sentence -> bindParam(':email', $email);
$sentence -> bindParam(':public', $public);
$sentence -> bindParam(':profile', $newprofile);
$sentence -> bindParam(':iduser', $_SESSION['iduser']);
$sentence -> execute();

echo'
  <!-- alertas -->
  <div class="col-md-12">
  <div class="alert alert-success alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
   <strong><i class="fa fa-check"></i> Correcto! </strong> Tus datos han sido actualizados correctamente, estos datos puedes actualizarlos cuantas veces quieras. </div>            
  </div>
  <!-- alertas -->
';

  
}



function borrarpublicacion($post){

// conexon a base de datos
$conexion = Conexion::singleton_conexion();

$SQL = "DELETE FROM posts WHERE userpost = :user AND idpost = :idpost";
$notfollow = $conexion -> prepare($SQL);
$notfollow -> bindParam(':user',$_SESSION['iduser']);
$notfollow -> bindParam(':idpost',$post);
$notfollow -> execute();


$SQL = "DELETE FROM comments WHERE post = :post";
$notfollow = $conexion -> prepare($SQL);
$notfollow -> bindParam(':post',$post);
$notfollow -> execute();


header('Location: '.$_SERVER['HTTP_REFERER'].'');

}


function borrarcomentario($comentario){

// conexon a base de datos
$conexion = Conexion::singleton_conexion();

$SQL = "DELETE FROM comments WHERE idcomment = :idcomment";
$notfollow = $conexion -> prepare($SQL);
$notfollow -> bindParam(':idcomment',$comentario);
$notfollow -> execute();

header('Location: '.$_SERVER['HTTP_REFERER'].'');

}




function publicacionesfeed(){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
  $SQL = "SELECT * FROM posts,followers,users WHERE posts.userpost = followers.friend  AND users.iduser = followers.friend AND followers.user = :user AND posts.userpost <> :user ORDER BY posts.idpost DESC";
  $sentence = $conexion -> prepare($SQL);
  $sentence -> bindParam(':user', $_SESSION['iduser']);
  $sentence -> execute();
  $results = $sentence -> fetchAll();
  if (empty($results)) {

      echo '
      <h4>No hay resultados</h4>
      <a href="dashboard" class="btn btn-success" ><i class="fa fa-reply"></i> Volver al Escritorio</a>
      ';

  }else{
    foreach ($results as $key){


       echo'
          <div class="message-item" id="post-'.$key['idpost'].'">
            <div class="message-inner">
              <div class="message-head clearfix">
                <div class="message-icon pull-left"><a href="publication'.$key['permalink'].'"><i class="fa fa-file-text-o"></i></a></div>
                <div class="user-detail">
                  <h5 class="handle">'.$key['name'].'</h5>
                  <div class="post-time">
                    '.fechastring($key['datepost']).'
                  </div>';

       if ($key['iduser'] == $_SESSION['iduser']) {
          echo '
               <div class="btn-group buttons-content" role="group" aria-label="">
                 <form class="operacion" method="POST" action=""> 
                 <a class="btn btn-xs btn-default" href="publication'.$key['permalink'].'">
                   <i class="fa fa-angle-double-down"></i> Comentarios
                  </a>
                  
                  <input type="hidden" name="borrarpost" value="'.$key['idpost'].'" >
                  <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Eliminar</button>
                  </form>
               </div>
         ';
       }else{
          echo '
               <div class="btn-group buttons-content" role="group" aria-label="">
                 <a class="btn btn-xs btn-default" href="publication'.$key['permalink'].'">
                   <i class="fa fa-angle-double-down"></i> Comentarios
                  </a>
               </div>
         ';
       }

                echo'</div>
              </div>
              <div class="qa-message-content">
                <p>'.$key['post'].'</p>
              </div>
           </div>

          </div>
    ';
    }
  }
}


function isadmin(){
  if ($_SESSION['rank'] == 2) {
    echo'<li><a class="logout-btn" href="admin"><i class="fa fa-cube"></i> Panel de Administración</a></li>';
  }else{
    echo'';
  }
}


function saustatus(){

// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// consulta a base de datos
$SQL = "SELECT * FROM sau";
$sentence = $conexion -> prepare($SQL);
$sentence -> execute();
$results = $sentence -> fetchAll();
if (empty($results)) {
}else{
  foreach ($results as $key){
    

       if ($key['maintenance'] == 1) {
         echo'
           <form id="form-login" method="POST" action="">
             <label>Email:</label>
             <input class="form-control" type="text" name="mail">
             <label>Contraseña:</label>
             <input class="form-control" type="password" name="password"><p></p>
             <button type="submit" class="btn btn-default pull-right"><i class="fa fa-power-off"></i> Iniciar sesión</button>        
           </form>
         ';
       }else{

          echo '<i class="engrame glyphicon glyphicon-cog fa-5x animated infinite flash"></i>';
          echo '<p>'.$key['message_maintenance'].'</p>';
       }


  }
}

}