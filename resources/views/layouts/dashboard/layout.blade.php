<!DOCTYPE html>
<html lang="en">

@include('layouts._head')

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
<script>
  var defaultThemeMode = "light";
  var themeMode;

  if (document.documentElement) {
    if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
      themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
    } else {
      if (localStorage.getItem("data-bs-theme") !== null) {
        themeMode = localStorage.getItem("data-bs-theme");
      } else {
        themeMode = defaultThemeMode;
      }
    }

    if (themeMode === "system") {
      themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
    }

    document.documentElement.setAttribute("data-bs-theme", themeMode);
  }
</script>
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
          style="display:none;visibility:hidden"></iframe>
</noscript>


<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
  <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

    {{-- Navbar --}}
    @include('layouts.dashboard.navbar')


    <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
      {{-- @include('back-office.layouts.toolbar') --}}
      <div class="app-container  container-xxl ">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_content" class="app-content ">
                @yield('content')
            </div>
          </div>
          {{-- @include('back-office.layouts.footer') --}}
        </div>
      </div>
    </div>
  </div>
</div>
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
               xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                      transform="rotate(90 13 6)" fill="currentColor"/>
                <path
                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                        fill="currentColor"/>
            </svg>
        </span>
</div>
<script src="https://kit.fontawesome.com/a9441c7460.js" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@stack('script')

<script src="https://js.pusher.com/7.2/pusher.min.js"></script>

  {{-- <script>
    let user = {!! $user !!}
    let userRoles = {!! $user->getRoleNames() !!};
  </script> --}}
<script src="{{ asset('assets/js/notification.bundle.js') }}"></script>

<script>
  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

var pusher = new Pusher('{{env("PUSHER_APP_KEY")}}', {
  cluster: '{{env("PUSHER_APP_CLUSTER")}}'
});

pusher.subscribe('social-activities')
  .bind('notice', function(data) {

    const isNoticed = data.data.some(item => userRoles.includes(item));
    if (isNoticed == true) {
        updateUserNotification(1)
          .then(function (response) {
            fetchNotification();
          })
    }
  });
</script>

</body>
</html>
