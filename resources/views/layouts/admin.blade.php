<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Admin Panel')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Admin CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet"> <!-- هذا يبقى محلي لأنه مخصص لك -->
</head>

<body data-message="{{ session('success') ?? session('error') }}"
    data-status="{{ session('success') ? 'success' : (session('error') ? 'error' : '') }}">

    <!-- Sidebar -->
    <div id="sidebar" class="sidebar bg-dark text-white">
        <div class="sidebar-header p-4 text-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 60px;">
        </div>
        <ul class="nav flex-column px-3">

            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('admin.dashboard.*') ? 'active' : '' }}"
                    href="{{ route('admin.dashboard.index') }}">
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('admin.users.*') ? 'active' : '' }}"
                    href="{{ route('admin.users.index') }}">
                    Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('admin.masrahiyat.*') ? 'active' : '' }}"
                    href="{{ route('admin.masrahiyat.index') }}">
                    Masrahiyat
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('admin.teamwork.*') ? 'active' : '' }}"
                    href="{{ route('admin.teamwork.index') }}">
                    Team Work
                </a>
            </li>
        </ul>
        <div class="logout mt-auto text-center p-3">
            <a href="#" class="btn btn-danger w-100"><i class="fas fa-sign-out-alt me-1"></i> Logout</a>
        </div>
    </div>

    <!-- Main Content -->
    <div id="main" class="main-content">
        <div class="topbar bg-light d-flex align-items-center p-3 shadow-sm">
            <button id="toggleSidebar" class="btn btn-outline-dark me-3"><i class="fas fa-bars"></i></button>
            <h4 class="m-0">@yield('title', 'Admin Panel')</h4>
        </div>

        <div class="container-fluid p-4">
            @yield('content')
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle JS (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Admin Script -->
    <script src="{{ asset('js/admin.js') }}"></script>

    <script src="{{ asset('js/delete-confirm.js') }}"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/alerts.js') }}"></script>
    @stack('scripts')
</body>

</html>
