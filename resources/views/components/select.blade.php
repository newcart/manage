<select name="{{ $name }}">
    @foreach($options as $value => $option)
        <option value="{{ $value }}">{{ $option }}</option>
    @endforeach
</select>
