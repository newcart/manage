<?php $__env->startSection('title', 'Yeni Marka Ekle - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Yeni Marka Ekle</h1>
    <form action="<?php echo e(route('dashboard.brands.create')); ?>" method="POST" class="mt-3">
        <?php echo csrf_field(); ?>
        <div>
            <div class="line">
                <div class="title">Marka Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="code" class="form-label">Logo</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Kod</label>
                    <input type="text" class="form-control" name="code">
                </div>
                <div class="mb-3">
                    <label for="queue_no" class="form-label">Sıra Numarası</label>
                    <input type="number" class="form-control" name="queue_no">
                </div>
                <div class="mb-3">
                    <label>Durumu</label>
                    <label class="switch">
                        <input type="checkbox" name="status" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label>Açıklama</label>
                <textarea id="editor"></textarea>
            </div>
        </div>
        <div>
            <div class="line">
                <div class="title">SEO Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="mb-3">
                    <label for="code" class="form-label">Sayfa Başlığı</label>
                    <input type="text" class="form-control" name="page_title">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Anahtar Kelimeler</label>
                    <input type="text" class="form-control" name="keywords">
                </div>
                <div class="mb-3">
                    <label>SEO Açıklaması</label>
                    <textarea id="editor"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Marka ekle</button>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/products/brands/add-email.blade.php ENDPATH**/ ?>
