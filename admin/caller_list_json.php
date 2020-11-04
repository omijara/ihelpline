<?php
//$ID = $_GET["id"];

/*require_once('../dbcon.php');

$query = "SELECT id, name, age, mobile, paddress FROM care";

$sql = mysqli_query($link, $query);
*/
$data = file_get_contents("../members.json");
$data = (array)json_decode($data);



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

                    //while ($rows = mysqli_fetch_array($sql)) {
                  foreach ($data as $key => $rows) {
                    # code...
                  

                  ?>
                  <tr>
                    <td>
                        <?php echo ($key+1). "</br>"; ?>
                    </td>
                    <td>
                        <?php echo $rows->name. "</br>"; ?>
                    </td>
                    <td>
                      <?php echo $rows->age. "</br>"; ?>
                    </td>
                    <td>
                    <?php echo $rows->mnum. "</br>"; ?>
                    </td>
                    <td>
                    <?php echo $rows->paddress. "</br>"; ?>
                    </td>
                    <td>
                    <?php  echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete.php?id=".$rows->id."'>"; ?><button type="button" class="btn btn-danger btn-xs"><i class="mdi mdi-trash-can-outline"></i></button></a>

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

