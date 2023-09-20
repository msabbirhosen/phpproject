<?php session_start(); ?>


<?php require 'admin_header.php'; ?>
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row mt-5">

                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">


                                <form action="profile_POST.php" method="POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" value="<?= $after_assoc_user_info['name'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>+
                                    <input type="hidden" name="user_id" value="<?= $after_assoc_user_info['id'] ?>">
                                    <div class="mb-3">
                                    
                                        <button class="btn btn-primary">Update Profile</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card h-auto">
                            <div class="card-header">
                                <h4>Update Image</h4>
                            </div>
                            <div class="card-body">

                                <?php if (isset( $_SESSION['update'])){?>
                                    <div class="alert alert-success"><?= $_SESSION['update']?></div>
                                <?php } unset( $_SESSION['update'])?>

                                <form action="image_update.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                    <input type="file" class="form-control" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    <div class="my-3">
                                        <img id="blah" width="200">
                                    </div>
                                    <?php if (isset( $_SESSION['exten'])){?>
                                         <strong class='text-danger'> <?= $_SESSION['exten']?> </strong>
                                    <?php } unset( $_SESSION['exten'])?>
                                         <div class="mb-3">
                                        <button class="btn btn-primary">Update Image</button>
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




        <?php if(isset($_SESSION["update"])){ ?>
    <script>
            Swal.fire(
            'Done!',
            'You clicked the button!',
            'success'
            )
    </script>
<?php } unset($_SESSION["update"]); ?>