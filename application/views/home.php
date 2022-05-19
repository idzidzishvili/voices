<?php $this->load->view('header');?>

   <div class="bottom-player">
      <div class="player"><button class="player-btn" id="play-pause-button2"><i class="far fa-play"></i></button></div>
   </div>

   <div class="audio-part">
      <audio id="sound">
         <source src="<?= base_url('assets/audio/audio.mp3') ?>" type="audio/mpeg">
      </audio>
   </div>

   <main class="banner-slider">
      <?php foreach($sliders as $slider):?>
         <section class="banner" style="background: url(assets/img/banner-1.jpg);">
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
      <?php endforeach;?>

      <!-- <section class="banner-2" style="background: url(assets/img/banner-2.jpg);">
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
      </section> -->

   </main>





   <section class="section show-part">
      <div class="container container-w">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-heading">
                  <h2>Show Schedule2</h2>
               </div>
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-lg-12 d-flex">
               <div class="lang-menu mr-3">                  
                  <?php foreach($voiceLanguages as $voiceLang): ?>                       
                        <a href="<?= site_url('?voicelang='.$voiceLang->dom)?>" class="<?= $voiceLanguageId==$voiceLang->id?'active':''?>" >
                           <span><?=$voiceLang->lang?></span>
                        </a>                   
                  <?php endforeach;?> 
               </div>
               <div class="lang-menu controls ml-auto">                  
                  <?php foreach($genders as $gender): ?>                       
                        <button type="button" class="gender-button" data-genderid="<?= $gender->id ?>" data-filter=".gender<?= $gender->id ?>">
                           <?=$gender->gender?>
                        </button>                   
                  <?php endforeach;?> 
               </div>
            </div>
         </div>


               
         <div class="row actors" id="mixitupcontainer">
            <?php foreach($actors as $actor): ?>
               <div class="col-sm-6 col-md-4 col-lg-3 col-xl-20p mix gender<?= $actor->gender_id ?>">
                  <div class="show-card">
                     <div class="show-content">
                        <div class="show-bg">
                           <img src="<?= base_url('main/actors/Ciko_Inauri.jpg') ?>" alt="show-1">
                        </div>
                        <div class="show-overlay">
                           <!-- <div class="show-time">
                              <p>07:00 - 09:00am</p>
                              <h4>The Music Time</h4>
                           </div> -->
                        </div>
                     </div>
                     <div class="show-meta">
                        <span class="pl-1"><?= 'V'.str_pad($actor->id, 3, "0", STR_PAD_LEFT) ?></span>
                        <button class="bg-transparent border-0 ml-auto pr-1" type="button"data-toggle="modal" data-target="#priceCalcModal" data-actorprice="<?=$actor->langPrice?>">
                           <i class="fa fa-calculator"></i>
                        </button>
                     </div>
                  </div>
               </div>
            <?php endforeach;?>
         </div>

         <div class="modal fade" id="priceCalcModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header bg-primary py-3">
                  <h5 class="modal-title text-white"><?= lang('priceCalculator') ?></h5>
                  <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <form>
                     <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                     </div>
                     <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                     </div>
                  </form>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send message2</button>
                  </div>
               </div>
            </div>
         </div>


            
  
      </div>
   </section>




































   <!-- <section class="section show-part">
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
   </section> -->


   <!-- <section class="section team-part">
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
   </section> -->



<?php $this->load->view('footer');?>