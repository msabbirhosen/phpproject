<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style> 
      .pass_div {
        position: relative;
      }
      .pass_div i {
        position: absolute;
        top: 32px ;
        right: 0 ;
        width: 37px;
         height: 37px;
          background:green; 
          color: white;
           text-align: center ; 
           line-height: 36px;
           border-top-right-radius: 5px;
           border-bottom-right-radius: 5px;
           cursor: pointer;

      }
    </style>

  </head>

   <body>
   <div class="container">
    <div class="row ">
     <div class="col-lg-6 m-auto ">
       <div class="card mt-3 ">
        <div class="card-header bg-success">
          <h3 class="text-white"> Register User </h3>
        </div>
        <div class="card-body">

        <?php if (isset($_SESSION['success'])){ ?>
            <div class="alert alert-success"> <?= $_SESSION['success']?></div>
          <?php } unset($_SESSION['success']) ?>
          <?php if (isset($_SESSION['exit'])){ ?>
            <div class="alert alert-wornig"> <?= $_SESSION['exit']?></div>
          <?php } unset($_SESSION['exit']) ?>


         <form action="insert_POST.php" method="POST">
           <div class="mb-3">
              <label  class="form-label">Name</label>
                <input name="name" style="border-color:<?=(isset( $_SESSION['name_err'])?'red':'') ?>;" type="text" class="form-control" placeholder="Enter Your Name ">
               <?php if (isset( $_SESSION['name_err'])){?>
               <strong class='text-danger'> <?= $_SESSION['name_err']?> </strong>
               <?php } unset( $_SESSION['name_err'])?>
           </div>

           <div class="mb-3">
               <label  class="form-label">Email</label>
               <input name="email" style="border-color:<?=(isset( $_SESSION['eml_err'])?'red':'') ?>;" type="text" class="form-control" placeholder="Enter Your Email">
                <?php if (isset( $_SESSION['eml_err'])){?>
               <strong class='text-danger'> <?= $_SESSION['eml_err']?> </strong>
                <?php } unset( $_SESSION['eml_err'])?>
           </div>

           
           <div class="mb-3 pass_div" >
               <label  class="form-label">Password</label>
              <input id="pass" name="password"style="border-color:<?=(isset( $_SESSION['eml_err'])?'red':'') ?>;" type="password" class="form-control"  placeholder="Enter Your Password">
              <?php if (isset( $_SESSION['password_err'])){?>
               <strong class='text-danger'> <?= $_SESSION['password_err']?> </strong>
                <?php } unset( $_SESSION['password_err'])?>
                <i id="show_pass" class="fa fa-eye"></i>
           </div>



           <div class="mb-3">
               <label  class="form-label">Selet Gender</label>
                              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                    <label class="form-check-label" for="gender">
                      Male
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="gender1" value="female">
                    <label class="form-check-label" for="gender1">
                        Female
                    </label>
                    
                </div>
                <?php if (isset( $_SESSION['gen_err'])){?>
                              <strong class='text-danger'> <?= $_SESSION['gen_err']?> </strong>
                <?php } unset( $_SESSION['gen_err'])?>
           </div>
          <button type="submit" class="btn btn-success ">Submit</button>
         </form>

        </div>
       </div>
     </div>
    </div>
   </div>   
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js">
   </script>
   <script>
    $('#show_pass').click(function(){
     var pass = document.getElementById('pass');
     if(pass.type=='password'){
      pass.type = 'text';
     }
     else{
      pass.type = 'password';
     }
    })
   </script>
  </body>
</html>

