<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your profile</title>
</head>
<script>
    function toggleEnable(id1, id2, id3) {
        var textbox = document.getElementById(id1);
        var textbox2 = document.getElementById(id2);
        var textbox3 = document.getElementById(id3);
        if (textbox.disabled) {
            // If disabled, do this 
            document.getElementById(id1).disabled = false;
        } else {
            // Enter code here
            document.getElementById(id1).disabled = true;
        }
        if (textbox2.disabled) {
            // If disabled, do this 
            document.getElementById(id2).disabled = false;
        } else {
            // Enter code here
            document.getElementById(id2).disabled = true;
        }
        if (textbox3.disabled) {
            // If disabled, do this 
            document.getElementById(id3).disabled = false;
        } else {
            // Enter code here
            document.getElementById(id3).disabled = true;
        }
    }
</script>

<body>
    <div class="container-fluid">
        {{-- <a class="btn btn-outline-primary" href="{{ url()->previous() }}"><- Back</a> --}}
                <div class="container"> @include('logout')
                    @if (Session::get('Success'))
                        <div class="alert alert-success">
                            {{ Session::get('Success') }}
                        </div>
                    @endif
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('Failed') }}
                        </div>
                    @endif
                    <form class="Auth-form" action="{{ route('updateProfile') }}" method="POST">
                        @csrf
                        <div class="Auth-form-content">
                            <h3 class="Auth-form-title">Update Profile</h3>
                            <div class="form-group mt-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control mt-1" placeholder="Your Name"
                                    value="{{ $profileData->name }}" />
                                <span class="text-danger"> @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-3">
                                <label>Email address</label>
                                <input type="email" name="email" class="form-control mt-1" placeholder="Enter email"
                                    value="{{ $profileData->email }}" disabled>
                            </div>
                            <div class="form-group mt-3">
                                <label>Role</label>
                                <div class="form-select" name="role" class="form-control mt-1"
                                    placeholder="User Role" disabled>
                                    {{ $profileData->role }}
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label>Change Password</label>
                                <br>
                                <button class="btn btn-sm btn-primary" type="button"
                                    onclick="toggleEnable('olpass','newpass','confpass')"> Change</button>
                                <p>{{ $check }}</p>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <label>Old Password</label>
                            <input type="password" id="olpass" name="oldPassword" class="form-control mt-1"
                                placeholder="Old Password" disabled>

                            <span class="text-danger"> @error('oldPassword')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mt-3">
                            <label>New Password</label>
                            <input type="password" name="newPassword" id="newpass" class="form-control mt-1"
                                placeholder="New Password" disabled>

                            <span class="text-danger"> @error('newPassword')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group mt-3">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmPassword" id="confpass" class="form-control mt-1"
                                placeholder="confirmPassword" disabled>

                            <span class="text-danger"> @error('confirmPassword')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="d-grid gap-2 mt-3">
                            <button type="submit" class="btn btn-primary">
                                Update Details
                            </button>
                        </div>
                </div>
                </form>
       
    
    </div>
</body>

</html>
