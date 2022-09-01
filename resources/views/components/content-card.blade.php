<div class="{{ $class }}">
    <div class="report-box" data-tilt data-tilt-glare="true">
        <div class="box-header">
            <div class="box-logo">
                <img src="{{ $icon }}" width="20" height="20" alt="{{ $content }}">
            </div>
            <div class="box-percentage {{ $indicator }}">{{ $indicator }}</div>
        </div>
        <div class="box-body">{{ $title }}</div>
        <div class="box-footer">{{ $content }}</div>
    </div>
</div>
