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
   </main>

   
   <section class="section show-part">
      <div class="container container-w">
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
                        <button type="button" class="gender-button" data-mixitup-control data-genderid="<?= $gender->id ?>" data-filter=".gender<?= $gender->id ?>">
                           <?=$gender->gender?>
                        </button>                   
                  <?php endforeach;?> 
               </div>
            </div>
         </div>

               
         <div class="row actors" id="mixitupcontainer">
            <?php foreach($actors as $actor): ?>
               <div class="col-sm-6 col-md-4 col-lg-3 col-xl-20p mix gender<?= $actor->gender_id ?>">
                  <div class="actor-card" data-actorid="<?= $actor->id?>">
                     <div class="actor-content">
                        <div class="actor-bg">
                           <img src="<?= base_url('uploads/actors/'.$actor->image) ?>" alt="<?=$actor->name?>">
                        </div>
                        <div class="actor-overlay">
                           <div class="spinner">
                              <div class="r1"></div>
                              <div class="r2"></div>
                              <div class="r3"></div>
                              <div class="r4"></div>
                              <div class="r5"></div>
                           </div>

                        </div>
                     </div>
                     <div class="actor-meta">
                        <span class="pl-1">
                           <!-- <?= 'V'.str_pad($actor->id, 3, "0", STR_PAD_LEFT) ?> -->
                           <?= $actor->name?>
                        </span>
                        <button class="bg-transparent border-0 ml-auto pr-1" type="button" data-toggle="modal" data-target="#priceCalcModal" data-actorprice="<?=$actor->langPrice?>">
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
                  <input type="hidden" id="actor-price">
                  <input type="hidden" id="lang-id" value="<?= $voiceLanguageId ?>">
                  <div class="modal-header bg-primary py-3">
                     <h5 class="modal-title text-white"><?= lang('priceCalculator') ?></h5>
                     <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">                 
                     <label for="voice-text" class="col-form-label w-100 text-center">ერთ წუთამდე ქრონომეტრაჟის ტექსტის საფასური სტანდარტულია:</label>
                     <textarea class="form-control mb-2" id="voice-text" rows="10"></textarea>
                     <span id="chrono-results"></span>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Send message2</button>
                  </div>
               </div>
            </div>
         </div>


         <script>
            var voiceText = document.getElementById("voice-text");
            voiceText.addEventListener("keydown", function(e) {
               var price = document.getElementById("actor-price").value;
               var words = voiceText.value.trim().match(/(\s+)/g).length;
               if(voiceText.value.length) {words++;}
               var sumPrice;
               var time = (words/2);
               // console.log(words);
               if(time<60){
                  sumPrice = price;
               }else if(time>=60 && time<120){
                  sumPrice = parseInt(price) + parseInt(Math.round((time-60)*(price/200)));
               }else if(time>=120 && time<180){
                  sumPrice = parseInt(price) + parseInt(Math.round((time-120)*(price/250) + price/200*60));
               }else if(time>=180 && time<240){
                  sumPrice = parseInt(price) + parseInt(Math.round((time-180)*(price/333.33) + price/200*60 + price/250*60));
               }else if(time>=240 && time<300){
                  sumPrice = parseInt(price) + parseInt(Math.round((time-240)*(price/500) + price/200*60 + price/250*60 + price/333.33*60));
               }else if(time>=300 && time<=360){
                  sumPrice = parseInt(price) + parseInt(Math.round((time-300)*(price/1000) + price/200*60 + price/250*60 + price/333.33*60 + price/500*60));
               }else{
                  sumPrice = '6 წუთზე მეტი ქრონომეტრაჟის ტექსტის ჩაწერის შემთხვევაში დაგვიკავშირდით პირადად.';
               }
               if (time>360){
                  document.getElementById("chrono-results").innerHTML = sumPrice
               }else{
                  var t = '@words@ სიტყვა; @time@ წამი; ფასი: @price@₾';
                  t = t.replace('@words@', words).replace('@time@', time).replace('@price@', sumPrice);
                  document.getElementById("chrono-results").innerHTML = t;
               }
            });

            
            $(document).ready(function () {
               var mixer = mixitup('#mixitupcontainer', {selectors: {control: '[data-mixitup-control]'}});
               var lastGender = 0;
               $('.gender-button').on('click', function(e){
                  var genderid = $(e.target).data('genderid');
                  if(lastGender == genderid){
                     $(e.target).removeClass('mixitup-control-active');
                     mixer.filter('all');
                     lastGender = 0;
                  }else{
                     lastGender = genderid;
                  }
               });
            });

         </script>
 
      </div>
   </section>








<?php $this->load->view('footer');?>