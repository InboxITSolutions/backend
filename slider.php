<?php
include 'includes/header.php';
include 'includes/navigation.php';
require '../database/conn.php';
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
        <li><a href="#">Slider</a></li>
      </ol>
    </section>

   <!-- Main content -->
<section class="content">
    <div class="box container"><br>
        <a href="create" class="btn btn-primary">Add Slider</a><br><br>
                <table class="table table-bordered example1">
            <thead>
            <tr>
                <th>Picture</th>
                <th>Title</th>
                <th>Description</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $query = mysql_query("SELECT * FROM slider") or die(mysql_error());
                 while ($row = mysql_fetch_assoc($query)) {
                  $id = $row['sn'];
                  $title = $row['title'];
                  $name = $row['name'];
                  $description = $row['description'];
                  $url = $row['url'];
                ?>
                  <tr>
                    <td><img src="../assets/back-image/slider/<?php echo $name; ?>" width="100px"></td>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $description; ?></td>
                    <td><?php echo $url; ?></td>
                    <td>
                      <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                      &middot; 
                      <a href="delete/deleteSlider.php?id=<?php echo $id; ?>" class="text-danger" name="delete-slider"><i class="fa fa-remove"></i></a>
                    </td>
                  </tr>
                  <?php
                 }
                ?>
              <!-- <tr>
                <td><img src="admin/assets/slider/<?php $name; ?>" width="100px"></td>
                <td>Slider 1</td>
                <td>Short Description</td>
                <td>http://hulasmotors.com/</td>
                <td>
                  <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                  &middot; 
                  <a onclick="javascript:return confirm('Are you sure?')" href="#" class="text-danger"><i class="fa fa-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><img src="assets/slider/2.png" width="100px"></td>
                <td>Slider 2</td>
                <td>Short Description</td>
                <td>http://hulasmotors.com/</td>
                <td>
                  <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                  &middot; 
                  <a onclick="javascript:return confirm('Are you sure?')" href="#" class="text-danger"><i class="fa fa-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><img src="assets/slider/3.png" width="100px"></td>
                <td>Slider 3</td>
                <td>Short Description</td>
                <td>http://hulasmotors.com/</td>
                <td>
                  <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                  &middot; 
                  <a onclick="javascript:return confirm('Are you sure?')" href="#" class="text-danger"><i class="fa fa-remove"></i></a>
                </td>
              </tr>
              <tr>
                <td><img src="assets/slider/4.png" width="100px"></td>
                <td>Slider 4</td>
                <td>Short Description</td>
                <td>http://hulasmotors.com/</td>
                <td>
                  <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                  &middot; 
                  <a onclick="javascript:return confirm('Are you sure?')" href="#" class="text-danger"><i class="fa fa-remove"></i></a>
                </td>
              </tr> -->
            </tbody>
        </table>
    </div>
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

</div><!-- ./wrapper -->


<?php include 'includes/footer.php' ?>