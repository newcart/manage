<?php $__env->startSection('title', 'Panel - Akıllıphone'); ?>

<?php $__env->startSection('content'); ?>
    <div class="general-report">
        <div class="general-report-header d-block d-lg-flex justify-content-between ">
            <div class="title-section mb-2 mb-lg-0 justify-content-center">
                <img class="me-2" src="<?php echo e(asset('assets/images/general-report.svg')); ?>" alt="Genel Rapor">
                Genel Rapor
            </div>
            <div class="date-section d-block d-lg-flex align-items-center justify-content-between ">
                <div class="date-tabs mb-2 mb-lg-0">
                    <ul class="justify-content-center">
                        <li>
                            <a class="date-link" href="#">Bugün</a>
                        </li>
                        <li>
                            <a class="date-link active-tab" href="#">Hafta</a>
                        </li>
                        <li>
                            <a class="date-link" href="#">Ay</a>
                        </li>
                        <li>
                            <a class="date-link" href="#">3 Ay</a>
                        </li>
                        <li>
                            <a class="date-link" href="#">Yıl</a>
                        </li>
                    </ul>
                </div>
                <div class="date-current justify-content-center">
                    <img src="<?php echo e(asset('assets/images/date.svg')); ?>" alt="Tarih"><span>24 May - 23 Eki 2022</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row h-100">

                    <?php echo $cardPartOne; ?>


                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="report-box" style="height:440px">
                    <div class="position-relative">
                        <div id="chart">
                        </div>
                        <div class="options">
                            ...
                            <div class="selects">
                                <button id="data1">En Çok Ziyaret Edilen Kategoriler</button>
                                <button id="data2">Başka bir value</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:40px;">
            <div class="col-12 col-lg-6">
                <div class="row">

                    <?php echo $cardPartTwo; ?>


                </div>
            </div>
            <?php echo $__env->make('dashboard._partials._twin_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('assets/js/apexcharts.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/tilt.jquery.min.js')); ?>"></script>
        <script>
            $('.js-tilt').tilt({
                glare: true,
                maxGlare: .5
            })
        </script>
    <?php echo $pieChartScript; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/index.blade.php ENDPATH**/ ?>