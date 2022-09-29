<div class="">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/homepage">Booking</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/equip">Booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/studio">Approve</a>
          </li>
        </ul>       
        <a>
          <p>{{ session('LoggedUserName') }}</p>
      </a>
        <a class="btn" href="{{ route('auth.logout') }}">
          <button type="button" class='btn btn-sm btn-danger'>Logout</button>
        </a>
      </div>
    </div>
  </nav>
</div>