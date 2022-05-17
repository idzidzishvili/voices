<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="keywords" content="">
   <meta name="description" content="">
   <title>Fmradio - FM Radio Bootstrap HTML5 Template</title>
   <link rel="icon" href="assets/img/favicon.png">
   <link href="<?= base_url('assets/css/fontawesome-all.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/slick.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/venobox.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
   <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
</head>

<body>

   <div class="preloader">
      <div class="loader">
         <span></span>
         <span></span>
      </div>
   </div>


   <div class="back2top-btn"><a href="index.html#"><i class="fal fa-long-arrow-alt-up"></i></a></div>

   <header class="header-part">
      <div class="header-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-6"><a class="header-logo" href="index.html#"><img src="<?= base_url('assets/images/logo.png') ?>" alt="logo"></a></div>
               <div class="col-lg-6">
                  <div class="header-btn">
                     <!-- <a class="btn btn-outline" href="sponsor.html"><i class="far fa-paper-plane"></i><span>Join As A Sponsor</span></a> -->
                     <?php echo anchor($this->lang->switch_uri('ge'), '<img src="'.base_url('assets/images/ka.png').'">', ['title' => 'Georgian', 'class' => 'lang-flag']); ?>                     
                     <?php echo anchor($this->lang->switch_uri('en'), '<img src="'.base_url('assets/images/en.png').'">', ['title' => 'English', 'class' => 'lang-flag']); ?>                     
                     <?php echo anchor($this->lang->switch_uri('ru'), '<img src="'.base_url('assets/images/ru.png').'">', ['title' => 'Russian', 'class' => 'lang-flag']); ?>              
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
                  <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo"></a><button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>
               <div class="navbar-overlay">
                  <div class="navbar-slide">
                     <div class="slide-head"><a href="index.html#"><img src="<?= base_url('assets/img/logo.png') ?>" alt="logo"></a><button class="cencel"><i class="fas fa-times"></i></button></div>
                     <ul class="navbar-list">
                        <li class="navbar-item navbar-dropdown"><a class="navbar-link" href="index.html#"><span><i class="fas fa-home"></i> <?= lang('home') ?> </span><small class="fas fa-chevron-down"></small></a>
                           <ul class="dropdown-list">
                              <li><a class="dropdown-link" href="index.html"><i class="fal fa-microphone-alt mr-1"></i> Home Demo 01</a></li>
                              <li><a class="dropdown-link" href="index-2.html"><i class="fal fa-microphone-alt mr-1"></i> Home Demo 02</a></li>
                              <li><a class="dropdown-link" href="index-3.html"><i class="fal fa-microphone-alt mr-1"></i> Home Demo 03</a></li>
                           </ul>
                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="about.html"><span><i class="far fa-microphone"></i>  <?= lang('services') ?> </span></a></li>
                        <li class="navbar-item navbar-dropdown"><a class="navbar-link" href="index.html#"><span><i class="far fa-microphone"></i> <?= lang('aboutUs') ?> </span><small class="fas fa-chevron-down"></small></a>
                           <ul class="dropdown-list">
                              <li><a class="dropdown-link" href="team.html"><i class="fal fa-microphone-alt mr-1"></i> Team Members</a></li>
                              <li><a class="dropdown-link" href="video.html"><i class="fal fa-microphone-alt mr-1"></i> Videos</a></li>
                              <li><a class="dropdown-link" href="gallery.html"><i class="fal fa-microphone-alt mr-1"></i> Gallery</a></li>
                              <li><a class="dropdown-link" href="sponsor.html"><i class="fal fa-microphone-alt mr-1"></i> Join As A Sponsor</a></li>
                              <li><a class="dropdown-link" href="faq.html"><i class="fal fa-microphone-alt mr-1"></i> Faq</a></li>
                              <li><a class="dropdown-link" href="login.html"><i class="fal fa-microphone-alt mr-1"></i> Login</a></li>
                              <li><a class="dropdown-link" href="register.html"><i class="fal fa-microphone-alt mr-1"></i> Register</a></li>
                              <li><a class="dropdown-link" href="forgot-password.html"><i class="fal fa-microphone-alt mr-1"></i> Forgot Password</a></li>
                              <li><a class="dropdown-link" href="404-error.html"><i class="fal fa-microphone-alt mr-1"></i> 404 Error</a></li>
                              <li><a class="dropdown-link" href="term-condition.html"><i class="fal fa-microphone-alt mr-1"></i> Terms & Conditions</a></li>
                              <li><a class="dropdown-link" href="privacy-policy.html"><i class="fal fa-microphone-alt mr-1"></i> Privacy Policy</a></li>
                           </ul>
                        </li>
                        <li class="navbar-player">
                           <div class="player"><button class="player-btn" id="play-pause-button"><i class="far fa-play"></i></button></div>
                        </li>
                        <li class="navbar-item navbar-dropdown"><a class="navbar-link" href="index.html#"><span><i class="far fa-blog"></i> <?= lang('blog') ?> </span><small class="fas fa-chevron-down"></small></a>
                           <ul class="dropdown-list">
                              <li><a class="dropdown-link" href="blog-list.html"><i class="fal fa-microphone-alt mr-1"></i> Blog list</a></li>
                              <li><a class="dropdown-link" href="blog-details.html"><i class="fal fa-microphone-alt mr-1"></i> blog details</a></li>
                           </ul>
                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="contact.html"><span><i class="far fa-user-headset"></i> <?= lang('aboutUs') ?></span></a></li>
                        <li class="navbar-item"><a class="navbar-link" href="contact.html"><span><i class="fab fa-facebook"></i></span></a></li>
                        <li class="navbar-item"><a class="navbar-link" href="contact.html"><span><i class="fab fa-instagram"></i></span></a></li>
                        <li class="navbar-item"><a class="navbar-link" href="contact.html"><span><i class="fab fa-linkedin"></i></span></a></li>
                     </ul>
                     <div class="navbar-btn"><a class="btn btn-outline" href="sponsor.html"><i class="far fa-paper-plane"></i><span>Join As A Sponsor</span></a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>

   <div class="bottom-player">
      <div class="player"><button class="player-btn" id="play-pause-button2"><i class="far fa-play"></i></button></div>
   </div>

   <div class="audio-part">
      <audio id="sound">
         <source src="<?= base_url('assets/audio/audio.mp3') ?>" type="audio/mpeg">
      </audio>
   </div>

   <main class="banner-slider">
      <section class="banner-1" style="background: url(assets/img/banner-1.jpg);">
         <div class="banner-oly">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="banner-content">
                        <h1>WE ARE FMRADIO STAY TUNE - 88.0</h1>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable <br> content
                           of a page when looking at its layout.
                        </p><a href="index.html#" class="btn btn-inline"><i class="far fa-satellite-dish"></i><span>listen us live</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="banner-2" style="background: url(assets/img/banner-2.jpg);">
         <div class="banner-oly">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="banner-content">
                        <h1>WE ARE FMRADIO STAY TUNE - 88.0</h1>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable <br> content
                           of a page when looking at its layout.
                        </p>
                        <a href="index.html#" class="btn btn-inline"><i class="far fa-satellite-dish"></i><span>listen us live</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="banner-3" style="background: url(assets/img/banner-3.jpg);">
         <div class="banner-oly">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="banner-content">
                        <h1>WE ARE FMRADIO STAY TUNE - 88.0</h1>
                        <p>
                           It is a long established fact that a reader will be distracted by the readable <br> content
                           of a page when looking at its layout.
                        </p>
                        <a href="index.html#" class="btn btn-inline"><i class="far fa-satellite-dish"></i><span>listen us live</span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>



   <section class="section show-part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-heading">
                  <h2>Show Schedule</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div id="show-menu" class="show-menu">
                  <ul class="nav nav-tabs">
                     <li><a href="#saturday" class="nav-link active" data-toggle="tab">Saturday</a></li>
                     <li><a href="#sunday" class="nav-link" data-toggle="tab">Sunday</a></li>
                     <li><a href="#monday" class="nav-link" data-toggle="tab">Monday</a></li>
                     <li><a href="#tuesday" class="nav-link" data-toggle="tab">Tuesday</a></li>
                     <li><a href="#wednesday" class="nav-link" data-toggle="tab">Wednesday</a></li>
                     <li><a href="#thursday" class="nav-link" data-toggle="tab">Thursday</a></li>
                     <li><a href="#friday" class="nav-link" data-toggle="tab">Friday</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">

               <div class="tab-pane active" id="saturday">
                  <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-1.jpg') ?>" alt="show-1"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>07:00 - 09:00am</p>
                                    <h4>The Music Time</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-1.jpg') ?>" alt="host-1"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Graha, Delor, Willi</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-2.jpg') ?>" alt="show-2"></div>
                              <div class="show-overlay">
                                 <div class="show-active"><img src="<?= base_url('assets/img/sound.gif') ?>" alt="sound"></div>
                                 <div class="show-time">
                                    <p>09:00 - 10:00am</p>
                                    <h4>The Couple Goal</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Preston</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:00 - 11:00am</p>
                                    <h4>The Public Talks</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Victor, Bridwell</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-4.jpg') ?>" alt="show-4"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>11:00 - 12:00pm</p>
                                    <h4>Traffic Control News</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Pawlowski</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-5.jpg') ?>" alt="show-5"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>01:30 - 02:30pm</p>
                                    <h4>The Daily Prank</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Jastine</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-6.jpg') ?>" alt="show-6"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>Music My Soul</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-6.jpg') ?>" alt="host-6"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ David, Martinez</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-7.jpg') ?>" alt="show-7"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>06:30 - 10:30pm</p>
                                    <h4>The Love Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Clopton</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-8.jpg') ?>" alt="show-8"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:30 - 02:00am</p>
                                    <h4>The Night Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-8.jpg') ?>" alt="host-8"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Rosemarie, Allen</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tab-pane" id="sunday">
                  <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-1.jpg') ?>" alt="show-1"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>07:00 - 09:00am</p>
                                    <h4>The Music Time</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-1.jpg') ?>" alt="host-1"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Graha, Delor, Willi</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-4.jpg') ?>" alt="show-4"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>09:00 - 10:00am</p>
                                    <h4>The Couple Goal</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Preston</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:00 - 11:00am</p>
                                    <h4>The Public Talks</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Victor, Bridwell</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-2.jpg') ?>" alt="show-2"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>11:00 - 12:00pm</p>
                                    <h4>Traffic Control News</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Pawlowski</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-5.jpg') ?>" alt="show-5"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>01:30 - 02:30pm</p>
                                    <h4>The Daily Prank</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Jastine</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-6.jpg') ?>" alt="show-6"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>Music My Soul</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-6.jpg') ?>" alt="host-6"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ David, Martinez</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-7.jpg') ?>" alt="show-7"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>The Love Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Clopton</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-8.jpg') ?>" alt="show-8"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:30 - 02:00am</p>
                                    <h4>The Night Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-8.jpg') ?>" alt="host-8"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Rosemarie, Allen</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tab-pane" id="monday">
                  <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>07:00 - 09:00am</p>
                                    <h4>The Music Time</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-1.jpg') ?>" alt="host-1"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Graha, Delor, Willi</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-7.jpg') ?>" alt="show-7"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>09:00 - 10:00am</p>
                                    <h4>The Couple Goal</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-1.jpg') ?>" alt="host-1"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Graha, Delor, Willi</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:00 - 11:00am</p>
                                    <h4>The Public Talks</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Victor, Bridwell</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-7.jpg') ?>" alt="show-7"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>11:00 - 12:00pm</p>
                                    <h4>Traffic Control News</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Pawlowski</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-5.jpg') ?>" alt="show-5"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>01:30 - 02:30pm</p>
                                    <h4>The Daily Prank</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Jastine</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-6.jpg') ?>" alt="show-6"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>Music My Soul</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-6.jpg') ?>" alt="host-6"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ David, Martinez</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-2.jpg') ?>" alt="show-2"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>The Love Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Clopton</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-8.jpg') ?>" alt="show-8"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:30 - 02:00am</p>
                                    <h4>The Night Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-8.jpg') ?>" alt="host-8"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Rosemarie, Allen</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tab-pane" id="tuesday">
                  <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-1.jpg') ?>" alt="show-1"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>07:00 - 09:00am</p>
                                    <h4>The Music Time</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-1.jpg') ?>" alt="host-1"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Graham</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-4.jpg') ?>" alt="show-4"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>09:00 - 10:00am</p>
                                    <h4>The Couple Goal</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Preston</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:00 - 11:00am</p>
                                    <h4>The Public Talks</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Victor, Bridwell</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-7.jpg') ?>" alt="show-7"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>11:00 - 12:00pm</p>
                                    <h4>Traffic Control News</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-1.jpg') ?>" alt="host-1"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Pawl, Victor, Preston</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-5.jpg') ?>" alt="show-5"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>01:30 - 02:30pm</p>
                                    <h4>The Daily Prank</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Jastine</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-6.jpg') ?>" alt="show-6"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>Music My Soul</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-6.jpg') ?>" alt="host-6"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ David, Martinez</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-2.jpg') ?>" alt="show-2"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>The Love Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Clopton, David</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-8.jpg') ?>" alt="show-8"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:30 - 02:00am</p>
                                    <h4>The Night Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-8.jpg') ?>" alt="host-8"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Rosemarie</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tab-pane" id="wednesday">
                  <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-1.jpg') ?>" alt="show-1"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>07:00 - 09:00am</p>
                                    <h4>The Music Time</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-1.jpg') ?>" alt="host-1"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Graham, Delores</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-4.jpg') ?>" alt="show-4"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>09:00 - 10:00am</p>
                                    <h4>The Couple Goal</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Preton, Delor, Briell</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>11:00 - 12:00pm</p>
                                    <h4>Traffic Control News</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Pawlowski, Preston</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-7.jpg') ?>" alt="show-7"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>01:30 - 02:30pm</p>
                                    <h4>The Daily Prank</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Jastine</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-1.jpg') ?>" alt="show-1"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>Music My Soul</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ David</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-6.jpg') ?>" alt="show-6"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>The Love Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-6.jpg') ?>" alt="host-6"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Clopton, Jastine</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-2.jpg') ?>" alt="show-2"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:00 - 11:00am</p>
                                    <h4>The Public Talks</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Bridwell</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:30 - 02:00am</p>
                                    <h4>The Night Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Rosemarie, Allen</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tab-pane" id="thursday">
                  <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-1"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>07:00 - 09:00am</p>
                                    <h4>The Music Time</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Graham, Delores</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-4.jpg') ?>" alt="show-4"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>09:00 - 10:00am</p>
                                    <h4>The Couple Goal</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Preston</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-1.jpg') ?>" alt="show-1"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:00 - 11:00am</p>
                                    <h4>The Public Talks</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-1.jpg') ?>" alt="host-1"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Victor, Bridwell, David</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-7.jpg') ?>" alt="show-7"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>11:00 - 12:00pm</p>
                                    <h4>Traffic Control News</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Pawlowski</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-5.jpg') ?>" alt="show-5"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>01:30 - 02:30pm</p>
                                    <h4>The Daily Prank</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Jastine</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-6.jpg') ?>" alt="show-6"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>Music My Soul</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-6.jpg') ?>" alt="host-6"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ David, Martinez</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-4.jpg') ?>" alt="show-4"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>The Love Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Clopton</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-8.jpg') ?>" alt="show-8"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:30 - 02:00am</p>
                                    <h4>The Night Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-8.jpg') ?>" alt="host-8"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Rosemarie, Allen</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tab-pane" id="friday">
                  <div class="row">
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>07:00 - 09:00am</p>
                                    <h4>The Music Time</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-6.jpg') ?>" alt="host-6"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Graha, Delor, Willi</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-4.jpg') ?>" alt="show-4"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>09:00 - 10:00am</p>
                                    <h4>The Couple Goal</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Preston</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-3.jpg') ?>" alt="show-3"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:00 - 11:00am</p>
                                    <h4>The Public Talks</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-4.jpg') ?>" alt="host-4"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Victor, Bridwell</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-7.jpg') ?>" alt="show-7"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>11:00 - 12:00pm</p>
                                    <h4>Traffic Control News</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Pawlowski</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-8.jpg') ?>" alt="show-8"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>01:30 - 02:30pm</p>
                                    <h4>The Daily Prank</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-8.jpg') ?>" alt="host-8"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Jastine</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-6.jpg') ?>" alt="show-6"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>Music My Soul</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-6.jpg') ?>" alt="host-6"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-7.jpg') ?>" alt="host-7"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ David, Martinez</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-2.jpg') ?>" alt="show-2"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>02:30 - 05:30pm</p>
                                    <h4>The Love Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-2.jpg') ?>" alt="host-2"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Clopton</h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="show-card">
                           <div class="show-content">
                              <div class="show-bg"><img src="<?= base_url('assets/img/show-5.jpg') ?>" alt="show-5"></div>
                              <div class="show-overlay">
                                 <div class="show-time">
                                    <p>10:30 - 02:00am</p>
                                    <h4>The Night Talk</h4>
                                 </div>
                                 <ul class="show-host">
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-3.jpg') ?>" alt="host-3"></a></li>
                                    <li><a href="index.html#"><img src="<?= base_url('assets/img/host-5.jpg') ?>" alt="host-5"></a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="show-meta">
                              <h5>RJ Rosemarie, Allen</h5>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="show-btn"><a class="btn btn-outline" href="show.html"><span>show more</span> <i class="far fa-arrow-right ml-2"></i></a></div>
            </div>
         </div>
      </div>
   </section>


   <section class="section team-part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-heading">
                  <h2> our team members</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="team-slider slider-arrow">
                  <div class="team-card">
                     <div class="team-img"><img src="<?= base_url('assets/img/team-1.jpg') ?>" alt="team-1">
                        <div class="team-overlay">
                           <ul class="team-icon">
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-twitter"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-linkedin-in"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="team-meta">
                        <h4>Crys Holmes</h4>
                        <p>Radio Jockey</p>
                     </div>
                  </div>
                  <div class="team-card">
                     <div class="team-img"><img src="<?= base_url('assets/img/team-2.jpg') ?>" alt="team-2">
                        <div class="team-overlay">
                           <ul class="team-icon">
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-twitter"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-linkedin-in"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="team-meta">
                        <h4>Ameli Garcia</h4>
                        <p>Radio Jockey</p>
                     </div>
                  </div>
                  <div class="team-card">
                     <div class="team-img"><img src="<?= base_url('assets/img/team-3.jpg') ?>" alt="team-3">
                        <div class="team-overlay">
                           <ul class="team-icon">
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-twitter"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-linkedin-in"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="team-meta">
                        <h4>Todd Barrett</h4>
                        <p>Music Composer</p>
                     </div>
                  </div>
                  <div class="team-card">
                     <div class="team-img"><img src="<?= base_url('assets/img/team-4.jpg') ?>" alt="team-4">
                        <div class="team-overlay">
                           <ul class="team-icon">
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-twitter"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-linkedin-in"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="team-meta">
                        <h4>Micha Montag</h4>
                        <p>Radio Jockey</p>
                     </div>
                  </div>
                  <div class="team-card">
                     <div class="team-img"><img src="<?= base_url('assets/img/team-5.jpg') ?>" alt="team-1">
                        <div class="team-overlay">
                           <ul class="team-icon">
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-twitter"></i></a></li>
                              <li><a class="icon icon-inline" href="index.html#"><i class="fab fa-linkedin-in"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="team-meta">
                        <h4>Joe Lavender</h4>
                        <p>Radio Jockey</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="team-btn"><a class="btn btn-outline" href="team.html"><span>show more</span> <i class="far fa-arrow-right ml-2"></i></a></div>
            </div>
         </div>
      </div>
   </section>


   <section class="section video-part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-heading">
                  <h2>Fmradio Videos</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="video-slider slider-arrow">
                  <div class="video-card">
                     <div class="video-img"><img src="<?= base_url('assets/img/video-1.jpg') ?>" alt="video-1">
                        <div class="video-overlay"><a class="venobox icon icon-inline" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=Q9uat3ticA8"><i class="far fa-play"></i></a></div>
                     </div>
                     <div class="video-content">
                        <h5>World Music Awards 2021</h5>
                        <p>There are many variations of passages of Lorem Ipsum available the majority have suffered alteration.</p>
                     </div>
                  </div>
                  <div class="video-card">
                     <div class="video-img"><img src="<?= base_url('assets/img/video-2.jpg') ?>" alt="video-2">
                        <div class="video-overlay"><a class="venobox icon icon-inline" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=Q9uat3ticA8"><i class="far fa-play"></i></a></div>
                     </div>
                     <div class="video-content">
                        <h5>World Music Awards 2021</h5>
                        <p>There are many variations of passages of Lorem Ipsum available the majority have suffered alteration.</p>
                     </div>
                  </div>
                  <div class="video-card">
                     <div class="video-img"><img src="<?= base_url('assets/img/video-3.jpg') ?>" alt="video-3">
                        <div class="video-overlay"><a class="venobox icon icon-inline" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=Q9uat3ticA8"><i class="far fa-play"></i></a></div>
                     </div>
                     <div class="video-content">
                        <h5>World Music Awards 2021</h5>
                        <p>There are many variations of passages of Lorem Ipsum available the majority have suffered alteration.</p>
                     </div>
                  </div>
                  <div class="video-card">
                     <div class="video-img"><img src="<?= base_url('assets/img/video-4.jpg') ?>" alt="video-4">
                        <div class="video-overlay"><a class="venobox icon icon-inline" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=Q9uat3ticA8"><i class="far fa-play"></i></a></div>
                     </div>
                     <div class="video-content">
                        <h5>World Music Awards 2021</h5>
                        <p>There are many variations of passages of Lorem Ipsum available the majority have suffered alteration.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="team-btn"><a class="btn btn-outline" href="video.html"><span>show more</span> <i class="far fa-arrow-right ml-2"></i></a></div>
            </div>
         </div>
      </div>
   </section>


   <section class="section gallery-part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-heading">
                  <h2> Photo Gallery</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="gallery-content">
                  <ul class="gallery-list">
                     <li class="hori-img"><img src="<?= base_url('assets/img/gallery-1.jpg') ?>" alt="gallery-1"></li>
                     <li class="big-img"><img src="<?= base_url('assets/img/gallery-2.jpg') ?>" alt="gallery-2"></li>
                     <li><img src="<?= base_url('assets/img/gallery-3.jpg') ?>" alt="gallery-3"></li>
                     <li><img src="<?= base_url('assets/img/gallery-4.jpg') ?>" alt="gallery-4"></li>
                     <li><img src="<?= base_url('assets/img/gallery-5.jpg') ?>" alt="gallery-5"></li>
                     <li><img src="<?= base_url('assets/img/gallery-6.jpg') ?>" alt="gallery-6"></li>
                     <li class="hori-img"><img src="<?= base_url('assets/img/gallery-7.jpg') ?>" alt="gallery-7"></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="gallery-btn"><a class="btn btn-outline" href="gallery.html"><span>show more</span> <i class="far fa-arrow-right ml-2"></i></a></div>
            </div>
         </div>
      </div>
   </section>


   <section class="section blog-part">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-heading">
                  <h2>Blog Post</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="blog-slider slider-arrow">
                  <div class="blog-card"><img src="<?= base_url('assets/img/blog-1.jpg') ?>" alt="blog-1">
                     <div class="blog-overlay">
                        <p><i class="far fa-clock"></i> mar 21, 2021</p>
                        <h3><a href="index.html#">There are many variations of passages</a></h3><a class="btn btn-outline" href="index.html#">read more</a>
                     </div>
                  </div>
                  <div class="blog-card"><img src="<?= base_url('assets/img/blog-2.jpg') ?>" alt="blog-2">
                     <div class="blog-overlay">
                        <p><i class="far fa-clock"></i> mar 21, 2021</p>
                        <h3><a href="index.html#">There are many variations of passages</a></h3><a class="btn btn-outline" href="index.html#">read more</a>
                     </div>
                  </div>
                  <div class="blog-card"><img src="<?= base_url('assets/img/blog-3.jpg') ?>" alt="blog-3">
                     <div class="blog-overlay">
                        <p><i class="far fa-clock"></i> mar 21, 2021</p>
                        <h3><a href="index.html#">There are many variations of passages</a></h3><a class="btn btn-outline" href="index.html#">read more</a>
                     </div>
                  </div>
                  <div class="blog-card"><img src="<?= base_url('assets/img/blog-4.jpg') ?>" alt="blog-4">
                     <div class="blog-overlay">
                        <p><i class="far fa-clock"></i> mar 21, 2021</p>
                        <h3><a href="index.html#">There are many variations of passages</a></h3><a class="btn btn-outline" href="index.html#">read more</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="blog-btn"><a class="btn btn-outline" href="blog-list.html"><span>show more</span> <i class="far fa-arrow-right ml-2"></i></a></div>
            </div>
         </div>
      </div>
   </section>


   <footer class="footer-part footer-gape">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="footer-logo">
                  <a href="index.html#"><img src="<?= base_url('assets/img/logo.png') ?>" alt="logo"></a>
                  <ul>
                     <li><a class="icon icon-inline" href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a class="icon icon-inline" href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a class="icon icon-inline" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                     <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a></li>
                     <li><a class="icon icon-inline" href="#"><i class="fab fa-youtube"></i></a></li>
                  </ul>
               </div>
               <form class="news-form"><input type="text" placeholder="Enter email for Newsletter"><button class="btn btn-inline"><i class="far fa-envelope"></i><span>Subscribe</span></button></form>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-5">
               <div class="footer-heading">
                  <h3>download the app</h3>
                  <p>
                     We are a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed to using content here content here making it look like readable english.
                  </p>
               </div>
               <div class="download-part">
                  <h5>available on -</h5>
                  <div class="d-flex justify-content-start">
                     <a href="#"><img src="<?= base_url('assets/img/google.png') ?>" alt="google"></a>
                     <a href="#"><img src="<?= base_url('assets/img/app.png') ?>" alt="app"></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="footer-heading">
                  <h3>important links</h3>
               </div>
               <ul class="footer-link">
                  <li><a href="#"><i class="fas fa-angle-right"></i>About Us</a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i>Contact Us</a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i>Join As A Sponsor</a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i>Faq</a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i>Team Members</a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i>Terms & Conditions</a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a></li>
               </ul>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="footer-heading">
                  <h3>contact us</h3>
                  <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</p>
               </div>
               <ul class="footer-address">
                  <li><i class="far fa-map-marker-alt"></i>
                     <p>486 Parkview Drive NY, USA.</p>
                  </li>
                  <li><i class="far fa-envelope"></i>
                     <p><a href="https://themes.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="086d70696578646d486c6765696166266b6765">[email&#160;protected]</a></p>
                  </li>
                  <li><i class="far fa-phone"></i>
                     <p>+1 123-543-7894</p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </footer>


   <section class="copy-part">
      <div class="container">
         <p>&copy; Copyright 2021 Fmradio All Right Reserved. <i class="far fa-heart"></i> Love With Fmradio.</p>
      </div>
   </section>


   <script src="<?= base_url('assets/js/jquery-3.6.0.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/slick.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/slick.js'); ?>"></script>
   <script src="<?= base_url('assets/js/counterup.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/counterup.js'); ?>"></script>
   <script src="<?= base_url('assets/js/venobox.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/venobox.js'); ?>"></script>
   <script src="<?= base_url('assets/js/player.js'); ?>"></script>
   <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>

</html>