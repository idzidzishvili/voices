<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">მსახიობის რედაქტირება</h3>
</div>

<div class="container-fluid px-0">
   <?php if(validation_errors()):?>
      <div class="alert alert-danger">
         <ul>
            <?php echo validation_errors('<li>', '</li>'); ?>
         </ul>
      </div>
   <?php endif;?>
</div>

<?= form_open_multipart(base_url('admin/editActor/' . $id)) ?>
<div class="container-fluid px-0">
   <div class="row mb-4 mt-4">
      <div class="col-12 col-md-3 col-lg-2 mb-3">
         <?php if ($actor->image) : ?>
            <img src="<?= base_url('assets/images/actors/' . $actor->image) ?>" height="180">
         <?php endif; ?>
      </div>

      <div class="col-12 col-md-9 col-lg-10 mb-3">
         <div class="row mb-3">
            <label class="col-sm-2 col-form-label">სახელი, გვარი</label>
            <div class="col-sm-10">
               <input type="text" class="form-control form-control-sm" name="name" value="<?= $actor->name ?>">
            </div>
         </div>
         <div class="row mb-3">
            <label class="col-sm-2 col-form-label">სქესი</label>
            <div class="col-sm-10">
               <select class="form-control form-control-sm" name="gender">
                  <?php foreach ($genders as $gender) : ?>
                     <option value="<?= $gender->id ?>" <?= $actor->gender_id == $gender->id ? 'selected' : '' ?>><?= $gender->name_ge ?></option>
                  <?php endforeach; ?>
               </select>
               <small class="text-danger"><?php echo form_error('gender'); ?></small>
            </div>
         </div>
         <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Voice ID</label>
            <div class="col-sm-10">
               <input type="text" class="form-control form-control-sm" name="vid" value="<?= $actor->vid ?>">
               <small class="text-danger"><?php echo form_error('vid'); ?></small>
            </div>
         </div>
         <div class="row mb-3">
            <label class="col-sm-2 col-form-label">სურათი</label>
            <div class="col-sm-10">
               <input type="file" class="form-control form-control-sm" name="profileImage" value="">
            </div>
         </div>
      </div>
   </div>

   <div class="row mb-4 mt-4 px-2">
      <?php foreach ($actorVoices as $actorVoice): ?>
         <div class="col-12 col-lg-6 col-xl-4 p-1">
            <div class="card w-100">
               <div class="card-header p-2">
               <a data-toggle="collapse" href="#block-<?= $actorVoice->dom ?>" aria-expanded="true" aria-controls="block-<?= $actorVoice->dom ?>">
                  <?= $actorVoice->name_ge ?> (<?=count($actorVoice->userVoices)?>)
               </a>
               </div>
               <div id="block-<?= $actorVoice->dom ?>" class="collapse">
               <div class="container p-1">
                  <div class="row mb-1">
                     <div class="col-4 pt-1">ხმის ფასი</div>
                     <div class="col-8 pl-1">
                        <input type="number" min="0" step="10" name="voice_price[<?= $actorVoice->id ?>]" class="form-control form-control-sm" value="<?= $actorVoice->langPrice ?>">
                     </div>
                  </div>
                  <?php foreach ($voiceCategories as $voiceCat): ?>
                     <div class="row mb-1">
                        <div class="col-4 pr-0"><?= $voiceCat->name_ge ?></div>
                        <div class="col-8 pl-1 d-flex align-items-center">
                           <i class="mr-2 fa fa-music text-<?=array_key_exists($voiceCat->id, $actorVoice->userVoices)?'success':'secondary'?>"></i>
                           <input type="file" class="form-control form-control-sm" name="voice[<?=$actorVoice->id?>][<?=$voiceCat->id?>]">
                        </div>
                     </div>
                  <?php endforeach; ?>
               </div>
               </div>
            </div>
         </div>
      <?php endforeach; ?>
   </div>

   <div class="row px-2">
      <button type="submit" class="btn btn-primary mb-2 ml-1 px-4">შენახვა</button>
   </div>
</div>
<?= form_close() ?>

<?php $this->load->view('admin/templates/footer'); ?>