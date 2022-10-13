<div class="container-flud">
    <div wire:ignore.self class="modal fade" id="bookingmodel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" style="width:1250px;">
            <div class="modal-content">
                <form wire:submit.prevent='submibookingdetails'>
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="" style="text-align: center;">EDITING FACILITIES BOOKING
                            FORM
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
                                        <option>--Select program--</option>
                                        @foreach ($getProgramTitle as $producer)
                                            <option value="{{ $producer->id}}">{{ $producer->program_name }}</option>
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
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Producer</label>
                                    <select class="form-select producer" name="producer"
                                        aria-label="Default select example" wire:model='producer'
                                        value="{{ old('producer') }}">
                                        <option>--Select Producer--</option>
                                        @foreach ($getproducer as $producer)
                                            <option value="{{ $producer->id  }}">{{ $producer->full_name }}</option>
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
                                    <label class="form-label">Editing Suit</label>
                                    <select class="form-select" name="esuit" class="form-control location"
                                        wire:model='esuit' value="{{ old('esuit') }}">
                                        <option>--Select Editing suit--</option>
                                        @foreach ($geteSuits as $producer)
                                            <option value="{{ $producer->id }}">{{ $producer->suitName }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-text">Select prefered editing suit</div>
                                    <div class="form-text" style="color:red">
                                        @error('esuit')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Editing Date</label>
                                    <input type="date" name="editing_date" class="form-control"
                                        wire:model='editing_date' value="{{ old('editing_date') }}">
                                    <div class="form-text">Select Editing</div>
                                    <div class="form-text" style="color:red">
                                        @error('editing_date')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Start Time</label>
                                    <input type="time" name="start_time" class="form-control" wire:model='start_time'
                                        value="{{ old('start_time') }}">
                                    <div class="form-text">Select recording time</div>
                                    <div class="form-text" style="color:red">
                                        @error('start_time')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">To</label>
                                    <input type="time" name="end_time" class="form-control" wire:model='end_time'
                                        value="{{ old('end_time') }}">
                                    <div class="form-text">Select setting time</div>
                                    <div class="form-text" style="color:red">
                                        @error('end_time')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Other Requipments</label>
                                    <select class="form-select selectpicker" multiple data-live-search="true" name="equiments" wire:model='equiments'
                                        value="{{ old('equiments') }}">
                                        <option>--Select Editing suit--</option>
                                        @foreach ($getequipments as $equiments)
                                            <option value="{{ $equiments->id }}">{{ $equiments->equipname }}</option>
                                        @endforeach
                                    </select>
                                    <div class="form-text">Editor, graphics, mics for sounds etc.</div>
                                    <div class="form-text" style="color:red">
                                        @error('equiments')
                                            {{ $message }}
                                        @enderror
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
</div>
{{-- Book modal --}}
