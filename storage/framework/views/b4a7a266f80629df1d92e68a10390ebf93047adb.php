<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Marka Yönetimi - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <div class="btn-list d-flex my-2">
        <a href="<?php echo e(route('dashboard.brands.create')); ?>" class="btn btn-success">
            Yeni Marka Ekle
        </a>
    </div>

    <?php echo $datatable['html']; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $datatable['js']; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/brands/index.blade.php ENDPATH**/ ?>