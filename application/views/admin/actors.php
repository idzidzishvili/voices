<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">მსახიობები</h3>
   <a href="#" class="btn btn-success btn-sm"><i class="fa fa-plus mr-1"></i>დამატება</a>
</div>

<div class="container-fluid ">
   <div class="row mb-4">
      <input id="actor-search" class="form-control">
   </div>
   <div class="row">
      <ul id="sortable">
         <?php foreach ($actors as $actor):?>
            <li data-actor="<?= strToLower($actor->name) ?>">
               <img src="<?= base_url('uploads/actors/'.$actor->image)?>">
               <!-- <span class="ui-icon ui-icon-arrowthick-2-n-s"></span> -->
               <a href="<?= base_url('admin/actor/'.$actor->id)?>">
                  <?= $actor->name ?>
               </a>
               <span class="pr-1"><i class="far fa-volume-down"></i><?= $actor->voicesQty ?></span>
            </li>
         <?php endforeach; ?>
      </ul>
   </div>
</div>

<?php $this->load->view('admin/templates/footer'); ?>