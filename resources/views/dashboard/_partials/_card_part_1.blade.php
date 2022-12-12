@foreach($dashboardIndexCards as $cardItems)
    <div class="col-6 col-md-3">
        <div class="report-box" data-tilt data-tilt-glare="true">
            <div class="box-header">
                <div class="box-logo"><img src="{{ asset($cardItems["icon"]) }}" width="20" height="20"
                                           alt="{{ $cardItems["title"] }}"></div>
                <div class="box-percentage {{ $cardItems["indicatorStyle"] }}">{{ $cardItems["indicator"] }}</div>
            </div>
            <div class="box-body">{{ $cardItems["text"] }}</div>
            <div class="box-footer">{{ $cardItems["title"] }}</div>
        </div>
    </div>
@endforeach
