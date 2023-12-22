<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Pendukung Keputusan</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/form/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/form/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/form/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/form/css/bootstrap-social.css" rel="stylesheet" type="text/css">   
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/form/css/templatemo_style.css" rel="stylesheet" type="text/css">   

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/staff_kepatuhan/css/normalize.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/staff_kepatuhan/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/staff_kepatuhan/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/staff_kepatuhan/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/staff_kepatuhan/css/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/staff_kepatuhan/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/staff_kepatuhan/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/staff_kepatuhan/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.js"></script>

<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet"  href="<?php echo base_url(); ?>assets/login/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link  href="<?php echo base_url(); ?>assets/login/css/style.css" rel='stylesheet' type='text/css' />
<link  href="<?php echo base_url(); ?>assets/login/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet"  href="<?php echo base_url(); ?>assets/login/css/font.css" type="text/css"/>
<link  href="<?php echo base_url(); ?>assets/login/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?php echo base_url(); ?>assets/login/js/jquery2.0.3.min.js"></script>
</head>
<body>
    <!-- Left Panel -->

    <?php  $this->load->view('staff_kepatuhan/tampilan_menu_staff_kepatuhan'); ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
 
            <div class="top-right">
                <div class="header-menu">
                   
                        <li>
                             <a href="logout"> <i class="fa fa-key"> &nbsp;</i>Log Out </a>
                        </li>
                  
                </div>
            </div>
        </header><!--  
        <!-- Header-->