@extends('layout')

@section('title', 'Login Page')

@section('content')

    <a href="../" class="btn btn-primary">Go Back</a>
    <div class="row justify-content-center align-items-center d-flex vh-10">
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-10">
            <h1>Login Here</h1>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('failed'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('login_user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <div class="text-end mb-4">
                            <td colspan="2"><input type="submit" value="Login"></td>
                        </div>
                    </tr>
                </table>
            </form>
        </div>


    </div>
@endsection
