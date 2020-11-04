<?php
$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "SELECT * FROM post where id = $ID";

$sql = mysqli_query($link, $query);

while ($rows = mysqli_fetch_array($sql)) {

?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-square-edit-outline"></i> Create Post
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="post_save.php" method="POST">
                <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" class="form-control" name="post_title" required="">
            </div>
            
            <div class="form-group">
                <label for="description">Description<span class="require">*</span></label>
                <textarea rows="5" class="form-control" name="post_decription" required=""></textarea>
            </div>
            
            <div class="form-group">
                <p><span class="require">*</span> - required fields</p>
            </div>
            <div class="form-group">
                <label>Select Image<span class="require">*</span></label>
                <input type="file" class="form-control"  name="img" required="">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
<?php

}

?>