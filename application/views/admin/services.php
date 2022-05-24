<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">სერვისები</h3>
</div>

<div class="container-fluid px-0">
   <?= form_open_multipart(base_url('admin/services')) ?>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="ad_ge" value="<?= $services[0]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('services'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="ad_txt_ge" rows="12" ><?= $services[0]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('ad_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="ad_en" value="<?= $services[0]->name_en ?>">
               <small class="text-danger"><?php echo form_error('ad_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="ad_txt_en" rows="12" ><?= $services[0]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('ad_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="ad_ru" value="<?= $services[0]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('ad_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="ad_txt_ru" rows="12" ><?= $services[0]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('ad_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="ivr_ge" value="<?= $services[1]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('ivr_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="ivr_txt_ge" rows="12" ><?= $services[1]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('ivr_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="ivr_en" value="<?= $services[1]->name_en ?>">
               <small class="text-danger"><?php echo form_error('ivr_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="ivr_txt_en" rows="12" ><?= $services[1]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('ivr_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="ivr_ru" value="<?= $services[1]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('ivr_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="ivr_txt_ru" rows="12" ><?= $services[1]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('ivr_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="dubbing_ge" value="<?= $services[2]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('dubbing_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="dubbing_txt_ge" rows="12" ><?= $services[2]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('dubbing_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="dubbing_en" value="<?= $services[2]->name_en ?>">
               <small class="text-danger"><?php echo form_error('dubbing_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="dubbing_txt_en" rows="12" ><?= $services[2]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('dubbing_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="dubbing_ru" value="<?= $services[2]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('dubbing_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="dubbing_txt_ru" rows="12" ><?= $services[2]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('dubbing_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="audiobook_ge" value="<?= $services[3]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('audiobook_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="audiobook_txt_ge" rows="12" ><?= $services[3]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('audiobook_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="audiobook_en" value="<?= $services[3]->name_en ?>">
               <small class="text-danger"><?php echo form_error('audiobook_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="audiobook_txt_en" rows="12" ><?= $services[3]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('audiobook_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="audiobook_ru" value="<?= $services[3]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('audiobook_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="audiobook_txt_ru" rows="12" ><?= $services[3]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('audiobook_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="adtext_ge" value="<?= $services[4]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('adtext_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="adtext_txt_ge" rows="12" ><?= $services[4]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('adtext_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="adtext_en" value="<?= $services[4]->name_en ?>">
               <small class="text-danger"><?php echo form_error('adtext_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="adtext_txt_en" rows="12" ><?= $services[4]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('adtext_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="adtext_ru" value="<?= $services[4]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('adtext_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="adtext_txt_ru" rows="12" ><?= $services[4]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('adtext_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-5">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="translation_ge" value="<?= $services[5]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('translation_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="translation_txt_ge" rows="12" ><?= $services[5]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('translation_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="translation_en" value="<?= $services[5]->name_en ?>">
               <small class="text-danger"><?php echo form_error('translation_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="translation_txt_en" rows="12" ><?= $services[5]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('translation_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="translation_ru" value="<?= $services[5]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('translation_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="translation_txt_ru" rows="12" ><?= $services[5]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('translation_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <hr>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="orderservice_ge" value="<?= $services[6]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('orderservice_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="orderservice_txt_ge" rows="12" ><?= $services[6]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('orderservice_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="orderservice_en" value="<?= $services[6]->name_en ?>">
               <small class="text-danger"><?php echo form_error('orderservice_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="orderservice_txt_en" rows="12" ><?= $services[6]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('orderservice_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="orderservice_ru" value="<?= $services[6]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('orderservice_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="orderservice_txt_ru" rows="12" ><?= $services[6]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('orderservice_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="proceedorder_ge" value="<?= $services[7]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('proceedorder_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="proceedorder_txt_ge" rows="12" ><?= $services[7]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('proceedorder_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="proceedorder_en" value="<?= $services[7]->name_en ?>">
               <small class="text-danger"><?php echo form_error('proceedorder_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="proceedorder_txt_en" rows="12" ><?= $services[7]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('proceedorder_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="proceedorder_ru" value="<?= $services[7]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('proceedorder_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="proceedorder_txt_ru" rows="12" ><?= $services[7]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('proceedorder_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="invoice_ge" value="<?= $services[8]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('invoice_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="invoice_txt_ge" rows="12" ><?= $services[8]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('invoice_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="invoice_en" value="<?= $services[8]->name_en ?>">
               <small class="text-danger"><?php echo form_error('invoice_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="invoice_txt_en" rows="12" ><?= $services[8]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('invoice_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="invoice_ru" value="<?= $services[8]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('invoice_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="invoice_txt_ru" rows="12" ><?= $services[8]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('invoice_txt_ru'); ?></small> 
            </div>
         </div>
      </div>

      <div class="form-group row mb-4">
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="finalizeorder_ge" value="<?= $services[9]->name_ge ?>">
               <small class="text-danger"><?php echo form_error('finalizeorder_ge'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="finalizeorder_txt_ge" rows="12" ><?= $services[9]->text_ge ?></textarea>
               <small class="text-danger"><?php echo form_error('finalizeorder_txt_ge'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="finalizeorder_en" value="<?= $services[9]->name_en ?>">
               <small class="text-danger"><?php echo form_error('finalizeorder_en'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="finalizeorder_txt_en" rows="12" ><?= $services[9]->text_en ?></textarea>
               <small class="text-danger"><?php echo form_error('finalizeorder_txt_en'); ?></small> 
            </div>
         </div>
         <div class="col-sm-4">
            <div class="mb-2">
               <input type="text" class="form-control form-control-sm" name="finalizeorder_ru" value="<?= $services[9]->name_ru ?>">
               <small class="text-danger"><?php echo form_error('finalizeorder_ru'); ?></small> 
            </div>
            <div class="mb-2">
               <textarea type="text" class="form-control form-control-sm summernote" name="finalizeorder_txt_ru" rows="12" ><?= $services[9]->text_ru ?></textarea>
               <small class="text-danger"><?php echo form_error('finalizeorder_txt_ru'); ?></small> 
            </div>
         </div>
      </div>





      
      <button type="submit" class="btn btn-primary mb-3">შენახვა</button>
   <?= form_close() ?>
</div>

<?php $this->load->view('admin/templates/footer'); ?>