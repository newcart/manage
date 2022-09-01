<li {!! $active ? 'class="active"' : '' !!}>
    {!! $svg !!}
    <a href="{{ $url }}" tabindex="1"><span class="nav-label">{{ $title }}</span>
    </a>
</li>
