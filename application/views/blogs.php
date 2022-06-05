<?php $this->load->view('header'); ?>




<section>
   <img src="<?= base_url('assets/images/single-banner.jpg')?>" class="w-100">   
</section>

<section>
   <div class="container">
      <div class="row">
         <?php foreach($blogs as $blog): ?>
            <!-- <div class="col-12 col-md-6 col-lg-4 article pt-3"> -->
            <div class="col-12 col-lg-6 article pt-3">
               <div class="blog-card">
                  <img src="<?= base_url('assets/images/actors/Nato_Sulkhanishvili.webp')?>" alt="blog-1" height="500">
                  <div class="blog-overlay">
                  <p><i class="far fa-clock"></i> Mar 21, 2021</p>
                  <h3><a href="blog-list.html#"><?= $blog->{'title_'.$this->lang->lang()} ?></a></h3>
                  <a class="btn btn-outline" 
                     href="<?= site_url('blog/'.$blog->id.'/'.$blog->slug) ?>">
                     დაწვრილებით <i class="far fa-arrow-right ml-1"></i>
                  </a>
                  </div>
               </div>
            </div>
         <?php endforeach; ?>
      </div>
   </div>
</section>















<?php $this->load->view('footer'); ?>