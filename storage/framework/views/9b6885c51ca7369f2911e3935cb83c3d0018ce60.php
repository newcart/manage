<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dataTables.bootstrap5.css')); ?>">

    <link rel="shortcut icon" href="https://www.akilliphone.com/views/kuteshop/img/favicon.png?v=9" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/scss/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/notify.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
    <script src="<?php echo e(asset("assets/js/jquery.min.js")); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.dataTables.js')); ?>"></script>
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

    <?php echo $navbar; ?>


    <main>
        <?php echo $sidebar; ?>

        <section class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
    </main>

    <?php echo $__env->yieldContent('scripts'); ?>
    <?php echo $__env->make('sections.NotifyJs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/layouts/app.blade.php ENDPATH**/ ?>