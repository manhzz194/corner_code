


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
        <form role="form" action="<?php echo e(route(Request::segment(2) . '.update', $detail->id)); ?>" method="POST">
            <div class="row">
                <div class="col-lg-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo app('translator')->get('Update form'); ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="box-body">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1" data-toggle="tab">
                                            <h5>Thông tin chính <span class="text-danger">*</span></h5>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="d-flex-wap">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><?php echo app('translator')->get('Name'); ?> <small class="text-red">*</small></label>
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="<?php echo app('translator')->get('Name'); ?>" value="<?php echo e($detail->name); ?>"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><?php echo app('translator')->get('Email'); ?><small class="text-red">*</small></label>
                                                    <input type="text" class="form-control" name="email"
                                                        placeholder="<?php echo app('translator')->get('Email'); ?>" value="<?php echo e($detail->email); ?>"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><?php echo app('translator')->get('Phone'); ?></label>
                                                    <input type="text" class="form-control" name="phone"
                                                        placeholder="<?php echo app('translator')->get('Phone'); ?>" value="<?php echo e($detail->phone); ?>"
                                                        >
                                                </div>
                                            </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                                <label><?php echo app('translator')->get('Country'); ?></label>
                                                    <select name="country_id" class="country-select form-control select2">
                                                         <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($val->id); ?>"
                                                                <?php echo e(isset($detail->country_id) && $detail->country_id == $val->id ? 'selected' : ''); ?>>
                                                                <?php echo e($val->name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                                <label><?php echo app('translator')->get('City'); ?></label>
                                                    <select name="city_id" class="city-select form-control select2">
                                                         
                                                    </select>
                                                </div>
                                           </div>   
                                           <div class="col-md-12">
                                                <div class="form-group">
                                                    <label><?php echo app('translator')->get('Address'); ?></label>
                                                    <input type="text" class="form-control" name="street_address"
                                                        placeholder="<?php echo app('translator')->get('Address'); ?>" value="<?php echo e($detail->street_address); ?>"
                                                        >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                  <label><?php echo app('translator')->get('Password'); ?> <small class="text-muted"><i>(<?php echo app('translator')->get("Skip if you don't want to change your password"); ?>)</i></small></label>
                                                  <input type="password" class="form-control" name="password_new" placeholder="<?php echo app('translator')->get('Password must be at least 6 characters'); ?>"
                                                    value="" autocomplete="new-password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.tab-content -->
                        </div><!-- nav-tabs-custom -->

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo app('translator')->get('Publish'); ?></h3>
                        </div>
                        <div class="box-body">
                            <div class="btn-set">
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-save"></i> <?php echo app('translator')->get('Save'); ?>
                                </button>
                                &nbsp;&nbsp;
                                <a class="btn btn-success " href="<?php echo e(route(Request::segment(2) . '.index')); ?>">
                                    <i class="fa fa-bars"></i> <?php echo app('translator')->get('List'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo app('translator')->get('Status'); ?></h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <select name="status" class=" form-control select2">
                                     <?php $__currentLoopData = App\Consts::USER_STATUS; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"
                                            <?php echo e(isset($detail->status) && $detail->status == $val ? 'selected' : ''); ?>>
                                            <?php echo app('translator')->get($val); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo app('translator')->get('Image'); ?></h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group box_img_right">
                                <div id="image-holder" class="box_image <?php echo e(isset($detail->avatar) ? 'active' : ''); ?>">
                                    <img class="img-width"
                                        src="<?php echo e($detail->avatar ?? url('themes/admin/img/no_image.jpg')); ?>">
                                    <input id="image" class="form-control hidden list_image" type="text"
                                        name="avatar" value="<?php echo e($detail->avatar ?? ''); ?>">
                                    <span class="btn btn-sm btn-danger btn-remove" style="display: none"><i
                                            class="fa fa-trash"></i></span>
                                </div>
                                <span class="input-group-btn">
                                    <a data-input="image" class="btn btn-primary lfm" data-type="cms-image">
                                        <i class="fa fa-picture-o"></i> <?php echo app('translator')->get('choose'); ?>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?php echo app('translator')->get('Publish'); ?></h3>
                        </div>
                        <div class="box-body">
                            <div class="btn-set">
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-save"></i> <?php echo app('translator')->get('Save'); ?>
                                </button>
                                &nbsp;&nbsp;
                                <a class="btn btn-success " href="<?php echo e(route(Request::segment(2) . '.index')); ?>">
                                    <i class="fa fa-bars"></i> <?php echo app('translator')->get('List'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function() {
            $('.country-select').trigger('change');

        })
        $('.country-select').change(function() {
            var _id = $(this).val();
            var city_id = <?php echo e($detail->city_id ?? '0'); ?>;
            $.ajax({
                type: "POST",
                url: '<?php echo e(route('frontend.order.getcity')); ?>',
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    "id": _id
                },
                success: function(response) {
                    var data = response.data;
                    var html = "";
                    data.forEach(elm => {
                        var select = "";
                        if (elm.id == city_id) select = "selected";
                        html += `<option ` + select + ` value="` + elm.id + `">` + elm
                            .name + `</option>`;
                    })
                    $('.city-select').html(html);
                    $('.city-select').trigger('change');
                },
                error: function(response) {
                    // Get errors
                    var errors = response.responseJSON.message;
                    alert(errors);
                    location.reload();
                }
            });
        })
        $('.img-width, .btn-remove').on('mouseover', function(e) {
            $(this).parents('.active').find('.btn-remove').show();
        });
        $('.img-width, .btn-remove').on('mouseout', function(e) {
            $(this).parents('.active').find('.btn-remove').hide();
        });
        var no_image_link = '<?php echo e(url('themes/admin/img/no_image.jpg')); ?>';
        $('.btn-remove').click(function() {
            $(this).hide();
            let par = $(this).parents('.box_image');
            par.removeClass('active');
            par.find('img').attr('src', no_image_link);
            par.find('.list_image').val("");
        });
        $('.list_image').on('change', function() {
            var img_path = $(this).val();
            $(this).parents('.box_image').addClass('active');
            $(this).parents('.box_image').find('img').attr('src', img_path);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pizza\resources\views/admin/pages/customer/edit.blade.php ENDPATH**/ ?>