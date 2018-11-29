<!-- <h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->

<!DOCTYPE HTML>
<html>
<head>
  <title>R-Inventory | Login </title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
   <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <!-- Custom CSS -->
  <link href="<?php echo base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url()?>assets/css/font-awesome.css" rel="stylesheet"> 
  <!-- jQuery -->
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <!----webfonts--->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
  <!---//webfonts--->  
  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <img src="<?php echo base_url()?>assets/images/logo1.png" alt=""/>
  </div>
  <h2 class="form-heading"><?php echo lang('login_heading');?></h2>
  <center><p><?php echo lang('login_subheading');?></p></center>
  <center><div id="infoMessage"><?php echo $message;?></div></center>
  <div class="app-cam">
    <?php echo form_open("auth/login");?>
    <form>
    <!-- <input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}"> -->
    <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?> </p>
    <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?> </p>
    <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> </p>
    <!-- <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"> -->
    <div class="submit"><?php echo form_submit('submit', lang('login_submit_btn'));?></div>
    <!-- <ul class="new">
      <li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
      <div class="clearfix"></div>
    </ul> -->
  </form>
  <?php echo form_close();?>
  <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2018 R-Inventory. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
   </div>
</body>
</html>