<div class="boxes d-flex">
    <div class="custom-select me-2">
        <select name="productType[]" id="productType">
            <option value={{ $options[0]['value'] }}>{{ $options[0]['name'] }}</option>
            @foreach ($options as $option)
                <option value={{ $option['value'] }}>{{ $option['name'] }}</option>
            @endforeach
        </select>
    </div>
</div>
