<?php $__env->startSection('title', 'Üreticiler - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('dashboard.products.providers.create')); ?>" class="btn btn-primary">
        Yeni Üretici Ekle
    </a>

    <?php echo $datatable['html']; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $datatable['js']; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/providers/index.blade.php ENDPATH**/ ?>