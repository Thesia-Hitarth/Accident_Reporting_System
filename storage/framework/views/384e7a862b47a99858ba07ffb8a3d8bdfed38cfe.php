<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Attendance and Academia Management</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="logo.png">
    <link rel="shortcut icon" href="logo.png">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
 <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="logo.png" height="40px" width="40px" alt="Logo" align="Left">&nbsp&nbsp&nbsp&nbsp&nbspA&MS</a>
                <a class="navbar-brand hidden" href="#"><img src="images/logo2.png" alt="Logo"></a>
            </div>
              <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo e(url('/index')); ?>">Dashboard </a>
                    </li>
                    <h3 class="menu-title">Manage Users</h3><!-- /.menu-title -->
                    <li>
                        <a href="<?php echo e(url('/student')); ?>"> Students</a>
                       
                    </li>
                   
                    <li class="active">
                        <a href="<?php echo e(url('/faculty')); ?>"> Faculties</a>
                    </li>
                   

                    <h3 class="menu-title">Manage Services</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Timetable</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="<?php echo e(url('/timetable')); ?>">Feed Timetable</a></li>
                            
                        </ul>
                    </li>            
                   

                  
                 
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
<!-- Left Panel -->
<!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

      <!--   --> 
    <!-- Right Panel -->

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Basic table</li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <form action="/timetableaction" method="POST">   
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div class="content mt-3">
        <label>Day</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="day" id="select" class="form1">
        
            <option value="1">Monday</option>
            <option value="2">Tuesday</option>
            <option value="3">Wednesday</option>
            <option value="4">Thursday</option>
            <option value="5">Friday</option>
        </select>
    
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From Time</label>
        &nbsp;&nbsp;&nbsp;
        <select name="fromtime" id="select" class="form1">

            <option value="08:00 am">08:00 am</option>
            <option value="09:00 am">09:00 am</option>
            <option value="10:00 am">10:00 am</option>
            <option value="11:00 am">11:00 am</option>
            <option value="12:30 pm">12:30 pm</option>
            <option value="01:30 pm">01:30 pm</option>
            <option value="02:30 pm">02:30 pm</option>
            <option value="03:30 pm">03:30 pm</option>
        </select>

        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Time</label>
        &nbsp;
        <select name="totime" id="select" class="form1">
            <option value="08:00 am">08:00 am</option>
            <option value="09:00 am">09:00 am</option>
            <option value="10:00 am">10:00 am</option>
            <option value="11:00 am">11:00 am</option>
            <option value="12:30 pm">12:30 pm</option>
            <option value="01:30 pm">01:30 pm</option>
            <option value="02:30 pm">02:30 pm</option>
            <option value="03:30 pm">03:30 pm</option>
        </select>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label>Room No</label>&nbsp;&nbsp;&nbsp;&nbsp;
         <select name="roomno" id="select" class="form1">   
                <option value="215">215</option>
                <option value="216">216</option>
                <option value="217">217</option>
                <option value="218">218</option>
                <option value="219">219</option>
                <option value="220">220</option>
                <option value="221">221</option>
                <option value="222">222</option>
        </select>
        <br>
        <label>Subject</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="subject" id="select" class="form1">
            <option value="AJava">AJAVA</option>
            <option value="NMA">NMA</option>
            <option value="MCAD">MCAD</option>
            <option value="PPUD">PPUD</option>
        </select>

        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Divsion</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="division" id="select" class="form1">
            <option value="0">select</option> 
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select>

        <label>&nbsp;&nbsp;&nbsp;&nbsp;Batch</label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="batch" id="select" class="form1">
            <option value="0">select</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>

            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
            <option value="B4">B4</option>

            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="C3">C3</option>
            <option value="C4">C4</option>
        </select>
    
      <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculty</label>
        &nbsp;&nbsp;
        <select name="faculty" id="select" class="form1">   
            <option value="VNC">VNC</option>
            <option value="PJS">PJS</option>
            <option value="MMC">MMC</option>
            <option value="SBP">SBP</option>
            <option value="KBP">KBP</option>
            <option value="KPP">KPP</option>
            <option value="SGK">SGK</option>
            <option value="MPM">MPM</option>
            <option value="DHW">DHW</option>
            <option value="HSM">HSM</option>
            <option value="MVP">MVP</option>
        </select>          
    <div class="card-body">
    <table id="timetable"class="table table-bordered" style="width:100% height:100%" border="10px">
        <thead>
            <tr>
                <th scope="col">Timings</th>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
                <th scope="col">Friday</th>
            </tr>
        </thead>           
        <tbody>
            <?php
           /*echo "<pre>";
            print_r($table); exit;*/ ?>
            <tr>
            <?php $starting = 1;
                    $day = 1;
            foreach ($table as $value) { 
                if($starting == 1){ ?>
                            <th scope="row"><?php echo e(date('H:i',strtotime($value->start_time))." to ".date('H:i',strtotime($value->end_time))); ?></th>
                        <?php if($day < $value->day_timetable){
                            for($i=$day; $i<$value->day_timetable; $i++) { ?>
                            <td></td>
                        <?php } }?>
                        <td><?php echo e($value->subject_name."-".$value->faculty_name."(".$value->room_lactlab_no.")"); ?>

                        </td>
                <?php $prev = $value->start_time;
                      $day = $value->day_timetable;
                    $starting = 0; 
                    
                }else{ 
                    if($prev == $value->start_time){ 
                       if($day < $value->day_timetable){
                            for($i=$day+1; $i<$value->day_timetable; $i++) { ?>
                            <td></td> 
                        <?php } }?>
                            <td><?php echo e($value->subject_name."-".$value->faculty_name."(".$value->room_lactlab_no.")"); ?>

                            </td>
                <?php   $prev = $value->start_time;
                        $day = $value->day_timetable;
                        
                    } else { $day = 1; ?>
                        </tr>
                        <tr style="width: 100% height: 100%">
                            <th scope="row"><?php echo e(date('H:i',strtotime($value->start_time))." to ".date('H:i',strtotime($value->end_time))); ?></th>
                        <?php if($day < $value->day_timetable){
                                for($i=$day; $i<$value->day_timetable; $i++) { ?>
                            <td></td>
                        <?php } }?>
                            <td><?php echo e($value->subject_name."-".$value->faculty_name."(".$value->room_lactlab_no.")"); ?> 
                            </td>
                            <?php $prev = $value->start_time;
                            $day = $value->day_timetable;

                        } 
                } 
            } ?>
        </tbody>
    </table>
    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <center><button class="btn">Submit</button></center>
    </div>
</form>                  
</div>
</body>
</html>

<script type="text/javascript">
    
</script><?php /**PATH C:\xampp\htdocs\AAMS\resources\views/Table/timetable.blade.php ENDPATH**/ ?>