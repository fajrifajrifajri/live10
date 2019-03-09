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
<nav>
    <img src="{{ asset('img/Borobudur logo.png') }}" alt="borobudur logo">
</nav>
<main class="row">
    <div class="col-lg-2">
        <div id="profile">
            <img src="{{ asset('img/Female doctor.jpg') }}" class="rounded-circle dokter-img" alt="dokter">
            <p>{{Session::get('user')}}</p>
        </div>
        @include('pages.dashboard.menu')
    </div>
    <div class="col-lg-10 p-4">
        <div class="col-sm-6"></div>
        <table class="table table-striped text-center table-responsive" id="tbljanji">
            <thead>
            <tr>
                <th scope="col">No</th>
                {{--<th scope="col">Kode Janji</th>--}}
                {{--<th scope="col">Kode Antrian</th>--}}
                <th scope="col">No Telp</th>
                <th scope="col">Email</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Tanggal Lahir Pasien</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Harga</th>
                <th scope="col">Tanggal Bertemu</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
        </table>
    </div>
</main>
@include('pages.dashboard.footer')
@include('layouts.scripts')
</body>
</html>
    