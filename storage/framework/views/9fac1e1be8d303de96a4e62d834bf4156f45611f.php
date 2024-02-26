<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="supernova" lang="en">
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




    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F203659556362059" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F203659556362059" title="oEmbed Form">
<meta property="og:title" content="Student on Class" >
<meta property="og:url" content="https://form.jotform.com/203659556362059" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Student on Class</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.22534" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.22534" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.22534" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/57b03d408265f156908b4567.css?themeRevisionID=5f8304ddbaa6323e745a1612"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css?3.3.22534" />
<style type="text/css">
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:rgba(120, 120, 120, 0.62);
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:650px;
        color:rgb(255, 255, 255) !important;
        font-family:'Open Sans';
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: #555;
    }

</style>


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
                            <li><a href="<?php echo e(url('/table_basic')); ?>l">Feed Timetable</a></li>
                            
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
                        <h1>Add Student</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Add Student</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

               
<form method="POST" class="jotform-form" action="/add_studentaction" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Add Students
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_24">
        <label class="form-label form-label-left form-label-auto" id="label_24" for="input_24">
          Enrollment Number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_24" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" name= "Enrollment" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:116px" size="12"  data-component="number" aria-labelledby="label_24 sublabel_input_24" required="" step="any" />
            <label class="form-sub-label" for="input_24" id="sublabel_input_24" style="min-height:13px" aria-hidden="false"> Enrollment number </label>
          </span>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_23">
        <label class="form-label form-label-left form-label-auto" id="label_23" for="first_23">
          Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_23" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_23" name="std_name" class="form-textbox validate[required]" size="10" value="" data-component="first" aria-labelledby="label_23 sublabel_23_first" required="">
              <label class="form-sub-label" for="first_23" id="sublabel_23_first" style="min-height:13px" aria-hidden="false"> Name </label>
            </span>
          </div>
        </div>
      </li>
     
      <li class="form-line jf-required" data-type="control_email" id="id_13">
        <label class="form-label form-label-left form-label-auto" id="label_13" for="input_13">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_13" class="form-input jf-required">
          <input type="email" id="input_13" name="e_mail" class="form-textbox validate[required, Email]" size="30" value="" placeholder=" " data-component="email" aria-labelledby="label_13" required="" />
          <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> E-mail </label>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Phone No.
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="number" id="input_25" name="phone" data-type="input-number" class=" form-number-input form-textbox validate[required]" style="width:100px" size="10" value="" data-component="number" aria-labelledby="label_25 sublabel_input_25" step="any" required>
            <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> Contact </label>
          </span>
        </div>
      </li>

      <li class="form-line jf-required" data-type="control_number" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Semester
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <select name="semester" class=" form-number-input form-textbox validate[required]" style="width:100px"  value="" data-component="number" aria-labelledby="label_25 sublabel_input_25" step="any" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>

            </select>
            <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> Semester </label>
          </span>
        </div>
      </li>

   <li class="form-line jf-required" data-type="control_number" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Division
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <select name="division" class=" form-number-input form-textbox validate[required]" style="width:100px" value="" data-component="number" aria-labelledby="label_25 sublabel_input_25" step="any" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>

            </select>
            <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> div </label>
          </span>
        </div>
      </li>

<li class="form-line jf-required" data-type="control_number" id="id_25">
        <label class="form-label form-label-left form-label-auto" id="label_25" for="input_25">
          Batch
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_25" class="form-input jf-required">
          <span class="form-sub-label-container" style="vertical-align:top">
            <select name="batch" class=" form-number-input form-textbox validate[required]" style="width:100px" value=""   aria-labelledby="label_25 sublabel_input_25" step="any" required>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>
            <option value="B1">B</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
            <option value="B4">B4</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
            <option value="C3">C3</option>
            <option value="C4">C4</option>
            </select>
            <label class="form-sub-label" for="input_25" id="sublabel_input_25" style="min-height:13px" aria-hidden="false"> div </label>
          </span>
        </div>
      </li>
      
       <li class="form-line" data-type="control_textbox" id="id_28">
        <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28"> Profile 
        <span class="form-required">
            *
          </span>
      </label>
        <div id="cid_28" class="form-input">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="file" name="profile" required>
            <label class="form-sub-label" for="input_28" id="sublabel_input_28" style="min-height:13px" aria-hidden="false"> Profile </label>
          </span>
        </div>
      </li>

      <!--Password Field-->
      <li class="form-line" data-type="control_textbox" id="id_28">
        <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28"> Password 
        <span class="form-required">
            *
          </span>
      </label>
        <div id="cid_28" class="form-input">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="Password" id="input_28" name="password" data-type="input-textbox" class="form-textbox validate[AlphaNumeric]" size="20" value="" data-component="textbox" aria-labelledby="label_28 sublabel_input_28" required>
            <label class="form-sub-label" for="input_28" id="sublabel_input_28" style="min-height:13px" aria-hidden="false"> Password </label>
          </span>
        </div>
      </li>


      <!--Submit Field-->
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="submit" type="submit" name="submit"class="form-submit-button form-submit-button-simple_white submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="" background="green">
              Submit
            </button>
          </div>
        </div>
      </li>
      </ul>
    </div>
</form>
               
            </div>
        </div>
</div>

                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\AAMS\resources\views/Student/add_student.blade.php ENDPATH**/ ?>