
<?php
  session_start();
 include("database.php");
 $_SESSION = array();
  // Obtengo los datos cargados en el formulario de login.

  if($_POST['correo']!=NULL){
    $mail = $_POST['correo'];

    $password = $_POST['pw'];

    // Esto se puede remplazar por un usuario real guardado en la base de datos.
    $check = $database->prepare(" SELECT * FROM Cliente WHERE Correo = '".$mail."' " );
    $check->execute();
    $resultado = $check->fetchall();
    $flag = 0;
    $_SESSION['autorizado']=0;

    $actual = $database->prepare("SELECT Estacion FROM Modo WHERE Activo = 1");
    $actual->execute();
    $modoactual = $actual->fetchall();
    $_SESSION['MODE'] = $modoactual[0][0];

  foreach ($resultado as $key => $value) {
    # code...

    if($mail == $value[4] && $password == $value[6]){

    // Guardo en la sesión el email del usuario.
   	$flag=1;
   	$_SESSION['FLAG'] = 0;
    $_SESSION['autorizado']=1;
    $_SESSION['RUT']=$value[1];
    $_SESSION['NAME']=$value[2];
    $_SESSION['LNAME']=$value[3];
    $_SESSION['ADDRESS'] = $value[7];
    $_SESSION['PHONE']= $value[5];
    $_SESSION['MAIL']= $value[4];
    $_SESSION['PW']=$value[6];
    $_SESSION['T'] = 0;
    $_SESSION['H']  = 0;
    $_SESSION['P']  = 0;
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
