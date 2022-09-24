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
            <a class="nav-link active" aria-current="page" href="ctopage">Pending Approval</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/tpmapproved">Approved</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/tpmrejected">Rejected</a>
        </li>
    </ul>
    <div class="row">
        @if (Session::get('Success'))
        <div class="alert alert-success">
            {{ Session::get('Success') }}
        </div>
    @endif
    @if (Session::get('Failed'))
        <div class="alert alert-danger">
            {{ Session::get('Failed') }}
        </div>
    @endif

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
                    <th scope="col">Approval</th>
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($userBoking->count() > 0)
                    @foreach ($userBoking as $booking)
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
                            <td>{{ $booking->approval_level2 }}</td>
                            <td>
                                <a class="btn-group" role="group" href="{{ url('/tpmapproveline',$booking->id)}}">
                                    <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                </a>
                                <a class="btn-group" role="group"  href="{{ url('/tpmrejectline',$booking->id)}}">
                                    <button type="button" class="btn btn-sm btn-danger">Reject</button>
                                </a>
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
 {{-- editing facility bookings --}}
 <div class="conta">
    <h5>
        Editing Facilities awaiting approval
    </h5>
</div>
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
            <th scope="col">TPM Approval</th>
            <th scope="col">Modify</th>

        </tr>
    </thead>
    <tbody>
        @if ($userBooking->count() > 0)
            @foreach ($userBooking as $fbooking)
                <tr>
                    <td>{{ $fbooking->id }}</td>
                    <td>{{ $fbooking->suitID }}</td>
                    <td>{{ $fbooking->user_id }}</td>
                    <td>{{ $fbooking->program_title }}</td>
                    <td>{{ $fbooking->requirements }}</td>
                    <td>{{ $fbooking->editing_date }}</td>
                    <td>{{ $fbooking->start_time }}</td>
                    <td>{{ $fbooking->endtime_time }}</td>
                    <td>{{ $fbooking->remarks }}</td>
                    <td>
                        @if ($fbooking->approval_level2 == 'Pending')
                            <span class="badge bg-secondary">Awaiting your approval</span>
                        @elseif ($fbooking->approval_level2 == 'Approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif($fbooking->approval_level2 == 'Rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn-group" role="group" href="{{ url('/ftpmapproveline', $fbooking->id) }}">
                            <button type="button" class="btn btn-sm btn-primary">Approve</button>
                        </a>
                        <a class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-danger" wire:click="ftpmrejectline({{$fbooking->id}})" data-bs-toggle="modal" data-bs-target="#rejectReason">Reject</button>
                        </a>
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