<?php $__env->startSection('title', 'Siparişler | Akıllıphone'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="btn-list d-flex my-2">
        <a href="<?php echo e(route('dashboard.categories.create')); ?>" class="btn btn-success">
            Yeni Kategori Ekle
        </a>
    </div>

    <?php echo $datatable["html"]; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $datatable["js"]; ?>

    <script src="<?php echo e(asset('assets/js/custom-select.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.0/jquery.nicescroll.min.js"></script>
    <script src="<?php echo e(asset('assets/js/flatpickr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/flatpickr.min.js')); ?>"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/tr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/plugins/rangePlugin.min.js"></script>
    <script>
        flatpickr.localize(flatpickr.l10ns.tr);
        flatpickr(".date-picker", {
            "plugins": [new rangePlugin({input: "#date-picker2"})],
            dateFormat: "d/m/Y",
            disableMobile: "true"
        });
    </script>
    <script>
        $(function () {
            $(".brand-list").niceScroll({
                cursorcolor: "#808080",
                autohidemode: true,
                emulatetouch: true,
                horizrailenabled: true,
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/categories/index.blade.php ENDPATH**/ ?>