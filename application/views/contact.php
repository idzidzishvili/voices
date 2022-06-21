<?php $this->load->view('header'); ?>

<section>
   <img src="<?= base_url('assets/images/studio.jpg')?>" class="w-100">   
</section>

<div class="container-fluid">
   <div class="row parallax">
      <div class="col-12 col-md-4 contact-info py-5">
         <i class="fa fa-phone"></i>
         <h3><?= lang('callUs') ?></h3>
         <p><?= $contact->phone ?></p>
      </div>
      <div class="col-12 col-md-4 contact-info py-5">
         <i class="fa fa-envelope"></i>
         <h3><?= lang('textUs') ?></h3>
         <p><?= $contact->email ?></p>
      </div>
      <div class="col-12 col-md-4 contact-info py-5">
         <i class="fa fa-map-marker"></i>
         <h3><?= lang('findUs') ?></h3>
         <p><?= $contact->{'address_'.$this->lang->lang()} ?></p>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-10 offset-lg-1">
         <?= form_open(site_url('send_mail'))?>
            <div class="form-row">
               <div class="col-lg-4 mb-4">
                  <input type="text" class="form-control" name="name" placeholder="<?=lang('fullName')?>">
                  <i class="far fa-user"></i>
               </div>
               <div class="col-lg-4 mb-4">
                  <input type="text" class="form-control" name="phone" placeholder="<?=lang('phone')?>">
                  <i class="far fa-phone"></i>
               </div>
               <div class="col-lg-4 mb-4">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                  <i class="far fa-envelope"></i>
               </div>
            </div>
            <div class="form-row mb-4">
               <div class="col-12">
                  <textarea placeholder="" name="message" class="form-control" rows="10"></textarea>
                  <i class="far fa-pen"></i>
               </div>
            </div>
            <div class="form-row mb-4 justify-content-center">
               <button type="submit" class="btn btn-success"><?=lang('send')?></button>
            </div>
         <?= form_close()?>
      </div>
   </div>

   <div class="row">
      <iframe src="<?= $contact->location ?>" style="border:0;" allowfullscreen="" width="100%" height="550" frameborder="0"></iframe>
   </div>
</div>

<?php $this->load->view('footer'); ?>