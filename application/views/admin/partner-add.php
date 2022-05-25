<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">პარტნიორის დამატება</h3>
</div>

<div class="container-fluid ">
   <?= form_open_multipart(base_url('admin/addPartner')) ?>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">მისამართი (Url)</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="url" placeholder="Url">
            <small class="text-danger"><?php echo form_error('url'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სურათი </label>
         <div class="col-sm-10">
            <input type="file" class="form-control" name="partnerImage" value="">
            <small class="text-danger"><?php echo form_error('partnerImage'); ?></small>
         </div>
      </div>
      
      <button type="submit" class="btn btn-primary mb-2 offset-sm-2">შენახვა</button>

   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>