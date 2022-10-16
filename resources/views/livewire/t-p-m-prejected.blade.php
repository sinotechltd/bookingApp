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
                    @include('logout')
                </div>
            </nav>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="tpm">Pending Approval</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tpmapproved">Approved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  active" href="/tpmrejected">Rejected</a>
            </li>
        </ul>
    </div>
    <div class="container">
        <h5>Production Facilities Approved entries</h5>
        <div class="row">           
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Ref</th>
                        <th scope="col">Date</th>
                        <th scope="col">User</th>
                        <th scope="col">Recording Time</th>
                        <th scope="col">Team Leader</th>
                        <th scope="col">Rejected date</th>
                        <th scope="col">Modify</th>

                    </tr>
                </thead>
                <tbody>
                    @if ($userApproval->count() > 0)
                        @foreach ($userApproval as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->date_booked }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->recording_time }}</td>
                                <td>{{ $booking->shift_leader }}</td>
                                <td>{{ $booking->approval2_time }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn-group btn-sm btn-primary" role="group"
                                            href="{{ url('view', $booking->id) }}">View
                                        </a>
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
            <table>
                <div class="row">
                    <h5>Editing Facilities Approved entries</h5>                   
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Ref</th>
                                <th scope="col">Suit</th>
                                <th scope="col">User</th>
                                <th scope="col">Editing Date</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Approval Date</th>
                                <th scope="col">Modify</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($userBooking->count() > 0)
                                @foreach ($userBooking as $booking)
                                    <tr>
                                        <td>{{ $booking->id }}</td>
                                        <td>{{ $booking->suitName }}</td>
                                        <td>{{ $booking->name }}</td>
                                        <td>{{ $booking->editing_date }}</td>
                                        <td>{{ $booking->start_time }}</td>
                                        <td>{{ $booking->endtime_time }}</td>
                                        <td>{{ $booking->approval2_time }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn-group" role="group"
                                                    href="{{ url('/eview', $booking->id) }}">
                                                    <button type="submit" class="btn btn-sm btn-primary">View</button>
                                                </a>
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
                </div>
            </table>
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
