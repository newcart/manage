<!-- SIDENAV START -->
<nav class="navbar-primary sidebar" id="style-3">

    <ul class="navbar-primary-menu">
        @foreach ($items as $item)
            <x-sidebar-item :title="$item['name']" :svg="$item['svg']" :url="$item['url']" :active="$item['active']"></x-sidebar-item>
        @endforeach
    </ul>
</nav>
<!-- SIDENAV END -->
