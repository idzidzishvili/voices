<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">სლაიდერი</h3>
   <a href="<?= base_url('admin/addSlider')?>" class="btn btn-success btn-sm"><i class="fa fa-plus mr-1"></i>დამატება</a>
</div>

<div class="container-fluid px-0">
   <div class="table-responsive">
      <table class="table table-sm">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">დასახელება</th>
               <th scope="col">სურათი ქართულზე</th>
               <th scope="col">სურათი ინგლისურზე</th>
               <th scope="col">სურათი რუსულზე</th>
               <th scope="col">მოქმედება</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach($sliders as $i => $slider): ?>
               <tr>
                  <th scope="row"><?= $i+1 ?></th>
                  <td><?= $slider->name_ge ?></td>
                  <td><img src="<?= base_url('assets/images/slider/'.$slider->img_ge) ?>" height="48"></td>
                  <td><img src="<?= base_url('assets/images/slider/'.$slider->img_en) ?>" height="48"></td>
                  <td><img src="<?= base_url('assets/images/slider/'.$slider->img_ru) ?>" height="48"></td>
                  <td>
                     <a href="<?=base_url('admin/editslider/'.$slider->id) ?>">
                        <i class="fa fa-pencil text-info mr-2"></i>
                     </a>
                     <button class="bg-transparent border-0" type="button" data-toggle="modal" data-target="#deleteModal" data-page="Slider" data-id="<?= $slider->id ?>">
                        <i class="fa fa-trash text-danger"></i>
                     </button>
                  </td>
               </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
   </div>
</div>

<?php $this->load->view('admin/confirm-delete'); ?>

<?php $this->load->view('admin/templates/footer'); ?>