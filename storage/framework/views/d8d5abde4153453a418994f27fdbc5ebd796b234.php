<?php if($component): ?>
  <?php
    $layout = isset($component->json_params->layout) && $component->json_params->layout != '' ? $component->json_params->layout : 'default';
  ?>
<?php if(\View::exists('frontend.components.' . $widget->sidebar->json_params->layout .'.'.  $component->component_code . '.layout.' . $layout)): ?>

    <?php echo $__env->make('frontend.components.' . $widget->sidebar->json_params->layout .'.'.  $component->component_code . '.layout.' . $layout, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php else: ?>
    <?php echo e('Style: frontend.components.' . $widget->sidebar->json_params->layout .'.'.  $component->component_code . '.layout.' . $layout . ' do not exists!'); ?>

  <?php endif; ?>

<?php endif; ?>
<?php /**PATH C:\xamppp\htdocs\corner\shushi\resources\views/frontend/components/sidebar_product/properties/index.blade.php ENDPATH**/ ?>