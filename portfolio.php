<?php  session_start(); ?>
<?php require 'admin_header.php'; ?>

<?php 

    require 'db.php'; 

    $portfolios = "SELECT * FROM portfolios";
    $portfolios_res = mysqli_query($db_connect,$portfolios);
    



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
                                <h3>portfolio</h3>
                            </div>
                            <div class="card-body">
                                <?php if (isset($_SESSION['delete'])){?>
                               
                                <div class="alert alert-success"><?=$_SESSION['delete']?></div>
                                <?php } unset($_SESSION['delete'])?>  

                                <table class="table table-bordered ">
                                       <tr>
                                                <th>Sl</th>
                                                <th>title</th>
                                                <th>catagory</th>
                                                <th>image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                        </tr>
                                        <?php foreach ($portfolios_res  as $Sl => $portfolio){ ?>
                                       <tr>
                                                <th><?= $Sl+1?></th>
                                                <th><?= $portfolio['title']?></th>
                                                <th><?= $portfolio['catagory']?></th>
                                                <th>
                                                      <img width="100" src="upload/portfolio/<?= $portfolio['image']?>" alt="">
                                                </th>
                                                <th>
                                                    <a href="status_changeportfolio.php?id=<?= $portfolio['id']?>" class="btn btn-<?= ($portfolio['status'] == 1 ? 'success' : 'dark') ?>"> <?= ($portfolio['status'] == 1 ? 'Active' : 'Deactive') ?></a>
                                                </th>
                                                <th>
                                                <div class="d-flex">
                                                    <a href="delete_portfolio.php?id=<?= $portfolio['id']?>" class="btn btn-danger shadow btn-xs sharp del"><i class="fa fa-trash"></i></a>
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
                            <h3>Add New portfolio</h3>
                        </div>
                        <div class="card-body">
                                 <?php if(isset( $_SESSION['success'])){?>
                                    <div class="alert alert-success"><?= $_SESSION['success']?></div>
                                 <?php } unset( $_SESSION['success'])?>
                        <form action="portfolio_POST.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                 <label for="" class="form-label">Title</label>
                                 <input type="text" class="form-control" name="title" >
                            </div>
                            <div class="mb-3">
                                  <label for="" class="form-label">catagory</label>
                                  <input type="text" class="form-control" name="catagory" >
                            </div>
                            <div class="mb-3">
                                  <label for="" class="form-label">image</label>
                                  <input type="file" class="form-control" name="image" >
                            </div>
                           
                             <div class="mb-3">
                                
                                 <button type="submit" class="btn btn-primary">Add porfolio</button>
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