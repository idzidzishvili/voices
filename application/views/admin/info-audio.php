<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">ინფო აუდიო</h3>
</div>

<div class="container-fluid px-0">
   <?= form_open_multipart(base_url('admin/infoaudio')) ?>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ინფო აუდიო (GE)</label>
         <div class="col-sm-10">
            <input type="file" class="form-control" name="infoaudio_ge" accept=".mp3">
            <small class="text-danger"><?php echo form_error('infoaudio_ge'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ინფო აუდიო (EN)</label>
         <div class="col-sm-10">
            <input type="file" class="form-control" name="infoaudio_en" accept=".mp3">
            <small class="text-danger"><?php echo form_error('infoaudio_en'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ინფო აუდიო (RU)</label>
         <div class="col-sm-10">
            <input type="file" class="form-control" name="infoaudio_ru" accept=".mp3">
            <small class="text-danger"><?php echo form_error('infoaudio_ru'); ?></small>
         </div>
      </div>
      
      <button type="submit" class="btn btn-primary mb-2 offset-sm-2">შენახვა</button>

   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>