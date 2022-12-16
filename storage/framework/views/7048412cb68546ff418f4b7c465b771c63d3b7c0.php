<?php $__env->startSection('title', 'Stok Uyarı İstekleri - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $datatable['html']; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $datatable['js']; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/stock_warning_requests/index.blade.php ENDPATH**/ ?>