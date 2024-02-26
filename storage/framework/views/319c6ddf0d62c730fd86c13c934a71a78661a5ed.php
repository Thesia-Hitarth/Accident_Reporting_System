<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
                    <li class="active">
                        <a href="<?php echo e(url('/student')); ?>"> Students</a>
                       
                    </li>
                   
                    <li>
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
                        <h1>Student</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Student table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="title">Student Table</strong>
                                
                            </div>
                            <div class="card-body">
                                <table id="student_details_table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Enrollment</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Phone No.</th>
                                            <th>Semester</th>
                                            <th>Division</th>
                                            <th>Batch</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                                foreach ($std as $value) {
                                        ?>
                                         <tr>
                                            <td><?php echo $value->enrollment ?> </td>
                                            <td class="testclass"><?php echo $value->std_name ?> </td>
                                            <td><?php echo $value->email_std ?> </td>
                                            <td><?php echo $value->contact_std ?> </td>
                                            <td><?php echo $value->semester ?> </td>
                                            <td><?php echo $value->div_std ?> </td>
                                            <td><?php echo $value->batch_std ?> </td>
                                            <td><?php echo $value->std_pwd ?> </td>
                                            <td>
                                                <form method="POST" action="/modify_student">
                                                      <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                <input type="hidden" name="modify" value="<?php echo $value->enrollment?>">
                                                <button type="submit">Modify</button>
                                                 </form>
                                                  / 
                                            <a onclick="return confirm('Are you sure you want to delete this student?');" href="/remove_student/<?php echo $value->enrollment?>">Remove</a>
                                            </td>
                                        </tr>
                                    <?php } ?>                                    </tbody>

                                </table>
                               
                                <!-- <center><a href="<?php echo e(url('/add_student')); ?>">
                                    <button class="btn">Add Student</button></a>
                                </center> --> 
                                <input type="text" id="sname" value="17"> 
                                <button id="updatestatus" class="btn">Add Student</button>

                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div id="newtable">
            
        </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- JS files-->
       <!--  <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script> -->
</body>
</html>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js
"></script>

<script type="text/javascript">
   $(document).ready(function(){
    console.log("testing here");
        $('#student_details_table').dataTable({
            "ordering": true,
            columnDefs:[{
                'orderable':true,
                'searchable':true,
                'sortable':true
            }]

        });

        //on click event of button
        $("#updatestatus").click(function(){
            console.log('button clicked here');
            var textval = $("#sname").val();
            $.ajax({
                /* the route pointing to the post function */
                url: '/testajax',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    id: textval
                },
                dataType: 'html',
                /* remind that 'data' is the response of the AjaxController */
                success: function (response) { 
                    console.log(response);
                    $("#newtable").append(response); 
                }
            }); 

        }); 
   }); 
</script><?php /**PATH C:\xampp\htdocs\AAMS\resources\views/Student/student.blade.php ENDPATH**/ ?>