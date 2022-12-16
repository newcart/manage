<select name="<?php echo e($name); ?>">
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($value); ?>"><?php echo e($option); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/_partials/select.blade.php ENDPATH**/ ?>
