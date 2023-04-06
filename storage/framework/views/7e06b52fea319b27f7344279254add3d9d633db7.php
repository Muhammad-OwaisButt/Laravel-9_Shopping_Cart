<?php $__env->startSection('content'); ?>

    <h1>Hello CART</h1>
    <div class="container">

        
        <?php if($message = Session::get('success')): ?>
            <div class="p-3 mb-3 rounded" style="background-color: rgb(94, 195, 151)">
                <h3 class="text-green-800"><?php echo e($message); ?></h3>
            </div>
        <?php endif; ?>
        
        <?php if($message = Session::get('warning')): ?>
            <div class="p-3 mb-3 rounded" style="background-color: rgb(227, 227, 97)">
                <h3 class="text-green-800"><?php echo e($message); ?></h3>
            </div>
        <?php endif; ?>
        
        <?php if($message = Session::get('destroy')): ?>
            <div class="p-3 mb-3 rounded" style="background-color: rgb(236, 95, 95)">
                <h3 class="text-green-800"><?php echo e($message); ?></h3>
            </div>
        <?php endif; ?>


        <?php if(count($cartItems) < 1): ?>

        <div class="p-4 mb-3 bg-green-400 rounded">
            <h1 class="text-green-800">OOPs ! there is no product in your cart !!!</h1>
            <h2 class="text-green-800">Lets shop first !</h2>
            <a class="btn btn-primary p-3 px-4" href="<?php echo e(url('/products')); ?>">ADD PRODUCTS</a>
        </div>

        <?php else: ?>

        <table class="table table-hover container bg-white">
            <thead>
                <tr class="row">
                    <th scope="col" class="col col-md-1">#</th>
                    <th scope="col" class="col col-md-2">NAME</th>
                    <th scope="col" class="col col-md-1">COLOR</th>
                    <th scope="col" class="col col-md-1">SIZE</th>
                    <th scope="col" class="col col-md-1">PRICE</th>
                    <th scope="col" class="col col-md-2">IMAGE</th>
                    <th scope="col" class="col col-md-2">QUANTITY</th>
                    <th scope="col" class="col col-md-2">DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                ?>

                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="row">
                        
                        <th scope="row" class="col col-md-1"><?php echo e($i++); ?></td>
                            
                        <td scope="row" class="col col-md-2"><?php echo e($item->name); ?></td>
                        
                        <td scope="row" class="col col-md-1"><?php echo e($item->attributes->color); ?></td>
                        
                        <td scope="row" class="col col-md-1"><?php echo e($item->attributes->size); ?></td>
                        
                        <td scope="row" class="col col-md-1">RPs:<?php echo e($item->price); ?></td>
                        
                        <td scope="row" class="col col-md-2"><img width="100px" height="100px"
                                src="<?php echo e(asset('product_images/' . $item->attributes->imgpath)); ?>" alt=""></td>
                        
                        <td scope="row" class="col col-md-2">
                                <div class="">
                                    
                                    <form action="<?php echo e(route('cart.update')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id" value="<?php echo e($item->id); ?>">
                                        
                                        <button class="btn btn-warning"><input type="number" name="quantity" min="1" max="5" step="1" value="<?php echo e($item->quantity); ?>" style="width: 100%"></button>
                                        
                                    </form>
                                </div>
                        </td>
                        <td scope="row" class="col col-md-2">
                            
                            <form action="<?php echo e(route('cart.remove')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" value="<?php echo e($item->id); ?>" name="id">
                                <button class="btn btn-danger"><img height="30px" width="40px"
                                        src="<?php echo e(asset('trash bin.png')); ?>" alt=""></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>

        <div class="row container">

            <div class="col col-md-10">
                
            <a class="btn btn-primary p-3 px-4" href="<?php echo e(url('/products')); ?>">CONTINUE SHOPPING</a>

            </div>

            <div class="col col-md-2">


                <div>
                    Total Items: <?php echo e(Cart::getTotalQuantity()); ?>

                    <br><br>
                    Total: RPs:<?php echo e(Cart::getTotal()); ?>

                </div>
                <div>
                    
                    <form action="<?php echo e(route('cart.clear')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-dark p-3 px-4">CLEAR CART</button>
                    </form>
                </div>

                <hr>
                    
                <a class="btn btn-dark p-3 px-4">CHECK OUT NOW</a>

            </div>

        </div>

        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('user_components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Office work\Laravel 9\resources\views/cart.blade.php ENDPATH**/ ?>