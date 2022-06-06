   <footer class="footer-part footer-gape">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">

               <div class="footer-logo">
                  <ul>
                     <li><a class="icon icon-inline" href="https://www.facebook.com/Voicesge-106627137411297"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a class="icon icon-inline" href="https://www.linkedin.com/company/voices-ge?fbclid=IwAR0VfnCsCbYHbhlx5V5fGSdA5rPBEoL6DgOmiTIRItGX_n-fyN44MjJTBJc"><i class="fab fa-linkedin-in"></i></a></li>
                     <li><a class="icon icon-inline" href="https://www.instagram.com/voices.ge/?fbclid=IwAR20j31n28k46yWBGTkPY4msUwZpzBeo2Q9_xddNnOwcI3O08TSbM_4pVws"><i class="fab fa-instagram"></i></a></li>
                  </ul>
               </div>
               
            </div>
         </div>
         <div class="row">
            <div class="col-lg-5">
               <div class="footer-heading">
                  <h3>download the app</h3>
                  <p>
                     We are a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                     The point of using Lorem Ipsum is that it has a more-or-less normal 
                     distribution of letters as opposed to using content here content here making it look like readable english.
                  </p>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="footer-heading">
                  <h3><?= lang('links') ?></h3>
               </div>
               <ul class="footer-link">
                  <li><a href="<?=site_url('services')?>"><i class="fas fa-angle-right"></i><?= lang('services') ?></a></li>
                  <li><a href="<?=site_url('about-us')?>"><i class="fas fa-angle-right"></i><?= lang('aboutUs') ?></a></li>
                  <li><a href="<?=site_url('blog')?>"><i class="fas fa-angle-right"></i><?= lang('blog') ?></a></li>
                  <li><a href="<?=site_url('contact')?>"><i class="fas fa-angle-right"></i><?= lang('contact') ?></a></li>
               </ul>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="footer-heading">
                  <h3><?= lang('contact') ?></h3>
               </div>
               <ul class="footer-address">
                  <li><i class="far fa-map-marker-alt"></i>
                     <p><?= $contact->{'address_'.$this->lang->lang()} ?></p>
                  </li>
                  <li><i class="far fa-envelope"></i>
                     <p><?= $contact->email ?></p>
                  </li>
                  <li><i class="far fa-phone"></i>
                     <p><?= $contact->phone ?></p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </footer>
   
   <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/slick.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/venobox.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/mixitup.min.js'); ?>"></script>
   <script src="<?= base_url('assets/js/mediastyler.js'); ?>"></script>
   <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>

</html>