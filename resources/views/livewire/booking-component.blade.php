<div class="container-fluid">
    <div class="col justify-content-between">
        <h4>Production Equipments Booking</h4>
        <hr>
    </div>
    <div class="row">
        <nav class="navbar navbar-light bg-light">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookingmodel"
                data-backdrop="static"> + Add </button>
            <a href="#">Approved</a>
            <a href="#">Rejected</a>
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
    <div class="row">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
    </div>
    {{-- Table with user boookings --}}
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Ref</th>
                    <th scope="col">Program Title</th>
                    <th scope="col">Items Booked</th>
                    <th scope="col">Location</th>
                    <th scope="col">Recording Time</th>
                    <th scope="col">Guests</th>
                    <th scope="col">Team Leader</th>
                    <th scope="col">Remarks</th>
                    <th scope="col">Date</th>
                    <th scope="col">HON Approval</th>
                    <th scope="col">TPM Aproval</th>
                    <th scope="col">CSTO Approval</th>
                    <th scope="col">Modify</th>

                </tr>
            </thead>
            <tbody>
                @if ($userBoking->count() > 0)
                    @foreach ($userBoking as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->program_title }}</td>
                            <td>{{ $booking->items_booked }}</td>
                            <td>{{ $booking->location }}</td>
                            <td>{{ $booking->recording_time }}</td>
                            <td>{{ $booking->guests }}</td>
                            <td>{{ $booking->shift_leader }}</td>
                            <td>{{ $booking->remarks }}</td>
                            <td>{{ $booking->date_booked }}</td>
                            <td>{{ $booking->approval_level1 }}</td>
                            <td>{{ $booking->approval_level2 }}</td>
                            <td>{{ $booking->approval_level3 }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteentry">Delete</button>
                                    <button type="button" class="btn btn-sm btn-primary" wire:click='editbookingentry({{ $booking->booking_id }} )'>Edit</button>
                                </div>
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
    </div>
    {{-- Book modal --}}
    <div wire:ignore.self class="modal fade" id="bookingmodel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="width:1250px;">
            <div class="modal-content">
                <form wire:submit.prevent='submibookingdetails'>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="" style="text-align: center;">OB PRODUCTION BOOKING FORM
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="form-label">Program title</label>
                                    <input type="text" name="ptitle" class="form-control ptitle" wire:model='ptitle'
                                        value="{{ old('ptitle') }}">
                                    <!-- <select class="form-select" name="ptitle">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select> -->
                                    <div class="form-text">Select your program</div>
                                    <div class="form-text" style="color:red">
                                        @error('ptitle')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Topic</label>
                                    <input type="text" name="program_topic" class="form-control program_topic"
                                        wire:model='program_topic' value="{{ old('program_topic') }}">
                                    <div class="form-text">Topic</div>
                                    <div class="form-text" style="color:red">
                                        @error('program_topic')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Team/Shift Leader</label>
                                    <select class="form-select team_leader" aria-label="Default select example"
                                        name="team_leader" wire:model='team_leader'
                                        value="{{ old('team_leader') }}">
                                        <option value="John">John</option>
                                        <option value="John">Kevin</option>
                                        <option value="Mark">Mark</option>
                                        <option value="Yvonne">Yvonne</option>
                                    </select>
                                    <div class="form-text">Select your Team leader</div>
                                    <div class="form-text" style="color:red">
                                        @error('team_leader')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Producer/Director</label>
                                    <select class="form-select producer" name="producer"
                                        aria-label="Default select example" wire:model='producer'
                                        value="{{ old('producer') }}">
                                        <option value="John">John</option>
                                        <option value="1">1</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="form-text">Select your producer</div>
                                    <div class="form-text" style="color:red">
                                        @error('producer')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Operation Crew</label>
                                    <input type="text" name="operation_crew" class="form-control operation_crew"
                                        wire:model='operation_crew' value="{{ old('operation_crew') }}">
                                    <div class="form-text">Type operation crew names</div>
                                    <div class="form-text" style="color:red">
                                        @error('operation_crew')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="bookingdate" class="form-control bookingdate"
                                        wire:model='bookingdate' value="{{ old('bookingdate') }}">
                                    <div class="form-text">Select date</div>
                                    <div class="form-text" style="color:red">
                                        @error('bookingdate')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Recording Time</label>
                                    <input type="time" name="recordingtime" class="form-control recordingtime"
                                        wire:model='recordingtime' value="{{ old('recordingtime') }}">
                                    <div class="form-text">Select recording time</div>
                                    <div class="form-text" style="color:red">
                                        @error('recordingtime')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Setting/Rigging time</label>
                                    <input type="time" name="settingtime" class="form-control settingtime"
                                        wire:model='settingtime' value="{{ old('settingtime') }}">
                                    <div class="form-text">Select setting time</div>
                                    <div class="form-text" style="color:red">
                                        @error('settingtime')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Rehearsal Time</label>
                                    <input type="time" name="rehearsal_time" class="form-control rehearsal_time"
                                        wire:model='rehearsal_time' value="{{ old('rehearsal_time') }}">
                                    <div class="form-text">Select your producer</div>
                                    <div class="form-text" style="color:red">
                                        @error('rehearsal_time')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control location"
                                        wire:model='location' value="{{ old('location') }}">
                                    <div class="form-text">Enter setting location</div>
                                    <div class="form-text" style="color:red">
                                        @error('location')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Designer</label>
                                    <input type="text" name="designer" class="form-control designer"
                                        wire:model='designer' value="{{ old('designer') }}">
                                    <div class="form-text">Enter designer</div>
                                    <div class="form-text" style="color:red">
                                        @error('designer')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Guests</label>
                                    <input type="text" name="guests" class="form-control guests"
                                        wire:model='guests' value="{{ old('guests') }}">
                                    <div class="form-text">Enter quests names separated with comma (,)</div>
                                    <div class="form-text" style="color:red">
                                        @error('guests')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Equipments</label>
                                    <select class="form-select equiments" name="equiments" wire:model='equiments'
                                        value="{{ old('equiments') }}">
                                        <option value="Camera">Camera</option>
                                        <option value="Mixer">Mixer</option>
                                        <option value="microphone">microphone</option>
                                    </select>
                                    <div class="form-text">Select Equipment to be used</div>
                                    <div class="form-text" style="color:red">
                                        @error('equiments')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Presenters</label>
                                    <select class="form-select presenters" name="presenters" wire:model='presenters'
                                        value="{{ old('presenters') }}">
                                        <option value="John">John</option>
                                        <option value="Titus">Titus</option>
                                        <option value="Ben">Ben</option>
                                    </select>
                                    <div class="form-text">Select Your presenter</div>
                                    <div class="form-text" style="color:red">
                                        @error('presenters')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Special Remarks</label>
                                    <textarea name="remarks" class="form-control" wire:model='remarks' placeholder="Enter your remarks here"></textarea>
                                    <div class="form-text">Enter your remarks here</div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary newbooking">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Book modal --}}
    {{-- Edit Entry Modal --}}
    <div wire:ignore.self class="modal fade" id="editbookingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="width:1250px;">
            <div class="modal-content">
                <form wire:submit.prevent='editBookingData'>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="" style="text-align: center;">Edit 
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="form-label">Program title</label>
                                    <input type="text" name="ptitle" class="form-control ptitle"
                                        wire:model='ptitle' value="{{ old('ptitle') }}">                                   >
                                    <div class="form-text">Select your program</div>
                                    <div class="form-text" style="color:red">
                                        @error('ptitle')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Topic</label>
                                    <input type="text" name="program_topic" class="form-control program_topic"
                                        wire:model='program_topic' value="{{ old('program_topic') }}">
                                    <div class="form-text">Topic</div>
                                    <div class="form-text" style="color:red">
                                        @error('program_topic')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Team/Shift Leader</label>
                                    <input type="text" name="team_leader" class="form-control program_topic"
                                         wire:model='team_leader'value="{{ old('team_leader') }}">                             
                                    <div class="form-text">Select your Team leader</div>
                                    <div class="form-text" style="color:red">
                                        @error('team_leader')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Producer/Director</label>
                                    <select class="form-select producer" name="producer"
                                        aria-label="Default select example" wire:model='producer'
                                        value="{{ old('producer') }}">
                                        <option value="0">first</option>
                                        <option value="1">1</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="form-text">Select your producer</div>
                                    <div class="form-text" style="color:red">
                                        @error('producer'+)
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Operation Crew</label>
                                    <input type="text" name="operation_crew" class="form-control operation_crew"
                                        wire:model='operation_crew' value="{{ old('operation_crew') }}">
                                    <div class="form-text">Type operation crew names</div>
                                    <div class="form-text" style="color:red">
                                        @error('operation_crew')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="bookingdate" class="form-control bookingdate"
                                        wire:model='bookingdate' value="{{ old('bookingdate') }}">
                                    <div class="form-text">Select date</div>
                                    <div class="form-text" style="color:red">
                                        @error('bookingdate')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Recording Time</label>
                                    <input type="time" name="recordingtime" class="form-control recordingtime"
                                        wire:model='recordingtime' value="{{ old('recordingtime') }}">
                                    <div class="form-text">Select recording time</div>
                                    <div class="form-text" style="color:red">
                                        @error('recordingtime')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Setting/Rigging time</label>
                                    <input type="time" name="settingtime" class="form-control settingtime"
                                        wire:model='settingtime' value="{{ old('settingtime') }}">
                                    <div class="form-text">Select setting time</div>
                                    <div class="form-text" style="color:red">
                                        @error('settingtime')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Rehearsal Time</label>
                                    <input type="time" name="rehearsal_time" class="form-control rehearsal_time"
                                        wire:model='rehearsal_time' value="{{ old('rehearsal_time') }}">
                                    <div class="form-text">Select your producer</div>
                                    <div class="form-text" style="color:red">
                                        @error('rehearsal_time')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control location"
                                        wire:model='location' value="{{ old('location') }}">
                                    <div class="form-text">Enter setting location</div>
                                    <div class="form-text" style="color:red">
                                        @error('location')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Designer</label>
                                    <input type="text" name="designer" class="form-control designer"
                                        wire:model='designer' value="{{ old('designer') }}">
                                    <div class="form-text">Enter designer</div>
                                    <div class="form-text" style="color:red">
                                        @error('designer')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Guests</label>
                                    <input type="text" name="guests" class="form-control guests"
                                        wire:model='guests' value="{{ old('guests') }}">
                                    <div class="form-text">Enter quests names separated with comma (,)</div>
                                    <div class="form-text" style="color:red">
                                        @error('guests')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Equipments</label>
                                    <select class="form-select equiments" name="equiments" wire:model='equiments'
                                        value="{{ old('equiments') }}">
                                        <option value="Camera">Camera</option>
                                        <option value="Mixer">Mixer</option>
                                        <option value="microphone">microphone</option>
                                    </select>
                                    <div class="form-text">Select Equipment to be used</div>
                                    <div class="form-text" style="color:red">
                                        @error('equiments')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Presenters</label>
                                    <select class="form-select presenters" name="presenters" wire:model='presenters'
                                        value="{{ old('presenters') }}">
                                        <option value="John">John</option>
                                        <option value="Titus">Titus</option>
                                        <option value="Ben">Ben</option>
                                    </select>
                                    <div class="form-text">Select Your presenter</div>
                                    <div class="form-text" style="color:red">
                                        @error('presenters')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Special Remarks</label>
                                    <textarea name="remarks" class="form-control" wire:model='remarks' placeholder="Enter your remarks here"></textarea>
                                    <div class="form-text">Enter your remarks here</div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary newbooking">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit entry modal --}}

</div>
@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#bookingmodel').modal('hide')
            $('#editbookingModal').modal('hide')
        });
        window.addEventListener('show-edit-modal', event => {
            $('#editbookingModal').modal('show')
        });
    </script>
@endpush
