<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm page</title>
    {{-- Bootstrap Styles --}}
    <link href="{{ asset('imports/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    {{-- Bootstrap Styles --}}
    @livewireStyles
</head>

<body>
    @include('clientNavbar')
    <div class="div">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page">View</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">New Book</a>
                        </li>
                    </ul>
                </div>
                @include('logout')
            </div>
        </nav>
    </div>
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
                        <label class="form-label">Program</label>
                        <div class="form-select" name="team_leader" wire:model='team_leader'>
                            {{ $record->program_name }}
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
            <div class="row align-items-start">                
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Items booked</label>
                        {{-- @foreach ($itemName as $item)
                            <div class="form-control producer" name="producer" aria-label="Default select example"
                                wire:model='producer'>
                                {{ $item->equipname }}
                            </div>
                        @endforeach --}}
                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Remarks</label>
                            <p>
                                {{ $record->remarks }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">

                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">

                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">HON Approval</label>
                        <br>
                        @if ($record->approval_level1 == 'Pending')
                            <span class="badge bg-secondary">Pending</span>
                        @elseif ($record->approval_level1 == 'Approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif($record->approval_level1 == 'Rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">TPM Approval</label>
                        <br>
                        @if ($record->approval_level2 == 'Pending')
                            <span class="badge bg-secondary">Pending</span>
                        @elseif ($record->approval_level2 == 'Approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif($record->approval_level2 == 'Rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">CSTO Approval</label>
                        <br>
                        @if ($record->approval_level3 == 'Pending')
                            <span class="badge bg-secondary">Pending</span>
                        @elseif ($record->approval_level3 == 'Approved')
                            <span class="badge bg-success">Approved</span>
                        @elseif($record->approval_level3 == 'Rejected')
                            <span class="badge bg-danger">Rejected</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Approval comments</label>
                        <p>
                            {{ $record->comments }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn-group btn-sm btn-primary" role="group" href="{{ url()->previous() }}">Close

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
