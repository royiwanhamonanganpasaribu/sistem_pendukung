<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Pendukung Keputusan</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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

</head>
<body>
    <!-- Left Panel -->

    <?php  $this->load->view('staff_kepatuhan/tampilan_menu_staff_kepatuhan'); ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="<?php echo base_url(); ?>assets/staff_kepatuhan/images/bpr.jpg" height="55" width="222" alt="Logo"></a>
                     <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                   
                    <div class="user-area dropdown float-right">
                         <li>
                             <a href="logout"> <i class="fa fa-key"> &nbsp;</i>Log Out </a>
                        </li>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->