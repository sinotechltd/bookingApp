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
                            <a class="nav-link" href="/listprograms">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listemployees">Employees</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/listinventories">Inventories</a>
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
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addinventory"
            data-backdrop="static"> + Inventory </button>
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
                    <th scope="col">Equipment Name</th>
                    <th scope="col">Cost</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date recieved</th>
                    <th scope="col">Booked</th>
                    <th scope="col">Available</th>
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($inventorie->count() > 0)
                    @foreach ($inventorie as $inventory)
                        <tr>
                            <td>{{ $inventory->id }}</td>
                            <td>{{ $inventory->equipname }}</td>
                            <td>{{ $inventory->cost }}</td>
                            <td>{{ $inventory->quantity }}</td>
                            <td>{{ $inventory->date_received }}</td>
                            <td>{{ $inventory->out }}</td>
                            <td>{{ $inventory->avail }}</td>
                            <td>
                                <a class="btn btn-sm btn-danger" role="group"
                                    href="{{ url('admin/inventory/delete', $inventory->id) }}">Delete
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
        {!! $inventorie->links() !!}
    </div>

</div>
{{-- modal --}}
<div wire:ignore.self class="modal fade" id="addinventory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:1250px;">
        <div class="modal-content">
            <form action="addinventory" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="" style="text-align: center;">Add new inventory
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{ $warning->Failed }}
                <div class="modal-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Equipment Name</label>
                                <input class="form-control" name="equipname" wire:model='equipname'>
                                <div class="form-text">inventory full name</div>
                                <div class="form-text" style="color:red">
                                    @error('equipname')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Cost</label>
                                <input type='number' class="form-control" name="equipcost" wire:model='equipcost'>
                                <div class="form-text">inventory Email</div>
                                <div class="form-text" style="color:red">
                                    @error('equipcost')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Quantity</label>
                                <input type="number" class="form-control" name="equimpquantity"
                                    wire:model='equimpquantity'>
                                <div class="form-text">inventory Phone Number</div>
                                <div class="form-text" style="color:red">
                                    @error('equimpquantity')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Date received</label>
                                <input type="date" class="form-control" name="datedrecieved"
                                    wire:model='datedrecieved'>
                                <div class="form-text">Department Name</div>
                                <div class="form-text" style="color:red">
                                    @error('datedrecieved')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">More info</label>
                                <textarea type="text" class="form-control" name="moreinfo" wire:model='moreinfo'></textarea>
                                <div class="form-text">Department Name</div>
                                <div class="form-text" style="color:red">
                                    @error('moreinfo')
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
