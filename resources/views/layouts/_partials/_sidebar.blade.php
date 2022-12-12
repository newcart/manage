<!-- SIDEBAR START -->
<nav class="navbar-primary sidebar" id="style-3">
    <ul class="navbar-primary-menu">
        @foreach($sidebarItems as $sidebarItem)
            @if($sidebarItem['url'] != null && $sidebarItem['items'] == null)
                <li {!! $sidebarItem['active'] ? 'class="active"' : '' !!}>
                    {!! $sidebarItem['svg'] !!}
                    <a href="{{ $sidebarItem['url'] }}" tabindex="1">
                    <span class="nav-label">
                        {{ $sidebarItem['name'] }}
                    </span>
                    </a>
                </li>
            @else
                <li {!! $sidebarItem['active'] ? 'class="dropdown open"' : 'class="dropdown"' !!}>
                    {!! $sidebarItem['svg'] !!}
                    <a href="#" tabindex="1" data-toggle="dropdown">
                        <span class="nav-label">{{ $sidebarItem['name'] }}</span>
                        <svg class="arrow" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m8.71 11.71l2.59 2.59c.39.39 1.02.39 1.41 0l2.59-2.59c.63-.63.18-1.71-.71-1.71H9.41c-.89 0-1.33 1.08-.7 1.71z"></path></svg>
                    </a>
                    <ul class="dropdown-menu">
                    @foreach($sidebarItem['items'] as $subItem)
                        <li>
                            <a href="{{ $subItem['url'] }}">{{ $subItem['title'] }}</a>
                        </li>
                    @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    </ul>
</nav>
