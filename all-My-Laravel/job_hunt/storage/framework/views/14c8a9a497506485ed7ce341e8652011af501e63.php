<?php /* C:\xampp\htdocs\job_hunt\resources\views/index.blade.php */ ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Job Hunt | job hunt.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- All Plugin Css --> 
    <link rel="stylesheet" href="<?php echo e(asset('template/css/plugins.css')); ?>">
    
    <!-- Style & Common Css --> 
    <link rel="stylesheet" href="<?php echo e(asset('template/css/common.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('template/css/main.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('template/fontawesome-free-5.6.3-web/css/all.min.css')); ?>">

     <script type="text/javascript" src="<?php echo e(asset('template/js/jquery.min.js')); ?>"></script>
    
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="<?php echo e(asset('template/js/bootstrap.bundle.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('template/js/bootstrap.min.js')); ?>"></script>

    </head>

<body class="bg-info">
  <?php echo $__env->make('part.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Page Content -->
  <main class="py-4">
      <?php echo $__env->yieldContent('middle'); ?>
  </main>
 
  <!-- /.container -->

  <!-- Footer -->
  <?php echo $__env->make('part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo e(asset('template/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('template/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/bootsnav.js')); ?>"></script>
    <script src="<?php echo e(asset('template/js/main.js')); ?>"></script>
    <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>
