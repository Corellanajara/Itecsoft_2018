<?php session_start();
if(!isset($_SESSION['MAIL'])){
  header("Location :pages/examples/login.html");
  exit;
}
  error_reporting(E_ALL);
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php
    include("database.php");
     ?>
  <title>ItecSoft |Portada</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="modal modal-danger fade" id="modal-danger">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Atencion!</h4>
              </div>
              <div class="modal-body">
                <p id="texto">One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>

              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>I</b>Soft</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Itec</b>Soft</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">

            <ul class="dropdown-menu">



                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <?php
              $alertas = $database->prepare("Select count(*) from alerta where cliente_id = '".$_SESSION['ID']."' and visto = 0");
              $alertas->execute();
              $cant = $alertas->fetchall();
              $cantidad = $cant[0][0];
              $alertas = $database->prepare("Select texto,visto  from alerta where cliente_id = '".$_SESSION['ID']."'");
              $alertas->execute();
              $cant = $alertas->fetchall();

         ?>




          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php echo $cantidad ?></span>
            </a>
            <script>
              function cambiar(v){
                document.getElementById('texto').innerHTML = v;
              }
                </script>
            <ul class="dropdown-menu">
              <li class="header">Tienes <?php echo $cantidad ?> notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                  <?php

                    foreach ($cant as $key => $value) {
                      # code...
                      if($value[3]==0){
                        ?>
                       <li>
                              <a data-toggle='modal' data-target='#modal-danger' <?php echo   "onclick = 'cambiar(".$key.")'" ?> >

                              <?php    echo $value[0];?>
                                  </a>

                              </li>

                              <?php
                      }
                    }

                    ?>


                </ul>
              </li>
              <li class="footer"><a href="alertas.php">Verlas Todas</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php
                echo $_SESSION['NAME'];
                ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php
                echo $_SESSION['NAME'];
                ?>
                  <small>Administrador</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">

                  <div class="col-xs-4 text-center">
                    <a href="#">Contenido</a>
                  </div>

                  <div class="col-xs-4 text-center">
                    <a href="#">Opciones</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="cerrar.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php
                echo $_SESSION['NAME'];
                ?></p>
          <a href="#"> Administrador itecsoft</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ PRINCIPAL</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Portada</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <li><a href="index.php"><i class="fa fa-circle-o"></i> Portada</a></li>
          </ul>
        </li>
        <li>
          <a href="mostrarmapa.php">
            <i class="fa fa-map-o"></i> <span>Mapa</span>
          </a>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Opciones</span>
            <span class="pull-right-container">
              no completo aún
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="configuracion.php"><i class="fa fa-circle-o"></i> Activar o desactivar</a></li>
            <li><a href="sliders.php"><i class="fa fa-circle-o"></i> Limites</a></li>
            <li><a href="setearmapa.php"><i class="fa fa-circle-o"></i> Configurar mapa</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Config usuario</a></li>

          </ul>
        </li>
        <li>
          <a href="reportes.php">
            <i class="fa fa-files-o"></i> <span>Reportes</span>
            <span class="pull-right-container">
                No disponible aun
            </span>
          </a>
        </li>
        <li>
          <a href="pages/widgets.php">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">revisar</small>
            </span>
          </a>
        </li>






      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mapa
        <small>Sector Ejemplo</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Portada</a></li>
        <li class="active">Principal</li>
      </ol>
    </section>

<section>
  <div class="content-wrapper">
    <!-- Main content -->
       <div id="mapid" style="width: 600px; height: 400px;"></div>

              <br>
              <center>
                <form action="guardar.php" method="get">
                  <?php
                      $x = $_GET['cantidad'];
                      $arreglo = array();
                      for ($i=1; $i <=$x; $i++) {
                        $a = "a".$i;
                        $b = "b".$i;

                        $lat = $_GET[$a];

                        $lon = $_GET[$b];
                        array_push($arreglo, $lat,$lon);
                        echo "

                        <input type='hidden' name='A".$i."' value=".$lat.">

                         <input type='hidden' name='B".$i."' value=".$lon."> ";

                        echo "<br>";
                      }
                      echo '<input type="hidden" id="nombre" name="nombre" value='.$_GET["nombre"].'>';

                      echo '<input type="hidden" id="cuantos" name="cuantos" value='.sizeof($arreglo).' >';

                       ?>
                       <a style="float:left" href="setearmapa.php">Volver Atrás</a>
                      <input type="submit" value="Guardar">

                </form>

              </center>
              <br>
              </div>
              <div id="mensaje"></div>

