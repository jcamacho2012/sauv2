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


require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/admin/includes/login.class.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/VUE/conexion/Conexion.php';


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
		echo $key['username'].'<p></p>';
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
<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong> Error! </strong> Tus datos de acceso son incorrectos o tu cuenta se encuentra deshabilitada, por favor comunicate con Gestion de Procesos. </div>
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
         $SQL = "SELECT activities_instances.id as id_activity,req_no,dcm_cd,co_nm, activities_instances.process_instances_id as id_process FROM
                  documents JOIN process_instances 
                  ON documents.process_instances_id=process_instances.id 
                  JOIN activities_instances 
                  ON process_instances.id=activities_instances.process_instances_id 
                  AND process_instances.state='READY' AND activities_instances.state='READY' AND activities_instances.user_id=:iduser";
    }else if($rank==2){
          $SQL = "SELECT activities_instances.id as id_activity,req_no,dcm_cd,co_nm,username,activities_instances.process_instances_id as id_process FROM
                  documents JOIN process_instances 
                  ON documents.process_instances_id=process_instances.id 
                  JOIN activities_instances 
                  ON process_instances.id=activities_instances.process_instances_id
                  JOIN users
                  ON activities_instances.user_id=users.iduser
                  AND process_instances.state='READY' AND activities_instances.state='READY'
                  ORDER BY activities_instances.date_create DESC";
    }else{
        $SQL = "SELECT activities_instances.id as id_activity,req_no,dcm_cd,co_nm, activities_instances.process_instances_id as id_process FROM 
                documents JOIN  process_instances 
                ON documents.process_instances_id=process_instances.id 
                JOIN activities_instances
                ON process_instances.id=activities_instances.process_instances_id
                AND process_instances.state='READY' AND activities_instances.state='READY' AND activities_instances.user_id=:iduser";
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
                  <tr>';
                if($rank=='2'){
                echo '
                    <td><input type="checkbox" class="case" name="case[]" value="'.$key['id_activity'].'"></td>';
                }
                echo'
                    <td class="hidden"  id="process">'.$key['id_process'].'</td>
                    <td class="hidden"  id="activity">'.$key['id_activity'].'</td>
                    <td>'.$key['req_no'].'</td>
                    <td>'.$key['dcm_cd'].'</td> 
                    <td>'.$key['co_nm'].'</td>';
                
                if($rank=='2'){
                echo '
                    <td>'.$key['username'].'</td>';
                }
                echo ' 
                    <td>';
                        if($rank!=2){
                            echo '<button type="button" data-id="'.$key['req_no'].'" class="btn btn-primary hacer">Hacer</button>';
                        }
               
                        if($rank==4){
                             echo'<button type="button" data-id="'.$key['req_no'].'" class="btn btn-warning liberar">Liberar</button>';
                        }
                        
                         if($rank==2){
                             echo'<button type="button" data-id="'.$key['req_no'].'" class="btn btn-info ver">Ver</button>';
                        }   
                   echo' <td>
                  </tr>';
		}
	}	
}

