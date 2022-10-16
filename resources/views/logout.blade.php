<a>
    <a href="{{ url('/user/profile', session('LoggedUser'))}}" style="text-decoration: none">{{ session('LoggedUserName') }}</a>
</a>
<br>
<a class="btn btn-sm btn-danger" href="{{ route('auth.logout') }}">
    <button type='button' class='btn btn-sm btn-danger'>Logout</button>
</a>