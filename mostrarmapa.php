<?php session_start();
if(!isset($_SESSION['MAIL'])){
  header("Location :pages/examples/login.html");
  exit;
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php
    include("database.php");
     ?>
  <title>ItecSoft | Mapa</title>
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

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
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
                      if($value[1]==0){
                        ?>
                       <li>
                              <a data-toggle='modal' data-target='#modal-danger' <?php echo   "onclick = 'cambiar(".$key.")'" ?> >

                              <?php    echo $value[0];?>
                                  </a>

                              </li>"

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

            <li><a href="index.php"><i class="fa fa-circle-o"></i> Portada </a></li>
          </ul>
        </li>
        <li>
          <a href="mapa.php">
            <i class="fa fa-map-o"></i> <span>Mapa</span>
          </a>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Opciones</span>
            <span class="pull-right-container">
              no disponible aun
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
      <br>


<?php
        //////////////////////////////////////////
include("conexion.php");
?>

<div class="container">


      <h2>Lista de Sectores</h2>

      <hr />

      <?php
      if(isset($_GET['aksi']) == 'delete'){
        // escaping, additionally removing everything that could be (html/javascript-) code
        $nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
        $cek = mysqli_query($con, "SELECT * FROM sector3ptos WHERE id='$nik' and cliente_id = '".$_SESSION['ID']."'");
        if(mysqli_num_rows($cek) == 0){
          echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
        }else{
          $delete = mysqli_query($con, "DELETE FROM sector3ptos WHERE id='$nik' and cliente_id = '".$_SESSION['ID']."'");
          if($delete){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
          }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
          }
        }
      }
      ?>


      <br />
      <div class="table-responsive">
      <table class="table table-striped table-hover">
        <tr>
                    <th>No</th>

          <th>Nombre</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
          <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Latitud</th>
                    <th>Longitud</th>

        </tr>
        <?php

        $sql = mysqli_query($con, "SELECT * FROM sector3ptos where cliente_id = '".$_SESSION['ID']."' ORDER BY id ASC");

        if(mysqli_num_rows($sql) == 0){
          echo '<tr><td colspan="8">No hay datos.</td></tr>';
        }else{
          $no = 1;
          while($row = mysqli_fetch_assoc($sql)){
            echo '
            <tr>
              <td>'.$no.'</td>
              <td>'.$row['nombre'].'</td>
                            <td>'.$row['latitud1'].'</td>
                            <td>'.$row['longitud1'].'</td>
                            <td>'.$row['latitud2'].'</td>
                            <td>'.$row['longitud2'].'</td>
                            <td>'.$row['latitud3'].'</td>
                            <td>'.$row['longitud3'].'</td>'
              ;


            $no++;
          }
        }
        ?>
      </table>
    <center>
      <div id="mapid" style="width: 700px; height: 500px;">

      </div>
    </center>
    </div>




</section>


<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 0.4.0
  </div>
  <strong>Copyright &copy; 2017 <b>Cristopher Orellana</b>.</strong> All rights
  reserved.
</footer>






<?php
$var = $database->prepare("SELECT * from sector3ptos where cliente_id = '".$_SESSION['ID']."'");
$var->execute();
// value 4  limite inferior
// value 5 limite superior
$puntos = $var->fetchall();
$i = 0;
echo "<p hidden id='total'> ".sizeof($puntos)."</p>";
foreach ($puntos as $key => $value) {
  # code...

  if($value[6] != null){
    echo "<p hidden id='nombre".$key."'> ".$value[6]."</p>";
  }
  echo "<br>";

  if($value[1]!=null){
    echo " <p hidden id ='l1".$key."' > ".$value[0]."</p>";
    $i = $i + 1 ;
  }
  echo "<br>";
  if($value[2]!=null){
    echo " <p hidden id ='L1".$key."' > ".$value[1]."</p>";
    $i = $i + 1 ;
  }
  echo "<br>";
  if($value[3]!=null){
    echo " <p hidden id ='l2".$key."' > ".$value[2]."</p>";
    $i = $i + 1 ;
  }
  echo "<br>";
  if($value[4]!=null){
    echo " <p hidden id ='L2".$key."' > ".$value[3]."</p>";
    $i = $i + 1 ;
  }
  echo "<br>";
  if($value[5]!=null){
    echo " <p hidden id ='l3".$key."' > ".$value[4]."</p>";
    $i = $i + 1 ;
  }
  echo "<br>";
  if($value[6]!=null){
    echo " <p hidden id ='L3".$key."' > ".$value[5]."</p>";
    $i = $i + 1 ;
  }
  echo "<p hidden id='cantidad".$key."' >".$i."";

}

       ?>


<script>


  var mymap = L.map('mapid').setView([-35.4334181, -71.6317734,17], 16);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="http://mapbox.com">Mapbox</a>',
      id: 'mapbox.streets'
    }).addTo(mymap);

  var total = document.getElementById("total").innerHTML;

for (var i = 0; i < total; i++) {
  var ia = "l1"+i;
  var ib = "l2"+i;
  var ic = "l3"+i;
  var id = "L1"+i;
  var iif = "L2"+i;
  var ig = "L3"+i;
  var iname = "nombre"+i;

  var l1 = document.getElementById(ia).innerHTML;
  var l2 = document.getElementById(ib).innerHTML;
  var l3 = document.getElementById(ic).innerHTML;
  var L1 = document.getElementById(id).innerHTML;
  var L2 = document.getElementById(iif).innerHTML;
  var L3 = document.getElementById(ig).innerHTML;
  var arr1 = [l1,L1];
  var arr2 = [l2,L2];
  var arr3 = [l3,L3];
  var nombre = document.getElementById(iname).innerHTML;


  L.polygon([
      arr1,arr2,arr3
  ]).addTo(mymap).bindPopup(nombre);

}



  var cantidad = 0;
  var popup = L.popup();


  function guardar(){
    for (var i = Things.length - 1; i >= 0; i--) {
      Things[i]
    }
    if (cantidad >= 3){
      alert("bacan es mas de 3 asi que esta bien :"+cantidad);
    }else{
      alert("llego solo hasta el "+
        cantidad);
    }
  }


  function results(e){

    var latitud = e.latlng.toString().slice(7,16);
    var longitud = e.latlng.toString().slice(17,26);

    var table = document.getElementById("tabla");

    var row = table.insertRow(cantidad);

    cantidad = cantidad + 1 ;

    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.innerHTML="<input type='text' name=a"+cantidad+" value="+latitud+">";
    cell2.innerHTML="<input type='text' name=b"+cantidad+" value="+longitud+">";

    document.getElementById("cantidad").value=cantidad;

  }
  var icono = L.icon({
    iconUrl: 'hoja.png',
    shadowUrl: '1601.png',

    iconSize:     [38, 95], // size of thei con
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
  });
  var i  = 0;
  function onMapClick(e) {

  if(i<7){
    i = i + 1 ;

    popup
      .setLatLng(e.latlng)
      var latitud = e.latlng.toString().slice(7,16);
      var longitud = e.latlng.toString().slice(17,26);

      L.marker([latitud, longitud], {icon: icono}).addTo(mymap);

      results(e);
      }else{
        alert("No pueden ser más de siete puntos!");
      }

  }

  mymap.on('click', onMapClick);


</script>



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
