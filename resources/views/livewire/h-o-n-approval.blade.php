<title>{{$title}}</title>
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
                @include('logout')
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
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Ref</th>
                    <th scope="col">Date</th>
                    <th scope="col">User</th>
                    <th scope="col">Recording Time</th>
                    <th scope="col">Team Leader</th>
                    <th scope="col">Approval</th>
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($userBoking->count() > 0)
                    @foreach ($userBoking as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->date_booked }}</td>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->recording_time }}</td>
                            <td>{{ $booking->shift_leader }}</td>
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
                                <a class="btn-group" role="group" href="{{ url('/viewLine', $booking->id) }}">
                                    <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                </a>
                                <a class="btn-group" role="group" href="{{ url('/rviewline', $booking->id) }}">
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
                    <th scope="col">Editing Date</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>                    
                    <th scope="col">Approval</th>
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($userBooking->count() > 0)
                    @foreach ($userBooking as $fbooking)
                        <tr>
                            <td>{{ $fbooking->id }}</td>
                            <td>{{ $fbooking->suitName }}</td>
                            <td>{{ $fbooking->name }}</td>
                            <td>{{ $fbooking->program_name }}</td>                            
                            <td>{{ $fbooking->editing_date }}</td>
                            <td>{{ $fbooking->start_time }}</td>
                            <td>{{ $fbooking->endtime_time }}</td>                           
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
                                <a class="btn-group" role="group" href="{{ url('/vieweditLin', $fbooking->id) }}">
                                    <button type="button" class="btn btn-sm btn-primary">Approve</button>
                                </a>
                                 <a class="btn-group" role="group" href="{{ url('/vieweditline', $fbooking->id) }}">
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
</div>
<div class="container">
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
                        <div class="btn-group" role="group">
                            <button type="submit"
                                class="btn btn-sm btn-danger"wire:click="rejectReason">Reject</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
