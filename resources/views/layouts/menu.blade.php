<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>





<li class="side-menus {{ Request::is('books*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('books.index') }}"><i class="fas fa-building"></i><span>Books</span></a>
</li>

<li class="side-menus {{ Request::is('teachers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('teachers.index') }}"><i class="fas fa-building"></i><span>Teachers</span></a>
</li>

<li class="side-menus {{ Request::is('institutionals*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('institutionals.index') }}"><i class="fas fa-building"></i><span>Institutionals</span></a>
</li>

