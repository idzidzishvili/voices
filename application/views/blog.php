<?php $this->load->view('header'); ?>

<section>
   <img src="<?= base_url('assets/images/single-banner.jpg') ?>" class="w-100">
</section>

<div class="container pt-3">
   <div class="row">
      <div class="col-lg-8">
         <div class="blog-det-banner">
            <?php if(isset($blog['blog']->ytlink)): ?>                  
               <iframe src="<?=$blog['blog']->ytlink?>" width="100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php else: ?>
               <img src="<?= base_url('assets/images/blogs/' . $blog['blog']->image1) ?>" alt="blog-details">
            <?php endif;?>
            <div class="blog-det-content">
               <div class="blog-det-title">
                  <h2><?= $blog['blog']->title ?></h2>
               </div>
               <ul class="blog-det-meta">
                  <li>
                     <i class="far fa-calendar-alt"></i>
                     <p><?php $dt=strtotime($blog['blog']->create_dt); echo date("d",$dt).'.'.date("m",$dt).'.'.date("Y",$dt).' '.date("h",$dt).':'.date("i",$dt);?></p>
                  </li>
                  <li>
                     <!-- FB -->
                     <div id="fb-root"></div>
                     <script>
                        (function(d, s, id) {
                           var js, fjs = d.getElementsByTagName(s)[0];
                           if (d.getElementById(id)) return;
                           js = d.createElement(s); js.id = id;
                           js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                           fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                     </script>
                     <div class="fb-share-button" data-href="<?= $fbLink ?>" data-layout="button" ></div>
                  </li>
                  <li>
                     <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                     <script type="IN/Share" data-url="<?= $fbLink ?>"></script>
                  </li>
               </ul>
            </div>
         </div>

         <div class="blog-det-descrip content-fluid">
            <p><?= $blog['blog']->txt ?></p>
            <div class="blog-det-footer">
               <?php if($blog['tags']):?>
                  <ul class="blog-det-tag">
                     <li>
                        <h4><?= lang('tags')?>:</h4>
                     </li>
                     <?php foreach($blog['tags'] as $tag):?>
                        <li><a href="<?= site_url('blogs?tag='.$tag->tag)?>"><?= $tag->tag?></a></li>
                     <?php endforeach; ?>
                  </ul>
               <?php endif; ?>                  
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="row">
            <?php if($last3blogs && count($last3blogs)): ?>
               <div class="col-md-7 col-lg-12">
                  <div class="blog-filter">
                     <h3><?= lang('lastPosts')?></h3>
                     <ul class="blog-suggest">
                        <?php foreach($last3blogs as $bl): ?>
                           <li>
                              <div class="suggest-img">
                                 <a href="<?= site_url('blog/'.$bl->id.'/'.$bl->slug) ?>"><img src="<?= base_url('assets/images/blogs/'.$bl->image1) ?>" alt="suggest-1"></a>
                              </div>
                              <div class="suggest-content">
                                 <div class="suggest-title">
                                    <h4><a href="<?= site_url('blog/'.$bl->id.'/'.$bl->slug) ?>"><?= $bl->{'title_'.$this->lang->lang()} ?></a></h4>
                                 </div>
                                 <div class="suggest-meta">
                                    <div class="suggest-date">
                                       <i class="far fa-calendar-alt"></i>
                                       <p>
                                          <?php $dt=strtotime($bl->create_dt); echo date("d",$dt).'.'.date("m",$dt).'.'.date("Y",$dt).' '.date("h",$dt).':'.date("i",$dt);?>
                                       </p>
                                    </div>                                
                                 </div>
                              </div>
                           </li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
               </div>
            <?php endif; ?>
            <?php if($blog['tags']):?>
               <div class="col-md-6 col-lg-12">
                  <div class="blog-filter">
                     <h3><?= lang('tags')?></h3>                  
                     <ul class="blog-tag">                        
                        <?php foreach($blog['tags'] as $tag):?>
                           <li><a href="<?= site_url('blogs?tag='.$tag->tag)?>"><?= $tag->tag?></a></li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
               </div>
            <?php endif; ?>
            <div class="col-md-6 col-lg-12">
               <div class="blog-filter">
                  <h3><?= lang('followUs')?></h3>
                  <ul class="blog-icon">
                     <li>
                        <a href="https://www.facebook.com/Voicesge-106627137411297"><i class="fab fa-facebook-f mr-2"></i></a>
                     </li>
                     <li>
                        <a href="https://www.instagram.com/voices.ge/?fbclid=IwAR20j31n28k46yWBGTkPY4msUwZpzBeo2Q9_xddNnOwcI3O08TSbM_4pVws"><i class="fab fa-instagram mr-2"></i></a>
                     </li>
                     <li>
                        <a href="https://www.linkedin.com/company/voices-ge?fbclid=IwAR0VfnCsCbYHbhlx5V5fGSdA5rPBEoL6DgOmiTIRItGX_n-fyN44MjJTBJc"><i class="fab fa-linkedin-in"></i></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $this->load->view('footer'); ?>