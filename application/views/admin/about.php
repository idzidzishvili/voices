<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">ჩვენს შესახებ</h3>
</div>

<div class="container-fluid px-0">
   <?= form_open_multipart(base_url('admin/aboutus')) ?>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_experience_ge" value="<?= $aboutUs[1]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('our_experience_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_experience_txt_ge" rows="12" ><?= $aboutUs[1]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('our_experience_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_experience_en" value="<?= $aboutUs[1]->name_en ?>">
               <small class="text-danger"><?php echo form_error('our_experience_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_experience_txt_en" rows="12" ><?= $aboutUs[1]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('our_experience_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_experience_ru" value="<?= $aboutUs[1]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('our_experience_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_experience_txt_ru" rows="12" ><?= $aboutUs[1]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('our_experience_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_techbase_ge" value="<?= $aboutUs[2]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('our_techbase_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_techbase_txt_ge" rows="12" ><?= $aboutUs[2]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('our_techbase_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_techbase_en" value="<?= $aboutUs[2]->name_en ?>">
               <small class="text-danger"><?php echo form_error('our_techbase_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_techbase_txt_en" rows="12" ><?= $aboutUs[2]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('our_techbase_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_techbase_ru" value="<?= $aboutUs[2]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('our_techbase_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_techbase_txt_ru" rows="12" ><?= $aboutUs[2]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('our_techbase_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="trust_us_ge" value="<?= $aboutUs[3]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('trust_us_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="trust_us_txt_ge" rows="12" ><?= $aboutUs[3]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('trust_us_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="trust_us_en" value="<?= $aboutUs[3]->name_en ?>">
               <small class="text-danger"><?php echo form_error('trust_us_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="trust_us_txt_en" rows="12" ><?= $aboutUs[3]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('trust_us_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="trust_us_ru" value="<?= $aboutUs[3]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('trust_us_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="trust_us_txt_ru" rows="12" ><?= $aboutUs[3]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('trust_us_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="choose_us_ge" value="<?= $aboutUs[4]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('choose_us_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="choose_us_txt_ge" rows="12" ><?= $aboutUs[4]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('choose_us_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="choose_us_en" value="<?= $aboutUs[4]->name_en ?>">
               <small class="text-danger"><?php echo form_error('choose_us_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="choose_us_txt_en" rows="12" ><?= $aboutUs[4]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('choose_us_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="choose_us_ru" value="<?= $aboutUs[4]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('choose_us_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="choose_us_txt_ru" rows="12" ><?= $aboutUs[4]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('choose_us_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_direction_ge" value="<?= $aboutUs[0]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('our_direction_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_direction_txt_ge" rows="12" ><?= $aboutUs[0]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('our_direction_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_direction_en" value="<?= $aboutUs[0]->name_en ?>">
               <small class="text-danger"><?php echo form_error('our_direction_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_direction_txt_en" rows="12" ><?= $aboutUs[0]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('our_direction_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="our_direction_ru" value="<?= $aboutUs[0]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('our_direction_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="our_direction_txt_ru" rows="12" ><?= $aboutUs[0]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('our_direction_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ჩვენი გამოცდილება</label>
         <div class="col-xs-2 col-1">
            <img src="<?= base_url('assets/images/about/'.$aboutUs[1]->img)?>" height="32">
         </div>
         <div class="col-xs-10 col-9">
            <input type="file" class="form-control" name="our_experience_img">
            <small class="text-danger"><?php echo form_error('our_experience_img'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ტექნიკური ბაზა</label>
         <div class="col-xs-2 col-1">
            <img src="<?= base_url('assets/images/about/'.$aboutUs[2]->img)?>" height="32">
         </div>
         <div class="col-xs-10 col-9">
            <input type="file" class="form-control" name="our_techbase_img">
            <small class="text-danger"><?php echo form_error('our_techbase_img'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">რატომ გვენდობიან?</label>
         <div class="col-xs-2 col-1">
            <img src="<?= base_url('assets/images/about/'.$aboutUs[3]->img)?>" height="32">
         </div>
         <div class="col-xs-10 col-9">
            <input type="file" class="form-control" name="trust_us_img">
            <small class="text-danger"><?php echo form_error('trust_us_img'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">რატომ გვირჩევენ?</label>
         <div class="col-xs-2 col-1">
            <img src="<?= base_url('assets/images/about/'.$aboutUs[4]->img)?>" height="32">
         </div>
         <div class="col-xs-10 col-9">
            <input type="file" class="form-control" name="choose_us_img" value="">
            <small class="text-danger"><?php echo form_error('choose_us_img'); ?></small>
         </div>
      </div>

      
      <button type="submit" class="btn btn-primary mb-3">შენახვა</button>
   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>