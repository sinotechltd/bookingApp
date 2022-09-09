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

    <!-- pop up booking form Modal -->
    <div class="modal modal-xl" id="addbtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">OB PRODUCTION BOOKING FORM</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Program title</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Programs</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div id="emailHelp" class="form-text">Select your program</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Topic</label>
                            <input type="text" name="program_topic" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Topic.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Producer/Director</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="0">first</option>
                                <option value="1">1</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>                            <div id="emailHelp" class="form-text">Select your Producer.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Equipments</label> 
                            <select class="form-select" aria-label="Default select example">
                                <option value="0">first</option>
                                <option value="1">1</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Setting/Rigging time</label>
                            <input type="time" name="setting_time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Rehearsal Time</label>
                            <input type="time" name="rehearsal_time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Designer</label>
                            <input type="text" name="designer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Guests</label>
                            <input type="text" name="guests" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Presenters</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="0">first</option>
                                <option value="1">1</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Special Remarks</label>
                            <input type="text" name="remarks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Operation Crew</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="0">first</option>
                                <option value="1">1</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Team/Shift Leader</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="0">first</option>
                                <option value="1">1</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
                                <button type="button" class="btn btn-danger">Delete</button>

                                <button type="button" class="btn btn-success">Edit</button>
                            </div>
                        </th>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>