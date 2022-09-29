<div class="container-fluid">
    <div class="div">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active"aria-current="page" href="/admin">Manage Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listprograms">Programmes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listemployees">Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listinventories">Inventories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listsuits">Suits</a>
                        </li>
                    </ul>

                </div>
                @include('logout')
            </div>
        </nav>
    </div>
    <nav class="navbar navbar-light bg-light">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#adduser"
            data-backdrop="static"> + Add Users </button>
        <div class="row">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Joined Date</th>

                        <th scope="col">Modify</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($systenUsers->count() > 0)
                        @foreach ($systenUsers as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteentry">Delete</button>
                                        <button type="button" class="btn btn-sm btn-primary"
                                            wire:click='editbookingentry({{ $user->id }} )'>Edit</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" style="text-align: center"><small>No entries yet</small></td>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{-- {!!$systenUsers->links()!!} --}}
        </div>
    </div>
</div>
{{-- add user modal --}}

<div wire:ignore.self class="modal fade" id="adduser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:1250px;">
        <div class="modal-content">
            <form class="Auth-form" action="{{ route('auth.save') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="" style="text-align: center;">Add New User
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mt-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control mt-1" placeholder="Your Name"
                            value="{{ old('name') }}" />
                        <span class="text-danger"> @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mt-3">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control mt-1" placeholder="Enter email"
                            value="{{ old('email') }}" />
                        <span class="text-danger"> @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mt-3">
                        <label>Role</label>
                        <select class="form-select" name="role" class="form-control mt-1" placeholder="User Role">
                            <option value="User">User</option>
                            <option value="HON">Head of Unit</option>
                            <option value="TPM">TPM</option>
                            <option value="CSTO">CSTO</option>
                        </select>
                        <span class="text-danger"> @error('role')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mt-3">
                        <label>Remember Token</label>
                        <input type="txt" name="rtoken" class="form-control mt-1"
                            placeholder="Password reset hint" />
                        <span class="text-danger"> @error('rtoken')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mt-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control mt-1"
                            placeholder="Enter password" />
                        <span class="text-danger"> @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-primary">
                            Sing Up
                        </button>
                    </div>
                    @if (Session::get('Success'))
                        <div class="alert alert-success">
                            {{ Session::get('Success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('Failed') }}
                        </div>
                    @endif

                </div>
            </form>
        </div>
    </div>
</div>
{{-- add user modal --}}
