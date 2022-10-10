<?php $__env->startSection('title', 'Siparişler | Akıllıphone'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-xxl p-lg-0">
        <div class="product-list">
            <div class="product-list-top justify-content-center justify-content-xxl-start" style="row-gap:20px;">
                <div class="title">Siparişler</div>
                <div class="get-products">
                    <a href="">
                        <img src="<?php echo e(asset('assets/images/new-user.svg')); ?>" alt="get product">
                        Yeni Sipariş Ekle
                    </a>
                </div>
                <?php if (isset($component)) { $__componentOriginal9664ac210be45add4be058f3177c16028511e71a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Select::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a)): ?>
<?php $component = $__componentOriginal9664ac210be45add4be058f3177c16028511e71a; ?>
<?php unset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9664ac210be45add4be058f3177c16028511e71a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Select::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a)): ?>
<?php $component = $__componentOriginal9664ac210be45add4be058f3177c16028511e71a; ?>
<?php unset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal9664ac210be45add4be058f3177c16028511e71a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Select::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a)): ?>
<?php $component = $__componentOriginal9664ac210be45add4be058f3177c16028511e71a; ?>
<?php unset($__componentOriginal9664ac210be45add4be058f3177c16028511e71a); ?>
<?php endif; ?>
                <div class="date-picker-area">
                    <?php if (isset($component)) { $__componentOriginal31b246c3ef44d77bd85ebbea337436b95229f9ff = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Date::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Date::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31b246c3ef44d77bd85ebbea337436b95229f9ff)): ?>
<?php $component = $__componentOriginal31b246c3ef44d77bd85ebbea337436b95229f9ff; ?>
<?php unset($__componentOriginal31b246c3ef44d77bd85ebbea337436b95229f9ff); ?>
<?php endif; ?>
                    <span>arasında</span>
                    <?php if (isset($component)) { $__componentOriginal31b246c3ef44d77bd85ebbea337436b95229f9ff = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Date::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Date::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal31b246c3ef44d77bd85ebbea337436b95229f9ff)): ?>
<?php $component = $__componentOriginal31b246c3ef44d77bd85ebbea337436b95229f9ff; ?>
<?php unset($__componentOriginal31b246c3ef44d77bd85ebbea337436b95229f9ff); ?>
<?php endif; ?>
                    <button class="filter">Filtrele</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-xxl p-lg-0">
        <div class="brand-list">
            <a class="brand" href="#">
                <div class="brand-logo"></div>
                <div class="brand-info">
                    <div class="brand-title">Akıllıphone</div>
                    <div class="brand-order">
                        <span>589</span><span>Sipariş</span>
                    </div>
                </div>
            </a>
            <a class="brand" href="#">
                <div class="brand-logo">
                    <img src="<?php echo e(asset('assets/images/hepsiburada.svg')); ?>" alt="hepsiburada">
                </div>
                <div class="brand-info">
                    <div class="brand-title">Hepsiburada</div>
                    <div class="brand-order">
                        <span>589</span><span>Sipariş</span>
                    </div>
                </div>
            </a>
            <a class="brand" href="#">
                <div class="brand-logo">
                    <img src="<?php echo e(asset('assets/images/n11.svg')); ?>" alt="n11">
                </div>
                <div class="brand-info">
                    <div class="brand-title">n11</div>
                    <div class="brand-order">
                        <span>589</span><span>Sipariş</span>
                    </div>
                </div>
            </a>
            <a class="brand" href="#">
                <div class="brand-logo">
                    <img src="<?php echo e(asset('assets/images/trendyol.svg')); ?>" alt="trendyol">
                </div>
                <div class="brand-info">
                    <div class="brand-title">Trendyol</div>
                    <div class="brand-order">
                        <span>589</span><span>Sipariş</span>
                    </div>
                </div>
            </a>
            <a class="brand" href="#">
                <div class="brand-logo">
                    <img src="<?php echo e(asset('assets/images/ciceksepeti.svg')); ?>" alt="ciceksepeti">
                </div>
                <div class="brand-info">
                    <div class="brand-title">Çiçeksepeti</div>
                    <div class="brand-order">
                        <span>589</span><span>Sipariş</span>
                    </div>
                </div>
            </a>
            <a class="brand" href="#">
                <div class="brand-logo">
                    <img src="<?php echo e(asset('assets/images/amazon.svg')); ?>" alt="Amazon">
                </div>
                <div class="brand-info">
                    <div class="brand-title">Amazon</div>
                    <div class="brand-order">
                        <span>589</span><span>Sipariş</span>
                    </div>
                </div>
            </a>
            <a class="brand" href="#">
                <div class="brand-logo">
                    <img src="<?php echo e(asset('assets/images/pttavm.svg')); ?>" alt="Epttavm">
                </div>
                <div class="brand-info">
                    <div class="brand-title">Epttavm</div>
                    <div class="brand-order">
                        <span>589</span><span>Sipariş</span>
                    </div>
                </div>
            </a>
        </div>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/dashboard/orders/index.blade.php ENDPATH**/ ?>