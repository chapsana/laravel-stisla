
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="side-menus side-divider">
<hr />
</li>
<li class="side-menus {{ Request::is('/docs') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/docs') }}">
        <i class=" fas fa-book"></i><span>Documentation</span>
    </a>
</li>
