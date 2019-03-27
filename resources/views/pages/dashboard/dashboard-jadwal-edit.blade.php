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
            <form method="post" data-action="jadwal">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$data_dokter['id']}}">
                <div class="form-group">
                    <label for="hari">Pilih Hari :</label>
                    <select class="form-control" name="hari" id="hari">
                        <option value=""></option>
                        <option value="1" @if($data_dokter['hari'] == 1) selected @endif>Senin</option>
                        <option value="2" @if($data_dokter['hari'] == 2) selected @endif>Selasa</option>
                        <option value="3" @if($data_dokter['hari'] == 3) selected @endif>Rabu</option>
                        <option value="4" @if($data_dokter['hari'] == 4) selected @endif>Kamis</option>
                        <option value="5" @if($data_dokter['hari'] == 5) selected @endif>Jum'at</option>
                        <option value="6" @if($data_dokter['hari'] == 6) selected @endif>Sabtu</option>
                        <option value="7" @if($data_dokter['hari'] == 7) selected @endif>Minggu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jamawal">Pilih Jam Awal :</label>
                    <input type="time" class="form-control" name="jamawal" id="jamawal" placeholder="Jam Awal" value="{{$data_dokter['jamawal']}}">
                </div>
                <div class="form-group">
                    <label for="jamakhir">Pilih Jam Akhir :</label>
                    <input type="time" class="form-control" name="jamakhir" id="jamakhir" placeholder="Jam Akhir" value="{{$data_dokter['jamakhir']}}">
                </div>
                <div class="form-group">
                    <label for="namadokter">Pilih Nama Dokter :</label>
                    <div class="input-group">
                        <div class="input-group-text">Dr. </div>
                        <input type="text" class="form-control" name="namadokter" id="namadokter" placeholder="Nama Dokter" value="{{$data_dokter['nama']}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="specialist_dokter">Pilih Specialist Dokter</label>
                    <select name="specialist_dokter" id="specialist_dokter" class="form-control">
                        <option value=""></option>
                        @foreach($tipe_dokter as $data_tipe_dokter)
                            <option value="{{$data_tipe_dokter['id']}}" @if($data_dokter['specialist'] == $data_tipe_dokter['id']) selected @endif>{{$data_tipe_dokter['specialist']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="foto_dokter"> Masukkan Foto Dokter </label>
                    <input type="file" name="foto_dokter" id="foto_dokter" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="UBAH">
            </form>
        </div>
    </div>
</main>
@include('pages.dashboard.footer')
@include('layouts.scripts')
</body>
</html>
    