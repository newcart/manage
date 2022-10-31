<div class="boxes d-flex">
    <div class="custom-select me-2">
        <select name="selectBrand[]" id="selectBrand">
            <option value={{ $brands[0]['value'] }}>{{ $brands[0]['name'] }}</option>
            @foreach ($brands as $option)
                <option value={{ $brands['value'] }}>{{ $brands['name'] }}</option>
            @endforeach
        </select>
    </div>
</div>
