<aside class="sidebar">

    <div class="sidebar-header">
        <h3>📚 EduModule</h3>
    </div>

    <nav class="sidebar-menu">

        <a href="{{ route('dashboard') }}"
           class="menu-item {{ request()->routeIs('dashboard') ? 'active-menu' : '' }}">
            <i class="bi bi-house-door-fill"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('modul.index') }}"
           class="menu-item {{ request()->routeIs('modul.*') ? 'active-menu' : '' }}">
            <i class="bi bi-book-fill"></i>
            <span>Data Modul</span>
        </a>

        <a href="{{ route('export.pdf') }}"
           class="menu-item {{ request()->routeIs('export.pdf') ? 'active-menu' : '' }}">
            <i class="bi bi-file-earmark-pdf-fill"></i>
            <span>Export PDF</span>
        </a>

    </nav>

    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf

        <button type="submit" class="menu-item logout-btn">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </button>

    </form>

</aside>