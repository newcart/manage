<!-- SIDEBAR START -->
<nav class="navbar-primary sidebar" id="style-3">
    <ul class="navbar-primary-menu">
        <?php $__currentLoopData = $sidebarItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sidebarItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($sidebarItem['url'] != null && $sidebarItem['items'] == null): ?>
                <li <?php echo $sidebarItem['active'] ? 'class="active"' : ''; ?>>
                    <?php echo $sidebarItem['svg']; ?>

                    <a href="<?php echo e($sidebarItem['url']); ?>" tabindex="1">
                    <span class="nav-label">
                        <?php echo e($sidebarItem['name']); ?>

                    </span>
                    </a>
                </li>
            <?php else: ?>
                <li <?php echo $sidebarItem['active'] ? 'class="dropdown open"' : 'class="dropdown"'; ?>>
                    <?php echo $sidebarItem['svg']; ?>

                    <a href="#" tabindex="1" data-toggle="dropdown">
                        <span class="nav-label"><?php echo e($sidebarItem['name']); ?></span>
                        <svg class="arrow" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m8.71 11.71l2.59 2.59c.39.39 1.02.39 1.41 0l2.59-2.59c.63-.63.18-1.71-.71-1.71H9.41c-.89 0-1.33 1.08-.7 1.71z"></path></svg>
                    </a>
                    <ul class="dropdown-menu">
                    <?php $__currentLoopData = $sidebarItem['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e($subItem['url']); ?>"><?php echo e($subItem['title']); ?></a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
<?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/layouts/_partials/_sidebar.blade.php ENDPATH**/ ?>