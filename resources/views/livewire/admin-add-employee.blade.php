<div class="container-fluid">
    <div class="div">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="btn btn-outline-primary" href="/csto"><- Back</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Manage Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listprograms">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/listemployees">Employees</a>
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
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addemployee"
            data-backdrop="static"> + Employee </button>
        <div class="row">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>
<div class="container">
    @if (Session::get('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    @if (Session::get('Failed'))
        <div class="alert alert-danger">
            {{ Session::get('Failed') }}
        </div>
    @endif
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Dutie</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($employeess->count() > 0)
                    @foreach ($employeess as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->full_name }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>{{ $employee->duties }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>
                                <a class="btn btn-sm btn-danger" role="group"
                                    href="{{ url('admin/employee/delete', $employee->id) }}">Delete
                                </a>
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
        {!! $employeess->links() !!}
    </div>

</div>
{{-- modal --}}
<div wire:ignore.self class="modal fade" id="addemployee" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:1250px;">
        <div class="modal-content">
            <form action="addemployee" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="" style="text-align: center;">Add new Employee
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Full Name</label>
                                <input class="form-control" name="fullname" wire:model='fullname'>
                                <div class="form-text">Employee full name</div>
                                <div class="form-text" style="color:red">
                                    @error('fullname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Email Address</label>
                                <input class="form-control" name="email" wire:model='email'>
                                <div class="form-text">Employee Email</div>
                                <div class="form-text" style="color:red">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Phone Number</label>
                                <input class="form-control" name="phone" wire:model='phone'>
                                <div class="form-text">Employee Phone Number</div>
                                <div class="form-text" style="color:red">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Department</label>
                                <input class="form-control" name="department" wire:model='department'>
                                <div class="form-text">Department Name</div>
                                <div class="form-text" style="color:red">
                                    @error('department')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">

                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Duties</label>
                                <input class="form-control" name="duties" wire:model='duties'>
                                <div class="form-text">Employeee Details</div>
                                <div class="form-text" style="color:red">
                                    @error('duties')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
{{-- delete modal --}}
