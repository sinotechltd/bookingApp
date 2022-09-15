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
            <a class="nav-link" aria-current="page" href="hon">Pending Approval</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/approved">Approved</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  active" href="/rejected">Rejected</a>
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
                    <th scope="col">Rejected date</th>                   
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
                                        data-bs-target="#viewData"
                                        wire:click='takeAction({{ $booking->id }} )'>View</button>
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
                    <th scope="col">Modify</th>
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
                                        data-bs-target="#viewData"'>View</button>
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
<!-- pop up view form Modal -->
<div wire:ignore.self class="modal fade" id="viewData" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" style="width:1250px;">
        <div class="modal-content">
            <form wire:submit.prevent='approveRecord'>
                {{-- //<fieldset  > --}}
                <div class="modal-header">
                    <h5 class="modal-title" id="" style="text-align: center;">Approve
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label">Program title</label>
                                <input type="text"  wire:model='ptitle' name="ptitle" class="form-control ptitle"  >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Topic</label>
                                <input type="text"  wire:model='program_topic' name="program_topic" class="form-control program_topic"  >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Team/Shift Leader</label>
                                <select class="form-select team_leader" wire:model='team_leader'  ></select>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Producer/Director</label>
                                <select class="form-select producer" name="producer" wire:model='producer'  ></select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Operation Crew</label>
                                <input type="text" name="operation_crew" class="form-control operation_crew" wire:model='operation_crew'  >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="bookingdate" class="form-control bookingdate" wire:model='bookingdate'  >
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Recording Time</label>
                                <input type="time" name="recordingtime" class="form-control recordingtime" wire:model='recordingtime'  >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Setting/Rigging time</label>
                                <input type="time" name="settingtime" class="form-control settingtime" wire:model='settingtime'  >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Rehearsal Time</label>
                                <input type="time" name="rehearsal_time" class="form-control rehearsal_time"  wire:model='rehearsal_time'  >
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location"  wire:model='location' class="form-control location"  >
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Designer</label>
                                <input type="text" name="designer" class="form-control designer"   wire:model='designer'  >

                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Guests</label>
                                <input type="text" name="guests" class="form-control guests" wire:model='guests'  >

                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Equipments</label>
                                <select class="form-select equiments" name="equiments"  wire:model='equiments'  >
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Presenters</label>
                                <select class="form-select presenters" name="presenters" wire:model='presenters'  ></select>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Special Remarks</label>
                                <textarea name="remarks" class="form-control" wire:model='remarks'  ></textarea>
                                <div class="form-text">Enter your remarks here</div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Reject</button>
                    <button type="button" class="btn btn-success">Approve</button>
                </div>>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#bookingmodel').modal('hide')
            $('#editbookingModal').modal('hide')
        });
        window.addEventListener('viewData', event => {
            $('#viewData').modal('show')
        });
    </script>
@endpush