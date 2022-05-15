<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <title>voices.ge | Dashboard</title>
   <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/dashboard.css'); ?>" rel="stylesheet" type="text/css" />
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
                     <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Dashboard 
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        Orders
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Products
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="users"></span>
                        Customers
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2"></span>
                        Reports
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Integrations
                     </a>
                  </li>
               </ul>

               <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Saved reports</span>
                  <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                     <span data-feather="plus-circle"></span>
                  </a>
               </h6>
               <ul class="nav flex-column mb-2">
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                     </a>
                  </li>
               </ul>
            </div>
         </nav>

         <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h1 class="h2">Dashboard</h1>
            </div>

            

