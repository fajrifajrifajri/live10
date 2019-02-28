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
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nomor telpon anda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email anda">
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama lengkap pasien">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal lahir pasien">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama dokter spesialis">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tanggal bertemu">
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary btn-lg btn-block">SELANJUTNYA</button>
                </div>
            </div>
        </div>
    </div>
@endsection