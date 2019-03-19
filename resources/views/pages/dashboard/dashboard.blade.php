<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard | {{ config ('app.name', 'RS Borobudur')}}</title>
    @include('layouts.css')
</head>
<body id="dashboard">
@include('pages.dashboard.navbar')
<main class="row">
    <div class="col-lg-2">
        @include('pages.dashboard.menu')
    </div>
    <div id="front" class="col-lg-10 p-4">
        <div class="row">
            <div class="col-lg-3">
                <img src="{{ asset('img/Borobudur logo full.png') }}" alt="borobudur logo">
            </div>
            <div class="col-lg-9 position-relative">
                <div class="position-relative">
                    <h5>Alamat</h5>
                    <span>rs. borobudur</span><br>
                    <span>jl. ampera no.37 pontianak</span>
                </div>
            </div>
        </div>
        <hr>
        <h2>Number of visitor</h2>
        <div id="chartdiv"></div>
    </div>
</main>
@include('pages.dashboard.footer')
@include('layouts.scripts')
</body>
</html>
    