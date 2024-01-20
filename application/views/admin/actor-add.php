<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">მსახიობის დამატება</h3>
</div>

<div class="container-fluid px-0">
   <?= form_open_multipart(base_url('admin/addActor')) ?>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სახელი, გვარი</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="სახელი, გვარი">
            <small class="text-danger"><?php echo form_error('name'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სქესი</label>
         <div class="col-sm-10">
            <select class="form-control" name="gender" >
               <?php foreach($genders as $gender):?>
                  <option value="<?= $gender->id?>"><?= $gender->name_ge ?></option>
               <?php endforeach;?>
            </select>
            <small class="text-danger"><?php echo form_error('gender'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Voice ID</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="vid" placeholder="Voice ID">
            <small class="text-danger"><?php echo form_error('vid'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სურათი </label>
         <div class="col-sm-10">
            <input type="file" class="form-control" name="profileimage" accept=".jpg, .jpeg, .png, .webp">
            <small class="text-danger"><?php echo form_error('profileimage'); ?></small>
         </div>
      </div>
      
      <button type="submit" class="btn btn-primary mb-2 offset-sm-2">შენახვა</button>

   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>