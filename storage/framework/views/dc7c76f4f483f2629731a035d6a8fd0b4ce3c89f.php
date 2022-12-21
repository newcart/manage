<?php $__env->startSection('title', 'Yeni Renk Bilgisi Ekle - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Yeni Renk Bilgisi Ekle</h1>
    <form action="<?php echo e(route('dashboard.products.colors.store')); ?>" method="POST" class="mt-3">
        <?php echo csrf_field(); ?>
        <div>
            <div class="line">
                <div class="title">Renk Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="queue_no">
                </div>
                <div class="mb-3">
                    <label for="color_code" class="form-label">Renk Kodu</label>
                    <input type="color" class="form-control" name="color_code">
                </div>
                <?php
                    $options = [
                        'Renk Grubu',
                        'Renksiz',
                        'Sarı',
                        'Mavi'
];
                ?>
                <select name="color_group">
                    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value); ?>"><?php echo e($option); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php
                    $gg = [
                        'GG Renk Karşılığı',
                        'Renksiz',
                        'Sarı',
                        'Mavi'
];
                ?>
                <select name="color_group">
                    <?php $__currentLoopData = $gg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value); ?>"><?php echo e($option); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Renk bilgisi ekle</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/colors/add-email.blade.php ENDPATH**/ ?>
