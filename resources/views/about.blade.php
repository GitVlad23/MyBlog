@extends('layouts.app')

@section('title') About me @endsection


@section('content')

    <div style=".center; height: 50em; position: relative;">
        <div class="d-inline-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="
        margin: 0;
        position: absolute;
        top: 35%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        width: 1000px;">

            <div style="border-right: 3px solid darkorange; width: 700px;">
                <h1 class="my-0 mr-md-auto font-weight-normal" style="font-size: 75px;">The page about me</h1><br>
                <p style="font-size: 25px; width: 500px;">I'm so glad you're interesed in my life!</p>
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
            margin-top: -350px;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            width: 1000px;">
            <p>Does what I have to say? <br>
                Well, as you know I'm web-developer 17 years old.
                Site-development studying cost me about half of one year before I started developing this site.
                Also, as you can see, I learn English hard and I like it! <br>
                Back to development, I've chosen PHP as my first real programming-language. PHP, SQL, Bash and many others languages I still learn.
                Also I've planned to learn JavaScript, GoLang, Python and Ruby. As a main framework I'm using Laravel - it's just my first framework.</p>
        </div>
    </div>

@endsection
