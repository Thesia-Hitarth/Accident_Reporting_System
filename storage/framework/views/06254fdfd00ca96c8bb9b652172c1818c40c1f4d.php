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
                            <li><a href="<?php echo e(url('/table_basic')); ?>">Feed Timetable</a></li>
                            
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

        <div class="content mt-3">
                            	<label>Day</label>
                               	<select name="select" id="select" class="form1">
                                   	<option value="0">select</option>
                                    <option value="1">Monday</option>
                                    <option value="2">Tuesday</option>
                                    <option value="3">Wednesday</option>
                                    <option value="3">Thursday</option>
                                    <option value="3">Friday</option>
								</select>
                            
								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From Time</label>
                               	<select name="select" id="select" class="form1">
                                   	<option value="0">select</option>
                                    <option value="1">08:00 am</option>
                                    <option value="2">09:00 am</option>
                                    <option value="3">10:00 am</option>
                                    <option value="3">11:00 am</option>
                                    <option value="3">12:30 pm</option>
                                    <option value="3">01:30 pm</option>
                                    <option value="3">02:30 pm</option>
                                    <option value="3">03:30 pm</option>
								</select>

								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Time</label>
                               	<select name="select" id="select" class="form1">
                                   	<option value="0">select</option>
                                   	<option value="3">09:00 am</option>
                                    <option value="3">10:00 am</option>
                                    <option value="3">11:00 am</option>
                                    <option value="3">12:30 pm</option>
                                    <option value="3">01:30 pm</option>
                                    <option value="3">02:30 pm</option>
                                    <option value="3">03:30 pm</option>
                                    <option value="3">04:30 pm</option>
								</select>

								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type</label>
                               	<select name="select" id="select" class="form1">
                                   	<option value="0">select</option>
                                   	<option value="3">Lecture</option>
                                    <option value="3">Lab</option>
								</select>
								<br>
								<label>Subject</label>
                               	<select name="select" id="select" class="form1">
                                   	<option value="0">select</option>
                                   	<option value="3">AJAVA</option>
                                    <option value="3">NMA</option>
                                    <option value="3">MCAD</option>
                                    <option value="3">PPUD</option>
								</select>

								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Batch</label>
                               	<select name="select" id="select" class="form1">
                                   	<option value="0">select</option>
                                   	<option value="3">A1</option>
                                    <option value="3">A2</option>
                                    <option value="3">A3</option>
                                    <option value="3">A4</option>
								</select>
                            
								<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Faculty</label>
                               	<select name="select" id="select" class="form1">
                                   	<option value="0">select</option>
                                   	<option value="3">VNC</option>
                                    <option value="3">PJS</option>
                                    <option value="3">MMC</option>
                                    <option value="3">SBP</option>
                                    <option value="3">KBP</option>
                                    <option value="3">KPP</option>
                                    <option value="3">SGK</option>
								</select>

                            	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<button class="btn69">Submit</button>

						




                            
                           
                            <div class="card-body">
                                <table class="table table-bordered" style="width:100% height:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Monday</th>
                                            <th scope="col">Tuesday</th>
                                            <th scope="col">Wednesday</th>
                                            <th scope="col">Thursday</th>
                                            <th scope="col">Friday</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <tr style="width: 100% height: 100%">
                                            <th scope="row">08:00 to 9:00 am</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">09:00 to 10:00 am</th>
                                            <td>NMA-PJS</td>
                                            <td>NMA-PJS</td>
                                            <td>AJAVA-VNC</td>
                                            <td>MCAD-MMC</td>
                                            <td>NMA-PJS</td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">10:00 to 11:00 am</th>
                                            <td>MCAD-MMC</td>
                                            <td>AJAVA-VNC</td>
                                            <td rowspan="2"> AJAVA-A1-VNC <br> AJAVA-A2-KAM <br> NAM-A3-KBP <br> MCAD-A4-MMC </td>
                                            <td rowspan="2"> NMA-A1-DHW <br> MCAD-A2-SGK <br> PPUD-A4-SBP </td>
                                            <td rowspan="2"> PPUD-A1-SBP <br> NAM-A2-KBP <br> MCAD-A3-MMC <br> PPUD-A4-KPP </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">11:00 to 12:00 am</th>
                                            <td>AJAVA-VNC</td>
                                            <td>MCAD-MMC</td>
                                        </tr>

                                        <tr>
                                            <th scope="row">12:00 to 12:30 pm</th>
                                            <td colspan="5" style="text-align: center; letter-spacing: 100px;"><b>BREAK</b></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">12:30 to 01:30 pm</th>
                                            <td rowspan="2">AJAVA-A1-PJS <br> AJAVA-A4-VNC </td>
                                            <td rowspan="2"> MCAD-A1_MMC <br> AJAVA-A2-VNC <br> PPUD-A3-KPP <br> NMA-A4-KBP</td>
                                            <td rowspan="2"> NMA-A1-VNC <br> MCAD-A2-MMC <br> PPUD-A3-SBP <br> AJAVA-A4-PJS </td>
                                            <td rowspan="2"> NMA-A3-PJS <br> MCAD-A4-SGK <br> PPUD-A2-SBP </td>
                                            <td rowspan="2"> MCAD-A3-MMC <br> NMA-A4-KPP <br> MCAD-A1-SGK </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">01:30 to 02:30 pm</th>
                                        </tr>

                                        <tr>
                                            <th scope="row">02:30 to 03:30 pm</th>
                                            <td></td>
                                            <td rowspan="2"> PPUD-A2-KPP <br> AJAVA-A3-PJS </td>
                                            <td></td>
                                            <td rowspan="2"> PPUD-A1-KPP <br> NMA-A2-KBP <br> AJAVA-A3-VNC <br>  </td>
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <th scope="row">03:30 to 04:30 pm</th>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        
            <!-- .animated -->
        <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\AAMS\resources\views/Table/tables_basic.blade.php ENDPATH**/ ?>