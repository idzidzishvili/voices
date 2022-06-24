<?php $this->load->view('header');?>

   <div class="bottom-player">
      <div class="player"><button class="player-btn" id="play-pause-button2"><i class="far fa-play"></i></button></div>
   </div>

   <div class="audio-part">
      <audio id="sound">
         <source src="<?= base_url('assets/audio/audio.mp3') ?>" type="audio/mpeg">
      </audio>
   </div>

   <main class="banner-slider" >
      <?php foreach($sliders as $slider):?>
         <section class="banner" >
            <img class="w-100" src="<?= base_url('assets/images/slider/'.$slider->{'img_'.$this->lang->lang()})?>">
         </section>
      <?php endforeach;?>           
   </main>

   <div class="position-relative d-none d-lg-block">
      <div class="d-flex scroll-to-voices pr-2">
         <a href="#voice-catalog" id="scroll2voices">
            <img src= "<?= base_url('assets/images/mouse-scroll.svg')?>" class="bouncing">
         </a>
      </div> 
   </div>
   
   <section class="section show-part" id="voice-catalog">
      <div class="container container-w">
         <div class="row mb-3">
            <div class="col-lg-12 lang-gender-bar">               
               <div class="lang-menu mr-lg-3 mb-3">
                  <i class="fa fa-angle-left" id="scrollleft"></i>
                  <div class="lang-items lang-items-<?=$this->lang->lang()?>">
                     <?php foreach($voiceLanguages as $voiceLang): ?>
                        <a href="<?= site_url('?voicelang='.strtolower($voiceLang->dom))?>">
                           <span class="caps-<?=$this->lang->lang()?> <?= $voiceLanguageId==$voiceLang->id?'active':''?>"><?=$voiceLang->lang?></span>
                        </a>
                     <?php endforeach;?>
                  </div>
                  <i class="fa fa-angle-right" id="scrollright"></i>
               </div>
               <div class="controls ml-auto mb-3">
                  <div class="gender-buttons">
                     <?php foreach($genders as $gender): ?>
                        <button type="button" class="gender-button caps-<?=$this->lang->lang()?>" data-mixitup-control data-genderid="<?= $gender->id ?>" data-filter=".gender<?= $gender->id ?>">
                           <?=$gender->gender?>
                        </button>
                     <?php endforeach;?> 
                  </div>
               </div>
            </div>
         </div>
               
         <div class="row actors" id="mixitupcontainer">
            <?php foreach($actors as $actor): ?>
               <div class="col-sm-6 col-md-4 col-lg-3 col-xl-20p mix gender<?= $actor->gender_id ?>">
                  <div class="actor-card" data-actorid="<?= $actor->id?>">
                     <div class="actor-content">
                        <div class="actor-bg">
                           <img src="<?= base_url('assets/images/actors/'.$actor->image) ?>" alt="<?=$actor->vid?>">
                        </div>
                        <div class="actor-overlay spinning">
                           <div class="spinner">
                              <div class="r1"></div><div class="r2"></div><div class="r3"></div><div class="r4"></div><div class="r5"></div>
                           </div>
                        </div>
                     </div>
                     <div class="actor-meta">
                        <span class="pl-1">
                           <!-- <?= 'V'.str_pad($actor->id, 3, "0", STR_PAD_LEFT) ?> -->
                           <?= $actor->vid ?>
                           <!-- <?= $actor->name?> -->
                        </span>
                        <div class="ml-auto d-flex">
                           <div class="lang-pills">
                              <?php foreach(explode(',', $actor->diffLangs) as $lang): ?>
                                 <a href="<?= site_url('?voicelang='.strtolower($lang))?>" class="lang-pill"><?= strtoupper($lang) ?></a>
                              <?php endforeach; ?>
                           </div>
                           <button class="bg-transparent border-0 pr-1" type="button" data-toggle="modal" data-target="#priceCalcModal" data-actorprice="<?=$actor->langPrice?>" data-actorvid="<?=$actor->vid?>" data-actorimage="<?=$actor->image?>">
                              <i class="fa fa-calculator"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            <?php endforeach;?>
         </div>

         <div class="modal fade" id="priceCalcModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <form id="email-form">
               <div class="modal-content">
                  <input type="hidden" id="actor-price">
                  <input type="hidden" id="vid">
                  <input type="hidden" id="lang-id" value="<?= $voiceLanguageId ?>">
                  <input type="hidden" name="csrf_token" id="csrf_token" value="<?= $this->security->get_csrf_hash() ?>">
                  <div class="modal-header py-1">
                     <div class="modal-header-controls">
                        <h5 class="modal-title" id="actor-vid"></h5>
                        <button type="button" class="ml-auto close " data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-price-calc">
                        <span class="caps-<?=$this->lang->lang()?> fw-600"><?= lang('priceCalculator') ?></span>
                     </div>
                  </div>
                  <div class="modal-body w-100 d-flex flex-column">
                     <div id="price-calculator" class="">
                        <img id="actorImage" class="align-self-center" width="150" src="">
                        <label for="voice-text" class="col-form-label w-100 mb-2 text-center caps-<?=$this->lang->lang()?>">
                           <span class="standart-price caps-<?=$this->lang->lang()?>"><?= lang('costStandard') ?></span>
                        </label>
                        <textarea class="form-control mb-2" id="voice-text" rows="10"></textarea>
                        <span class="caps-<?=$this->lang->lang()?>" id="chrono-results"></span>
                     </div>
                     <div id="information-form" class="d-none">
                        <div class="form-group">
                           <label for="fullname"><?= lang('fullName') ?><span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="fullname" placeholder="<?= lang('fullName') ?>">
                        </div>
                        <div class="form-group">
                           <label for="phone"><?= lang('phone') ?><span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="phone" placeholder="<?= lang('phone') ?>">
                        </div>
                        <div class="form-group">
                           <label for="email">Email<span class="text-danger">*</span></label>
                           <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                           <label for="companyname"><?= lang('companyName') ?><span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="companyname" placeholder="<?= lang('companyName') ?>">
                        </div>
                        <div class="form-group">
                           <label for="companyid"><?= lang('companyId') ?><span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="companyid" placeholder="<?= lang('companyId') ?>">
                        </div>
                        <div class="form-group mb-0">
                           <label for="orderdetails"><?= lang('orderDetails') ?></label>
                           <textarea class="form-control" id="orderdetails" rows="10"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary btn-sm" id="send-voice"></button>
                  </div>
               </div>
               </form>
            </div>
         </div>

         <div id="fb-root"></div>

         <script>
            var stage = 1;
            // price calculator modal
            $('#priceCalcModal').on('show.bs.modal', function (event) {
               $('.modal-price-calc>span').text('<?= lang('priceCalculator') ?>');
               $('#price-calculator').attr('class', 'd-flex flex-column');
               $('#information-form').attr('class', 'd-none');
               document.querySelector('#send-voice').innerText = '<?= lang('checkout') ?>';
               $('#actor-price, #voice-text, #vid, #fullname, #phone, #email, #companyname, #companyid, #orderdetails').val('');
               $('#chrono-results').html('');
               var button = $(event.relatedTarget);
               var price = button.data('actorprice');
               $('#actor-price').val(price);
               $('#actorImage').attr('src', '/assets/images/actors/'+ button.data('actorimage'));
               $('#actor-vid').text(button.data('actorvid'));
               $('#vid').val(button.data('actorvid'));
               stage = 1;
            })

            //price calculation
            var voiceText = document.getElementById("voice-text");
            voiceText.addEventListener("keydown", function(e) {
               var price = document.getElementById("actor-price").value;
               var words = voiceText.value.trim().length ? voiceText.value.trim().match(/(\s+)/g).length : 0;
               if(voiceText.value.length) {words++;}
               var sumPrice;
               var time = (words/2);
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
                  sumPrice = '<?=lang("longerThen6Min")?>';
               }
               if (time>360){
                  document.getElementById("chrono-results").innerHTML = sumPrice
               }else{
                  var t = '<?=lang("wordsCount")?>';
                  t = t.replace('@words@', words).replace('@time@', time).replace('@price@', sumPrice);
                  document.getElementById("chrono-results").innerHTML = t;
               }
            });

            // send offer
            $(document).on('click', '#send-voice', function(){
               if(stage==1){
                  if(!$('#voice-text').val().trim()){$('#voice-text').focus();return false;}
                  $('#price-calculator').attr('class', 'd-none');
                  $('#information-form').removeClass('d-none');
                  $('.modal-price-calc>span').text('<?= lang('infoForm') ?>');
                  document.querySelector('#send-voice').innerText = '<?= lang('send') ?>';
                  stage=2;
               }else{
                  if(!$('#fullname').val().trim()){$('#fullname').focus();return false;}
                  if(!$('#phone').val().trim()){$('#phone').focus();return false;}
                  if(!$('#email').val().trim()){$('#email').focus();return false;}
                  if(!$('#companyname').val().trim()){$('#companyname').focus();return false;}                  
                  if(!$('#companyid').val().trim()){$('#companyid').focus();return false;}                  
                  $.ajax({
                     url: '<?=site_url("sendmail/")?>',
                     type: "post",
                     dataType : "json",
                     data: {'msg': $('#voice-text').val(), 'vid': $('#vid').val(), 'fullname': $('#fullname').val(), 'phone': $('#phone').val(), 'email': $('#email').val(),
                        'companyname': $('#companyname').val(), 'companyid': $('#companyid').val(), 'orderdetails': $('#orderdetails').val(), 'csrf_token': $('#csrf_token').val()},
                     beforeSend: function () { },
                     success: function (response) {
                        if (response && response.status == 'success') {
                           $('#csrf_token').val(response.csrf_token);
                           $('#priceCalcModal').modal('hide');
                        }
                     }
                  });
                  stage=1;
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

            $('.actor-overlay').on('mouseover', function (e) {//mouseover (desktop)
               let target = $(e.target);
               showVoices(target);
            });

            $('.actor-card').on('click', function (e) {//mouseover (mobile)
               let target = $(e.target);
               target = target.closest('.actor-card');
               target = target.find('.actor-overlay');		
               showVoices(target);
            });

            function showVoices(actorOverlay) {
               if (actorOverlay.hasClass('spinning')) {
                  actorOverlay.removeClass('spinning');
                  let actorId = actorOverlay.closest('.actor-card').data('actorid');
                  let langId = $('#lang-id').val();
                        
                  $.ajax({
                     url: '/home/getSounds/<?=$this->lang->lang()?>/'+actorId+'/'+langId,
                     type: "get",
                     beforeSend: function () { },
                     success: function (data) {
                        var response = JSON.parse(data)
                        if (response) {
                           if (response.status == 'success') {
                              actorOverlay.html('').css({'flex-direction':'column', 'padding': '0.5rem', 'padding-top': '1rem', 'justify-content': 'flex-start'});
                              response.sounds.forEach(sound => {
                                 try {
                                    var div = $('<div></div>').attr({ 'class': 'voice-<?=$this->lang->lang()?>' });
                                    var audio = $('<audio/>').attr({ 'data-title': sound.voiceCat, 'data-audioid': 'voice-' + response.actor + '-' + sound.voice_category_id, 'controls': 'controls' });
                                    var source = $('<source/>').attr({ 'src': "/assets/voices/" + sound.filename, 'type': 'audio/mpeg' });
                                    actorOverlay.append(div.append(audio.append(source)))
                                    audio.stylise();
                                 }
                                 catch (err) {
                                    console.log(err.message);
                                 }
                              });
                           }
                        }
                     }
                  });
               }
            }
            
            window.fbAsyncInit = function() {
               FB.init({xfbml: true, version: 'v6.0'});
            };
            (function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) return;
               js = d.createElement(s); js.id = id;
               js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
               fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

         </script>

         <div class="fb-customerchat"
            attribution=install_email
            page_id="106627137411297"
            logged_in_greeting="გამარჯობათ, რით შემიძლია დაგეხმაროთ?"
            logged_out_greeting="მოგესალმებათ voicebank.ge">
         </div>

      </div>
   </section>

<?php $this->load->view('footer');?>