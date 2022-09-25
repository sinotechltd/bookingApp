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
                    </ul>
                </div>
                <a class="btn btn-sm btn-danger" href="{{ route('auth.logout') }}">Logout</a>
            </div>
        </nav>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="hon">Pending Approval</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/approved">Approved</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/rejected">Rejected</a>
        </li>
    </ul>
    <div class="row">
        <h5>Production Facilities Approved entries</h5>
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
                    <th scope="col">Action</th>

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
                            <td>{{ $booking->approval1_time }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn-group btn-sm btn-primary" role="group"
                                        href="{{ url('view', $booking->id) }}">View
                                        
                                    </a>
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
        <h5>Editing Facilities Approved entries</h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Ref</th>
                    <th scope="col">Suit</th>                   
                    <th scope="col">Editing Date</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Approval Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($userBooking->count() > 0)
                    @foreach ($userBooking as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->suitID }}</td>                           
                            <td>{{ $booking->editing_date }}</td>
                            <td>{{ $booking->start_time }}</td>
                            <td>{{ $booking->endtime_time }}</td>
                            <td>{{ $booking->remarks }}</td>
                            <td>{{ $booking->approval1_time }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn-group" role="group"
                                        href="{{ url('/eview', $booking->id) }}">
                                        <button type="submit" class="btn btn-sm btn-primary">View</button>
                                    </a>
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
<div class="container-fluid">
    {{-- view pop up modal editing facilities --}}
    <div class="modal fade" id="viewProductionData" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">View Editing facility Booking information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
</div>
