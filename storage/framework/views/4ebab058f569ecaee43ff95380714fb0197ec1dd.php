<?php $__env->startSection('title', 'Yeni Sipariş | Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Yeni Şipariş</h1>
    <form class="mb-5">
        <div>
            <div class="line">
                <div class="title">Müşteri Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-lg-row gap-3">
                <div class="text-box">
                    <input type="text" placeholder="Ad">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Soyad">
                </div>
                <div class="text-box">
                    <input type="email" placeholder="E-Posta">
                </div>
            </div>
        </div>
        <div>
            <div class="line mt-3">
                <div class="title">Teslimat Adresi</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex gap-3 flex-wrap">
                <div class="text-box">
                    <input type="text" placeholder="Adres">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Şehir">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Semt">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Telefon">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Firma Adı">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Vergi Dairesi">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Vergi No.">
                </div>
            </div>
        </div>
        <div>
            <div class="line mt-3">
                <div class="title">Fatura Adresi</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex gap-3 flex-wrap">
                <div class="text-box">
                    <input type="text" placeholder="Adres">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Şehir">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Semt">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Telefon">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Firma Adı">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Vergi Dairesi">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Vergi No.">
                </div>
            </div>
        </div>
        <div>
            <div class="line mt-3">
                <div class="title">Sipariş Notu</div>
                <hr class="line-styled">
            </div>
            <div class="text-box w-100">
                <input type="text" placeholder="Sipariş Notu">
            </div>
        </div>
        <div>
            <div class="line mt-3">
                <div class="title">Admin Notu</div>
                <hr class="line-styled">
            </div>
            <div class="text-box w-100">
                <input type="text" placeholder="Admin Notu">
            </div>
        </div>
        <div>
            <div class="line mt-3">
                <div class="title">Sipariş Bilgileri</div>
                <hr class="line-styled">
            </div>
            <div class="d-flex flex-wrap gap-3">
                <div class="text-box">
                    <input type="text" placeholder="Sipariş No.">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Fatura No.">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Kargo Takip No.">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Sipariş Tarihi">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Kargo Adı">
                </div>
                <div class="text-box">
                    <input type="text" placeholder="Kargo Tarihi">
                </div>
            </div>
            <div class="d-flex flex-wrap gap-3 mt-2">
                <button class="btn2 me-2">
                    Ürün Ekle
                </button>
                <button class="btn2 me-2">
                    Bayi Fiyatı ile Ürün Ekle
                </button>
                <button class="btn3 me-2">
                    Barkod Yazdır
                </button>
            </div>
        </div>
        <!-- TODO: ADD DATATABLE -->
        <div class="mt-3">
            <button class="btn2 me-2">
                Değişiklikleri Kaydet
            </button>
            <button class="btn1 me-2">
                Kargo Yazdır
            </button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/orders/create.blade.php ENDPATH**/ ?>