</section>

<?php
$x = $_GET['cantidad'];
$arreglo = array();
for ($i=1; $i <=$x; $i++) {
	$a = "a".$i;
	$b = "b".$i;

	$lat = $_GET[$a];

	$lon = $_GET[$b];
	array_push($arreglo, $lat,$lon);
	echo "

	<p hidden id='a".$i."'>".$lat."</p>

	 <p hidden id='b".$i."'>".$lon."</p>";

	echo "<br>";
}
echo '<p hidden id="nombre">'.$_GET["nombre"].'</p>';

echo '<p hidden id="cantidad">'.sizeof($arreglo).'</p>';

 ?>


 <?php
 $temp = $database->prepare("SELECT * FROM temperatura Where cliente_id = 1");
 $temp->execute();
 $temperatura = $temp->fetchall();
 foreach ($temperatura as $key => $value) {
   echo "<p hidden id='temperatura'> ". $value[0] ." </p> ";

 }
 $hume = $database->prepare("SELECT * FROM humedad Where cliente_id = 1");
 $hume->execute();
 $humedad = $hume->fetchall();
 foreach ($humedad as $key => $value) {
   echo "<p hidden id='humedad'> ". $value[0] ." </p> ";
 }
 $pres = $database->prepare("SELECT * FROM presion Where cliente_id = 1");
 $pres->execute();
 $presion = $pres->fetchall();
 foreach ($presion as $key => $value) {
   echo "<p hidden id='presion'> ". $value[0] ." </p> ";
 }
        ?>

