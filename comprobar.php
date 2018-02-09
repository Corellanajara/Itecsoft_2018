
<?php
  session_start();
 include("conexion.php");
 $_SESSION = array();
  // Obtengo los datos cargados en el formulario de login.

  if($_POST['correo']!=NULL){
    $mail = $_POST['correo'];

    $password = $_POST['pw'];

    // Esto se puede remplazar por un usuario real guardado en la base de datos.
    //$check = $database->prepare(" SELECT * FROM Cliente WHERE Correo = '".$mail."' " );
    $check = mysqli_query($con, " SELECT * FROM usuario WHERE Correo = '".$mail."' ");
    //$check->execute();
    //$resultado = $check->fetchall();
    $flag = 0;
    $_SESSION['autorizado']=0;

    //$actual = mysqli_query($con, " SELECT * FROM modo WHERE Correo = '".$mail."' ");
    //$actual->execute();
    //$modoactual = $actual->fetchall();
    //$_SESSION['MODE'] = $modoactual[0][0];

  while($tupla = mysqli_fetch_assoc($check)){
    # code...

    if($mail == $tupla['correo'] && $password == $tupla['password']){

    // Guardo en la sesión el email del usuario.
   	$flag=1;
   	$_SESSION['FLAG'] = 0;
    $_SESSION['autorizado']=1;
    $_SESSION['RUT']=$tupla['rut'];
    $_SESSION['NAME']=$tupla['nombre'];
    $_SESSION['ADDRESS'] = $tupla['direccion'];
    $_SESSION['PHONE']= $tupla['telefono'];
    $_SESSION['MAIL']= $tupla['correo'];
    $_SESSION['PW']=$tupla['password'];
    $_SESSION['ID']=$tupla['id'];

    //include("pagina.php");
    // Redirecciono al usuario a la página principal del sitio.
    //header("HTTP/1.1 302 Moved Temporarily");

    header("Location: index.php");
   }else{

      header("Location : pages/examples/login.html");

  }

  }

  if($flag == 0  ){


      header("Location : pages/examples/login.html");
  }
   }

?>
