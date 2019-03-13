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
    <div class="col-lg-10 p-5">
        <div class="col-sm-6"></div>
        <h2>Janji</h2>
        <table class="table table-striped table-bordered table-responsive" id="tbljanji" width="100%">
            <thead>
            <tr>
                <th scope="col">No</th>
                {{--<th scope="col">Kode Janji</th>--}}
                {{--<th scope="col">Kode Antrian</th>--}}
                <th scope="col">No Telp</th>
                <th scope="col">Email</th>
                <th scope="col">Pasien</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Dokter</th>
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
    