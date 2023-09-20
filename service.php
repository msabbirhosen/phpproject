<?php  session_start(); ?>
<?php require 'admin_header.php'; ?>

<?php 

    require 'db.php'; 

    $service = "SELECT * FROM services";
    $service_res = mysqli_query($db_connect,$service);
    



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
                                <h3>service</h3>
                            </div>
                            <div class="card-body">
                                <?php if (isset($_SESSION['delete'])){?>
                               
                                <div class="alert alert-success"><?=$_SESSION['delete']?></div>
                                <?php } unset($_SESSION['delete'])?>  

                                <table class="table table-bordered ">
                                       <tr>
                                                <th>Sl</th>
                                                <th>title</th>
                                                <th>short description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                        </tr>
                                        <?php foreach( $service_res  as $Sl => $service){ ?>
                                       <tr>
                                                <th><?= $Sl+1?></th>
                                                <th><?= $service['title']?></th>
                                                <th><?= $service['short_desp']?></th>
                                                <th>
                                                    <a href="status_change..php?id=<?= $service['id']?>" class="btn btn-<?= ($service['status'] == 1 ? 'success' : 'dark') ?>"> <?= ($service['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </th>
                                                <th>
                                                <div class="d-flex">
                                                    <a href="delete_service.php?id=<?= $service['id']?>" class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </th>
                                        </tr>
                                        <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Add New service</h3>
                        </div>
                        <div class="card-body">
                                 <?php if(isset( $_SESSION['success'])){?>
                                    <div class="alert alert-success"><?= $_SESSION['success']?></div>
                                 <?php } unset( $_SESSION['success'])?>
                        <form action="service_POST.php" method="POST">
                            <div class="mb-3">
                                 <label for="" class="form-label">Title</label>
                                 <input type="text" class="form-control" name="title" >
                            </div>
                            <div class="mb-3">
                                  <label for="" class="form-label"> short description</label>
                                  <input type="text" class="form-control" name="short_desp" >
                            </div>
                           
                             <div class="mb-3">
                                
                                 <button type="submit" class="btn btn-primary">Add service</button>
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