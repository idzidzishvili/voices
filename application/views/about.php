<?php $this->load->view('header'); ?>




<section>
   <img src="<?= base_url('assets/images/studio.jpg') ?>" class="w-100">
</section>




<div class="container-fluid">

   <div class="row pt-5">
      <div class="col-xs-12 col-sm-6 col-lg-3">
         <img src="<?= base_url('assets/images/about_experience.jpg') ?>" class="w-100">
         <div class="servie-description">

         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-3 mb-4">
         <div class="about-service">
            <img src="<?= base_url('assets/images/about_technical.png') ?>" class="w-100">
            <div class="servie-description">
               <h4 class="caps-<?= $this->lang->lang() ?>">რატომ გვენდობიან?</h4>
               <span></span>
               <p>ჩვენი კომპანიის მისიაა უმაღლესი ხარისხის აუდიო პროდუქციის შემუშავება და წარმოება. ჩვენი სერვისების არჩევისას, თქვენ ირჩევთ სიმშვიდეს და 100%-ით გარანტირებულ შედეგს. თქვენ დღე-ღამის ნებისმიერ მონაკვეთში შეგიძლიათ დაგვიკავშირდეთ ნომერზე (+995) 596 366 366. ინფორმაცია ჩვენი პარტნიორების შესახებ შეგიძლიათ იხილოთ "ჩვენი პარტნიორების" განყოფილებაში.</p>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-3">
         <img src="<?= base_url('assets/images/about_trust.png') ?>" class="w-100">
         <div class="servie-description">

         </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-lg-3">
         <img src="<?= base_url('assets/images/about_choose.png') ?>" class="w-100">
         <div class="servie-description">

         </div>
      </div>
   </div>

   <div class="row mb-2">
      <div class="our-direction">
         <div class="direction-title mb-3 font-italic caps-<?= $this->lang->lang() ?>">ჩვენი მიმართულება</div>
         <p>ჩვენი მიმართულებებია: ვიდეოს გახმოვანება; აუდიო სარეკლამო რგოლის დამზადება; სარეკლამო ხმა, ქოლ ცენტრის ხმა, ავტომოპასუხისთვის ხმის ჩაწერა; ვოკალის ჩაწერა, ვოისოვერი, დუბლირება, რეკლამის ადაპტაცია, სახელმძღვანელოს გახმოვანება.</p>
      </div>
   </div>


   <div class="row pt-5">
      <h4 class="mb-5 w-100 partner-title text-center caps-<?= $this->lang->lang() ?>">ჩვენი პარტნიორები</h4>
      <div class="col-lg-12 ">
         <div class="sponsor-slider slider-arrow d-flex">
            <?php foreach($partners as $partner): ?>
               <a href="<?= $partner->url ?>"><img src="<?= base_url('uploads/partners/'.$partner->img)?>" alt="sponsor-1" /></a>
            <?php endforeach;?>
         </div>
      </div>
   </div>
</div>
















<?php $this->load->view('footer'); ?>