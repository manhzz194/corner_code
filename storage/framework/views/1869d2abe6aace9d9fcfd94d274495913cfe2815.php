

<?php $__env->startSection('title'); ?>
  <?php echo e($module_name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e($module_name); ?>

      <a class="btn btn-sm btn-warning pull-right" href="<?php echo e(route(Request::segment(2) . '.create')); ?>"><i
          class="fa fa-plus"></i> <?php echo app('translator')->get('Add'); ?></a>
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php if(session('errorMessage')): ?>
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(session('errorMessage')); ?>

      </div>
    <?php endif; ?>
    <?php if(session('successMessage')): ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo e(session('successMessage')); ?>

      </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    <?php endif; ?>

    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo app('translator')->get('Update form'); ?></h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" action="<?php echo e(route(Request::segment(2) . '.update', $adminMenu->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label><?php echo app('translator')->get('Parent element'); ?></label>
              <select name="parent_id" id="parent_id" class="form-control select2">
                <option value=""><?php echo app('translator')->get('Please select'); ?></option>
                <?php $__currentLoopData = $rootMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($item->id); ?>" <?php echo e($adminMenu->parent_id == $item->id ? 'selected' : ''); ?>>
                    <?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>

            <div class="form-group">
              <label><?php echo app('translator')->get('Name'); ?> <small class="text-red">*</small></label>
              <input type="text" class="form-control" name="name" placeholder="<?php echo app('translator')->get('Name'); ?>"
                value="<?php echo e($adminMenu->name); ?>" required>
            </div>

            <div class="form-group">
              <label><?php echo app('translator')->get('Link'); ?></label>
              <input type="text" class="form-control" name="url_link" placeholder="<?php echo app('translator')->get('Link'); ?>"
                value="<?php echo e($adminMenu->url_link); ?>">
            </div>


          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label><?php echo app('translator')->get('Icon'); ?></label>
              <input type="text" class="form-control" name="icon" placeholder="Ex: fa fa-folder"
                value="<?php echo e($adminMenu->icon); ?>">
            </div>

            <div class="form-group">
              <label><?php echo app('translator')->get('Order'); ?></label>
              <input type="number" class="form-control" name="iorder" placeholder="<?php echo app('translator')->get('Order'); ?>"
                value="<?php echo e($adminMenu->iorder); ?>">
            </div>

            <div class="form-group">
              <label><?php echo app('translator')->get('Status'); ?></label>
              <div class="form-control">
                <label>
                  <input type="radio" name="status" value="active"
                    <?php echo e($adminMenu->status == 'active' ? 'checked' : ''); ?>>
                  <small><?php echo app('translator')->get('Active'); ?></small>
                </label>
                <label>
                  <input type="radio" name="status" value="deactive" class="ml-15"
                    <?php echo e($adminMenu->status == 'deactive' ? 'checked' : ''); ?>>
                  <small><?php echo app('translator')->get('Deactive'); ?></small>
                </label>
              </div>
            </div>

          </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <a class="btn btn-success btn-sm" href="<?php echo e(route(Request::segment(2) . '.index')); ?>">
            <i class="fa fa-bars"></i> <?php echo app('translator')->get('List'); ?>
          </a>
          <button type="submit" class="btn btn-primary pull-right btn-sm"><i class="fa fa-floppy-o"></i>
            <?php echo app('translator')->get('Save'); ?></button>
        </div>
      </form>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pizza\resources\views/admin/pages/admin_menus/edit.blade.php ENDPATH**/ ?>