<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="keywords" content="">
   <meta name="description" content="">
   <title>VOICES>GE :: Admin</title> 
   <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/apple-touch-icon.png'); ?>">
   <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon-32x32.png'); ?>">
   <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png'); ?>">
   <link rel="manifest" href="<?= base_url('assets/images/site.webmanifest'); ?>">
   <link rel="mask-icon" href="<?= base_url('assets/images/safari-pinned-tab.svg'); ?>" color="#5bbad5">


   <link href="<?= base_url('assets/css/fontawesome-all.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
   <script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
</head>

<body>

<section class="login">
   <div class="container">
      <div class="col-lg-6 mx-auto login-box">
         <div>
            <h3>ავტორიზაცია</h3>
         </div>
         <div class="login-form">
            <?= form_open(site_url('login')) ?>
               <div class="form-group">
                  <label>მომხმარებელი</label>
                  <div class="form-group"><input type="text" class="text-white" name="username" placeholder="მომხმარებელი"><i class="far fa-user"></i></div>
               </div>
               <div class="form-group">
                  <label>პაროლი</label>
                  <div class="form-group"><input type="password" class="text-white" name="password" placeholder="პაროლი"><i class="far fa-lock"></i></div>
               </div>
               <div class="row">
                  <div class="col-6">
                     <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                     </div>
                  </div>
               </div>
               <button class="login-btn" type="submit"><i class="far fa-sign-in-alt mr-2"></i>ავტორიზაცია</button>
            <?= form_close();?>
         </div>
      </div>
   </div>
   
</section>
   <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

</body>

</html>