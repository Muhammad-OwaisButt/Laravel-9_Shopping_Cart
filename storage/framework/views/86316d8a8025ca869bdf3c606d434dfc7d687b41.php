<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row container">

    <div class="col col-md-6">
        <img width="500px" height="500px" src="<?php echo e(asset('product_images/'. $product->imgpath)); ?>" alt="">
    </div>

    <div class="col col-md-6">

    </div>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Office work\first-projecttest\resources\views/single_product.blade.php ENDPATH**/ ?>