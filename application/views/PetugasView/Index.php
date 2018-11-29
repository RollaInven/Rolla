<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
 if (!$this->ion_auth->logged_in())
         {
             redirect('auth/login');
         }
if (!$this->ion_auth->is_admin())
{
  // else {
  //   header('location: ../index.php');
  // }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>R-Inventory</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url()?>assets/css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery-ui.css'?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css'); ?>" />
<script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>" type="text/javascript"></script>
<!-- <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script> -->
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url()?>assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo base_url()?>assets/js/d3.v3.js"></script>
<script src="<?php echo base_url()?>assets/js/rickshaw.js"></script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>">R-Inventory</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url()?>assets/images/img1.png"><span class="badge"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header text-center">
                            <strong>Settings</strong>
                        </li>
                        <li class="divider"></li>
                        <li class="m_2"><a href="<?php echo base_url()?>Auth/logout"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li>
            </ul>
			
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <?php
                        $this->load->view('PetugasView/Menu');
                    ?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	
        	<?php $this->load->view($body);?>
            
		<div class="copy">
            <p>Copyright &copy; 2018 R-Inventory. ANT.TIF_C | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
		
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
