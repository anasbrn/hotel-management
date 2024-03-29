<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      @can('list-hotels')
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('dashboard-hotels') }}">Hotels</a>
        </li>
      @endcan
      @can('list-rooms')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard-rooms') }}">Rooms</a>
        </li>
      @endcan
      @can('list-bookings')
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard-bookings') }}">Bookings</a>
        </li>
      @endcan
    </ul>
  </div>
  <div class="dropdown mx-5">
    <a class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="{{ url('Media/user/user.png') }}" alt="profile" width="40" height="40">
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li class="w-50">
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          Logout
       </a>
       
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
       </form>
       
        </li>
    </ul>
  </div>
</nav>