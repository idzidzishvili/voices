<?php $this->load->view('header'); ?>

<section>
   <img src="<?= base_url('assets/images/single-banner.jpg') ?>" class="w-100">
</section>

<div class="container">
   <div class="row">
      <?php foreach ($blogs as $blog) : ?>
         <div class="col-12 col-lg-6 article pt-3">
            <div class="blog-card">
               <img src="<?= base_url('assets/images/blogs/' . $blog->image1) ?>" alt="blog-1" height="300">
               <div class="blog-overlay">
                  <p>
                     <i class="far fa-calendar"></i> 
                     <?php $dt = strtotime($blog->create_dt); echo date("d", $dt) . '.' . date("m", $dt) . '.' . date("Y", $dt); ?>
                  </p>
                  <h3><a href="blog-list.html#"><?= $blog->{'title_' . $this->lang->lang()} ?></a></h3>
                  <a class="btn btn-outline" href="<?= site_url('blog/' . $blog->id . '/' . $blog->slug) ?>">
                     <?= lang('details') ?> <i class="far fa-arrow-right ml-1"></i>
                  </a>
               </div>
            </div>
         </div>
      <?php endforeach; ?>
   </div>
</div>

<?php $this->load->view('footer'); ?>