

<?php $__env->startSection('title', 'Giriş Yap'); ?>

<?php $__env->startSection('form'); ?>
    <form action="<?php echo e(route('login.post')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php if($errors->all()): ?>
        <div class="group alert">
            <input type="mail" name="email" class="dynPut" required>
            <label for="mail">E-Posta</label>
        </div>
        <?php else: ?>
        <div class="group">
            <input type="mail" name="email" class="dynPut" required>
            <label for="mail">E-Posta</label>
        </div>
        <?php endif; ?>

        <?php if($errors->all()): ?>
        <div class="group alert">
            <input type="password" name="password" class="dynPut" required>
            <label for="password">Parola</label>
        </div>
        <?php else: ?>
        <div class="group">
            <input type="password" name="password" class="dynPut" required>
            <label for="password">Parola</label>
        </div>
        <?php endif; ?>

        <div class="group">
            <button class="submit-btn">
                GİRİŞ YAP
            </button>
        </div>
    </form>
    <div class="footer">
        Hesabın yok mu? <a href="#">Erişim İste</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\x\Desktop\Folders\AkilliPhone\panel\resources\views/auth/login.blade.php ENDPATH**/ ?>