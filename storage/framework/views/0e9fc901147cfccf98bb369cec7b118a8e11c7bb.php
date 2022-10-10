<?php $__env->startSection('title', 'Kullanıcı Tipi Ekle - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Yeni Kullanıcı Tipi Ekle</h1>
    <form action="<?php echo e(route('panel.users.types.create')); ?>" method="POST" class="mt-3">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="code" class="form-label">Kullanıcı tipi kodu</label>
            <input type="text" class="form-control" placeholder="example" name="code" id="code">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Kullanıcı tipi adı</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <p>Kullanıcı tipi durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex gap-2 mb-3">
                <p><?php echo e($service->name); ?></p>
                <div>
                    <p>Görüntüle</p>
                    <label class="switch">
                        <input type="checkbox" name="services[<?php echo e($service->code); ?>][view]">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Oluştur</p>
                    <label class="switch">
                        <input type="checkbox" name="services[<?php echo e($service->code); ?>][create]">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Güncelle</p>
                    <label class="switch">
                        <input type="checkbox" name="services[<?php echo e($service->code); ?>][update]">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Sil</p>
                    <label class="switch">
                        <input type="checkbox" name="services[<?php echo e($service->code); ?>][delete]">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="submit" class="btn btn-primary">Kullanıcı tipi ekle</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/dashboard/users/type/create.blade.php ENDPATH**/ ?>