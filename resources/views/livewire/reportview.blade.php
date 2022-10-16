<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More details</title>
    {{-- Bootstrap Styles --}}
    <link href="{{ asset('imports/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    {{-- Bootstrap Styles --}}
    @livewireStyles
</head>

<body>
    @include('clientNavbar')
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link">Approval</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/preport">Producting Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/assign">Assign </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Admin Panel </a>
                        </li>
                    </ul>
                </div>
                @include('logout')
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <h5 class="modal-title">Booking information</h5>
            <div class="modal-body">
                @csrf
                <div class="row align-items-start">
                    <div class="col">
                        <div class="mb-3">
                            <label for="" class="form-label">Booking Reference</label>
                            <input name="recordid" wire:model='recordid' class="form-control"
                                value="{{ $record->id }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Program</label>
                            <div class="form-select" name="team_leader">
                                {{ $record->program_name }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Topic</label>
                            <div class="form-select" name="team_leader">
                                {{ $record->program_topic }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">User</label>
                            <div type="text" name="program_topic" class="form-control program_topic">
                                {{ $record->name }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-start">

                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Booked Date</label>
                            <div type="text" name="operation_crew" class="form-control operation_crew">
                                {{ $record->date_booked }}
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
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <div type="time" name="settingtime" class="form-control settingtime">
                                {{ $record->location }}
                            </div>
                        </div>
                    </div>
                </div>
                <h5>HON status</h5>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approval_level1 }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">{{ $record->approval_level1 }} Time </label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approval1_time }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Approver Name </label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approver1_id }}
                            </div>
                        </div>
                    </div>
                </div>
                <h5>TPM status</h5>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approval_level2 }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">{{ $record->approval_level2 }} Time </label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approval2_time }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Approver Name </label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approver2_id }}
                            </div>
                        </div>
                    </div>
                </div>
                <h5>CSTO status</h5>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approval_level3 }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">{{ $record->approval_level3 }} Time </label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approval3_time }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Approver Name </label>
                            <div class="form-control producer" name="producer" aria-label="Default select example">
                                {{ $record->approver3_id }}
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Remarks</label>
                            <p>
                                {{ $record->remarks }} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Approval comments</label>
                        <p>
                            {{ $record->comments }} </p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="text-decoration: none">

                <a class="btn-group btn-sm btn-primary" role="group" href="{{ url()->previous() }}"
                    style="text-decoration: none">Close

                </a>
            </div>
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