function actualizarEstadoActividad($activity,$process,$estado,$rank){
    $conexion = Conexion::singleton_conexion();
    
    if($rank!='DESISTIDA'){
        if($estado=='2'){
            $SQL = "UPDATE activities_instances SET state='FINISH', date_modify= now() WHERE id = :activity;";
            $sentence = $conexion -> prepare($SQL);
            $sentence -> bindParam(':activity', $activity);
        }else 
            if($estado=='3'){
                $SQL = "UPDATE activities_instances SET state='FINISH', date_modify= now() WHERE id = :activity;
                        UPDATE process_instances SET state='FINISH', date_modify= now() WHERE id = :process;";
                $sentence = $conexion -> prepare($SQL);
                $sentence -> bindParam(':activity', $activity);
                $sentence -> bindParam(':process', $process);
            }else{
                if($rank==4){
                      $SQL = "UPDATE activities_instances SET state='FINISH', date_modify= now() WHERE id = :activity;
                        UPDATE process_instances SET state='FINISH', date_modify= now() WHERE id = :process;";
                        $sentence = $conexion -> prepare($SQL);
                        $sentence -> bindParam(':activity', $activity);
                        $sentence -> bindParam(':process', $process);
                }else{
                    $SQL = "UPDATE activities_instances SET state='FINISH', date_modify= now() WHERE id = :activity;";                
                        $sentence = $conexion -> prepare($SQL);
                        $sentence -> bindParam(':activity', $activity);                
                }
            }        
    }else{
         $SQL = "UPDATE activities_instances SET state='FINISH', date_modify= now() WHERE id = :activity;
                        UPDATE process_instances SET state='FINISH', date_modify= now() WHERE id = :process;";
                $sentence = $conexion -> prepare($SQL);
                $sentence -> bindParam(':activity', $activity);
                $sentence -> bindParam(':process', $process);
    }
    
    
    // consulta a base de datos 
    
    if ( $sentence -> execute())
    {
        return true;
    }
    else
    {
        return false;
    }
      
}

function enviarNotificación($reqno,$mensaje,$opcion,$username){    
        if($opcion=='2'){
            $estado='410';
        }else if($opcion=='3'){
            $estado='310';
        }
        $SQL = "SELECT bonita.accion_notificacion(
                '".$reqno."',
                '".$estado."',
                '".$username."',
                '".$mensaje."',
                '21',
                '".$username."',
                '".$username."')"; 

        $conexion=new DB();
        $row = $conexion->consultar($SQL,3);

        if($row[0]=='t'){
            return true;
        }else{
            return false;
        }              
}


function consultarDesistimiento($reqno){    
        $SQL = "SELECT bonita.consulta_existe_desistimiento('".$reqno."')";

        $conexion=new DB();
        $row = $conexion->consultar($SQL,3);

        if($row[0]=='t'){
            return true;
        }else{
            return false;
        }              
}

function imponerTasas($reqno,$username){
    $SQL = "SELECT bonita.accion_insertartasa_130xxx(
            '".$reqno."',
            '".$username."')"; 
        
        $conexion=new DB();
        $row = $conexion->consultar($SQL,3);

        if($row[0]=='t'){
            return true;
        }else{
            return false;
        }        
       
}

function preaprobacion($reqno,$cedula,$username){
    $SQL = "SELECT bonita.accion_preaprobacion(
            '".$reqno."',
            '".$cedula."',
            '',
            '".$username."')"; 

        $conexion=new DB();
        $row = $conexion->consultar($SQL,3);

        if($row[0]==true){
            return true;
        }else{
            return false;
        }        
       
}

function crearNuevaActividad($process){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// pues la fecha para saber desde cuando lo sigue xD

// consulta a base de datos 
$insertactividad = "INSERT INTO activities_instances(name, state, date_create, date_modify,user_id, process_instances_id) 
    VALUES ('REVISION FINAL','READY',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,0,:process)";

$updasentence = $conexion -> prepare($insertactividad);
$updasentence -> bindParam(':process',$process);

if ( $updasentence -> execute())
    {
        return true;
    }
    else
    {
        return false;
    }

}

function prueba(){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();

// pues la fecha para saber desde cuando lo sigue xD

// consulta a base de datos 
 $insertactividad = "INSERT INTO rol (id,nombre)
            VALUES (1, 'Doe')";

$updasentence = $conexion -> prepare($insertactividad);


if ( $updasentence -> execute())
    {
        return true;
    }
    else
    {
        return false;
    }

}


function buscarNombreXId($id){
    $conexion = Conexion::singleton_conexion();
    
    // consulta a base de datos
    
	$SQL = "SELECT username FROM users where iduser=:id";
	$sentence = $conexion -> prepare($SQL);  
        $sentence -> bindParam(':id', $id);        
	$sentence -> execute();
	$results = $sentence -> fetchAll();

        if (empty($results)) {
           return 'Sin Asignar';
	}else{
		foreach ($results as $key){
                    return $key['username'];
		}
	}
}

