@extends('layouts.app')

@section('title') Authorisation @endsection

@section('content')

    <div style=".center; height: 50em; position: relative;">
        <div class="d-inline-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="
        margin: 0;
        position: absolute;
        top: 25%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        width: 750px;">

            <div style="border-right: 3px solid darkorange; width: 500px;">
                <h1 class="my-0 mr-md-auto font-weight-normal" style="font-size: 75px;">Authorisation</h1><br>
            </div>

            <div class="d-flex flex-md-row" style="width: 150px;">
                <nav class="mt-2 mt-md-0 ms-md-auto">
                    <form method="GET" action="/">
                        <button type="submit" class="btn btn-warning p-2 text-black text-decoration-none">Back to Main</button>
                    </form>
                </nav>
            </div>

        </div>
    </div>

    <div style=".center; position: relative;">
        <div class="flex-column flex-md-row align-items-center p-3 px-md-4" style="
            position: absolute;
            margin-top: -560px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, 0%);
            width: 1000px;">

            <div style="border-top: 3px solid darkorange;">
                <br>
                <h1>Enter you data</h1>
                <br>

                <form method="POST" action="login_process">
                    @csrf

                    <input type="text" name="email" id="email" placeholder="Enter your Email" class="form-control"><br>
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control"><br>
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="height: 10px;">
                        <button type="submit" class="btn btn-success">Log in</button>
                        <div class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                            <a href="forgot" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Forgot password?</a>
                            <a href="register" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Registration</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
