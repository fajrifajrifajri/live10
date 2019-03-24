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
            <h2>Nama Dokter</h2>
            <form method="post" data-action="dokter" action="http://localhost:8000/admin/action/dokter" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$datadokter['id']}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" name="namadokter" id="namadokter" placeholder="Nama dokter" value="{{$datadokter['nama_dokter']}}">
                </div>
                <div class="form-group">
                    <select name="spesialis" id="spesialis" class="form-control">
                        @foreach($spesialis as $data_specialist)
                            <option value="{{$data_specialist['id']}}" @if($datadokter['spesialis'] == $data_specialist['id']) selected @endif>{{$data_specialist['specialist']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="file" name="foto" id="foto" class="form-control-file">
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
    