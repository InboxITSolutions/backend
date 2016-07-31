<?php
include 'includes/header.php';
include 'includes/navigation.php';
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
    <section class="content" ng-app="myApp" ng-controller="ProductCatCtrl">
        <div class="box container"><br>
            <div class="col-md-8 productbox">
                <div class="newsCategory">
                    <div>
                        <!-- <p ng-show="edit" class="text-muted">Add <b>Product</b> Category</p> -->
                        <a href="" class="btn btn-primary"><i class="fa fa-plus-square"></i> Add new Category </a>
                        <p ng-hide="edit" class="text-muted"></p>
                        <input type="text" placeholder="Enter Product Category" class="form-control" id="categoryName"required>
                         <p ng-hide="edit" class="text-muted"></p>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>davinci</td>
                                <td>
                                  <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                                  &middot; 
                                  <a onclick="javascript:return confirm('Are you sure?')" href="#" class="text-danger"><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Cargo</td>
                                <td>
                                  <a href="#" class="text-danger"><i class="fa fa-edit"></i></a>
                                  &middot; 
                                  <a onclick="javascript:return confirm('Are you sure?')" href="#" class="text-danger"><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4"><br><br><br>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->

</div><!-- ./wrapper -->

<?php include 'includes/footer.php' ?>