<div class="boxes d-flex">
    <div class="custom-select me-2">
        <select name="productType[]" id="productType">
            <option value=<?php echo e($options[0]['value']); ?>><?php echo e($options[0]['name']); ?></option>
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value=<?php echo e($option['value']); ?>><?php echo e($option['name']); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/_partials/_productType.blade.php ENDPATH**/ ?>