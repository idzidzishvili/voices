<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <title>voices.ge | Dashboard</title>
   <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/fontawesome-all.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/summernote.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/dashboard.css'); ?>" rel="stylesheet" type="text/css" />
   <script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
</head>

<body>

   <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">voices.ge</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav px-3">
         <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
         </li>
      </ul>
   </nav>

   <div class="container-fluid">
      <div class="row">
         <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link <?= $page=='actors'?'active':''?>" href="<?= base_url('admin/actors')?>">
                        <span data-feather="home"></span>
                        მსახიობები 
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        მსახიობის კატეგორიები
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        ხმის კატეგორიები
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="users"></span>
                        ხმის ენები
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2"></span>
                        ბანერი
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        სლაიდერი
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        სერვისები
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= $page=='partners'?'active':''?>" href="<?= base_url('admin/partners')?>">
                        <span data-feather="layers"></span>
                        პარტნიორები
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= $page=='aboutus'?'active':''?>" href="<?= base_url('admin/aboutus')?>">
                        <span data-feather="layers"></span>
                        ჩვენს შესახებ
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        ფასის კალკულატორი
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link <?= $page=='contact'?'active':''?>" href="<?= base_url('admin/contact')?>">
                        <span data-feather="layers"></span>
                        კონტაქტი
                     </a>
                  </li>
               </ul>               
            </div>
         </nav>

         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            

            

