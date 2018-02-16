<?php
	
   include('../../php/session.php');
   if(!isset($_SESSION['login_user']) || $_SESSION['user_level'] != 1){
      header("location: ../../index.php");
      exit();
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Tracking</title>
  <!-- Bootstrap core CSS-->
  <link href="../../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../public/css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php"><img src="../../public/images/rsz_listentrust_logo.png"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
          <a class="nav-link" href="editusers.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>


      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" >
            <i class="fa fa-fw fa fa-user-circle-o" aria-hidden="true""></i><?php echo $login_session; ?></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>

        <li class="breadcrumb-item active">Events for agent <?php echo $_GET['id']; ?></li>
      </ol>
      <!-- her we go -->
      
      	 <?php
            if(isset($_SESSION["error"])){ ?>
        <div id="diverror" class="text-center"><?php    
                $error = $_SESSION["error"];
                echo $error;
                 ?>
        </div>
         <?php }    
            if(isset($_SESSION["succes"])){ ?>
            <div id="divsucces" class="text-center"><?php 
                $error = $_SESSION["succes"];
                echo $error;
                 ?>
                 <br>
                 <br>
          	</div>      
           <?php  } ?> 
        

      
     
      <div class="">
      	<div class="row">
      		<div class="col-md-6">
      			<a href="#EventModal" class="btn btn-primary" data-toggle="modal" data-target="#EventModal">create event</a>
      		</div>
          <div class="col-md-6">
            <a href="#UserModal" class="btn btn-primary" data-toggle="modal" data-target="#UserModal">create user</a>
          </div>
      	</div>
      	<br>
      	<div class="card mb-3">
	        <div x`class="card-header">
	          <i class="fa fa-table"></i> Events for agent<?php echo $_GET['id']; ?> </div>
	        <div class="card-body">
				<div class="table-responsive">
		            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		              <thead>
		                <tr>
		                  <th>USER ID</th>
		                  <th>Name</th>
		                  <th>Username</th>
		                  <th>Event Name</th>
		                  <th>Start</th>
		                  <th>Finish</th>
                      <th>Date</th>
                      
		                </tr>
		              </thead>
		              <?php include ('showeventsfor.php'); ?>
		          	</table>
				</div>
	    	</div>
      	<div class="card-footer small text-muted">Updated <?php echo date('l jS \of F Y h:i:s A'); ?></div>
      </div>
    
      	
      </div>
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright ©Francisco Nogales ListenTrust 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href = "../../php/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- create event-->
    <?php include ('createevent.php'); ?>
    <!-- create user-->
   <?php include ('register.php'); ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../../public/vendor/jquery/jquery.min.js"></script>
    <script src="../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../../public/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    
    <script src="../../public/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../public/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../../public/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../../public/js/sb-admin-datatables.min.js"></script>
    <script src="../../public/js/sb-admin-charts.min.js"></script>
    <script type="text/javascript">
    	setTimeout(function() {
        $('#divsucces').fadeOut('fast');
    }, 3000);

      setTimeout(function() {
        $('#diverror').fadeOut('fast');
    }, 3000);


    </script>
  </div>
</body>

</html>
<?php
    unset($_SESSION["error"]);
    unset($_SESSION["succes"]);
?>