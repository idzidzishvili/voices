<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">სლაიდერის რედაქტირება</h3>
</div>

<div class="container-fluid px-0">
   <?= form_open_multipart(base_url('admin/editSlider/'.$id)) ?>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სახელი</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="name_ge" value="<?= $slider->name_ge ?>">
            <small class="text-danger"><?php echo form_error('name_ge'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სურათი ქართულზე</label>
         <div class="col-xs-2 col-1">
            <?php if($slider->img_ge): ?>
               <img src="<?= base_url('assets/images/slider/'.$slider->img_ge)?>" height="32">
            <?php endif; ?>
         </div>
         <div class="col-xs-10 col-9">
            <input type="file" class="form-control" name="img_ge" value="">
            <small class="text-danger"><?php echo form_error('img_ge'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სურათი ინგლისურზე</label>
         <div class="col-xs-2 col-1">
            <?php if($slider->img_en): ?>
               <img src="<?= base_url('assets/images/slider/'.$slider->img_en)?>" height="32">
            <?php endif; ?>
         </div>
         <div class="col-xs-10 col-9">
            <input type="file" class="form-control" name="img_en">
            <small class="text-danger"><?php echo form_error('img_en'); ?></small>
         </div>
      </div>
      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სურათი რუსულზე</label>
         <div class="col-xs-2 col-1">
            <?php if($slider->img_ru): ?>
               <img src="<?= base_url('assets/images/slider/'.$slider->img_ru)?>" height="32">
            <?php endif; ?>
         </div>
         <div class="col-xs-10 col-9">
            <input type="file" class="form-control" name="img_ru">
            <small class="text-danger"><?php echo form_error('img_ru'); ?></small>
         </div>
      </div>
      
      <button type="submit" class="btn btn-primary mb-2 offset-sm-2">შენახვა</button>

   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>