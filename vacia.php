<?php session_start(); ?>
<?php
if(!isset($_SESSION['id']) || $_SESSION['id']=='' || $_SESSION['id']=='NULL')
  {
    echo '<script type="text/javascript">
            window.location = "acceso.php"
       </script>';
     exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>KRAUSSE EQUIPAMIENTOS SRL</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/extras.css">
    <link rel="stylesheet" href="css/admin.min.css">
    <link rel="stylesheet" href="css/skin.min.css">

        <script src="js/jquery.min.js"></script>

  </head>

  <body class="boxed skin-blue">
   <!-- modal de alerta para usuarios accesando a paginas de admin -->

    <div class="wrapper">

<?php include('header.php');?>
      <!-- Left side column. contains the logo and sidebar -->

<?php include('sidebar.php');?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
               <!-- Main content -->
        <section class="content">
    <div class="box box-info">
                <div class="box-header with-border" style="overflow:hidden;white-space:nowrap; text-overflow:ellipsis;">
                  <h3 class="box-title" >Inicio</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                  </div><!-- /.box-header -->

                <div class="box-body">



      </div> <!-- /.cbox body -->
            </div> <!-- /.box info -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->



    </div><!-- ./wrapper -->

 <script src="../js/bootstrap.js"></script>
    <script src="../js/app.min.js"></script>

  </body>
</html>
