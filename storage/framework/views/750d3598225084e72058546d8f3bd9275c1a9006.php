<?php $__env->startSection('banner'); ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="height: 100vh; border: 10px solid snow;">
            <div class="carousel-item active">
                <img class="d-block w-100"
                    src="https://www.junaidjamshed.com/media/weltpixel/owlcarouselslider/images/s/a/sale_11.gif"
                    data-src="holder.js/900x400?theme=social" alt="900x400" data-holder-rendered="true"
                    style="width: 900px; height: 100vh;">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                    src="https://www.junaidjamshed.com/media/weltpixel/owlcarouselslider/images/b/a/banner_60.jpg"
                    data-src="holder.js/900x400?theme=industrial" alt="900x400" data-holder-rendered="true"
                    style="width: 900px; height: 100vh;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Office work\first-projecttest\resources\views/components/banner.blade.php ENDPATH**/ ?>