<?php $__env->startSection('title', $service->name . ' | Servis Düzenle - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($service->name); ?> servisini düzenliyorsunuz</h1>
    <form action="<?php echo e(route('panel.users.services.update', $service)); ?>" method="POST" class="mt-3">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="hidden" name="id" value="<?php echo e($service->type_id); ?>">
        <div class="mb-3">
            <label for="code" class="form-label">Servis kodu</label>
            <input type="text" class="form-control" placeholder="brand-model" name="code" value="<?php echo e($service->code); ?>">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Servis Adı</label>
            <input type="text" class="form-control" name="name" value="<?php echo e($service->name); ?>">
        </div>
        <div class="mb-3">
            <p>Servis Durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked="<?php echo e($service->status); ?>">
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Servisi Güncelle</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/dashboard/users/service/settings.blade.php ENDPATH**/ ?>
