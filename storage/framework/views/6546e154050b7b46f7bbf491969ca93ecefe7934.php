<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', 'Ürünler - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <div class="btn-list d-flex my-2">
        <a href="#">
            <!-- TODO: Nethesap Entegrasyon Endpoint Bağla -->
            <button class="btn1 me-2">
                Nethesap'tan Yeni Ürünleri Çek
            </button>
        </a>
        <a href="<?php echo e(route('panel.products.new')); ?>">
            <button class="btn2 me-2">
                Yeni Ürün Ekle
            </button>
        </a>
        <a href="#">
            <!-- TODO: Nethesap Entegrasyon Endpoint Bağla -->
            <button class="btn1 me-2">
                Nethesap'tan Stok Güncelle
            </button>
        </a>
        <button class="btn3 me-2">QR Kod</button>
    </div>

    <?php echo $__env->make('dashboard.products.components.productType', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $datatable['html']; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/plugins/rangePlugin.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/tr.js"></script>
    <script src="<?php echo e(asset('assets/js/flatpickr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom-select.js')); ?>"></script>
    <?php echo $datatable['js']; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/dashboard/products/index.blade.php ENDPATH**/ ?>