<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="keywords" content="">
   <meta name="description" content="">
   <title>VOICES>GE :: <?= lang('findYourVoice') ?></title> 
   <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/images/apple-touch-icon.png'); ?>">
   <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/images/favicon-32x32.png'); ?>">
   <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/favicon-16x16.png'); ?>">
   <link rel="manifest" href="<?= base_url('assets/images/site.webmanifest'); ?>">
   <link rel="mask-icon" href="<?= base_url('assets/images/safari-pinned-tab.svg'); ?>" color="#5bbad5">
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">
   <link href="<?= base_url('assets/css/fontawesome-all.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/slick.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/venobox.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
   <script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
</head>

<body class="body-<?=$this->lang->lang()?>">

   <div class="preloader">
      <div class="loader">
         <span></span>
         <span></span>
      </div>
   </div>


   <div class="back2top-btn"><a href="<?= site_url('/'); ?>"><i class="fal fa-long-arrow-alt-up"></i></a></div>

   <header class="header-part">
      <div class="header-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-6"><a class="header-logo" href="<?= site_url('/'); ?>"><img src="<?= base_url('assets/images/logo.png') ?>" alt="logo"></a></div>
               <div class="col-lg-6">
                  <div class="header-btn">
                     <?php echo anchor($this->lang->switch_uri('ge'), '<img src="'.base_url('assets/images/ka.png').'">', ['title' => 'Georgian', 'class' => 'lang-flag '.($this->lang->lang()=='ge'?'active':'')]); ?>                     
                     <?php echo anchor($this->lang->switch_uri('en'), '<img src="'.base_url('assets/images/en.png').'">', ['title' => 'English', 'class' => 'lang-flag '.($this->lang->lang()=='en'?'active':'')]); ?>                     
                     <?php echo anchor($this->lang->switch_uri('ru'), '<img src="'.base_url('assets/images/ru.png').'">', ['title' => 'Russian', 'class' => 'lang-flag '.($this->lang->lang()=='ru'?'active':'')]); ?>              
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>

   <nav class="navbar-part">
      <div class="navbar-bg">
         <div class="container">
            <div class="navbar-content"><a class="navbar-logo" href="index.html#">
                  <img src="<?= base_url('assets/images/logo.png') ?>" alt="logo"></a><button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>
               <div class="navbar-overlay">
                  <div class="navbar-slide">
                     <div class="slide-head"><a href="index.html#"><img src="<?= base_url('assets/images/logo.png') ?>" height="48" width="48" alt="logo"></a><button class="cencel"><i class="fas fa-times"></i></button></div>
                     <ul class="navbar-list">
                        <li class="navbar-item"><a class="navbar-link" href="<?=site_url('/')?>"><span class="caps-<?=$this->lang->lang()?>"><i class="far fa-home"></i> <?= lang('home') ?> </span></a></li>
                        <li class="navbar-item"><a class="navbar-link" href="<?=site_url('services')?>"><span class="caps-<?=$this->lang->lang()?>"><i class="far fa-headphones"></i> <?= lang('services') ?> </span></a></li>
                        <li class="navbar-item"><a class="navbar-link" href="<?=site_url('about-us')?>"><span class="caps-<?=$this->lang->lang()?>"><i class="far fa-microphone"></i> <?= lang('aboutUs') ?> </span></a></li>
                        <li class="navbar-player">
                           <div class="player"><button class="player-btn" id="play-pause-button1"><i class="far fa-play"></i></button></div>
                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="<?=site_url('blog')?>"><span class="caps-<?=$this->lang->lang()?>"><i class="far fa-blog"></i> <?= lang('blog') ?> </span></a></li>
                        <li class="navbar-item"><a class="navbar-link" href="<?=site_url('contact')?>"><span class="caps-<?=$this->lang->lang()?>"><i class="far fa-phone"></i> <?= lang('contact') ?></span></a></li>
                        <li class="navbar-item social">
                           <a class="navbar-link" href="https://www.facebook.com/Voicesge-106627137411297"><span><i class="fab fa-facebook-f"></i></span></a>
                        </li>
                        <li class="navbar-item social">
                           <a class="navbar-link" href="https://www.instagram.com/voices.ge/?fbclid=IwAR20j31n28k46yWBGTkPY4msUwZpzBeo2Q9_xddNnOwcI3O08TSbM_4pVws"><span><i class="fab fa-instagram"></i></span></a>
                        </li>
                        <li class="navbar-item social">
                           <a class="navbar-link" href="https://www.linkedin.com/company/voices-ge?fbclid=IwAR0VfnCsCbYHbhlx5V5fGSdA5rPBEoL6DgOmiTIRItGX_n-fyN44MjJTBJc"><span><i class="fab fa-linkedin-in"></i></span></a>
                        </li>
                        <li class="navbar-item lang d-lg-none pt-2">
                           <?php echo anchor($this->lang->switch_uri('ge'), '<img src="'.base_url('assets/images/ka.png').'">', ['title' => 'Georgian', 'class' => 'lang-flag '.($this->lang->lang()=='ge'?'active':'')]); ?>
                           <?php echo anchor($this->lang->switch_uri('en'), '<img src="'.base_url('assets/images/en.png').'">', ['title' => 'English', 'class' => 'lang-flag '.($this->lang->lang()=='en'?'active':'')]); ?>
                           <?php echo anchor($this->lang->switch_uri('ru'), '<img src="'.base_url('assets/images/ru.png').'">', ['title' => 'Russian', 'class' => 'lang-flag '.($this->lang->lang()=='ru'?'active':'')]); ?>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>

   <div class="bottom-player">
      <div class="player">
         <button class="player-btn" id="play-pause-button2"><i class="far fa-play"></i></button>
      </div>
   </div>

   <div class="audio-part">
      <audio id="sound">
         <source src="<?= base_url('assets/audio/audio.mp3')?>" type="audio/mpeg">
      </audio>
   </div>