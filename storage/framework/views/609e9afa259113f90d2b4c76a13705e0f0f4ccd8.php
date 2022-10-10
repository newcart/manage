<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/scss/mini.css')); ?>">
    <link rel="shortcut icon" href="https://www.akilliphone.com/views/kuteshop/img/favicon.png?v=9" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/notify.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/notify.css')); ?>">
    <script src="<?php echo e(asset('assets/js/jquery.js')); ?>"></script>
    <?php echo notifyJs(); ?>
</head>

<body>

    <?php if (isset($component)) { $__componentOriginalf6d1e1ab7a8df2de5d0bdc28df8775f180a35b0c = $component; } ?>
<?php $component = $__env->getContainer()->make(Mckenziearts\Notify\NotifyComponent::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notify-messages'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Mckenziearts\Notify\NotifyComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf6d1e1ab7a8df2de5d0bdc28df8775f180a35b0c)): ?>
<?php $component = $__componentOriginalf6d1e1ab7a8df2de5d0bdc28df8775f180a35b0c; ?>
<?php unset($__componentOriginalf6d1e1ab7a8df2de5d0bdc28df8775f180a35b0c); ?>
<?php endif; ?>

    <section class="login-screen">
        <div class="login-screen-left">
            <div class="left-img">
                <img src="<?php echo e(asset('assets/images/login-left.svg')); ?>" alt="">
            </div>
            <div class="content">
                <div class="title"><span class="title-left">Akıllı</span> <span class="title-right">Panel</span>
                </div>
                <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor
                    invidunt ut
                </div>
            </div>
        </div>
        <div class="login-screen-right">
            <div class="form-wrapper">
                <div class="logo">
                    <img src="<?php echo e(asset('assets/images/akilliphone_logo.svg')); ?>" alt="logo">
                </div>

                <?php echo $__env->yieldContent('form'); ?>

            </div>
        </div>
    </section>

    <?php echo $__env->yieldContent('scripts'); ?>
    <?php echo $__env->make('sections.NotifyJs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/layouts/mini.blade.php ENDPATH**/ ?>