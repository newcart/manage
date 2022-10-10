<?php $__env->startSection('title', 'Yetkiler - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('panel.users')); ?>" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        Geri Dön
    </a>
    <a href="<?php echo e(route('panel.users.types.create')); ?>" class="btn btn-warning">
        Yekti Ekle
    </a>
    <a href="<?php echo e(route('panel.users.services')); ?>" class="btn btn-danger">
        Servisler
    </a>

    <?php echo $datatable['html']; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $datatable['js']; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/dashboard/users/type/index.blade.php ENDPATH**/ ?>