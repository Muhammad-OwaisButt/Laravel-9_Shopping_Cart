<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>J.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('J.css')); ?>">
</head>
<body>

    <div class="jumbotron text-center" style="margin-bottom:0px; padding:0px; background-color: white;">

        <h1 style=" font-size: 50px;">J.</h1>

        <ul class="nav nav-tabs" style="justify-content: space-evenly; border-bottom: none; width: 100%; padding: 4px 5px 10px 5px;">

            <li class="nav-item">
              <a class="nav-link" href="#!">NEW ARRAIVALS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">EXCLUSIVE COLLECTION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">WOMEN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">MEN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">BOYS & GIRLS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">FRAGRANCES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">MAKEUP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">CATALOGE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#!">40% - 50%</a>
            </li>

        </ul>

    </div>

    
<div class="container">

    <?php echo $__env->yieldContent('content'); ?>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Office work\first-projecttest\resources\views/home.blade.php ENDPATH**/ ?>