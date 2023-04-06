<?php $__env->startSection('content'); ?>

    <div class='w-100 row p-0 m-0'>

        
        <div class='col-3 col-sm-3 p-4' style="border:none; backgroundColor:black; color:white">
            <h3 style="color: black">Search Filters</h3>
        </div>

        
        <div class='col-9 col-sm-9 d-flex flex-wrap justify-content-between p-4'
            style="border:none; background-color:whitesmoke; min-height:60vh; height: auto ">

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div id="_product" style="width: 20.29rem; background-color:white; border: 2px solid white" class=' mt-4' key=<?php echo e($data->id); ?>>
                <a href="<?php echo e(url('single_product/'. $data->id)); ?>">
                    <div>
                        <img style="height: 45vh; min-height: 45vh; min-width: 20rem; width: 20rem"
                            variant="top" src="<?php echo e(asset('product_images/' . $data->imgpath)); ?>" alt="<?php echo e($data->name); ?>" />
                    </div>
                    <div>
                        <h4><?php echo e($data->name); ?></h4>
                        <p>RPs: <?php echo e($data->price); ?></p>
                        
                        <form action="<?php echo e(route('cart.list')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($data->id); ?>" name="id">
                            <input type="hidden" value="<?php echo e($data->name); ?>" name="name">
                            <input type="hidden" value="<?php echo e($data->size); ?>" name="size">
                            <input type="hidden" value="<?php echo e($data->color); ?>"  name="color">
                            <input type="hidden" value="<?php echo e($data->price); ?>" name="price">
                            <input type="hidden" value="<?php echo e($data->imgpath); ?>"  name="imgpath">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 btn btn-primary" type="submit">Add To Cart</button>
                        </form>
                        
                    </div>
                </a>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user_components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Office work\Laravel 9\resources\views/products.blade.php ENDPATH**/ ?>