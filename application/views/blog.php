<?php $this->load->view('header'); ?>

<section>
   <img src="<?= base_url('assets/images/single-banner.jpg') ?>" class="w-100">
</section>

<section>
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
                     <!-- <li>
                        <i class="far fa-user"></i>
                        <p>By Admin</p>
                     </li> -->
                     <li>
                        <i class="far fa-calendar-alt"></i>
                        <p><?= $blog['blog']->create_dt ?></p>
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
                     <!-- <li>
                        <i class="far fa-share-square"></i>
                        <p>50 Share</p>
                     </li> -->
                  </ul>
               </div>
            </div>
            
            <div class="blog-det-descrip content-fluid">
               <p><?= $blog['blog']->txt ?></p>
               <div class="blog-det-footer">
                  <?php if($blog['tags']):?>
                     <ul class="blog-det-tag">
                        <li>
                           <h4>Tags:</h4>
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
               <div class="col-md-7 col-lg-12">
                  <div class="blog-filter">
                     <h3>popular post</h3>
                     <ul class="blog-suggest">
                        <li>
                           <div class="suggest-img">
                              <a href="blog-list.html#"><img src="assets/img/suggest-1.jpg" alt="suggest-1"></a>
                           </div>
                           <div class="suggest-content">
                              <div class="suggest-title">
                                 <h4><a href="blog-list.html#">There are many variatr of passages</a></h4>
                              </div>
                              <div class="suggest-meta">
                                 <div class="suggest-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <p>Mar 21, 2021</p>
                                 </div>
                                 <div class="suggest-comment">
                                    <i class="far fa-comments"></i>
                                    <p>20</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="suggest-img">
                              <a href="blog-list.html#"><img src="assets/img/suggest-2.jpg" alt="suggest-2"></a>
                           </div>
                           <div class="suggest-content">
                              <div class="suggest-title">
                                 <h4><a href="blog-list.html#">There are many variatr of passages</a></h4>
                              </div>
                              <div class="suggest-meta">
                                 <div class="suggest-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <p>Mar 21, 2021</p>
                                 </div>
                                 <div class="suggest-comment">
                                    <i class="far fa-comments"></i>
                                    <p>15</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="suggest-img">
                              <a href="blog-list.html#"><img src="assets/img/suggest-3.jpg" alt="suggest-3"></a>
                           </div>
                           <div class="suggest-content">
                              <div class="suggest-title">
                                 <h4><a href="blog-list.html#">There are many variatr of passages</a></h4>
                              </div>
                              <div class="suggest-meta">
                                 <div class="suggest-date">
                                    <i class="far fa-calendar-alt"></i>
                                    <p>Mar 21, 2021</p>
                                 </div>
                                 <div class="suggest-comment">
                                    <i class="far fa-comments"></i>
                                    <p>18</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <?php if($blog['tags']):?>
                  <div class="col-md-6 col-lg-12">
                     <div class="blog-filter">
                        <h3>Best tags</h3>                  
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
                     <h3>follow us</h3>
                     <ul class="blog-icon">
                        <li>
                           <a href="blog-list.html#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                           <a href="blog-list.html#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="blog-list.html#"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                           <a href="blog-list.html#"><i class="fab fa-behance"></i></a>
                        </li>
                        <li>
                           <a href="blog-list.html#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php $this->load->view('footer'); ?>