<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve page</title>
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
        </div>
        <h5 class="modal-title">Booking information</h5>
        <form wire:submit.prevent='aproveline' action="/rejectline" method="post">
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
                        <label class="form-label">Items booked</label>
                        <div class="form-control producer" name="producer" aria-label="Default select example"
                            wire:model='producer'>
                            {{ $record->equipname }}
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label class="form-label">Items booked</label>
                        <div class="form-control producer" name="producer" aria-label="Default select example"
                            wire:model='producer'>
                            {{ $record->equipname }}
                        </div>

                    </div>
                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Remarks</label>
                            <textarea  class="form-control">
                            {{ $record->remarks }}
                        </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
               
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Approval comments</label>
                            <textarea name="comments" wire:model='comments' class="form-control" placeholder="Write your comments here..."></textarea>
                            <div class="form-text" style="color:red">
                                @error('comments')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <a class="btn-group" role="group" href="{{ url('/approveline', $record->id) }}">
                        <button type="submit" class="btn btn-sm btn-primary">Approve</button>
                    </a> --}}
                    <a class="btn-group" role="group" href="{{ url('/rejectline', $record->id) }}">
                        <button type="submit" class="btn btn-sm btn-danger">Reject</button>
                    </a>
               
            </div>
            <div class="modal-footer">
                <a class="btn-group btn-sm btn-primary" role="group" href="{{ url()->previous()  }}">Close

                </a>
            </div>

        </div>
    </form>
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
