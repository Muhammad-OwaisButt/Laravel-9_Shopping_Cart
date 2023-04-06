<?php $__env->startSection('content'); ?>

    <table class="table table-hover container bg-white">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Color</th>
                <th scope="col">size</th>
                <th scope="col">price</th>
                <th scope="col">Image</th>
                <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $i = 1;
            ?>

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <th scope="row"><?php echo e($i++); ?></th>
                    <th scope="row"><?php echo e($data->id); ?></th>
                    <td><?php echo e($data->name); ?></td>
                    <td><?php echo e($data->category); ?></td>
                    <td><?php echo e($data->color); ?></td>
                    <td><?php echo e($data->size); ?></td>
                    <td><?php echo e($data->price); ?></td>
                    <td><img width="80px" height="80px" src="<?php echo e(asset('product_images/' . $data->imgpath)); ?>"
                            alt="<?php echo e($data->name); ?>"></td>
                    <td><a class="btn btn-warning" href="<?php echo e('edit/' . $data->id); ?>">Edit</a></td>
                    <td><a class="btn btn-danger" href="<?php echo e('delete/' . $data->id); ?>">Delete</a></td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Office work\first-projecttest\resources\views/admin/data_table.blade.php ENDPATH**/ ?>