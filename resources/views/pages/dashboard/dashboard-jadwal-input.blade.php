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
            <div class="col-sm-6">
                <h2>Jadwal Mingguan</h2>
                <form method="post" data-action="jadwal" id="dashboardinputdokter">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="hari">Pilih Hari :</label>
                        <select class="form-control" name="hari" id="hari">
                            <option value=""></option>
                            <option value="1">Senin</option>
                            <option value="2">Selasa</option>
                            <option value="3">Rabu</option>
                            <option value="4">Kamis</option>
                            <option value="5">Jum'at</option>
                            <option value="6">Sabtu</option>
                            <option value="7">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jamawal">Pilih Jam Awal :</label>
                        <input type="time" class="form-control" name="jamawal" id="jamawal" placeholder="Jam Awal">
                    </div>
                    <div class="form-group">
                        <label for="jamakhir">Pilih Jam Akhir :</label>
                        <input type="time" class="form-control" name="jamakhir" id="jamakhir" placeholder="Jam Akhir">
                    </div>
                    <div class="form-group">
                        <label for="namadokter">Pilih Nama Dokter :</label>
                        <div class="input-group">
                            <div class="input-group-text">Dr. </div>
                            <input type="text" class="form-control" name="namadokter" id="namadokter" placeholder="Nama Dokter">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="specialist_dokter">Pilih Specialist Dokter</label>
                        <select name="specialist_dokter" id="specialist_dokter" class="form-control">
                            <option value=""></option>
                            @foreach($tipe_dokter as $data_tipe_dokter)
                                <option value="{{$data_tipe_dokter['id']}}">{{$data_tipe_dokter['specialist']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="foto_dokter">Masukkan Foto Dokter</label>
                        <input type="file" name="foto_dokter" id="foto_dokter" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="MASUKKAN">
                </form>
            </div>
        </div>
</main>
@include('pages.dashboard.footer')
@include('layouts.scripts')
</body>
</html>
    