@extends('layouts.app')

@section('title') Main page @endsection


@section('content')

    <?php $user = auth()->user(); ?>

    <div style=".center; height: 50em; position: relative;">
        <div class="d-inline-flex flex-column flex-md-row align-items-center p-3 px-md-4" style="
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        width: 1000px;">

            <div style="border-right: 3px solid darkorange;">
                <h1 class="my-0 mr-md-auto font-weight-normal" style="font-size: 75px;">Main page</h1><br>
                @auth("web")
                    <p style="font-size: 25px; width: 500px;">Hey, {{ $user->name; }}, you're on my website! My name is Vlad and i'm backend-developer.</p>
                @endauth

                @guest("web")
                    <p style="font-size: 25px; width: 500px;">Hi, you're on my website! My name is Vlad and i'm backend-developer.</p>
                @endguest
            </div>

            <div class="d-flex flex-md-row" style="width: 500px;">
                <nav class="mt-2 mt-md-0 ms-md-auto" style="font-size: 35px;">
                    <a href="/about" class="p-2 mt-md-2 text-orange text-decoration-none">About me</a><br>
                    <a href="/stack" class="p-2 mt-md-2 text-orange text-decoration-none">What I use in development</a><br>
                    <a href="/contact" class="p-2 mt-md-2 text-orange text-decoration-none">Contact</a>
                </nav>
            </div>

        </div>
    <div>

@endsection
