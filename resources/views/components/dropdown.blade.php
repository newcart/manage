<div class="boxes d-flex">
    <div class="custom-select">
        <select name="{{ $name }}[]" id="{{ $name }}">
            @foreach ($options as $option)
                <option value="{{ $option["value"] }}">{{ $option["name"] }}</option>
            @endforeach
        </select>
    </div>
</div>
