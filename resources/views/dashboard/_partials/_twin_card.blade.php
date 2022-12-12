@php
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
@endphp
<div class="col-12 col-lg-6">
    <div class="row">
        <div class="col-12 col-lg-6 pe-lg-0">
            <div class="report-box text-start">
                <div class="box-header justify-content-end">
                    <div class="box-logo">
                        <img src="{{ asset($twinCards[0]["icon"]) }}" width="20" height="20"  alt="{{ $twinCards[0]["title"] }}">
                    </div>
                </div>
                <div class="box-body">{{ $twinCards[0]["text"] }}</div>
                <div class="box-footer">{{ $twinCards[0]["title"] }}</div>
            </div>
        </div>
        <div class="col-12 col-lg-6 ps-lg-0">
            <div class="report-box text-start">
                <div class="box-header justify-content-end">
                    <div class="box-logo">
                        <img src="{{ asset($twinCards[1]["icon"]) }}" width="20" height="20" alt="{{ $twinCards[1]["title"] }}">
                    </div>
                </div>
                <div class="box-body">{{ $twinCards[1]["text"] }}</div>
                <div class="box-footer">{{ $twinCards[1]["title"] }}</div>
            </div>
        </div>
    </div>
</div>
