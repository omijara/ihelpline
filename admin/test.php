<?php include('header.php');?>


<!-- Sidebar Menu -->

<?php include('sidebar_menu.php');?>

<?php
//$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "SELECT id, name, age, mobile, paddress FROM care";

$sql = mysqli_query($link, $query);


?>


      <div class="content-wrapper">
        <div class="content">             
         <div class="breadcrumb-wrapper">
       <!--   <h1>Tables</h1>
                
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
            <li class="breadcrumb-item" aria-current="page">hoverable-data-table</li>
          </ol>
        </nav>
      -->
      

              </div>

              <div class="row">
                <div class="col-12">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                      <h2>Register List</h2>

                      <a>
            
              <?php if (isset($_GET['msg'])) { 

              ?>
              <div style="background: #f44336;color: white;opacity: 0.80;"  id="toastmsg" class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $_GET['msg'];?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>

            <?php 
          } 

            ?>
          </a>
                      </a>
                    </div>
                  <form method="post" action="export.php" align="right">  
                  <input type="submit" name="export" value="Export CSV" class="btn btn-success" />  
                  </form>    

                    <div class="card-body">
                      <div class="hoverable-data-table">
                        <table id="hoverable-data-table" class="table table-hover nowrap" style="width:100%">
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