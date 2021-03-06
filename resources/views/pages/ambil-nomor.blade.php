@extends('layouts.app')

@section('title')
    Ambil Nomor Antrian | {{ config ('app.name', 'RS Borobudur')}}
@endsection

@section('content')
    <div id="nomor">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Ambil Nomor Antrian</h2>
                    <p>
                        Untuk ambil nomor antrian secara online, dan selanjutnya akan<br> diproses di tempat ketika nomor 
                        telah dipanggil. Harap datang<br> sebelum nomor dipanggil dan ambil poli yang sesuai dengan<br> 
                        kebutuhan pasien.
                    </p>
        
                    <h3>Pilih Poli</h3>
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Umum</a>
                            <a class="dropdown-item" href="#">Gigi</a>
                            <a class="dropdown-item" href="#">Khusus</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg btn-block">SELANJUTNYA</button>
                </div>
            </div>
        </div>
    </div>
@endsection