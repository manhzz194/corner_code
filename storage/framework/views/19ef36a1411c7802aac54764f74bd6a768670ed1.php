<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <?php $__currentLoopData = $accessMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item->parent_id == 0 || $item->parent_id == null): ?>
          <?php
            $check = 0;
            if (Request::segment(2) == $item->url_link) {
                $check++;
            }
            foreach ($accessMenus as $sub) {
                if ($sub->parent_id == $item->id && Request::segment(2) == $sub->url_link) {
                    $check++;
                }
            }
          ?>
          <li class="header">
            <i class="<?php echo e($item->icon != '' ? $item->icon : 'fa fa-angle-right'); ?>"></i>
            <?php echo e(__($item->name)); ?>

          </li>
          <?php if($item->submenu > 0): ?>
            
            <?php $__currentLoopData = $accessMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($sub->parent_id == $item->id): ?>
                <li class="<?php echo e(Request::segment(2) == $sub->url_link ? 'active' : ''); ?>">
                  <a href="/admin/<?php echo e($sub->url_link); ?>">
                    <i class="<?php echo e($sub->icon != '' ? $sub->icon : 'fa fa-angle-right'); ?>"></i>
                    <span><?php echo e(__($sub->name)); ?></span>
                  </a>
                  <?php if($sub->submenu > 0): ?>
                    <ul class="treeview-menu">
                      <?php $__currentLoopData = $accessMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($sub_child->parent_id == $sub->id): ?>
                          <li class="<?php echo e(Request::segment(2) == $sub_child->url_link ? 'active' : ''); ?>">
                            <a href="/admin/<?php echo e($sub_child->url_link); ?>">
                              <i class="<?php echo e($sub_child->icon != '' ? $sub_child->icon : 'fa fa-angle-right'); ?>"></i>
                              <span><?php echo e(__($sub_child->name)); ?></span>
                            </a>
                          </li>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
          <?php endif; ?>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php /**PATH C:\xampp\htdocs\pizza\resources\views/admin/panels/sidebar.blade.php ENDPATH**/ ?>