@extends('layouts.app')

@section('title') Forgot password? @endsection

@section('content')

    <?php
    /*
    <form method="POST" action="forgot_process">
        @csrf

        <input type="text" name="email" id="email" placeholder="Enter your Email" class="form-control"><br>

        @error('email')
            <p class="test-red-500">{{ $message }}</p>
        @enderror

        <div>
            <a href="login" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">I remembered the password</a>
        </div>

        <br>

        <button type="submit" class="btn btn-success">Get in</button>
    </form>
    */
    ?>

    <div style=".center; height: 50em; position: relative;">
        <div class="d-inline-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="
        margin: 0;
        position: absolute;
        top: 25%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        width: 750px;">

            <div style="border-right: 3px solid darkorange; width: 560px;">
                <h1 class="my-0 mr-md-auto font-weight-normal" style="font-size: 55px; width: 1000px;">Forgot the password?</h1><br>
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
            margin-top: -573px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, 0%);
            width: 1000px;">

            <div style="border-top: 3px solid darkorange;">
                <br>
                <h1>Enter you data</h1>
                <br>

                <form method="POST" action="forgot_process">
                    @csrf

                    <input type="text" name="email" id="email" placeholder="Enter your Email" class="form-control"><br>

                    @error('email')
                    <p class="test-red-500">{{ $message }}</p>
                    @enderror

                    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="height: 30px;">
                        <button type="submit" class="btn btn-success">Get in</button>
                        <div class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                            <a href="login" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">I remembered the password</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
