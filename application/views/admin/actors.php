<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">მსახიობები</h3>
   <a href="<?= base_url('admin/addActor')?>" class="btn btn-success btn-sm"><i class="fa fa-plus mr-1"></i>დამატება</a>
</div>

<div class="container-fluid ">
   <div class="row mb-4">
      <input id="actor-search" class="form-control text-center" placeholder="ძებნა">
   </div>
   <div class="row">
      <?= form_open('admin/sortActors') ?>
         <ul id="sortable">
            <?php foreach ($actors as $actor):?>
               <li data-actor="<?= strToLower($actor->name) ?><?= 'V'.str_pad($actor->id, 3, "0", STR_PAD_LEFT) ?>">
                  <img src="<?= base_url('assets/images/actors/'.$actor->image)?>">
                  <!-- <span class="ui-icon ui-icon-arrowthick-2-n-s"></span> -->
                  <a href="<?= base_url('admin/editActor/'.$actor->id)?>" class="d-flex flex-column">
                     <span><?= $actor->name ?></span>
                     <span><?= 'V'.str_pad($actor->id, 3, "0", STR_PAD_LEFT) ?></span>
                  </a>
                  <input type="hidden" name="actors[]" value="<?= $actor->id?>">
                  <div class="pr-1">
                     <div><i class="far fa-volume-down"></i><?= $actor->voicesQty ?></div>
                     <div><i class="far fa-sort"></i><?= $actor->sort ?></div>                     
                  </div>
               </li>
            <?php endforeach; ?>
         </ul>
         <button class="btn btn-success my-4" type="submit"><i class="fa fa-save mr-2"></i>შენახვა</button>
      <?= form_close()?>
   </div>
</div>

<?php $this->load->view('admin/templates/footer'); ?>