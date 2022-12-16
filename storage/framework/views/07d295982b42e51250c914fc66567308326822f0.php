<?php $__env->startSection('title', 'Özellik Yönetimi - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <div class="d-flex flex-row gap-3">
        <div class="col-6">
            <div class="line">
                <div class="title">Özellik Grupları</div>
                <hr class="line-styled">
            </div>
            <a href="<?php echo e(route('dashboard.products.specs.spec_groups.create')); ?>">
                <button class="btn2 me-2">
                    Yeni Özellik Grubu Ekle
                </button>
            </a>
            <?php echo $specGroup['html']; ?>

        </div>
        <div class="col-6">
            <div class="line">
                <div class="title">Özellik Setleri</div>
                <hr class="line-styled">
            </div>
            <a href="<?php echo e(route('dashboard.products.specs.spec_sets.create')); ?>">
                <button class="btn2 me-2">
                    Yeni Özellik Seti Ekle
                </button>
            </a>
            <?php echo $specSet['html']; ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $specGroup['js']; ?>

    <?php echo $specSet['js']; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/specs/index.blade.php ENDPATH**/ ?>