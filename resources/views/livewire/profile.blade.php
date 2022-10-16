<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your profile</title>
</head>

<body>
    <div class="container">
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
                    <select class="form-select" name="role" class="form-control mt-1" placeholder="User Role">
                        {{ $profileData->role }}
                        <option value="User">User</option>
                        <option value="HON">Head of Unit</option>
                        <option value="TPM">TPM</option>
                        <option value="CSTO">CSTO</option>
                    </select>
                    <span class="text-danger"> @error('role')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group mt-3">
                    <label>Old Password</label>
                    <input type="password" name="oldPassword" class="form-control mt-1" placeholder="Old Password">

                    <span class="text-danger"> @error('oldPassword')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group mt-3">
                    <label>New Password</label>
                    <input type="password" name="newPassword" class="form-control mt-1" placeholder="New Password">

                    <span class="text-danger"> @error('newPassword')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="form-group mt-3">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmPassword" class="form-control mt-1" placeholder="confirmPassword">

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
                {{-- Write back-end code in the morning --}}

            </div>
        </form>
    </div>
</body>

</html>
