<div class="container-fluid">
    <div class="div">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">Approval</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Booking</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" @disabled(true)>Admin Action</a>
                        </li> --}}
                    </ul>
                </div>
                <a class="btn btn-sm btn-danger" href="{{ route('auth.logout') }}">Logout</a>
            </div>
        </nav>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="ctopage">Pending Approval</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/ctoapproved">Approved</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/ctorejected">Rejected</a>
        </li>
    </ul>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Ref</th>
                    <th scope="col">User</th>
                    <th scope="col">Program Title</th>
                    <th scope="col">Items Booked</th>
                    <th scope="col">Location</th>
                    <th scope="col">Recording Time</th>
                    <th scope="col">Guests</th>
                    <th scope="col">Team Leader</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Date</th>
                    <th scope="col">Aproval date</th>
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($userApproval->count() > 0)
                    @foreach ($userApproval as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->user_id }}</td>
                            <td>{{ $booking->program_title }}</td>
                            <td>{{ $booking->items_booked }}</td>
                            <td>{{ $booking->location }}</td>
                            <td>{{ $booking->recording_time }}</td>
                            <td>{{ $booking->guests }}</td>
                            <td>{{ $booking->shift_leader }}</td>
                            <td>{{ $booking->remarks }}</td>
                            <td>{{ $booking->date_booked }}</td>
                            <td>{{ $booking->approval3_time }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#viewData">View</button>
                                </div>
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
<h5>Editing Facilities Approved entries</h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Ref</th>
                    <th scope="col">Suit</th>
                    <th scope="col">User</th>
                    <th scope="col">Program Title</th>
                    <th scope="col">Requirements</th>
                    <th scope="col">Editing Date</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Approval Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($FuserApprovalSuccess->count() > 0)
                    @foreach ($FuserApprovalSuccess as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->suitName }}</td>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->program_name}}</td>
                            <td>{{ $booking->equipname }}</td>
                            <td>{{ $booking->editing_date }}</td>
                            <td>{{ $booking->start_time }}</td>
                            <td>{{ $booking->endtime_time }}</td>
                            <td>{{ $booking->remarks }}</td>
                            <td>{{ $booking->approval3_time }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#viewData">View</button>
                                </div>
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
