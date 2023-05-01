<!DOCTYPE html>
<html lang="en">

@include('layouts._head')

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    {{-- Navbar --}}
    @include('layouts.dashboard.navbar')
                @yield('content')
<script src="https://kit.fontawesome.com/a9441c7460.js" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