<script>

  document.getElementById("temperatura").style.visibility = "hidden";
  document.getElementById("humedad").style.visibility = "hidden";
  document.getElementById("presion").style.visibility = "hidden";

  var temp = document.getElementById("temperatura").innerHTML;
  var hum = document.getElementById("humedad").innerHTML;
  var pres = document.getElementById("presion").innerHTML;
  var nombre = document.getElementById("nombre").innerHTML;
  var cantidad = document.getElementById("cantidad").innerHTML;


  var mensaje = "<b>Sector 1 </b></br>Temperatura = " + temp + " <br>"+
  "Humedad = " + hum + " <br>" +
  "Presion = " + pres;
  var mensaje2 = "<b>"+nombre+"</b>";

  var mymap = L.map('mapid').setView([-35.4334181, -71.6317734,17], 16);

  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
      '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="http://mapbox.com">Mapbox</a>',
    id: 'mapbox.streets'
  }).addTo(mymap);
  if (cantidad<6) {
    alert("Debe tener por lo menos tres puntos para guardar un sector");
  }

  if (cantidad==6) {

      var v1 =document.getElementById("a1").innerHTML;
      var v2 =document.getElementById("b1").innerHTML;
      var v3 =document.getElementById("a2").innerHTML;
      var v4 =document.getElementById("b2").innerHTML;
      var v5 =document.getElementById("a3").innerHTML;
      var v6 =document.getElementById("b3").innerHTML
      var arr1 = ([v1,v2]);
      var arr2 = ([v3,v4]);
      var arr3 = ([v5,v6]);
          L.polygon([
            arr1,arr2,arr3
          ]).addTo(mymap).bindPopup(mensaje2);
  }
  if (cantidad==8) {
    var v1 =document.getElementById("a1").innerHTML;
          var v2 =document.getElementById("b1").innerHTML;
          var v3 =document.getElementById("a2").innerHTML;
          var v4 =document.getElementById("b2").innerHTML;
          var v5 =document.getElementById("a3").innerHTML;
          var v6 =document.getElementById("b3").innerHTML;
          var v7 =document.getElementById("a4").innerHTML;
          var v8 =document.getElementById("b4").innerHTML;


          var arr1 = ([v1,v2]);
          var arr2 = ([v3,v4]);
          var arr3 = ([v5,v6]);
          var arr4 = ([v7,v8]);

          L.polygon([
            arr1,arr2,arr3,arr4
          ]).addTo(mymap).bindPopup(mensaje2);
  }
  if (cantidad==10) {
    var v1 =document.getElementById("a1").innerHTML;
          var v2 =document.getElementById("b1").innerHTML;
          var v3 =document.getElementById("a2").innerHTML;
          var v4 =document.getElementById("b2").innerHTML;
          var v5 =document.getElementById("a3").innerHTML;
          var v6 =document.getElementById("b3").innerHTML;
          var v7 =document.getElementById("a4").innerHTML;
          var v8 =document.getElementById("b4").innerHTML;
          var v9 =document.getElementById("a5").innerHTML;
          var v10 =document.getElementById("b5").innerHTML;


          var arr1 = ([v1,v2]);
          var arr2 = ([v3,v4]);
          var arr3 = ([v5,v6]);
          var arr4 = ([v7,v8]);
          var arr5 = ([v9,v10]);

          L.polygon([
            arr1,arr2,arr3,arr4,arr5
          ]).addTo(mymap).bindPopup(mensaje2);
  }
  if (cantidad==12) {
    var v1 =document.getElementById("a1").innerHTML;
          var v2 =document.getElementById("b1").innerHTML;
          var v3 =document.getElementById("a2").innerHTML;
          var v4 =document.getElementById("b2").innerHTML;
          var v5 =document.getElementById("a3").innerHTML;
          var v6 =document.getElementById("b3").innerHTML;
          var v7 =document.getElementById("a4").innerHTML;
          var v8 =document.getElementById("b4").innerHTML;
          var v9 =document.getElementById("a5").innerHTML;
          var v10 =document.getElementById("b5").innerHTML;
          var v11 =document.getElementById("a6").innerHTML;
          var v12 =document.getElementById("b6").innerHTML;


          var arr1 = ([v1,v2]);
          var arr2 = ([v3,v4]);
          var arr3 = ([v5,v6]);
          var arr4 = ([v7,v8]);
          var arr5 = ([v9,v10]);
          var arr6 = ([v11,v12]);

          L.polygon([
            arr1,arr2,arr3,arr4,arr5,arr6
          ]).addTo(mymap).bindPopup(mensaje2);
  }
  if (cantidad==14) {
    var v1 =document.getElementById("a1").innerHTML;
          var v2 =document.getElementById("b1").innerHTML;
          var v3 =document.getElementById("a2").innerHTML;
          var v4 =document.getElementById("b2").innerHTML;
          var v5 =document.getElementById("a3").innerHTML;
          var v6 =document.getElementById("b3").innerHTML;
          var v7 =document.getElementById("a4").innerHTML;
          var v8 =document.getElementById("b4").innerHTML;
          var v9 =document.getElementById("a5").innerHTML;
          var v10 =document.getElementById("b5").innerHTML;
          var v11 =document.getElementById("a6").innerHTML;
          var v12 =document.getElementById("b6").innerHTML;
          var v13 =document.getElementById("a7").innerHTML;
          var v14 =document.getElementById("b7").innerHTML;



          var arr1 = ([v1,v2]);
          var arr2 = ([v3,v4]);
          var arr3 = ([v5,v6]);
          var arr4 = ([v7,v8]);
          var arr5 = ([v9,v10]);
          var arr6 = ([v11,v12]);
          var arr7 = ([v13,v14]);

          L.polygon([
            arr1,arr2,arr3,arr4,arr5,arr6,arr7
          ]).addTo(mymap).bindPopup(mensaje2);
  }



  var popup = L.popup();
  function results(e){
    var latitud = e.latlng.toString().slice(7,16);
    var longitud = e.latlng.toString().slice(17,26);

  }

  function onMapClick(e) {
      results(e);
  }

  mymap.on('click', onMapClick);


</script>
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->

          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->

          <!-- /.box (chat box) -->

          <!-- TO DO List -->


          <!-- quick email widget -->

          <!-- solid sales graph -->

          <!-- Calendar -->

          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.4.0
    </div>
    <strong>Copyright &copy; 2017 <b>Cristopher Orellana</b>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Chart js -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
