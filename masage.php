<?php  session_start(); ?>
<?php require 'admin_header.php'; ?>

<?php 

    require 'db.php'; 

    $masage = "SELECT * FROM masages";
    $masage_res = mysqli_query($db_connect,$masage);
    



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
                                <h3>client message</h3>
                            </div>
                            <div class="card-body">
                                <?php if (isset($_SESSION['delete'])){?>
                               
                                <div class="alert alert-success"><?=$_SESSION['delete']?></div>
                                <?php } unset($_SESSION['delete'])?>  

                                <table class="table table-bordered ">
                                       <tr>
                                                <th>Sl</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>subject</th>
                                                <th>message</th>
                                                <th>Action</th> 
                                        </tr> 
                                        <?php foreach(  $masage_res  as $Sl =>   $masage){ ?>
                                       <tr>
                                                <td><?= $Sl+1?></td>
                                                <td><?=  $masage['name']?></td>
                                                <td><?= $masage['email']?></td>
                                                <td><?= $masage['subject']?></td>
                                                <td><?= $masage['masage']?></td>
                                                <!-- <th>
                                                    <a href="status_change.php?id=<?= $masage['id']?>" class="btn btn-<?= ($masage['status'] == 1 ? 'success' : 'dark') ?>"> <?= ($masage['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </th> -->
                                                <th>
                                                <div class="d-flex">
                                                    <a href="delete_masage.php?id=<?= $masage['id']?>" class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </th>
                                        </tr>
                                        <?php }?>
                                </table> 
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