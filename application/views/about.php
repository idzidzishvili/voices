<?php $this->load->view('header'); ?>

<section>
   <img src="<?= base_url('assets/images/studio.jpg') ?>" class="w-100">
</section>

<div class="container-fluid">
   <div class="row pt-5">
       <div class="col-xs-12 col-sm-6 col-lg-3 mb-4">
         <div class="about-service">
            <img src="<?= base_url('assets/images/about/'.$aboutUs[1]->img) ?>" class="w-100">
            <div class="servie-description">
               <h4 class="caps-<?= $this->lang->lang() ?>"><?= $aboutUs[1]->{'name_'.$this->lang->lang()} ?></h4>
               <span></span>
               <p><?= $aboutUs[1]->{'text_'.$this->lang->lang()} ?></p>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-3 mb-4">
         <div class="about-service">
            <img src="<?= base_url('assets/images/about/'.$aboutUs[2]->img) ?>" class="w-100">
            <div class="servie-description">
               <h4 class="caps-<?= $this->lang->lang() ?>"><?= $aboutUs[2]->{'name_'.$this->lang->lang()} ?></h4>
               <span></span>
               <p><?= $aboutUs[2]->{'text_'.$this->lang->lang()} ?></p>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-3 mb-4">
         <div class="about-service">
            <img src="<?= base_url('assets/images/about/'.$aboutUs[3]->img) ?>" class="w-100">
            <div class="servie-description">
               <h4 class="caps-<?= $this->lang->lang() ?>"><?= $aboutUs[3]->{'name_'.$this->lang->lang()} ?></h4>
               <span></span>
               <p><?= $aboutUs[3]->{'text_'.$this->lang->lang()} ?></p>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-3 mb-4">
         <div class="about-service">
            <img src="<?= base_url('assets/images/about/'.$aboutUs[4]->img) ?>" class="w-100">
            <div class="servie-description">
               <h4 class="caps-<?= $this->lang->lang() ?>"><?= $aboutUs[4]->{'name_'.$this->lang->lang()} ?></h4>
               <span></span>
               <p><?= $aboutUs[4]->{'text_'.$this->lang->lang()} ?></p>
            </div>
         </div>
      </div>
   </div>

   <div class="row mb-2">
      <div class="our-direction w-100">
         <div class="direction-title mb-3 font-italic caps-<?= $this->lang->lang() ?>"><?= $aboutUs[0]->{'name_'.$this->lang->lang()} ?></div>
         <p><?= $aboutUs[0]->{'text_'.$this->lang->lang()} ?></p>
      </div>
   </div>


   <div class="row pt-5">
      <h4 class="mb-5 w-100 partner-title text-center caps-<?= $this->lang->lang() ?>">ჩვენი პარტნიორები</h4>
      <div class="col-lg-12 ">
         <div class="sponsor-slider slider-arrow d-flex">
            <?php foreach($partners as $partner): ?>
               <a href="<?= $partner->url ?>"><img src="<?= base_url('assets/images/partners/'.$partner->img)?>" alt="sponsor-1" /></a>
            <?php endforeach;?>
         </div>
      </div>
   </div>
</div>
















<?php $this->load->view('footer'); ?>