<div class="container-fluid">
    <div class="div">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Manage Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/listprograms">Programmes</a>
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
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#program"
            data-backdrop="static"> + Program </button>
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
        <select class="form-control" wire:model="rec" name="rec">
            <option value="10">10</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Program Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($programms->count() > 0)
                    @foreach ($programms as $programm)
                        <tr>
                            <td>{{ $programm->id }}</td>
                            <td>{{ $programm->program_name }}</td>
                            <td>{{ $programm->program_description }}</td>
                            <td>
                                <a class="btn btn-sm btn-danger" role="group"
                                    href="{{ url('admin/delete', $programm->id) }}">Delete
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
        {!! $programms->links() !!}
    </div>

</div>
{{-- modal --}}
<div wire:ignore.self class="modal fade" id="program" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:1250px;">
        <div class="modal-content">
            <form action="addprogram" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="" style="text-align: center;">Add new program
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Program name</label>
                                <input class="form-control" name="pname" wire:model='pname'>
                                <div class="form-text">Program name</div>
                                <div class="form-text" style="color:red">
                                    @error('pname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">More info</label>
                                <textarea type="text" name="program_info" class="form-control" wire:model='program_info'
                                    value="{{ old('program_info') }}" placeholder='Write description here'></textarea>
                                <div class="form-text">More info</div>
                                <div class="form-text" style="color:red">
                                    @error('program_info')
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
{{-- delete modal --}}
