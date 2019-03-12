@extends('layouts.app')

@section('title')
    Buat Janji | {{ config ('app.name', 'RS Borobudur')}}
@endsection

@section('content')
    <div id="janji">
        <div class="container">
            <h1>Buat Janji Dokter</h1>
            <p>
                Pilih dokter sesuai jadwal kerja.
            </p>
            <div class="row">
                <div class="col-lg-12">
                    <form  method="post" id="fbuatjanji">
                        {{csrf_field()}}
                        <div class="form-group">
                            <select class="form-control" name="nama_dokter" id="nama_dokter" title="Nama dokter spesialis">
                                <option value="">- Pilih Dokter -</option>
                                @foreach($data as $dokter)
                                    <option value="{{$dokter['id']}}">{{$dokter['nama']}} - {{$dokter['keahlian']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <table class="table table-striped text-center table-responsive-lg" id="tbljanjijadwal">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">*</th>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">Kamis</th>
                                <th scope="col">Jumat</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col">Minggu</th>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection