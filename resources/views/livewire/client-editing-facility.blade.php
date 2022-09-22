@include('addFbookingdata');
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
                            <a class="nav-link active" aria-current="page" href="/editing">Editing Facility</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/equipments" @disabled(true)>Equipments</a>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-sm btn-danger" href="{{ route('auth.logout') }}">Logout</a>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#bookingmodel" data-backdrop="static"> + Add </button>
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
    </div>
    <div class="row">
        @if (session()->has('Success'))
            <div class="alert alert-success">
                {{ Session::get('Success') }}
            </div>
        @endif
        @if (session()->has('Failed'))
            <div class="alert alert-danger">
                {{ Session::get('Failed') }}
            </div>
        @endif
    </div>
    <div class="container-fluid">
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Ref</th>
                        <th scope="col">Suit Booked</th>
                        <th scope="col">Program Title</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Producer</th>
                        <th scope="col">Editing date</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">HON</th>
                        <th scope="col">TPM</th>
                        <th scope="col">CSTO</th>
                        <th scope="col">Comments</th>                       

                    </tr>
                </thead>
                <tbody>
                    @if ($userBooking->count() > 0)
                        @foreach ($userBooking as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->suitID }}</td>
                                <td>{{ $booking->program_title }}</td>
                                <td>{{ $booking->program_topic }}</td>
                                <td>{{ $booking->producer }}</td>
                                <td>{{ $booking->editing_date }}</td>
                                <td>{{ $booking->start_time }}</td>
                                <td>{{ $booking->endtime_time }}</td>
                                <td>{{ $booking->remarks }}</td>
                                <td>
                                    @if ($booking->approval_level1 == 'Pending')
                                        <span class="badge bg-secondary">Pending</span>
                                    @elseif ($booking->approval_level1 == 'Approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($booking->approval_level1 == 'Rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($booking->approval_level2 == 'Pending')
                                        <span class="badge bg-secondary">Pending</span>
                                    @elseif ($booking->approval_level2 == 'Approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($booking->approval_level2 == 'Rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($booking->approval_level3 == 'Pending')
                                        <span class="badge bg-secondary">Pending</span>
                                    @elseif ($booking->approval_level3 == 'Approved')
                                        <span class="badge bg-success">Approved</span>
                                    @elseif($booking->approval_level3 == 'Rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @endif
                                </td>{{$booking->comments}}
                                <td>                                    
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="20" style="text-align: center"><small>No entries yet</small></td>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
