<?php  session_start(); ?>
<?php require 'admin_header.php'; ?>

<?php 

    require 'db.php'; 

    $expartise = "SELECT * FROM expartis";
    $expartise_res = mysqli_query($db_connect,$expartise);
    



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
                                <h3>Expartise</h3>
                            </div>
                            <div class="card-body">
                                <?php if (isset($_SESSION['delete'])){?>
                               
                                <div class="alert alert-success"><?=$_SESSION['delete']?></div>
                                <?php } unset($_SESSION['delete'])?>  

                                <table class="table table-bordered ">
                                       <tr>
                                                <th>Sl</th>
                                                <th>Topic</th>
                                                <th>Parcentage</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                        </tr>
                                        <?php foreach( $expartise_res as $Sl => $skill){ ?>
                                       <tr>
                                                <th><?= $Sl+1?></th>
                                                <th><?= $skill['topic_name']?></th>
                                                <th><?= $skill['percentage']?>%</th>
                                                <th>
                                                    <a href="status_change.php?id=<?= $skill['id']?>" class="btn btn-<?= ($skill['status'] == 1 ? 'success' : 'dark') ?>"> <?= ($skill['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </th>
                                                <th>
                                                <div class="d-flex">
                                                    <a href="delete_expartise.php?id=<?= $skill['id']?>" class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a>
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
                            <h3>Add New Expartise</h3>
                        </div>
                        <div class="card-body">
                                 <?php if(isset( $_SESSION['success'])){?>
                                    <div class="alert alert-success"><?= $_SESSION['success']?></div>
                                 <?php } unset( $_SESSION['success'])?>
                        <form action="expartise_POST.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                 <label for="" class="form-label">Topic Name </label>
                                 <input type="text" class="form-control" name="topic_name" >
                            </div>
                            <div class="mb-3">
                                  <label for="" class="form-label"> Percentage </label>
                                  <input type="number" class="form-control" name="Percentage" >
                            </div>
                           
                             <div class="mb-3">
                                
                                 <button type="submit" class="btn btn-primary">Add Expartise</button>
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