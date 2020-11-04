<?php
//$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "SELECT id, name, age, mobile, paddress FROM care";

$sql = mysqli_query($link, $query);



?>  
      <!--
          ====================================
          ——— HEADER Start
          ===================================== -->
           
      <?php $title = 'Register List | Tele Doctor'; include("header.php"); ?>

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

                    <div style="background: #f44336;color: white;"  id="toastmsg" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $_GET['msg'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                  <?php } ?>
                  </a>
                 
                  <form method="post" action="export.php" align="right">  
                  <input type="submit" name="export" value="Export CSV" class="btn btn-success" />
                  <style>input {
                       right: 100px;
                      }</style>  
                  </form>

                    </div>

                 


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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-square-edit-outline"></i>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                        
                             <div class="form-inner">
                            <form action="update.php" method="get">
                              <div class="form-group">
                              <input type="hidden" class="form-control" value="<?php echo $rows["id"]?>" name="id">
                            </div>
                            <label for="">Name:</label>
                            <div class="form-group">
                              <input type="text" class="form-control" value="<?php echo $rows["name"]?>" name="name">
                            </div>
                            <div class="form-group">
                              <label for="">Age:</label>
                              <input data-parsley-type="number" class="form-control" value="<?php echo $rows["age"]?>" name="age">
                            </div>
                            <div class="form-group" >
                              <label for="">Mobile Number:</label>
                              <input data-parsley-type="digits" class="form-control" value="<?php echo $rows["mobile"]?>" name="mnum">
                            </div>
                            <div class="form-group" >
                              <label for="">Present Address:</label>
                              <input type="text" class="form-control" value="<?php echo $rows["paddress"]?>" name="address">
                            </div>

                          </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php  echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?id=".$rows["id"]."'>"; ?><button type="button" class="btn btn-danger btn-xs"><i class="mdi mdi-trash-can-outline"></i></button></a>
   
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

<?php include("footer.php"); ?>

