<div class="container-fluid p-2">
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