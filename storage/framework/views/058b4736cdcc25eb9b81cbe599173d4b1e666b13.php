<div class="container-xxl p-lg-0">
    <div class="product-list">
        <div class="product-list-top justify-content-center justify-content-xxl-start" style="row-gap:20px;">
            <div class="title">Siparişler </div>
            <div class="get-products">
                <a href="<?php echo e(route('dashboard.orders.new')); ?>">
                    <img src="<?php echo e(asset('assets/images/new-order.svg')); ?>" alt="get product">
                    Yeni Sipariş Ekle
                </a>
            </div>
            <div class="custom-select" >
                <select name="orderStatus">
                    <?php $__currentLoopData = $orderStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value); ?>"><?php echo e($option); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="custom-select">
                <select name="paymentType">
                    <?php $__currentLoopData = $paymentType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value); ?>"><?php echo e($option); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="custom-select">
                <select name="userType">
                    <?php $__currentLoopData = $userType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value); ?>"><?php echo e($option); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="date-picker-area">
                <input type="text" class="date-picker" readonly placeholder="Tarih">
                <span>arasında</span>
                <input type="text" id="date-picker2" placeholder="...">
                <button class="filter">Filtrele</button>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/orders/_partials/_top_selectors.blade.php ENDPATH**/ ?>