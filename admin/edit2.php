<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "SELECT * FROM user where id = $ID";

$sql = mysqli_query($link, $query);

while ($rows = mysqli_fetch_array($sql)) {

?>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                  </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-inner">
                            <form action="edit.php" method="get">
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
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>


<?php

}

?>

</body>
</html>