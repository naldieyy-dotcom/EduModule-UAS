<div class="sidebar d-flex flex-column p-3">

    <h3 class="text-center text-white mb-4">
        📚 EduModule
    </h3>

    <a href="{{ route('dashboard') }}"
       class="menu-item {{ request()->routeIs('dashboard') ? 'active-menu' : '' }}">

        <i class="bi bi-house-door"></i>
        Dashboard

    </a>

    <a href="{{ route('modul.index') }}"
       class="menu-item {{ request()->routeIs('modul.*') ? 'active-menu' : '' }}">

        <i class="bi bi-book"></i>
        Data Modul

    </a>

    <a href="{{ route('export.pdf') }}"
       class="menu-item {{ request()->routeIs('export.pdf') ? 'active-menu' : '' }}">

        <i class="bi bi-file-earmark-pdf"></i>
        Export PDF

    </a>

    <hr class="text-light">

    <form action="{{ route('logout') }}" method="POST">

        @csrf

        <button type="submit"
                class="menu-item border-0 bg-transparent w-100 text-start">

            <i class="bi bi-box-arrow-right"></i>
            Logout

        </button>

    </form>

</div>