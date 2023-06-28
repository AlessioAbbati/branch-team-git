<nav>
    <ul>
        @foreach (config('menu') as $menuItems)
            <li><a href="">{{ $menuItems['name'] }}</a></li>
        @endforeach
    </ul>
</nav>