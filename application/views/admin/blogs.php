<?php $this->load->view('admin/templates/header'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h3 class="h3">ბლოგები</h3>
   <a href="<?= base_url('admin/addBlog')?>" class="btn btn-success btn-sm"><i class="fa fa-plus mr-1"></i>დამატება</a>
</div>

<div class="container-fluid px-0">
   <div class="table-responsive">
      <table class="table table-sm">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">დასახელება</th>
               <th scope="col">თარიღი</th>
               <th scope="col">მოქმედება</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach($blogs as $i => $blog): ?>
               <tr>
                  <th scope="row"><?= $i+1 ?></th>
                  <td><?= $blog->title_ge ?></td>
                  <td><?= $blog->create_dt ?></td>
                  <td>
                     <a href="<?=base_url('admin/editblog/'.$blog->id) ?>">
                        <i class="fa fa-pencil text-info mr-2"></i>
                     </a>
                     <button class="bg-transparent border-0" type="button" data-toggle="modal" data-target="#deleteModal" data-page="blog" data-id="<?= $blog->id ?>">
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