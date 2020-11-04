<?php
//$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "SELECT id, name, age, mobile, paddress FROM care";

$sql = mysqli_query($link, $query);


session_start();


if (!isset($_SESSION['username'])) {
 header('Location: logout.php');

}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title>Admin Dashboard</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  
  <link href="assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet" />
  
  <link href="assets/plugins/data-tables/responsive.datatables.min.css" rel="stylesheet" />
  
  

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  
  

<?php include('sidebar_menu.php');?>

    
      <!-- Header Start-->
    
          <div class="page-wrapper">      
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                     <!-- <img src="assets/img/user/user.png" class="user-image" alt="User Image" /> -->
                      <span class="d-none d-lg-inline-block"><?php echo $_SESSION['username']; ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                       <!-- <img src="assets/img/user/user.png" class="img-circle" alt="User Image" /> -->
                        <div class="d-inline-block">
                          <?php echo $_SESSION['username']; ?> <small class="pt-1"></small>
                        </div>
                      </li>

                      
                      <li class="right-sidebar-in">
                        <a href="#"> <i class="mdi mdi-settings"></i>Change Password</a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>

          </header>


      <div class="content-wrapper">
        <div class="content">					
        	<div class="breadcrumb-wrapper">
			<h1>Tables</h1>
								
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>                
              </a>
            </li>
            <li class="breadcrumb-item">
              data-tables
            </li>
            <li class="breadcrumb-item" aria-current="page">register-data-table</li>
          </ol>
        </nav>

							</div>

							<div class="row">
								<div class="col-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom d-flex justify-content-between">
											<h2>Register List</h2>

									<a>
                  <?php if (isset($_GET['msg'])) { ?>

                    <div style="background: #f44336;color: white;opacity: 0.80;"  id="toastmsg" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $_GET['msg'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                  <?php } ?>
                  </a>
                 
										</div>

                    <form method="post" action="export.php" align="right">  
                  <input type="submit" name="export" value="Export CSV" class="btn btn-success" />  
                  </form>    


										<div class="card-body">
											<div class="responsive-data-table">
												<table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
													

                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Age</th>
                              <th>Mobile Number</th>
                              <th>Present Address</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php 

                    while ($rows = mysqli_fetch_array($sql)) {

                  ?>
                  <tr>
                    <td>
                        <?php echo $rows["id"]. "</br>"; ?>
                    </td>
                    <td>
                        <?php echo $rows["name"]. "</br>"; ?>
                    </td>
                    <td>
                      <?php echo $rows["age"]. "</br>"; ?>
                    </td>
                    <td>
                    <?php echo $rows["mobile"]. "</br>"; ?>
                    </td>
                    <td>
                    <?php echo $rows["paddress"]. "</br>"; ?>
                    </td>
                    <td>
                      <a href="delete.php?id=<?php echo $rows["id"]?>"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                    </td>
                  </tr>
                <?php 
              }?>
                          </tbody>
                        </table>


											</div>
										</div>
									</div>
								</div>


  

    </div>
  </div>

  <div class="page-wrapper">


                <footer class="footer mt-auto">
            <div class="copyright bg-white" style="border-right-width: 0px;border-right-style: solid;margin-right: 0px;border-left-width: 0px;border-left-style: solid;margin-left: -249px;left: 557.2px;right: 0px;padding-left: 2.25rem;">
              <p style="margin-left: 18;">
                © <span id="copy-year">2020</span> Copyright Woato | Developed by
                <a class="text-primary" href="http://www.facebook.com/omijara" target="_blank">Omi Mazumder</a>
              </p>
            </div>
          </footer>

    </div>


  <script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>




<script src="assets/plugins/data-tables/jquery.datatables.min.js"></script>
<script src="assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>
<script src="assets/plugins/data-tables/datatables.responsive.min.js"></script>


<script>
  jQuery(document).ready(function() {
    jQuery('#responsive-data-table').DataTable({
      "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
      "pageLength": 20,
      "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
    });
  });
</script>
  

  <script type="text/javascript">
   $('#toastmsg').fadeOut(10000);
  </script>

<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>
