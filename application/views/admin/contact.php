<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">კონტაქტი</h3>
</div>

<div class="container-fluid px-0">
   <?= form_open(base_url('admin/contact')) ?>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">მისამართი ქართულად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="address_ge" value="<?= $contact->address_ge ?>">
            <small class="text-danger"><?php echo form_error('address_ge'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">მისამართი ინგლისურად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="address_en" value="<?= $contact->address_en ?>">
            <small class="text-danger"><?php echo form_error('address_en'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">მისამართი რუსულად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="address_ru" value="<?= $contact->address_ru ?>">
            <small class="text-danger"><?php echo form_error('address_ru'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ტელეფონი</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="phone" value="<?= $contact->phone ?>">
            <small class="text-danger"><?php echo form_error('phone'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">Email</label>
         <div class="col-sm-10">
            <input type="email" class="form-control" name="email" value="<?= $contact->email ?>">
            <small class="text-danger"><?php echo form_error('email'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ლოკაცია</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="location" value="<?= $contact->location ?>">
            <small class="text-danger"><?php echo form_error('location'); ?></small>
         </div>
      </div>
      <button type="submit" class="btn btn-primary mb-2 offset-sm-2">შენახვა</button>

   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>