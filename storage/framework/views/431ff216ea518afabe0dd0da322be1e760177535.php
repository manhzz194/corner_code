<?php if($component): ?>
    <?php
        $title = $component->json_params->title->{$locale} ?? $component->title;
        $brief = $component->json_params->brief->{$locale} ?? $component->brief;
        $image = $component->image != '' ? $component->image : null;
        // Filter all blocks by parent_id
        $component_childs = $all_components->filter(function ($item, $key) use ($component) {
            return $item->parent_id == $component->id;
        });
    ?>
    <div class="decor-element">
        <img src="<?php echo e($image); ?>" alt="<?php echo e($title); ?>" title="<?php echo e($title); ?>" />
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\pizza\resources\views/frontend/components/footer_default/footer/layout/decor.blade.php ENDPATH**/ ?>