@extends('layouts.app')

@section('title') Something else @endsection


@section('content')

    <?php $user = auth()->user(); ?>

    <div style=".center; height: 50em; position: relative;">
        <div class="d-inline-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="
        margin: 0;
        position: absolute;
        top: 25%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        width: 650px;">

            <div style="border-right: 3px solid darkorange; width: 400px;">
                <h1 class="my-0 mr-md-auto font-weight-normal" style="font-size: 75px;">Comments</h1><br>
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

    @auth("web")
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

                <form method="POST" action="/contact/check">
                    @csrf

                    <input type="text" name="title" id="title" placeholder="Title" class="form-control"><br>
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea><br>
                    @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="height: 10px;">
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @endauth

    @guest("web")
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
                    <h1>You must be authorised to send comments!</h1>
                    <br>

                    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="height: 10px;">
                        <form method="GET" action="/auth/login">
                            <button type="submit" class="btn btn-warning p-2 text-black text-decoration-none">Authorisation</button>
                        </form>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    @endguest


    <div style=".center; position: relative;">
        <div class="align-items-center p-3 px-md-4" style="
        margin: 0;
        height: 400px;
        top: 50%;
        position: absolute;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        width: 1000px;">

                <h1 class="my-0 mr-md-auto font-weight-normal" style="border-top: 3px solid darkorange; font-size: 75px;">All comments</h1><br>

            @foreach($comments as $el)
                <div id="{{ $el->user_id }}" class="alert alert-warning">
                    
                    <p style="font-size: 25px;"><strong>User: </strong>{{ $el->name }}</p>
                                    <h1 style="border-bottom: 1px solid"></h1>
                    <p style="font-size: 25px;"><strong>Title: </strong>{{ $el->title }}</p>
                                    <h1 style="border-bottom: 1px solid"></h1>
                    <p style="font-size: 24px;"><strong>Message: </strong>{{ $el->message }}</p>

                </div>
            @endforeach

        </div>
    </div>

@endsection
