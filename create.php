<?php
include 'includes/header.php';
include 'includes/navigation.php';

if(isset($_POST['addcontent'])){
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $name = addslashes($_FILES['file']['name']);
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder ="../assets/back-image/slider/";
    $title = $_POST['title'];
    $url =$_POST['url'];
    $description =$_POST['description'];
    move_uploaded_file($file_loc, $folder.$file) or die(mysql_error());
    require '../database/conn.php';
    mysql_query("INSERT INTO slider(picture,name,title,description,url) VALUES ('$file','$name','$title','$description','$url')") or die(mysql_error());
}
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slider
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Add Content</a></li>
      </ol>
    </section>
<!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="slider" class="btn btn-success">Back to Slider</a><br><br>
            <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data"><input name="" type="hidden" value="">
            <div class="form-group">
                <label for="picture">Picture</label><br>
                <input name="file" type="file" id="picture" required>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" name="title" type="text" id="title" required> 
            </div>

            <div class="form-group">
                <label for="description">Short Description</label>
                <textarea class="form-control" name="description" cols="50" rows="10" id="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input class="form-control" name="url" type="text" id="url" required>
            </div>
            <input class="btn btn-danger" type="reset" value="Clear">
            <input class="btn btn-primary" type="submit" value="Submit" name="addcontent"> <br><br>                                                             
        </form>
    </div>
</section><!-- /.content -->

    </div><!-- /.content-wrapper -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

</div><!-- ./wrapper -->
<?php include 'includes/footer.php' ?>