<?php if($block): ?>
    <?php
        $title = $block->json_params->title->{$locale} ?? $block->title;
        $brief = $block->json_params->brief->{$locale} ?? $block->brief;
        $content = $block->json_params->content->{$locale} ?? $block->content;
        $image = $block->image != '' ? $block->image : '';
        $image_background = $block->image_background != '' ? $block->image_background : '';
        $url_link = $block->url_link != '' ? $block->url_link : '';
        $url_link_title = $block->json_params->url_link_title->{$locale} ?? $block->url_link_title;
        $gallery_image = $block->json_params->gallery_image ?? [];
        // Filter all blocks by parent_id
        $block_childs = $blocks->filter(function ($item, $key) use ($block) {
            return $item->parent_id == $block->id;
        });
    ?>
<section id="fhm-guiding-story" class="guiding-story">
    <div class="guiding-story-background position-absolute" style="background: url('<?php echo e($image_background); ?>')no-repeat;background-size: cover">
    </div>
    <div class="container">
        <div class="guiding-story-content">
            <h3 class="position-relative"><?php echo e($title); ?></h3>
            <p>
                <?php echo e($brief); ?>

            </p>
            <a href="<?php echo e($url_link); ?>" class="button" title="Learn More ">
               <?php echo e($url_link_title); ?>

            </a>
        </div>
    </div>
    <div class="guiding-story-image">
        <img src="<?php echo e($image); ?>" alt="What Make A Neapolitan Sushi Oven ?" title="What Make A Neapolitan Sushi Oven ?">
    </div>
</section>
<?php endif; ?>
<?php /**PATH C:\xamppp\htdocs\flavor-fusion\resources\views/frontend/blocks/custom/styles/block_what.blade.php ENDPATH**/ ?>