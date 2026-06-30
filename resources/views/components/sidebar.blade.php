<aside class="sidebar">

    <div class="logo">
        📚 EduModule
    </div>

    <nav>

        <a href="{{ route('dashboard') }}"
        class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">

            <i class="bi bi-house-door-fill"></i>
            Dashboard

        </a>

        <a href="{{ route('modul.index') }}"
        class="{{ request()->routeIs('modul.*') ? 'active' : '' }}">

            <i class="bi bi-book-fill"></i>
            Data Modul

        </a>

        <a href="{{ route('export.pdf') }}">

            <i class="bi bi-file-earmark-pdf-fill"></i>
            Export PDF

        </a>

    </nav>

    <form action="{{ route('logout') }}" method="POST">

        @csrf

        <button>

            <i class="bi bi-box-arrow-right"></i>

            Logout

        </button>

    </form>

</aside>