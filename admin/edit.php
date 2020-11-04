<?php $title = 'Update User Info | Tele Doctor'; include("header.php"); ?>
 	<link rel="stylesheet" type="text/css" href="../css/style2.css">
  	<link rel="stylesheet" href="../css/parsley.css">

<?php
$ID = $_GET["id"];

$link = mysqli_connect("localhost", "root", "", "register");

$query = "SELECT * FROM care where id = $ID";

$sql = mysqli_query($link, $query);

while ($rows = mysqli_fetch_array($sql)) {

?>

				<form action="update.php" method="get" data-parsley-validate>
				<h2>Update Data</h2>
				<div class="form-group">
					<input type="hidden" class="form-control" value="<?php echo $rows["id"]?>" name="id" data-parsley-length="[3, 16]" required="">
					</div>

					<div class="form-group">
						<label for="">Name:</label>
						<input data-parsley-type="text" pattern="[A-Za-z]" class="form-control" value="<?php echo $rows["name"]?>"  name="name" data-parsley-length="[3, 16]" required="">
					</div>
					<div class="form-group">
						<label for="">Age:</label>
						<input data-parsley-type="number" class="form-control" value="<?php echo $rows["age"]?>" name="age" data-parsley-range="[13, 99]" required="">
					</div>
					<div class="form-group" >
						<label for="">Mobile Number:</label>
						<input data-parsley-type="digits" class="form-control" value="<?php echo $rows["mobile"]?>" name="mnum" data-parsley-length="[11, 11]" data-parsley-pattern="\d+" required="">
					</div>
					<div class="form-group" >
						<label for="">Present Address:</label>
						<input type="text" class="form-control" value="<?php echo $rows["paddress"]?>" name="paddress" required="">
					</div>

					</br>
						<button type="submit" name="register" class="btn">update</button>
						<input type="button" value="cancel" class="btn" onClick="document.location.href='caller_list.php';" />

					</form>


<?php

}

?>

<?php include("footer.php"); ?>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/parsley.min.js"></script>


			