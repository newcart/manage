<?php $__env->startSection('title', 'Kullanıcılar - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('panel.users.new')); ?>" class="btn btn-primary">
        Yeni Kullanıcı Ekle
    </a>
    <a href="<?php echo e(route('panel.users.services')); ?>" class="btn btn-warning">
        Servisler
    </a>
    <a href="<?php echo e(route('panel.users.types')); ?>" class="btn btn-success">
        Yetkiler
    </a>

    <?php echo $datatable['html']; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $datatable['js']; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/dashboard/users/index.blade.php ENDPATH**/ ?>