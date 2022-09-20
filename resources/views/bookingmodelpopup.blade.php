<div class="container-flud">
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
                                    <select class="form-select" name="ptitle" class="form-control ptitle"
                                        wire:model='ptitle' value="{{ old('ptitle') }}">
                                        <option>--Select Program--</option>
                                        @foreach ($getProgramTitle as $program)
                                            <option value="{{ $program->program_name }}">{{ $program->program_name }}</option>
                                        @endforeach
                                    </select>
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
                                    <select class="form-select" name="team_leader" wire:model='team_leader'
                                        value="{{ old('team_leader') }}">
                                        <option>--Select Shiftleader--</option>
                                        @foreach ($employes as $program)
                                            <option value="{{ $program->full_name }}">{{ $program->full_name }}</option>
                                        @endforeach
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
                                        <option>--Select Producer--</option>
                                        @foreach ($getproducer as $producer)
                                            <option value="{{ $producer->full_name }}">{{ $producer->full_name }}</option>
                                        @endforeach
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
                                    <div class="form-text">Select rehearsal time</div>
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
                                        <option>--Select Equipments --</option>
                                        @foreach ($getequipments as $equiments)
                                            <option value="{{ $equiments->name }}">{{ $equiments->name }}</option>
                                        @endforeach
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
                                        <option>--Select Presenters--</option>
                                        @foreach ($getproducer as $producer)
                                            <option value="{{ $producer->full_name }}">{{ $producer->full_name }}</option>
                                        @endforeach
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
