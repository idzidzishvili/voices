<?php $this->load->view('header'); ?>




<section>
   <img src="<?= base_url('assets/images/studio.jpg')?>" class="w-100">   
</section>



<div class="container-fluid">
   <div class="row parallax">
      <div class="col-12 col-md-4 contact-info py-5">
         <i class="fa fa-phone"></i>
         <h3>დაგვირეკეთ</h3>
         <p>(+995) 596 366 366</p>
      </div>
      <div class="col-12 col-md-4 contact-info py-5">
         <i class="fa fa-envelope"></i>
         <h3>მოგვწერეთ</h3>
         <p>info@voices.ge</p>
      </div>
      <div class="col-12 col-md-4 contact-info py-5">
         <i class="fa fa-map-marker"></i>
         <h3>გვიპოვეთ</h3>
         <p>Тбилиси, ул. Серго Закариадзе 12</p>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-3 d-none d-lg-block email-icon">
         <img src="<?= base_url('assets/images/email.svg')?>" class="w-100">
      </div>
      <div class="col-xs-12 col-lg-9">
         <form method="post" action="<?= base_url('home/send_mail')?>">
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
                  <input type="email" class="form-control" name="email" placeholder="<?=lang('email')?>">
                  <i class="far fa-envelope"></i>
               </div>
            </div>
            <div class="form-row mb-4">
               <div class="col-12">
                  <textarea placeholder="" name="status" class="form-control" rows="10"></textarea>
                  <i class="far fa-pen"></i>
               </div>
            </div>
            <div class="form-row mb-4">
               <button type="submit" class="btn btn-success">Oтправить</button>
            </div>
         </form>
      </div>
   </div>

   <div class="row">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.68129051345!2d44.74378255106927!3d41.72739568270868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404473998ff68f23%3A0x6046a17392a2e4b8!2svoices.ge!5e0!3m2!1ska!2sge!4v1584131708777!5m2!1ska!2sge" style="border:0;" allowfullscreen="" width="100%" height="550" frameborder="0"></iframe>
   </div>
</div>



















<?php $this->load->view('footer'); ?>