function tareaSinAsignar($ciudad){
    // conexon a base de datos
    $conexion = Conexion::singleton_conexion();     
    // consulta a base de datos
    
	  $SQL = "SELECT activities_instances.id as id_activity,req_no,dcm_cd,co_nm, activities_instances.process_instances_id as id_process FROM
                  documents JOIN process_instances 
                  ON documents.process_instances_id=process_instances.id 
                  JOIN activities_instances 
                  ON process_instances.id=activities_instances.process_instances_id 
                  AND process_instances.state='READY' AND activities_instances.state='READY' 
                  AND activities_instances.user_id=0 AND documents.req_city_cd=:ciudad";
	$sentence = $conexion -> prepare($SQL);  
        $sentence -> bindParam(':ciudad', $ciudad);
	$sentence -> execute();
	$results = $sentence -> fetchAll();
	if (empty($results)) {
	}else{
		foreach ($results as $key){
                echo'
                  <tr>
                    <td class="hidden"  id="process">'.$key['id_process'].'</td>
                    <td class="hidden"  id="activity">'.$key['id_activity'].'</td>    
                    <td>'.$key['req_no'].'</td>
                    <td>'.$key['dcm_cd'].'</td>
                    <td>'.$key['co_nm'].'</td> 
                    <td>
                        <button type="button" data-id="'.$key['req_no'].'" class="btn btn-default tomar">Tomar/Revisar</button>                        
                    <td>
                  </tr>';
		}
	}	
}

function tareaTerminadas($iduser,$rank){
    // conexon a base de datos
    $conexion = Conexion::singleton_conexion();     
    // consulta a base de datos
        if($rank==2){
            $SQL = "SELECT req_no,dcm_cd,co_nm,username,activities_instances.date_modify as date_modify FROM
                  documents JOIN process_instances 
                  ON documents.process_instances_id=process_instances.id 
                  JOIN activities_instances 
                  ON process_instances.id=activities_instances.process_instances_id
                  JOIN users
                  ON activities_instances.user_id=users.iduser
                  AND process_instances.state='FINISH' AND activities_instances.state='FINISH'
                  ORDER BY activities_instances.date_modify DESC";
            $sentence = $conexion -> prepare($SQL); 
        }else{
            $SQL = "SELECT req_no,dcm_cd,co_nm,activities_instances.date_modify as date_modify FROM
                  documents JOIN process_instances 
                  ON documents.process_instances_id=process_instances.id 
                  JOIN activities_instances 
                  ON process_instances.id=activities_instances.process_instances_id 
                  AND activities_instances.state='FINISH' 
                  AND activities_instances.user_id=:user
                  ORDER BY activities_instances.date_modify DESC";
            $sentence = $conexion -> prepare($SQL);  
            $sentence -> bindParam(':user', $iduser);
        }
	            
	
	$sentence -> execute();
	$results = $sentence -> fetchAll();
	if (empty($results)) {
	}else{
		foreach ($results as $key){
                echo'
                  <tr>    
                    <td>'.$key['req_no'].'</td>
                    <td>'.$key['dcm_cd'].'</td>
                    <td>'.$key['co_nm'].'</td>';
                if($rank==2){
                    echo '<td>'.$key['username'].'</td>
                          <td>'.$key['date_modify'].'</td>';
                }else{
                    echo '<td>'.$key['date_modify'].'</td>';
                }
                     
                  echo '
                    </tr>';
		}
	}	
}


