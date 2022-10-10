

<?php $__env->startSection('title', 'Panel - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <small>burası dashboard content.</small>
    <br>
    <h1>Merhaba! <?php echo e(Auth::user()->name); ?></h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/apexcharts.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart.js')); ?>"></script>
<script>
    $('.js-tilt').tilt({
        glare: true,
        maxGlare: .5
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/dashboard/index.blade.php ENDPATH**/ ?>