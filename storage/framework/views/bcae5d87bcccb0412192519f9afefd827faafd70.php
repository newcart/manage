<?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cardItems): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="scol-12 col-lg-4">
        <div class="report-box" data-tilt data-tilt-glare="true">
            <div class="box-header">
                <div class="box-logo"><img src="<?php echo e(asset($cardItems["icon"])); ?>" width="20" height="20"
                                           alt="<?php echo e($cardItems["title"]); ?>"></div>
                <div class="box-percentage <?php echo e($cardItems["indicatorStyle"]); ?>"><?php echo e($cardItems["indicator"]); ?></div>
            </div>
            <div class="box-body"><?php echo e($cardItems["text"]); ?></div>
            <div class="box-footer"><?php echo e($cardItems["title"]); ?></div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/_partials/_card_part_2.blade.php ENDPATH**/ ?>