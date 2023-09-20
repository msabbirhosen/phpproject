

<?php  session_start(); ?>
<?php require 'admin_header.php'; ?>

<?php 

    require 'db.php'; 

    $testimonial = "SELECT * FROM testimonials";
    $tetimonial_res = mysqli_query($db_connect,$testimonial);
    



?>


<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h3>Testimonial</h3>
                            </div>
                            <div class="card-body">
                                <?php if (isset($_SESSION['delete'])){?>
                               
                                <div class="alert alert-success"><?=$_SESSION['delete']?></div>
                                <?php } unset($_SESSION['delete'])?>  

                                <table class="table table-bordered ">
                                       <tr>
                                            <th>Sl</th>
                                            <th>name</th>
                                            <th>occupation</th>
                                            <th>description</th>
                                            <th>image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php foreach($tetimonial_res   as $Sl => $testimonial){ ?>
                                       <tr>
                                            <td><?= $Sl+1?></td>
                                            <td><?= $testimonial['name']?></td>
                                            <td><?= $testimonial['occupation']?></td>
                                            <td><?= $testimonial['description']?></td>
                                            <td>
                                                <img width="100" src="upload/tesmonial/<?= $testimonial['image']?>" alt="">
                                            </td>
                                            <td>
                                            <a href="status_tesmonial.php?id=<?= $testimonial['id']?>" class="btn btn-<?= ($testimonial['status'] == 1 ? 'success' : 'dark') ?>"> <?= ($testimonial['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="delete_tesmonial.php?id=<?= $testimonial['id']?>" class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
                  <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add New testimonial</h3>
                        </div>
                        <div class="card-body">
                                 <?php if(isset( $_SESSION['success'])){?>
                                    <div class="alert alert-success"><?= $_SESSION['success']?></div>
                                 <?php } unset( $_SESSION['success'])?>
                        <form action="testmonial_POST.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                 <label for="" class="form-label">name</label>
                                 <input type="text" class="form-control" name="name" >
                            </div>
                            <div class="mb-3">
                                  <label for="" class="form-label">occupation</label>
                                  <input type="text" class="form-control" name="occupation" >
                            </div>
                            <div class="mb-3">
                                  <label for="" class="form-label">description</label>
                                  <input type="text" class="form-control" name="description" >
                            </div>
                            <div class="mb-3">
                                  <label for="" class="form-label">image</label>
                                  <input type="file" class="form-control" name="image" >
                            </div>
                           
                             <div class="mb-3">
                                
                                 <button type="submit" class="btn btn-primary">Add Testimonial</button>
                            </div>
                        </form> 
                        </div>
                    </div>
                  </div>


				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




<?php require 'admin_footer.php'; ?>


