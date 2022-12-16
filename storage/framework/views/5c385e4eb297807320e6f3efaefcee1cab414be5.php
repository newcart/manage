<?php
    $twinCards = [
      [
          "icon" => "assets/images/visitor.svg",
          "text" => "87",
          "title" => "Online Kullanıcı Sayısı"
    ],
    [
          "icon" => "assets/images/unread-message.svg",
          "text" => "02",
          "title" => "Okunmamış Mesaj"
    ]
];
?>
<div class="col-12 col-lg-6">
    <div class="row">
        <div class="col-12 col-lg-6 pe-lg-0">
            <div class="report-box text-start">
                <div class="box-header justify-content-end">
                    <div class="box-logo">
                        <img src="<?php echo e(asset($twinCards[0]["icon"])); ?>" width="20" height="20"  alt="<?php echo e($twinCards[0]["title"]); ?>">
                    </div>
                </div>
                <div class="box-body"><?php echo e($twinCards[0]["text"]); ?></div>
                <div class="box-footer"><?php echo e($twinCards[0]["title"]); ?></div>
            </div>
        </div>
        <div class="col-12 col-lg-6 ps-lg-0">
            <div class="report-box text-start">
                <div class="box-header justify-content-end">
                    <div class="box-logo">
                        <img src="<?php echo e(asset($twinCards[1]["icon"])); ?>" width="20" height="20" alt="<?php echo e($twinCards[1]["title"]); ?>">
                    </div>
                </div>
                <div class="box-body"><?php echo e($twinCards[1]["text"]); ?></div>
                <div class="box-footer"><?php echo e($twinCards[1]["title"]); ?></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/onursedef/Work/Akıllıphone/Akıllıpanel/panel/resources/views/dashboard/_partials/_twin_card.blade.php ENDPATH**/ ?>