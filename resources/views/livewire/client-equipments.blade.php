<div class="container-fluid">
    <div class="div">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Production Facility</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/editing">Editing Facility</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/equipments">Equipments</a>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-outline-success" type="submit">Log Out</button> -->
                </div>
                @include('logout')
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
        </div>
        <div class="message">
            <p>These page is under development</p>
        </div>
    </div>
</div>
