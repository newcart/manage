<?php $__env->startSection('title', $type->name .' | Kullanıcı Tipi Düzenle - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($type->name); ?> kullanıcı tipini düzenliyorsunuz</h1>
    <form action="<?php echo e(route('dashboard.users.types.update', $type)); ?>" method="POST" class="mt-3">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <input type="hidden" name="id" value="<?php echo e($type->type_id); ?>">
        <div class="mb-3">
            <label for="code" class="form-label">Yetki kodu</label>
            <input type="text" class="form-control" placeholder="brand-model" name="code" value="<?php echo e($type->code); ?>">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Yetki Adı</label>
            <input type="text" class="form-control" name="name" value="<?php echo e($type->name); ?>">
        </div>
        <div class="mb-3">
            <p>Yetki Durumu</p>
            <label class="switch">
                <input type="checkbox" name="status" checked="<?php echo e($type->status); ?>">
                <span class="slider round"></span>
            </label>
        </div>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex gap-2 mb-3">
                <p><?php echo e($service->name); ?></p>
                <div>
                    <p>Görüntüle</p>
                    <label class="switch">
                        <?php if($roles[$service->code]['view']): ?>
                            <input type="checkbox" name="services[<?php echo e($service->code); ?>][view]" checked>
                        <?php else: ?>
                            <input type="checkbox" name="services[<?php echo e($service->code); ?>][view]">
                        <?php endif; ?>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Oluştur</p>
                    <label class="switch">

                        <?php if($roles[$service->code]['create']): ?>
                            <input type="checkbox" name="services[<?php echo e($service->code); ?>][create]" checked>
                        <?php else: ?>
                            <input type="checkbox" name="services[<?php echo e($service->code); ?>][create]">
                        <?php endif; ?>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Güncelle</p>
                    <label class="switch">
                        <?php if($roles[$service->code]['update']): ?>
                            <input type="checkbox" name="services[<?php echo e($service->code); ?>][update]" checked>
                        <?php else: ?>
                            <input type="checkbox" name="services[<?php echo e($service->code); ?>][update]">
                        <?php endif; ?>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <p>Sil</p>
                    <label class="switch">
                        <?php if($roles[$service->code]['delete']): ?>
                            <input type="checkbox" name="services[<?php echo e($service->code); ?>][delete]" checked>
                        <?php else: ?>
                            <input type="checkbox" name="services[<?php echo e($service->code); ?>][delete]">
                        <?php endif; ?>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="submit" class="btn btn-primary">Kullanıcı Tipini Güncelle</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/users/type/edit.blade.php ENDPATH**/ ?>