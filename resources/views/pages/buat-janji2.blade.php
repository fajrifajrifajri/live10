@extends('layouts.app')

@section('title')
    Buat Janji | {{ config ('app.name', 'RS Borobudur')}}
@endsection

@section('content')
    <div id="janji">
        <div class="container">
            <h1>Buat Janji Dokter</h1>
            <p>
                Untuk booking jadwal konsultasi dengan dokter pilihan, silahkan<br> isi formulir di bawah ini.
                Rumah Sakit Borobudur akan menghubungi<br> Anda apabila jadwal telah terkonfirmasi.
            </p>
            <div class="row">
                <div class="col-lg-6">
                    <form  method="post" id="fbuatjanji">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="notelp" id="notelp" placeholder="Nomor telpon anda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email anda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Nama lengkap pasien">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="tgllahir_pasien" id="tgllahir_pasien" placeholder="Tanggal lahir pasien">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="nama_dokter" id="nama_dokter" title="Nama dokter spesialis">
                                <option value="">- Pilih Dokter -</option>
                                @foreach($data as $dokter)
                                    <option value="{{$dokter['id']}}">{{$dokter['nama']}} - {{$dokter['keahlian']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="tgl_bertemu" id="tgl_bertemu" placeholder="Tanggal bertemu">
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="SELANJUTNYA">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection