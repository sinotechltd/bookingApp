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
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#viewProductionData"
                                        wire:click="viewDetails({{ $booking->id }})">View</button>
                                        {{-- {{ console_log($booking);}} --}}
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
                @if ($userBooking->count() > 0)
                    @foreach ($userBooking as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->suitID }}</td>
                            <td>{{ $booking->user_id }}</td>
                            <td>{{ $booking->program_title }}</td>
                            <td>{{ $booking->requirements }}</td>
                            <td>{{ $booking->editing_date }}</td>
                            <td>{{ $booking->start_time }}</td>
                            <td>{{ $booking->endtime_time }}</td>
                            <td>{{ $booking->remarks }}</td>
                            <td>{{ $booking->approval1_time }}</td>
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
<div class="container-fluid">
    {{-- view pop up modal production facilities --}}
    <div class="modal fade" id="viewProductionData" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">View producction Booking information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="view-close-modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Booking Reference</label>
                                <div class="form-select" name="ptitle" class="form-control ptitle">
                                    {{ $viewBookingid }}</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">User</label>
                                <div type="text" name="program_topic" class="form-control program_topic">
                                    {{ $viewUserid }}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Program</label>
                                <div class="form-select" name="team_leader" wire:model='team_leader'>
                                    {{ $viewProgram }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Items booked</label>
                                <div class="form-select producer" name="producer" aria-label="Default select example"
                                    wire:model='producer'>
                                    {{ $viewItemsBooked }}</div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <div type="text" name="operation_crew" class="form-control operation_crew">
                                    {{ $viewlocation }}</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Recording Time</label>
                                <div type="date" name="bookingdate" class="form-control bookingdate">
                                    {{ $viewRecordingTime }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        {{-- <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Recording Time</label>
                                    <div type="time" name="recordingtime" class="form-control recordingtime">{{ $viewBookingid}}</div>
                                </div>
                            </div> --}}
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Guests</label>
                                <div type="time" name="settingtime" class="form-control settingtime">
                                    {{ $viewGuests }}</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Shift leader</label>
                                <div type="time" name="rehearsal_time" class="form-control rehearsal_time">
                                    {{ $viewLeader }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Date booked</label>
                                <div type="text" name="location" class="form-control location">
                                    {{ $viewBookedDate }}</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Aprroval Time</label>
                                <div type="text" name="designer" class="form-control designer">
                                    {{ $viewApprovalTime }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Remarks</label>
                                <textarea name="remarks" class="form-control" disabled>{{ $viewRemarks }}</textarea>
                            </div> 
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Approval comments</label>
                                {{-- <textarea name="remarks" class="form-control" disabled>{{ $viewapprovalComments}}</textarea> --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            wire:click="view-close-modal">Close</button>
                        {{-- <button type="submit" class="btn btn-primary newbooking">Submit</button> --}}
                    </div>

                </div>
            </div>
        </div>
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
