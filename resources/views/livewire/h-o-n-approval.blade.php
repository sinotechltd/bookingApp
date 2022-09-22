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
            <a class="nav-link active" aria-current="page" href="hon">Pending Approval</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/approved">Approved</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/rejected">Rejected</a>
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
                    <th scope="col">HON Approval</th>
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
                            <td>
                                @if ($booking->approval_level1 == 'Pending')
                                    <span class="badge bg-secondary">Awaiting your approval</span>
                                @elseif ($booking->approval_level1 == 'Approved')
                                    <span class="badge bg-success">Approved</span>
                                @elseif($booking->approval_level1 == 'Rejected')
                                    <span class="badge bg-danger">Rejected</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn-group" role="group" href="{{ url('/approveline', $booking->id) }}">
                                    <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                </a>
                                <a class="btn-group" role="group" href="{{ url('/rejectline', $booking->id) }}">
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
                    <th scope="col">HON Approval</th>
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
                                @if ($fbooking->approval_level1 == 'Pending')
                                    <span class="badge bg-secondary">Awaiting your approval</span>
                                @elseif ($fbooking->approval_level1 == 'Approved')
                                    <span class="badge bg-success">Approved</span>
                                @elseif($fbooking->approval_level1 == 'Rejected')
                                    <span class="badge bg-danger">Rejected</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn-group" role="group" href="{{ url('/fapproveline', $fbooking->id) }}">
                                    <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                </a>
                                <a class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-danger" wire:click="rejectReason({{$fbooking->id}})" data-bs-toggle="modal" data-bs-target="#rejectReason">Reject</button>
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
<div class="container-flud">
    <div wire:ignore.self class="modal fade" id="rejectReason" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="width:1250px;">
            <div class="modal-content">
                <form>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="" style="text-align: center;"> Rejection Reason
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Special Remarks</label>
                                    <textarea name="comments" class="form-control" wire:model='comments' placeholder="Enter your reason"></textarea>
                                    <div class="form-text">Enter your remarks here</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a class="btn-group" role="group">
                            <button type="submit" class="btn btn-sm btn-danger"wire:click="rejectReason" >Reject</button>
                        </a>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</div>