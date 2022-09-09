<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('imports/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('imports/bootstrap/js/bootstrap.min.js') }}"></script>
    <title>Home Page</title>
</head>

<body>
    @include('navbar')
    @include('editmodal')
    @include('deletemodal')
    @include('bookform')
    @include('approve')

    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Dashboard</h4>
                <hr>
            </div>
            <div class="row">
                <nav class="navbar navbar-light bg-light">
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addbtn" id=""> + Add </button>
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

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Program Title</th>
                        <th scope="col">Items Booked</th>
                        <th scope="col">Location</th>
                        <th scope="col">Recording Time</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Team/Shift Leader</th>
                        <th scope="col">Remarks</th>
                        <th scope="col">Date</th>
                        <th scope="col">1st Approval Status</th>
                        <th scope="col">2nd Approval Status</th>
                        <th scope="col">3rd Approval Status</th>
                        <th scope="col">Modify</th>

                    </tr>
                </thead>
                <tbody>
                    @empty($bookings)
                     <p>@error('fail'){{ $message}} @enderror</p>  
                    @else{                   
                    @foreach($bookings as $booking)
                    <tr>
                        <th scope="row">{{ $booking['booking_id'] }}</th>
                        <th>{{ $booking['program_title'] }}</th>
                        <th>{{ $booking['items_booked'] }}</th>
                        <th>{{ $booking['location'] }}</th>
                        <th>{{ $booking['recording_time'] }}</th>
                        <th>{{ $booking['guests'] }}</th>
                        <th>{{ $booking['shift_leader'] }}</th>
                        <th>{{ $booking['remarks'] }}</th>
                        <th> {{ $booking['date_booked'] }}</th>
                        <th>{{ $booking['approval_level1'] }}</th>
                        <th>{{ $booking['approval_level2'] }}</th>
                        <th> {{ $booking['approval_level3'] }}</th>
                        <th>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger mr-3" data-bs-toggle="modal" data-bs-target="#deleteentry">Delete</button>
                                <button type="button" class="btn btn-primary mr-3" data-bs-toggle="modal" data-bs-target="#editentry">Edit</button>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#approve">Approve</button>
                            </div>
                        </th>
                    </tr>
                    @endforeach
                    @endempty
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>