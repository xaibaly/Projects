@extends('layout')

@section('title', 'Register')

@section('content')

    <div style="text-align: center">
        <h1>Register Here</h1>

        <a href="../" class="btn btn-primary">Go Back</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('failed'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <form action="{{ route('register_user') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <table align="center">
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="first_name" required></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="last_name" required></td>
                </tr>
                <tr>
                    <td>Profile Picture</td>
                    <td><input type="file" name="profile_picture" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
@endsection
