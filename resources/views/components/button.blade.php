<div class="{{ $class }}-button">
    <a href="{{ $address }}">
       @php
           $icon ? echo '<img src="'.$icon.'" alt="get product">' : echo
       @endphp
        {{ $title }}
    </a>
</div>
