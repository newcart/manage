<!-- SIDENAV START -->
<nav class="navbar-primary sidebar" id="style-3">

    <ul class="navbar-primary-menu">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal6575204421d4ede9ffd0a82ba21b4d926afb5394 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SidebarItem::class, ['title' => $item['name'],'svg' => $item['svg'],'url' => $item['url'],'active' => $item['active']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\SidebarItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6575204421d4ede9ffd0a82ba21b4d926afb5394)): ?>
<?php $component = $__componentOriginal6575204421d4ede9ffd0a82ba21b4d926afb5394; ?>
<?php unset($__componentOriginal6575204421d4ede9ffd0a82ba21b4d926afb5394); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
<!-- SIDENAV END -->
<?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/sections/Sidebar.blade.php ENDPATH**/ ?>