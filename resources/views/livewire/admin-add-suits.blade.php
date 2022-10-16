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
                            <a class="nav-link" href="/listemployees">Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listinventories">Inventories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/listsuits">Suits</a>
                        </li>
                    </ul>
                </div>
                @include('logout')
            </div>
        </nav>
    </div>
    <nav class="navbar navbar-light bg-light">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addsuits"
            data-backdrop="static"> + Suits </button>
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
                    <th scope="col">Suit Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date created</th>                    
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($suits->count() > 0)
                    @foreach ($suits as $suit)
                        <tr>
                            <td>{{ $suit->id }}</td>
                            <td>{{ $suit->suitName }}</td>
                            <td>{{ $suit->Description }}</td>
                            <td>{{ $suit->created_at}}</td>
                            <td>
                                <a class="btn btn-sm btn-danger" role="group"
                                    href="{{ url('admin/suits/delete', $suit->id) }}">Delete
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
        {!! $suits->links() !!}
    </div>

</div>
{{-- modal --}}
<div wire:ignore.self class="modal fade" id="addsuits" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:1250px;">
        <div class="modal-content">
            <form action="addsuits" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="" style="text-align: center;">Add new Suit
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input class="form-control" name="sname" wire:model='sname'>
                                <div class="form-text">inventory full name</div>
                                <div class="form-text" style="color:red">
                                    @error('sname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type='text' class="form-control" name="description" wire:model='description'>
                                <div class="form-text">inventory Email</div>
                                <div class="form-text" style="color:red">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
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
