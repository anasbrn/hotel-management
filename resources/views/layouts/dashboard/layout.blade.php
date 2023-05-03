<!DOCTYPE html>
<html lang="en">

@include('layouts._head')

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
    @include('layouts.dashboard.navbar')

    @yield('content')

    @include('layouts._guest')
</body>
</html>
