<a>
    <p>{{ session('LoggedUserName') }}</p>
</a>
<br>
<a class="btn btn-sm btn-danger" href="{{ route('auth.logout') }}">
    <button type='button' class='btn btn-sm btn-danger'>Logout</button>
</a>