function liberar($activity,$process){
// conexon a base de datos
$conexion = Conexion::singleton_conexion();


// consulta a base de datos
    $SQL = "UPDATE activities_instances SET user_id=0, date_modify= now() WHERE id = :activity and process_instances_id=:process";
    $sentence = $conexion -> prepare($SQL);
    $sentence -> bindParam(':activity', $activity);
    $sentence -> bindParam(':process', $process);

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

function listaUsuariosAsignar(){
    $conexion = Conexion::singleton_conexion();

    // consulta a base de datos
        $SQL = "SELECT iduser,username FROM users WHERE state='HABILITADO'";
        $sentence = $conexion -> prepare($SQL);        
        $sentence -> execute();
        $results = $sentence -> fetchAll();
        $response = array();
	if (empty($results)) {
	}else{
                $lista='<select id="usuarios" class="selectpicker" name="rank" style="margin-left: 2em;">
                            <option value="" disabled selected>Escoger Usuario</option>';
                foreach ($results as $key){                 
                    $lista.='<option value="'.$key['iduser'].'">'.$key['username'].'</option>';
                }
                $lista.= '</select>';  
	}       
        return $lista;
}

function asignarSolicitudes($lista,$usuario){
    
    $conexion = Conexion::singleton_conexion();
    // consulta a base de datos
    
    foreach ($lista as $actividad) {
        $actividades .= $actividad.',';
    }
    
    $actividades = trim($actividades, ',');
    
    
    $SQL = "UPDATE activities_instances SET date_modify=CURRENT_TIMESTAMP,user_id=:usuario WHERE id IN (:actividades);";

    $sentence = $conexion -> prepare($SQL);  
    $sentence -> bindParam(':usuario', $usuario);
    $sentence -> bindParam(':actividades', $actividades);   
    
    if($sentence -> execute()){
        return true;
    }else{
        return false;
    }
        
}


function consultaxid($reqno){
    // conexon a base de datos
  
    $conexion = Conexion::singleton_conexion();

    // consulta a base de datos
        $SQL = "SELECT req_no,dcm_cd FROM documents WHERE req_no = :reqno";
        $sentence = $conexion -> prepare($SQL);
        $sentence -> bindParam(':reqno', $reqno);
        $sentence -> execute();
        $results = $sentence -> fetchAll();
        $response = array();
	if (empty($results)) {
	}else{
		foreach ($results as $key){                 
                   $response['req_no'] = $key['req_no'];
                   $response['dcm_cd'] = $key['dcm_cd'];   
                   
		}
	}
    //actualizar id del usuario que toma la solicitud sin asignar
        //actualizarId($reqno, $id,$rank);
       
        return $response;
}

function tomar($id,$process,$activity){
    // conexon a base de datos
  
    $conexion = Conexion::singleton_conexion();
    // consulta a base de datos
    
    $SQL = "UPDATE activities_instances SET user_id= :id,date_modify=now() WHERE id = :activity AND process_instances_id=:process";

    $sentence = $conexion -> prepare($SQL);  
    $sentence -> bindParam(':id', $id);
    $sentence -> bindParam(':activity', $activity);
    $sentence -> bindParam(':process', $process);
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


// consulta a base de datos
$SQL = "SELECT * FROM users WHERE  iduser = :iduser LIMIT 1";
$sentence = $conexion -> prepare($SQL);
$sentence -> bindParam(':iduser', $_SESSION['iduser']);
$sentence -> execute();

if ($sentence->rowCount() == 1) {
//------------------------------------------------------------------------------------
    $results = $sentence -> fetch();
    if (password_verify($actual, $results['password'])){
        $nuevapassword=password_hash($nueva, PASSWORD_BCRYPT, ['cost'=>12]);

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
    }else{
        echo'
           <!-- alertas -->
            <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
             <strong><i class="fa fa-times"></i> Error! </strong> Contraseña ingresada es incorrecta, vuelva a digitar su contraseña. </div>            
            </div>
           <!-- alertas -->
        ';
    }



//------------------------------------------------------------------------------------
}else{
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
             <label>Usuario:</label>
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