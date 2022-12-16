<?php $__env->startSection('title', 'Ürün Ekle - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Yeni Ürün ekle</h1>
    <form action="<?php echo e(route('panel.products.create')); ?>" method="POST" class="mt-3">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="code" class="form-label">Ürün kodu</label>
            <input type="text" class="form-control" placeholder="brand-model" name="code">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Ürün Adı</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Ürün Markası</label>
            <input type="text" class="form-control" name="brand">
        </div>
        <div class="mb-3">
            <label for="tax" class="form-label">Ürün Vergisi</label>
            <input type="text" class="form-control" name="tax">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Ürün Fiyatı</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <p>Ürün Durumu</p>
            <label class="switch">
                <input type="checkbox" name="status">
                <span class="slider round"></span>
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Ürünü ekle</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/create.blade.php ENDPATH**/ ?>