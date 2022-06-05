<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">ბლოგის დამატება</h3>
</div>

<div class="container-fluid px-0">
   <?= form_open_multipart(base_url('admin/editBlog/'.$id)) ?>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სათაური ქართულად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="title_ge" value="<?= $blogDetails->title_ge ?>">
            <small class="text-danger"><?php echo form_error('title_ge'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სათაური ინგლისურად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="title_en" value="<?= $blogDetails->title_en ?>">
            <small class="text-danger"><?php echo form_error('title_en'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">სათაური რუსულად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="title_ru" value="<?= $blogDetails->title_ru ?>">
            <small class="text-danger"><?php echo form_error('title_ru'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-12">ტექსტი ქართულად</label>
         <div class="col-sm-12">
            <textarea type="text" class="form-control form-control-sm summernote" name="text_ge" rows="12" ><?= $blogDetails->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('text_ge'); ?></small> 
         </div>
      </div>
      
      <div class="form-group row">
         <label class="col-sm-12">ტექსტი ინგლისურად</label>
         <div class="col-sm-12">
            <textarea type="text" class="form-control form-control-sm summernote" name="text_en" rows="12" ><?= $blogDetails->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('text_en'); ?></small> 
         </div>
      </div>
      
      <div class="form-group row">
         <label class="col-sm-12">ტექსტი რუსულად</label>
         <div class="col-sm-12">
            <textarea type="text" class="form-control form-control-sm summernote" name="text_ru" rows="12" ><?= $blogDetails->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('text_ru'); ?></small> 
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ტეგები ქართულად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="tags_ge" value="<?= $blogDetails->tags_ge ?>">
            <small class="text-danger"><?php echo form_error('tags_ge'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ტეგები ინგლისურად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="tags_en" value="<?= $blogDetails->tags_en ?>">
            <small class="text-danger"><?php echo form_error('tags_en'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">ტეგები რუსულად</label>
         <div class="col-sm-10">
            <input type="text" class="form-control" name="tags_ru" value="<?= $blogDetails->tags_ru ?>">
            <small class="text-danger"><?php echo form_error('tags_ru'); ?></small>
         </div>
      </div>

      <div class="form-group row">
         <label class="col-sm-2 col-form-label">მთავარი სურათი</label>
         <div class="col-sm-2">
            <img class="w-100" src="<?= base_url('assets/images/blogs/'.$blogDetails->image1)?>">
         </div>
         <div class="col-sm-8">
            <input type="file" class="form-control" name="image1">
            <small class="text-danger"><?php echo form_error('image1'); ?></small>
         </div>
      </div>

      <button type="submit" class="btn btn-primary mb-3">შენახვა</button>
   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>