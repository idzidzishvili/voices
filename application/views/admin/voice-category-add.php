<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">ხმის კატეგორიის დამატება</h3>
</div>

<div class="container-fluid ">
   <?= form_open(base_url('admin/addVoiceCategory')) ?>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">დასახელება ქართულად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="name_ge" placeholder="დასახელება ქართულად">
            <small class="text-danger"><?php echo form_error('name_ge'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">დასახელება ინგლისურად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="name_en" placeholder="დასახელება ინგლისურად">
            <small class="text-danger"><?php echo form_error('name_en'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">დასახელება რუსულად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="name_ru" placeholder="დასახელება რუსულად">
            <small class="text-danger"><?php echo form_error('name_ru'); ?></small>
         </div>
      </div>
      
      <button type="submit" class="btn btn-primary mb-2 offset-sm-2">შენახვა</button>

   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>