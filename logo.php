
<?php
session_start();?>

<?php require 'admin_header.php'; ?>
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>update Header Logo</h3>
                        </div>
                        <div class="card-body">
                        <?php if (isset( $_SESSION['header_logo'])){?>
                                    <div class="alert alert-success"><?= $_SESSION['header_logo']?></div>
                                <?php } unset( $_SESSION['header_logo'])?>
                            <form action="header_logo_update.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="">Header Logo</label>
                                    <input type="file" name="header_logo" class="form-control"  onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="my-3">
                                        <img id="blah" width="100" src="upload/logo/<?php echo $after_assoc_logo['header_logo'] ?>">
                                    </div>
                                    <?php if (isset( $_SESSION['exten'])){?>
                                         <strong class='text-danger'> <?= $_SESSION['exten']?> </strong>
                                    <?php } unset( $_SESSION['exten'])?>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>update Footer Logo </h3>
                        </div>
                        <div class="card-body">
                        <?php if (isset( $_SESSION['footer_logo'])){?>
                                    <div class="alert alert-success"><?= $_SESSION['footer_logo']?></div>
                                <?php } unset( $_SESSION['footer_logo'])?>
                            <form action="footer_logo_update.php" method="POST" enctype="multipart/form-data"  onchange="document.getElementById('blah 2').src = window.URL.createObjectURL(this.files[0])">
                                <div class="mb-3">
                                    <label for="">Footer Logo</label>
                                    <input type="file" name="footer_logo" class="form-control" >
                                </div>
                                <div class="my-3">
                                        <img id="blah 2" width="100" src="upload/logo/<?php echo $after_assoc_logo['footer_logo'] ?>">
                                    </div>
                                    <?php if (isset( $_SESSION['exten2'])){?>
                                         <strong class='text-danger'> <?= $_SESSION['exten2']?> </strong>
                                    <?php } unset( $_SESSION['exten2'])?>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">update</button>
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