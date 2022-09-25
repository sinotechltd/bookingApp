<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    {{-- Bootstrap Styles --}}
    <link href="{{ asset('imports/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    {{-- Bootstrap Styles --}}
    @livewireStyles
</head>

<body>
    @include('clientNavbar')
    <div class="container">
        <h5 class="modal-title">Booking information</h5>
        <div class="modal-body">
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Booking Reference</label>
                        <div name="ptitle" class="form-control ptitle">
                            {{ $record->id }}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">User</label>
                        <div type="text" name="program_topic" class="form-control program_topic">
                            {{ $recordname->name }}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Program</label>
                        <div class="form-select" name="team_leader" wire:model='team_leader'>
                            {{ $record->program_name }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Items booked</label>
                        <div class="form-control producer" name="producer" aria-label="Default select example"
                            wire:model='producer'>
                            {{ $record->equipname }}
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <div type="text" name="operation_crew" class="form-control operation_crew">
                            {{ $record->location }}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Recording Time</label>
                        <div type="date" name="bookingdate" class="form-control bookingdate">
                            {{ $record->recording_time }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Guests</label>
                        <div type="time" name="settingtime" class="form-control settingtime">
                            {{ $record->guests }}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Shift leader</label>
                        <div type="time" name="rehearsal_time" class="form-control rehearsal_time">
                            {{ $record->shift_leader }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Date booked</label>
                        <div type="text" name="location" class="form-control location">
                            {{ $record->date_booked }}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Aprroval Date</label>
                        <div type="text" name="designer" class="form-control designer">
                            {{ $record->approval1_time }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Remarks</label>
                        <textarea name="remarks" class="form-control">
                                {{ $record->remarks }}
                            </textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Approval comments</label>
                        <textarea name="remarks" class="form-control">
                                {{ $record->comments }}
                            </textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn-group btn-sm btn-primary" role="group" href="{{ url('/approved') }}">Close

                </a>
            </div>

        </div>
    </div>


    {{-- Bootstrap Scrips --}}
    <script src="{{ asset('imports/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    {{-- Bootstrap Scrips --}}
    @include('footer')

    @stack('scripts')
    @livewireScripts
</body>

</html>
