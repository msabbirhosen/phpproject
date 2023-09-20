<?php 
session_start();
if(!isset($_SESSION['login_korcha'])){
header('location:login.php');
}

?>
	<?php require 'admin_header.php'; ?>
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">



				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <?php require 'admin_footer.php'; ?>
